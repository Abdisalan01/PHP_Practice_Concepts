<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week 4: Advanced PHP Forms &amp; Validation (Part 1)</title>
</head>
<body>
    <h1>Week 4: Advanced PHP Forms &amp; Validation (Part 1)</h1>

<div id="topic1">
<?php
// ===================== 1. Textbox, password and textarea =====================
echo "<h3>1. Textbox, password and textarea</h3>";
?>
<form method="post">
    <label for="fullName">Enter Full Name:</label>
    <input type="text" id="fullName" name="fullName"><br><br>

    <label for="pinCode">Enter Password:</label>
    <input type="password" id="pinCode" name="pinCode"><br><br>

    <label for="comment">Enter Comment:</label><br>
    <textarea id="comment" name="comment" cols="30" rows="4"></textarea><br><br>

    <input type="reset" value="Reset form">
    <input type="submit" name="submit_contact" value="Register">
</form>

<?php
// A form is a collection of controls used to gather information from the user.
// Each control is read with $_POST, using the control's "name" attribute as the key.
if (!empty($_POST["submit_contact"])) {
    $fullName = htmlspecialchars(trim($_POST["fullName"] ?? ""), ENT_QUOTES, "UTF-8");
    $pinCode  = htmlspecialchars($_POST["pinCode"] ?? "", ENT_QUOTES, "UTF-8");
    $comment  = htmlspecialchars(trim($_POST["comment"] ?? ""), ENT_QUOTES, "UTF-8");

    echo "User name: $fullName<br>";
    echo "Password: $pinCode<br>";
    echo "Comment: " . nl2br($comment);
}
?>
</div>

<hr>

<div id="topic2">
<?php
// ===================== 2. Radio button fields =====================
echo "<h3>2. Radio button fields</h3>";
?>
<form method="post">
    <input type="radio" name="sex" value="male"> Male
    <input type="radio" name="sex" value="female"> Female<br><br>
    <input type="submit" name="submit_sex" value="Register">
</form>

<?php
// Radio buttons that share the same "name" work as one group: only one can be chosen.
if (!empty($_POST["submit_sex"]) && !empty($_POST["sex"]))
    echo "Sex: " . htmlspecialchars($_POST["sex"], ENT_QUOTES, "UTF-8");
?>
</div>

<hr>

<div id="topic3">
<?php
// ===================== 3. Checkbox fields =====================
echo "<h3>3. Checkbox fields</h3>";
?>
<form method="post">
    <input type="checkbox" name="faculties[]" value="Engineering"> Engineering
    <input type="checkbox" name="faculties[]" value="Medicine"> Medicine
    <input type="checkbox" name="faculties[]" value="Computer Sciences"> Computer Sciences<br><br>
    <input type="submit" name="submit_faculties" value="Register">
</form>

<?php
// "faculties[]" (with square brackets) lets the user tick more than one box.
// $_POST["faculties"] then comes back as an array, one entry per ticked box.
if (!empty($_POST["submit_faculties"]) && !empty($_POST["faculties"])) {
    echo "Selected faculties: ";
    foreach ($_POST["faculties"] as $f)
        echo htmlspecialchars($f, ENT_QUOTES, "UTF-8") . ", ";
}
?>
</div>

<hr>

<div id="topic4">
<?php
// ===================== 4. Drop-down menu (single choice) =====================
echo "<h3>4. Drop-down menu (single choice)</h3>";
?>
<form method="post">
    <select name="pob">
        <option value="Muqdisho">Muqdisho</option>
        <option value="Hargeysa">Hargeysa</option>
        <option value="Kismayo">Kismayo</option>
        <option value="Marko">Marko</option>
    </select><br><br>
    <input type="submit" name="submit_pob" value="Register">
</form>

<?php
// A plain <select> (no "multiple") only ever returns one value.
if (!empty($_POST["submit_pob"]))
    echo "Place of birth: " . htmlspecialchars($_POST["pob"], ENT_QUOTES, "UTF-8");
?>
</div>

</body>
</html>
