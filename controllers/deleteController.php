<?php
    require_once __DIR__ . "/../models/listModel.php";

    if (isset($_GET["content_id"])) {
        $model = new listModel();
        $model->deleteById($_GET["content_id"]);
    }
    Header("Location: /ToDo/?page=list");

?>
 