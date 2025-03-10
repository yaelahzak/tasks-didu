<?php
include 'config.php';
$data = json_decode(file_get_contents('php://input'), true); // Tambahkan tanda '$' di awal variabel $data

if (isset($data['id']) && isset($data['status'])) {
    $id = $data['id'];
    $status = $data['status'];

    $stmt = $conn->prepare("UPDATE tasks SET status=? WHERE id=?");
    $stmt->bind_param("si", $status, $id);
    $stmt->execute();

    echo json_encode(['message' => 'Task updated successfully']);
}
?>
