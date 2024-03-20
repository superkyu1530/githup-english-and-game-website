<?php
if(!defined('_CODE')){
    die('Access denied...');
}

// kiem tra phuong thuc GET
function isGet(){
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        return true;
    }
    return false;
}

//kiem tra phuong thuc POST
function isPost(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        return true;
    }
    return false;
}

//ham loc du lieu vao
