<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Result</title>
</head>
<body>

<?php
// $_FILES is a superglobal array holding information about an uploaded file.
if (!empty($_FILES['file'])) {

    echo "File Name is: " . $_FILES['file']['name'] . "<br>";
    echo "File Type is: " . $_FILES['file']['type'] . "<br>";
    echo "File Size is: " . $_FILES['file']['size'] . "<br>";
    echo "File Temporary Name is: " . $_FILES['file']['tmp_name'] . "<br>";

    // Rename the file with the text input value, keeping the original extension
    $exts = explode(".", $_FILES['file']['name']);
    $ext  = end($exts);

    // Move the file from the temporary folder to its final destination
    $temp        = $_FILES['file']['tmp_name'];
    $destination = "C:/Users/HP/Downloads/tast/" . $_POST['rename'] . "." . $ext;

    // Check if the file already exists in the destination folder
    if (file_exists($destination)) {
        echo "File already exists in the destination folder.";
    } else {
        // Check file size (max 500KB)
        if ($_FILES['file']['size'] > 500000) {
            echo "File size is too large. Maximum allowed size is 500KB.";
        } else {
            if (move_uploaded_file($temp, $destination))
                echo "File uploaded successfully to: " . $destination;
            else
                echo "Error uploading file.";
        }
    }
} else {
    echo "No file uploaded.";
}
?>

</body>
</html>
