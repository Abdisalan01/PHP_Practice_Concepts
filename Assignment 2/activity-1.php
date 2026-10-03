<!DOCTYPE html>
<html>
<head>
    <title>Activity 1 - One-Dimensional Array</title>
</head>
<body>
    <h2>Activity 1 - One-Dimensional Array</h2>
    <?php
    $nums = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);
    $size = count($nums);

    $sum = 0;
    $evenSum = 0;
    $oddSum = 0;

    // add all, even and odd elements
    for ($i = 0; $i < $size; $i++) {
        $sum = $sum + $nums[$i];

        if ($nums[$i] % 2 == 0) {
            $evenSum = $evenSum + $nums[$i];
        } else {
            $oddSum = $oddSum + $nums[$i];
        }
    }

    // smallest and biggest element
    $min = min($nums);
    $max = max($nums);

    // print the array
    echo "Elements: ";
    for ($i = 0; $i < $size; $i++) {
        echo $nums[$i] . " ";
    }
    echo "<br><br>";

    echo "Sum of all elements: $sum <br>";
    echo "Sum of even elements: $evenSum <br>";
    echo "Sum of odd elements: $oddSum <br><br>";

    // positions start from 1 (index + 1)
    echo "Minimum element: $min <br>";
    echo "Position(s) of minimum: ";
    for ($i = 0; $i < $size; $i++) {
        if ($nums[$i] == $min) {
            echo ($i + 1) . " ";
        }
    }
    echo "<br><br>";

    echo "Maximum element: $max <br>";
    echo "Position(s) of maximum: ";
    for ($i = 0; $i < $size; $i++) {
        if ($nums[$i] == $max) {
            echo ($i + 1) . " ";
        }
    }
    ?>
</body>
</html>
