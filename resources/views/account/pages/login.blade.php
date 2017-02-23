@extends('account.master')
@section('content')
<div class="col-md-4">
	<form role="form">

		<h1>Login VietMarketPlace</h1>
		<h3>Biggest Storage Online</h3>
		<div class="form-group">
			<input type="email" class="form-control" placeholder="Email" id="email">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="Password" id="password">
		</div>
		<div>
			<a style="color: #000;" href="forgotten.html"> <em>* Forgot Password ?</em></a>
		</div>
		<div>
			<CENTER>
				<button type="submit" class="btn btn-lg btn-account">
					Log In
				</button>
				or
			</CENTER>
		</div>
		<center><a style="color: #000;" href="register.html"> <em>Create New Account</em></a></center>
	</form>
</div>
@endsection()