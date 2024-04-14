<?php require_once "./mvc/core/DB.php";
require_once "./mvc/Models/cars.php";
?>
<?php 
class Home extends Controllers{
    function Homepage(){
        
        
        $this->views("homeview");
        // Call Views
         
       
    }
    public function showTinh(){
        $this->views("price");
    }
    public function showCarPriceForm() {
        // Lấy danh sách tên các xe từ CSDL
        $carModel = new CarsModel();

        $carNames = $carModel->getAllCarNames();

        // Hiển thị view với danh sách tên xe
        include_once "./mvc/views/pages/price.php";
        
    }

    // Action để lấy giá của xe dựa trên tên xe được chọn
    public function getCarPrice($carName) {
        // Gọi phương thức từ model để lấy giá của xe
        $carModel = new CarsModel();
        $carPrice = $carModel->getCarPriceByName($carName);

        // Trả về giá của xe dưới dạng JSON
        echo json_encode($carPrice);
    }
}

?>