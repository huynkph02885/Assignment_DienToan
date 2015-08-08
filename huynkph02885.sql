-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2015 at 07:02 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `huynkph02885`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

DROP TABLE IF EXISTS `chitiethoadon`;
CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `chitiethoadon_id` int(11) NOT NULL AUTO_INCREMENT,
  `sanpham_id` int(11) NOT NULL,
  `hoadon_id` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `khuyenmai` varchar(30) NOT NULL,
  `baohanh` int(11) NOT NULL,
  PRIMARY KEY (`chitiethoadon_id`),
  KEY `chitiethoadon_hoadon` (`hoadon_id`),
  KEY `chitiethoadon_sanpham` (`sanpham_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`chitiethoadon_id`, `sanpham_id`, `hoadon_id`, `soluongmua`, `khuyenmai`, `baohanh`) VALUES
(1, 1, 2, 1, 'Có Khuyến Mại', 3),
(2, 2, 1, 4, 'không Khuyến Mại', 4),
(8, 1, 3, 3, 'Khuyến Mại 30%', 12),
(10, 3, 2, 3, 'Khuyến Mại 30%', 12);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `hoadon_id` int(11) NOT NULL AUTO_INCREMENT,
  `khachhang_id` int(11) NOT NULL,
  `ngaymua` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`hoadon_id`),
  KEY `hoadon_khachhang` (`khachhang_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`hoadon_id`, `khachhang_id`, `ngaymua`) VALUES
(1, 1, '2015-07-21 11:42:56'),
(2, 2, '2015-07-23 01:30:10'),
(3, 1, '2015-07-03 01:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `khachhang_id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(11) NOT NULL,
  PRIMARY KEY (`khachhang_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`khachhang_id`, `ten`, `email`, `phone`) VALUES
(1, 'nguyễn khắc huy', 'huy@gmail.com', 1649884143),
(2, 'nguyễn quỳnh trang', 'trang@gmail.com', 1665045313);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

DROP TABLE IF EXISTS `loaisanpham`;
CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `loaisanpham_id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(20) NOT NULL,
  PRIMARY KEY (`loaisanpham_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`loaisanpham_id`, `ten`) VALUES
(1, 'Xe Máy'),
(2, 'Xe Đạp'),
(4, 'Xe Hơi');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `sanpham_id` int(11) NOT NULL AUTO_INCREMENT,
  `loaisanpham_id` int(11) NOT NULL,
  `ten` varchar(30) NOT NULL,
  `masp` varchar(30) NOT NULL,
  `mota` varchar(90) NOT NULL,
  PRIMARY KEY (`sanpham_id`),
  KEY `sanpham_loaisanpham` (`loaisanpham_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`sanpham_id`, `loaisanpham_id`, `ten`, `masp`, `mota`) VALUES
(1, 1, 'Xe Máy Wave', 'XM002', 'Xe gắn máy việt nam sản xuất'),
(2, 2, 'Xe đạp Thống nhất', 'XD001', 'Xe Việt nam do công ty thống nhất sản xuât'),
(3, 4, 'Xe Hơi Benley', 'XH001', 'Xe hơi sang trọng'),
(5, 1, 'Xe Máy SH', 'XM001', 'xe Máy xịn'),
(6, 4, 'Xe Hơi BMW', 'XH002', 'Xe Hơi Sang Trọng, giá cả hợp lý');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_hoadon` FOREIGN KEY (`hoadon_id`) REFERENCES `hoadon` (`hoadon_id`),
  ADD CONSTRAINT `chitiethoadon_sanpham` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`sanpham_id`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_khachhang` FOREIGN KEY (`khachhang_id`) REFERENCES `khachhang` (`khachhang_id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_loaisanpham` FOREIGN KEY (`loaisanpham_id`) REFERENCES `loaisanpham` (`loaisanpham_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
