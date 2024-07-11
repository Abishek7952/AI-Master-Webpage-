<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ai-master";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the token from the query parameter
$token = $_GET['token'] ?? '';

if ($token) {
    // Validate the token
    $sql = "SELECT * FROM registration WHERE token = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s",$token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Token is valid, show the download link
        echo "<h1>Download your PDF</h1>";
        echo "<a href='uploads/uploaded_pdf.pdf' download>Download PDF</a>";
    } else {
        // Invalid token
        echo "Invalid download link.";
    }
    
} else {
    // No token provided
    echo "No download link provided.";

}

$conn->close();

?>
