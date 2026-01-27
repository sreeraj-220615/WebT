<?php
include "db.php";
$result = mysqli_query($conn, "SELECT * FROM jobs");
?>

<!DOCTYPE html>
<html>
<head><title>Jobs</title></head>
<body>

<h2>Available Jobs</h2>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <h3><?php echo $row['title']; ?></h3>
    <p><?php echo $row['company']; ?> | <?php echo $row['location']; ?></p>
    <p><?php echo $row['description']; ?></p>
    <hr>
<?php } ?>

</body>
</html>
