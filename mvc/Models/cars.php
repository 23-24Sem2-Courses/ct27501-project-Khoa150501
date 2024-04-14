<?php 
require_once "./mvc/core/DB.php";

class CarsModel extends DB {
    private $table_name = 'cars';
    private $table_name2 = 'testDrive';
    public function getAllCars() {
        $stmt = $this->conn->prepare("SELECT * FROM cars");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    function addData($pdo, $name, $email) {
        $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        $stmt->execute(['name' => $name, 'email' => $email]);
        return $pdo->lastInsertId(); // Trả về ID của dòng vừa được thêm
    }

    public function getAllCarNames() {
        $query = "SELECT nameCars FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    // Phương thức để lấy giá của xe dựa trên tên xe
    public function getCarPriceByName($carName) {
        $query = "SELECT price FROM " . $this->table_name . " WHERE nameCars = :nameCars";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nameCars', $carName);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function FormTestDrive() {
        $stmt = $this->conn->prepare("SELECT * FROM testDrive");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>