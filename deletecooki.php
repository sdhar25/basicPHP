<?php
$cookie_name="user";
setcookie($cookie_name,"",time()-3600);
echo "deleted";

?>