

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `service booking` (
  `Cid` int(100) NOT NULL,
  `Full Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `City` varchar(15) NOT NULL,
  `Name on Card` varchar(30) NOT NULL,
  `Credit card number` varchar(20) NOT NULL,
  `Exp Month` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

