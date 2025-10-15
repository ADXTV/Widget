<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Ваши данные
$data = [
    'status' => 'online',
    'message' => 'Привет из виджета!',
    'value' => 42,
    'timestamp' => time()
];

echo json_encode($data);
?>