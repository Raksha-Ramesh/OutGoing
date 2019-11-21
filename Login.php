<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
font-family: Arial, Helvetica, sans-serif;
background-image: url(login-bg.jpg);
}
form {
border: 3px;
position: center; 
width: 90%; /* Full width */
height: 90%; /* Full height */
padding-left: 15px;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;   
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  position: center; /* Stay in place */
  z-index: 3; /* Sit on top */
  margin-left: 33%;
  margin-top: 10%;
  width: 30%; /* Full width */
  height: 70%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(125, 190, 165,0.8); /* Fallback color */
  padding: 30px;
  padding-top: 20px;
  padding-bottom: 40px;
  border-radius: 5px;
  box-shadow: black;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
h2 {
   width: 100%; 
   text-align: center; 
   border-bottom: 1px solid rgb(81, 197, 158); 
   line-height: 0.1em;
   margin: 10px 0 20px; 
   color: rgb(81, 197, 158);
} 

h2 span { 
    background: black; 
    padding:0 10px; 
}
h3{
    text-align: left;
}
#sign-up{
    margin-left: 30%;
}
a:hover{
    color: red;
}
a{
  text-decoration: none;
}
</style>
</head>
<body>
</br>
<a href="HomePage.html"><h2><span>OutGoing</span></h2></a>
<div class="container">
<h3>Login</h3>
<form method="post">
    <div class="icontainer">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
          
      <input type="submit" name="login" value='login'>
      </div>
    <div class="icontainer">
      <button type="button" class="cancelbtn" onclick="window.location='HomePage.html';">Cancel</button>
      <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
    <p id="sign-up">New user? <a href="CreateAnAccount.html">Sign Up</a></p>
  </form>
</div>
</body>
</html>
<?php 
// this php script is for connecting with database 
// data have to fetched from local server 
$mysql_host = 'localhost'; 
  
// user name is root 
$mysql_user = 'root'; 
  
// function to connect with database having  
// argument host and user name 
$connection = mysqli_connect($mysql_host, $mysql_user,'');
$db = mysqli_select_db($connection,'outgoing_database');

//session_start();
if(isset($_POST["login"]))
{
  $user = $_POST["uname"];
  $pass = $_POST["psw"];

  $query = "SELECT * FROM users WHERE username='$user' and password='$pass'";

  $result=mysqli_query($connection,$query);

  if($result)
  {
    if(mysqli_num_rows($result)>0){
      //$_SESSION['user']=$user;
        $cookie_name = "username";
        $cookie_value = $user;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        setcookie($cookie_name, $cookie_value, time()+(60*60*2),$path,$domain);
        header("location:HomePageAfterLogin.php");}
    else{
      echo "login failed";
    }
  }
  else{
    echo $query;
  }
  
}

?>

