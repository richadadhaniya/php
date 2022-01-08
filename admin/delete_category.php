<?php

  require_once('header.php');
?>
<?php

include '../config.php';

// $ids = $_GET['id'];

// $deletequery = " delete from registration_data where ID=$ids";

// $query = mysqli_query($con, $deletequery);

$delete = "DELETE FROM category WHERE ID='" . $_GET["id"] . "'";
if (!mysqli_query($connection, $delete)) {
	echo "<script>alert('Record  not delete')</script>";
} else {
	echo "<script>alert('Are you sure you want to delete this record?');location.href='category.php';</script>";
}
?>
