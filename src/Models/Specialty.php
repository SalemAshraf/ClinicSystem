<?php

class Specialty
{
    private $conn;
    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getAllSpecialty()
{
    $sql = "SELECT * FROM specialties";
    $stmt = $this->conn->prepare($sql);

    if (!$stmt) {
        die("❌ Prepare failed: " . $this->conn->error);
    }

    $stmt->execute();
    return $stmt->get_result();
}



}
