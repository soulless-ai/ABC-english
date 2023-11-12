<?php
require_once '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $query = "INSERT INTO applications (timestamp, name, phone, email) VALUES (NOW(), '$name', '$phone', '$email')";
        mysqli_query($connect, $query);
    }
}
?>