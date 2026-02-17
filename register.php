<?php
<a href="login.php">Login with Google</a>
// Connect to database
$conn = mysqli_connect("localhost", "root", "#Jhanu@143", "testdb");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($email == "" || $password == "") {
    echo "Please enter email and password";
    exit;
    if ($password == $row['password']) { /* login successful */ }

}

// Check if email already exists
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "This email is already registered!";
} else {
    // Insert new user
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $password);
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

$conn->close();
?>
        <button type="submit">Login</button>
    </form>
