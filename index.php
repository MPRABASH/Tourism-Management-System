<?php
include 'config.php';
$sql = "SELECT * FROM tours";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "Tour: " . $row["name"]. " - " . $row["description"]. " - " . $row["price"]. "<br>";
echo '<a href="book.php?tour_id='.$row["id"].'">Book Now</a><br><br>';
}
} else {
echo "No tours available!";
}
?>
