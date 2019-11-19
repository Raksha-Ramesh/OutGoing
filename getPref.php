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
//if ( isset( $_POST['submit'] ) ) 
//{
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
                        echo "Name:" . $row["name"]. "<br/>link:".$row["link"]."<br/>Desc:" . $row["description"]."<br/><br/>";}
                        
                        
        }
        else {
            echo "No reults, please try another location";
        }
        
        mysqli_close($connection);
    }
//}


?> 