<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateMovieValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Auth::user();
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'max:64'],
            'rating' => ['required', 'max:16'],
            'length' => ['required', 'numeric'],
            'description' => ['max:1024'],
            'onDVD' => ['required', 'numeric'],
            'onBluRay' => ['required', 'numeric'],
        ];
    }
    
}
