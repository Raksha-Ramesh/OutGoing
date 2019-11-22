<?php
  require_once("./connection.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
font-family: Arial, Helvetica, sans-serif;
background-image: url('lo.jpg');
background-size: cover;
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
.cancelbtn{
  background-color: black;
  opacity: 0.8;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%
}

button {
  background-color: black;
  opacity: 0.8;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%
}
.cancelbtn:hover{
  opacity: 0.8;
}

button:hover {
  opacity: 0.8;
}

/*.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}*/

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  position: center; /* Stay in place */
  z-index: 3; /* Sit on top */
  margin-left: 33%;
  margin-top: 2%;
  width: 30%; /* Full width */
  height: 70%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color:white; /* Fallback color */
  opacity: 0.9;
  padding: 30px;
  padding-top: 40px;
  padding-bottom: 40px;
  border-radius: 20px;
  box-shadow: black;
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
/*h2 {
   width: 100%; 
   text-align: center; 
   border-bottom: 1px solid rgb(81, 197, 158); 
   line-height: 0.1em;
   margin: 10px 0 20px; 
   color: rgb(81, 197, 158);
}*/

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
<div>
  <a href="index.html" style="background-color: transparent; color: white"><h1>OutGoing</h1></a>
  <hr>
</div>
<div style="color: white; text-align: center; margin-top: 5%; margin-bottom: 1%;">
<h1> Login </h1>
</div>
<div class="container">

<form method="post">
    <div class="icontainer">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required style="border-radius: 20px;">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required style="border-radius: 20px;"> 
      
      <input type="submit" class="cancelbtn" name="login" value='Login'>
    </div>
    <div class="icontainer">
        <button type="button" class="cancelbtn" onclick="window.location='index.html';">Cancel</button>
          <br>
          <p id="sign-up">New user? <a href="CreateAnAccount.html">Sign Up</a></p>
</form>
</div>
</body>
<script src="scripts.js" type = text/js></script>
</html>
<?php 

if(isset($_POST["login"]))
{
  $user = $_POST["uname"];
  $pass = $_POST["psw"];

  $query = "SELECT * FROM users WHERE username='$user' and password='$pass'";

  $result=mysqli_query($connection,$query);

  if($result)
  {
    if(mysqli_num_rows($result)>0){
        $cookie_name = "username";
        $cookie_value = $user;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        setcookie($cookie_name, $cookie_value, time()+(60*60*2),$path,$domain);
        header("location:HomePageAfterLogin.php");}
    else{
      echo "Login failed, Check your username/password";
    }
  }
  else{
    echo $query;
  }
  
}

?>


