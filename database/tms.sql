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