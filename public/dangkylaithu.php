<?php
include_once __DIR__ . '/../src/partials/header.php';

?>
<?php include_once __DIR__ . '/../src/partials/navbar.php'?>


<script src="\bootstrap-5.0.2-dist\js\bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<body>
<br>
    <br>
    <br>
  <div class="container">
  <nav aria-label="breadcrumb" >
        <ol class="breadcrumb" >
          <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page">Đăng ký lái thử</li>
        </ol>
      </nav>
                <h1>Đăng ký lái thử</h1>
   <div class="container text-center" id="suachua_ctn">
  <div class="row align-items-start">
    <div class="col">   
        <br>
     <img src="img/test1.jpg" alt="">
    </div>
    <div class="col">
    <!-- -id: int -> Khóa chính tự tăng.
	-fullname: varchar(50)
	-phone_number: varchar(11)
	-model_cars: varchar(45)
	-test_date: date
	-address: varchar(255) -->
        <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nhập họ tên">
        </div>
        <div class="mb-3">
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Nhập số điện thoại">
        </div>
        <div class="mb-3">
        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="ngày hẹn mượn">
        </div>
        <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Địa chỉ">
        </div>
        <div class="mb-3">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ghi chú..."></textarea>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
            VF-6
        </label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
           VF-7
        </label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
        <label class="form-check-label" for="flexRadioDefault3">
           VF-8
        </label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
        <label class="form-check-label" for="flexRadioDefault4">
           VF-9
        </label>
        </div>
    </div>
  </div>
</div>
  </div>

    
    
</body>
<style>
#suachua_ctn img{
    width: 500px;
    margin-bottom: 100px;
}
h1{
    text-align: center;
    margin-top: 50px;
    margin-bottom: 50px;
}

</style>

<?php include_once __DIR__ . '/../src/partials/footer.php' ?>