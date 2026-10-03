<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week 3: Arrays and Functions in PHP</title>
</head>
<body>
    <h1>Week 3: Arrays and Functions in PHP</h1>
<?php
// ===================== 1. Creating indexed arrays =====================
echo "<h3>1. Creating indexed arrays</h3>";
// Way 1: index is given automatically (starts at 0)
$fruits = array("Apple", "Orange", "Banana");
echo $fruits[0] . "<br>";   // Apple

// Way 2: index is given manually
$fruits = array();
$fruits[0] = "Apple";
$fruits[1] = "Orange";
$fruits[2] = "Banana";
echo $fruits[1] . "<br>";   // Orange

// Way 3: add items without writing the index
$colors[] = "Red";
$colors[] = "Green";
$colors[] = "Blue";

// <pre> + print_r() show the array in a clean, readable way
echo "<pre>";
print_r($colors);
echo "</pre>";

// ===================== 2. for loop with an array =====================
echo "<h3>2. for loop with an array</h3>";
// this is an array that contains information about a person
$info = array(
    "101",
    "Mohamed Abdi Ali",
    20,
    "Hodan District",
    "single"
);

// To loop through and print all the values of an indexed array, use a for loop
echo "Array values using for loop: <br>";
for ($i = 0; $i < count($info); $i++) {
    echo $info[$i] . "<br>";
}

// ===================== 3. foreach loop =====================
echo "<h3>3. foreach loop</h3>";
// foreach visits every element, one by one
$numbers = array(26, 11, 13);
echo "Array elements are: <br>";
foreach ($numbers as $n)
    echo ("$n, ");

// Adding array elements
$numbers = array(10, 10, 15);
$total = 0;
foreach ($numbers as $n)
    $total += $n;
echo ("<br>Total of all elements is: $total");

// ===================== 4. Associative arrays =====================
echo "<h3>4. Associative arrays</h3>";
// example of associative array to store information about a person
// key => value
$info = array(
    "id"      => "101",
    "name"    => "Mohamed Abdi Ali",
    "age"     => 20,
    "address" => "Hodan District",
    "status"  => "single",
    "weight"  => 160.5
);

// Read one value by its key
echo "Name: " . $info["name"] . "<br><br>";

// Print only the values
echo "Associative array elements are:<br>";
foreach ($info as $a)
    echo ("$a<br>");

// Print the key and the value
echo ("<br>Printing array key/value pairs:<br>");
foreach ($info as $k => $v)
    echo ("[$k]: $v<br>");

// print_r and var_dump show the full structure
echo "<pre>";
print_r($info);
var_dump($info);
echo "</pre>";

// ===================== 5. Multidimensional arrays =====================
echo "<h3>5. Multidimensional arrays</h3>";
// Two-dimensional array = an array of arrays (like a table)
$student = array(
    array("Mohamed", 1990, "Hodan",     "0608124390"),
    array("Ahmed",   2001, "Yaaqshiid", "0608124391"),
    array("Jaamac",  1986, "Shangaani", "0608124392"),
);

// Way 1: one loop, use the index of each column
echo ("Printing each student in one line:<br>");
foreach ($student as $k)
    echo ("$k[0], $k[1], $k[2], $k[3]<br>");

// Way 2: two loops (a loop inside a loop)
echo "<br>Array elements are:<br>";
foreach ($student as $s) {
    foreach ($s as $v)
        echo ("$v<br>");
}

// Access one element: row 1, column 0
echo "<br>Second student name: " . $student[1][0];

// ===================== 6. is_array, in_array, count =====================
echo "<h3>6. is_array, in_array, count</h3>";
$info = array(
    "Mohamed",
    "Ahmed",
    "Jaamac",
    21
);

// is_array: is this variable an array?
if (is_array($info))
    echo "Yes, it is an array<br>";
else
    echo "No, it is not an array<br>";

// in_array: does this value exist in the array?
if (in_array("Ahmed", $info))
    echo "Ahmed exists in the array<br>";
else
    echo "Ahmed does not exist in the array<br>";

// count / sizeof: number of elements
echo "Number of elements: " . count($info) . "<br>";
echo "Number of elements (sizeof): " . sizeof($info) . "<br>";

// ===================== 7. max, min and sorting =====================
echo "<h3>7. max, min and sorting</h3>";
$numbers = array(9, 2, 7, 5, 1);

// max and min
echo "Highest value: " . max($numbers) . "<br>";
echo "Lowest value: " . min($numbers) . "<br>";

// sort: ascending (small to big)
sort($numbers);
echo "sort: " . implode(", ", $numbers) . "<br>";

// rsort: descending (big to small)
rsort($numbers);
echo "rsort: " . implode(", ", $numbers) . "<br>";

// asort / arsort: sort an associative array by value
$marks = array("Ali" => 70, "Hodan" => 95, "Omar" => 82);
asort($marks);
echo "<pre>asort:\n";
print_r($marks);
arsort($marks);
echo "arsort:\n";
print_r($marks);
echo "</pre>";

// ===================== 8. explode, implode, shuffle, merge, reverse =====================
echo "<h3>8. explode, implode, shuffle, merge, reverse</h3>";
// explode: turn a string into an array (split by space)
$a = "The quick brown fox jumps over the lazy dog";
$b = explode(" ", $a);

