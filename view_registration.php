<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Registrations</title>
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
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow-x: auto;
    margin-right: 36px;
        }
        h2 {
            margin-bottom: 20px;
            color: white;
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
        ALIGN-ITEMS: center;
        justify-content: space-evenly;
            }
            .container {
                padding: 10px;
                width: 100%;
            }
        }
    </style>
</head>
<body >
    <div id="sidebar">
        <h2>Admin Menu</h2>
        <a href="view_registration.php">View Registrations</a>
        <a href="upload_pdf.php">Upload PDF</a>
    </div>
    <div class="container">
        <h2>Registered Users</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                </tr>
            </thead>
            <tbody>
                <?php
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

                // Fetch data from users table
                $sql = "SELECT id, name, email, mobile FROM registration";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["mobile"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No users found</td></tr>";
                }

                // Close connection
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
