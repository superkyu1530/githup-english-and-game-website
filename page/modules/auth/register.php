<?php
if (!defined('_CODE')) {
    die('Access denied...');
}

$smg = getFlashData('smg');
$smg_type = getFlashData('smg_type');
$errors = getFlashData('errors');
$old = getFlashData('old'); 

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

    <title>등록 페이지</title>

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

    <div class="container-fluid bg-gradient vh-100" style="background: linear-gradient(to bottom left, #724cbd, #ed8c61);">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">

            <div>
                <div class="row mb-2">
                    <div class="col">
                        <div class="text-light font-weight-bold" style="width: 550px; height: 100px; border-radius: 20px;">
                            <div class="p-2 d-flex justify-content-center align-items-center mt-4" style="flex-direction: column;">
                                <h1>English and Game</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="bg-white" style="width: 550px; height: 600px; border-radius: 20px;">
                            <div class="p-4 d-flex justify-content-center align-items-center" style="flex-direction: column;">
                            <form action="" method="post">
                                <h1>환영</h1>
                                <span>계정을 등록하려면 아래 정보를 입력하세요.</span>
                                <?php 
                                 if(!empty($smg)){
                                    getSmg($smg,$smg_type);
                                                 }

                                ?>
                                <input name="name" type="name" class="mt-4 p-2 mt-2 mr-2 border d-flex flex-column align-items-start" placeholder="성명" style="width: 100%; height: 50px; border-radius: 10px;">
                                <input name="phone" type="number" class="mt-4 p-2 mt-2 mr-2 border d-flex flex-column align-items-start" placeholder="전화 번호" style="width: 100%; height: 50px; border-radius: 10px;">
                                <input name="email" type="email" class="mt-4 p-2 mt-2 mr-2 border d-flex flex-column align-items-start" placeholder="Email" style="width: 100%; height: 50px; border-radius: 10px;">
                                <input name="password" type="password" class="mt-3 p-2 mt-2 mr-2 border d-flex flex-column align-items-start" placeholder="비밀번호" style="width: 100%; height: 50px; border-radius: 10px;">
                                <input name="confirmPassword" type="password" class="mt-4 p-2 mt-2 mr-2 border d-flex flex-column align-items-start" placeholder="비밀번호 확인" style="width: 100%; height: 50px; border-radius: 10px;">

                                
                                <button type="submit" class="btn btn-primary mt-4 font-weight-bold" style="width: 150px; height: 50px; border-radius: 10px;">가입하기</button>
                                <span class="mt-4">
                                이미 계정이 있나요?
                                    <a href="?module=auth&action=login" class="text-decoration-none">
                                        <strong class="text-primary">여기에서 로그인하세요!</strong>
                                    </a>
                                </span>
                                <!-- <a href="?module=auth&action=login" class="text-decoration-none">
                                    <button type="button" class="btn mt-2 font-weight-bold shadow" style="width: 280px; height: 50px; border-radius: 5px;">Do you have an account yet?</button>
                                </a> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>

</html>