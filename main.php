<!doctype html>
<html lang="en">
  <head>
    delete
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>AL zahra Technical Fourm</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <script src="scripts.js"> </script>
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="style_main.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .car_img{
    width: 100%;
    height: 90%;
    border-radius: 20px;
    border: 5px solid#333;
    overflow: scroll;
}
.pars{
    font-size: 16px;
    color: white;
    padding: 3%;
    background-color: rgb(84, 85, 85);
}
footer{
  background-color: rgb(15, 15, 15);
  color: white;
width:100%;
 padding:5%;
}

 body{
  background-color: rgb(84, 85, 85);
  color: white;
 }
.main-title{
   font-style: italic;

}
.tab {
    width: 100%;
    background-color: #555;
text-align: center;
border-radius: 15px;

  }
.tab th{
  background-color: #222;
  width: 100%;
height: 60px;
}
.tab tr{
  width: 100%;
border-radius: 10px;
}
.tab td{
  width: 100%;
border-radius: 10px;
padding: 6%;
}
.tab td:hover{
  background-color: rgb(45, 49, 49);
}
.tab tr td a{
  color: wheat;
}
.logoo{
width: 10%;
height: 10%;
border-radius: 50%;
 margin-left: 1%;
 }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <script src="scripts.js"> </script>
  </head>
  <body>
    
       
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">AL zahra Technical Fourm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          
          <li class="nav-item">
            <a class="nav-link" href="main_Html.php">HTML</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CSS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="main_Java.php">Java</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="main_c++.php">C++</a>
          </li>
          
        </ul>
        <a href="https://www.facebook.com/101955221592221/posts/322616729526068/?app=fbl">
        <button type="button" class="btn btn-outline-primary me-2"> Facebook</button>  </a>
            </a>
        
            <a href="https://chat.whatsapp.com/HM3irxNCiAl10AwZ7SvhaM">
        <button type="button" class="btn btn-outline-success me-2 "> Whatsapp</button>  </a>
            </a>
            <a href="https://t.me/joinchat/AAAAAEpS-Fs3KBVJYaqBng">
        <button type="button" class="btn btn-outline-primary me-2 "> Telgram</button>  </a>
            </a>
        <a href="login.php" >  
        <button type="button" class="btn btn-outline-primary me-2" method="post" name="login" >
        User name : <?php echo $user_data['user_name']; ?>          </button>
           </a>

          <a href="logout.php">
         

        <button type="button" class="btn btn-outline-danger me-2"> Logout</button> 
         </a>
        
      </div>
    </div>
  </nav>
</header>

 <br>

    <!-- START THE FEATURETTES -->
    
       
        
        
    <div class="row featurette pars">
      <div class="col-md-7 ">
    
        <h2>PHP Tutorial<br> 
          
         
        <pre class=" pars ">  
PHP is a server scripting language and a powerful tool for making dynamic and 
interactive Web pages.
PHP is a widely-used free and  efficient  alternative  to competitors such as
 Microsoft's ASP.
PHP code is executed on the server.
What You Should Already Know
Before you continue you should have a basic understanding
of the following:

    1- HTML
    2- CSS
    3- JavaScript
        </pre>
       
       </div>
      <div class="col-md-5">
     
      <img class="car_img  img-fluid  img-thumbnail  f-logo-1"  name ="slide" >  


      </div>
  
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 > What is PHP? </h2>
        <p class="lead para container">
        PHP is an acronym for "PHP: Hypertext Preprocessor"
    PHP is a widely-used, open source scripting language
    PHP scripts are executed on the server
    PHP is free to download and use

PHP is an amazing and popular language!
It is powerful enough to be at the core of the biggest blogging system on the web (WordPress)!
It is deep enough to run the largest social network (Facebook)!
It is also easy enough to be a beginner's first server side language!


</p>
<pre>

</pre>
      </div>
      <div class="col-md-5 order-md-1">
      <img class="bd-placeholder-img   " width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false" src="pictur/download9.png">


      </div>
    </div>
    <p class="lead para container">

It is powerful enough to be at the core of the biggest blogging system on the web (WordPress)!
It is deep enough to run the largest social network (Facebook)!
It is also easy enough to be a beginner's first server side language!
What is a PHP File?

    PHP files can contain text, HTML, CSS, JavaScript, and PHP code
    PHP code is executed on the server, and the result is returned to the browser as plain HTML
    PHP files have extension ".php"
