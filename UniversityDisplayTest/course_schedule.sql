-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Erstellungszeit: 03. Mai 2023 um 12:39
-- Server-Version: 5.7.39
-- PHP-Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `UniversityDisplay`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `course_schedule`
--

CREATE TABLE `course_schedule` (
  `course_of_study` varchar(50) DEFAULT NULL,
  `course_name` varchar(50) DEFAULT NULL,
  `room_number` varchar(10) DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `course_schedule`
--

INSERT INTO `course_schedule` (`course_of_study`, `course_name`, `room_number`, `start_time`, `end_time`) VALUES
('Wirtschaftsinformatik', 'Mathematik 1A', '101', '09:00:00', '10:30:00'),
('Wirtschaftsinformatik', 'Mathematik 1B', '201', '11:00:00', '12:30:00'),
('Wirtschaftsinformatik', 'Programmieren', '301', '14:00:00', '15:30:00'),
('Maschinenbau', 'Technische Mechanik 1', '102', '10:00:00', '11:30:00'),
('Maschinenbau', 'Konstruktion 1', '202', '13:00:00', '14:30:00'),
('Maschinenbau', 'Werkstofftechnik 1', '302', '15:00:00', '16:30:00'),
('Elektrotechnik', 'Informatik 1', '103', '08:30:00', '10:00:00'),
('Elektrotechnik', 'Elektrotechnik 1', '203', '11:00:00', '12:30:00'),
('Elektrotechnik', 'Mathematik 1', '303', '14:00:00', '15:30:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
