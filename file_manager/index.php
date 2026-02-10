<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>

<h2>Upload File</h2>

<form action="upload.php" method="post"
      enctype="multipart/form-data">

    Select File:
    <input type="file" name="myfile" required>
    <br><br>

    <input type="submit" value="Upload File">
</form>

</body>
</html>
