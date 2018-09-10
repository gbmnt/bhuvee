<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bhuvee</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
  <link rel="stylesheet" href="master.css">
  <link href="Main.css" rel="stylesheet" />
  <link href="slide.css" rel="stylesheet" />
  <link rel="stylesheet" href="font-awesome.min.css" />
  <link rel="stylesheet" href="card.css" />
  <link rel="stylesheet" href="form.scss" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet"> 
  <link href="fontawesome-free-5.0.9/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

  
  <script src="https://code.jquery.com/jquery-1.10.2.min.js" integrity="sha256-C6CB9UYIS9UJeqinPHWTHVqh/E1uhG5Twh+Y5qFQmYg="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="main.js"></script>
</head>

<body>
  <!-- Landing -->
  <div class="main-container">
  <div class="overlay">
    <p class="screen">
      <span>BHUVEE</span> &nbsp;Design
    </p>
    <div class="intro">
      <button class="myBtn" onclick="fadeOut()">EXPLORE</button>
      <img src="img/logo.png" height=100 width=150/>
    </div>
  </div>
    <!--s<div class="overlay-2"></div>
  </div> -->

  <div class="main-content">
  <!-- Product Content -->
  <br><br>
  <h1><center>Latest Collection</center></h1>
  <hr class="style1">
  <br><br>
  <div class="content">
    <div class="grid-container">
      <div class="card">
        <div class="card-head">
          <img src="img/terra_1.jpg" alt="product" class="product">
        </div>
        <div class="card-body">
          <div class="product-properties">
            <h2>Rs 1,500</h2>
            <strike><h6>Rs 2,000</h6></strike>
            <p>Lorem ipsum dolor sit amet con </br>sectetur adipisicing elit.</p>
            <div class="addToCart" onclick="fadeIn()">ORDER NOW</div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-head">
          <img src="img/terra_1.jpg" alt="product" class="product">
        </div>
        <div class="card-body">
          <div class="product-properties">
            <h2>Rs 1,500</h2>
            <strike><h6>Rs 2,000</h6></strike>
            <p>Lorem ipsum dolor sit amet con </br>sectetur adipisicing elit.</p>
            <div class="addToCart" onclick="fadeIn()">ORDER NOW</div>

          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-head">
          <img src="img/terra_1.jpg" alt="product" class="product">
        </div>
        <div class="card-body">
          <div class="product-properties">
            <h2>Rs 1,500</h2>
            <strike><h6>Rs 2,000</h6></strike>
            <p>Lorem ipsum dolor sit amet con </br>sectetur adipisicing elit.</p>
            <div class="addToCart" onclick="fadeIn()">ORDER NOW</div>
          </div>
        </div>
      </div>
      <a href="#" class="previous">&laquo;</a>
      <a href="#" class="next">&raquo;</a>
    </div>
    <div class="main">
      <div class="infoSection">
          <span class="close cursor" onclick="closeModal()">&times;</span>
          <div class="product-block"> 
          <div class="imgSection">
            <div class="container">
              <!-- <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span> -->
              <img src="terra_1.jpg" id="expandedImg" style="width:440px">
              <div id="imgtext">Nature</div>
            </div>
            <!-- The four columns -->
            <div class="row">
              <div class="column">
                <img src="terra_1.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
              </div>
              <div class="column">
                <img src="terra_1.jpg" alt="Snow" style="width:100%" onclick="myFunction(this);">
              </div>
              <div class="column">
                <img src="terra_1.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
              </div>
              <div class="column">
                <img src="terra_1.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
              </div>
            </div>
          </div>
          <div class="product-details">
            <h1 class="productName">HESH-1 WIRELESS</h1>
            <h5 class="price">$179.99</h5>
            <hr>
            <div class="product-description">
                <table>
                  <tr> <td colspan="5" class="table-title"><strong>Material</strong></td> <td class="table-description">Yellow</td> </tr>
                  <tr> <td colspan="5" class="table-title"><strong>Description</strong></td> 
                    <td class="table-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 

                    </td> </tr>
                </table>
            </div>
            <div class="placeOrder" onclick="preorder()">PLACE AN ORDER</div>
          </div>
          <div class="vl"></div>
          <div class="offer-details">
            <div><img src="./img/Special-offer-PNG.png" width="30" height="30"><small>Special PriceGet extra ₹4 off T&C</small></div>  
          </div>
        </div>
        <div class="message-block">
            <div>
              <h4><center>PLEASE FILL UP THE INFORFATION</center></h4>
                <form>
                  <label for="full-name" style="color: #d58512;">Full Name</label>
                  <input type="text" id="full-name" name="full-name" placeholder="ex: Jhon Wick" style="border-color: #985f0d;">
              
                  <label for="email" style="color: #d58512;">Email</label>
                  <input type="email" id="email" name="email" placeholder="example@xyz.com" style="border-color: #985f0d;">
              
                  <label for="number" style="color: #d58512;" >Phone No.</label>
                  <input type="number" id="number" name="phone-no" placeholder="ex: 9876543210" style="border-color: #985f0d;">

                  <label for="message" style="color: #d58512;">Message</label>
                  <textarea rows="4" id="message" name="message" cols="50" placeholder="Write message for quick response." style="border-color: #985f0d;"></textarea>
                
                  <input type="submit" value="Submit" name="submit">
                </form>
              </div>
        </div>
        </div>
      </div>
  </div>
  <br><br>
  <h1><center>Coming Soon</center></h1>
  <hr class="style1">
  <br><br>
  <div class="content">
  <div class="grid-container1">
      <div class="soon-container">
          <img src="img/terra_1.jpg" alt="Avatar" class="image">
          <div class="soon-overlay">
            <div class="soon-text"><a href="comin_soon.html">Coming Soon</a></div>
          </div>
        </div>
        <div class="soon-container">
            <img src="img/terra_1.jpg" alt="Avatar" class="image">
            <div class="soon-overlay">
              <div class="soon-text"><a href="comin_soon.html">Coming Soon</a></div>
            </div>
          </div>
          <div class="soon-container">
              <img src="img/terra_1.jpg" alt="Avatar" class="image">
              <div class="soon-overlay">
                <div class="soon-text"><a href="comin_soon.html">Coming Soon</a></div>
              </div>
            </div>
      <!-- <img src="img/terra_1.jpg" alt="product" class="coming_product">
      <img src="img/terra_1.jpg" alt="product" class="coming_product">
      <img src="img/terra_1.jpg" alt="product" class="coming_product"> -->
      <!-- <img src="img/terra_1.jpg" alt="product" class="coming_product"> -->
    </div>
  </div>
  <div>
