<?php 
session_start(); 
$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CodePen - Users Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="dashboard">
	<aside class="search-wrap">
		<div class="search">
			<label for="search">
				
			</label>
		</div>
		
		<div class="user-actions">
			<button>
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13.094 2.085l-1.013-.082a1.082 1.082 0 0 0-.161 0l-1.063.087C6.948 2.652 4 6.053 4 10v3.838l-.948 2.846A1 1 0 0 0 4 18h4.5c0 1.93 1.57 3.5 3.5 3.5s3.5-1.57 3.5-3.5H20a1 1 0 0 0 .889-1.495L20 13.838V10c0-3.94-2.942-7.34-6.906-7.915zM12 19.5c-.841 0-1.5-.659-1.5-1.5h3c0 .841-.659 1.5-1.5 1.5zM5.388 16l.561-1.684A1.03 1.03 0 0 0 6 14v-4c0-2.959 2.211-5.509 5.08-5.923l.921-.074.868.068C15.794 4.497 18 7.046 18 10v4c0 .107.018.214.052.316l.56 1.684H5.388z"/></svg>
			</button>
			<a href="../../../login.php">

			<button>
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 21c4.411 0 8-3.589 8-8 0-3.35-2.072-6.221-5-7.411v2.223A6 6 0 0 1 18 13c0 3.309-2.691 6-6 6s-6-2.691-6-6a5.999 5.999 0 0 1 3-5.188V5.589C6.072 6.779 4 9.65 4 13c0 4.411 3.589 8 8 8z"/><path d="M11 2h2v10h-2z"/></svg>
			</button>
