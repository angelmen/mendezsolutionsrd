-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 10:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyectofinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `stock` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `estado`, `stock`, `imagen`) VALUES
(0, 'SAMSUNG GALAXY A11', 8500, 'NUEVO', 5, 'A11.png'),
(1, 'APPLE IPHONE 8', 14560, 'NUEVO', 3, 'IP8.jpg'),
(1, 'APPLE IPHONE 8', 14560, 'NUEVO', 3, 'IP8.jpg'),
(2, 'APPLE IPHONE X', 22560, 'NUEVO', 2, 'IPx.jpg'),
(0, 'XIAOMI MI NOTE 8', 11000, 'USADO', 7, 'A11.png'),
(4, 'XIAOMI MI NOTE 8', 11000, 'USADO', 7, 'XIAOMI-MI-NOTE-8.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
