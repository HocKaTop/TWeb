<?php
header('Location: index.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? null;
    $email = $_POST['email'] ?? null;

    if ($username && $email) {
        // Пример: сохраняем в файл
        $entry = "Username: $username | Email: $email" . PHP_EOL;
        file_put_contents('saved_data.txt', $entry, FILE_APPEND);

        echo json_encode(['status' => 'success', 'message' => 'Данные успешно сохранены']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Отсутствуют имя или email']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Неверный метод запроса']);
}
