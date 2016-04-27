<?php

$connect = mysql_connect("localhost","root",""); 

if(!$connect)
{
	 
	echo 'unable to connect to server';
	
	
}

$db = mysql_select_db('msg',$connect);

if(!$db)
{
	echo 'unable to connect to database';
	
}

?>

<?php


$username=stripcslashes(htmlspecialchars($_GET['username']));


$message=stripslashes(htmlspecialchars($_GET['message']));


if($username==''||$message=='')
{
	die();
	
	
}


$result =mysql_query("INSERT INTO messages VALUES ('','$username','$message') ");


echo "test";

?>

