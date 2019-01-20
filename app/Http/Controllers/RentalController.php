<?php namespace App\Http\Controllers;

use App\Rental;
use App\Movie;
use Illuminate\Http\Request;
use Auth;

class RentalController extends Controller
{
    public function rent(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['disc_type'] = $data['dvd'] ? 'DVD' : 'BluRay';
        $data['rent_date'] = date('Y-m-d H:i:s');
        
        $movie = Movie::find($data['movie_id']);

        $rental = new Rental($data);
        if ($rental->save()) {
            $message = 'Thank you for renting ' .  $movie->title . '. Enjoy the show!';
            $this->setMessage($message);
            return redirect('/');
        } else {
            $this->setMessage('Oops... Movie was not rented.  Please try again', 'error');
            return redirect('/');
        }
    }
    
    public function returnMovie()
    {
        // Logged in user
        $user_id = Auth::user()->id;
       
        $rentals = Rental::where('user_id', $user_id)
            ->whereNull('return_date')
            ->with('movie')
            ->get()
            ->toArray();
        
        return view('rentals.return')->with('rentals', $rentals);
    }
    
    /**
     * Return the movie by setting the return_date
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function processReturn(Request $request)
    {
        $data = $request->all();
       
        $rental = Rental::find($data['id']);
        $rental->return_date = date('Y-m-d H:i:s');
       
        if ($rental->save()) {
    
            $movie = Movie::find($rental->movie->id);
            
            $message = 'Thank you for returning ' .  $movie->title . '. We hope you enjoyed the show!';
            $this->setMessage($message);
            return redirect()->route('listing');
        } else {
            $this->setMessage('Oops... Movie was not rented.  Please try again', 'error');
            return redirect()->route('return');
        }
    }
    
    /**
     * Show list of movies that were rented
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function rentalHistory()
    {
        // Logged in user
        $user_id = Auth::user()->id;
        
        $rentals = Rental::where('user_id', $user_id)
            ->whereNotNull('return_date')
            ->with('movie')
            ->get()
            ->toArray();
        
        return view('rentals.history')->with('rentals', $rentals);
    }
}
