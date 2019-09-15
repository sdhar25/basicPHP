<?php
echo "PAssing 'How' 'are' 'you?'<br/>";
connector("HOw","are","you?");

function connector()
{
	$data="";
    $arguments=func_get_args();
    for($i=0;$i<func_num_args();$i++)
    {
    	$data.=" ". $arguments[$i] . " ";
    }
    echo $data;
}


?>