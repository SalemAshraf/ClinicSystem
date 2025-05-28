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

    public function countAllSpecialty()
{
    $query = "SELECT * FROM specialties";
    $stmt = $this->conn->query($query);
    
    if ($stmt) {
        return $stmt->fetch_all(MYSQLI_ASSOC); // ✅ هذا يحولها إلى array
    }

    return []; // في حال فشل الاستعلام
}

    public function createSpecialty($name, $image)
    {
        $stmt = $this->conn->prepare("INSERT INTO specialties (title, image_url) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $image);
        $stmt->execute();
    }


    public function create($name, $description)
    {
        $stmt = $this->conn->prepare("INSERT INTO specialties (name, description) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $description);
        return $stmt->execute();
    }

    public function find($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM specialties WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($id, $name, $description)
    {
        $stmt = $this->conn->prepare("UPDATE specialties SET name = ?, description = ? WHERE id = ?");
        $stmt->bind_param("ssi", $name, $description, $id);
        return $stmt->execute();
    }
    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM specialties WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
