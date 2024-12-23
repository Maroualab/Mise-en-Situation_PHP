--create database
CREATE DATABASE Register;

--use database
Use Register;

--create table users
CREATE TABLE users(
ID INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(255) NOT NULL, 
email VARCHAR(255) NOT NULL,
role_ID INT 
);

--create table role
CREATE TABLE role(
ID INT PRIMARY KEY AUTO_INCREMENT, 
name varchar(255) NOT NULL
);

--foreign key between users and role
ALTER table users 
ADD CONSTRAINT fk-usersRole
FOREIGN KEY (role_ID) REFERENCES role(ID);

--insert into role
INSERT INTO role(name) VALUES('admin');
INSERT INTO role(name) VALUES('normal user');

