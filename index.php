<?php 
session_start();
ob_start();
require_once "./mvc/bridge.php";
// require_once   './bootstap.php';
$myApp = new App();
?>