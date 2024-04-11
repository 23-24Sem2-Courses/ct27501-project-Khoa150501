<?php 
        require_once "./mvc/core/connectDB.php" ;
        require_once "./mvc/core/PDOFactory.php";
?>

<?php
// Truy vấn dữ liệu từ cơ sở dữ liệu
class Contact
{
    private ?PDO $db;

    private int $id = -1;
    public $name;
    public $phone;
    public $notes;
    public $created_at;
    public $updated_at;
    public $options;

    public function getId(): int
    {
        return $this->id;
    }

    public function __construct(?PDO $pdo)
    {
        $this->db = $pdo;
    }
    public function all(){
        $statement = $this->db->prepare('select car_id, vf8,  from cars'); 
        $statement->execute(); 
        $options = $statement->fetchAll(PDO::FETCH_ASSOC);
}
}
?>