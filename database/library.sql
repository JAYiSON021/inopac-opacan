-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2017 at 04:37 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_books`
--

CREATE TABLE `tbl_books` (
  `b_id` int(11) NOT NULL,
  `call_number` varchar(15) NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `b_title` varchar(150) NOT NULL,
  `b_pages` int(11) NOT NULL,
  `b_author` varchar(75) NOT NULL,
  `b_qty` int(11) NOT NULL,
  `b_publisher` varchar(100) NOT NULL,
  `b_publication_date` varchar(50) NOT NULL,
  `b_publication_place` varchar(50) NOT NULL,
  `r_code` varchar(10) NOT NULL,
  `b_available` int(11) NOT NULL,
  `b_section` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_books`
--

INSERT INTO `tbl_books` (`b_id`, `call_number`, `ISBN`, `b_title`, `b_pages`, `b_author`, `b_qty`, `b_publisher`, `b_publication_date`, `b_publication_place`, `r_code`, `b_available`, `b_section`) VALUES
(1, '1131023', 'ISBN-AL011', 'Alamat', 90, 'Battung ', 50, 'Ginising', '09/09/96', '1', 'BK', 50, 'Fiction'),
(2, '1132323', 'M01A9', 'Mang kepweng', 79, 'Yeng', 10, 'Sinag Publishing House', '09/09/11', 'Marikina', 'BK', 10, 'Fiction'),
(3, '1134323', 'ISBN-AL09A', 'Alamat ni Battung', 90, 'Battung', 100, 'Ginising', '09/09/90', 'Makati', 'BK', 100, 'Fiction'),
(4, '1135323', 'ISBN-MAK5', 'Ambuang', 100, 'Jasion', 100, 'Magaling', '09/12/98', 'Doon', 'BK', 100, 'Fiction'),
(5, '1632323', 'ISBN-ANO1', 'Ano', 90, 'Edward Smith', 12, 'Science House', '09/06/91', 'Kamagong', 'BK', 100, 'Fiction'),
(6, '1332323', 'ISBN-RP12D', 'Going There', 90, 'Rapunsel', 100, 'Wish Company', '04/05/06', 'Pasig', 'BK', 100, 'Fiction'),
(7, '7132323', 'ISBN-BCP23', 'Great Battung Chronicles', 1000, 'Pinoccio', 100, 'But Ung Pub.', '09/06/97', 'Kinamagong', 'BK', 100, 'Fiction'),
(8, '1138323', 'ISBN-TWG12', 'Bat Ung Ni Lamang', 2000, 'Pipe at Bungal', 100, 'JBCO Pub.', '10/16/91', 'Raon', 'BK', 100, 'Fiction'),
(9, '1132363', 'ISBN-POW2', 'Bat Ung Ni Lamang II', 1000, 'Pipe at Bungal', 100, 'JBCO Pub.', '01/09/01', 'Gongruan', 'BK', 100, 'Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_borrow`
--

CREATE TABLE `tbl_borrow` (
  `brw_id` int(11) NOT NULL,
  `brw_code` varchar(15) NOT NULL,
  `brw_issued` varchar(50) NOT NULL,
  `brw_duration` int(11) NOT NULL,
  `brw_duration_unit` text NOT NULL,
  `b_code` varchar(25) NOT NULL,
  `brw_qty` int(11) NOT NULL,
  `br_code` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_borrowers`
--

CREATE TABLE `tbl_borrowers` (
  `br_id` int(11) NOT NULL,
  `br_lname` varchar(40) DEFAULT NULL,
  `br_fname` varchar(40) NOT NULL,
  `br_mname` varchar(40) DEFAULT NULL,
  `br_code` varchar(25) NOT NULL,
  `br_add_home` varchar(50) NOT NULL,
  `br_add_st` varchar(50) NOT NULL,
  `br_add_brgy` varchar(50) NOT NULL,
  `br_add_city` varchar(50) NOT NULL,
  `br_bday` varchar(50) NOT NULL,
  `br_gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_borrowers`
--

INSERT INTO `tbl_borrowers` (`br_id`, `br_lname`, `br_fname`, `br_mname`, `br_code`, `br_add_home`, `br_add_st`, `br_add_brgy`, `br_add_city`, `br_bday`, `br_gender`) VALUES
(1, 'Battung', 'Carl Patrick', 'Domasig', 'BR-0001', '03', 'bonifacio', 'Pinagbuhatan', 'Pasig City', '09/29/96', 'M'),
(2, 'Sto. Domingo', 'Ariel', 'David', 'BR-0002', '9876', 'yeng', 'Sta Lucia', 'Pasig City', '08/14/96', 'M'),
(3, 'San Agustin', 'Mar Jayson', 'Villostas', 'BR-0003', '44', 'mabini', 'kapasigan', 'Pasig City', '09/21/96', 'M'),
(4, 'Clutario', 'Lorenzo', 'Garilao', 'BR-0004', '69', 'samot', 'Sta Lucia', 'Pasig City', '09/21/92', 'M'),
(5, 'Dolores', 'Charisse', 'Magat', 'BR-0005', '752', 'hamilton', 'Santolan', 'Pasig City', '02/30/97', 'F'),
(6, 'Santos', 'Kenneth', NULL, 'BR-0006', '746', 'hisasd', 'San Joaqin', 'Pasig City', '12/30/95', 'M'),
(7, 'Tatad', 'Randy', 'Jr', 'BR-0007', '478', 'alimango', 'Piangbuhatan', 'Pasig City', '01/15/96', 'M'),
(8, 'Enrique', 'Jhikho', 'Uvuvue', 'BR-0008', '98', 'hilsong', 'antipolo', 'Rizal', '09/24/95', 'M'),
(9, 'Malonso', 'Genessa', NULL, 'BR-0009', '7532', 'mabini', 'manggahan', 'Pasig City', '11/23/95', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_holdings`
--

CREATE TABLE `tbl_holdings` (
  `h_id` int(11) NOT NULL,
  `h_categories` varchar(50) NOT NULL,
  `r_quantity` int(11) NOT NULL,
  `r_code` varchar(10) NOT NULL,
  `h_tbl_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_holdings`
--

INSERT INTO `tbl_holdings` (`h_id`, `h_categories`, `r_quantity`, `r_code`, `h_tbl_name`) VALUES
(1, 'Book', 1000, 'BK', 'tbl_books'),
(2, 'Magazines', 500, 'MG', 'tbl_magazines');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_magazines`
--

CREATE TABLE `tbl_magazines` (
  `id` int(11) NOT NULL,
  `call_number` varchar(15) NOT NULL,
  `mag_title` varchar(25) NOT NULL,
  `mag_volume` int(11) NOT NULL,
  `mag_issued_date` varchar(15) NOT NULL,
  `mag_quantity` int(11) NOT NULL,
  `mag_publisher` varchar(50) NOT NULL,
  `mag_available` int(11) NOT NULL,
  `r_code` varchar(10) NOT NULL,
  `mag_section` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_magazines`
--

INSERT INTO `tbl_magazines` (`id`, `call_number`, `mag_title`, `mag_volume`, `mag_issued_date`, `mag_quantity`, `mag_publisher`, `mag_available`, `r_code`, `mag_section`) VALUES
(1, '00000023', 'Battung''s New Times', 1, '09/02/17', 3, 'Battung Ginising Publishing House', 3, 'MG', 'Inspirational'),
(2, '00023023', 'Jasyon''s Magazine', 1, '08/07/17', 5, 'Puyat Publishing Company', 5, 'MG', 'Inspirational'),
(3, '00360023', 'Yengsters', 4, '09/12/16', 3, 'Yengpo Publishing House', 3, 'MG', 'Recreational'),
(4, '00012023', 'Start Up Magazine', 1, '01/01/16', 3, 'Yengpo Publishing House', 3, 'MG', 'Recreational'),
(5, '01200023', 'Yengster', 2, '12/12/12', 5, 'Yengpo Publishing House', 5, 'MG', 'Recreational'),
(6, '21000123', 'Metro Magazine', 5, '09/09/01', 4, 'Gogo Publishing', 4, 'MG', 'Inspirational'),
(7, '07052123', 'Metro Magazine', 1, '01/01/96', 6, 'Gogo Publishing', 6, 'MG', 'Inspirational'),
(8, '00032023', 'Metro Magazine', 2, '01/01/93', 4, 'Gogo Publishing', 4, 'MG', 'Inspirational'),
(9, '00310023', 'Metro Magazine', 3, '09/09/97', 3, 'Gogo Publishing', 3, 'MG', 'Inspirational'),
(10, '00310034', 'Yengster', 3, '12/12/17', 4, 'Yengpo Publishing House', 4, 'MG', 'Inspirational'),
(11, '64310514', 'Enviro Magazine', 1, '06/07/16', 5, 'Environmental House Publishing', 5, 'MG', 'Environmental');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_return`
--

CREATE TABLE `tbl_return` (
  `rtn_id` int(11) NOT NULL,
  `rtn_code` varchar(15) NOT NULL,
  `brw_code` varchar(15) NOT NULL,
  `rtn_date` varchar(25) NOT NULL,
  `rtn_stat` varchar(15) NOT NULL,
  `rtn_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_books`
--
ALTER TABLE `tbl_books`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_borrow`
--
ALTER TABLE `tbl_borrow`
  ADD PRIMARY KEY (`brw_id`);

--
-- Indexes for table `tbl_borrowers`
--
ALTER TABLE `tbl_borrowers`
  ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `tbl_holdings`
--
ALTER TABLE `tbl_holdings`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `tbl_magazines`
--
ALTER TABLE `tbl_magazines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_return`
--
ALTER TABLE `tbl_return`
  ADD PRIMARY KEY (`rtn_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_books`
--
ALTER TABLE `tbl_books`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_borrow`
--
ALTER TABLE `tbl_borrow`
  MODIFY `brw_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_borrowers`
--
ALTER TABLE `tbl_borrowers`
  MODIFY `br_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_holdings`
--
ALTER TABLE `tbl_holdings`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_magazines`
--
ALTER TABLE `tbl_magazines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_return`
--
ALTER TABLE `tbl_return`
  MODIFY `rtn_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
