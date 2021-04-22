<?php
// step 2
function printArray($numbers)
{
    $printArray ='';
    $arrayLength = count($numbers);
    for($i = 0; $i < $arrayLength; $i++)
    {
        $printArray .= "<p>$numbers[$i]</p>";
    }
    return $printArray;
}

// step 4
function largest($numbers)
{
    $arrayLength = count($numbers);
    $max = $numbers[0];
    for($i = 1; $i < $arrayLength; $i++)
    {
        if($max < $numbers[$i])
        {
            $max = $numbers[$i];
        }
    }
    return $max;
}

// step 5
function removeDups($numbers)
{
    $sorted = array_values(array_unique($numbers, SORT_NUMERIC));
    $arrayLength = count($sorted);
    $printArray ='Array after removing duplicates ';
    for($i = 0; $i < $arrayLength; $i++)
    {
        $printArray .= $sorted[$i] . " ";
    }
    return $printArray;
}


