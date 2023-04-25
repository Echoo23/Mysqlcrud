<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      .bg-4 { 
    background-color: #2f2f2f;
    color: #fff;
  }
    </style>
    
</head>
<body>

<div class="sidebar">
<nav class="navbar bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" style="color: white">TEAMS</a>
    
  </div>
  
</nav>

  <a href="index.php">Home</a>
  <a  href="crudapplication.php">Dashboard</a>
  <a href="About.php">About</a>
  <a class ="active" href="Blog.php">Blog</a>
  <a href="logout.php">Logout</a>
</div>
<div class="content">
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="prog.jpg" class="card-img-top" alt=""  width="350" height="350">
      <div class="card-body">
        <p class="card-text">The most damaging phrase in the language is "It's always been done this way"</p>
        <footer class="blockquote-footer"><cite title="Source Title">Grace Hopper</cite></footer>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="pog2.jpg" class="card-img-top" alt="" width="350" height="350">
      <div class="card-body">
        <p class="card-text">Everybody should learn to program a computer, because it teaches you how to think.</p>
        <footer class="blockquote-footer"><cite title="Source Title">Steve Jobs</cite></footer>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="prog3.png" class="card-img-top" alt="..." width="350" height="350">
      <div class="card-body">
        <p class="card-text">"I choose a lazy person to do a hard job. Because a lazy person will find 
          an easy way to do it."</p>
          <footer class="blockquote-footer"><cite title="Source Title">Robert C. Martin</cite></footer>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="prog4.jpg" class="card-img-top" alt="" width="350" height="350">
      <div class="card-body">
        <p class="card-text">Talk is CHEAP. show me the CODE.</p>
        <footer class="blockquote-footer"><cite title="Source Title">Linus Torvalds</cite></footer>
      </div>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Muntinlupa, Alabang</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +63 9515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: malabananjerico_bsit@plmun.edu.ph</p>
    </div>  
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
<footer class="container-fluid bg-4 text-center">
  <p>Website Theme Made By <a href="#">Malabanan, Paul Jerico S.</a></p> 
</footer>

</div>
</body>
</html>