<h2> <span  class=" main-title" > What Can PHP Do? </span> </h2>
    PHP can generate dynamic page content
    PHP can create, open, read, write, delete, and close files on the server
    PHP can collect form data
    PHP can send and receive cookies
    PHP can add, delete, modify data in your database
    PHP can be used to control user-access
    PHP can encrypt data
With PHP you are not limited to output HTML. You can output images, PDF files, and even Flash movies.
You can also output any text, such as XHTML and XML.
 <h2> <span  class=" main-title" >  Why PHP? </span> </h2>
    PHP runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)
    PHP is compatible with almost all servers used today (Apache, IIS, etc.)
    PHP supports a wide range of databases
    PHP is free. Download it from the official PHP resource: www.php.net
    PHP is easy to learn and runs efficiently on the server side
    
</p>

  <div class="row featurette">
      <div class="col-md-9 order-md-2">
        <h2 > What is PHP? </h2>
        <p class="lead para container">
        PHP is an acronym for "PHP: Hypertext Preprocessor"
    PHP is a widely-used, open source scripting language
    PHP scripts are executed on the server
    PHP is free to download and use

PHP is an amazing and popular language!
It is powerful enough to be at the core of the biggest blogging system on the web (WordPress)!
It is deep enough to run the largest social network (Facebook)!
It is also easy enough to be a beginner's first server side language!

<img class="bd-placeholder-img  car_img " width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false" src="pictur/download.png">

</p>
<pre>

</pre>

      </div>
      <div class="col-md-3 order-md-1">
      <table class="tab">
           <thead>
<th><i>    PHP Tutorial</i> </th>
           </thead>
           <tbody>
            <tr>
              <td>  <a href="proper_diet.html">     PHP Introduction        </a> </td>  
            </tr>
            <tr>
              <td>       <a href="sport.html">     PHP Syntax        </a>
              </td>  
            </tr>
            <tr>
              <td>       <a href="vitamin.html">       PHP Comments         </a>
              </td>  
            </tr>
            <tr>
            <td>       <a href="page-spi.html">     PHP Variables       </a> 
            </td>  
            </tr>
            <tr>
            <td>
            <a href="Malnutrition.html">      PHP Data Types             </a>
            </td>  
            </tr>  <tr>
            <td>       <a href="page-spi.html">      PHP Strings       </a> 
            </td>  
            </tr>   
         
            <tr>
              <td>       <a href="sport.html">     PHP Constants       </a>
              </td>  
            </tr>
            <tr>
              <td>       <a href="sport.html">     PHP Operators       </a>
              </td>  
            </tr>
            <tr>
              <td>       <a href="sport.html">     PHP If...Else...Elseif      </a>
              </td>  
            </tr>
            <tr>
              <td>       <a href="sport.html">     PHP Switch        </a>
              </td>  
            </tr>
            <tr>
              <td>       <a href="sport.html">    PHP Loops        </a>
              </td>  
            </tr>  <tr>
              <td>       <a href="sport.html">    PHP Functions       </a>
              </td>  
            </tr>  <tr>
              <td>       <a href="sport.html">    PHP Arrays        </a>
              </td>  
            </tr>
           </tbody>
         </table>

      </div>
    </div>

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer>
    <center>
    <h3>&copy;  AL zahra Technical Fourm  2021 -2020  <br>
         
      <a href="https://www.facebook.com/101955221592221/posts/322616729526068/?app=fbl">Facebook</a>   
      <a href="https://chat.whatsapp.com/HM3irxNCiAl10AwZ7SvhaM">Whatsapp</a>
      <a href="https://t.me/joinchat/AAAAAEpS-Fs3KBVJYaqBng">Telgram</a>
   <a href="#">Back to top</a> <br>
  
   
      </h3
</center>

	<a class="btn btn-outline-danger me-2" href="logout.php">Logout</a>
  <button  type="button" class="btn btn-outline-danger me-2" onclick="document.getElementById('dome').style.display='block';">
   delete user </button> 
 
  <p id="dome" style="display:none;"> 
  delete user : <?php echo $user_data['user_name']; ?>  <br>
	By ID : <?php echo $user_data['user_id']; ?>
  
    </p>  
    

 
  </footer>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>














 

