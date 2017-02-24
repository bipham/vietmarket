<!--
Created by: Nguyen Le Duy
Date: 17/02/2017
-->

@extends('layouts.master')

@section('content')
	@include('utils.advertise')
	@include('utils.searchForm')
	<div class="container-fluid">
		<!--Updated by: Duy
		Date: 23/02/2017
		Chỉnh lại bảng chứa dữ liệu.
		-->
		@for($i = 0; $i < 10; $i++)
		@include('utils.contentTable')
		@endfor
		<div class="btn-group">
				<button id="btnStock" type="button" onclick="" class="btn btn-primary">Stock</button>
				<button id="btnOrder" type="button" onclick="" class="btn btn-primary">Order</button>
				<button id="btnFavorite" type="button" onclick="" class="btn btn-primary">Favorite</button>
			</div>
		</div>
	</div><br>
@endsection

@section('scripts')

@endsection