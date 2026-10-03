<!DOCTYPE html>
<html>
<head>
    <title>Activity 10 - Prime Numbers from 10 to 50</title>
</head>
<body>
    <h2>Activity 10 - Prime Numbers from 10 to 50</h2>
    <?php
    echo "Prime numbers from 10 to 50: <br>";

    for ($num = 10; $num <= 50; $num++) {
        $count = 0;

        // count the divisors of $num
        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                $count++;
            }
        }

        if ($count == 2) {
            echo "$num ";
        }
    }
    ?>
</body>
</html>
