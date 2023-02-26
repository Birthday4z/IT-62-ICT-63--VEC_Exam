-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 08:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_book`
--

CREATE TABLE `tb_book` (
  `b_id` varchar(6) NOT NULL COMMENT 'รหัสหนังสือ',
  `b_name` text NOT NULL COMMENT 'ชื่อหนังสือ',
  `b_writer` text DEFAULT NULL COMMENT 'ชื่อผู้แต่ง',
  `b_category` int(2) NOT NULL COMMENT 'หมวดหมู่',
  `b_price` int(4) DEFAULT NULL COMMENT 'ราคา'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_book`
--

INSERT INTO `tb_book` (`b_id`, `b_name`, `b_writer`, `b_category`, `b_price`) VALUES
('B00001', 'คู่มือการสอบรับราชการ', 'สมศักดิ์ ตั้งใจ', 1, 299),
('B00002', 'แฮร์รี่ พอตเตอร์', 'J.K. Rowling', 2, 359),
('B00003', 'เย็บ ปัก ถักร้อย', 'สะอาด อิ่มสุข', 3, 249),
('B00004', 'เจ้าชายน้อย', 'อ็องตวน เดอ แซ็งแต็กซูว์เปรี', 2, 355),
('B00005', 'การเขียนโปรแกรมคอมพิวเตอร์ ', 'กิ่งแก้ว กลิ่นหอม', 1, 329);

-- --------------------------------------------------------

--
-- Table structure for table `tb_borrow_book`
--

CREATE TABLE `tb_borrow_book` (
  `br_date_br` date NOT NULL COMMENT 'วันที่ยืมหนังสือ',
  `br_date_rt` date NOT NULL COMMENT 'วันที่คืนหนังสือ',
  `b_id` text NOT NULL COMMENT 'รหัสหนังสือ',
  `m_user` text NOT NULL COMMENT 'ชื่อผู้ใช้',
  `br_fine` int(3) DEFAULT NULL COMMENT 'ค่าปรับ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_borrow_book`
--

INSERT INTO `tb_borrow_book` (`br_date_br`, `br_date_rt`, `b_id`, `m_user`, `br_fine`) VALUES
('2021-08-20', '2021-08-28', 'B00002', 'member03', 25),
('2021-08-21', '2021-08-22', 'B00001', 'member02', 0),
('2021-08-22', '2021-08-26', 'B00001', 'member02', 5),
('2021-08-23', '0000-00-00', 'B00003', 'member01', 0),
('2021-08-23', '0000-00-00', 'B00004', 'member05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `m_user` varchar(40) NOT NULL COMMENT 'ชื่อผู้ใช้',
  `m_pass` text NOT NULL COMMENT 'รหัสผ่าน',
  `m_name` text NOT NULL COMMENT 'ชื่อ-สกุล',
  `m_phone` text DEFAULT NULL COMMENT 'เบอร์โทรศัพท์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`m_user`, `m_pass`, `m_name`, `m_phone`) VALUES
('member01', 'abc1111', 'สมหญิง จริงใจ', '0811111111'),
('member02', 'abc2222', 'สมชาย มั่นคง', '0822222222'),
('member03', 'abc3333', 'สมเกียรติ เก่งกล้า', '0833333333'),
('member04', 'abc4444', 'สมสมร อิ่มเอม', '0844444444'),
('member05', 'abc5555', 'สมรักษ์ สะอาด', '0855555555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_book`
--
ALTER TABLE `tb_book`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`m_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
