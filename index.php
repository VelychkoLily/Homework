<?php

$fruits = array ('apple', 'pear', 'nectarine');
$vegetables = array ('carrot', 'cucumber', 'onion');
$meat = array('duck', 'rabbit', 'pork');

$food = array ($fruits, $vegetables, $meat);

// обход двумерного массива
for($i = 0; $i < count($food); $i++)
{
    for($q = 0; $q < count($food[$i]); $q++)
    {
        echo ' | ' . $food[$i][$q];
        echo '---------------------------';
    }
    echo "\n";
}

