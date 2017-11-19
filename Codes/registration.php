<?php
 $submit  = $_POST['submit'];
 $roll=$_POST['roll'];
 $username = $_POST['username'];
 $fullname = $_POST['fullname'];
 $password = $_POST['password'];
 $repeatpassword = $_POST['repeatpassword'];
 $cgpa=$_POST['cgpa'];
 $series=$_POST['series'];
 $phone=$_POST['phone'];
 if($submit){

 if($username and $fullname and $password and $repeatpassword)
 {
    if(strlen($username)>25 or strlen($fullname)>25  or strlen($username)<3 or strlen($fullname)<3)
	{
		echo"username and fullname must be  between 3 to 25 characters";
	}
    else if($password != $repeatpassword)
	{
		echo("password dosen't match");
	}
	else if(strlen($password)>10 or strlen($password)<3)
	{
		echo"password length must be between 3 to 10 characters";
	}
	else
	{
		
		$connect = mysql_connect("localhost","root","") or die("not connected");
        mysql_select_db("phplogin")or die("not connected db");
		$query = mysql_query("INSERT INTO user VALUES('$roll','$fullname','$username','$password','$cgpa','$series','$phone')");
		echo"done!<a href ='new.php'> clik here to return to login page</a>";


	}

 // echo"$username / $fullname / $password / $repeatpassword";

 }
 else
	 echo"please fill in <b> all </b> fields";
 }
?>