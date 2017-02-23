/************************
Created by: Nguyen Le Duy
Date: 21/02/2017
************************/

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
				<div class="well">
					<img src="#"/>
				</div>
				<div class="well">
					<h5>Thương hiệu: </h5>
					<h5>Tình trạng: </h5>
					<h5>Giá: </h5>
					<h5>Thời gian: </h5>
				</div>
				<div class="well">
					<h5>Miêu tả: </h5>
				</div>
				<div class="well">
					<h5>Nhận xét, đánh giá: </h5>
				</div>
			</div>
			<div class="col-md-3">
				<div class="well">
					@include('utils.userProfile')
					<div class="btn-group">
						<button id="btnFav" class="btn btn-primary" type="button" onclick="">Thích</button>
						<button id="btnReport" class="btn btn-block btn-lg">Báo cáo tin ảo</button>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection