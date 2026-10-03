<!DOCTYPE html>
<html>
<head>
    <title>Activity 2 - Color Array</title>
</head>
<body>
    <h2>Activity 2 - Color Array</h2>
    <?php
    // two-dimensional associative array
    $colors = array(
        "Light" => array(
            "Red"   => "Light Red",
            "Green" => "Light Green",
            "Blue"  => "Light Blue"
        ),
        "Normal" => array(
            "Red"   => "Normal Red",
            "Green" => "Normal Green",
            "Blue"  => "Normal Blue"
        ),
        "Dark" => array(
            "Red"   => "Dark Red",
            "Green" => "Dark Green",
            "Blue"  => "Dark Blue"
        )
    );

    echo "<table border='1' cellpadding='8'>";

    // header row
    echo "<tr>";
    echo "<th></th>";
    echo "<th>Red</th>";
    echo "<th>Green</th>";
    echo "<th>Blue</th>";
    echo "</tr>";

    // one row for each shade
    foreach ($colors as $shade => $row) {
        echo "<tr>";
        echo "<th>$shade</th>";
        foreach ($row as $color) {
            echo "<td>$color</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
