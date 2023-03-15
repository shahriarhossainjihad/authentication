-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 07:24 PM
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
-- Database: `royal_cyber`
--

-- --------------------------------------------------------

--
-- Table structure for table `birth_certificate_info`
--

CREATE TABLE `birth_certificate_info` (
  `user_id` int(11) NOT NULL,
  `us_name` text NOT NULL,
  `ft_name` text NOT NULL,
  `mt_name` text NOT NULL,
  `union_or_ct` text NOT NULL,
  `ad_1` varchar(100) NOT NULL,
  `ad_2` varchar(100) NOT NULL,
  `ad_3` varchar(100) NOT NULL,
  `rgstr_book_no` int(5) NOT NULL,
  `rgstr_dt` varchar(50) NOT NULL,
  `card_rcv_dt` varchar(50) NOT NULL,
  `brth_rgstr_no` int(17) NOT NULL,
  `brth_dt` varchar(50) NOT NULL,
  `ordr_of_chldrn` int(2) NOT NULL,
  `brth_ad` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `prmnt_ad` varchar(255) NOT NULL,
  `ft_nid_no` int(20) NOT NULL,
  `ft_brth_rgstr_no` int(17) NOT NULL,
  `ft_nationality` text NOT NULL,
  `mt_nid_no` int(20) NOT NULL,
  `mt_brth_rgstr_no` int(17) NOT NULL,
  `mt_nationality` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `birth_certificate_info`
--

INSERT INTO `birth_certificate_info` (`user_id`, `us_name`, `ft_name`, `mt_name`, `union_or_ct`, `ad_1`, `ad_2`, `ad_3`, `rgstr_book_no`, `rgstr_dt`, `card_rcv_dt`, `brth_rgstr_no`, `brth_dt`, `ordr_of_chldrn`, `brth_ad`, `gender`, `prmnt_ad`, `ft_nid_no`, `ft_brth_rgstr_no`, `ft_nationality`, `mt_nid_no`, `mt_brth_rgstr_no`, `mt_nationality`) VALUES
(1, '', '', '', 'সিটি কর্পোরেশন', '', '', '', 0, '', '', 0, '0', 0, '', 'পুরুষ', '', 0, 0, 'বাংলাদেশী', 0, 0, 'বাংলাদেশী'),
(2, '', '', '', 'সিটি কর্পোরেশন', '', '', '', 0, '', '', 0, '0', 0, '', 'পুরুষ', '', 0, 0, 'বাংলাদেশী', 0, 0, 'বাংলাদেশী'),
(3, 'htrgf', 'hnh', 'ghgt', 'ইউনিয়ন', 'hg', 'hg', 'h', 0, '', '', 0, '0', 0, '', 'পুরুষ', '', 0, 0, 'বাংলাদেশী', 0, 0, 'বাংলাদেশী'),
(4, 'test name', 'dfv', 'gtf', 'ইউনিয়ন', 'g', 'b', 'hbg', 52, '03/01/2023', '03/08/2023', 3, '3', 0, 'cnb ', '৩য় লিঙ্গ', 'n bg n', 2002, 2051, 'বাংলাদেশী', 520, 20, 'বাংলাদেশী'),
(5, '', '', '', 'সিটি কর্পোরেশন', '', '', '', 0, '03/06/2023', '03/23/2023', 0, '3', 0, '', 'পুরুষ', '', 0, 0, 'বাংলাদেশী', 0, 0, 'বাংলাদেশী'),
(6, '', '', '', 'সিটি কর্পোরেশন', '', '', '', 0, '03/06/2023', '03/23/2023', 0, '03/04/2023', 0, '', 'পুরুষ', '', 0, 0, 'বাংলাদেশী', 0, 0, 'বাংলাদেশী'),
(7, '', '', '', 'সিটি কর্পোরেশন', '', '', '', 0, '03/06/2023', '03/23/2023', 0, '03/04/2023', 0, '', 'পুরুষ', '', 0, 0, 'বাংলাদেশী', 0, 0, 'বাংলাদেশী'),
(8, '', '', '', 'সিটি কর্পোরেশন', '', '', '', 0, '03/06/2023', '03/23/2023', 0, '03/04/2023', 0, '', 'পুরুষ', '', 0, 0, 'বাংলাদেশী', 0, 0, 'বাংলাদেশী'),
(9, 'hnj', 'ghn', 'gnh', 'ইউনিয়ন', '', '', '', 10, '03/21/2023', '03/10/2023', 20, '03/09/2023', 0, 'vfdv', 'মহিলা', 'ioglik', 1, 121, 'বাংলাদেশী', 21, 41, 'বাংলাদেশী'),
(10, 'jihad', 'shjed', 'nlknfd', 'ইউনিয়ন', 'hnudn', 'gtt', 'nhh', 20, '03/08/2023', '03/01/2023', 201, '03/10/2023', 0, '01', 'মহিলা', 'tgrfgtrf', 52041, 2041, 'বাংলাদেশী', 410, 7, 'বাংলাদেশী'),
(11, 'hngt', 'hjngt', 'hgth', 'ইউনিয়ন', 'jl', 'kju', 'jk', 20, '03/09/2023', '03/11/2023', 0, '03/04/2023', 0, '1', 'মহিলা', 'gbh', 410, 120, 'বাংলাদেশী', 12, 102, 'বাংলাদেশী'),
(12, 'hngt', 'hjngt', 'hgth', 'ইউনিয়ন', 'jl', 'kju', 'jk', 20, '03/09/2023', '03/11/2023', 0, '03/04/2023', 0, '1', 'মহিলা', 'gbh', 410, 120, 'বাংলাদেশী', 12, 102, 'বাংলাদেশী'),
(13, 'buyb', 'frfvg', 'fvgrgv', 'সিটি কর্পোরেশন', 'jhhyj', 'hjnyy', 'jyh', 1010, '03/10/2023', '03/16/2023', 41040, '02', 0, '10', 'পুরুষ', 'j9hn', 52, 201, 'বাংলাদেশী', 2, 20, 'বাংলাদেশী'),
(14, 'buyb', 'frfvg', 'fvgrgv', 'সিটি কর্পোরেশন', 'jhhyj', 'hjnyy', 'jyh', 1010, '03/10/2023', '03/16/2023', 41040, '02', 0, '10', 'পুরুষ', 'j9hn', 52, 201, 'বাংলাদেশী', 2, 20, 'বাংলাদেশী'),
(15, 'buyb', 'frfvg', 'fvgrgv', 'সিটি কর্পোরেশন', 'jhhyj', 'hjnyy', 'jyh', 1010, '03/10/2023', '03/16/2023', 41040, '02', 0, '10', 'পুরুষ', 'j9hn', 52, 201, 'বাংলাদেশী', 2, 20, 'বাংলাদেশী'),
(16, 'buyb', 'frfvg', 'fvgrgv', 'সিটি কর্পোরেশন', 'jhhyj', 'hjnyy', 'jyh', 1010, '03/10/2023', '03/16/2023', 41040, '02', 0, '10', 'পুরুষ', 'j9hn', 52, 201, 'বাংলাদেশী', 2, 20, 'বাংলাদেশী'),
(17, 'f', 'fvb ', 'dvfd', 'সিটি কর্পোরেশন', '', '', '', 518, '03/21/2023', '03/24/2023', 12, '03/08/2023', 0, 'gbh', 'মহিলা', 'frvgd', 10, 1021, 'vf', 21, 2147483647, ''),
(18, 'dfvd', 'fvg', 'rfvr', 'সিটি কর্পোরেশন', '', '', '', 20, '03/07/2023', '03/16/2023', 1, '03/22/2023', 0, '10rt', 'মহিলা', 'fvb hgggggggg', 541, 2147483647, 'বাংলাদেশী', 2147483647, 10, 'বাংলাদেশী'),
(19, 'dfvd', 'fvg', 'rfvr', 'সিটি কর্পোরেশন', '', '', '', 20, '03/07/2023', '03/16/2023', 1, '03/22/2023', 0, '10rt', 'মহিলা', 'fvb hgggggggg', 541, 2147483647, 'বাংলাদেশী', 2147483647, 10, 'বাংলাদেশী'),
(20, 'dfvd', 'fvg', 'rfvr', 'সিটি কর্পোরেশন', '', '', '', 20, '03/07/2023', '03/16/2023', 1, '03/22/2023', 0, '10rt', 'মহিলা', 'fvb hgggggggg', 541, 2147483647, 'বাংলাদেশী', 2147483647, 10, 'বাংলাদেশী');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` int(14) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `username`, `email`, `phone`, `password`) VALUES
(1, 'jiad', 'huihbn', 'gyyug@gmail.com', 1742735416, '123456'),
(2, 'f', 'fg', 'jihadshahriar@gmail.com', 1742735416, '2100'),
(3, 'jihad', 'shahriar', 'jihadshahriar@gmail.com', 1742735416, '0'),
(4, 'hiih', 'fd', 'gvf@gfhg.com', 1742735416, '0'),
(6, 'hiih', 'lll', 'gvf@gfhg.com', 1742735416, '0'),
(9, 'hiih', 'lllh', 'gvf@gfhg.com', 1742735416, '0'),
(10, 'jihad', 'kk', 'jihadshahriar@gmail.com', 1742735416, '$2y$10$LxJVZl.56ZzQO.4CoGvJDeMHVAiAkBYoPzNRptzBnAk'),
(11, 'Md. Shahriar Hossain Jihad', 'test1', 'jihadshahriar@gmail.com', 1742735416, '$2y$10$/HgHv/h.vWR/s5hsWS80sOuGB0ESDsFWQNqopCbqyxA'),
(12, 'test1', 'test', 'j@gmail.com', 1306891479, '$2y$10$NRZB/Wt/syT6bf69vr8mxOn79UzCq3Tx9YrLdpyfKCR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birth_certificate_info`
--
ALTER TABLE `birth_certificate_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birth_certificate_info`
--
ALTER TABLE `birth_certificate_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
