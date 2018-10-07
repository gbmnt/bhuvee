<?php
require 'vendor/autoload.php';

use Aws\S3\S3Client;

$key = 'AKIAJXNN4ZP3CFJOXAJA';
$secret = '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';

$credentials = new Aws\Credentials\Credentials($key, $secret);

$s3 = new Aws\S3\S3Client([
    'region'  => 'ap-south-1',
    'version' => 'latest',
    'credentials' => $credentials
]);


$action = $_GET['action'];
$id = null;

if(isset($action)) {
  if($action === 'edit') {
    $id = $_GET['id'];
  }
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
      crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Product Details</title>
  </head>

  <body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand mr-auto mt-2 mt-lg-0" href="#">
          <img src="img/logo.png" width="70" height="40" alt="">
        </a>
        <form class="form-inline my-2 my-lg-0">
          <button type="button" class="btn btn-default btn-circle" data-toggle="tooltip" data-placement="bottom" title="Add item"><i
              class="fas fa-plus"></i></button>
        </form>
      </div>
    </nav>

    <div class="container mt-3">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#details">Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" id="uploadTab" data-toggle="tab" href="#uploadImage" onclick="removeBadge()">Upload Image
            <span class="badge badge-success" style="display: none;">!</span>
          </a>
          <!-- <a class="nav-link" id="uploadTab" data-toggle="tab" href="#uploadImage">Upload Image</a> -->
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content" style="margin-top: 10px;">
        <div class="tab-pane container active" id="details">
          <form>
            <div class="form-group">
              <label for="product_name">Product Name</label>
              <input type="text" class="form-control" id="product_name" placeholder="Product Name">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" rows="3" placeholder="Description" style="resize: none;"></textarea>
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">&#8377;</span>
                </div>
                <input type="text" class="form-control" id="price" aria-label="Amount (to the nearest rupees)">
                <div class="input-group-append">
                  <span class="input-group-text">.00</span>
                </div>
              </div>
            </div>
            <button type="button" value="save" class="btn btn-success" onclick="saveItem()">Save</button>
            <button type="button" value="cancel" class="btn" onclick="window.location.replace('home.html');">Cancel</button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#warningModal">Delete</button>
          </form>
        </div>
        <div class="tab-pane container fade" id="uploadImage">
          <p><h2 id="uploadTitle"></h2></p>

          <div class="container mt-3">
      <ul class="list-group" id="productList"></ul>
    </div>

          <form action="http://localhost/bhuvee-api/public/addProductImage" method="post" enctype="multipart/form-data">
          <input type="hidden" value="" name="id" id="id">
            <div class="form-group">
              <input type="file" name="my_file[]" id="image" multiple>
              <button type="button" class="btn btn-primary">
                Profile <span class="badge badge-light">9</span>
                <span class="sr-only">unread messages</span>
              </button>
            </div>
            <button type="submit" value="submit" name='submit' class="btn btn-success">Upload</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Warning Modal -->
    <div class="modal" id="warningModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Warning</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Do you want to delete this item?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" onclick="deleteItem()">Delete</button>
          </div>
        </div>
      </div>
    </div>

    <script>
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

      var id = null;
      $(document).ready(function () {
        let action = '<?php echo $action; ?>';

        if (action == 'edit') {
          id = '<?php echo $id; ?>';
          $("#id").val(id);
          $.get('http://localhost/bhuvee-api/public/getProductDetails/' + id, function (data) {
            var resp = JSON.parse(data)['result'];
            console.log(resp);
            $('#product_name').val(resp['p_name']);
            $('#description').val(resp['description']);
            $('#price').val(parseInt(resp['price']));
            $('#uploadTitle').html('Upload image for '+resp['p_name'])

            var imageList = JSON.parse(data)['imageList'];

            for(let img of imageList) {
              addItemToProductList(id, img['url'])
            }
          });
          // id = 1;
        }

        if (id !== null) {
          $('#uploadTab').removeClass('disabled');
        }
      });

      function addItemToProductList(id, url) {
        let item =
          '<li class="list-group-item"><div class="d-flex bd-highlight align-items-center"><div class="p-2 bd-highlight"><img src="' +
          url +
          '" alt="item image" height="50" width="50" class="rounded-circle"></div><div class="p-2 flex-grow-1 bd-highlight"><span class="mr-auto">' +
          url +
          '</span></div><div class="p-2 bd-highlight"><button type="button" class="btn transparent" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="deleteItem(' +
          url + ')"><i class="material-icons">delete</i></button></div></div></li>';

        $('#productList').append(item);
      }



      var imageList = [];

      function deleteItem() {
        let id = '<?php echo $id; ?>';

        $.ajax({
          // TODO: add main.js file containing baseurl
          // url: 'http://localhost/bhuvee-api/public/deleteProduct',
          url: 'https://gentle-springs-57313.herokuapp.com/public/deleteProduct',
          type: 'DELETE',
          success: function (data) {
            console.log(data);
            window.location.replace("home.html");
          },
          data: {
            id: id
          }
        });
      }

      function removeBadge() {
        $('.badge').css('display', 'none')
      }

      function saveItem() {
        let action = '<?php echo $action; ?>';
        var name = $('#product_name').val();
        let description = $('#description').val();
        let price = $('#price').val();

        switch (action) {
          case 'add':
            $.ajax({
              url: 'http://localhost/bhuvee-api/public/addProduct',
              type: 'POST',
              success: function (data) {
                var resp = JSON.parse(data);
                if (resp['status'] === 'success') {
                  toastr["success"]("Your product is added.");
                  let id = resp['id'];
                  if (id !== null){
                    $("#id").val(id);
                    $('#uploadTab').removeClass('disabled');
                    $('#uploadTitle').html('Upload image for '+name);
                    $('.badge').css('display', 'inline-block');
                  }
                }
                // window.location.replace("home.html");
              },
              data: {
                name: name,
                description: description,
                price: price
              }
            });
            break;
          case 'edit':
          let id = '<?php echo $id; ?>';
            $.ajax({
              url: 'http://localhost/bhuvee-api/public/updateProduct',
              type: 'PUT',
              success: function (data) {
                console.log(data);
                toastr["success"]("Your product is modified.");
                window.location.replace("home.html");
              },
              data: {
                id: id,
                name: name,
                description: description,
                price: price
              }
            });
            break;
        }
      }
    </script>
  </body>

</html>