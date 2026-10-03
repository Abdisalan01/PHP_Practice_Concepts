<!DOCTYPE html>
<html>
<head>
    <title>Activity 7 - HCF of Two Numbers</title>
</head>
<body>
    <h2>Activity 7 - HCF of Two Numbers</h2>
    <?php
    $a = 18;
    $b = 24;
    $hcf = 1;

    // try every number from 1 to the smaller number
    for ($i = 1; $i <= $a && $i <= $b; $i++) {
        if ($a % $i == 0 && $b % $i == 0) {
            $hcf = $i;   // save the last number that divides both
        }
    }

    echo "HCF of $a and $b = $hcf";
    ?>
</body>
</html>
