<?php 

$input = $argv[1];
define("geld",[
    10,
    5,
    2,
    1
]);

foreach (geld as $geldvalue ){
    if (floor($input / $geldvalue) > 0) {
        $amount = floor($input / $geldvalue);
        echo $amount . " x " . $geldvalue . " euro" . PHP_EOL;
        $input = $input - ($amount * $geldvalue);  
    }
}

?>
