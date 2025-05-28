<?php
function set_message($type, $message) {
    $_SESSION['message'] = [
        "type" => $type,
        "text" => $message
    ];
}

function show_message() {
    if (isset($_SESSION['message'])) {
        $type = $_SESSION['message']['type'];
        $text = $_SESSION['message']['text'];
        echo "<div class='alert alert-$type'> $text</div>";
        unset($_SESSION['message']);
    }
}

function add_user($name, $email, $phone, $password) {
    $conn = $GLOBALS['conn'];
    $sql = "INSERT INTO `users` (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";
    return mysqli_query($conn, $sql);
}

function user_login($email, $password) {
    $conn = $GLOBALS['conn'];
    $sql = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
    $res = mysqli_query($conn, $sql);
    return mysqli_num_rows($res) > 0 ? mysqli_fetch_assoc($res) : null;
}

function get_blogs($user_id) {
    $conn = $GLOBALS['conn'];
    $user_id = (int)$user_id;
    $sql = "SELECT * FROM articles WHERE user_id = $user_id ORDER BY id DESC";
    $res = mysqli_query($conn, $sql);
    return ($res && mysqli_num_rows($res) > 0) ? $res : null;
}

function get_all_articles() {
    $conn = $GLOBALS['conn'];
    $sql = "SELECT * FROM articles ORDER BY id DESC";
    $res = mysqli_query($conn, $sql);
    return (mysqli_num_rows($res) > 0) ? $res : null;
}

function add_blog($title, $content, $image_path, $user_id) {
    $conn = $GLOBALS['conn'];
    $title = mysqli_real_escape_string($conn, $title);
    $content = mysqli_real_escape_string($conn, $content);
    $image = mysqli_real_escape_string($conn, $image_path);
    $sql = "INSERT INTO articles (articles_name, articles_description, image, user_id) 
            VALUES ('$title', '$content', '$image', '$user_id')";
    return mysqli_query($conn, $sql);
}

function check_blog($id) {
    $conn = $GLOBALS['conn'];
    $sql = "SELECT * FROM `articles` WHERE id ='$id'";
    $res = mysqli_query($conn, $sql);
    return mysqli_num_rows($res) > 0;
}

function delete_blog($id) {
    $conn = $GLOBALS['conn'];
    $sql = "DELETE FROM `articles` WHERE id='$id'";
    return mysqli_query($conn, $sql);
}
