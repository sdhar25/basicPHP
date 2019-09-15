<!DOCTYPE html>
<html>
<head>
	
<body>
<h1>Reciprocal of a number</h1>
<?php
echo "reciprocal of 2 is: ";
echo reci(2) or die("cannot take reciprocal of 0");
echo reci(0) or die("cannot take reciprocal of 0");
function reci($val)
{
	if($val!=0)
	{
		echo 1/$val;
		echo "</br>";
		//return TRUE;
	}
	else
	{
		return FALSE;
	}
}


?>
</body>
</html>