<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>AL zahra Technical Fourm</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
 <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<script src="scripts.js"> </script>
<style>
body{
    background-color:#333;
}
 .logo{
    width:25%;
    height:25%;
     border-radius: 50%;

}
.btn-danger{
    width:40%;
    background-color:#222;
    padding:3%;
    border-radius: 10px;

}
    </style>
<body>
<br><br><br>
 	       
   

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<center >
<img class="logo" src="pictur/117361560_131122638675479_2867158783066452055_n_002.jpg" >
<br><br>
<div class=" btn-danger" title="Logout after Update your Information ">
UPDATE User   : <?php echo $user_data['user_name']; ?> <br>
    By ID : <?php echo $user_data['user_id'];
    $ab=$user_data['user_id'];
    ?>
    <form  method="post">
 
 username  : <input  type="text"  name="username"/><BR><br>
 password  : <input  type="password"  name="password"/><br><br>

 <input  type="submit"  name="update" value="update" />

</form>

</div>
</center>
<?php
if(isset($_POST['update'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
		$sql=mysqli_query($con,"update  users set user_name= '$username', password='$password' where user_id=$ab");		
		}
		?>
</body>
</html>