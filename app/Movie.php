<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'rating', 'length', 'onDVD', 'onBluRay', 'description'
    ];

    public function renters()
    {
        return $this->belongsToMany('App\Movie', 'rentals');
    }
}
