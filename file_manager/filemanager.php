<?php
$folder = "uploads/";
$files = scandir($folder);
?>

<h2>Mini File Manager</h2>

<form action="upload.php" method="post"
      enctype="multipart/form-data">
    <input type="file" name="myfile" required>
    <input type="submit" value="Upload">
</form>

<hr>

<table border="1" cellpadding="10">
<tr>
    <th>File Name</th>
    <th>Size (KB)</th>
    <th>Last Modified</th>
    <th>Actions</th>
</tr>

<?php
foreach($files as $file)
{
    if($file != "." && $file != "..")
    {
        echo "<tr>";
        echo "<td>$file</td>";
        echo "<td>" . round(filesize($folder.$file)/1024,2) . "</td>";
        echo "<td>" . date("d-m-Y H:i:s", filemtime($folder.$file)) . "</td>";
        echo "<td>
        <a href='download.php?file=$file'>Download</a> |
        <a href='delete.php?file=$file'>Delete</a>
        </td>";
        echo "</tr>";
    }
}
?>
</table>
