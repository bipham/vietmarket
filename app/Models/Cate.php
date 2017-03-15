<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    //
    protected $table = 'cates';

    protected $fillable = ['name', 'alias', 'order', 'parent_id'];

    public $timestamps = false;

    public function stock() {
    	return $this->hasMany('App\Models\Stock')
    }

    public function order() {
    	return $this->hasMany('App\Models\Order')
    }
}
