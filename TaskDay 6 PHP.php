<?phP
/*1. Create a script using a for loop to add(sum) all the integers 
between 0 and 30 and display the total result.
2. Write a PHP function to calculate area of rectangle .*/

$sum = 0;
for($x=1; $x<=30; $x++) {
    $sum += $x;
}
echo "Sum of numbers (0 to 30) is $sum";

?>
<?php
function calculateRectangleArea($length, $width) {
    $area = $length * $width;
    return $area;
}
// Example
$length = 2;
$width = 4;
$area = calculateRectangleArea($length, $width);
echo "The area of the rectangle (length $length / width $width ) is $area";
?>

