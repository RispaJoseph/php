<!-- <?php
$num1=10;
$num2=20;
if($num1==$num2)
{
    echo "The two numbers are equal";
}
echo "Not equal numbers";
?> -->

<?php
$num1=10;
$num2=20;
if($num1==$num2)
{
    echo "The two numbers are equal";
}
elseif($num1>$num2)
{
    echo "Number 1 is greater than Number 2";
}
elseif($num1<$num2)
{
    echo "Number 1 is smaller than Number 2";
}
else
{
    echo "Not equal numbers";
}
?>