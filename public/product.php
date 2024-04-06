<?php
include_once __DIR__ . '/../src/partials/header.php';

?>

<?php include_once __DIR__ . '/../src/partials/navbar.php'?>

<script src="\bootstrap-5.0.2-dist\js\bootstrap.min.js"></script>
<link rel="stylesheet" href="lib\css\all.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>
  .modal-cnt-bg{
    background-color: #3C3C3C;
    color: aliceblue;
}
.modal-body img {
   max-width: 1000px;
}
.modal-body {
  justify-content: center;
  text-align: center;

}
.modal-in-cnt h5{
    border-bottom: 1px solid wheat;
    width: 200px;
    margin-left: 40%;
}
.card-body>button a{
    color: aliceblue;
    text-decoration: none;
}
.boder-card-ct-vf7{
  text-align: start;
  border: 1px solid #00CED1;
  border-radius: 10px;
}
.boder-card-ct-vf7>h2{
  margin-left: 40px;
  font-style: oblique;
  font-weight: bold;
}
#dangkyForm{
  width: 500px;
  text-align: center;
  border: 1px solid #668B8B;
  border-radius: 5px;
  padding: 10px;
  
}
#dangkyFormvf6{
  width: 500px;
  text-align: center;
  border: 1px solid #668B8B;
  border-radius: 5px;
  padding: 10px;
  
}
#dangkyFormvf8{
  width: 500px;
  text-align: center;
  border: 1px solid #668B8B;
  border-radius: 5px;
  padding: 10px;
  
}
#dangkyFormvf9{
  width: 500px;
  text-align: center;
  border: 1px solid #668B8B;
  border-radius: 5px;
  padding: 10px;
  
}
.product-slider img{
    max-width: 1400px;

}
.product-slide-cnt-in{
    margin-bottom: 500px;
}
.product-slide-cnt-in h1{
    font-style: italic;
    font-style: bold;
}
.product-slide-cnt-in button>a{
    text-decoration: none;
}
</style>

