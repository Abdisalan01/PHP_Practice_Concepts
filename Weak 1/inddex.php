<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 


<?php


echo "Welocome to php" , "Eng Abdisalan Hassan Omar" ;


//Varibles 
$name = "Abdisalan Hassan Omar";
$age = 25;
echo "Name: $name, Age: $age";


//Data types
$string = "Eng Abdisalan Hassan Omar ";
$integer = 42;
$float = 3.14;
$boolean = true;

//Operators

//Arithmetic Operators
$a = 10;
$b = 5;

echo $a + $b;
echo $a - $b;
echo $a * $b;
echo $a / $b;
echo $a % $b;




//Comparison Operators
$x = 10;
$y = 20;

var_dump($x == $y);  // false
var_dump($x != $y);  // true
var_dump($x > $y);   // false
var_dump($x < $y);   // true

//Conditional Statements

// if iyo else statement
$number = 10;
if ($number > 5) {

    echo "numberkaaga 5 wuu ka wa weyn yahay";

} else {

    echo "numberkaaga 5 wuu ka yar yahay";
}

//if / elseif / else

$Buundo = 75;

if ($Buundo >= 80) {

    echo "A";

} elseif ($Buundo >= 70) {

    echo "B";

} elseif ($Buundo >= 60) {

    echo "C";

} else {

    echo "F";
}





?>





    
</body>
</html>