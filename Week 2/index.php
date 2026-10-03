<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week 2: PHP Fundamentals &amp; Control Structures</title>
</head>
<body>
    <h1>Week 2: PHP Fundamentals &amp; Control Structures</h1>
<?php

// Prints natural numbers from 1 to 15
$i = 1;
while ($i <= 15)
{
    echo "$i, ";
    $i++;
}

echo "<br><br>";

// Multiplies numbers from 1 to 12 by 12 and prints the results
$count = 1;
while ($count <= 12)
{
    echo "$count times 12 is " . $count * 12 . "<br>";
    ++$count;
}

// ===================== 12. do...while loop =====================
echo "<h3>12. do...while loop</h3>";
// Calculate and print factorial of 5 (5!)
// 5 * 4 * 3 * 2 * 1
$result = 1;
$n = 5;
do {
    $result *= $n;
    //$result = $result * $n;
    $n--;
} while ($n > 0);

echo $result;

// ===================== 13. for loop =====================
echo "<h3>13. for loop</h3>";
// 12 times table
for ($count = 1; $count <= 12; ++$count)
    echo "$count times 12 is " . $count * 12 . "<br>";

echo "<br>";

// Square of numbers from 1 to 10
for ($i = 1; $i <= 10; $i++) {
    echo "The square of $i is " . $i * $i . "<br>";
}

// ===================== 14. break and continue =====================
echo "<h3>14. break and continue</h3>";
// break: stop the loop when $i becomes 10
$i = 1;
while ($i <= 15)
{
    echo "$i, ";
    $i++;
    if ($i == 10)
        break;
}

echo "<br>";

// continue: skip even numbers, print only odd numbers
$i = 0;
do {
    $i++;
    if ($i % 2 == 0)
        continue;
    else
        echo "$i, ";
} while ($i <= 15);

// ===================== 15. Nested loops =====================
echo "<h3>15. Nested loops</h3>";
// Multiplication table using two loops, shown in an HTML table
echo "<table border='1' cellpadding='4'>";
for ($i = 1; $i <= 12; $i++) {        // row loop
    echo "<tr>";
    for ($j = 1; $j <= 12; $j++) {    // column loop
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
</body>
</html>
