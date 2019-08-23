
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(0, 'mimpa', 'mimpa.09gmail.com', '202cb962ac59075b964b07152d234b70'),
(0, 'tom', 'e@p.cpm', '289dff07669d7a23de0ef88d2f7129e7');
COMMIT;

