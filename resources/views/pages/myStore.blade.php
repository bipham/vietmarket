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
			<div class="table-responsive">
				<table class="table table-hover">
				<thead>
					<tr class="info">
						<th>Image</th>
						<th>Item Name</th>
						<th>Status</th>
						<th>Place</th>
						<th>Rate</th>
						<th>Time left</th>
						<th>Price(Dong)</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th></th>
						<th>E-Commerce</th>
						<th>New</th>
						<th>HCM City</th>
						<th>5</th>
						<th>3 days</th>
						<th>100.000</th>
					</tr>
					<tr>
						<th></th>
						<th>E-Commerce</th>
						<th>New</th>
						<th>HCM City</th>
						<th>5</th>
						<th>3 days</th>
						<th>100.000</th>
					</tr>
					<tr>
						<th></th>
						<th>E-Commerce</th>
						<th>New</th>
						<th>HCM City</th>
						<th>5</th>
						<th>3 days</th>
						<th>100.000</th>
					</tr>
					<tr>
						<th></th>
						<th>E-Commerce</th>
						<th>New</th>
						<th>HCM City</th>
						<th>5</th>
						<th>3 days</th>
						<th>100.000</th>
					</tr>
				</tbody>
				</table>
			</div>
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