</a>
		</div>
	</aside>
	
	<header class="menu-wrap">
		<figure class="user">
			<div class="user-avatar">
				<img src="../../images/icon.webp">
			</div>
			<figcaption>
				<?php echo $username ; ?>
			</figcaption>
		</figure>
	
        <nav>
			<section class="dicover">
				<h3>Discover</h3>
				
				<ul>
					<li>
						<a href="../positions/positions.php">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M5 8.51464C5 4.9167 8.13401 2 12 2C15.866 2 19 4.9167 19 8.51464C19 12.0844 16.7658 16.2499 13.2801 17.7396C12.4675 18.0868 11.5325 18.0868 10.7199 17.7396C7.23416 16.2499 5 12.0844 5 8.51464Z" stroke="#1C274C" stroke-width="1.5"></path> <path d="M14 9C14 10.1046 13.1046 11 12 11C10.8954 11 10 10.1046 10 9C10 7.89543 10.8954 7 12 7C13.1046 7 14 7.89543 14 9Z" stroke="#1C274C" stroke-width="1.5"></path> <path d="M20.9605 15.5C21.6259 16.1025 22 16.7816 22 17.5C22 19.9853 17.5228 22 12 22C6.47715 22 2 19.9853 2 17.5C2 16.7816 2.37412 16.1025 3.03947 15.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
						Positions
						</a>
					</li>
					
					<li>
						<a href="../recived/sign.php">
							<svg width="24" height="24" fill="#000000" height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 258.141 258.141" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M66.36,46.893h100.422c2.209,0,4-1.791,4-4s-1.791-4-4-4H66.36c-2.209,0-4,1.791-4,4S64.151,46.893,66.36,46.893z"></path> <path d="M66.36,69.698h100.422c2.209,0,4-1.791,4-4s-1.791-4-4-4H66.36c-2.209,0-4,1.791-4,4S64.151,69.698,66.36,69.698z"></path> <path d="M66.36,92.503h100.422c2.209,0,4-1.791,4-4s-1.791-4-4-4H66.36c-2.209,0-4,1.791-4,4S64.151,92.503,66.36,92.503z"></path> <path d="M66.36,115.308h100.422c2.209,0,4-1.791,4-4s-1.791-4-4-4H66.36c-2.209,0-4,1.791-4,4S64.151,115.308,66.36,115.308z"></path> <path d="M66.36,138.113h100.422c2.209,0,4-1.791,4-4s-1.791-4-4-4H66.36c-2.209,0-4,1.791-4,4S64.151,138.113,66.36,138.113z"></path> <path d="M222.917,167.082c-1.133-1.19-2.704-1.863-4.346-1.863c-0.025,0-0.05,0-0.074,0c-2.695,0-5.21-1.078-7.083-3.037 c-1.908-1.995-2.883-4.611-2.747-7.368c0.081-1.641-0.514-3.243-1.646-4.433c-1.133-1.19-2.704-1.863-4.346-1.863h-3.103V6 c0-3.313-2.687-6-6-6h-154c-3.313,0-6,2.687-6,6v210.617c0,3.314,2.687,6,6,6h94.546c7.439,12.401,18.374,24.604,34.43,34.616 c0.972,0.606,2.073,0.909,3.175,0.909s2.203-0.303,3.175-0.909c40.553-25.287,48.524-64.542,49.666-85.69 C224.651,169.893,224.056,168.279,222.917,167.082z M171.721,244.988c-30.145-20.383-38.422-49.798-40.426-68.701 c3.539-1.071,6.763-3.046,9.408-5.812c2.673-2.795,4.541-6.25,5.451-9.958h51.135c0.911,3.708,2.778,7.162,5.451,9.958 c2.646,2.766,5.869,4.741,9.408,5.813C210.143,195.19,201.866,224.605,171.721,244.988z M45.571,210.617V12h142v136.518h-46.801 c-1.643,0-3.213,0.673-4.346,1.863c-0.687,0.722-1.172,1.596-1.433,2.538H66.36c-2.209,0-4,1.791-4,4s1.791,4,4,4h66.683 c-0.304,0.441-0.635,0.867-1.013,1.263c-1.874,1.96-4.388,3.037-7.083,3.037c-0.015,0-0.031,0-0.046,0 c-1.657-0.019-3.235,0.667-4.374,1.863s-1.734,2.811-1.645,4.46c0.072,1.325,0.17,2.722,0.302,4.182H66.36c-2.209,0-4,1.791-4,4 s1.791,4,4,4h53.826c1.288,8.085,3.63,17.352,7.766,26.893H45.571z"></path> <path d="M171.721,169.169c-14.08,0-25.493,11.414-25.493,25.493s11.414,25.493,25.493,25.493s25.493-11.414,25.493-25.493 S185.801,169.169,171.721,169.169z M178.08,186.38c1.563-1.563,4.095-1.562,5.657,0c1.562,1.562,1.562,4.095,0,5.657 l-12.368,12.368c-0.75,0.75-1.768,1.172-2.829,1.172s-2.078-0.421-2.829-1.171l-6.006-6.006c-1.562-1.563-1.562-4.095,0-5.657 c1.563-1.562,4.095-1.562,5.657,0l3.178,3.178L178.08,186.38z"></path> </g> </g></svg>
						Signed documents 
						</a>
					</li>
					
					<li>
						<a href="..\refused\refuesd.php">
							<svg  width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18.5 20C18.5 20.275 18.276 20.5 18 20.5H12.2678C11.9806 21.051 11.6168 21.5557 11.1904 22H18C19.104 22 20 21.104 20 20V9.828C20 9.298 19.789 8.789 19.414 8.414L13.585 2.586C13.57 2.57105 13.5531 2.55808 13.5363 2.5452C13.5238 2.53567 13.5115 2.5262 13.5 2.516C13.429 2.452 13.359 2.389 13.281 2.336C13.2557 2.31894 13.2281 2.30548 13.2005 2.29207C13.1845 2.28426 13.1685 2.27647 13.153 2.268C13.1363 2.25859 13.1197 2.24897 13.103 2.23933C13.0488 2.20797 12.9944 2.17648 12.937 2.152C12.74 2.07 12.528 2.029 12.313 2.014C12.2933 2.01274 12.2738 2.01008 12.2542 2.00741C12.2271 2.00371 12.1999 2 12.172 2H6C4.896 2 4 2.896 4 4V11.4982C4.47417 11.3004 4.97679 11.1572 5.5 11.0764V4C5.5 3.725 5.724 3.5 6 3.5H12V8C12 9.104 12.896 10 14 10H18.5V20ZM13.5 4.621L17.378 8.5H14C13.724 8.5 13.5 8.275 13.5 8V4.621Z" fill="#212121"></path> <path d="M12 17.5C12 20.5376 9.53757 23 6.5 23C3.46243 23 1 20.5376 1 17.5C1 14.4624 3.46243 12 6.5 12C9.53757 12 12 14.4624 12 17.5ZM6.5 14C6.22386 14 6 14.2239 6 14.5V18.5C6 18.7761 6.22386 19 6.5 19C6.77614 19 7 18.7761 7 18.5V14.5C7 14.2239 6.77614 14 6.5 14ZM6.5 21.125C6.84518 21.125 7.125 20.8452 7.125 20.5C7.125 20.1548 6.84518 19.875 6.5 19.875C6.15482 19.875 5.875 20.1548 5.875 20.5C5.875 20.8452 6.15482 21.125 6.5 21.125Z" fill="#212121"></path> </g></svg>
						refused doucuments
						</a>
					</li>
					
					<li>
						<a href="../upload/upload.php">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M17 9.00195C19.175 9.01406 20.3529 9.11051 21.1213 9.8789C22 10.7576 22 12.1718 22 15.0002V16.0002C22 18.8286 22 20.2429 21.1213 21.1215C20.2426 22.0002 18.8284 22.0002 16 22.0002H8C5.17157 22.0002 3.75736 22.0002 2.87868 21.1215C2 20.2429 2 18.8286 2 16.0002L2 15.0002C2 12.1718 2 10.7576 2.87868 9.87889C3.64706 9.11051 4.82497 9.01406 7 9.00195" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> <path d="M12 15L12 2M12 2L15 5.5M12 2L9 5.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
						Upload a document
						</a>
					</li>
					<?php
                     $servername = "localhost";
					 $user = "root";
					 $password = "";
					 $dbname = "docsign";
					 
					 // Create a connection
					 $conn = new mysqli($servername, $user, $password, $dbname);
					 
					 // Check if the connection is successful
					 if ($conn->connect_error) {
						 die("Connection failed: " . $conn->connect_error);
					 }


					 $username= $_SESSION['username'];
