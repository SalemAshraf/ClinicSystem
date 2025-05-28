<?php
namespace Controllers;

use Core\Controller;
use Models\Specialty;
use Models\Doctor;

class ClinicController extends Controller
{
    /**
     * Home page: show majors (specialties)
     */
    public function index()
    {
        $specModel = new Specialty();
        $majors    = $specModel->all();
        $this->view('clinic/index', ['majors' => $majors]);
    }

    /**
     * Alias for index or dedicated /majors route
     */
    public function majors()
    {
        return $this->index();
    }

    /**
     * List all doctors
     */
    public function doctors()
    {
        $docModel = new Doctor();
        $doctors  = $docModel->allDoctors();
        $this->view('clinic/doctors/index', ['doctors' => $doctors]);
    }
}