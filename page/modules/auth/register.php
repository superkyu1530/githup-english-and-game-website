<?php
if (!defined('_CODE')) {
    die('Access denied...');
}

//kiem tra trang thai dang nhap
$checkLogin = false;
if (getSession('loginToken')) {
    $tokenLogin = getSession('loginToken');

    //kiem tra voi database
    $queryToken = oneRaw("SELECT user_Id FROM tokenlogin WHERE token = '$tokenLogin' ");

    if (!empty($queryToken)) {
        $checkLogin = true;
    } else {
        removeSession('loginToken');
    }
}

//if(!$checkLogin){
//  redirect('?module=user&action=userClient');
//}

//quy trinh dang nhap
if (isPost()) {
    $filterAll = filter();
    if (!empty(trim($filterAll['email'])) && !empty(trim($filterAll['password']))) {
        $email = $filterAll['email'];
        $password = $filterAll['password'];

        $userQuery = oneRaw("SELECT password, id FROM users WHERE email = '$email'");

        if (!empty($userQuery)) {
            $passwordHash = $userQuery['password'];
            $userId = $userQuery['id'];
            if (password_verify($password, $passwordHash)) {

                //tao token login
                $tokenLogin = sha1(uniqid() . time());

                //Insert vao bang users.loginToken
                $dataInsert = [
                    'user_Id' => $userId,
                    'token' => $tokenLogin,
                    'create_at' => date('Y-m-d H:i:s')
                ];

                $insertStatus = insert('tokenlogin', $dataInsert);
                if ($insertStatus) {
                    //Insert thanh cong

                    //Luu tokeLogin vao session
                    setSession('loginToken', $tokenLogin);

                    redirect('?module=user&action=userClient');
                } else {
                    setFlashData('msg', 'Unable to login, please try again later');
                    setFlashData('msg_type', 'danger');
                }
            } else {
                setFlashData('msg', 'Incorrect password');
                setFlashData('msg_type', 'danger');
                redirect('?module=auth&action=login');
            }
        } else {
            setFlashData('msg', 'Email does not exist');
            setFlashData('msg_type', 'danger');
            redirect('?module=auth&action=login');
        }
    } else {
        setFlashData('msg', 'Please enter your email and password!');
        setFlashData('msg_type', 'danger');
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

    <div class="container-fluid bg-gradient vh-100" style="background: linear-gradient(to bottom left, #724cbd, #ed8c61);">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">

            <div>
                <div class="row mb-2">
                    <div class="col">
                        <div class="text-light font-weight-bold" style="width: 550px; height: 150px; border-radius: 20px;">
                            <div class="p-2 d-flex justify-content-center align-items-center mt-4" style="flex-direction: column;">
                                <h1>English and Game</h1>
                                <h1>Project</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="bg-white" style="width: 550px; height: 450px; border-radius: 20px;">
                            <div class="p-4 d-flex justify-content-center align-items-center" style="flex-direction: column;">

                                <h1>Welcome</h1>
                                <span>Fill in the information below to register your account</span>

                                <input type="text" class="mt-4 p-2 mt-2 mr-2 border d-flex flex-column align-items-start" placeholder="Email" style="width: 100%; height: 50px; border-radius: 10px;">
                                <input type="text" class="mt-3 p-2 mt-2 mr-2 border d-flex flex-column align-items-start" placeholder="Password" style="width: 100%; height: 50px; border-radius: 10px;">
                                <button type="button" class="btn btn-primary mt-4 font-weight-bold" style="width: 150px; height: 50px; border-radius: 10px;">Sign Up</button>
                                <span class="mt-4">
                                    Don't have an account?
                                    <a href="#" class="text-decoration-none">
                                        <strong class="text-primary">Sign Up here</strong>
                                    </a>
                                </span>
                                <a href="?module=auth&action=login" class="text-decoration-none">
                                    <button type="button" class="btn mt-2 font-weight-bold shadow" style="width: 280px; height: 50px; border-radius: 5px;">Do you have an account yet?</button>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

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