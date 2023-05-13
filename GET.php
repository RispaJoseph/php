<!-- PHP $_GET is a PHP super global variable which is used to collect form data,
after submitting an HTML form with method="get". 
$_GET can also collect data sent in the URL. -->

<?php
if(isset($_GET["stu_name"]) && isset($_GET["stu_age"]) && isset($_GET["stu_weight"]))
{
    $name=$_GET["stu_name"];
    $age=$_GET["stu_age"];
    $weight=$_GET["stu_weight"];
    if(!empty($name) && !empty($age) && !empty($weight))
    {
        echo "Name:".$_GET['stu_name'].'<br>';
        echo "Age:".$_GET['stu_age'].'<br>';
        echo "Weight:".$_GET['stu_weight'].'<br>';

    }
    else
    {
        echo "Please enter all fields!";
    }
}

?>

