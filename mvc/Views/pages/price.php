<?php require_once "./public/partials/header.php" ?>
<?php require_once "./mvc/core/DB.php"; ?>
<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div>
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
    <label for="price">Giá niêm yết:</label>
    <input type="text" id="carPrice" placeholder="Giá niêm yết của xe" readonly>
    <div class="form">
    <div class="input-group">
    </div>
    <div class="input-group">
      <label for="registrationFee">Phí đăng kiểm:</label>
      <input type="number" id="registrationFee">
    </div>
    <div class="input-group">
      <label for="licenseFee">Phí biển số:</label>
      <input type="number" id="licenseFee">
    </div>
    <div class="input-group">
      <label for="insuranceFee">Phí Bảo hiểm:</label>
      <input type="number" id="insuranceFee">
    </div>
    <button id="calculateBtn">Tính</button>
    <div id="total"></div>
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
