<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/ico" href="https://s3.ap-south-1.amazonaws.com/bhuvee-pic/assets/logo.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center">Sign In</h5>
              <form class="form-signin">
                <div class="form-label-group">
                  <input type="text" id="inputEmail" class="form-control" id="username" placeholder="Username" required
                    autofocus style="height: 50px;">
                  <label for="inputEmail">Username</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" id="password" placeholder="Password"
                    required style="height: 50px;">
                  <label for="inputPassword">Password</label>
                </div>

                <!-- <div class="custom-control custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1">Remember password</label>
                    </div> -->
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                <!-- <hr class="my-4">
                    <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
                    <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="js/main.js"></script>

    <script>
      $('form').on('submit', function (e) {
        e.preventDefault();

        let param = {
            username: $('input[type=text]').val(),
            password: $('input[type=password]').val()
          };

          console.log(param);

        $.ajax({
          url: baseUrl + 'login',
          type: 'POST',
          data: param,
          success: function (data) {
            if (data === 'valid') {
              window.location.replace("home.php");
            }
            else
              toastr["warning"]("Username or password is incorrect");
          }
        });
      });
    </script>
  </body>

</html>