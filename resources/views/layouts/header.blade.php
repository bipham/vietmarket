<header id="header" class="">
  <nav class="navbar navbar-toggleable-md bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon"><i class="fa fa-bars fa-lg" aria-hidden="true" style="color: white;"></i></span>
    </button>
    <a class="navbar-brand" href="{{route('Home')}}">Viet MarketPlace</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mt-2 mt-md-0">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('Home')}}">Trang Chủ <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item sign-in">
          <a class="nav-link" href="{{route('Profile')}}">Username</a>
        </li>
        <li class="nav-item sign-in">
          <a class="nav-link" href="{{route('MyStore')}}">Giỏ hàng</a>
        </li>
        <li class="nav-item sign-in">
          <a class="nav-link" href="{{route('Map')}}">Bản đồ</a>
        </li>
        <li class="nav-item sign-in">
          <a class="nav-link" href="#">Matching</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Về chúng tôi</a>
        </li>
      </ul>
      <ul class="navbar-nav my-2 my-lg-0">
        <li class="nav-item sign-out">
          <a class="nav-link" href="login">Đăng nhập</a>
        </li>
        <li class="nav-item sign-in">
          <a class="nav-link" href="logout">Đăng xuất</a>
        </li>
      </ul>
    </div>
  </nav>
</header><!-- /header -->