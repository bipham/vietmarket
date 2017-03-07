@extends('account.master')
@section('content')
<div class="col-md-4">
	<form role="form">

		<h1>Đăng nhập vào VietMarketPlace</h1>
		<h3>Kho hàng Trực tuyến Khổng lồ</h3>
		<div class="form-group">
			<input type="email" class="form-control" placeholder="Địa chỉ Email" id="email">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="Mật khẩu" id="password">
		</div>
		<div>
			<a style="color: #000;" href="forgotten.html"> <em>* Quên mật khẩu ?</em></a>
		</div>
		<div>
			<CENTER>
				<button type="submit" class="btn btn-lg btn-account">
					Đăng nhập
				</button>
				Hoặc
			</CENTER>
		</div>
		<center><a style="color: #000;" href="register.html"> <em>Tạo tài khoản mới</em></a></center>
	</form>
</div>
@endsection()