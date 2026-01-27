<?php
session_start();
include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    if (password_verify($password, $row['password'])) {
        $_SESSION['email'] = $email;
        header("Location: dashboard.php");
    } else {
        echo "Wrong password";
    }
} else {
    echo "User not found";
}
?>
