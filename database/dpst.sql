-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 05:35 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpst`
--

-- --------------------------------------------------------

--
-- Table structure for table `dpst04`
--

CREATE TABLE `dpst04` (
  `number` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `nick_name` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `heart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dpst04`
--

INSERT INTO `dpst04` (`number`, `student_id`, `first_name`, `last_name`, `nick_name`, `facebook`, `heart`) VALUES
(1, 50005, 'ชนภัทร', 'เสวันตุ่น', 'ปรัชญ์', 'https://www.facebook.com/prat.chanpat.5', 0),
(2, 50006, 'ศรัณย์รพี', 'เหล็กยอง', 'ทิวลิป', 'https://www.facebook.com/ttutlip', 0),
(3, 50013, 'กิตติศักดิ์', 'ทรงพูล', 'บิกแบง ', 'https://www.facebook.com/bigbangloveball', 0),
(4, 50067, 'จิรกิตต์ ', 'ศรีศักดา', 'ปังปอนด์', 'https://www.facebook.com/profile.php?id=100024084587582', 0),
(5, 50201, 'ชัญญานุช', 'บุตรต๋า', 'แก้ม', 'https://www.facebook.com/chanyanuch.bouthta', 0),
(6, 50241, 'ธนพร', 'ใจเงิน', 'ธัญญ่า', 'https://www.facebook.com/profile.php?id=100021295370779', 0),
(7, 50245, 'ปรมาจารย์', 'นาคมีศรี', 'ต้นไม้', 'https://www.facebook.com/paramacharn.nakmeesri', 0),
(8, 50259, 'ณัฐชนน ', 'คิดหงัน', 'โปรเกรส', 'https://www.facebook.com/profile.php?id=100010520144822', 0),
(9, 50409, 'ฉันทกร', 'โพธิเย็น', 'กัส', 'https://www.facebook.com/profile.php?id=100027643062058', 0),
(10, 50442, 'เทพฤทธิ์', 'พูนคำ', 'ปังปอนด์', 'https://www.facebook.com/profile.php?id=100026173836778', 0),
(11, 50520, 'ชนกนันท์', 'แท่นดี', 'มิ้นท์', 'https://www.facebook.com/profile.php?id=100021042342580', 0),
(12, 50621, 'พฤทธิพร', 'มหายศ', 'บรุ๊ค', 'https://www.facebook.com/brook.uooi', 0),
(13, 50643, 'ภูบดี', 'มณียะ', 'ม่อนดอย', 'https://www.facebook.com/profile.php?id=100024433941242', 0),
(15, 50700, 'นิติภูมิ', 'มหาไม้', 'ภูมิ', 'https://www.facebook.com/profile.php?id=100028957891327', 0),
(16, 50741, 'ปัณณวิชญ์', 'สิงห์ต๊ะ', 'นินจา', 'https://www.facebook.com/profile.php?id=100003788892399', 0),
(17, 50743, 'กีรติกาญจน์', 'สุวรรณพงษ์', 'เนเน่', 'https://www.facebook.com/profile.php?id=100025782430649', 0),
(18, 50763, 'ธาดา ', 'ตาวงค์', 'หยก', 'https://www.facebook.com/profile.php?id=100013821067708', 0),
(19, 50770, 'ณัฐณิชา', 'คงประยูร', 'เกรซ', 'https://www.facebook.com/nutnicha.kongprayoon.3', 0),
(20, 50789, 'ภูริชา', 'กัณฑสิมาธิติ', 'อิ่มจัง', 'https://www.facebook.com/profile.php?id=100015520682437', 0),
(21, 50790, 'สุพิชฌาย์', 'วรกุล', 'พิซซ่า', 'https://www.facebook.com/profile.php?id=100005904302796', 0),
(22, 50806, 'ลยาวีร์', 'กัลยาวีร์', 'ซีซ่าส์', 'https://www.facebook.com/Zeza.layawee', 0),
(23, 50809, 'จิณณวัทย์', 'ทิพยะ', 'พีพี', 'https://www.facebook.com/profile.php?id=100009326370106', 0),
(24, 50825, 'สุชญา', 'เซี่ยงวงษ์', 'พรีม', 'https://www.facebook.com/profile.php?id=100005535309469', 0),
(26, 50896, 'ภูริชญา', 'สุทัศนรักษ์', 'ปาล์มมี่', 'https://www.facebook.com/profile.php?id=100029788339558', 0),
(27, 52630, 'วิชญาดา', 'วุฒิเสน', 'ญาดา', 'https://www.facebook.com/wichayada.wutthisen', 0),
(28, 52813, 'วิทวินท์', 'คำแก้ว', 'แต๊งค์', 'https://www.facebook.com/profile.php?id=100022953890239', 0),
(29, 53158, 'ณภัชนันท์', 'ลาเสือ', 'เพลง', 'https://www.facebook.com/naphatchanan.lasuea', 0),
(30, 53159, 'ศิรัญญิการ์', 'จินะใจ', 'กะตางค์', 'https://www.facebook.com/siranyika.jinajai', 0),
(31, 53165, 'ณัฐณิชา', 'ฤทัยสวรรค์', 'เหมเหม', 'https://www.facebook.com/muey.nutnicha', 0),
(32, 53166, 'ภัคจิรา', 'ชัยเมืองใจ', 'มีมี่', 'https://www.facebook.com/profile.php?id=100022859822126', 0),
(33, 53170, 'ธนพร ', 'โสมิญะ', 'แพร', 'https://www.facebook.com/sit.pearry', 0),
(35, 53176, 'จ๋อมเมือง', '-', 'จอม', '-', 0),
(36, 53191, 'พรปวีณ์', 'เครือจันต๊ะ', 'พลอย', 'https://www.facebook.com/phorpawee.kueachunta.3', 0),
(37, 53225, 'ณัฏฐณิชา', 'เมืองใจ', 'ฟ้าใส', 'https://www.facebook.com/profile.php?id=100018970604348', 0),
(38, 53226, 'ชลพรรษา', 'เหล่าพุธทา', 'แพรว', 'https://www.facebook.com/profile.php?id=100028937373104', 0),
(40, 53251, 'สานฝัน', 'จันทร์สกุล', 'แตงกวา', 'https://www.facebook.com/cucumis.tangkwa', 0),
(42, 53269, 'พันธุ์ทิพย์', 'สิริภูริภัค', 'อุ๋งอิ๋ง', 'https://www.facebook.com/profile.php?id=100012693014767', 0),
(43, 53276, 'สุภารัตน์ ', 'เผือกพันธ์', 'มายด์', 'https://www.facebook.com/profile.php?id=100026119744855', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dpst05`
--

