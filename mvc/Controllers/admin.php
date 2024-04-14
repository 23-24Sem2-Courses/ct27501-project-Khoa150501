<?php require_once "./mvc/core/DB.php";
require_once "./mvc/Models/user.php";
require_once "./mvc/Models/cars.php";
?>
<?php 

class admin extends Controllers{
    function adminLogin(){
        
        $this->viewsAdmin("loginAdmin");
    }
    function productadmin(){
       
        $this->views(("productadmin"));
    }
    public function AdminshowUser() {
        $userModel = new User();
        $user = $userModel->getAllUser();
        // $this->views("productadmin");
        require_once "./mvc/Views/pages/AdminUser.php";
    }
    public function showAdduser(){
        $this->views("addUser");
    }
    public function editUserForm($id) {
        // Lấy thông tin người dùng từ CSDL dựa trên ID
        $userModel = new UserNew ();
        $use = $userModel->getUserByID($id);
        // Hiển thị form sửa thông tin người dùng
        require_once "./mvc/Views/pages/editUser.php";
    }
    public function AdminshowCars() {
        $carsModel = new CarsModel();
        $cars = $carsModel->getAllCars();
        // $this->views("product");
        require_once "./mvc/Views/pages/AdminProduct.php";
    }
    public function deleteData($id) {
        $userModel = new XoaUser();
        if ($userModel->deleteUserID($id)) {
            echo "Dữ liệu đã được xóa thành công.";
        } else {
            echo "Có lỗi xảy ra khi xóa dữ liệu.";
        }
    }
}

// Xử lý yêu cầu xóa dữ liệu
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $homeController = new admin();
    $id = $_GET['id']; // Lấy ID từ request
    $homeController->deleteData($id);
}
  
 
?>
<?php
include_once "./mvc/core/DB.php";
include_once "./mvc/Models/user.php";

class Usercontrol extends Controllers {
    private $db;
    private $userModel;
    public function add() {
        
        $user = new UserNew();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {   
            $id = $_POST['id'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $address = $_POST['address'];
            $password = $_POST['password'];
            if ($user->addUser($id, $fullname, $email, $phone_number, $address, $password)) {
                echo "<h3>Người dùng đã được thêm thành công!!!</h3>";
            } else {
                echo "Có lỗi xảy ra khi thêm người dùng.";
            }
        }
    
    }
  
   

    // Xử lý yêu cầu sửa thông tin người dùng
    public function updateUser() {
        if (isset($_POST['id'], $_POST['fullname'], $_POST['email'], $_POST['phone_number'], $_POST['address'], $_POST['password'])) {
            $id = $_POST['id'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $address = $_POST['address'];
            $password = $_POST['password'];
            // Gọi phương thức cập nhật thông tin người dùng từ model
            if ($this->userModel->updateUser($id, $fullname, $email, $phone_number, $address, $password)) {
                echo "Thông tin người dùng đã được cập nhật thành công.";
            } else {
                echo "Có lỗi xảy ra khi cập nhật thông tin người dùng.";
            }
        }
    }
    

    
}

$homeController = new Usercontrol();
$homeController->add();
?>

