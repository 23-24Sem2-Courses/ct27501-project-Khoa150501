<?php 
require_once "./mvc/core/DB.php";

class User extends DB {
    private $table_name = "user";
    public function getAllUser() {
        $stmt = $this->conn->prepare("SELECT * FROM user");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function register( $fullname, $email,  $password, $phone_number, $address) {
        $query = "INSERT INTO " . $this->table_name . " (fullname, email, phone_number, address, password)
         VALUES (:id, :fullname, :email, :phone_number, :address, :password)";
        $stmt = $this->conn->prepare($query);

        // Chuyển đổi các giá trị để tránh tấn công SQL injection
        $fullname = htmlspecialchars(strip_tags($fullname));
        $email = htmlspecialchars(strip_tags($email));
        $password = htmlspecialchars(strip_tags($password));
        $phone_number = htmlspecialchars(strip_tags($phone_number));
        $address = htmlspecialchars(strip_tags($address));

        // Gán các giá trị vào các tham số của truy vấn
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':address', $address);

        // Thực thi truy vấn
        if ($stmt->execute()) {
            return true; // Trả về true nếu thêm thành công
        } else {
            echo "Mã này sai hoặc đã tồn tại";
            return false; // Trả về false nếu có lỗi xảy ra
        }
    }

    // Hàm đăng nhập
    public function login($fullname, $password) {
        $stmt = $this->conn->prepare("SELECT id, fullname, password FROM user WHERE fullname = ?");
        $stmt->execute([$fullname]);
        $user = $stmt->fetch();
        if ($user && password_verify($password, $user['password'])) {
            return $user; 
        }
        return false; 
    }
    
}
?>
<?php
require_once "./mvc/core/DB.php";

class UserNew extends DB{
    // private $conn;
    private $table_name = "user";
    private int $id = -1;
    

    // Thêm người dùng mới
    public function addUser($id, $fullname, $email, $phone_number, $address, $password) {
        $query = "INSERT INTO " . $this->table_name . " (id, fullname, email, phone_number, address, password)
         VALUES (:id, :fullname, :email, :phone_number, :address, :password)";
        $stmt = $this->conn->prepare($query);

        // Chuyển đổi các giá trị để tránh tấn công SQL injection
        $id= htmlspecialchars(strip_tags($id));
        $fullname = htmlspecialchars(strip_tags($fullname));
        $email = htmlspecialchars(strip_tags($email));
        $phone_number = htmlspecialchars(strip_tags($phone_number));
        $address = htmlspecialchars(strip_tags($address));
        $password = htmlspecialchars(strip_tags($password));

        // Gán các giá trị vào các tham số của truy vấn
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':password', $password);

        // Thực thi truy vấn
        if ($stmt->execute()) {
            return true; // Trả về true nếu thêm thành công
        } else {
            echo "Mã này sai hoặc đã tồn tại";
            return false; // Trả về false nếu có lỗi xảy ra
        }
    }

    // Phương thức cập nhật thông tin người dùng
    public function updateUser($id, $fullname, $email, $phone_number, $address, $password) {
        $query = "UPDATE " . $this->table_name . " SET fullname = :fullname, email = :email, phone_number = :phone_number, address = :address, password = :password WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':password', $password);
        return $stmt->execute();
    }
    

  
}
?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ct275_project";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    try {
        // Chuẩn bị câu truy vấn DELETE
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
        $stmt = $conn->prepare("DELETE FROM user WHERE id = :id");
        // Gán giá trị cho tham số :id
        $stmt->bindParam(':id', $id);
        // Thực thi câu truy vấn
        $stmt->execute();
        // Chuyển hướng người dùng đến trang khác sau khi xóa thành công (nếu cần)
        header("Location: users_view.php");
        exit(); // Dừng việc thực thi mã PHP tiếp theo sau khi chuyển hướng
    } catch(PDOException $e) {
        echo "Lỗi khi xóa dữ liệu: " . $e->getMessage();
    }
}
$conn = null;
?>


