<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
<style>
 
 input{
    margin:10px;
 }

</style>

<?php

include 'configration.php';

$ID = $_GET['$ID'];
$record = mysqli_query($con,"SELECT * FROM `update` WHERE id = $id");
$data = mysqli_fetch_array($record);


?>


<center>
    <div class="main">
    <form action="" method="POST" enctype="mutipart/form-data">
    <label for="">Name:</label>
    <input type="Text" value="<?php echo $data['Name'] ?>" name="Name"><br>
 
    <label for="">Price:</label>
    <input type="text"value="<?php echo $data['Price'] ?>" name="Price" id=""><br>

    <label for="">Image:</label>
    <td><input type="File" name="Image" value="<?php echo $data['image'] ?>">img src="<?php echo $data['image'] ?>" width = '200px' height = '70px'  alt=""</td><br>
    <input type="hidden" name="id" value="<?php $data['id']?>" >
    <button type="submit" name="Upload" class='btn btn-danger m-2'>Update</button>
  </form>
  </div>
  </center>


  <!-- update code -->




</body>
</html>