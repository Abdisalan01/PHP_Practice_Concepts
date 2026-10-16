<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listbox (multiple choice)</title>
</head>
<body>

<form action="dropdown.php" method="post" enctype="multipart/form-data">

    <select name="distric[]" multiple>
        <option value="kaaraan">Kaaraan</option>
        <option value="yaqshiid">Yaqshiid</option>
        <option value="hodan">Hodan</option>
        <option value="dayniile">Dayniile</option>
    </select><br><br>

    <input type="submit" value="Submit">

</form>

<?php
// select[multiple] lets the user choose more than one option (hold Ctrl while clicking).
// Naming it "distric[]" (with square brackets) makes $_POST['distric'] come back as an array.
if (!empty($_POST['distric'])) {
    echo "<br>Selected distric: ";

    foreach ($_POST['distric'] as $selected)
        echo $selected . ", ";
} else {
    echo "No distric selected.";
}
?>

</body>
</html>
