-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 02:58 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpdms`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(200) NOT NULL,
  `name` varchar(150) NOT NULL,
  `age` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `symptoms` varchar(100) NOT NULL,
  `comments` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `age`, `email`, `mobile`, `symptoms`, `comments`) VALUES
(1, 'Mainak Podder', '20', 'something@gmail.com', '123456789', 'Cold,Difficulty in Breath,Feeling Weak', 'Hello!'),
(2, 'Mainak Podder', '20', 'something@gmail.com', '123456789', 'Cold,Difficulty in Breath,Feeling Weak', 'Hello!'),
(3, 'Ayanava mondal', '23', 'ayanava@gmail.com', '56489532', 'Cold,Fever,Difficulty in Breath,Feeling Weak', 'Help me!'),
(4, 'Shuvradip Chakraborty', '20', 'shuvradip007@gmail.com', '8005688000', 'Cold', 'Contact Plese...'),
(6, 'pradipta saha', '18', 'xxx@gmail.com', '100', 'Cold,Fever', 'i am feeling weak');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(10) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `img1_back` varchar(150) NOT NULL,
  `title2` varchar(100) NOT NULL,
  `img2` varchar(150) NOT NULL,
  `q1` varchar(150) NOT NULL,
  `q1a` longtext NOT NULL,
  `q2` varchar(150) NOT NULL,
  `q2a` varchar(250) NOT NULL,
  `q3` varchar(150) NOT NULL,
  `q3a` varchar(250) NOT NULL,
  `img3` varchar(150) NOT NULL,
  `link1` varchar(200) NOT NULL,
  `img4_back` varchar(250) NOT NULL,
  `img5` varchar(150) NOT NULL,
  `sub_text1` varchar(200) NOT NULL,
  `sub_text2` blob NOT NULL,
  `sub_text3` varchar(200) NOT NULL,
  `link2` varchar(200) NOT NULL,
  `title3` varchar(200) NOT NULL,
  `img6_back` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title1`, `sub_title`, `img1_back`, `title2`, `img2`, `q1`, `q1a`, `q2`, `q2a`, `q3`, `q3a`, `img3`, `link1`, `img4_back`, `img5`, `sub_text1`, `sub_text2`, `sub_text3`, `link2`, `title3`, `img6_back`) VALUES
(1, 'Coronavirus disease 2022 (COVID-19)', 'Stay Home Stay Safe', 'home-bg.jpg', 'About COVID-19', 'about.png', 'What is novel Coronavirus?', 'It is the largest category for an RNA virus. In most cases, it is difficult to detect if coronavirus or a different cold-causing virus is causing you fever. Known as “COVID-19”, the newly identified coronavirus can cause pneumonia, and like other respiratory infections, it has an incubation of between 1 and 14 days.', 'What is long COVID?', 'Long COVID is used to describe signs and symptoms that last for longer than 4 weeks after getting COVID-19.', 'In what conditions does COVID-19 survive the longest?', 'Coronaviruses die very quickly when exposed to the UV light in sunlight. Like other enveloped viruses, SARS-CoV-2 survives longest when the temperature is at room temperature or lower, and when the relative humidity is low (<50%).', 'm', 'Learn More', 'o', 'p', 'Protect yourself from COVID-19', 0x537461792053616665202620466967687420546f676574686572, 'Against COVID-19', 'Learn More', 'How covid-19 spreads over the world', 'v');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `precaution`
--

