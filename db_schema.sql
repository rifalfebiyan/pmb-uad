CREATE DATABASE IF NOT EXISTS `pmb-uad`;

USE `pmb-uad`;

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data Dummy (Password for '12345' is '827ccb0eea8a706c4c34a16891f84e7b')
INSERT INTO `login` (`Email`, `Password`) VALUES
('test@uad.ac.id', MD5('12345')),
('pai@uad.ac.id', MD5('nasigoreng'));
