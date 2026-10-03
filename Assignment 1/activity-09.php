<!DOCTYPE html>
<html>
<head>
    <title>Activity 9 - Prime or Not Prime</title>
</head>
<body>
    <h2>Activity 9 - Prime or Not Prime</h2>
    <?php
    $num = 29;
    $count = 0;   // how many numbers divide $num

    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $count++;
        }
    }

    // a prime number has only 2 divisors: 1 and itself
    if ($count == 2) {
        echo "$num is a prime number";
    } else {
        echo "$num is not a prime number";
    }
    ?>
</body>
</html>
