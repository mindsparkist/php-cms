-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2021 at 03:02 PM
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
-- Table structure for table `centreandmap`
--

CREATE TABLE `centreandmap` (
  `id` int(10) NOT NULL,
  `title1_auto` varchar(250) NOT NULL,
  `cntr1_title1` varchar(250) NOT NULL,
  `cntr1_cvc1` varchar(250) NOT NULL,
  `cntr1_block1` varchar(250) NOT NULL,
  `cntr1_cvcname1` varchar(250) NOT NULL,
  `cntr1_cvct1` varchar(250) NOT NULL,
  `cntr1_vaccinet1` varchar(250) NOT NULL,
  `cntr1_desc1` varchar(250) NOT NULL,
  `cntr2_title2` varchar(250) NOT NULL,
  `cntr2_cvc2` varchar(250) NOT NULL,
  `cntr2_block2` varchar(250) NOT NULL,
  `cntr2_cvcname2` varchar(250) NOT NULL,
  `cntr2_cvct2` varchar(250) NOT NULL,
  `cntr2_vaccinet2` varchar(250) NOT NULL,
  `cntr2_desc2` varchar(250) NOT NULL,
  `cntr3_title3` varchar(250) NOT NULL,
  `cntr3_cvc3` varchar(250) NOT NULL,
  `cntr3_block3` varchar(250) NOT NULL,
  `cntr3_cvcname3` varchar(250) NOT NULL,
  `cntr3_cvct3` varchar(250) NOT NULL,
  `cntr3_vaccinet3` varchar(250) NOT NULL,
  `cntr3_desc3` varchar(250) NOT NULL,
  `cntr4_title4` varchar(250) NOT NULL,
  `cntr4_cvc4` varchar(250) NOT NULL,
  `cntr4_block4` varchar(250) NOT NULL,
  `cntr4_cvcname4` varchar(250) NOT NULL,
  `cntr4_cvct4` varchar(250) NOT NULL,
  `cntr4_vaccinet4` varchar(250) NOT NULL,
  `cntr4_desc4` varchar(250) NOT NULL,
  `cntr5_title5` varchar(250) NOT NULL,
  `cntr5_cvc5` varchar(250) NOT NULL,
  `cntr5_block5` varchar(250) NOT NULL,
  `cntr5_cvcname5` varchar(250) NOT NULL,
  `cntr5_cvct5` varchar(250) NOT NULL,
  `cntr5_vaccinet5` varchar(250) NOT NULL,
  `cntr5_desc5` varchar(250) NOT NULL,
  `cntr6_title6` varchar(250) NOT NULL,
  `cntr6_cvc6` varchar(250) NOT NULL,
  `cntr6_block6` varchar(250) NOT NULL,
  `cntr6_cvcname6` varchar(250) NOT NULL,
  `cntr6_cvct6` varchar(250) NOT NULL,
  `cntr6_vaccinet6` varchar(250) NOT NULL,
  `cntr6_desc6` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `centreandmap`
--

INSERT INTO `centreandmap` (`id`, `title1_auto`, `cntr1_title1`, `cntr1_cvc1`, `cntr1_block1`, `cntr1_cvcname1`, `cntr1_cvct1`, `cntr1_vaccinet1`, `cntr1_desc1`, `cntr2_title2`, `cntr2_cvc2`, `cntr2_block2`, `cntr2_cvcname2`, `cntr2_cvct2`, `cntr2_vaccinet2`, `cntr2_desc2`, `cntr3_title3`, `cntr3_cvc3`, `cntr3_block3`, `cntr3_cvcname3`, `cntr3_cvct3`, `cntr3_vaccinet3`, `cntr3_desc3`, `cntr4_title4`, `cntr4_cvc4`, `cntr4_block4`, `cntr4_cvcname4`, `cntr4_cvct4`, `cntr4_vaccinet4`, `cntr4_desc4`, `cntr5_title5`, `cntr5_cvc5`, `cntr5_block5`, `cntr5_cvcname5`, `cntr5_cvct5`, `cntr5_vaccinet5`, `cntr5_desc5`, `cntr6_title6`, `cntr6_cvc6`, `cntr6_block6`, `cntr6_cvcname6`, `cntr6_cvct6`, `cntr6_vaccinet6`, `cntr6_desc6`) VALUES
(1, 'We provide all necessary information about Centre And Map Details', 'Monindranagar Gram Ponchayat', '9434190037', 'Monindranagar', 'Monindranagar Gram Ponchayat', 'Online/Offline', 'Covishield', 'In Monindranagar Gram Ponchayat We Have Comfortable Ventilation Experienced Staff With Offline/Online Application Process It Gives Covishield And Its Active As Of Now The Documents We Need Are Aadhaar Card/Voter Card/Pan Card, Mobile Number', 'Monmohini Nursing Home', '9732795000', 'Berhampore', 'Monmohini Nursing Home', 'Online/Offline', 'Covishield', 'In Monmohini Nursing Home We Have Comfortable Ventilation Experienced Staff With Offline/Online Application Process It Gives Covishield And Its Active As Of Now The Documents We Need Are Aadhaar Card/Voter Card/Pan Card, Mobile Number', 'Gitaram Hospital', '9933344441', 'Berhampore', 'Gitaram Hospital', 'Online/Offline', 'Covaxin,Covishield', 'In Gitaram Hospital We Have Comfortable Ventilation Experienced Staff With Offline/Online Application Process It Gives Covaxin Or Covishield And Its Active As Of Now The Documents We Need Are Aadhaar Card/Voter Card/Pan Card, Mobile Number', 'Bhakuri-1 Gram Panchayat', '8250195482', 'Berhampore', 'Bhakuri-1 Gram Panchayat', 'Online/Offline', 'Covishield', ' In Bhakuri-1 Gram Panchayat We Have Comfortable Ventilation Experienced Staff With Offline/Online Application Process It Gives Covishield And Its Active As Of Now The Documents We Need Are Aadhaar Card/Voter Card/Pan Card, Mobile Number', 'Bablabon Hospital', '9434190037', ' Nadia', ' Bablabon Hospital', 'Online/Offline', 'Covishield', ' In Bablabon Hospital We Have Comfortable Ventilation Experienced Staff With Offline/Online Application Process It Gives Covishield And Its Active As Of Now The Documents We Need Are Aadhaar Card/Voter Card/Pan Card, Mobile Number', 'Mother & Child Hub (District Hospital, Nadia)', '943414564564', 'Nadia', 'Mother & Child Hub (District Hospital, Nadia)', 'Online/Offline', 'Covishield', ' In Mother & Child Hub (District Hospital, Nadia) We Have Comfortable Ventilation Experienced Staff With Offline/Online Application Process It Gives Covishield And Its Active As Of Now The Documents We Need Are Aadhaar Card/Voter Card/Pan Card, Mobil');

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
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) NOT NULL,
  `img_back1` varchar(250) NOT NULL,
  `img1` varchar(250) NOT NULL,
  `subtitle1` varchar(250) NOT NULL,
  `service_title1` varchar(250) NOT NULL,
  `service_subtitle1` varchar(250) NOT NULL,
  `service_title2` varchar(250) NOT NULL,
  `service_subtitle2` varchar(250) NOT NULL,
  `service_title3` varchar(250) NOT NULL,
  `service_subtitle3` varchar(250) NOT NULL,
  `img2` varchar(250) NOT NULL,
  `gallary_img1` varchar(250) NOT NULL,
  `gallary_img2` varchar(250) NOT NULL,
  `gallary_img3` varchar(250) NOT NULL,
  `gallary_img4` varchar(250) NOT NULL,
  `gallary_img5` varchar(250) NOT NULL,
  `gallary_img6` varchar(250) NOT NULL,
  `img_back2` varchar(250) NOT NULL,
  `expt_img1` varchar(250) NOT NULL,
  `expt_name1` varchar(250) NOT NULL,
  `expt_qul1` varchar(250) NOT NULL,
  `expt_add1` varchar(250) NOT NULL,
  `expt_img2` varchar(250) NOT NULL,
  `expt_name2` varchar(250) NOT NULL,
  `expt_qul2` varchar(250) NOT NULL,
  `expt_add2` varchar(250) NOT NULL,
  `expt_img3` varchar(250) NOT NULL,
  `expt_name3` varchar(250) NOT NULL,
  `expt_qul3` varchar(250) NOT NULL,
  `expt_add3` varchar(250) NOT NULL,
  `expt_img4` varchar(250) NOT NULL,
  `expt_name4` varchar(250) NOT NULL,
  `expt_qul4` varchar(250) NOT NULL,
  `expt_add4` varchar(250) NOT NULL,
  `expt_img5` varchar(250) NOT NULL,
  `expt_name5` varchar(250) NOT NULL,
  `expt_qul5` varchar(250) NOT NULL,
  `expt_add5` varchar(250) NOT NULL,
  `expt_img6` varchar(250) NOT NULL,
  `expt_name6` varchar(250) NOT NULL,
  `expt_qul6` varchar(250) NOT NULL,
  `expt_add6` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `img_back1`, `img1`, `subtitle1`, `service_title1`, `service_subtitle1`, `service_title2`, `service_subtitle2`, `service_title3`, `service_subtitle3`, `img2`, `gallary_img1`, `gallary_img2`, `gallary_img3`, `gallary_img4`, `gallary_img5`, `gallary_img6`, `img_back2`, `expt_img1`, `expt_name1`, `expt_qul1`, `expt_add1`, `expt_img2`, `expt_name2`, `expt_qul2`, `expt_add2`, `expt_img3`, `expt_name3`, `expt_qul3`, `expt_add3`, `expt_img4`, `expt_name4`, `expt_qul4`, `expt_add4`, `expt_img5`, `expt_name5`, `expt_qul5`, `expt_add5`, `expt_img6`, `expt_name6`, `expt_qul6`, `expt_add6`) VALUES
