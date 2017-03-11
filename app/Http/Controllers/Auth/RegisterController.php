<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * @var User
     */
    protected $_user;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->_user = new User();
    }

    public function getRegister() {
        return view('auth.register');
    }

    public function authRegister(Request $request) {
        $rules = [
            'user_name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|between:6,32',
            'confirmPassword' => 'required|same:password'
        ];

        $messages = [
            'user_name.required' => 'Bạn chưa nhập tên tài khoản',
            'user_name.min' => 'Tên tài khoản phải có ít nhất 3 ký tự',
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Email phải đúng định dạng',
            'email.unique' => 'Email này đã được đăng ký',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
            'confirmPassword.required' => 'Bạn chưa nhập lại mật khẩu',
            'confirmPassword.same' => 'Mật khẩu nhập lại chưa khớp'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else {
            $data = array();
            $data['user_name'] = $request->input('user_name');
            $data['email'] = $request->input('email');
            $data['password'] = hash::make($request->input('password'));

            $user = $this->_user->createUser($data);

            if ($user) {
//                $mess = new MessageBag(['successRegister' => 'Chúc mừng bạn đã đăng ký thành công']);
                return redirect('login')->with(['successRegister' => 'Chúc mừng bạn đã đăng ký thành công!']);
            }
        }

    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
