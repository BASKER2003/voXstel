-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 06:08 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `employeeid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`employeeid`, `password`) VALUES
('54321', 'admin'),
('67890', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `annex`
--

CREATE TABLE `annex` (
  `room_no` int(100) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `capacity` int(255) NOT NULL,
  `available` int(235) NOT NULL,
  `bathroom_type` varchar(255) NOT NULL,
  `assigned_for` varchar(255) NOT NULL,
  `AC` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `annex`
--

INSERT INTO `annex` (`room_no`, `room_type`, `capacity`, `available`, `bathroom_type`, `assigned_for`, `AC`) VALUES
(1, 'DC', 2, 0, 'Common', 'student', 0),
(2, 'DC', 2, 1, 'Common', 'student', 0),
(3, 'FC', 4, 4, 'Common', 'student', 0),
(4, 'FC', 4, 4, 'Common', 'student', 0),
(5, 'DB', 2, 2, 'Attached', 'student', 0),
(6, 'DB', 2, 2, 'Attached', 'student', 0),
(7, 'DB', 2, 2, 'Attached', 'student', 0),
(8, 'DB', 2, 2, 'Attached', 'student', 0),
(9, 'DC', 2, 2, 'Common', 'student', 0),
(10, 'DC', 2, 2, 'Common', 'student', 0),
(11, 'TC', 3, 3, 'Common', 'student', 0),
(12, 'TB', 3, 3, 'Attached', 'student', 0),
(13, 'TB', 3, 3, 'Attached', 'student', 0),
(14, 'TB', 3, 3, 'Attached', 'student', 0),
(15, 'TB', 3, 3, 'Attached', 'student', 0),
(16, 'DC', 2, 2, 'Common', 'student', 0),
(17, 'DC', 2, 2, 'Common', 'student', 0),
(18, 'TC', 3, 3, 'Common', 'student', 0),
(19, 'FC', 4, 4, 'Common', 'student', 0),
(20, 'FC', 4, 4, 'Common', 'student', 0),
(21, 'DB', 2, 2, 'Attached', 'student', 0),
(22, 'DB', 2, 2, 'Attached', 'student', 0),
(23, 'DB', 2, 2, 'Attached', 'student', 0),
(24, 'DB', 2, 2, 'Attached', 'student', 0),
(25, 'DC', 2, 2, 'Common', 'student', 0),
(26, 'DC', 2, 2, 'Common', 'student', 0),
(27, 'TC', 3, 3, 'Common', 'student', 0),
(28, 'TC', 3, 3, 'Common', 'student', 0),
(29, 'FC', 4, 4, 'Common', 'student', 0),
(30, 'FC', 4, 4, 'Common', 'student', 0),
(31, 'DB', 2, 1, 'Attached', 'student', 1),
(32, 'DB', 2, 2, 'Attached', 'student', 1),
(33, 'DB', 2, 2, 'Attached', 'student', 1),
(34, 'DB', 2, 2, 'Attached', 'student', 1),
(35, 'DC', 2, 2, 'Common', 'student', 0),
(36, 'DC', 2, 2, 'Common', 'student', 0),
(37, 'TC', 3, 3, 'Common', 'student', 0),
(38, 'TB', 3, 3, 'Attached', 'student', 0),
(39, 'TB', 3, 3, 'Attached', 'student', 0),
(40, 'TC', 3, 3, 'Common', 'student', 0),
(41, 'DC', 2, 2, 'Common', 'student', 0),
(42, 'DC', 2, 2, 'Common', 'student', 0),
(43, 'TB', 3, 3, 'Attached', 'student', 0),
(44, 'TB', 3, 3, 'Attached', 'student', 0),
(45, 'FC', 4, 4, 'Common', 'student', 0),
(46, 'FC', 4, 4, 'Common', 'student', 0),
(47, 'DB', 2, 2, 'Attached', 'student', 0),
(48, 'DB', 2, 2, 'Attached', 'student', 0),
(49, 'DB', 2, 2, 'Attached', 'student', 0),
(50, 'DB', 2, 2, 'Attached', 'student', 0),
(51, 'DC', 2, 2, 'Common', 'student', 0),
(52, 'DC', 2, 2, 'Common', 'student', 0),
(53, 'DB', 2, 2, 'Common', 'warden', 0),
(54, 'DB', 2, 2, 'Common', 'staff', 0),
(55, 'DB', 2, 2, 'Common', 'sick', 0),
(56, 'DO', 0, 0, 'nil', 'dorm', 0),
(57, 'DO', 0, 0, 'nil', 'dorm', 0),
(58, 'DO', 0, 0, 'nil', 'dorm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chacko`
--

