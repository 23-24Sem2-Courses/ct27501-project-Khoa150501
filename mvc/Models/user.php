<?php 
require_once "./mvc/core/DB.php";

class User extends DB {
   
    public function getAllUser() {
        $stmt = $this->conn->prepare("SELECT * FROM user");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    public function getUserByID($id) {
       
        // $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
        // $stmt = $this->conn->prepare($query);
        // $stmt->bindParam(':id', $id);
        // $stmt->execute();
        // return $stmt->fetch(PDO::FETCH_ASSOC);
        
        $id_str = implode('id', $id);
        // Sử dụng câu lệnh SQL có điều kiện IN để lấy các bản ghi có ID nằm trong mảng $id
        $query = "SELECT * FROM user WHERE id IN ($id_str)";
        $stmt = $this->conn->prepare($query);
        // $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
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
require_once "./mvc/core/DB.php";
class XoaUser extends DB{

public function deleteUserID($idUser) {
// Kiểm tra xem yêu cầu xóa đã được gửi từ form hay không
if(isset($_POST['deleteUser'])) {
    // Lấy ID của người dùng cần xóa từ form
    $userId = $_POST['id'];
   
    // Query xóa dữ liệu từ bảng users (giả sử bảng tên là users và trường ID tên là id)
    $query = "DELETE FROM user WHERE id = :id";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':id', $userId);
    
    // Thực thi truy vấn
    if($stmt->execute()) {
        // Nếu xóa thành công, chuyển hướng hoặc hiển thị thông báo thành công
        echo "Thành công";
        // header("Location: success.php"); // Chuyển hướng đến trang thông báo thành công
        exit();
    } else {
        // Nếu xóa không thành công, hiển thị thông báo lỗi
        echo "Xóa dữ liệu không thành công.";
    }
}
 }
}
?>

