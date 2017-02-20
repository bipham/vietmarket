@extends('layouts.master')

@section('content')

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<ol class="list-inline" id="path">
					<li>
						<a href="{{route('Home')}}">Trang Chủ</a>
					</li>
					<li>
						/
						<a href="#"> Điện thoại</a>
					</li>
					<li>
						/ Iphone7
					</li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-7">
				a
			</div>
			<div class="col-md-3">
				@include('utils.userProfile')
				<div class="btn-group">
					<button id="btnFav" class="btn btn-primary" type="button" onclick="">Thích</button>
					<button id="btnReport" class="btn btn-block btn-lg">Báo cáo tin ảo</button>
				</div>
				
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection