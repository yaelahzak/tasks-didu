<?php
include 'config.php';
$data = json_decode(file_get_contents('php://input'), true); // Tambahkan tanda '$' di awal variabel $data

if (isset($data['title']) && isset($data['task']) && isset($data['category'])) {
    $title = $data['title'];
    $task = $data['task'];
    $category = $data['category'];
    $due_date = isset($data['due_date']) ? $data['due_date'] : NULL;

    $stmt = $conn->prepare("INSERT INTO tasks (title, task, category, due_date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $title, $task, $category, $due_date);
    $stmt->execute();

    echo json_encode(['message' => 'Task added successfully']);
}
?>
