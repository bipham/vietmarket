<!--Created by: Nguyen Le Duy
Date: 17/02/2017
-->

<div class="container-fluid text-center search mt-2">
  <form class="form-inline">
	<div class="form-group">
	  <input type="text" class="form-control" id="search-keyword" placeholder="Search Keywords"/>
	</div>
	
	<div class="form-group">
	  <select class="form-control" id="search-category">
		<option disabled selected>Categories</option>
		<option disabled>──────────</option>
		<option value="computer">Computer</option>
		<option value="cellphone">CellPhone</option>
		<option value="book">Book</option>
	  </select>
	</div>
		
	<div class="form-group">
	  <select class="form-control" id="search-status">
		<option disabled selected>Status</option>
		<option disabled>──────────</option>
		<option value="new">New</option>
		<option value="secondhand">Second-hand</option>
	  </select>
	</div>
	
    <div class="form-group">
	  <select class="form-control" id="search-rate">
		<option disabled selected>Rate</option>
		<option disabled>──────</option>
		<option value="1">1 star</option>
		<option value="2">2 star</option>
		<option value="3">3 star</option>
		<option value="4">4 star</option>
		<option value="5">5 star</option>
	  </select>
	</div>
	
	<div class="form-group">
	  <select class="form-control" id="search-city">
		<option disabled selected>City</option>
		<option disabled>──────────</option>
		<option value="hcm">Ho Chi Minh</option>
		<option value="hn">Ha Noi</option>
		<option value="hp">Hai Phong</option>
		<option value="dn">Dong Nai</option>
		<option value="bd">Binh Duong</option>
	  </select>
	</div>
	
	<div class="form-group">
	  <input type="submit" class="form-control" id="search-submit" value="Search"/>
	</div>
  </form>
</div>