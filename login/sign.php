<?php  
function executeInsertQuery($query) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "docsign";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Execute the provided query
    if ($conn->query($query) === TRUE) {
        $insertedId = $conn->insert_id; // Get the last inserted ID
        $conn->close(); // Close the connection before returning the ID
        return $insertedId;
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}

// Example usage


if ($_SERVER["REQUEST_METHOD"] === "POST" ) {
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    if (isset($_POST["sign"])) {
        $targetDirectory = "dashaboard/pages/images/"; // Change this to your desired directory
        $imageName = basename($_FILES['profileImage']['name']);
        $targetFilePath = $targetDirectory . $imageName;
        move_uploaded_file($_FILES['profileImage']['tmp_name'], $targetFilePath );
      $id=  executeInsertQuery("INSERT INTO USERS (username, prenom, nom, password, sign_person) VALUES ('$username', '$first_name', '$last_name', '$pass', 'yes')");
      executeInsertQuery("INSERT INTO SIGN_IMAGES VALUES ('$imageName','$id')");

    }
    else{
        executeInsertQuery("INSERT INTO USERS (username, prenom, nom, password, sign_person) VALUES ('$username', '$first_name', '$last_name', '$pass', 'no')");


    }
  
   
    
  
}
?>
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
    <form method="post" enctype="multipart/form-data">
    <input type="text" name="first_name" placeholder="First Name "/>
            <input type="text" name="last_name" placeholder="Last Name"/>
            <input type="text" name="username" placeholder="username"/>
            <input type="password" name="password" placeholder="password"/>
            <div class="checkbox">
            <label for="">Check if you will sign pdfs </label>
            <input type="checkbox" name="sign" id="show" name="horns" />
            </div>
            
    <div id="box"><label for="">Please add Your signature image : </label>
    <br>
    <input class="image-upload" type="file" id="profileImage" name="profileImage" accept="image/*">
</div>
            <button type="submit">Sign Up</button>
            <p class="message">Already Have an Account? <a href="login.php">Log in To your account</a></p>
        </form>
    </div>
</div>
<script src="index.js"></script>
</body>
</html>

