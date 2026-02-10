<?php

$file = "sample.txt";

if(file_exists($file))
{
    echo "Size: " . filesize($file) . "<br>";
    echo "Type: " . filetype($file) . "<br>";
    echo "Last Access: " . fileatime($file) . "<br>";
    echo "Last Modified: " . filemtime($file) . "<br>";
    echo "Created Time: " . filectime($file) . "<br>";
}
?>
