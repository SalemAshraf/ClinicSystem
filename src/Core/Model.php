<?php
namespace Core;
use PDO;

abstract class Model
{
    protected PDO $db;
    protected string $table;  // set in each subclass

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function findBy(string $col, $val): ?object
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE {$col} = :v LIMIT 1");
        $stmt->execute(['v' => $val]);
        return $stmt->fetch(PDO::FETCH_OBJ) ?: null;
    }

    public function create(array $data): bool
    {
        $cols = array_keys($data);
        $fields = implode(',', $cols);
        $ph     = implode(',', array_map(fn($c)=>":$c", $cols));

        $sql = "INSERT INTO {$this->table} ({$fields}) VALUES ({$ph})";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute($data);
    }
}