CREATE TABLE `chacko` (
  `room_no` int(100) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `capacity` int(255) NOT NULL,
  `available` int(235) NOT NULL,
  `bathroom_type` varchar(255) NOT NULL,
  `assigned_for` varchar(255) NOT NULL,
  `AC` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chacko`
--

INSERT INTO `chacko` (`room_no`, `room_type`, `capacity`, `available`, `bathroom_type`, `assigned_for`, `AC`) VALUES
(1, 'DC', 2, 0, 'Common', 'student', 0),
(2, 'DC', 2, 1, 'Common', 'student', 0),
(3, 'FC', 4, 4, 'Common', 'student', 0),
(4, 'FC', 4, 4, 'Common', 'student', 0),
(5, 'DB', 2, 2, 'Attached', 'student', 0),
(6, 'DB', 2, 2, 'Attached', 'student', 0),
(7, 'DB', 2, 2, 'Attached', 'student', 0),
(8, 'DB', 2, 2, 'Attached', 'student', 0),
(9, 'DC', 2, 2, 'Common', 'student', 0),
(10, 'DC', 2, 2, 'Common', 'student', 0),
(11, 'TC', 3, 3, 'Common', 'student', 0),
(12, 'TB', 3, 3, 'Attached', 'student', 0),
(13, 'TB', 3, 3, 'Attached', 'student', 0),
(14, 'TB', 3, 3, 'Attached', 'student', 0),
(15, 'TB', 3, 3, 'Attached', 'student', 0),
(16, 'DC', 2, 2, 'Common', 'student', 0),
(17, 'DC', 2, 2, 'Common', 'student', 0),
(18, 'TC', 3, 3, 'Common', 'student', 0),
(19, 'FC', 4, 4, 'Common', 'student', 0),
(20, 'FC', 4, 4, 'Common', 'student', 0),
(21, 'DB', 2, 2, 'Attached', 'student', 0),
(22, 'DB', 2, 2, 'Attached', 'student', 0),
(23, 'DB', 2, 2, 'Attached', 'student', 0),
(24, 'DB', 2, 2, 'Attached', 'student', 0),
(25, 'DC', 2, 2, 'Common', 'student', 0),
(26, 'DC', 2, 2, 'Common', 'student', 0),
(27, 'TC', 3, 3, 'Common', 'student', 0),
(28, 'TC', 3, 3, 'Common', 'student', 0),
(29, 'FC', 4, 4, 'Common', 'student', 0),
(30, 'FC', 4, 4, 'Common', 'student', 0),
(31, 'DB', 2, 2, 'Attached', 'student', 1),
(32, 'DB', 2, 2, 'Attached', 'student', 1),
(33, 'DB', 2, 2, 'Attached', 'student', 1),
(34, 'DB', 2, 2, 'Attached', 'student', 1),
(35, 'DC', 2, 2, 'Common', 'student', 0),
(36, 'DC', 2, 2, 'Common', 'student', 0),
(37, 'TC', 3, 3, 'Common', 'student', 0),
(38, 'TB', 3, 3, 'Attached', 'student', 0),
(39, 'TB', 3, 3, 'Attached', 'student', 0),
(40, 'TC', 3, 3, 'Common', 'student', 0),
(41, 'DC', 2, 2, 'Common', 'student', 0),
(42, 'DC', 2, 2, 'Common', 'student', 0),
(43, 'TB', 3, 3, 'Attached', 'student', 0),
(44, 'TB', 3, 3, 'Attached', 'student', 0),
(45, 'FC', 4, 4, 'Common', 'student', 0),
(46, 'FC', 4, 4, 'Common', 'student', 0),
(47, 'DB', 2, 2, 'Attached', 'student', 0),
(48, 'DB', 2, 2, 'Attached', 'student', 0),
(49, 'DB', 2, 2, 'Attached', 'student', 0),
(50, 'DB', 2, 2, 'Attached', 'student', 0),
(51, 'DC', 2, 2, 'Common', 'student', 0),
(52, 'DC', 2, 2, 'Common', 'student', 0),
(53, 'DB', 2, 2, 'Common', 'warden', 0),
(54, 'DB', 2, 2, 'Common', 'staff', 0),
(55, 'DB', 2, 2, 'Common', 'sick', 0),
(56, 'DO', 0, 0, 'nil', 'dorm', 0),
(57, 'DO', 0, 0, 'nil', 'dorm', 0),
(58, 'DO', 0, 0, 'nil', 'dorm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` bigint(230) NOT NULL,
  `name` varchar(35) NOT NULL,
  `regno` varchar(35) NOT NULL,
  `block` varchar(35) NOT NULL,
  `roomno` bigint(230) NOT NULL,
  `complaint` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `name`, `regno`, `block`, `roomno`, `complaint`, `status`) VALUES
