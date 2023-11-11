-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2023 at 09:05 AM
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
-- Database: `vaccine`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindata`
--

CREATE TABLE `admindata` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(255) DEFAULT NULL,
  `Lastname` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admindata`
--

INSERT INTO `admindata` (`id`, `Firstname`, `Lastname`, `Email`, `Password`) VALUES
(1, 'test', 'test', 'Test@outlook.com', '$2y$10$EijZ63Crhfx6lG8VNRomsePhQ.SxnVVMPXr6uLQYxkwxxEWxBnjKK');

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `user_id`, `name`, `age`, `gender`, `status`) VALUES
(8, 3, 'talha', '6', 'male', 0),
(9, 3, 'haris', '2', 'male', 0),
(11, 3, 'mk', '18', 'male', 1),
(12, 3, 'aqib', '18', 'male', 1);

-- --------------------------------------------------------

--
-- Table structure for table `childs_appt`
--

CREATE TABLE `childs_appt` (
  `a_id` int(11) NOT NULL,
  `child_id` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `hid` int(11) NOT NULL,
  `vac_id` int(11) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hdata`
--

CREATE TABLE `hdata` (
  `h_id` int(11) NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Password` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hdata`
--

INSERT INTO `hdata` (`h_id`, `h_name`, `address`, `email`, `Password`, `status`) VALUES
(1, 'Civil hospital', 'Sadder, Karachi', 'Civil@gmail.com', '111', 1),
(2, 'Holy family', 'Sadder,karachi', '123@gmail.com', '111', 1),
(3, 'Saifee', 'Five star,karachi', 'Saifee@hospital.com', '111', 1),
(4, 'A.O', 'Nazimabad,karachi', 'AO@email.com', '$2y$10$PXXvDrtYkc3xrqwfrfUFtuOXFbt0dgEajPtG5AsjpCApYBVG9qRoa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `Fname`, `Lname`, `Email`, `Password`) VALUES
(1, 'Mohsin', 'Mirza', '123@email.com', '$2y$10$p.HkEFzX7S6BVnNYGVdBteK1esTOsoX4Rrn/jiR8qGwl/3a38mv8S'),
(2, 'Nadir', 'Rehman', 'N123@gmail.com', '111'),
(3, 'Mohsin', 'Mirza', 'email@email.com', '$2y$10$FD6aDZK.J7NO1pKW.mreBuWJsn/qdcQtYsc9qAqaWR4jkMs1SRwcq');

-- --------------------------------------------------------

--
-- Table structure for table `vaccination`
--

CREATE TABLE `vaccination` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccination`
--

INSERT INTO `vaccination` (`id`, `date`) VALUES
(1, '2023-11-05'),
(2, '2023-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_stock`
--

CREATE TABLE `vaccine_stock` (
  `id` int(11) NOT NULL,
  `vac_name` varchar(255) NOT NULL,
  `Units` varchar(255) NOT NULL,
  `expiry_date` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine_stock`
--

INSERT INTO `vaccine_stock` (`id`, `vac_name`, `Units`, `expiry_date`, `status`) VALUES
(1, 'Polio', '52', '2026-10-15', 1),
(2, 'Covid', '485', '2026-10-15', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindata`
--
ALTER TABLE `admindata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parentfk` (`user_id`);

--
-- Indexes for table `childs_appt`
--
ALTER TABLE `childs_appt`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `user_id fk` (`user_id`) USING BTREE,
  ADD KEY `hfk` (`hid`),
  ADD KEY `vfk` (`vac_id`),
  ADD KEY `childfk` (`child_id`);

--
-- Indexes for table `hdata`
--
ALTER TABLE `hdata`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccination`
--
ALTER TABLE `vaccination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccine_stock`
--
ALTER TABLE `vaccine_stock`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindata`
--
ALTER TABLE `admindata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `childs_appt`
--
ALTER TABLE `childs_appt`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `hdata`
--
ALTER TABLE `hdata`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vaccination`
--
ALTER TABLE `vaccination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vaccine_stock`
--
ALTER TABLE `vaccine_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `child`
--
ALTER TABLE `child`
  ADD CONSTRAINT `parentfk` FOREIGN KEY (`user_id`) REFERENCES `userdata` (`id`);

--
-- Constraints for table `childs_appt`
--
ALTER TABLE `childs_appt`
  ADD CONSTRAINT `childfk` FOREIGN KEY (`child_id`) REFERENCES `child` (`id`),
  ADD CONSTRAINT `hsptlfk` FOREIGN KEY (`hid`) REFERENCES `hdata` (`h_id`),
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `userdata` (`id`),
  ADD CONSTRAINT `vacfk` FOREIGN KEY (`vac_id`) REFERENCES `vaccine_stock` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
