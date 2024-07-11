<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: calc(100% - 250px);
            max-width: 1000px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            overflow-x: auto;
            margin-right: 36px;
        }
        h2 {
            margin-bottom: 20px;
            color: white;
        }
        form {
            margin-top: 20px;
        }
        input[type="file"] {
            margin-bottom: 10px;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
        /* Sidebar styles */
        #sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            padding: 20px;
            position: fixed;
            height: 100%;
            overflow-y: auto;
            top: 0;
            left: 0;
            z-index: 100; /* Ensure sidebar is above other content */
        }
        #sidebar a {
            display: block;
            padding: 10px 15px;
            color: #fff;
            text-decoration: none;
        }
        #sidebar a:hover {
            background-color: #555;
        }

        /* Adjust container layout for smaller screens */
        @media only screen and (max-width: 1200px) {
            .container {
                width: 60%;
            } /* Full width on smaller screens */
        }

        @media only screen and (max-width: 992px) {
            #sidebar {
                width: 100%;
                position: relative;
                height: auto;
                overflow-y: hidden;
            }
            #sidebar a {
                padding: 10px;
            }
            .container {
                padding: 10px;
            }
        }

        @media only screen and (max-width: 768px) {
            #sidebar {
                display: flex; /* Hide sidebar on small screens */
                align-items: center;
                justify-content: space-evenly;
            }
            .container {
                padding: 10px;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div id="sidebar">
        <h2>Admin Menu</h2>
        <a href="view_registration.php">View Registrations</a>
        <a href="upload_pdf.php">Upload PDF</a>
    </div>
    <div class="container">
        <h2 style="color:black">Upload PDF</h2>
        
        <?php
        // Check if a PDF file exists in the uploads directory
        $uploadDirectory = 'uploads/';
        $pdfFile = $uploadDirectory . 'uploaded_pdf.pdf';
        
        if (file_exists($pdfFile)) {
            echo '<p><strong>Currently Uploaded PDF:</strong></p>';
            echo '<p><a href="' . $pdfFile . '" target="_blank">View PDF</a></p>';
            echo '<p><strong>Replace Existing PDF:</strong></p>';
        }
        ?>
        
        <form action="upload_pdf_process.php" method="post" enctype="multipart/form-data">
            <input type="file" name="pdf_file" required>
            <button type="submit">Upload PDF</button>
        </form>
    </div>
</body>
</html>
