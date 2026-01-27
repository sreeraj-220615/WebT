<?php
include "db.php";

$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (email, password)
        VALUES ('$email','$password')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful!";
} else {
    echo "User already exists!";
}
?>
