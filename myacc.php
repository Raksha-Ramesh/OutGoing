<?php
  require_once("./connection.php");
  if(isset($_COOKIE["username"]))
  {
      $u=$_COOKIE["username"];

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Outgoing - My Account</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">

  <style>
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
  </style>

</head>

<body>

          
  <!-- Masthead -->
  <header class="masthead text-white text-center" style="background-image: url('contact_us.jpg');">
        <div class="overlay"></div>
        
          <div class="row">
            <div class="col-xl-9 mx-auto">
              <h1 class="mb-3" style="font: arial;"> My Account </h1></h1>
              <div style="padding-left: 15%;">
              <div style="background-color: white;opacity: 0.9; border-radius: 20px; width: 800px;">
              <br>
              <br>
              <h5 class="mb-3" style="font: arial; color: black;">Username: <?php $user =$_COOKIE["username"] ; echo $user;?> </h5>
              <br>
              <h5 class="mb-3" style="font: arial; color: black">Email id: <?php 

                if($db)
                { 
            
                    $query = "SELECT * FROM `users` WHERE username = '$u' LIMIT 1";
                    $result = mysqli_query($connection,$query);
                    $row = mysqli_fetch_array($result);
                     // while($row = mysqli_fetch_array($result)) {
                        $email = $row['email']; 
                        echo $email;  
                    //  }      
                    mysqli_close($connection);
                }
            
            ?></h5>
              <br>
              </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="help.html">Help</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="contact_us.html">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; OutGoing 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
                <li class="list-inline-item mr-3">
                  <a href="https://www.facebook.com/">
                    <i class="fab fa-facebook fa-2x fa-fw"></i>
                  </a>
                </li>
                <li class="list-inline-item mr-3">
                  <a href="https://twitter.com/">
                    <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/">
                    <i class="fab fa-instagram fa-2x fa-fw"></i>
                  </a>
                </li>
              </ul>
        </div>
      </div>
    </div>
  </footer>

</body>
<script src="scripts.js" type = text/js></script>
</html>
<?php
  }else{
    echo "Couldn't load";
  }
?>