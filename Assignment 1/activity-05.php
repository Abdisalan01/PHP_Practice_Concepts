<!DOCTYPE html>
<html>
<head>
    <title>Activity 5 - Reverse a Number</title>
</head>
<body>
    <h2>Activity 5 - Reverse a Number</h2>
    <?php
    $num = 12345;
    $copy = $num;      // keep the first value to print it later
    $rev = 0;

    while ($copy > 0) {
        $last = $copy % 10;          // take the last digit
        $rev = $rev * 10 + $last;    // add it to the reversed number
        $copy = floor($copy / 10);   // remove the last digit
    }

    echo "Number: $num <br>";
    echo "Reverse: $rev";
    ?>
</body>
</html>
