<!-- PHP $_GET is a PHP super global variable which is used to collect form data,
after submitting an HTML form with method="get". 
$_GET can also collect data sent in the URL. -->

<?php
echo "Name:".$_GET['stu_name'].'<br>';
echo "Age:".$_GET['stu_age'].'<br>';
echo "Weight:".$_GET['stu_weight'].'<br>';
?>

