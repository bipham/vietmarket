<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $table = 'reviews';

    protected $fillable = ['rating_user_id', 'rated_user_id', 'rating', 'comment'];

    public $timestamps = false;

    public function ratedUser() {
    	return $this->belongToMany('App\Models\User', 'rated_user_id', 'id');
    }

    public function ratingUser() {
    	return $this->belongToMany('App\Models\User', 'rating_user_id', 'id');
    }
}
