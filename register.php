<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Fest Registration</title>
    <style>
        body {
            font-family: Roboto Slab;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px #aaa;
            width: 500px;
            margin-top: 50px;
        }

        input,
        select,
        button {
            width: 95%;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #218838;
        }
    </style>

    <script>
        function validateForm() {
            let name = document.getElementById("name").value;
            let college = document.getElementById("college").value;
            let event = document.getElementById("event").value;
            let date = document.getElementById("event_date").value;

            if (name === "") {
                alert("Please Enter Your Name !!!");
                return false;
            }
            if (college === "") {
                alert("Please Enter Your College Name !!!");
                return false;
            }
            if (event === "") {
                alert("Please Select an Event !!!");
                return false;
            }
            if (date === "") {
                alert("Please Select a date for the Event !!!");
                return false;
            }
            return true;
        }
    </script>
</head>

<body>
    <div class="container">
        <center>
            <h2>Student Registration</h2>
        </center>
        <form method="POST" onsubmit="return validateForm()">
            <label for="student_name">Student Name:</label>
            <input type="text" id="name" name="name">

            <label for="college_name">College Name:</label>
            <input type="text" id="college" name="college">

            <label for="event">Item Participating:</label>
            <select id="event" name="event">
                <option value="Coding Competition">Coding Competition</option>
                <option value="Hacking Competition">Hacking Competition</option>
                <option value="Quiz Competition">Quiz Competition</option>
                <option value="Robo's">Robo's</option>
                <option value="Webpage Development">Webpage Development</option>
                <option value="Puzzletronics">Puzzletronics</option>
            </select>

            <label for="event_date">Date of the Event:</label>
            <input type="date" id="event_date" name="event_date">

            <button type="submit" name="submit">Register</button>
        </form>
        <br><br>
        <center><a href="index.php">home</a></center>
    </div>
    <br>


    <?php
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

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $college = $_POST['college'];
        $event = $_POST['event'];
        $date = $_POST['event_date'];

        $sql = "INSERT INTO registration(student_name,college,event_,event_date)
        VALUES ('$name','$college','$event','$date')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Registration Completed Successfuly!'); window.location.href='register.php';</script>";

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
</body>

</html>