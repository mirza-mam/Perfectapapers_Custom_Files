-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 23, 2022 at 03:29 PM
-- Server version: 10.5.16-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perfect2_custom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `available_leads`
--

CREATE TABLE `available_leads` (
  `id` int(11) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `doc_type` varchar(90) NOT NULL,
  `academic_lvl` varchar(23) NOT NULL,
  `no_of_pages` int(5) NOT NULL,
  `deadline_time` time NOT NULL,
  `deadline_date` date NOT NULL,
  `user_contact_code` varchar(5) NOT NULL,
  `user_contact` int(12) NOT NULL,
  `order_placing_date` date NOT NULL,
  `order_placing_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `available_leads`
--

INSERT INTO `available_leads` (`id`, `user_email`, `doc_type`, `academic_lvl`, `no_of_pages`, `deadline_time`, `deadline_date`, `user_contact_code`, `user_contact`, `order_placing_date`, `order_placing_time`) VALUES
(44, 'shah@gmail.com', 'Annotated Bibliography', 'college-undergraduate', 1, '00:00:12', '2021-03-31', '+1', 1115550000, '2021-03-21', '03:13:52'),
(45, 'techodoo313@gmail.com', 'Admission Essay', 'High school', 1, '00:00:12', '2022-03-17', '+1', 1111111111, '2022-03-16', '19:32:29');

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `u_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `doc_type` varchar(90) NOT NULL,
  `academic_lvl` varchar(23) NOT NULL,
  `no_of_pages` int(5) NOT NULL,
  `order_placing_date` date NOT NULL,
  `order_placing_time` time(6) NOT NULL,
  `deadline_time` time(6) NOT NULL,
  `deadline_date` date NOT NULL,
  `order_price` float NOT NULL,
  `title` varchar(90) NOT NULL,
  `subject` varchar(60) NOT NULL,
  `citation_style` varchar(7) NOT NULL,
  `no_of_sources` int(3) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `attach_file` varchar(50) NOT NULL,
  `order_status` varchar(10) NOT NULL COMMENT 'InProgress,Completed,Revisions',
  `payment_status` varchar(9) NOT NULL COMMENT 'Paid,Processed '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`u_id`, `order_id`, `doc_type`, `academic_lvl`, `no_of_pages`, `order_placing_date`, `order_placing_time`, `deadline_time`, `deadline_date`, `order_price`, `title`, `subject`, `citation_style`, `no_of_sources`, `description`, `attach_file`, `order_status`, `payment_status`) VALUES
(31, 89, 'Admission Essay', 'college-undergraduate', 18, '2021-03-21', '02:20:06.000000', '00:00:12.000000', '2021-04-07', 135, 'Management Sciences', 'Reflective Thinking', 'AMA', 0, 'nothing bla bla bla', 'Empty For Now', 'Completed', 'Processed'),
(31, 92, 'Admission Essay', 'college-undergraduate', 18, '2021-03-21', '02:20:06.000000', '00:00:12.000000', '2021-04-07', 135, 'Management Sciences', 'Reflective Thinking', 'AMA', 0, 'nothing bla bla bla', 'Empty For Now', 'InProgress', 'Processed');

-- --------------------------------------------------------

--
-- Table structure for table `temp_order_tbl`
--

