<?php
    require_once __DIR__ . "/../models/listModel.php";
    $model = new listModel();
    $taskErr = "";
    if (!empty($_POST["id"])) {
        $model->updateById($_POST["id"], $_POST["content"]);
    } else {
        $model->insertNew($_POST["content"]);
    }
 
    Header("Location: /ToDo/?page=list");
?>