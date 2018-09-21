-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 21, 2018 at 04:33 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u740508665_metro`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

DROP TABLE IF EXISTS `accessories`;
CREATE TABLE IF NOT EXISTS `accessories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_deleted` varchar(255) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `image`, `name`, `brand`, `category`, `price`, `quantity`, `description`, `date_deleted`, `deleted`) VALUES
(1, '19214.jpeg', 'Kodak EasyShare CX6230', 'Kodak', 'Battery Cover', 380.12, 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, maiores, ipsa. Eveniet tempore, tenetur sit dolores fugit voluptate delectus voluptates hic aliquid suscipit eaque quae cumque deserunt', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `concern` varchar(255) NOT NULL,
  `schedule` varchar(200) NOT NULL,
  `cnumber` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `schedule` (`schedule`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `username`, `concern`, `schedule`, `cnumber`, `remarks`, `status`, `deleted`) VALUES
(11, 'user@gmail.com', 'qweqweqweqweqweqweqweqweqwe', '09/21/2018 08:00', '09831092830', 'qweqwe', 'Confirmed', 0),
(10, 'user@gmail.com', 'q', '09/21/2018 10:00', '00000000000', 'qwe', 'Confirmed', 0),
(9, 'user@gmail.com', 'qwe', '09/28/2018 09:30', '0000000000', 'qweqwe', 'Confirmed', 0),
(8, 'user@gmail.com', 'qwe', '09/20/2018 10:00', '09213123123', '  ', 'Confirmed', 0),
(7, 'user@gmail.com', 'aw', '09/20/2018 08:00', '09', 'qweqwe', 'Confirmed', 0),
(12, 'admin@gmail.com', 'qwe', '09/28/2018 10:30', '01928301298', 'qwelkasdjlkasjd', 'Confirmed', 0);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(200) NOT NULL,
  `date_deleted` varchar(255) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `brand` (`brand`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand`, `date_deleted`, `deleted`) VALUES
