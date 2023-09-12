DROP DATABASE `tms`;
CREATE DATABASE `tms`;
USE `tms`;

CREATE TABLE `packages`
(
    `packageid` INT PRIMARY KEY AUTO_INCREMENT,
    `packagename` VARCHAR(20) NOT NULL,
    `packageprice` VARCHAR(50) NOT NULL,
    `packagelocation` VARCHAR(50) NOT NULL,
    `packagedetails` VARCHAR(50) NOT NULL,
    `packageimage` TEXT(200) NULL
);

CREATE TABLE `user`
(
    `userid` INT PRIMARY KEY AUTO_INCREMENT,
    `username` VARCHAR(20) NOT NULL,
    `phonenumber` VARCHAR(20) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `password` VARCHAR(50) NOT NULL
);

CREATE TABLE `contectmessage`
(
    `name` VARCHAR(20) NOT NULL,
    `email` VARCHAR(20) NOT NULL,
    `subject` VARCHAR(50) NOT NULL,
    `message` VARCHAR(50) NOT NULL
);