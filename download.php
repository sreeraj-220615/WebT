<?php
$file = "uploads/" . $_GET['file'];

if(file_exists($file)){
    header("Content-Disposition: attachment; filename=".basename($file));
    readfile($file);
}else{
    die("File not found");
}
?>

