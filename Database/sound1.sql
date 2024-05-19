-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 04:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sound1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_Id` int(20) NOT NULL,
  `Admin_Name` varchar(25) NOT NULL,
  `Admin_Pass` varchar(20) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_role` varchar(250) NOT NULL,
  `user_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_Id`, `Admin_Name`, `Admin_Pass`, `user_email`, `user_role`, `user_image`) VALUES
(2, 'admin', 'admin123', 'admin@gmail.com', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `Album_Id` int(20) NOT NULL,
  `Album_Name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`Album_Id`, `Album_Name`) VALUES
(1, 'Doorie'),
(2, 'Jal Pari'),
(3, 'Rustom'),
(4, 'Aashiqui 2'),
(5, 'Tamasha'),
(6, 'Kalank'),
(7, 'Mustt Mustt'),
(8, 'Shahen-shah'),
(9, 'Dhadkan'),
(10, 'Back 2 Love'),
(11, 'Best Of Rahat Fateh Ali K'),
(12, 'Sufiana Qalaam Vol. 14'),
(13, 'Starboy'),
(14, 'After Hours'),
(15, 'The Idol Vol. 1'),
(16, 'Rebirth'),
(17, 'Happier Than Ever'),
(18, 'WHEN WE ALL FALL ASLEEP, '),
(19, 'dont smile at me'),
(20, 'Loveyatri - A Journey Of '),
(21, 'Mitron'),
(22, 'Teraa Surroor'),
(24, 'Desi Kalakaar'),
(25, 'Kisi Ka Bhai Kisi Ki Jaan'),
(26, 'Chennai Express'),
(27, 'Half Girlfriend'),
(28, 'Race 2'),
(29, 'Ajab Prem Ki Ghazab Kahan'),
(30, 'Shershaah'),
(31, 'International Villager');

-- --------------------------------------------------------

--
-- Table structure for table `artistdetails`
--

CREATE TABLE `artistdetails` (
  `Artist_Id` int(20) NOT NULL,
  `Genre_Id` int(20) NOT NULL,
  `Year_Id` int(20) NOT NULL,
  `Album_Id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artistindex`
--

CREATE TABLE `artistindex` (
  `Artistindex_Id` int(20) NOT NULL,
  `Artistindex_Name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artistindex`
--

INSERT INTO `artistindex` (`Artistindex_Id`, `Artistindex_Name`) VALUES
(1, 'Rahat Fateh Ali Khan'),
(2, 'Atif Aslam'),
(3, 'Arijit Singh'),
(4, 'Darshan Raval'),
(5, 'Billie Eilish'),
(6, 'Asim Azhar'),
(7, 'Talha Anjum'),
(8, 'Mitraaz'),
(9, 'SZA'),
(10, 'Varun Jain, Sachin-Jigar,'),
(11, 'Oliver Tree'),
(12, 'Riar Saab, Abhijay Sharma'),
(13, 'Shubh'),
(14, 'Ali Sethi x Shae Gill'),
(15, 'Rema'),
(16, ' Faris Shafi');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `Artist_Id` int(20) NOT NULL,
  `Artist_Name` varchar(25) NOT NULL,
  `Artist_Image` varchar(500) DEFAULT NULL,
  `Artist_Genre` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`Artist_Id`, `Artist_Name`, `Artist_Image`, `Artist_Genre`) VALUES
(1, 'Atif Aslam', 'atif2.jpg', 'Indian Film Pop'),
(2, 'Arijit Singh', 'arijit1.jpg', 'Indian Film Pop'),
(3, 'Nusrat Fateh Ali Khan', 'nusrat.jpg', 'Qawwali'),
(4, 'Rahat Fateh Ali Khan', 'rahat1.jpeg', 'Popular'),
(5, 'The Weeknd', 'weeknd.jpg', 'Dance/Electronic'),
(6, 'Billie Eilish', 'bili.jpeg', 'R&B/Soul'),
(7, 'Darshan Raval', 'darshan.jpg', 'Indian Indie'),
(8, 'Honey Singh', 'honey.jpg', 'Indian Hip-Hop');

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `Audio_Id` int(20) NOT NULL,
  `Audio_Name` varchar(225) NOT NULL,
  `Audio_Album_Id` int(20) NOT NULL,
  `Audio_Image` varchar(500) NOT NULL,
  `Audio_Genre_Id` int(20) NOT NULL,
  `Audio_Year_Id` int(20) NOT NULL,
  `Audio_Artist_Id` int(20) NOT NULL,
  `Audio_Audio` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`Audio_Id`, `Audio_Name`, `Audio_Album_Id`, `Audio_Image`, `Audio_Genre_Id`, `Audio_Year_Id`, `Audio_Artist_Id`, `Audio_Audio`) VALUES
(1, 'Agar Tum Saath Ho', 5, 'tamasha.jpg', 7, 12, 2, '03 Tum Saath Ho - Tamasha (Arijit Singh) 320Kbps.mp3'),
(2, 'Chahun Main Ya Naa', 4, 'chahun.jpeg', 2, 8, 2, 'new_320_03 - Chahun Main Ya Naa - PagalSongs.com.mp3'),
(3, 'Kalank', 6, 'kalabk.jpg', 11, 15, 2, 'Kalank Title Track - Lyrical _ Alia Bhatt , Varun Dhawan _ Arijit Singh _ Pritam_ Amitabh.mp3'),
(4, 'Wat Wat Wat', 5, 'wat.jpg', 14, 12, 2, 'Wat Wat Wat - Tamasha 320 Kbps.mp3'),
(5, 'Dam Mast Mast', 7, 'mast mast.jpg', 12, 23, 3, 'Mast Mast.mp3'),
(6, 'Nit Khair Mansan Sohnia Main Teri', 8, 'nitkhairmanga1.jpg', 12, 20, 3, 'Nit-Khair-Manga-Sohneya-Nusrat-Fateh-Ali-Khan.mp3'),
(7, 'Dulhe Ka Sehra', 9, 'DULHE.jpg', 7, 22, 3, 'Dulhe Ka Sehra - Dhadkan 320 Kbps.mp3'),
(8, 'Rab Jaane', 10, 'rab.jpg', 8, 13, 4, 'RabJane.mp3'),
(9, 'Kalam-e-Bahu ', 12, 'sufi.jpg', 3, 19, 4, 'Kalam e bahoo , hazrat sultan bahoo r.a best by rahat fateh ali khan.mp3'),
(10, 'Tana Dery Na', 7, 'tana.jpg', 4, 21, 3, 'Nusrat Fateh Ali Khan - Tana Dery Na (Audio).mp3'),
(11, 'Die for You', 13, 'die.jpg', 5, 17, 5, 'The-Weeknd-Die-For-You-24Naijamuzic-com.mp3'),
(12, 'In Your Eyes', 14, 'EYES.jpg', 13, 16, 5, '[YT2mp3.info] - The Weeknd - In Your Eyes (Official Video) (320kbps).mp3'),
(13, 'Habibi', 10, 'habibi.jpeg', 9, 13, 4, 'Habibi-Rahat-Fateh-Ali-Khan.mp3'),
(14, 'Zaroori Tha', 10, 'ZAROORI.jpg', 7, 13, 4, '04 Zaroori Tha - Rahat Fateh Ali Khan [PagalWorld.com].mp3'),
(15, 'Take Me Back', 15, 'take.jpg', 14, 11, 5, 'The-Weeknd-Take-Me-Back-24Naijamuzic-com.mp3'),
(16, 'Sidewalks', 13, 'sidewalk.jpg', 13, 18, 5, 'The-Weeknd-Ft-Kendrick-Lamar-Sidewalks-24Naijamuzic-com.mp3'),
(17, 'Ab To Aadat Si Hai', 2, 'adat.jpg', 7, 24, 1, 'Ab-to-Aadat-Si-Atif-Aslam.mp3'),
(18, 'Be Intehaan', 28, 'beinteha.jpg', 8, 7, 1, 'Be Intehaan - Song Video _ Race 2 I Saif Ali Khan & Deepika Padukone _ Atif & Sunidhi _ Pritam.mp3'),
(19, 'Tera Hone Laga Hoon', 29, 'terahonay.jpg', 8, 2, 1, 'Tera Hone Laga Hoon Lyrical - Ajab Prem Ki Ghazab Kahani _ Atif Aslam _ Ranbir, Katrina K _ Pritam.mp3'),
(20, 'Tera Hua', 20, 'terahua.jpg', 8, 14, 1, 'Tera Hua Loveyatri A Journey Of Love 320 Kbps.mp3'),
(21, 'Happier Than Ever', 17, 'happier.jpeg', 16, 9, 6, 'Billie_Eilish_-_Happier_Than_Ever.mp3'),
(22, 'Bury a Friend', 18, 'bury.jpg', 16, 15, 6, 'Billie Eilish - bury a friend (Lyrics).mp3'),
(23, 'COPYCAT', 19, 'copy.jpeg', 2, 6, 6, 'Billie Eilish Copycat.mp3'),
(24, 'Therefore I Am', 17, 'therefore.jpg', 2, 16, 6, 'Billie_Eilish_-_Therefore_I_Am_(Jesusful.com).mp3'),
(25, 'Chogada', 20, 'chogada1.jpg', 9, 14, 7, '01 Chogada - Loveratri.mp3'),
(26, 'Kamariya', 21, 'kamariya.jpg', 11, 14, 7, 'Kamariya Mitron 320 Kbps.mp3'),
(27, 'Main Woh Chaand', 22, 'chand.jpg', 7, 12, 7, '01 - Main Woh Chaand.mp3'),
(28, 'Tumhhe', 30, 'kbhitumhe.jpg', 7, 9, 7, 'Kabhii Tumhhe Shershaah 320 Kbps.mp3'),
(29, 'Desi Kalakaar', 24, 'desikalakar.jpg', 2, 13, 8, 'new_320_01 - Desi Kalakaar - Honey Singh.mp3'),
(30, 'Stardom', 24, 'stardom.jpg', 11, 13, 8, 'new_320_07 - Stardom - Honey Singh.mp3'),
(31, 'Lungi Dance', 26, 'lungi.jpg', 9, 8, 8, '320kbps_CE 2013 - Lungi Dance.mp3'),
(32, 'Brown Rang', 31, 'brown.jpg', 11, 3, 8, 'Brown Rang International Villager 320 Kbps.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `Genre_Id` int(20) NOT NULL,
  `Genre_Type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`Genre_Id`, `Genre_Type`) VALUES
