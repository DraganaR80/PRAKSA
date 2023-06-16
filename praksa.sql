-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 04:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praksa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'admin1@gmail.com', 'admin1234'),
(2, 'admin2@gmail.com', 'admin5678');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `employmentDate` date NOT NULL,
  `netoSallary` int(11) NOT NULL,
  `vacation` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `surname`, `birthday`, `employmentDate`, `netoSallary`, `vacation`, `department`, `education`) VALUES
(2, 'Slavko', 'Rodić', '1965-04-27', '2014-10-17', 100000, 30, 'Acounting', 'Bachelor'),
(3, 'Suzana', 'Glušić', '1980-03-12', '2016-08-04', 35000, 22, 'Analytics', 'Bachelor'),
(5, 'Svetlana', 'Simić', '1989-11-24', '2022-06-07', 80000, 25, 'Administration', 'High school graduate'),
(6, 'Boris', 'Lazukić', '1975-09-10', '2000-03-15', 50000, 25, 'Maintenance', 'High school graduate'),
(7, 'Marica', 'Veličkov', '1967-02-13', '2001-06-19', 45000, 25, 'Maintenance', 'High school graduate'),
(8, 'Biljana', 'Jolić', '1980-12-03', '2015-04-06', 45000, 25, 'Maintenance', 'High school graduate'),
(9, 'Vigor', 'Knežević', '1992-08-12', '2001-04-21', 90000, 28, 'Acounting', 'Bachelor'),
(10, 'Stana', 'Lužaić', '1994-07-03', '2020-08-27', 60000, 25, 'Administration', 'Master\'s degree'),
(11, 'Momirka', 'Nežić', '1970-08-13', '1998-10-24', 105000, 30, 'Acounting', 'Master\'s degree'),
(12, 'Milenko', 'Babić', '1993-04-18', '2017-09-12', 45000, 25, 'Maintenance', 'High school graduate'),
(13, 'Ljudmila', 'Reško', '1988-01-30', '2015-09-17', 45000, 25, 'Maitenance', 'High school graduate '),
(14, 'Danilo', 'Knežević', '1994-04-30', '2020-02-10', 45000, 25, 'Administration', 'High school graduate'),
(15, 'Jagoda', 'Topalović', '1980-12-15', '2006-05-17', 85000, 27, 'Analytics', 'Bachelor'),
(16, 'Slavica', 'Đukić', '1977-06-14', '2014-11-15', 10000, 30, 'Acounting', 'Master\'s'),
(17, 'Radiša', 'Urošević', '1982-08-16', '2017-06-18', 50000, 28, 'Administration', 'High school degree'),
(18, 'Dragutin', 'Topić', '1970-08-13', '2000-03-12', 120000, 30, 'CEO', 'Master\'s'),
(19, 'Dragana', 'Stošić', '1977-10-06', '2015-02-17', 120000, 30, 'CEO', 'Master\'s'),
(20, 'Jovan', 'Dabić', '1969-05-02', '1990-04-02', 122000, 30, 'CEO', 'Bachelor\'s'),
(21, 'Dragana ', 'pipi', '2023-06-07', '2023-06-07', 25000, 22, 'ceo', 'master'),
(25, 'Milena', 'Dravic', '1935-01-04', '2023-06-11', 85000, 30, 'Accounting', 'Bachelor'),
(26, 'Leposava', 'Lukic', '1980-12-12', '2023-06-12', 66000, 29, 'Accounting', 'Bachelor'),
(27, 'Jelica', 'Bogunovic', '1974-11-15', '2023-01-19', 75000, 29, 'Accounting', 'Bachelor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
