-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 31, 2024 at 03:48 PM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baklawpo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '9ae2be73b58b565bce3e47493a56e26a');

-- --------------------------------------------------------

--
-- Table structure for table `deleteduser`
--

CREATE TABLE `deleteduser` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `deltime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `deleteduser`
--

INSERT INTO `deleteduser` (`id`, `email`, `deltime`) VALUES
(21, 'rashidkhan@gmail.com', '2024-03-31 10:03:46');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `reciver` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `feedbackdata` varchar(500) NOT NULL,
  `attachment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `notiuser` varchar(50) NOT NULL,
  `notireciver` varchar(50) NOT NULL,
  `notitype` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notiuser`, `notireciver`, `notitype`, `time`) VALUES
(18, 'naseeboplusghareebo@hotmail.com', 'Admin', 'Create Account', '2024-03-26 04:11:27'),
(19, 'rashidkhan@gmail.com', 'Admin', 'Create Account', '2024-03-26 14:27:55'),
(20, 'shamsherbhatti@gmail.com', 'Admin', 'Create Account', '2024-03-26 14:54:38'),
(21, 'adminrehman@gmail.com', 'Admin', 'Create Account', '2024-03-30 06:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  `hor` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `case_status` varchar(255) DEFAULT NULL,
  `case_type` varchar(255) DEFAULT NULL,
  `fee` varchar(255) DEFAULT NULL,
  `registration_date` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `mobile`, `image`, `status`, `hor`, `dob`, `nationality`, `case_status`, `case_type`, `fee`, `registration_date`, `notes`) VALUES
(20, 'Naseeb Gul Khattak', 'naseeboplusghareebo@hotmail.com', '865026b4bd51f17c3736fd4a1bf1f892', 'Female', '03555691125', '3_4109071_20651-removebg-preview.jpg', 1, 'Kandahar', '10-02-1984', 'Pakistani', '43f3', 'STating', '4500', '20-11-2012', '<p class=\"ds-text-comfortable-m ds-my-4 ci-html-content\">&nbsp;</p>\r\n<div>old, hard evidence of the speed gun. There\'s the effect all that pace has on the batter, which can manifest itself as feet moving too little or too much, hands going out of control, and a general sense of being ill at ease.</div>\r\n<p>&nbsp;</p>\r\n<p class=\"ds-text-comfortable-m ds-my-4 ci-html-content\">&nbsp;</p>\r\n<div><a href=\"https://www.espncricinfo.com/cricketers/mayank-yadav-1292563\">Mayank Yadav</a>&nbsp;was ticking both those boxes&nbsp;<a href=\"https://www.espncricinfo.com/series/indian-premier-league-2024-1410320/lucknow-super-giants-vs-punjab-kings-11th-match-1422129/full-scorecard\">on Saturday night</a>. You could see, plainly, that he was exceptionally quick. And you could hear it, because each of his bursts through the crease was accompanied by&hellip; not a grunt, exactly, because that implies unnatural physical strain, but an audible exhalation as streamlined as everything else about his bowling.</div>\r\n<p>&nbsp;</p>\r\n<p class=\"ds-text-comfortable-m ds-my-4 ci-html-content\">&nbsp;</p>\r\n<div>We often watch cricket with our attention wandering in and out of the action until something happens that makes us close all our social-media tabs and sit up properly. Watching and hearing Mayank bowl was like that. When he greeted Jitesh Sharma with a first-ball bouncer that was too quick to get any bat on, something about the ball\'s path into the keeper\'s gloves may have reminded you, perhaps, of&nbsp;<a href=\"https://www.espncricinfo.com/cricketers/shoaib-akhtar-42655\">Shoaib Akhtar</a>. Not the action or the batter\'s reaction, but just the way the ball kept rising after it went past the stumps.</div>\r\n<p>&nbsp;</p>\r\n<div>\r\n<div class=\"ds-w-full ds-bg-fill-content-prime ds-overflow-hidden ds-rounded-xl ds-border ds-border-line ds-float-right ds-w-72 ds-ml-7 ds-my-6\">\r\n<div class=\"ds-flex ds-px-4 ds-border-b ds-border-line ds-py-3\">\r\n<div class=\"ds-flex ds-flex-col ds-grow ds-justify-center\"><span class=\"ds-text-title-xs ds-font-bold ds-text-typo\"><span class=\"ds-text-title-xs ds-font-bold ds-uppercase\">RELATED</span></span></div>\r\n</div>\r\n<div class=\"ds-p-4\">\r\n<ul class=\"ds-list-none\">\r\n<li class=\"ds-mb-4\"><a class=\"ds-flex ds-space-x-3 ds-items-center\" href=\"https://www.espncricinfo.com/series/indian-premier-league-2024-1410320/lucknow-super-giants-vs-punjab-kings-11th-match-1422129/match-report\"><img class=\"ds-rounded\" src=\"https://img1.hscicdn.com/image/upload/f_auto,t_ds_square_w_80/lsci/db/PICTURES/CMS/378500/378539.5.jpg\" alt=\"Story Image\" width=\"40\" height=\"40\">\r\n<p class=\"ds-text-tight-s ds-font-medium\">Captain Pooran, rookie Mayank dominate middle overs as LSG get off the mark</p>\r\n</a></li>\r\n<li class=\"\"><a class=\"ds-flex ds-space-x-3 ds-items-center\" href=\"https://www.espncricinfo.com/story/who-is-mayank-yadav-the-lsg-bowler-who-ripped-through-the-punjab-kings-batting-unit-1427137\"><img class=\"ds-rounded\" src=\"https://img1.hscicdn.com/image/upload/f_auto,t_ds_square_w_80/lsci/db/PICTURES/CMS/378500/378539.5.jpg\" alt=\"Story Image\" width=\"40\" height=\"40\">\r\n<p class=\"ds-text-tight-s ds-font-medium\">Mayank Yadav: I didn\'t think my debut would go that well</p>\r\n</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n<p class=\"ds-text-comfortable-m ds-my-4 ci-html-content\">&nbsp;</p>\r\n<div>By the end of the evening,&nbsp;<a href=\"https://www.espncricinfo.com/cricketers/varun-aaron-360911\">Varun Aaron</a>, a man who had had a similar effect on speedguns and audiences when he burst onto the national cricketing consciousness over a decade ago, was full of admirati</div>\r\n<p>&nbsp;</p>'),
(22, 'Shamsher Bhatti', 'shamsherbhatti@gmail.com', '09d7e0d33b7ddc86a02542c79f44cc69', 'Male', '3440089107', 'shamsherbut.jfif', 1, 'Falakabada', '10-02-1984', 'Pakistani', 'Pending', 'Gamer', '15005000', '10-02-2022', NULL),
(23, 'Rashid  Khan', 'rashidkha534n@gmail.com', '03459346883', 'Male', '03459346883', 'rashdkhan.jpg', 1, 'Kandahar', '10-02-1984', 'Non Pakistani', 'Almost Complete', 'Gamer', '5675000', '20-11-2018', NULL),
(24, 'Younas Khan', 'younaskhan@gmail.com', '03469475731', 'Male', '03469475731', 'aygo-x.jpg', 1, 'Guratai Barikot', '10-02-1996', 'Pakistani', 'Middle Phase', 'Education Termination', '3200000', '20-02-2024', NULL),
(25, 'Venkatesh Iyer', 'venkatesh@gmaill.com', '0647835446', 'Male', '0647835446', '337187.webp', 1, 'Hyderansl Dewaangee', '1972-05-07', 'Non Pakistani', 'Dusted', 'Cricket Ban', '34000', '20-12-2022', NULL),
(26, 'Elysse Perry', 'elyseeperry@gmail.com', '738344544', 'Female', '738344544', '59956.webp', 1, 'Kensington Victoria', '10-02-1996', 'Non Pakistani', 'Blcoked', 'Australia', '450000', '20-06-2023', NULL),
(27, 'Babar Ahmad', 'bak235@gmail.com', '07568529914', 'Male', '07568529914', 'caec4f58-2361-47d4-984f-5788dc95620f.jpeg', 1, 'Xyz1234', '27-09-1997', 'Pakistani', 'Asylum seeker work permitted student ', 'N/A', '200', '24-12-2000', NULL),
(28, 'codeigniter', 'akwati@gmail.com', '3107', 'Male', '3107', 'saale.webp', 1, 'Falakabada', '10-02-1964', 'Pakistani', 'Almost Complete', 'STating', '15005000', '10-02-2022', '<p>03555691125&nbsp;</p>\r\n<p class=\"ds-text-comfortable-m ds-my-4 ci-html-content\">&nbsp;</p>\r\n<div>old, hard evidence of the speed gun. There\'s the effect all that pace has on the batter, which can manifest itself as feet moving too little or too much, hands going out of control, and a general sense of being ill at ease.</div>\r\n<p>&nbsp;</p>\r\n<p class=\"ds-text-comfortable-m ds-my-4 ci-html-content\">&nbsp;</p>\r\n<div><a href=\"https://www.espncricinfo.com/cricketers/mayank-yadav-1292563\">Mayank Yadav</a>&nbsp;was ticking both those boxes&nbsp;<a href=\"https://www.espncricinfo.com/series/indian-premier-league-2024-1410320/lucknow-super-giants-vs-punjab-kings-11th-match-1422129/full-scorecard\">on Saturday night</a>. You could see, plainly, that he was exceptionally quick. And you could hear it, because each of his bursts through the crease was accompanied by&hellip; not a grunt, exactly, because that implies unnatural physical strain, but an audible exhalation as streamlined as everything else about his bowling.</div>\r\n<p>&nbsp;</p>\r\n<div class=\"teads-adCall\">&nbsp;</div>\r\n<p><iframe width=\"1\" height=\"3\" frameborder=\"0\" sandbox=\"\"></iframe></p>\r\n<p class=\"ds-text-comfortable-m ds-my-4 ci-html-content\">&nbsp;</p>\r\n<div>We often watch cricket with our attention wandering in and out of the action until something happens that makes us close all our social-media tabs and sit up properly. Watching and hearing Mayank bowl was like that. When he greeted Jitesh Sharma with a first-ball bouncer that was too quick to get any bat on, something about the ball\'s path into the keeper\'s gloves may have reminded you, perhaps, of&nbsp;<a href=\"https://www.espncricinfo.com/cricketers/shoaib-akhtar-42655\">Shoaib Akhtar</a>. Not the action or the batter\'s reaction, but just the way the ball kept rising after it went past the stumps.</div>\r\n<p>&nbsp;</p>\r\n<div>\r\n<div class=\"ds-w-full ds-bg-fill-content-prime ds-overflow-hidden ds-rounded-xl ds-border ds-border-line ds-float-right ds-w-72 ds-ml-7 ds-my-6\">\r\n<div class=\"ds-flex ds-px-4 ds-border-b ds-border-line ds-py-3\">\r\n<div class=\"ds-flex ds-flex-col ds-grow ds-justify-center\"><span class=\"ds-text-title-xs ds-font-bold ds-text-typo\"><span class=\"ds-text-title-xs ds-font-bold ds-uppercase\">RELATED</span></span></div>\r\n</div>\r\n<div class=\"ds-p-4\">\r\n<ul class=\"ds-list-none\">\r\n<li class=\"ds-mb-4\"><a class=\"ds-flex ds-space-x-3 ds-items-center\" href=\"https://www.espncricinfo.com/series/indian-premier-league-2024-1410320/lucknow-super-giants-vs-punjab-kings-11th-match-1422129/match-report\"><img class=\"ds-rounded\" src=\"https://img1.hscicdn.com/image/upload/f_auto,t_ds_square_w_80/lsci/db/PICTURES/CMS/378500/378539.5.jpg\" alt=\"Story Image\" width=\"40\" height=\"40\">\r\n<p class=\"ds-text-tight-s ds-font-medium\">Captain Pooran, rookie Mayank dominate middle overs as LSG get off the mark</p>\r\n</a></li>\r\n<li class=\"\"><a class=\"ds-flex ds-space-x-3 ds-items-center\" href=\"https://www.espncricinfo.com/story/who-is-mayank-yadav-the-lsg-bowler-who-ripped-through-the-punjab-kings-batting-unit-1427137\"><img class=\"ds-rounded\" src=\"https://img1.hscicdn.com/image/upload/f_auto,t_ds_square_w_80/lsci/db/PICTURES/CMS/378500/378539.5.jpg\" alt=\"Story Image\" width=\"40\" height=\"40\">\r\n<p class=\"ds-text-tight-s ds-font-medium\">Mayank Yadav: I didn\'t think my debut would go that well</p>\r\n</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n<p class=\"ds-text-comfortable-m ds-my-4 ci-html-content\">&nbsp;</p>\r\n<div>By the end of the evening,&nbsp;<a href=\"https://www.espncricinfo.com/cricketers/varun-aaron-360911\">Varun Aaron</a>, a man who had had a similar effect on speedguns and audiences when he burst onto the national cricketing consciousness over a decade ago, was full of admirati</div>\r\n<p>&nbsp;</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deleteduser`
--
ALTER TABLE `deleteduser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deleteduser`
--
ALTER TABLE `deleteduser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
