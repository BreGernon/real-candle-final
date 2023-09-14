<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Candle Database</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body style="background-color:aquamarine;">
<div class="container">
<h1 class="text-center my-5">Candle Database</h1>
<button class="btn btn-primary my-5 text-center"><a href="insertCandle.php" class="text-light">Add Candle</a></button>
<table class="table table-bordered" style="background-color:white">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Candle Name</th>
      <th scope="col">Scent</th>
      <th scope="col">Quantity</th>
      <th scope="col">Edit or Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php 
 
  $sql= "SELECT * FROM candle_database";
  $result=mysqli_query($con, $sql);
  if ($result){
      while ($row = $result->fetch_assoc()) {
          $id = $row["id"];
          $candlename = $row["candlename"];
          $scent = $row["scent"];
          $quantity = $row["quantity"];
          echo ' <tr>
                 <th scope="row">' .$id. '</th>
                 <td>'.$candlename.'</td>
                 <td>'.$scent.'</td>
                 <td>'.$quantity.'</td>
                 <td>
  <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
   <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
  
  </td>
                 </tr>';
  }
  }
  ?>
  </tbody>
</table>
</div>
</body>
</html>