<!DOCTYPE html>
<html>
<head>
    <title>Activity 4 - Divisible by 2 and 5</title>
</head>
<body>
    <h2>Activity 4 - Divisible by 2 and 5</h2>
    <?php
    // numbers from 50 down to 2 that can be divided by 2 and by 5
    echo "Numbers divisible by 2 and 5 (from 50 to 2): <br>";

    for ($n = 50; $n >= 2; $n--) {
        if ($n % 2 == 0 && $n % 5 == 0) {
            echo "$n ";
        }
    }
    ?>
</body>
</html>
