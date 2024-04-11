<?php 
require_once "./mvc/core/PDOFactory.php";


use PDO;

class Contact
{
    private ?PDO $db;

    private int $id = -1;
    public $name;
    public $phone;
    public $notes;
    public $created_at;
    public $updated_at;
    private array $errors = [];

    public function getId(): int
    {
        return $this->id;
    }

    public function __construct(?PDO $pdo)
    {
        $this->db = $pdo;
    }
}
?>
