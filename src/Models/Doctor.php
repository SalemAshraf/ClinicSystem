<?php

class Doctor
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getDoctors($majorId = null)
{
    if ($majorId) {
        $sql = "SELECT users.*, specialties.name AS major 
                FROM users 
                LEFT JOIN specialties ON users.specialty_id = specialties.id
                WHERE role = 'doctor' AND specialty_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $majorId);
    } else {
        $sql = "SELECT users.*, specialties.name AS major 
                FROM users 
                LEFT JOIN specialties ON users.specialty_id = specialties.id
                WHERE role = 'doctor'";
        $stmt = $this->conn->prepare($sql);
    }

    $stmt->execute();
    return $stmt->get_result();
}
public function getDoctorById($id)
{
    $sql = "SELECT users.*, specialties.name AS major FROM users
            JOIN specialties ON users.specialty_id = specialties.id
            WHERE users.id = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}
}