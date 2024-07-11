<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ai-master";

    // Store form data in session to use after payment
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['mobile'] = $mobile;

    // Prepare data for PayU payment
    $payu_url = 'https://secure.payu.in/_payment'; // Example PayU URL, replace with actual PayU URL
    $payu_params = array(
        'key' => 'your_merchant_key',
        'amount' => '449', // Example amount in INR (adjust as needed)
        'firstname' => $name,
        'email' => $email,
        'phone' => $mobile,
        // Add more parameters as required by PayU API
        'surl' => 'http://yourdomain.com/payment_success.php', // Success URL
        'furl' => 'http://yourdomain.com/payment_failure.php', // Failure URL
        
    );

    // Redirect to PayU gateway
    header('Location: ' . $payu_url . '?' . http_build_query($payu_params));
    exit;
}
?>
