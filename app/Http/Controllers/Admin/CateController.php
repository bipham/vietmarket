<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\CateRequest;
use App\Models\Cate;

class CateController extends Controller
{
    public function getList () {
    	return view('admin.cate.list');
    }
    public function getAdd () {
    	return view('admin.cate.add');
    }

    public function postAdd (CateRequest $request) {
    	$cate = new Cate;
    	$cate->name = $request->txtCateName;
    	$cate->alias = $request->txtCateName;
    	$cate->order = $request->txtOrder;
    	$cate->parent_id = 1;
    	$cate->save();
    	return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_mesage'=>'Thành công thêm Category']);
    }

}
