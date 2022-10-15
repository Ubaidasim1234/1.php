<?php

include 'configration.php';

echo $id = $_GET['id'];

mysqli_query($con, "DELETE FROM `update` where $id");

header('location:index.php');


?>