$sql = "SELECT SIGN_PERSON FROM USERS WHERE username = '$username'";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
   
  $row = $result->fetch_assoc();
        $sign = $row['SIGN_PERSON'];
		
	
	
	}
	if($sign=='yes'){
		echo '<li>
        <a href="../sign/sign.php">
            <svg hieght="24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16.652 3.45506L17.3009 2.80624C18.3759 1.73125 20.1188 1.73125 21.1938 2.80624C22.2687 3.88124 22.2687 5.62415 21.1938 6.69914L20.5449 7.34795M16.652 3.45506C16.652 3.45506 16.7331 4.83379 17.9497 6.05032C19.1662 7.26685 20.5449 7.34795 20.5449 7.34795M16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9M20.5449 7.34795L17.5625 10.3304M14.5801 13.3128C14.1761 13.7168 13.9741 13.9188 13.7513 14.0926C13.4886 14.2975 13.2043 14.4732 12.9035 14.6166C12.6485 14.7381 12.3775 14.8284 11.8354 15.0091L10.1 15.5876M10.1 15.5876L8.97709 15.9619C8.71035 16.0508 8.41626 15.9814 8.21744 15.7826C8.01862 15.5837 7.9492 15.2897 8.03811 15.0229L8.41242 13.9M10.1 15.5876L8.41242 13.9" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> <path d="M22.75 12C22.75 11.5858 22.4142 11.25 22 11.25C21.5858 11.25 21.25 11.5858 21.25 12H22.75ZM12 2.75C12.4142 2.75 12.75 2.41421 12.75 2C12.75 1.58579 12.4142 1.25 12 1.25V2.75ZM7.37554 20.013C7.017 19.8056 6.5582 19.9281 6.3508 20.2866C6.14339 20.6452 6.26591 21.104 6.62446 21.3114L7.37554 20.013ZM2.68862 17.3755C2.89602 17.7341 3.35482 17.8566 3.71337 17.6492C4.07191 17.4418 4.19443 16.983 3.98703 16.6245L2.68862 17.3755ZM21.25 12C21.25 17.1086 17.1086 21.25 12 21.25V22.75C17.9371 22.75 22.75 17.9371 22.75 12H21.25ZM12 1.25C6.06294 1.25 1.25 6.06294 1.25 12H2.75C2.75 6.89137 6.89137 2.75 12 2.75V1.25ZM6.62446 21.3114C8.2064 22.2265 10.0432 22.75 12 22.75V21.25C10.3139 21.25 8.73533 20.7996 7.37554 20.013L6.62446 21.3114ZM1.25 12C1.25 13.9568 1.77351 15.7936 2.68862 17.3755L3.98703 16.6245C3.20043 15.2647 2.75 13.6861 2.75 12H1.25Z" fill="#1C274C"></path> </g></svg>
            documentes to sign
        </a>
    </li>';



	}
	$conn->close();


				?>
				</ul>
			

			</section>
		
			 
		</nav>
	</header>
	<form class="" action="upload.php" method="post" enctype="multipart/form-data">
   <!-- HTML -->
