<?php

$filename = "tekst.txt";

$mode = 'a+';

$handle = fopen($filename, $mode);

$contents = fread($handle, filesize($filename));

echo $contents;