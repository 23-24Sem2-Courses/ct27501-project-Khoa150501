<?php 
        // require_once "./mvc/core/connectDB.php" ;
        // require_once "./mvc/core/PDOFactory.php";
?>

<?php
// Truy vấn dữ liệu từ cơ sở dữ liệu
class Cars extends DB{

    public function tinhGiaXe(){
        $qr = "SELECT * FROM cars";
        return mysqli_query($this->con, $qr);
    }

}
?>