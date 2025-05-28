<?php
require_once "../config/db.php";
require_once "../src/Views/partials/header.php";

switch ($page) {
    case 'home':
        require_once "../src/Controllers/SpecialtyController.php";
        $controller = new SpecialtyController($conn);
        $controller->index();
        break;
    case 'majors':
        require_once "../src/Controllers/SpecialtyController.php";
        $controller = new SpecialtyController($conn);
        $controller->majors();
        break;
    case 'doctors':
        require_once "../src/Controllers/DoctorController.php";
        $controller = new DoctorController($conn);
        $controller->index();
        break;
    case 'doctor':
        require_once "../src/Controllers/DoctorController.php";
        $controller = new DoctorController($conn);
        $controller->show($_GET['id']);
        break;
    case 'book_appointment':
        require_once "../src/Controllers/AppointmentController.php";
        $controller = new AppointmentController($conn);
        $controller->store();
        break;
    case 'login':
        include "../src/Views/clinic/login.php";
        break;
    case 'register':
        include "../src/Views/clinic/register.php";
        break;
    case 'logout':
        session_destroy();
        header('Location: index.php');
        exit;
    default:
        echo "<div class='container py-5'><h2>404 - Page Not Found</h2></div>";
        break;
}

require_once "../src/Views/partials/footer.php";