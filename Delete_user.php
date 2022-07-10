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
    background-color:#111;
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
<center>
<img class="logo" src="pictur/117361560_131122638675479_2867158783066452055_n_002.jpg" >
<br><br>
<div class=" btn-danger">
Delete User   : <?php echo $user_data['user_name']; ?> <br>
	By ID : <?php echo $user_data['user_id']; ?>
    <form  method="post">

<input type="submit"  name="delete" value="Delete" />
 


</form>
<br>
</div>
</center>
<?php
	$ab=$user_data['user_id'];
if(isset($_POST['delete'])){
 
	$sql=mysqli_query($con,"delete from users where user_id= $ab");
	
	
    } 
    ?>
    <footer>
    <center>
         
    
  
   
      

   <button  type="button" class="btn btn-outline-danger me-2" onclick="document.getElementById('dome').style.display='block';">
<a href="Delete_user.php">     delete user </a>

    </button> 
    <button  type="button" class="btn btn-outline-danger me-2">
<a href="Update_user.php">     Update user </a>

    </button> 
    <a href="https://www.facebook.com/101955221592221/posts/322616729526068/?app=fbl">
        <button type="button" class="btn btn-outline-primary me-2"> Facebook</button>  </a>
            </a>
        
            <a href="https://chat.whatsapp.com/HM3irxNCiAl10AwZ7SvhaM">
        <button type="button" class="btn btn-outline-success me-2 "> Whatsapp</button>  </a><br><br>
            </a>
            <a href="https://t.me/joinchat/AAAAAEpS-Fs3KBVJYaqBng">
        <button type="button" class="btn btn-outline-primary me-2 "> Telgram</button>  </a>
            
        <button type="button" class="btn btn-outline-primary me-2" method="post" name="login" >
        User name : <?php echo $user_data['user_name']; ?>          </button>
           </a>

          <a href="logout.php">
         

          <button type="button" class="btn btn-outline-danger me-2"> Logout</button> 
          <button type="button" class="btn btn-dark me-2">  
          <a href="#">Back to top</a> <br>

          </button> 
         </a>
         <br> <br>
         <h3>&copy;  AL zahra Technical Fourm  2021 -2022  <br>
         </center>

  </footer>
</body>
</html>