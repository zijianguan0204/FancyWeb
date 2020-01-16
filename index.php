<?php
require_once('config.php');
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/1ab8dfc894.js" crossorigin="anonymous"></script>

  <title>Fancy Web</title>
</head>



<body>
  <!-- Nav Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
    <a class="navbar-brand" href="#">FancyWeb</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about_us">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#demo">What we've done</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact_us">Contact Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            More Options
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="profile_doc/Resumes.zip" download>Download Our Resumes</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-link" data-toggle="modal" data-target="#signup">Sign up</button>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-link" data-toggle="modal" data-target="#login">Log in</button>
        </li>
      </ul>
    </div>
  </nav>
  

  <div class="pimg1" id="home">
    <div class="ptext">
      <span class="border">
        Welcome to Our FancyWeb
      </span>
    </div>
  </div>

  <div class="pimg2">
    <div class="ptext">
      <span class="border trans">
        Brightest Stars:
      </span>
    </div>
  </div>

  
  <!-- Split profile with hover -->
  <div class="container_split" id="about_us">
    <div class="split left">
      <h1 class = "split_font">Zihe Deng</h1>  
      <h1 class = "split_font_fd">Add Into here
        <br>Next Line...
      </h1>
      <a href="#" class="button_split">Read More</a>
    </div>
    <div class="split right">
      <h1 class = "split_font">Zijian Guan</h1>  
      <h1 class = "split_font_fd">Add Into here
        <br>Next Line...
      </h1>
      <a href="#" class="button_split">Read More</a>
    </div>
  </div>

  <section class="section section-dark" id="demo">
    <h2>Past Projects:</h2>
    <p>
      some imgs in slides at here.
    </p>
  </section>





  <div class="pimg3" id="contact_us">
    <div class="ptext">
     <span class="border">
      We appreciate your visit:)
    </span>
  </div>
</div>






<!-- Circle Img Intro -->
  <!-- <div class = "container">
    <div class = "row">
      <div class="col-lg-4">
        <img src="img/about_us/zihe.jpg" class="rounded-circle" alt="Cinque Terre" height="140" weight="140">
        <h2>Zihe Deng</h2>
        <h5>Electronic Engineer</h5>
        <p>Curent student in SJSU pursuing Master Electronic Engineering degree.</p>
        <p>Great team worker with experience in programming Python and HTML.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>

      <div class="col-lg-4">
        <img src="img/about_us/zihe.jpg" class="rounded-circle" alt="Cinque Terre" height="140" weight="140">
        <h2>Zijian Guan</h2>
        <h5>Software Engineer</h5>
        <p>Curent student in SJSU pursuing Master Software Engineering degree.</p>
        <p>Great team worker with experience in programming Python and HTML.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
    </div>
  </div> -->

  <!-- Modal SignUp -->
  <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="signup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form action = "signup.php" method="post">
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
                <input type="text" class="form-control" id ="username" name="username" required>
              </div>
              <div class="form-group">
                <label for="password" class="col-form-label">Password:</label>
                <input type="text" class="form-control" id= "password" name="password" required>
              </div>
              <div class="form-group">
                <label for="firstname" class="col-form-label">First Name:</label>
                <input type="text" class="form-control" id= "firstname" name="firstname" required>
              </div>
              <div class="form-group">
                <label for="lastname" class="col-form-label">Last Name:</label>
                <input type="text" class="form-control" id= "lastname" name="lastname" required>
              </div>
              <div class="form-group">
                <label for="phone" class="col-form-label">Phone:</label>
                <input type="text" class="form-control" id= "phone" name="phone" required>
              </div>
              <div class="form-group">
                <label for="email" class="col-form-label">Email:</label>
                <input type="text" class="form-control" id= "email" name="email" required>
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

  <!-- Log in feature: -->
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form action = "index.php" method="post">
          <div class="modal-header">
            <h5 class="modal-title" id="login">Log In</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class = "container">
              <div class="form-group">
                <label for="user_name" class="col-form-label">UserName:</label>
                <input type="text" class="form-control" id="user_name" required>
              </div>
              <div class="form-group">
                <label for="pass_word" class="col-form-label">Password:</label>
                <input type="text" class="form-control" id="pass_word" required>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" name="button" id="login_button" class="btn btn-primary">Log in</button>
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
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

  <script>
    $(function(){
     $('#login_button').click(function(e){

      var valid = this.form.checkValidity();

      if(valid){
        var user_name = $('#user_name').val();
        var pass_word = $('#pass_word').val();
      }

      e.preventDefault();

      $.ajax({
        type: 'POST',
        url: 'login.php',
        data: {user_name: user_name, pass_word: pass_word},
        success: function(data){
          alert(data);
          if($.trim(data) === "Successfully Login!"){
            setTimeout('window.location.href = "index.php"', 1000);
          }
        },
        error: function(data){
          alert('there were errors while doing the opration.');
        }
      });

    });
   });
 </script>
 <script src="js/split.js"></script>
