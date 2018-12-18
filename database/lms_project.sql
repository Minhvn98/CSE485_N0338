CREATE DATABASE lms_project CHARACTER SET utf8 COLLATE utf8_general_ci;

-------------- create table admin -----------------

CREATE TABLE `lms_project`.`admin` (
    `admin_name` VARCHAR(255) NOT NULL ,
    `email` VARCHAR(255) NOT NULL ,
    `password` VARCHAR(8) NOT NULL ,
    PRIMARY KEY (`admin_name`)
) ENGINE = InnoDB;

-------------- create table course ----------------

CREATE TABLE `lms_project`.`course` ( 
	`id_course` INT NOT NULL AUTO_INCREMENT ,
	`image` INT NOT NULL ,
	`title` VARCHAR(300) NOT NULL ,
	`link` TEXT NOT NULL ,
	PRIMARY KEY (`id`)) ENGINE = InnoDB;


------------ create table lesson --------------

CREATE TABLE `lms_project`.`lesson` (
    `id_course` INT NOT NULL,
    `title_course` VARCHAR(300) NOT NULL ,
    `date_upload` TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `link_dowload` TEXT NOT NULL ,
	PRIMARY KEY (id_course),
    FOREIGN KEY (id_course) REFERENCES course(id_course)
) ENGINE = InnoDB;

---------- create table code_example -------------

CREATE TABLE `lms_project`.`code_example` (
    `id_course` INT NOT NULL,
    `title_code_example` VARCHAR(300) NOT NULL ,
    `date_upload` TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `link_dowload` TEXT NOT NULL ,
	PRIMARY KEY (id_course),
    FOREIGN KEY (id_course) REFERENCES course(id_course)
) ENGINE = InnoDB;


------------- create table documents -----------------

CREATE TABLE `lms_project`.`documents` (
    `id_course` INT NOT NULL,
    `title_documents` VARCHAR(300) NOT NULL ,
    `date_upload` TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `link_dowload` TEXT NOT NULL ,
	PRIMARY KEY (id_course),
    FOREIGN KEY (id_course) REFERENCES course(id_course)
) ENGINE = InnoDB;
