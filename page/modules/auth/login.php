<?php
if(!defined('_CODE')){
    die('Access denied...');
}

//kiem tra trang thai dang nhap
$checkLogin = false;
if(getSession('loginToken')){
    $tokenLogin = getSession('loginToken');

    //kiem tra voi database
    $queryToken = oneRaw("SELECT user_Id FROM tokenlogin WHERE token = '$tokenLogin' ");

    if(!empty($queryToken)){
        $checkLogin = true;
    } else {
        removeSession('loginToken');
    }
}

//if(!$checkLogin){
  //  redirect('?module=user&action=userClient');
//}

//quy trinh dang nhap
if(isPost()){
  $filterAll = filter();
  if(!empty(trim($filterAll['email'])) && !empty(trim($filterAll['password']))){
    $email =$filterAll['email'];
    $password =$filterAll['password'];

    $userQuery = oneRaw("SELECT password, id FROM users WHERE email = '$email'");

    if(!empty($userQuery)){
      $passwordHash = $userQuery['password'];
      $userId = $userQuery['id'];
      if(password_verify($password,$passwordHash)){

        //tao token login
        $tokenLogin = sha1(uniqid().time());

        //Insert vao bang users.loginToken
        $dataInsert = [
          'user_Id' => $userId,
          'token' => $tokenLogin,
          'create_at' => date('Y-m-d H:i:s')
        ];

        $insertStatus = insert('tokenlogin',$dataInsert);
        if($insertStatus){
          //Insert thanh cong

          //Luu tokeLogin vao session
          setSession('loginToken',$tokenLogin);

          redirect('?module=user&action=userClient');
        } else {
          setFlashData('msg','Unable to login, please try again later');
          setFlashData('msg_type','danger');
        }
        
      } else{
        setFlashData('msg','Incorrect password');
        setFlashData('msg_type','danger');
        redirect('?module=auth&action=login');
      }

    } else{
      setFlashData('msg','Email does not exist');
      setFlashData('msg_type','danger');
      redirect('?module=auth&action=login');
    }

  } else{
    setFlashData('msg','Please enter your email and password!');
    setFlashData('msg_type','danger');
    redirect('?module=auth&action=login');
  }
}

$msg = getFlashData('msg');
$msgType = getFlashData('msg_type');

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
        <div class="card bg-light text-black" style="border-radius: 1rem; margin-top: 40px; ">
          <div class="card-body">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-black-50 mb-5">Enter your email and password!</p>
              <?php 
                    if(!empty($msg)){
                       getSmg($msg,$msgType);
                    }

                ?>
              <form action="" method="post">

                <div class="form-group mg-form">
                  <label for="">Email</label>
                  <input type="email" class="form-control" placeholder="Enter email address" name="email">
                </div>

                <div class="form-group mg-form">
                  <label for="">Password</label>
                  <input type="password" class="form-control" placeholder="Enter password" name="password">
                </div>

                <button class="btn btn-outline-dark btn-lg px-5" type="submit">Login</button>

                <hr>
                <div>
                <p class="mb-0">Forgot password?<a href="?module=auth&action=forgot" class="text-black-50 fw-bold"> Here!</a>
                </p>

                <p class="mb-0">Do not have an account? <a href="?module=auth&action=signup" class="text-black-50 fw-bold"> Sign Up</a>
                </p>
                </div>

              </form>
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