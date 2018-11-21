-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 01:20 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafepage`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(9) NOT NULL,
  `customerName` varchar(255) NOT NULL,
  `customerEmail` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customeroder`
--

CREATE TABLE `customeroder` (
  `customerID` int(9) NOT NULL,
  `customerName` varchar(255) NOT NULL,
  `customerEmail` varchar(255) NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `deal` varchar(10) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customeroder`
--

INSERT INTO `customeroder` (`customerID`, `customerName`, `customerEmail`, `phonenumber`, `deal`, `message`) VALUES
(1, 'hoang', 'hoangwcg@gmail.com', 94744376, '1', 'Lorem ips'),
(2, 'THUY', '123123123', 0, '2', 'ÁDÂCSCÂCC'),
(17, 'trong', 'hoafn', 0, ' ', '123'),
(18, 'hoang', '09123123', 0, '1', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventID` int(9) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `eventDate` date NOT NULL,
  `eventHour` varchar(255) NOT NULL,
  `eventContent` varchar(255) NOT NULL,
  `eventImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventID`, `eventName`, `eventDate`, `eventHour`, `eventContent`, `eventImage`) VALUES
(1, 'House COFFEE: TỰ HÀO SINH RA TỪ ĐẤT VIỆT, 1999', '2018-11-20', '8:30', '', 'TUHAODATVIET'),
(2, 'CUỘC THI “CHIA SẺ KHOẢNH KHẮC TẬN HƯỞNG FREEZE TRÀ XANH”', '2018-11-20', '7:00', '', 'CHIASEANH'),
(3, 'BIẾT TẬN HƯỞNG, UỐNG FREEZE TRÀ XANH!', '2018-11-20', '7:30', '', 'Freezeevent');

-- --------------------------------------------------------

--
-- Table structure for table `listproduct`
--

CREATE TABLE `listproduct` (
  `productID` int(9) NOT NULL,
  `productType` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productImage` varchar(255) NOT NULL,
  `productPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `listproduct`
--

INSERT INTO `listproduct` (`productID`, `productType`, `productName`, `productImage`, `productPrice`) VALUES
(2, 'Cà phê phin', 'Phin sửa nóng', 'PHIN-SUA-NONG', 29000),
(3, 'Cà phê phin', 'Phin đen đá', 'PHIN-DEN-DA', 29000),
(4, 'Cà phê phin', 'Phin sửa đá', 'PHIN-SUA-DA', 29000),
(5, 'Cà phê phin', 'Phin đen nóng', 'PHIN-DEN-NONG', 29000),
(6, 'Freeze (Đá xay)', 'Freeze trà xanh', 'FREEZE-TRA-XANH', 49000),
(7, 'Freeze (Đá xay)', 'Caramel phin cafe', 'CARAMEL-PHIN-CAFE', 49000),
(8, 'Freeze (Đá xay)', 'Classic phin freeze', 'CLASSIC-PHIN-FREEZE', 49000),
(9, 'Freeze (Đá xay)', 'Freeze sô-cô-la', 'CHOCOLATE-FREEZE', 49000),
(10, 'Bánh mì', 'Xíu nại', 'BMXIUMAI', 19000),
(11, 'Bánh mì', 'Chả lụa xá xíu', 'BMCHALUAXAXIU', 19000),
(12, 'Bánh mì', 'Gà xé nướng tương', 'BMGAXE', 19000),
(13, 'Bánh mì', 'Thịt nướng', 'BMTHITNUONG', 19000),
(14, 'Trà', 'Trà thạch vải', 'TRATHACHVAI', 39000),
(15, 'Trà', 'Trà thạch đào', 'TRATHACHDAO', 39000),
(16, 'Trà', 'Trà sen vàng', 'TRASENVANG', 39000),
(17, 'Trà', 'Trà thanh đào', 'TRATHANHDAO', 39000),
(18, 'CÀ PHÊ ESPRESSO', 'Caramel Macchiato', 'CARAMEL-MACCHIATO', 54000),
(19, 'CÀ PHÊ ESPRESSO', 'LATTE', 'LATTE', 54000),
(20, 'CÀ PHÊ ESPRESSO', 'CAPPUCINO', 'CAPPUCINO', 54000),
(21, 'CÀ PHÊ ESPRESSO', 'AMERICANO', 'AMERICANO', 44000),
(22, 'CÀ PHÊ ESPRESSO', 'ESPRESSO', 'ESPRESSO', 44000);

-- --------------------------------------------------------

--
-- Table structure for table `pagecontent`
--

CREATE TABLE `pagecontent` (
  `titleID` int(9) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pagecontent`
--

INSERT INTO `pagecontent` (`titleID`, `title`, `content`) VALUES
(1, 'Cafe và những câu chuyện !!', 'Từ rất lâu chuyện uống cà phê đã trở thành một trong những niềm vui tao nhã trong cuộc sống bận rộn hàng ngày.\r\nNhiều thế kỷ trôi qua,cà phê vẫn mang lại sự kích thích giúp bạn tỉnh táo hơn,dù bạn đang ngồi ở một chân trời nào đi nữa.\r\nĐây đó nơi những góc phố bạn dừng chân, một quán cà phê bình dân thường được biết đếnnhư một “đại học một ngàn” nghĩa là bạn chỉ cần bỏ ra dăm ba ngàn để gọi một ly cà phê và thêm một hai ngàn cho tờ báo.Nơi đó, những người với tâm hồn ham học hỏi,những thi sĩ, doanh nhân, công nhân….đều có thểngồi lại với nhau bàn luận dăm ba câu chuyện');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `customeroder`
--
ALTER TABLE `customeroder`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `listproduct`
--
ALTER TABLE `listproduct`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `pagecontent`
--
ALTER TABLE `pagecontent`
  ADD PRIMARY KEY (`titleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customeroder`
--
ALTER TABLE `customeroder`
  MODIFY `customerID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `listproduct`
--
ALTER TABLE `listproduct`
  MODIFY `productID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pagecontent`
--
ALTER TABLE `pagecontent`
  MODIFY `titleID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
