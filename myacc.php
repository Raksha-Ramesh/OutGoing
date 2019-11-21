<?php
  
  $mysql_host = 'localhost'; 
  $mysql_user = 'root'; 
  $connection = mysqli_connect($mysql_host, $mysql_user,'');
  $db = mysqli_select_db($connection,'outgoing_database');
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

  <title>My Account</title>

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
    #container {
      position: center; /* Stay in place */
      z-index: 3; /* Sit on top */
      margin-left: 33%;
      margin-top: 1%;
      width: 30%; /* Full width */
      height: 70%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color:black; /* Fallback color */
      opacity: 0.75;
      padding: 30px;
      padding-top: 20px;
      padding-bottom: 40px;
      border-radius: 5px;
      box-shadow: black;
    }
  </style>

</head>

<body>

  <script>
    function changeDetails()
    {
      if(confirm("Are you sure you want to change your details?"))
      {
        alert("Redirecting");
      }
    }
  </script>
  <!-- Navigation -->
  <nav class="navbar navbar-dark" style="background-color:black;">
    <div class="navbar-brand">
      <a class="navbar-brand" href="HomePageAfterLogin.html">OutGoing</a>
    </div>
    <ul>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              <img src='' atl='Account image' style="width: 40px;"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="#">My Account</a>
              <a class="dropdown-item" href="#">Favourites</a>
              <a class="dropdown-item" href="./logout.php">Log Out</a>
            </div>
          </li>
    </ul>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div id="container" class="col-xl-9 mx-auto">
            <img src="" alt="OutGoing Logo"/>
          <h1 class="mb-3" style="font: arial; color:pink;">User Information</h1>         
          <h3 align="left" style="font: times new roman; color:white;">Username: <?php $user =$_COOKIE["username"] ; echo $user//this only isn't working ?> <br><font color="blue">------------</font></h3> <br><br><br>           
          <h3 align="left" style="font: times new roman; color:white">E-mail ID: <?php 

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

?>
<br><font color="blue">------------</font></h3> <br>
        </div>
        
        <div class="col-md-20 col-lg-20 col-xl-7 mx-auto"> 
        </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col" >
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="material-icons m-auto">trending_up</i>
            </div>
            <a href="" style="color:black; text-decoration:none;" class="m-auto"><h3>Trending This Week!</h3></a>
          </div>
        </div>
        <div class="col">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
                <i class='fas fa-child m-auto'></i>
            </div>
            <a href="" style="color:black; text-decoration:none;" class="m-auto"><h3>Top Family Hangout Spots!</h3></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col" >
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
                <i class='fas fa-book-open m-auto'></i>
            </div>
            <a href="" style="color:black; text-decoration:none;" class="m-auto"><h3>Favourite Me-Time Spots!</h3></a>
          </div>
        </div>
        <div class="col">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
                <i class='fas fa-coffee m-auto'></i>
            </div>
            <a href="" style="color:black; text-decoration:none;" class="m-auto"><h3>Top Cafes!</h3></a>
          </div>
        </div>
      </div>
      
      </div>
    </div>
  </section>
  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
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
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<?php
  }else{
    echo "couldnt load";
  }
?>