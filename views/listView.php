
<?php

require_once __DIR__ . "/../helpers/header.php";

class listView {
    private $contentList;
    public function __construct($data)
    {
        $this->contentList = $data;
    }


    public function html() {
        ?>
        <html>
        <body>
        <div class="container">
            <div class="task_button_wrapper">
                <a href="/TODO/?page=list&action=modify">Add task</a>
            </div>
            <div class="table_wrapper">
                <table>
                    <tbody>
                    <?php foreach($this->contentList as $contents) { ?>
                        <tr>
                            <?php if($contents['checked']){ ?>
                            <td><p class="checked"><?= $contents["content"]?></p></td>
                            <td>
                                <input type="checkbox" id="checked" class="checkbox"
                                       name="checkbox" data-todo-id="<?= $contents["id"]?>" checked>
                                <?php }else { ?>
                            <td><p class="unchecked" ><?= $contents["content"]?></p></td>
                            <td>
                                <input type="checkbox" id="unchecked" class="checkbox"
                                       name="checkbox" data-todo-id = "<?= $contents["id"]?>" >
                            </td>
                                <?php } ?>
                            <td>
                            <div class= "btn-container">
                                <div class="edit-btn">
                                    <a href="/ToDo/?page=list&action=modify&content_id=<?= $contents['id']?>">Edit</a>
                                </div>
                                <div class="delete-btn">
                                    <a href="/ToDo/?page=delete&content_id=<?= $contents['id']?>">Delete</a>
                                </div>
                            </div>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <form method="POST">
                <input type="hidden" name="logOut">
                <button type="submit">Log out</button>
            </form>
        </div>
        </body>
        </html>
        <?php
    }

}

?>