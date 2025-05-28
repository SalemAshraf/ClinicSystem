<?php
require_once __DIR__ . '/../Models/Specialty.php';
require_once __DIR__ . '/../Models/Doctor.php';


class SpecialtyController
{
    private $db;
    private $model;

    public function __construct($db)
    {
        $this->db = $db;
        $this->model = new Specialty($db);
    }

    public function index()
    {
        $specialty = $this->model->getAllSpecialty();

        // ✅ أضف هذا السطر للحصول على كل الأطباء
        $doctorModel = new Doctor($this->db);
        $doctors = $doctorModel->getDoctors();

        require_once __DIR__ . '/../Views/clinic/index.php';
    }
        public function majors()
    {
        $specialty = $this->model->getAllSpecialty();
        if (!$specialty) {
        die("🔴 Query returned null – check DB connection or SQL");
    }
        require_once __DIR__ . '/../Views/clinic/majors.php';
    }
}
