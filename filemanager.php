<?php
$folder = "uploads/";
$files = scandir($folder);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Advanced File Manager</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">

    <h2>📁 Advanced File Manager</h2>

    <!-- Upload Section -->
    <form id="uploadForm">
        <input type="file" name="file" required>
        <button type="submit">Upload</button>
    </form>

    <div id="progressBar">
        <div id="progress"></div>
    </div>

    <input type="text" id="search" placeholder="Search files...">

    <table id="fileTable">
        <tr>
            <th>File</th>
            <th>Size</th>
            <th>Modified</th>
            <th>Action</th>
        </tr>

<?php
foreach($files as $file){
    if($file != "." && $file != ".."){
        echo "<tr>";
        echo "<td>$file</td>";
        echo "<td>".filesize($folder.$file)." bytes</td>";
        echo "<td>".date("d-m-Y H:i", filemtime($folder.$file))."</td>";
        echo "<td>
                <a href='download.php?file=$file'>Download</a> |
                <a href='delete.php?file=$file'>Delete</a>
              </td>";
        echo "</tr>";
    }
}
?>

    </table>
</div>

<script src="js/script.js"></script>
</body>
</html>

