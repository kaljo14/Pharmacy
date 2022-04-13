-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 13, 2022 at 02:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `Branch`
--

CREATE TABLE `Branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Branch`
--

INSERT INTO `Branch` (`branch_id`, `branch_name`) VALUES
(1, 'No Licensed pharmacists '),
(2, ' Licensed pharmacists');

-- --------------------------------------------------------

--
-- Table structure for table `Client`
--

CREATE TABLE `Client` (
  `client_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(500) DEFAULT NULL,
  `phone_number` varchar(65) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Client`
--

INSERT INTO `Client` (`client_id`, `first_name`, `last_name`, `address`, `phone_number`) VALUES
(101, ' Dan', 'Scot', 'Lillith Daniel\n935-1670 Neque. St.\nCentennial Delaware 48432', '881013562'),
(102, 'Ben', 'Hudson', 'Colby Bernard 54\n', '881013562'),
(103, 'Mike', 'Kapoor', 'San Bernardino ND 09289', '08881024586'),
(104, 'David', 'Wolski', 'Cecilia Chapman\n711-2880 Nulla St.\nMankato Mississippi', '0888012467'),
(105, 'Blake', 'Kala', '12 KETTERING DRIVE\nUPPER MARLBORO', '358981013562'),
(106, 'Ivan', 'Ivanov', 'Keskuskatu 45', '356881013562'),
(107, 'Pete', 'Soo', 'ul. Filtrowa 68', '359 881 013 562'),
(108, 'Daniel ', 'Nielsen', 'Colby Upper Marlboro', '357264152133'),
(112, 'Kaloyan', 'Ivanov', 'jk Hristo Smirnenski 36', '888012463'),
(113, 'Monika ', 'Skibowska', 'Berssenerstr 4', '21384102344'),
(114, 'Fabien ', 'Clech', '51 rue maréchal galienie', '31542134145'),
(115, 'Monika ', 'Skibowska', 'Berssenerstr 4', '123412534315'),
(116, 'Sven ', 'Riedmann', 'Herrngasse 4', '1111111111111'),
(120, 'Artur ', 'Atojan', 'Rybnicna', '68945848754'),
(132, 'Guillaume', 'Duval', '28 Quai de Dogneville', '12341534325'),
(137, 'kaloyan', 'ivanov', 'jk Hristo Smirnenski 36', '888012463'),
(138, 'alexandros', 'hadjivasili', '22 panathinaiwn egkomi', '8142388012463'),
(139, 'Monika', 'Skibowska', 'Berssenerstr 4', '8823458012463'),
(140, 'alexandros', 'hadjivasili', '22 panathinaiwn egkomi', '123451243'),
(142, 'Fabien', 'Clech', '51 rue maréchal galienie', '12341253213'),
(147, 'Hasan', 'Chaush', 'Gefluegelsteig 89', '0888023673'),
(148, 'Ivan', 'Chaush', 'Gefluegelsteig 89', '0889345654'),
(149, 'Tomasz', 'Kopec', 'Gefluegelsteig 89', '0898123456'),
(150, 'Tomasz', 'Kopec', 'Sulimow', '888012463'),
(151, 'Tomasz', 'Kopec', 'Sulimow', '888012463'),
(152, 'kaloyan', 'ivanov', 'jk Hristo Smirnenski 36', '888012463'),
(153, 'Christiane', 'Sydow', 'Gefluegelsteig 89', '0888012463'),
(156, 'Christiane', 'Sydow', 'Gefluegelsteig 89', '0888012463'),
(157, 'Christophe', 'Curnier', '2 bis rue Montaigne', '0888012463');

-- --------------------------------------------------------

--
-- Table structure for table `Drugs`
--

CREATE TABLE `Drugs` (
  `drug_id` int(11) NOT NULL,
  `dr_name` varchar(50) DEFAULT NULL,
  `producer` varchar(50) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Drugs`
--

INSERT INTO `Drugs` (`drug_id`, `dr_name`, `producer`, `supplier`, `price`, `branch_id`, `quantity`) VALUES
(1000, 'Episirox', 'Medicinbea', 'Supya', 28.99, 1, 10),
(1001, 'Bacronate', 'Medicinbea', 'Supya', 10, 1, 74),
(1002, 'Compasol', 'Medicinbea', 'Supya', 15.85, 1, 113),
(1003, 'Raminavir', 'Medicin Line', 'Supya', 4.99, 1, 48),
(1004, 'Pazoroban', 'Medicin Line', 'Mastered Supplier', 12.39, 1, 30),
(1005, 'Victorate', 'Medicin Line', 'Mastered Supplier', 40.5, 1, 418),
(2000, 'Percozolam Primanesin', 'Cannon Healt', 'Mastered Supplier', 34.59, 2, 63),
(2001, 'Adriarall Afluferol', 'Cannon Healt', 'Mastered Supplier', 27.65, 2, 93),
(2002, 'Bexpril Alglucotaine', 'Cannon Healt', 'Fitorama', 2.99, 2, 53),
(2003, 'Premarudin Cabocine', 'Healtlux', 'Fitorama', 83.45, 2, 41);

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `emp_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `sex` varchar(1) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `commission_percentage` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`emp_id`, `name`, `birth_date`, `sex`, `branch_id`, `commission_percentage`) VALUES
(10, 'SMITH BROWN', '1947-08-14', 'M', 2, 0.07),
(11, 'Ada María', '1972-01-29', 'F', 2, 0.1),
(12, 'CRAIG WRIGHT', '1976-12-15', 'M', 1, 0.05),
(13, 'SCOTT REID', '1978-06-09', 'M', 1, 0.03),
(14, 'Alfonso Ernesto Hernández López', '1980-05-29', 'M', 1, 0.05),
(15, 'WATSON HILL', '2000-02-07', 'F', 2, 0.12);

-- --------------------------------------------------------

--
-- Table structure for table `sale_normal`
--

CREATE TABLE `sale_normal` (
  `sale_id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `drug_id` int(11) DEFAULT NULL,
  `amount_d` int(11) DEFAULT NULL,
  `sale_date` date DEFAULT NULL,
  `cash_or_card` varchar(4) DEFAULT NULL,
  `Commission` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale_normal`
--

INSERT INTO `sale_normal` (`sale_id`, `emp_id`, `drug_id`, `amount_d`, `sale_date`, `cash_or_card`, `Commission`) VALUES
(25, 10, 1002, 2, '2021-10-12', 'Cash', 2.219),
(27, 10, 1005, 2, '2021-11-30', 'Cash', 5.67),
(31, 11, 1004, 1, '2021-11-30', 'Card', 1.239),
(33, 11, 1004, 1, '2021-11-30', 'Card', 1.239),
(35, 12, 1003, 1, '2021-11-30', '', 0.2495),
(37, 14, 1003, 2, '2021-11-30', 'Cash', 0.499),
(38, 14, 1005, 2, '2021-11-30', 'Cash', 4.05),
(39, 15, 1003, 2, '2021-12-01', 'Cash', 1.1976);

-- --------------------------------------------------------

--
-- Table structure for table `sale_prescription`
--

CREATE TABLE `sale_prescription` (
  `sale_id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `drug_id` int(11) DEFAULT NULL,
  `sale_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale_prescription`
--

INSERT INTO `sale_prescription` (`sale_id`, `emp_id`, `client_id`, `drug_id`, `sale_date`) VALUES
(1, 11, 101, 2001, '2021-11-23'),
(3, 11, 102, 2001, '2021-11-15'),
(7, 15, 137, 2001, '2021-10-20'),
(8, 10, 137, 2003, '2021-11-22'),
(13, 11, 142, 2001, '2021-11-22'),
(14, 10, 140, 2003, '2021-11-17'),
(15, 10, 142, 2001, '2021-11-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Branch`
--
ALTER TABLE `Branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `Drugs`
--
ALTER TABLE `Drugs`
  ADD PRIMARY KEY (`drug_id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `sale_normal`
--
ALTER TABLE `sale_normal`
  ADD PRIMARY KEY (`sale_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `drug_id` (`drug_id`);

--
-- Indexes for table `sale_prescription`
--
ALTER TABLE `sale_prescription`
  ADD PRIMARY KEY (`sale_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `drug_id` (`drug_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Client`
--
ALTER TABLE `Client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `Employee`
--
ALTER TABLE `Employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sale_normal`
--
ALTER TABLE `sale_normal`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `sale_prescription`
--
ALTER TABLE `sale_prescription`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Drugs`
--
ALTER TABLE `Drugs`
  ADD CONSTRAINT `drugs_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `Branch` (`branch_id`) ON DELETE SET NULL;

--
-- Constraints for table `Employee`
--
ALTER TABLE `Employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE SET NULL;

--
-- Constraints for table `sale_normal`
--
ALTER TABLE `sale_normal`
  ADD CONSTRAINT `sale_normal_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sale_normal_ibfk_2` FOREIGN KEY (`drug_id`) REFERENCES `Drugs` (`drug_id`) ON DELETE CASCADE;

--
-- Constraints for table `sale_prescription`
--
ALTER TABLE `sale_prescription`
  ADD CONSTRAINT `sale_prescription_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `Employee` (`emp_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sale_prescription_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `Client` (`client_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sale_prescription_ibfk_3` FOREIGN KEY (`drug_id`) REFERENCES `Drugs` (`drug_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
