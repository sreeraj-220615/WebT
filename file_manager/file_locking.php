<?php

$f = fopen("lock.txt", "w");

if(flock($f, LOCK_EX))
{
    fwrite($f, "File locked and written");
    flock($f, LOCK_UN);
}

fclose($f);
?>
