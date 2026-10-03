<!DOCTYPE html>
<html>
<head>
    <title>Activity 8 - Multiplication Table</title>
</head>
<body>
    <h2>Activity 8 - Multiplication Table</h2>
    <?php
    echo "<table border='1' cellpadding='5'>";

    // first row: the column numbers
    echo "<tr>";
    echo "<th>x</th>";
    for ($col = 1; $col <= 12; $col++) {
        echo "<th>$col</th>";
    }
    echo "</tr>";

    // other rows
    for ($row = 1; $row <= 12; $row++) {
        echo "<tr>";
        echo "<th>$row</th>";
        for ($col = 1; $col <= 12; $col++) {
            echo "<td>" . $row * $col . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
