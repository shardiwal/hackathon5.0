-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 02:21 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geomap`
--

-- --------------------------------------------------------

--
-- Table structure for table `city_cord`
--

CREATE TABLE `city_cord` (
  `city_id` int(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lan` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city_cord`
--

INSERT INTO `city_cord` (`city_id`, `city`, `lat`, `lan`) VALUES
(1, 'Aland ', '17.36', '76.35'),
(2, 'Abu ', '24.40', '72.45'),
(3, 'Ajmer ', '26.27', '74.42'),
(4, 'Alwar ', '27.34', '76.38'),
(5, 'Amet ', '25.20', '73.59'),
(6, 'Anupgarh ', '29.07', '73.06'),
(7, 'Aravali Range ', '25.00', '73.10'),
(8, 'Asop ', '26.48', '73.44'),
(9, 'Bakhasar ', '24.43', '71.09'),
(10, 'Balahera ', '26.45', '76.50'),
(11, 'Balotra ', '25.49', '72.21'),
(12, 'Banas R.', '26.13', '76.13'),
(13, 'Banswara ', '23.30', '74.24'),
(14, 'Bap ', '27.22', '72.22'),
(15, 'Baran ', '25.05', '76.33'),
(16, 'Barmer ', '25.45', '71.25'),
(17, 'Baswa ', '27.06', '76.32'),
(18, 'Beawar ', '26.06', '74.21'),
(19, 'Bedla ', '25.20', '73.45'),
(20, 'Bhadra ', '29.15', '75.30'),
(21, 'Bhadrajan ', '25.36', '72.54'),
(22, 'Bharatpur ', '27.15', '77.30'),
(23, 'Bhhainsror ', '24.58', '75.36'),
(24, 'Bhilwara ', '25.21', '74.40'),
(25, 'Bhinmal ', '25.00', '72.19'),
(26, 'Bikampur ', '27.45', '72.10'),
(27, 'Bikaner ', '28.01', '73.22'),
(28, 'Birilpur ', '28.11', '72.15'),
(29, 'Bissau ', '28.17', '75.08'),
(30, 'Bundi ', '25.27', '75.41'),
(31, 'Chatsu ', '26.36', '75.59'),
(32, 'Chhabra ', '24.40', '76.54'),
(33, 'Chhoti Sadri ', '22.24', '74.34'),
(34, 'Chittaurgarh ', '24.54', '74.42'),
(35, 'Chomu ', '27.07', '75.47'),
(36, 'Chotan ', '25.28', '71.06'),
(37, 'Churu ', '28.19', '75.01'),
(38, 'Dag ', '23.56', '75.52'),
(39, 'Deoli ', '25.46', '75.25'),
(40, 'Deolia ', '24.38', '74.42'),
(41, 'Devikot ', '26.38', '71.07'),
(42, 'Dhebar L. ', '24.30', '74.00'),
(43, 'Dholpur ', '26.42', '77.53'),
(44, 'Didwana ', '27.17', '74.25'),
(45, 'Dig ', '27.28', '77.20'),
(46, 'Dungarpur ', '23.50', '73.50'),
(47, 'Eklingji ', '24.43', '73.46'),
(48, 'Erinpura ', '25.09', '73.06'),
(49, 'Fatehpur (Jaipur) ', '28.00', '75.02'),
(50, 'Ganganagar ', '29.49', '73.50'),
(51, 'Gangapur ', '26.29', '75.46'),
(52, 'Gangrar ', '23.56', '75.41'),
(53, 'Hanumangarh ', '29.35', '74.21'),
(54, 'Indargarh ', '25.40', '76.15'),
(55, 'Jahazpur ', '25.38', '75.19'),
(56, 'Jaipur ', '26.55', '75.52'),
(57, 'Jaislmer ', '26.55', '70.57'),
(58, 'Jalor ', '25.22', '72.58'),
(59, 'Jhairapatan Chhaoni ', '24.32', '76.12'),
(60, 'Gogundra ', '24.46', '73.34'),
(61, 'Gotaru ', '27.22', '70.02'),
(62, 'Great Indian Desert ', '27.00', '71.00'),
(63, 'Gurha ', '25.12', '71.48'),
(64, 'Jhunjhunu ', '28.06', '75.20'),
(65, 'Jodhpur ', '26.18', '73.04'),
(66, 'Karauli ', '26.30', '77.04'),
(67, 'Kekri ', '25.56', '75.20'),
(68, 'Kerwara ', '24.04', '73.40'),
(69, 'Khandela ', '27.36', '75.32'),
(70, 'Kishangarh ', '27.53', '70.37'),
(71, 'Kota ', '25.10', '75.52'),
(72, 'Kotra ', '24.22', '73.15'),
(73, 'Lachmangarh Sikar ', '27.50', '75.04'),
(74, 'Lalsot ', '26.34', '76.23'),
(75, 'Luni and R. ', '26.01', '73.02'),
(76, 'Malpura ', '26.18', '75.25'),
(77, 'Mandalgarh ', '25.12', '75.09'),
(78, 'Marwar Junctioin ', '25.43', '73.45'),
(79, 'Metra ', '26.39', '74.06'),
(80, 'Mohangarh ', '27.17', '71.18'),
(81, 'Nachana ', '27.09', '71.45'),
(82, 'Nagaur ', '27.00', '73.40'),
(83, 'Naraina ', '26.50', '74.11'),
(84, 'Nasirabad ', '26.18', '74.46'),
(85, 'Nathdwara ', '25.56', '73.52'),
(86, 'Nawalgarh ', '27.51', '75.18'),
(87, 'Nimbahera ', '24.37', '74.45'),
(88, 'Nohar ', '29.11', '74.49'),
(89, 'Pachbhandra ', '25.55', '62.21'),
(90, 'Pali ', '25.46', '73.25'),
(91, 'Partabgarh ', '24.02', '74.4'),
(92, 'Patan ', '27.49', '76.01'),
(93, 'Phalodi ', '27.09', '72.24'),
(94, 'Phulera ', '26.52', '75.16'),
(95, 'Pipar ', '26.22', '73.35'),
(96, 'Pokaran ', '26.55', '71.58'),
(97, 'Pugal ', '28.31', '72.51'),
(98, 'Rajgarh ', '28.39', '75.26'),
(99, 'Ramgarh ', '28.1', '75'),
(100, 'Ratangarh ', '28.05', '74.39'),
(101, 'Reni ', '28.41', '75.05'),
(102, 'Rewatsar ', '29.16', '74.26'),
(103, 'Rupnagar ', '26.48', '74.54'),
(104, 'Salumbar ', '24.09', '74.05'),
(105, 'Sambhar & L. ', '26.54', '75.13'),
(106, 'Sanchor ', '24.36', '71.54'),
(107, 'Sanganer ', '26.49', '75.49'),
(108, 'Sardarshahr ', '28.27', '74.32'),
(109, 'Sawai Mahopur ', '25.58', '76.3'),
(110, 'Shahabad ', '25.1', '77.2'),
(111, 'Shahgarh ', '27.08', '69.57'),
(112, 'Shahpura', '25.4', '75.01'),
(113, 'Shergarh', '24.4', '76.32'),
(114, 'Sikar ', '27.36', '75.15'),
(115, 'Tantpur ', '26.51', '77.32'),
(116, 'Toda Rai Singh ', '26.00', '75.42'),
(117, 'Tonk ', '26.11', '75.50'),
(118, 'Udaipur ', '27.42', '75.33');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `disease_id` int(10) NOT NULL,
  `disease` varchar(255) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`disease_id`, `disease`, `description`) VALUES
(1, 'Dengue', NULL),
(2, 'Typhoid', NULL),
(3, 'Tuberculosis (TB)', NULL),
(5, 'HIV', NULL),
(6, 'Polio', NULL),
(7, 'Jaundice', NULL),
(10, 'Chikungunya', NULL),
(12, 'Arthritis', NULL),
(13, 'Asthma', NULL),
(14, 'Cancer', NULL),
(15, 'Swine Flu', NULL),
(16, 'Diabetes', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lan` varchar(255) DEFAULT NULL,
  `reported_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `reported_from` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `name`, `gender`, `age`, `address`, `city`, `state`, `lat`, `lan`, `reported_on`, `reported_from`) VALUES
(1, 'Aditi Musunur', 'F', 30, 'xyz road Chotan , Rajasthan', 'Chotan ', 'Rajasthan', '25.28', '71.06', '2018-07-20 09:44:42', 'Chotan  - dispensary'),
(2, 'Advitiya Sujeet', 'F', 34, 'xyz road Chotan , Rajasthan', 'Chotan ', 'Rajasthan', '25.28', '71.06', '2018-07-20 09:44:42', 'Chotan  - dispensary'),
(4, 'Amrish Ilyas', 'M', 25, 'xyz road Chotan , Rajasthan', 'Chotan ', 'Rajasthan', '25.28', '71.06', '2018-07-20 09:44:42', 'Chotan  - dispensary'),
(5, 'Aprativirya Seshan', 'M', 32, 'xyz road Chotan , Rajasthan', 'Chotan ', 'Rajasthan', '25.28', '71.06', '2018-07-20 09:44:42', 'Chotan  - dispensary'),
(6, 'Asvathama Ponnada', 'M', 36, 'xyz road Chotan , Rajasthan', 'Chotan ', 'Rajasthan', '25.28', '71.06', '2018-07-20 09:44:42', 'Chotan  - dispensary'),
(7, 'Avantas Ghosal', 'M', 31, 'xyz road Chotan , Rajasthan', 'Chotan ', 'Rajasthan', '25.28', '71.06', '2018-07-20 09:44:42', 'Chotan  - dispensary'),
(8, 'Avidosa Vaisakhi', 'M', 30, 'xyz road Chotan , Rajasthan', 'Chotan ', 'Rajasthan', '25.28', '71.06', '2018-07-20 09:44:42', 'Chotan  - dispensary'),
(9, 'Barsati Sandipa', 'M', 39, 'xyz road Chotan , Rajasthan', 'Chotan ', 'Rajasthan', '25.28', '71.06', '2018-07-20 09:44:42', 'Chotan  - dispensary'),
(10, 'Debasis Sundhararajan', 'M', 26, 'xyz road Chotan , Rajasthan', 'Chotan ', 'Rajasthan', '25.28', '71.06', '2018-07-20 09:44:42', 'Chotan  - dispensary'),
(11, 'Devasru Subramanyan', 'M', 25, 'xyz road Chotan , Rajasthan', 'Chotan ', 'Rajasthan', '25.28', '71.06', '2018-07-20 09:44:42', 'Chotan  - dispensary'),
(12, 'Dharmadhrt Ramila', 'F', 26, 'xyz road Chotan , Rajasthan', 'Chotan ', 'Rajasthan', '25.28', '71.06', '2018-07-20 09:44:42', 'Chotan  - dispensary'),
(13, 'Dhritiman Salim', 'M', 31, 'xyz road Chotan , Rajasthan', 'Chotan ', 'Rajasthan', '25.28', '71.06', '2018-07-20 09:44:42', 'Chotan  - dispensary'),
(14, 'Gopa Trilochana', 'M', 37, 'xyz road Chotan , Rajasthan', 'Chotan ', 'Rajasthan', '25.28', '71.06', '2018-07-20 09:44:42', 'Chotan  - dispensary'),
(15, 'Hardeep Suksma', 'M', 41, 'xyz road Chotan , Rajasthan', 'Chotan ', 'Rajasthan', '25.28', '71.06', '2018-07-20 09:44:42', 'Chotan  - dispensary'),
(16, 'Jayadev Mitali', 'M', 40, 'xyz road Chotan , Rajasthan', 'Chotan ', 'Rajasthan', '25.28', '71.06', '2018-07-20 09:44:42', 'Chotan  - dispensary'),
(17, 'Jitendra Choudhary', 'M', 38, 'xyz road Chotan , Rajasthan', 'Chotan ', 'Rajasthan', '25.28', '71.06', '2018-07-20 09:44:42', 'Chotan  - dispensary'),
(18, 'Kalyanavata Veerender', 'F', 30, 'xyz road Chotan , Rajasthan', 'Chotan ', 'Rajasthan', '25.28', '71.06', '2018-07-20 09:44:42', 'Chotan  - dispensary'),
(19, 'Naveen Tikaram', 'M', 41, 'xyz road Chotan , Rajasthan', 'Chotan ', 'Rajasthan', '25.28', '71.06', '2018-07-20 09:44:42', 'Chotan  - dispensary'),
(20, 'Vijai Sritharan', 'M', 28, 'xyz road Chotan , Rajasthan', 'Chotan ', 'Rajasthan', '25.28', '71.06', '2018-07-20 09:44:42', 'Chotan  - dispensary'),
(22, 'Advitiya Sujeet', 'F', 35, 'xyz road Balahera , Rajasthan', 'Balahera ', 'Rajasthan', '26.45', '76.50', '2018-07-20 09:45:33', 'Balahera  - dispensary'),
(24, 'Amrish Ilyas', 'M', 26, 'xyz road Dungarpur , Rajasthan', 'Dungarpur ', 'Rajasthan', '23.50', '73.50', '2018-07-20 09:45:33', 'Dungarpur  - dispensary'),
(26, 'Asvathama Ponnada', 'M', 31, 'xyz road Gangapur , Rajasthan', 'Gangapur ', 'Rajasthan', '26.29', '75.46', '2018-07-20 09:45:33', 'Gangapur  - dispensary'),
(27, 'Avantas Ghosal', 'M', 45, 'xyz road Bhinmal , Rajasthan', 'Bhinmal ', 'Rajasthan', '25.00', '72.19', '2018-07-20 09:45:34', 'Bhinmal  - dispensary'),
(28, 'Avidosa Vaisakhi', 'M', 28, 'xyz road Fatehpur (Jaipur) , Rajasthan', 'Fatehpur (Jaipur) ', 'Rajasthan', '28.00', '75.02', '2018-07-20 09:45:34', 'Fatehpur (Jaipur)  - dispensary'),
(29, 'Barsati Sandipa', 'M', 32, 'xyz road Tantpur , Rajasthan', 'Tantpur ', 'Rajasthan', '26.51', '77.32', '2018-07-20 09:45:34', 'Tantpur  - dispensary'),
(30, 'Debasis Sundhararajan', 'M', 30, 'xyz road Phulera , Rajasthan', 'Phulera ', 'Rajasthan', '26.52', '75.16', '2018-07-20 09:45:34', 'Phulera  - dispensary'),
(31, 'Devasru Subramanyan', 'M', 40, 'xyz road Pugal , Rajasthan', 'Pugal ', 'Rajasthan', '28.31', '72.51', '2018-07-20 09:45:34', 'Pugal  - dispensary'),
(32, 'Dharmadhrt Ramila', 'F', 41, 'xyz road Phulera , Rajasthan', 'Phulera ', 'Rajasthan', '26.52', '75.16', '2018-07-20 09:45:34', 'Phulera  - dispensary'),
(33, 'Dhritiman Salim', 'M', 25, 'xyz road Phalodi , Rajasthan', 'Phalodi ', 'Rajasthan', '27.09', '72.24', '2018-07-20 09:45:34', 'Phalodi  - dispensary'),
(34, 'Gopa Trilochana', 'M', 26, 'xyz road Kishangarh , Rajasthan', 'Kishangarh ', 'Rajasthan', '27.53', '70.37', '2018-07-20 09:45:34', 'Kishangarh  - dispensary'),
(35, 'Hardeep Suksma', 'M', 45, 'xyz road Naraina , Rajasthan', 'Naraina ', 'Rajasthan', '26.50', '74.11', '2018-07-20 09:45:34', 'Naraina  - dispensary'),
(36, 'Jayadev Mitali', 'M', 34, 'xyz road Abu , Rajasthan', 'Abu ', 'Rajasthan', '24.40', '72.45', '2018-07-20 09:45:34', 'Abu  - dispensary'),
(37, 'Jitendra Choudhary', 'M', 44, 'xyz road Didwana , Rajasthan', 'Didwana ', 'Rajasthan', '27.17', '74.25', '2018-07-20 09:45:34', 'Didwana  - dispensary'),
(38, 'Kalyanavata Veerender', 'F', 44, 'xyz road Jalor , Rajasthan', 'Jalor ', 'Rajasthan', '25.22', '72.58', '2018-07-20 09:45:34', 'Jalor  - dispensary'),
(39, 'Naveen Tikaram', 'M', 35, 'xyz road Phulera , Rajasthan', 'Phulera ', 'Rajasthan', '26.52', '75.16', '2018-07-20 09:45:34', 'Phulera  - dispensary'),
(40, 'Vijai Sritharan', 'M', 26, 'xyz road Dig , Rajasthan', 'Dig ', 'Rajasthan', '27.28', '77.20', '2018-07-20 09:45:34', 'Dig  - dispensary'),
(42, 'Advitiya Sujeet', 'F', 25, 'xyz road Phulera , Rajasthan', 'Phulera ', 'Rajasthan', '26.52', '75.16', '2018-07-20 09:45:56', 'Phulera  - dispensary'),
(43, 'Alagesan Poduri', 'M', 30, 'xyz road Alwar , Rajasthan', 'Alwar ', 'Rajasthan', '27.34', '76.38', '2018-07-20 09:45:56', 'Alwar  - dispensary'),
(44, 'Amrish Ilyas', 'M', 45, 'xyz road Alwar , Rajasthan', 'Alwar ', 'Rajasthan', '27.34', '76.38', '2018-07-20 09:45:56', 'Alwar  - dispensary'),
(46, 'Asvathama Ponnada', 'M', 31, 'xyz road Bap , Rajasthan', 'Bap ', 'Rajasthan', '27.22', '72.22', '2018-07-20 09:45:56', 'Bap  - dispensary'),
(47, 'Avantas Ghosal', 'M', 30, 'xyz road Kishangarh , Rajasthan', 'Kishangarh ', 'Rajasthan', '27.53', '70.37', '2018-07-20 09:45:56', 'Kishangarh  - dispensary'),
(48, 'Avidosa Vaisakhi', 'M', 38, 'xyz road Jahazpur , Rajasthan', 'Jahazpur ', 'Rajasthan', '25.38', '75.19', '2018-07-20 09:45:56', 'Jahazpur  - dispensary'),
(49, 'Barsati Sandipa', 'M', 35, 'xyz road Hanumangarh , Rajasthan', 'Hanumangarh ', 'Rajasthan', '29.35', '74.21', '2018-07-20 09:45:56', 'Hanumangarh  - dispensary'),
(50, 'Debasis Sundhararajan', 'M', 27, 'xyz road Kota , Rajasthan', 'Kota ', 'Rajasthan', '25.10', '75.52', '2018-07-20 09:45:56', 'Kota  - dispensary'),
(51, 'Devasru Subramanyan', 'M', 33, 'xyz road Bhinmal , Rajasthan', 'Bhinmal ', 'Rajasthan', '25.00', '72.19', '2018-07-20 09:45:56', 'Bhinmal  - dispensary'),
(52, 'Dharmadhrt Ramila', 'F', 27, 'xyz road Karauli , Rajasthan', 'Karauli ', 'Rajasthan', '26.30', '77.04', '2018-07-20 09:45:56', 'Karauli  - dispensary'),
(53, 'Dhritiman Salim', 'M', 39, 'xyz road Bikampur , Rajasthan', 'Bikampur ', 'Rajasthan', '27.45', '72.10', '2018-07-20 09:45:56', 'Bikampur  - dispensary'),
(54, 'Gopa Trilochana', 'M', 44, 'xyz road Bakhasar , Rajasthan', 'Bakhasar ', 'Rajasthan', '24.43', '71.09', '2018-07-20 09:45:56', 'Bakhasar  - dispensary'),
(55, 'Hardeep Suksma', 'M', 39, 'xyz road Sanganer , Rajasthan', 'Sanganer ', 'Rajasthan', '26.49', '75.49', '2018-07-20 09:45:56', 'Sanganer  - dispensary'),
(56, 'Jayadev Mitali', 'M', 39, 'xyz road Hanumangarh , Rajasthan', 'Hanumangarh ', 'Rajasthan', '29.35', '74.21', '2018-07-20 09:45:56', 'Hanumangarh  - dispensary'),
(57, 'Jitendra Choudhary', 'M', 27, 'xyz road Chotan , Rajasthan', 'Chotan ', 'Rajasthan', '25.28', '71.06', '2018-07-20 09:45:56', 'Chotan  - dispensary'),
(58, 'Kalyanavata Veerender', 'F', 41, 'xyz road Asop , Rajasthan', 'Asop ', 'Rajasthan', '26.48', '73.44', '2018-07-20 09:45:56', 'Asop  - dispensary'),
(59, 'Naveen Tikaram', 'M', 41, 'xyz road Naraina , Rajasthan', 'Naraina ', 'Rajasthan', '26.50', '74.11', '2018-07-20 09:45:56', 'Naraina  - dispensary'),
(60, 'Vijai Sritharan', 'M', 25, 'xyz road Metra , Rajasthan', 'Metra ', 'Rajasthan', '26.39', '74.06', '2018-07-20 09:45:56', 'Metra  - dispensary'),
(84, 'SHANKARLAL MEENA', 'M', 56, 'AWASIY VIDHYALAY, PRATAPGARH', 'Pratapgarh', 'Rajasthan', '24.0433867', '74.7790565', '2018-07-24 04:58:34', 'Pratapgarh - dispensary'),
(85, 'AJAY', 'M', 53, 'ARTHOONA', 'Banswara', 'Rajasthan', '23.4981689', '74.0960995', '2018-07-24 04:58:35', 'Banswara - dispensary'),
(86, 'shabanam banu', 'F', 46, 'chittor road Kapasan', 'Kumhar Mohalla', 'Rajasthan', '24.8853951', '74.3133366', '2018-07-24 05:03:47', 'Kumhar Mohalla - dispensary'),
(87, 'Anita Nagda', 'F', 65, '13-14 Shive Colony Manaharpura Badgaon Udaipur', 'Maruti Nagar', 'Rajasthan', '26.8172615', '75.7992702', '2018-07-24 05:03:48', 'Maruti Nagar - dispensary'),
(88, 'NIKHIL TIWARI', 'M', 65, 'BAGIDORA', 'Banswara', 'Rajasthan', '23.4043274', '74.2672609', '2018-07-24 05:03:49', 'Banswara - dispensary'),
(89, 'Heena Pandiya', 'F', 46, 'Village Adkaliya Gegala Tehsil Jhadol Udaipur', 'Udaipur', 'Rajasthan', '24.585445', '73.712479', '2018-07-24 05:09:05', 'Udaipur - dispensary'),
(90, 'Jagdish Vadera ', 'M', 53, 'jhadol udaipur', 'Udaipur', 'Rajasthan', '24.3591517', '73.5314366', '2018-07-24 05:09:20', 'Udaipur - dispensary'),
(91, 'ST- LAXMAN', 'M', 46, 'AMRTHOON, BANSWARA', 'Rajasthan', 'Rajasthan', '23.4350359', '74.3118212', '2018-07-24 05:09:21', 'Rajasthan - dispensary'),
(92, 'Seema meena', 'F', 46, 'Rishabdhev udaipur', 'Udaipur', 'Rajasthan', '24.0781195', '73.6918806', '2018-07-24 05:09:22', 'Udaipur - dispensary'),
(93, 'ST- RUPALI', 'F', 32, 'CHANDUJI KA GADA, BANSWARA', 'Rajasthan', 'Rajasthan', '23.671248', '74.333924', '2018-07-24 05:09:23', 'Rajasthan - dispensary'),
(94, 'PRIYA SHARMA', 'F', 53, 'UMREN', 'Alwar', 'Rajasthan', '27.5002549', '76.5690519', '2018-07-24 05:09:23', 'Alwar - dispensary'),
(95, 'TUSHAR MEHTA', 'M', 62, '7 B 8 JAWAHAR NAGAR', '8', 'Rajasthan', '26.87327', '75.798233', '2018-07-24 05:09:24', '8 - dispensary'),
(96, 'Monika Koted', 'F', 62, 'otiya dungerpur', 'Dungarpur', 'Rajasthan', '23.841668', '73.7146623', '2018-07-24 05:09:26', 'Dungarpur - dispensary'),
(97, 'tanu sharma', 'F', 46, 'noh bachamdi bharatpur', 'Nagla Kesariya', 'Rajasthan', '27.204763', '77.557643', '2018-07-24 05:09:27', 'Nagla Kesariya - dispensary'),
(98, 'Suman Prajapat', 'F', 46, 'Near Police Choki Shiv Colony, Manaharpura Badgaon Udaipur', 'Hiran Magri', 'Rajasthan', '24.5582201', '73.7168671', '2018-07-24 05:09:28', 'Hiran Magri - dispensary'),
(99, 'sabiya banu', 'F', 62, 'purana Rasmi road Kapasan', 'Chittaurgarh', 'Rajasthan', '25.0724226', '74.3741423', '2018-07-24 05:09:29', 'Chittaurgarh - dispensary'),
(100, 'shree mohan vyas', 'M', 62, 'nathusargate bikaner ', 'Rajasthan', 'Rajasthan', '28.012013', '73.2946249', '2018-07-24 05:09:30', 'Rajasthan - dispensary'),
(101, 'HEMRAJ PRAJAPAT', 'M', 46, 'THANAGAZI', 'Alwar', 'Rajasthan', '27.4002761', '76.3145188', '2018-07-24 05:09:31', 'Alwar - dispensary'),
(102, 'yogendra singh', 'M', 62, 'pugal road bikaner ', 'Bikaner', 'Rajasthan', '28.0385943', '73.2865113', '2018-07-24 05:09:32', 'Bikaner - dispensary'),
(103, 'POOJA ', 'F', 62, 'ALWAR', 'Alwar', 'Rajasthan', '27.5529907', '76.6345735', '2018-07-24 05:09:34', 'Alwar - dispensary'),
(104, 'Namira sheikh', 'F', 56, 'Sagwara dungerpur', 'Dungarpur', 'Rajasthan', '23.665708', '74.0241367', '2018-07-24 05:09:34', 'Dungarpur - dispensary'),
(105, 'Payal Paliwal', 'F', 46, 'Tubwell Ke Pass Bich Ki Gawadi Kavita, Udaipur', 'Rajasthan', 'Rajasthan', '24.689116', '73.638341', '2018-07-24 05:09:35', 'Rajasthan - dispensary'),
(106, 'BAKSURAM', 'M', 66, 'CHHOTI SARWAN', 'Banswara', 'Rajasthan', '23.5270121', '74.6459574', '2018-07-24 05:09:36', 'Banswara - dispensary'),
(107, 'ramkishan kumawat ', 'M', 56, 'saint n n school ke piche sarwodya basti bikaner ', 'Rajasthan', 'Rajasthan', '28.0372888', '73.2957309', '2018-07-24 05:09:37', 'Rajasthan - dispensary'),
(108, 'Nana Lal Vadera', 'M', 62, 'Mudavli jhadol udaipur', 'Udaipur', 'Rajasthan', '24.3591517', '73.5314366', '2018-07-24 05:09:38', 'Udaipur - dispensary'),
(109, 'ST- SURESH', 'M', 53, 'BAGIDORA, BANSWARA', 'Banswara', 'Rajasthan', '23.4043274', '74.2672609', '2018-07-24 05:09:38', 'Banswara - dispensary'),
(110, 'NEETU KUMARI RATHORE', 'F', 66, 'MARUDHAR MAHILA SIKSHAN SANSTHAN, VIDHYAWADI, PALI', 'Industrial Area', 'Rajasthan', '25.3204331', '73.2915427', '2018-07-24 05:09:39', 'Industrial Area - dispensary'),
(111, 'KAMISH MUNDRA', 'M', 46, 'KARANPUR', 'Karauli', 'Rajasthan', '26.1819717', '76.9707869', '2018-07-24 05:09:40', 'Karauli - dispensary'),
(112, 'ANIL', 'M', 46, 'CHHOTI SARWAN', 'Banswara', 'Rajasthan', '23.5270121', '74.6459574', '2018-07-24 05:09:41', 'Banswara - dispensary'),
(113, 'ST- JARINA', 'F', 62, 'BANSWARA', 'Banswara', 'Rajasthan', '23.5461394', '74.4349761', '2018-07-24 05:09:42', 'Banswara - dispensary'),
(114, 'Jayantilal Grasiya', 'M', 62, 'Abu Road Sirohi', 'Sirohi', 'Rajasthan', '24.4640731', '72.7717775', '2018-07-24 05:09:43', 'Sirohi - dispensary'),
(115, 'sunaina chundawat', 'F', 53, 'aspur dungarpur ', 'Udaipur', 'Rajasthan', '23.9521856', '74.0799469', '2018-07-24 05:09:44', 'Udaipur - dispensary'),
(116, 'Poonam', 'F', 46, 'sonri , nohar', 'Nohar', 'Rajasthan', '29.1888996', '74.7781671', '2018-07-24 05:09:45', 'Nohar - dispensary'),
(117, 'Roshan Giri Goswami', 'M', 46, 'Banoda, Jhallara Udaipur', 'Udaipur', 'Rajasthan', '24.0379442', '74.0909602', '2018-07-24 05:09:46', 'Udaipur - dispensary'),
(120, 'Simran Prajapat', 'M', 46, 'Th. Kotra Udaipur', 'Udaipur', 'Rajasthan', '24.3581619', '73.1762626', '2018-07-24 05:10:33', 'Udaipur - dispensary'),
(122, 'PAPU RAM', 'M', 56, 'UMMED CHOWK JODHPUR', 'Gulab Sagar', 'Rajasthan', '26.2983549', '73.0240533', '2018-07-24 05:10:34', 'Gulab Sagar - dispensary'),
(124, 'shiv ganesh', 'M', 62, 'sanjay nagar, bharatpur', 'Krishna Nagar', 'Rajasthan', '27.2202237', '77.5124949', '2018-07-24 05:10:36', 'Krishna Nagar - dispensary'),
(127, 'Tinkla Damor', 'F', 46, 'Kherwara Udaipur', 'Udaipur', 'Rajasthan', '23.9882815', '73.6094662', '2018-07-24 05:10:38', 'Udaipur - dispensary'),
(128, 'RAWAL RAM', 'M', 62, 'SOOR SAGAR JODHPUR', 'Jodhpur', 'Rajasthan', '26.3098017', '73.0047858', '2018-07-24 05:10:39', 'Jodhpur - dispensary'),
(132, 'NEHA', 'F', 46, 'BANSWARA', 'Banswara', 'Rajasthan', '23.5461394', '74.4349761', '2018-07-24 05:10:42', 'Banswara - dispensary'),
(135, 'Deepika Sukhwal ', 'F', 62, 'somani mohalla Kapasan', 'Chittaurgarh', 'Rajasthan', '24.8852323', '74.3122529', '2018-07-24 05:10:44', 'Chittaurgarh - dispensary'),
(136, 'PINAL DAYMA ', 'F', 32, 'BAGIDORA', 'Banswara', 'Rajasthan', '23.4043274', '74.2672609', '2018-07-24 05:10:45', 'Banswara - dispensary'),
(137, 'BHULI MEENA', 'F', 56, 'VILL. SAIKDI, TEH. PRATAPGARH', 'Jawahar Nagar', 'Rajasthan', '24.0252403', '74.7811139', '2018-07-24 05:10:46', 'Jawahar Nagar - dispensary'),
(140, 'SAEIM', 'M', 46, 'BANSWARA', 'Banswara', 'Rajasthan', '23.5461394', '74.4349761', '2018-07-24 05:10:56', 'Banswara - dispensary'),
(141, 'HEMA RAM', 'M', 66, 'REODAR', 'Sirohi', 'Rajasthan', '24.6193591', '72.5293562', '2018-07-24 05:13:45', 'Sirohi - dispensary'),
(143, 'Fija Banu ansari', 'F', 32, 'Momin mohalla Nimbahera', 'Chittaurgarh', 'Rajasthan', '24.6256587', '74.6810274', '2018-07-24 05:13:47', 'Chittaurgarh - dispensary'),
(144, 'SHIVANI RATHORE', 'F', 42, 'RATLAM ROAD, ARNOD', 'Arnod', 'Rajasthan', '23.8936385', '74.8124416', '2018-07-24 05:13:48', 'Arnod - dispensary'),
(146, 'SARVJEET KAUR', 'F', 53, 'ADRASH NAGAR GALI NO 2 BADGOAN ROAD SHEOGANJ', 'Majlis Park', 'Rajasthan', '28.718323', '77.177177', '2018-07-24 05:13:50', 'Majlis Park - dispensary'),
(147, 'daudyal sharma', 'M', 42, 'deeg, bharatpur', 'Bharatpur', 'Rajasthan', '27.4723994', '77.3249713', '2018-07-24 05:13:51', 'Bharatpur - dispensary'),
(149, 'Ritu Paliwal', 'F', 46, 'Near National Highway Bormangri Kavita, Badgoan Udaipur', 'Udaipur', 'Rajasthan', '24.6571742', '73.681763', '2018-07-24 05:13:53', 'Udaipur - dispensary'),
(150, 'ANJALI', 'F', 32, 'GHATOL', 'Udaipur', 'Rajasthan', '23.7597266', '74.4129904', '2018-07-24 05:13:54', 'Udaipur - dispensary'),
(154, 'TARUNA RATHORE', 'F', 46, 'BITHUDA KHURD, MARWAR JUNCTION, PALI', 'Pali', 'Rajasthan', '25.7227599', '73.6094662', '2018-07-24 05:17:19', 'Pali - dispensary'),
(155, 'sarika Banu', 'F', 46, 'momin Mohalla Kapasan', 'Chittaurgarh', 'Rajasthan', '24.8866929', '74.3158572', '2018-07-24 05:17:20', 'Chittaurgarh - dispensary'),
(156, 'GOPAL SARGRA', 'M', 56, 'RPS  COLONY RAWATBHATA', 'Harijan Basti', 'Rajasthan', '24.9243453', '75.5873438', '2018-07-24 05:17:21', 'Harijan Basti - dispensary'),
(159, 'AKANKSHA PARMAR', 'F', 53, 'NEW ADARSH NAGAR COLONY DHOLPUR', 'Rajasthan State Highway 12', 'Rajasthan', '26.7150764', '77.8968544', '2018-07-24 05:17:23', 'Rajasthan State Highway 12 - dispensary'),
(162, 'VIJAY KUMAR', 'M', 53, 'RENI ALWAR', 'Alwar', 'Rajasthan', '27.1671174', '76.7388437', '2018-07-24 05:17:26', 'Alwar - dispensary'),
(164, 'MUSKAN KHANAM', 'F', 53, 'PREM JI KE HOTAL KE PASS CHHABRA', 'Hill View Colony', 'Rajasthan', '24.6733641', '76.8472798', '2018-07-24 05:17:28', 'Hill View Colony - dispensary'),
(170, 'MAMTA MEHRA', 'F', 46, 'DHAKEDI', 'India', 'Rajasthan', '27.0238036', '74.2179326', '2018-07-24 05:17:32', 'India - dispensary'),
(172, 'POOJA GOSWAMI', 'F', 53, 'VILL UPREDA POST RASHMI', 'Bhilwara', 'Rajasthan', '25.5786531', '74.7278544', '2018-07-24 05:17:34', 'Bhilwara - dispensary'),
(177, 'JAKIR KHAN ', 'M', 53, 'ALWAR', 'Alwar', 'Rajasthan', '27.5529907', '76.6345735', '2018-07-24 05:18:49', 'Alwar - dispensary'),
(178, 'DOLI', 'F', 62, 'KUKRA MANKRA SAIPAU', 'Dhaulpur', 'Rajasthan', '26.8177208', '77.7480692', '2018-07-24 05:18:50', 'Dhaulpur - dispensary'),
(182, 'arjun bhati ', 'M', 53, 'k. e. m road b sethiya gali bikaner ', 'Chaukhunti Mohalla', 'Rajasthan', '28.018218', '73.3145409', '2018-07-24 05:18:53', 'Chaukhunti Mohalla - dispensary'),
(184, 'Parwin ansari', 'F', 46, 'Momin mohalla Kapasan', 'Chittaurgarh', 'Rajasthan', '24.8866929', '74.3158572', '2018-07-24 05:18:55', 'Chittaurgarh - dispensary'),
(186, 'Mukesh kumar Meena', 'M', 33, 'Sabla dungerpur', 'Dungarpur', 'Rajasthan', '23.8392822', '74.1753734', '2018-07-24 05:28:57', 'Dungarpur - dispensary'),
(187, 'Gati Sharma', 'F', 53, 'Behind Sai Baba Temple Prem Nagar, Badgaon Udaipur', 'Udaipur', 'Rajasthan', '24.63666', '73.6801092', '2018-07-24 05:29:22', 'Udaipur - dispensary'),
(188, 'Anita Paliwal', 'F', 46, 'Baghelo ka guda, Badgaon Udaipur', 'Udaipur', 'Rajasthan', '24.63666', '73.6801092', '2018-07-24 05:29:23', 'Udaipur - dispensary'),
(189, 'Pooja Goswami', 'F', 53, 'Karan Gi Ka Guda, Badaon Udaipur', 'Udaipur', 'Rajasthan', '24.585445', '73.712479', '2018-07-24 05:29:24', 'Udaipur - dispensary'),
(194, 'Seema meena', 'F', 46, 'Rishabdhev udaipur', 'Udaipur', 'Rajasthan', '24.0781195', '73.6918806', '2018-07-24 05:29:28', 'Udaipur - dispensary'),
(196, 'RANI KANDARA', 'F', 65, 'JELAR VALI GALI NO. 2 LOHAKHAN AJMER', 'Nagina Bagh', 'Rajasthan', '26.4713723', '74.6353343', '2018-07-24 05:29:30', 'Nagina Bagh - dispensary'),
(197, 'PREM KUMARI VAISHNAV', 'F', 53, 'VILL KESARPUR', 'Alwar', 'Rajasthan', '27.5094019', '76.6037222', '2018-07-24 05:29:31', 'Alwar - dispensary'),
(200, 'SUNITA MEEN', 'F', 62, 'UMAKHEDI, DIST.- PRATAPGARH', 'Rajasthan', 'Rajasthan', '24.0296801', '74.6868815', '2018-07-24 05:29:34', 'Rajasthan - dispensary'),
(201, 'SHANU BHAT', 'F', 66, 'VILL BOR KHERA', 'Bhilwara', 'Rajasthan', '25.3029411', '74.9354909', '2018-07-24 05:29:35', 'Bhilwara - dispensary'),
(203, 'Karishma Rangaswami', 'F', 53, 'Shri Ram Colony Ward No. 1, Manoharpura,Badgaon Udaipur', 'UIT Colony', 'Rajasthan', '24.5916125', '73.7528024', '2018-07-24 05:29:37', 'UIT Colony - dispensary'),
(204, 'ARJUN SINGH MEENA', 'M', 46, 'VILL RC KA KHERA', 'India', 'Rajasthan', '27.0238036', '74.2179326', '2018-07-24 05:37:18', 'India - dispensary'),
(205, 'LALITA KUMARI', 'F', 46, 'DAYANAND BAL SADAN, KESAR GANJ AJMER', 'Ajmer', 'Rajasthan', '26.4496166', '74.635194', '2018-07-24 05:37:19', 'Ajmer - dispensary'),
(206, 'KAVITA ', 'F', 53, '60/43 HARI OM MARG BHAJAN GANJ, AJMER', 'Hari Om Marg', 'Rajasthan', '26.4351501', '74.6499163', '2018-07-24 05:37:22', 'Hari Om Marg - dispensary'),
(207, 'Bhuri Kumari Meena', 'F', 46, 'Sarada Udaipur', 'Udaipur', 'Rajasthan', '24.554643', '73.7427551', '2018-07-24 05:37:23', 'Udaipur - dispensary'),
(208, 'ST- RAKESH', 'M', 66, 'KUNDLA KHURD, BANSWARA', 'Banswara', 'Rajasthan', '23.5092965', '74.528751', '2018-07-24 05:37:39', 'Banswara - dispensary'),
(209, 'SAMATA KUMARI MEENA', 'F', 32, 'RAMGARH', 'Sikar', 'Rajasthan', '27.2502576', '75.1720488', '2018-07-24 05:37:40', 'Sikar - dispensary'),
(210, 'SONALI DHAWAN', 'F', 46, 'PRATAPNAGAR CHITTORGARH', 'Chittorgarh', 'Rajasthan', '24.8751019', '74.6180833', '2018-07-24 05:37:41', 'Chittorgarh - dispensary'),
(211, 'Ajay Meena', 'M', 46, 'Rishadhev udaipur', 'Udaipur', 'Rajasthan', '24.0781195', '73.6918806', '2018-07-24 05:37:43', 'Udaipur - dispensary'),
(212, 'NILAM MALVIYA', 'F', 53, 'BADI SADRI', 'Chittaurgarh', 'Rajasthan', '24.4129645', '74.4735495', '2018-07-24 05:37:44', 'Chittaurgarh - dispensary'),
(213, 'RATAN  LAL MALI', 'M', 46, 'WARD NO 1 BHUPALSAGAR', 'Chittaurgarh', 'Rajasthan', '24.8561415', '74.209128', '2018-07-24 05:37:45', 'Chittaurgarh - dispensary'),
(214, 'MOTILAL MEENA', 'M', 53, 'GYASPUR, GODALIYAFALA, DIST.- PRATAPGARH', 'Chittaurgarh', 'Rajasthan', '24.0948247', '74.5873348', '2018-07-24 05:37:46', 'Chittaurgarh - dispensary'),
(215, 'Kuber Lal Damor', 'M', 62, 'Peepalkhoont Pratapgarh', 'Rajasthan', 'Rajasthan', '24.0296801', '74.6868815', '2018-07-24 05:37:48', 'Rajasthan - dispensary'),
(216, 'MITESH BYADWAL', 'M', 52, 'B-562 PANCHSEEL NAGAR, AJMER', 'Rajasthan', 'Rajasthan', '26.5085259', '74.6340202', '2018-07-24 05:37:49', 'Rajasthan - dispensary'),
(217, 'MUSKAN KHUSHWAHA', 'F', 56, 'PATHAK KA BADA JONSGANJ, AJMER', 'Ajmer', 'Rajasthan', '26.4498954', '74.6399163', '2018-07-24 05:37:50', 'Ajmer - dispensary'),
(218, 'TAMMNA BANO ', 'F', 46, 'JUNI BEGU WARD NO 19 BEGUN ', 'Kharia Kua', 'Rajasthan', '28.0124563', '75.7876552', '2018-07-24 05:39:29', 'Kharia Kua - dispensary'),
(219, 'NISHA KANWAR', 'F', 62, 'RAWATBHATA', 'Chittaurgarh', 'Rajasthan', '24.9305954', '75.5909259', '2018-07-24 05:39:30', 'Chittaurgarh - dispensary'),
(220, 'GEETA KUMARI MEENA', 'F', 56, 'SAWRIYAJI FALA, GYAASPUR, DIST.- PRATAPGARH', 'Rajasthan', 'Rajasthan', '24.0296801', '74.6868815', '2018-07-24 05:39:31', 'Rajasthan - dispensary'),
(221, 'DEVNARAYAN PARASHAR', 'M', 62, 'BHUPALSAGAR', 'Chittaurgarh', 'Rajasthan', '24.8561415', '74.209128', '2018-07-24 05:39:32', 'Chittaurgarh - dispensary'),
(222, 'ST- MANISH', 'M', 53, 'KUNDLA KHURD, BANSWARA', 'Banswara', 'Rajasthan', '23.5092965', '74.528751', '2018-07-24 05:39:35', 'Banswara - dispensary'),
(223, 'TANUJ MEGHWAL', 'M', 53, 'WARD 24 RAWATBHATA', 'Chittaurgarh', 'Rajasthan', '24.9305954', '75.5909259', '2018-07-24 05:39:35', 'Chittaurgarh - dispensary'),
(224, 'Karishma meena', 'F', 46, 'rishabdhev udaipur', 'Udaipur', 'Rajasthan', '24.0781195', '73.6918806', '2018-07-24 05:39:36', 'Udaipur - dispensary'),
(225, 'HEERA AL MEENA', 'M', 66, 'VILL.- JOLAR, DIST.- PRATAPGARH', 'Chittaurgarh', 'Rajasthan', '24.0101096', '74.5521869', '2018-07-24 05:39:37', 'Chittaurgarh - dispensary'),
(226, 'SEEMA KUMARI MEENA', 'F', 32, 'KALYANPURA, DIST.- PRATAPGARH', 'Neemuch', 'Rajasthan', '24.2795302', '74.7644289', '2018-07-24 05:39:38', 'Neemuch - dispensary'),
(227, 'YAMINI CHUDAWAT', 'F', 65, 'BASSI KHERA CHITTORGARH', 'Chittaurgarh', 'Rajasthan', '25.0134714', '74.7658918', '2018-07-24 05:39:39', 'Chittaurgarh - dispensary'),
(228, 'KHUSHBU AHIR', 'F', 62, 'VILL UPREDA POST RASHMI', 'Bhilwara', 'Rajasthan', '25.5786531', '74.7278544', '2018-07-24 05:39:40', 'Bhilwara - dispensary'),
(229, 'MONIKA MENARIYA', 'F', 46, 'VILL BHANUJA  BADISADRI', 'Chittaurgarh', 'Rajasthan', '24.4129645', '74.4735495', '2018-07-24 05:39:41', 'Chittaurgarh - dispensary'),
(230, 'Rinku Meena', 'F', 46, 'Sarada Udaipur', 'Udaipur', 'Rajasthan', '24.554643', '73.7427551', '2018-07-24 05:39:41', 'Udaipur - dispensary'),
(231, 'PREMA KUMARI MEENA', 'F', 66, 'GYAASPUR, SADARIFALA', 'India', 'Rajasthan', '27.0238036', '74.2179326', '2018-07-24 05:39:42', 'India - dispensary'),
(232, 'ST- MAYA', 'F', 46, 'BANSWARA', 'Banswara', 'Rajasthan', '23.5461394', '74.4349761', '2018-07-24 05:39:43', 'Banswara - dispensary'),
(233, 'BHARAT BARETH', 'M', 65, 'KUMAWAT KA MOHALLA GOSUNDA', 'Chittaurgarh', 'Rajasthan', '24.8539239', '74.5404694', '2018-07-24 05:39:44', 'Chittaurgarh - dispensary'),
(234, 'TAMMNA BANO ', 'F', 46, 'JUNI BEGU WARD NO 19 BEGUN ', 'Kharia Kua', 'Rajasthan', '28.0124563', '75.7876552', '2018-07-24 05:39:45', 'Kharia Kua - dispensary'),
(235, 'NIDHI NANDWANIYA', 'F', 53, 'BHOPAI RAM BULLING AJMER', 'Ajmer', 'Rajasthan', '26.4498954', '74.6399163', '2018-07-24 05:39:46', 'Ajmer - dispensary'),
(236, 'ST- SONIYA', 'F', 62, 'BANSWARA', 'Banswara', 'Rajasthan', '23.5461394', '74.4349761', '2018-07-24 05:39:46', 'Banswara - dispensary'),
(237, 'SANGITA KUMARI MEENA', 'F', 56, 'DEVPURA FULDA', 'India', 'Rajasthan', '27.0238036', '74.2179326', '2018-07-24 05:39:47', 'India - dispensary'),
(238, 'ANSHIL BHADORIYA', 'F', 62, 'CHARAN BHARTI RAWATBHATA', 'Chittaurgarh', 'Rajasthan', '24.9305954', '75.5909259', '2018-07-24 05:42:15', 'Chittaurgarh - dispensary');

-- --------------------------------------------------------

--
-- Table structure for table `patient_disease`
--

CREATE TABLE `patient_disease` (
  `pd_id` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `disease_id` int(10) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `treated_on` timestamp NULL DEFAULT NULL,
  `cured` int(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient_disease`