(1, 'Kodak', NULL, 0),
(4, 'Nikon', NULL, 0),
(5, 'Fuji', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `date_deleted` varchar(255) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `category` (`category`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `date_deleted`, `deleted`) VALUES
(1, 'Battery Cover', NULL, 0),
(3, 'Card Slot', NULL, 0),
(4, 'Lens', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `date_deleted` varchar(255) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `date_deleted`, `deleted`) VALUES
(1, 'Why is my DSLR wonâ€²t turn on retain charge?', 'The most common reason for your camera not turning on is that your battery is defunct or not in place properly.The first thing to do is to charge your battery then to make sure itâ€²s inserted properly into the compartment. Youâ€²d be amazed how often we get people coming in with batteries that have just jolted slightly loose.Once youâ€²ve secured it in place, check your dials, buttons and memory cards. If they seem to be functioning and in the right spot, go ahead and press the power button. If this doesnâ€²t work, you might need to replace the battery, or it could be something more terminal so go to any camera repairing shop.', NULL, 0),
(7, 'What should I do if I accidentally dropped my camera?', 'Firstly, take some deep breaths. Thereâ€™s nothing you can do about it now. When youâ€™ve stopped shaking from shock, start checking all the parts of your camera. Like the tip above, check the battery compartment, memory card slots, buttons, dials and body. If they look in order, go ahead and try the power button. Hopefully it starts without any issues. If nothing happens, you may want to take it into a camera shop so they can take a look inside the camera body.', NULL, 0),
(8, 'My picture quality isnâ€™t great, it looks like it has spots or blobs on it.', 'The last thing you want to do is to take a perfect picture only to find it mired with dark spots or blobby patches. To avoid or remedy this, you need to work out if itâ€™s your lens or your sensor. You can test this by taking photos of a plain sheet of A4 paper with each your lenses. Upload them to your computer and if the spots are the same on every photo, it means itâ€™s your sensor. If the marks are constricted to one type of lens, try cleaning the lens head the right way, with accessories like air blowers and specialty lens cleaning tissues; cleaning with an inappropriate chemical or scratchy cloth can permanently damage the lens.', NULL, 0),
(9, 'My camera isnâ€²t saving any photos or pictures, why is that?', 'Most likely this is an issue with your memory card, which could be full or corrupt or not inserted properly (generally, error messages will appear). The best tactic is to insert a different memory card into your camera and to try taking pictures with it. If it works, chances are itâ€²s your existing memory card thatâ€²s the problem. Note that some cameras also have a battery saving feature that might restrict photo saving so make sure your camera is charged first. If so, look closely for any irregularities on the card. A thumb print on the metal stripes could be the cause, as could a crack or scratch. Clean it and try again. If itâ€²s still not working, it could be that your cameraâ€²s firmware or software simply doesnâ€²t recognize it anymore so try inserting it into another card reader. Failing this, you should take the memory card to a camera repair shop to try and recover your photos.', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

DROP TABLE IF EXISTS `loginform`;
CREATE TABLE IF NOT EXISTS `loginform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'User',
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `cnumber` varchar(255) DEFAULT NULL,
  `created` varchar(255) NOT NULL,
  `date_deleted` varchar(255) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`id`, `username`, `password`, `status`, `firstname`, `lastname`, `cnumber`, `created`, `date_deleted`, `deleted`) VALUES
(1, 'admin@gmail.com', 'b26986ceee60f744534aaab928cc12df', 'Admin', 'Joshua', 'Ramos', '09828637465', 'August 22, 2018', NULL, 0),
(2, 'riyosandobal.inc@gmail.com', '6119442a08276dbb22e918c3d85c1c6e', 'User', 'Rio', 'Sandoval', '09826374657', 'August 25, 2018', NULL, 0),
(3, 'user@gmail.com', 'b26986ceee60f744534aaab928cc12df', 'User', 'Auhsoj', 'Somar', '09863283645', 'August 24, 2018', NULL, 0),
(4, 'iamhitman15@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'User', 'Bryan', 'Caliwag', '09875486123', 'September 01, 2018', NULL, 0),
(5, 'auhsojsomar@gmail.com', '3dbe00a167653a1aaee01d93e77e730e', 'Admin', 'Auhsoj', 'Somar', '01239182739', 'September 08, 2018', NULL, 0),
(6, 'somarauhsoj@gmail.com', 'b26986ceee60f744534aaab928cc12df', 'Client', 'Auhsoj', 'Somar', '09123091283', 'September 14, 2018', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

DROP TABLE IF EXISTS `parts`;
CREATE TABLE IF NOT EXISTS `parts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_deleted` varchar(255) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `image`, `name`, `brand`, `category`, `price`, `quantity`, `description`, `date_deleted`, `deleted`) VALUES
(1, '26927.jpeg', 'Fujifilm HS1', 'Fuji', 'Lens', 2462, 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas corporis, harum repudiandae numquam reiciendis magnam non inventore voluptatem quo quos.', NULL, 0),
(2, '310.jpeg', 'Nikon D600', 'Nikon', 'Card Slot', 465.72, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quibusdam possimus suscipit itaque mollitia nobis laboriosam, accusantium architecto eveniet, porro veniam nostrum a, corporis eos fa', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `reservationdate` varchar(255) NOT NULL,
  `itemid` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `itemquantity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `deleted` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `username`, `reservationdate`, `itemid`, `category`, `itemquantity`, `status`, `deleted`) VALUES
(28, 'admin@gmail.com', '09/16/2018', 2, 'Parts', 2, 'Confirmed', 0),
(29, 'admin@gmail.com', '09/16/2018', 1, 'Parts', 2, 'Confirmed', 0),
(30, 'admin@gmail.com', '09/16/2018', 1, 'Accessories', 2, 'Pending', 0),
(31, 'admin@gmail.com', '09/20/2018', 2, 'Parts', 3, 'Pending', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
