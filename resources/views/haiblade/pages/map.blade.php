@extends('haiblade.master')
@section('content')
<div class="container-fluid">

	<div class="row well">
		<div class="col-md-12">
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<input type="button" name="cate" value="Book" class="dropdown-toggle btn btn-success " data-toggle="dropdown"> <span class="glyphicon glyphicon-menu-right" aria-hidden="true"> </span>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Book</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Clothing</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Computer</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Cellphones</a>
							</li>
						</ul>
					</li>

					<li class="dropdown">
						<input type="button" name="cate" value="Stock" class="dropdown-toggle btn btn-warning" data-toggle="dropdown"> <span class="glyphicon glyphicon-menu-right" aria-hidden="true"> </span>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Stock</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Order</a>
							</li>
						</ul>
					</li>

					<li class="dropdown">
						<input type="button" name="cate" value="New" class="dropdown-toggle btn btn-danger" data-toggle="dropdown"> <span class="glyphicon glyphicon-menu-right" aria-hidden="true"> </span>
						<ul class="dropdown-menu">
							<li>
								<a href="#">New</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Old</a>
							</li>
						</ul>
					</li>

					<li class="dropdown">
						<input type="button" name="cate" value="Submit" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">
					</li>

				</ul>
			</div>
		</div>

	</div>
</div>
<!-- MAP -->
<div style='overflow:hidden;height:550px;width:auto; padding-top: auto;'>
	<div id='gmap_canvas' style='height:600px;width:auto;'></div>
	<div>
		<small><a href="http://embedgooglemaps.com">embed google maps</a></small>
	</div>
	<div>
		<small>
			<a href="http://phplinkdir.com/">free high pr web directory</a>
		</small>
	</div>
	<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
</div>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>

<script type='text/javascript'>
	function init_map() {
		var myOptions = {zoom:16,center:new google.maps.LatLng(10.790737,106.65612799999997),mapTypeId: google.maps.MapTypeId.ROADMAP};
		map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
		marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(10.790737,106.65612799999997)});
		infowindow = new google.maps.InfoWindow({content:'<strong>My Map</strong><br>1025 Cach Mang Thang 8, Tan Binh,Ho Chi Minh City<br>'});
		google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
		infowindow.open(map,marker);
	}
	google.maps.event.addDomListener(window, 'load', init_map);
</script>
<!-- MAP -->
@endsection()