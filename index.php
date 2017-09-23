<?php

require_once('lib/function.php');
require_once('config.php');

$arrayResult = readArrayInFile(PATH);

$keys = calculateColumnLengths($arrayResult);
$abc = getParam($argv);
array_unshift( $arrayResult, $abc);

renderTable($arrayResult, $keys);
