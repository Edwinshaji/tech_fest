<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .login-container {
            background: white;
            width: 400px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            display: block;
            width: 93%;
            padding: 10px;
            margin: 10px 0;
        }

        button {
            background: blue;
            color: white;
            padding: 10px;
            border-radius: 20px;
            width: 100%;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <center>
            <h2>Admin Login</h2>
        </center>
        <form method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <br><br>
        <center>
            <a href="index.php" style="text-align: center;">Home</a>&nbsp;&nbsp;
            <a href="register.php" style="text-align: center;">Registration</a>
        </center>
    </div>



    <?php
    $admin_username = "admin_techfest";
    $admin_password = "TechFest2025";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === $admin_username && $password === $admin_password) {
            header("Location: admin.php");
            exit();
        } else {
            echo "Invalid credentials!";
        }
    }
    ?>


</body>

</html>