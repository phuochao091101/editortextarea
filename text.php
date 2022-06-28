<?php
include('./connectDB.php');
$res = mysqli_query($db, "SELECT * FROM `editor`");
while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) { ?>
    <div><?php echo $row['content']; ?></div>
<?php } ?>