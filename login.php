<?php
$login = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){


include('partials/_dbconnect.php');

$username = $_POST["username"];
$password = md5($_POST["password"]);



    $sql = "Select * from users where Username='$username' AND Passwaord='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
  session_start();
  $_SESSION['loggedin'] = true;
  $_SESSION['username'] = $username;
  header("Location: /Spotify");
    }
else{
    $showError = "Invalid Credentials";}
    
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/jquery-1.11.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    
    <?php
    if ($login){
      echo '
    <div id="status-message" class="alert alert-success alert-dismissible fade" role="alert">
  <strong>Success!</strong> You Are Logged In.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

    }
?>
   
  <div class="container my-4" align-items="center">

   <h1 class="text-center">SignUp To Our Website.</h1>
   <form id = 'signin-fm' action="/login.php" method="post">
  <div class="form-group col-md-6">
  <label for="username">Username</label>
  <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
</div>
<div class="form-group col-md-6">
  <label for="password">Password</label>
  <input type="password" class="form-control" id="password" name="password"></input>
</div>


  <button type="submit" id="signup-btn" class="btn btn-primary">Signup</button>
</div>
</form>
   

  </div>
<script>

$(document).ready(function() {
          $("#signin-fm").click(function() {
            $("#status-message").addClass("show");
            
          });
        });

</script>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script></script>
  </body>
</html>