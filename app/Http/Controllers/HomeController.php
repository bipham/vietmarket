<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function showHome() 
    {
        return view('pages.home');
    }

    public function showMyStore()
    {
        return view('pages.myStore');
    }

    public function showOrderDetail()
    {
        return view('pages.listOrder');
    }
}
