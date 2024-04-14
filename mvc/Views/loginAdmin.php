<?php
require_once "./public/partials/header.php";
require_once "./mvc/core/checkAdmin.php";

?>

<link rel="stylesheet" href="/public/css/Sigin.css">

<nav aria-label="breadcrumb" >
        <ol class="breadcrumb" >
          <li class="breadcrumb-item"><a href="/Home/homepage">Trang chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page">Đăng nhập</li>
        </ol>
      </nav>
<div class="container" id="container">
        <div class="form-container sign-in" style="margin-left: 200px;">
            <form action="checkAdmin" method="post">
                <h1>Đăng nhập</h1>
                <input type="text" id="username" name="username" placeholder="Username" required >
                <input type="password" id="password" name="password" placeholder="Mật khẩu" required> 
                <button type="submit" value="Login" >Đăng nhập</button>
            </form>
        </div>
    </div>

<?php 

?>
    
