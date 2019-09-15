<?php
$numb=4;

list($val1,$val2,$val3,$val4)=create_array($numb);
echo "values are- ". $val1 . ", " . $val2 . ", " . $val3 . ", " . $val4;
function create_array($numb)
{
	for($i=0;$i<$numb;$i++)
	{
		$arr[]=$i;
	}
	return $arr;
}


?>