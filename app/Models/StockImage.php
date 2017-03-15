<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockImage extends Model
{
    //
    protected $table = 'stockimages';

    protected $fillable = ['image', 'stock_id'];

    public $timestamps = false;

    public function stock() {
    	return $this->belongTo('App\Models\Stock');
    }
}
