<?php 
define('__DIR_ROOT', __DIR__);

//http root
$web_root = $_SERVER['HTTP_HOST'];

require_once "./mvc/configs/router.php";
require_once "./mvc/core/Router.php";
require_once "./mvc/core/App.php";
require_once "./mvc/core/controllers.php"; 
require_once "./mvc/core/connectDB.php";
?>