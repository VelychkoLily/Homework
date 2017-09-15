<?php
$filename = 'array.txt';
require_once('function.php');
writeArrayInFile($food);
$arrayResult = readArrayInFile('function.php');


for ($i = 0; $i < count($arrayResult); $i++) {


    for ($q = 0; $q < count($arrayResult[$i]); $q++) {
        echo " | " . $arrayResult[$i][$q];
    }
    echo "\n";

}