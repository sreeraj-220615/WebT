<?php
session_start();

// Database connection
$conn = mysqli_connect("localhost", "root", "#Jhanu@143", "testdb");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($email == "" || $password == "") {
        $error = "Please enter email and password";
    } else {
        // Prepared statement
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // If password was hashed during registration
            if (password_verify($password, $row['password'])) {
                $_SESSION['email'] = $email;
                echo "Login successful!";
            } else {
                $error = "Invalid Email or Password";
            }

        } else {
            $error = "Invalid Email or Password";
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<h2>Login</h2>
<?php if ($error != "") { echo "<script>alert('$error');</script>"; } ?>
<form method="POST" action="">
    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Login">
</form>
</body>
</html>
