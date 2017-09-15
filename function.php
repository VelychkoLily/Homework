<?php
$fruits = array ('apple', 'pear', 'nectarine');
$vegetables = array ('carrot', 'cucumber', 'onion');
$meat = array('duck', 'rabbit', 'pork');

$food = array ($fruits, $vegetables, $meat);

function writeArrayInFile($foodArray){
$serArray = serialize($foodArray); // преобразовываем массив в строку
$file = fopen ("array.txt","w+"); // открываем файл, если надо то создаем
fputs($file, $serArray);// записываем в него строку
fclose($file); // закрываем файл
}

function readArrayInFile($fileName)
{
    $file = fopen($fileName, 'r'); // открываем файл
    $str = "";
    // считываем все из файла
    while (($buffer = fgets($file, 128)) !== false) {
        $str .= $buffer;
    }
    $array = unserialize($str); // преобразовываем строку в массив
    return $array;
}