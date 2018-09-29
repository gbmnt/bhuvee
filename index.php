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
    </div>
    <div class="main">
      <div class="infoSection">
          <span class="close cursor" onclick="closeModal()">&times;</span>
          <div class="product-block"> 
          <div class="imgSection">
            
          </div>
          <div class="product-details">
            <h1 class="productName">HESH-1 WIRELESS</h1>
            <h5 class="price">$179.99</h5>
            <hr>
            <div class="product-description">
                <table>
                  <!-- <tr> <td colspan="5" class="table-title"><strong>Material</strong></td> <td class="table-description">Yellow</td> </tr> -->
                  <tr> <td colspan="5" class="table-title"><strong>Description</strong></td> 
                    <td class="table-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 

                    </td> </tr>
                </table>
            </div>
            <div class="placeOrder" onclick="preorder()">PLACE AN ORDER</div>
          </div>
          <div class="vl"></div>
          <div class="offer-details">
            <!-- <div><img src="./img/Special-offer-PNG.png" width="30" height="30"><small>Special PriceGet extra ₹4 off T&C</small></div>   -->
          </div>
        </div>
        <div class="message-block">
            <div>
              <h4><center>PLEASE FILL UP THE INFORFATION</center></h4>
                <form>
                  <input type="hidden" id="item" name="item" value="">
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
          <img src="https://s3.ap-south-1.amazonaws.com/bhuvee-pic/terra_1.jpg" alt="Avatar" class="image">
          <div class="soon-overlay">
            <div class="soon-text"><a href="comin_soon.html">Coming Soon</a></div>
          </div>
        </div>
        <div class="soon-container">
            <img src="https://s3.ap-south-1.amazonaws.com/bhuvee-pic/terra_1.jpg" alt="Avatar" class="image">
            <div class="soon-overlay">
              <div class="soon-text"><a href="comin_soon.html">Coming Soon</a></div>
            </div>
          </div>
          <div class="soon-container">
              <img src="https://s3.ap-south-1.amazonaws.com/bhuvee-pic/terra_1.jpg" alt="Avatar" class="image">
              <div class="soon-overlay">
                <div class="soon-text"><a href="comin_soon.html">Coming Soon</a></div>
              </div>
            </div>
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
var productList = [{
    name: "Choker",
    price: "650",
    description: "Hand made terracotta jewellery",
    primary_img: "choker/1.jpg",
    dir: "choker",
    img: [
      '1', '2', '3', '4', '5', '6', '7'
    ]
  },
  {
    name: "Choker and Necklace",
    price: "1200",
    description: "Hand made terracotta jewellery. <br>It can be worn both as necklace and choker.",
    primary_img: "choker&necklace/1.jpg",
    dir: "choker&necklace",
    img: [
      '1', '2', '3', '4', '5', '6', '7'
    ]
  },
  {
    name: "Daily wear",
    price: "300",
    description: "Hand made terracotta jewellery",
    primary_img: "dailywear/1.jpg",
    dir: "dailywear",
    img: [
      '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11'
    ]
  },
  {
    name: "Long necklace",
    price: "800",
    description: "Hand made terracotta jewellery",
    primary_img: "necklace/1.jpg",
    dir: "necklace",
    img: [
      '1', '2', '3', '4', '5', '6', '7', '8'
    ]
  },
  {
    name: "Long necklace",
    price: "1350",
    description: "Hand made terracotta jewellery",
    primary_img: "long_necklace/1.jpg",
    dir: "long_necklace",
    img: [
      '1', '2', '3', '4', '5', '6', '7', '8', '9'
    ]
  }
];


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

  var card = '';
  var index = 0;
  productList.forEach(element => {
    card = card + '<div class="card">' +
      '<div class="card-head">' +
      '<img src="img/' + element.primary_img + '" alt="product" class="product">' +
      '</div>' +
      '<div class="card-body">' +
      '<div class="product-properties">' +
      '<h2>Rs ' + element.price + '</h2>' +
      '<p>' + element.description + '</p>' +
      // '<div class="addToCart" onclick="fadeIn(' + element + ')">ORDER NOW</div>' +
      '<div class="addToCart" onclick="fadeIn(' + index + ')">ORDER NOW</div>' +
      '</div>' +
      '</div>' +
      '</div>';

    index++;
  })
  card = card + '<a href="#" class="previous">&laquo;</a>';
  card = card + '<a href="#" class="next">&raquo;</a>';
  $('.grid-container').html(card)

  $('form').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      url: "mail.php",
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

function fadeIn(index) {
  var imageSection = document.getElementsByClassName("grid-container");
  imageSection[0].style.display = "none";
  var main = document.getElementsByClassName("main");
  main[0].style.display = "block";
  var productBlock = document.getElementsByClassName("product-block");
  productBlock[0].style.display = "block";
  var messageBlock = document.getElementsByClassName("message-block");
  messageBlock[0].style.display = "none";

  var item = productList[index];

  $('.table-description').html(item.description);
  $('.productName').html(item.name);
  $('.price').html('Rs. ' + item.price);

  $('#item').val(item.name);

  var images = '<div class="container">' +
    '<img src="img/' + item.primary_img + '" id="expandedImg" style="width:440px;  height: 250px;">' +
    // '<div id="imgtext">Nature</div>'
    '</div>' +
    '<div class="row">';

  var imageList = item.img;
  console.log(imageList);
  imageList.forEach(element => {
    images = images + '<div class="column">' +
      '<img src="img/' + item.dir + '/'+element + '.jpg" style="width:100%;" onclick="myFunction(this);">' +
      '</div>';
  })
  images = images + '</div>';
  $('.imgSection').html(images);

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