-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:4000
-- Generation Time: Oct 15, 2022 at 04:42 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qms`
--

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `Participant_ID` int(11) NOT NULL,
  `Participant_name` varchar(25) NOT NULL,
  `Mail_address` varchar(50) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`Participant_ID`, `Participant_name`, `Mail_address`, `Username`, `Password`) VALUES
(1, 'Aarthy', '2019e001@eng.jfn.ac.lk', 'aarthyV', 'eng1*uoj'),
(2, 'Ashfa', '2019e011@eng.jfn.ac.lk', 'agfashfa', 'ash9811'),
(3, 'Keerthana', '2018e060@eng.jfn.ac.lk', 'keerthi60', 'sgGwrVB2'),
(4, 'Ruvindya', '2019e117@eng.jfn.ac.lk', 'ruvisachi', 'KLM123ab'),
(5, 'Riza', '2019e114@eng.jfn.ac.lk', 'rizaa', 'rs2920#'),
(6, 'Diluxana', '2019e033@eng.jfn.ac.lk', 'diluxana99', 'iwkHFSam'),
(7, 'Mihiri', '2019e099@eng.jfn.ac.lk', 'priyabashi', 'irCBM$id'),
(8, 'Dilanka', '2019e169@eng.jfn.ac.lk', 'dilanka34', 'rtyop098');

-- --------------------------------------------------------

--
-- Table structure for table `question_bank`
--

CREATE TABLE `question_bank` (
  `Question_ID` int(11) NOT NULL,
  `Quiz_ID` varchar(5) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Choice_1` varchar(50) NOT NULL,
  `Choice_2` varchar(50) NOT NULL,
  `Choice_3` varchar(50) NOT NULL,
  `Choice_4` varchar(50) NOT NULL,
  `Answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_bank`
--

INSERT INTO `question_bank` (`Question_ID`, `Quiz_ID`, `Question`, `Choice_1`, `Choice_2`, `Choice_3`, `Choice_4`, `Answer`) VALUES
(1, 'D1', 'ER aims to:', 'Facilitate database programming', 'Facilitate database organization', 'Facilitate database design', 'Facilitate database website', 'Facilitate database design'),
(1, 'N1', '198.2.2.1 IP address belongs to which IP class?', 'Class A', 'Class B', 'Class C', 'Class D', 'Class C'),
(1, 'N2', 'Allows gateways to send error and control messages to other gateways. This describes what protocol?', 'ICMP', 'IPv6', 'DHCP', 'IPv4', 'ICMP'),
(1, 'P1', 'Which of the following is not open-source software?', 'Python', 'Linux', 'Windows Vista', 'Ubuntu', 'Windows Vista'),
(1, 'P2', 'What is the only thing that computers understand?', 'Machine Code', 'Low Level Languages', 'High Level Languages', 'Algorithms', 'Machine Code'),
(2, 'D1', 'Which of the following makes it possible for entities to share a relationship?', 'Multi-valued attributes', 'A foreign key', 'A common attribute', 'The same number of attributes', 'A common attribute'),
(2, 'N1', 'What is the acronym for LAN?', 'Local Area Network', 'Local Access Network', 'Line And Networking', 'Line-less Networking', 'Local Area Network'),
(2, 'N2', 'Which OSI layer provides services to the transport layer?', 'Network', 'Session', 'IP', 'TCP', 'Network'),
(2, 'P1', 'All Programming Languages are ', 'Used to solve a Problem', 'Platform independent', 'Low Level Language', 'Portable', 'Used to solve a Problem'),
(2, 'P2', 'A list of instructions that enable a computer to perform a specific task is a?', 'Computer Program', 'Algorithm', 'Machine Code', 'Binary Code', 'Computer Program'),
(3, 'D1', 'What is the purpose of an indexed field in a database?', 'To speed up queries', 'To verify values', 'To create links between entities', 'To specify a lookup', 'To speed up queries'),
(3, 'N1', 'Which network topologies has the highest transmission speed?', 'LAN', 'WAN', 'MAN', 'All of the above', 'LAN'),
(3, 'N2', 'What is at the top of the hierarchy tree of Domains?', '.com', 'Root', '.mil', '.us', 'Root'),
(3, 'P1', 'What is the maximum length of a Python identifier?', '32', '16', '128', 'No fixed length is specified.', 'No fixed length is specified.'),
(3, 'P2', 'Resolving errors in a program is known as...', 'Debugging', 'Refixing', 'Error Checking', 'Problem Solving', 'Debugging'),
(4, 'D1', 'The frequency of a relationship between entities may be described by', 'Indexed fields', 'Transitive dependencies', 'Cardinality', ' Referential integrity', 'Cardinality'),
(4, 'N1', 'IPv6 addresses have a size of:', '64 bits', '128 bits', '256 bits', '512 bits', '128 bits'),
(4, 'N2', 'How is the message sent from a PC2 when is first powers on and attempts to contact the DHCP server?', 'Layer 3 unicast', 'Layer 3 broadcast', 'Layer 3 multicast', 'Without any Layer 3 encapsulation', 'Layer 3 broadcast'),
(4, 'P1', 'How is a code block indicated in Python?', 'Brackets', 'Indentation', 'Key', 'None of the above', 'Indentation'),
(4, 'P2', 'Which of the following is not a high level programming language?', 'Assembly', 'C++', 'Java', 'Python', 'Assembly'),
(5, 'D1', 'Majority of relational database system employ which language', 'C#', 'Java', 'SQL', 'All of the above', 'SQL'),
(5, 'N1', 'Which of the following transmission directions listed is not a legitimate channel?', 'Simplex', 'Half Duplex', 'Full Duplex', 'Double Duplex', 'Double Duplex'),
(5, 'N2', 'DHCP _____ ______ occur every 60 minutes', 'Multicast Scope', 'Super Scope', 'Subnet Mask', 'Automatic Backups', 'Automatic Backups'),
(5, 'P1', 'Which of the following concepts is not a part of Python?', 'Pointers', 'Loops', 'Dynamic Typing', 'All of the above', 'Pointers'),
(5, 'P2', 'What is the name for the software used to convert an assembly language program into machine code?', 'Assembler', 'Interpreter', 'Compiler', 'Translator', 'Assembler'),
(6, 'P2', 'Which of the following command would not be found in an assembly language?', 'LOAD', 'STORE', 'ADD', 'SORT', 'SORT'),
(7, 'P2', 'What is the smallest unit of measurement used to quantify computer data?', 'a bridle', 'a bit', 'marble', 'a tablespoon', 'a bit');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `Quiz_ID` varchar(5) NOT NULL,
  `Quiz_name` varchar(50) NOT NULL,
  `Section_ID` varchar(5) NOT NULL,
  `Provider_ID` int(11) NOT NULL,
  `Duration` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`Quiz_ID`, `Quiz_name`, `Section_ID`, `Provider_ID`, `Duration`) VALUES
