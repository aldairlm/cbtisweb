<?php
include 'db.php';
$sql = "SELECT id, title, image_url FROM news WHERE title LIKE '%Escoltas%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "FOUND: " . $row['title'] . " -> Image: [" . $row['image_url'] . "]";
    }
} else {
    echo "NOT FOUND";
}
$conn->close();
?>