(1, 'Classic'),
(2, 'Pop Music'),
(3, 'Sufi'),
(4, 'Qawwali'),
(5, 'Hip-Hop/Rap'),
(6, 'Indian Indie'),
(7, 'Blues'),
(8, 'Romantic'),
(9, 'Indian Film Pop'),
(10, 'Indian Hip-Hop'),
(11, 'Indian Pop'),
(12, 'Popular'),
(13, 'R&B/Soul'),
(14, 'Dance/Electronic'),
(15, 'Ghazal'),
(16, 'Blue-eyed soul'),
(17, 'Pakistani Drama Ost');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Reg_Id` int(20) NOT NULL,
  `Reg_Name` varchar(25) NOT NULL,
  `Reg_Lastname` varchar(25) NOT NULL,
  `Reg_Email` varchar(225) NOT NULL,
  `Reg_Pass` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Reg_Id`, `Reg_Name`, `Reg_Lastname`, `Reg_Email`, `Reg_Pass`) VALUES
(1, 'Rafia', 'Najam', 'najamrafia02@gmail.com', 123);

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `Song_Id` int(20) NOT NULL,
  `Song_Name` varchar(225) NOT NULL,
  `Song_Artist_Id` int(20) NOT NULL,
  `Song_Image` varchar(500) NOT NULL,
  `Song_Audio` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`Song_Id`, `Song_Name`, `Song_Artist_Id`, `Song_Image`, `Song_Audio`) VALUES
