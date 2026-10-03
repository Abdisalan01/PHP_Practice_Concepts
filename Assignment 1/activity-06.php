<!DOCTYPE html>
<html>
<head>
    <title>Activity 6 - LCM of Two Numbers</title>
</head>
<body>
    <h2>Activity 6 - LCM of Two Numbers</h2>
    <?php
    $a = 8;
    $b = 12;

    // start from the bigger number
    if ($a > $b) {
        $lcm = $a;
    } else {
        $lcm = $b;
    }

    // add 1 until the number can be divided by both
    while ($lcm % $a != 0 || $lcm % $b != 0) {
        $lcm++;
    }

    echo "LCM of $a and $b = $lcm";
    ?>
</body>
</html>
