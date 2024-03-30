<?php
if (!defined('_CODE')) {
  die('Access denied...');
}

//kiem tra trang thai dang nhap
/* $checkLogin = false;
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

if(!$checkLogin){
redirect('?module=user&action=gameplaypage');
} */

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
          setSession('id', $userId);
          redirect('?module=user&action=gameplaypage');
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

  <title>로그인</title>

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
            <div class="text-light font-weight-bold" style="width: 550px; height: 150px; border-radius: 20px;">
              <div class="p-2 d-flex justify-content-center align-items-center mt-4" style="flex-direction: column;">
                <h1>English and Game</h1>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="bg-white" style="width: 550px; height: 450px; border-radius: 20px;">
              <div class="p-4 d-flex justify-content-center align-items-center" style="flex-direction: column;">

                <h1>돌아온 것을 환영합니다</h1>
                <span>귀하의 계정에 액세스하려면 아래 정보를 입력하세요.</span>
                <?php 
                    if(!empty($smg)){
                     getSmg($smg,$smg_type);
                                  }
                 ?>
                <form action="" method="post">
                <input name="email" type="email" class="mt-4 p-2 mt-2 mr-2 border d-flex flex-column align-items-start" placeholder="이메일" style="width: 100%; height: 50px; border-radius: 10px;">
                <input name="password" type="password" class="mt-3 p-2 mt-2 mr-2 border d-flex flex-column align-items-start" placeholder="비밀번호" style="width: 100%; height: 50px; border-radius: 10px;">
                <button type="submit" class="btn btn-primary mt-4 font-weight-bold" style="width: 150px; height: 50px; border-radius: 10px;">로그인</button>
                </form>
                <span class="mt-4">
                계정이 없나요?
                  <a href="?module=auth&action=register" class="text-decoration-none">
                    <strong class="text-primary">여기에서 가입하세요!</strong>
                  </a>
                </span>
                <a href="?module=auth&action=forgot" class="text-decoration-none">
                  <button type="button" class="btn mt-2 font-weight-bold shadow" style="width: 180px; height: 50px; border-radius: 5px;">비밀번호 분실</button>
                </a>

              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


</body>

</html>