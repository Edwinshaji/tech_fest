<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techfest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the table (change 'your_table' to your actual table name)
$sql = "SELECT student_name,college,event_,event_date FROM registration";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background: white;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background: #007BFF;
            color: white;
        }
    </style>
</head>

<body>

    <h2>Admin Dashboard</h2>
    <table>
        <tr>
            <th>Student Name</th>
            <th>College</th>
            <th>Event</th>
            <th>Event Date</th>
        </tr>

        <?php
        // Check if there are rows to display
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['student_name']}</td>
                    <td>{$row['college']}</td>
                    <td>{$row['event_']}</td>
                    <td>{$row['event_date']}</td>
                  </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No records found</td></tr>";
        }
        $conn->close();
        ?>

    </table>
    <br>
    <br>
    <a href="index.php" style="text-align: center;">Home</a>&nbsp;&nbsp;
    <a href="register.php" style="text-align: center;">Registration</a>

</body>

</html>