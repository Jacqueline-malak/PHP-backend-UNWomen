<?php
// task 4 
//Q.1  Write a statement to print a welcom message according to the day 
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time</title>
 </head>
 <body>
 <p>
 <?php
    $d = date("Y-m-d h:i:sa");
echo "WELCOME, TODAY IS YOUR DAY.<br>
  Today time is: " . $d;
  ?>
</h3>
 </body>
 </html>



 <?php   
 //Q2 What will be the output of the code below and why?

$x = 5;
echo "<br>";
echo $x . "<br />";
//"the value of $x, which is 5.";
echo "<br />";

echo $x++ +$x++ . "<br />";
/*"The value of x is used twice in this line.
the post-increment operator ----> (x++) only increments the value after the operation. 
 x++ ----->(5)
 The second x++ will use the incremented value (6)  
  5 + 6 = 11 */
echo "<br />";



echo $x  . "<br />";
/*the post-increment (x++) 
So, the first $x++ will use the original value of $x (5) and then increment it to 6.
The second x++ will use the incremented value (6) and then increment it to 7. 
*/
echo "<br />";


echo $x---$x-- ."<br />";
echo "<br />";
   /* 
    x-- - $x--;
     the post-decrement operator (x--) will decrement the value after the operation
      The first x-- will use the current value of x (7) and then decrement it to 6.
       The second x-- will use the decremented value (6) and then decrement it to 5
     7 - 6 = 1  */

echo $x; 
echo "<br />"; 
//value of x = 0 after the two post-decrements.
?>


<?php
//Q3  3.	What will be the values of $a and $b after the code below is executed? Explain your answer.

echo $a = '1';   //a is assigned the string value '1'.
echo "<br />"; 

echo $b = &$a;   //b is assigned a reference to (a) using the reference operator (&)  b =1 
echo "<br />"; 

echo $b = "2$b";  // by concatenating 2+b  will have the value '21'
echo "<br />"; 
?>

