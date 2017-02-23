@extends('account.master')
@section('content')
<div class="col-md-4">
	<form role="form">

		<h1>Create a new account</h1>
		<h3>It's free and always will be.</h3>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Fullname" id="name">
		</div>
		<div class="form-group">
			<input type="email" class="form-control" placeholder="Email" id="email">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="Password" id="password">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="ReEnter Password" id="password">
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox"> I agree to the <em>Terms of Use</em> and <em>Privacy Policy</em>
			</label>
		</div>
		<CENTER><button type="submit" class="btn btn-lg btn-account">
			Create Account
		</button></CENTER>

		<div>
			<center>
				Already have an Account?
				<a style="color: #000; font-weight: bold;" href="login.html">Log In</a>
			</center>
		</div>
	</form>
</div>
@endsection()