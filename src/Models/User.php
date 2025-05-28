<?php

class User
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function register($name, $email, $password)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->conn->prepare("INSERT INTO users (name, email, password_hash) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $hashedPassword);
        return $stmt->execute();
    }

    public function login($email, $password)
    {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($password, $user['password_hash'])) {
            return $user;
        }

        return false;
    }
    public function allDoctors()
    {
        $stmt = $this->conn->query("SELECT users.*, specialties.name AS specialty_name 
                                  FROM users 
                                  LEFT JOIN specialties ON users.specialty_id = specialties.id
                                  WHERE role = 'doctor'");
        $doctors = [];
while ($row = $stmt->fetch_assoc()) {
    $doctors[] = $row;
}
return $doctors;
    }

    public function find($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = ? AND role = 'doctor'");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createDoctor($name, $email, $password, $specialty_id, $bio, $photo)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->conn->prepare("INSERT INTO users (name, email, password, role, specialty_id, bio, photo) 
                                    VALUES (?, ?, ?, 'doctor', ?, ?, ?)");
        return $stmt->execute([$name, $email, $hash, $specialty_id, $bio, $photo]);
    }

    public function updateDoctor($id, $name, $email, $specialty_id, $bio, $photo)
    {
        $stmt = $this->conn->prepare("UPDATE users SET name = ?, email = ?, specialty_id = ?, bio = ?, photo = ? 
                                    WHERE id = ? AND role = 'doctor'");
        return $stmt->execute([$name, $email, $specialty_id, $bio, $photo, $id]);
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM users WHERE id = ? AND role = 'doctor'");
        return $stmt->execute([$id]);
    }
}
