<?php
    class modifyContent {
        private $content;
        private $id;

        public function __construct($content = null, $id = null)
        {
            $this->content = $content;
            $this->id = $id;
        }

        public function html() {
            ?>
                <div id="form_wrapper" class="form_wrapper" class="flexed">
                    <form action="/ToDo/?page=modify" method="POST">
                    <input id="task-input" name="content" placeholder="Add task..." value="<?= $this->content ?>" maxlength="45">
                    <input type="hidden" name="id" value="<?= $this->id ?>">
                    <a class="modify-btn" href="/ToDo/?page=list">Close</a>
                    <button type="submit">Save</button>
                </form>
            </div>
            <?php
        }
    }
?>