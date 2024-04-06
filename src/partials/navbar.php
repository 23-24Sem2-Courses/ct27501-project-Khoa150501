
<link rel="stylesheet" href="\bootstrap-5.0.2-dist\css\bootstrap.css">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <style>
        #img-logo{
          width: 100px;
        }
        .container-navbar{
          position: fixed;
          width: 100%;
          z-index: 1000;
          margin-bottom: 20px;
          background-color: aliceblue;
          max-height: 200px;
        }
        .nav-link {
          color: black;
        }
    </style>
<script src="\bootstrap-5.0.2-dist\js\bootstrap.min.js"></script>
<div class="container-navbar">
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col-1 mt-2">
      <img src="img\logo.png" alt="" id="img-logo">
    </div>
    <div class="col-6">
    <nav class="navbar navbar-expand-lg bg-body-tertiary"> 
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gioiThieu.php">Giới Thiệu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Liên Hệ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dichvu.php">Dịch vụ</a>
        </li>
        <div class="menu">
          <ul>
        <li><a href="product.php" class="nav-item">Model Cars</a>
      <ul id="dropdown-cars">
        <li><a href="#">VF-6<img src="img/vf6/vf-6.png" alt=""></a></li>
        <li><a href="#">VF-7<img src="img\img-vf7\vf-7.png" alt=""></a></li>
        <li><a href="#">VF-8<img src="img/vf8/vf-8.png" alt=""></a></li>
        <li><a href="#">VF-9<img src="img/vf9/vf-9.png" alt=""></a></li>
      </ul>
    </li>
    </ul>
    </div>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Model Cars
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">VF5</a></li>
            <li><a class="dropdown-item" href="#">VF6</a></li>
            <li><a class="dropdown-item" href="#">VF7</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Xem thêm mẫu khác</a></li>
          </ul>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
    </div>
    <div class="col mt-2" >
    <a class="nav-link" href="signinup.php"><i class="fa fa-user"></i> Tài Khoản</a>
    </div>
    <div class="col-3 mt-2">
    <button type="button" class="btn btn-primary" id="dangky_Test">Đăng ký lái thử</button>
    </div>
  </div>
</div>
</div>
<style>
  #img-logo{
    cursor: pointer;
  }
  .menu ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.menu ul li {
  position: relative;
  display: inline-block;
}

.menu ul li a {
  display: block;
  padding: 10px 20px;
  text-decoration: none;
  color: #333;
}
.menu ul li a img{
  width: 200px;
}
/* #dropdown-cars{
  display: flex;
  text-align: center;
} */
.menu ul li ul {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #fff;
  border: 1px solid #ccc;
}

.menu ul li:hover ul {
  display: block;
}

.menu ul li ul li {
  display: block;
}

.menu ul li ul li a {
  padding: 10px 20px;
}

.menu ul li ul li:hover {
  background-color: aliceblue;
}

</style>
 <script>
document.getElementById("img-logo").addEventListener("click", function() {
  window.location.href = "index.php"; 
});
</script>



    