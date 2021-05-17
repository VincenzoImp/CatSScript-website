<?php
    $dbconn = 
        pg_connect("host=localhost port=5432 dbname=CatSScript user=postgres password=root")
        or die("Could not connect: ". pg_last_error());
    if(!(isset($_POST["login-button"]))){
        header("Location: ../index.html");
    }
    else {
        $username_email = $_POST["username-email"];
        $q1 = "select * from users where email = $1";
        $q2 = "select * from users where username = $1";
        $result1 = pg_query_params($dbconn, $q1, array($username_email));
        $result2 = pg_query_params($dbconn, $q2, array($username_email));
        if ($line1=pg_fetch_array($result1, null, PGSQL_ASSOC) or $line2=pg_fetch_array($result2, null, PGSQL_ASSOC)) {
            //se nel database non c'e' ne' un email e ne' un username come il dato $username_email inserito
            echo(
                "<script>
                    window.location.href='../index.html';
                    alert('Sorry you are not registered yet');
                </script>"
            );
        }
        else {
            $password = md5($_POST["password"]);
            $q3 = "select * from users where password = $1 and (username = $2 or email = $2)";
            $result3 = pg_query_params($dbconn, $q3, array($password, $username_email));
            if (!$line3=pg_fetch_array($result1, null, PGSQL_ASSOC)) {
                //se c'e' la password (nel rigo dell'utente selezionato) combacia con quella inserita
                header("Location: ../../index.html");
                $_SESSION['username'] = $result3["username"];
            }
            else {
                //se c'e' la password (nel rigo dell'utente selezionato) NON combacia con quella inserita
                echo(
                    "<script>
                        window.location.href='../index.html';
                        alert('Sorry incorrect password');
                    </script>"
                );
            }
        }
    }
?>