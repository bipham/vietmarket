<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';

    protected $fillable = ['name', 'priceMax', 'priceMin', 'status', 'description', 'place', 'img', 'user_id', 'cate_id', 'finished'];

    public $timestamps = false;

    public function user() {
    	return $this->belongTo('App\Models\User');
    }

    public function cate() {
    	return $this->belongTo('App\Models\Cate');
    }
}
