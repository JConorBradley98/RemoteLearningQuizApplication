-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 01:40 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `result_id` int(11) NOT NULL,
  `question_no` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `correct` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `result_id`, `question_no`, `answer`, `correct`) VALUES
(1, 1, 0, 'The Pound', 1),
(2, 1, 1, 'Ben Nevis', 1),
(3, 1, 2, 'Dundee', 0),
(4, 1, 3, 'Canada', 0),
(5, 1, 4, 'Wales', 0),
(6, 1, 5, 'Malta', 1),
(7, 1, 6, 'River Trent', 0),
(8, 2, 0, 'The Pound', 1),
(9, 2, 1, 'Ben Nevis', 1),
(10, 2, 2, 'Glasgow', 1),
(11, 2, 3, 'The Republic of Ireland', 0),
(12, 2, 4, 'England', 1),
(13, 2, 5, 'The Isle of Man', 0),
(14, 2, 6, 'River Severn', 1),
(15, 3, 0, '7', 1),
(16, 3, 1, '25', 1),
(17, 3, 2, '57', 0),
(18, 4, 0, '118', 1),
(19, 4, 1, 'Non-renewable energy sources', 1),
(20, 4, 2, 'Electrical energy', 1),
(21, 4, 3, 'A stretched rubber band', 0),
(22, 4, 4, 'Nuclear energy', 0),
(23, 5, 0, '118', 1),
(24, 5, 1, 'Non-renewable energy sources', 1),
(25, 5, 2, 'Kinetic energy', 0),
(26, 5, 3, 'A stretched rubber band', 0),
(27, 5, 4, 'Light energy', 1),
(28, 6, 0, 'scrooge', 1),
(29, 7, 0, 'scrooge', 1),
(30, 8, 0, 'scrooge', 1),
(31, 9, 0, 'scrooge', 1),
(32, 10, 0, 'scrooge', 1),
(33, 11, 0, 'scrooge', 1),
(34, 12, 0, 'scrooge', 1),
(35, 13, 0, 'scrooge', 1),
(36, 14, 0, 'scrooge', 1),
(37, 15, 0, 'scrooge', 1),
(38, 16, 0, 'scrooge', 1),
(39, 17, 0, 'scrooge', 1),
(40, 18, 0, 'scrooge', 1),
(41, 19, 0, 'scrooge', 1),
(42, 20, 0, 'scrooge', 1),
(43, 21, 0, 'scrooge', 1),
(44, 22, 0, 'scrooge', 1),
(45, 23, 0, 'scrooge', 1),
(46, 24, 0, 'scrooge', 1),
(47, 25, 0, 'scrooge', 1),
(48, 26, 0, 'scrooge', 1),
(49, 27, 0, 'scrooge', 1),
(50, 28, 0, 'scrooge', 1),
(51, 29, 0, 'scrooge', 1),
(52, 30, 0, '7', 1),
(53, 30, 1, '25', 1),
(54, 30, 2, '62', 1),
(55, 31, 0, '7', 1),
(56, 31, 1, '25', 1),
(57, 31, 2, '62', 1),
(58, 32, 0, '7', 1),
(59, 32, 1, '25', 1),
(60, 32, 2, '62', 1),
(61, 33, 0, '7', 1),
(62, 33, 1, '25', 1),
(63, 33, 2, '62', 1),
(64, 34, 0, '7', 1),
(65, 34, 1, '25', 1),
(66, 34, 2, '62', 1),
(67, 35, 0, '7', 1),
(68, 35, 1, '30', 0),
(69, 35, 2, '62', 1),
(70, 36, 0, '7', 1),
(71, 36, 1, '30', 0),
(72, 36, 2, '62', 1),
(73, 37, 0, '7', 1),
(74, 37, 1, '30', 0),
(75, 37, 2, '62', 1),
(76, 38, 0, '7', 1),
(77, 38, 1, '25', 1),
(78, 38, 2, '62', 1),
(79, 39, 0, '7', 1),
(80, 39, 1, '25', 1),
(81, 39, 2, '62', 1),
(82, 40, 0, 'scrooge', 1),
(83, 41, 0, 'scrooge', 1),
(84, 42, 0, 'scrooge', 1),
(85, 43, 0, 'scrooge', 1),
(86, 44, 0, 'scrooge', 1),
(87, 45, 0, 'scrooge', 1),
(88, 46, 0, 'scrooge', 1),
(89, 47, 0, 'scrooge', 1),
(90, 48, 0, 'scrooge', 1),
(91, 49, 0, 'scrooge', 1),
(92, 50, 0, 'scrooge', 1),
(93, 51, 0, 'scrooge', 1),
(94, 52, 0, '7', 1),
(95, 52, 1, '30', 0),
(96, 52, 2, '62', 1),
(97, 53, 0, 'scrooge', 1),
(98, 54, 0, '7', 1),
(99, 54, 1, '30', 0),
(100, 54, 2, '62', 1),
(101, 55, 0, '7', 1),
(102, 55, 1, '30', 0),
(103, 55, 2, '62', 1),
(104, 56, 0, '118', 1),
(105, 56, 1, 'Non-renewable energy sources', 1),
(106, 56, 2, 'Electrical energy', 1),
(107, 56, 3, 'A stretched rubber band', 0),
(108, 56, 4, 'Nuclear energy', 0),
(109, 57, 0, '118', 1),
(110, 57, 1, 'Non-renewable energy sources', 1),
(111, 57, 2, 'Electrical energy', 1),
(112, 57, 3, 'A stretched rubber band', 0),
(113, 57, 4, 'Nuclear energy', 0),
(114, 58, 0, '118', 1),
(115, 58, 1, 'Non-renewable energy sources', 1),
(116, 58, 2, 'Electrical energy', 1),
(117, 58, 3, 'A stretched rubber band', 0),
(118, 58, 4, 'Nuclear energy', 0),
(119, 59, 0, '118', 1),
(120, 59, 1, 'Renewable energy sources', 0),
(121, 59, 2, 'Chemical energy', 0),
(122, 59, 3, 'A beam of light from a torch', 1),
(123, 59, 4, 'Chemical Energy', 0),
(124, 60, 0, '7', 1),
(125, 60, 1, '30', 0),
(126, 60, 2, '62', 1),
(127, 61, 0, '7', 1),
(128, 61, 1, '30', 0),
(129, 61, 2, '62', 1),
(130, 62, 0, '7', 1),
(131, 62, 1, '30', 0),
(132, 62, 2, '62', 1),
(133, 63, 0, '7', 1),
(134, 63, 1, '30', 0),
(135, 63, 2, '62', 1),
(136, 64, 0, '7', 1),
(137, 64, 1, '30', 0),
(138, 64, 2, '62', 1),
(139, 65, 0, '7', 1),
(140, 65, 1, '30', 0),
(141, 65, 2, '62', 1),
(142, 66, 0, '7', 1),
(143, 66, 1, '30', 0),
(144, 66, 2, '62', 1),
(145, 67, 0, 'scrooge', 1),
(146, 68, 0, '7', 1),
(147, 68, 1, '30', 0),
(148, 68, 2, '62', 1),
(149, 69, 0, 'scrooge', 1),
(150, 70, 0, '11', 1),
(151, 70, 1, '9', 0),
(152, 71, 0, 'The Pound', 1),
(153, 71, 1, 'Ben Macdui', 0),
(154, 71, 2, 'Glasgow', 1),
(155, 71, 3, 'Northern Ireland', 1),
(156, 71, 4, 'England', 1),
(157, 71, 5, 'Malta', 1),
(158, 71, 6, 'River Trent', 0),
(159, 72, 0, '20', 1),
(160, 72, 1, '120', 1),
(161, 73, 0, 'The Pound', 1),
(162, 73, 1, 'Ben Nevis', 1),
(163, 73, 2, 'Glasgow', 1),
(164, 73, 3, 'Northern Ireland', 1),
(165, 73, 4, 'England', 1),
(166, 73, 5, 'The Isle of Man', 0),
(167, 73, 6, 'Lagan River', 0),
(168, 74, 0, '20', 1),
(169, 74, 1, '120', 1),
(170, 75, 0, '7', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `questions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`questions`)),
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `name`, `description`, `questions`, `img`) VALUES
(12, 'English Quiz 2', 'Charles Dickens', '[{\"title\":\"Who is the main character in a christmas carol\",\"correct\":\"scrooge\",\"options\":[\"Charlie\",\"Henry\"]}]', 'https://www.kidsworldfun.com/images/quiz/English-language-quiz.jpg'),
(15, 'Maths Quiz 3', 'Algebra, Addition, Multiplication', '[{\"title\":\"5+2\",\"correct\":\"7\",\"options\":[\"8\",\"10\"]},{\"title\":\"5x5\",\"correct\":\"25\",\"options\":[\"20\",\"30\"]},{\"title\":\"50 + 12\",\"correct\":\"62\",\"options\":[\"57\",\"61\"]}]', 'https://h5p.org/sites/default/files/styles/medium-logo/public/logos/basic-arithmetic-quiz-icon-color.png?itok=LCpvRCzI'),
(17, 'Science Quiz', 'Periodic Table, Synthesis', '[{\"title\":\"How many elements are in the periodic table\",\"correct\":\"118\",\"options\":[\"120\",\"130\"]},{\"title\":\"What do we call fuel sources such as coal, oil and natural gas?\",\"correct\":\"Non-renewable energy sources\",\"options\":[\"Renewable energy sources\",\"Radiant energy\"]},{\"title\":\"In order to work, a toaster needs what?\",\"correct\":\"Electrical energy\",\"options\":[\"Chemical energy\",\"Kinetic energy\"]},{\"title\":\"Which of these is not an example of potential energy?\",\"correct\":\"A beam of light from a torch\",\"options\":[\"A stretched rubber band\",\"A diver on the edge of a diving board\"]},{\"title\":\"Children skipping rope are converting stored energy (from the food they\'ve eaten) into which form of energy?\",\"correct\":\"Light energy\",\"options\":[\"Nuclear energy\",\"Potential energy\",\"Chemical Energy\"]}]', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Stylised_atom_with_three_Bohr_model_orbits_and_stylised_nucleus.svg/220px-Stylised_atom_with_three_Bohr_model_orbits_and_stylised_nucleus.svg.png'),
(18, 'Geography Quiz 1', 'Britain, or Great Britain, is the largest island in the British Isles. It is comprised of three countries - England, Scotland and Wales. Test what you know about the place you live by playing this quiz', '[{\"title\":\"What is the currency used in Britain?\",\"correct\":\"The Pound\",\"options\":[\"The Dollar\",\"The Euro\"]},{\"title\":\"Which is the highest mountain in Britain?\",\"correct\":\"Ben Nevis\",\"options\":[\"Ben Macdui\",\"Skiddaw\",\"Snowdon\"]},{\"title\":\"By population, which is the largest city in Scotland?\",\"correct\":\"Glasgow\",\"options\":[\"Dundee\",\"Edinburgh\"]},{\"title\":\"Britain is part of the United Kingdom together with ....... ?\",\"correct\":\"Northern Ireland\",\"options\":[\"The Republic of Ireland\",\"Australia\",\"Canada\"]},{\"title\":\" Which has the largest population?\",\"correct\":\"England\",\"options\":[\"Northern Ireland\",\"Scotland\",\"Wales\"]},{\"title\":\"Which of these islands is not off the coast of Britain?\",\"correct\":\"Malta\",\"options\":[\"Guernsey\",\"The Isle of Man\",\"Shetlands\",\"Anglesey\"]},{\"title\":\"Which is the longest river in Britain\",\"correct\":\"River Severn\",\"options\":[\"River Thames\",\"River Trent\",\"Lagan River\"]}]', 'https://www.educationquizzes.com/library/KS2-Geography/KS2-Geography-Category-Page-Picture-Globe.jpg'),
(22, 'Maths Quiz 2', 'Adding numbers', '[{\"title\":\"7+13\",\"correct\":\"20\",\"options\":[\"21\",\"10\"]},{\"title\":\"12 x 10\",\"correct\":\"120\",\"options\":[\"96\",\"9\"]}]', 'https://h5p.org/sites/default/files/styles/medium-logo/public/logos/basic-arithmetic-quiz-icon-color.png?itok=LCpvRCzI'),
(23, 'Maths Quiz 4', 'Addition and Multiplication ', '[{\"title\":\"7+13\",\"correct\":\"20\",\"options\":[\"21\",\"10\",\"21\"]},{\"title\":\"12 x 10\",\"correct\":\"120\",\"options\":[\"96\",\"130\"]}]', 'https://h5p.org/sites/default/files/styles/medium-logo/public/logos/basic-arithmetic-quiz-icon-color.png?itok=LCpvRCzI'),
(24, 'Maths Quiz 4', 'Addition and Multiplication ', '[{\"title\":\"7+13\",\"correct\":\"20\",\"options\":[\"21\",\"120\",\"13\"]},{\"title\":\"5 x 2\",\"correct\":\"10\",\"options\":[\"15\",\"20\"]}]', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Stylised_atom_with_three_Bohr_model_orbits_and_stylised_nucleus.svg/220px-Stylised_atom_with_three_Bohr_model_orbits_and_stylised_nucleus.svg.png'),
(25, 'Science Quiz', 'Chemicals periodic table', '[{\"title\":\"5+2\",\"correct\":\"7\",\"options\":[\"4\",\"2\"]}]', 'https://clipartion.com/wp-content/uploads/2015/10/math-clipart-transparent-1024x791.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `score` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `user`, `quiz_id`, `score`) VALUES
(1, 'student2', 18, 0.428571),
(2, 'student1', 18, 0.714286),
(3, 'teacher1', 15, 0.666667),
(4, 'student1', 17, 0.6),
(5, 'teacher1', 17, 0.6),
(6, 'teacher1', 12, 1),
(7, 'teacher1', 12, 1),
(8, 'student1', 12, 1),
(9, 'student1', 12, 1),
(10, 'student1', 12, 1),
(11, 'student1', 12, 1),
(12, 'student1', 12, 1),
(13, 'student1', 12, 1),
(14, 'student1', 12, 1),
(15, 'student1', 12, 1),
(16, 'student1', 12, 1),
(17, 'student1', 12, 1),
(18, 'student1', 12, 1),
(19, 'student1', 12, 1),
(20, 'student1', 12, 1),
(21, 'student1', 12, 1),
(22, 'student1', 12, 1),
(23, 'student1', 12, 1),
(24, 'student1', 12, 1),
(25, 'student1', 12, 1),
(26, 'student1', 12, 1),
(27, 'student1', 12, 1),
(28, 'student1', 12, 1),
(29, 'student1', 12, 1),
(30, 'teacher1', 15, 1),
(31, 'teacher1', 15, 1),
(32, 'teacher1', 15, 1),
(33, 'teacher1', 15, 1),
(34, 'teacher1', 15, 1),
(35, 'teacher1', 15, 0.666667),
(36, 'teacher1', 15, 0.666667),
(37, 'teacher1', 15, 0.666667),
(38, 'teacher1', 15, 1),
(39, 'teacher1', 15, 1),
(40, 'teacher1', 12, 1),
(41, 'teacher1', 12, 1),
(42, 'teacher1', 12, 1),
(43, 'teacher1', 12, 1),
(44, 'teacher1', 12, 1),
(45, 'teacher1', 12, 1),
(46, 'teacher1', 12, 1),
(47, 'teacher1', 12, 1),
(48, 'teacher1', 12, 1),
(49, 'teacher1', 12, 1),
(50, 'teacher1', 12, 1),
(51, 'teacher1', 12, 1),
(52, 'teacher1', 15, 0.666667),
(53, 'teacher1', 12, 1),
(54, 'teacher1', 15, 0.666667),
(55, 'teacher1', 15, 0.666667),
(56, 'teacher1', 17, 0.6),
(57, 'teacher1', 17, 0.6),
(58, 'teacher1', 17, 0.6),
(59, 'teacher1', 17, 0.4),
(60, 'teacher1', 15, 0.666667),
(61, 'teacher1', 15, 0.666667),
(62, 'teacher1', 15, 0.666667),
(63, 'teacher1', 15, 0.666667),
(64, 'teacher1', 15, 0.666667),
(65, 'teacher1', 15, 0.666667),
(66, 'teacher1', 15, 0.666667),
(67, 'teacher1', 12, 1),
(68, 'teacher1', 15, 0.666667),
(69, 'student1', 12, 1),
(70, 'teacher1', 21, 0.5),
(71, 'student1', 18, 0.714286),
(72, 'student1', 23, 1),
(73, 'student1', 18, 0.714286),
(74, 'teacher1', 23, 1),
(75, 'teacher1', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `password` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`password`, `username`, `name`, `type`) VALUES
('$2y$10$MBtYEo99OigV29I.51xPm.Yk47YsvpLCbQSoqOyP9mkf62VULYyJ6', 'student1', 'john', 0),
('$2y$10$MBtYEo99OigV29I.51xPm.Yk47YsvpLCbQSoqOyP9mkf62VULYyJ6', 'student2', 'bob', 0),
('$2y$10$MBtYEo99OigV29I.51xPm.Yk47YsvpLCbQSoqOyP9mkf62VULYyJ6', 'teacher1', 'Karen', 1),
('password', 'teacher2', 'Lauren', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
