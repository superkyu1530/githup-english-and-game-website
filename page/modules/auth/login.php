<?php
if(!defined('_CODE')){
    die('Access denied...');
}
if(isPost()){
$email = $_POST['email'];
$password = $_POST['password'];

$userQuery = oneRaw("SELECT password FROM users WHERE email = '$email");

if (!empty($userQuery)) {
  $passwordHash = $userQuery['password'];
  if($password==$passwordHash){
    
    
  }
}

}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Grad School HTML5 Template</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
  </head>

<body>
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="?module=home&action=homepage"><em>Grad</em> School</a>
    </div>
</header>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem; height: 650px; margin-top: 40px; ">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>
              <form action="" method="post">
              <div class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" class="form-control form-control-lg " name="email" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password"/>
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="?module=auth&action=forgot">Forgot password?</a></p>

              <button class="btn btn-outline-light btn-lg px-5" type="submit"><a href="?module=user&action=userClient">Login</a></button>
              </form>
            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="?module=auth&action=signup" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2024 by Grad School  
        </div>
      </div>
    </div>
  </footer>
</body>
</html>