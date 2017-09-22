<?php

require_once('lib/function.php');
require_once('config.php');

$arrayResult = readArrayInFile(PATH);

$keys = calculateColumnLengths($arrayResult);
renderTable($arrayResult, $keys);


