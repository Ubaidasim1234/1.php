<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

   <center>
    <div class="main">
    <form action="insert.php" method="POST" enctype="mutipart/form-data">
    <label for="">Name:</label>
    <input type="Text" name="Name"><br>
 
    <label for="">Price:</label>
    <input type="text" name="Price" id=""><br>

    <label for="">Image:</label>
    <input type="File" name="Image" id=""><br>
    <button  type="submit" name="Upload">Upload</button>
  </form>
  </div>
  </center><br>

  <!-- fetch_data -->

  <div class="container">

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>


   <?php
   
   include 'configration.php';

   $pic = mysqli_query($con,"SELECT * FROM `update`");
   while($row = mysqli_fetch_array($pic)){
    echo "
    <tr>

    <td>$row[id]</td>
    <td>$row[name]</td>
    <td>$row[price]</td>
    <td><img scr='$row[image]' width = 200px height = 70px></td>
    <td><a herf= 'delete.php? id = $row[id]' class ='btn btn-danger'>Delete</a></td>
    <td><a herf= 'update.php? id = $row[id]' class ='btn btn-danger'>Update</a></td>

    </tr>";
   }
   
   
   ?>

  </tbody>
</table>
</div>

</body>
</html>