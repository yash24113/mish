6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `guests` int(200) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES
(6, 'Janwani Mohit Deepakbhai ', 'mohitjanwani2110@gmail.com', '8799051416', 'sdss', 'jaipur', 1, '2022-08-31', '2022-08-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
