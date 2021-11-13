<?php

session_start();
if(isset($_POST['email'])){
  $email = $_POST['email'];
  $pass = $_POST['pass']; 
  $con = mysqli_connect("localhost","root","","software");

  $sql = "SELECT * FROM `student` WHERE  `id` = '$email' && `password`='$pass'"; 
  $q = mysqli_query($con,$sql); 
  $res = mysqli_fetch_assoc($q);
if(!empty($res)){
echo "ok"; 
  $_SESSION['go']=$res;
  header("LOCATION:config.php");
}else{
  echo "email or password wrong"; 
  //header("LOCATION:login.php");
}
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>login</title>


</head>
<body>
<body>
    
          <form action="in.php" method="post" >
              <input type="text" placeholder="Username" name="email" >
              <input type="password" placeholder="password" name="pass">
          


              <input type="submit" value="Login" >
          </form>

     </section>

     </header>







</section>
</body>
</html>