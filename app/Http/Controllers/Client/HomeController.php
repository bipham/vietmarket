<?php

namespace App\Http\Controllers\Client;

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

    public function upload()
    {
        return view('client.upload');
    }
}
