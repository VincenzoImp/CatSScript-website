<?php
session_start(); 
if (isset($_SESSION['username'])) {
  echo("<script>var navbarType = 'insession_navbar.html';</script>");
}
else {
  header("Location: ../login/index.php");
}
?>



<head>
  <title>Play</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

  <script src="https://kit.fontawesome.com/a1b5315d4a.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Quicksand&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
</head>

<body>
  <div id="navbar"></div>

  <div class="space"></div>
  <br/>
  <div class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 d-flex flex-column justify-content-center">
          <div id="html" class="card transition about-us-position mx-3 my-5 card-background radius">
            <img src="../assets/img/pusheen_gamer.svg" class="img-card">
            <div class="d-flex flex-column align-items-center">
              <br/>
              <h3 class="card-title">Play HTML</h3>
              <a href="play pages/html/index.php" class="btn my-btn my-4 radius">Let's go !!</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex flex-column justify-content-center">
          <div id="css" class="card transition about-us-position mx-3 my-5 card-background radius">
            <div class="d-flex flex-column align-items-center order-lg-1 order-2">
              <br/>
              <h3 class="card-title">Play CSS</h3>
              <a href="play pages/CSS/index.php" class="btn my-btn my-4 radius">Let's go !!</a>
            </div>
            <img src="../assets/img/ancielo_arcobaleno.svg" class="order-lg-2 order-1 img-card">
          </div>
        </div>
        <div class="col-lg-4 d-flex flex-column justify-content-center">
          <div id="javascript" class="card transition about-us-position mx-3 my-5 card-background radius">
            <img src="../assets/img/pusheen_mermaid.svg" class="img-card">
            <div class="d-flex flex-column align-items-center">
              <br/>
              <h3 class="card-title">Play JavaScript</h3>
              <a href="play pages/JavaScript/index.php" class="btn my-btn my-4 radius">Let's go !!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br/>

  <div class="container py-4 text-center">
      <audio controls autoplay loop src="audio/lobby_music.mp3" type="audio/mpeg"></audio>
  </div>

  <!-- ======= Footer ======= -->
  <div id="footer">
    <div class="background">
      <div class="container py-4 text-center">
        Made with <i class="fas fa-heart"></i> by <i class="fas fa-cat"></i>s
      </div>
    </div>
  </div>
  <!-- End Footer -->

  

  <button id="btn-back-to-top" type="button" class="btn btn-light btn-floating btn-lg">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script src="../assets/bootstrap/js/bootstrap.min.js" type="text/javascript" lang="javascript"></script>
  <script src="js/main.js" type="text/JavaScript" lang="javascript"></script>  
</body>
