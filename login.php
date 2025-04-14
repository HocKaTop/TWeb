<?php
session_start();

$valid_username = "admin";
$valid_password = "1234";

if ($_POST['username'] === $valid_username && $_POST['password'] === $valid_password) {
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $_POST['username'];
    header("Location: index.php");
    exit;
} else {
    echo "Неверный логин или пароль. <a href='index.php'>Попробуйте снова</a>";
}