(1, '', '', 'Caring For Your Life', 'Ambulence Services', 'Lorem Ipsum Dolor, Sit Amet Consectetur Adipisicing Elit. Officiis Ratione Nam Corporis Facere.', 'Emergency Rooms', 'Lorem Ipsum Dolor, Sit Amet Consectetur Adipisicing Elit. Officiis Ratione Nam Corporis Facere.', 'Free Check-Ups', 'Lorem Ipsum Dolor, Sit Amet Consectetur Adipisicing Elit. Officiis Ratione Nam Corporis Facere.', '', '', '', '', '', '', '', '', '', 'Dr. Debabrata Sarkar', 'General Physician, Special Interest In Diabetology', '91/1 A Pilkhana Road Ranibagan, Landmark: Near Royal Hotel, Murshidabad', '', 'Dr. Sankar Nath Jha', 'Post Graduate Diploma In Endocrinology Endocrinologist, Special Interest In Diabetology', '91/1 A Pilkhana Road Ranibagan, Landmark: Near Royal Hotel, Murshidabad', '', 'Dr. Kalyan Mitra', 'MD - General Medicine, MBBS, MRCP (UK) Consultant Physician, Internal Medicine 17 Years Experience Overall (13 Years As Specialist', 'Pilkhana Road., Landmark: Opposite Durga Mandir Taxi Stand., Murshidabad', '', 'Dr. Manish Sahu', 'MBBS, MD - Tuberculosis & Respiratory Diseases / Pulmonary Medicine General Physician, Pulmonologist 10 Years Experience Overall (5 Years As Specialist', 'D-214, Behind SBI , Near Mothers Pride, Landmark: Near Mothers Pride, Noida', '', 'Dr. Ranjan Kumar', 'General Physician 11 Years Experience Overall', 'Antriksh Golf View-1 Society.Tower L.Flat No.L-303., Landmark: Near 101 Metro Station, Noida', '', 'Dr. Amit Agrawal', 'MBBS, MD - Physician General Physician, General Practitioner 17 Years Experience Overall', 'Antriksh Golf View-1 Society.Tower L.Flat No.L-303., Landmark: Near 101 Metro Station,Noida`');

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
(1, 'Coronavirus disease 2019 (COVID-19)', 'Stay Home Stay Safe', 'admin/upload/home-bg.jpg', 'About COVID-19', 'about.png', 'What is novel Coronavirus?', 'It is the largest category for an RNA virus. In most cases, it is difficult to detect if coronavirus or a different cold-causing virus is causing you fever. Known as “COVID-19”, the newly identified coronavirus can cause pneumonia, and like other respiratory infections, it has an incubation of between 1 and 14 days.', 'What is long COVID?', 'Long COVID is used to describe signs and symptoms that last for longer than 4 weeks after getting COVID-19.', 'In what conditions does COVID-19 survive the longest?', 'Coronaviruses die very quickly when exposed to the UV light in sunlight. Like other enveloped viruses, SARS-CoV-2 survives longest when the temperature is at room temperature or lower, and when the relative humidity is low (<50%).', 'm', 'Learn More', 'o', 'p', 'Protect yourself from COVID-19', 0x496e6469612057696c6c20466967687420546f676574686572, 'Against COVID-19', 'Learn More', 'How covid-19 spreads over the world', 'v');

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
  `title1` varchar(250) NOT NULL,
  `img1` varchar(250) NOT NULL,
  `pnt1_limg1` varchar(250) NOT NULL,
  `pnt1_title1` varchar(250) NOT NULL,
  `pnt1_desc1` varchar(250) NOT NULL,
  `pnt1_rimg1` varchar(250) NOT NULL,
  `pnt2_title2` varchar(250) NOT NULL,
  `pnt2_desc2` varchar(250) NOT NULL,
  `pnt2_rimg2` varchar(250) NOT NULL,
  `pnt3_limg3` varchar(250) NOT NULL,
  `pnt3_title3` varchar(250) NOT NULL,
  `pnt3_desc3` varchar(250) NOT NULL,
  `title2` varchar(250) NOT NULL,
  `sd` varchar(250) NOT NULL,
  `snd` varchar(250) NOT NULL,
  `sd_pnt1_title1` varchar(250) NOT NULL,
  `sd_pnt1_desc1` varchar(250) NOT NULL,
  `sd_pnt1_limg1` varchar(250) NOT NULL,
  `sd_pnt2_title2` varchar(250) NOT NULL,
  `sd_pnt2_desc2` varchar(250) NOT NULL,
  `sd_pnt2_rimg2` varchar(250) NOT NULL,
  `sd_pnt3_limg3` varchar(250) NOT NULL,
  `sd_pnt3_title3` varchar(250) NOT NULL,
  `sd_pnt3_desc3` varchar(250) NOT NULL,
  `snd_pnt1_limg1` varchar(250) NOT NULL,
  `snd_pnt1_title1` varchar(250) NOT NULL,
  `snd_pnt1_desc1` varchar(250) NOT NULL,
  `snd_pnt2_title2` varchar(250) NOT NULL,
  `snd_pnt2_desc2` varchar(250) NOT NULL,
  `snd_pnt3_rimg3` varchar(250) NOT NULL,
  `snd_pnt3_limg3` varchar(250) NOT NULL,
  `snd_pnt3_title3` varchar(250) NOT NULL,
  `snd_pnt3_desc3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `precaution`
--

INSERT INTO `precaution` (`id`, `title1`, `img1`, `pnt1_limg1`, `pnt1_title1`, `pnt1_desc1`, `pnt1_rimg1`, `pnt2_title2`, `pnt2_desc2`, `pnt2_rimg2`, `pnt3_limg3`, `pnt3_title3`, `pnt3_desc3`, `title2`, `sd`, `snd`, `sd_pnt1_title1`, `sd_pnt1_desc1`, `sd_pnt1_limg1`, `sd_pnt2_title2`, `sd_pnt2_desc2`, `sd_pnt2_rimg2`, `sd_pnt3_limg3`, `sd_pnt3_title3`, `sd_pnt3_desc3`, `snd_pnt1_limg1`, `snd_pnt1_title1`, `snd_pnt1_desc1`, `snd_pnt2_title2`, `snd_pnt2_desc2`, `snd_pnt3_rimg3`, `snd_pnt3_limg3`, `snd_pnt3_title3`, `snd_pnt3_desc3`) VALUES
(1, 'TAKE PRECAUTIONS AGAINST COVID-19', '', '', 'Get Vaccinated', 'Authorized COVID-19 Vaccines Can Help Protect You From COVID-19. You Should Get A COVID-19 Vaccine As Soon As You Can. Once You Are Fully Vaccinated, You May Be Able To Start Doing Some Things That You Had Stopped Doing Because Of The Pandemic.', '', 'Wear A Mask', 'Authorized COVID-19 Vaccines Can Help Protect You From COVID-19. You Should Get A COVID-19 Vaccine As Soon As You Can. Once You Are Fully Vaccinated, You May Be Able To Start Doing Some Things That You Had Stopped Doing Because Of The Pandemic.', '', '', 'Cover Coughs And Sneezes', 'You Can cough Or Sneeze Into Your Mask. Put On A New, Clean Mask As Soon As Possible And Wash Your Hands.Always Cover Your Mouth And Nose With A Tissue When You Cough Or Sneeze, Or Use The Inside Of Your Elbow And Do Not Spit.', 'TAKE PRECAUTIONS AGAINST COVID 19', 'Things You Should DO', 'Things You Should Not DO', 'Wash Your Hand', 'Wash Your Hands Often With Soap And Water For At Least 20 Seconds Especially After You Have Been In A Public Place, Or After Blowing Your Nose, Coughing, Or Sneezing.\r\n\r\n', '', 'Always Wear A Mask', 'If you are not fully vaccinated and aged 2 or older, you should wear a mask in indoor public places. Wearing a mask over your nose and mouth is required on planes, buses, trains, and other forms of public transportation.', '', '', 'Monitor Your Health Daily', 'Be Alert For Symptoms. Watch For Fever, Cough, Shortness Of Breath, Or Other Symptoms Of COVID-19.', '', 'Avoid Crowded Places', 'Public Transport, Metros, Gyms And Any Other Crowded Place Should Be Avoided. The More The Number Of People, The More Likely Of The Spread Of The Virus. If You Have Symptoms, Self-Quarantine Yourself Other Than To Visit The Doctor.', 'Avoid Close Contact With People', 'Avoid Close Contact With People Who Are Sick. If Possible, Maintain 6 Feet Between The Person Who Is Sick And Other Household Members.', '', '', 'Do Not Travel Unless Necessary', 'The Airports And Airplanes Are Where You Are Most Likely To Catch An Infection. It Is Advisable Not To Travel Unless Absolutely Necessary.');

-- --------------------------------------------------------

--
-- Table structure for table `prevent`
--

CREATE TABLE `prevent` (
  `id` int(10) NOT NULL,
  `subtitle1` varchar(100) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `desc1` longtext NOT NULL,
  `tctitle` longtext NOT NULL,
  `tcsubtitle` varchar(250) NOT NULL,
  `tcimg` varchar(250) NOT NULL,
  `lctitle` varchar(100) NOT NULL,
  `lcsubtitle` varchar(100) NOT NULL,
  `lcimg` varchar(250) NOT NULL,
  `rctitle` varchar(250) NOT NULL,
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
  `dsc2` varchar(200) NOT NULL,
  `dsc3` varchar(200) NOT NULL,
  `dsc4` varchar(200) NOT NULL,
  `dsc5` varchar(150) NOT NULL,
  `dsc6` varchar(100) NOT NULL,
  `dsc7` varchar(200) NOT NULL,
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
(1, 'HOW TO PROTECT YOURSELF?', 'PREVENTION AND ADVICE', 'There Is Currently No Vaccine To Prevent Coronavirus Disease 2019 (COVID-19). The Best Way To Prevent Illness Is To Avoid Being Exposed To This Virus. Stay Aware Of The Latest Information On The COVID-19 Outbreak, Available On The WHO Website And Through Your National And Local Public Health Authority.', 'Maintain Social Distancing', 'Maintain At Least 1 Meter (3 Feet) Distance Between Yourself & Anyone Who Is Coughing Or Sneezing', '', 'Wash Your Hands Frequently', 'Regularly And Thoroughly Clean Your Hands With An Alcohol-Based Hand Rub', '', 'Avoid Touching Face', 'Hands Touch Many Surfaces And Can Pick Up Viruses. So, Hands Can Transfer The Virus To Your Eyes', '', 'Practice Respiratory Hygiene', 'Maintain Good Respiratory Hygiene As Covering Your Mouth & Nose With Your Bent Elbow Or Tissue When', '', 'Take Steps To Protect Others', 'Stay Home If You’re Sick', 'Cover Your Mouth And Nose', 'Wear A Facemask If You Are Sick', 'Clean AND Disinfect Frequently Touched Surfaces Daily', 'Clean The Dirty Surfaces ', 'Stay Informed About The Local COVID-19 Situation', 'Dedicated, Lined Trash Can', '– Stay Home If You Are Sick, Except To Get Medical Care.', '– With A Tissue When You Cough Or Sneeze (Throw Used Tissues In The Trash) Or Use The Inside Of Your Elbow.', '– You Should Wear A Facemask When You Are Around Other People (E.G., Sharing A Room Or Vehicle) And Before You Enter A Healthcare Provider’s.', '– This Includes Phones, Tables, Light Switches, Doorknobs, Countertops, Handles, Desks, Toilets, Faucets, And Sinks.', '– Use Detergent Or Soap And Water Prior To Disinfection.', '– Get Up-To-Date Information About Local COVID-19 Activity From Public Health Officials.', '– If Possible, Dedicate A Lined Trash Can For The Ill Person. Use Gloves When Removing Garbage Bags, And Handling & Disposing Of Trash.', '', 'Follow Steps To Wash Hands', 'Why Do I Need Wash Hand', '', '', '', '', '', '', 'Soap On Hand', 'Palm To Palm', 'Between Fingers', 'Back To Hands', 'Clean With Water', 'Focus On Wrist');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `id` int(10) NOT NULL,
  `title1` varchar(250) NOT NULL,
  `desc1` varchar(250) NOT NULL,
  `point1` varchar(250) NOT NULL,
  `point2` varchar(250) NOT NULL,
  `point3` varchar(250) NOT NULL,
  `point4` varchar(250) NOT NULL,
  `point5` varchar(250) NOT NULL,
  `img1` varchar(250) NOT NULL,
  `title2` varchar(250) NOT NULL,
  `img2` varchar(250) NOT NULL,
  `img3` varchar(250) NOT NULL,
  `title3` varchar(250) NOT NULL,
  `slimg1` varchar(250) NOT NULL,
  `sltitle1` varchar(250) NOT NULL,
  `slsubtitle1` varchar(250) NOT NULL,
  `sldesc1` varchar(250) NOT NULL,
  `slimg2` varchar(250) NOT NULL,
  `sltitle2` varchar(250) NOT NULL,
  `slsubtitle2` varchar(250) NOT NULL,
  `sldesc2` varchar(250) NOT NULL,
  `slimg3` varchar(250) NOT NULL,
  `sltitle3` varchar(250) NOT NULL,
  `slsubtitle3` varchar(250) NOT NULL,
  `sldesc3` varchar(250) NOT NULL,
  `title4` varchar(250) NOT NULL,
  `q1` varchar(250) NOT NULL,
  `qa1` varchar(250) NOT NULL,
  `q2` varchar(250) NOT NULL,
  `qa2` varchar(250) NOT NULL,
  `q3` varchar(250) NOT NULL,
  `qa3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`id`, `title1`, `desc1`, `point1`, `point2`, `point3`, `point4`, `point5`, `img1`, `title2`, `img2`, `img3`, `title3`, `slimg1`, `sltitle1`, `slsubtitle1`, `sldesc1`, `slimg2`, `sltitle2`, `slsubtitle2`, `sldesc2`, `slimg3`, `sltitle3`, `slsubtitle3`, `sldesc3`, `title4`, `q1`, `qa1`, `q2`, `qa2`, `q3`, `qa3`) VALUES
