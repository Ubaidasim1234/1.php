<?php

include 'configration.php';

if(isset($_POST['upload'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    print_r($_FILES['image']);
     
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "imgupload/" .$img_name;
    move_uploaded_file($img_loc,'imgupload/' .$img_name);


    mysqli_connect($con,"UPDATE `update` SET `name`='$name',`price`='$price',`image`='$img_des' WHERE id = $id");
    header("location:index.php");
}



?>