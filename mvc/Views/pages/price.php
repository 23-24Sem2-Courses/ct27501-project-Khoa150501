<?php require_once "./public/partials/header.php" ?>
<?php require_once "./mvc/core/DB.php"; ?>
<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div>
<style>
body {
  background: url('../public/img/evehicles_made_by_vinfast.jpg');
  background-size: cover;
  background-position-y: -220px;
}

#set-background{
  background: rgba(0, 0, 0, 0.8);
  box-shadow: 0px 0px 17px 2px rgba(255, 255, 255, 0.8);
}

.container-max-widths: {
  sm: 540px;
  md: 720px;
  lg: 960px;
  xl: 1140px;
  xxl: 1320px;
}

#carSelect {
  position: relative;
  font-family: Arial;
  border: 6px solid transparent;
}
</style>

<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ct275_project";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>

<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container-max-widths mt-5 pt-5">
  <div class="row">
    <div class="col-12 col-sm-8 col-md-6 m-auto">
      <div class="card" id="set-background">
        <div class="card-body text-center text-light">
          <select name="carSelect" id="carSelect">
            <option value="">Chọn xe</option>
              <?php
              // Truy vấn để lấy danh sách tên xe
              $sql = "SELECT nameCars, price FROM cars";
              $result = $conn->query($sql);

              // Hiển thị danh sách tên xe trong dropdown select
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                      echo '<option value="' . $row["price"] . '">' . $row["nameCars"] . '</option>';
                  }
              } else {
                  echo "Không có dữ liệu";
              }
              ?>
          </select>
          <br>
          <div class="m-3 col-3 mx-auto"> 
          <label for="price"><strong>Giá niêm yết:</strong></label> <br>
          <input type="text" class="form-control" id="carPrice" placeholder="Giá niêm yết của xe" readonly>
          </div>
          <hr class="border border-warning border-3 opacity-75">
          <div class="form">
            <div class="m-3 col-3 mx-auto">
              <label for="registrationFee"><strong>Phí đăng kiểm:</strong></label> <br>
              <input type="number" class="form-control" id="registrationFee">
            </div>
            <div class="m-3 col-3 mx-auto">
              <label for="licenseFee"><strong>Phí biển số:</strong></label> <br>
              <input type="number" class="form-control" id="licenseFee">
            </div>
            <div class="m-4 col-3 mx-auto">
              <label for="insuranceFee"><strong>Phí Bảo hiểm:</strong></label> <br>
              <input type="number" class="form-control" id="insuranceFee">
            </div>
            <button id="calculateBtn" class="btn btn-primary col-1">Tính</button>
            <hr class="border border-warning border-3 opacity-75">
            <div id="total"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
document.getElementById('carSelect').addEventListener('change', function() {
    var selectedPrice = this.value;
    document.getElementById('carPrice').value = selectedPrice;
});
document.getElementById("calculateBtn").addEventListener("click", function() {
    var price = parseFloat(document.getElementById("carPrice").value);
    var registrationFee = parseFloat(document.getElementById("registrationFee").value);
    var licenseFee = parseFloat(document.getElementById("licenseFee").value);
    var insuranceFee = parseFloat(document.getElementById("insuranceFee").value);
    
    var total = price + registrationFee + licenseFee + insuranceFee;
    
    document.getElementById("total").innerText = "Tổng số tiền: " + total.toFixed(2) + " VNĐ";
  });
</script>
</select>
<?php
// Đóng kết nối
$conn->close();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>