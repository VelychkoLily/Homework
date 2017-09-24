<?php

/**
 * @param $filename
 *
 * @return mixed
 */
function readArrayInFile($filename)
{
    $text = file_get_contents($filename);
    $foodArray = unserialize($text);//восстановление массива
    return $foodArray;
}

/**
 * @param $arrayResult
 *
 * @return array
 */
function calculateColumnLengths($arrayResult)
{
    $keys = array();
    for ($i = 0; $i < count($arrayResult); $i++) {
        for ($q = 0; $q < count($arrayResult[$i]); $q++) {

            // add indexes if not exists
            if (!array_key_exists($q, $keys)) {
                // add element to array for current key number
                $keys[$q] = 0;


                if ($keys[$q] < strlen($arrayResult[$i][$q])) {
                    // сравнить елемент массива кейс и длину строки из основного массива
                    $keys[$q] = strlen($arrayResult[$i][$q]);

                }
            }
        }
        return $keys;
    }
}

/**
 * @param $keys
 *
 * @return int
 */
function calculateMinusLength($keys)
{
    $sumElement = 0;
    for ($i = 0; $i < count($keys); $i++) {
        $sumElement = $sumElement + $keys[$i] + 2;

    }
    return $sumElement + 1;
}

/**
 * @param $arrayResult
 *
 * @param $keys
 */
function renderTable($arrayResult, $keys)
{
    for ($i = 0; $i < count($arrayResult); $i++) {
        echo str_repeat("-", calculateMinusLength($keys));
        echo "\n";
        echo $i + 1;
        for ($q = 0; $q < count($arrayResult[$i]); $q++) {
            echo "|";
            echo " ";
            echo str_pad($arrayResult[$i][$q], $keys[$q]);
        }

        echo '|';
        echo "\n";
    }
}

/**
 * @param $argv
 *
 * @return array
 */
function getParam($argv)
{
    $argvArray = array();
    for ($i = 1; $i < count($argv); $i++) {
        array_push($argvArray, $argv[$i]);
    }
    return $argvArray;
}
