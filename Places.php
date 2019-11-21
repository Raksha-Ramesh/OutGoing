<html>
    <head>
        <title>
            Places
        </title>
    </head>
    <body>
        <div id = "container">        
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
    $location = $_REQUEST['location'];
    $Purpose = $_REQUEST['Purpose'];
    //$location = "Whitefield";
    //$Purpose = "famjam";
    if($db)
    {
        $query = "SELECT * FROM `places` WHERE loc = '$location' OR loc = 'null' AND tags = '$Purpose' LIMIT 5";
        $result = mysqli_query($connection,$query);
        if (mysqli_num_rows($result)){
                        while($row = mysqli_fetch_assoc($result)) {
                        $i = 1;
                        $name = $row['name'];
                        $desc = $row["description"];
                        $link = $row["link"];
                        echo "<div id = 'p$i' class = 'Places'>
                        <p id = 'n$i'><h1><b>$name</b></h1></p>
                        <p id = 'd$i'><h2><b>$desc</b></h2></p>
                        <a href='$link' id = 'l2'>Click here to see map!</a>
                        </div>" ; 
                        }    
        }
        else {
            echo "No reults, please try another location";
        }
        
        mysqli_close($connection);
    }

?> </div>
    </body>
</html>