@extends('haiblade.master')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li>
						<a href="#">Giỏ hàng</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Kho hàng</a> <span class="divider">/</span>
					</li>
					<li class="active">
						Đăng Vật Phẩm
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="well">
					<h3 class="text-left">
						Thông Tin Vật Phẩm
					</h3>
					<hr>

					<form role="form">
						<div class="form-group">

							<label>
								Tên Vật Phẩm*
							</label>
							<input type="text" name="itemname" class="form-control" placeholder="Điền vào đây" required>
						</div>
						<div class="form-group">
							<label>
								Mô Tả*
							</label>
							<textarea name="discription" rows="5" cols="50" class="form-control" placeholder="Điền vào đây" style="resize: none;"></textarea>
						</div>
						<div class="form-group">

							<label>
								Giá *
							</label>
							<input type="number" name="price" class="form-control" placeholder="Điền vào đây (Đơn vị VND)" required>
						</div>
						<div class="form-group">

							<label>
								Địa Chỉ *
							</label>
							<input type="text" name="address" class="form-control" placeholder="Địa Chỉ" required>
						</div>

						<hr>

						<div class="col-md-6">
							<div class="form-group">
								<label>
									Chọn Danh mục *
								</label>
								<select class="form-control">
									<option selected>Sách</option>
									<option>Quần Áo</option>
									<option>Máy Tính</option>
									<option>Điện Thoại</option>
								</select>
							</div>
							<div class="form-group">
								<label>
									Chọn Tình Trạng *
								</label>
								<select class="form-control">
									<option selected>Mới</option>
									<option>Cũ</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>
									Tỉnh/ Thành Phố *
								</label>
								<select class="form-control">
									<option selected>Ho Chi Minh</option>
								</select>
							</div>
							<div class="form-group">
								<label>
									Quận/ Huyện *
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
								Đăng Hình Ảnh
							</label>
							<input type="file" name="image">
							<input type="file" name="image">
							<input type="file" name="image">
							<p class="help-block">
								Đăng Tối Đa 5 Hình
							</p>
						</div>
						<hr>
						<div class="checkbox">

							<label>
								<input type="checkbox" required> Tôi đã đọc các điều lệ
							</label>
						</div> 
						
						<button type="submit" class="btn btn-block btn-pf">
							Gửi
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
								<a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-13650" href="#panel-element-368994">Kết Quả</a>  <span class="badge pull-right">2</span>
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
														<a class="btn btn-primary" href="#">Xem</a> <a class="btn" href="#">Yêu Thích</a>
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
														<a class="btn btn-primary" href="#">Xem</a> <a class="btn" href="#">Yêu Thích</a>
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