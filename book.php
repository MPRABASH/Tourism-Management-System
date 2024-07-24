<?php
include 'config.php';
session_start();
if (!isset($_SESSION['user_id'])) {
header("Location: login.php");
exit;
}
if (isset($_GET['tour_id'])) {
$tour_id = $_GET['tour_id'];
$user_id = $_SESSION['user_id'];\
$sql = "INSERT INTO bookings (user_id, tour_id) VALUES ('$user_id', '$tour_id')";
if ($conn->query($sql) === TRUE) {
echo "Booking successful!";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
} else {
echo "Invalid tour!";
}
?>
