<?php
session_start();

require_once "../config/db.php";
require_once "../src/Core/function.php";
require_once "../src/Views/partials/header.php";

$page = $_GET['page'] ?? 'home';

// الراوتر
switch ($page) {

    case 'home':
        require_once "../src/Controllers/SpecialtyController.php";
        $controller = new SpecialtyController($conn);
        $controller->index();
        break;
    case 'doctors':
        require_once __DIR__ . '/../src/Controllers/DoctorController.php';
        $controller = new DoctorController($conn);
        $controller->index();
        break;
    case 'book_appointment':
        require_once "../src/Controllers/AppointmentController.php";
        $controller = new AppointmentController($conn);
        $controller->store();
        break;
    case 'doctor':
        require_once "../src/Controllers/DoctorController.php";
        $controller = new DoctorController($conn);

        // Check if there's an ID passed
        if (isset($_GET['id'])) {
            $controller->show($_GET['id']);
        } else {
            echo "❌ No doctor ID provided.";
        }
        break;
    case 'majors':
        require_once __DIR__ . '/../src/Controllers/SpecialtyController.php';
        $controller = new SpecialtyController($conn);
        $controller->majors();
        break;
    case 'login':
        require_once "../src/Controllers/AuthController.php";
        $controller = new AuthController($conn);
        $controller->login();
        break;

    case 'register':
        require_once "../src/Controllers/AuthController.php";
        $controller = new AuthController($conn);
        $controller->register();
        break;

    default:
        echo "<div class='container py-5'><h2>404 - Page Not Found</h2></div>";
        break;
}

// الفوتر
require_once "../src/Views/partials/footer.php";
