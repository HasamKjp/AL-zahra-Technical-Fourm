<?php 

session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
 		 
		 $Email = $_POST['Email'];

		$password = $_POST['password'];
		 
		if(!empty($Email) && !empty($password) )
		{

 			$query = "select * from users where Email = '$Email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
 						if( $_SESSION['user_id'] ==50468498109302){
							header("Location: Adminstretor.php");
						}
					
						
					
					else{
						header("Location: index.php");
						die;
					}
				}
				}
			}

			echo '<h2>'. 'wrong username or password!'.'</h2>';
		}
		else
		{
			echo "wrong username or password!";
		}
		
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
 <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

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
		width: 90%;
	}
	.logo{
    width:45%;
    height:45%;
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
 		padding: 20px;
	}
a{
	 color: #fff;

}
	</style>
	<br> <br><br> <br>
<center>
	<div class="box col-lg-4 col-md-6 col-sm-6 col-xs-6">

		<form method="post">
	
	<img class="logo" src="pictur/117361560_131122638675479_2867158783066452055_n_002.jpg" >

<div style="font-size: 30px;margin: 10px;color: white;">Login</div>


			<input id="text" type="text" name="Email" placeholder="  Email address"><br><br>
			<input id="text" type="password" name="password" placeholder="    password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div></center>
</body>
</html>