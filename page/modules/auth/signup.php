<?php
if(!defined('_CODE')){
    die('Access denied...');
}

/* if(isPost()){
    $filterAll = filter();

    $errors = [];

    //Validate fullname
    if(empty($filterAll['fullname'])){
        $errors['fullname']['required'] = 'Full name is required';
    } else {
        if(strlen($filterAll['fullname']) < 5){
            $errors['fullname']['min'] = 'The full name must be at least 5 characters'; 
        }
    }

    //Validate Email
    if(empty($filterAll['email'])){
        $errors['email']['required'] = 'Email is required';
    } else {
        $email = $filterAll['email'];
        $sql = "SELECT id FROM users WHERE email = '$email'";
        if((getRows($sql) > 0)){
            $errors['email']['unique'] = 'Email already exists';
        }
    }

    //Validate phone number
    if(empty($filterAll['phone'])){
        $errors['phone']['required'] = 'Phone number is required';
    } else {
        if(!isPhone($filterAll['phone'])){
            $errors['phone']['isPhone'] = 'Invalid phone number';
        }
    }

    //Validate Password
    if(empty($filterAll['password'])){
        $errors['password']['required'] = 'Password is required';
    } else {
        if(strlen($filterAll['password']) < 6){
            $errors['password']['min'] = 'The password must be at least 6 characters';
        }
    }

    //Validate Password Confirm
    if(empty($filterAll['confirmPassword'])){
        $errors['confirmPassword']['required'] = 'You must confirm your password';
    } else {
        if(($filterAll['password'] != $filterAll['confirmPassword'])){
            $errors['confirmPassword']['match'] = 'Confirm password does not match';
        }
    }

    if(empty($errors)){

      $activeToken = sha1(uniqid().time());

      $dataInsert = [
        'full_name' => $filterAll['fullname'],
        'email' => $filterAll['email'],
        'phone' => $filterAll['phone'],
        'password' => password_hash($filterAll['password'],PASSWORD_DEFAULT),
        'activeToken' => $activeToken,
        'create_at' => date('Y-m-d H:i:s')
      ];

      $insertStatus = insert('users',$dataInsert);
      if($insertStatus) {
        setFlashData('smg','dang ky thanh cong');
        setFlashData('smg_type','success');

        //thiet lap gui mail
      }

      redirect('?module=auth&action=signup');
    } else {
        setFlashData('smg','Please check the information again!');
        setFlashData('smg_type','danger');
        setFlashData('errors',$errors);
        setFlashData('old',$filterAll);
        redirect('?module=auth&action=signup');
    }
}

  $smg = getFlashData('smg');
  $smg_type = getFlashData('smg_type');
  $errors = getFlashData('errors');
  $old = getFlashData('old'); */

  if(isPost()){
    $filterAll = filter();
    $activeToken = sha1(uniqid().time());

    $dataInsert = [
      'fullname' => $filterAll['fullname'],
      'email' => $filterAll['email'],
      'phone' => $filterAll['phone'],
      'password' => password_hash($filterAll['password'],PASSWORD_DEFAULT),
      'activeToken' => $activeToken,
      'create_at' => date('Y-m-d H:i:s')
    ];

    $insertStatus = insert('users',$dataInsert);
    redirect('?module=auth&action=login');
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

    <title>Register</title>
    
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

<section class="vh-150 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-light text-black" style="border-radius: 1rem; margin-top: 40px">
          <div class="card-body p-5">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
              <p class="text-black-50 mb-5">Please enter your information!</p>

                <?php 
                    if(!empty($smg)){
                       getSmg($smg,$smg_type);
                    }

                ?>

              <form action="" method="post">
                
              <div class="form-group mg-form">
                  <label for="">Name</label>
                  <input type="fullname" class="form-control" placeholder="Enter full name" name="fullname">
                </div>

              <div class="form-group mg-form">
                  <label for="">Email</label>
                  <input type="email" class="form-control" placeholder="Enter email address" name="email">
                </div>

                <div class="form-group mg-form">
                  <label for="">Phone</label>
                  <input type="number" class="form-control" placeholder="Enter phone number" name="phone">
                </div>

                <div class="form-group mg-form">
                  <label for="">Password</label>
                  <input type="password" class="form-control" placeholder="Enter password" name="password">
                </div>

                <div class="form-group mg-form">
                  <label for="">Confirm Password</label>
                  <input type="password" class="form-control" placeholder="Enter confirm password" name="confirm_password">
                </div>

                <button class="btn btn-outline-dark btn-lg px-5" type="submit">Register</button>
              <hr>
              <div>
              <p class="mb-0">Already have an account <a href="?module=auth&action=login" class="text-black-50 fw-bold"> Sign In</a>
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