<?php

$file = "uploads/" . $_GET['file'];

if(file_exists($file))
{
    unlink($file);
}

header("Location: file_manager.php");
?>
