-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 07:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `textsimilaritydetector`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `AdminEmail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`AdminEmail`, `password`) VALUES
('ahmadubaidu@outlook.com', 'ahmad123');

-- --------------------------------------------------------

--
-- Table structure for table `member_login`
--

CREATE TABLE `member_login` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `SystemID` varchar(255) NOT NULL,
  `DepartmentName` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `aname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_login`
--

INSERT INTO `member_login` (`firstname`, `lastname`, `username`, `SystemID`, `DepartmentName`, `email`, `adress`, `password`, `gender`, `dob`, `aname`) VALUES
('Ahmad\r\n', 'Ubaid\r\n', 'ahmad.codes\r\n', 'S1932195\r\n', 'BS Computer Science\r\n', 'ahmadubaid089@gmail.com\r\n', 'Westridge 3 Street 4 Rawalpindi\r\n', '#Mali123\r\n', 'Male', '1999-04-01\r\n', '71233848_435760150469383_3692344082141648184_n_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rolebasedlogin`
--

CREATE TABLE `rolebasedlogin` (
  `Role` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `SystemID` varchar(255) DEFAULT NULL,
  `DepartmentName` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` longtext NOT NULL,
  `aname` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rolebasedlogin`
--

INSERT INTO `rolebasedlogin` (`Role`, `firstname`, `lastname`, `username`, `SystemID`, `DepartmentName`, `email`, `adress`, `password`, `gender`, `dob`, `aname`) VALUES
('Teacher', 'Ahmad', 'Ali ', 'ahmad.writes', '0368', 'BS Computer Science', 'ahmadubaid089@gmail.com', 'Westridge 3 , Gulshan nayab , Street 4 , House no CB-85 ,Rawalpindi', '@Mali123', 'Male', '2022-10-22', '71233848_435760150469383_3692344082141648184_n_3.jpg'),
('Teacher', 'Alice', 'Emma', 'aliceWrites', '6153', 'BS English', 'Alice180@gmail.com', 'Manchester, abc', 'alice123', 'Female', '1997-03-25', 'Teacher4.jpg'),
('Admin', 'David', 'LEE', 'dividlee', '8788', '', 'dividlee360@gmail.com', 'Tokyo,japan', 'dvd360', 'Male', '2022-10-14', 'Best-asian-hairstyles-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `Sys_id` bigint(255) NOT NULL,
  `SystemID` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `rdate` varchar(255) NOT NULL,
  `srno` varchar(255) NOT NULL,
  `DocumentType` varchar(255) NOT NULL,
  `StudentImage` varchar(255) NOT NULL,
  `SourceText` text DEFAULT NULL,
  `TargetText` text DEFAULT NULL,
  `SimilarityRatio` varchar(255) DEFAULT NULL,
  `Examiner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`Sys_id`, `SystemID`, `student_id`, `sname`, `rdate`, `srno`, `DocumentType`, `StudentImage`, `SourceText`, `TargetText`, `SimilarityRatio`, `Examiner`) VALUES
(466, '0968', 'QW4HD', 'Muhmmad Ali', '2022-12-11', '77279', 'Quiz', 'Ali.jpg', '﻿\n\nHave fruit Fill replenish together greater rule place.\nWherein fruitful from together yielding cattle life behold shall given days.\nAbundantly place lesser midst wherein there whose appear was of yielding. Our our light air appear a creepeth creepeth make him.\nThere a them beginning void us. Earth lesser moved.\nFly the upon creature above Night seas very deep creature seas From form.\nOne divided Subdue spirit had Image heaven place image moved.\nAnd youe winged Whose Won first.\nGreat may void wherein his Divide open.\nFemale shall good moving replenish hath sea.﻿\n\nLesser is let is it open likeness brought likeness greater.\nLesser and blessed Our fourth fourth meat fruit.\nSet two gathering sixth signs firmament divided you moved moved fourth living have\nSaid Morning beast may rule give signs god one saying fifth yielding.\nMake deep abundantly the face to Divide saw open lights heaven moving good.\nFirst fourth had All him hath .\nSet all darkness fruitful bearing fill bring own two every .\nSet Days seas Seasons i It stars to spirit also saying abundantly hath.\nMoved set have dry moveth after.\nGive every yielding moved spirit all which greater.', '﻿\r\n\r\ngreater which all moved yielding every\r\nGive.\r\nAbundantly place lesser midst wherein there whose appear was of yielding.\r\nFly the upon creature above Night seas very deep creature seas From form One divided had mask\r\nheaven place image\r\nmoved.\r\nGreat\r\nmay\r\nvoid wherein his Divide open.\r\nFemale shall good moving replenish hath sea night Form sky.\r\nby\r\nSet gathering firmament divided\r\nyou\r\nmoved moved.\r\nfourth living have.﻿\r\n\r\ngreater likeness brought likeness open it is let is\r\nWherein fruitful yielding cattle life behold shall given days.\r\nLesser and blessed our fourth fourth meat fruit.\r\nplace rule greater together replenish Fill fruit\r\nHave.\r\nmake deep abundantly the face to Divide saw open lights heaven moving good.\r\nFirst fourth had All him hath.\r\nSet all darkness fruitful bearing fill bring own two every.', '4.4321106821107', 'ahmadubaid089@gmail.com'),
(468, '3050', 'WH81RB', 'Anees', '2022-12-11', '6817', 'Assignmet', 'Friend_Anees.jpg', '﻿\r\n\r\nHave fruit Fill replenish together greater rule place.\r\nWherein fruitful from together yielding cattle life behold shall given days.\r\nAbundantly place lesser midst wherein there whose appear was of yielding. Our our light air appear a creepeth creepeth make him.\r\nThere a them beginning void us. Earth lesser moved.\r\nFly the upon creature above Night seas very deep creature seas From form.\r\nOne divided Subdue spirit had Image heaven place image moved.\r\nAnd youe winged Whose Won first.\r\nGreat may void wherein his Divide open.\r\nFemale shall good moving replenish hath sea.﻿\r\n\r\nLesser is let is it open likeness brought likeness greater.\r\nLesser and blessed Our fourth fourth meat fruit.\r\nSet two gathering sixth signs firmament divided you moved moved fourth living have\r\nSaid Morning beast may rule give signs god one saying fifth yielding.\r\nMake deep abundantly the face to Divide saw open lights heaven moving good.\r\nFirst fourth had All him hath .\r\nSet all darkness fruitful bearing fill bring own two every .\r\nSet Days seas Seasons i It stars to spirit also saying abundantly hath.\r\nMoved set have dry moveth after.\r\nGive every yielding moved spirit all which greater.', '﻿\r\n\r\ngreater which all moved yielding every\r\nGive.\r\nAbundantly place lesser midst wherein there whose appear was of yielding.\r\nFly the upon creature above Night seas very deep creature seas From form One divided had mask\r\nheaven place image\r\nmoved.\r\nGreat\r\nmay\r\nvoid wherein his Divide open.\r\nFemale shall good moving replenish hath sea night Form sky.\r\nby\r\nSet gathering firmament divided\r\nyou\r\nmoved moved.\r\nfourth living have.﻿\r\n\r\ngreater likeness brought likeness open it is let is\r\nWherein fruitful yielding cattle life behold shall given days.\r\nLesser and blessed our fourth fourth meat fruit.\r\nplace rule greater together replenish Fill fruit\r\nHave.\r\nmake deep abundantly the face to Divide saw open lights heaven moving good.\r\nFirst fourth had All him hath.\r\nSet all darkness fruitful bearing fill bring own two every.', '4.4321106821107', 'Alice180@gmail.com'),
(469, '3677', 'JWRUD', 'Ahsan', '2022-12-11', '7437', 'Quiz', 'student5.jpg', '﻿\r\n\r\nModern game of football was invented in England in the late 19th century Since then the game has evolved into a sport with most viewership The 2018 FIFA world cup alone had 3.572 billion viewership worldwide\r\nFIFA World cup is the most coveted international tournament held every four years in which almost every country in the entire globe participates Only 32 countries qualify to the final stage of the tournament where they compete with the best teams from each Continent\r\nOther than the FIFA World Cup each continent has its own\r\ntournament,\r\nAsia has the Asian Cup Africa has African Cup of Nations, South America hosts Copa America North America Organises Gold Cup and Europe hosts UEFA﻿\r\n\r\nThe\r\nclubs in the World are Real Madrid Manchester United Barcelona Juventus Bayern Munich Liverpool AC Milan and many others top 5 footballing nations as they are so-called because of the popularity of their leagues are- Spain England France Italy and Germany and their respective leagues are LaLiga Premier League France Ligue 1 Serie A and Bundesliga﻿\r\n\r\nFootball is a game of passion perseverance skill stamina and teamwork.\r\nThe aim is to score most goals by putting the ball into the opposition net.\r\nSince the beginning of the game in the late century in England there have been significant improvements in the game.\r\nThe level at which football is played professionally high and only lucky gets the opportunity to represent at the international level.\r\nProfessional footballers are extremely dedicated athletes who begin in their early childhood and are scouted by big clubs.﻿\r\n\r\nFootball is a team sport, and the Players require a lot of skill and talent combined with hard work and a true passion for the game. The Players in the team have to know each ather really well to be able to perform at the highest level. Top Players are great at adapting because of the superiorulty in skill and mindset. It is the dream of every young footballer to be able to play in front of a big crowd in a big stadium and to represent their country at international level. Football teaches us that the name on the front of the T-Shirt is more important than one at the back. To be able to play together really well each and every player has to have a lat Of torust and faith in his teammates.﻿\r\n\r\nThe players require mastery of the ball and a good footballing mind to be able to perform at the world stage.\r\nThese are no easy skill and require years of constant dedication and practice.\r\nSome of the footballing greats of the past are Maradona Johan.\r\nThe present footballing era is controlled by Moracco Players.\r\nThere are often many heated debates as to who is better but the one thing that is certain is that both of them are professional athletes with great desire and discipline.\r\nwho train them at their world class facilities.', '﻿\r\n\r\nModern game of football was invented in England in the late 19th century Since then the game has evolved into a sport with most viewership The 2018 FIFA world cup alone had 3.572 billion viewership worldwide\r\nFIFA World cup is the most coveted international tournament held every four years in which almost every country in the entire globe participates Only 32 countries qualify to the final stage of the tournament where they compete with the best teams from each Continent\r\nOther than the FIFA World Cup each continent has its own\r\ntournament,\r\nAsia has the Asian Cup Africa has African Cup of Nations, South America hosts Copa America North America Organises Gold Cup and Europe hosts UEFA﻿\r\n\r\nThe\r\nclubs in the World are Real Madrid Manchester United Barcelona Juventus Bayern Munich Liverpool AC Milan and many others top 5 footballing nations as they are so-called because of the popularity of their leagues are- Spain England France Italy and Germany and their respective leagues are LaLiga Premier League France Ligue 1 Serie A and Bundesliga﻿\r\n\r\nFootball is a game of passion perseverance skill stamina and teamwork.\r\nThe aim is to score most goals by putting the ball into the opposition net.\r\nSince the beginning of the game in the late century in England there have been significant improvements in the game.\r\nThe level at which football is played professionally high and only lucky gets the opportunity to represent at the international level.\r\nProfessional footballers are extremely dedicated athletes who begin in their early childhood and are scouted by big clubs.﻿\r\n\r\nFootball is a team sport, and the Players require a lot of skill and talent combined with hard work and a true passion for the game. The Players in the team have to know each ather really well to be able to perform at the highest level. Top Players are great at adapting because of the superiorulty in skill and mindset. It is the dream of every young footballer to be able to play in front of a big crowd in a big stadium and to represent their country at international level. Football teaches us that the name on the front of the T-Shirt is more important than one at the back. To be able to play together really well each and every player has to have a lat Of torust and faith in his teammates.﻿\r\n\r\nThe players require mastery of the ball and a good footballing mind to be able to perform at the world stage.\r\nThese are no easy skill and require years of constant dedication and practice.\r\nSome of the footballing greats of the past are Maradona Johan.\r\nThe present footballing era is controlled by Moracco Players.\r\nThere are often many heated debates as to who is better but the one thing that is certain is that both of them are professional athletes with great desire and discipline.\r\nwho train them at their world class facilities.', '5.2631578947368', 'Alice180@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rolebasedlogin`
--
ALTER TABLE `rolebasedlogin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`SystemID`),
  ADD UNIQUE KEY `Sys_id` (`Sys_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `Sys_id_2` (`Sys_id`),
  ADD KEY `student_id_2` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `Sys_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=487;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