<div class="center">
    <div class="bar"></div>
    <div class="title">Drop files to upload</div>
    <div class="dropzone">
        
    <input id="pdf" type="file" name="pdf[]" value="" required multiple>

           
            <br>

            <input type="file" id="fileInput" accept=".pdf" multiple style="display: none;">
        </label>
    </div>
   <br>
   <h4>
    choose the destinations of your documentes
   </h4>
   <?php
$servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "docsign";

            // Create a connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check if the connection is successful
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            // Retrieve form inputs
          
               

                // Query to check if the user exists
                $sql = "SELECT nom, prenom FROM users where sign_person='yes'";
                $result = $conn->query($sql);
                if ($result && $result->num_rows > 0) {
                    // Loop through the records and create checkboxes for each user
                    while ($row = $result->fetch_assoc()) {
                        $nom = $row['nom'];
                        $prenom = $row['prenom'];
        
                        // Output the checkbox with the user's nom and prenom as the label
                        echo "<label>";
                        echo "<input type='checkbox' name='selected_users[]' value='$nom|$prenom'>";
                        echo $nom . " " . $prenom;
                        echo "</label><br>";
                    }
                } else {
                    echo "No users found in the database.";
                }
        
                // Close the database connection
                $conn->close();
        
        ?>
       
    
  <button class="upload-btn"> <center>Upload Files</center> </button>
</div>
<form>

<!-- JavaScript -->









<!-- partial -->
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace these with your actual database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "docsign";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check if the connection is successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if any files were uploaded
    if (isset($_FILES['pdf']) && !empty($_FILES['pdf']['name'][0])) {
        $files = $_FILES['pdf'];
        $totalFiles = count($files['name']);

        // Create the destination directory if it doesn't exist
        $uploadDirectory = "pdfs/";
        if (!file_exists($uploadDirectory)) {
            mkdir($uploadDirectory, 0777, true);
        }

        // Loop through each uploaded file and move it to the desired folder
        for ($i = 0; $i < $totalFiles; $i++) {
            $fileName = $files['name'][$i];
            $fileTmpName = $files['tmp_name'][$i];
            $fileSize = $files['size'][$i];
            $fileError = $files['error'][$i];
            $fileType = $files['type'][$i];

            // You can change the destination folder path below
            $uploadPath = "D:\\xampp2\\htdocs\\signapp\\login\\dashaboard\\pages\\positions\\pdfs\\" . $fileName;

            // Move the file to the desired folder
            if (move_uploaded_file($fileTmpName, $uploadPath)) {
                // Insert the file information into the database
            
                // Retrieve the sender ID based on the username (assuming the 'users' table contains 'id' and 'username' columns)
                $username = $_SESSION['username'];
                $sql = "SELECT id FROM users WHERE username = '$username'";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $senderId = $row['id'];
                }

                // Check if any users were selected
                if (isset($_POST['selected_users']) && is_array($_POST['selected_users'])) {
                    $selectedUsers = $_POST['selected_users'];

                    // Loop through the selected users
                    foreach ($selectedUsers as $selectedUser) {
                        // Split the value into nom and prenom using the delimiter '|'
                        list($nom, $prenom) = explode('|', $selectedUser);

                        // Retrieve the sign ID based on the nom and prenom (assuming the 'users' table contains 'id', 'nom', and 'prenom' columns)
                        $sql = "SELECT id FROM users WHERE nom='$nom' AND prenom='$prenom'";
                        $result = $conn->query($sql);

                        if ($result && $result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $signId = $row['id'];

                            // Now you can use $pdfId, $senderId, and $signId as needed
                            // For example, you can insert them into the 'signs' table along with the PDF file name
                            // Update the signs table as per your requirements
                            $sql = "INSERT INTO signs (pdf_file, sender_id, recipe_id) VALUES ('$fileName', '$senderId', '$signId')";
                            $conn->query($sql);
                        }
                    }
                }
            } else {
                echo "Error uploading one or more files. Please try again.";
            }
        }
    } else {
        echo "No files were uploaded.";
    }

    // Close the database connection
    $conn->close();
}
?>
