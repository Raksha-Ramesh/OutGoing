<?php
	$path = "/";
	$domain = $_SERVER['SERVER_NAME'];
    setcookie("username","dead", time()-3600, $path, $domain);
    if (isset($_COOKIE["username"])) {
		unset($_COOKIE["username"]);
 		echo $_COOKIE["username"];
	 	setcookie("username",'', 0);
	 } 
	header("Location:index.html");
?>