-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2015 at 04:12 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pbj`
--

-- --------------------------------------------------------

--
-- Table structure for table `Eats`
--

CREATE TABLE IF NOT EXISTS `Eats` (
`id` int(11) NOT NULL,
  `phoneId` varchar(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `image` text NOT NULL,
  `value` float NOT NULL,
  `rating` float NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Eats`
--

INSERT INTO `Eats` (`id`, `phoneId`, `title`, `desc`, `image`, `value`, `rating`, `link`) VALUES
(1, '60412345678', 'Tuc Craft Kitchen', '<h3>WELCOME TO TUC CRAFT KITCHEN</h3>\r\nTuc Craft Kitchen is a restaurant and bar in Gastown, Vancouver. Our vision was to create a gathering place that feels like it has always been here.\r\n<br/><br/>\r\nOur food is elegant, rustic, honest … from classic, nostalgic flavours to new inspired dishes. Paired with authentic cocktails, craft beer and a carefully curated wine list, it is dining at our family table.', 'eat_tuc.jpeg', 1.5, 0, 'http://www.tuccraftkitchen.com/'),
(26, '6045681344', 'The Flying Pig', '<h4>I know what you’re thinking. The Flying Pig?</h4>\r\nYou must have lots of pork on the menu, right? Nothing could be further from the truth. To be honest, our menu breakdown has a wide range of items and, yes, a small portion can be pork. The Flying Pig represents our desire for you to see the impossible happen every time you visit us.\r\n<br/><br/>\r\nAs seasoned veterans in our field, it’s is our obligation to exceed expectations and we never forget “that you’re only as good as your last meal”. Our backgrounds are influenced by a strong Canadian work ethic and our roots are planted in kitchens all around Vancouver. We refer to our restaurant as a “nouveau Canadian Bistro”… offering a simple, seasonally inspired menu with fresh, local ingredients at a great value. Our open concept kitchen brings the Chef to your table,  delivering a memorable overall dining experience.', 'eat_pig.jpg', 4.5, 5, 'http://theflyingpigvan.com/'),
(27, '6046858678', 'Guu with Garlic', '<h4>Garlic is Sexy</h4>\r\n\r\nGuu ?with Garlic is all about “Garlic is Sexy”. Also called “Guu Robson”, this is the second Guu to open. Sexy is not just about the outside, but it’s the fundamental attitude reflecting energy.\r\n<br/><br/>\r\nGarlic is good, makes you healthy and beautiful! Enjoy the classic Izakaya dishes with a garlic punch.', 'eat_guu.jpg', 5, 4.5, 'http://guu-izakaya.com/robson');

-- --------------------------------------------------------

--
-- Table structure for table `Plays`
--

