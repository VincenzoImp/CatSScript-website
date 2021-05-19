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

    <div class="container-custom">
        <div class="myCard">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="myLeftCtn d-flex justify-content-center align-items-center">
                        <img src="../assets/img/pusheen/F4.png">
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="myRightCtn">
                        <form action="php/signin-form.php" method="POST" class="myForm text-center" name="login" onsubmit="return validateLogin()">
                            <header>Sign in into your account</header>
                            <div class="form-control">
                                <i class="fas fa-cat"></i>
                                <input name="username-email" type="text" id="username" placeholder="Username or Email" class="myInput">
                            </div>
                            <div class="form-control">
                                <i class="fas fa-lock"></i>
                                <input name="password" type="password" id="password" placeholder="Password" class="myInput">
                            </div>
                            <br/>
                            <input name="login-button" type="submit" value="LOG IN" class="butt">
                            <br/>
                            <br/>
                            <button class="butt"><a href="../registrazione/index.php">I don't have an account</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js" type="text/javascript" lang="javascript"></script>
</body>
