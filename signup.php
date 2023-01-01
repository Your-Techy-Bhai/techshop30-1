<?php
$showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){


include_once('partials/_dbconnect.php');

$username = $_POST['username'];
$password = md5($_POST['password']);
$cpassword = md5($_POST['cpassword']);
$exists=false;
if(($password == $cpassword) && $exists==false){
    $sql = "INSERT INTO `users` ( `Username`, `Passwaord`, `dt`) VALUES ('$username', '$password', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if ($result){
      $showAlert = true;
    } else {
      echo mysqli_error($conn);
    }
  }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp</title>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/jquery-1.11.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    
    <?php
    if ($showAlert){
      echo '
    <div id="status-message" class="alert alert-success alert-dismissible fade" role="alert">
  <strong>Success!</strong> Your Account has been created now you can Login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

    }
?>
   
  <div class="container my-4" align-items="center">

   <h1 class="text-center">SignUp To Our Website.</h1>
   <form id = 'signup-fm' action="/signup.php" method="post">
  <div class="form-group col-md-6">
  <label for="username">Username</label>
  <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
</div>
<div class="form-group col-md-6">
  <label for="password">Password</label>
  <input type="password" class="form-control" id="password" name="password"></input>
</div>
<div class="form-group col-md-6">
  <label for="cpassword" class="form-control" id="cpassword" name="cpassword">Confirm Password</label>
  <input type="password" class="form-control" id="cpassword" name="cpassword"></input>
  <small id="emailHelp" class="form-text text-muted">Make Sure To Type The Same Password.</small>

  <button type="submit" id="signup-btn" class="btn btn-primary">Signup</button>
</div>
</form>
   

  </div>
<script>

$(document).ready(function() {
          $("#signup-btn").click(function() {
            $("#status-message").addClass("show");
            
          });
        });

</script>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>