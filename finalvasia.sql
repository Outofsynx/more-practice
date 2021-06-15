-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1:3306
-- Χρόνος δημιουργίας: 07 Φεβ 2020 στις 17:38:22
-- Έκδοση διακομιστή: 5.7.26
-- Έκδοση PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `final`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id_courses` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_disc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_cost` int(3) NOT NULL,
  `id_train` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_courses`),
  UNIQUE KEY `id_train` (`id_train`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `courses`
--

INSERT INTO `courses` (`id_courses`, `c_name`, `c_disc`, `c_cost`, `id_train`) VALUES
(10, 'Python Computers', 'Programming Lesson', 700, NULL),
(11, 'PHP Computers', 'Programming Lesson', 800, NULL),
(12, 'HTML Computers', 'Programming Lesson', 1000, NULL),
(13, 'History of USA', 'General course', 500, NULL),
(14, 'Statistics', 'General course', 600, NULL),
(15, 'General Psychology', 'Psychology major', 800, NULL),
(16, 'Art of soul', 'General Yoga', 600, NULL),
(17, 'Yoga Class', 'General course', 700, NULL),
(18, 'Sociology', 'General course', 800, NULL),
(19, 'Javascript', 'Programming Lesson', 900, NULL);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id_student` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_lastname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_gpa` int(4) NOT NULL,
  `student_country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_birthday` date NOT NULL,
  `student_info` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_student`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `students`
--

INSERT INTO `students` (`id_student`, `student_name`, `student_lastname`, `student_gpa`, `student_country`, `student_birthday`, `student_info`) VALUES
(64, 'Vasiliki', 'Miliou', 100, 'Greece', '1998-07-23', 'Vasia@gmail.com'),
(65, 'Nontas', 'Exarxos', 90, 'Greece', '2002-01-01', 'Nontas@gmail.com'),
(66, 'Giannis', 'Kuprios', 90, 'Cyprus', '1998-06-16', 'Kuprios@gmail.com'),
(67, 'Nina', 'Panoza', 80, 'Greece', '2000-12-14', 'Nina@gmail.com'),
(68, 'Jorje', 'Feigo', 80, 'Spain', '2000-12-14', 'jorje@gmail.com'),
(69, 'Michael', 'Burgos', 70, 'Puerto Rico', '1999-06-16', 'burgos@gmail.com'),
(70, 'Chris', 'Arna', 70, 'Belgium', '1998-07-16', 'arna@gmail.com'),
(71, 'Zisis', 'Roumpos', 80, 'Hungary', '2000-02-16', 'Zisis@gmail.com'),
(72, 'Maria', 'Dedevesi', 100, 'Slovakia', '1998-07-21', 'maria@gmail.com'),
(73, 'Peter', 'Pan', 100, 'Bulgaria', '2002-01-01', 'pan@gmail.com'),
(74, 'Sabrina', 'Spellman', 80, 'United Kingdom', '1999-07-20', 'spellman@gmail.com'),
(75, 'Elvis', 'Infante', 70, 'Mexico', '2002-01-01', 'infante@gmail.com'),
(76, 'Yin', 'Yang', 70, 'Japan', '2002-01-01', 'yang@gmail.com'),
(77, 'Wanda', 'Maximoff', 100, 'United Kingdom', '1999-07-20', 'Wanda@gmail.com'),
(78, 'Vision', 'Stone', 100, 'USA', '2002-01-01', 'vision@gmail.com'),
(80, 'Scott', 'Mccall', 50, 'USA', '1999-02-02', 'mccall@gmail.com'),
(81, 'Derek', 'Hale', 100, 'Russia', '2002-01-01', 'hale@gmail.com'),
(82, 'Malia', 'Hale', 100, 'Ukraine', '1997-07-21', 'malia@gmail.com'),
(83, 'Heath', 'Ledger', 100, 'Australia', '1995-06-14', 'ledger@gmail.com'),
(84, 'Felix', 'Kjellberg', 100, 'Sweden', '1997-06-19', 'pewdiepie@gmail.com');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `take`
--

DROP TABLE IF EXISTS `take`;
CREATE TABLE IF NOT EXISTS `take` (
  `id_st` int(11) NOT NULL,
  `id_courses` int(11) NOT NULL,
  PRIMARY KEY (`id_st`,`id_courses`),
  KEY `id_courses` (`id_courses`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `trainers`
--

DROP TABLE IF EXISTS `trainers`;
CREATE TABLE IF NOT EXISTS `trainers` (
  `id_trainers` int(11) NOT NULL AUTO_INCREMENT,
  `tr_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tr_lastname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tr_year` date NOT NULL,
  `tr_iq` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tr_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_trainers`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `trainers`
--

INSERT INTO `trainers` (`id_trainers`, `tr_name`, `tr_lastname`, `tr_year`, `tr_iq`, `tr_email`) VALUES
(18, 'George', 'Prokopakis', '2009-04-13', '100', 'prok@gmail.com'),
(23, 'Ilias', 'Gontzes', '1999-06-15', '100', 'ilias@gmail.com'),
(25, 'Katerina', 'Karageorgou', '2006-03-08', '80', 'katia@gmail.com'),
(29, 'Dimitris', 'Miliarakis', '2018-01-01', '100', 'miliarakis@gmail.com'),
(30, 'Vaios', 'Fefes', '2016-06-14', '60', 'vaios@gmail.com'),
(32, 'Vasilis', 'Panozas', '2017-01-12', '80', 'panozas@gmail.com'),
(33, 'Lena', 'Kapetanaki', '2019-02-28', '80', 'lena@gmail.com'),
(34, 'Fanis', 'Petroxilis', '2019-10-08', '100', 'fanis@gmail.com'),
(35, 'Mixalis', 'Sigalas', '2017-06-06', '100', 'mixalis@gmail.com'),
(38, 'George', 'Kourakos', '2018-01-15', '80', 'kourakos@gmail.com'),
(39, 'Rebbeca', 'Kourakou', '2017-02-07', '100', 'kourakou@gmail.com'),
(40, 'Kostas', 'Kostoglou', '2017-02-07', '70', 'kostas@gmail.com'),
(41, 'Kostas', 'Arapoglou', '2016-05-30', '100', 'arapoglou@gmail.com'),
(42, 'Nikos', 'Papanikolas', '2017-05-24', '60', 'nikos@gmail.com'),
(43, 'Kyveli', 'Diareme', '2013-07-16', '100', 'diareme@gmail.com');

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id_train`) REFERENCES `trainers` (`id_trainers`);

--
-- Περιορισμοί για πίνακα `take`
--
ALTER TABLE `take`
  ADD CONSTRAINT `take_ibfk_1` FOREIGN KEY (`id_st`) REFERENCES `students` (`id_student`),
  ADD CONSTRAINT `take_ibfk_2` FOREIGN KEY (`id_courses`) REFERENCES `courses` (`id_courses`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
