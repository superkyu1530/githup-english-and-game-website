
<?php

const _MODULE = 'home';
const _ACTION = 'homepage';

const _CODE = true;

//thiết lập host
define('_WEB_HOST','http://'. $_SERVER['HTTP_HOST'] .'/EnglishAndGameWebsite/page/');
define('_WEB_HOST_ASSETS',_WEB_HOST. '/assets');

//thiết lập path
define('_WEB_PATH', __DIR__);
define('_WEB_PATH_ASSETS', _WEB_PATH .'/assets');
define('_WEB_PATH_VENDOR', _WEB_PATH .'/vendor');

//database
const _HOST = 'localhost';
const _DB = 'eg_database';
const _USER = 'root';
const _PASS = '';