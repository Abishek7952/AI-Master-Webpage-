<?php
session_start();

// Check if PayU response indicates success (you need to verify PayU's response parameters)
if (isset($_POST['status']) && $_POST['status'] === 'success') {
    // Collect data from session
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $mobile = $_SESSION['mobile'];

    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ai-master";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Generate a unique token (you can use a library like random_bytes or generate it manually)
    $token = bin2hex(random_bytes(16)); // Example: Generates a 32-character token

    // Prepare SQL query to insert data into table along with the token
    $stmt = $conn->prepare("INSERT INTO registration (name, email, mobile, token) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $mobile, $token);

    if ($stmt->execute() === TRUE) {
        // Redirect to download page with token
        header("Location: download.php?token=$token");
        exit;
    }
    else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();

    // Clear session data
    session_unset();
    session_destroy();
} else {
    header('Location: payment_failure.php');
    exit;
}
?>
