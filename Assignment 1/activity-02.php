<!DOCTYPE html>
<html>
<head>
    <title>Activity 2 - Divisible by 3 and 5</title>
</head>
<body>
    <h2>Activity 2 - Divisible by 3 and 5</h2>
    <?php
    $num = 15;
    echo "Number: $num <br>";

    // % gives the remainder. Remainder 0 means "divisible"
    if ($num % 3 == 0 && $num % 5 == 0) {
        echo "$num is divisible by 3 and 5";
    } elseif ($num % 3 == 0) {
        echo "$num is divisible by 3 only";
    } elseif ($num % 5 == 0) {
        echo "$num is divisible by 5 only";
    } else {
        echo "$num is not divisible by 3 or 5";
    }
    ?>
</body>
</html>
