<?php
include 'db.php';
$result = $conn->query("SELECT id, title, image_url FROM news");
echo "--- START DUMP ---\n";
while($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . "\n";
    echo "Title: " . $row['title'] . "\n";
    echo "Image: " . $row['image_url'] . "\n";
    echo "----------------\n";
}
echo "--- END DUMP ---\n";
$conn->close();
?>
