<?php
require_once __DIR__ . '/../Models/Doctor.php';

class DoctorController
{
    private $db;
    private $model;

    public function __construct($db)
    {
        $this->db = $db;
        $this->model = new Doctor($db);
    }

    public function index()
    {
        $majorId = $_GET['major_id'] ?? null;
        $doctors = $this->model->getDoctors($majorId);
        require_once __DIR__ . '/../Views/clinic/doctors/index.php';
    }
    public function show($doctorId)
{
    $doctor = $this->model->getDoctorById($doctorId);

    if (!$doctor) {
        die("❌ Doctor not found");
    }

    // This file MUST be doctor.php not index.php
    require_once __DIR__ . '/../Views/clinic/doctors/doctor.php';
}
    
}
