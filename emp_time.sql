-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 11:27 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp_time`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `t_time` time NOT NULL,
  `isactive` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `u_id`, `usertype`, `email`, `date`, `t_time`, `isactive`) VALUES
(31, 3, 'Admin', 'khushi@gmail.com', '2021-06-07', '09:00:00', 1),
(35, 1, 'HR', 'abc@gmail.com', '2021-06-07', '09:00:00', 1),
(36, 4, 'Manager', 'man1@gmail.com', '2021-06-07', '09:00:00', 1),
(37, 7, 'Manager', 'man2@gmail.com', '2021-06-07', '09:00:00', 1),
(38, 2, 'Employee', 'emp4@gmail.com', '2021-06-07', '09:00:00', 1),
(39, 5, 'Employee', 'emp5@gmail.com', '2021-06-07', '09:00:00', 1),
(40, 6, 'Employee', 'emp6@gmail.com', '2021-06-07', '09:00:00', 1),
(41, 8, 'Employee', 'emp1@gmail.com', '2021-06-07', '09:00:00', 1),
(42, 9, 'Employee', 'emp2@gmail.com', '2021-06-07', '09:00:00', 1),
(43, 10, 'Employee', 'emp3@gmail.com', '2021-06-07', '09:00:00', 1),
(44, 3, 'Admin', 'khushi@gmail.com', '2021-06-08', '09:00:00', 1),
(45, 1, 'HR', 'abc@gmail.com', '2021-06-08', '09:00:00', 1),
(46, 4, 'Manager', 'man1@gmail.com', '2021-06-08', '09:00:00', 1),
(47, 7, 'Manager', 'man2@gmail.com', '2021-06-08', '09:00:00', 1),
(48, 2, 'Employee', 'emp4@gmail.com', '2021-06-08', '09:00:00', 1),
(49, 5, 'Employee', 'emp5@gmail.com', '2021-06-08', '09:00:00', 1),
(50, 6, 'Employee', 'emp6@gmail.com', '2021-06-08', '09:00:00', 1),
(51, 8, 'Employee', 'emp1@gmail.com', '2021-06-08', '09:00:00', 1),
(52, 9, 'Employee', 'emp2@gmail.com', '2021-06-08', '09:00:00', 1),
(53, 10, 'Employee', 'emp3@gmail.com', '2021-06-08', '09:00:00', 1),
(54, 3, 'Admin', 'khushi@gmail.com', '2021-06-09', '09:00:00', 1),
(55, 1, 'HR', 'abc@gmail.com', '2021-06-09', '09:00:00', 1),
(56, 4, 'Manager', 'man1@gmail.com', '2021-06-09', '09:00:00', 1),
(57, 7, 'Manager', 'man2@gmail.com', '2021-06-09', '09:00:00', 1),
(58, 2, 'Employee', 'emp4@gmail.com', '2021-06-09', '09:00:00', 1),
(59, 5, 'Employee', 'emp5@gmail.com', '2021-06-09', '09:00:00', 1),
(60, 6, 'Employee', 'emp6@gmail.com', '2021-06-09', '09:00:00', 1),
(61, 8, 'Employee', 'emp1@gmail.com', '2021-06-09', '09:00:00', 1),
(62, 9, 'Employee', 'emp2@gmail.com', '2021-06-09', '09:00:00', 1),
(63, 10, 'Employee', 'emp3@gmail.com', '2021-06-09', '09:00:00', 1),
(64, 3, 'Admin', 'khushi@gmail.com', '2021-06-10', '09:00:00', 1),
(65, 1, 'HR', 'abc@gmail.com', '2021-06-10', '09:00:00', 1),
(66, 4, 'Manager', 'man1@gmail.com', '2021-06-10', '09:00:00', 1),
(67, 7, 'Manager', 'man2@gmail.com', '2021-06-10', '09:00:00', 1),
(68, 2, 'Employee', 'emp4@gmail.com', '2021-06-10', '09:00:00', 1),
(69, 5, 'Employee', 'emp5@gmail.com', '2021-06-10', '09:00:00', 1),
(70, 6, 'Employee', 'emp6@gmail.com', '2021-06-10', '09:00:00', 1),
(71, 8, 'Employee', 'emp1@gmail.com', '2021-06-10', '09:00:00', 1),
(72, 9, 'Employee', 'emp2@gmail.com', '2021-06-10', '09:00:00', 1),
(73, 10, 'Employee', 'emp3@gmail.com', '2021-06-10', '09:00:00', 1),
(74, 3, 'Admin', 'khushi@gmail.com', '2021-06-11', '09:00:00', 1),
(75, 1, 'HR', 'abc@gmail.com', '2021-06-11', '09:00:00', 1),
(76, 4, 'Manager', 'man1@gmail.com', '2021-06-11', '09:00:00', 1),
(77, 7, 'Manager', 'man2@gmail.com', '2021-06-11', '09:00:00', 1),
(78, 2, 'Employee', 'emp4@gmail.com', '2021-06-11', '09:00:00', 1),
(79, 5, 'Employee', 'emp5@gmail.com', '2021-06-11', '09:00:00', 1),
(80, 6, 'Employee', 'emp6@gmail.com', '2021-06-11', '09:00:00', 1),
(81, 8, 'Employee', 'emp1@gmail.com', '2021-06-11', '09:00:00', 1),
(82, 9, 'Employee', 'emp2@gmail.com', '2021-06-11', '09:00:00', 1),
(83, 10, 'Employee', 'emp3@gmail.com', '2021-06-11', '09:00:00', 1),
(104, 3, 'Admin', 'khushi@gmail.com', '2021-06-14', '09:00:00', 1),
(105, 1, 'HR', 'abc@gmail.com', '2021-06-14', '09:00:00', 1),
(106, 4, 'Manager', 'man1@gmail.com', '2021-06-14', '09:00:00', 1),
(107, 7, 'Manager', 'man2@gmail.com', '2021-06-14', '09:00:00', 1),
(108, 2, 'Employee', 'emp4@gmail.com', '2021-06-14', '09:00:00', 1),
(109, 5, 'Employee', 'emp5@gmail.com', '2021-06-14', '09:00:00', 1),
(110, 6, 'Employee', 'emp6@gmail.com', '2021-06-14', '09:00:00', 1),
(111, 8, 'Employee', 'emp1@gmail.com', '2021-06-14', '09:00:00', 1),
(112, 9, 'Employee', 'emp2@gmail.com', '2021-06-14', '09:00:00', 1),
(113, 10, 'Employee', 'emp3@gmail.com', '2021-06-14', '09:00:00', 1),
(114, 3, 'Admin', 'khushi@gmail.com', '2021-06-01', '09:00:00', 1),
(115, 1, 'HR', 'abc@gmail.com', '2021-06-01', '09:00:00', 1),
(116, 4, 'Manager', 'man1@gmail.com', '2021-06-01', '09:00:00', 1),
(117, 7, 'Manager', 'man2@gmail.com', '2021-06-01', '09:00:00', 1),
(118, 2, 'Employee', 'emp4@gmail.com', '2021-06-01', '09:00:00', 1),
(119, 5, 'Employee', 'emp5@gmail.com', '2021-06-01', '09:00:00', 1),
(120, 6, 'Employee', 'emp6@gmail.com', '2021-06-01', '09:00:00', 1),
(121, 8, 'Employee', 'emp1@gmail.com', '2021-06-01', '09:00:00', 1),
(122, 9, 'Employee', 'emp2@gmail.com', '2021-06-01', '09:00:00', 1),
(123, 10, 'Employee', 'emp3@gmail.com', '2021-06-01', '09:00:00', 1),
(124, 3, 'Admin', 'khushi@gmail.com', '2021-06-02', '09:00:00', 1),
(125, 1, 'HR', 'abc@gmail.com', '2021-06-02', '09:00:00', 1),
(126, 4, 'Manager', 'man1@gmail.com', '2021-06-02', '09:00:00', 1),
(127, 7, 'Manager', 'man2@gmail.com', '2021-06-02', '09:00:00', 1),
(128, 2, 'Employee', 'emp4@gmail.com', '2021-06-02', '09:00:00', 1),
(129, 5, 'Employee', 'emp5@gmail.com', '2021-06-02', '09:00:00', 1),
(130, 6, 'Employee', 'emp6@gmail.com', '2021-06-02', '09:00:00', 1),
(131, 8, 'Employee', 'emp1@gmail.com', '2021-06-02', '09:00:00', 1),
(132, 9, 'Employee', 'emp2@gmail.com', '2021-06-02', '09:00:00', 1),
(133, 10, 'Employee', 'emp3@gmail.com', '2021-06-02', '09:00:00', 1),
(134, 3, 'Admin', 'khushi@gmail.com', '2021-06-03', '09:00:00', 1),
(135, 1, 'HR', 'abc@gmail.com', '2021-06-03', '09:00:00', 1),
(136, 4, 'Manager', 'man1@gmail.com', '2021-06-03', '09:00:00', 1),
(137, 7, 'Manager', 'man2@gmail.com', '2021-06-03', '09:00:00', 1),
(138, 2, 'Employee', 'emp4@gmail.com', '2021-06-03', '09:00:00', 1),
(139, 5, 'Employee', 'emp5@gmail.com', '2021-06-03', '09:00:00', 1),
(140, 6, 'Employee', 'emp6@gmail.com', '2021-06-03', '09:00:00', 1),
(141, 8, 'Employee', 'emp1@gmail.com', '2021-06-03', '09:00:00', 1),
(142, 9, 'Employee', 'emp2@gmail.com', '2021-06-03', '09:00:00', 1),
(143, 10, 'Employee', 'emp3@gmail.com', '2021-06-03', '09:00:00', 1),
(144, 3, 'Admin', 'khushi@gmail.com', '2021-06-04', '09:00:00', 1),
(145, 1, 'HR', 'abc@gmail.com', '2021-06-04', '09:00:00', 1),
(146, 4, 'Manager', 'man1@gmail.com', '2021-06-04', '09:00:00', 1),
(147, 7, 'Manager', 'man2@gmail.com', '2021-06-04', '09:00:00', 1),
(148, 2, 'Employee', 'emp4@gmail.com', '2021-06-04', '09:00:00', 1),
(149, 5, 'Employee', 'emp5@gmail.com', '2021-06-04', '09:00:00', 1),
(150, 6, 'Employee', 'emp6@gmail.com', '2021-06-04', '09:00:00', 1),
(151, 8, 'Employee', 'emp1@gmail.com', '2021-06-04', '09:00:00', 1),
(152, 9, 'Employee', 'emp2@gmail.com', '2021-06-04', '09:00:00', 1),
(153, 10, 'Employee', 'emp3@gmail.com', '2021-06-04', '09:00:00', 1),
(164, 3, 'Admin', 'khushi@gmail.com', '2021-06-15', '09:00:00', 1),
(165, 1, 'HR', 'abc@gmail.com', '2021-06-15', '09:00:00', 1),
(166, 4, 'Manager', 'man1@gmail.com', '2021-06-15', '09:00:00', 1),
(167, 7, 'Manager', 'man2@gmail.com', '2021-06-15', '09:00:00', 1),
(168, 2, 'Employee', 'emp4@gmail.com', '2021-06-15', '09:00:00', 1),
(169, 5, 'Employee', 'emp5@gmail.com', '2021-06-15', '09:00:00', 1),
(170, 6, 'Employee', 'emp6@gmail.com', '2021-06-15', '09:00:00', 1),
(171, 8, 'Employee', 'emp1@gmail.com', '2021-06-15', '09:00:00', 1),
(172, 9, 'Employee', 'emp2@gmail.com', '2021-06-15', '09:00:00', 1),
(173, 10, 'Employee', 'emp3@gmail.com', '2021-06-15', '09:00:00', 1),
(174, 3, 'Admin', 'khushi@gmail.com', '2021-06-16', '09:00:00', 1),
(175, 1, 'HR', 'abc@gmail.com', '2021-06-16', '09:00:00', 1),
(176, 4, 'Manager', 'man1@gmail.com', '2021-06-16', '09:00:00', 1),
(177, 7, 'Manager', 'man2@gmail.com', '2021-06-16', '09:00:00', 1),
(178, 2, 'Employee', 'emp4@gmail.com', '2021-06-16', '09:00:00', 1),
(179, 5, 'Employee', 'emp5@gmail.com', '2021-06-16', '09:00:00', 1),
(180, 6, 'Employee', 'emp6@gmail.com', '2021-06-16', '09:00:00', 1),
(181, 8, 'Employee', 'emp1@gmail.com', '2021-06-16', '09:00:00', 1),
(182, 9, 'Employee', 'emp2@gmail.com', '2021-06-16', '09:00:00', 1),
(183, 10, 'Employee', 'emp3@gmail.com', '2021-06-16', '09:00:00', 1),
(184, 3, 'Admin', 'khushi@gmail.com', '2021-06-17', '09:00:00', 1),
(185, 1, 'HR', 'abc@gmail.com', '2021-06-17', '09:00:00', 1),
(186, 4, 'Manager', 'man1@gmail.com', '2021-06-17', '09:00:00', 1),
(187, 7, 'Manager', 'man2@gmail.com', '2021-06-17', '09:00:00', 1),
(188, 2, 'Employee', 'emp4@gmail.com', '2021-06-17', '09:00:00', 1),
(189, 5, 'Employee', 'emp5@gmail.com', '2021-06-17', '09:00:00', 1),
(190, 6, 'Employee', 'emp6@gmail.com', '2021-06-17', '09:00:00', 1),
(191, 8, 'Employee', 'emp1@gmail.com', '2021-06-17', '09:00:00', 1),
(192, 9, 'Employee', 'emp2@gmail.com', '2021-06-17', '09:00:00', 1),
(193, 10, 'Employee', 'emp3@gmail.com', '2021-06-17', '09:00:00', 1),
(194, 3, 'Admin', 'khushi@gmail.com', '2021-06-18', '09:00:00', 1),
(195, 1, 'HR', 'abc@gmail.com', '2021-06-18', '09:00:00', 1),
(196, 4, 'Manager', 'man1@gmail.com', '2021-06-18', '09:00:00', 1),
(197, 7, 'Manager', 'man2@gmail.com', '2021-06-18', '09:00:00', 1),
(198, 2, 'Employee', 'emp4@gmail.com', '2021-06-18', '09:00:00', 1),
(199, 5, 'Employee', 'emp5@gmail.com', '2021-06-18', '09:00:00', 1),
(200, 6, 'Employee', 'emp6@gmail.com', '2021-06-18', '09:00:00', 1),
(201, 8, 'Employee', 'emp1@gmail.com', '2021-06-18', '09:00:00', 1),
(202, 9, 'Employee', 'emp2@gmail.com', '2021-06-18', '09:00:00', 1),
(203, 10, 'Employee', 'emp3@gmail.com', '2021-06-18', '09:00:00', 1),
(204, 3, 'Admin', 'khushi@gmail.com', '2021-06-21', '09:00:00', 1),
(205, 1, 'HR', 'abc@gmail.com', '2021-06-21', '09:00:00', 1),
(206, 4, 'Manager', 'man1@gmail.com', '2021-06-21', '09:00:00', 1),
(207, 7, 'Manager', 'man2@gmail.com', '2021-06-21', '09:00:00', 1),
(208, 2, 'Employee', 'emp4@gmail.com', '2021-06-21', '09:00:00', 1),
(209, 5, 'Employee', 'emp5@gmail.com', '2021-06-21', '09:00:00', 1),
(210, 6, 'Employee', 'emp6@gmail.com', '2021-06-21', '09:00:00', 1),
(211, 8, 'Employee', 'emp1@gmail.com', '2021-06-21', '09:00:00', 1),
(212, 9, 'Employee', 'emp2@gmail.com', '2021-06-21', '09:00:00', 1),
(213, 10, 'Employee', 'emp3@gmail.com', '2021-06-21', '09:00:00', 1),
(214, 3, 'Admin', 'khushi@gmail.com', '2021-06-22', '09:00:00', 1),
(215, 1, 'HR', 'abc@gmail.com', '2021-06-22', '09:00:00', 1),
(216, 4, 'Manager', 'man1@gmail.com', '2021-06-22', '09:00:00', 1),
(217, 7, 'Manager', 'man2@gmail.com', '2021-06-22', '09:00:00', 1),
(218, 2, 'Employee', 'emp4@gmail.com', '2021-06-22', '09:00:00', 1),
(219, 5, 'Employee', 'emp5@gmail.com', '2021-06-22', '09:00:00', 1),
(220, 6, 'Employee', 'emp6@gmail.com', '2021-06-22', '09:00:00', 1),
(221, 8, 'Employee', 'emp1@gmail.com', '2021-06-22', '09:00:00', 1),
(222, 9, 'Employee', 'emp2@gmail.com', '2021-06-22', '09:00:00', 1),
(223, 10, 'Employee', 'emp3@gmail.com', '2021-06-22', '09:00:00', 1),
(224, 3, 'Admin', 'khushi@gmail.com', '2021-06-23', '09:00:00', 1),
(225, 1, 'HR', 'abc@gmail.com', '2021-06-23', '09:00:00', 1),
(226, 4, 'Manager', 'man1@gmail.com', '2021-06-23', '09:00:00', 1),
(227, 7, 'Manager', 'man2@gmail.com', '2021-06-23', '09:00:00', 1),
(228, 2, 'Employee', 'emp4@gmail.com', '2021-06-23', '09:00:00', 1),
(229, 5, 'Employee', 'emp5@gmail.com', '2021-06-23', '09:00:00', 1),
(230, 6, 'Employee', 'emp6@gmail.com', '2021-06-23', '09:00:00', 1),
(231, 8, 'Employee', 'emp1@gmail.com', '2021-06-23', '09:00:00', 1),
(232, 9, 'Employee', 'emp2@gmail.com', '2021-06-23', '09:00:00', 1),
(233, 10, 'Employee', 'emp3@gmail.com', '2021-06-23', '09:00:00', 1),
(234, 3, 'Admin', 'khushi@gmail.com', '2021-06-24', '09:00:00', 1),
(235, 1, 'HR', 'abc@gmail.com', '2021-06-24', '09:00:00', 1),
(236, 4, 'Manager', 'man1@gmail.com', '2021-06-24', '09:00:00', 1),
(237, 7, 'Manager', 'man2@gmail.com', '2021-06-24', '09:00:00', 1),
(238, 2, 'Employee', 'emp4@gmail.com', '2021-06-24', '09:00:00', 1),
(239, 5, 'Employee', 'emp5@gmail.com', '2021-06-24', '09:00:00', 1),
(240, 6, 'Employee', 'emp6@gmail.com', '2021-06-24', '09:00:00', 1),
(241, 8, 'Employee', 'emp1@gmail.com', '2021-06-24', '09:00:00', 1),
(242, 9, 'Employee', 'emp2@gmail.com', '2021-06-24', '09:00:00', 1),
(243, 10, 'Employee', 'emp3@gmail.com', '2021-06-24', '09:00:00', 1),
(244, 3, 'Admin', 'khushi@gmail.com', '2021-06-25', '09:00:00', 1),
(245, 1, 'HR', 'abc@gmail.com', '2021-06-25', '09:00:00', 1),
(246, 4, 'Manager', 'man1@gmail.com', '2021-06-25', '09:00:00', 1),
(247, 7, 'Manager', 'man2@gmail.com', '2021-06-25', '09:00:00', 1),
(248, 2, 'Employee', 'emp4@gmail.com', '2021-06-25', '09:00:00', 1),
(249, 5, 'Employee', 'emp5@gmail.com', '2021-06-25', '09:00:00', 1),
(250, 6, 'Employee', 'emp6@gmail.com', '2021-06-25', '09:00:00', 1),
(251, 8, 'Employee', 'emp1@gmail.com', '2021-06-25', '09:00:00', 1),
(252, 9, 'Employee', 'emp2@gmail.com', '2021-06-25', '09:00:00', 1),
(253, 10, 'Employee', 'emp3@gmail.com', '2021-06-25', '09:00:00', 1),
(254, 3, 'Admin', 'khushi@gmail.com', '2021-06-28', '09:00:00', 1),
(255, 1, 'HR', 'abc@gmail.com', '2021-06-28', '09:00:00', 1),
(256, 4, 'Manager', 'man1@gmail.com', '2021-06-28', '09:00:00', 1),
(257, 7, 'Manager', 'man2@gmail.com', '2021-06-28', '09:00:00', 1),
(258, 2, 'Employee', 'emp4@gmail.com', '2021-06-28', '09:00:00', 1),
(259, 5, 'Employee', 'emp5@gmail.com', '2021-06-28', '09:00:00', 1),
(260, 6, 'Employee', 'emp6@gmail.com', '2021-06-28', '09:00:00', 1),
(261, 8, 'Employee', 'emp1@gmail.com', '2021-06-28', '09:00:00', 1),
(262, 9, 'Employee', 'emp2@gmail.com', '2021-06-28', '09:00:00', 1),
(263, 10, 'Employee', 'emp3@gmail.com', '2021-06-28', '09:00:00', 1),
(264, 3, 'Admin', 'khushi@gmail.com', '2021-06-29', '09:00:00', 1),
(265, 1, 'HR', 'abc@gmail.com', '2021-06-29', '09:00:00', 1),
(266, 4, 'Manager', 'man1@gmail.com', '2021-06-29', '09:00:00', 1),
(267, 7, 'Manager', 'man2@gmail.com', '2021-06-29', '09:00:00', 1),
(268, 2, 'Employee', 'emp4@gmail.com', '2021-06-29', '09:00:00', 1),
(269, 5, 'Employee', 'emp5@gmail.com', '2021-06-29', '09:00:00', 1),
(270, 6, 'Employee', 'emp6@gmail.com', '2021-06-29', '09:00:00', 1),
(271, 8, 'Employee', 'emp1@gmail.com', '2021-06-29', '09:00:00', 1),
(272, 9, 'Employee', 'emp2@gmail.com', '2021-06-29', '09:00:00', 1),
(273, 10, 'Employee', 'emp3@gmail.com', '2021-06-29', '09:00:00', 1),
(274, 3, 'Admin', 'khushi@gmail.com', '2021-06-30', '09:00:00', 1),
(275, 1, 'HR', 'abc@gmail.com', '2021-06-30', '09:00:00', 1),
(276, 4, 'Manager', 'man1@gmail.com', '2021-06-30', '09:00:00', 1),
(277, 7, 'Manager', 'man2@gmail.com', '2021-06-30', '05:00:00', 1),
(278, 2, 'Employee', 'emp4@gmail.com', '2021-06-30', '09:00:00', 1),
(279, 5, 'Employee', 'emp5@gmail.com', '2021-06-30', '09:00:00', 1),
(280, 6, 'Employee', 'emp6@gmail.com', '2021-06-30', '05:00:00', 1),
(281, 8, 'Employee', 'emp1@gmail.com', '2021-06-30', '09:00:00', 1),
(282, 9, 'Employee', 'emp2@gmail.com', '2021-06-30', '09:00:00', 1),
(283, 10, 'Employee', 'emp3@gmail.com', '2021-06-30', '09:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `m_id`, `u_id`) VALUES
(1, 4, 2),
(2, 4, 5),
(3, 4, 6),
(4, 7, 8),
(5, 7, 9),
(6, 7, 10);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `month` varchar(20) NOT NULL,
  `days` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `c_salary` float NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `salary_calc`
--

CREATE TABLE `salary_calc` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `month` varchar(20) NOT NULL,
  `days` int(11) NOT NULL,
  `c_salary` float NOT NULL,
  `salary` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isactive` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mno` int(11) NOT NULL,
  `password` varchar(15) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `usertype`, `uname`, `email`, `mno`, `password`, `salary`) VALUES
(1, 'abc', 'HR', 'abc', 'abc@gmail.com', 1231231231, 'Abc@1234', 20000),
(2, 'emp4', 'Employee', 'xyz', 'mahek@gmail.com', 1231231231, 'Mahek@1234', 50000),
(3, 'khushi', 'Admin', 'khushi', 'khushi@gmail.com', 1231231231, 'Khushi@1234', 0),
(4, 'man1', 'Manager', 'man1', 'man1@gmail.com', 1231231231, 'Man1@1234', 70000),
(5, 'emp5', 'Employee', 'asheeti', 'asheeti@gmail.com', 1231231231, 'Asheeti@1234', 50000),
(6, 'emp6', 'Employee', 'darshee', 'darshee@gmail.com', 1231231231, 'Darshee@1234', 50000),
(7, 'man2', 'Manager', 'man2', 'man2@gmail.com', 1231231231, 'Man2@1234', 70000),
(8, 'emp1', 'Employee', 'emp1', 'emp1@gmail.com', 1231231231, 'Emp1@1234', 50000),
(9, 'emp2', 'Employee', 'emp2', 'emp2@gmail.com', 1231231231, 'Emp2@1234', 50000),
(10, 'emp3', 'Employee', 'emp3', 'emp3@gmail.com', 1231231231, 'Emp3@1234', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `user_time`
--

CREATE TABLE `user_time` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` date DEFAULT NULL,
  `in_time` time DEFAULT NULL,
  `out_time` time DEFAULT NULL,
  `total_time` time NOT NULL,
  `isactive` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_time`
--

INSERT INTO `user_time` (`id`, `u_id`, `usertype`, `email`, `date`, `in_time`, `out_time`, `total_time`, `isactive`) VALUES
(161, 3, 'Admin', 'khushi@gmail.com', '2021-06-06', '09:00:00', '13:00:00', '04:00:00', 1),
(162, 1, 'HR', 'abc@gmail.com', '2021-06-06', '09:00:00', '13:00:00', '04:00:00', 1),
(163, 4, 'Manager', 'man1@gmail.com', '2021-06-06', '09:00:00', '13:00:00', '04:00:00', 1),
(164, 7, 'Manager', 'man2@gmail.com', '2021-06-06', '09:00:00', '13:00:00', '04:00:00', 1),
(165, 2, 'Employee', 'emp4@gmail.com', '2021-06-06', '09:00:00', '13:00:00', '04:00:00', 1),
(166, 5, 'Employee', 'emp5@gmail.com', '2021-06-06', '09:00:00', '13:00:00', '04:00:00', 1),
(168, 6, 'Employee', 'emp6@gmail.com', '2021-06-06', '09:00:00', '13:00:00', '04:00:00', 1),
(169, 8, 'Employee', 'emp1@gmail.com', '2021-06-06', '09:00:00', '13:00:00', '04:00:00', 1),
(170, 9, 'Employee', 'emp2@gmail.com', '2021-06-06', '09:00:00', '13:00:00', '04:00:00', 1),
(171, 10, 'Employee', 'emp3@gmail.com', '2021-06-06', '09:00:00', '13:00:00', '04:00:00', 1),
(172, 3, 'Admin', 'khushi@gmail.com', '2021-06-06', '13:30:00', '18:30:00', '05:00:00', 1),
(173, 1, 'HR', 'abc@gmail.com', '2021-06-06', '13:30:00', '18:30:00', '05:00:00', 1),
(174, 4, 'Manager', 'man1@gmail.com', '2021-06-06', '13:30:00', '18:30:00', '05:00:00', 1),
(175, 7, 'Manager', 'man2gmail.com', '2021-06-06', '13:30:00', '18:30:00', '05:00:00', 1),
(176, 2, 'Employee', 'emp4@gmail.com', '2021-06-06', '13:30:00', '18:30:00', '05:00:00', 1),
(177, 5, 'Employee', 'emp5@gmail.com', '2021-06-06', '13:30:00', '18:30:00', '05:00:00', 1),
(178, 6, 'Employee', 'emp6@gmail.com', '2021-06-06', '13:30:00', '18:30:00', '05:00:00', 1),
(179, 8, 'Employee', 'emp1@gmail.com', '2021-06-06', '13:30:00', '18:30:00', '05:00:00', 1),
(180, 9, 'Employee', 'emp2@gmail.com', '2021-06-06', '13:30:00', '18:30:00', '05:00:00', 1),
(181, 10, 'Employee', 'emp3@gmail.com', '2021-06-06', '13:30:00', '18:30:00', '05:00:00', 1),
(182, 3, 'Admin', 'khushi@gmail.com', '2021-06-07', '09:00:00', '13:00:00', '04:00:00', 1),
(183, 4, 'Manager', 'man1@gmail.com', '2021-06-07', '09:00:00', '13:00:00', '04:00:00', 1),
(184, 7, 'Manager', 'man2@gmail.com', '2021-06-07', '09:00:00', '13:00:00', '04:00:00', 1),
(185, 1, 'HR', 'abc@gmail.com', '2021-06-07', '09:00:00', '13:00:00', '04:00:00', 1),
(186, 2, 'Employee', 'emp4@gmail.com', '2021-06-07', '09:00:00', '13:00:00', '04:00:00', 1),
(187, 5, 'Employee', 'emp5@gmail.com', '2021-06-07', '09:00:00', '13:00:00', '04:00:00', 1),
(188, 6, 'Employee', 'emp6@gmail.com', '2021-06-07', '09:00:00', '13:00:00', '04:00:00', 1),
(189, 8, 'Employee', 'emp1@gmail.com', '2021-06-07', '09:00:00', '13:00:00', '04:00:00', 1),
(190, 9, 'Employee', 'emp2@gmail.com', '2021-06-07', '09:00:00', '13:00:00', '04:00:00', 1),
(191, 10, 'Employee', 'emp3@gmail.com', '2021-06-07', '09:00:00', '13:00:00', '04:00:00', 1),
(192, 3, 'Admin', 'khushi@gmail.com', '2021-06-07', '13:30:00', '06:30:00', '05:00:00', 1),
(193, 1, 'HR', 'abc@gmail.com', '2021-06-07', '13:30:00', '06:30:00', '05:00:00', 1),
(194, 4, 'Manager', 'man1@gmail.com', '2021-06-07', '13:30:00', '06:30:00', '05:00:00', 1),
(195, 7, 'Manager', 'man2@gmail.com', '2021-06-07', '13:30:00', '06:30:00', '05:00:00', 1),
(196, 2, 'Employee', 'emp4@gmail.com', '2021-06-07', '13:30:00', '06:30:00', '05:00:00', 1),
(197, 5, 'Employee', 'emp5@gmail.com', '2021-06-07', '13:30:00', '06:30:00', '05:00:00', 1),
(198, 6, 'Employee', 'emp6@gmail.com', '2021-06-07', '13:30:00', '06:30:00', '05:00:00', 1),
(199, 8, 'Employee', 'emp1@gmail.com', '2021-06-07', '13:30:00', '06:30:00', '05:00:00', 1),
(200, 9, 'Employee', 'emp2@gmail.com', '2021-06-07', '13:30:00', '06:30:00', '05:00:00', 1),
(201, 10, 'Employee', 'emp3@gmail.com', '2021-06-07', '13:30:00', '06:30:00', '05:00:00', 1),
(202, 3, 'Admin', 'khushi@gmail.com', '2021-06-08', '09:00:00', '13:00:00', '04:00:00', 1),
(203, 1, 'HR', 'abc@gmail.com', '2021-06-08', '09:00:00', '13:00:00', '04:00:00', 1),
(204, 4, 'Manager', 'man1@gmail.com', '2021-06-08', '09:00:00', '13:00:00', '04:00:00', 1),
(205, 7, 'Manager', 'man2@gmail.com', '2021-06-08', '09:00:00', '13:00:00', '04:00:00', 1),
(206, 2, 'Employee', 'emp4@gmail.com', '2021-06-08', '09:00:00', '13:00:00', '04:00:00', 1),
(207, 5, 'Employee', 'emp5@gmail.com', '2021-06-08', '09:00:00', '13:00:00', '04:00:00', 1),
(208, 6, 'Employee', 'emp6@gmail.com', '2021-06-08', '09:00:00', '13:00:00', '04:00:00', 1),
(209, 8, 'Employee', 'emp1@gmail.com', '2021-06-08', '09:00:00', '13:00:00', '04:00:00', 1),
(210, 9, 'Employee', 'emp2@gmail.com', '2021-06-08', '09:00:00', '13:00:00', '04:00:00', 1),
(211, 10, 'Employee', 'emp3@gmail.com', '2021-06-08', '09:00:00', '13:00:00', '04:00:00', 1),
(212, 3, 'Admin', 'khushi@gmail.com', '2021-06-08', '13:30:00', '18:30:00', '05:00:00', 1),
(213, 1, 'HR', 'abc@gmail.com', '2021-06-08', '13:30:00', '18:30:00', '05:00:00', 1),
(214, 4, 'Manager', 'man1@gmail.com', '2021-06-08', '13:30:00', '18:30:00', '05:00:00', 1),
(215, 7, 'Manager', 'man2@gmail.com', '2021-06-08', '13:30:00', '18:30:00', '05:00:00', 1),
(216, 2, 'Employee', 'emp4@gmail.com', '2021-06-08', '13:30:00', '18:30:00', '05:00:00', 1),
(217, 5, 'Employee', 'emp5@gmail.com', '2021-06-08', '13:30:00', '18:30:00', '05:00:00', 1),
(218, 6, 'Employee', 'emp6@gmail.com', '2021-06-08', '13:30:00', '18:30:00', '05:00:00', 1),
(219, 8, 'Employee', 'emp1@gmail.com', '2021-06-08', '13:30:00', '18:30:00', '05:00:00', 1),
(220, 9, 'Employee', 'emp2@gmail.com', '2021-06-08', '13:30:00', '18:30:00', '05:00:00', 1),
(221, 10, 'Employee', 'emp3@gmail.com', '2021-06-08', '13:30:00', '18:30:00', '05:00:00', 1),
(222, 3, 'Admin', 'khushi@gmail.com', '2021-06-09', '09:00:00', '13:00:00', '04:00:00', 1),
(223, 1, 'HR', 'abc@gmail.com', '2021-06-09', '09:00:00', '13:00:00', '04:00:00', 1),
(224, 4, 'Manager', 'man1@gmail.com', '2021-06-09', '09:00:00', '13:00:00', '04:00:00', 1),
(225, 7, 'Manager', 'man2@gmail.com', '2021-06-09', '09:00:00', '13:00:00', '04:00:00', 1),
(226, 2, 'Employee', 'emp4@gmail.com', '2021-06-09', '09:00:00', '13:00:00', '04:00:00', 1),
(227, 5, 'Employee', 'emp5@gmail.com', '2021-06-09', '09:00:00', '13:00:00', '04:00:00', 1),
(228, 6, 'Employee', 'emp6@gmail.com', '2021-06-09', '09:00:00', '13:00:00', '04:00:00', 1),
(229, 8, 'Employee', 'emp1@gmail.com', '2021-06-09', '09:00:00', '13:00:00', '04:00:00', 1),
(230, 9, 'Employee', 'emp2@gmail.com', '2021-06-09', '09:00:00', '13:00:00', '04:00:00', 1),
(231, 10, 'Employee', 'emp3@gmail.com', '2021-06-09', '09:00:00', '13:00:00', '04:00:00', 1),
(232, 3, 'Admin', 'khushi@gmail.com', '2021-06-09', '13:30:00', '18:30:00', '05:00:00', 1),
(233, 1, 'HR', 'abc@gmail.com', '2021-06-09', '13:30:00', '18:30:00', '05:00:00', 1),
(234, 4, 'Manager', 'man1@gmail.com', '2021-06-09', '13:30:00', '18:30:00', '05:00:00', 1),
(235, 7, 'Manager', 'man2@gmail.com', '2021-06-09', '13:30:00', '18:30:00', '05:00:00', 1),
(236, 2, 'Employee', 'emp4@gmail.com', '2021-06-09', '13:30:00', '18:30:00', '05:00:00', 1),
(237, 5, 'Employee', 'emp5@gmail.com', '2021-06-09', '13:30:00', '18:30:00', '05:00:00', 1),
(238, 6, 'Employee', 'emp6@gmail.com', '2021-06-09', '13:30:00', '18:30:00', '05:00:00', 1),
(239, 8, 'Employee', 'emp1@gmail.com', '2021-06-09', '13:30:00', '18:30:00', '05:00:00', 1),
(240, 9, 'Employee', 'emp2@gmail.com', '2021-06-09', '13:30:00', '18:30:00', '05:00:00', 1),
(241, 10, 'Employee', 'emp3@gmail.com', '2021-06-09', '13:30:00', '18:30:00', '05:00:00', 1),
(242, 3, 'Admin', 'khushi@gmail.com', '2021-06-10', '09:00:00', '13:00:00', '04:00:00', 1),
(243, 1, 'HR', 'abc@gmail.com', '2021-06-10', '09:00:00', '13:00:00', '04:00:00', 1),
(244, 4, 'Manager', 'man1@gmail.com', '2021-06-10', '09:00:00', '13:00:00', '04:00:00', 1),
(245, 7, 'Manager', 'man2@gmail.com', '2021-06-10', '09:00:00', '13:00:00', '04:00:00', 1),
(246, 2, 'Employee', 'emp4@gmail.com', '2021-06-10', '09:00:00', '13:00:00', '04:00:00', 1),
(247, 5, 'Employee', 'emp5@gmail.com', '2021-06-10', '09:00:00', '13:00:00', '04:00:00', 1),
(248, 6, 'Employee', 'emp6@gmail.com', '2021-06-10', '09:00:00', '13:00:00', '04:00:00', 1),
(249, 8, 'Employee', 'emp1@gmail.com', '2021-06-10', '09:00:00', '13:00:00', '04:00:00', 1),
(250, 9, 'Employee', 'emp2@gmail.com', '2021-06-10', '09:00:00', '13:00:00', '04:00:00', 1),
(251, 10, 'Employee', 'emp3@gmail.com', '2021-06-10', '09:00:00', '13:00:00', '04:00:00', 1),
(252, 3, 'Admin', 'khushi@gmail.com', '2021-06-10', '13:30:00', '18:30:00', '05:00:00', 1),
(253, 1, 'HR', 'abc@gmail.com', '2021-06-10', '13:30:00', '18:30:00', '05:00:00', 1),
(254, 4, 'Manager', 'man1@gmail.com', '2021-06-10', '13:30:00', '18:30:00', '05:00:00', 1),
(255, 7, 'Manager', 'man2@gmail.com', '2021-06-10', '13:30:00', '18:30:00', '05:00:00', 1),
(256, 2, 'Employee', 'emp4@gmail.com', '2021-06-10', '13:30:00', '18:30:00', '05:00:00', 1),
(257, 5, 'Employee', 'emp5@gmail.com', '2021-06-10', '13:30:00', '18:30:00', '05:00:00', 1),
(258, 6, 'Employee', 'emp6@gmail.com', '2021-06-10', '13:30:00', '18:30:00', '05:00:00', 1),
(259, 8, 'Employee', 'emp1@gmail.com', '2021-06-10', '13:30:00', '18:30:00', '05:00:00', 1),
(260, 9, 'Employee', 'emp2@gmail.com', '2021-06-10', '13:30:00', '18:30:00', '05:00:00', 1),
(261, 10, 'Employee', 'emp3@gmail.com', '2021-06-10', '13:30:00', '18:30:00', '05:00:00', 1),
(262, 3, 'Admin', 'khushi@gmail.com', '2021-06-11', '09:00:00', '13:00:00', '04:00:00', 1),
(263, 1, 'HR', 'abc@gmail.com', '2021-06-11', '09:00:00', '13:00:00', '04:00:00', 1),
(264, 4, 'Manager', 'man1@gmail.com', '2021-06-11', '09:00:00', '13:00:00', '04:00:00', 1),
(265, 7, 'Manager', 'man2@gmail.com', '2021-06-11', '09:00:00', '13:00:00', '04:00:00', 1),
(266, 2, 'Employee', 'emp4@gmail.com', '2021-06-11', '09:00:00', '13:00:00', '04:00:00', 1),
(267, 5, 'Employee', 'emp5@gmail.com', '2021-06-11', '09:00:00', '13:00:00', '04:00:00', 1),
(268, 6, 'Employee', 'emp6@gmail.com', '2021-06-11', '09:00:00', '13:00:00', '04:00:00', 1),
(269, 8, 'Employee', 'emp1@gmail.com', '2021-06-11', '09:00:00', '13:00:00', '04:00:00', 1),
(270, 9, 'Employee', 'emp2@gmail.com', '2021-06-11', '09:00:00', '13:00:00', '04:00:00', 1),
(271, 10, 'Employee', 'emp3@gmail.com', '2021-06-11', '09:00:00', '13:00:00', '04:00:00', 1),
(272, 3, 'Admin', 'khushi@gmail.com', '2021-06-11', '13:30:00', '18:30:00', '05:00:00', 1),
(273, 1, 'HR', 'abc@gmail.com', '2021-06-11', '13:30:00', '18:30:00', '05:00:00', 1),
(274, 4, 'Manager', 'man1@gmail.com', '2021-06-11', '13:30:00', '18:30:00', '05:00:00', 1),
(275, 7, 'Manager', 'man2@gmail.com', '2021-06-11', '13:30:00', '18:30:00', '05:00:00', 1),
(276, 2, 'Employee', 'emp4@gmail.com', '2021-06-11', '13:30:00', '18:30:00', '05:00:00', 1),
(277, 5, 'Employee', 'emp5@gmail.com', '2021-06-11', '13:30:00', '18:30:00', '05:00:00', 1),
(278, 6, 'Employee', 'emp6@gmail.com', '2021-06-11', '13:30:00', '18:30:00', '05:00:00', 1),
(279, 8, 'Employee', 'emp1@gmail.com', '2021-06-11', '13:30:00', '18:30:00', '05:00:00', 1),
(280, 9, 'Employee', 'emp2@gmail.com', '2021-06-11', '13:30:00', '18:30:00', '05:00:00', 1),
(281, 10, 'Employee', 'emp3@gmail.com', '2021-06-11', '13:30:00', '18:30:00', '05:00:00', 1),
(282, 3, 'Admin', 'khushi@gmail.com', '2021-06-12', '09:00:00', '13:00:00', '04:00:00', 1),
(283, 1, 'HR', 'abc@gmail.com', '2021-06-12', '09:00:00', '13:00:00', '04:00:00', 1),
(284, 4, 'Manager', 'man1@gmail.com', '2021-06-12', '09:00:00', '13:00:00', '04:00:00', 1),
(285, 7, 'Manager', 'man2@gmail.com', '2021-06-12', '09:00:00', '13:00:00', '04:00:00', 1),
(286, 2, 'Employee', 'emp4@gmail.com', '2021-06-12', '09:00:00', '13:00:00', '04:00:00', 1),
(287, 5, 'Employee', 'emp5@gmail.com', '2021-06-12', '09:00:00', '13:00:00', '04:00:00', 1),
(288, 6, 'Employee', 'emp6@gmail.com', '2021-06-12', '09:00:00', '13:00:00', '04:00:00', 1),
(289, 8, 'Employee', 'emp1@gmail.com', '2021-06-12', '09:00:00', '13:00:00', '04:00:00', 1),
(290, 9, 'Employee', 'emp2@gmail.com', '2021-06-12', '09:00:00', '13:00:00', '04:00:00', 1),
(291, 10, 'Employee', 'emp3@gmail.com', '2021-06-12', '09:00:00', '13:00:00', '04:00:00', 1),
(292, 3, 'Admin', 'khushi@gmail.com', '2021-06-12', '13:30:00', '18:30:00', '05:00:00', 1),
(293, 1, 'HR', 'abc@gmail.com', '2021-06-12', '13:30:00', '18:30:00', '05:00:00', 1),
(294, 4, 'Manager', 'man1@gmail.com', '2021-06-12', '13:30:00', '18:30:00', '05:00:00', 1),
(295, 7, 'Manager', 'man2@gmail.com', '2021-06-12', '13:30:00', '18:30:00', '05:00:00', 1),
(296, 2, 'Employee', 'emp4@gmail.com', '2021-06-12', '13:30:00', '18:30:00', '05:00:00', 1),
(297, 5, 'Employee', 'emp5@gmail.com', '2021-06-12', '13:30:00', '18:30:00', '05:00:00', 1),
(298, 6, 'Employee', 'emp6@gmail.com', '2021-06-12', '13:30:00', '18:30:00', '05:00:00', 1),
(299, 8, 'Employee', 'emp1@gmail.com', '2021-06-12', '13:30:00', '18:30:00', '05:00:00', 1),
(300, 9, 'Employee', 'emp2@gmail.com', '2021-06-12', '13:30:00', '18:30:00', '05:00:00', 1),
(301, 10, 'Employee', 'emp3@gmail.com', '2021-06-12', '13:30:00', '18:30:00', '05:00:00', 1),
(302, 3, 'Admin', 'khushi@gmail.com', '2021-06-13', '09:00:00', '13:00:00', '04:00:00', 1),
(303, 1, 'HR', 'abc@gmail.com', '2021-06-13', '09:00:00', '13:00:00', '04:00:00', 1),
(304, 4, 'Manager', 'man1@gmail.com', '2021-06-13', '09:00:00', '13:00:00', '04:00:00', 1),
(305, 7, 'Manager', 'man2@gmail.com', '2021-06-13', '09:00:00', '13:00:00', '04:00:00', 1),
(306, 2, 'Employee', 'emp4@gmail.com', '2021-06-13', '09:00:00', '13:00:00', '04:00:00', 1),
(307, 5, 'Employee', 'emp5@gmail.com', '2021-06-13', '09:00:00', '13:00:00', '04:00:00', 1),
(308, 6, 'Employee', 'emp6@gmail.com', '2021-06-13', '09:00:00', '13:00:00', '04:00:00', 1),
(309, 8, 'Employee', 'emp1@gmail.com', '2021-06-13', '09:00:00', '13:00:00', '04:00:00', 1),
(310, 9, 'Employee', 'emp2@gmail.com', '2021-06-13', '09:00:00', '13:00:00', '04:00:00', 1),
(311, 10, 'Employee', 'emp3@gmail.com', '2021-06-13', '09:00:00', '13:00:00', '04:00:00', 1),
(312, 3, 'Admin', 'khushi@gmail.com', '2021-06-13', '13:30:00', '18:30:00', '05:00:00', 1),
(313, 1, 'HR', 'abc@gmail.com', '2021-06-13', '13:30:00', '18:30:00', '05:00:00', 1),
(314, 4, 'Manager', 'man1@gmail.com', '2021-06-13', '13:30:00', '18:30:00', '05:00:00', 1),
(315, 7, 'Manager', 'man2@gmail.com', '2021-06-13', '13:30:00', '18:30:00', '05:00:00', 1),
(316, 2, 'Employee', 'emp4@gmail.com', '2021-06-13', '13:30:00', '18:30:00', '05:00:00', 1),
(317, 5, 'Employee', 'emp5@gmail.com', '2021-06-13', '13:30:00', '18:30:00', '05:00:00', 1),
(318, 6, 'Employee', 'emp6@gmail.com', '2021-06-13', '13:30:00', '18:30:00', '05:00:00', 1),
(319, 8, 'Employee', 'emp1@gmail.com', '2021-06-13', '13:30:00', '18:30:00', '05:00:00', 1),
(320, 9, 'Employee', 'emp2@gmail.com', '2021-06-13', '13:30:00', '18:30:00', '05:00:00', 1),
(321, 10, 'Employee', 'emp3@gmail.com', '2021-06-13', '13:30:00', '18:30:00', '05:00:00', 1),
(322, 3, 'Admin', 'khushi@gmail.com', '2021-06-14', '09:00:00', '13:00:00', '04:00:00', 1),
(323, 1, 'HR', 'abc@gmail.com', '2021-06-14', '09:00:00', '13:00:00', '04:00:00', 1),
(324, 4, 'Manager', 'man1@gmail.com', '2021-06-14', '09:00:00', '13:00:00', '04:00:00', 1),
(325, 7, 'Manager', 'man2@gmail.com', '2021-06-14', '09:00:00', '13:00:00', '04:00:00', 1),
(326, 2, 'Employee', 'emp4@gmail.com', '2021-06-14', '09:00:00', '13:00:00', '04:00:00', 1),
(327, 5, 'Employee', 'emp5@gmail.com', '2021-06-14', '09:00:00', '13:00:00', '04:00:00', 1),
(328, 6, 'Employee', 'emp6@gmail.com', '2021-06-14', '09:00:00', '13:00:00', '04:00:00', 1),
(329, 8, 'Employee', 'emp1@gmail.com', '2021-06-14', '09:00:00', '13:00:00', '04:00:00', 1),
(330, 9, 'Employee', 'emp2@gmail.com', '2021-06-14', '09:00:00', '13:00:00', '04:00:00', 1),
(331, 10, 'Employee', 'emp3@gmail.com', '2021-06-14', '09:00:00', '13:00:00', '04:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_calc`
--
ALTER TABLE `salary_calc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_time`
--
ALTER TABLE `user_time`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=623;

--
-- AUTO_INCREMENT for table `salary_calc`
--
ALTER TABLE `salary_calc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_time`
--
ALTER TABLE `user_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
