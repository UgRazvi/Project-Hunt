-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 08:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dotech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `User` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`User`, `Password`) VALUES
('admin@test.com', 'admin101');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `appointment_date` varchar(255) NOT NULL,
  `current_date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `contact` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `first_name`, `last_name`, `message`, `appointment_date`, `current_date_time`, `contact`, `status`) VALUES
(2, 'Usman', 'Qureshi', 'Hy I am usman', '2023-10-10T18:25', '2023-10-10 12:56:00', '8888888888', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `current_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `file_name`, `title`, `author`, `description`, `current_date`, `status`) VALUES
(17, 'Flower-02.jfif', 'Title 01', 'Usman Qureshi', 'Text', '2023-10-26 07:19:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `current_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `current_date`, `status`) VALUES
(1, 'name', 'jjsdjfh@gmail.com', 'hh', '2023-10-14 15:47:02', 1),
(2, 'Usman Qureshi', 'ugrazvi@gmail.com', 'Contact Enquiry From Usman Qureshi', '2023-10-17 13:10:34', 1),
(3, 'Usman Qureshi', 'ugrazvi@gmail.com', 'Message', '2023-10-26 06:13:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `current_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `file_name`, `title`, `author`, `description`, `current_date`, `status`) VALUES
(1, 'img1.jpg', 'Web Development', 'Usman Qureshi', 'WEb Development On Demand', '0000-00-00 00:00:00', 1),
(2, 'img2.jpg', 'College Projects', 'Usman Qureshi', 'On Demand Projects Available', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student-profile`
--

CREATE TABLE `student-profile` (
  `sfame` varchar(40) NOT NULL,
  `slname` varchar(40) NOT NULL,
  `sbranch` varchar(30) NOT NULL,
  `sskils` varchar(60) NOT NULL,
  `scontact` varchar(15) NOT NULL,
  `semail` varchar(30) NOT NULL,
  `saddress` varchar(100) NOT NULL,
  `sphoto` varchar(200) NOT NULL,
  `sdesc` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student-profile`
--

INSERT INTO `student-profile` (`sfame`, `slname`, `sbranch`, `sskils`, `scontact`, `semail`, `saddress`, `sphoto`, `sdesc`) VALUES
('Mohammed Usman', 'Qureshi', 'cse', 'hcj', '9929114267', 'ugrazvi@gmail.com', 'Hajipura Mohalla Ghanti Dungarpur (Raj.)', '../images./boyicon.png', 'Profile Of Student 1'),
('Rajni', 'Rudrapriya', 'cse', 'hcj', '1234567890', 'abc@test.com', 'ABC Village, XYZ City', '../images./female-avatar-girl-face-woman-user-5-modified.png', 'Profile Of Student 2\r\n'),
('Jigyasa', 'Paliwal', 'cse', 'dotnet', '2143658709', 'test@abc.com', 'XYZ Village, ABC City', '../images./Girl-Avatar.png', 'Profile Of Student 3\r\n'),
('Satyam', 'Kumar', 'it', 'java', '9087654321', 'XYZ@abc.com', 'Jharkhand Bihar', '../images./Usman-Avatar.png', 'Profile Of Student 4'),
('Naresh Kumar', 'Roat', 'etc', 'csharp', '2134567890', 'test@xyz.com', 'Sector 6, Udaipur (Rajasthan)  ', '../images./boysicon.png', 'Naresh Ni Example 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
