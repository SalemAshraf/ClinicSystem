<?php
// File: src/Controllers/Admin/SpecialtyController.php
require_once __DIR__ . '/../Models/Specialty.php';

class AdminSpecialtyController
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
        $specialties = $this->model->getAllSpecialty();
        require_once __DIR__ . '/../Views/dashboard/specialties/specialties.php';
    }

    public function create()
    {
        require_once __DIR__ . '/../Views/dashboard/specialties/create.php';
    }

    public function store()
    {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $this->model->create($name, $description);
        echo "<script>window.location.href = 'index.php?page=admin_specialties';</script>";
        exit;
    }

    public function edit($id)
    {
        $specialty = $this->model->find($id);
        require_once __DIR__ . '/../Views/dashboard/specialties/edit.php';
    }

    public function update()
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $this->model->update($id, $name, $description);
    echo "<script>window.location.href = 'index.php?page=admin_specialties';</script>";
    exit;
}
public function delete($id)
{
    $this->model->delete($id);
    echo "<script>window.location.href = 'index.php?page=admin_specialties';</script>";
    exit;
}

}