</body>


<!-- Footer -->
<footer>


  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <hr class="clearfix w-100 d-md-none">

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <div class="pimg3">
    <div class="ptext_footer">
      <div class = "container">
        <div class = "row">
          <div class = "col-6">
            <ul class="list-unstyled list-inline text-center">
              <h3 style="color:#FFFFFF;">Zihe Deng's</h3>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/dengtyler/" class="btn-floating btn-li mx-1">
                  <i class="fab fa-linkedin-in fa-2x" style="color:#FF0000;"> </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/tylergithub" class="btn-floating btn-github mx-1">
                  <i class="fab fa-github fa-2x" style="color:#FF0000;"> </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.youtube.com/channel/UCLIevMiSLVJjg4ce9M1M3jw?view_as=subscriber" class="btn-floating btn-li mx-1">
                  <i class="fab fa-youtube fa-2x" style="color:#FF0000;"> </i>
                </a>
              </li>
            </ul>
          </div>

          <div class = "col-6">
            <ul class="list-unstyled list-inline text-center">
              <h3 style="color:#FFFFFF;">Contact Info</h3>
              <li class="list-inline-item" style="color:#FFFFFF;">
                <a class="btn-floating btn-fb mx-1">
                  <i class="fas fa-home mr-3"></i> San Jose, CA 95129, US</p>
                </a>
                <a class="btn-floating btn-fb mx-1">
                  <i class="fas fa-envelope mr-3"></i> zihe.deng@sjsu.com</p>
                </a>
                <a class="btn-floating btn-fb mx-1">
                  <i class="fas fa-phone mr-3"></i> + 01 425 626 9214</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <hr>

        <div class = "row">
          <div class = "col-6">
            <ul class="list-unstyled list-inline text-center">
              <h3 style="color:#FFFFFF;">Zijian Guan's</h3>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/profile.php?id=100007270539407" class="btn-floating btn-fb mx-1">
                  <i class="fab fa-facebook-f fa-2x" style="color:#00FFE6;"> </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/zijianguan0204" class="btn-floating btn-github mx-1">
                  <i class="fab fa-github fa-2x" style="color:#00FFE6;"> </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/zijian-guan-4151a6137/" class="btn-floating btn-li mx-1">
                  <i class="fab fa-linkedin-in fa-2x" style="color:#00FFE6;"> </i>
                </a>
              </li>
            </ul>
          </div>

          <div class = "col-6">
            <ul class="list-unstyled list-inline text-center">
              <h3 style="color:#FFFFFF;">Contact Info</h3>
              <li class="list-inline-item" style="color:#FFFFFF;">
                <a class="btn-floating btn-fb mx-1">
                  <i class="fas fa-home mr-3"></i> San Jose, CA 95129, US</p>
                </a>
                <a class="btn-floating btn-fb mx-1">
                  <i class="fas fa-envelope mr-3"></i> zijian.guan@sjsu.com</p>
                </a>
                <a class="btn-floating btn-fb mx-1">
                  <i class="fas fa-phone mr-3"></i> + 01 559 387 9948</p>
                </a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>



<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <!-- <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a> -->
</div>



</footer>
</html>