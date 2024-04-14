
<?php
class DB {
    private $servername = "localhost";
    private $username = "root"; // Thay thế bằng tên người dùng MySQL của bạn
    private $password = ""; // Thay thế bằng mật khẩu MySQL của bạn
    private $dbname = "ct275_project"; // Thay thế bằng tên cơ sở dữ liệu của bạn
    protected $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Kết nối thất bại: " . $e->getMessage();
        }
    }
}
?>