CREATE TABLE `precaution` (
  `id` int(10) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `img1` varchar(250) NOT NULL,
  `pnt1_limg1` varchar(250) NOT NULL,
  `pnt1_title1` varchar(100) NOT NULL,
  `pnt1_desc1` varchar(250) NOT NULL,
  `pnt1_rimg2` varchar(250) NOT NULL,
  `pnt2_title2` varchar(100) NOT NULL,
  `pnt2_desc2` varchar(250) NOT NULL,
  `pnt2_rimg2` varchar(250) NOT NULL,
  `pnt3_limg4` varchar(250) NOT NULL,
  `pnt3_title3` varchar(100) NOT NULL,
  `pnt3_desc3` varchar(250) NOT NULL,
  `title2` varchar(100) NOT NULL,
  `sd` varchar(100) NOT NULL,
  `snd` varchar(100) NOT NULL,
  `sd_pnt1_title1` varchar(100) NOT NULL,
  `sd_pnt1_desc1` varchar(250) NOT NULL,
  `sd_pnt1_limg1` varchar(250) NOT NULL,
  `sd_pnt2_title2` varchar(100) NOT NULL,
  `sd_pnt2_desc2` varchar(250) NOT NULL,
  `sd_pnt2_rimg2` varchar(250) NOT NULL,
  `sd_pnt3_limg3` varchar(250) NOT NULL,
  `sd_pnt3_title3` varchar(100) NOT NULL,
  `sd_pnt3_desc3` varchar(250) NOT NULL,
  `snd_pnt1_limg1` varchar(250) NOT NULL,
  `snd_pnt1_title1` varchar(100) NOT NULL,
  `snd_pnt1_desc1` varchar(250) NOT NULL,
  `snd_pnt2_title2` varchar(100) NOT NULL,
  `snd_pnt2_desc2` varchar(250) NOT NULL,
  `snd_pnt3_rimg3` varchar(250) NOT NULL,
  `snd_pnt3_limg3` varchar(250) NOT NULL,
  `snd_pnt3_title3` varchar(100) NOT NULL,
  `snd_pnt3_desc3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prevent`
--

CREATE TABLE `prevent` (
  `id` int(10) NOT NULL,
  `subtitle1` varchar(100) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `desc1` varchar(233) NOT NULL,
  `tctitle` varchar(100) NOT NULL,
  `tcsubtitle` varchar(100) NOT NULL,
  `tcimg` varchar(250) NOT NULL,
  `lctitle` varchar(100) NOT NULL,
  `lcsubtitle` varchar(100) NOT NULL,
  `lcimg` varchar(250) NOT NULL,
  `rctitle` varchar(100) NOT NULL,
  `rcsubtitle` varchar(100) NOT NULL,
  `rcimg` varchar(250) NOT NULL,
  `bctitle` varchar(100) NOT NULL,
  `bcsubtitle` varchar(100) NOT NULL,
  `bcimg` varchar(250) NOT NULL,
  `title2` varchar(100) NOT NULL,
  `pnp1` varchar(100) NOT NULL,
  `pnp2` varchar(100) NOT NULL,
  `pnp3` varchar(100) NOT NULL,
  `pnp4` varchar(100) NOT NULL,
  `pnp5` varchar(100) NOT NULL,
  `pnp6` varchar(100) NOT NULL,
  `pnp7` varchar(100) NOT NULL,
  `dsc1` varchar(100) NOT NULL,
  `dsc2` varchar(100) NOT NULL,
  `dsc3` varchar(100) NOT NULL,
  `dsc4` varchar(100) NOT NULL,
  `dsc5` varchar(100) NOT NULL,
  `dsc6` varchar(100) NOT NULL,
  `dsc7` varchar(100) NOT NULL,
  `pnpimg` varchar(250) NOT NULL,
  `title3` varchar(100) NOT NULL,
  `subtitle2` varchar(100) NOT NULL,
  `whimg1` varchar(250) NOT NULL,
  `whimg2` varchar(250) NOT NULL,
  `whimg3` varchar(250) NOT NULL,
  `whimg4` varchar(250) NOT NULL,
  `whimg5` varchar(250) NOT NULL,
  `whimg6` varchar(250) NOT NULL,
  `whst1` varchar(100) NOT NULL,
  `whst2` varchar(100) NOT NULL,
  `whst3` varchar(100) NOT NULL,
  `whst4` varchar(100) NOT NULL,
  `whst5` varchar(100) NOT NULL,
  `whst6` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prevent`
--

INSERT INTO `prevent` (`id`, `subtitle1`, `title1`, `desc1`, `tctitle`, `tcsubtitle`, `tcimg`, `lctitle`, `lcsubtitle`, `lcimg`, `rctitle`, `rcsubtitle`, `rcimg`, `bctitle`, `bcsubtitle`, `bcimg`, `title2`, `pnp1`, `pnp2`, `pnp3`, `pnp4`, `pnp5`, `pnp6`, `pnp7`, `dsc1`, `dsc2`, `dsc3`, `dsc4`, `dsc5`, `dsc6`, `dsc7`, `pnpimg`, `title3`, `subtitle2`, `whimg1`, `whimg2`, `whimg3`, `whimg4`, `whimg5`, `whimg6`, `whst1`, `whst2`, `whst3`, `whst4`, `whst5`, `whst6`) VALUES
(1, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'w', 'x', 'y', 'z', 'aa', 'bb', 'cc', 'dd', 'ee', 'ff', 'gg', 'hh', 'ii', 'jj', 'kk', 'll', 'mm', 'nn', 'oo', 'pp', 'qq', 'rr', 'ss', 'tt', 'ww', 'vv');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `id` int(10) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `desc1` varchar(250) NOT NULL,
  `point1` varchar(100) NOT NULL,
  `point2` varchar(100) NOT NULL,
  `point3` varchar(100) NOT NULL,
  `point4` varchar(100) NOT NULL,
  `point5` varchar(100) NOT NULL,
  `img1` varchar(250) NOT NULL,
  `title2` varchar(100) NOT NULL,
  `img2` varchar(250) NOT NULL,
  `img3` varchar(250) NOT NULL,
  `title3` varchar(100) NOT NULL,
  `slimg1` varchar(250) NOT NULL,
  `sltitle1` varchar(100) NOT NULL,
  `slsubtitle1` varchar(100) NOT NULL,
  `sldesc1` varchar(100) NOT NULL,
  `slimg2` varchar(250) NOT NULL,
  `sltitle2` varchar(100) NOT NULL,
  `slsubtitle2` varchar(100) NOT NULL,
  `sldesc2` varchar(100) NOT NULL,
  `slimg3` varchar(250) NOT NULL,
  `sltitle3` varchar(100) NOT NULL,
  `slsubtitle3` varchar(100) NOT NULL,
  `sldesc3` varchar(100) NOT NULL,
  `title4` varchar(100) NOT NULL,
  `q1` varchar(100) NOT NULL,
  `qa1` varchar(150) NOT NULL,
  `q2` varchar(100) NOT NULL,
  `qa2` varchar(150) NOT NULL,
  `q3` varchar(100) NOT NULL,
  `qa3` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`id`, `title1`, `desc1`, `point1`, `point2`, `point3`, `point4`, `point5`, `img1`, `title2`, `img2`, `img3`, `title3`, `slimg1`, `sltitle1`, `slsubtitle1`, `sldesc1`, `slimg2`, `sltitle2`, `slsubtitle2`, `sldesc2`, `slimg3`, `sltitle3`, `slsubtitle3`, `sldesc3`, `title4`, `q1`, `qa1`, `q2`, `qa2`, `q3`, `qa3`) VALUES
(1, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'aa', 'bb', 'cc', 'dd', 'ee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `precaution`
--
ALTER TABLE `precaution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prevent`
--
ALTER TABLE `prevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `precaution`
--
ALTER TABLE `precaution`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prevent`
--
ALTER TABLE `prevent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
