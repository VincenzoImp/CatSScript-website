<?php
session_start(); 
if (isset($_SESSION['username'])) {
  echo("<script>var navbarType = 'outsession_navbar.html';</script>");
}
else {
  echo("<script>var navbarType = 'outsession_navbar.html';</script>");
}
?>





<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"content="">
  <meta name="keywords" content="">

  <title>CatSScript</title>

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/style.css" rel="stylesheet" type="text/css">

  <script src="https://kit.fontawesome.com/a1b5315d4a.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Quicksand&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
 
</head>

<body>
 
  <div id="navbar"></div>

  <div class="space"></div>
  
  <!-- ======= Hero Section ======= -->
  <div id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Have fun learning and playing with web programming</h1>
          <h3>All in company of loving kittens !!</h3>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img ms-auto">
          <img src="assets/img/hero-img.svg" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
  <!-- End Hero -->

  <!-- ======= Play Section ======= -->
  <div id="play" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-2 order-lg-2 d-flex flex-column justify-content-center">
          <h1>Play with cats</h1>
          <!--h4>Enjoy tuttecose guarda che ti diverti a giocare a questo giochino intanto controlli che hai imparato cose (per impararla vai alla sezione sotto) e pensa ci sono anche i gatti. Cioè un gatto perché qualcuno ha deciso che ci sarebbe stato il monopolio di pusheen.</h4-->
          <br/>
          <a class="btn btn-primary" href="play/index.html">Play</a>
        </div>
        <div class="col-lg-6 order-1 order-lg-1 play-img">
          <img src="assets/img/play-img.svg" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
  <!-- End Play -->

  <!-- ======= Learn Section ======= -->
  <div id="learn" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 d-flex flex-column justify-content-center">
          <div class="card">
              <img src="assets/img/placeholder/Rf324613e5cee25a11f56bf5f8a4d9f7d.jfif" class="card-img-top img-card" alt="">
            <div class="card-body">
              <h5 class="card-title">HTML</h5>
              <p class="card-text">HTML è il linguaggio di markup coi tag che serve a scrive le pagine web.</p>
              <a href="learn/html/index.html" class="btn btn-primary-custom">Learn HTML !!</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex flex-column justify-content-center">
          <div class="card">
            <img src="assets/img/placeholder/exemple-code-css.png" class="card-img-top img-card" alt="">
            <div class="card-body">
              <h5 class="card-title">CSS</h5>
              <p class="card-text">Pensa che CSS serve a fa diventa tutto rosa quindi sicuro va imparato.</p>
              <a href="learn/CSS/index.html" class="btn btn-primary-custom">Learn CSS !!</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex flex-column justify-content-center">
          <div class="card">
            <img src="assets/img/placeholder/code-javascript-e1563276216875.jpg" class="card-img-top img-card" alt="">
            <div class="card-body">
              <h5 class="card-title">JavaScript</h5>
              <p class="card-text">JavaScript serve sicuro a scrive script che ti permettono di fare più o meno tuttecose.</p>
              <a href="learn/JavaScript/index.html" class="btn btn-primary-custom">Learn JavaScript !!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Learn -->

  <!-- ======= About Us Section ======= -->
  <div id="about-us" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <div class="card about-us-position mx-5 my-5 bg-transparent border-0">
            <img src="assets/img/Lucietti-img.svg" class="circle-img img-card">
            <br/>
            <h3 style="text-align: center;" class="card-title">Lucietti</h3>
            <p class="mx-5" style="text-align: center;" class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos totam ratione distinctio voluptate, rem eos in iste quidem dicta aliquam sequi, laboriosam unde autem aperiam nostrum tenetur fuga ut. Quis!</p>
          </div>
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <div class="card about-us-position mx-5 my-5 bg-transparent border-0">
            <img src="assets/img/Vincenzo-img.svg" class="circle-img img-card">
            <br/>
            <h3 style="text-align: center;" class="card-title">Vincenzo</h3>
            <p class="mx-5" style="text-align: center;" class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos totam ratione distinctio voluptate, rem eos in iste quidem dicta aliquam sequi, laboriosam unde autem aperiam nostrum tenetur fuga ut. Quis!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End About Us -->

  <!-- ======= Footer ======= -->
  <div id="footer">
    <div class="background">
      <div class="container py-4" style="text-align: center;">
        Made with <i class="fas fa-heart"></i> by <i class="fas fa-cat"></i>s
      </div>
    </div>
  </div>
  <!-- End Footer -->
  

  <button id="btn-back-to-top" type="button" class="btn btn-light btn-floating btn-lg">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript" lang="javascript"></script>
  <script src="assets/js/main.js" type="text/JavaScript" lang="javascript"></script>
</body>
