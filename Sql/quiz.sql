-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2015 at 07:35 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `test`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `test_multi_sets`()
    DETERMINISTIC
begin
        select user() as first_col;
        select user() as first_col, now() as second_col;
        select user() as first_col, now() as second_col, now() as third_col;
        end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `vkt_quiz`
--

CREATE TABLE IF NOT EXISTS `vkt_quiz` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `q` text NOT NULL,
  `question` text NOT NULL,
  `opt1` text NOT NULL,
  `opt2` text NOT NULL,
  `opt3` text NOT NULL,
  `opt4` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `vkt_quiz`
--

INSERT INTO `vkt_quiz` (`id`, `q`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`) VALUES
(1, 'Ram stands for:', 'Ram stands for :', 'Random Access Memory', 'Random Accord Memory', 'Random Accessory Memory', 'A and B both', 'Random Access Memory'),
(2, 'Who is known as Father of CPU :', 'Who is known as Father of CPU :', 'Lady Ada', 'Charles Babbage', 'Steve and Microsoft', 'A and B both', 'Charles Babbage'),
(3, 'All Files stored in :', 'All Files stored in :', 'Hard Disk', 'Ram', 'Rom', 'A and B both', 'Hard Disk'),
(4, 'Printer is a :', 'Printer is a :', 'Output Device', 'Input Device', 'Processing Device', 'A and B both', 'Output Device'),
(5, 'The difference between people with access to computers and the Internet and those without this access is known as the: :', 'The difference between people with access to computers and the Internet and those without this access is known as the: :', 'digital divide.', 'Internet Devide', 'web devide', 'A and B both', 'digital divide.'),
(6, ' Servers are computers that provide resources to other computers connected to a:', ' Servers are computers that provide resources to other computers connected to a :', 'mainframe', 'network', 'super computer', 'A and B both', 'netowork'),
(7, 'Word processing, spreadsheet, and photo-editing are examples of:', 'Word processing, spreadsheet, and photo-editing are examples of:', 'OS sof', 'application software.', 'System Sof', 'A and B both', 'application software.'),
(8, 'All of the following are examples of input devices EXCEPT a: ', 'All of the following are examples of input devices EXCEPT a: ', 'scan', 'mouse', 'printer', 'A and B both', 'printer'),
(9, 'CPU is a :', 'CPU is a :', 'Central Processing Unit', 'Civilized Prepared Unit', 'Core Prossing Unit', 'A and B both', 'Central Processing Unit'),
(10, 'Ram is :', ' Ram is :', 'Random Storage', 'Primary storage', 'Secondary Storage', 'A and B both', 'Primary storage');
