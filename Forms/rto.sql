-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2020 at 03:31 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

--
-- create database name "rto"
--
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rto`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `aname` varchar(25) NOT NULL,
  `rid` int(50) NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `add` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `no` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `squestion` varchar(25) NOT NULL,
  `sanswer` varchar(25) NOT NULL,
  `status` varchar(5) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`aname`, `rid`, `fname`, `lname`, `add`, `city`, `no`, `email`, `squestion`, `sanswer`, `status`, `password`) VALUES
('Ruchita Sharma', 1, 'Ruchita', 'Sharma', 'City Tower Plaza, Science City, Pune-410013', 'Pune', 2147483647, 'Ruchita@gmail.com', 'Name the place where you ', 'pune', 'YES', 'Ruchi@6677');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `qno` int(11) NOT NULL,
  `correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `qno`, `correct`, `text`) VALUES
(22, 1, 1, 'Mandatory'),
(23, 1, 0, 'Necessary'),
(24, 1, 0, 'Optional'),
(25, 2, 0, 'Near a public well'),
(26, 2, 1, 'Blocking fire hydrant'),
(27, 2, 0, 'Left side of the road'),
(28, 3, 0, 'Care for the injured'),
(29, 3, 0, 'Protect the area'),
(30, 3, 1, 'Give water to unconscious victim'),
(31, 4, 1, 'Use the mirrors'),
(32, 4, 0, 'Flash the highlights'),
(33, 4, 0, 'Sound the horn'),
(34, 5, 0, 'Allowed'),
(35, 5, 1, 'Prohibited'),
(36, 5, 0, 'Allowed only at night'),
(37, 6, 0, 'Put on head light and pass the bridge'),
(38, 6, 0, 'Increase the speed and try to cross as fast as possible '),
(39, 6, 1, 'Wait till the other vehicle crosses the bridge and then proceed'),
(40, 7, 1, 'Switch on hazard light then move and call for help immediately'),
(41, 7, 0, 'Stand in the land behind your vehicle to warn others'),
(42, 7, 0, 'stand in the vehicle & wait for the police'),
(43, 8, 0, 'Understand road sign'),
(44, 8, 1, 'React very Quickly'),
(45, 8, 0, 'Give Signals correctly'),
(46, 9, 0, 'Give precedence of the vehicle carrying heavy loads'),
(47, 9, 0, 'Give precedence to the vehicle coming down the hills'),
(48, 9, 1, 'Give precedence to the vehicle going up the hill '),
(49, 10, 1, 'All the time before entering the intersection'),
(50, 10, 0, 'Only when traffic is heavy'),
(51, 10, 0, 'Only when you approach a stop signal'),
(52, 11, 0, 'Double length of vehicle'),
(53, 11, 1, '2 second distance'),
(54, 11, 0, '2 meter distance'),
(55, 12, 0, 'Throughout the Maharashtra'),
(56, 12, 0, 'Only that state'),
(57, 12, 1, 'Throughout the India'),
(58, 13, 1, 'red'),
(59, 13, 0, 'yellow'),
(60, 13, 0, 'green'),
(61, 14, 0, 'Top gear'),
(62, 14, 1, 'Same gear'),
(63, 14, 0, 'Neutral gear'),
(64, 15, 1, 'Your filter cap is securely fattened'),
(65, 15, 0, 'Your tank is three-fourth filled'),
(66, 15, 0, 'you have used locking filter cap');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `msg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `msg`) VALUES
('avni', 'avni@gmail.com', 'want to disscuss', 'i have lost my licence'),
('heena', 'heena@gmail.com', 'learnig license', 'i have lost my licence');

-- --------------------------------------------------------

--
-- Table structure for table `duplicate`
--

CREATE TABLE IF NOT EXISTS `duplicate` (
  `lno` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `add` varchar(50) NOT NULL,
  `bgroup` varchar(10) NOT NULL,
  `vtype` varchar(30) NOT NULL,
  `photo` varchar(45) NOT NULL,
  `fees` text NOT NULL,
  `date` date NOT NULL,
  `edate` date NOT NULL,
  PRIMARY KEY (`lno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duplicate`
--

INSERT INTO `duplicate` (`lno`, `name`, `dob`, `add`, `bgroup`, `vtype`, `photo`, `fees`, `date`, `edate`) VALUES
(54456644, 'heena', '1999-04-15', 'aroda', 'O+', '2- Wheeler', 'pic/1524728138980.jpg', '500', '2016-04-20', '2018-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(11) NOT NULL,
  `fdate` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mno` text NOT NULL,
  `comment` varchar(50) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `fdate`, `name`, `email`, `mno`, `comment`) VALUES
(1, '2019-04-08', 'Heena Shaikh', 'heena@gmail.com', '7895622211', 'Feasible to user'),
(2, '2018-04-08', 'Ankita Sharma', 'ankita2003@gmail.com', '8955220236', 'good website');

-- --------------------------------------------------------

--
-- Table structure for table `learning`
--

