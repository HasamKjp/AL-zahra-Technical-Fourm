 
<!DOCTYPE html>
<html>
<head>
<title>
Adminstretor   
</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css"/>
<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
 <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
 <style type="text/css">
.logo{
    width:30%;
    height:30%;
     border-radius: 50%;
 }

 </style>
</head>
<body >
<center>
<img class="logo" src="pictur/117361560_131122638675479_2867158783066452055_n_002.jpg" >

<h1>AL zahra Technical Fourm </h1>
</center>
 <?php
 	include("connection.php");
$query="select * from users";
$result=mysqli_query($con , $query);
if(!$result){
die(" errror ");
}

 ?>
  
 <?php
 while($row=mysqli_fetch_assoc($result)){
      echo '<div class="btn-primary"><h5> &nbsp; &nbsp; &nbsp;  user ID : ' .$row['id'].' &nbsp; &nbsp;user Name :' .$row['user_name'].'  &nbsp; &nbsp; &nbsp; &nbsp; password : ' .$row['password'].'    &nbsp; &nbsp; &nbsp; &nbsp; Date : ' .$row['date'].'</h5> </div>'; 
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
<!-- zt2021@hasm  -->