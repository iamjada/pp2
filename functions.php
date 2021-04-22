<?php
// step 2
function printArray($numbers)
{
$printArray ='';
$arrayLength = count($numbers);
for($i = 0; $i < $arrayLength; $i++){
$printArray .= "<p>$numbers[$i]</p>";
}
return $printArray;
}

