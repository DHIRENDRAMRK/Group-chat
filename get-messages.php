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


$username=stripslashes(htmlspecialchars($_GET['username']));


$result =mysql_query("SELECT * FROM messages ");


while($r=mysql_fetch_array($result))

{
	
echo $r[1].'\\';
	echo $r[2]."\n";
	
}


?>