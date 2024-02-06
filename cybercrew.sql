-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2024 at 09:50 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybercrew`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` int NOT NULL,
  `activity_name` varchar(200) NOT NULL,
  `activity_date` date NOT NULL,
  `club_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `activity_name`, `activity_date`, `club_id`) VALUES
(1, 'CyberShield Training', '2023-12-30', 1),
(2, 'CyberCrew Induction', '2023-12-12', 2),
(3, 'CyberWatchCommand', '2023-12-05', 3),
(4, 'TechDefenderAlliance', '2023-12-18', 4),
(5, 'SecureTechLegion', '2024-01-03', 5),
(6, 'GuardianCyberOps', '2024-01-10', 6),
(7, 'SecureNetKnights', '2024-02-15', 7),
(9, 'CyberAwareness Campaign', '2024-02-01', 8),
(10, 'QuantumSecure Program', '2024-02-14', 10),
(11, 'CyberSmart Initiative', '2024-02-25', 11),
(17, 'BinaryVanguard Workshops', '2024-03-05', 12),
(18, 'SecureScriptorium', '2024-02-14', 13),
(19, 'TechDefenders Training', '2024-02-20', 14),
(20, 'CodeMasters Cyber Sessions', '2024-03-31', 15),
(21, 'HackShield Hub', '2024-04-01', 16),
(22, 'DigitalNest Skill Studio', '2024-04-10', 17),
(23, 'SkillSync Pro', '2024-04-18', 18),
(24, 'ByteGenius Institute', '2024-04-16', 19),
(25, 'CodeCraft Mastery', '2024-04-25', 20);

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `club_id` int NOT NULL,
  `club_name` varchar(200) NOT NULL,
  `club_owner` varchar(200) NOT NULL,
  `club_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`club_id`, `club_name`, `club_owner`, `club_type`) VALUES
(1, 'Society of Information System Management (SISMA)', 'Information Science Studies', 'Academic Club'),
(2, 'Association of Information Scientist (AIS)', 'Information Science Studies', 'Academic Club');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int NOT NULL,
  `contact_name` varchar(200) NOT NULL,
  `contact_studid` int NOT NULL,
  `contact_desc` longtext NOT NULL,
  `contact_email` varchar(150) NOT NULL,
  `contact_phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_studid`, `contact_desc`, `contact_email`, `contact_phone`) VALUES
(1, 'Mohd Zafian Bin Mohd Zawawi', 186322, 'This system is helpful bro!', 'zaffian@gmail.com', '0128088040'),
(2, 'zaini', 2014624582, 'Looking forward to more nights of techno-thrills and cyberdelic adventures!', 'zainiahmad@gmail.com', '01795426153'),
(4, 'imanaliaa', 4564761, 'Your dedication and hard work shine as bright as the club lights!', 'imanaliaa@gmail.com', '0136902595'),
(5, 'siti aina', 544356, ':)', 'sitiaina@gmail.com', '0145896246'),
(7, 'Nabil ', 9645453, 'good leader as well', 'nabil@gmail.com', '019278255'),
(8, 'baihaqi', 569146, 'Your dedication and hard work shine as bright as the club lights!', 'baihaqi@gmail.com', '0178934928'),
(9, 'Farzana', 4565156, 'The experience was truly exceptional, and I would like to commend the entire team for their hard work and dedication in organizing such an informative and engaging gathering.', 'farzana@gmail.com', '01655658'),
(10, 'ismail', 1561684, ' The event left me feeling inspired and motivated to delve deeper into the field of cybersecurity.', 'ismail@gmail.com', '0163515659'),
(11, 'Hamdin', 1649848, 'Timely communication and updates kept participants well-informed throughout the event.', 'hamdin@gmail.com', '0123645784'),
(12, 'Dhiya Raiisa', 564146, 'thumps up !', 'dhiya@gmail.com', '01365419842'),
(13, 'Ammar', 4564761, 'Nicessssss :)', 'ammar@gmail.com', '0158757535'),
(14, 'Fakrul Azimi', 487874, 'Great job organizing engaging and informative events! The speakers you brought in really added value to our understanding of cybersecurity.', 'matyo@gmail.com', '0186118848'),
(15, 'Surina Arif', 484163, 'Consider diversifying the topics covered in workshops to cater to different skill levels within the club.', 'suna@gmail.com', '0189086854'),
(16, 'Mazurah', 8804816, 'I appreciate the inclusive and welcoming atmosphere during club meetings. It makes it easy for members to participate and learn.', 'juju@gmail.com', '0189271615'),
(17, 'Danial', 9542611, 'nice club', 'nyel@gmail.com', '0116549875');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `gender`, `username`, `password`) VALUES
(1, 'Albery', 'Enstain', 'mohdzafian@gmail.com', 'male', '', ''),
(2, 'Nur Shairah Atikah', 'Mohd Hamzar', 'shairah@gmail.com', 'female', 'shahirah', '123'),
(3, 'Muhd Haslizam', 'Yaacob', 'haslizam@gmail.com', 'male', 'haslizam', '123'),
(4, 'Haziqah', 'Bakri', 'haziqah@gmail.com', 'female', 'haziqah', '123'),
(5, 'Zulaikha', 'Hasbullah', 'Zulaikha@gmail.com', 'female', 'Zulaikha', '123'),
(6, 'Belle', 'Razali', 'belle@gmail.com', 'female', 'bellerazali', '123'),
(7, 'Mustaqim', 'Ismail', 'mustaqim@gmail.com', 'male', 'Mustaqim', '123'),
(8, 'Yusuf', 'Ahmad', 'yusufahmad@gmail.com', 'male', 'yusuf', '123'),
(9, 'Shahwanie', 'Yaacob', 'nshahwanie@gmail.com', 'female', 'shahwanie', '123'),
(10, 'zaffian', '', 'zaffian@gmail.com', 'male', 'zaffian', '123'),
(11, 'Muhd Haslizam', 'Yaacob', 'haslizam@gmail.com', 'male', 'admin', '123'),
(12, 'Khai ', 'Bahar', 'khaibahar@gmail.com', 'male', 'khai', '123'),
(13, 'Hasrul', 'Azmi', 'yo@gmail.com', 'male', 'hasrul', '12345'),
(14, 'Sharifah', 'Aini', 'aini@gmail.com', 'female', 'aini', '123'),
(15, 'Amirul', 'Aizad', 'amirul@gmail.com', 'female', 'amirul', '123'),
(16, 'Amira', 'Balqis', 'amira@gmail.com', 'female', 'amira', '123'),
(19, 'Ayuni', 'Najihah', 'ayuni@gmailcom', 'female', 'ayuni', '15178'),
(20, 'alya', 'saida', 'alya@gmailcom', 'female', 'alya', '9876'),
(21, 'Afiq', 'Burhan', 'afiq@gmail.com', 'male', 'afiq', '12365'),
(22, 'Azlyana', 'Zaini', 'yana@gmail.com', 'female', 'yana', '0354');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `club_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
