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