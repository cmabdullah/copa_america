-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2016 at 01:45 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `group_info`
--

CREATE TABLE `group_info` (
  `group_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_team`
--

CREATE TABLE `group_team` (
  `group_name` varchar(10) NOT NULL,
  `team_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1111, 'sss', '111111', '202', 10, 'yyyy'),
(11112, 'infinity', '10000000222', '202s', 10, 'yyyy');

-- --------------------------------------------------------

--
-- Table structure for table `round_info`
--

CREATE TABLE `round_info` (
  `round_id` int(20) NOT NULL,
  `round_name` varchar(20) NOT NULL,
  `group_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
