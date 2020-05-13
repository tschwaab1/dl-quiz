-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 01:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dl`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `qText` text NOT NULL,
  `qAnsw` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `qText`, `qAnsw`) VALUES
(1, 'The maximums of the R.C.A. (third-party motor liability) insurance policy are the maximum amounts that the insurance company undertakes to pay in the event of an accident', 1),
(2, 'If an injured person on the road has a heavy external hemorrhage, it is advisable, if possible, to put the injured person in a sitting or lying position, waiting for help to arrive', 1),
(3, 'Healing an injured person in the street can mean saving his life', 1),
(4, 'The maximum speed limit on the main extraurban roads is usually 110 km / h for motorcycles', 1),
(5, 'Road collisions occur mainly due to high speed', 1),
(6, 'The suspension of the licence is ordered when the holder is no longer in possession of the moral requirements', 0),
(7, 'It is forbidden to overtake the acceleration or deceleration lanes', 1),
(8, 'When driving on highways and main extra urban roads, the use of dipped-beam headlamps is compulsory even during the day', 1),
(9, 'The minimum safety distance if travelling at 150 km/h must be about 25 metres', 0),
(10, 'The warning light indicating that the belts have not been fastened can be disabled by the driver with a special control located on the dashboard', 0),
(11, 'The sidewalk only allows vehicles to be parked if there are special parking strips in place', 1),
(12, 'The safety distance depends on the efficiency of the handbrake', 0),
(13, 'Outside built-up areas, parking and stopping are forbidden at and near the intersection areas', 1),
(14, 'The retro-reflectors must be switched on together with the position lights', 0),
(15, 'Air pollution from motor vehicles may decrease if the weight of the vehicle is reduced', 1),
(16, 'The driver involved in a traffic accident for reporting the insurance can use the appropriate pre-printed forms provided by his insurance', 1),
(17, 'Outside built-up areas, at night, when the rear position or emergency lights are missing or insufficient, it is compulsory to signal the vehicle, stationary on the road, with the mobile triangular warning signal', 1),
(18, 'The correct use of the road means that one proceeds at high speed to avoid creating an obstacle', 0),
(19, 'It is mandatory to reduce the speed and, if necessary, stop when the pedestrians, who are on the route, show signs of uncertainty', 1),
(20, 'The danger of overtaking is determined by the risk of collision with the vehicle to be overtaken when approaching it', 1),
(21, 'During the operations of replacing a wheel using the jack, it is necessary to avoid getting yourself under the vehicle', 1),
(22, 'In two-way streets it is not allowed to reverse the direction of travel in all cases of poor visibility', 1),
(23, 'Child seats can also be made of craftsmanship, provided they are approved by an expert of the ASL', 0),
(24, 'It is forbidden to reverse the roadways, ramps and junctions of major highways and main roads', 1),
(25, 'The maximum speed limit on the main extra-urban roads is 110 km / h for cars with an appendix trolley', 1),
(26, 'When the vehicle is on a curve, the speed must be increased to avoid slippage', 0),
(27, 'When traveling in line with other vehicles, it is advisable to move as far as possible to the left, to create a free lane to the right', 0),
(28, 'In case of a thick fog it is advisable to circulate only with the lights on', 0),
(29, 'Outside the built-up areas, drivers must switch off the headlamps by moving on with the dipped headlights, if there is danger of dazzling drivers of vehicles circulating on other roads', 1),
(30, 'The number of persons that may be carried in passenger cars indicated on the registration certificate does not include the driver', 0),
(31, 'The safety distance is also commensurate with the speed limit shown on the back of the vehicle that precedes it', 0),
(32, 'On roads covered with snow, it is necessary to brake fully in case of vehicle heel', 0),
(33, 'The driver who intends to overtake must ensure that no vertical signal prohibits the manoeuvring', 1),
(34, 'When returning from overtaking, the driver must acoustically signal the manoeuvre to the vehicle overtaken', 0),
(35, 'The stop is forbidden on the areas destined to the market or to the loading and unloading of the goods', 0),
(36, 'The maximum limits of the R.C.A. insurance policy is returned to the customer at the end of the year, if no accidents are caused', 0),
(37, 'Excessive speed on curves can cause the vehicle to overturn', 1),
(38, 'If more than one violation is committed at the same time which leads to loss of points on the driving license, a maximum of 10 points may be deducted, except in the case of infringements involving the revocation of the license', 0),
(39, 'If at the intersection two vehicles arrive at the same time from different roads, the duty of giving priority to the driver of the vehicle traveling along the narrowest road', 0),
(40, 'The braking distance increases if the road is covered with snow', 1),
(41, 'If an injured person on the road is burned and there are still residual flames, you have to wait for them to go out by themselves, before intervening', 0),
(42, 'When driving in parallel rows, the motorcycles can proceed by passing between the vehicles side by side', 0),
(43, 'The warning light indicating that the belts have not been fastened can be disabled by the driver with a special control located on the dashboard', 0),
(44, 'If a person injured in the street has burned, it is advisable not to remove the clothes that have remained attached to the burnt skin', 1),
(45, 'It is forbidden to discharge the antifreeze liquid of the vehicle cooling circuit into the drain because it may not be biodegradable', 1),
(46, 'The airbag must not be used together with the seat belts', 0),
(47, 'The safety distance is also commensurate with the drivers psychophysical conditions', 1),
(48, 'outside built-up areas, when the vehicle is stationary, the driver must place it outside the roadway, including on cycle paths where appropriate', 0),
(49, 'Anyone who is criminally and civilly responsible for a road accident may incur in the suspension of the driving licence', 1),
(50, 'If the coefficient of adhesion decreases, the braking distance is reduced', 0),
(51, 'Aquaplaning reinforces the contact between tyres and asphalt', 0),
(52, 'When exiting a vehicle from a private property, priority must be given to pedestrians', 1),
(53, 'It is forbidden to reverse gear on the lanes for emergency stops on highways', 1),
(54, 'The use of direction indicators is necessary when driving in parallel rows, even if no lane changes are made', 0),
(55, 'The number of persons transportable in passenger cars may not exceed nine, including the driver', 1),
(56, 'Air pollution from vehicles is reduced if the air conditioning is left on', 0),
(57, 'During road traffic, to make themselves more visible, motorcycles must keep the low-beam headlamps on even during the day', 1),
(58, 'To turn right, keep as close to the left edge of the road as possible', 0),
(59, 'A helmet is mandatory for drivers of two-wheeled mopeds', 1),
(60, 'Driving ability may be compromised if hallucinogens (LSD, ecstasy, etc.) are used', 1),
(61, 'Overtaking at driveways is prohibited', 0),
(62, 'In first aid operations, the injured person must not be subjected to incorrect or harmful interventions', 1),
(63, 'When overtaking, the driver is required to stay in the overtaking lane for as long as possible', 0),
(64, 'Greater caution must be exercised with regard to drivers who demonstrate an uncertain driving style', 1),
(65, 'Crossing a level crossing without complying with all the rules laid down only involves a slight administrative penalty as there is no real danger for other users', 0),
(66, 'The airbag is only useful in extra-urban routes', 0),
(67, 'The loss of points on the driving licence for road traffic offences is doubled when driving a car with a power exceeding 115 kW', 0),
(68, 'The distance between trucks, in the presence of signs of prohibition of overtaking between them, must be at least 10 meters', 0),
(69, 'The maximum speed limit on secondary suburban roads is 70 km / h per car towing a caravan with a total weight of 900 kilograms', 1),
(70, 'The minimum safety distance when traveling at 30 km / h is about 9 meters', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tries`
--

CREATE TABLE `tries` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `state` tinyint(1) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` char(30) NOT NULL,
  `pass` char(32) NOT NULL,
  `email` char(30) NOT NULL,
  `ip` varchar(45) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `qnr` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `pass`, `email`, `ip`, `timestamp`, `qnr`) VALUES
(5, 'tschwaab', '06255ffba34b1f1cbe0abe39ebd9bb52', 'thomas@schwaab.bayern', '::1', 1589369545, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tries`
--
ALTER TABLE `tries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tries`
--
ALTER TABLE `tries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
