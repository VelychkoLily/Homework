<?php

require_once('function.php');
require_once('config.php');

$arrayResult = readArrayInFile(PATH);

printText( $arrayResult);