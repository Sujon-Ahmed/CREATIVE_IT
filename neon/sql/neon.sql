-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Jan 23, 2022 at 07:47 AM
=======
-- Generation Time: Jan 22, 2022 at 01:03 AM
>>>>>>> 4b9379fab0f85fc388ce9d865d9ab95d79a028de
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neon`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
<<<<<<< HEAD
  `id` int(11) NOT NULL,
=======
  `banner_id` int(11) NOT NULL,
>>>>>>> 4b9379fab0f85fc388ce9d865d9ab95d79a028de
  `banner_sub_title` varchar(50) NOT NULL,
  `banner_title` varchar(100) NOT NULL,
  `banner_description` longtext NOT NULL,
  `banner_image` varchar(100) NOT NULL,
<<<<<<< HEAD
  `banner_status` int(11) NOT NULL DEFAULT 0,
  `banner_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_sub_title`, `banner_title`, `banner_description`, `banner_image`, `banner_status`, `banner_created_at`) VALUES
(1, 'Hi', 'I am Sujon Ahmed', 'I am Sujon Ahmed a Full Stack Web Developer', '61ecf91230ada4.60340851.png', 1, '2022-01-23 12:43:30'),
(2, 'Hello', 'I am Sara William', 'I am a good Web Designer', '61ecf9835ed2b9.61322102.png', 0, '2022-01-23 12:45:23');

=======
  `banner_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

>>>>>>> 4b9379fab0f85fc388ce9d865d9ab95d79a028de
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `profile_image` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `profile_image`, `status`) VALUES
<<<<<<< HEAD
(2, 'Riman Ahmed', 'riman@gmail.com', '$2y$10$EdIw06yEgN9Cp3J5/WT7Lep8Pdllpr6nMSrvaiQ6DFaN6nPhCZdT2', '2022-01-23 12:22:09', '2.png', 0),
(4, 'Yen Cotton', 'mapazypyb@mailinator.com', '$2y$10$TTzNVg2tc273p15TPIWu9uMu22v12a2K6pzxA.0732GdbxVnIaNJi', '2022-01-23 12:33:45', '4.jpg', 0),
(5, 'Stewart Hays', 'velum@mailinator.com', '$2y$10$aNJHz7Q9RPoRZSKD3r5.duPhxRmKV.LQCttLJem4AhH13CuKrLtre', '2022-01-23 12:34:18', '5.jpg', 0),
(6, 'Odysseus Gonzalez', 'toma@mailinator.com', '$2y$10$aiWDZrIu/FNHEd7bAAcpO.lewFc1gK0ckTNbK7BIdGQemzhPWUmbC', '2022-01-23 12:38:12', '6.jpg', 0),
(7, 'Herrod Glover', 'hyxi@mailinator.com', '$2y$10$CKPH7FwXRG4Vbiskb./bw.AFNCRlvHlvx.EOSMGfSWwn3XEY7gRQu', '2022-01-23 12:38:23', '7.png', 0),
(8, 'Cara Bradshaw', 'dywez@mailinator.com', '$2y$10$Es9hV8GP2syqPHGXrT.sP./1kJEgLKtORgaVTL0eZO50A52RoBKq2', '2022-01-23 12:38:47', '8.jpg', 0);
=======
(1, 'Sujon Ahmed Riman', 'sujonahmed@gmail.com', '$2y$10$j.oKnG2dPxC3E8tPSc8rauhWtFTpXlaTWnpBmmAtSqp.2H608ElAu', '2022-01-21 12:46:11', '1.jpg', 0);
>>>>>>> 4b9379fab0f85fc388ce9d865d9ab95d79a028de

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
<<<<<<< HEAD
  ADD PRIMARY KEY (`id`);
=======
  ADD PRIMARY KEY (`banner_id`);
>>>>>>> 4b9379fab0f85fc388ce9d865d9ab95d79a028de

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
=======
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT;
>>>>>>> 4b9379fab0f85fc388ce9d865d9ab95d79a028de

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
>>>>>>> 4b9379fab0f85fc388ce9d865d9ab95d79a028de
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
