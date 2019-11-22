<!DOCTYPE html>
<html>
    <head>
        <title>Suggestions</title>
        <style>
           body
           {
               background: url("calm-body-of-water-1363876.jpg");
               background-size: cover;
               width:100%;
               height: 100%;
           } 
           .place
           {
               height: 150px;
               width: 35%;
               margin: 2%;
               padding-top: 0.5%;
               padding-bottom: 1%;
               padding-left: 1%;
               padding-right: 1%;
               background-color: white;
               align-content: center;
               color: black;
               border-radius: 20px 20px 20px 20px;
           }
           .desc
           {
               color:black;
           }
           #left
           {
               float:left;
           }
           #right
           {
                float: right;
           }
           /*#right*/

        </style>

    </head>
    <body>
        <div style="height:20%;"> 
                <a  style="background-color: transparent; color: white;text-decoration: none;"><h1>OutGoing</h1></a>
        </div>
        <hr>
        <h2 style="color: white; font-family: Arial, Helvetica, sans-serif;">Check out this week's trending spots!</h2>   
        <div id = "container">  
                <div id = "container">        
                        <?php 
                            if(!$_REQUEST['location']){
                                echo "<script>alert('Enter location')</script>";
                            }
                            else if(!$_REQUEST['Purpose']){
                                echo "<script>alert('Enter Purpose')</script>";
                            }
                            else{
                                $location = $_REQUEST['location'];
                                $Purpose = $_REQUEST['Purpose'];
                // this php script is for connecting with database 
                // data have to fetched from local server 
                $mysql_host = 'localhost'; 
                  
                // user name is root 
                $mysql_user = 'root'; 
                  
                // function to connect with database having  
                // argument host and user name 
                $connection = mysqli_connect($mysql_host, $mysql_user,'');
                $db = mysqli_select_db($connection,'outgoing_database');
                
                    //$location = "Whitefield";
                    //$Purpose = "famjam";
                    if($db)
                    {
                        $query = "SELECT * FROM `places` WHERE loc = '$location' OR loc = 'null' AND tags = '$Purpose' LIMIT 5";
                        $result = mysqli_query($connection,$query);
                        if (mysqli_num_rows($result)){
                                        while($row = mysqli_fetch_assoc($result)) {
                                        $i = 1;
                                        if($i%2==0)
                                        {
                                            $id = "right";
                                        }
                                        else{
                                            $id = "left";
                                        }
                                        $name = $row['name'];
                                        $desc = $row["description"];
                                        $link = $row["link"];
                                        echo "<div id = '$id' class = 'place'>
                                        <p><h3><b>$name</b></h3></p>
                                        <p><h4><b>$desc</b></h4></p>
                                        <a href='$link' id = 'l2'><h3>Click here to see map!</h3></a>
                                        </div>" ; 
                                        $i = $i +1;
                                        }    
                                    
                        }
                        else {
                            echo "No reults, please try another location";
                        }
                        
                        mysqli_close($connection);
                    }
                }
                
                ?> 

    </body>
</html>