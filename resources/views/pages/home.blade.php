/************************
Created by: Nguyen Le Duy
Date: 17/02/2017
************************/

@extends('layouts.master')

@section('content')
	@include('utils.advertise')
	@include('utils.searchForm')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2" style="padding: 0;">
				<div class="btn-group">
					<button id="btnStock" type="button" onclick="" class="btn btn-primary">Stock</button>
					<button id="btnOrder" type="button" onclick="" class="btn btn-primary">Order</button>
				</div>
				<h2>Categories</h2>
				<ul class="nav nav-pills nav-stacked">
					<li><a>Computer</a></li>
					<li><a>CellPhone</a></li>
					<li><a>Book</a></li>
				</ul>
			</div>
			<div class="col-md-10">

				<!--Updated by: Duy
				Date: 23/02/2017
				Chỉnh lại bảng chứa dữ liệu.
				-->
				@for($i = 0; $i < 10; $i++)
				@include('utils.contentTable')
				@endfors

				<ul class="pagination">
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
				</ul>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection