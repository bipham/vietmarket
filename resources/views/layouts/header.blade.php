<header id="header" class="">
  <nav class="navbar navbar-toggleable-md bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Viet MarketPlace</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mt-2 mt-md-0">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('Home')}}">Trang Chủ <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('uploadProducts')}}">Đăng tin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('MyStore')}}">Giỏ hàng</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Bản đồ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Matching</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Về chúng tôi</a>
        </li>
      </ul>
      <ul class="navbar-nav my-2 my-lg-0">
        @if(Auth::check())
          <li class="dropdown open">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Auth::user()->user_name}}
            </button>
            <div class="dropdown-menu profile-dropdown" aria-labelledby="dropdownMenu1">
              <a class="dropdown-item" href="#">Hồ sơ</a>
              <a class="dropdown-item" href="{{url('logout')}}">Đăng xuất</a>
            </div>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="{{url('login')}}">Đăng nhập</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('register')}}">Đăng ký</a>
          </li>
         @endif
      </ul>
    </div>
  </nav>
</header><!-- /header -->