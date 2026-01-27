<?php
include "db.php";

$title = $_POST['title'];
$company = $_POST['company'];
$location = $_POST['location'];
$description = $_POST['description'];

$sql = "INSERT INTO jobs (title, company, location, description)
        VALUES ('$title','$company','$location','$description')";

if (mysqli_query($conn, $sql)) {
    echo "Job posted successfully!";
} else {
    echo "Error posting job";
}
?>
