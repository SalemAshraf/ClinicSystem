<?php
require_once __DIR__ . '/../Models/Appointment.php';

class AppointmentController
{
    private $db;
    private $model;

    public function __construct($db)
    {
        $this->db = $db;
        $this->model = new Appointment($db);
    }

    public function store()
    {
        // تحقق من تسجيل الدخول
        if (!isset($_SESSION['user']['id'])) {
            die("❌ Please login to book an appointment.");
        }

        $patientId = $_SESSION['user']['id'];
        $doctorId = $_POST['doctor_id'] ?? null;
        $appointmentDatetime = date('Y-m-d H:i:s'); // ممكن تستخدم قيمة من الفورم مستقبلاً
        $status = 'pending';
        $notes = $_POST['notes'] ?? '';

        // تحقق من البيانات
        if (!$doctorId) {
            die("❌ Missing doctor ID");
        }

        // حجز الموعد
        $success = $this->model->book($patientId, $doctorId, $appointmentDatetime, $status, $notes);
        if ($success) {
            echo "<div class='alert alert-success text-center'>✅ Appointment booked successfully!</div>";
        } else {
            echo "<div class='alert alert-danger text-center'>❌ Failed to book appointment!</div>";
        }
    }
    
}