(1, 'Ankhien', 4, 'ankhien.jpg', 'Ankhain.mp3'),
(2, 'Mangan Aiyaan', 1, 'atif.jpeg', 'Mangan Aiyaan Atif Aslam 320 Kbps.mp3'),
(3, 'Apna Bana Le', 2, 'apnabanale.jpg', 'Apna-Bana-Le(PagalWorld).mp3'),
(4, 'Piya Re', 7, 'darshu.jpg', 'Piya Re Darshan Raval 128 Kbps.mp3'),
(5, 'Hotline', 6, 'bill.jpeg', 'Billie-Eilish-Hotline-Edit-24Naijamuzic-com.mp3'),
(6, 'Saiyaan Ji', 8, 'saiyaanjee.jpg', '128-Saiyaan Ji - Yo Yo Honey Singh 128 Kbps.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `Vid_Id` int(20) NOT NULL,
  `Vid_Name` varchar(225) NOT NULL,
  `Vid_Thumbnail` varchar(500) NOT NULL,
  `Vid_Genre_Id` int(20) NOT NULL,
  `Vid_Artist_Id` int(20) NOT NULL,
  `Vid_Video` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`Vid_Id`, `Vid_Name`, `Vid_Thumbnail`, `Vid_Genre_Id`, `Vid_Artist_Id`, `Vid_Video`) VALUES
