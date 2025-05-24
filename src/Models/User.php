<?php
namespace Models;
use Core\Model;
use PDO;

class User extends Model {
    protected $table = 'users';

    public function findAll(): array {
        $stmt = $this->db->query("SELECT * FROM {$this->table}");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById(int $id): ?array {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    // create(), update(), delete() بنفس الأسلوب
}
