<?php
session_start(); 
if (isset($_SESSION['username'])) {
  echo("<script>var navbarType = 'insession_navbar.html';</script>");
}
else {
  header("Location: ../index.php");
}
?>

<!--script>
  function logout(){
    <!?php
      unset($_SESSION['username']);
    ?>
    window.location.reload();
  }
</script-->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"content="">
        <meta name="keywords" content="">

        <title>Play HTML</title>
        <link rel="stylesheet" href="../../../assets/bootstrap/css/bootstrap.min.css">
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
            <div class="row justify-items-center">
                <div class="d-flex justify-content-center">


                    <!-- Info Box -->
                    <div id="info_box" class="card">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Some Rules of this Quiz</h3>
                            <hr/>
                            <div class="card-text">
                                1. You will have only <span>15 seconds</span> per each question. <br/>
                                2. Once you select your answer, it can't be undone. <br/>
                                3. You can't select any option once time goes off. <br/>
                                4. You can't exit from the Quiz while you're playing. <br/>
                                5. You'll get points on the basis of your correct answers.
                            </div>
                            <hr/>
                            <div class="d-flex justify-content-end">
                                <button id="exit" class="btn btn-primary me-1">Exit Quiz</button>
                                <button id="continue" class="btn btn-primary ms-1">Continue</button>
                            </div>
                        </div>
                    </div>

        
                    <!-- Quiz Box -->
                    <div id="quiz_box" class="card margin-card">
                        <div class="card-body">
                            <div class="timer mb-3 mt-1">
                                <span id="time_text" class="card-title">Time left</span>
                                <span id="timer" class="card-title seconds px-2 py-2">15</span>
                            </div>
                            <div id="time_line" class="mx-3 time_line"></div>
                            <div class="row">
                                <div class="col-lg-6 d-flex flex-column justify-content-center">
                                    <h4 id="que_text" class="card-text mx-3 my-4">
                                        <!-- Here I've inserted question from JavaScript -->
                                    </h4>
                                    <section class="mx-3">
                                        <div id="option_list" class="option_list">
                                            <!-- Here I've inserted options from JavaScript -->
                                        </div>
                                    </section>
                                </div>
                                <div id="que_img" class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                                    <!-- Here I've inserted image from JavaScript -->
                                </div>
                            </div>
                            <!-- footer of Quiz Box -->
                            <footer class="mb-3 mt-4 d-flex justify-content-between align-items-center">
                                <span id="total_que" class="ms-3">
                                    <!-- Here I've inserted Question Count Number from JavaScript -->
                                </span>
                                <span class="me-3">
                                    <button id="next_btn" class="btn btn-primary">Next Que</button>
                                </span>
                            </footer>
                        </div>
                    </div>


                    <!-- Result Box -->
                    <div id="result_box" class="card margin-card">
                        <div class="card-body">
                            <div id="img_result" class="d-flex justify-content-center align-items-center">
                                <!-- Here I've inserted Image Result from JavaScript -->
                            </div>
                            <h2 class="card-title d-flex justify-content-center align-items-center">You've completed the Quiz!</h2>
                            <div id="score_text" class="card-text my-4 d-flex justify-content-center align-items-center">
                                <!-- Here I've inserted Score Result from JavaScript -->
                            </div>
                            <div class=" d-flex justify-content-end">
                                <button id="restart" class="btn btn-primary me-1">Replay Quiz</button>
                                <button id="quit" class="btn btn-primary ms-1">Quit Quiz</button>
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


    <script src="../../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="js/questions.js"></script>

    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="js/script.js"></script>
    </body>
