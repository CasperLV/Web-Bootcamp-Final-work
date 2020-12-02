<?php
   require_once __DIR__ . "/../helpers/header.php";
   require_once __DIR__ . "/../views/listView.php";
   require_once __DIR__ . "/../models/listModel.php";
   require_once __DIR__ . "/../components/modifyContent.php";

    if (isset($_POST["logOut"])) {
        session_destroy();
        Header("Location: /ToDo/?page=login");
    }


   $model = new listModel();
   $content = $model->getAll();
   

   $view = new listView($content);
   $view->html();

   if (isset($_GET["action"]) && $_GET["action"] === "modify") {
      if (isset($_GET["content_id"])) {
         $contents = $model->getById($_GET["content_id"]);
         

         $form = new modifyContent($contents["content"], $contents["id"]);
         
      } else {
         $form = new modifyContent();         
      }
      $form->html();
      
   }

   

   
?>