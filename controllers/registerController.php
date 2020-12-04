<?php

    require_once  __DIR__ . "/../views/registerView.php";
    require_once __DIR__ . "/../db2_wrapper.php";

    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $password = password_hash($password, PASSWORD_DEFAULT);


        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

        DB::run($sql);
        Header("Location: /ToDo/?page=login");
    }
    $view = new RegisterView();
    $view->html();
