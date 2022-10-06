-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 06, 2022 at 03:18 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` varchar(255) NOT NULL,
  `A` varchar(10) DEFAULT 'off',
  `B` varchar(10) DEFAULT 'off',
  `C` varchar(10) DEFAULT 'off',
  `F` varchar(10) DEFAULT 'off',
  `G` varchar(10) DEFAULT 'off',
  `L` varchar(10) DEFAULT 'off',
  `M` varchar(10) DEFAULT 'off',
  `N` varchar(10) DEFAULT 'off',
  `O` varchar(10) DEFAULT 'off',
  `P` varchar(10) DEFAULT 'off',
  `R` varchar(10) DEFAULT 'off',
  `T` varchar(10) DEFAULT 'off',
  `U` varchar(10) DEFAULT 'off',
  `V` varchar(10) DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `A`, `B`, `C`, `F`, `G`, `L`, `M`, `N`, `O`, `P`, `R`, `T`, `U`, `V`) VALUES
('201971060', 'on', 'on', 'off', 'off', 'on', 'off', 'off', 'off', 'off', 'on', 'off', 'off', 'on', 'off'),
('633e0a063c856', 'off', 'on', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off'),
('633e2930b2b42', 'on', 'off', 'on', 'off', 'off', 'on', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off'),
('admin', 'on', 'on', 'off', 'off', 'on', 'off', 'off', 'off', 'off', 'on', 'off', 'off', 'on', 'off'),
('user', 'on', 'off', 'off', 'off', 'off', 'on', 'off', 'on', 'off', 'off', 'on', 'off', 'off', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `documentation`
--

CREATE TABLE `documentation` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `logbook_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documentation`
--

INSERT INTO `documentation` (`id`, `name`, `logbook_id`) VALUES
('633e2930b3312', '633e2930b2b50.jpeg', '633e2930b2b42'),
('633e2930b4705', '633e2930b40be.jpeg', '633e2930b2b42'),
('633e2930b586d', '633e2930b5142.jpeg', '633e2930b2b42'),
('633e3a7b82184', '633e3a7b8170e.jpeg', '633e0a063c856'),
('633e3a7b831e2', '633e3a7b82d1a.jpeg', '633e0a063c856');

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `id` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `area_id` varchar(255) NOT NULL,
  `solution` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`id`, `activity`, `area_id`, `solution`, `datetime`, `user_id`) VALUES
('633e0a063c856', 'Maintenance', '633e0a063c856', 'Merawat perlatan elektronik bandar udara', 'Kamis, 06 Oktober 2022, 11:17:05', '201971060'),
('633e2930b2b42', 'tes', '633e2930b2b42', 'tes', 'Kamis, 06 Oktober 2022, 10:02:40', '201971060');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL,
  `area_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `departement`, `area_id`, `password`, `role`, `picture`) VALUES
('201971060', 'Marthin Alfreinsco Salakory', 'ICT', '201971060', '$2y$10$EUHa8.L7OXavgszd5xYraeg4lmUH4IHJOY9GdKWIEgvcZCDzK4fo.', 'admin', '201971060.jpg'),
('admin', 'Admin', 'ICT', 'admin', '$2y$10$TxPHwLToqfv8glH6icQqIefKVvT1CpT5HAhT6mntQ3dWqpwnJlCbS', 'admin', 'admin.png'),
('user', 'User', 'ICT', 'user', '$2y$10$dqTZrh0MPy2ZzVGCD9TSSetXcS4nHRFuzLdnC6Ku/dykn.C3P.GVe', 'user', 'user.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documentation`
--
ALTER TABLE `documentation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
