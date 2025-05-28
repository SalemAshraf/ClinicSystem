<?php

class Appointment
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function book($patientId, $doctorId, $appointmentDatetime, $status, $notes)
{
    $stmt = $this->conn->prepare("INSERT INTO appointments (patient_id, doctor_id, appointment_datetime, status, notes) VALUES (?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("❌ Prepare failed: " . $this->conn->error);
    }
    $stmt->bind_param("iisss", $patientId, $doctorId, $appointmentDatetime, $status, $notes);
    return $stmt->execute();
}

}
