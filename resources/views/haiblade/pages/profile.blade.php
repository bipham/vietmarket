@extends('haiblade.master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		<br>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<div class="card-block">
							<center>
								<img alt="trieuhai" src="{{url('public/img/avartar.png')}}" class="img-circle">
								<h3 class="text-center">
									trieuhai
								</h3> 
							</center>
							<div class="row text-center">
								<div class="col-md-6">
									<dl>
										<dt>
											Họ &amp tên
										</dt>
										<dd>
											Trương Triệu Hải
										</dd>
										<dt>
											Email
										</dt>
										<dd>
											choutruong@gmail.com
										</dd>
									</dl>
								</div>
								<div class="col-md-6">
									<dl>
										<dt>
											Danh tiếng
										</dt>
										<dd>
											<div id="hearts-existing" class="starrr" data-rating='4'>****</div>
										</dd>
										<dt>
											Điện thoại
										</dt>
										<dd>
											0903629676
										</dd>
									</dl>
								</div>
							</div>
							<div class="row text-center">
								<div class="col-md-12">
									<dl class="dl">
										<dt>
											Địa chỉ
										</dt>
										<dd>
											1025/12A CMT8 , Tan Binh , Ho Chi Minh
										</dd>
									</dl>
								</div>

							</div>




							<a href="#" class="btn btn-block btn-pf" type="button" data-toggle="modal" data-target="#editpf">Sửa thông tin</a>

							<!-- Modal -->
							<div id="editpf" class="modal fade" role="dialog">
								<div class="modal-dialog">

									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title text-center">Thông tin của bạn</h4>
										</div>

										<div class="modal-body">
											<div class="input-group">
												<span class="input-group-addon" id="1">Họ &amp tên</span>
												<input type="text" class="form-control" value="Trương Triệu Hải" id="fullname" aria-describedby="basic-addon1">
											</div>

											<div class="input-group">
												<span class="input-group-addon" id="2">Nickname</span>
												<input type="text" class="form-control" value="trieuhai" id="nickname" aria-describedby="basic-addon1">
											</div>

											<div class="input-group">
												<span class="input-group-addon" id="3">Điện thoại</span>
												<input type="text" class="form-control" value="0903629676" id="sdt" aria-describedby="basic-addon1">
											</div>

											<div class="input-group">
												<span class="input-group-addon" id="4">Email</span>
												<input type="text" class="form-control" value="choutruong@gmail.com" id="email" aria-describedby="basic-addon1" readonly>
											</div>

											<div class="input-group">
												<span class="input-group-addon" id="5">Địa chỉ</span>
												<input type="text" class="form-control" value="1025/12A CMT8" id="adress" aria-describedby="basic-addon1">

												<button type="button" class="btn btn-block btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													Tỉnh/Thành phố <span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li><a href="#">Ho Chi Minh</a></li>
													<li><a href="#">Ha Noi</a></li>
												</ul>

												<button type="button" class="btn btn-block btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													Quận/Huyện <span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li><a href="#">Q1</a></li>
													<li><a href="#">Tan Binh</a></li>
												</ul>
											</div>

											

										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-success" data-dismiss="modal">Lưu &amp Thoát</button>
										</div>
									</div>

								</div>
							</div>

							<a href="#" class="btn btn-block btn-pf" type="button" data-toggle="modal" data-target="#editpw">Đổi Mật Khẩu</a>

							<!-- Modal -->
							<div id="editpw" class="modal fade" role="dialog">
								<div class="modal-dialog">

									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title text-center">Đổi Mật Khẩu</h4>
										</div>
										<div class="modal-body">
											<div class="form-group">
												<input type="password" class="form-control" placeholder="Mật Khẩu Hiện Tại" id="password">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" placeholder="Mật Khẩu Mới" id="password">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" placeholder="Nhập Lại Mật Khẩu Mới" id="password">
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-success" data-dismiss="modal">Lưu &amp Thoát</button>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="">
						<div class="list-group">
  <a href="#" class="list-group-item active">
    Đánh Giá
  </a>
  <a href="#" class="list-group-item list-group-item-action">Nháp</a>
</div>
					</div>
				</div>


				<div class="col-md-8">
						<div class="card">
							<div class="card-block">
								<h4>
									Đánh Giá
								</h4>
							</div>
						</div>
						<br>
						<div class="card">
							<div class="card-block">
								<div class="media">

									<img class="d-flex mr-3 img-circle" src="{{url('public/img/avartar2.jpg')}}" alt="Generic placeholder image">
									<div class="media-body">
										<blockquote>
											<div id="hearts-existing" class="starrr" data-rating='4'>****</div>
											<p>
												Hàng xài bình thường, không gặp vấn đề
											</p>

											<small>Phạm Tuấn Anh <br>
												<em>					
													<time datetime="2011-01-12">January 12th, 2011</time>
												</em>
											</small>
										</blockquote>
									</div>
								</div>
							</div>
						</div>
						
						<div class="card">
							<div class="card-block">
								<div class="media">
									<img class="d-flex mr-3 img-circle" src="{{url('public/img/avartar.png')}}" alt="Generic placeholder image">
									<div class="media-body">
										<blockquote>
											<div id="hearts-existing" class="starrr" data-rating='4'>****</div>
											<p>
												test
											</p>
											<small>trieuhai <br>
												<em>					
													<time datetime="2011-01-12">January 12th, 2011</time>
												</em>
											</small>
										</blockquote>
									</div>
								</div>
							</div>
						</div>
						
						<div class="card">
							<div class="card-block">
								<div class="media">
									<img class="d-flex mr-3 img-circle" src="{{url('public/img/avartar1.jpg')}}" alt="Generic placeholder image">
									<div class="media-body">
										<blockquote>
											<div id="hearts-existing" class="starrr" data-rating='4'>****</div>
											<p>
												Chất lượng như website
											</p>
											<small>Le Duy Nguyen <br>
												<em>					
													<time datetime="2011-01-12">January 12th, 2011</time>
												</em>
											</small>

										</blockquote>


									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-block">
								<div class="media">
									<img class="d-flex mr-3 img-circle" src="{{url('public/img/avartar1.jpg')}}" alt="Generic placeholder image">
									<div class="media-body">
										<blockquote>
											<div id="hearts-existing" class="starrr" data-rating='4'>****</div>
											<p>
												Hẹn đúng giờ, nhanh chóng
											</p>
											<small>Le Duy Nguyen<br>
												<em>					
													<time datetime="2011-01-12">January 12th, 2011</time>
												</em>
											</small>
										</blockquote>


									</div>
								</div>
							</div>
						</div>

				</div>
			</div>
		<br>
		</div>
	</div>
</div>
@endsection