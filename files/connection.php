<?php
    // this php script is for connecting with database 
    // data have to fetched from local server 
    $mysql_host = 'localhost'; 
  
    // user name is root 
    $mysql_user = 'root'; 
    $mysql_password = '';
    // function to connect with database having  
    // argument host and user name 
    $connection = mysqli_connect($mysql_host, $mysql_user,$mysql_password);
    $db = mysqli_select_db($connection,'outgoing_database');
?>