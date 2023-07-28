<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarShop - @yield('title')</title>

    <!-- bootsrap -->
    <link rel="stylesheet" href="{{ url('assets/plugins/bootstrap/css/bootstrap.min.css') }}" />

     <!-- css -->
     <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
     <!-- Icon  -->
     <link rel="icon" href="{{ url('assets/Images/iconapp.jpg')}}" type="imge/x-icon" />

</head>

<body>
    <header>
        <nav>
            <div class="row">
                <div class="col-md-2">
                <div class="logo">
                      <a href="{{ route('Dashboard.index') }}">CarShop</a>
                  </div>
                </div>
                <div class="col-md-7">
                <button class="hideMenu" onclick="HideShow()">
                    <div class="iconh"></div>
                    <div class="iconh"></div>
                    <div class="iconh"></div>
                  </button>
                </div>
                <div class="col-md-3">
                    <input type="search" class="txtsearch" name="" id="search">
                    <button type="submit"></button>

                    <div class="dropdown header-right">
                      <a class="dropbtn"><img src="{{ url('assets/Images/avatar2.png')}}" alt="" srcset=""> 
                        <!-- <i class="fa fa-caret-down"></i> -->
                      </a>
                      <div class="dropdown-content">
                        <a href="">Acounte</a>
                       <a href="javascript:void(0)" id="LL" onclick="logout();">Log out</a>
                      </div>
                    </div> 

                </div>
            </div> 
        </nav>
    </header>

    <section>
        <div class="sidenav" id="hide">
          <div class="lineMeun"><i class="fas fa-dragon"></i><a href="{{ route('Dashboard.index') }}">Dashboard</a></div>
          <div class="lineMeun"><i class=""></i><a href="{{ route('Client.index') }}">Clients</a></div>
          <div class="lineMeun"><i class=""></i><a href="{{ route('Car.index') }}">Cars</a></div>
          <div class="lineMeun"><i class=""></i><a href="{{ route('Driver.index') }}">Driver</a></div>
          <div class="lineMeun"><i class=""></i><a href="{{ route('Reservation.index') }}">Reservation</a></div>
          <div class="lineMeun"><i class=""></i><a href="">Rapport</a></div>
          <div class="lineMeun"><i class=""></i><a href="{{ route('settings.index') }}">Settings</a></div>
        </div>
        @yield('content')
    </section>

    <footer>
         <b>© 2023 Copyright By </b><a href="www.elmehdiemm.eb2a.com" target="_blank">EL MEHDI MOUBACHIR</a>
    </footer>
    
    <script>
            var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
      } else {
      dropdownContent.style.display = "block";
      }
      });
    }

    function HideShow() {
      var content = document.getElementById("contenthide");
    var meun = document.getElementById("hide");

      if(meun.style.display === "block"){
        meun.style.display = "none";
        content.style.marginLeft = "20px";
      }else{
        meun.style.display = "block";
        content.style.marginLeft = "280px";
      }
    }

    function isDriver(){
      
      var checkDriver = document.getElementById("checkDeiver");
      var driver = document.getElementById("Adddeiver");

      if (checkDriver.checked == true){
        driver.style.display = "block";
      } else {
        driver.style.display = "none";
      }
    }
    </script>
</body>
</html>