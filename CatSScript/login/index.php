<?php
session_start(); 
if (isset($_SESSION['username'])) {
  header("Location: ../index.php");
}
else {
  echo("<script>var navbarType = 'outsession_navbar.html';</script>");
}
?>

<head>
    <title>Sign-in</title>
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
    
    <div class="d-flex align-items-center">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div id="login-card" class="card">
                    <div class="row card-body">
                        <div class="my-5 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                            <img src="../assets/img/carino.svg" class="img-resize">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                            <h3 class="card-title mt-5">Sign in into your account</h3>
                            <div class="card mb-5 mt-4 background py-4 px-4 radius">
                                <form action="php/signin-form.php" method="POST" class="text-center" name="login" onsubmit="return validateLogin()">
                                    <div class="card-body">
                                        <div class="mb-3 row text-center">
                                            <i class="fas fa-cat me-3 mb-2"></i>
                                            <input name="username-email" type="text" id="username" placeholder="Username or Email" class="px-2 py-2 radius">
                                        </div>
                                        <div class="mb-3 mt-4 row text-center">
                                            <i class="fas fa-lock me-3 mb-2"></i>
                                            <input name="password" type="password" id="password" placeholder="Password" class="px-2 py-2 radius">
                                        </div>
                                        <div class="mb-3 mt-5 row">
                                            <input name="login-button" type="submit" value="LOG IN" class="btn my-btn radius">
                                        </div>
                                        <div class="mt-3 row">
                                            <a class="btn my-btn radius" href="../registrazione/index.php">I don't have an account</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js" type="text/javascript" lang="javascript"></script>
</body>
