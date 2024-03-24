<?php
if (!defined('_CODE')) {
    die('Access denied...');
};

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// kiem tra phuong thuc GET
function isGet()
{
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        return true;
    }
    return false;
}

//kiem tra phuong thuc POST
function isPost()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        return true;
    }
    return false;
}

//ham loc du lieu vao
function filter()
{
    if (isGet()) {
        //xu ly du lieu hien thi ra
        if (!empty($_GET)) {
            foreach ($_GET as $key => $value) {
                $key = strip_tags($key);
                if (is_array($value)) {
                    $filterArr[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                } else {
                    $filterArr[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                }
            }
        }
    }

    if (isPost()) {
        //xu ly du lieu hien thi ra
        if (!empty($_POST)) {
            foreach ($_POST as $key => $value) {
                $key = strip_tags($key);
                if (is_array($value)) {
                    $filterArr[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                } else {
                    $filterArr[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                }
            }
        }
    }

    return $filterArr;
}

//ham gui mail
function sendMail($to, $subject, $content)
{


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings 
        $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'user@example.com';                     //SMTP username
        $mail->Password   = 'secret';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('from@example.com', 'Mailer');
        $mail->addAddress($to);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML

        $mail->Subject = $subject;
        $mail->Body    = $content;

        //Send Email
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

//kiem tra mail
function isEmail($email)
{
    $checkEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    return $checkEmail;
}

//kiem tra so nguyen INT
function isNumberInt($number)
{
    $checkNumber = filter_var($number, FILTER_VALIDATE_INT);
    return $checkNumber;
}

//kiem tra so thuc Float
function isNumberFloat($number)
{
    $checkNumber = filter_var($number, FILTER_VALIDATE_FLOAT);
    return $checkNumber;
}

//kiem tra so dien thoai
function isPhone($phone)
{
    $checkZero = false;

    //dieu kien ky tu dau tien la so 0
    if ($phone[0] == '0') {
        $checkZero = true;
        $phone = substr($phone, 1);
    }

    //dien kien phai co du tu 9 so
    $checkNumber = false;
    if (isNumberInt($phone) && (strlen($phone) >= 9)) {
        $checkNumber = true;
    }

    if ($checkZero && $checkNumber) {
        return true;
    }

    return false;
}

//Ham dinh dang thong bao loi 
<<<<<<< HEAD
function getSmg($smg, $type = 'success')
{
    echo '<div> class= "alert alert-' . $type . '">';
=======
function getSmg($smg, $type = ''){
    echo '<div> class= "alert alert-'.$type.'">';
>>>>>>> 614c2310b863658b491d730c2ef98387da8a5b0e
    echo $smg;
    echo '</div>';
}

//ham chuyen huong
function redirect($path = 'index.php')
{
    header("location: $path");
    exit;
}

//ham thong bao loi
function from_error($fileName, $beforeHtml = '', $afterHtml = '', $errors)
{
    return (!empty($errors[$fileName])) ? $beforeHtml . reset($errors[$fileName]) . $afterHtml : null;
}

//Ham hien thi du lieu cu
function old($fileName, $old, $default = null)
{
    return (!empty($old[$fileName])) ? $old[$fileName] : $default;
}
<<<<<<< HEAD
=======

//ham kiem tra trang thai dang nhap
function isLogin(){
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

return $checkLogin;
}
>>>>>>> 614c2310b863658b491d730c2ef98387da8a5b0e
