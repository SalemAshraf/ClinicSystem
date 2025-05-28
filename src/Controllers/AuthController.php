<?php
require_once __DIR__ . '/../Models/User.php';

class AuthController
{
    private $db;
    private $userModel;

    public function __construct($db)
    {
        $this->db = $db;
        $this->userModel = new User($db);
    }

    public function login()
    {
        $error = null;
        $success = null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->userModel->login($email, $password);

            if ($user) {
                $_SESSION['user'] = $user;
                header("Location: index.php?page=home");
                exit;
            } else {
                $error = "Invalid credentials.";
            }
        }

        require_once __DIR__ . '/../Views/clinic/login.php';
    }

    public function register()
    {
        $error = null;
        $success = null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $this->userModel->register($name, $email, $password);
            header("Location: index.php?page=login");
            exit;
        }

        require_once __DIR__ . '/../Views/clinic/register.php';
    }
}
