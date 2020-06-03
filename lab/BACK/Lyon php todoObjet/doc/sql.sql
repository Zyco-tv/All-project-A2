CREATE DATABASE todolist;
USE todolist;
CREATE TABLE user (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT,
        username VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        user_id INT UNSIGNED NOT NULL,
        PRIMARY KEY (id)
    );

CREATE TABLE todo_list (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT,
        title VARCHAR(255) NOT NULL UNIQUE,
        user_id INT UNSIGNED NOT NULL,
        PRIMARY KEY (id)
    );

CREATE TABLE item (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT,
        title VARCHAR(255) NOT NULL,
        todo_id INT UNSIGNED NOT NULL,
        PRIMARY KEY (id)
    );

ALTER TABLE todo_list
    ADD CONSTRAINT fk_todo_list_user_id FOREIGN KEY (user_id) REFERENCES user (id);
ALTER TABLE item
    ADD CONSTRAINT fk_item_todo_id FOREIGN KEY (todo_id) REFERENCES todo_list (id);