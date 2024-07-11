
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f9f9f9;
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

        /* Content area styles */
        #content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
        }

        /* Upload PDF page specific styles */
        .upload-container {
            max-width: 600px;
            margin: 0 auto;
        }
        .upload-container h2 {
            margin-top: 0;
        }
        .upload-container form {
            margin-top: 20px;
            background-color: #f9f9f9;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .upload-container input[type="file"] {
            margin-bottom: 10px;
        }
        .upload-container button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
        .upload-container button[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Registration page specific styles */
        .registration-container {
            overflow-x: auto;
        }
        .registration-container table {
            width: 100%;
            border-collapse: collapse;
        }
        .registration-container th, .registration-container td {
            padding: 10px 15px;
            border-bottom: 1px solid #ddd;
            white-space: nowrap;
        }
        .registration-container th {
            background-color: #f2f2f2;
        }
        .registration-container tr:hover {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div id="sidebar">
        <h2 style="color:white  ">Admin Menu</h2>
        <a href="view_registration.php">View Registrations</a>
        <a href="upload_pdf.php">Upload PDF</a>
    </div>

    <div id="content">
        
        <!-- Content will be dynamically loaded based on sidebar navigation -->
    </div>
</body>
</html>
