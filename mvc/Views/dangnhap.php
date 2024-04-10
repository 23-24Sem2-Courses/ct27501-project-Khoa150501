<?php
require_once "./public/partials/header.php"

?>

<link rel="stylesheet" href="/public/css/Sigin.css">
<script src="\bootstrap-5.0.2-dist\js\bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<header>
<nav aria-label="breadcrumb" >
        <ol class="breadcrumb" >
          <li class="breadcrumb-item"><a href="/Home/homepage">Trang chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page">Đăng nhập / Đăng ký</li>
        </ol>
      </nav>
</header>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="#">
                <h1>Đăng ký</h1>
                <!--<div class="social-icons">
                    <a href="#" class="icon"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="icon"><i class='bx bxl-google'></i></a>
                    <a href="#" class="icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="#" class="icon"><i class='bx bxl-github'></i></a>
                </div>-->
                <!-- <samp>or use your email for registration</samp> -->
                <input type="text" name="fullname" placeholder="Họ tên">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password" >
                <input type="tel" class="form-control" name="phone" required placeholder="Số điện thoại">
                <input  type="text" class="form-control" name="address" required placeholder="Địa chỉ">

                <button>Đăng ký</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="#">
                <h1>Đăng nhập</h1>
                <!--<div class="social-icons">
                    <a href="#" class="icon"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="icon"><i class='bx bxl-google'></i></a>
                    <a href="#" class="icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="#" class="icon"><i class='bx bxl-github'></i></a>
                </div>-->
                <!-- <samp>or use your email Password</samp> -->
                
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password"> 
                <a href="#" class="fp">Quên mật khẩu?</a>
                <button>Đăng nhập</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Đăng nhập ngay!</h1>
                    <!-- <p>Enter your personal details to use all of site features</p> -->
                    <button class="hidden" id="login">Đăng nhập</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Đăng ký tài khoản ngay!</h1>
                    <p>Đăng ký tài khoản để được chương trình khuyến mãi, dịch vụ VinFast.</p>
                    <button class="hidden" id="register">Đăng ký tài khoản</button>
                </div>
            </div>
        </div>
    </div>
</body>


<script>
const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});
loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});
</script>
    <script src="../lib/bootstrap-5.0.2-dist/js/login.js"></script>
    
    

