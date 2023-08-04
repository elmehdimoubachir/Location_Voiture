<nav>
    <center><div class="topnav">
    <div class="logo">
    <img src="{{url('assets/Images/'.$data->Icon_App)}}" alt="" srcset=""><a href="">{{$data->Name_App}}</a>
    </div>
      <a class="active" href="/">Home</a>
      <a href="{{route('Offers')}}">Offers</a>
      <a href="/#contact">Contact</a>
      <a href="/#About">About</a>
      <a href="{{route('login')}}" class="btnlogin">Log In</a>
    </div></center>
</nav>