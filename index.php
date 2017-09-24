<?php

require_once('lib/function.php');
require_once('config.php');

$arrayResult = readArrayInFile(PATH);

$keys = calculateColumnLengths($arrayResult);
$incomingParam  = getParam($argv);
array_unshift( $arrayResult, $incomingParam);

renderTable($arrayResult, $keys);
