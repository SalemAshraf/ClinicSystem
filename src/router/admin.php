<?php
require_once "../config/db.php";
require_once "../src/Views/partials/DH.php";

switch ($page) {
    case 'admin_dashboard':
        include "../src/Views/dashboard/dashboard.html";
        break;
    case 'admin_specialties':
    case 'admin_specialties_create':
    case 'admin_specialties_store':
    case 'admin_specialties_edit':
    case 'admin_specialties_delete':
    case 'admin_specialties_update':
        require_once "../src/Controllers/AdminSpecialtyController.php";
        $controller = new AdminSpecialtyController($conn);
        switch ($page) {
            case 'admin_specialties':
                $controller->index();
                break;
            case 'admin_specialties_create':
                $controller->create();
                break;
            case 'admin_specialties_store':
                $controller->store();
                break;
            case 'admin_specialties_edit':
                $controller->edit($_GET['id']);
                break;
            case 'admin_specialties_update':
                $controller->update();
                break;
            case 'admin_specialties_delete':
                $controller->delete($_GET['id']);
                break;
        }
        break;
    case 'admin_doctors':
        require_once "../src/Controllers/AdminDoctorController.php";
        $controller = new AdminDoctorController($conn);
        $controller->index();
        break;
    case 'admin_appointments':
        require_once "../src/Controllers/AdminAppointmentController.php";
        //  $controller = new AdminAppointmentController($conn);
        $controller->index();
        break;
    default:
        echo "<div class='container py-5'><h2>404 - Admin Page Not Found</h2></div>";
        break;
}

require_once "../src/Views/partials/DF.php";
