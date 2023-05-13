<?php
$name="Rispa";
echo $name.'<br>';

function showName()
{ 
    global $name; //to get the global variable inside a function, use global keyword.
    echo "The name is $name";
}

showName();

?>