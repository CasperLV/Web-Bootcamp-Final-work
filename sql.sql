CREATE TABLE `todo-list` (
                             content VARCHAR (45) NOT NULL,
                             checked TINYINT (1) NOT NULL,
                             id INT AUTO_INCREMENT,
                             PRIMARY KEY (id),
                             user_email VARCHAR(55) NOT NULL
);


CREATE TABLE `users` (
                         email VARCHAR(55) NOT NULL,
                         password VARCHAR (60),
                         PRIMARY KEY (email)

);