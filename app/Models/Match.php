<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    //
    protected $table = 'matchs';

    protected $fillable = ['stock_id', 'order_id'];

    public $timestamps = false;

    public function stock() {
    	return $this->belongToMany('App\Models\Stock', 'stock_id', 'id');
    }

    public function order() {
    	return $this->belongToMany('App\Models\Order', 'order_id', 'id');
    }
}