--

INSERT INTO `patient_disease` (`pd_id`, `patient_id`, `disease_id`, `added_on`, `treated_on`, `cured`) VALUES
(1, 194, 2, '2018-07-24 05:43:12', NULL, 0),
(2, 235, 2, '2018-07-24 05:43:12', NULL, 0),
(3, 184, 14, '2018-07-24 05:43:12', NULL, 0),
(4, 46, 15, '2018-07-24 05:43:12', NULL, 0),
(5, 132, 2, '2018-07-24 05:43:12', NULL, 0),
(6, 215, 5, '2018-07-24 05:43:12', NULL, 0),
(7, 32, 6, '2018-07-24 05:43:12', NULL, 0),
(8, 106, 12, '2018-07-24 05:43:12', NULL, 0),
(9, 115, 7, '2018-07-24 05:43:12', NULL, 0),
(10, 11, 14, '2018-07-24 05:43:12', NULL, 0),
(11, 219, 2, '2018-07-24 05:43:12', NULL, 0),
(12, 42, 16, '2018-07-24 05:43:12', NULL, 0),
(13, 182, 2, '2018-07-24 05:43:12', NULL, 0),
(14, 49, 10, '2018-07-24 05:43:12', NULL, 0),
(15, 10, 2, '2018-07-24 05:43:12', NULL, 0),
(16, 5, 1, '2018-07-24 05:43:12', NULL, 0),
(17, 150, 5, '2018-07-24 05:43:12', NULL, 0),
(18, 110, 12, '2018-07-24 05:43:12', NULL, 0),
(19, 211, 5, '2018-07-24 05:43:12', NULL, 0),
(20, 204, 5, '2018-07-24 05:43:12', NULL, 0),
(21, 94, 16, '2018-07-24 05:43:12', NULL, 0),
(22, 92, 13, '2018-07-24 05:43:12', NULL, 0),
(23, 95, 12, '2018-07-24 05:43:12', NULL, 0),
(24, 58, 1, '2018-07-24 05:43:12', NULL, 0),
(25, 113, 1, '2018-07-24 05:43:12', NULL, 0),
(26, 172, 15, '2018-07-24 05:43:12', NULL, 0),
(27, 99, 14, '2018-07-24 05:43:12', NULL, 0),
(28, 226, 2, '2018-07-24 05:43:12', NULL, 0),
(29, 216, 10, '2018-07-24 05:43:12', NULL, 0),
(30, 60, 3, '2018-07-24 05:43:12', NULL, 0),
(31, 229, 7, '2018-07-24 05:43:12', NULL, 0),
(32, 28, 1, '2018-07-24 05:43:12', NULL, 0),
(33, 107, 13, '2018-07-24 05:43:12', NULL, 0),
(34, 20, 16, '2018-07-24 05:43:12', NULL, 0),
(35, 7, 10, '2018-07-24 05:43:12', NULL, 0),
(36, 143, 13, '2018-07-24 05:43:13', NULL, 0),
(37, 124, 16, '2018-07-24 05:43:13', NULL, 0),
(38, 18, 10, '2018-07-24 05:43:13', NULL, 0),
(39, 177, 1, '2018-07-24 05:43:13', NULL, 0),
(40, 15, 13, '2018-07-24 05:43:13', NULL, 0),
(41, 218, 5, '2018-07-24 05:43:13', NULL, 0),
(42, 8, 15, '2018-07-24 05:43:13', NULL, 0),
(43, 52, 3, '2018-07-24 05:43:13', NULL, 0),
(44, 159, 7, '2018-07-24 05:43:13', NULL, 0),
(45, 97, 2, '2018-07-24 05:43:13', NULL, 0),
(46, 203, 16, '2018-07-24 05:43:13', NULL, 0),
(47, 88, 15, '2018-07-24 05:43:13', NULL, 0),
(48, 56, 12, '2018-07-24 05:43:13', NULL, 0),
(49, 197, 1, '2018-07-24 05:43:13', NULL, 0),
(50, 213, 13, '2018-07-24 05:43:13', NULL, 0),
(51, 140, 7, '2018-07-24 05:43:13', NULL, 0),
(52, 59, 3, '2018-07-24 05:43:13', NULL, 0),
(53, 147, 6, '2018-07-24 05:43:13', NULL, 0),
(54, 96, 14, '2018-07-24 05:43:13', NULL, 0),
(55, 146, 15, '2018-07-24 05:43:13', NULL, 0),
(56, 102, 2, '2018-07-24 05:43:13', NULL, 0),
(57, 30, 10, '2018-07-24 05:43:13', NULL, 0),
(58, 164, 7, '2018-07-24 05:43:13', NULL, 0),
(59, 231, 13, '2018-07-24 05:43:13', NULL, 0),
(60, 135, 13, '2018-07-24 05:43:13', NULL, 0),
(61, 24, 2, '2018-07-24 05:43:13', NULL, 0),
(62, 27, 10, '2018-07-24 05:43:13', NULL, 0),
(63, 117, 14, '2018-07-24 05:43:13', NULL, 0),
(64, 233, 7, '2018-07-24 05:43:13', NULL, 0),
(65, 91, 10, '2018-07-24 05:43:13', NULL, 0),
(66, 98, 1, '2018-07-24 05:43:13', NULL, 0),
(67, 120, 16, '2018-07-24 05:43:13', NULL, 0),
(68, 209, 1, '2018-07-24 05:43:13', NULL, 0),
(69, 37, 6, '2018-07-24 05:43:13', NULL, 0),
(70, 38, 12, '2018-07-24 05:43:13', NULL, 0),
(71, 31, 6, '2018-07-24 05:43:13', NULL, 0),
(72, 101, 15, '2018-07-24 05:43:13', NULL, 0),
(73, 220, 15, '2018-07-24 05:43:13', NULL, 0),
(74, 104, 2, '2018-07-24 05:43:13', NULL, 0),
(75, 234, 1, '2018-07-24 05:43:13', NULL, 0),
(76, 227, 3, '2018-07-24 05:43:13', NULL, 0),
(77, 141, 6, '2018-07-24 05:43:13', NULL, 0),
(78, 206, 5, '2018-07-24 05:43:13', NULL, 0),
(79, 208, 12, '2018-07-24 05:43:13', NULL, 0),
(80, 238, 10, '2018-07-24 05:43:13', NULL, 0),
(81, 187, 16, '2018-07-24 05:43:13', NULL, 0),
(82, 34, 5, '2018-07-24 05:43:13', NULL, 0),
(83, 103, 14, '2018-07-24 05:43:13', NULL, 0),
(84, 232, 6, '2018-07-24 05:43:13', NULL, 0),
(85, 16, 3, '2018-07-24 05:43:13', NULL, 0),
(86, 51, 12, '2018-07-24 05:43:13', NULL, 0),
(87, 116, 5, '2018-07-24 05:43:13', NULL, 0),
(88, 109, 15, '2018-07-24 05:43:13', NULL, 0),
(89, 93, 2, '2018-07-24 05:43:13', NULL, 0),
(90, 47, 7, '2018-07-24 05:43:13', NULL, 0),
(91, 48, 2, '2018-07-24 05:43:13', NULL, 0),
(92, 44, 16, '2018-07-24 05:43:13', NULL, 0),
(93, 212, 3, '2018-07-24 05:43:13', NULL, 0),
(94, 127, 15, '2018-07-24 05:43:13', NULL, 0),
(95, 43, 14, '2018-07-24 05:43:13', NULL, 0),
(96, 200, 6, '2018-07-24 05:43:13', NULL, 0),
(97, 87, 10, '2018-07-24 05:43:13', NULL, 0),
(98, 100, 1, '2018-07-24 05:43:13', NULL, 0),
(99, 156, 10, '2018-07-24 05:43:13', NULL, 0),
(100, 1, 2, '2018-07-24 05:43:13', NULL, 0),
(101, 149, 3, '2018-07-24 05:43:13', NULL, 0),
(102, 223, 5, '2018-07-24 05:43:13', NULL, 0),
(103, 112, 12, '2018-07-24 05:43:13', NULL, 0),
(104, 188, 12, '2018-07-24 05:43:13', NULL, 0),
(105, 154, 1, '2018-07-24 05:43:13', NULL, 0),
(106, 162, 1, '2018-07-24 05:43:13', NULL, 0),
(107, 196, 6, '2018-07-24 05:43:13', NULL, 0),
(108, 105, 7, '2018-07-24 05:43:13', NULL, 0),
(109, 35, 3, '2018-07-24 05:43:13', NULL, 0),
(110, 210, 16, '2018-07-24 05:43:13', NULL, 0),
(111, 228, 1, '2018-07-24 05:43:13', NULL, 0),
(112, 222, 6, '2018-07-24 05:43:13', NULL, 0),
(113, 137, 1, '2018-07-24 05:43:13', NULL, 0),
(114, 54, 5, '2018-07-24 05:43:13', NULL, 0),
(115, 50, 1, '2018-07-24 05:43:13', NULL, 0),
(116, 2, 6, '2018-07-24 05:43:13', NULL, 0),
(117, 237, 6, '2018-07-24 05:43:13', NULL, 0),
(118, 17, 15, '2018-07-24 05:43:13', NULL, 0),
(119, 217, 7, '2018-07-24 05:43:13', NULL, 0),
(120, 236, 5, '2018-07-24 05:43:13', NULL, 0),
(121, 178, 3, '2018-07-24 05:43:13', NULL, 0),
(122, 89, 1, '2018-07-24 05:43:13', NULL, 0),
(123, 136, 1, '2018-07-24 05:43:13', NULL, 0),
(124, 13, 2, '2018-07-24 05:43:13', NULL, 0),
(125, 205, 3, '2018-07-24 05:43:13', NULL, 0),
(126, 230, 1, '2018-07-24 05:43:13', NULL, 0),
(127, 9, 10, '2018-07-24 05:43:13', NULL, 0),
(128, 29, 10, '2018-07-24 05:43:13', NULL, 0),
(129, 201, 14, '2018-07-24 05:43:13', NULL, 0),
(130, 189, 2, '2018-07-24 05:43:13', NULL, 0),
(131, 225, 7, '2018-07-24 05:43:13', NULL, 0),
(132, 144, 14, '2018-07-24 05:43:13', NULL, 0),
(133, 57, 6, '2018-07-24 05:43:13', NULL, 0),
(134, 108, 6, '2018-07-24 05:43:13', NULL, 0),
(135, 39, 6, '2018-07-24 05:43:13', NULL, 0),
(136, 170, 7, '2018-07-24 05:43:13', NULL, 0),
(137, 86, 5, '2018-07-24 05:43:13', NULL, 0),
(138, 4, 2, '2018-07-24 05:43:13', NULL, 0),
(139, 36, 2, '2018-07-24 05:43:13', NULL, 0),
(140, 84, 7, '2018-07-24 05:43:13', NULL, 0),
(141, 122, 13, '2018-07-24 05:43:13', NULL, 0),
(142, 55, 7, '2018-07-24 05:43:13', NULL, 0),
(143, 6, 15, '2018-07-24 05:43:13', NULL, 0),
(144, 26, 14, '2018-07-24 05:43:13', NULL, 0),
(145, 114, 15, '2018-07-24 05:43:13', NULL, 0),
(146, 85, 12, '2018-07-24 05:43:13', NULL, 0),
(147, 186, 3, '2018-07-24 05:43:13', NULL, 0),
(148, 155, 2, '2018-07-24 05:43:13', NULL, 0),
(149, 40, 2, '2018-07-24 05:43:13', NULL, 0),
(150, 14, 1, '2018-07-24 05:43:13', NULL, 0),
(151, 53, 7, '2018-07-24 05:43:13', NULL, 0),
(152, 33, 7, '2018-07-24 05:43:13', NULL, 0),
(153, 128, 14, '2018-07-24 05:43:13', NULL, 0),
(154, 224, 6, '2018-07-24 05:43:13', NULL, 0),
(155, 90, 15, '2018-07-24 05:43:13', NULL, 0),
(156, 207, 1, '2018-07-24 05:43:13', NULL, 0),
(157, 12, 5, '2018-07-24 05:43:13', NULL, 0),
(158, 19, 3, '2018-07-24 05:43:13', NULL, 0),
(159, 111, 15, '2018-07-24 05:43:13', NULL, 0),
(160, 22, 7, '2018-07-24 05:43:13', NULL, 0),
(161, 214, 15, '2018-07-24 05:43:13', NULL, 0),
(162, 221, 16, '2018-07-24 05:43:13', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city_cord`
--
ALTER TABLE `city_cord`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `patient_disease`
--
ALTER TABLE `patient_disease`
  ADD PRIMARY KEY (`pd_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city_cord`
--
ALTER TABLE `city_cord`
  MODIFY `city_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `disease_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT for table `patient_disease`
--
ALTER TABLE `patient_disease`
  MODIFY `pd_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
