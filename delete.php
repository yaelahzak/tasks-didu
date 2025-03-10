<?php
include 'config.php';
$data = json_decode(file_get_contents('php://input'), true); // Tambahkan tanda '$' di awal variabel $data

if (isset($data['id'])) {
    $id = $data['id'];

    $stmt = $conn->prepare("DELETE FROM tasks WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    echo json_encode(['message' => 'Task deleted successfully']);
}
?>
