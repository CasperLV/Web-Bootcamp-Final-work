
<?php
    require_once __DIR__ . "/../models/listModel.php";
    
    $model = new listModel();
    if (isset($_POST["checked"]) && $_POST["id"]) {
        $id = $_POST['id'];
        $checkboxValue = filter_var($_POST["checked"], FILTER_VALIDATE_BOOLEAN);
        $model->updateChecked($checkboxValue, $id);
    }
    ?>