<?php
include ("signup_proses.php");
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign Up Customer</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets1/css/login.css">
    
    <!-- Favicons -->
  <link href="img/logo.jpg" rel="icon">
  <link href="img/logo.jpg" rel="apple-touch-icon">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
</head>
    
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets1/images/login.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="assets1/images/logo.jpg" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Sign Up Customer</p>
              <form action="signup.php" method="post">
                   <div class="form-group">
                    <label for="email" class="sr-only">Username</label>
                    <input type="Username" name="username" id="username" class="form-control" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password1" class="sr-only">Password</label>
                    <input type="password" name="password1" id="password1" class="form-control" placeholder="***********">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password2" class="sr-only">Confirm Password</label>
                    <input type="password" name="password2" id="password2" class="form-control" placeholder="Confirm Password">
                  </div>
                  
                  <input name="buatakun" id="buat" class="btn btn-block login-btn mb-4" type="submit" value="Buat">
                </form>
                
                <p class="login-card-footer-text">Do You Have Account? <a href="Login.php" class="text-reset">Login here</a></p>
                <p class="login-card-footer-text">Back To <a href="halamanpertama.php" class="text-reset">Home</a></p>
            </div>
          </div>
        </div>
      </div>
        
        
     
        
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
