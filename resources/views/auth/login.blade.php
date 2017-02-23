@extends('auth.master')
@section('meta-title', 'Đăng nhập')
@section('top-information')
@stop
@section('content')
<div class="container-fluid">
	<div class="row align-items-center">
		<div class="col-md-3 offset-md-4">
			<form action="{{url('login')}}" method="POST" role="form">
				<legend>Đăng nhập</legend>
				
				<div class="form-group">
					<label for="">Email</label>
					<input type="text" class="form-control" id="email" placeholder="Email" name="email">
					@if($errors->has('email'))
					<p style="color: red">{{$errors->first('email')}}</p>
					@endif
				</div>
				
				<div class="form-group">
					<label for="">Mật khẩu</label>
					<input type="Password" class="form-control" id="password" placeholder="Mật khẩu" name="password">
					@if($errors->has('password'))
					<p style="color: red">{{$errors->first('password')}}</p>
					@endif
				</div>
				{!! csrf_field() !!}
				<button type="submit" class="btn btn-primary">Đăng nhập</button>
			</form>
		</div>
	</div>
</div>
	
@stop
@section(' scripts')
@stop

