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
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page">Dịch vụ</li>
        </ol>
      </nav>
                <h1>Dịch vụ sửa chữa</h1>
   <div class="container text-center" id="suachua_ctn">
  <div class="row align-items-start">
    <div class="col">   
        <br>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><p>Kiểm tra chẩn đoán các vấn đề gặp phải trên xe của Khách hàng. Đưa ra phương án xử lý để chiếc xe luôn vận hành ở trạng thái an toàn nhất.</p></li>
            <li class="list-group-item"><p>Tất cả các phụ tùng bảo dưỡng, sửa chữa thay thế đều được cung cấp chính hãng, luôn sẵn sàng đáp ứng nhu cầu của Khách hàng nhanh nhất và chất lượng tốt nhất.</p></li>
            <li class="list-group-item"><p>Trang thiết bị hỗ trợ kiểm tra, chẩn đoán và sửa chữa được đầu tư đồng bộ từ các nước Ý, Nhật, Đức… đảm bảo các tiêu chuẩn kỹ thuật khắt khe của xe VinFast.</p></li>
            <li class="list-group-item"><p>Hệ thống quản lý thông tin dịch vụ xe đồng bộ trên tất cả các NPP/SR toàn quốc. Giúp cho việc kiểm tra lịch sử sửa chữa và chăm sóc Khách hàng một cách tốt nhất.</p></li>
            <li class="list-group-item"><p>Đội ngũ VinFast được đào tạo chuẩn hóa về kỹ thuật trực tiếp tại nhà máy sản xuất xe ô tô VinFast. Đạt tiêu chuẩn về năng lực chẩn đoán, sửa chữa và bảo dưỡng.</p></li>
        </ul>
    </div>
    <div class="col">
      <img src="img/suachuachung.png" alt="sua chua chung">
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
    border-bottom: 2px solid black;
    max-width: 500px;
}

</style>

<?php include_once __DIR__ . '/../src/partials/footer.php' ?>