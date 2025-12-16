<?php
include 'db.php';
// Explicitly set charset again just in case
$conn->set_charset("utf8mb4");

$result = $conn->query("SELECT id, name FROM specialties");
echo "Total Rows: " . $result->num_rows . "\n";
echo "--- LIST ---\n";
while($row = $result->fetch_assoc()) {
    echo $row['id'] . ": " . $row['name'] . "\n";
}
$conn->close();
?>