(1, 'Priya', '20it50', 'Chacko Block ', 1, 'Heater is not working in our room.', 'rejected'),
(2, 'Priya', '20it50', 'Chacko Block ', 1, 'AC is not working in our room.', 'rejected'),
(3, 'Ricky', '20it39', 'Annex Block', 1, 'Our room should be cleaned.', 'resolved'),
(4, 'Ricky', '20it39', 'Annex Block', 1, 'Powersupply is not stable in our room.', 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `leaverequests`
--

CREATE TABLE `leaverequests` (
  `id` bigint(233) NOT NULL,
  `name` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `block` varchar(100) NOT NULL,
  `roomno` varchar(100) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `reason` varchar(250) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaverequests`
--

INSERT INTO `leaverequests` (`id`, `name`, `regno`, `block`, `roomno`, `fromdate`, `todate`, `reason`, `status`) VALUES
(1, 'Priya', '20it50', 'Chacko Block ', '1', '2023-04-10', '2023-04-12', 'Mini-Project Work', 'approved'),
(2, 'Ricky', '20it39', 'Annex Block', '1', '2023-04-11', '2023-04-14', 'Internship', 'approved'),
(3, 'Ricky', '20it39', 'Annex Block', '1', '2023-04-17', '2023-04-18', 'Marriage Function', 'rejected'),
(4, 'Sooriya', '20cs032', 'St Thomas Block', '1', '2023-04-11', '2023-04-12', 'IET', 'approved'),
(5, 'Ricky', '20it39', 'Annex Block', '1', '2023-04-18', '2023-04-19', 'MINI-PROJECT', 'approved'),
(8, 'Jayasuriya', '20it59', 'St Thomas Block', '1', '2023-04-13', '2023-04-15', 'Umagine', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `day` varchar(20) NOT NULL,
  `breakfast` varchar(255) NOT NULL,
  `lunch` varchar(255) NOT NULL,
  `evening_snack` varchar(255) NOT NULL,
  `dinner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `day`, `breakfast`, `lunch`, `evening_snack`, `dinner`) VALUES
(1, 'Monday', 'Idly, Vadai, Sambar, Tomato Chutney, Bread & Jam, Coffee', 'White Rice, Kara Kolambu, Rasam, Kootu, Egg Masala, Papad, Pickle, Butter Milk', 'Tea, sundal', 'Kal Dosa, Sambar/Chutney, Rasam Sadam, Milk'),
(2, 'Tuesday', 'Idyappam, Veg Kurma, Cut Fruits, Coffee', 'White Rice, Sambar, Rasam, Salad, Veg Poriyal, Pickle, Papad', 'Tea, Masala Bun', 'Chappathi, Veg Kuruma, Chicken Kurma, Rasam Sadam'),
(3, 'Wednesday', 'Ven Pongal, Vadai, Sambar, Kara Chutney, Bread & Jam, Coffee', 'White Rice, Kadamba Sambar, Veg Poriyal, Rasam, Papad, Pickle, Butter Milk', 'Tea, Muffins', 'Uthappam, Sambar, Chutney, Milk'),
(4, 'Thursday', 'Poori, Potato Baaji, Bread & Jam, Coffee', 'Veg Pulav, Raitha, Veg.Kurma, Curd Rice, Pickle, Papad', 'Tea, Banana Baaji/Vada', 'Veg Noodles, Egg Noodles, Veg Manchurian, Sauce'),
(5, 'Friday', 'Idly, Vadai, Sambar, Chutney, Coffee', 'White Rice, Kara Kolambu, Veg Poriyal, Rasam , Butter Milk, Papad, Pickle', 'Tea, Tea Cake', 'Parotta, Chicken Gravy, Veg Kurma, Banana'),
(6, 'Saturday', 'Kal Dosa, Sambar, Chutney, Cut Fruits, Coffee', 'White Rice, Keerai Masiyal, Veg Poriyal, Rasam, Papad, Pickle, Butter Milk', 'Tea, Cookies', 'Chappathi, Egg Masala, Veg Gravy, Rasam Rice, Milk'),
(7, 'Sunday', 'Semiya Kitchadi, Sambar, Chutney, Bread & Jam, Coffee', 'Chicken Briyani, Veg Briyani, Raitha, Sweet, Rasam Sadam, Curd Rice, Papad, Pickle', 'Tea, Sundal', 'Dosai, Sambar, Chutney, Ice Cream');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `thomas`
--

CREATE TABLE `thomas` (
  `room_no` int(100) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `capacity` int(255) NOT NULL,
  `available` int(235) NOT NULL,
  `bathroom_type` varchar(255) NOT NULL,
  `assigned_for` varchar(255) NOT NULL,
  `AC` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thomas`
--

INSERT INTO `thomas` (`room_no`, `room_type`, `capacity`, `available`, `bathroom_type`, `assigned_for`, `AC`) VALUES
(1, 'DC', 2, 0, 'Common', 'student', 0),
(2, 'DC', 2, 0, 'Common', 'student', 0),
(3, 'FC', 4, 4, 'Common', 'student', 0),
(4, 'FC', 4, 4, 'Common', 'student', 0),
(5, 'DB', 2, 2, 'Attached', 'student', 0),
(6, 'DB', 2, 2, 'Attached', 'student', 0),
(7, 'DB', 2, 2, 'Attached', 'student', 0),
(8, 'DB', 2, 2, 'Attached', 'student', 0),
(9, 'DC', 2, 2, 'Common', 'student', 0),
(10, 'DC', 2, 2, 'Common', 'student', 0),
(11, 'TC', 3, 3, 'Common', 'student', 0),
(12, 'TB', 3, 3, 'Attached', 'student', 0),
(13, 'TB', 3, 3, 'Attached', 'student', 0),
(14, 'TB', 3, 3, 'Attached', 'student', 0),
(15, 'TB', 3, 3, 'Attached', 'student', 0),
(16, 'DC', 2, 2, 'Common', 'student', 0),
(17, 'DC', 2, 2, 'Common', 'student', 0),
(18, 'TC', 3, 3, 'Common', 'student', 0),
(19, 'FC', 4, 4, 'Common', 'student', 0),
(20, 'FC', 4, 4, 'Common', 'student', 0),
(21, 'DB', 2, 2, 'Attached', 'student', 0),
(22, 'DB', 2, 2, 'Attached', 'student', 0),
(23, 'DB', 2, 2, 'Attached', 'student', 0),
(24, 'DB', 2, 2, 'Attached', 'student', 0),
(25, 'DC', 2, 2, 'Common', 'student', 0),
(26, 'DC', 2, 2, 'Common', 'student', 0),
(27, 'TC', 3, 3, 'Common', 'student', 0),
(28, 'TC', 3, 3, 'Common', 'student', 0),
(29, 'FC', 4, 4, 'Common', 'student', 0),
(30, 'FC', 4, 4, 'Common', 'student', 0),
(31, 'DB', 2, 2, 'Attached', 'student', 1),
(32, 'DB', 2, 2, 'Attached', 'student', 1),
(33, 'DB', 2, 2, 'Attached', 'student', 1),
(34, 'DB', 2, 2, 'Attached', 'student', 1),
(35, 'DC', 2, 2, 'Common', 'student', 0),
(36, 'DC', 2, 2, 'Common', 'student', 0),
(37, 'TC', 3, 3, 'Common', 'student', 0),
(38, 'TB', 3, 3, 'Attached', 'student', 0),
(39, 'TB', 3, 3, 'Attached', 'student', 0),
(40, 'TC', 3, 3, 'Common', 'student', 0),
(41, 'DC', 2, 2, 'Common', 'student', 0),
(42, 'DC', 2, 2, 'Common', 'student', 0),
(43, 'TB', 3, 3, 'Attached', 'student', 0),
(44, 'TB', 3, 3, 'Attached', 'student', 0),
(45, 'FC', 4, 4, 'Common', 'student', 0),
(46, 'FC', 4, 4, 'Common', 'student', 0),
(47, 'DB', 2, 2, 'Attached', 'student', 0),
(48, 'DB', 2, 2, 'Attached', 'student', 0),
(49, 'DB', 2, 2, 'Attached', 'student', 0),
(50, 'DB', 2, 2, 'Attached', 'student', 0),
(51, 'DC', 2, 2, 'Common', 'student', 0),
(52, 'DC', 2, 2, 'Common', 'student', 0),
(53, 'DB', 2, 2, 'Common', 'warden', 0),
(54, 'DB', 2, 2, 'Common', 'staff', 0),
(55, 'DB', 2, 2, 'Common', 'sick', 0),
(56, 'DO', 0, 0, 'nil', 'dorm', 0),
(57, 'DO', 0, 0, 'nil', 'dorm', 0),
(58, 'DO', 0, 0, 'nil', 'dorm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(100) NOT NULL,
  `regno` varchar(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` varchar(100) NOT NULL,
  `password` varchar(16) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `block` varchar(100) NOT NULL,
  `roomno` int(10) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `regno`, `email`, `phoneno`, `password`, `gender`, `block`, `roomno`) VALUES
('Kishore', '20cs032', '20cs032@kcgcollege.com', '7358666622', 'Dante@23', 'male', 'St Thomas Block', 2),
('sooriya', '20cs033', '20cs033@kcgcollege.com', '7575223311', 'Don@2003', 'male', 'St Thomas Block', 2),
('Sulthan', '20cs035', '20cs035@kcgcollege.com', '7676889911', 'Kcg@1234', 'male', 'Annex Block', 2),
('Quincy', '20cs34', '20cs034@kcgcollege.com', '5656565656', 'Kcg@1234', 'female', 'Chacko Block', 2),
('Dhanush', '20it14', '20it14@kcgcollege.com', '1239874560', 'Dhanush@1234', 'male', 'St Thomas Block', 1),
('Dhaya', '20it23', 'dhaya@gmail.com', '9876543210', 'App@2003', 'female', 'Chacko Block ', 1),
('Jeeva', '20it24', '20it24@kcgcollege.com', '6543219780', 'Actor@22', 'male', 'Annex block', 1),
('Ricky', '20it39', '20it39@kcgcollege.com', '8877334422', 'Rap@2003', 'male', 'Annex Block', 1),
('Priya', '20it50', '20it50@kcgcollege.com', '7733221188', 'Web@2004', 'female', 'Chacko Block ', 1),
('prince', '20it58', 'baskersuresh0312@gmail.com', '9962508028', 'Kcg@1234', 'male', 'Annex Block', 31),
('Jayasuriya', '20it59', 'jasdihad004@gmail.com', '2412342335', 'Suriya0309@', 'male', 'St Thomas Block', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wardens`
--

CREATE TABLE `wardens` (
  `name` varchar(35) NOT NULL,
  `wardenno` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `block` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wardens`
--

INSERT INTO `wardens` (`name`, `wardenno`, `email`, `phoneno`, `password`, `gender`, `block`) VALUES
('Karthik', 'WA1', 'karthik@gmail.com', '8877332266', 'Wannex@1', 'male', 'Annex Block'),
('Riya', 'WC1', 'riya@gmail.com', '8877443322', 'Wchacko@2', 'female', 'Chacko Block'),
('Nisha', 'WC2', 'nisha@gmail.com', '7766442211', 'Wchacko@2', 'female', 'Chacko Block'),
('Jacob', 'WT1', 'jacob@gmail.com', '9922883355', 'Wthomas@1', 'male', 'St Thomas Block');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`employeeid`);

--
-- Indexes for table `annex`
--
ALTER TABLE `annex`
  ADD PRIMARY KEY (`room_no`);

--
-- Indexes for table `chacko`
--
ALTER TABLE `chacko`
  ADD PRIMARY KEY (`room_no`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaverequests`
--
ALTER TABLE `leaverequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thomas`
--
ALTER TABLE `thomas`
  ADD PRIMARY KEY (`room_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `wardens`
--
ALTER TABLE `wardens`
  ADD PRIMARY KEY (`wardenno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` bigint(230) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leaverequests`
--
ALTER TABLE `leaverequests`
  MODIFY `id` bigint(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
