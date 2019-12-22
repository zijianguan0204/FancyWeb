<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Fancy Web</title>
</head>
<body>

  <?php

  if(isset($_POST['signup'])){
    echo 'User Submitted';
  }

  ?>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">FancyWeb</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            More Options
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Contract Us</a>
            <a class="dropdown-item" href="#">Download Resumes</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-link" data-toggle="modal" data-target="#signup">Sign up</button>
        </li>
      </ul>
    </div>
  </nav>
  
  <div id="carouselFullControls" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselFullControls" data-slide-to="0" class="active"></li>
      <li data-target="#carouselFullControls" data-slide-to="1"></li>
      <li data-target="#carouselFullControls" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/witcher.jpg" alt="First slide" height="500">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/creed.jpg" alt="Second slide" height="500">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/worr.jpg" alt="Third slide" height="500">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselFullControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselFullControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  
  <div class = "container">
    <div class = "row">
      <div class="col-lg-4">
        <img src="zihe.jpg" class="rounded-circle" alt="Cinque Terre" height="140" weight="140">
        <h2>Zihe Deng</h2>
        <h5>Electronic Engineer</h5>
        <p>Curent student in SJSU pursuing Master Electronic Engineering degree.</p>
        <p>Great team worker with experience in programming Python and HTML.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <img src="zihe.jpg" class="rounded-circle" alt="Cinque Terre" height="140" weight="140">
        <h2>Zijian Guan</h2>
        <h5>Software Engineer</h5>
        <p>Curent student in SJSU pursuing Master Software Engineering degree.</p>
        <p>Great team worker with experience in programming Python and HTML.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div>
  </div>


  <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="signup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form action = "index.php" method="post">
          <div class="modal-header">
            <h5 class="modal-title" id="signup">Sign Up</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class = "container">
              <div class="form-group">
                <label for="username" class="col-form-label">UserName:</label>
                <input type="text" class="form-control" id="username" required>
              </div>
              <div class="form-group">
                <label for="password" class="col-form-label">Password:</label>
                <input type="text" class="form-control" id="password" required>
              </div>
              <div class="form-group">
                <label for="fname" class="col-form-label">First Name:</label>
                <input type="text" class="form-control" id="fname" required>
              </div>
              <div class="form-group">
                <label for="lname" class="col-form-label">Last Name:</label>
                <input type="text" class="form-control" id="lname" required>
              </div>
              <div class="form-group">
                <label for="email" class="col-form-label">Email:</label>
                <input type="text" class="form-control" id="email" required>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" name="signup"class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>