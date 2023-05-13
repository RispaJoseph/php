<?php
function add($num1,$num2)
{
    $result=$num1+$num2;
    return $result;
}

$add1=add(1,4);
$add2=add(5,5);
echo "Num1 = $add1<br>";
echo "Num2 = $add2<br>";
$product=$add1*$add2;
echo "Product is $product";
?>