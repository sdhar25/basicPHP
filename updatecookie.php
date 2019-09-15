<?php
$cookie_name="user";
$cookie_value="vfggttr";
setcookie($cookie_name,$cookie_value,time()+86400,"/");
if(isset($_COOKIE[$cookie_name]))
{
	echo "cookie name- ".$cookie_name;
	echo "</br> cookie value- ".$_COOKIE[$cookie_name];
}
else
{
	echo "not set";
}

?>