<?php

$files = scandir("uploads");

foreach($files as $f)
{
    echo $f . "<br>";
}

echo "Current Directory: " . getcwd();

?>
