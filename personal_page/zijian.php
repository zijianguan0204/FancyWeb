<?php
// require_once('config.php');
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://kit.fontawesome.com/1ab8dfc894.js" crossorigin="anonymous"></script>

  <title>Fancy Web</title>
</head>



<body>
  <!-- Nav Bar -->
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0"></script>
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
  

  

  


  <section class="section section-dark" id="demo">
    <div class="pimg_zijian_1" id="Demo1">
      <div class ="container">
        <div class="row pt-5">
          <div class="ptext_zijian_bigtitle">
            Passions<br>&<br>proficiency
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-light" id="demo">
    <div class ="container">
      <div class="row pt-5">
        <div class="col-6 pt-5">
          <img src="../img/person/zijian_intro.jpg" class="img-thumbnail float-left" alt="Responsive image">
        </div>
        <div class="col-6 pt-5">
          <div class="ptext_zijian_title">
            Some Facts About Me..
          </div>
          <div class ="ptext_zijian_content">
            I am a freshman pursing Software Engineering Master Degree in San Jose State University, and also working as a TA in Data Structure class.<br>
            I love playing video games, and they inspired me to be a programmer because games are interesting worlds created by code, and I can see programming has the magic to make anything come true!  
          </div>
        </div>
      </div>
    </section>

    <section class="section section-light" id="demo">
      <h1><br>Project Demo</h1>
      <div class = "container-fluid">
        <h1><br></h1>
        <div id="carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PPeJ5cWFiCE" allowfullscreen></iframe>
              </div>
              <div class = "slide-right-text">
                <div class = "carousel-caption">
                  <h1>Firewall Project<br><br></h1>
                  <h5>Programming language: Python<br>
                    Environment: Linux(Admin)<br><br>
                  </h5>
                  <p>This project is designed for admins of relatively small network environment, who is able filter package from specific sources to destinations.
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PPeJ5cWFiCE" allowfullscreen></iframe>
              </div>
              <div class = "slide-right-text">
                <div class = "carousel-caption">
                  <h1>Firewall Project<br><br></h1>
                  <h5>Programming language: Python<br>
                    Environment: Linux(Admin)<br><br>
                  </h5>
                  <p>This project is designed for admins of relatively small network environment, who is able filter package from specific sources to destinations.
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PPeJ5cWFiCE" allowfullscreen></iframe>
              </div>
              <div class = "slide-right-text">
                <div class = "carousel-caption">
                  <h1>Firewall Project<br><br></h1>
                  <h5>Programming language: Python<br>
                    Environment: Linux(Admin)<br><br>
                  </h5>
                  <p>This project is designed for admins of relatively small network environment, who is able filter package from specific sources to destinations.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="arrowRed">
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-light" id="demo">
      <h1><br>Facebook Page That I follow...<br><br></h1>
      <div class="container-fluid">
        <div class="row">
          <div class="col-4">
            <div class="fb-page" data-href="https://www.facebook.com/google" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/google" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/google">Google</a></blockquote>
            </div>
          </div>
          <div class="col-4">
            <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
            </div>
          </div>
          <div class="col-4">
            <div class="fb-page" data-href="https://www.facebook.com/apple/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/apple/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/apple/">Apple</a></blockquote></div>
          </div>
        </div>
      </div>
      
    </section>






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

  <div class="pimg3" id="contact_us">
    <div class="ptext">
     <span class="border">
      We appreciate your visit:)
    </span>
  </div>
</div>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script>
  $('.carousel').carousel({
    interval: 2000,
    pause: true,
    keyboard: true
  })
</script>
<script src="../js/split.js"></script>
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
                <a href="google.com" class="btn-floating btn-fb mx-1">
                  <i class="fab fa-facebook-f fa-2x" style="color:#FF0000;"> </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1">
                  <i class="fab fa-twitter fa-2x" style="color:#FF0000;"> </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-gplus mx-1">
                  <i class="fab fa-google-plus-g fa-2x" style="color:#FF0000;"> </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-li mx-1">
                  <i class="fab fa-linkedin-in fa-2x" style="color:#FF0000;"> </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-dribbble mx-1">
                  <i class="fab fa-dribbble fa-2x" style="color:#FF0000;"> </i>
                </a>
              </li>
            </ul>
          </div>

          <div class = "col-6">
            <ul class="list-unstyled list-inline text-center">
              <h3 style="color:#FFFFFF;">Contact Info</h3>
              <li class="list-inline-item" style="color:#FFFFFF;">
                <a class="btn-floating btn-fb mx-1">
                  <i class="fas fa-home mr-3"></i> San Jose, CA 95008, US</p>
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