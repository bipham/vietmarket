<!--
Created by: Nguyen Le Duy
Date: 17/02/2017
-->

@extends('layouts.master')

@section('content')
	@include('utils.advertise')
	@include('utils.searchForm')
	<div class="container-fluid">
		<div class="row mt-2">
			<div class="col-lg-2">
				<div class="btn-group" role="group">
					<button id="btnStock" type="button" onclick="" class="btn btn-primary">Stock</button>
					<button id="btnOrder" type="button" onclick="" class="btn btn-primary">Order</button>
				</div>

				<button type="button" class="btn btn-secondary btn-lg btn-block" disabled>Categories</button>
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link" href="#">Computer</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">CellPhone</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Book</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-10">

				<!--Updated by: Duy
				Date: 23/02/2017
				Chỉnh lại bảng chứa dữ liệu.
				-->
				@for($i = 0; $i < 10; $i++)
				@include('utils.contentTable')
				@endfor

				<nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection