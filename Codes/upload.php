
<!DOCTYPE html>
<style>
body {
    background-color: white;
}

<div style="
</style>
<?php
 $name = $_FILES['file']['name'];
 $size = $_FILES['file']['size'];
 $type = $_FILES['file']['type'];
 $tmp_name = $_FILES['file']['tmp_name'];
 $location="upload/";		
		
		if($_FILES['file']['error']>0)
		{
		echo"Something goes wrong Try again";
		
		}
		else{
 move_uploaded_file($tmp_name,$location.$name);
	echo"File uploaded successful";
	}

?>
</div>
</html>