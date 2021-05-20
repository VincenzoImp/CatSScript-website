<?php
session_start(); 
if (isset($_SESSION['username'])) {
  echo("<script>var navbarType = 'insession_navbar.html';</script>");
}
else {
  header("Location: ../index.php");
}
?>



<head>
    <title>Profile</title>
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
            <div class="row justify-content-center mt-5 mb-3">
                <img src="../assets/img/addormentato.svg" class="resize-img">
            </div>
            <div class="row justify-content-center mb-5">
                <h3 class="text-center">Shh... <?php echo($_SESSION["username"]);?>! The cat is sleeping and there's nothing else on this page, so shut up and go away!</h3>
                
            </div>
        </div>
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

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js" type="text/javascript" lang="javascript"></script>
</body>