CREATE TABLE `temp_order_tbl` (
  `u_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `doc_type` varchar(90) NOT NULL,
  `academic_lvl` varchar(23) NOT NULL,
  `no_of_pages` int(11) NOT NULL,
  `order_placing_date` date NOT NULL,
  `order_placing_time` time(6) NOT NULL,
  `deadline_time` time(6) NOT NULL,
  `deadline_date` date NOT NULL,
  `order_price` float NOT NULL,
  `title` varchar(90) NOT NULL,
  `subject` varchar(60) NOT NULL,
  `citation_style` varchar(7) NOT NULL,
  `no_of_sources` int(3) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `attach_file` varchar(50) NOT NULL,
  `order_status` varchar(20) NOT NULL COMMENT 'Pending(This tbl can only contain Pending Orders)',
  `payment_status` varchar(6) NOT NULL COMMENT 'UnPaid(This tbl can only contain UnPaid Orders)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_order_tbl`
--

INSERT INTO `temp_order_tbl` (`u_id`, `order_id`, `doc_type`, `academic_lvl`, `no_of_pages`, `order_placing_date`, `order_placing_time`, `deadline_time`, `deadline_date`, `order_price`, `title`, `subject`, `citation_style`, `no_of_sources`, `description`, `attach_file`, `order_status`, `payment_status`) VALUES
(31, 62, 'Analytical Essay', 'Doctoral', 1, '2021-03-21', '05:34:31.000000', '00:00:12.000000', '2021-03-26', 11.75, 'Plant Sciences', 'Biology and Life Sciences', 'AMA', 1, 'Doctoral Lvl assignment bro...', 'Empty For Now', 'Pending', 'UnPaid'),
(31, 63, 'Analytical Essay', 'Doctoral', 1, '2021-03-21', '05:35:10.000000', '00:00:12.000000', '2021-03-26', 11.75, 'Plant Sciences', 'Biology and Life Sciences', 'AMA', 1, 'Doctoral Lvl assignment bro...', 'Empty For Now', 'Pending', 'UnPaid');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_password` varchar(105) NOT NULL,
  `user_contact` varchar(40) NOT NULL,
  `role_id` int(11) NOT NULL COMMENT '0:User, 1:Employee, 2:Admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`user_id`, `user_name`, `user_email`, `user_password`, `user_contact`, `role_id`) VALUES
(31, 'Shah G', 'shah@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$aG9BbFB2WHZjanpEay4zYQ$4VW+sypnd3YxhAMq/JUkab3VV456abM2aY9Zwi3Zts4', '298w792879', 0),
(62, 'Empolyee 1', 'templateEmp@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$ZUNxeklXR0NHSE55bk5Tbg$oP9B715TVwsuwrs3d5Z3KFZzWtcuTDtEmFwRIvjkB3o', '0000000000', 1),
(63, 'Admin 1', 'templateAdmin@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$aXFkc0Q0d05EVXhRamNEMw$6RQa0m3KzlI+Y4Nl40b/CCKynMprRJSWFwwxOruCAK0', '2222222222', 2),
(164, 'nam3813577688', 'kondr.aleksey_1994@yahoo.com', '$argon2i$v=19$m=65536,t=4,p=1$M3RhR21kVXdOOHBvU3g5bw$mDyFtu27ZPDBsUIh4kvp0U2koWkD7SsbgOBZEjsNNS4', 'nam3813577688', 0),
(165, 'tonyconte5', 'tony-conte8@usalife365.xyz', '$argon2i$v=19$m=65536,t=4,p=1$VVMzempHMGFISTE0ZUpkcw$g5lSwCGeAVndDHSxL2qXNJxFtZf1UusCDq5DGJvQ65g', 'tonyconte5', 0),
(166, 'oliviahendon3', 'olivia_hendon36@usalife365.xyz', '$argon2i$v=19$m=65536,t=4,p=1$U1B3OTZDc1k4RUVDSUFJRg$qTl86reEczpqI2b7B8L5xPx9sKWjpxu/98bq3ST0SN0', 'oliviahendon3', 0),
(167, 'trentfreund1', 'trent_freund11@usalife365.xyz', '$argon2i$v=19$m=65536,t=4,p=1$YnVXVDRhUkFTbjlnd0xtTQ$EFIMvnElM/2mqZt8m+t/Fj+LdZ45ywiVpdNh9H0qH1c', 'trentfreund1', 0),
(168, 'hassantrevino', 'hassan_trevino42@usalife365.xyz', '$argon2i$v=19$m=65536,t=4,p=1$c3Z4aE83VEVYREVabDEvWQ$/KWGqbrap8wbEnaYa88sIVL2tA7l8EyR4IPGVu6Atok', 'hassantrevino', 0),
(169, 'berndstruthers7', 'bernd.struthers@usalife365.xyz', '$argon2i$v=19$m=65536,t=4,p=1$LmFidm9ESVF1V1YwTEtmMQ$0/glALuGEULkDGBGsL4C3yRCrVzgO2Um28Z49KWXWN8', 'berndstruthers7', 0),
(170, 'hildegardmackinn', 'hildegard-mackinnon@usalife365.xyz', '$argon2i$v=19$m=65536,t=4,p=1$U2VNWHF5V0lzY1llekpBbw$HPg8G3IxcqtGlik0mtPWmNibSHhJF2D3V3s/RMxT/PU', 'hildegardmackinn', 0),
(171, 'godzjoycec', 'pawnshops@pharmacy20mg.com', '$argon2i$v=19$m=65536,t=4,p=1$MG9uZFlJVE9pZmdiblllNA$4RiJwbbbGTm1+X1TJ9MYcJy1q/1c+gs1lgjih3qcAvw', 'godzjoycec', 0),
(172, 'Azertdet', 'zbijjmrp@vdnh.online', '$argon2i$v=19$m=65536,t=4,p=1$NWZENWptbndqRXRqamRzbw$Ai7dYpFp8KTf6x17xnRVwIVJposF5J9bO/p/Mhl3zFU', '', 0),
(173, 'godzbarbav', 'inspirerende@pharmacy20mg.com', '$argon2i$v=19$m=65536,t=4,p=1$aEZQUTlibXVySVFua3JMdg$YulacNkmD7yON4zQqALo6rTDSTDLMavcOffAK6yR1sA', 'godzbarbav', 0),
(174, 'godzdyanpo', 'reykjavik@pharmacy20mg.com', '$argon2i$v=19$m=65536,t=4,p=1$SExJMDRTeHFwUnRZd1h5UA$V3BQHGRX1QGU8MaE7AFshkkJ1Nj2eSuA/5JYkdY9xV4', 'godzdyanpo', 0),
(175, 'godzdougls', 'timespeed@pharmacy20mg.com', '$argon2i$v=19$m=65536,t=4,p=1$VHV4Q1g1WG9tYkVrdHpYaw$i++WH//hM4511QBfBNg2+Ge4DxxFDAlEUHeOxBf5VrA', 'godzdougls', 0),
(176, 'godzshrcho', 'anung@pharmacy20mg.com', '$argon2i$v=19$m=65536,t=4,p=1$ejl4azhUV1Nxay9rdTUuLw$C90StLuBfvprghXue2KPeBeFTvok5zX9qp530JYYT/Q', 'godzshrcho', 0),
(177, 'godzashlew', 'homosexuales@pharmacy20mg.com', '$argon2i$v=19$m=65536,t=4,p=1$dUlzQktiU1dYaDFOR3FjZQ$44p00Ccbg7JV9Lsi+jFXoQ78J7XgvKcoSC57OiJseFM', 'godzashlew', 0),
(178, 'godzvelmao', 'gamearticles@pharmacy20mg.com', '$argon2i$v=19$m=65536,t=4,p=1$SG1MeU5henltN3E1NXE2Mg$MrIi+COudbyzZyyzznGrtYayVwLkD1QOVroUAsBOJtk', 'godzvelmao', 0),
(179, 'godzjeanny', 'presages@pharmacy20mg.com', '$argon2i$v=19$m=65536,t=4,p=1$MjFKWjlJbWZNUlp3NVBJQg$eFpKlrlOnd+aYHw/Y4jPwfvqJm0Jh2p+H1aW43xGwug', 'godzjeanny', 0),
(180, 'godzviolew', 'klassieke@pharmacy20mg.com', '$argon2i$v=19$m=65536,t=4,p=1$aTdBaW1Qd2dxWG55S1Rjdg$sghEw5qdtCTsIaxIrrrL5Y0Ju92V38kd1LjeKTH06Is', 'godzviolew', 0),
(181, 'godzevedeo', 'itaa@pharmacy20mg.com', '$argon2i$v=19$m=65536,t=4,p=1$MldMTEliME9JM1h4VTFlTw$TCfD5jOUahuNdnyjYdstewDB9Vhu66gYD2N79JIll9A', 'godzevedeo', 0),
(182, 'godzbebebm', 'mayu@pharmacy20mg.com', '$argon2i$v=19$m=65536,t=4,p=1$ZkNwWlVkaWtxSFZsb1RzSg$MPPZOpGVl/rv4XUKnkQTfmvFHzTxN8MYMiBhFUGQrnw', 'godzbebebm', 0),
(183, 'godzkarolp', 'pharmacist@pharmacy20mg.com', '$argon2i$v=19$m=65536,t=4,p=1$by9CUGFhUS8yMm40RWREcw$pUdmzWmjeanEFvLBP3jkeHYAdpfm4rC16JfTa5lZNZU', 'godzkarolp', 0),
(184, 'godzsamare', 'rejstriku@pharmacy20mg.com', '$argon2i$v=19$m=65536,t=4,p=1$aHBKUjljTTNqQjR6S3hhRg$BIclvNGLzpwih+nCMN8I6KhRvL9ETqJk6c1cQHXOisM', 'godzsamare', 0),
(185, 'godzmeagaz', 'tales@pharmacy20mg.com', '$argon2i$v=19$m=65536,t=4,p=1$bmpDWUZRaWd4Mlpwa1l4cw$ioX0k9maEhFTo8w10nSrktMB/JxTfbs1hKeNsxjH0HA', 'godzmeagaz', 0),
(186, 'godzstefak', 'mainzjohann@pharmacy20mg.com', '$argon2i$v=19$m=65536,t=4,p=1$Yk90UUk2R250LkJUVnRGQg$L0m6UXrDVy87rzxA9jagJ+8FHfursKNjlEQcrjzxGPo', 'godzstefak', 0),
(187, 'godzbrucef', 'steadfast@pharmacy20mg.com', '$argon2i$v=19$m=65536,t=4,p=1$QzkyWFU1ZUVtUkxTS3dTRQ$Sy3bYsrd8PKQOP9jF2muOUe7kmlk1q1Nvfosl+/v8DQ', 'godzbrucef', 0),
(188, 'godzjeannw', 'apmainai@pharmacy20mg.com', '$argon2i$v=19$m=65536,t=4,p=1$NWt2Qm5pSlA1WDgwSVBDQw$IUr1Fzlrf497pku2obhZEO82C4qJ8Dpc0WP10GHIvdE', 'godzjeannw', 0),
(189, 'godzcatalv', 'kozie@pharmacy20mg.com', '$argon2i$v=19$m=65536,t=4,p=1$V0F4RVN4TUsvS2hiYmI0Rw$z39II1b88qzwWdvHK4MCdWM0HiRrhxXcARqbLpKVXTw', 'godzcatalv', 0),
(190, 'godzynsvay', 'applicablee@pharmacy20mg.com', '$argon2i$v=19$m=65536,t=4,p=1$TGJFa243N3dHd2VySWZ3WQ$KH4Bz+VKUdsCmIUoJ7G3FC6vVr/gwl7Z711nYHCLL+4', 'godzynsvay', 0),
(191, 'fodzmarilu', '', '$argon2i$v=19$m=65536,t=4,p=1$bXkzU2NZdTc5dGxaTEt5RA$Kqbmek4Xy45XXLcTP91gIxW3/+xOC/FOHDVoJ2irXU8', 'fodzmarilu', 0),
(192, 'fodzjamely', 'dawned@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$MFd2S0t6N1N4WTIyd3ZRSw$Jbc9kw8KbVVp0tx/OefpKp6a7BeLENOORI/IFJ7CG6w', 'fodzjamely', 0),
(193, 'fodzalvaci', 'vertretern@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$b2NVclpNQ1d6UGU5SDJFeQ$LxcX5+Ibx6E7Ma/s29oaUEctccpjcDZVRe8p7YGl8Bo', 'fodzalvaci', 0),
(194, 'fodzjulifw', 'ando@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$TjhIMG5samhKVHBuUUhJcw$Drc0GkmYnDVu42ZsLpA+tAPAnoVTKkgVidqJfQPUYFg', 'fodzjulifw', 0),
(195, 'Aliya', 'aliyaali00@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$b1M2NGRzVDkwQXpxbjQ5Ng$emC/Ungx2P72RF2AYoVhAvALovBBIKU37F5GVQvKFTY', '048594', 0),
(196, 'Aliya', 'aliya12@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$alNjY2RjZ24xZC9Ldm9MSw$Cva9VDkaL6SjmeofmD6Lk9hcQKmOHsiMAHeUqOk0EJk', '3400853418', 0),
(197, 'fodzsibyls', 'nudead@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$WHNRQmI1MTM4OWhMVEkxTg$tD/Twq8+Oe3qJAoikwdoYUodC/YVTaRsXLTGg8NK3Rc', 'fodzsibyls', 0),
(198, 'fodzlowels', 'salido@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$dFBPcnZVTU50MDdyZHBMWA$p9Vb+x+u2QKhmh2yUkjY+N3ewHXAI0+M4RpAORN1JGI', 'fodzlowels', 0),
(199, 'fodzreneec', 'alam@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$UldYaEptZVFFLmU2YTZweQ$IG8eppZlcpZkOuBa3KWxVjcxGu9xfp06pUrecZ4PQGU', 'fodzreneec', 0),
(200, 'fodzdanilc', 'udrzuje@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$QllMVTlFSWRkdXk0UWdJUQ$BNBDmml/2ELRMNMXHxotyjrPrQ0twGkU1XCmM5w8jnE', 'fodzdanilc', 0),
(201, 'fodzeugenh', 'avalible@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$aGNySWpMOTdHSFR4eG15Vg$pxzLOJBQ4/SPjNluYBrBxOO2oSiD5U9VENPNGDITHcU', 'fodzeugenh', 0),
(202, 'fodzheathp', 'etnografica@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$a1poVENJOXRSMlZnaHBGTg$SgyZweyZBVRrfrSj78LEr2BISNi18sZ0d05QUwHXGqQ', 'fodzheathp', 0),
(203, 'fodzyolanc', 'berezovsky@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$LzNjdkEwTnpaam5HMTUweg$eocm30I2ML3xWViO8Ofg7QJcSBz7xKx1Kp8Jf5Nq+xk', 'fodzyolanc', 0),
(204, 'fodzarturk', 'rizikovym@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$Zkk0aDVuTXVxMVpzUldycQ$NdecMTlt6NsBSSB8/Jlk2c4zX7s4/zxW8CwtUaIQhyk', 'fodzarturk', 0),
(205, 'fodzgastoi', 'ppow@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$Z25UM0JHQW1sUVFDNGZBbg$d3X1nP92uNu9PqEwjv1E3uWN55GO4241EIkjSj3MTWc', 'fodzgastoi', 0),
(206, 'fodzdemirk', 'analog@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$WlVKSlFOdEo3M0pVQVZ3TQ$y19apoT0BPOAXkihxy9Rd0ZVOj4HtsjA0dkWInjq7oI', 'fodzdemirk', 0),
(207, 'fodzdawnao', 'reckless@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$MWJ2TEFLa1ZaWHY4N3d6bA$/aYz1fVEHWqyvF9/RitsoNW8pS5Y0pM13A+PGnENWx8', 'fodzdawnao', 0),
(208, 'fodzcliffy', 'aspp@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$RFBNTVZXSnd6a3IyVUZNLg$4m91Qd4Zhq5SqUOKaXmRFgGeFG2YUx7JqkSEL7RSthY', 'fodzcliffy', 0),
(209, 'fodznellit', 'raumlich@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$MnpkWkNiYW5vM0JQbzZXUA$x5JDnDVMCPSkeRo18atTEYjr35STkEF8FQxD9ZxQ4Kg', 'fodznellit', 0),
(210, 'fodzezequz', 'societycall@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$NGpuMkJZMHIvc0Q1bGI1Tw$9DH8leOA6yfcLOpJG5LNk3CTqK2ZTIPjr5lDqD5cBCA', 'fodzezequz', 0),
(211, 'fodzsharyr', 'aparente@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$OVhENS5lSEprRDRpTDgyeQ$q3AMobxsrobKtW+1roEibUr86ITbDttt0MKKM2wjB8o', 'fodzsharyr', 0),
(212, 'fodzalysss', 'frameworkthe@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$a1VOMmJHNjdrNXg5T2dudg$bzUl60OTrDl+3I8E0Vyex3vpX+dfcfSPvfqKNmVJXPo', 'fodzalysss', 0),
(213, 'fodzantonq', 'reachable@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$QTBNdUp1UFBBb2Z1L2xXSg$IqzBiZT6YOhlDSCPhmPi2oMnJ7FJ2Dd24a0EZjQjNPE', 'fodzantonq', 0),
(214, 'fodzemeryh', 'importers@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$R0tHYkVxQzBTZTFXbW0ybA$oQZGquYY1LdpB4grwxyOkv9CjYaMTxDr9B+4Ynwtqa8', 'fodzemeryh', 0),
(215, 'fodzdeborl', 'quejas@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$bkg0eTVlMzBCdHlwd2NLcA$u6JzH/6rBov1+f7coqTx61fhQ61eMeQ1QHu9yvHYNU4', 'fodzdeborl', 0),
(216, 'fodzjaunia', 'intruding@viawithoutdct.com', '$argon2i$v=19$m=65536,t=4,p=1$Ly9BWTF5LlN1dnBmcWdySA$zStFsUk8NaMq4iA/tdCYoeoG3hyuEzmh1gI45LZYGK0', 'fodzjaunia', 0),
(217, 'templateAdmin@gmail.com', 'techodoo313@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$czBNbUs3MVEvSktwTmVyTA$uRGYXx5QFLql05hJrc6fz7mxZiVHOvUpsl0OKQ6zPI0', '111111', 0),
(218, 'Ali Rehman Test', 'rehman@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$bGMvV3pBNjZOeVZJSXlBRg$dkdbLKFMUBCoYRSPCxmCKwQeji0Glr/eK2mq74epAHo', '1119927878', 0),
(219, 'Ali', 'ali@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$clZBL0NSaDV1THQvSGMyQQ$yvX+8BCnRvf4hpx4/H4/HsJPEJwGIfuagTJXHIrDxtc', '1119927878', 0),
(220, 'Nabi Ali', 'techodoo316@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$RFpEUExpQlVwajRWSm11Ug$n30yuyxMaiEjvZKz12d2ZtKArPaeoCGUYmwUeJNHhGY', '1119927878', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_leads`
--
ALTER TABLE `available_leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id_index` (`u_id`);

--
-- Indexes for table `temp_order_tbl`
--
ALTER TABLE `temp_order_tbl`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id_index` (`u_id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_leads`
--
ALTER TABLE `available_leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `temp_order_tbl`
--
ALTER TABLE `temp_order_tbl`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD CONSTRAINT `order_tbl_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users_tbl` (`user_id`);

--
-- Constraints for table `temp_order_tbl`
--
ALTER TABLE `temp_order_tbl`
  ADD CONSTRAINT `temp_order_tbl_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users_tbl` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
