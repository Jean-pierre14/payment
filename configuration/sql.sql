CREATE DATABASE payment;
USE payment;

CREATE TABLE `payment`.`admin` ( 
    `id_admin` INT NOT NULL AUTO_INCREMENT , 
    `username` VARCHAR(50) NOT NULL ,
     `sname` VARCHAR(50) NOT NULL ,
    `email` VARCHAR(100) NOT NULL ,
     `pass` VARCHAR(255) NOT NULL ,
      PRIMARY KEY (`id_admin`
)) ENGINE = InnoDB;

ALTER TABLE `admin` ADD `status` VARCHAR(12) NOT NULL AFTER `pass`;

CREATE TABLE `payment`.`student` ( 
    `id_student` INT NOT NULL AUTO_INCREMENT ,
    `username` VARCHAR(50) NOT NULL,
    `sname` VARCHAR(50) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `class` VARCHAR(10) NOT NULL ,
    `depart` VARCHAR(30) NOT NULL , 
    `create_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `sex` VARCHAR(10) NOT NULL , PRIMARY KEY (`id_student`
)) ENGINE = InnoDB

SELECT * FROM `student` ORDER BY `student`.`id_student` DESC

CREATE TABLE `payment`.`lecturer` (
`id` INT NOT NULL , `name` VARCHAR(50) NOT NULL ,
`sname` VARCHAR(50) NOT NULL ,
`lname` VARCHAR(30) NOT NULL ,
`cours` VARCHAR(100) NOT NULL ,
`location` VARCHAR(50) NOT NULL ,
`nationalite` VARCHAR(30) NOT NULL , 
`adm_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
`status` INT NOT NULL,
PRIMARY KEY (`id`)
) 
ENGINE = InnoDB;
INSERT INTO `lecturer` (`id`, `name`, `sname`, `lname`, `cours`, `location`, `nationalite`, `adm_at`, `status`) VALUES (NULL, 'chiru', 'Bisimwa', 'Grace', 'Cpp', 'Goma', 'congolaise', CURRENT_TIMESTAMP, '1')

CREATE TABLE `payment`.`employees` ( `id` INT NOT NULL AUTO_INCREMENT,
`name` VARCHAR(50) NOT NULL ,
`sname` VARCHAR(50) NOT NULL ,
`lname` VARCHAR(30) NOT NULL ,
`location` VARCHAR(100) NOT NULL ,
`task` VARCHAR(255) NOT NULL ,
`adm_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;
INSERT INTO `lecturer` (`id`, `name`, `sname`, `lname`, `cours`, `location`, `nationalite`, `adm_at`, `status`) VALUES 
(NULL, 'chiruza', 'bisimwa', 'Grace', 'Programming', 'Goma', 'congolaise', CURRENT_TIMESTAMP, '1');


CREATE TABLE `payment`.`stud_pay` (
    `id_pay` INT NOT NULL AUTO_INCREMENT ,
    `email` VARCHAR(100) NOT NULL ,
    `mount_pay` VARCHAR(50) NOT NULL ,
    `pay_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `bank_at` VARCHAR(30) NOT NULL,
    PRIMARY KEY (`id_pay`)
) ENGINE = InnoDB;

-- Payment table

CREATE TABLE payement_std(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL ,
    create_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    date_register DATE NOT NULL ,
    mount INT NOT NULL ,
    id_pay INT NOT NULL ,
    PRIMARY KEY (id)
) ENGINE = InnoDB;

CREATE TABLE `payment`.`py` ( `id` INT NOT NULL AUTO_INCREMENT , `mount` INT NOT NULL , `create_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `id_pay` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
ALTER TABLE `py` ADD `bank` VARCHAR(50) NOT NULL AFTER `id_pay`;

CREATE TABLE `payment`.`cours_tb` ( `cours_id` INT NOT NULL AUTO_INCREMENT , `cours_name` VARCHAR(255) NOT NULL , `comptence` INT NOT NULL , `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`cours_id`)) ENGINE = InnoDB;

ALTER TABLE `cours_tb` ADD `class_id` INT NOT NULL AFTER `comptence`;

CREATE TABLE `payment`.`comptence_tb` ( `comptence_id` INT(11) NOT NULL AUTO_INCREMENT , `comptence_name` VARCHAR(255) NOT NULL , `cours_id` INT NOT NULL , `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`comptence_id`)) ENGINE = InnoDB;

ALTER TABLE `comptence_tb` ADD FOREIGN KEY (`cours_id`) REFERENCES `cours_tb`(`cours_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `cours_tb` ADD FOREIGN KEY (`class_id`) REFERENCES `class_tb`(`class_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `admin` ADD `auth` INT NOT NULL AFTER `email`;