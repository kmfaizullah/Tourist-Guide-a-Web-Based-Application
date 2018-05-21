-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 06:39 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `name` varchar(100) NOT NULL,
  `ID` varchar(100) NOT NULL,
  `Dept` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`name`, `ID`, `Dept`, `Subject`, `img`) VALUES
('Shihab Ali Haq', '1520279042', 'ECE', 'Computer Science & Engineering', '/assests/img/shipar.png'),
('K. M. Faizullah Fuhad', '1610346042', 'ECE', 'Computer Science & Engineering', '/assests/img/fuad.png'),
('Muhibullah Rifat', '16104', 'ECE', 'Computer Science & Engineering', '/assests/img/rifat.png');

-- --------------------------------------------------------

--
-- Table structure for table `accomodation`
--

CREATE TABLE `accomodation` (
  `a_id` int(11) NOT NULL,
  `room_services` varchar(45) DEFAULT NULL,
  `packages` varchar(45) DEFAULT NULL,
  `upcoming` varchar(45) DEFAULT NULL,
  `places_place_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accomodation`
--

INSERT INTO `accomodation` (`a_id`, `room_services`, `packages`, `upcoming`, `places_place_code`) VALUES
(0, '', '', '', 1),
(2, 'rr', 'rr', 'rr', 1);

-- --------------------------------------------------------

--
-- Table structure for table `adventure`
--

CREATE TABLE `adventure` (
  `place_code` int(11) NOT NULL,
  `place_name` varchar(45) DEFAULT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `distance` varchar(45) DEFAULT NULL,
  `places_place_code` int(11) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adventure`
--

INSERT INTO `adventure` (`place_code`, `place_name`, `description`, `location`, `distance`, `places_place_code`, `img`) VALUES
(1, 'Srimangal', 'Sylhet may be the primary city in the eponymous division, but sylvan Srimangal is the undoubted star of this region. Blessed with rolling hills carpeted with endless tea plantations, dense forest sanctuaries and a sprinkling of tribal villages, this place is bound to rank among your most treasured experiences in Bangladesh.', 'Sylhet', '220km', 1, '/assests/img/sri.png'),
(2, 'Jaglong', 'Jaflong is a union situated at Bangladesh-India border. Jaflong is a landscape beauty among gardens and hills. It is situated next to the river Peain round Hill Khashia. The Mari River originating from the great Himalayas brings tons of stone slabs with its stream. It’s a hilly area comprising of green forests.', 'Sylhet', '245 km', 1, '/assests/img/jaf.png'),
(3, 'St. Martain', 'St. Martin (Island) is the only coral island in Bangladesh a small island St. Martin is in the northeast part of the Bay of Bengal, about 9 km south of the tip of the Cox\'s Bazar-Teknaf peninsula.\r\nIt is about 8 km west of the northwest coast of Myanmar at the mouth of the Naf River. Also called (The local name) \"Narical Gingira\", also spelled \"Narikel Janjina/Jinjera\" and has an extension named Chera Dwip. ', 'Souther part, Bangladesh', '420 km', 1, '/assests/img/st.png'),
(4, 'Tangoar Haor', 'located in the Dharmapasha and Tahirpur upazilas of Sunamganj District in Bangladesh, is a unique wetland ecosystem of national importance and has come into international focus. The area of Tanguar haor including 46 villages within the haor is about 100 km2 of which 2,802.36 ha2 is wetland. It is the source of livelihood for more than 40,000 people. The Government of Bangladesh declared Tanguar haor as an Ecologically Critical Area in 1999 considering its critical condition as a result of overexploitation of its natural resources.', 'Sunamganj', '320 km', 1, '/assests/img/tan.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `package` varchar(30) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `location`, `package`, `message`) VALUES
('', '', '', '', ''),
('Faizullah', 'faizullah.fuad@northsouth.edu', 'Dhaka', 'Primium', 'book for 3 days'),
('Hasan', 'hasan@gmail.com', 'Dhaka, Bangladesh', 'Nilgiri', 'wanna go for two days trip'),
('Shihab', 'shipar.haq@gmail.com', 'Dhaka, Bangladesh', 'Nilgiri', 'Want to go for 3 days tour');

-- --------------------------------------------------------

--
-- Table structure for table `given_tour`
--

CREATE TABLE `given_tour` (
  `sl_id` int(11) NOT NULL,
  `place` varchar(45) DEFAULT NULL,
  `cost` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `places_place_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `given_tour`
--

INSERT INTO `given_tour` (`sl_id`, `place`, `cost`, `date`, `places_place_code`) VALUES
(1, 'Inani', '6500 tk', '04-03-2018', 1),
(2, 'St. Martain', '7500 tk', '02-02-2018', 2),
(3, 'Coxs Bazar', '7500 tk', '02-04-2018', 2),
(4, 'Nilgiri', '7500 tk', '01-01-2018', 2),
(5, 'Srimangal', '5500 tk', '01-11-2017', 2),
(6, 'Tangoar Haor', '7500 tk', '11-10-2017', 2);

-- --------------------------------------------------------

--
-- Table structure for table `historic`
--

CREATE TABLE `historic` (
  `place_code` int(11) NOT NULL,
  `place_name` varchar(500) DEFAULT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `location` varchar(500) DEFAULT NULL,
  `distance` varchar(500) DEFAULT NULL,
  `places_place_code` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historic`
--

INSERT INTO `historic` (`place_code`, `place_name`, `description`, `location`, `distance`, `places_place_code`, `img`) VALUES
(3, 'Ahsan Manjil', 'In Mughal era, there was a garden house of Sheikh Enayet Ullah, the landlord of Jamalpur Porgona (district), in this place. Sheikh Enayet Ullah was a very charming person. He acquired a very big area in Kumortuli (Kumartuli) and included it in his garden house. Here he built a beautiful palace and named it \"Rongmohol\" (Rangmahal). He used to enjoy here keeping beautiful girls collected from the country and abroad, dressing them with gorgeous dresses and expensive ornaments. There is a saying that, the foujdar of Dhaka (representative of mughal emperor) in that time was attracted to one of the beauty ful girls among them. He invited Sheikh Enayet Ullah in a party one night and killed him in a conspiracy when he was returning home. That girl also committed suicide in anger and sorrow. There was a grave of Sheikh Enayet Ullah in the north-east corner of the palace yard which was ruined in the beginning of the 20th century.', 'Dhaka, Bangladesh', '3 km', 1, '/assests/img/Ahsan.png'),
(4, 'Lalbag kella', 'The Mughal prince Muhammad Azam, third son of Aurangzeb started the work of the fort in 1678 during his vice-royalty in Bengal. He stayed in Bengal for 15 months. The fort remained incomplete when he was called away by his father Aurangzeb.\r\n\r\nShaista Khan was the new subahdar of Dhaka in that time, and he did not complete the fort. In 1684, the daughter of Shaista Khan named Iran Dukht Pari Bibi died there. After her death, he started to think the fort as unlucky, and left the structure incomplete.[2] Among the three major parts of Lalbagh Fort, one is the tomb of Pari Bibi.\r\n\r\nAfter Shaista Khan left Dhaka, it lost its popularity. The main cause was that the capital was moved from Dhaka to Murshidabad. After the end of the royal Mughal period, the fort became abandoned. In 1844, the area acquired its name as Lalbagh replacing Aurangabad, and the fort became Lalbagh Fort', 'Dhaka, Bangladesh', '2 km', 2, '/assests/img/Hall.png'),
(5, 'Moynamoti', 'Mainamati is an isolated low, dimpled range of hills, dotted with more than 50 ancient Buddhist settlements dating to between the 8th and 12th century CE. It extends through the centre of the district of Comilla in Bangladesh. Mainamati is located almost 8 miles from the town of Comilla. It is the home of one of the most important Buddhist archaeological sites in the region. Comilla Cantonment is located nearby and houses a beautiful colonial era cemetery.[1] Mainamati is named for the Chandra queen of the same name, mother of Govindachandra. Mainamati is only 114 km. from Dhaka city and is just a day\'s trip by road on way to Chittagong.', 'Commila', '170 km ', 3, '/assests/img/moy.png'),
(6, 'Sompur Bihar', 'A number of monasteries grew up during the P?la period in ancient Bengal and Magadha. According to Tibetan sources, five great Mahaviharas stood out: Vikramashila, the premier university of the era; Nalanda, past its prime but still illustrious; Somapura Mahavihara; Odantapur?; and Jaggadala.[2] The monasteries formed a network; \"all of them were under state supervision\" and there existed \"a system of co-ordination among them ... it seems from the evidence that the different seats of Buddhist learning that functioned in eastern India under the P?la were regarded together as forming a network, an interlinked group of institutions,\" and it was common for great scholars to move easily from position to position among them.[3]', 'Badalgachhi Upazila, Naogaon', '360 km', 3, '/assests/img/sompur.png');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `img1` varchar(500) NOT NULL,
  `img2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`img1`, `img2`) VALUES
('/assests/img/1.png', '/assests/img/5.png'),
('/assests/img/2.png', '/assests/img/6.png'),
('/assests/img/3.png', '/assests/img/7.png'),
('/assests/img/1.png', '/assests/img/8.png'),
('/assests/img/1.png', '/assests/img/5.png'),
('/assests/img/2.png', '/assests/img/6.png'),
('/assests/img/3.png', '/assests/img/7.png'),
('/assests/img/1.png', '/assests/img/8.png');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_id` int(11) NOT NULL,
  `upcoming` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `cost` varchar(45) DEFAULT NULL,
  `places_place_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `upcoming`, `date`, `cost`, `places_place_code`) VALUES
(1, 'Nilgiri', '07-05-2018', '6000 tk', 1),
(2, 'Jaflong', '09-05-2018', '5500 tk', 2),
(3, 'Srimangal', '10-05-2018', '6000 tk', 1),
(4, 'Coxs Bazar', '15-06-2018', '7000 tk', 3),
(5, 'Sajek', '30-05-2018', '6500 tk', 2),
(6, 'Kaptai Lake', '05-06-2018', '5000 tk', 3);

-- --------------------------------------------------------

--
-- Table structure for table `picnic`
--

CREATE TABLE `picnic` (
  `place_code` int(11) NOT NULL,
  `place_name` varchar(45) DEFAULT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `distance` varchar(45) DEFAULT NULL,
  `places_place_code` int(11) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picnic`
--

INSERT INTO `picnic` (`place_code`, `place_name`, `description`, `location`, `distance`, `places_place_code`, `img`) VALUES
(1, 'Kaptai Lake', 'Kaptai Lake the largest man-made freshwater body in Bangladesh. Though created primarily for hydroelectric power generation, it contributes to produce significant quantity of freshwater fishes, navigation, flood control and agriculture, etc. The reservoir was created by damming the river karnafuli near kaptai town in the chittagong hill tracts (Latitude 22°09\'N and Longitude 92°17\'E).  ', 'South_eastern Bangladesh', '320 km', 1, '/assests/img/kaptai.png'),
(2, 'Nuhas Polli', 'Nuhash Polli was founded in 1987. Initially it covered 22 bigha of land. Now it covers around 40 bigha. Actor Dr. Ejaz helped procure the land. The heavenly ‘village’ was named after Nuhash, Humayun Ahmed and Gultekin Khan’s (his first wife) son. Ahmed was very fond of music. He loved to live amidst nature and relished the date plantation, which he had set up inside Nuhash Polli.', 'Gazipur, dhaka', '60 km', 1, '/assests/img/nuhas.png'),
(3, 'Jamuna Resort', 'At Jamuna Resort you can feel the rich and exotic atmosphere of the tropics and the might of the legendary river Jamuna. When you enter the place you will naturally feel the new concept of warmth hospitality, luxury and comfort. Nestled by the Mythological Jamuna River (Bramaputra) the Jamuna Resort is captivating with stunning views of the Bridge and the breath-taking landscape', 'Jamuna ', '265 km', 3, '/assests/img/jamuna.png'),
(4, 'Kuakata', 'Kuakata offers a full view of the sunrise and sunset from the same white sandy beach in the water of the Bay of Bengal. Locally known as Shagor Kannya (Daughter of Ocean), the long strip of dark, marbled sand stretches for about 18 kilometres (11 mi). The long, wide beach at Kuakata has a typical natural setting. This sandy beach has gentle slopes into the Bay of Bengal. Kuakata is also a sanctuary for migratory winter birds.', 'Patuakhali, barisal', '420 km', 3, '/assests/img/kuakata.png');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `place_name` varchar(30) NOT NULL,
  `place_code` int(100) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`place_name`, `place_code`, `type`) VALUES
('', 1, ''),
('Shat Gombuj', 2, 'Historic'),
('', 3, ''),
('', 4, 'Historic'),
('', 5, ''),
('', 6, ''),
('', 7, ''),
('Coxs', 8, 'popular'),
('tyu', 9, 'ttt'),
('tr', 10, 'op');

-- --------------------------------------------------------

--
-- Table structure for table `popular`
--

CREATE TABLE `popular` (
  `place_code` int(11) NOT NULL,
  `place_name` varchar(45) DEFAULT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `distance` varchar(45) DEFAULT NULL,
  `places_place_code` int(11) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `popular`
--

INSERT INTO `popular` (`place_code`, `place_name`, `description`, `location`, `distance`, `places_place_code`, `img`) VALUES
(1, 'Nilgiri', '  Nilgiri is one of the tallest peaks and a beautiful tourist spot in Bangladesh. It is about 3500 feet high and situated at Thanci Thana. Close to this spot you can see Moro villages. Their colorful culture and life style might be an unexplored experience for you. In rainy season a spectacular scenery is created here, the whole spot is covered with the blanket of clouds. It is a nice place for campfire in rainy season. Most attractive time of the day is the dawn. It is better to stay during 7-18 dates of a lunar month to enjoy the moonlit night. You can also enjoy the artful course of Sangu River. Niligiri is managed by Army brigade of Bandarban.', 'Bandarban', '400 km', 2, '/assests/img/nilgiri.png'),
(2, 'Coxs Bazar', 'The modern Cox\'s Bazar derives its name from Captain Hiram Cox, an officer of the British East India Company. Cox was appointed Superintendent of Palongkee outpost after Warren Hastings became Governor of Bengal. He embarked upon the task of rehabilitation and settlement of the Arakanese refugees in the area.[5] Captain Cox died in 1799 before he could finish his work. To commemorate his role in rehabilitation work, a market was established and named Cox\'s Bazar after him. Unlike many locations in the Indian Subcontinent where place names dating from the colonial period have been changed, Cox\'s name is still retained in the city he founded.', 'Chittagong', '350 km', 1, '/assests/img/cox.png'),
(3, 'Sundarban', 'The Sundarbans is a network of marine streams, mud shores and mangrove forests. The salinity level is higher in the mangroves than in the freshwater swamp forests located further inland. The Sundarbans flora is characterised by the abundance of sundari, gewa, goran and keora all of which occur prominently throughout the area. The region is also known to contain numerous wildlife species, birds and reptiles, including Bengal tiger, chital, crocodile, snakes many of which are considered endangered. Despite a total ban on all killing or capture of wildlife other than fish and some invertebrates, it appears that there is a consistent pattern of depleted biodiversity or loss of species in the 20th century, and that the ecological quality of the forest is declining.', 'Khulna', '280 km', 1, '/assests/img/sundarban.png'),
(4, 'Sajek', 'Sajek is a remote hilly area that is located at Rangamati district, but you have to go there through the Khagrachhori district. Once upon a time this place was a risky place for the security reason and only few adventurous people could have dared to travel this region. But now a days the situation has changed. Bangladesh army has established their camp over their along with BGB. That\'s why the security has improved over there and lot of tourists are going there during their vacation. It has been around a year and I didn\'t plan for any traveling. So I have joined with a group and they have arranged everything (from bus ticket to rest house reservation). I was totally tension free and enjoyed a perfect vacation into the clouds.', 'Rangamati', '380 km', 2, '/assests/img/sajek.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fullname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fullname`, `username`, `password`, `email`) VALUES
('', '', '', ''),
('t', '56', 'dd', 'dd'),
('tr', 'a', 'aa', 'aa'),
('ali', 'ali12', 'ship', 'shipar.haq@gmail.com'),
('i', 'd', 'd', 'ddddd'),
('ddd', 'dd', 'dd', 'ddddd'),
('e', 'e', 'ee', 'eee'),
('e', 'e2', '', 'f'),
('er', 'eeeee', 'e', 'eee'),
('er', 'eeeee1', '', 'eee'),
('Faizullah', 'faizullah123', '123', 'kmffuhad@gmail.com'),
('K. M. Faizullah Fuhad', 'faizullah12345', '123456', 'faizullah.fuad@northsouth.edu'),
('fuad', 'ff', '12345', 'ert'),
('ff', 'ff1', '', 'fff'),
('i', 'i', 'i', 'i'),
('rr', 'k1', '', 'rrrr'),
('rr', 'k12', '', 'rrrr'),
('rr', 'k123', '', 'rrrr'),
('rr', 'k1232', '', 'rrrr'),
('rr', 'k12323', '', 'rrrr'),
('rr', 'k123230', '', 'rrrr'),
('rr', 'k1232301', '', 'rrrr'),
('rr', 'k12323012', '', 'rrrr'),
('l', 'l', 'l', 'l'),
('rt', 'pol', 'ww', 'ww'),
('rt', 'polo', '', 'ww'),
('q', 'q', 'q', '1'),
('rr', 'r2', '', 'rrrr'),
('rr', 'r23', '', 'rrrr'),
('rr', 'r234', '', 'rrrr'),
('rr', 'r2342', '', 'rrrr'),
('rr', 'r23421', '', 'rrrr'),
('rr', 'r234216', '', 'rrrr'),
('rr', 'r4216', '', 'rrrr'),
('rr', 'r42162', '', 'rrrr'),
('rr', 'r421621', '', 'rrrr'),
('rr', 'r4216213', '', 'rrrr'),
('rahat', 'rahat12', '12', '@gmail'),
('rr', 'rr', '', 'rrrr'),
('rr', 'rruy', 'uu', 'rrrr'),
('rr', 'rruye', '', 'rrrr'),
('y', 'rty', '', 'rrr'),
('y', 'rty22', '', 'rrr'),
('shipar', 'sh123', '12', ''),
('shihab', 'shihab1', '123', 'shipar.haq@gmail.com'),
('shipar', 'shipar123', '123', '@gmail'),
('fdds', 'sss', 'sss', 'muried777@gmail.com'),
('3', 't', 't', 't'),
('3', 't1', 'y', 't'),
('3', 't12', '1', 't'),
('3', 't123', '', 't'),
('3', 't1235', '', 't'),
('rr', 'u', '', 'rrrr'),
('rr', 'y', '', 'rrrr'),
('rr', 'y1', '', 'rrrr'),
('rr', 'y12', '', 'rrrr'),
('rr', 'y123', '', 'rrrr'),
('rr', 'y1234', '', 'rrrr'),
('rr', 'y12342', '', 'rrrr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `accomodation`
--
ALTER TABLE `accomodation`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `fk_accomodation_places1_idx` (`places_place_code`);

--
-- Indexes for table `adventure`
--
ALTER TABLE `adventure`
  ADD PRIMARY KEY (`place_code`),
  ADD KEY `fk_adventure_places1_idx` (`places_place_code`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `given_tour`
--
ALTER TABLE `given_tour`
  ADD PRIMARY KEY (`sl_id`),
  ADD KEY `fk_Given_tour_places1_idx` (`places_place_code`);

--
-- Indexes for table `historic`
--
ALTER TABLE `historic`
  ADD PRIMARY KEY (`place_code`,`places_place_code`),
  ADD KEY `fk_historic_places_idx` (`places_place_code`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`),
  ADD KEY `fk_news_places1_idx` (`places_place_code`);

--
-- Indexes for table `picnic`
--
ALTER TABLE `picnic`
  ADD PRIMARY KEY (`place_code`),
  ADD KEY `fk_picnic_places1_idx` (`places_place_code`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`place_code`);

--
-- Indexes for table `popular`
--
ALTER TABLE `popular`
  ADD PRIMARY KEY (`place_code`),
  ADD KEY `fk_popular_places1_idx` (`places_place_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accomodation`
--
ALTER TABLE `accomodation`
  ADD CONSTRAINT `fk_accomodation_places1` FOREIGN KEY (`places_place_code`) REFERENCES `places` (`place_code`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `adventure`
--
ALTER TABLE `adventure`
  ADD CONSTRAINT `fk_adventure_places1` FOREIGN KEY (`places_place_code`) REFERENCES `places` (`place_code`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `given_tour`
--
ALTER TABLE `given_tour`
  ADD CONSTRAINT `fk_Given_tour_places1` FOREIGN KEY (`places_place_code`) REFERENCES `places` (`place_code`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `historic`
--
ALTER TABLE `historic`
  ADD CONSTRAINT `fk_historic_places` FOREIGN KEY (`places_place_code`) REFERENCES `places` (`place_code`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_news_places1` FOREIGN KEY (`places_place_code`) REFERENCES `places` (`place_code`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `picnic`
--
ALTER TABLE `picnic`
  ADD CONSTRAINT `fk_picnic_places1` FOREIGN KEY (`places_place_code`) REFERENCES `places` (`place_code`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `popular`
--
ALTER TABLE `popular`
  ADD CONSTRAINT `fk_popular_places1` FOREIGN KEY (`places_place_code`) REFERENCES `places` (`place_code`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
