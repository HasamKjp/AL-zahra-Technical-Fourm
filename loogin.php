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

 