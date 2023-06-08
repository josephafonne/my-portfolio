-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 09:13 AM
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
-- Database: `my-portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image-link` varchar(32) NOT NULL DEFAULT '0.png',
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `image-link`, `description`) VALUES
(1, '<a href=\"https://github.com/menyepy\" target=\"blank\">GitHub Profile</a>', '1.png', 'In my Github profile, you\'ll find a diverse range of projects, including Java programs, Python projects, web development projects (HTML, CSS, JavaScript), web programming projects (PHP, MySQL), and perhaps some miscellaneous projects developed in Lua.'),
(2, 'Video Production Project', '2.png', 'I collaborated with my classmates to create a captivating video project centered around showcasing the aspects we appreciate about Mzuzu University. Additionally, I occasionally develop content for social media platforms, combining my video production skills with creative storytelling.'),
(3, 'C & Java Programs', '0.png', 'Within my repertoire, I have crafted a collection of foundational C scripting programs, as well as Java programs that span from basic implementations to intricate graphical user interface (GUI) applications.');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `projects` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `description`, `projects`) VALUES
(1, 'Programming in C', 'I possess a strong foundation in C programming and can effectively script and develop basic applications using this language.', 0),
(2, 'Microsoft Office Suite', 'I am highly proficient in utilizing various Microsoft Office tools, including Word, Excel, PowerPoint, Outlook, Access, and more. I can efficiently create and format documents, spreadsheets, presentations, manage emails, and work with databases', 0),
(3, 'Adobe Photoshop', 'With expertise in Adobe Photoshop, I excel at performing photo manipulation and editing. Additionally, I am skilled in creating captivating graphical designs such as event invitations, posters, cards, and other visually appealing materials.', 0),
(4, 'Photography and Video Production', 'Proficient in operating digital cameras, I have a keen eye for capturing high-quality photographs and videos. Furthermore, I possess the ability to edit and enhance visual content to achieve desired results, whether it\'s for personal or professional purposes.', 0),
(5, 'Premiere Pro Video Editing', 'With experience in using Premiere Pro, I am capable of editing various types of videos, including gaming videos, music videos, documentaries, and more. I have the skills to trim, merge, add effects, and create engaging and polished video content.', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