(1, 'Ankhain', 'ankhien.jpg', 17, 4, 'ankhian.mp4'),
(2, 'Apna Bana Le', 'apnabanale.jpg', 8, 2, 'apnabanale.mp4'),
(3, 'Jeene Laga Hoon', 'jeenelagahoo.jpg', 8, 1, 'JeeneLagaHoon.mp4'),
(7, 'Piya Re', 'darshu.jpg', 8, 4, 'yt5s.io-Piya Re Official Lyrical Video _ Darshan Raval _ Gurpreet S. _ Gautam S. _ Lijo George.mp4'),
(8, 'Bulleya', 'asim.jpg', 3, 6, 'Asim Azhar & Shae Gill - Bulleya (Official Video).mp4'),
(10, 'Alfaazo', 'mit.jpg', 11, 8, 'Alfaazo - @MITRAZ - Trending Song 2023 - Big Bang Music.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `Year_Id` int(20) NOT NULL,
  `Year_Name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`Year_Id`, `Year_Name`) VALUES
(1, '2009'),
(2, '2009'),
(3, '2011'),
(4, '2006'),
(5, '2004'),
(6, '2017'),
(7, '2012'),
(8, '2013'),
(9, '2021'),
(10, '2022'),
(11, '2023'),
(12, '2015'),
(13, '2014'),
(14, '2018'),
(15, '2019'),
(16, '2020'),
(17, '2016'),
(18, '2016'),
(19, '2002'),
(20, '1989'),
(21, '1990'),
(22, '2000'),
(23, '1994'),
(24, '2005');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_Id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD UNIQUE KEY `Unique` (`Album_Id`);

--
-- Indexes for table `artistdetails`
--
ALTER TABLE `artistdetails`
  ADD PRIMARY KEY (`Artist_Id`),
  ADD KEY `Genre_Id` (`Genre_Id`),
  ADD KEY `Year_Id` (`Year_Id`),
  ADD KEY `Album_Id` (`Album_Id`);

--
-- Indexes for table `artistindex`
--
ALTER TABLE `artistindex`
  ADD PRIMARY KEY (`Artistindex_Id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD UNIQUE KEY `Unique` (`Artist_Id`);

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`Audio_Id`),
  ADD KEY `Audio_Artist_Id` (`Audio_Artist_Id`),
  ADD KEY `Audio_Album_Id` (`Audio_Album_Id`),
  ADD KEY `Audio_Genre_Id` (`Audio_Genre_Id`),
  ADD KEY `Audio_Year_Id` (`Audio_Year_Id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`Genre_Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Reg_Id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`Song_Id`),
  ADD KEY `Song_Artist_Id` (`Song_Artist_Id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`Vid_Id`),
  ADD KEY `Vid_Genre_Id` (`Vid_Genre_Id`),
  ADD KEY `Vid_Artist_Id` (`Vid_Artist_Id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`Year_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `Album_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `artistindex`
--
ALTER TABLE `artistindex`
  MODIFY `Artistindex_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `Artist_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `Audio_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `Genre_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Reg_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `Song_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `Vid_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `Year_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artistdetails`
--
ALTER TABLE `artistdetails`
  ADD CONSTRAINT `artistdetails_ibfk_1` FOREIGN KEY (`Artist_Id`) REFERENCES `artists` (`Artist_Id`),
  ADD CONSTRAINT `artistdetails_ibfk_2` FOREIGN KEY (`Genre_Id`) REFERENCES `genre` (`Genre_Id`),
  ADD CONSTRAINT `artistdetails_ibfk_3` FOREIGN KEY (`Year_Id`) REFERENCES `years` (`Year_Id`),
  ADD CONSTRAINT `artistdetails_ibfk_4` FOREIGN KEY (`Album_Id`) REFERENCES `album` (`Album_Id`);

--
-- Constraints for table `audio`
--
ALTER TABLE `audio`
  ADD CONSTRAINT `audio_ibfk_1` FOREIGN KEY (`Audio_Artist_Id`) REFERENCES `artists` (`Artist_Id`),
  ADD CONSTRAINT `audio_ibfk_2` FOREIGN KEY (`Audio_Album_Id`) REFERENCES `album` (`Album_Id`),
  ADD CONSTRAINT `audio_ibfk_3` FOREIGN KEY (`Audio_Genre_Id`) REFERENCES `genre` (`Genre_Id`),
  ADD CONSTRAINT `audio_ibfk_4` FOREIGN KEY (`Audio_Year_Id`) REFERENCES `years` (`Year_Id`);

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`Song_Artist_Id`) REFERENCES `artists` (`Artist_Id`),
  ADD CONSTRAINT `songs_ibfk_2` FOREIGN KEY (`Song_Artist_Id`) REFERENCES `artistindex` (`Artistindex_Id`),
  ADD CONSTRAINT `songs_ibfk_3` FOREIGN KEY (`Song_Artist_Id`) REFERENCES `artists` (`Artist_Id`);

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`Vid_Genre_Id`) REFERENCES `genre` (`Genre_Id`),
  ADD CONSTRAINT `video_ibfk_2` FOREIGN KEY (`Vid_Artist_Id`) REFERENCES `artists` (`Artist_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
