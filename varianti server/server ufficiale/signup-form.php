<?php
    session_start();
    if(!(isset($_POST["registration-button"]))){
        header("Location: ../index.php");
    }
    else {
        $dbconn = new mysqli("127.0.0.1", "ua4svgemhgc3z", "9hquexyb7imv", "dbpgmp9oe9v6cd");
        if ($dbconn -> connect_error) {
            echo "Failed to connect to MySQL: " . $dbconn -> connect_error;
            exit();
        }
        $email = $_POST["email"];
        $username = $_POST["username"];
        $q1 = "SELECT * FROM users WHERE email = '$email' or username = '$username'";
        $result1 = $dbconn -> query($q1);
        if ($result1 -> num_rows != 0) {
            echo(
                "<script>
                    window.location.href='../index.php';
                    alert('Sorry Username or Email are already in use');
                </script>"
            );
        }
        else {
            $password = md5($_POST["password"]);
            $q2 = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            $result2 = $dbconn -> query($q2);
            if ($result2) {
                echo(
                    "<script>
                        window.location.href='../../index.php';
                        alert('Account successfully registered');
                    </script>"
                );
            }
        }
        $dbconn -> close();
    }
?>