(1, 'COVID-19 AFFECTS DIFFERENT PEOPLE IN DIFFERENT WAYS', 'Coronavirus Disease (COVID-19) Is An Infectious Disease Caused By The SARS-CoV-2 Virus. Most People Who Fall Sick With COVID-19 Will Experience Mild To Moderate Symptoms And Recover Without Special Treatment. However, Some Will Become Seriously Ill A', 'Fever Is A Possible Symptom Of COVID-19.', 'Dry Cough A Symptom Of COVID-19.', 'Tiredness/Fatigue Is A Symptom Of Covid-19.', 'People With COVID-19 Lose Their Sensitivity To Smells.', 'Sore Throat OR Congestion Or Runny Nose OR Nausea Or Vomiting OR Diarrhea.``````', '', 'LEAST COMMON SYMPTOMS', '', '', 'SERIOUS SYMPTOMS', '', 'Breathing difficulties', 'lung damage', 'Covid could trigger a spike in dementia cases, say Alzheimer’s experts And It could lead to some temporary loss which is very problematic.', '', 'Spike In Dementia', 'Covid Tirgger', 'Covid could trigger a spike in dementia cases, say Alzheimer’s experts And It could lead to some temporary loss which is very problematic.', '', 'Heart Problems', 'After COVID-19', 'COVID-19, the disease caused by the SARS-CoV-2 coronavirus, can damage heart muscle and affect heart function There are several reasons for this.', 'COMMON QUESTIONS', 'What are signs and symptoms of the coronavirus disease?', 'Signs and symptoms include respiratory symptoms and include fever, cough and shortness of breath. In more severe cases, infection can cause pneumonia, severe acute respiratory syndrome and sometimes death.', 'What are the primary symptoms of COVID-19?', 'Some of the primary symptoms to look for in a Covid 19 infected person are fever, dizziness, breathlessness, headache, dry cough ( eventually result in phlegm) and in a few cases loss in smell and taste.', 'How long do COVID-19 antibodies last?', 'In a new study, which appears in the journal Nature Communications, researchers report that SARS-CoV-2 antibodies remain stable for at least 7 months following infection.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `centreandmap`
--
ALTER TABLE `centreandmap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
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
-- AUTO_INCREMENT for table `centreandmap`
--
ALTER TABLE `centreandmap`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `precaution`
--
ALTER TABLE `precaution`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
