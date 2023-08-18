<!DOCTYPE html>
<html lang="en">
@include('Site/head')
<body>
    <header>
        @include('Site/NavBar')

        <div class="imgProject">
            <img class="imgP fade" src="{{url('assets/Images/M_Red.jpg')}}" alt="">
            <img class="imgP fade" src="{{url('assets/Images/RangeR.jpg')}}" alt="">
            <img class="imgP fade" src="{{url('assets/Images/audi.jpg')}}" alt="">
        </div>
        
    </header>
    <button onclick="topFunction()" id="myBtn" title="Go to top" ><i class="bi bi-shift"></i></button>
    <section id="offers">
        <center><h1>Offers</h1></center>
        <div class="row m-3 ">
        @foreach($Offers as $offer)
        <div class="col-md-3 card">
            <span class="span">New</span>
            <img src="{{url('assets/Images/'.$offer->Photo_Car)}}" class="imgOffer" alt="" srcset="">
            <div class="infoCar_O text-dark">
                <h4>{{$offer->Marque}} {{$offer->Categore}}</h4><p>({{$offer->Model}})</p>
            </div>
                <p class="text-muted">{{$offer->Discription}}</p>
            <div class="card-footer">
                <b class=" text-danger">{{$offer->Days}} Days / {{$offer->Pric}}  DH</b>
                <p class=" text-muted">To : {{$offer->Date_To}}</p>
            </div>
        </div>
        @endforeach
    </div>
    </section>
    <article id="contact">
        <center><h1>Contact US</h1></center>
        <div class="contact">
            <div class="row m-0">
                <div class="col-md-4">
                    <img src="{{URL('/assets/Images/44png.png')}}" class="imgContact" alt="">
                    <h4 class="card-title text-center">Welcome To {{$data->Name_App}}</h4>
                </div>
                <div class="col-md-8">
                    <form action="Contact.php" method="POST">
                      <div class="form-group">
                        <label for="email">Email</label><br>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label for="text">Message</label><br>
                        <textarea id="w3review" name="Msg" rows="4" cols="50" style=" width: 100%;
                                                        height: 150px;
                                                        padding: 12px 20px;
                                                        box-sizing: border-box;
                                                        border: 2px solid #ccc;
                                                        border-radius: 4px;
                                                        background-color: #f8f8f8;
                                                        font-size: 16px;
                                                        resize: none;"></textarea>
                      </div>
                      <button type="submit" class="btn-Sent float-right" name="sentmsg" id=""><i class="fas fa-envelope"></i> Sent</button>
                    </form>     
                </div>
            </div>
        </div>
    </article>
    <footer class="footer" id="About">
        <div class="row m-0">
            <div class="col-md-4">
                <center><h2>Information</h2></center>
                <p>Car Rent Agance de location de voiture dans Agadir </p>
                <p>Address : {{$data->Addrsse}}</p>
                <P>Telephone : {{$data->Telephone}}</P>
                <p>Email : {{$data->Email}}</p>
            </div>
            <div class="col-md-4">
                <center><h2>Developer</h2></center>
                <p>Mr. EL Mehdi Moubachir</p>
                <p>Telephone : 0648847314</p>
                <p>E-mail : elmehdimoubachir@gmail.com</p>
            </div>
            <div class="col-md-4">
                <center><h2>Help</h2></center>
                <p>For booking any Car just contact or you have any quetions <br> about our Application contact <br> We happy for help you</p>
            </div>
        </div>
        <div class="CopyRight text-center">
        © <?php echo date('Y');?>  Copyright : {{$data->Name_App}} | by <a href="#">EL MEHDI MOUBACHIR</a>
        </div>
    </footer>

    <script>
  var mybutton = document.getElementById("myBtn");
  window.onscroll = function() {scrollFunction()};
    
  function scrollFunction() {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
      var myIndex = 0;
      showimg();

      function showimg() {
        var i;
        var x = document.getElementsByClassName("imgP");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(showimg, 4000);
      }
  </script>
</body>
</html>