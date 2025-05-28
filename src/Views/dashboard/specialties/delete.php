<?php
require_once '../../config/db.php';
$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM specialties WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: index.php");
exit;
