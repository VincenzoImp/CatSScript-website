<?php
    $dbconn = 
        pg_connect("host=localhost port=5432 dbname=CatSScript user=postgres password=root")
        or die("Could not connect: ". pg_last_error());
    if(!(isset($_POST["registration-button"]))){
        header("Location: ../index.php");
    }
    else {
        $email = $_POST["email"];
        $username = $_POST["username"];
        $q1 = "select * from users where email = $1 or username = $2";
        $result = pg_query_params($dbconn, $q1, array($email, $username));
        if ($line=pg_fetch_array($result, null, PGSQL_ASSOC)) {
            echo(
                "<script>
                    window.location.href='../index.php';
                    alert('Sorry Username or Email are already in use');
                </script>"
            );
        }
        else {
            $password = md5($_POST["password"]);
            $q2 = "insert into users values ($1, $2, $3)";
            $data = pg_query_params($dbconn, $q2, array($username, $email, $password));
            if ($data) {
                header("Location: ../../index.php");
            }
        }
    }
?>