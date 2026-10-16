<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>

<!-- enctype="multipart/form-data" is required whenever a form includes a file input -->
<form action="Home.php" method="post" enctype="multipart/form-data">

    <label for="file">File:</label>
    <input type="file" id="file" name="file" required><br><br>

    <label for="rename">Enter File Name:</label><br>
    <input type="text" id="rename" name="rename" required><br><br>

    <input type="submit" value="Upload File">

</form>

</body>
</html>
