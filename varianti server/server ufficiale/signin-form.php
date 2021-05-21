<?php
    session_start();
    if(!(isset($_POST["login-button"]))){
        header("Location: ../index.php");
    }   
    else {
        $dbconn = new mysqli("127.0.0.1", "ua4svgemhgc3z", "9hquexyb7imv", "dbpgmp9oe9v6cd");
        if ($dbconn -> connect_error) {
            echo "Failed to connect to MySQL: " . $dbconn -> connect_error;
            exit();
        }
        $username_email = $_POST["username-email"];
        $q1 = "SELECT * FROM users WHERE email = '$username_email'";
        $q2 = "SELECT * FROM users WHERE username = '$username_email'";
        $result1 = $dbconn -> query($q1);
        $result2 = $dbconn -> query($q2);
        if ($result1 -> num_rows == 0 and $result2 -> num_rows == 0) {
            //se nel database non c'e' ne' un email e ne' un username come il dato $username_email inserito
            echo(
                "<script>
                    window.location.href='../index.php';
                    alert('Sorry you are not registered yet');
                </script>"
            );
        }
        else {
            $password = md5($_POST["password"]);
            $q3 = "SELECT username FROM users WHERE password = '$password' and (username = '$username_email' or email = '$username_email')";
            $result3 = $dbconn -> query($q3);
            if ($result3 -> num_rows == 1) {
                //se c'e' la password (nel rigo dell'utente selezionato) combacia con quella inserita
                $line3 = $result3 -> fetch_assoc();
                $_SESSION['username'] = $line3["username"];
                header("Location: ../../index.php");
            }
            else {
                //se c'e' la password (nel rigo dell'utente selezionato) NON combacia con quella inserita
                echo(
                    "<script>
                        window.location.href='../index.php';
                        alert('Sorry incorrect password');
                    </script>"
                );
            }
        }
        $dbconn -> close();
    }
?>