CREATE TABLE IF NOT EXISTS `Plays` (
`id` int(11) NOT NULL,
  `phoneId` varchar(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `image` text NOT NULL,
  `value` float NOT NULL,
  `rating` float NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Plays`
--

INSERT INTO `Plays` (`id`, `phoneId`, `title`, `desc`, `image`, `value`, `rating`, `link`) VALUES
(1, '6041234567', 'Van Dusen Botanical ', '<h4>History & Governance</h4>\r\n\r\nThis spectacular 22-hectare (55-acre) garden in the heart of Vancouver has matured into a botanical garden of international stature since opening to the public in 1975. The mild Vancouver climate allows the cultivation of an outstanding plant collection which is a delight any time of the year. VanDusen''s collection includes 11,500 accessions representing more than 7,300 taxa (plant families) and 255,000 individual plants from around the world. Our plant collections represent ecosystems that range from tropical South Africa, to the Himalayas, to the South America and the Mediterranean, across Canada’s Boreal forests and Great Plains to plants native to our own Pacific Northwest.\r\n<br/><br/>\r\nThe garden design features displays of plants in picturesque landscape settings. Specific garden areas are planted to illustrate botanical relationships, such as the Rhododendron Walk, or geographical origins, as in Sino-Himalayan Garden. These areas are set amidst rolling lawns, tranquil lakes and dramatic rockwork with vistas of the mountains and Vancouver cityscape.\r\n<br/><br/>\r\nThere is always something interesting to see, no matter what the season!\r\n<br/><br/>\r\nVanDusen Botanical Garden provides an inspiring and enjoyable environment for visitors of all ages and interests. With its excellent collections and the beauty of their display, the Garden promotes knowledge and understanding of the world of plants and their fundamental importance to life.', 'play_vandusen.jpg', 2, 3, 'http://vandusengarden.org/'),
(2, '6048793456', 'Rio Theatre', '<h4>An experience you can''t download</h4>\r\n\r\nThe Rio Theatre on Broadway and Commercial, voted #1 in East Vancouver, is a multimedia venue for premier independent cinema of first-run feature films and live entertainment.\r\n<br/><br/>\r\nBuilt in 1938 the Rio has been fully restored with a state of the art digital projector, surround sound, a huge stage for live events and 420 of the most comfortable brand new luxury seats (with adjustable arms in case you’re on a date). Winner of the Georgia Straight People’s Choice award for Best Concession. We only serve real buttered popcorn.\r\n<br/><br/>\r\nCommercial free Hollywood blockbusters, late night screenings of cult classics, live music and the site of film and comedy festivals. The Rio has it all! With friendly film-loving staff ready to make you feel at home.\r\n<br/><br/>\r\nAt the Rio Cinema we cater to Sci -Fi, Fantasy, Action, Thriller, Cult and Horror movies for both adult and family rated films. No serious drama here! We encourage people to have fun & dress up & yell out or sing along. We love pop culture of all kinds and so doOld Rio the Rio fans. Fanatic Film geeks are welcome. Dress in costume at our late night screenings and win a prize!\r\n<br/><br/>\r\nConveniently located steps away from the Commercial Drive/ Broadway Skytrain Station. Forget paying for parking downtown and higher ticket prices Support your local neighbourhood theatre! Tons of free parking right out front on both sides of Broadway plus right next to a major transit station. Take a trip down the Drive and visit Vancouver’s best neighbourhood theatre! So easy to get here from almost any where in Vancouver!\r\n<br/><br/>\r\nAside from movies the Rio Theatre is also a first rate soft seat concert theatre for international and local live music.', 'play_rio.jpg', 5, 4, 'http://riotheatre.ca/'),
(3, '6046623207', 'Dr. Sun Yat-Sen Classical Chinese Garden', '<h4>Tranquility</h4>\r\nBreathtaking, rain or shine… Step into our door and out of your daily life as your heart and mind relax and energy renews. Journey back in time to 15th Century China and enjoy this “window to another world”.', 'play_sunyatsen.jpg', 3, 3.5, 'http://vancouverchinesegarden.com/');

-- --------------------------------------------------------

--
-- Table structure for table `Sleeps`
--

CREATE TABLE IF NOT EXISTS `Sleeps` (
`id` int(11) NOT NULL,
  `phoneId` varchar(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `image` text NOT NULL,
  `value` float NOT NULL,
  `rating` float NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Sleeps`
--

INSERT INTO `Sleeps` (`id`, `phoneId`, `title`, `desc`, `image`, `value`, `rating`, `link`) VALUES
(1, '6046955300', 'Fairmont Pacific Rim', '<h4>Welcome to the Fairmont Pacific Rim Hotel</h4>\r\nFairmont Pacific Rim, luxury, naturally inspired, sophisticated and contemporary featuring the best of the Pacific Rim in its plan, décor, and culinary offerings. Experience five star amenities and stylish rooms that integrate naturally inspired materials and state-of-the-art technology. Our downtown Vancouver hotel, offers luxurious suites with captivating views of the water and mountains. ', 'sleep_pacificrim.jpg', 4, 5, 'http://www.fairmont.com/pacific-rim-vancouver'),
(2, '34725226322', 'L''Hermitage Hotel', '<h4>Luxury Boutique Hotel</h4>\r\n\r\nCelebrated as one of downtown Vancouver’s most popular boutique hotels, L’Hermitage Hotel is currently #1 in Vancouver on Trip Advisor, and was awarded #1 Hotel in Canada by Trip Advisor’s 2015 Travelers’ Choice.\r\n<br/><br/>\r\nL''Hermitage Hotel is located on the corner of Richards and Robson Street in the very heart of Vancouver''s shopping and entertainment district and only blocks from its financial centre. L''Hermitage Hotel is a 60-room, luxury property that graced the Vancouver hotel scene in June 2008.\r\n<br/><br/>\r\nExclusively located on the 5th, 6th and 7th floors of a residential tower, we offer traditional hotel rooms and suites in addition to One and Two Bedroom “homes” complete with fully-equipped kitchens featuring Bosch and Sub-Zero appliances.\r\n<br/><br/>\r\nAs a guest of L''Hermitage Hotel, these thoughtful amenities are always available for you to enjoy on a complimentary basis:', 'sleep_hermitage.jpg', 4.3, 4.6, 'http://www.lhermitagevancouver.com/'),
(3, '746382', 'Times Square Suites ', '<h4>Times Square Suites Hotel</h4>\r\n\r\nTimes Square Suites is an apartment hotel located at the corner of Robson and Denman Streets in downtown Vancouver''s West End - just moments from Stanley Park. The neighbourhood is quiet, yet vibrant and only a few blocks to the heart of downtown.\r\nWe pride ourselves on welcoming you to live like a local. Anything you need to make your stay the most enjoyable, we will do our best. If you stay with us again and again, you will experience the familiar comforts that you have come to expect throughout our journey together.', 'sleep_times.jpg', 4.2, 4, 'http://www.timessquaresuites.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Eats`
--
ALTER TABLE `Eats`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Plays`
--
ALTER TABLE `Plays`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Sleeps`
--
ALTER TABLE `Sleeps`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Eats`
--
ALTER TABLE `Eats`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `Plays`
--
ALTER TABLE `Plays`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Sleeps`
--
ALTER TABLE `Sleeps`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
