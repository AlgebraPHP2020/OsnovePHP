<?php

$filename = 'ucenici.txt';

$handle = fopen($filename, 'a');
fwrite($handle, '6. Zvonko Zvonimir');
fclose($handle);

