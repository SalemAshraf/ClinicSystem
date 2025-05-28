<?php
require_once __DIR__ . '/../Models/User.php';
require_once __DIR__ . '/../Models/Specialty.php';

class AdminDoctorController {
    private $model;
    private $specialtyModel;

    public function __construct($db) {
        $this->model = new User($db);
        $this->specialtyModel = new Specialty($db);
    }

    public function index() {
        $doctors = $this->model->allDoctors();
        require_once __DIR__ . '/../Views/dashboard/doctors/doctors.php';
    }

    public function create() {
        $specialties = $this->specialtyModel->getAllSpecialty();
        require_once __DIR__ . '/../Views/dashboard/doctors/create.php';
    }

    public function store() {
        $this->model->createDoctor($_POST['name'], $_POST['email'], $_POST['password'], $_POST['specialty_id'], $_POST['bio'], $_POST['photo']);
        header("Location: index.php?page=admin_doctors");
        exit;
    }

    public function edit($id) {
        $doctor = $this->model->find($id);
        $specialties = $this->specialtyModel->getAllSpecialty();
        require_once __DIR__ . '/../Views/dashboard/doctors/edit.php';
    }

    public function update($id) {
        $this->model->updateDoctor($id, $_POST['name'], $_POST['email'], $_POST['specialty_id'], $_POST['bio'], $_POST['photo']);
        header("Location: index.php?page=admin_doctors");
        exit;
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location: index.php?page=admin_doctors");
        exit;
    }
}
