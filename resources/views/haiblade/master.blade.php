<!--***********************
Truong Trieu Hai
2/03/2017
***************************-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>VietMarketPlace</title>

	<meta name="description" content="Login Page">
	<meta name="author" content="ChouTruong">

	<link href="{{url('public/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{url('public/css/bootstrap-theme.min.css')}}" rel="stylesheet">
	<link href="{{url('public/css/accountstyle.css')}}" rel="stylesheet">
</head>

<header id="header" class="">
	<div class="row">
			<div class="">
				<nav class="navbar navbar-account" role="navigation">
					<div class="navbar-header">

						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">VietMarketPlace</a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<button type="" class="btn-lang">Language <span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li>
										<a href="#">English</a>
									</li>
									<li>
										<a href="#">Vietnamese</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>

				</nav>
			</div>
		</div>
</header><!-- /header -->

<body>

	<!-- content -->
	@yield('content')
	<!-- content -->
	
	<script src="{{url('public/js/jquery.min.js')}}"></script>
	<script src="{{url('public/js/bootstrap.min.js')}}"></script>
	<script src="{{url('public/js/starscripts.js')}}"></script>
</body>

<footer class="navbar-fixed-bottom panel-footer navbar-account">
	<div class="row text-center">
		<tr>
			<td> <a href="#">Home</a></td>
			<span>|</span>
			<td> <a href="#">Privacy</a></td>
			<span>|</span>
			<td> <a href="#">Terms</a></td>
			<span>|</span>
			<td> <a href="#">About</a></td>
		</tr>
	</div>
</footer>

</html>