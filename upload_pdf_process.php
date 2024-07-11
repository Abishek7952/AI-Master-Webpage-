<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define the directory where uploaded files will be saved
    $uploadDirectory = 'uploads/';

    // Check if the directory exists and create it if not
    if (!file_exists($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    // Define the path for the uploaded PDF file
    $targetFile = $uploadDirectory.'uploaded_pdf.pdf';

    // Check if a file was uploaded
    if (isset($_FILES['pdf_file'])) {
        $fileTmpPath = $_FILES['pdf_file']['tmp_name'];
        $fileName = $_FILES['pdf_file']['name'];

        // Check if file type is PDF
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        if ($fileType != 'pdf') {
            die("Error: Only PDF files are allowed.");
        }

        // Move the uploaded file to the defined target path
        if (move_uploaded_file($fileTmpPath, $targetFile)) {
            echo "PDF uploaded successfully.";
        } else {
            echo "Error uploading PDF.";
        }
    } else {
        echo "No file uploaded.";
    }
    
}
?>
