<?php
session_start();
print_r($_SESSION);
echo "</br> another way to print...<br>";
echo "name - ". $_SESSION["name"];
echo "</br> color- ". $_SESSION["color"];
?>