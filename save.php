<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] ?? 'GET' == "POST") {
    $username = $_POST["username"] ?? '';
    $email = $_POST["email"] ?? '';

    // Сохраняем в файл
    $file = "data.txt";
    file_put_contents($file, $username . "\n" . $email . "\n", FILE_APPEND);

    echo "Данные сохранены!";
}
?>