('D1', 'Relational Database', 'IT02', 3, '00:00:03'),
('N1', 'Types of network', 'IT03', 4, '00:00:02'),
('N2', 'DHCP', 'IT03', 5, '00:00:02'),
('P1', 'Introduction To Python', 'IT01', 1, '00:00:02'),
('P2', 'Computer Programming Languages', 'IT01', 2, '00:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_provider`
--

CREATE TABLE `quiz_provider` (
  `Provider_ID` int(11) NOT NULL,
  `Provider_name` varchar(25) NOT NULL,
  `Provider_mail` varchar(50) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_provider`
--

INSERT INTO `quiz_provider` (`Provider_ID`, `Provider_name`, `Provider_mail`, `Username`, `Password`) VALUES
(1, 'Pradeepkumar.v', 'pradeep@gmail.com', 'pradeep10', 'qwerty123'),
(2, 'Maison Francis', 'francisM@gmail.com', 'francisM', '!67dgnrtMU'),
(3, 'Pete Chawk', 'Chawk50@gmail.com', 'Chawk2505', '123678'),
(4, 'James Fenton', 'fenton@gmail.com', 'Fenton86', 'fjET+575N'),
(5, 'Apalani', 'apalani@gmail.com', 'Apalani', 'ufRee!!!?');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Quiz_ID` varchar(5) NOT NULL,
  `Participant_ID` int(11) NOT NULL,
  `Score` tinyint(4) NOT NULL,
  `Evaluation` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Quiz_ID`, `Participant_ID`, `Score`, `Evaluation`) VALUES
('D1', 4, 5, 'P'),
('D1', 5, 5, 'P'),
('D1', 7, 4, 'P'),
('N1', 2, 4, 'P'),
('N1', 7, 4, 'P'),
('N2', 1, 4, 'P'),
('N2', 3, 3, 'P'),
('P1', 1, 5, 'P'),
('P1', 3, 5, 'P'),
('P1', 5, 2, 'F'),
('P1', 6, 5, 'P'),
('P2', 1, 6, 'P'),
('P2', 2, 7, 'P'),
('P2', 8, 5, 'P');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `Section_ID` varchar(5) NOT NULL,
  `Section_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`Section_ID`, `Section_name`) VALUES
('IT02', 'Database'),
('IT03', 'Network'),
('IT01', 'Programming Languages');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`Participant_ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `question_bank`
--
ALTER TABLE `question_bank`
  ADD PRIMARY KEY (`Question_ID`,`Quiz_ID`),
  ADD UNIQUE KEY `Question` (`Question`),
  ADD KEY `fkpQue` (`Quiz_ID`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`Quiz_ID`),
  ADD KEY `fkpSctn` (`Section_ID`),
  ADD KEY `fkpPrvdr` (`Provider_ID`);

--
-- Indexes for table `quiz_provider`
--
ALTER TABLE `quiz_provider`
  ADD PRIMARY KEY (`Provider_ID`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`Quiz_ID`,`Participant_ID`),
  ADD KEY `fkpRslt2` (`Participant_ID`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`Section_ID`),
  ADD UNIQUE KEY `Section_name` (`Section_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `Participant_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quiz_provider`
--
ALTER TABLE `quiz_provider`
  MODIFY `Provider_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question_bank`
--
ALTER TABLE `question_bank`
  ADD CONSTRAINT `fkpQue` FOREIGN KEY (`Quiz_ID`) REFERENCES `quiz` (`Quiz_ID`);

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `fkpPrvdr` FOREIGN KEY (`Provider_ID`) REFERENCES `quiz_provider` (`Provider_ID`),
  ADD CONSTRAINT `fkpSctn` FOREIGN KEY (`Section_ID`) REFERENCES `section` (`Section_ID`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `fkpRslt1` FOREIGN KEY (`Quiz_ID`) REFERENCES `quiz` (`Quiz_ID`),
  ADD CONSTRAINT `fkpRslt2` FOREIGN KEY (`Participant_ID`) REFERENCES `participant` (`Participant_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
