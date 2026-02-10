<?php
$file = "uploads/" . $_GET['file'];

if(file_exists($file)){
    unlink($file);
    header("Location: advanced_file_manager.php");
}else{
    die("File not found");
}
?>
