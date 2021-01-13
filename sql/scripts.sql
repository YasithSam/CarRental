CREATE TABLE `car_rental`.`admin` ( `id` INT(10) NOT NULL AUTO_INCREMENT ,  `UserName` VARCHAR(20) NOT NULL ,  `Password` VARCHAR(10) NOT NULL ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB;
CREATE TABLE `users` ( `id` int(10) NOT NULL, `FullName` varchar(120) DEFAULT NULL, `EmailId` varchar(100) DEFAULT NULL, `Password` varchar(100) DEFAULT NULL, `ContactNo` char(11) DEFAULT NULL, `dob` varchar(100) DEFAULT NULL, `Address` varchar(255) DEFAULT NULL, `City` varchar(100) DEFAULT NULL, `RegDate` timestamp NULL DEFAULT current_timestamp(), `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp() ) ENGINE=InnoDB DEFAULT CHARSET=latin1
ALTER TABLE `users` DROP PRIMARY KEY, ADD PRIMARY KEY( `id`, `EmailId`);
ALTER TABLE `users` DROP `RegDate`;
ALTER TABLE `users` DROP `UpdationDate`;