<body>
<div id="carouselExampleCaptions" class="carousel slide">

  <div class="carousel-inner">
    <div class="carousel-item active">
    
      <div class="carousel-caption d-none d-md-block">
        <div class="product-slide-cnt-in">
        <h1>VF-E43</h1>
        <h5>Cùng bạn bứt phá mọi thử thách</h5>
        <button  type="button" class="btn btn-primary"> 
        <a href="#" class="text-light">Đặt cọc <br>50.000.000 VND</a>
        </button>
        </div>
      </div>
      
      <img src="img/slider/library_7.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
    <div class="content mt-4">
      <div class="row">
        <div class="col bo-loc">
        <h1>Bộ lọc theo giá tiền</h1>
  <div class="filter">
    <label for="priceFilter">Lọc theo giá tiền:</label>
    <select id="priceFilter">
      <option value="all">Tất cả</option>
      <option value="100000000">Dưới 100 triệu</option>
      <option value="200000000">Dưới 200 triệu</option>
      <option value="300000000">Dưới 300 triệu</option>
      <option value="500000000">Dưới 500 triệu</option>
    </select>
  </div>
  <div class="show" ></div>
        </div>

        <!-- card col-1-->
        <div class="col" id="container-product-vf">
        
          <div class="card mt-2 " style="width: 28rem;" class="product" price-data="100000000">
          <img src="img/img-vf7/vf-7.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">VF-7</h5>
            <p class="card-text">VF 7 là một bước tiến đột phá trong thiết kế xe ô tô của VinFast.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Dòng xe: C-SUV </li>
            <li class="list-group-item">5 Chỗ</li>
            <li class="list-group-item">Quãng đường di chuyển (WLTP)*: 418 km/lần sạc</li>
            <li class="list-group-item"><h5>Giá chỉ từ: <b>850.000.000 VND</b></h5></li>
          </ul>
          <div class="card-body">
            <button  type="button" class="btn btn-primary"> 
              <a href="shopping.html" class="text-light">Đặt cọc</a>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropvf7">
                Xem chi tiết
            </button>
          </div>
        </div>
        <div class="card mt-2" style="width: 28rem;" class="product" price-data="200000000">
          <img src="img/vf6/vf-6.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">VF-6</h5>
            <p class="card-text">Cùng VF 6 ghi dấu từng khoảnh khắc, khởi đầu mọi hành trình.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Dòng xe: C-SUV </li>
            <li class="list-group-item">5 Chỗ</li>
            <li class="list-group-item">Quãng đường di chuyển (WLTP)*: 399 km/lần sạc</li>
            <li class="list-group-item"><h5>Giá chỉ từ: <b>670.000.000 VND</b></h5></li>
          </ul>
          <div class="card-body">
            <button  type="button" class="btn btn-primary"> 
              <a href="shopping.html" class="text-light">Đặt cọc</a>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropvf6">
                Xem chi tiết
            </button>
          </div>
        </div>
      </div>
      <!-- card col-2-->
        <div class="col">
          <div class="card mt-2" style="width: 28rem;" class="product" price-data="300000000">
            <img src="img/vf8/vf-8.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">VF-8</h5>
              <p class="card-text">VF 8 đạt đến sự kết hợp hoàn hoàn hảo giữa chất lượng và giá trị</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Dòng xe: D-SUV </li>
              <li class="list-group-item">5 Chỗ</li>
              <li class="list-group-item">Quãng đường di chuyển: 471km/lần sạc</li>
              <li class="list-group-item"><h5>Giá chỉ từ: <b>1.090.000.000 VND</b></h5></li>
            </ul>
            <div class="card-body">
              <button  type="button" class="btn btn-primary"> 
                <a href="shopping.html" class="text-light">Đặt cọc</a>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropvf8">
                  Xem chi tiết
              </button>
            </div>
          </div>  
          <div class="card mt-2 mb-2" style="width: 28rem;"class="product" price-data="400000000">
            <img src="img/vf9/vf-9.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">VF-9</h5>
              <p class="card-text">VF 9 là mẫu xe SUV 7 chỗ hàng đầu của VinFast.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Dòng xe: E-SUV </li>
              <li class="list-group-item">6-7 Chỗ</li>
              <li class="list-group-item">Quãng đường di chuyển: 626km/lần sạc</li>
              <li class="list-group-item"><h5>Giá chỉ từ: <b>1.491.000.000 VND</b></h5></li>
            </ul>
            <div class="card-body">
              <button  type="button" class="btn btn-primary"> 
                <a href="shopping.html" class="text-light">Đặt cọc</a>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropvf9">
                  Xem chi tiết
              </button>
            </div>
          </div>  
        </div>
      </div>
  <!-- Modal 1-->
  <div class="modal" id="staticBackdropvf7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content modal-cnt-bg">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">VF-7</h1>
          <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-close" style="color: white;"></i></button>
        </div>
        <div class="modal-body">
        <h3>  VF 7 là một bước tiến đột phá trong thiết kế xe ô tô của VinFast.</h3><br>
          <img src="img/img-vf7/vf7-hero-car.png" alt="">
          <div class="modal-in-cnt">
          <h5>Thông số chi tiết</h5><br>
            <p>Nội thất rộng rãi (Chiều dài cơ sở 2.840 mm, Dài x Rộng x Cao tương đương 4.545 x 1.890 x 1.635,75 mm)</p>
            <p>Quãng đường chạy một lần sạc đầy 431 km *</p>
            <p>Sở hữu 8 túi khí</p>
            <p>Tăng tốc 0 - 100 km/h trong 5,8 s *</p>
          <h2>Triết lý thiết kế “Vũ trụ phi đối xứng</h2><br>
            <p>Lấy cảm hứng từ vũ trụ và các vật thể bay trong không gian, VF 7 hiện thân cho sự tự do, công nghệ, thời đại, cá tính, mạnh mẽ và thể thao, thoả mãn mọi tâm hồn đam mê thẩm mỹ và tốc độ.</p>
              <img src="img/img-vf7/vf7-img-removebg-preview.png" alt="">

          <h2>Thiết kế nội thất hướng tới người lái.</h2><br>
          <img src="img/img-vf7/vf7-noi-that-overview.png" alt=""> <br>

          <h2>Tiện nghi thông minh tích hợp trên màn hình giải trí</h2> <br>
          <p>Với kích cỡ 12,9 inch, có thể tùy chỉnh cá nhân hóa theo người dùng. Màn hình giải trí cảm ứng của VF 7 có thể giúp điều khiển các chức năng trên xe bằng cách vuốt/chạm nhẹ hoặc ra lệnh cho trợ lý ảo qua giọng nói.</p>
          <img src="img/img-vf7/vf7-tien-nghi-3.png" alt="">


          <h2>Hệ thống trợ lái nâng cao</h2> <br>
          <p>Hỗ trợ lái trên đường cao tốc, Ứng dụng công nghệ và trang thiết bị hiện đại nhất, hệ thống trợ lái nâng cao VinFast đem lại trải nghiệm lái thư thái, dễ dàng để bạn an tâm tận hưởng cuộc sống.</p><br>

          <iframe width="1000" height="500" src="https://static-bucket-sfcc.vinfastauto.com/6-traffic-jam-and-highway-assist.mp4" frameborder="0" allowfullscreen></iframe> <br> <br>

             <br> <br>
    
          <div class="container text-center mt-5">
            <div class="row align-items-start">
              <div class="col">
              <h3 style="text-align: start;">3,5 km - Khoảng cách nhỏ cho mục tiêu lớn</h3>

              <p style="text-align: start;">Định hình tiên phong thúc đẩy ngành công nghiệp xe điện, hướng tới một tương lai Xanh và Thông Minh, VinFast đã đầu tư hàng trăm triệu USD phát triển hạ tầng, từng bước "phủ rộng" trạm sạc xe điện:</p>
              <ul style="text-align: start;">
              <li>Hệ thống trạm sạc xe điện VinFast trải dài 63 tỉnh và thành phố.</li>
              <li>106 tuyến quốc lộ quan trọng đều có trạm sạc.</li>
              <li>80/85 thành phố đã được lắp đặt hệ thống trạm sạc.</li>
              <li>Khoảng cách ngắn 3,5 km giữa 2 trạm sạc trong thành phố</li>
              </ul>
              <br>
              </div>
              <div class="col" >
                <img src="img/vf7-cactramsac.png " style="width: 100%" alt="Các trạm sạc"> <br> <br>
              </div>
            </div> <br> <br>
            <div id="dangkyForm" style="display: none;" class="bg-dark m-auto">
         <h6>Đăng ký ngay hôm nay để nhận thông tin chính thức và tư vấn từ VinFast</h6> <br>
            <div class="mb-3"  style="color: aliceblue;">
              <!-- <label for="exampleFormControlInput1" class="form-label">Email</label> -->
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nhập Email của bạn!!">
            </div>
            <div class="mb-3"  style="color: aliceblue;">
              <!-- <label for="exampleFormControlInput1" class="form-label">Họ và tên</label> -->
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nhập họ tên!!">
            </div>
            <div class="mb-3"  style="color: aliceblue;">
              <!-- <label for="exampleFormControlInput1" class="form-label">Số điện thoại</label> -->
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Số điện thoại!!">
            </div>
            <div class="mb-3">
              <!-- <label style="text-align: start;" >Ghi chú</label> -->
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ghi chú..."></textarea>
            </div>
            <button type="button" class="btn btn-primary">Đăng ký tư vấn</button>
          </div> <br>
            <h2>Tùy chọn cho ngân sách của bạn</h2>
          <div class="container text-center mt-5">
            <div class="row align-items-start">
              <div class="col m-1">
                <div class="boder-card-ct-vf7">
                <h2> BASE </h2>
                <ul>Giá xe không bao gồm PIN</ul>
                <ul><b>850.000.000 VNĐ</b></ul>
                <ul>Giá xe bao gồm PIN</ul>
                <ul><b>999.000.000 VNĐ</b></ul>               
                </div>
              </div>
              <div class="col m-1">
              <div class="boder-card-ct-vf7">
                <h2> PLUS</h2>
                <ul>Giá xe không bao gồm PIN</ul>
                <ul><b>999.000.000 VNĐ VNĐ</b></ul>
                <ul>Giá xe bao gồm PIN</ul>
                <ul><b>1.199.000.000 VNĐ</b></ul>               
                </div>
              </div>
              <div class="col m-1">
              <div class="boder-card-ct-vf7">
                <h2> PLUS Trần kính</h2> 
                <ul>Giá xe không bao gồm PIN</ul>
                <ul><b>1.024.000.000 VNĐ</b></ul>
                <ul>Giá xe bao gồm PIN</ul>
                <ul><b>1.224.000.000 VNĐ</b></ul>               
                </div>
              </div>
            </div>
          </div> <br>
          <h2>Sự khác biệt tổng quan giữa bản BASE và PLUS</h2> <br>
          <br>
          <table class="table" style="color: aliceblue;">
          <thead>
            <tr>
              <th scope="col"><h2>VF-7</h2></th>
              <th scope="col">BASE</th>
              <th scope="col">PLUS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Chiều dài cơ sở (mm)</th>
              <td>2.840</td>
              <td>2.840</td>
            </tr>
            <tr>
              <th scope="row">Dài x Rộng x Cao (mm)</th>
              <td>4.545 x 1.890 x 1.635,75</td>
              <td>4.545 x 1.890 x 1.635,75</td>
            </tr>
            <tr>
              <th scope="row">Quãng đường chạy một lần sạc đầy (km)*</th>
              <td>375</td>
              <td>431</td>
            </tr>
            <tr>
              <th scope="row">Công suất tối đa (kW)</th>
              <td>130</td>
              <td>260</td>
            </tr>
            <tr>
              <th scope="row">Mô men xoắn cực đại (Nm)</th>
              <td>250</td>
              <td>500</td>
            </tr>
            <tr>
              <th scope="row">Tốc độ tối đa (km/h)</th>
              <td>150</td>
              <td>175</td>
            </tr>
            <tr>
              <th scope="row">Tăng tốc 0 - 100 km/h (s)</th>
              <td>10 s</td>
              <td>5.8 s</td>
            </tr>
          </tbody>
        </table> <br>
        <br>
        </div>
      </div>
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Thoát</button>
          <button type="button" class="btn btn-primary" id="dangkyBtn">Đăng ký tư vấn</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /Modal -->
    <!-- Modal 2-->
    <div class="modal" id="staticBackdropvf6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content modal-cnt-bg">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">VF-6</h1>
          <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-close" style="color: white;"></i></button>
        </div>
        <div class="modal-body">
        <h3> Cùng VF 6 ghi dấu từng khoảnh khắc,khởi đầu mọi hành trình.</h3><br>
          <img src="img/vf6/vf-6.png" alt="">
          <div class="modal-in-cnt">
          <h5>Thông số chi tiết</h5><br>
            <p>Nội thất rộng rãi (4.238 x 1.820 x 1.594)</p>
            <p>Quãng đường chạy một lần sạc đầy 399 km/lần sạc*</p>
            <p>Sở hữu 8 túi khí</p>
            <p>Tăng tốc 0 - 100 km/h trong 5,8 s *</p>
          <h2>Triết lý thiết kế “Cặp đối lập tự nhiên”</h2><br>
            <p>VF 6 là tuyệt tác nghệ thuật được thiết kế dựa trên triết lý “Cặp đối lập tự nhiên”, tạo nên sự cân bằng hoàn hảo giữa các yếu tố tưởng chừng như đối lập: thú vị - tinh tế, công nghệ - con người.</p>
              <img src="img/vf6/2023_vinfast_vf8.png" alt="">

          <h2>Thiết kế nội thất hướng tới người lái.</h2><br>
          <img src="img/vf6/bottom-banner.png" alt=""> <br>

          <h2>Tiện nghi thông minh tích hợp trên màn hình giải trí</h2> <br>
          <p>Với kích cỡ 12,9 inch, có thể tùy chỉnh cá nhân hóa theo người dùng. Màn hình giải trí cảm ứng của VF 6 có thể giúp điều khiển các chức năng trên xe bằng cách vuốt/chạm nhẹ hoặc ra lệnh cho trợ lý ảo qua giọng nói.</p>
          <img src="img/vf6/VF6-mahinh.png" alt="">


          <h2>Hệ thống trợ lái nâng cao</h2> <br>
          <p>Hỗ trợ lái trên đường cao tốc, Ứng dụng công nghệ và trang thiết bị hiện đại nhất, hệ thống trợ lái nâng cao VinFast đem lại trải nghiệm lái thư thái, dễ dàng để bạn an tâm tận hưởng cuộc sống.</p><br>

          <iframe width="1000" height="500" src="https://static-bucket-sfcc.vinfastauto.com/6-traffic-jam-and-highway-assist.mp4" frameborder="0" allowfullscreen></iframe> <br> <br>

             <br> <br>
    
          <div class="container text-center mt-5">
            <div class="row align-items-start">
              <div class="col">
              <h3 style="text-align: start;">3,5 km - Khoảng cách nhỏ cho mục tiêu lớn</h3>

              <p style="text-align: start;">Định hình tiên phong thúc đẩy ngành công nghiệp xe điện, hướng tới một tương lai Xanh và Thông Minh, VinFast đã đầu tư hàng trăm triệu USD phát triển hạ tầng, từng bước "phủ rộng" trạm sạc xe điện:</p>
              <ul style="text-align: start;">
              <li>Hệ thống trạm sạc xe điện VinFast trải dài 63 tỉnh và thành phố.</li>
              <li>106 tuyến quốc lộ quan trọng đều có trạm sạc.</li>
              <li>80/85 thành phố đã được lắp đặt hệ thống trạm sạc.</li>
              <li>Khoảng cách ngắn 3,5 km giữa 2 trạm sạc trong thành phố</li>
              </ul>
              <br>
              </div>
              <div class="col" >
                <img src="img/vf7-cactramsac.png " style="width: 100%" alt="Các trạm sạc"> <br> <br>
              </div>
            </div> <br> <br>
            <div id="dangkyFormvf6" style="display: none;" class="bg-dark m-auto">
         <h6>Đăng ký ngay hôm nay để nhận thông tin chính thức và tư vấn từ VinFast</h6> <br>
            <div class="mb-3"  style="color: aliceblue;">
              <!-- <label for="exampleFormControlInput1" class="form-label">Email</label> -->
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nhập Email của bạn!!">
            </div>
            <div class="mb-3"  style="color: aliceblue;">
              <!-- <label for="exampleFormControlInput1" class="form-label">Họ và tên</label> -->
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nhập họ tên!!">
            </div>
            <div class="mb-3"  style="color: aliceblue;">
              <!-- <label for="exampleFormControlInput1" class="form-label">Số điện thoại</label> -->
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Số điện thoại!!">
            </div>
            <div class="mb-3">
              <!-- <label style="text-align: start;" >Ghi chú</label> -->
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ghi chú..."></textarea>
            </div>
            <button type="button" class="btn btn-primary">Đăng ký tư vấn</button>
          </div> <br>
            <h2>Tùy chọn cho ngân sách của bạn</h2>
          <div class="container text-center mt-5">
            <div class="row align-items-start">
              <div class="col m-1">
                <div class="boder-card-ct-vf7">
                <h2> BASE </h2>
                <ul>Giá xe không bao gồm PIN</ul>
                <ul><b>675.000.000 VNĐ</b></ul>
                <ul>Giá xe bao gồm PIN</ul>
                <ul><b>765.000.000 VNĐ</b></ul>               
                </div>
              </div>
              <div class="col m-1">
              <div class="boder-card-ct-vf7">
                <h2> PLUS</h2>
                <ul>Giá xe không bao gồm PIN</ul>
                <ul><b>765.000.000 VNĐ VNĐ</b></ul>
                <ul>Giá xe bao gồm PIN</ul>
                <ul><b>855.000.000 VNĐ</b></ul>               
                </div>
              </div>
            </div>
          </div> <br>
          <h2>Sự khác biệt tổng quan giữa bản BASE và PLUS</h2> <br>
          <br>
          <table class="table" style="color: aliceblue;">
          <thead>
            <tr>
              <th scope="col"><h2>VF-6</h2></th>
              <th scope="col">BASE</th>
              <th scope="col">PLUS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Chiều dài cơ sở (mm)</th>
              <td>2.730 mm</td>
              <td>2.730 mm</td>
            </tr>
            <tr>
              <th scope="row">Dài x Rộng x Cao (mm)</th>
              <td>4.238 x 1.820 x 1.594</td>
              <td>4.238 x 1.820 x 1.594</td>
            </tr>
            <tr>
              <th scope="row">Quãng đường chạy một lần sạc đầy (km)*</th>
              <td>399 km/lần sạc</td>
              <td>381 km/lần sạc</td>
            </tr>
            <tr>
              <th scope="row">Công suất tối đa (kW)</th>
              <td>100 kW/134 hp</td>
              <td>150 kW/201 hp</td>
            </tr>
            <tr>
              <th scope="row">Mô men xoắn cực đại (Nm)</th>
              <td>135 Nm</td>
              <td>310 Nm</td>
            </tr>
            <tr>
              <th scope="row">Kích thước La-zăng</th>
              <td>17 inch</td>
              <td>19 inch</td>
            </tr>
          </tbody>
        </table> <br>
        <br>
        </div>
      </div>
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Thoát</button>
          <button type="button" class="btn btn-primary" id="dangkyBtnvf6">Đăng ký tư vấn</button>
        </div>
      </div>
    </div>
  </div>
      <!-- /Modal -->
    <!-- Modal 3-->
    <div class="modal" id="staticBackdropvf8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content modal-cnt-bg">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">VF-8</h1>
          <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-close" style="color: white;"></i></button>
        </div>
        <div class="modal-body">
        <h3> VF 8 đạt đến sự kết hợp hoàn hoàn hảo giữa chất lượng và giá trị thông qua công nghệ cao cấp, kỹ thuật sản xuất đặc biệt và dịch vụ tận tâm.</h3><br>
          <img src="img/vf8/vf-8.png" alt="">
          <div class="modal-in-cnt">
            
          <h5>Thông số chi tiết</h5><br>
            <p>Nội thất rộng rãi (Chiều dài cơ sở 2.840 mm, Dài x Rộng x Cao tương đương 4.545 x 1.890 x 1.635,75 mm)</p>
            <p>Quãng đường chạy một lần sạc đầy ~471 km/lần sạc đầy*</p>
            <p>Sở hữu 11 Túi khí</p>
            <p>Tăng tốc 0 - 100 km/h trong 5,5 s</p>
          <h2>Triết lý thiết kế “Vũ trụ phi đối xứng</h2><br>
            <p>Lấy cảm hứng từ vũ trụ và các vật thể bay trong không gian, VF 7 hiện thân cho sự tự do, công nghệ, thời đại, cá tính, mạnh mẽ và thể thao, thoả mãn mọi tâm hồn đam mê thẩm mỹ và tốc độ.</p>
              <img src="img/vf8/vf8.png" alt="">

          <h2>Thiết kế nội thất hướng tới người lái.</h2><br>
          <img src="img/vf8/vf8-preview.png" alt=""> <br>

          <h2>Công nghệ cho cuộc sống</h2> <br>
          <p>Hợp tác cùng những đối tác hàng đầu trên toàn cầu, VinFast áp dụng những công nghệ hiện đại với thiết kế tập trung vào con người, đem lại trải nghiệm Trợ lý ảo cùng loạt Dịch vụ thông minh tiên tiến, đồng hành cùng bạn hướng tới tương lai tốt đẹp hơn.</p>
          <iframe width="1000" height="500" src="https://static-bucket-sfcc.vinfastauto.com/3-content-treaming-gaming.mp4" frameborder="0" allowfullscreen></iframe> <br> <br>
          


          <h2>Hệ thống trợ lái nâng cao</h2> <br>
          <p>Hỗ trợ lái trên đường cao tốc, Ứng dụng công nghệ và trang thiết bị hiện đại nhất, hệ thống trợ lái nâng cao VinFast đem lại trải nghiệm lái thư thái, dễ dàng để bạn an tâm tận hưởng cuộc sống.</p><br>

          <iframe width="1000" height="500" src="https://static-bucket-sfcc.vinfastauto.com/6-traffic-jam-and-highway-assist.mp4" frameborder="0" allowfullscreen></iframe> <br> <br>

             <br> <br>
    
          <div class="container text-center mt-5">
            <div class="row align-items-start">
              <div class="col">
              <h3 style="text-align: start;">3,5 km - Khoảng cách nhỏ cho mục tiêu lớn</h3>

              <p style="text-align: start;">Định hình tiên phong thúc đẩy ngành công nghiệp xe điện, hướng tới một tương lai Xanh và Thông Minh, VinFast đã đầu tư hàng trăm triệu USD phát triển hạ tầng, từng bước "phủ rộng" trạm sạc xe điện:</p>
              <ul style="text-align: start;">
              <li>Hệ thống trạm sạc xe điện VinFast trải dài 63 tỉnh và thành phố.</li>
              <li>106 tuyến quốc lộ quan trọng đều có trạm sạc.</li>
              <li>80/85 thành phố đã được lắp đặt hệ thống trạm sạc.</li>
              <li>Khoảng cách ngắn 3,5 km giữa 2 trạm sạc trong thành phố</li>
              </ul>
              <br>
              </div>
              <div class="col" >
                <img src="img/vf7-cactramsac.png " style="width: 100%" alt="Các trạm sạc"> <br> <br>
              </div>
            </div> <br> <br>
            <div id="dangkyFormvf8" style="display: none;" class="bg-dark m-auto">
         <h6>Đăng ký ngay hôm nay để nhận thông tin chính thức và tư vấn từ VinFast</h6> <br>
            <div class="mb-3"  style="color: aliceblue;">
              <!-- <label for="exampleFormControlInput1" class="form-label">Email</label> -->
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nhập Email của bạn!!">
            </div>
            <div class="mb-3"  style="color: aliceblue;">
              <!-- <label for="exampleFormControlInput1" class="form-label">Họ và tên</label> -->
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nhập họ tên!!">
            </div>
            <div class="mb-3"  style="color: aliceblue;">
              <!-- <label for="exampleFormControlInput1" class="form-label">Số điện thoại</label> -->
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Số điện thoại!!">
            </div>
            <div class="mb-3">
              <!-- <label style="text-align: start;" >Ghi chú</label> -->
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ghi chú..."></textarea>
            </div>
            <button type="button" class="btn btn-primary">Đăng ký tư vấn</button>
          </div> <br>
            <h2>Tùy chọn cho ngân sách của bạn</h2>
          <div class="container text-center mt-5">
            <div class="row align-items-start">
              <div class="col m-1">
                <div class="boder-card-ct-vf7">
                <h2> BASE </h2>
                <ul>Giá xe không bao gồm PIN</ul>
                <ul><b>850.000.000 VNĐ</b></ul>
                <ul>Giá xe bao gồm PIN</ul>
                <ul><b>999.000.000 VNĐ</b></ul>               
                </div>
              </div>
              <div class="col m-1">
              <div class="boder-card-ct-vf7">
                <h2> PLUS</h2>
                <ul>Giá xe không bao gồm PIN</ul>
                <ul><b>999.000.000 VNĐ VNĐ</b></ul>
                <ul>Giá xe bao gồm PIN</ul>
                <ul><b>1.199.000.000 VNĐ</b></ul>               
                </div>
              </div>
              <div class="col m-1">
              <div class="boder-card-ct-vf7">
                <h2> PLUS Trần kính</h2> 
                <ul>Giá xe không bao gồm PIN</ul>
                <ul><b>1.024.000.000 VNĐ</b></ul>
                <ul>Giá xe bao gồm PIN</ul>
                <ul><b>1.224.000.000 VNĐ</b></ul>               
                </div>
              </div>
            </div>
          </div> <br>
          <h2>Sự khác biệt tổng quan giữa bản BASE và PLUS</h2> <br>
          <br>
          <table class="table" style="color: aliceblue;">
          <thead>
            <tr>
              <th scope="col"><h2>VF-7</h2></th>
              <th scope="col">BASE</th>
              <th scope="col">PLUS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Chiều dài cơ sở (mm)</th>
              <td>2.840</td>
              <td>2.840</td>
            </tr>
            <tr>
              <th scope="row">Dài x Rộng x Cao (mm)</th>
              <td>4.545 x 1.890 x 1.635,75</td>
              <td>4.545 x 1.890 x 1.635,75</td>
            </tr>
            <tr>
              <th scope="row">Quãng đường chạy một lần sạc đầy (km)*</th>
              <td>375</td>
              <td>431</td>
            </tr>
            <tr>
              <th scope="row">Công suất tối đa (kW)</th>
              <td>130</td>
              <td>260</td>
            </tr>
            <tr>
              <th scope="row">Mô men xoắn cực đại (Nm)</th>
              <td>250</td>
              <td>500</td>
            </tr>
            <tr>
              <th scope="row">Tốc độ tối đa (km/h)</th>
              <td>150</td>
              <td>175</td>
            </tr>
            <tr>
              <th scope="row">Tăng tốc 0 - 100 km/h (s)</th>
              <td>10 s</td>
              <td>5.8 s</td>
            </tr>
          </tbody>
        </table> <br>
        <br>
        </div>
      </div>
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Thoát</button>
          <button type="button" class="btn btn-primary" id="dangkyBtnvf8">Đăng ký tư vấn</button>
        </div>
      </div>
    </div>
  </div>
      <!-- /Modal -->
          <!-- Modal 4-->
          <div class="modal" id="staticBackdropvf9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content modal-cnt-bg">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">VF-9</h1>
          <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-close" style="color: white;"></i></button>
        </div>
        <div class="modal-body">
        <h3>  VF 9 là một bước tiến đột phá trong thiết kế xe ô tô của VinFast.</h3><br>
          <img src="img/vf9/vf-9.png" alt="">
          <div class="modal-in-cnt">
          <h5>Thông số chi tiết</h5><br>
            <p>Nội thất rộng rãi (Chiều dài cơ sở 2.840 mm, Dài x Rộng x Cao tương đương 4.545 x 1.890 x 1.635,75 mm)</p>
            <p>Quãng đường chạy một lần sạc đầy 431 km *</p>
            <p>Sở hữu 8 túi khí</p>
            <p>Tăng tốc 0 - 100 km/h trong 5,8 s *</p>
          <h2>Triết lý thiết kế “Vũ trụ phi đối xứng</h2><br>
            <p>VF 9 là mẫu xe SUV 7 chỗ hàng đầu của VinFast. Với kiểu dáng tinh tế, công nghệ tiên tiến nhất và sự tỉ mỉ trong từng chi tiết, VF 9 mang đến trải nghiệm đặc biệt cao cấp cho người sở hữu.</p>
              <img src="img/vf9/Do-1.png" alt="">

          <h2>Thiết kế nội thất hướng tới người lái.</h2><br>
          <img src="img/vf9/interior_1.png" alt=""> <br>

          <h2>Tiện nghi thông minh tích hợp trên màn hình giải trí</h2> <br>
          <p>Với kích cỡ 12,9 inch, có thể tùy chỉnh cá nhân hóa theo người dùng. Màn hình giải trí cảm ứng của VF 9 có thể giúp điều khiển các chức năng trên xe bằng cách vuốt/chạm nhẹ hoặc ra lệnh cho trợ lý ảo qua giọng nói.</p>
          <img src="img/vf9/VF-9-Navy-White-MHU-A7304065.png" alt="">


          <h2>Hệ thống trợ lái nâng cao</h2> <br>
          <p>Hỗ trợ lái trên đường cao tốc, Ứng dụng công nghệ và trang thiết bị hiện đại nhất, hệ thống trợ lái nâng cao VinFast đem lại trải nghiệm lái thư thái, dễ dàng để bạn an tâm tận hưởng cuộc sống.</p><br>

          <iframe width="1000" height="500" src="https://static-bucket-sfcc.vinfastauto.com/6-traffic-jam-and-highway-assist.mp4" frameborder="0" allowfullscreen></iframe> <br> <br>

             <br> <br>
    
          <div class="container text-center mt-5">
            <div class="row align-items-start">
              <div class="col">
              <h3 style="text-align: start;">3,5 km - Khoảng cách nhỏ cho mục tiêu lớn</h3>

              <p style="text-align: start;">Định hình tiên phong thúc đẩy ngành công nghiệp xe điện, hướng tới một tương lai Xanh và Thông Minh, VinFast đã đầu tư hàng trăm triệu USD phát triển hạ tầng, từng bước "phủ rộng" trạm sạc xe điện:</p>
              <ul style="text-align: start;">
              <li>Hệ thống trạm sạc xe điện VinFast trải dài 63 tỉnh và thành phố.</li>
              <li>106 tuyến quốc lộ quan trọng đều có trạm sạc.</li>
              <li>80/85 thành phố đã được lắp đặt hệ thống trạm sạc.</li>
              <li>Khoảng cách ngắn 3,5 km giữa 2 trạm sạc trong thành phố</li>
              </ul>
              <br>
              </div>
              <div class="col" >
                <img src="img/vf7-cactramsac.png " style="width: 100%" alt="Các trạm sạc"> <br> <br>
              </div>
            </div> <br> <br>
            <div id="dangkyFormvf9" style="display: none;" class="bg-dark m-auto">
         <h6>Đăng ký ngay hôm nay để nhận thông tin chính thức và tư vấn từ VinFast</h6> <br>
            <div class="mb-3"  style="color: aliceblue;">
              <!-- <label for="exampleFormControlInput1" class="form-label">Email</label> -->
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nhập Email của bạn!!">
            </div>
            <div class="mb-3"  style="color: aliceblue;">
              <!-- <label for="exampleFormControlInput1" class="form-label">Họ và tên</label> -->
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nhập họ tên!!">
            </div>
            <div class="mb-3"  style="color: aliceblue;">
              <!-- <label for="exampleFormControlInput1" class="form-label">Số điện thoại</label> -->
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Số điện thoại!!">
            </div>
            <div class="mb-3">
              <!-- <label style="text-align: start;" >Ghi chú</label> -->
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ghi chú..."></textarea>
            </div>
            <button type="button" class="btn btn-primary">Đăng ký tư vấn</button>
          </div> <br>
            <h2>Tùy chọn cho ngân sách của bạn</h2>
          <div class="container text-center mt-5">
            <div class="row align-items-start">
              <div class="col m-1">
                <div class="boder-card-ct-vf7">
                <h2> BASE </h2>
                <ul>Giá xe không bao gồm PIN</ul>
                <ul><b>850.000.000 VNĐ</b></ul>
                <ul>Giá xe bao gồm PIN</ul>
                <ul><b>999.000.000 VNĐ</b></ul>               
                </div>
              </div>
              <div class="col m-1">
              <div class="boder-card-ct-vf7">
                <h2> PLUS</h2>
                <ul>Giá xe không bao gồm PIN</ul>
                <ul><b>999.000.000 VNĐ VNĐ</b></ul>
                <ul>Giá xe bao gồm PIN</ul>
                <ul><b>1.199.000.000 VNĐ</b></ul>               
                </div>
              </div>
              <div class="col m-1">
              <div class="boder-card-ct-vf7">
                <h2> PLUS Trần kính</h2> 
                <ul>Giá xe không bao gồm PIN</ul>
                <ul><b>1.024.000.000 VNĐ</b></ul>
                <ul>Giá xe bao gồm PIN</ul>
                <ul><b>1.224.000.000 VNĐ</b></ul>               
                </div>
              </div>
            </div>
          </div> <br>
          <h2>Sự khác biệt tổng quan giữa bản BASE và PLUS</h2> <br>
          <br>
          <table class="table" style="color: aliceblue;">
          <thead>
            <tr>
              <th scope="col"><h2>VF-7</h2></th>
              <th scope="col">BASE</th>
              <th scope="col">PLUS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Chiều dài cơ sở (mm)</th>
              <td>2.840</td>
              <td>2.840</td>
            </tr>
            <tr>
              <th scope="row">Dài x Rộng x Cao (mm)</th>
              <td>4.545 x 1.890 x 1.635,75</td>
              <td>4.545 x 1.890 x 1.635,75</td>
            </tr>
            <tr>
              <th scope="row">Quãng đường chạy một lần sạc đầy (km)*</th>
              <td>375</td>
              <td>431</td>
            </tr>
            <tr>
              <th scope="row">Công suất tối đa (kW)</th>
              <td>130</td>
              <td>260</td>
            </tr>
            <tr>
              <th scope="row">Mô men xoắn cực đại (Nm)</th>
              <td>250</td>
              <td>500</td>
            </tr>
            <tr>
              <th scope="row">Tốc độ tối đa (km/h)</th>
              <td>150</td>
              <td>175</td>
            </tr>
            <tr>
              <th scope="row">Tăng tốc 0 - 100 km/h (s)</th>
              <td>10 s</td>
              <td>5.8 s</td>
            </tr>
          </tbody>
        </table> <br>
        <br>
        </div>
      </div>
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Thoát</button>
          <button type="button" class="btn btn-primary" id="dangkyBtnvf9">Đăng ký tư vấn</button>
        </div>
      </div>
    </div>
  </div>
      <!-- /Modal -->
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="script.js"></script>
</body>
<script>
document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("dangkyBtn").addEventListener("click", function() {
    // Hiển thị form Đăng ký khi bấm vào nút "Đăng ký tư vấn"
    document.getElementById("dangkyForm").style.display = "block";

    // Cuộn trang đến phần form Đăng ký
    document.getElementById("dangkyForm").scrollIntoView({
      behavior: "smooth",
      block: "start"
    });
  });
});
document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("dangkyBtnvf6").addEventListener("click", function() {
    // Hiển thị form Đăng ký khi bấm vào nút "Đăng ký tư vấn"
    document.getElementById("dangkyFormvf6").style.display = "block";

    // Cuộn trang đến phần form Đăng ký
    document.getElementById("dangkyFormvf6").scrollIntoView({
      behavior: "smooth",
      block: "start"
    });
  });
});
document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("dangkyBtnvf8").addEventListener("click", function() {
    // Hiển thị form Đăng ký khi bấm vào nút "Đăng ký tư vấn"
    document.getElementById("dangkyFormvf8").style.display = "block";

    // Cuộn trang đến phần form Đăng ký
    document.getElementById("dangkyFormvf8").scrollIntoView({
      behavior: "smooth",
      block: "start"
    });
  });
});
document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("dangkyBtnvf9").addEventListener("click", function() {
    // Hiển thị form Đăng ký khi bấm vào nút "Đăng ký tư vấn"
    document.getElementById("dangkyFormvf9").style.display = "block";

    // Cuộn trang đến phần form Đăng ký
    document.getElementById("dangkyFormvf9").scrollIntoView({
      behavior: "smooth",
      block: "start"
    });
  });
});
</script>
<script>
document.getElementById("dangky_Test").addEventListener("click", function() {
  window.location.href = "dangkylaithu.php"; 
});
</script>
<?php include_once __DIR__ . '/../src/partials/footer.php' ?>