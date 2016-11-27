-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2016 at 05:58 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `copa_america`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `username` varchar(20) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`username`, `password`) VALUES
('tupi', 123);

-- --------------------------------------------------------

--
-- Table structure for table `beta_test`
--

CREATE TABLE `beta_test` (
  `name` varchar(20) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beta_test`
--

INSERT INTO `beta_test` (`name`, `id`) VALUES
('', 0),
('cmaaaass', 111),
('cma', 123),
('dd', 1111),
('abdullahaa', 12334),
('kkkkk', 1111111);

-- --------------------------------------------------------

--
-- Table structure for table `coach_info`
--

CREATE TABLE `coach_info` (
  `coach_id` int(20) NOT NULL,
  `coach_name` varchar(20) NOT NULL,
  `coach_state` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach_info`
--

INSERT INTO `coach_info` (`coach_id`, `coach_name`, `coach_state`, `experience`) VALUES
(1000, 'Diego Maradona', '', ''),
(1100, 'Jorge Sampaoli', '', ''),
(1400, 'Bruce Arena''s', '', ''),
(1500, 'Jose Pekerman', '', ''),
(2000, 'Dunga', '', ''),
(2100, 'Daniel Almeida', '', ''),
(2500, 'Juan Carlos Osorio', '', ''),
(2600, 'Winfried Schafer', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `group_info`
--

CREATE TABLE `group_info` (
  `group_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_info`
--

INSERT INTO `group_info` (`group_name`) VALUES
('A'),
('B'),
('C'),
('D');

-- --------------------------------------------------------

--
-- Table structure for table `group_t`
--

CREATE TABLE `group_t` (
  `group_name` varchar(20) NOT NULL,
  `team_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_t`
--

INSERT INTO `group_t` (`group_name`, `team_id`) VALUES
('D', '10'),
('D', '11'),
('C', '25'),
('C', '26'),
('B', '20'),
('B', '21'),
('A', '14'),
('A', '15');

-- --------------------------------------------------------

--
-- Table structure for table `player_info`
--

CREATE TABLE `player_info` (
  `player_id` int(20) NOT NULL,
  `player_name` varchar(20) NOT NULL,
  `jursy_number` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `team_id` int(20) NOT NULL,
  `present` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_info`
--

INSERT INTO `player_info` (`player_id`, `player_name`, `jursy_number`, `age`, `team_id`, `present`) VALUES
(111, 'abdullah', '10', '21', 11, 'yeas'),
(11112, 'Leo Messi', '10', '34', 10, 'y');

-- --------------------------------------------------------

--
-- Table structure for table `round_info`
--

CREATE TABLE `round_info` (
  `round_id` int(20) NOT NULL,
  `round_name` varchar(20) NOT NULL,
  `group_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `round_info`
--

INSERT INTO `round_info` (`round_id`, `round_name`, `group_name`) VALUES
(1, 'First', 'A'),
(2, 'First', 'B'),
(3, 'First', 'C'),
(4, 'First', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_info`
--

CREATE TABLE `schedule_info` (
  `schedule_id` int(20) NOT NULL,
  `participants_name` varchar(20) NOT NULL,
  `venue_id` int(20) NOT NULL,
  `round_id` int(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule_info`
--

INSERT INTO `schedule_info` (`schedule_id`, `participants_name`, `venue_id`, `round_id`, `date`, `time`) VALUES
(1110000, 'USA vs Colombia', 201, 1, '20-10-17', '10.30AM');

-- --------------------------------------------------------

--
-- Table structure for table `team_info`
--

CREATE TABLE `team_info` (
  `team_id` int(20) NOT NULL,
  `team_name` varchar(20) NOT NULL,
  `flag` varchar(20) NOT NULL,
  `coach_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_info`
--

INSERT INTO `team_info` (`team_id`, `team_name`, `flag`, `coach_id`) VALUES
(10, 'Argentina', '', 1000),
(11, 'Chile', 'loading', 1100),
(14, 'USA', '', 1400),
(15, 'Colombia', '', 1500),
(20, 'Brazil', '', 2000),
(21, 'Ecuador', '', 2100),
(25, 'Maxico', '', 2500),
(26, 'Jamaica', '', 2600);

-- --------------------------------------------------------

--
-- Table structure for table `venue_info`
--

CREATE TABLE `venue_info` (
  `venue_id` int(20) NOT NULL,
  `venue_name` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `weather` varchar(20) NOT NULL,
  `highest_goal` varchar(20) NOT NULL,
  `total_match` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue_info`
--

INSERT INTO `venue_info` (`venue_id`, `venue_name`, `location`, `weather`, `highest_goal`, `total_match`) VALUES
(201, 'MetLife Stadium', ' New Jersey', '', '', ''),
(202, 'NRG Stadium', 'Houston Texans', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beta_test`
--
ALTER TABLE `beta_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coach_info`
--
ALTER TABLE `coach_info`
  ADD PRIMARY KEY (`coach_id`);

--
-- Indexes for table `group_info`
--
ALTER TABLE `group_info`
  ADD PRIMARY KEY (`group_name`);

--
-- Indexes for table `player_info`
--
ALTER TABLE `player_info`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `round_info`
--
ALTER TABLE `round_info`
  ADD PRIMARY KEY (`round_id`);

--
-- Indexes for table `schedule_info`
--
ALTER TABLE `schedule_info`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `team_info`
--
ALTER TABLE `team_info`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `venue_info`
--
ALTER TABLE `venue_info`
  ADD PRIMARY KEY (`venue_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
