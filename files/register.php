<?php 
$mysql_host = 'localhost'; 
  
// user name is root 
$mysql_user = 'root'; 
  
// function to connect with database having  
// argument host and user name 
$connection = mysqli_connect($mysql_host, $mysql_user,'');
$db = mysqli_select_db($connection,'outgoing_database');

            if(isset($_POST['register']))
            {
                $user_name= $_POST['uname'];
                $password = $_POST['psw'];
                $email = $_POST['email'];

                $q="INSERT INTO `users` (`email`,`username`,`password`,`fav`) VALUES('".$email."','".$user_name."','".$password."','')";

                $r=mysqli_query($connection,$q);

                if($r)
                {
                    header("location:Login.php");
                }else{
                    echo $q;
                }
            }
?>