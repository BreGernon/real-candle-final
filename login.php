<?php 
$login=0;
$invalid=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql = "SELECT * FROM users WHERE username= '$username' and password = '$password'";

    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            $login=1;
            session_start();
            $_SESSION['username']=$username;
            header('location:https://candle-app-test-f4f867e61c16.herokuapp.com/mainPage.php');
        }else{
            $invalid=1;
        }
        
        
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>Login Page</title>
    <?php 
    if($login){
       echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong> You are logged in.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden ="true">&times;</span>
            </button>
            </div>';
    }
    
    ?>
     <?php 
    if($invalid){
       echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Error!</strong> Invalid Credentials!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden ="true">&times;</span>
            </button>
            </div>';
    }
    
    ?>
  </head>
  <body style="background-color:aquamarine;">
  <h1 class="text-center">Login Page</h1>
   <div class="container mt-5">
 	<form action="login.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your username" name="username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password" name="password">
  </div>
  <button type="submit" class="btn btn-primary w-100">Login</button>
</form>  
   </div>
    
    
  </body>
</html>