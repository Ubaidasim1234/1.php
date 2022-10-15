

<?php

// include databae connection
include 'configration.php';

if(isset($_POST['upload'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    print_r($_FILES['image']);
     
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "imgupload/" .$img_name;
    move_uploaded_file($img_loc,'imgupload/' .$img_name);
}

// insert data

INSERT INTO `update`(`id`, `name`, `price`, `image`, `password`) VALUES ('Name','price','img_des','123');

// mysqli_connect ($conn, "INSERT INTO `update`(`name`,`price`,`img_des`) VALUES ('Name','Price','img_des')");

?>