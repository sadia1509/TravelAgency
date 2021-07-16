-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 07:56 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(50) NOT NULL,
  `Full_name` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `Phone_number` varchar(225) DEFAULT NULL,
  `Mobile_number` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `Full_name`, `Email`, `password`, `Phone_number`, `Mobile_number`) VALUES
(1, 'Sadia Afrose', 'sadiaafrose@gmail.com', '12345', '(02)805552', '01789222345'),
(2, 'Farah Ahmed', 'farahahmed@gmail.com', '123', '(02)987891', '01552348762'),
(3, 'Zakia Sultana', 'zakiasultana@gmail.com', '987', '(02)987887', '01552348777'),
(5, 'Rihan Arfan', 'rihanarfan@gmail.com', '888', '(02)333222', '01792552199'),
(6, 'Tajji Islam', 'tazziislam@gmail.com', '777', '(02)987887', '01987267822'),
(9, 'Fatima Zahan', 'fatimazahan@gmail.com', '222', '(02)987883', '01552348772'),
(10, 'Raisa Islam', 'raisaislam@gmail.com', '222', '(02)987822', '01777777777'),
(11, 'Jasif kabir', 'jasifkabir@gmail.com', '0998', '', '01792552177'),
(13, 'Mahfuza Tasnim', 'mahfuza@gmail.com', '234', '(02)987232', '01552348771');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(50) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Road` varchar(225) NOT NULL,
  `Area` varchar(225) NOT NULL,
  `City` varchar(225) NOT NULL,
  `Telephone_number` varchar(225) NOT NULL,
  `Expense` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `Name`, `Road`, `Area`, `City`, `Telephone_number`, `Expense`) VALUES
(4, 'Radisson Blu', '104', 'Airport Road', 'Dhaka', '(02)898989', 20000),
(5, '3 star', 'link road', 'Badda', 'Dhaka', '(02)222222', 4000),
(6, 'Westin', '123', 'Gulshan', 'Dhaka', '(02)245454', 15000),
(7, 'Guest House', '23', 'Mirpur', 'Dhaka', '(02)432678', 4500),
(8, 'Blink', '27', 'Dhanmindi', 'Dhaka', '(02)902234', 4000),
(19, 'Radisson Blu ctg.', '104', 'Shahid Saifuddin Khaled Rd', 'Chittagong', '(02)898989', 9000),
(20, 'Hotel Agrabad', '45', 'Agrabad ', 'Chittagong', '(02)222222', 4000),
(21, 'Orchid Business Hotel', '123', 'Sheikh Mujib Rd', 'Chittagong', '(02)245454', 15000),
(22, 'Hotel Swiss Garden International', '23', 'Commerce College Road', 'Chittagong', '(02)432678', 2500),
(23, 'Asain SR Hotel', '27', 'Station Road', 'Chittagong', '(02)902234', 4000),
(29, 'Bottomhill Palace Hotel', '104', 'Dargah Gate', 'Sylhet', '(02)898989', 5000),
(30, 'Rose View', '104', 'Dargah Gate', 'Sylhet', '(02)222222', 10000),
(31, 'La Vista Hotel', '123', 'Lamabazar', 'Sylhet', '(02)245454', 7000),
(32, 'Guest House syl', '23', 'Station Road', 'Sylhet', '(02)432678', 1000),
(33, 'Hotel Star Pacific', '27', 'East Dargah Gate', 'Sylhet', '(02)902234', 4000),
(54, 'Bottomhill Palace Hotel khulna', '104', 'Dargah Gate', 'Khulna', '(02)898989', 5000),
(55, 'Rose View khulna', '104', 'Bag erhat', 'Khulna', '(02)222222', 10000),
(56, 'La Vista Hotel khulna', '123', 'Station Road', 'Khulna', '(02)245454', 7000),
(57, 'Guest House khulna', '23', 'Sen Road', 'Khulna', '(02)432678', 1000),
(58, 'Hotel Star Pacific khulna', '27', 'East College Gate', 'Khulna', '(02)902234', 4000),
(59, 'Bottomhill Palace Hotel raj', '104', 'Dargah Gate', 'Rajshahi', '(02)898989', 5000),
(60, 'Rose View raj', '104', 'Bagerhat', 'Rajshahi', '(02)222222', 10000),
(61, 'La Vista Hotel raj', '123', 'Station Road', 'Rajshahi', '(02)245454', 7000),
(62, 'Guest House raj', '23', 'Sen Road', 'Rajshahi', '(02)432678', 1000),
(63, 'Hotel Star Pacific raj', '27', 'East College Gate', 'Rajshahi', '(02)902234', 4000),
(69, 'Q Palace', '104', 'Main Town', 'Comilla', '(02)898989', 20000),
(70, 'Sky Vision', 'link road', 'Moynamoti', 'Comilla', '(02)222222', 4000),
(71, 'Sagar Mahal Tourist Lodge', '123', 'Moynamoti', 'Comilla', '(02)245454', 15000),
(72, 'Guest House com', '23', 'Station Road', 'Comilla', '(02)432678', 4500),
(73, 'Blinking', '27', 'Main Town', 'Comilla', '(02)902234', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `multiplaces`
--

CREATE TABLE `multiplaces` (
  `id` int(50) NOT NULL,
  `pid1` varchar(255) DEFAULT NULL,
  `pid2` varchar(255) DEFAULT NULL,
  `pid3` varchar(255) DEFAULT NULL,
  `pid4` varchar(255) DEFAULT NULL,
  `pid5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multiplaces`
--

INSERT INTO `multiplaces` (`id`, `pid1`, `pid2`, `pid3`, `pid4`, `pid5`) VALUES
(77, 'Bangladesh National Zoo', 'liberation war meuseum ', NULL, NULL, NULL),
(78, 'Bangladesh National Zoo', 'liberation war meuseum ', NULL, NULL, NULL),
(79, 'Bangladesh National Zoo', 'liberation war meuseum ', NULL, NULL, NULL),
(80, 'Bangladesh National Zoo', 'liberation war meuseum ', NULL, NULL, NULL),
(81, 'Bangladesh National Zoo', 'liberation war meuseum ', NULL, NULL, NULL),
(88, 'Ahsan Manzil', 'Bangladesh National Zoo', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `Code` int(50) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Duration(Days)` int(50) NOT NULL,
  `place1` varchar(255) NOT NULL,
  `place2` varchar(255) NOT NULL,
  `place3` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `pic_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`Code`, `Name`, `Duration(Days)`, `place1`, `place2`, `place3`, `price`, `pic_id`) VALUES
(5, 'Mini Dhaka', 3, 'Ahsan Manzil', 'Lalbagh Fort', 'Jatiya Sangsad Bhaban', 2500, NULL),
(6, 'Chetona', 3, 'Shaheed Minar', 'Liberation War Museum', 'Jatiyo Sriti Shoudho', 500, NULL),
(7, 'Museum DHK', 3, 'Bangladesh National Museum', 'Bangabandhu Memorial Museum', 'Drik Gallery', 2000, NULL),
(8, 'Museum CTG', 3, 'Ethnological Museum', 'Zia Memorial Museum', 'Bajaj Museum', 1500, NULL),
(9, 'Mini Chittagoag', 3, 'Avaymitra Ghat', 'Chittagong War Cemetery', 'Dolphin', 5000, NULL),
(10, 'Mini Rajshahi', 3, 'Bot Tola (Padma River) Police Lines', 'Aquarium Gallery', 'Boro Kuthi', 2000, NULL),
(11, 'Museum KHU', 3, 'Khulna Museum', 'Archeological Museum', 'Krishi Prokousol Jontropati Museum', 1500, NULL),
(12, 'Mini ', 0, 'Sugandhi', '', '', 0, NULL),
(13, 'Mini Khulna', 3, 'Sugandhi', 'Purakhali Lake', 'AKASHLINA Tourist Spot', 2000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment_system`
--

