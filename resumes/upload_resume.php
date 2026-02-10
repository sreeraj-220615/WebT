<?php
$targetDir = "resumes/";
$fileName = basename($_FILES["resume"]["name"]);
$fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

if ($fileType != "pdf") {
    echo "Only PDF files allowed";
    exit();
}

if (move_uploaded_file($_FILES["resume"]["tmp_name"], $targetDir . $fileName)) {
    echo "Resume uploaded successfully!";
} else {
    echo "Upload failed";
}
?>
