<?php
const _CODE = true;
if(!defined('_CODE')){
    die('Access denied...');
}


const _MODULE = 'home';
const _ACTION = 'homepage';



//thiết lập host
define('_WEB_HOST','http://'. $_SERVER['HTTP_HOST'] .'/EnglishAndGameWebsite/page/');
define('_WEB_HOST_ASSETS',_WEB_HOST. '/assets');

//database
const _HOST = 'localhost';
const _DB = 'eng_database';
const _USER = 'root';
const _PASS = '';

//thiết lập path
define('_WEB_PATH', __DIR__);
define('_WEB_PATH_ASSETS', _WEB_PATH .'/assets');
define('_WEB_PATH_VENDOR', _WEB_PATH .'/vendor');

