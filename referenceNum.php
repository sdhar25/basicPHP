<?php

$value = 4;
$ref_val =& $value;
echo $ref_val;
echo "<br> <hr>";

echo "curent value - ". $value;
$ref= &referencing($value);
$ref++;
echo "</br> new value is- ".$value;
function &referencing(& $val)
{
  return $val;
}


?>