CREATE TABLE IF NOT EXISTS `learning` (
  `name` varchar(20) NOT NULL,
  `age` int(5) NOT NULL,
  `add` varchar(50) NOT NULL,
  `type` varchar(25) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `fees` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learning`
--

INSERT INTO `learning` (`name`, `age`, `add`, `type`, `pic`, `fees`) VALUES
('Heena Shaikh', 22, 'City Tower, Bandra, Mumbai-680013', '3-Wheeler', 'pic/1527912918794.jpg', 150);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `qno` int(11) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`qno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qno`, `text`) VALUES
(1, 'Wearing a helmet on state and National highway is: '),
(2, 'Parking is prohibited in following place?'),
(3, 'Which following step one should not take after an accidient?'),
(4, 'Which of the following should do after stooping ?'),
(5, 'Take reverse on one way is ?'),
(6, 'You are approaching a narrow bridge,another vehicle is about to enter the bridge from opposite side you should ?'),
(7, 'Your vehicle break down in a tunnel what should you have to do?'),
(8, 'An older persons driving ability could be affected because they may be unable to? '),
(9, 'While you are driving on gradient road,you should ?'),
(10, 'At intersection point you should check traffic on your left and right ? '),
(11, 'The minimum distance you should keep from vehicle ahead ?'),
(12, 'R.T.O licence from Maharashtra is valid ?'),
(13, 'Which traffic light represent stop'),
(14, 'You should keep your vehicle while in descendant Ghat ?'),
(15, 'To avoid spillage after refueling');

-- --------------------------------------------------------

--
-- Table structure for table `renewal`
--

CREATE TABLE IF NOT EXISTS `renewal` (
  `lno` int(10) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `cdate` date NOT NULL,
  `edate` date NOT NULL,
  PRIMARY KEY (`lno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `renewal`
--

INSERT INTO `renewal` (`lno`, `lname`, `cdate`, `edate`) VALUES
(54456644, 'Heena Shaikh', '2016-04-14', '2018-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `rno` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `class` varchar(25) NOT NULL,
  PRIMARY KEY (`rno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rno`, `name`, `class`) VALUES
(1, 'Heena Shaikh', 'B.Com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uno` int(10) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `score` text NOT NULL,
  PRIMARY KEY (`uno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uno`, `uname`, `score`) VALUES
(1, 'Heena Shaikh', '14');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `uname` varchar(25) NOT NULL,
  `rid` int(50) NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `add` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `no` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `squestion` varchar(25) NOT NULL,
  `sanswer` varchar(25) NOT NULL,
  `status` varchar(5) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`uname`, `rid`, `fname`, `lname`, `add`, `city`, `no`, `email`, `squestion`, `sanswer`, `status`, `pass`) VALUES
('Heena Shaikh', 1, 'Heena', 'Shaikh', 'City tower, Bandra, Mumbai -680013', 'Mumbai', 2147483647, 'heena@gmail.com', 'what is your favourite au', 'balguruswamy', 'NO', 'Heena@420'),
('Ankita Sharma', 2, 'Ankita', 'Sharma', 'Plaza Tower,near eye hospital,Shanipeth,pune', 'Pune', 2147483647, 'ankita2003@gmail.com', 'what is your favourite so', 'Jan Gan Man', 'YES', 'ankita#456');

-- --------------------------------------------------------

--
-- Table structure for table `vno`
--

CREATE TABLE IF NOT EXISTS `vno` (
  `vno` int(10) NOT NULL AUTO_INCREMENT,
  `vreg` varchar(265) NOT NULL,
  PRIMARY KEY (`vno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `vno`
--

INSERT INTO `vno` (`vno`, `vreg`) VALUES
(1, 'TN04AF5678'),
(2, 'TN04AF5679'),
(3, 'TN04AF5680'),
(4, 'TN04RF5680'),
(5, 'TN04NF5680'),
(6, 'TN04NF5780'),
(7, 'TN04NF5790'),
(8, 'TN04NA5790'),
(9, 'TN04NA5880'),
(10, 'TN04AF5999');

-- --------------------------------------------------------

--
-- Table structure for table `vsearch`
--

CREATE TABLE IF NOT EXISTS `vsearch` (
  `vnum` varchar(20) NOT NULL,
  `owner` varchar(250) NOT NULL,
  `gardian` varchar(250) NOT NULL,
  `age` int(50) NOT NULL,
  `add` varchar(50) NOT NULL,
  `vtype` varchar(10) NOT NULL,
  `vmodel` varchar(50) NOT NULL,
  `vcompany` varchar(25) NOT NULL,
  `vmanufact` int(25) NOT NULL,
  `area` varchar(25) NOT NULL,
  `vchass` varchar(17) NOT NULL,
  `vno` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`vno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `vsearch`
--

INSERT INTO `vsearch` (`vnum`, `owner`, `gardian`, `age`, `add`, `vtype`, `vmodel`, `vcompany`, `vmanufact`, `area`, `vchass`, `vno`) VALUES
('TN04NF5680', 'Heena Shaikh', 'Saif Ali Khan', 22, 'City Tower ,Bandra , Mumbai -680013', '2-Wheeler', 'activa het', 'honda', 2014, 'Mumbai', 'ASDDFF6678899944R', 1);
