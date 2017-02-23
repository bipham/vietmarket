<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Auth;

class AuthController extends Controller
{
    public function getLogin() {
        return view('auth.login');
    }

    public function authLogin(Request $request) {
    
    	$rules = [
    		'email' => 'required|email',
    		'password' => 'required|min:8'
    	];

    	$messages = [
    		'email.required' => 'Email là trường bắt buộc',
    		'email.email' => 'Email phải đúng định dạng',
    		'password.required' => 'Password là trường bắt buộc',
    		'password.min' => 'Password phải chứa ít nhất 8 ký tự'
    	];

    	$validator = Validator::make($request->all(), $rules, $messages);

    	if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	}
    	else {
    		$email = $request->input('email');
    		$password = $request->input('password');

    		if (Auth::attempt(['email' => $email, 'password' => $password])) {
    			dd('dang nhap thanh cong');
    		}
    		else {
    			dd('dang nhap that bai');
    		}
    		
    	}
    }
}
