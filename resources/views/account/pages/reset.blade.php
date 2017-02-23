@extends('account.master')
@section('content')
<div class="col-md-4">
	<form role="form">
		<h3>Reset Password</h3>
		<div class="form-group">
			<input type="email" class="form-control" placeholder="Email Address" id="email">
		</div>
		<div>
			<CENTER>
				<button type="submit" class="btn btn-lg btn-account">
					Submit
				</button>
			</CENTER>
		</div>
		<div>
			<center>
				Already have an Account?
				<a style="color: #000; font-weight: bold;" href="login.html">Log In</a>
			</center>
		</div>
	</form>
</div>
@endsection()