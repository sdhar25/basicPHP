<?php
// Your code here!
$cookie_name="user";
$cookie_value="Abc";
setcookie($cookie_name,$cookie_value,time()+86400,"/");
if(!isset($_COOKIE[$cookie_name]))
{
    echo "NOT SET";
    
}
else
{
    echo "cookie name is- " . $cookie_name ;
    echo "cookie Value is: " . $_COOKIE[$cookie_name];
    
}
?>
