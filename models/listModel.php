<?php

require_once __DIR__ . "/../db2_wrapper.php";


    class listModel {

        public function getAll() {
            $sql = "SELECT * FROM `todo-list`";
            $response = DB::run($sql)->fetch_all(MYSQLI_ASSOC);

            return $response;
        }

        public function deleteByID($id) {
            $sql = "DELETE  FROM `todo-list` WHERE id=$id";
            DB::run($sql);
        }

        public function getByID($id) {
            $sql = "SELECT *  FROM `todo-list` WHERE id=$id";
            $response = DB::run($sql);


            if ($response->num_rows === 0) {
                return [];
            } else {
                return $response->fetch_assoc();
            }

        }
               
        public function updateById($id, $content) {
            $sql = "UPDATE `todo-list` SET content = '$content' WHERE id=$id";
            DB::run($sql);
        }

        public function insertNew($content) {
            $sql = "INSERT INTO `todo-list` (content) VALUE ('$content')";
            DB::run($sql);
        }

        public function updateChecked($checked, $id) {

            $sql = "UPDATE `todo-list` SET `checked` = '$checked' WHERE `todo-list`.`id` = $id";
            DB::run($sql);
        }
    }
?>