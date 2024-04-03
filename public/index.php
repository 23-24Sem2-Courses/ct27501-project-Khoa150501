<?php
include_once __DIR__ . '/../src/partials/header.php';

?>

<?php include_once __DIR__ . '/../src/partials/navbar.php'?>

<?php include_once __DIR__ . '/../src/partials/slider.php'?>
<script src="\bootstrap-5.0.2-dist\js\bootstrap.min.js"></script>
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
</style>

<body>
    <div class="content mt-4">
      <div class="row">
        <div class="col bo-loc">
          <h3>Bộ lọc</h3>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Loại xe
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                 <div class="link">
                  <a href="">Sedan</a>
                  <a href="">Truck</a>
                  <a href="">Luxury</a>
                </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Giá
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <button>400.000.000 vnd</button> To <button>1.000.000.000 vnd</button> <hr> 
                  <button>1.000.000.000 vnd</button> To <button>10.000.000.000 vnd</button>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                 Màu sơn
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Trắng</p>
                  <p>Đen</p>
                  <p>Đỏ </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
        
          <div class="card mt-2 " style="width: 28rem;">
          <img src="img/img-vf7/vf7-hero-car.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">VF-7</h5>
            <p class="card-text">VF 7 là một bước tiến đột phá trong thiết kế xe ô tô của VinFast.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Dòng xe: C-SUV </li>
            <li class="list-group-item">5 Chỗ</li>
            <li class="list-group-item">Quãng đường lên tới 418km</li>
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
        <div class="card mt-2" style="width: 28rem;">
          <img src="img/img-vf7/vf7-hero-car.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">VF-7</h5>
            <p class="card-text">VF 7 là một bước tiến đột phá trong thiết kế xe ô tô của VinFast.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Dòng xe: C-SUV </li>
            <li class="list-group-item">5 Chỗ</li>
            <li class="list-group-item">Quãng đường lên tới 418km</li>
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
      </div>
        <div class="col">
          <div class="card mt-2" style="width: 28rem;">
            <img src="img/img-vf7/vf7-hero-car.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">VF-7</h5>
              <p class="card-text">VF 7 là một bước tiến đột phá trong thiết kế xe ô tô của VinFast.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Dòng xe: C-SUV </li>
              <li class="list-group-item">5 Chỗ</li>
              <li class="list-group-item">Quãng đường lên tới 418km</li>
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
          <div class="card mt-2 mb-2" style="width: 28rem;">
            <img src="img/img-vf7/vf7-hero-car.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">VF-7</h5>
              <p class="card-text">VF 7 là một bước tiến đột phá trong thiết kế xe ô tô của VinFast.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Dòng xe: C-SUV </li>
              <li class="list-group-item">5 Chỗ</li>
              <li class="list-group-item">Quãng đường lên tới 418km</li>
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
        </div>
      </div>
        <!-- <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem; background-color: aliceblue;">
                    <img src="img/VF-7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <button  type="button" class="btn btn-primary"> 
                      <a href="shopping.html">Đặt cọc</a>
                      </button>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropvf7">
                        Xem chi tiết
                    </button>
                    </div>
                  </div>
            </div>
            <div class="col"> 
                <div class="card" style="width: 18rem;">
                    <img src="img/VF-9.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                        Xem chi tiết
                    </button>
                    </div>
                  </div>
        </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/VF8.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                        Xem chi tiết
                    </button>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/VF-7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
                        Xem chi tiết
                    </button>
                    </div>
                  </div>
            </div>
        </div> -->



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

          <iframe width="1000" height="500" src="https://static-bucket-sfcc.vinfastauto.com/6-traffic-jam-and-highway-assist.mp4" frameborder="0" allowfullscreen></iframe> <br>

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

              </div>
              <div class="col" >
                <img src="img/vf7-cactramsac.png " style="width: 100%" alt="Các trạm sạc">
              </div>
            </div>
        </div>
      </div>
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thoát</button>
          <button type="button" class="btn btn-primary">Đặt Mua</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /Modal -->
    <!-- Modal 2-->
    <div class="modal" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Understood</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /Modal -->
    <!-- Modal 3-->
    <div class="modal" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Understood</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /Modal -->
          <!-- Modal 4-->
    <div class="modal" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Understood</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /Modal -->
    </div>
</body>

<?php include_once __DIR__ . '/../src/partials/footer.php' ?>