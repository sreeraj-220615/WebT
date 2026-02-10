<?php

/* r - read */
$f = fopen("sample.txt", "r");

/* w - write (erase old data) */
$f = fopen("sample.txt", "w");

/* a - append */
$f = fopen("sample.txt", "a");

/* x - create new file */
$f = fopen("newfile.txt", "x");

/* r+ - read and write */
$f = fopen("sample.txt", "r+");

/* w+ - read & write (erase old data) */
$f = fopen("sample.txt", "w+");

/* a+ - read & append */
$f = fopen("sample.txt", "a+");

/* x+ - create new file read & write */
$f = fopen("newfile2.txt", "x+");

fclose($f);

?>