CREATE TABLE `dpst05` (
  `number` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `nick_name` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `heart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dpst05`
--

INSERT INTO `dpst05` (`number`, `student_id`, `first_name`, `last_name`, `nick_name`, `facebook`, `heart`) VALUES
(1, 49148, 'นันท์นภัส', 'วิภาทิวาภรณ์', 'ไอเฟิร์ม', 'https://www.facebook.com/100010396111060/', 15),
(2, 49170, 'เมฆินทร์', 'อัครเทวาทินทร์', 'ต้นน้ำ', 'https://www.facebook.com/100016732426099/', 15),
(3, 49209, 'แพรวา', 'คิดไชย', 'แพรวา', 'https://www.facebook.com/100003721009797/', 15),
(4, 49293, 'วัชรชัย', 'เลิศสุริยกาญจน์', 'โอ๊ค', 'https://www.facebook.com/oak.watcharachai', 15),
(5, 49299, 'ยุรนันท์', 'บุญมาก', 'นุก', 'https://www.facebook.com/100002058819310/', 15),
(6, 49310, 'ถนัญญา', 'กาละวิน', 'มิวสิค', 'https://www.facebook.com/100022499111622/', 15),
(7, 49532, 'เพียง​ฟ้า​ ', 'วงศ์​คำ', 'โฟกัส', 'https://www.facebook.com/100007046135075/', 15),
(8, 49572, 'ชนาธิป ', 'ทำการดี', 'พี', 'https://www.facebook.com/100013455945391/', 15),
(9, 49584, 'พิมพ์นภัส ', 'ละไม', 'เอื้อ', 'https://www.facebook.com/100024266838764/', 15),
(10, 49702, 'สุพันธ์ธีรา ', 'มนต์ตรีกุศล', 'แองเจิ้ล', 'https://www.facebook.com/100023350473782/', 15),
(11, 49725, 'ปิยนุช ', 'แก้วคำ', 'โยเกิร์ต', 'https://www.facebook.com/100003390844241/', 15),
(12, 49747, 'วสุพล ', 'สันป่าแก้ว', 'บิ้ว', 'https://www.facebook.com/100016991586031/', 15),
(13, 49750, 'อภิชญา ', 'ปัญญา', 'อังอิง', 'https://www.facebook.com/100021926356316/', 15),
(14, 49758, 'ศิรภัสสร', 'ผ่องแล', 'หญิง', 'https://www.facebook.com/100030688593868/', 15),
(15, 49759, 'ภัทราภรณ์ ', 'เฟืองย้อย', 'ครีม', 'https://www.facebook.com/100015837398569/', 15),
(16, 49823, 'จีราวรรณ', 'ดวงไทย', 'ชมพู่', 'https://www.facebook.com/100011401643745/', 15),
(17, 49849, 'ณิชกานต์ ', 'สุวรรณกาศ', 'พิม', 'https://www.facebook.com/100022786441814/', 15),
(18, 49874, 'รัชชานนท์ ', 'มุขแก้ว', 'นนท์', 'https://www.facebook.com/100003266226149/', 15),
(19, 49899, 'ศุภากร ', 'แมนเมธี', 'วิว', 'https://www.facebook.com/100015563771081/', 15),
(20, 49905, 'กฤษฎิ์จิรัฎฐ์', 'ทุนกิจใจ', 'สตางค์', 'https://www.facebook.com/100002865028200/', 15),
(21, 49939, 'จักริน ', 'ธิสกุล', 'เจมส์', 'https://www.facebook.com/100021741553564/', 15),
(22, 49963, 'นันท์นภัส ', 'จันทร์หอม', 'อุ๊งอิ๊ง', 'https://www.facebook.com/100015349750987/', 15),
(23, 51830, 'จิรัชญา ', 'ปันศรีละ', 'ซีอายส์', 'https://www.facebook.com/100021674630897/', 15),
(24, 52307, 'จรรยรัตน์', 'วงศ์วัฒนัย', 'ปอย', 'https://www.facebook.com/100005848206193/', 15),
(25, 52310, 'ปิยธิดา ', 'ญาติฝูง', 'ข้าวฟ่าง', 'https://www.facebook.com/100016129895158/', 15),
(26, 52316, 'ลัญฉกร ', 'เรืองสิทธิพลกุล', 'ไอเดีย', 'https://www.facebook.com/100015933755250/', 15),
(27, 52333, 'ญาณิศา ', 'สิงหราช', 'เฟียต', 'https://www.facebook.com/100014682013587/', 15),
(28, 52334, 'สุชัญญา ', 'สุวรรณเดช', 'นิ้ง', 'https://www.facebook.com/100017150147608/', 15),
(29, 52336, 'สิทธิกร ', 'ศรีฤทธิสกุล', 'ข้าวกล้า', 'https://www.facebook.com/100010682027303/', 15),
(30, 52339, 'อภิวิชญ์ ', 'โนนคําวงศ์', 'แป๊ป', 'https://www.facebook.com/100048145115121/', 15),
(31, 52374, 'วิชญาพร ', 'ธัมทิง', 'วิว', 'https://www.facebook.com/100016382827130/', 15),
(32, 52375, 'นิชชิมา​ ', 'บุญ​ขวัญ​', 'ชะเอม', 'https://www.facebook.com/100017811758458/', 15),
(33, 52388, 'นนท​พรรษ', '​วง​ษ์กัณ​หา', 'นน', 'https://www.facebook.com/nonthapan.wongkanha.9', 15),
(34, 52428, 'วริศรา ', 'วารี', 'เจน', 'https://www.facebook.com/100025028010097/', 15),
(35, 52429, 'กัลยา ', 'นรินทร์วงษ์', 'ออกัส', 'https://www.facebook.com/100021083551084/', 15),
(36, 52431, 'สุปรียา ', 'มาลัย', 'อ้อม', 'https://www.facebook.com/100052741402295/', 15),
(37, 52448, 'กนกพิชญ์ ', 'ถาอ้าย', 'ท๊อป', 'https://www.facebook.com/100015720244482/', 15),
(38, 52451, 'ณัชภัค', 'อินทจักร', 'เนม', 'https://www.facebook.com/100025758695840/', 15),
(39, 52452, 'นริศรา ', 'ปัญญา', 'เฟิร์น', 'https://www.facebook.com/100022928411538/', 15),
(40, 52456, 'ดลพร ', 'รัตนศรทอง', 'เอินเอิน', 'https://www.facebook.com/100004106385766/', 15),
(41, 52461, 'ปรีณาพรรณ​ ', 'ขันแก้ว', 'ผักบุ้ง', 'https://www.facebook.com/100008121431587/', 15),
(42, 52462, 'มาธุสร ', 'ถุงคำ', 'อุ๋มอิ๋ม', 'https://www.facebook.com/100026752473111/', 15),
(43, 52501, 'รัตนาภรณ์', 'ศิลปเจริญ', 'เปิ้ล', 'https://www.facebook.com/100021695031736/', 15),
(44, 52503, 'ธัญญาลักษณ์ ', 'จอมสวรรค์', 'มิน', 'https://www.facebook.com/100010713482250/', 15);

-- --------------------------------------------------------

--
-- Table structure for table `heart`
--

CREATE TABLE `heart` (
  `h_id` int(11) NOT NULL,
  `s4_id` int(11) NOT NULL,
  `s5_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dpst04`
--
ALTER TABLE `dpst04`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `dpst05`
--
ALTER TABLE `dpst05`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `heart`
--
ALTER TABLE `heart`
  ADD PRIMARY KEY (`h_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dpst05`
--
ALTER TABLE `dpst05`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `heart`
--
ALTER TABLE `heart`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
