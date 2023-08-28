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

         <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

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
                <div class="col-md-1">
                  <div class="hideMenu" onclick="HideShow()">
                    <div class="iconh"></div>
                    <div class="iconh"></div>
                    <div class="iconh"></div>
                  </div>    
                </div>
                <div class="col-md-5">
                    <span id="navtitle">@yield('title')</span>
                </div>
                <div class="col-md-1">
                    <div class="dropdown float-right">
                    <button type="button" class="border border-light bg-light text-dark" data-bs-toggle="dropdown">
                    <i class="bi bi-bell-fill" style="font-size:25px; float:right;"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Add Client</a></li>
                      <li><a class="dropdown-item" href="#">Remove car</a></li>
                      <li><a class="dropdown-item" href="#">Booking car</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Show all</a></li>   
                    </ul>
                  </div>
                </div>
                <div class="col-md-2"> 
                  <form action="/Dashboardsearch" method="GET">
                    @csrf
                        <input type="search" class="txtsearch" name="searchDashboard" id="search">
                        <button type="submit"></button>
                    </form>
                </div> 
                <div class="col-md-1">
                    <div class="dropdown header-right">
                      <a class="dropbtn"><img src="{{ url('assets/Images/avatar2.png')}}" alt="" srcset=""> 
                        <!-- <i class="fa fa-caret-down"></i> -->
                      </a>
                      <div class="dropdown-content">
                        <a href="{{ route('settings.index') }}">Acounte</a>
                       <a href="javascript:void(0)" id="LL" onclick="logout();">Log out</a>
                      </div>
                    </div> 

                    <div class="logout" id="logout">
                      <div class="formModel">
                        <form action="/logout" method="GET">
                          <p>Are you sure logout ?</p>
                          <button type="submit" class="btn btn-drak float-left">Yes</button>
                          <a href="javascript:void(0)" class="btn btn-drak float-right" onclick="logoutNon();">Non</a>
                        </form>
                      </div>
                    </div>

                </div>
            </div> 
        </nav>
    </header>

    <section>
        <div class="sidenav" id="hide">
          <div class="lineMeun d-flex flex-row"><i class="bi bi-grid-1x2-fill"></i><a href="{{ route('Dashboard.index') }}">Dashboard</a></div>
          <div class="lineMeun d-flex flex-row"><i class="bi bi-people-fill"></i><a href="{{ route('Client.index') }}">Clients</a></div>
          <div class="lineMeun d-flex flex-row"><i class="bi bi-car-front-fill"></i><a href="{{ route('Car.index') }}">Cars</a></div>
          <div class="lineMeun d-flex flex-row"><i class="bi bi-person-gear"></i><a href="{{ route('Driver.index') }}">Driver</a></div>
          <div class="lineMeun d-flex flex-row"><i class="bi bi-bookmark-check"></i><a href="{{ route('Reservation.index') }}">Booking</a></div>
          <div class="lineMeun d-flex flex-row"><i class="bi bi-shop-window"></i><a href="{{ route('Offer.index') }}">Offers</a></div>
          <div class="lineMeun d-flex flex-row"><i class="bi bi-app-indicator"></i><a href="">Notifcation</a></div>
          <div class="lineMeun d-flex flex-row"><i class="bi bi-gear"></i><a href="">Panne</a></div>
          <div class="lineMeun d-flex flex-row"><i class="bi bi-file-earmark-bar-graph-fill"></i><a href="">Rapport</a></div>
          <div class="lineMeun d-flex flex-row"><i class="bi bi-sliders"></i><a href="{{ route('settings.index') }}">Settings</a></div>
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

    function logout(){
            document.getElementById("logout").style.display="block";
        }
        function logoutNon(){
            document.getElementById("logout").style.display="none";
        }
        function Delete(){
            document.getElementById("Delete").style.display="block";
        }
        function DeleteNon(){
            document.getElementById("Delete").style.display="none";
        }
    </script>
</body>
</html>
