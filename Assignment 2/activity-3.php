<!DOCTYPE html>
<html>
<head>
    <title>Activity 3 - Student Information</title>
</head>
<body>
    <h2>Activity 3 - Student Information</h2>
    <?php
    // each student is an associative array
    $students = array(
        array(
            "ID"      => "CA221",
            "Name"    => "Mohamed Ahmed Ali",
            "Phone"   => "0648440403",
            "Address" => "Laba Dhagax, Wardhiigley"
        ),
        array(
            "ID"      => "CA223",
            "Name"    => "Ahmed Abdi Jama",
            "Phone"   => "0647223201",
            "Address" => "Taleex, Hodan"
        ),
        array(
            "ID"      => "C1230130",
            "Name"    => "Amina Nur Adan",
            "Phone"   => "0646990276",
            "Address" => "Macmacaanka, Dharkeynley"
        )
    );

    echo "<table border='1' cellpadding='8'>";

    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Phone</th>";
    echo "<th>Address</th>";
    echo "</tr>";

    foreach ($students as $s) {
        echo "<tr>";
        echo "<td>" . $s["ID"] . "</td>";
        echo "<td>" . $s["Name"] . "</td>";
        echo "<td>" . $s["Phone"] . "</td>";
        echo "<td>" . $s["Address"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
