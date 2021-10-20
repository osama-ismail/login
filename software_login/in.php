echo "email or password wrong"; 

<?php
echo "email or password wrong"; 

session_start();

if(isset($_POST['username1'])){

    $username1 = $_POST['username1']; 
    $password1 = $_POST['password1']; 
    
    $con1 = mysqli_connect("localhost","root","","software");
    
    $sql = "SELECT `id`, `password` FROM `student` WHERE  `id` = '$username1' && `password`='$password1'";    
    $q = mysqli_query($con1,$sql1); 

    $res1 = mysqli_fetch_assoc($q);

    if(!empty($res1)){
        //  $_SESSION['go']=$res1;
          header("LOCATION:config.php");
        }else{
          echo "email or password wrong"; 
        }
          }
        
?>