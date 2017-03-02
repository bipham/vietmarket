@extends('haiblade.master')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li>
						<a href="#">My Store</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Stock</a> <span class="divider">/</span>
					</li>
					<li class="active">
						Upload
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="well">
					<h3 class="text-left">
						Item Specifications
					</h3>
					<hr>

					<form role="form">
						<div class="form-group">

							<label>
								Name of the Item*
							</label>
							<input type="text" name="itemname" class="form-control" placeholder="Enter the item name here" required>
						</div>
						<div class="form-group">
							<label>
								Item Description*
							</label>
							<textarea name="discription" rows="5" cols="50" class="form-control" placeholder="Here is the Description" style="resize: none;"></textarea>
						</div>
						<div class="form-group">

							<label>
								Price *
							</label>
							<input type="number" name="price" class="form-control" placeholder="Enter the item price here (VND)" required>
						</div>
						<div class="form-group">

							<label>
								Address *
							</label>
							<input type="text" name="address" class="form-control" placeholder="Enter address" required>
						</div>

						<hr>

						<div class="col-md-6">
							<div class="form-group">
								<label>
									Select Category *
								</label>
								<select class="form-control">
									<option selected>Book</option>
									<option>Cloting</option>
									<option>Computer</option>
									<option>Cellphones</option>
								</select>
							</div>
							<div class="form-group">
								<label>
									Select Status *
								</label>
								<select class="form-control">
									<option selected>New</option>
									<option>LikeNew</option>
									<option>Old</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>
									City/Province *
								</label>
								<select class="form-control">
									<option selected>Ho Chi Minh</option>
								</select>
							</div>
							<div class="form-group">
								<label>
									District *
								</label>
								<select class="form-control">
									<option selected>1</option>
									<option>3</option>
									<option>5</option>
									<option>10</option>
									<option>Tan Binh</option>
								</select>
							</div>
						</div>
						<br>

						<div class="form-group">

							<label>
								Upload image
							</label>
							<input type="file" name="image">
							<input type="file" name="image">
							<input type="file" name="image">
							<p class="help-block">
								Upload maximum 5 Pictures
							</p>
						</div>
						<hr>
						<div class="checkbox">

							<label>
								<input type="checkbox" required> I already read the term
							</label>
						</div> 
						
						<button type="submit" class="btn btn-block btn-pf">
							Submit
						</button>
					</form>
					
				</div>
			</div>
			<div class="col-md-4">
				<div class="well">
					<h3 class="text-left">
						Matching
					</h3>
					<hr>
					<div class="panel-group" id="panel-13650">
						<div class="panel panel-default">
							<div class="panel-heading">
								<a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-13650" href="#panel-element-368994">Result</a>  <span class="badge pull-right">2</span>
							</div>
							<div id="panel-element-368994" class="panel-collapse collapse">
								<div class="panel-body">
									
									<div class="row">
										<div class="col-sm-6">
											<div class="thumbnail">
												<img alt="Bootstrap Thumbnail First" src="http://lorempixel.com/output/people-q-c-600-200-1.jpg" />
												<div class="caption">
													<h3>
														AsusK501LX
													</h3>
													<p>

														500.000 VND
													</p>
													<p>
														<a class="btn btn-primary" href="#">View</a> <a class="btn" href="#">Favorite</a>
													</p>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="thumbnail">
												<img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg" />
												<div class="caption">
													<h3>
														AsusK501LX
													</h3>
													<p>

														500.000 VND
													</p>
													<p>
														<a class="btn btn-primary" href="#">View</a> <a class="btn" href="#">Favorite</a>
													</p>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-13650" href="#panel-element-293840">Temp</a>
							</div>
							<div id="panel-element-293840" class="panel-collapse collapse">
								<div class="panel-body">
									Temp
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection()