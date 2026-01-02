
-- create database blog ;

-- create table users (
-- id int Auto_increment primary key,
-- nom varchar(50) not null,
-- date_naissence date not null,
-- email varchar(50) unique,
-- password varchar(100) not null
-- ); 

-- create table reader (
-- id int Auto_increment primary key,
-- id_user int,
-- FOREIGN KEY (id_user) REFERENCES users(id)	
-- );

-- create table author (
-- id int Auto_increment primary key,
-- id_user int,
-- FOREIGN KEY (id_user) REFERENCES users(id)
-- );

-- create table admin (
-- id int Auto_increment primary key,
-- id_user int,
-- FOREIGN KEY(id_user) REFERENCES users(id)
-- );

-- create table article(
-- id int AUTO_INCREMENT PRIMARY KEY,
-- author_id int,
-- FOREIGN KEY (author_id) REFERENCES author(id),
-- title VARCHAR (100),
-- content TEXT 
-- );

-- create table comments(
-- id int auto_increment primary key ,
-- id_article int,
-- FOREIGN KEY (id_article) REFERENCES article(id),
-- id_reader int,
-- FOREIGN KEY (id_reader) REFERENCES reader(id),
-- comment text 
-- );


-- create table likes (
-- id int auto_increment primary key,
-- id_article int,
-- FOREIGN KEY (id_article) REFERENCES article(id),
-- id_reader int,
-- FOREIGN KEY (id_reader) REFERENCES reader(id)
-- );

