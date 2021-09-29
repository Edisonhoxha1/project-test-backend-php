-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 12:00 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicaldesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `date_time`
--

CREATE TABLE `date_time` (
  `id` int(11) NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date_time`
--

INSERT INTO `date_time` (`id`, `date`, `time`) VALUES
(1, '2021-09-28', '13:00'),
(2, '2021-09-28', '14:00'),
(3, '2021-09-29', '13:00'),
(4, '2021-09-29', '10:30'),
(5, '2021-10-01', '9:30'),
(6, '2021-09-30', '9:30'),
(7, '2021-09-29', '9:30'),
(8, '2021-09-28', '10:30'),
(9, '2021-09-29', '11:00'),
(10, '2021-10-08', '10:30'),
(11, '2021-10-08', '10:30'),
(12, '2021-10-08', '10:30'),
(13, '2021-10-08', '10:30'),
(14, '2021-10-01', '10:30'),
(15, '2021-10-01', '10:30'),
(16, '2021-10-01', '10:30'),
(17, '2021-10-01', '10:30'),
(18, '2021-10-01', '10:30'),
(19, '2021-10-01', '10:30'),
(20, '2021-10-01', '10:30'),
(21, '2021-10-05', '15:00');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cogname` varchar(255) NOT NULL,
  `codiceFiscale` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `indirizzo` varchar(255) NOT NULL,
  `citta` varchar(255) NOT NULL,
  `cap` varchar(255) NOT NULL,
  `provinzia` varchar(255) NOT NULL,
  `nazione` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`id`, `name`, `cogname`, `codiceFiscale`, `email`, `indirizzo`, `citta`, `cap`, `provinzia`, `nazione`) VALUES
(15, '', '', 0, '', '', '', '', '', ''),
(16, '', '', 0, '', '', '', '', '', ''),
(17, '', '', 0, '', '', '', '', '', ''),
(18, '', '', 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `tampon_Antigenico` varchar(255) NOT NULL,
  `tampon_PCR` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cogname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cellulare` int(11) NOT NULL,
  `nazionalita` varchar(255) NOT NULL,
  `codeFiscale` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `gender` varchar(255) NOT NULL,
  `comune` varchar(255) NOT NULL,
  `cap` varchar(255) NOT NULL,
  `indirizzo` varchar(255) NOT NULL,
  `discriptionCheck` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `location`, `tampon_Antigenico`, `tampon_PCR`, `name`, `cogname`, `email`, `cellulare`, `nazionalita`, `codeFiscale`, `data`, `gender`, `comune`, `cap`, `indirizzo`, `discriptionCheck`) VALUES
(234, 'Don Bosco Street', 'Antigenico-0', 'PCR-0', '', '', '', 0, '', 0, '0000-00-00 00:00:00', 'F', '', '', '', 'Ho preso visione dell’informativa sul trattamento dei miei dati personali e i Termini e Condizioni *(leggi)'),
(235, 'Skenderbeg Square', 'Antigenico-0', 'PCR-0', '', '', '', 0, '', 0, '0000-00-00 00:00:00', 'F', '', '', '', 'Ho preso visione dell’informativa sul trattamento dei miei dati personali e i Termini e Condizioni *(leggi)'),
(236, 'Nene Teresa Square', 'Antigenico-2', 'PCR-0', 'deafsrfs', '', 'sdsdafsdfdssadddddd@gmail.com', 0, 'dsfs', 0, '0000-00-00 00:00:00', 'F', '', '', '', 'Ho preso visione dell’informativa sul trattamento dei miei dati personali e i Termini e Condizioni *(leggi)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `date_time`
--
ALTER TABLE `date_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `date_time`
--
ALTER TABLE `date_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
