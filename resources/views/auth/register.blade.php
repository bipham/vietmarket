@extends('layouts.master')
@section('meta-title', 'Đăng ký')
@section('top-information')
@stop
@section('content')
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-4 offset-md-4">
               <div class="card">
                   <h3 class="card-header">Đăng ký</h3>
                   <div class="card-block">
                       <form action="{{url('register')}}" method="POST" role="form" id="form-register">
                           @if($errors->has('errorRegister'))
                               <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                                   {{$errors->first('errorRegister')}}
                               </div>
                           @endif
                           <div class="form-group">
                               <label for="user_name">Tên đăng nhập</label>
                               <input type="text" class="form-control" id="user_name" placeholder="Tên đăng nhập" name="user_name">
                               @if($errors->has('user_name'))
                                   <p style="color: red">{{$errors->first('user_name')}}</p>
                               @endif
                           </div>

                           <div class="form-group">
                               <label for="email">Email</label>
                               <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                               @if($errors->has('email'))
                                   <p style="color: red">{{$errors->first('email')}}</p>
                               @endif
                           </div>

                           <div class="form-group">
                               <label for="password">Mật khẩu</label>
                               <input type="password" class="form-control" id="password" placeholder="Mật khẩu" name="password">
                               @if($errors->has('password'))
                                   <p style="color: red">{{$errors->first('password')}}</p>
                               @endif
                           </div>

                           <div class="form-group">
                               <label for="confirmPassword">Nhập lại mật khẩu</label>
                               <input type="password" class="form-control" id="confirmPassword" placeholder="Nhập lại mật khẩu" name="confirmPassword">
                               @if($errors->has('confirmPassword'))
                                   <p style="color: red">{{$errors->first('confirmPassword')}}</p>
                               @endif
                           </div>


                           <!-- <div class="form-group">
                               <input type="checkbox" name="remember-token"> Ghi nhớ đăng nhập
                           </div> -->

                           {!! csrf_field() !!}
                           <button type="submit" class="btn btn-primary">Đăng ký</button>
                       </form>
                   </div>
               </div>
                <div>
                    <a style="color: #000;" href="#"> <em>* Bạn đã có tài khoản, đăng nhập?</em></a>
                </div>
            </div>
        </div>
    </div>

@stop
@section('scripts')
    <script src="{{asset('public/js/client/myscripts.js')}}"></script>
@stop