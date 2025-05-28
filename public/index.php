<?php
session_start();
$page = $_GET['page'] ?? 'home';

if (str_starts_with($page, 'admin_')) {
    require_once "../src/router/admin.php"; // admin routes file
} else {
    require_once "../src/router/clinic.php"; // public website routes
}