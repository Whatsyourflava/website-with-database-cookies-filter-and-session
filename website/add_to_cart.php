<?php
session_start();
include 'db.php';

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);
$bookId = $data['book_id'];

if (isset($_SESSION['user'])) {
    $userId = $_SESSION['user_id'];
    $query = "INSERT INTO cart (user_id, book_id) VALUES ('$userId', '$bookId')";
    
    if (mysqli_query($conn, $query)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => mysqli_error($conn)]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'User not logged in']);
}
?>
