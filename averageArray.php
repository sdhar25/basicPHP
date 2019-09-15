<?php
$scores= array(50,30,20,60,70);
find_average($scores);
function find_average($scores)
{
	$total=0;
	foreach ($scores as $value) {
		$total+=$value;
	}
	echo "Total is- ".$total;
	if(count($scores)>0)
	{
		echo " Average is- ". $total/count($scores);
	}
	else
	{
		echo "NO data";
	}
}


?>