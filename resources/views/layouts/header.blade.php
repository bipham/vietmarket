<!--
Created by: Nguyen Le Duy
Date: 17/02/2017
-->

<nav class="navbar navbar-fixed-top container-fluid">
  <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color: white;">
        Menu
      </button>
      <img src="none.jpg" class="img-rounded navbar-brand" alt="Logo" width="50" height="50"/>
      <a class="navbar-brand" href="{{route('Home')}}">Viet Marketplace</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="{{route('Home')}}"><span class="glyphicon glyphicon-home"></span> Trang Chủ</a></li>
        <li class="sign-in"><a href="#"><span class="glyphicon glyphicon-user"></span> Username</a></li>
        <li class="sign-in"><a href="{{route('MyStore')}}"><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng</a></li>
        <li class="sign-in"><a href="#">Bản đồ</a></li>
        <li class="sign-in"><a href="#">Matching</a></li>
        <li class=""><a href="#">Về chúng tôi</a></li>
        <li class="sign-out"><a href="#">Đăng nhập</a></li>
        <li class="sign-in"><a href="#">Đăng xuất</a></li>
      </ul>
    <script>
      var signOut = false;
      $(".sign-in").toggleClass('hidden', signOut);
      $(".sign-out").toggleClass('hidden', !signOut);
    </script>
    </div>
</nav>
<br/><br/><br/>