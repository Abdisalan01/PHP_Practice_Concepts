<!DOCTYPE html>
<html>
<head>
    <title>Activity 1 - Largest and Smallest Number</title>
</head>
<body>
    <h2>Activity 1 - Largest and Smallest Number</h2>
    <?php
    // three numbers
    $x = 12;
    $y = 5;
    $z = 9;

    echo "Numbers: $x, $y, $z <br>";

    // find the largest number
    if ($x >= $y && $x >= $z) {
        $max = $x;
    } elseif ($y >= $x && $y >= $z) {
        $max = $y;
    } else {
        $max = $z;
    }

    // find the smallest number
    if ($x <= $y && $x <= $z) {
        $min = $x;
    } elseif ($y <= $x && $y <= $z) {
        $min = $y;
    } else {
        $min = $z;
    }

    echo "Largest number: $max <br>";
    echo "Smallest number: $min";
    ?>
</body>
</html>
