<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modern </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Login Form -->


<div class="login-page">
    <div class="form">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "docsign";

            // Create a connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check if the connection is successful
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } else {
                echo "connected";
            }

            // Retrieve form inputs
            if (isset($_POST['username']) && isset($_POST['password'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                // Sanitize inputs to prevent SQL injection
                $username = mysqli_real_escape_string($conn, $username);
                $password = mysqli_real_escape_string($conn, $password);

                // Query to check if the user exists
                $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
                $result = $conn->query($sql);

                // Check if the query returns any rows
                if ($result->num_rows > 0) {
                    session_start();

                    $_SESSION['username'] = $username;

                    // Credentials are valid, redirect to the desired page
                    header("Location:dashaboard/dashaboard.php"); // Replace with the desired page URL
                    exit();
                } else {
                    // Invalid credentials, display an error message
                    echo "Invalid credentials. Please try again.";
                }
            }

            // Close the database connection
            $conn->close();
        }
        ?>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="username"/>
            <input type="password" name="password" placeholder="password"/>
            <button type="submit">log</button>
            <p class="message">Not registered? <a href="sign.php">Create an account</a></p>
        </form>
    </div>
</div>
</body>
</html>
