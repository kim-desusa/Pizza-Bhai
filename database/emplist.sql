-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 03:21 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzabhai`
--

-- --------------------------------------------------------

--
-- Table structure for table `emplist`
--

CREATE TABLE `emplist` (
  `uid` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phn` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `bg` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date` varchar(50) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emplist`
--

INSERT INTO `emplist` (`uid`, `pass`, `name`, `email`, `phn`, `post`, `nid`, `address`, `bg`, `gender`, `date`, `photo`) VALUES
('abir', '1234', 'Ashikuzzaman Abir', 'ashikuzzamanabir@outlook.com', '+8801303542116', 'Admin', '19990913000000', '271/15 Niribili Housing Society, West Dhanmondi', 'AB+', 'Male', '1999-09-13', 'upload/11884-20200303_173822_HDR[342].jpg'),
('cristina', '1234', 'Kurisu Mikese', 'kurisumikese@steinsgate.com', '+8801103545677', 'Waitress', '19990913000000', 'Tokyo, Japan', 'B+', 'Female', '', 'upload/60922-1d418e8bc78a8f4f1d35dadde076e15f.jpg'),
('eren', '1234', 'Eren Yeagar', 'erenyeagar@aot.com', '+8801456778933', 'Watch Man', '19990913000000', 'Silly, wall rose', 'A+', 'Male', '1999-01-01', 'upload/6688-Eren_Jaeger_(Anime)_character_image.png'),
('kaneki', '1234', 'Kaneki Ken', 'kanekiken@tokyoghoul.com', '01654356722', 'Watch Man', '19990913000000', 'Tokyo, Japan', 'O-', 'Male', '1999-01-01', 'upload/39044-10c2c227f83c695cd4c08981e85a540b.jpg'),
('misa', '1234', 'Misa Amane', 'misaamane@deathnote.com', '+8801998799922', 'Waitress', '19990913000000', 'Tokyo, Japan', 'B+', 'Female', '2000-01-01', 'upload/82028-ceebb7973adde110f00e820a89d15328.jpg'),
('nisa', '1234', 'Fahmida Khanam', 'fahmidakhanam@gmail.com', '+8801603542116', 'Admin', '19990913000000', 'Kallanpur, Dhaka', 'A+', 'Female', '2000-01-01', 'upload/71308-107615829_3054538511294131_3428071251463281025_n.jpg'),
('nova', '1234', 'Sadiya Nova', 'sadianova@gmail.com', '+8801533344455', 'Cook', '19990913000000', 'Gandaria, Puran Dhaka', 'O+', 'Female', '1999-01-01', 'upload/46603-20190922_165811_HDR.jpg'),
('okabe', '1234', 'Rintarou Okabe', 'rintaruokabe@steinsgate.com', '+8801555566677', 'Entertainer', '19990913000000', 'Tokyo, Japan', 'B-', 'Male', '2000-06-03', 'upload/38789-156d121f63d7ee4bbb69cf6ea69548929007e82c_hq.jpg'),
('tondra', '1234', 'Tondra bishwash', 'tondra.bishwash@gmail.com', '+8801712129432', 'Cook', '19990913000000', 'Mohammadpur, Jakir Hossain Road', 'O+', 'Female', '1999-01-01', 'upload/26567-101409835_1275994072741078_6036318505777758208_o.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emplist`
--
ALTER TABLE `emplist`
  ADD PRIMARY KEY (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
