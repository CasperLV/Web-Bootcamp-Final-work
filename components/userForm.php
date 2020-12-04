<?php
    class UserForm {
        public function html() {
            ?>
            <div class="header">
                <a class="register_btn" href="/ToDo/?page=register">Register</a>
                <a class="login_page_btn" href="/ToDo/?page=login">Login</a>
            </div>
            <div id="userForm">
                <div class="login_form">
                <form method="POST">
                        <input class="login_input" name="email" placeholder="Email"><br>
                        <input class="login_input" type="password" name="password" placeholder="Password"><br>
                    <button class="login_btn" type="submit"><?= $this->getBtnText() ?></button>
                </form>
                </div>
            </div>
            <?php
        }

        public function setBtnText($text) {
            $this->btnText = $text;
        }

        public function getBtnText() {
            return $this->btnText;
        }

    }
