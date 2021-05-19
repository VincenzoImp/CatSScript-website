<?php
session_start(); 
if (isset($_SESSION['username'])) {
  echo("<script>var navbarType = 'insession_navbar.html';</script>");
}
else {
  echo("<script>var navbarType = 'outsession_navbar.html';</script>");
}
?>

<script>
  function logout(){
    <?php
      unset($_SESSION['username']);
    ?>
    window.location.reload();
  }
</script>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"content="">
    <meta name="keywords" content="">

    <title>Learn JavaScript</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/a1b5315d4a.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">

</head>

<body>
    <div id="navbar"></div>

    <div class="container margin-top-custom">
        <div class="row">
            <div class="col-lg-4">
                <div class="make-me-sticky">
                    <nav class="sidebar card py-2 mb-4">
                        <ul class="nav flex-column" id="nav_accordion">
                            <li class="nav-item">
                                <a class="nav-link learn-link" id="introduction"> Introduction and first steps </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link learn-link" id="syntax"> Syntax </a>
                            </li>
                            <li class="nav-item has-submenu">
                                <a class="nav-link" > Function, Objects and Events </a>
                                <ul class="submenu collapse">
                                    <li><a class="nav-link learn-link" id="functions">Function</a></li>
                                    <li><a class="nav-link learn-link" id="objects">Objects</a></li>
                                    <li><a class="nav-link learn-link" id="events">Events</a> </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link learn-link" id="arrays"> Arrays </a>
                            </li>
                            <div class="card mb-5 border-0 bg-transparent">
                                <img src="../../assets/img/learnJavaScript-img.svg" class="card-img-custom">
                            </div>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-8">
                <div id="text-area">
                </div>
            </div>
        </div>
    </div>

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


    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
