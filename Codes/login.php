<?php

session_start();
$username = $_POST['username'];
$password = $_POST['password']; 

if($username && $password)
{
   $connect = mysql_connect("localhost","root","") or die("not connected");
   mysql_select_db("phplogin")or die("not connected db");
  
    $query = mysql_query("select * from user where username='$username'");
	$numrows = mysql_num_rows($query);
	//echo $numrows;
	if($numrows!=0)
	{
		// code to login
		while($row = mysql_fetch_assoc($query))
		{
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
		}
		if($username==$dbusername and $password==$dbpassword)
		{
			echo"hello $username <a href ='profile.php'> click </a> here to enter the member page. ";
	       $_SESSION['username'] = $username;	
		}
		else
		{
			 echo("incorrect password");
		}
	}
	else
		echo("that user doesn't exits");
}
else
	die("please inter a username and a password");  
    

?>