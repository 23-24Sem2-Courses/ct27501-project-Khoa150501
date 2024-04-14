<?php require_once "./mvc/core/DB.php";
require_once "./mvc/Models/user.php";
require_once "./mvc/Models/cars.php";
?>

<?php 
class DangNhap extends Controllers{
    function login(){
        
        $this->views("dangnhap");
    }
    public function register( $fullname, $email,  $password, $phone_number, $address) {
        $userModelres = new User();
        return $userModelres->register( $fullname, $email,  $password, $phone_number, $address);
        if (isset($_POST['register'])) {
            $fullname = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone_number = $_POST['phone_number'];
            $address = $_POST['address'];
            $userModelres->register($fullname, $email,  $password, $phone_number, $address);
            // Redirect hoặc hiển thị thông báo đăng ký thành công
            require_once "./mvc/Views/pages/dangnhap.php";
            $_SESSION['success_message'] = "Đăng ký thành công!";
        } 
        else {
            return false;
        }
    }

    public function loginn($fullname, $password) {
        $userModelres = new User();
        // return $$userModelres->login($fullname, $password);
        if (isset($_POST['login'])) {
            $fullname = $_POST['fullname'];
            $password = $_POST['password'];
            $user = $userModelres->login($fullname, $password);
            if ($user) {
                header("Location: homeview.php");
                exit(); // Đăng nhập thành công, thực hiện hành động tiếp theo (ví dụ: Redirect hoặc hiển thị thông tin người dùng)
            } else {
                echo "Đăng nhập không thành công!!";
                // Đăng nhập thất bại, hiển thị thông báo lỗi
            }
    }
}
}
?>