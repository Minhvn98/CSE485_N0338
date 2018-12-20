CREATE DATABASE lms_project CHARACTER SET utf8 COLLATE utf8_general_ci;

/*------------- Create table -------------------*/

CREATE TABLE `lms_project`.`admin` (
    `admin_name` VARCHAR(255) NOT NULL ,
    `email` VARCHAR(255) NOT NULL ,
    `password` VARCHAR(8) NOT NULL ,
    PRIMARY KEY (`admin_name`)
) ENGINE = InnoDB;


CREATE TABLE `lms_project`.`course` ( 
	`id_course` INT NOT NULL AUTO_INCREMENT ,
    `title` VARCHAR(300) NOT NULL ,
	`image` TEXT ,
	`date_upload` TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP ,
	`link` TEXT NOT NULL ,
	PRIMARY KEY (`id_course`)) ENGINE = InnoDB;



CREATE TABLE `lms_project`.`lesson` (
    `id_lesson` INT NOT NULL AUTO_INCREMENT,
    `id_course` INT NOT NULL,
    `title_lesson` VARCHAR(300) NOT NULL ,
    `date_upload` TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `link_dowload` TEXT NOT NULL ,
	PRIMARY KEY (id_lesson),
    FOREIGN KEY (id_course) REFERENCES course(id_course)
) ENGINE = InnoDB;



CREATE TABLE `lms_project`.`code_example` (
    `id_code_example` INT NOT NULL AUTO_INCREMENT,
    `id_course` INT NOT NULL,
    `title_code_example` VARCHAR(300) NOT NULL ,
    `date_upload` TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `link_dowload` TEXT NOT NULL ,
	PRIMARY KEY (id_code_example),
    FOREIGN KEY (id_course) REFERENCES course(id_course)
) ENGINE = InnoDB;



CREATE TABLE `lms_project`.`documents` (
    `id_documents` INT NOT NULL AUTO_INCREMENT,
    `id_course` INT NOT NULL,
    `title_documents` VARCHAR(300) NOT NULL ,
    `date_upload` TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `link_dowload` TEXT NOT NULL ,
	PRIMARY KEY (id_documents),
    FOREIGN KEY (id_course) REFERENCES course(id_course)
) ENGINE = InnoDB;


/*--------------- Insert course -------------*/

INSERT INTO `admin` (`admin_name`, `email`, `password`) VALUES ('Admin', 'minhvn62@wru.vn', '12345678');


