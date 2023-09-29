<?php
if (isset($_POST['submit'])) {
    $file_name = $_POST['variable_name'];

    $directory_path = './';


    $file_path = $directory_path . $file_name;

    if (file_exists($file_path)) {
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $file_name . '"');
        readfile($file_path);
    } else {
        // Handle the case where the file does not exist
        echo 'File not found';
    }
}
?>
