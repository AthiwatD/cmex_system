-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 11:30 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `checkup`
--

-- --------------------------------------------------------

--
-- Table structure for table `chkup_checkup`
--

CREATE TABLE `chkup_checkup` (
  `checkup_id` int(11) NOT NULL,
  `pid` varchar(20) NOT NULL,
  `txn` varchar(20) NOT NULL,
  `hn` varchar(10) NOT NULL,
  `title_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `age` varchar(5) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `allergic` text NOT NULL,
  `package_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `checkup_date` date NOT NULL,
  `create_by` varchar(20) NOT NULL,
  `create_time` datetime NOT NULL,
  `update_by` varchar(20) NOT NULL,
  `update_time` datetime NOT NULL,
  `deleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chkup_checkup`
--

INSERT INTO `chkup_checkup` (`checkup_id`, `pid`, `txn`, `hn`, `title_name`, `first_name`, `last_name`, `sex`, `birthdate`, `age`, `tel`, `address`, `zip_code`, `allergic`, `package_id`, `location_id`, `checkup_date`, `create_by`, `create_time`, `update_by`, `update_time`, `deleted`) VALUES
(1, '1509900372283', '', '1377380', 'นาย', 'อธิป', 'น้อมศิริ', 'ชาย', '1986-06-06', '34', '0814725891', '349 ม.7 ต.แม่เหียะ อ.เมืองเชียงใหม่ จ.เชียงใหม่', '50100', '', 3, 1, '2021-05-23', '61018', '2021-05-23 16:39:25', '', '0000-00-00 00:00:00', 0),
(2, '1509900372283', '', '1377380', 'นาย', 'อธิป', 'น้อมศิริ', 'ชาย', '1986-06-06', '34', '0814725891', '349 ม.7 ต.แม่เหียะ อ.เมืองเชียงใหม่ จ.เชียงใหม่', '50100', '', 3, 1, '2021-05-23', '61018', '2021-05-23 16:42:16', '', '0000-00-00 00:00:00', 0),
(3, '1509900372283', '', '1377380', 'นาย', 'อธิป', 'น้อมศิริ', 'ชาย', '1986-06-06', '34', '0814725891', '349 ม.7 ต.แม่เหียะ อ.เมืองเชียงใหม่ จ.เชียงใหม่', '50100', '', 3, 1, '2021-05-23', '61018', '2021-05-23 16:42:17', '', '0000-00-00 00:00:00', 0),
(4, '1509900372283', '', '1377380', 'นาย', 'อธิป', 'น้อมศิริ', 'ชาย', '1986-06-06', '34', '0814725891', '349 ม.7 ต.แม่เหียะ อ.เมืองเชียงใหม่ จ.เชียงใหม่', '50100', '', 3, 1, '2021-05-23', '61018', '2021-05-23 16:42:49', '', '0000-00-00 00:00:00', 0),
(5, '1509900372283', '', '1377380', 'นาย', 'อธิป', 'น้อมศิริ', 'ชาย', '1986-06-06', '34', '0814725891', '349 ม.7 ต.แม่เหียะ อ.เมืองเชียงใหม่ จ.เชียงใหม่', '50100', '', 3, 1, '2021-05-23', '61018', '2021-05-23 16:44:21', '', '0000-00-00 00:00:00', 0),
(6, '1509900372283', '', '1377380', 'นาย', 'อธิป', 'น้อมศิริ', 'ชาย', '1986-06-06', '34', '0814725891', '349 ม.7 ต.แม่เหียะ อ.เมืองเชียงใหม่ จ.เชียงใหม่', '50100', '', 3, 1, '2021-05-23', '61018', '2021-05-23 16:44:32', '', '0000-00-00 00:00:00', 0),
(7, '1509900372283', '', '1377380', 'นาย', 'อธิป', 'น้อมศิริ', 'ชาย', '1986-06-06', '34', '0814725891', '349 ม.7 ต.แม่เหียะ อ.เมืองเชียงใหม่ จ.เชียงใหม่', '50100', '', 3, 1, '2021-05-23', '61018', '2021-05-23 16:45:28', '', '0000-00-00 00:00:00', 0),
(8, '1509900372283', '', '1377380', 'นาย', 'อธิป', 'น้อมศิริ', 'ชาย', '1986-06-06', '34', '0814725891', '349 ม.7 ต.แม่เหียะ อ.เมืองเชียงใหม่ จ.เชียงใหม่', '50100', '', 3, 1, '2021-05-23', '61018', '2021-05-23 16:46:28', '', '0000-00-00 00:00:00', 0),
(9, '1509900372283', '', '1377380', 'นาย', 'อธิป', 'น้อมศิริ', 'ชาย', '1986-06-06', '34', '0814725891', '349 ม.7 ต.แม่เหียะ อ.เมืองเชียงใหม่ จ.เชียงใหม่', '50100', '', 3, 1, '2021-05-23', '61018', '2021-05-23 16:47:55', '', '0000-00-00 00:00:00', 0),
(10, '1509900372283', '', '1377380', 'นาย', 'อธิป', 'น้อมศิริ', 'ชาย', '1986-06-06', '34', '0814725891', '349 ม.7 ต.แม่เหียะ อ.เมืองเชียงใหม่ จ.เชียงใหม่', '50100', '', 3, 1, '2021-05-23', '61018', '2021-05-23 16:48:57', '', '0000-00-00 00:00:00', 0),
(11, '1509900372283', '', '1377380', 'นาย', 'อธิป', 'น้อมศิริ', 'ชาย', '1986-06-06', '34', '0814725891', '349 ม.7 ต.แม่เหียะ อ.เมืองเชียงใหม่ จ.เชียงใหม่', '50100', '', 3, 1, '2021-05-23', '61018', '2021-05-23 16:50:32', '', '0000-00-00 00:00:00', 0),
(12, '1509900372283', '', '1377380', 'นาย', 'อธิป', 'น้อมศิริ', 'ชาย', '1986-06-06', '34', '0814725891', '349 ม.7 ต.แม่เหียะ อ.เมืองเชียงใหม่ จ.เชียงใหม่', '50100', '', 3, 1, '2021-05-23', '61018', '2021-05-23 16:50:41', '', '0000-00-00 00:00:00', 0),
(13, '1509900372283', '', '1377380', 'นาย', 'อธิป', 'น้อมศิริ', 'ชาย', '1986-06-06', '34', '0814725891', '349 ม.7 ต.แม่เหียะ อ.เมืองเชียงใหม่ จ.เชียงใหม่', '50100', '', 3, 1, '2021-05-23', '61018', '2021-05-24 07:27:35', '', '0000-00-00 00:00:00', 0),
(14, '1509900372283', '', '1377380', 'นาย', 'อธิป', 'น้อมศิริ', 'ชาย', '1986-06-06', '34', '0814725891', '349 ม.7 ต.แม่เหียะ อ.เมืองเชียงใหม่ จ.เชียงใหม่', '50100', '', 6, 1, '2021-05-24', '61018', '2021-05-24 07:29:11', '61018', '2021-05-24 08:52:45', 1),
(15, '1509900077559', '', '1254658', '', 'นิกร', 'ศรียาหล้า', 'ชาย', '1984-07-17', '36', '014785236', '21 ม.5', '', '', 3, 2, '2021-05-24', '61018', '2021-05-24 07:31:46', '', '0000-00-00 00:00:00', 0),
(16, '1509900372283', '', '1377380', 'นาย', 'อธิป', 'น้อมศิริ', 'ชาย', '1986-06-06', '34', '0814725891', '349 ม.7 ต.แม่เหียะ อ.เมืองเชียงใหม่ จ.เชียงใหม่', '50100', '', 0, 0, '2021-05-24', '61018', '2021-05-24 10:13:29', '', '0000-00-00 00:00:00', 0),
(17, '1509900372283', '', '1377380', 'นาย', 'อธิป', 'น้อมศิริ', 'ชาย', '1986-06-06', '34', '0814725891', '349 ม.7 ต.แม่เหียะ อ.เมืองเชียงใหม่ จ.เชียงใหม่', '50100', '', 3, 1, '2021-05-28', '61018', '2021-05-28 09:53:30', '', '0000-00-00 00:00:00', 0),
(18, '1509900372283', '', '1377380', 'นาย', 'อธิป', 'น้อมศิริ', 'ชาย', '1986-06-06', '34', '0814725891', '349 ม.7 ต.แม่เหียะ อ.เมืองเชียงใหม่ จ.เชียงใหม่', '50100', '', 3, 1, '2021-05-28', '61018', '2021-05-28 09:56:07', '', '0000-00-00 00:00:00', 0),
(19, '1509900372283', '', '1377380', 'นาย', 'อธิป', 'น้อมศิริ', 'ชาย', '1986-06-06', '34', '0814725891', '349 ม.7 ต.แม่เหียะ อ.เมืองเชียงใหม่ จ.เชียงใหม่', '50100', '', 3, 1, '2021-05-31', '61018', '2021-05-31 13:59:19', '', '0000-00-00 00:00:00', 0),
(20, '1509900372283', '', '1377380', 'นาย', 'อธิป', 'น้อมศิริ', 'ชาย', '1986-06-06', '34', '0814725891', '349 ม.7 ต.แม่เหียะ อ.เมืองเชียงใหม่ จ.เชียงใหม่', '50100', '', 3, 1, '2021-06-04', '61018', '2021-06-04 10:05:02', '', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chkup_location`
--

CREATE TABLE `chkup_location` (
  `location_id` int(11) NOT NULL,
  `location_abbre` varchar(10) NOT NULL,
  `location_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chkup_location`
--

INSERT INTO `chkup_location` (`location_id`, `location_abbre`, `location_name`) VALUES
(1, 'CMEx', 'ศูนย์ความเป็นเลิศทสงการแพทย์'),
(2, 'GMC', 'ศูนย์เวชศาสตร์ผู้สูงอายุ');

-- --------------------------------------------------------

--
-- Table structure for table `chkup_package`
--

CREATE TABLE `chkup_package` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `promo_name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `price_note` text NOT NULL,
  `package_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chkup_package`
--

INSERT INTO `chkup_package` (`package_id`, `package_name`, `promo_name`, `price`, `price_note`, `package_detail`) VALUES
(1, 'Program 1 Bronze', 'ชุดแนะนำตรวจสุขภาพขั้นพื้นฐาน', 1770, '', ''),
(2, 'Program 2 Silver', 'ชุดแนะนำสำหรับตรวจโรคเรื้ออรัง', 2840, '', ''),
(3, 'Program 3 Gold ชาย', 'ชุดแนะนำคัดกรองโรคมะเร็งสำหรับเพศชาย', 4700, '', ''),
(4, 'Program 3 Gold หญิง', 'ชุดแนะนำคัดกรองโรคมะเร็งสำหรับเพศหญิง', 5060, '', ''),
(5, 'Program 4 Platinum', 'ชุดตรวจหาไวรัส และการทำงานต่อมไทรอยด์', 4700, '', ''),
(6, 'Program 5 Diamond ชาย', 'ชุดแนะนำตรวจสุขภาพแบบเหมาๆ สำหรับเพศชาย', 4700, '', ''),
(7, 'Program 5 Diamond หญิง', 'ชุดแนะนำตรวจสุขภาพแบบเหมาๆ สำหรับเพศหญิง', 12900, '', ''),
(8, 'Diabetic', 'โปรแกรมตรวจสำหรับโรคเบาหวาน', 3270, '', ''),
(9, 'Kidney', 'โปรแกรมตรวจสำหรับโรคไต', 1820, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_location1`
--

CREATE TABLE `tb_location1` (
  `Ward_code` char(4) NOT NULL DEFAULT '',
  `Ward_code_old` char(4) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `ward_name` char(30) DEFAULT NULL,
  `ward_name1` char(80) DEFAULT NULL,
  `mis_code` char(12) DEFAULT NULL,
  `ward_name_eng` varchar(150) DEFAULT NULL,
  `ward_name_short` varchar(50) DEFAULT NULL,
  `ward_name_old` varchar(255) DEFAULT NULL,
  `ward_name1_old` varchar(255) DEFAULT NULL,
  `ward_tel` char(12) DEFAULT NULL,
  `ward_tel2` varchar(50) DEFAULT NULL,
  `ward_build` int(11) DEFAULT NULL,
  `ward_floor` char(30) DEFAULT NULL,
  `section_code` char(3) DEFAULT NULL,
  `Smi_code` char(5) DEFAULT NULL,
  `Smi_code_old` char(11) DEFAULT NULL,
  `Ward_order` char(4) DEFAULT NULL,
  `Ward_cat` char(2) DEFAULT NULL,
  `ward_asc_cat` char(2) DEFAULT NULL,
  `bed` int(10) UNSIGNED DEFAULT NULL,
  `bed_real` int(10) DEFAULT NULL,
  `pt` float(7,0) DEFAULT NULL,
  `noptbed` varchar(255) DEFAULT NULL,
  `WARD_OTRATE` char(5) DEFAULT NULL,
  `Costcenter` varchar(255) DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

--
-- Dumping data for table `tb_location1`
--

INSERT INTO `tb_location1` (`Ward_code`, `Ward_code_old`, `active`, `ward_name`, `ward_name1`, `mis_code`, `ward_name_eng`, `ward_name_short`, `ward_name_old`, `ward_name1_old`, `ward_tel`, `ward_tel2`, `ward_build`, `ward_floor`, `section_code`, `Smi_code`, `Smi_code_old`, `Ward_order`, `Ward_cat`, `ward_asc_cat`, `bed`, `bed_real`, `pt`, `noptbed`, `WARD_OTRATE`, `Costcenter`) VALUES
('0000', '0000', 3, 'สำนักงานศูนย์ความเป็นเลิศฯ', 'สำนักงานศูนย์ความเป็นเลิศทางการแพทย์', NULL, 'CMEX OFFICE', 'CMEX OFFICE', 'สำนักงานบริหาร', 'สำนักงานบริหาร', '053-934700', '053-934700', NULL, NULL, '00', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('0101', '0101', 3, 'ศูนย์เลสิค', 'ศูนย์เลสิค', NULL, 'CMU Lasik Center', 'CMU Lasik Center', 'ศูนย์เลสิคมหาวิทยาลัยเชียงใหม่', 'ศูนย์เลสิคมหาวิทยาลัยเชียงใหม่', '053-934777', '0827666909', NULL, NULL, '01', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('0202', '0202', 3, 'ศูนย์สุขภาพสตรี', 'ศูนย์สุขภาพสตรี', NULL, 'Women Health Center', 'Women Health Center', 'ศูนย์สุขภาพสตรี', 'ศูนย์สุขภาพสตรี', '053-934711', '053-934712', NULL, NULL, '02', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('0303', '0303', 3, 'ศูนย์การแพทย์ผสมผสาน', 'ศูนย์การแพทย์แผนไทยและการแพทย์ผสมผสาน', NULL, 'The Center of Thai Traditional and Complementary Medicine', 'TTCM', 'ศูนย์การแพทย์แผนไทยและการแพทย์ผสมผสาน', 'ศูนย์การแพทย์แผนไทยและการแพทย์ผสมผสาน', '053-934899', '053-934899', NULL, NULL, '03', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('0404', '0404', 3, 'ศูนย์เพทซีที และไซโคลตรอน', 'ศูนย์เพทซีที และไซโคลตรอน', NULL, 'PET/CT & CYCLOTRON CENTER', 'PET/CT & CYCLOTRON CENTER', 'ศูนย์เพ็ทซี และไซโคลตรอน', 'ศูนย์เพ็ทซี และไซโคลตรอน', '053-934790', '053-934790', NULL, NULL, '04', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('0505', '0505', 3, 'ศูนย์เลเซอร์ต้อกระจกเชียงใหม่', 'ศูนย์เลเซอร์ต้อกระจกเชียงใหม่', NULL, 'Chiang Mai Laser Cataract Surgery Center', 'Chiang Mai Laser Cataract Surgery Center', 'ศูนย์เลเซอร์ต้อกระจกเชียงใหม่', 'ศูนย์เลเซอร์ต้อกระจกเชียงใหม่', '053-934714', '053-934715', NULL, NULL, '05', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('0606', '0606', 3, 'ศูนย์เวชศาสตร์ผู้สูงอายุ', 'ศูนย์เวชศาสตร์ผู้สูงอายุ', NULL, 'Geriatric Medical Center', 'Geriatric Medical Center', 'ศูนย์เวชศาสตร์ผู้สูงอายุ', 'ศูนย์เวชศาสตร์ผู้สูงอายุ', '053-920800', '053920700', NULL, NULL, '06', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('0707', '0707', 3, 'ศูนย์วิเคราะห์สุขภาพการนอนหลับ', 'ศูนย์วิเคราะห์สุขภาพการนอนหลับ', NULL, 'Sleep Disorders Center', 'Sleep Disorders Center', 'ศูนย์วิเคราะห์สุขภาพการนอนหลับ', 'ศูนย์วิเคราะห์สุขภาพการนอนหลับ', '053-920666', '053-920666', NULL, NULL, '07', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('0808', '0808', 3, 'ศูนย์ผู้ป่วยนอกCmex', 'ศูนย์ผู้ป่วยนอกCmex', NULL, 'OPD Cmex', 'OPD Cmex', 'ศูนย์ผู้ป่วยนอกCmex', 'ศูนย์ผู้ป่วยนอกCmex', NULL, NULL, NULL, NULL, '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('0909', '0909', 3, 'ศูนย์ผู้ป่วยนอกGMC', 'ศูนย์ผู้ป่วยนอกGMC', NULL, 'OPD GMC', 'OPD GMC', 'ศูนย์ผู้ป่วยนอกGMC', 'ศูนย์ผู้ป่วยนอกGMC', NULL, NULL, NULL, NULL, '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('1010', '1010', 3, 'ศูนย์ผู้ป่วยในGMC', 'ศูนย์ผู้ป่วยในGMC', NULL, 'IPD Cmex', 'IPD Cmex', 'ศูนย์ผู้ป่วยในCmex', 'ศูนย์ผู้ป่วยในCmex', NULL, NULL, NULL, NULL, '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('1111', '1111', 3, 'ห้องตรวจจักษุGMC', 'ห้องตรวจจักษุ ศูนย์เวชศาสตร์ผู้สูงอายุ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('1212', '1212', 3, 'ห้องยาCmex', 'ห้องยาCmex', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('1313', '1313', 3, 'ห้องยา IPD GMC', 'ห้องยา IPD GMC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('1414', '1414', 3, 'ห้องยา OPD GMC', 'ห้องยา OPD GMC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('1515', '1515', 3, 'ห้องยา TTCM', 'ห้องยา TTCM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('1616', '1616', 3, 'หน่วยปฏิบัติการLab CMEx', 'หน่วยปฏิบัติการLab CMEx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('1717', '1717', 3, 'ศูนย์การแพทย์เพื่อการมีบุตร', 'ศูนย์การแพทย์เพื่อการมีบุตร', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nuser`
--

CREATE TABLE `tb_nuser` (
  `NUM_OT` varchar(8) NOT NULL DEFAULT '',
  `Upass` varchar(20) DEFAULT NULL,
  `ward_code` varchar(4) DEFAULT NULL,
  `pos` char(1) DEFAULT NULL,
  `PP` char(2) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `Utype` varchar(5) DEFAULT NULL,
  `lastdate` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

--
-- Dumping data for table `tb_nuser`
--

INSERT INTO `tb_nuser` (`NUM_OT`, `Upass`, `ward_code`, `pos`, `PP`, `status`, `Utype`, `lastdate`) VALUES
('64011', '5728', '0606', '7', '75', '1', NULL, NULL),
('61001', '8489', '0000', '7', '90', '1', NULL, NULL),
('somsang', 'lasik', '0101', '7', '01', '1', NULL, NULL),
('60058', '7135', '0303', '7', '58', '1', NULL, NULL),
('55007', '2930', '0000', '7', '66', '1', NULL, NULL),
('teekorn', 'sdc', '0707', '7', '01', '1', NULL, NULL),
('55012', '9868', '0404', '7', '00', '1', NULL, NULL),
('55013', '5662', '0404', '7', '00', '1', NULL, NULL),
('55015', '8618', '0101', '7', '60', '1', NULL, NULL),
('56003', '1105', '0000', '7', '61', '1', NULL, NULL),
('56004', '1627', '0101', '7', '89', '1', NULL, NULL),
('56006', '8017', '0101', '7', '89', '1', NULL, NULL),
('56007', '4731', '0101', '7', '89', '1', NULL, NULL),
('56010', '2812', '0404', '7', '00', '1', NULL, NULL),
('56011', '0696', '0404', '7', '00', '1', NULL, NULL),
('62009', '6171', '0101', '7', '57', '1', NULL, NULL),
('56016', '1220', '0000', '7', '61', '1', NULL, NULL),
('56017', '5274', '0606', '7', '00', '1', NULL, NULL),
('56018', '6333', '0202', '7', '64', '1', NULL, NULL),
('62008', '0339', '0000', '7', '75', '1', NULL, NULL),
('56020', '4061', '0202', '7', '89', '1', NULL, NULL),
('62007', '6158', '0606', '7', '74', '1', '', NULL),
('56023', '2043', '0404', '7', '00', '1', NULL, NULL),
('56025', '9635', '0303', '7', '57', '1', NULL, NULL),
('sahatya', 'ttcm', '0303', '7', '99', '1', NULL, NULL),
('57002', '0976', '0000', '7', '57', '1', NULL, NULL),
('57003', '5184', '0202', '7', '57', '1', NULL, NULL),
('57004', '3532', '0000', '7', '67', '1', NULL, NULL),
('57005', '7973', '0404', '7', '00', '1', NULL, NULL),
('57007', '4897', '0000', '7', '68', '1', NULL, NULL),
('57008', '1812', '0303', '7', '00', '1', NULL, NULL),
('57011', '0540', '0202', '7', '89', '1', NULL, NULL),
('nchotiro', '3007037', '0000', '7', '98', '1', NULL, NULL),
('61052', '9173', '0808', '7', '89', '1', NULL, NULL),
('57015', '7936', '0000', '7', '56', '1', NULL, NULL),
('57016', '0223', '0303', '7', '00', '1', NULL, NULL),
('58001', '1185', '0505', '7', '89', '1', NULL, NULL),
('58002', '6077', '0000', '7', '70', '1', NULL, NULL),
('58003', '2325', '0303', '7', '69', '1', NULL, NULL),
('58004', '2828', '0606', '7', '65', '1', NULL, NULL),
('58005', '1142', '0606', '7', '00', '1', NULL, NULL),
('58007', '3594', '0606', '7', '00', '1', NULL, NULL),
('58008', '8344', '0606', '7', '00', '1', NULL, NULL),
('58009', '8718', '0606', '7', '00', '1', NULL, NULL),
('62005', '9888', '0000', '7', '83', '1', NULL, NULL),
('surat', 'gmc', '0606', '7', '99', '1', NULL, NULL),
('58012', '2002', '0606', '7', '89', '1', NULL, NULL),
('58015', '1486', '1212', '7', '55', '1', NULL, NULL),
('58016', '1732', '0606', '7', '00', '1', NULL, NULL),
('58018', '4305', '0606', '7', '00', '1', NULL, NULL),
('58019', '1687', '0606', '7', '00', '1', NULL, NULL),
('58022', '8828', '0606', '7', '57', '1', NULL, NULL),
('58023', '7001', '0606', '7', '57', '1', NULL, NULL),
('58024', '0383', '0606', '7', '57', '1', NULL, NULL),
('58025', '7154', '0606', '7', '71', '1', NULL, NULL),
('58026', '3673', '0606', '7', '71', '1', NULL, NULL),
('58027', '1314', '0000', '7', '67', '1', NULL, NULL),
('58028', '5139', '0606', '7', '72', '1', NULL, NULL),
('58029', '5931', '0606', '7', '57', '1', NULL, NULL),
('58032', '3567', '0606', '7', '57', '1', NULL, NULL),
('58034', '3365', '0606', '7', '00', '1', NULL, NULL),
('58035', '6793', '0606', '7', '57', '1', NULL, NULL),
('58037', '5806', '0606', '7', '00', '1', NULL, NULL),
('58039', '0776', '0303', '7', '57', '1', NULL, NULL),
('58040', '1149', '0303', '7', '57', '1', NULL, NULL),
('58042', '6749', '0606', '7', '75', '1', NULL, NULL),
('62003', '3698', '0000', '7', '66', '1', NULL, NULL),
('58044', '5526', '0606', '7', '68', '1', NULL, NULL),
('64010', '2827', '0606', '7', '84', '1', NULL, NULL),
('58049', '8769', '0606', '7', '89', '1', NULL, NULL),
('58050', '9438', '0606', '7', '89', '1', NULL, NULL),
('58052', '9788', '0606', '7', '57', '1', NULL, NULL),
('58053', '6139', '0606', '7', '57', '1', NULL, NULL),
('62036', '7777', '0606', '7', '89', '1', NULL, NULL),
('59003', '6991', '0606', '7', '57', '1', NULL, NULL),
('59005', '1740', '0606', '7', '57', '1', NULL, NULL),
('59006', '9357', '0606', '7', '89', '1', NULL, NULL),
('59007', '5762', '0707', '7', '89', '1', NULL, NULL),
('59008', '4756', '0606', '7', '73', '1', NULL, NULL),
('59009', '0066', '0606', '7', '89', '1', NULL, NULL),
('59010', '4934', '0606', '7', '76', '1', NULL, NULL),
('59011', '2172', '0606', '7', '00', '1', NULL, NULL),
('59012', '1461', '0606', '7', '76', '1', NULL, NULL),
('62006', '1718', '0303', '7', '58', '1', NULL, NULL),
('59014', '8324', '0606', '7', '89', '1', NULL, NULL),
('59015', '1186', '0606', '7', '76', '1', NULL, NULL),
('63028', '2091', '1717', '7', '89', '1', NULL, NULL),
('59017', '3127', '0606', '7', '76', '1', NULL, NULL),
('59018', '7323', '0606', '7', '76', '1', NULL, NULL),
('59019', '9057', '0606', '7', '76', '1', NULL, NULL),
('59020', '8925', '0606', '7', '75', '1', NULL, NULL),
('59021', '2328', '0606', '7', '89', '1', NULL, NULL),
('59022', '3887', '0606', '7', '89', '1', NULL, NULL),
('61055', '7255', '0606', '7', '73', '1', NULL, NULL),
('59024', '2882', '0606', '7', '00', '1', NULL, NULL),
('59025', '7266', '0606', '7', '76', '1', NULL, NULL),
('59027', '9486', '0606', '7', '76', '1', NULL, NULL),
('59028', '0604', '0606', '7', '76', '1', NULL, NULL),
('59029', '3680', '0606', '7', '76', '1', NULL, NULL),
('59030', '3993', '0606', '7', '76', '1', NULL, NULL),
('59031', '3784', '0606', '7', '76', '1', NULL, NULL),
('59032', '0442', '0606', '7', '76', '1', NULL, NULL),
('59034', '0270', '0606', '7', '78', '1', NULL, NULL),
('60060', '8687', '0303', '7', '43', '1', NULL, NULL),
('59038', '4558', '0606', '7', '79', '1', NULL, NULL),
('59039', '8548', '0000', '7', '70', '1', NULL, NULL),
('61054', '0581', '0303', '7', '92', '1', '', NULL),
('59043', '6584', '0000', '7', '67', '1', NULL, NULL),
('61053', '3376', '0000', '7', '68', '1', NULL, NULL),
('59045', '6218', '0606', '7', '65', '1', NULL, NULL),
('59047', '3481', '0606', '7', '89', '1', NULL, NULL),
('59048', '2478', '0606', '7', '89', '1', NULL, NULL),
('59049', '8047', '0606', '7', '89', '1', NULL, NULL),
('59050', '0084', '0606', '7', '89', '1', NULL, NULL),
('59051', '4079', '0606', '7', '89', '1', NULL, NULL),
('63029', '1791', '0808', '7', '76', '1', NULL, NULL),
('59053', '7374', '0606', '7', '76', '1', NULL, NULL),
('59054', '4551', '0606', '7', '76', '1', NULL, NULL),
('61051', '6112', '0000', '7', '71', '1', NULL, NULL),
('59056', '0901', '0606', '7', '76', '1', NULL, NULL),
('62035', '4718', '0202', '7', '89', '1', NULL, NULL),
('59060', '2853', '0606', '7', '89', '1', NULL, NULL),
('59061', '0632', '0606', '7', '76', '1', NULL, NULL),
('59062', '4202', '0606', '7', '76', '1', NULL, NULL),
('62027', '8740', '0606', '7', '97', '1', NULL, NULL),
('61049', '9969', '0000', '7', '55', '1', NULL, NULL),
('59065', '0644', '0606', '7', '79', '1', NULL, NULL),
('60001', '9360', '0202', '7', '76', '1', NULL, NULL),
('60002', '9400', '0606', '7', '81', '1', NULL, NULL),
('61048', '6857', '0606', '7', '89', '1', NULL, NULL),
('62034', '0038', '0606', '7', '47', '1', NULL, NULL),
('60005', '9859', '0000', '7', '82', '1', NULL, NULL),
('62038', '3912', '0606', '7', '76', '1', NULL, NULL),
('60008', '5135', '0606', '7', '76', '1', NULL, NULL),
('60009', '2721', '0606', '7', '76', '1', NULL, NULL),
('60010', '3455', '0606', '7', '76', '1', NULL, NULL),
('61047', '4095', '0606', '7', '85', '1', NULL, NULL),
('60012', '1347', '0606', '7', '89', '1', NULL, NULL),
('61045', '0723', '0606', '7', '66', '1', NULL, NULL),
('60016', '2381', '0606', '7', '65', '1', NULL, NULL),
('60017', '3491', '0606', '7', '47', '1', NULL, NULL),
('60018', '8541', '0000', '7', '84', '1', NULL, NULL),
('60019', '2588', '0606', '7', '72', '1', NULL, NULL),
('61044', '6583', '0303', '7', '76', '1', NULL, NULL),
('60021', '6171', '0606', '7', '55', '1', NULL, NULL),
('60023', '5475', '0000', '7', '86', '1', NULL, NULL),
('60024', '9267', '0606', '7', '68', '1', NULL, NULL),
('60025', '7982', '0707', '7', '87', '1', NULL, NULL),
('60026', '6830', '0808', '7', '89', '1', NULL, NULL),
('60027', '3589', '0000', '7', '47', '1', NULL, NULL),
('61043', '8951', '0000', '7', '65', '1', NULL, NULL),
('60029', '2579', '0303', '7', '57', '1', NULL, NULL),
('60030', '5939', '0808', '7', '89', '1', NULL, NULL),
('62040', '3890', '0808', '7', '76', '1', NULL, NULL),
('60032', '8852', '0808', '7', '89', '1', NULL, NULL),
('61041', '0914', '0000', '7', '65', '1', NULL, NULL),
('60034', '0254', '0000', '7', '88', '1', NULL, NULL),
('60035', '0679', '0404', '7', '64', '1', NULL, NULL),
('siripong', 'exc', '0606', '7', '99', '1', NULL, NULL),
('60037', '0308', '0606', '7', '76', '1', NULL, NULL),
('60038', '9990', '0606', '7', '89', '1', NULL, NULL),
('62032', '1970', '0606', '7', '89', '1', NULL, NULL),
('61039', '8974', '0000', '7', '76', '1', '', NULL),
('61038', '5324', '0606', '7', '80', '1', NULL, NULL),
('60042', '0956', '0404', '7', '76', '1', NULL, NULL),
('60043', '2330', '0000', '7', '73', '1', NULL, NULL),
('60044', '5054', '0000', '7', '73', '1', NULL, NULL),
('60045', '0431', '0000', '7', '55', '1', NULL, NULL),
('60046', '6813', '0000', '7', '66', '1', NULL, NULL),
('64008', '2126', '0808', '7', '66', '1', NULL, NULL),
('60048', '2087', '0000', '7', '55', '1', NULL, NULL),
('60049', '8137', '0000', '7', '57', '1', NULL, NULL),
('60050', '6225', '0000', '7', '57', '1', NULL, NULL),
('60051', '6940', '0000', '7', '57', '1', NULL, NULL),
('60052', '2551', '0000', '7', '57', '1', NULL, NULL),
('60053', '1855', '0000', '7', '61', '1', NULL, NULL),
('60054', '7639', '0707', '7', '87', '1', NULL, NULL),
('60055', '8299', '0707', '7', '87', '1', NULL, NULL),
('62030', '4900', '0000', '7', '68', '1', NULL, NULL),
('lsinghak', 'dawan123', '0000', '7', '00', '1', NULL, NULL),
('narisa', 'ttcm', '0303', '7', '00', '1', NULL, NULL),
('nipa', 'gmc', '0606', '7', '00', '1', NULL, NULL),
('isuksawa', 'jaew0705', '0303', '7', '00', '1', NULL, NULL),
('61036', '1780', '0000', '7', '47', '1', NULL, NULL),
('61003', '1408', '0000', '7', '91', '1', NULL, NULL),
('64013', '9191', '0000', '7', '56', '1', NULL, NULL),
('61006', '3319', '0606', '7', '75', '1', NULL, NULL),
('62029', '9548', '0606', '7', '97', '1', NULL, NULL),
('61008', '3158', '0505', '7', '89', '1', NULL, NULL),
('61035', '4066', '0000', '7', '81', '1', NULL, NULL),
('61011', '0294', '0000', '7', '84', '1', NULL, NULL),
('61012', '3671', '0606', '7', '76', '1', NULL, NULL),
('61013', '6757', '0606', '7', '76', '1', NULL, NULL),
('61015', '2065', '0606', '7', '84', '1', NULL, NULL),
('61016', '4988', '0606', '7', '89', '1', NULL, NULL),
('62028', '5947', '0000', '7', '86', '1', NULL, NULL),
('61018', '2283', '0000', '7', '77', '1', NULL, NULL),
('61019', '8412', '0000', '7', '72', '1', NULL, NULL),
('61020', '6240', '1212', '7', '72', '1', NULL, NULL),
('61033', '3004', '0606', '7', '89', '1', NULL, NULL),
('61022', '5317', '0404', '7', '47', '1', NULL, NULL),
('61032', '5760', '0606', '7', '55', '1', NULL, NULL),
('61024', '1801', '0000', '7', '68', '1', NULL, NULL),
('61028', '9026', '0606', '7', '89', '1', NULL, NULL),
('61026', '7237', '0404', '7', '64', '1', NULL, NULL),
('61034', '3281', '0000', '7', '70', '1', NULL, NULL),
('62039', '9950', '0606', '7', '64', '1', NULL, NULL),
('62011', '8809', '0606', '7', '89', '1', NULL, NULL),
('62025', '2358', '0606', '7', '96', '1', NULL, NULL),
('62037', '4046', '0303', '7', '89', '1', NULL, NULL),
('62014', '9225', '0000', '7', '55', '1', NULL, NULL),
('62015', '7400', '0000', '7', '72', '1', NULL, NULL),
('62016', '7481', '0000', '7', '55', '1', NULL, NULL),
('62023', '3344', '0606', '7', '76', '1', NULL, NULL),
('62018', '3181', '0000', '7', '55', '1', NULL, NULL),
('62019', '0780', '0000', '7', '72', '1', NULL, NULL),
('62020', '2401', '0606', '7', '94', '1', NULL, NULL),
('62021', '7424', '0606', '7', '95', '1', NULL, NULL),
('62022', '8768', '0303', '7', '57', '1', NULL, NULL),
('marudee', 'petct', '0404', '7', '01', '1', NULL, NULL),
('pailin', 'women', '0202', '7', '01', '1', NULL, NULL),
('62041', '4010', '0000', '7', '65', '1', NULL, NULL),
('62042', '4425', '0808', '7', '76', '1', NULL, NULL),
('62043', '0741', '0000', '7', '55', '1', NULL, NULL),
('62044', '1465', '0808', '7', '89', '1', NULL, NULL),
('64014', '0008', '0808', '7', '89', '1', NULL, NULL),
('63017', '3553', '0000', '7', '43', '1', NULL, NULL),
('63013', '3529', '0000', '7', '81', '1', NULL, NULL),
('63012', '2532', '0000', '7', '72', '1', NULL, NULL),
('63011', '3293', '0606', '7', '89', '1', NULL, NULL),
('64009', '9623', '0606', '7', '80', '1', NULL, NULL),
('63008', '8451', '0303', '7', '47', '1', NULL, NULL),
('63007', '1189', '0000', '7', '55', '1', NULL, NULL),
('63006', '1268', '0000', '7', '68', '1', NULL, NULL),
('63004', '2249', '0303', '7', '58', '1', NULL, NULL),
('63003', '5343', '0000', '7', '57', '1', NULL, NULL),
('63002', '9819', '0000', '7', '43', '1', NULL, NULL),
('63001', '2101', '0000', '7', '73', '1', NULL, NULL),
('62050', '2185', '0000', '7', '70', '1', NULL, NULL),
('62049', '4602', '0606', '7', '96', '1', NULL, NULL),
('62048', '8625', '0606', '7', '76', '1', NULL, NULL),
('62047', '8106', '0606', '7', '89', '1', NULL, NULL),
('62046', '9032', '0606', '7', '72', '1', NULL, NULL),
('62045', '9830', '0606', '7', '89', '1', NULL, NULL),
('63026', '5053', '0101', '7', '76', '1', NULL, NULL),
('63015', '1085', '0808', '7', '89', '1', NULL, NULL),
('63016', '9086', '0808', '7', '89', '1', NULL, NULL),
('63018', '7653', '0606', '7', '89', '1', NULL, NULL),
('63030', '7487', '0000', '7', '66', '1', NULL, NULL),
('63021', '6744', '0606', '7', '96', '1', NULL, NULL),
('63022', '7486', '0606', '7', '81', '1', NULL, NULL),
('63023', '8736', '0303', '7', '47', '1', NULL, NULL),
('63024', '3641', '0000', '7', '75', '1', NULL, NULL),
('63025', '8632', '0606', '7', '75', '1', NULL, NULL),
('63027', '4683', '0707', '7', '89', '1', NULL, NULL),
('63031', '2532', '1717', '7', '76', '1', NULL, NULL),
('63032', '9535', '1717', '7', '76', '1', NULL, NULL),
('63033', '2648', '0000', '7', '84', '1', NULL, NULL),
('63034', '3512', '0000', '7', '65', '1', NULL, NULL),
('63035', '1605', '1717', '7', '73', '1', NULL, NULL),
('63036', '1646', '0101', '7', '76', '1', NULL, NULL),
('20017', '6025', '0606', '7', '89', '1', NULL, NULL),
('20041', '4591', '0000', '7', '89', '1', NULL, NULL),
('63019', '3996', '1717', '7', '89', '1', NULL, NULL),
('63037', '2309', '0808', '7', '89', '1', NULL, NULL),
('63038', '4911', '0606', '7', '73', '1', NULL, NULL),
('63039', '0353', '0606', '7', '73', '1', NULL, NULL),
('64001', '6783', '0606', '7', '89', '1', NULL, NULL),
('64002', '1742', '0606', '7', '89', '1', NULL, NULL),
('64003', '2764', '0606', '7', '89', '1', NULL, NULL),
('64004', '3791', '0606', '7', '57', '1', NULL, NULL),
('64005', '1245', '0606', '7', '57', '1', NULL, NULL),
('64006', '2821', '0606', '7', '89', '1', NULL, NULL),
('64007', '0739', '0606', '7', '89', '1', NULL, NULL),
('64015', '7053', '0000', '7', '68', '1', NULL, NULL),
('64016', '2023', '0000', '7', '44', '1', NULL, NULL),
('64017', '5774', '0606', '7', '57', '1', NULL, NULL),
('64018', '8670', '1212', '7', '55', '1', NULL, NULL),
('64019', '2401', '1212', '7', '72', '1', NULL, NULL),
('64020', '3588', '1212', '7', '55', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_nward`
--

CREATE TABLE `tb_nward` (
  `News_id` int(11) NOT NULL,
  `New_Heading` varchar(255) DEFAULT NULL,
  `ward_code` varchar(5) NOT NULL DEFAULT '',
  `News_datesend` datetime DEFAULT NULL,
  `nread` int(3) UNSIGNED NOT NULL DEFAULT '0',
  `mcomment` text NOT NULL,
  `section` char(2) NOT NULL DEFAULT '',
  `sendby` varchar(10) DEFAULT NULL,
  `nresponse` int(3) UNSIGNED DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

--
-- Dumping data for table `tb_nward`
--

INSERT INTO `tb_nward` (`News_id`, `New_Heading`, `ward_code`, `News_datesend`, `nread`, `mcomment`, `section`, `sendby`, `nresponse`) VALUES
(0, 'สำนักงานCMEx', '0000', NULL, 0, '', '00', NULL, 0),
(2, 'ศูนย์สุขภาพสตรี', '0202', NULL, 0, '', '02', NULL, 0),
(1, 'ศูนย์เลสิค', '0101', NULL, 0, '', '01', NULL, 0),
(5, 'ศูนย์เลเซอร์ต้อกระจก', '0505', NULL, 0, '', '05', NULL, 0),
(4, 'ศูนย์เพ็ทซีที และไซโคลตรอน', '0404', NULL, 0, '', '04', NULL, 0),
(3, 'ศูนย์การแพทย์ผสมผสาน', '0303', NULL, 0, '', '03', NULL, 0),
(6, 'ศูนย์เวชศาสตร์ผู้สูงอายุ', '0606', NULL, 0, '', '06', NULL, 0),
(7, 'ศูนย์วิเคราะห์สุขภาพการนอนหลับ', '0707', NULL, 0, '', '07', NULL, 0),
(8, 'ศูนย์ผู้ป่วยนอกCmex', '0808', NULL, 0, '', '08', NULL, 0),
(17, 'ศูนย์การแพทย์เพื่อการมีบุตร', '1717', NULL, 0, '', '17', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_person`
--

CREATE TABLE `tb_person` (
  `SSUSR_Initials` varchar(255) DEFAULT NULL,
  `NUM_OT` varchar(8) NOT NULL DEFAULT '',
  `work` date DEFAULT NULL COMMENT 'วันเริ่มทำงาน',
  `start` date DEFAULT NULL COMMENT 'วันเข้าทำงานวันแรก',
  `Person_id` varchar(30) DEFAULT NULL,
  `Person_id1` varchar(30) DEFAULT NULL,
  `Fname` varchar(30) DEFAULT NULL,
  `chFname` varchar(50) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `chLname` varchar(50) DEFAULT NULL,
  `name_english` varchar(30) DEFAULT NULL,
  `lname_english` varchar(50) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `MR1` varchar(10) DEFAULT NULL,
  `MR` char(1) DEFAULT NULL,
  `position_id` varchar(15) DEFAULT NULL,
  `mstatus` tinyint(1) DEFAULT NULL,
  `born` date DEFAULT NULL,
  `born_1` date DEFAULT NULL,
  `national` varchar(30) DEFAULT NULL,
  `religion` tinyint(1) DEFAULT NULL,
  `BIRTH_PLACE` text,
  `father` varchar(100) DEFAULT NULL,
  `father_occu` varchar(255) DEFAULT NULL,
  `mother` varchar(100) DEFAULT NULL,
  `mother_occu` varchar(255) DEFAULT NULL,
  `MAR` varchar(11) DEFAULT NULL,
  `MAR_new` tinyint(1) DEFAULT '1',
  `couple` varchar(100) DEFAULT NULL,
  `couple_occu` varchar(255) DEFAULT NULL,
  `son_count` varchar(255) DEFAULT NULL,
  `home` varchar(255) DEFAULT '',
  `TUMBOL` varchar(50) DEFAULT NULL,
  `tumbol_id` int(11) DEFAULT NULL,
  `tumbol_name` int(10) DEFAULT NULL,
  `aumphor` int(11) DEFAULT NULL,
  `aumphor_name` varchar(15) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `PROVINCE` varchar(30) DEFAULT NULL,
  `mail_code` varchar(255) DEFAULT NULL,
  `telaphone` varchar(30) DEFAULT NULL,
  `mobile_phone` varchar(30) DEFAULT NULL,
  `ward_phone` varchar(30) DEFAULT NULL,
  `relative` text,
  `relative_occu` varchar(255) DEFAULT NULL,
  `relative_addr` text,
  `num_people` varchar(13) DEFAULT NULL,
  `num_people1` varchar(13) DEFAULT NULL,
  `edu_cer` smallint(6) DEFAULT NULL,
  `edu_cer1` varchar(255) DEFAULT NULL,
  `edu_degree` tinyint(1) DEFAULT NULL,
  `edu_from` varchar(255) DEFAULT NULL,
  `edu_vol` varchar(255) DEFAULT NULL,
  `edu_year` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `form_size` varchar(255) DEFAULT NULL,
  `form_size1` varchar(255) DEFAULT NULL,
  `pos_new` char(3) DEFAULT NULL,
  `pos_old` varchar(50) DEFAULT NULL,
  `pos1` char(3) DEFAULT NULL,
  `pos_thai` varchar(255) DEFAULT NULL,
  `PP` char(3) DEFAULT NULL,
  `PP1` varchar(19) DEFAULT NULL,
  `PP_new` char(3) DEFAULT NULL,
  `FW_CODE` varchar(10) DEFAULT NULL,
  `FW_CODE_new` varchar(10) DEFAULT NULL,
  `FW_CODE1` varchar(45) DEFAULT NULL,
  `per_order` int(11) DEFAULT NULL,
  `work_sec` varchar(255) DEFAULT NULL,
  `nursecer_id` varchar(255) DEFAULT NULL,
  `nursecer_date` date DEFAULT NULL,
  `sapa_id` varchar(255) DEFAULT NULL,
  `samakom_id` varchar(15) DEFAULT NULL,
  `bank_no` varchar(255) DEFAULT NULL,
  `new` varchar(255) DEFAULT NULL,
  `memo` text,
  `mr_english` varchar(255) DEFAULT NULL,
  `mr_thai` varchar(255) DEFAULT NULL,
  `c_now` varchar(255) DEFAULT NULL,
  `newnurse` tinyint(1) DEFAULT '1',
  `ck` tinyint(1) DEFAULT '0',
  `ncomment` varchar(255) DEFAULT NULL,
  `nyear` char(4) DEFAULT NULL,
  `codeper` varchar(10) DEFAULT NULL,
  `goverment_fund` varchar(50) DEFAULT NULL,
  `day_card` varchar(50) DEFAULT NULL,
  `num_card` varchar(50) DEFAULT NULL,
  `stu` varchar(50) DEFAULT NULL,
  `new_status` varchar(50) DEFAULT NULL,
  `expert` varchar(50) DEFAULT NULL,
  `lastupdate` datetime DEFAULT NULL,
  `nupdate` tinyint(1) DEFAULT '0',
  `hncheck` tinyint(1) DEFAULT '0',
  `pos` char(3) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

--
-- Dumping data for table `tb_person`
--

INSERT INTO `tb_person` (`SSUSR_Initials`, `NUM_OT`, `work`, `start`, `Person_id`, `Person_id1`, `Fname`, `chFname`, `Lname`, `chLname`, `name_english`, `lname_english`, `sex`, `MR1`, `MR`, `position_id`, `mstatus`, `born`, `born_1`, `national`, `religion`, `BIRTH_PLACE`, `father`, `father_occu`, `mother`, `mother_occu`, `MAR`, `MAR_new`, `couple`, `couple_occu`, `son_count`, `home`, `TUMBOL`, `tumbol_id`, `tumbol_name`, `aumphor`, `aumphor_name`, `province_id`, `PROVINCE`, `mail_code`, `telaphone`, `mobile_phone`, `ward_phone`, `relative`, `relative_occu`, `relative_addr`, `num_people`, `num_people1`, `edu_cer`, `edu_cer1`, `edu_degree`, `edu_from`, `edu_vol`, `edu_year`, `blood_group`, `form_size`, `form_size1`, `pos_new`, `pos_old`, `pos1`, `pos_thai`, `PP`, `PP1`, `PP_new`, `FW_CODE`, `FW_CODE_new`, `FW_CODE1`, `per_order`, `work_sec`, `nursecer_id`, `nursecer_date`, `sapa_id`, `samakom_id`, `bank_no`, `new`, `memo`, `mr_english`, `mr_thai`, `c_now`, `newnurse`, `ck`, `ncomment`, `nyear`, `codeper`, `goverment_fund`, `day_card`, `num_card`, `stu`, `new_status`, `expert`, `lastupdate`, `nupdate`, `hncheck`, `pos`) VALUES
(NULL, '59033', NULL, NULL, '59033', NULL, 'ชัยธวัช', NULL, 'กิตติคุณากร', NULL, 'chaithawat', 'kittikunakorn', 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60025', NULL, NULL, '60025', NULL, 'รังสิมันตุ์', NULL, 'ไก่งาม', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60054', NULL, NULL, '60054', NULL, 'กรณ์ณภัทร', NULL, 'จตุพรเรืองรอง', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60055', NULL, NULL, '60055', NULL, 'ปัทมา', NULL, 'ประดับ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58002', NULL, NULL, '58002', NULL, 'มารุต', NULL, 'คำมา', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59039', NULL, NULL, '59039', NULL, 'วิโรจน์', NULL, 'ศรีอำนาจ', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60060', NULL, NULL, '60060', NULL, 'กนกอร', NULL, 'โพธิวงค์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, 'teekorn', NULL, NULL, 'teekorn', NULL, 'ธีรกร', NULL, 'ธีรกิตติกุล', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60058', NULL, NULL, '60058', NULL, 'ณัฐฐา\r\n', NULL, 'ฐิติศรารักษ์\r\n', NULL, '', NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, 'somsang', NULL, NULL, 'somsang', NULL, 'สมสงวน', NULL, 'อัษญคุณ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '55007', NULL, NULL, '55007', NULL, 'สุจิตรา', NULL, 'เตชะเต่ย', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '55012', NULL, NULL, '55012', NULL, 'เจษฎาพงษ์', NULL, 'พุ่มร่วมใจ', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '55013', NULL, NULL, '55013', NULL, 'กนกวฤนท์', NULL, 'กัลยาณมิตร', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '55015', NULL, NULL, '55015', NULL, 'สุภาพร', NULL, 'เลาหพูนรังษี', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '56003', NULL, NULL, '56003', NULL, 'รัชตวรรณ', NULL, 'กันทา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '56004', NULL, NULL, '56004', NULL, 'จตุพร', NULL, 'รัตนศีล', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '56006', NULL, NULL, '56006', NULL, 'เสาวลักษณ์', NULL, 'พรหมศร', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '56007', NULL, NULL, '56007', NULL, 'อรวรรณ', NULL, 'สมทานี', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '56010', NULL, NULL, '56010', NULL, 'ธาริณี', NULL, 'บุญญวรรณ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '56011', NULL, NULL, '56011', NULL, 'กานต์', NULL, 'วิมลวรรธนะสาร', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62005', NULL, NULL, '62005', NULL, 'ธนบดี', NULL, 'นื่มวงษ์', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61052', NULL, NULL, '61052', NULL, 'พลอย', NULL, 'ทรัพย์ไพบูลย์กิจ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '56016', NULL, NULL, '56016', NULL, 'ปรารถนา', NULL, 'ไชยวรรณ์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '56017', NULL, NULL, '56017', NULL, 'สุจิตรา', NULL, 'จะเรวงค์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '56018', NULL, NULL, '56018', NULL, 'ภัสสร', NULL, 'อินทร์ต้น', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '56020', NULL, NULL, '56020', NULL, 'ศรีอินทิรา', NULL, 'วงศ์วิจิตร', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62006', NULL, NULL, '62006', NULL, 'กลวัชร', NULL, 'แสงสูง', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62003', NULL, NULL, '62003', NULL, 'ประภัสสร', NULL, 'กุนนะ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '56023', NULL, NULL, '56023', NULL, 'เจนจิรา', NULL, 'แสนเมืองดี', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '56025', NULL, NULL, '56025', NULL, 'ชฎาภา', NULL, 'ตระกูลเชียงแก้ว', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, 'sahatya', NULL, NULL, 'sahatya', NULL, 'สหัทยา', NULL, 'ไพบูลย์วรชาติ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '57002', NULL, NULL, '57002', NULL, 'สุรินทร์', NULL, 'ธรรมา', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '57003', NULL, NULL, '57003', NULL, 'พรรณทิพา', NULL, 'เครือสามสุม', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '57004', NULL, NULL, '57004', NULL, 'เบญจรัตน์', NULL, 'ทาอ้าย', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '57005', NULL, NULL, '57005', NULL, 'สุรัชดา', NULL, 'คำวังสวัสดิ์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '57007', NULL, NULL, '57007', NULL, 'พินสุวรรณ', NULL, 'บัวชุม', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '57008', NULL, NULL, '57008', NULL, 'ชยน์พรรณ์', NULL, 'แสงเพชร', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, 'nchotiro', NULL, NULL, 'nchotiro', NULL, 'นเรนทร์', NULL, 'โชติรสนิรมิต', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '57011', NULL, NULL, '57011', NULL, 'ปาเจรา', NULL, 'บุญช่วย', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62036', NULL, NULL, '62036', NULL, 'อังคณา', NULL, 'กันทะกุล', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '57015', NULL, NULL, '57015', NULL, 'ภาวิณี', NULL, 'สุธรรมน้อย', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '57016', NULL, NULL, '57016', NULL, 'กาญจนา', NULL, 'จำวงค์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58001', NULL, NULL, '58001', NULL, 'ยุวเรศ', NULL, 'ก้อนแก้ว', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58003', NULL, NULL, '58003', NULL, 'เกียรติศักดิ์', NULL, 'คงภาษี', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58004', NULL, NULL, '58004', NULL, 'สิริมหาจักร', NULL, 'เกียรติไชยากร', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58005', NULL, NULL, '58005', NULL, 'ปัญญา', NULL, 'ดอนวิชา', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58007', NULL, NULL, '58007', NULL, 'วิพรรษา', NULL, 'ไชยเทพ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58008', NULL, NULL, '58008', NULL, 'เอื้องพร', NULL, 'วงศ์พัฒนากูล', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58009', NULL, NULL, '58009', NULL, 'ธัญญ์นลิน', NULL, 'จันทร', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '20017', NULL, NULL, '20017', NULL, 'นิภา', NULL, 'ภู่ปะวะโรทัย', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, 'surat', NULL, NULL, 'surat', NULL, 'สุรัตน์', NULL, 'ตันประเวช', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58012', NULL, NULL, '58012', NULL, 'นฤมล', NULL, 'กิติรัตน์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58015', NULL, NULL, '58015', NULL, 'นพมาศ', NULL, 'สิทธิยศ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58016', NULL, NULL, '58016', NULL, 'วิศัลยา', NULL, 'ไทยธรรมยานนท์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58018', NULL, NULL, '58018', NULL, 'สิริวรรณ', NULL, 'เสาโกมุท', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58019', NULL, NULL, '58019', NULL, 'ณราศักดิ์', NULL, 'สายทอง', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58022', NULL, NULL, '58022', NULL, 'สุรีนาถ', NULL, 'เชียงคาน', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58023', NULL, NULL, '58023', NULL, 'พรทิภา', NULL, 'ต้นมือ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58024', NULL, NULL, '58024', NULL, 'สุธี', NULL, 'รังสี', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58025', NULL, NULL, '58025', NULL, 'นเรศ', NULL, 'ศรีนวล', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58026', NULL, NULL, '58026', NULL, 'อนุสรณ์', NULL, 'วงค์รินทร์', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58027', NULL, NULL, '58027', NULL, 'นฤมล', NULL, 'ก่ำแก้ว', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58028', NULL, NULL, '58028', NULL, 'กัณต์ปภัทร', NULL, 'พรมดร', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58029', NULL, NULL, '58029', NULL, 'นวรัตน์', NULL, 'กาวีปลูก', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58032', NULL, NULL, '58032', NULL, 'ณิชากร', NULL, 'ลุงอ่อง', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58034', NULL, NULL, '58034', NULL, 'นริศรา', NULL, 'สาสุจิตร์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58035', NULL, NULL, '58035', NULL, 'อภิสรา', NULL, 'พลศรีเมือง', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58037', NULL, NULL, '58037', NULL, 'จุฑารัตน์', NULL, 'ตันยเวช', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58039', NULL, NULL, '58039', NULL, 'พิมพิลา', NULL, 'คำพุธ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58040', NULL, NULL, '58040', NULL, 'ภรภัทร', NULL, 'เล็กทรัพย์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58042', NULL, NULL, '58042', NULL, 'จีระพันธ์', NULL, 'เชื้อเมืองพาน', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61055', NULL, NULL, '61055', NULL, 'เอกภพ', NULL, 'พจนสิทธิ์', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58044', NULL, NULL, '58044', NULL, 'ชรินทิพย์', NULL, 'จันทร์หอกลอง', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58046', NULL, NULL, '58046', NULL, 'ปณาลี', NULL, 'อุประดิษฐ์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58047', NULL, NULL, '58047', NULL, 'อุบลวรรณ', NULL, 'ภู่สว่าง', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58049', NULL, NULL, '58049', NULL, 'สาธนี', NULL, 'จำต๊ะ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58050', NULL, NULL, '58050', NULL, 'เสาวลักษณ์', NULL, 'ชุนดี', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58052', NULL, NULL, '58052', NULL, 'นิรตศัย', NULL, 'ปนิทานโต', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '58053', NULL, NULL, '58053', NULL, 'พัชรพงษ์', NULL, 'ปิคนวล', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62035', NULL, NULL, '62035', NULL, 'ธนัชพร', NULL, 'รักษาคม', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59003', NULL, NULL, '59003', NULL, 'ทิพวรรณ', NULL, 'อุ่นเมือง', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59005', NULL, NULL, '59005', NULL, 'ศรีนวล', NULL, 'ศรีบัว', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59006', NULL, NULL, '59006', NULL, 'จิดารัตน์', NULL, 'หวานมีรส', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59007', NULL, NULL, '59007', NULL, 'รติรัตน์', NULL, 'วรสุธานีวรรณ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59008', NULL, NULL, '59008', NULL, 'เทอดศักดิ์', NULL, 'ไชยวรรณะ', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59009', NULL, NULL, '59009', NULL, 'พัชรมณฑน์', NULL, 'ศุภผล', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1');
INSERT INTO `tb_person` (`SSUSR_Initials`, `NUM_OT`, `work`, `start`, `Person_id`, `Person_id1`, `Fname`, `chFname`, `Lname`, `chLname`, `name_english`, `lname_english`, `sex`, `MR1`, `MR`, `position_id`, `mstatus`, `born`, `born_1`, `national`, `religion`, `BIRTH_PLACE`, `father`, `father_occu`, `mother`, `mother_occu`, `MAR`, `MAR_new`, `couple`, `couple_occu`, `son_count`, `home`, `TUMBOL`, `tumbol_id`, `tumbol_name`, `aumphor`, `aumphor_name`, `province_id`, `PROVINCE`, `mail_code`, `telaphone`, `mobile_phone`, `ward_phone`, `relative`, `relative_occu`, `relative_addr`, `num_people`, `num_people1`, `edu_cer`, `edu_cer1`, `edu_degree`, `edu_from`, `edu_vol`, `edu_year`, `blood_group`, `form_size`, `form_size1`, `pos_new`, `pos_old`, `pos1`, `pos_thai`, `PP`, `PP1`, `PP_new`, `FW_CODE`, `FW_CODE_new`, `FW_CODE1`, `per_order`, `work_sec`, `nursecer_id`, `nursecer_date`, `sapa_id`, `samakom_id`, `bank_no`, `new`, `memo`, `mr_english`, `mr_thai`, `c_now`, `newnurse`, `ck`, `ncomment`, `nyear`, `codeper`, `goverment_fund`, `day_card`, `num_card`, `stu`, `new_status`, `expert`, `lastupdate`, `nupdate`, `hncheck`, `pos`) VALUES
(NULL, '59010', NULL, NULL, '59010', NULL, 'กนกวรรณ', NULL, 'จินะ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59011', NULL, NULL, '59011', NULL, 'สุริสา', NULL, 'ศรีอ๊อต', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59012', NULL, NULL, '59012', NULL, 'มานิตย์', NULL, 'ทนนวงค์', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61054', NULL, NULL, '61054', NULL, 'มนต์ธัช', NULL, 'ไทยยันโต', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59014', NULL, NULL, '59014', NULL, 'อรพรรณ', NULL, 'ยะบึง', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59015', NULL, NULL, '59015', NULL, 'ภคนันท์', NULL, 'สุจา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61053', NULL, NULL, '61053', NULL, 'เสาวลักษณ์', NULL, 'กันทา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59017', NULL, NULL, '59017', NULL, 'ภัทรภูมิ', NULL, 'โยปัญญา', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59018', NULL, NULL, '59018', NULL, 'พุทธรักษา', NULL, 'จงศิริ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59019', NULL, NULL, '59019', NULL, 'กมลพร', NULL, 'ท้าวคำวัง', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59020', NULL, NULL, '59020', NULL, 'ประสงค์', NULL, 'พิทักษ์สกุลไพร', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59021', NULL, NULL, '59021', NULL, 'สุทธิกานต์', NULL, 'สุริยะ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59022', NULL, NULL, '59022', NULL, 'สุพิชฌาย์', NULL, 'ไชยไธสง', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61051', NULL, NULL, '61051', NULL, 'มณฑล', NULL, 'ปัญญาวัง', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59024', NULL, NULL, '59024', NULL, 'เขมิการ์', NULL, 'แปงถานี', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59025', NULL, NULL, '59025', NULL, 'ณัฐธิดา', NULL, 'ยอดนิปาน', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59027', NULL, NULL, '59027', NULL, 'ชยาภรณ์', NULL, 'กรุงนะ', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59028', NULL, NULL, '59028', NULL, 'ทิพย์วรรณ', NULL, 'หอมยมณ์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59029', NULL, NULL, '59029', NULL, 'วัชรี', NULL, 'มาฉันท์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59030', NULL, NULL, '59030', NULL, 'เปรมด์ฤทัย', NULL, 'เสนวิรัช', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59031', NULL, NULL, '59031', NULL, 'อาภาพร', NULL, 'แสนใจ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59032', NULL, NULL, '59032', NULL, 'รุ่งจิรา', NULL, 'วงค์กาศ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59034', NULL, NULL, '59034', NULL, 'พรพรรณ', NULL, 'ธรรมศิลป์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61001', NULL, NULL, '61001', NULL, 'กุลธิดา', NULL, 'ตรรกวรุตม์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59038', NULL, NULL, '59038', NULL, 'อุเทน', NULL, 'มูลแก้ว', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62027', NULL, NULL, '62027', NULL, 'ชวัลลักษณ์', NULL, 'บุญหลี', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59043', NULL, NULL, '59043', NULL, 'วัชรี', NULL, 'เจริญทรัพย์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59045', NULL, NULL, '59045', NULL, 'ณัทวุฒิ', NULL, 'เฮงจีระจรัส', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59047', NULL, NULL, '59047', NULL, 'กาญจนา', NULL, 'ธรรมชัยยุติ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59048', NULL, NULL, '59048', NULL, 'ปรียานุช', NULL, 'ลาวตุม', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59049', NULL, NULL, '59049', NULL, 'ธินัสนันท์', NULL, 'สารทอง', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59050', NULL, NULL, '59050', NULL, 'สุทธิดา', NULL, 'ทองอินปัน', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59051', NULL, NULL, '59051', NULL, 'ณัฐธยาน์', NULL, 'พุทธปาจารย์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '20041', NULL, NULL, '20041', NULL, 'ลัดดาวัลย์', NULL, 'สิงห์คำฟู', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59053', NULL, NULL, '59053', NULL, 'พิมพ์พิสุทธิ์', NULL, 'อินธิทา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59054', NULL, NULL, '59054', NULL, 'สาริศา', NULL, 'สมโน', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61049', NULL, NULL, '61049', NULL, 'สุภกร', NULL, 'ฉัตรอุทัย', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59056', NULL, NULL, '59056', NULL, 'นรินทร์ทิพย์', NULL, 'จันตาบุญ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62034', NULL, NULL, '62034', NULL, 'สิทธิธิวัชช์', NULL, 'ตงเล็ก', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59060', NULL, NULL, '59060', NULL, 'รัตนาภรณ์', NULL, 'วรรณรินทร์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59061', NULL, NULL, '59061', NULL, 'อรทัย', NULL, 'เครื่องคำ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59062', NULL, NULL, '59062', NULL, 'ธนากิต', NULL, 'อูปแปง', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61048', NULL, NULL, '61048', NULL, 'ศุภาพิชญ์', NULL, 'ขจรโมทย์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61047', NULL, NULL, '61047', NULL, 'ฐิตินันท์', NULL, 'ชัยกุลเสรีวัฒน์', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '59065', NULL, NULL, '59065', NULL, 'อัญชลี', NULL, 'ชวนประเสริฐ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60001', NULL, NULL, '60001', NULL, 'ภัทรสุดา', NULL, 'เหมืองจา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60002', NULL, NULL, '60002', NULL, 'วัชรินทร์', NULL, 'บุญเทพ', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61045', NULL, NULL, '61045', NULL, 'กรกนก', NULL, 'วงศ์ศิลา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62038', NULL, NULL, '62038', NULL, 'วาริสา', NULL, 'กันตศรี', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60005', NULL, NULL, '60005', NULL, 'ทนันต์', NULL, 'นันตากาศ', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62032', NULL, NULL, '62032', NULL, 'นภาพร', NULL, 'อินสิงห์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60008', NULL, NULL, '60008', NULL, 'สตรีรัตน์', NULL, 'ภัทรวรตระกูล', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60009', NULL, NULL, '60009', NULL, 'จุฬาลักษณ์', NULL, 'ใหม่พรม', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60010', NULL, NULL, '60010', NULL, 'เสาวลักษณ์', NULL, 'สุขระแหง', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61044', NULL, NULL, '61044', NULL, 'วิภาดา', NULL, 'สุริยา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60012', NULL, NULL, '60012', NULL, 'นาริชา', NULL, 'จอมขันเงิน', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
('', '61043', NULL, NULL, '61043', NULL, 'สมหญิง', NULL, 'ดำนิล', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60016', NULL, NULL, '60016', NULL, 'เอกรินทร์', NULL, 'ศุภตระกูล', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60017', NULL, NULL, '60017', NULL, 'ภัทรพล', NULL, 'หลวงแสน', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60018', NULL, NULL, '60018', NULL, 'จิราพร', NULL, 'ต๊ะเสน', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60019', NULL, NULL, '60019', NULL, 'ติณณภพ', NULL, 'กันตพัชญ์', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62040', NULL, NULL, '62040', NULL, 'พิมพร', NULL, 'คำไส', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60021', NULL, NULL, '60021', NULL, 'จิดาภา', NULL, 'พรหมปัญญา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60023', NULL, NULL, '60023', NULL, 'ปราวิรัตน์', NULL, 'คิ้วดวงตา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60024', NULL, NULL, '60024', NULL, 'จิตติมาภรณ์', NULL, 'กันทะ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60026', NULL, NULL, '60026', NULL, 'คณิน', NULL, 'กาวิชัย', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60027', NULL, NULL, '60027', NULL, 'ไมตรี', NULL, 'พึ่งวิทยาธร', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, 'siripong', NULL, NULL, 'siripong', NULL, 'ศิริพงค์', NULL, 'เชี่ยวชาญธนกิจ', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60029', NULL, NULL, '60029', NULL, 'สุพรรษา', NULL, 'มารอด', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60030', NULL, NULL, '60030', NULL, 'พิมลดา', NULL, 'ไชยศิริ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61041', NULL, NULL, '61041', NULL, 'พิมลพรรณ', NULL, 'รัตนพัฒนากุล', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60032', NULL, NULL, '60032', NULL, 'พัชราภรณ์', NULL, 'พุทธิมา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61039', NULL, NULL, '61039', NULL, 'สุทธิชา', NULL, 'วีระวงศ์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60034', NULL, NULL, '60034', NULL, 'นัฐชัย', NULL, 'โพธิ์รอด', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60035', NULL, NULL, '60035', NULL, 'ธันยนัช', NULL, 'ทุนอินทร์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60037', NULL, NULL, '60037', NULL, 'ภาสินี', NULL, 'ปู่ปา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60038', NULL, NULL, '60038', NULL, 'สีรีรัตน์', NULL, 'มณฑนม', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61038', NULL, NULL, '61038', NULL, 'นันท์นภัส', NULL, 'ร่องดุสิต', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60042', NULL, NULL, '60042', NULL, 'ณัฐชยา', NULL, 'สุทาชัย', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60043', NULL, NULL, '60043', NULL, 'อธิชาภัสร์', NULL, 'จันทร์เส็ง', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60044', NULL, NULL, '60044', NULL, 'รุ้งลาวัลย์', NULL, 'สุนทร', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60045', NULL, NULL, '60045', NULL, 'ภัทรกร', NULL, 'ดำรงไชย', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60046', NULL, NULL, '60046', NULL, 'ใกล้รุ่ง', NULL, 'วิวัฒน์ชัยกุล', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62031', NULL, NULL, '62031', NULL, 'สิริญา', NULL, 'จันกันธา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60048', NULL, NULL, '60048', NULL, 'วราภรณ์', NULL, 'เมฆลา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60049', NULL, NULL, '60049', NULL, 'กนกวรรณ', NULL, 'ตื่นถาวร', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1');
INSERT INTO `tb_person` (`SSUSR_Initials`, `NUM_OT`, `work`, `start`, `Person_id`, `Person_id1`, `Fname`, `chFname`, `Lname`, `chLname`, `name_english`, `lname_english`, `sex`, `MR1`, `MR`, `position_id`, `mstatus`, `born`, `born_1`, `national`, `religion`, `BIRTH_PLACE`, `father`, `father_occu`, `mother`, `mother_occu`, `MAR`, `MAR_new`, `couple`, `couple_occu`, `son_count`, `home`, `TUMBOL`, `tumbol_id`, `tumbol_name`, `aumphor`, `aumphor_name`, `province_id`, `PROVINCE`, `mail_code`, `telaphone`, `mobile_phone`, `ward_phone`, `relative`, `relative_occu`, `relative_addr`, `num_people`, `num_people1`, `edu_cer`, `edu_cer1`, `edu_degree`, `edu_from`, `edu_vol`, `edu_year`, `blood_group`, `form_size`, `form_size1`, `pos_new`, `pos_old`, `pos1`, `pos_thai`, `PP`, `PP1`, `PP_new`, `FW_CODE`, `FW_CODE_new`, `FW_CODE1`, `per_order`, `work_sec`, `nursecer_id`, `nursecer_date`, `sapa_id`, `samakom_id`, `bank_no`, `new`, `memo`, `mr_english`, `mr_thai`, `c_now`, `newnurse`, `ck`, `ncomment`, `nyear`, `codeper`, `goverment_fund`, `day_card`, `num_card`, `stu`, `new_status`, `expert`, `lastupdate`, `nupdate`, `hncheck`, `pos`) VALUES
(NULL, '60050', NULL, NULL, '60050', NULL, 'อมรรัตน์', NULL, 'โดดาธรรม', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60051', NULL, NULL, '60051', NULL, 'วรัญญา', NULL, 'ต่ายทา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60052', NULL, NULL, '60052', NULL, 'กมลทิพย์', NULL, 'ปัญญาทิพย์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60053', NULL, NULL, '60053', NULL, 'ธันย์ชนก', NULL, 'เฟืองคำ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62030', NULL, NULL, '62030', NULL, 'นุชนาฎ', NULL, 'เสนาธรรม', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, 'lsinghak', NULL, NULL, 'lsinghak', NULL, 'ลัดดาวัลย์', NULL, 'สิงห์คำฟู', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, 'nipa', NULL, NULL, 'nipa', NULL, 'นิภา', NULL, 'ภู่ปะวะโรทัย', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, 'narisa', NULL, NULL, 'narisa', NULL, 'นริสา', NULL, 'ศรีบัณฑิตมงคล', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, 'isuksawa', NULL, NULL, 'isuksawa', NULL, 'อิษฎางค์', NULL, 'สุขสวัสดิ์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61037', NULL, NULL, '61037', NULL, 'ประภาวรินทร์', NULL, 'ภูวเดชโภคนิษฐ์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61003', NULL, NULL, '61003', NULL, 'ศิพร', NULL, 'เตชะหมื่น', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61004', NULL, NULL, '61004', NULL, 'จันทิรา', NULL, 'กาทองทุ่ง', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61036', NULL, NULL, '61036', NULL, 'วิรุฬ', NULL, 'การเร็ว', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61006', NULL, NULL, '61006', NULL, 'นพดล', NULL, 'อินตานวน', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62029', NULL, NULL, '62029', NULL, 'แสงมณี', NULL, 'พรมติ๊บ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61008', NULL, NULL, '61008', NULL, 'รัชนีกร', NULL, 'แสนสุข', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61035', NULL, NULL, '61035', NULL, 'ปิยณัฐ', NULL, 'คำดวงดาว', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61011', NULL, NULL, '61011', NULL, 'ระมิงค์', NULL, 'เย็นจิตต์', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61012', NULL, NULL, '61012', NULL, 'สุภาภรณ์', NULL, 'สังคำ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61013', NULL, NULL, '61013', NULL, 'อรทัย', NULL, 'คำใหม่', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61015', NULL, NULL, '61015', NULL, 'ชลธิชา', NULL, 'ลืมกลืน', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61016', NULL, NULL, '61016', NULL, 'รุ้งรวี', NULL, 'แสงเขียว', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62028', NULL, NULL, '62028', NULL, 'สุพีรณัฐ', NULL, 'คำแผ่นชัย', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61018', NULL, NULL, '61018', NULL, 'อธิป', NULL, 'น้อมศิริ', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61019', NULL, NULL, '61019', NULL, 'เมธินี', NULL, 'จิตธรรม', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61020', NULL, NULL, '61020', NULL, 'สุพัตรา', NULL, 'ติ๊ปปิน', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61033', NULL, NULL, '61033', NULL, 'รุ่งทิพย์', NULL, 'บุญเรือง', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61022', NULL, NULL, '61022', NULL, 'นัฐพงษ์', NULL, 'ยาสมุทร', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61032', NULL, NULL, '61032', NULL, 'สุจริตพรรณ', NULL, 'ใจเป็ง', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61024', NULL, NULL, '61024', NULL, 'นิตยา', NULL, 'เสนนะ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61028', NULL, NULL, '61028', NULL, 'พัชราภรณ์', NULL, 'เลายี่ปา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61026', NULL, NULL, '61026', NULL, 'ภัทรวรรณ', NULL, 'วรวัฒน์วิจิตร', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61034', NULL, NULL, '61034', NULL, 'ชรินทร์', NULL, 'อินทไชย', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62007', NULL, NULL, '62007', NULL, 'กัญญาณัฐ', NULL, 'พุทธิมา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62008', NULL, NULL, '62008', NULL, 'ธวัชชัย', NULL, 'ต่อคำอ้าย', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62009', NULL, NULL, '62009', NULL, 'กัญชญารัตน์', NULL, 'คำมา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62039', NULL, NULL, '62039', NULL, 'เตือนใจ', NULL, 'ยกยอดี', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62011', NULL, NULL, '62011', NULL, 'อัญชนา', NULL, 'วรรณภิระ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62025', NULL, NULL, '62025', NULL, 'ธร', NULL, 'ประเสริฐสมบูรณ์', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62037', NULL, NULL, '62037', NULL, 'พนิดา', NULL, 'ศรีใจ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62014', NULL, NULL, '62014', NULL, 'วรัญญา\r\n', NULL, 'แปงชาติ\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62015', NULL, NULL, '62015', NULL, 'วริทธิ์\r\n', NULL, 'จันทร์ทองคำ\r\n', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62016', NULL, NULL, '62016', NULL, 'ทิพวรรณ \r\n', NULL, 'สุริยะมล\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62023', NULL, NULL, '62023', NULL, 'ศิริพงษ์', NULL, 'สุราศรี', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62018', NULL, NULL, '62018', NULL, 'ณฐพร \r\n', NULL, 'เจิดจำรัส\r\n', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62019', NULL, NULL, '62019', NULL, 'เบญจพร  \r\n', NULL, 'สมศรี\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62020', NULL, NULL, '62020', NULL, 'สุธิดา  \r\n', NULL, 'สุตะวงค์\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62021', NULL, NULL, '62021', NULL, 'รัตนาภรณ์  \r\n', NULL, 'ยาวิละ\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62022', NULL, NULL, '62022', NULL, 'ภัทรบดินทร์  \r\n', NULL, 'เปาวะ\r\n', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, 'marudee', NULL, NULL, 'marudee', NULL, 'มลฤดี', NULL, 'เอกมหาชัย', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, 'pailin', NULL, NULL, 'pailin', NULL, 'ไพลิน', NULL, 'คงมีผล', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62041', NULL, NULL, '62041', NULL, 'ชัชนนท์  \r\n', NULL, 'กัมทรทิพย์\r\n', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62042', NULL, NULL, '62042', NULL, 'ภัททิยา\r\n', NULL, 'กันทา\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62043', NULL, NULL, '62043', NULL, 'ณีรนุช\r\n', NULL, 'ตันธนะเศรษฐ์\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62044', NULL, NULL, '62044', NULL, 'เพชรรัช  \r\n', NULL, 'หอมมาลา\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63028', NULL, NULL, '63028', NULL, 'กรชนก\r\n', NULL, 'อักษรดิษฐ์\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62045', NULL, NULL, '62045', NULL, 'ณัฐสุดา\r\n', NULL, 'โลแก้ว\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62046', NULL, NULL, '62046', NULL, 'ณัฐชยาน์ \r\n', NULL, 'ปู่มณี\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62047', NULL, NULL, '62047', NULL, 'ปิยะนุช  \r\n', NULL, 'จันมา\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62048', NULL, NULL, '62048', NULL, 'อรวรรณ  \r\n', NULL, 'เลี่ยมสกุล\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62049', NULL, NULL, '62049', NULL, 'ทอฝัน  \r\n', NULL, 'สุธาโน\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '62050', NULL, NULL, '62050', NULL, 'อัมรินทร์\r\n', NULL, 'อัมรินทร์\r\n', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63001', NULL, NULL, '63001', NULL, 'วีริยารัศมิ์\r\n', NULL, 'มานะผัน\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63002', NULL, NULL, '63002', NULL, 'เพียรทิพย์\r\n', NULL, 'สินจ้าง\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63003', NULL, NULL, '63003', NULL, 'วราภรณ์\r\n', NULL, 'สิงห์ชัย\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63004', NULL, NULL, '63004', NULL, 'พรฟ้า\r\n', NULL, 'อนันต์ไพศาล\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63006', NULL, NULL, '63006', NULL, 'กาญจน์ประภา\r\n', NULL, 'วงค์ปัญญา\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63007', NULL, NULL, '63007', NULL, 'ศุภณัฐ  \r\n', NULL, 'มโนชมภู\r\n', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63008', NULL, NULL, '63008', NULL, 'นราศักดิ์\r\n', NULL, 'หลวงหล้า\r\n', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63010', NULL, NULL, '63010', NULL, 'อวยชัย  \r\n', NULL, 'ทิพย์เสถียร\r\n', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63011', NULL, NULL, '63011', NULL, 'วิรัตน์ดา\r\n', NULL, 'ถิ่นการ์\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63012', NULL, NULL, '63012', NULL, 'นิตยา\r\n', NULL, 'วงค์แก้ว\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63013', NULL, NULL, '63013', NULL, 'สุรชาติ\r\n', NULL, 'วงค์ใหม่\r\n', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63017', NULL, NULL, '63017', NULL, 'กุลณัฐ\r\n', NULL, 'จริงมาก\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63014', NULL, NULL, '63014', NULL, 'ทัยสวรรค์\r\n', NULL, 'ดู่ยา\r\n', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63015\r\n', NULL, NULL, '63015\r\n', NULL, 'พิชชาวีร์\r\n', NULL, 'โอบอ้อม\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63016', NULL, NULL, '63016', NULL, 'พัชรพิทธ์\r\n', NULL, 'ยศสุข\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63018', NULL, NULL, '63018', NULL, 'วลัยลักษณ์\r\n', NULL, 'จองแดง\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63019', NULL, NULL, '63019', NULL, 'อรวีร์\r\n', NULL, 'ทิศรำวัง\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63021', NULL, NULL, '63021', NULL, 'ชินวัตร\r\n', NULL, 'ภูดอนตอง\r\n', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63022', NULL, NULL, '63022', NULL, 'อนุวัฒน์\r\n', NULL, 'แก้วบุญเรือง\r\n', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63023', NULL, NULL, '63023', NULL, 'วิศรุต\r\n', NULL, 'มงคล', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63024', NULL, NULL, '63024', NULL, 'ณัฐพล\r\n', NULL, 'ซื่อสัตย์สุจริต\r\n', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63025', NULL, NULL, '63025', NULL, 'ชัย\r\n', NULL, 'นายแสง\r\n', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63026', NULL, NULL, '63026', NULL, 'วรรณดี\r\n', NULL, 'จีนา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63027', NULL, NULL, '63027', NULL, 'วรางคณา \r\n', NULL, 'แก้วดอนดุก\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1');
INSERT INTO `tb_person` (`SSUSR_Initials`, `NUM_OT`, `work`, `start`, `Person_id`, `Person_id1`, `Fname`, `chFname`, `Lname`, `chLname`, `name_english`, `lname_english`, `sex`, `MR1`, `MR`, `position_id`, `mstatus`, `born`, `born_1`, `national`, `religion`, `BIRTH_PLACE`, `father`, `father_occu`, `mother`, `mother_occu`, `MAR`, `MAR_new`, `couple`, `couple_occu`, `son_count`, `home`, `TUMBOL`, `tumbol_id`, `tumbol_name`, `aumphor`, `aumphor_name`, `province_id`, `PROVINCE`, `mail_code`, `telaphone`, `mobile_phone`, `ward_phone`, `relative`, `relative_occu`, `relative_addr`, `num_people`, `num_people1`, `edu_cer`, `edu_cer1`, `edu_degree`, `edu_from`, `edu_vol`, `edu_year`, `blood_group`, `form_size`, `form_size1`, `pos_new`, `pos_old`, `pos1`, `pos_thai`, `PP`, `PP1`, `PP_new`, `FW_CODE`, `FW_CODE_new`, `FW_CODE1`, `per_order`, `work_sec`, `nursecer_id`, `nursecer_date`, `sapa_id`, `samakom_id`, `bank_no`, `new`, `memo`, `mr_english`, `mr_thai`, `c_now`, `newnurse`, `ck`, `ncomment`, `nyear`, `codeper`, `goverment_fund`, `day_card`, `num_card`, `stu`, `new_status`, `expert`, `lastupdate`, `nupdate`, `hncheck`, `pos`) VALUES
(NULL, '63029', NULL, NULL, '63029', NULL, 'ณัฐธิดา\r\n', NULL, 'ต้อติดวงค์\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63030', NULL, NULL, '63030', NULL, 'ชนากานต์\r\n', NULL, 'วสันตวิษุวัต\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63031', NULL, NULL, '63031', NULL, 'กันยารัตน์\r\n', NULL, 'บุญมา\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63032', NULL, NULL, '63032', NULL, 'บุษยารัตน์\r\n', NULL, 'ป้องภัย\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63033', NULL, NULL, '63033', NULL, 'พิชญา\r\n', NULL, 'สุมาลัย\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63034', NULL, NULL, '63034', NULL, 'ตุล\r\n', NULL, 'ชัยกิจมงคล\r\n', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63035', NULL, NULL, '63035', NULL, 'ปารียา\r\n', NULL, 'สมศักดิ์\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63036', NULL, NULL, '63036', NULL, 'ขนิสตา \r\n', NULL, 'วงศ์ศรีหทัย\r\n', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63037', NULL, NULL, '63037', NULL, 'ปาณิสรา', NULL, 'ปัญญาสิทธิ์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63038', NULL, NULL, '63038', NULL, 'วัชราภรณ์', NULL, 'ชัยเลิศ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63039', NULL, NULL, '63039', NULL, 'ธิดารัตน์', NULL, 'วรรณเลิศ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '64001', NULL, NULL, '64001', NULL, 'พีรญา', NULL, 'สานเมนทา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '64002', NULL, NULL, '64002', NULL, 'ปาจรีย์', NULL, 'ผลภาษี', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '64003', NULL, NULL, '64003', NULL, 'ปภัสสร', NULL, 'เลาสูงเนิน', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '64004', NULL, NULL, '64004', NULL, 'ปทุมวรรณ', NULL, 'เมืองมูล', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '64005', NULL, NULL, '64005', NULL, 'เปรม', NULL, 'นะเจ๊ะ', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '64006', NULL, NULL, '64006', NULL, 'ธัญชนก', NULL, 'มูลยศ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '64007', NULL, NULL, '64007', NULL, 'ธีรวิทย์', NULL, 'ตางาม', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '64008', NULL, NULL, '64008', NULL, 'กชกร', NULL, 'พรมมา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '64009', NULL, NULL, '64009', NULL, 'พีระดล', NULL, 'โมตาลี', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '64010', NULL, NULL, '64010', NULL, 'อรวรรณ ', NULL, 'ธรรมมา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '64011', NULL, NULL, '64011', NULL, 'ภาณุพงค์', NULL, 'ตันเสียง', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '64013', NULL, NULL, '64013', NULL, 'วนาวรรณ', NULL, 'ตะริโย', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '64014', NULL, NULL, '64014', NULL, 'กนกวรรณ', NULL, 'ด่านบางภูมิ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '64015', NULL, NULL, '64015', NULL, 'ลลิตา', NULL, 'ศรีดวงอินทร์', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '64016', NULL, NULL, '64016', NULL, 'นิรันทร์', NULL, 'นิพัธนันท์', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '64017', NULL, NULL, '64017', NULL, 'ศิวานันท์', NULL, 'ไชยยา', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '64018', NULL, NULL, '64018', NULL, 'ภากร', NULL, 'ไทยานันท์', NULL, NULL, NULL, 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '64019', NULL, NULL, '64019', NULL, 'สุภามาศ', NULL, 'เครือวรรณ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '64020', NULL, NULL, '64020', NULL, 'ณัฐนารี', NULL, 'มินทะขัติ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_position`
--

CREATE TABLE `tb_position` (
  `position_code` char(255) NOT NULL DEFAULT '',
  `position_code1` varchar(255) DEFAULT NULL,
  `position_name` char(255) DEFAULT NULL,
  `position_nameAB` char(255) DEFAULT NULL,
  `position_name1` char(255) DEFAULT NULL,
  `pp_code` char(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

--
-- Dumping data for table `tb_position`
--

INSERT INTO `tb_position` (`position_code`, `position_code1`, `position_name`, `position_nameAB`, `position_name1`, `pp_code`) VALUES
('00', '00', NULL, NULL, NULL, NULL),
('43', '43', 'พนักงานธุรการ', NULL, 'พนักงานธุรการ', NULL),
('47', '47', 'พนักงานบริการทั่วไป(คนงาน)', NULL, 'พนักงานบริการทั่วไป(คนงาน)', NULL),
('44', '44', 'ช่างเขียนแบบ', NULL, 'ช่างเขียนแบบ', NULL),
('55', '55', 'เภสัชกร', '', 'เภสัชกร', ''),
('56', '56', 'พนักงานบัญชี', NULL, 'พนักงานบัญชี', NULL),
('57', '57', 'พนักงานผู้ช่วยทางการแพทย์', NULL, 'พนักงานผู้ช่วยทางการแพทย์', NULL),
('58', '58', 'แพทย์จีน', NULL, 'แพทย์จีน', NULL),
('59', '59', 'นักฟิสิกส์การแพทย์', NULL, 'นักฟิสิกส์การแพทย์', NULL),
('60', '60', 'ผู้จัดการ (LASIK)', NULL, 'ผู้จัดการ (LASIK)', NULL),
('61', '61', 'พนักงานการเงิน', NULL, 'พนักงานการเงิน', NULL),
('62', '62', 'นักเคมีรังสี', NULL, 'นักเคมีรังสี', NULL),
('63', '63', 'นักเภสัชรังสี', NULL, 'นักเภสัชรังสี', NULL),
('64', '64', 'นักรังสีการแพทย์', NULL, 'นักรังสีการแพทย์', NULL),
('65', '65', 'แพทย์', NULL, 'แพทย์', NULL),
('66', '66', 'พนักงานเวชระเบียน', NULL, 'พนักงานเวชระเบียน', NULL),
('67', '67', 'พนักงานบริหารงานทั่วไป', NULL, 'พนักงานบริหารงานทั่วไป', NULL),
('68', '68', 'พนักงานเก็บเงิน', NULL, 'พนักงานเก็บเงิน', NULL),
('69', '69', 'แพทย์แผนไทยประยุกต์', NULL, 'แพทย์แผนไทยประยุกต์', NULL),
('70', '70', 'ช่างไฟฟ้า', NULL, 'ช่างไฟฟ้า', NULL),
('71', '71', 'พนักงานเปล', NULL, 'พนักงานเปล', NULL),
('72', '72', 'พนักงานผู้ช่วยเภสัชกร', NULL, 'พนักงานผู้ช่วยเภสัชกร', NULL),
('73', '73', 'นักเทคนิคการแพทย์', NULL, 'นักเทคนิคการแพทย์', NULL),
('74', '74', 'นักกายภาพบำบัด', NULL, 'นักกายภาพบำบัด', NULL),
('75', '75', 'พนักงานขับรถยนต์', NULL, 'พนักงานขับรถยนต์', NULL),
('76', '76', 'พนักงานผู้ช่วยทางการแพทย์', NULL, 'พนักงานผู้ช่วยทางการแพทย์', NULL),
('77', '77', 'นักวิชาการคอมพิวเตอร์', NULL, 'นักวิชาการคอมพิวเตอร์', NULL),
('78', '78', 'นักกิจกรรมบำบัด', NULL, 'นักกิจกรรมบำบัด', NULL),
('79', '79', 'พนักงานโภชนาการ', NULL, 'พนักงานโภชนาการ', NULL),
('80', '80', 'นักโภชนาการ', NULL, 'นักโภชนาการ', NULL),
('81', '81', 'พนักงานเปล', NULL, 'พนักงานเปล', NULL),
('82', '82', 'พนักงานเครื่องคอมพิวเตอร์', NULL, 'พนักงานเครื่องคอมพิวเตอร์', NULL),
('83', '83', 'พนักงานประชาสัมพันธ์', NULL, 'พนักงานประชาสัมพันธ์', NULL),
('84', '84', 'พนักงานธุรการ (พัสดุ)', NULL, 'พนักงานธุรการ (พัสดุ)', NULL),
('85', '85', 'พนักงานกายภาพบำบัด', NULL, 'พนักงานกายภาพบำบัด', NULL),
('86', '86', 'พนักงานการตลาด', NULL, 'พนักงานการตลาด', NULL),
('87', '87', 'เจ้าหน้าที่ตรวจการนอนหลับ', NULL, 'เจ้าหน้าที่ตรวจการนอนหลับ', NULL),
('88', '88', 'วิศวกรระบบเครือข่าย', NULL, 'วิศวกรระบบเครือข่าย', NULL),
('89', '89', 'พยาบาล', NULL, 'พยาบาล', NULL),
('90', '90', 'พนักงานบริหารงานทั่วไป (บุคคล)', NULL, 'พนักงานบริหารงานทั่วไป (บุคคล)', NULL),
('91', '91', 'เจ้าหน้าที่การเงินและบัญชี', NULL, 'เจ้าหน้าที่การเงินและบัญชี', NULL),
('92', '92', 'พนักงานต้อนรับ', NULL, 'พนักงานต้อนรับ', NULL),
('93', '93', 'ผู้จัดการ (TTCM)', NULL, 'ผู้จัดการ (TTCM)', NULL),
('94', '94', 'พนักงานธุรการ (กายภาพบำบัด)', NULL, 'พนักงานธุรการ (กายภาพบำบัด)', NULL),
('95', '95', 'พนักงานผู้ช่วยทางการแพทย์ (กายภาพบำบัด)', NULL, 'พนักงานผู้ช่วยทางการแพทย์ (กายภาพบำบัด)', NULL),
('96', '96', 'พนักงานโภชนาการ (กุ๊ก)', NULL, 'พนักงานโภชนาการ (กุ๊ก)', NULL),
('97', '97', 'พนักงานโภชนาการ (ผู้ช่วยกุ๊ก)', NULL, 'พนักงานโภชนาการ (ผู้ช่วยกุ๊ก)', NULL),
('98', '98', 'ผู้อำนวยการศูนย์', NULL, 'ผู้อำนวยการศูนย์', NULL),
('99', '99', 'รองผู้อำนวยการ', NULL, 'รองผู้อำนวยการ', NULL),
('01', '01', 'หัวหน้าศูนย์', NULL, 'หัวหน้าศูนย์', NULL),
('02', '02', 'รักษาการแทน เลขานุการศูนย์', NULL, 'รักษาการแทน เลขานุการศูนย์', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chkup_checkup`
--
ALTER TABLE `chkup_checkup`
  ADD PRIMARY KEY (`checkup_id`);

--
-- Indexes for table `chkup_location`
--
ALTER TABLE `chkup_location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `chkup_package`
--
ALTER TABLE `chkup_package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `tb_location1`
--
ALTER TABLE `tb_location1`
  ADD PRIMARY KEY (`Ward_code`);

--
-- Indexes for table `tb_nuser`
--
ALTER TABLE `tb_nuser`
  ADD PRIMARY KEY (`NUM_OT`);

--
-- Indexes for table `tb_nward`
--
ALTER TABLE `tb_nward`
  ADD PRIMARY KEY (`News_id`,`ward_code`);

--
-- Indexes for table `tb_person`
--
ALTER TABLE `tb_person`
  ADD PRIMARY KEY (`NUM_OT`);

--
-- Indexes for table `tb_position`
--
ALTER TABLE `tb_position`
  ADD PRIMARY KEY (`position_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chkup_checkup`
--
ALTER TABLE `chkup_checkup`
  MODIFY `checkup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `chkup_location`
--
ALTER TABLE `chkup_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chkup_package`
--
ALTER TABLE `chkup_package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
