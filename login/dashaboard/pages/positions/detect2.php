<?php
session_start(); // Make sure to start the session to access $_SESSION variables

// next_file.php
if (isset($_GET['var'])) {
    $idSign = $_GET['var'];

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
    
    // Assume you have stored the logged-in username in the variable $username
    // Replace $username with the actual session variable that contains the username
    $username = $_SESSION['username'];
   
    
    // It's important to use prepared statements to prevent SQL injection
    // Prepare the statement with a placeholder
    $sql = "SELECT pdf_file
    FROM signs
    WHERE id_sign = $idSign";

$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $pdfFile = $row['pdf_file'];


}
 
$conn->close();

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
          crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PDF Viewer</title>
</head>
<body>
    <div class="top-bar">
        <button class="btn" id="prev-page">
            <i class="fas fa-arrow-circle-left"></i> Prev Page
        </button>
        <button class="btn" id="next-page">
            Next Page <i class="fas fa-arrow-circle-right"></i>
        </button>
       
        <span class="page-info">
            Page <span id="page-num"></span> of <span id="page-count"></span>
        </span>
        <form method="post">
        <button type="submit" name="submit" class="btn" id="valider-bttn">
            valider
        </button>
        </form>
    </div>

    <center>
        <div id="pdf-container">
            <canvas id="pdf-render"></canvas>
            <span id="coordinates-display"></span> <!-- Display the signature coordinates here -->
        </div>
    </center>

    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
   <script>
    const url = 'pdfs/<?php echo $pdfFile; ?>';

let pdfDoc = null,
  pageNum = 1,
  pageIsRendering = false,
  pageNumIsPending = null;
  isSigning = false;
  // Function to update the canvas size to match the actual viewport size
  const updateCanvasSize = () => {
        const rect = canvas.getBoundingClientRect();
        canvas.width = rect.width;
        canvas.height = rect.height;
    };

const scale = 1.5,
  canvas = document.querySelector('#pdf-render'),
  ctx = canvas.getContext('2d');

// Render the page
const renderPage = num => {
  pageIsRendering = true;

  // Get page
  pdfDoc.getPage(num).then(page => {
    // Set scale
    const viewport = page.getViewport({ scale });
    canvas.height = viewport.height;
    canvas.width = viewport.width;

    const renderCtx = {
      canvasContext: ctx,
      viewport
    };

    page.render(renderCtx).promise.then(() => {
      pageIsRendering = false;

      if (pageNumIsPending !== null) {
        renderPage(pageNumIsPending);
        pageNumIsPending = null;
      }
    });

    // Output current page
    document.querySelector('#page-num').textContent = num;
  });
};

// Check for pages rendering
const queueRenderPage = num => {
  if (pageIsRendering) {
    pageNumIsPending = num;
  } else {
    renderPage(num);
  }
};
 
// Show Prev Page
const showPrevPage = () => {
  if (pageNum <= 1) {
    return;
  }
  pageNum--;
  queueRenderPage(pageNum);
};

// Show Next Page
const showNextPage = () => {
  if (pageNum >= pdfDoc.numPages) {
    return;
  }
  pageNum++;
  queueRenderPage(pageNum);
};

// Get Document
pdfjsLib
  .getDocument(url)
  .promise.then(pdfDoc_ => {
    pdfDoc = pdfDoc_;

    document.querySelector('#page-count').textContent = pdfDoc.numPages;

    renderPage(pageNum);
  })
  .catch(err => {
    // Display error
    const div = document.createElement('div');
    div.className = 'error';
    div.appendChild(document.createTextNode(err.message));
    document.querySelector('body').insertBefore(div, canvas);
    // Remove top bar
    document.querySelector('.top-bar').style.display = 'none';
  });

// Button Events
document.querySelector('#prev-page').addEventListener('click', showPrevPage);
document.querySelector('#next-page').addEventListener('click', showNextPage);
</script>

</body>



<?php

if (isset($_POST['submit'])) {
    // Your PHP code to be executed when the button is clicked goes here

    // For example, you can do something like this:
    echo "Button clicked!"; // Replace this with your actual code
   

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "docsign";
        
        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check if the connection is successful
      


      }
?>