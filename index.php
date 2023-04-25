<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
    
    


     
  
    

</head>
<body>



  <div class="sidebar">
  <nav class="navbar bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" style="color: white">TEAMS</a>
    
  </div>
  
</nav>
  
  <a class="active" href="index.php" >Home</a>
  <a href="crudapplication.php">Dashboard</a>
  <a href="About.php">About</a>
  <a href="Blog.php">Blog</a>
  <a href="logout.php">Logout</a>
</div>

<div class="content">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="panel.jpeg" alt="New York" width="1200" height="700">
            
      </div>

      <div class="item">
        <img src="crs.png" alt="Chicago" width="1200" height="700">
              
      </div>
    
      <div class="item">
        <img src="crd.jpeg" alt="Los Angeles" width="1200" height="700">
            
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div class="container text-center">
  <h3>Home Page</h3>
  <p>Stay in Touch</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>CREATE</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="creates.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>In CRUD, the create operation does what the name implies. It means creating an entry. 
          This entry could be an account, user information, a post, or a task.</p>
        
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>READ</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="reads.png" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>The READ operation means getting access to the inputs or entries in the UI. That is, seeing it. Again, 
          the entry could be anything from user information to social media posts, and others.</p>
        
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>UPDATE</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="update.png  " class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>UPDATE is the operation that allows you to modify existing data. That is, editing the data.</p>
        
      </div>
      
    </div>
  </div>
</div>
</div>
    
    
</body>
</html>