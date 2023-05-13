<?php

echo 'Username is '.$_POST["username"].' and Password is '.$_POST["password"].'<br>';

if(($_POST["username"]==="rispa") && ($_POST["password"]==="pass"))
{
    echo "User name and password is correct";
}
else
{
    echo "Check you'r username and password!";
}
?>