INSERT INTO `course` (`id_course`, `title`, `image`, `date_upload`, `link`) VALUES 
(NULL, '[CSE282] Nhập môn Lập trình KHDL', 'http://www.hoccongnghethongtin.com/pluginfile.php/367/course/overviewfiles/CSE282.png', CURRENT_TIMESTAMP, 'detail_course.php'),
(NULL, '[CSE489] Mạng máy tính', 'http://www.hoccongnghethongtin.com/pluginfile.php/513/course/overviewfiles/CSE489.jpg', CURRENT_TIMESTAMP, 'detail_course.php'),
(NULL, '[CSE391] Nền tảng phát triển Web', 'http://www.hoccongnghethongtin.com/pluginfile.php/26/course/overviewfiles/391.2.jpg', CURRENT_TIMESTAMP, 'detail_course.php'),
(NULL, '[KTZ003] Machine Learning
', 'http://www.hoccongnghethongtin.com/pluginfile.php/497/course/overviewfiles/introduction-to-machine-learning_social.png', CURRENT_TIMESTAMP, 'detail_course.php');


/*----------------- Insert code_example ----------------*/

INSERT INTO `code_example` (`id_course`, `title_code_example`, `date_upload`, `link_dowload`) VALUES 
    ('1', 'Slide 01 - Install PHP XAMPP LAMP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('1', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('1', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('1', 'Slide 03 - Working with FORM in PHP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('1', 'Slide 04 - Regular Expressions File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz');

    INSERT INTO `code_example` (`id_course`, `title_code_example`, `date_upload`, `link_dowload`) VALUES 
    ('2', 'Slide 01 - Install PHP XAMPP LAMP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('2', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('2', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('2', 'Slide 03 - Working with FORM in PHP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('2', 'Slide 04 - Regular Expressions File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz');



    INSERT INTO `code_example` (`id_course`, `title_code_example`, `date_upload`, `link_dowload`) VALUES 
    ('3', 'Slide 01 - Install PHP XAMPP LAMP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('3', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('3', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('3', 'Slide 03 - Working with FORM in PHP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('3', 'Slide 04 - Regular Expressions File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz');

    INSERT INTO `code_example` (`id_course`, `title_code_example`, `date_upload`, `link_dowload`) VALUES 
    ('4', 'Slide 01 - Install PHP XAMPP LAMP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('4', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('4', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('4', 'Slide 03 - Working with FORM in PHP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('4', 'Slide 04 - Regular Expressions File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz');


/*----------------- Insert documents ----------------*/

INSERT INTO `documents` (`id_course`, `title_documents`, `date_upload`, `link_dowload`) VALUES 
    ('1', 'Slide 01 - Install PHP XAMPP LAMP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('1', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('1', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('1', 'Slide 03 - Working with FORM in PHP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('1', 'Slide 04 - Regular Expressions File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz');


    INSERT INTO `documents` (`id_course`, `title_documents`, `date_upload`, `link_dowload`) VALUES 
    ('2', 'Slide 01 - Install PHP XAMPP LAMP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('2', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('2', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('2', 'Slide 03 - Working with FORM in PHP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('2', 'Slide 04 - Regular Expressions File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz');


    INSERT INTO `documents` (`id_course`, `title_documents`, `date_upload`, `link_dowload`) VALUES 
    ('3', 'Slide 01 - Install PHP XAMPP LAMP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('3', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('3', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('3', 'Slide 03 - Working with FORM in PHP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('3', 'Slide 04 - Regular Expressions File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz');

    INSERT INTO `documents` (`id_course`, `title_documents`, `date_upload`, `link_dowload`) VALUES 
    ('4', 'Slide 01 - Install PHP XAMPP LAMP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('4', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('4', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('4', 'Slide 03 - Working with FORM in PHP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('4', 'Slide 04 - Regular Expressions File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz');


/*----------------- Insert lesson ----------------*/

INSERT INTO `lesson` (`id_course`, `title_lesson`, `date_upload`, `link_dowload`) VALUES 
    ('1', 'Slide 01 - Install PHP XAMPP LAMP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('1', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('1', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('1', 'Slide 03 - Working with FORM in PHP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('1', 'Slide 04 - Regular Expressions File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz');


    INSERT INTO `lesson` (`id_course`, `title_lesson`, `date_upload`, `link_dowload`) VALUES 
    ('2', 'Slide 01 - Install PHP XAMPP LAMP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('2', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('2', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('2', 'Slide 03 - Working with FORM in PHP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('2', 'Slide 04 - Regular Expressions File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz');


    INSERT INTO `lesson` (`id_course`, `title_lesson`, `date_upload`, `link_dowload`) VALUES 
    ('3', 'Slide 01 - Install PHP XAMPP LAMP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('3', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('3', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('3', 'Slide 03 - Working with FORM in PHP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('3', 'Slide 04 - Regular Expressions File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz');

    INSERT INTO `lesson` (`id_course`, `title_lesson`, `date_upload`, `link_dowload`) VALUES 
    ('4', 'Slide 01 - Install PHP XAMPP LAMP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('4', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('4', 'Slide 02 - PHP Syntax File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
    ('4', 'Slide 03 - Working with FORM in PHP File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'), 
    ('4', 'Slide 04 - Regular Expressions File', CURRENT_TIMESTAMP, 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz');


