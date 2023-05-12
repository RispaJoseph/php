<?php
/*
Students  Age  weight
Mark      15    49
Rose      17    56
Zyan      14    42
*/

/* Multidimensional Array

A multidimensional array is an array containing one or more arrays.
Multidimensional arrays are used to store the data in a tabular form.

*/

$students=array(array('Mark',15,49),array('Rose',17,56),array('Zyan',14,42));

print_r($students);
echo "<br><br>";


echo $students[0][0].'  '.$students[0][1].'  '.$students[0][2].'<br>';
echo $students[1][0].'  '.$students[1][1].'  '.$students[1][2].'<br>';
echo $students[2][0].'  '.$students[2][1].'  '.$students[2][2];
?>