<?php

function readArrayInFile($filename)
{
    $text = file_get_contents($filename);
    $foodArray = unserialize($text);//восстановление
    return $foodArray;
}

function printText($arrayResult)
{

    for ($i = 0; $i < count($arrayResult); $i++) {
        for ($q = 0; $q < count($arrayResult[$i]); $q++) {
            echo " | " . $arrayResult[$i][$q];
        }
        echo "\n";
    }

}


