<?php

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["myfile"]) && $_FILES["myfile"]["error"] == UPLOAD_ERR_OK)
{
    $target_folder = "uploads/";
    
    // Check if uploads directory exists
    if(!is_dir($target_folder))
    {
        mkdir($target_folder, 0755, true);
    }
    
    $file_name = basename($_FILES["myfile"]["name"]);
    $target_file = $target_folder . $file_name;

    if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file))
    {
        echo "File uploaded successfully.";
    }
    else
    {
        echo "File upload failed.";
    }
}
else
{
    echo "No file selected or an error occurred during upload.";
}
?>
