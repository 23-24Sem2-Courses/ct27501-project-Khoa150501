<?php
include_once __DIR__ . '/../src/partials/header.php';

?>


<script src="\bootstrap-5.0.2-dist\js\bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Montserrat", sans-serif;
}
body {
  background-color: #c9d6ff;
  background: linear-gradient(to right #e2e2e2, #c9d6ff);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  height: 100vh;
  /* margin-top: 100px; */
}
.container {
  background-color: #fff;
  border-radius: 30px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
  position: relative;
  overflow: hidden;
  width: 768px;
  max-width: 100%;
  min-height: 480px;
}
.container p {
  font-size: 14px;
  line-height: 20px;
  letter-spacing: 0.3px;
  margin: 20px 0;
}
.container samp {
  font-size: 12px;
}
.container a {
  font-size: 17px;
  text-decoration: none;
  margin: 15px 0 10px;
}
.container button {
  background-color: #512da8;
  color: #fff;
  font-size: 12px;
  padding: 10px 45px;
  border: 1px solid transparent;
  border-radius: 8px;
  font-weight: 600;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  margin-top: 10px;
  cursor: pointer;
}
.container button.hidden {
  background-color: transparent;
  border-color: #fff;
}
.container form {
  background-color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 40px;
  height: 100%;
}
.container input {
  background-color: #eee;
  border: none;
  margin: 8px 0;
  padding: 10px 15px;
  font-size: 13px;
  border-radius: 8px;
  width: 100%;
  outline: none;
}
.form-container {
  position: absolute;
  top: 0;
  height: 100%;
  transition: all 0.6s ease-in-out;
}
.form-container .fp {
  font-size: 12px;
}
.sign-in {
  left: 0;
  width: 50%;
  z-index: 2;
}
.container.active .sign-in {
  transform: translateX(100%);
}
.sign-up {
  left: 0;
  width: 50%;
  opacity: 0;
  z-index: 1;
}
.container.active .sign-up {
  transform: translateX(100%);
  opacity: 1;
  z-index: 5;
  animation: move 0.6s;
}
@keyframes move {
  0%,
  49.99% {
    opacity: 0;
    z-index: 1;
  }
  50%,
  100% {
    opacity: 1;
    z-index: 5;
  }
}
.social-icons {
  margin: 20px 0;
}
.social-icons a {
  border-radius: 20%;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  margin: 0 3px;
  width: 40px;
  height: 40px;
  border: 1px solid #000;
}
.toggle-container {
  position: absolute;
  top: 0;
  left: 50%;
  width: 50%;
  height: 100%;
  overflow: hidden;
  transition: all 0.6s ease-in-out;
  z-index: 1000;
  border-radius: 150px 0 0 100px;
}
.container.active .toggle-container {
  transform: translateX(-100%);
  border-radius: 0 150px 100px 0;
}
.toggle {
  background-image: url(img/library_2_bk.jpg);
  /* background-size: cover; */
  background-size: auto;
  background-repeat: no-repeat;
  /* background-color: #512da8; */
  height: 100%;
  background: linear-gradient(to right #5c6bc0, #512da8);
  color: #fff;
  position: relative;
  left: -100%;
  height: 100%;
  width: 200%;
  transform: translateX(0);
  transition: all 0.6s ease-in-out;
}
.container.active .toggle {
  transform: translateX(50%);
}
.toggle-panel {
  position: absolute;
  width: 50%;
  height: 100%;
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  padding: 0 30px;
  text-align: center;
  top: 0;
  transform: translateX(0);
  transition: all 0.6s ease-in-out;
}
.toggle-left {
  transform: translateX(-200%);
}
.container.active .toggle-left {
  transform: translateX(0);
}
.toggle-right {
  right: 0;
  transform: translateX(0);
}
.container.active .toggle-right {
  transform: translateX(200%);
}

</style>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<header>
<nav aria-label="breadcrumb" >
        <ol class="breadcrumb" >
          <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page">Đăng nhập/Đăng ký</li>
        </ol>
      </nav>
</header>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="#">
                <h1>Đăng ký</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="icon"><i class='bx bxl-google'></i></a>
                    <a href="#" class="icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="#" class="icon"><i class='bx bxl-github'></i></a>
                </div>
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
                <div class="social-icons">
                    <a href="#" class="icon"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="icon"><i class='bx bxl-google'></i></a>
                    <a href="#" class="icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="#" class="icon"><i class='bx bxl-github'></i></a>
                </div>
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
    
    

