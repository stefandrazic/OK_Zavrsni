CREATE DATABASE blog;
USE blog;
CREATE TABLE posts (
    id int auto_increment,
    title varchar(255) not null,
    body TEXT not null,
    author varchar(50) not null,
    created_at date not null,
    PRIMARY KEY (id)
);
INSERT INTO posts (title, body, author, created_at)
VALUES (
        'Moj prvi post',
        'Ovo je moj prvi post, uzivajte.',
        'Stefan',
        '2023-10-10'
    ),
    (
        'Moj drugi post',
        'Ovo je moj drugi post, uzivajte.',
        'Stefan',
        '2023-10-11'
    ),
    (
        'Moj treci post',
        'Ovo je moj treci post, uzivajte.',
        'Stefan',
        '2023-10-14'
    );