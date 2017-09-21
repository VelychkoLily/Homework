<?php

function readArrayInFile($filename)
{
    $text = file_get_contents($filename);
    $foodArray = unserialize($text);//восстановление массива
    return $foodArray;
}


function calculateColumnLengths($arrayResult)
{
    $keys = array();
    for ($i = 0; $i < count($arrayResult); $i++) {
        for ($q = 0; $q < count($arrayResult[$i]); $q++) {

            // add indexes if not exists
            if(!array_key_exists($q, $keys)) {
                // add element to array for current key number
                $keys[$q] = 0;
            }

            if ($keys[$q] < strlen($arrayResult[$i][$q])) {
                // сравнить елемент массива кейс и длину строки из основного массива
                $keys[$q] = strlen($arrayResult[$i][$q]);
            }
        }
    }
    return $keys;
}

/**
 *
 * [
 *  [1,2,3],
 *  [3,4,5],
 *
 * ]
 *
 * [3, 4, 5]
 *
 *
 * @param $data
 * @param $keys
 */
function renderTable($arrayResult, $keys) {

    for ($i = 0; $i < count($arrayResult); $i++) {
        for ($q = 0; $q < count($arrayResult[$i]); $q++) {
 echo "--";
            echo "|";
            echo " ";
            echo str_pad($arrayResult[$i][$q], $keys[$q]);

        }
    }



}
