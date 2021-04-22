<?php
// step 1
// 328/pp2/index.php
/*
 * Jada Senebouttarath
 * 4/15/21
 * http://iamjada1.greenriverdev.com/328/pp2/index.php
 * Pair Program 2
 *
 */
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<h2>Pair Program 2</h2>"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
</head>
<body>
<?php
echo "PHP Array Practice";
echo "<br>" . "<br>";
//echo "Step 2: Define an array";

// step 2
$numbers = array(7, 9, 8, 9, 8, 8 ,6);
function printArray($numbers)
{
    $printArray ='';
    $arrayLength = count($numbers);
    for($i = 0; $i < $arrayLength; $i++){
        $printArray .= "<p>$numbers[$i]</p>";
    }
    return $printArray;
}

echo printArray($numbers);
?>
</body>
</html>



