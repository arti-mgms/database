<?php
	if(isset($_POST['register'])){
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "womenapp";

	//connection creation

	$conn = new mysqli($server, $user, $pass, $db);
	$name=$_GET['name'];
	$email=$_GET['email'];
	$phone=$_GET['phone'];
	$address=$_GET['address'];
	if($name==''||$email==''||$phone==''||$address==''){
		echo "please fill the value";
	}else{
		$sql ="SELECT * FROM womenapp WHERE name='$name' OR email='$email' OR phone='$phone OR address='$address'";
		$check=mysqli_fetch_array(mysqli_query($con,$sql));
		if(isset($check)){
			echo "registration already exist";
		}else{
		$sql="INSERT INTO womenapp(name,email,phone,address)VALUES('$name','$email','$phone','$address')";
		if(mysql_query($con,$sql)){
			echo "successfully registered";
		}		
	else{
		echo "oops! please try again";
	}
		}	mysql_close($con);
	}
	}
	?>