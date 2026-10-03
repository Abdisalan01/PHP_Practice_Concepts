<!DOCTYPE html>
<html>
<head>
    <title>Activity 3 - Odd and Even Numbers</title>
</head>
<body>
    <h2>Activity 3 - Odd and Even Numbers</h2>
    <?php
    // odd numbers from 2 to 20
    echo "Odd numbers from 2 to 20: <br>";
    $i = 2;
    while ($i <= 20) {
        if ($i % 2 == 1) {
            echo "$i ";
        }
        $i++;
    }

    echo "<br><br>";

    // even numbers from 35 down to 7
    echo "Even numbers from 35 to 7: <br>";
    $i = 35;
    while ($i >= 7) {
        if ($i % 2 == 0) {
            echo "$i ";
        }
        $i--;
    }
    ?>
</body>
</html>
