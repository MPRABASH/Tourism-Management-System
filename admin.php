<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$available_slots = $_POST['available_slots'];
$sql = "INSERT INTO tours (name, description, price, available_slots) VALUES ('$name', '$description', '$price', '$available_slots')";
if ($conn->query($sql) === TRUE) {
echo "Tour added successfully!";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
<form method="post" action="">
Name: <input type="text" name="name" required><br>
Description: <textarea name="description" required></textarea><br>
Price: <input type="number" step="0.01" name="price" required><br>
Available Slots: <input type="number" name="available_slots" required><br>
<input type="submit" value="Add Tour">
</form>
