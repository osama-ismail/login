
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
  $_SESSION['id']=$res;   echo "email or password wrong"; 
  header("LOCATION:config.php");
}else{
  echo "email or password wrong"; 
  //header("LOCATION:login.php");
}
  }
  // *************************************************

if(isset($_POST['username'])){

$username = $_POST['username']; 
$email = $_POST['email'];
$password = $_POST['password']; 

$con = mysqli_connect("localhost","root","","software");

$sql="INSERT INTO `student`(`id`, `first_name`, `last_name`, `password`) VALUES ('$username','$email','$password','$password')";
mysqli_query($con,$sql); 

$res = mysqli_affected_rows($con); 

if ( $res== 1){
echo "ok "; 
header("LOCATION:config.php");

}else{
    echo "error"; 
}
}
// *************************************************
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="login-wrap">
        <link href="scratch.css"rel="stylesheet"type="text/css">
            <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form"> 
            <div class="sign-in-htm">
                      
                                  <form action="in.php" method="post" >
                                  <div class="group">
                                   <label for="user"  class="label">Username</label>
              <input type="text" id="user"  class="input" placeholder="Username" name="email" >
              </div>
              <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input type="password"  id="pass" class="input" data-type="password" placeholder="password" name="pass">

                    </div>
          

                    <div class="group">
                    <button type="submit"  class="button">Login</button>
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                    </div> 
          </form>
          </div> 
                <form action="index.php"  method="post"> 
                <div class="sign-up-htm">
                    <div class="group">
                        <label  class="label">Username</label>
                        <input id="osama" name="username"  type="text" class="input">
                    </div>
                    <div class="group">
                        <label  class="label">Password</label>
                        <input  type="password"  name="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Repeat Password</label>
                        <input id="pass" type="password"  name="cpassword" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Email Address</label>
                        <input id="pass" type="text"  name="email" class="input">
                    </div>
                    <div class="group"> 
                       <button type="submit"  class="button">Register</button>
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1">Already Member?</a>
                    </div>
                </div> 
                </form>

            </div>
        </div>
    </div>  

</body>
</html>