// implode: turn an array back into a string
echo "implode: " . implode(" - ", $b) . "<br>";

// shuffle: put elements in random order
shuffle($b);
echo "<pre>shuffle:\n";
print_r($b);
echo "</pre>";

// array_merge: join two arrays into one
$a1 = array(1, 2, 3);
$a2 = array(1, 5, 6);
$a3 = array_merge($a1, $a2);
echo "array_merge: " . implode(", ", $a3) . "<br>";

// array_reverse: reverse the order
$p = array_reverse($a3);
echo "array_reverse: " . implode(", ", $p) . "<br>";

// ===================== 9. array_push, array_pop, end =====================
echo "<h3>9. array_push, array_pop, end</h3>";
// array_push: add to the end, returns the new number of elements
$a = array(2, 4, 6, 8);
echo "array_push returns: " . array_push($a, 10) . "<br>";   // 5
echo "Array now: " . implode(", ", $a) . "<br><br>";

// array_pop: remove the last element and return it
$a = array(1, 2, 3, 4);
echo "array_pop returns: " . array_pop($a) . "<br>";         // 4
echo "Array now: " . implode(", ", $a) . "<br><br>";

// end: get the last element
$p = array(6, 5, 3, 2, 1);
$last = end($p);
echo "The last element of the array is: " . $last;

// ===================== 10. Define and call a function =====================
echo "<h3>10. Define and call a function</h3>";
// Define a function (it does not run yet)
function writeMsg() {
    echo "Hello world!<br>";
}

// Call the function (now it runs). You can call it many times.
writeMsg();
writeMsg();

// A function with a parameter: $a is the parameter
function factorial($a) {
    $result = 1;
    for ($i = 1; $i <= $a; $i++)
        $result *= $i;
    echo "<br>Factorial of $a is : $result";
}

// 5 is the argument
factorial(5);

// ===================== 11. Return a value =====================
echo "<h3>11. Return a value</h3>";
// return sends a value back to the code that called the function
function factorialReturn($a) {
    $result = 1;
    for ($i = 1; $i <= $a; $i++)
        $result *= $i;
    return ("Factorial of $a is : $result");
}

// Use the returned value directly
echo (factorialReturn(5));

// Or save it in a variable first
$text = factorialReturn(4);
echo "<br>" . $text;

// ===================== 12. Return an array =====================
echo "<h3>12. Return an array</h3>";
$array1 = array(9, 2, 7, 5, 1, 6, 3, 8, 4);

function passingArray($arr) {
    echo ("Passed array elements are: ");
    for ($i = 0; $i < count($arr); $i++) {
        echo ($arr[$i] . ", ");
        $arr[$i]++;        // add 1 to each element
    }
    return $arr;           // send the new array back
}

$b = passingArray($array1);

echo ("<br>Returned array elements are: ");
foreach ($b as $v)
    echo ("$v, ");

// ===================== 13. By value vs by reference =====================
echo "<h3>13. By value vs by reference</h3>";
// BY VALUE (default): the function gets a COPY
$n = 5;
function addOne($x) {
    $x++;
}
addOne($n);
echo "By value: n is still $n<br><br>";

// BY REFERENCE (&): the function changes the ORIGINAL variable
$a = 5;
function factorialByRef(&$x) {
    echo ("Factorial of $x = ");
    $result = 1;
    for ($i = 2; $i <= $x; $i++)
        $result = $result * $i;
    $x++;
    echo ($result);
}

factorialByRef($a);
echo ("<br>Value of a = $a");

// ===================== 14. Default argument =====================
echo "<h3>14. Default argument</h3>";
// If no argument is given, $a will be 5
function factorialDefault($a = 5) {
    $result = 1;
    for ($i = 1; $i <= $a; $i++)
        $result *= $i;
    echo "Factorial of $a is : $result<br>";
}

factorialDefault();    // uses the default value 5
factorialDefault(3);   // uses 3

// ===================== 15. Local and global variables =====================
echo "<h3>15. Local and global variables</h3>";
$a = 5; // global variable

function factorialScope($x) {
    $a = 10; // local variable
    echo ("Factorial of $x = ");
    $result = 1;
    for ($i = 2; $i <= $x; $i++)
        $result = $result * $i;
    echo ($result);

    // To print local variable:
    echo ("<br>Value of local a = $a");
    // To print global variable:
    echo ("<br>Value of global a = " . $GLOBALS["a"]);
}

factorialScope($a); // $a = 5

// Using the global keyword
$city = "Mogadishu";
function showCity() {
    global $city;
    echo "<br><br>City (global keyword): $city";
}
showCity();

// ===================== 16. Including files =====================
echo "<h3>16. Including files</h3>";
// Bring in library.php only once
require_once "library.php";

echo greet("Abdi") . "<br>";
echo "Square of 6 is " . square(6) . "<br>";

// Check if a function exists before using it
if (function_exists("square"))
    echo "The function square exists<br>";

if (!function_exists("cube"))
    echo "The function cube does not exist";

?>
</body>
</html>
