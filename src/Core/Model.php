<?php
namespace Core;

abstract class Model {
    protected \PDO $db;
    protected string $table;

    public function __construct() {
        $this->db = Database::getInstance()->pdo();
    }

    public function findAll(): array {
        $stmt = $this->db->query("SELECT * FROM {$this->table}");
        return $stmt->fetchAll();
    }

    public function findById(int $id): ?array {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch() ?: null;
    }

    public function delete(int $id): bool {
        $stmt = $this->db->prepare("DELETE FROM {$this->table} WHERE id = ?");
        return $stmt->execute([$id]);
    }

    // يمكنك إضافة create() و update() هنا لاحقاً
}