</div>
    
      <footer class="footer">
        <div class="footer-container">
          <!-- <div class="row">

          </div> -->
          <div class="slider-content">
            <div class="social-network">
                   <a href="" class="fa fa-facebook"></a>
                    <a href="" class="fa fa-twitter"></a>
                     <a href="" class="fa fa-windows"></a>
                      <a href="" class="fa fa-reddit"></a>
                       <a href="" class="fa fa-linkedin"></a>
                        <a href="" class="fa fa-cog"></a>
              </div>
              
          </div>
        </div>
        <div class="footer-copyright">
          <div class="copyright-container">
          © 2014 Copyright Text
          </div>
        </div>
      </footer>
    </div>
  </div>  

  
</body>
</html>

<script>


$(document).ready(function () {

  toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
};
    $('form').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url : "mail.php",
            type: "POST", 
            data: $(this).serialize(),
            success: function (data) {
              toastr["success"]("Thank you!! for showing interest. \n We will get back to you soon.");
            },
            error: function (jXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });
});

    function fadeOut() {
      TweenMax.to(".myBtn", 1, {
        y: -100,
        opacity: 0
      });
      TweenMax.to(".screen", 2, {
        y: -400,
        opacity: 0,
        ease: Power2.easeInOut,
        delay: 2,
        display: "none"
      });
      TweenMax.from(".overlay", 2, {
        ease: Power2.easeInOut
      });
      TweenMax.to(".overlay", 2, {
        delay: 2,
        top: "-110%",
        ease: Expo.easeInOut
      });

      TweenMax.from(".content", 2, {
        delay: 2.7,
        opacity: 0,
        ease: Power2.easeInOut
      });
      TweenMax.to(".content", 2, {
        opacity: 1,
        delay: 2.7,
        ease: Power2.easeInOut
      });

      document.getElementsByClassName("main-content")[0].style.display = "block";
    }

    function fadeIn() {
      var imageSection = document.getElementsByClassName("grid-container");
      imageSection[0].style.display = "none";
      var main = document.getElementsByClassName("main");
      main[0].style.display = "block";

    }

    function closeModal() {
      var imageSection = document.getElementsByClassName("grid-container");
      imageSection[0].style.display = "grid";
      var main = document.getElementsByClassName("main");
      main[0].style.display = "none"; 
    }

    function preorder() {
      var productBlock = document.getElementsByClassName("product-block");
      productBlock[0].style.display = "none";
      var messageBlock = document.getElementsByClassName("message-block");
      messageBlock[0].style.display = "block";
    }

    var $page = $('.page');
    $('.menu_toggle').on('click', function () {
      $page.toggleClass('shazam');
    });

    $('.content').on('click', function () {
      $page.removeClass('shazam');
    });
  </script>