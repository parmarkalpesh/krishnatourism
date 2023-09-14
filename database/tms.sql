DROP DATABASE IF EXISTS `tms`;
CREATE DATABASE `tms`;
USE `tms`;

CREATE TABLE `user`
(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `username` VARCHAR(20) NOT NULL,
    `phonenumber` VARCHAR(20) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `password` VARCHAR(50) NOT NULL,
);

CREATE TABLE `packages`
(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `packagename` VARCHAR(20) NOT NULL,
    `packageprice` VARCHAR(50) NOT NULL,
    `packagelocation` VARCHAR(50) NOT NULL,
    `packagedetails` VARCHAR(50) NOT NULL,
    `packagetitle` VARCHAR(50) NOT NULL,
    `packageimage` VARCHAR(200) NOT NULL
);


CREATE TABLE `contectmessage`
(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(20) NOT NULL,
    `email` VARCHAR(20) NOT NULL,
    `subject` VARCHAR(50) NOT NULL,
    `message` VARCHAR(200) NOT NULL
);

CREATE TABLE `booking`
(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `user_id` INT NOT NULL,
    `package_id` INT NOT NULL,
    `name` VARCHAR(20) NOT NULL,
    `phonenumber` VARCHAR(20) NOT NULL,
    `date` VARCHAR(50) NOT NULL,
    `countpeople` VARCHAR(50) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES user(id),
    FOREIGN KEY (package_id) REFERENCES packages(id)
);