CREATE TABLE `payment_system` (
  `Code` int(50) NOT NULL,
  `Type` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_system`
--

INSERT INTO `payment_system` (`Code`, `Type`) VALUES
(1, 'Mastercard'),
(2, 'VISA');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(50) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `path1` varchar(255) DEFAULT NULL,
  `path2` varchar(255) DEFAULT NULL,
  `path3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `Name`, `path1`, `path2`, `path3`) VALUES
(7, 'p1', 'pic/pac/ahsan.jpg', 'pic/pac/jat.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tourist_places`
--

CREATE TABLE `tourist_places` (
  `id` int(50) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Area` varchar(500) NOT NULL,
  `City` varchar(225) NOT NULL,
  `Price` double NOT NULL,
  `pic_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourist_places`
--

INSERT INTO `tourist_places` (`id`, `Name`, `Area`, `City`, `Price`, `pic_id`) VALUES
(20, 'Dhakeshwari Temple', 'Old Dhaka', 'Dhaka', 250, NULL),
(21, 'Ahsan Manzil', 'Old Dhaka', 'Dhaka', 200, NULL),
(22, 'Bangladesh National Zoo', 'Mirpur', 'Dhaka', 200, NULL),
(23, 'liberation war meuseum ', 'Shegunbagicha', 'Dhaka', 300, NULL),
(24, 'Botanical Garden', 'Mirpur', 'Dhaka', 100, NULL),
(25, 'Supto Dhara Waterfall ', 'Suptodhara Eco Park', 'Chittagong', 250, NULL),
(26, 'Patenga', 'Sea Beach Road', 'Chittagong', 400, NULL),
(27, 'Chandranath Temple', 'Shitakundo', 'Chittagong', 300, NULL),
(28, 'Foys Lake ', 'Pahartoli', 'Chittagong', 500, NULL),
(29, 'Shipti Park', 'Main Town', 'Chittagong', 100, NULL),
(30, 'Lalakhal', 'Jointapur', 'Sylhet', 250, NULL),
(31, 'Ratargul Swamp Forest', 'Ratargul', 'Sylhet', 200, NULL),
(32, 'Jaflong', 'Guainghat', 'Sylhet', 200, NULL),
(33, 'Madhopkundo', 'Srimongol', 'Sylhet', 300, NULL),
(34, 'Luvachora', 'Kanaighat', 'Sylhet', 100, NULL),
(35, 'Shat Gambuj Mosque', 'Bagerhat', 'Khulna', 250, NULL),
(36, 'Tomb of Khan Jahan Ali', 'Lobon Chora Area', 'Khulna', 200, NULL),
(37, 'Kuthibari', 'Kushtia', 'Khulna', 200, NULL),
(38, 'Rabindranath Memorial Museum', 'Main Town', 'Khulna', 300, NULL),
(39, 'Chachra Shiv Mandir', 'Station Road', 'Khulna', 100, NULL),
(40, 'Bodo Kuthi', 'Bagerhat', 'Rajshahi', 250, NULL),
(41, 'Puthia Mosque', 'Lobon Chora Area', 'Rajshahi', 200, NULL),
(42, 'Choto Shona Mosque', 'Kushtia', 'Rajshahi', 200, NULL),
(43, 'Varendra Research Museum', 'Main Town', 'Rajshahi', 300, NULL),
(44, 'The Rajshahi Palace', 'Main Town', 'Rajshahi', 300, NULL),
(45, 'Mainamati War Cemetery', 'Comilla Cantonment', 'Comilla', 250, NULL),
(46, 'Lalmai Pahar', 'Moynamoti', 'Comilla', 200, NULL),
(47, 'Dharmasagar Lake', 'Main Town', 'Comilla', 200, NULL),
(48, 'River Gomti', 'Moynamoti', 'Comilla', 300, NULL),
(49, 'Itakhola Mura', 'Station Road', 'Comilla', 100, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transports`
--

CREATE TABLE `transports` (
  `id` int(50) NOT NULL,
  `Type` varchar(225) NOT NULL,
  `fare` double NOT NULL,
  `Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transports`
--

INSERT INTO `transports` (`id`, `Type`, `fare`, `Location`) VALUES
(7, 'Bus', 1500, 'Dhaka'),
(8, 'Train', 2000, 'Dhaka'),
(9, 'Micro Bus', 5000, 'Dhaka'),
(10, 'Tempo', 500, 'Dhaka'),
(11, 'Bus', 1500, 'Chittagong'),
(12, 'Train', 2000, 'Chittagong'),
(13, 'Micro Bus', 5000, 'Chittagong'),
(14, 'Tempo', 500, 'Chittagong'),
(15, 'Bus', 1500, 'Sylhet'),
(16, 'Train', 2000, 'Sylhet'),
(17, 'Micro Bus', 5000, 'Sylhet'),
(18, 'Tempo', 500, 'Sylhet'),
(19, 'Bus', 1500, 'Khulna'),
(20, 'Train', 2000, 'Khulna'),
(21, 'Micro Bus', 5000, 'Khulna'),
(22, 'Tempo', 500, 'Khulna'),
(23, 'Bus', 1500, 'Rajshahi'),
(24, 'Train', 2000, 'Rajshahi'),
(25, 'Micro Bus', 5000, 'Rajshahi'),
(26, 'Tempo', 500, 'Rajshahi'),
(27, 'Bus', 1500, 'Comilla'),
(28, 'Train', 1000, 'Comilla'),
(29, 'Micro Bus', 3000, 'Comilla'),
(30, 'Tempo', 100, 'Comilla');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `Full_name` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `Building_no` varchar(225) NOT NULL,
  `Road` varchar(225) NOT NULL,
  `Area` varchar(225) NOT NULL,
  `City` varchar(225) NOT NULL,
  `Phone_number` varchar(225) DEFAULT NULL,
  `Mobile_number` varchar(225) NOT NULL,
  `selected-id` int(50) DEFAULT NULL,
  `Card_name` varchar(50) DEFAULT NULL,
  `Card_no` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Full_name`, `Email`, `password`, `Building_no`, `Road`, `Area`, `City`, `Phone_number`, `Mobile_number`, `selected-id`, `Card_name`, `Card_no`) VALUES
(1, 'Shima Akhtar', 'shima@gmail.com', '222', 'y5', 'Moilar Mor', 'Uttara', 'Dhaka', '(02)999192', '01784312214', NULL, NULL, NULL),
(2, 'samiha ahmed', 'samiha@gmail.com', '1234', 't56', 'link road', 'Gulshan-1', 'Dhaka', '(02)987892', '01987267822', NULL, NULL, NULL),
(6, 'Laila Rahman', 'laila@gmail.com', 'www', 'se', 'link road', 'Badda', 'Dhaka', '', '01999267823', NULL, '', ''),
(7, 'Abdulillah', 'abdullah@gmail.com', '2222', 'p0', 'Green road', 'Farmgate', 'Dhaka', '(02)019283', '01999992222', NULL, NULL, NULL),
(8, 'Rihan Arfan', 'rihan@gmail.com', '123', 'l2', '17', 'Uttara', 'Dhaka', '(02)987881', '01777766366', 110, NULL, NULL),
(9, 'mim', 'mimi@gmail.com', '23', '5', 'loi', 'mit', 'ctg', '0171082037', '0171082037', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_selection`
--

CREATE TABLE `user_selection` (
  `id` int(50) NOT NULL,
  `u_id` int(50) DEFAULT NULL,
  `place_id` int(50) DEFAULT NULL,
  `hotel_id` int(50) DEFAULT NULL,
  `trasport_id` int(50) DEFAULT NULL,
  `package_code` int(50) DEFAULT NULL,
  `payment_code` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_selection`
--

INSERT INTO `user_selection` (`id`, `u_id`, `place_id`, `hotel_id`, `trasport_id`, `package_code`, `payment_code`) VALUES
(110, 8, 88, 4, 9, 5, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `multiplaces`
--
ALTER TABLE `multiplaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid5` (`pid5`),
  ADD KEY `pid4` (`pid4`),
  ADD KEY `pid3` (`pid3`),
  ADD KEY `pid2` (`pid2`),
  ADD KEY `pid1` (`pid1`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`Code`),
  ADD KEY `Packages_fk0` (`pic_id`);

--
-- Indexes for table `payment_system`
--
ALTER TABLE `payment_system`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `tourist_places`
--
ALTER TABLE `tourist_places`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Name` (`Name`),
  ADD KEY `Tourist_places_fk0` (`pic_id`);

--
-- Indexes for table `transports`
--
ALTER TABLE `transports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Card_no_2` (`Card_no`),
  ADD UNIQUE KEY `Card_no_3` (`Card_no`),
  ADD KEY `Users_fk0` (`selected-id`);

--
-- Indexes for table `user_selection`
--
ALTER TABLE `user_selection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `User_selection_fk2` (`hotel_id`),
  ADD KEY `User_selection_fk3` (`trasport_id`),
  ADD KEY `User_selection_fk4` (`package_code`),
  ADD KEY `User_selection_fk5` (`payment_code`),
  ADD KEY `User_selection_fk1` (`place_id`),
  ADD KEY `User_selection_fk6` (`u_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `multiplaces`
--
ALTER TABLE `multiplaces`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `Code` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payment_system`
--
ALTER TABLE `payment_system`
  MODIFY `Code` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tourist_places`
--
ALTER TABLE `tourist_places`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `transports`
--
ALTER TABLE `transports`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_selection`
--
ALTER TABLE `user_selection`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `multiplaces`
--
ALTER TABLE `multiplaces`
  ADD CONSTRAINT `f0` FOREIGN KEY (`pid1`) REFERENCES `tourist_places` (`Name`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `f1` FOREIGN KEY (`pid2`) REFERENCES `tourist_places` (`Name`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `f2` FOREIGN KEY (`pid3`) REFERENCES `tourist_places` (`Name`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `f3` FOREIGN KEY (`pid4`) REFERENCES `tourist_places` (`Name`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `f4` FOREIGN KEY (`pid5`) REFERENCES `tourist_places` (`Name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `Packages_fk0` FOREIGN KEY (`pic_id`) REFERENCES `pictures` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `tourist_places`
--
ALTER TABLE `tourist_places`
  ADD CONSTRAINT `Tourist_places_fk0` FOREIGN KEY (`pic_id`) REFERENCES `pictures` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `Users_fk0` FOREIGN KEY (`selected-id`) REFERENCES `user_selection` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `user_selection`
--
ALTER TABLE `user_selection`
  ADD CONSTRAINT `User_selection_fk1` FOREIGN KEY (`place_id`) REFERENCES `multiplaces` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `User_selection_fk2` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `User_selection_fk3` FOREIGN KEY (`trasport_id`) REFERENCES `transports` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `User_selection_fk4` FOREIGN KEY (`package_code`) REFERENCES `packages` (`Code`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `User_selection_fk5` FOREIGN KEY (`payment_code`) REFERENCES `payment_system` (`Code`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `User_selection_fk6` FOREIGN KEY (`u_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
