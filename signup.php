<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$Email = $_POST['Email'];
 		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($Email) && !empty($password)  )
		{

 			$user_id = random_num(20);
			$query = "insert into users (user_id,Email,user_name,password) values ('$user_id','$Email','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<style type="text/css">
		body{
			background-image: url("IMG-20201120-WA0026.jpg");
           background-size: cover;	
}
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}
	.logo{
    width:50%;
    height:50%;
	 border-radius: 50%;
	 box-shadow: 5px 5px #222;

 }
	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: rgb(90, 85, 167);
		border: none;
		border-radius: 10px;

	}

	.box{
		border-radius: 10px;
border:5px solid #ccc;
box-shadow: 10px 10px rgb(100, 90, 90);
		background-color: rgba(92, 15, 75, 0.692);
		margin: auto;
		width: 300px;
		padding: 20px;
	}
a{
	 color: #fff;

}
	</style>
</head>
<body>

<br> <br><br> <br>
<center>
<div class="box col-lg-4 col-md-6 col-sm-6 col-xs-6">
	<img class="logo" src="pictur/117361560_131122638675479_2867158783066452055_n_002.jpg" >

		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name" placeholder="   user name"><br><br>
			<input id="text" type="password" name="password" placeholder="  password"><br><br>
			<input id="text" type="text" name="Email" placeholder="  Email address"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
	</center>
</body>
</html>