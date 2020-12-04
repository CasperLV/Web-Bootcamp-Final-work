<?php
    require_once  __DIR__ . "/../components/userForm.php";
    require_once  __DIR__ . "/../db2_wrapper.php";
if (!empty($_POST["email"])) {
    $email = $_POST["email"];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $response = DB::run($sql)->fetch_assoc();

    if ($response) {
        if (!empty($_POST["password"])) {
            $isValidPassword = password_verify(
                $_POST["password"],
                $response["password"]
            );

            if ($isValidPassword) {
                session_start();
                $_SESSION["id"] = $response["email"];
                Header("Location: /ToDo/?page=list");
               echo("You are logged in");
            } else {
                $error = "Invalid password";
            }
        } else {
            echo "<script>alert('Password not set!');</script>";
        }
    } else{
        echo "<script>alert('User does not exist!');</script>";
    }

    }




//$this->login();
        $form = new UserForm();
        $form->setBtnText("Login");
        $form->html();

