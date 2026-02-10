<?php

$file = "sample.txt";

/* write */
$f = fopen($file, "w");
fwrite($f, "Hello PHP File Functions");
fclose($f);

/* read */
$f = fopen($file, "r");
echo fread($f, filesize($file));
fclose($f);

/* shortcut methods */
file_put_contents("test.txt", "Using file_put_contents");

echo "<br>";
echo file_get_contents("test.txt");

?>
