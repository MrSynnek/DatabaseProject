-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 06:29 PM
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
-- Database: `football_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `Name` varchar(100) NOT NULL,
  `Alias` varchar(30) DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL,
  `League` varchar(100) DEFAULT NULL,
  `In_sponser` bigint(20) DEFAULT NULL,
  `In_ticket` bigint(20) DEFAULT NULL,
  `In_copyr` bigint(20) DEFAULT NULL,
  `In_award` bigint(20) DEFAULT NULL,
  `In_playerout` bigint(20) DEFAULT NULL,
  `Ex_player` bigint(20) DEFAULT NULL,
  `Ex_staff` bigint(20) DEFAULT NULL,
  `Ex_state` bigint(20) DEFAULT NULL,
  `Ex_playerin` bigint(20) DEFAULT NULL,
  `Ex_misscell` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`Name`, `Alias`, `Location`, `League`, `In_sponser`, `In_ticket`, `In_copyr`, `In_award`, `In_playerout`, `Ex_player`, `Ex_staff`, `Ex_state`, `Ex_playerin`, `Ex_misscell`) VALUES
('AFC Wimbledon', 'Kingsmeadow', 'London', 'EFL League One', 1400000, 52900, 480500, 240000, 5550450, 3500555, 5700000, 550014, 180000, 1200),
('Arsenal', 'The Gunners', 'London', 'Premier League', 10500000, 350000, 3900000, 30700000, 40000000, 6500000, 1500000, 3000000, 15500000, 2000000),
('Aston villa', 'Villans', 'Birmingham', 'Premier League', 6000000, 150000, 9000000, 15000000, 2000000, 750000, 750000, 2500000, 25000000, 500000),
('Athletic Bilbao', 'The Lions', 'Bilbao ', 'La Liga', 5000000, 75373, 5000000, 200000, 40000000, 2300000, 1500000, 175000, 3555, 23000),
('Barnsley', 'the Tykes', 'Barnsley', 'EFL Championship', 10007550, 1455000, 4540005, 55500, 9500000, 46000000, 40000000, 80000, 6400000, 20000),
('Birmingham City', 'Blues', 'Birmingham', 'EFL Championship', 10000000, 980000, 4000000, 500000, 4010000, 34000000, 25500000, 55500, 9000000, 55000),
('Blackburn Rovers', 'The Riversiders', 'Blackburn', 'EFL Championship', 15000000, 540005, 4200000, 3000000, 15000000, 20000000, 15000055, 54005, 12000000, 38500),
('Blackpool', 'The Seasiders', 'blackpool', 'EFL Championship', 1500000, 240000, 544523, 154235, 2245550, 13000000, 13000000, 550004, 2500000, 24500),
('Bolton Wanderers', 'The Trotters', 'Bolton', 'EFL Championship', 4300000, 200000, 200000, 550000, 12300000, 20000000, 15000000, 300000, 14500000, 31500),
('Bournemouth', 'The Cherries', 'Bournemouth', 'EFL Championship', 3500000, 400000, 250000, 3500000, 15000000, 9000000, 8000000, 50000, 1200000, 20000),
('Bradford City', 'The Bantams', 'Bradford', 'EFL Championship', 1200000, 780000, 569000, 55500, 4000000, 2500000, 2400000, 45000, 2350000, 14555),
('Brentford', 'The Bees', 'London', 'EFL Championship', 1500055, 66000, 610000, 1000555, 900000, 9500000, 4500065, 60000, 400000, 25400),
('Brighton & Hove Albion', 'Seagulls', 'Brighton', 'EFL Championship', 1500000, 55500, 540000, 1000000, 1000000, 4000000, 3500000, 40000, 980000, 54005),
('Bristol City', 'The Robins', 'Bristol', 'EFL League One', 1200400, 60000, 480000, 200050, 5550540, 8500555, 5600000, 5500, 180000, 100),
('Bristol Rovers', 'The Pirates', 'Bristol', 'EFL League One', 1400000, 750040, 204000, 2200000, 8200000, 6400005, 3450000, 64400, 1205000, 68500),
('Bromley', 'Lilywhites', 'Bromley', 'National League', 14253725, 85247, 321457, 19632547, 10000000, 20000000, 2000000, 100000, 25000000, 75000),
('BurnleyCardiff City', 'WalesOnline', 'Burnley', 'EFL Championship', 1700000, 750040, 204000, 1200000, 9800000, 3400000, 3400000, 54400, 1200000, 65500),
('Burton Albion', 'Burton Albion', 'Burton', 'EFL League One', 1500055, 66000, 610000, 1200555, 980000, 9500000, 4500065, 60000, 400000, 25400),
('Cambridge United', 'United', 'Cambridge', 'EFL League Two', 200000, 222000, 23000, 50500, 75000, 782000, 56231, 32188, 33154, 731311),
('Cardiff City', 'The Bluebirds', 'Cardiff', 'EFL League One', 1600000, 51400, 480000, 201000, 5550000, 8500555, 5600000, 5500, 180000, 4003),
('Carlisle United', 'Cumbrians', 'Carlisle', 'EFL League Two', 52225, 54000, 56000, 95000, 900000, 95000, 56000, 56000, 80000, 98000),
('Charlton Athletic', 'The Addicks', 'London', 'EFL Championship', 1500000, 410555, 380000, 7000000, 800000, 500000, 200000, 160000, 2000000, 5555),
('Chelsea', 'The Blues', 'London', 'Premier League', 12500000, 300000, 3700000, 34600000, 45000000, 7000000, 1750000, 3200000, 100000000, 2500000),
('Cheltenham Town', 'Robins', 'Cheltenham', 'EFL League Two', 8000, 900000, 70000, 52225, 54000, 70000, 56000, 95000, 9000, 100000),
('Chesterfield', 'The Spireites', 'Chesterfield', 'EFL Championship', 11007550, 1455000, 4140005, 54500, 7500000, 2600000, 4500000, 800000, 6400000, 20000),
('Colchester United', 'The Us', 'Colchester', 'EFL League Two', 52225, 54000, 95000, 70000, 5000, 55500, 900000, 54000, 56000, 58000),
('Coventry City', 'the Sky Blues', 'Coventry', 'EFL Championship', 10000621, 65000, 950000, 12000, 7900000, 350000, 4203000, 2000000, 16000000, 4500000),
('Crawley Town', 'Reds', 'Crawley', 'EFL League Two', 52225, 75000, 70000, 555, 56000, 900000, 555, 95000, 56000, 98000),
('Crewe Alexandra', 'The Railwaymen', 'Crewe', 'EFL League Two', 52225, 56000, 54000, 50225, 900000, 95000, 58000, 75000, 50000, 55500),
('Crystal Palace', 'The Eagles', 'London', 'EFL Championship', 12000000, 100000, 125000, 450000000, 15000000, 2000000, 2640000, 7500000, 190000000, 150000),
('Derby County', 'The Rams', 'Derby', 'EFL Championship', 15000000, 12000000, 1250000, 35600000, 960000000, 42000000, 1600000, 120000, 78500000, 480000),
('Doncaster Rovers', 'Donny', 'Doncaster', 'EFL League One', 1230000, 23500, 140555, 234555, 1400000, 1240000, 1500000, 50000, 1200000, 8400),
('Everton', 'The Toffeemen', 'Liverpool', 'Premier League', 8000000, 250000, 3000000, 25000000, 39000000, 6500000, 1450000, 2500000, 75000000, 750000),
('Exeter City', 'Grecians', 'Exeter', 'EFL League Two', 980000, 98000, 900000, 98000, 70000, 54000, 56000, 52225, 54000, 80000),
('FC Barcelona', 'Barça', 'Barcelona', 'La Liga', 20000000, 400000, 400000, 50000000, 60000000, 10000000, 2000000, 33000, 3555000, 64000),
('Fleetwood Town', 'The Fishermen', 'Fleetwood', 'EFL League One', 450000, 54610, 555400, 530000, 555000, 10000000, 9500010, 70000, 572000, 4200),
('Forest Green Rovers', 'Rovers', 'Forest', 'EFL League Two', 52225, 56000, 95000, 54000, 70000, 900000, 56000, 75000, 56000, 95000),
('Fulham', 'The Cottagers', 'Fulham', 'EFL Championship', 7690005, 965000, 25000000, 36000000, 90000000, 32000000, 1000000, 120000, 100000000, 390000),
('Gillingham', 'The Gills', 'Gillingham', 'EFL League One', 1500000, 410555, 380000, 7000000, 800000, 500000, 200000, 160000, 2000000, 5555),
('Grimsby Town', 'the Mariners', 'Grimsby', 'EFL League Two', 52225, 95000, 56000, 900000, 65000, 56000, 70000, 54000, 80000, 75000),
('Huddersfield Town', 'The Terriers', 'Huddersfield', 'EFL Championship', 6510000, 1600000, 1900000, 29000000, 75000000, 1052500, 6500002, 165000, 54692000, 360000),
('Hull City', 'The Tigers', 'Hull', 'EFL Championship', 12560000, 250000, 15000000, 75000000, 12367000, 45000000, 26540000, 130000, 75060000, 310000),
('Ipswich Town F.C.', 'The Tractor Boys', 'Ipswich', 'EFL League One', 7541230, 62417, 300247, 1123475, 2000000, 2400000, 1500000, 140000, 2000000, 12000),
('Juventus F.C.', 'Juve', 'Turin', 'Serie A', 15000000, 600000, 5000000, 200000, 55000000, 80000000, 3400000, 4000000, 1500000, 350000),
('Leeds United', 'the Peacocks', 'Leeds', 'EFL Championship', 24651200, 894562, 1984600, 38945650, 78956420, 31200000, 1985600, 75000, 55640000, 75000),
('Leicester City', 'The Foxes', 'Leicester', 'Premier League', 6000000, 200000, 2700000, 23100000, 35000000, 6250000, 1700000, 3000000, 25000000, 250000),
('Leyton Orient', 'The Os', 'Leyton', 'EFL League Two', 400000, 56000, 900000, 940000, 98400, 9480, 9478, 47000, 900000, 95000),
('Lincoln City', 'The Imps', 'Lincoln', 'EFL League One', 1200000, 320000, 125000, 97500, 455000, 99000, 200000, 129000, 160000, 155000),
('Liverpool FC', 'The Reds', 'Liverpool', 'Premier League', 13000000, 350000, 4000000, 36500000, 40000000, 7000000, 1500000, 2700000, 50000000, 300000),
('Luton Town', 'the Hatters', 'Luton', 'EFL League One', 170000, 42400, 480000, 240000, 5550000, 8500555, 5600000, 5500, 180000, 1070),
('Macclesfield Town', 'The Silkmen', 'Macclesfield', 'EFL League Two', 52225, 40000, 900000, 54000, 56000, 9000, 84000, 4890, 70000, 9000),
('Maidenhead United', 'The Magpies', 'Maidenhead', 'National League', 12456575, 160247, 521476, 14235768, 27000000, 3000000, 1000000, 75000, 15000000, 25000),
('Manchester City', 'The Sky Blues', 'Manchester', 'Premier League', 20000000, 500000, 4000000, 7500000, 65000000, 1400000, 2000000, 4500000, 157000000, 16000000),
('Manchester United', 'the Red Devils', 'Manchester', 'Premier League', 15000000, 325000, 3450000, 28800000, 32000000, 5500000, 1250000, 2500000, 40000000, 1000000),
('Mansfield Town', 'The Stags', 'Mansfield', 'EFL League Two', 7541239, 62410, 301247, 1023475, 22000000, 2000000, 1500000, 100000, 20000000, 20000),
('Middlesbrough', 'The Boro', 'Middlesbrough', 'EFL Championship', 12000000, 85000, 756100, 13652000, 65000450, 286000542, 50000000, 500000, 75000000, 452100),
('Millwall', 'The Dockers', 'Millwall', 'EFL League One', 1240000, 524000, 440000, 210000, 5450000, 8500455, 5700000, 5500, 580000, 9070),
('Milton Keynes Dons', 'The Dons', 'Milton', 'EFL League One', 1500000, 12000, 550000, 120000000, 1890000, 1200000, 1100000, 79000, 1500000000, 50000),
('Morecambe', 'The Shrimps', 'Morecambe', 'EFL League Two', 8521476, 74124, 410237, 2014357, 35000000, 3000000, 2500000, 200000, 2000000, 35000),
('Newcastle United', 'The Magpies', 'Newcastle', 'Premier League', 6500000, 250000, 2200000, 15400000, 24000000, 2200000, 450000, 2000000, 12500000, 850000),
('Newport County', 'The Exiles', 'Newport', 'EFL League Two', 7412358, 85241, 521478, 2541376, 15000000, 4000000, 3500000, 70000, 7500000, 50000),
('Northampton Town', 'the Cobblers', 'Northampton', 'EFL League Two', 10245782, 75415, 1457235, 3214569, 40000000, 5000000, 1000000, 82000, 5000000, 100000),
('Norwich City FC', 'The Canaries', 'Norwich', 'Premier League', 5000000, 150000, 1500000, 9600000, 20000000, 2000000, 750000, 1750000, 20000000, 2000000),
('Nottingham Forest', 'the Tricky Trees', 'Nottingham', 'EFL Championship', 9654000, 945600, 35642000, 79582000, 6542000, 12650000, 1685760, 50000, 1325000, 10000),
('Oldham Athletic', 'Latics', 'Oldham', 'EFL Championship', 6458000, 56000, 614800, 4560000, 78650000, 36480000, 1264800, 360000, 89450000, 75600),
('Oxford United', 'The Us', 'Oxford', 'EFL League One', 59000000, 50000, 54000, 554000, 1200000, 1580000, 1230000, 68000, 1320000, 78000),
('Peterborough United', 'The Posh', 'Peterborough', 'EFL League One', 6800000, 57000, 480000, 1750000, 1470000, 1750000, 6500000, 75000, 1800000, 741000),
('Plymouth Argyle', 'The Pilgrims', 'Plymouth', 'EFL League Two', 12035478, 72537, 852475, 4752138, 25000000, 10000000, 2500000, 300000, 1200000, 75000),
('Port Vale', 'The Valiants', 'Port', 'EFL League Two', 17425368, 102457, 852471, 5231479, 15000000, 40000000, 5000000, 70000, 20000000, 75000),
('Portsmouth', 'Pompey boys', 'Portsmouth', 'EFL Championship', 25000000, 946523, 1000000, 48562000, 69750000, 1236000, 22200000, 364000, 54680000, 136500),
('Preston North End', 'The Lilywhites', 'Preston North', 'EFL League One', 1500000, 54000, 548600, 550005, 1500555, 5550000, 4300000, 55000, 590000, 60000),
('Queens Park Rangers', 'The Superhoops', 'London', 'EFL Championship', 21650000, 756200, 964852, 348600, 55684320, 1265000, 1400000, 96400, 46500000, 256100),
('Reading', 'The Royals', 'Reading', 'EFL Championship', 11695220, 1790000, 2100000, 34960000, 46200000, 19400000, 26840000, 230000, 15096000, 125600),
('Real Madrid CF', 'The Whites', 'Madrid', 'La Liga', 20000000, 150000, 400000, 30700000, 40000000, 10000000, 20000000, 175000, 15500000, 20000),
('Rochdale', 'the Dale', 'Rochdale', 'EFL League One', 7800000, 78000, 290000, 1400000, 2400000, 1320000, 1410000, 7800000, 2450000, 57000),
('Rotherham United', 'The Millers', 'Rotherham', 'EFL League One', 5620000, 50000, 250000, 1420000, 1890000, 1120000, 222100, 189000, 198000, 48500),
('Salford City', 'The Ammies', 'Salford', 'EFL League Two', 20123478, 142374, 952147, 6321487, 60000000, 15000000, 1500000, 75000, 10000000, 50000),
('Scunthorpe United', 'The Iron', 'Scunthorpe', 'EFL League Two', 15247536, 95201, 301247, 7589631, 40000000, 10000000, 2000000, 80000, 25000000, 100000),
('Sheffield United', 'The Blades', 'Sheffield', 'Premier League', 5500000, 150000, 2000000, 3800000, 10000000, 1500000, 600000, 1500000, 17000000, 2000000),
('Sheffield Wednesday', 'The Owls', 'Sheffield', 'EFL Championship', 741239, 42400, 301447, 1023475, 2250000, 2210000, 1500000, 100000, 21000000, 22000),
('Shrewsbury Town', 'The Shrews', 'Shrewsbury', 'EFL League One', 7500000, 50000, 210000, 1145000, 1000000, 1148500, 142500, 5980, 1840000, 14000),
('Southampton FC', 'The Saints', 'Southampton', 'Premier League', 6000000, 175000, 2200000, 1900000, 15000000, 1750000, 650000, 1500000, 15000000, 2000000),
('Southend United', 'The Shrimpers', 'Southend', 'EFL League One', 6410000, 78000, 231200, 1450000, 1230000, 1140000, 79000, 69000, 1560000, 76200),
('Stevenage', 'The Boro', 'Stevenage', 'EFL League Two', 12453457, 84207, 520147, 8532147, 15000000, 5000000, 2500000, 40000, 15000000, 45000),
('Stoke City', 'The Potters', 'Stoke', 'EFL Championship', 1025482, 754015, 1454035, 3214569, 45000000, 5200000, 1200000, 82000, 5720000, 102000),
('Sunderland', 'The Black Cats', 'Sunderland', 'EFL Championship', 1740000, 124000, 440000, 250000, 5480000, 8550455, 4700000, 514000, 550000, 4171),
('Swansea City', 'The Swans', 'Swansea', 'EFL League One', 1200000, 52400, 480000, 200000, 5550000, 8500555, 5600000, 5500, 580000, 8970),
('Swindon Town', 'The Robins', 'Swindon', 'EFL Championship', 3550000, 401000, 250000, 3500000, 14000000, 9500000, 8700000, 540000, 1220000, 20000),
('Torquay United', 'The Gulls', 'Torquay', 'National League', 8245637, 142357, 752413, 11369547, 35000000, 2500000, 5000000, 40000, 3500000, 75000),
('Tottenham Hotspur FC', 'The Lilywhites', 'London', 'Premier League', 10000000, 250000, 3400000, 32600000, 30000000, 6500000, 1700000, 2000000, 50000000, 5000000),
('Tranmere Rovers', 'Super White Army', 'Tranmere', 'EFL League One', 5800000, 56000, 262000, 1580000, 1230000, 1002000, 1140000, 58900, 1470000, 23000),
('Walsall', 'The Saddlers', 'Walsall', 'EFL League Two', 17423574, 72419, 602475, 10235478, 28000000, 8000000, 4500000, 60000, 1500000, 65000),
('Watford', 'The Hornets', 'Watford', 'EFL Championship', 2500000, 40000, 310000, 1245000, 1400000, 1748500, 142500, 600100, 1840000, 16000),
('West Bromwich Albion', 'the Baggies', 'West Bromwich', 'EFL Championship', 1750000, 92400, 440000, 200000, 5550000, 8500555, 5600000, 5500, 180000, 1720),
('West Ham United', 'The Hammers', 'West Ham', 'EFL Championship', 1700000, 12400, 430000, 250000, 4550000, 8500555, 5600000, 581200, 180000, 3540),
('Wigan Athletic', 'The Latics', 'Wigan', 'EFL Championship', 1750000, 52000, 780000, 250000, 5550000, 1500555, 1604000, 504700, 180000, 4070),
('Woking', 'The Cardinals', 'Woking', 'National League', 12425371, 75320, 421357, 14235870, 15000000, 15000000, 1500000, 120000, 2500000, 91000),
('Wolverhampton Wanderers', 'Wolves', 'Wolverhampton', 'EFL League One', 120400, 52400, 480000, 200000, 5550000, 8500555, 6600000, 75000, 180000, 1100),
('Wrexham', 'Red Dragons', 'Wrexham', 'National League', 21035478, 75869, 952413, 12458789, 45000000, 14000000, 2000000, 35000, 20000000, 150000),
('Wycombe Wanderers', 'The Chairboys', 'Wycombe', 'EFL League One', 1200000, 23600, 55500, 1540000, 505000, 1500000, 1230400, 65400, 4200000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Address` varchar(255) NOT NULL,
  `Clubname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Address`, `Clubname`) VALUES
('1 Maple Rd E, Luton LU4 8AW, United Kingdom', 'Luton Town'),
('125 London Rd, Macclesfield SK11 7SW, United Kingdom', 'Macclesfield Town'),
('250 Warwick Rd, Carlisle CA1 1LN, United Kingdom', 'Carlisle United'),
('45 Stadium Way, Huddersfield HD1 6PG, United Kingdom', 'Huddersfield Town'),
('5 St Gabriels Avenue, Peverell, Plymouth', 'Plymouth Argyle'),
('67 Waterloo Rd, Wolverhampton WV1 4QR, United Kingdom', 'Wolverhampton Wanderers'),
('9 Birmingham Rd, West Bromwich B71 4LF, United Kingdom', 'West Bromwich Albion'),
('ABAX Stadium, London Rd, Peterborough PE2 8AL, United Kingdom', 'Peterborough United'),
('Abbey Stadium, Newmarket Rd, Cambridge CB5 8LN, United Kingdom', 'Cambridge United'),
('Adams Park, Hillbottom Rd, High Wycombe HP12 4HJ, United Kingdom', 'Wycombe Wanderers'),
('Address: West Ham United PLC, London Stadium, Queen Elizabeth Olympic Park, London, E20 2STVAT No: 697 2532 95', 'West Ham United'),
('AFC Wimbledon The Cherry Red Records Stadium Jack Goodchild Way 422a Kingston Road Kingston upon Thames Surrey KT1 3PB', 'AFC Wimbledon'),
('American Express Community Stadium, Village Way, Brighton BN1 9BL, United Kingdom', 'Brighton & Hove Albion'),
('Anfield Road,Liverpool,L4 OTH', 'Liverpool FC'),
('Arístides Maillol s/n,08028 Barcelona (Vehicle entrance at gate 14)', 'FC Barcelona'),
('Ashton Rd, Bristol BS3 2EJ, United Kingdom', 'Bristol City'),
('Avda. de Concha Espina 1, 28036; Madrid - España', 'Real Madrid CF'),
('Bankss Stadium, Bescot Crescent, Walsall, West Midlands, WS1 4SA', 'Walsall'),
('Bannister Way, Wigan WN3 6LX, United Kingdom', 'Wigan Athletic'),
('bet365 Stadium, Stanley Matthews Way, Stoke-on-Trent ST4 4EG, United Kingdom', 'Stoke City'),
('Birmingham City Football Club plc St. Andrews Trillion Trophy Stadium Birmingham B9 4RL', 'Birmingham City'),
('Bloomfield Road, Seasiders Way, Blackpool FY1 6JJ, United Kingdom', 'Blackpool'),
('Blundell Park, Cleethorpes DN35 7PY, United Kingdom', 'Grimsby Town'),
('Boundary Park, Furtherwood Rd, Oldham OL1 2PA, United Kingdom', 'Oldham Athletic'),
('Brentford Football Club Griffin Park Braemar Road Brentford TW8 0NT', 'Brentford'),
('Breyer Group Stadium, Brisbane Rd, Leyton, London E10 5NF, United Kingdom', 'Leyton Orient'),
('Burnden Way, Horwich, Bolton BL6 6JW, United Kingdom', 'Bolton Wanderers'),
('Call: +44 (0)161 444 1894 (option 1, 1,1)\r\nEmail: access@mancity.com\r\nTweet: @mancityhelp\r\nWebsite: mancity.com/access', 'Manchester City'),
('Carrow Road,Norwich,NR1 1JE', 'Norwich City FC'),
('Chelsea,Fulham,London, SW6', 'Chelsea'),
('Cheltenham GL52 5NA, United Kingdom', 'Cheltenham Town'),
('Chesterfield Football Club, Proact Stadium, 1866 Sheffield Road Chesterfield Derbyshire S41 8NZ', 'Chesterfield'),
('Christie Way, Westgate, Morecambe LA4 4TB, United Kingdom', 'Morecambe'),
('County Rd, Swindon SN1 2ED, United Kingdom', 'Swindon Town'),
('Craven Cottage, Stevenage Rd, Fulham, London SW6 6HH, United Kingdom', 'Fulham'),
('Crown Oil Arena, Sandy Ln, Rochdale OL11 5DR, United Kingdom', 'Rochdale'),
('Deepdale Stadium, Sir Tom Finney Way, Preston, PR1 6RU.', 'Preston North End'),
('Elland Rd, Beeston, Leeds LS11 0ES, United Kingdom', 'Leeds United'),
('Everton,Goodison Road,Walton, Liverpool, England', 'Everton'),
('Ewood Park, Blackburn BB2 4JF, United Kingdom', 'Blackburn Rovers'),
('Filton Ave, Bristol BS7 0BF, United Kingdom', 'Bristol Rovers'),
('Fulham ,London, SW6 ,England', 'Chelsea'),
('Glanford Park, Jack Brownsword Way, Scunthorpe DN15 8TD, United Kingdom', 'Scunthorpe United'),
('Grenoble Rd, Littlemore, Oxford OX4 4XP, United Kingdom', 'Oxford United'),
('Gresty Rd, Crewe CW2 6EB, United Kingdom', 'Crewe Alexandra'),
('Hayes Ln, Bromley BR2 9EF, United Kingdom', 'Bromley'),
('Highbury House,75 Drayton Park,London, N5 1BU', 'Arsenal'),
('Highbury Stadium, Park Ave, Fleetwood FY7 6TX, United Kingdom', 'Fleetwood Town'),
('Hillsborough Stadium, Sheffield S6 1SW, United Kingdom', 'Sheffield Wednesday'),
('IRM: Marco Re\r\nAddress: Via Druento, 175 - 10151 Torino\r\nPhone: 899.999.897 (info and prices at the bottom of the page)\r\nFax: +39 011 5631177\r\nEmail: investor.relations@juventus.com', 'Juventus F.C.'),
('JobServe Community Stadium, Mile End, Colchester CO4 5UP, United Kingdom', 'Colchester United'),
('KCOM Stadium, Walton St, West Park, Hull HU3 6HU, United Kingdom', 'Hull City'),
('KCOM Stadium, West Park, Hull, HU3 6HU.', 'Hull City'),
('Keepmoat Stadium, Stadium Way, Doncaster, South Yorkshire DN4 5JW, United Kingdom', 'Doncaster Rovers'),
('Kiyan Prince Foundation Stadium South Africa RoadLondonW12 7PJ', 'Queens Park Rangers'),
('Leckwith Rd, Cardiff CF11 8AZ, United Kingdom', 'Cardiff City'),
('Liberty Stadium, Landore, Swansea, SA1 2FA', 'Swansea City'),
('Lilywhite House,782 High RoadLondon,N17 0BX ', 'Tottenham Hotspur FC'),
('Lincoln City Football Club LNER Stadium Lincoln Lincolnshire LN5 8LD', 'Lincoln City'),
('Manchester City FC\\r\\nEtihad Campus,\\r\\n400 Ashton New Road,\\r\\nManchester\\r\\nM11 4TQ\\r\\nTel: +44 (0) 161 444 1894', 'Manchester City'),
('Marnham Rd, Torquay TQ1 3PS, United Kingdom', 'Torquay United'),
('Montgomery Waters Meadow, Oteley Rd, Shrewsbury SY2 6ST, United Kingdom', 'Shrewsbury Town'),
('Newcastle upon Tyne NE1 4ST', 'Newcastle United'),
('Oakwell Stadium S71 1ET Barnsley (Residents: 73.500) England', 'Barnsley'),
('One Call Stadium, Quarry Ln, Mansfield NG18 5DA, United Kingdom', 'Mansfield Town'),
('Pirelli Stadium, Princess Way, Burton upon Trent, Burton-on-Trent DE13 0AR, United Kingdom', 'Burton Albion'),
('Portman Rd, Ipswich IP1 2DA, United Kingdom', 'Ipswich Town F.C.'),
('Portsmouth Football Club Fratton Park Frogmore Road Portsmouth PO4 8RA', 'Portsmouth'),
('Prenton Rd W, Birkenhead CH42 9PY, United Kingdom', 'Tranmere Rovers'),
('PTS Academy Stadium, Upton Way, Northampton NN5 5QA, United Kingdom', 'Northampton Town'),
('Racecourse Ground, Mold Rd, Wrexham LL11 2AH, United Kingdom', 'Wrexham'),
('Reading Football Club, Madejski Stadium, Junction 11, M4, Reading, Berkshire, England, UK, RG2 0FL.', 'Reading'),
('Redfern Ave, Gillingham ME7 4DD, United Kingdom', 'Gillingham'),
('Riverside Stadium, Middlesbrough TS3 6RS, United Kingdom', 'Middlesbrough'),
('Rodney Parade, Rodney Rd, Newport NP19 0UU, United Kingdom', 'Newport County'),
('ROOTS HALL, Victoria Ave, Westcliff-on-Sea, Southend-on-Sea SS2 6NQ, United Kingdom', 'Southend United'),
('Royal Way, Derby DE24 8XL, United Kingdom', 'Derby County'),
('Selhurst Park SE25 6PU London (Residents: 8.908.081) England', 'Crystal Palace'),
('Sheffield United,Bramall Lane	', 'Sheffield United'),
('Sky Blue Lodge, Leamington Rd, Ryton-on-Dunsmore, Coventry CV8 3FL, United Kingdom', 'Coventry City'),
('Southampton,Britannia Rd		\r\n', 'Southampton FC'),
('St James Park Stadium Way, Exeter EX4 6PX, United Kingdom', 'Exeter City'),
('Stadium of Light, Millenium Way, Monkwearmouth, Sunderland SR5 1SU, United Kingdom', 'Sunderland'),
('Stadium Way W, Bletchley, Milton Keynes MK1 1ST, United Kingdom', 'Milton Keynes Dons'),
('Stevenage Football Club The Lamex Stadium Broadhall Way StevenageHerts SG2 8RH', 'Stevenage'),
('Telephone: 902 1899 00 or +34 93 496 3600 (from abroad) By fax or e-mail: + 34 93 496 37 97 or write an e-mail to oab@fcbarcelona.cat.', 'FC Barcelona'),
('THE AESSEAL NEW YORK STADIUM, New York Way, Rotherham S60 1AH.', 'Rotherham United'),
('The Laithwaite Community Stadium, Woking GU22 9AA, United Kingdom', 'Woking'),
('The New Lawn Stadium, Another Way, Nailsworth GL6 0FG, United Kingdom', 'Forest Green Rovers'),
('The Nottingham Forest Football Club, The Nottingham Ground, West Bridgford, Nottingham NG2 5FJ, United Kingdom', 'Nottingham Forest'),
('The Peninsula Stadium, Moor Ln, Salford M7 3PZ, United Kingdom', 'Salford City'),
('The Peoples Pension Stadium, Winfield Way, Crawley, West Sussex, RH11 9RX.', 'Crawley Town'),
('The Utilita Energy Stadium, Valley Parade, Bradford BD8 7DY, United Kingdom', 'Bradford City'),
('The Valley, Floyd Rd, Charlton, London SE7 8BL, United Kingdom', 'Charlton Athletic'),
('Vale Park ST6 1AW Burslem, Stoke-on-Trent (Residents: 14.303) England', 'Port Vale'),
('Vicarage Rd, Watford WD18 0ER, United Kingdom', 'Watford'),
('Villa Parkm,Birmingham,B6 6HE', 'Aston villa'),
('Vitality Stadium Dean Court Kings Park BH7 7AF', 'Bournemouth'),
('York Rd, Maidenhead SL6 1SF, United Kingdom', 'Maidenhead United'),
('Zampa Rd, London SE16 3LN, United Kingdom', 'Millwall');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `Number` int(11) NOT NULL,
  `Player_id` int(8) NOT NULL,
  `Clubname` varchar(100) NOT NULL,
  `Start_date` date DEFAULT NULL,
  `Expire_date` date DEFAULT NULL,
  `Salary(Euro)` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`Number`, `Player_id`, `Clubname`, `Start_date`, `Expire_date`, `Salary(Euro)`) VALUES
(1, 15, 'Manchester City', '2017-04-08', '2023-04-08', 16683333),
(2, 24, 'Manchester City', '2019-06-04', '2023-06-04', 15600000),
(3, 16, 'Manchester City', '2019-04-10', '2025-04-10', 7800000),
(4, 6, 'Manchester City', '2019-04-10', '2025-04-10', 6240000),
(5, 20, 'Manchester City', '2019-07-14', '2024-07-14', 6300000),
(6, 23, 'Manchester City', '2018-04-26', '2023-04-26', 6240000),
(7, 5, 'Manchester City', '2016-05-27', '2022-05-27', 5200000),
(8, 8, 'Manchester City', '2015-04-15', '2020-04-15', 6240000),
(9, 14, 'Manchester City', '2019-04-24', '2023-04-24', 7280000),
(10, 4, 'Manchester City', '2019-04-24', '2024-04-24', 5720000),
(11, 7, 'Manchester City', '2019-04-27', '2024-04-27', 4680000),
(12, 17, 'Manchester City', '2017-05-18', '2020-05-18', 8320000),
(13, 10, 'Manchester City', '2019-05-14', '2025-05-14', 4160000),
(14, 25, 'Manchester City', '2019-04-10', '2021-04-10', 11967000),
(15, 26, 'Manchester City', '2016-03-18', '2021-03-18', 4680000),
(16, 27, 'Manchester City', '2018-06-19', '2023-06-19', 4680000),
(17, 2, 'Manchester City', '2017-04-03', '2022-04-03', 3380000),
(18, 1, 'Manchester City', '2016-04-01', '2020-04-01', 4160000),
(19, 18, 'Manchester City', '2019-04-23', '2021-04-23', 7800000),
(20, 9, 'Manchester City', '2019-04-15', '2024-04-15', 1040000),
(21, 19, 'Manchester City', '2019-04-15', '2024-04-15', 624000),
(22, 3, 'Manchester City', '2019-04-15', '2020-04-15', 160000),
(23, 11, 'Manchester City', '2019-04-09', '2021-04-09', 135000),
(24, 12, 'Manchester City', '2019-04-15', '2021-04-15', 135000),
(25, 13, 'Manchester City', '2019-04-15', '2021-04-15', 163000),
(26, 22, 'Manchester City', '2018-06-30', '2020-06-30', 260000),
(27, 21, 'Manchester City', '2019-08-15', '2020-08-15', 270000),
(28, 30, 'Manchester City', '2020-04-26', '2022-04-26', 17600000),
(29, 28, 'Manchester City', '2020-03-15', '2025-04-15', 18200000),
(30, 29, 'Manchester City', '2020-04-15', '2022-04-15', 11200000),
(31, 31, 'Manchester City', '2020-05-20', '2024-05-20', 11866666),
(32, 32, 'Manchester City', '2015-04-11', '2021-04-11', 8520000),
(33, 33, 'Manchester City', '2015-04-11', '2021-04-11', 9792000),
(34, 34, 'Manchester City', '2018-03-15', '2022-03-18', 280000),
(35, 35, 'Manchester City', '2020-02-06', '2022-03-18', 479030),
(36, 36, 'Manchester City', '2020-02-06', '2022-02-06', 291000),
(37, 37, 'Manchester City', '2019-09-04', '2021-09-04', 760000),
(38, 38, 'Manchester City', '2017-03-18', '2021-03-18', 547832),
(39, 39, 'Manchester City', '2019-02-25', '2021-02-25', 284500),
(40, 40, 'Manchester City', '2017-03-18', '2021-03-18', 446000),
(41, 41, 'Manchester City', '2018-07-16', '2020-07-16', 699000),
(42, 42, 'Manchester City', '2020-02-06', '2022-02-06', 195500),
(43, 43, 'Manchester City', '2015-04-11', '2021-04-11', 606000),
(44, 44, 'Manchester City', '2019-02-25', '2021-02-25', 211000),
(45, 45, 'Manchester City', '2017-03-18', '2021-03-18', 303000),
(46, 46, 'Manchester City', '2018-07-19', '2020-07-19', 200000),
(47, 47, 'Manchester City', '2018-03-15', '2022-03-15', 540705),
(48, 48, 'Manchester City', '2019-08-16', '2023-08-16', 520000),
(49, 49, 'Manchester City', '2018-10-10', '2020-10-10', 350000),
(50, 50, 'Manchester City', '2018-10-10', '2020-10-10', 358600),
(51, 51, 'Manchester City', '2019-04-15', '2025-04-15', 16000000),
(52, 52, 'Manchester City', '2019-04-15', '2022-04-15', 9000000),
(53, 53, 'Manchester City', '2020-06-20', '2022-06-20', 7600000),
(54, 54, 'Manchester City', '2020-06-20', '2022-06-20', 7600000),
(55, 65, 'Manchester City', '2020-06-20', '2022-06-20', 7500000),
(56, 64, 'Manchester City', '2020-06-20', '2022-06-20', 6000000),
(57, 63, 'Manchester City', '2020-07-18', '2022-07-18', 5600000),
(58, 62, 'Manchester City', '2020-07-20', '2023-07-20', 4600000),
(59, 61, 'Manchester City', '2020-08-20', '2024-08-20', 5600000),
(60, 60, 'Manchester City', '2020-08-20', '2025-08-20', 2600000),
(61, 59, 'Manchester City', '2020-08-21', '2025-08-21', 3600000),
(62, 58, 'Manchester City', '2020-08-21', '2025-08-21', 6000000),
(63, 57, 'Manchester City', '2020-09-03', '2023-09-03', 4600000),
(64, 56, 'Manchester City', '2020-09-03', '2021-09-03', 2600000),
(65, 55, 'Manchester City', '2020-09-03', '2021-09-03', 2600000),
(66, 76, 'Manchester City', '2020-09-05', '2022-09-05', 1720000),
(67, 77, 'Manchester City', '2020-09-05', '2022-09-05', 1620000),
(68, 78, 'Manchester City', '2020-10-18', '2022-10-18', 1500000),
(69, 79, 'Manchester City', '2020-07-20', '2023-10-18', 1460000),
(70, 80, 'Manchester City', '2020-08-20', '2024-10-19', 1400000),
(71, 75, 'Manchester City', '2020-10-20', '2023-10-20', 760000),
(72, 74, 'Manchester City', '2020-08-21', '2023-08-21', 960000),
(73, 73, 'Manchester City', '2020-08-21', '2023-08-21', 660000),
(74, 72, 'Manchester City', '2020-09-20', '2021-09-20', 650000),
(75, 71, 'Manchester City', '2020-11-20', '2022-11-20', 620000),
(76, 70, 'Manchester City', '2020-09-22', '2023-09-22', 650000),
(77, 69, 'Manchester City', '2020-08-21', '2021-08-21', 720000),
(78, 68, 'Manchester City', '2020-11-20', '2021-11-20', 760000),
(79, 67, 'Manchester City', '2020-12-18', '2021-12-18', 640000),
(80, 66, 'Manchester City', '2020-12-18', '2021-12-18', 680000),
(81, 81, 'Manchester City', '2019-06-25', '2025-06-25', 2800000),
(82, 82, 'Manchester City', '2019-04-15', '2021-04-15', 1600000),
(83, 83, 'Manchester City', '2019-02-25', '2021-02-25', 1624000),
(84, 94, 'Manchester City', '2019-06-25', '2025-06-25', 2800000),
(85, 93, 'Manchester City', '2019-04-15', '2021-04-15', 1600000),
(86, 92, 'Manchester City', '2018-05-12', '2022-05-12', 1000000),
(87, 91, 'Manchester City', '2019-02-16', '2021-02-16', 1600000),
(88, 90, 'Manchester City', '2020-03-25', '2022-03-25', 884000),
(89, 89, 'Manchester City', '2019-02-25', '2021-02-25', 1164000),
(90, 88, 'Manchester City', '2019-02-25', '2021-02-25', 624000),
(91, 87, 'Manchester City', '2019-02-25', '2021-02-25', 1624000),
(92, 86, 'Manchester City', '2019-02-25', '2021-02-25', 1600000),
(93, 85, 'Manchester City', '2019-02-25', '2021-02-25', 924000),
(94, 84, 'Manchester City', '2019-03-25', '2022-03-25', 1604000),
(95, 95, 'Manchester City', '2020-01-01', '2022-01-01', 1200000),
(96, 96, 'Manchester City', '2020-05-08', '2022-06-08', 1250000),
(97, 97, 'Manchester City', '2020-06-19', '2025-06-19', 880000),
(98, 98, 'Manchester City', '2017-03-18', '2021-03-18', 800000),
(99, 99, 'Manchester City', '2020-05-13', '2025-05-13', 2800000),
(100, 100, 'Manchester City', '2020-05-13', '2025-05-13', 1200000);

-- --------------------------------------------------------

--
-- Table structure for table `eventdate`
--

CREATE TABLE `eventdate` (
  `Edate` date DEFAULT NULL,
  `Clubname` varchar(100) DEFAULT NULL,
  `vita` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventdate`
--

INSERT INTO `eventdate` (`Edate`, `Clubname`, `vita`) VALUES
('2020-04-27', 'Manchester City', 'Friendly match \r\nManchester City vs Manchester United\r\nAt 1.00 P.M.'),
('2020-04-29', 'Manchester City', 'Going to Instanbul, prepare for againt A.C.Milan'),
('2020-05-01', 'Manchester City', 'All players practice in the prepared stadium'),
('2020-05-03', 'Manchester City', 'UEFA CHAMPION LEAGUE\r\nA.C. MILAN VS MANCHESTER CITY\r\nAT 9.00 P.M.'),
('2020-05-04', 'Manchester City', 'All players take the long vacation'),
('2020-05-03', 'FC Barcelona', 'vs Realmadrid'),
('2020-05-04', 'Manchester City', 'vs Spurs'),
('2020-05-10', 'Manchester City', 'Friendly Match vs Buriram United'),
('2020-05-15', 'Manchester City', 'vs Dundee United FC'),
('2020-05-16', 'FC Barcelona', 'Meet and greet fanclub'),
('2020-06-05', 'Juventus F.C.', 'Friendly Match Muangthong United'),
('2020-06-07', 'Manchester City', 'vs Manchester United'),
('2020-06-10', 'Juventus F.C.', 'vs Torquay United'),
('2020-06-17', 'Manchester City', 'Meet and greet fanclub'),
('2020-07-14', 'Manchester City', 'vs West Ham'),
('2020-07-26', 'Manchester City', 'vs Arsenal'),
('2020-07-30', 'FC Barcelona', 'New kit lauch'),
('2020-07-24', 'Manchester City', 'vs Birmingham City'),
('2020-08-07', 'FC Barcelona', 'meet and greet fanclub'),
('2020-08-09', 'Manchester City', 'Friendly Match vs FC seoul'),
('2020-08-11', 'Juventus F.C.', 'vs Roma'),
('2020-08-13', 'Juventus F.C.', 'vs Dundee United FC'),
('2020-09-08', 'Manchester City', 'Friendly Match Eagle Friend Police'),
('2020-09-20', 'Juventus F.C.', 'Meet and greet fanclub'),
('2020-05-02', 'Manchester City', 'vs Liverpool FC '),
('2020-05-02', 'Liverpool FC', 'vs Manchester City '),
('2020-05-02', 'Juventus F.C.', 'vs Lazio'),
('2020-05-02', 'FC Barcelona', 'vs Espanyol'),
('2020-05-07', 'FC Barcelona', 'vs Celta Vigo'),
('2020-05-07', 'Chelsea', 'vs Crystal Palace'),
('2020-05-07', 'Leicester City', 'vs AFC Bournemouth'),
('2020-05-09', 'Juventus F.C.', 'vs Roma'),
('2020-05-09', 'FC Barcelona', 'vs Atlético Madrid '),
('2020-05-14', 'FC Barcelona', 'vs Real Madrid'),
('2020-05-14', 'Manchester United', 'vs Arsenal'),
('2020-05-14', 'Arsenal', 'Manchester United'),
('2020-05-14', 'Juventus F.C.', 'vs Napoli'),
('2020-05-17', 'FC Barcelona', 'vs Athletic Bilbao'),
('2020-05-20', 'Manchester City', 'vs West Ham United'),
('2020-05-20', 'Tottenham Hotspur FC', 'vs Burnley'),
('2020-05-20', 'FC Barcelona', 'vs Real Sociedad'),
('2020-05-21', 'Liverpool FC', 'vs Bolton Wanderrers'),
('2020-05-21', 'Newcastle United', 'vs Everton'),
('2020-05-21', 'Everton', 'vs Newcastle United'),
('2020-05-21', 'Juventus F.C.', 'vs AC Milan'),
('2020-05-21', 'Norwich City FC', 'VS Aston Villa'),
('2020-05-21', 'Aston villa', 'vs Norwich City FC'),
('2020-05-23', 'Sheffield United', 'vs Brighton and Hove Albion'),
('2020-05-23', 'Juventus F.C.', 'Parma'),
('2020-05-23', 'Liverpool FC', 'Hull City'),
('2020-05-24', 'FC Barcelona', 'vs Real Betis'),
('2020-05-21', 'Bournemouth', 'vs Liverpool Fc'),
('2020-05-02', 'Barnsley', 'vs Fulham'),
('2020-05-31', 'Bristol City', 'vs Plymouth Argyle'),
('2020-05-31', 'Cardiff City', 'vs Northampton Town'),
('2020-05-31', 'Luton Town', 'vs Newport County'),
('2020-05-31', 'Millwall', 'vs Morecambe'),
('2020-05-31', 'Preston North End', 'vs Mansfield Town'),
('2020-05-06', 'Swansea City', 'vs Macclesfield Town'),
('2020-05-06', 'Bristol Rovers', 'vs Leyton Orient'),
('2020-05-06', 'Burton Albion', 'vs Grimsby Town'),
('2020-05-06', 'Doncaster Rovers', 'vs Forest Green Rovers'),
('2020-05-06', 'Fleetwood Town', 'vs Exeter City'),
('2020-05-07', 'Gillingham', 'vs Crewe Alexandra'),
('2020-05-07', 'Lincoln City', 'vs Crawley Town'),
('2020-05-02', 'Birmingham City', 'vs Derby County'),
('2020-05-02', 'Blackburn Rovers', 'vs Crystal Palace'),
('2020-05-07', 'Blackpool', 'vs Crystal Palace'),
('2020-05-07', 'Bolton Wanderers', 'vs Coventry City'),
('2020-05-07', 'Bournemouth', 'vs Brentford'),
('2020-05-09', 'Bradford City', 'vs BurnleyCardiff City'),
('2020-05-09', 'Brighton & Hove Albion', 'vs Bradford City'),
('2020-05-09', 'BurnleyCardiff City', 'vs Atlético Madrid'),
('2020-05-14', 'Brentford', 'vs Bournemouth'),
('2020-05-14', 'Charlton Athletic', 'vs Bolton Wanderers'),
('2020-05-14', 'Coventry City', 'vs Blackpool'),
('2020-05-14', 'Crystal Palace', 'vs Blackburn Rovers'),
('2020-05-17', 'Derby County', 'vs Birmingham City'),
('2020-05-20', 'Fulham', 'vs Barnsley'),
('2020-05-14', 'Crystal Palace', 'vs Blackburn Rovers'),
('2020-05-17', 'Derby County', 'vs Birmingham City'),
('2020-05-20', 'Fulham', 'vs Barnsley'),
('2020-05-23', 'Oldham Athletic', 'vs Sevilla'),
('2020-05-23', 'Portsmouth', 'vs Parma'),
('2020-05-23', 'Queens Park Rangers', 'vs Manchester United'),
('2020-05-23', 'Reading', 'vs Real Betis'),
('2020-05-24', 'Sheffield Wednesday', 'vs Woking'),
('2020-05-24', 'Stoke City', 'vs Bromley'),
('2020-05-24', 'Sunderland', 'vs Maidenhead United'),
('2020-05-24', 'Chesterfield', 'vs Wrexham'),
('2020-05-24', 'Swindon Town', 'vs Torquay United'),
('2020-05-30', 'Watford', 'vs Walsall'),
('2020-05-30', 'West Bromwich Albion', 'vs Swindon Town'),
('2020-05-30', 'West Ham United', 'vs Stevenage'),
('2020-05-30', 'Wigan Athletic', 'vs Scunthorpe United'),
('2020-05-30', 'AFC Wimbledon', 'vs Salford City'),
('2020-05-30', 'Wolverhampton Wanderers', 'vs Port Vale'),
('2020-04-27', 'Aston villa', 'vs Espanyol'),
('2020-06-13', 'Blackburn Rovers', 'vs Real Madrid'),
('2020-05-04', 'Cheltenham Town', 'Vs Bolton Wanderrors');

-- --------------------------------------------------------

--
-- Table structure for table `formation`
--

CREATE TABLE `formation` (
  `Clubname` varchar(100) DEFAULT NULL,
  `Formation` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formation`
--

INSERT INTO `formation` (`Clubname`, `Formation`) VALUES
('Manchester City', '4-3-3'),
('Manchester City', '4-5-1'),
('Manchester City', '4-4-2'),
('Manchester City', '3-4-3'),
('Manchester City', '4-2-3-1'),
('Manchester City', '3-5-2'),
('Manchester City', '4-1-4-1'),
('Manchester City', '5-4-1'),
('Manchester City', '4-1-2-1-2'),
('Manchester City', '4-2-4'),
('Manchester City', '4-3-2-1'),
('Manchester City', '3-3-1-3'),
('Manchester City', '3-3-3-1'),
('Manchester City', '3-6-1'),
('Manchester City', '1-6-3'),
('Manchester City', '3-4-1-2'),
('Manchester City', '2-3-5'),
('Manchester City', '2-3-2-3'),
('Manchester City', '2-5-3'),
('Manchester City', '1-4-3-2'),
('Manchester City', '4-2-2-2'),
('Manchester City', '1-4-2-3'),
('Manchester City', '4-3-1-2'),
('Manchester City', '4-6-0'),
('Manchester City', '4-4-1-1'),
('Manchester City', '3-4-2-1'),
('Manchester City', '5-3-2'),
('Manchester City', '3-3-4');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `Id` int(8) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Bdate` date DEFAULT NULL,
  `National` varchar(40) DEFAULT NULL,
  `SN` int(2) DEFAULT NULL,
  `Position` varchar(3) DEFAULT NULL,
  `IsCaptian` varchar(1) DEFAULT NULL,
  `Clubname` varchar(100) DEFAULT NULL,
  `substitute` varchar(1) DEFAULT NULL,
  `vita` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`Id`, `Name`, `Bdate`, `National`, `SN`, `Position`, `IsCaptian`, `Clubname`, `substitute`, `vita`) VALUES
(1, 'Claudio Bravo', '1983-04-14', 'Chilean', 1, 'GK', 'N', 'Manchester City', 'N', 'The Chilean goalkeeper signed a four-year deal at the Etihad Stadium as he swapped Barcelona for City and brought a wealth of experience, having lifted back to back La Liga titles and two Copa Americas.'),
(2, 'Ederson', '1993-08-17', 'Brazilian', 31, 'GK', 'N', 'Manchester City', 'Y', 'Ederson arrived at City on 1 July 2017 with a reputation as one of the brightest young goalkeeping prospects in world football.'),
(3, 'Scott Carson', '1985-09-03', 'English', 33, 'GK', 'N', 'Manchester City', 'Y', 'Former England international goalkeeper Scott Carson signed for Manchester City on a season-long loan deal on deadline day of the August 2019 transfer window.'),
(4, 'Kyle Walker', '1990-05-28', 'English', 2, 'RB', 'N', 'Manchester City', 'N', 'The 29-year-old has made the right-back slot his own and won six trophies in his first two seasons.'),
(5, 'John Stones', '1994-05-28', 'English', 5, 'CB', 'N', 'Manchester City', 'Y', 'A product of Barnsley’s academy, John Stones built a reputation of an assured ball-playing centre-half with Everton before signing for City in August 2016.'),
(6, 'Aymeric Laporte', '1994-05-27', 'French', 14, 'CB', 'N', 'Manchester City', 'N', 'Signed from Athletic Bilbao midway through Pep Guardiola’s second season.The 25-year-old arrived with a reputation as one of Europe’s most promising defenders.'),
(7, 'Benjamin Mendy', '1994-07-17', 'French', 22, 'CB', 'N', 'Manchester City', 'Y', 'He made 16 appearances in total and registered five assists as City lifted the Premier League, FA Cup, Carabao Cup and Community shield.'),
(8, 'Nicolás Otamendi', '1988-02-12', 'Argentine', 30, 'CB', 'N', 'Manchester City', 'N', 'A physically imposing centre-half, the 31-year-old had already proven himself in Portugal and Spain before arriving in Manchester, where he was instrumental in Manchester City title win.'),
(9, 'Oleksandr Zinchenko', '1996-12-15', 'Ukrainian', 11, 'LB', 'N', 'Manchester City', 'N', 'A left-sided attacking midfielder, he was immediately sent on loan to PSV Eindhoven, where, by his own admission, he didn’t play as much as he would have liked.'),
(10, 'João Cancelo', '1994-05-27', ' Portuguese', 27, 'RB', 'N', 'Manchester City', 'Y', 'The defender penned a deal which keeps him at the Etihad Stadium until the summer of 2025 and followed Angelino and Rodrigo to become Pep Guardiola’s third signing of the summer.'),
(11, 'Eric García', '2001-01-09', 'Spanish', 50, 'RB', 'N', 'Manchester City', 'Y', 'Always cool, calm and collected, he has so far passed every test with flying colours - as he proved in his senior debut where he again looked mature beyond his years.'),
(12, 'Taylor Harwood-Bellis', '2001-01-09', 'English', 72, 'LB', 'N', 'Manchester City', 'Y', 'Harwood-Bellis started playing with Manchester City from the age of six.He came through the same Stockport Metro Junior League that produced City team-mate Phil Foden.'),
(13, 'Alpha Richard Dionkou', '2001-10-10', 'Senegalese', 88, 'CB', 'N', 'Manchester City', 'Y', 'An all-action full-back, Alpha made the move to City from Real Mallorca in 2017 and has gone from strength to strength ever since.'),
(14, 'Ilkay Gündogan', '1990-10-24', 'German', 8, 'CM', 'N', 'Manchester City', 'N', 'A German professional footballer who plays as a midfielder for Premier League club Manchester City and the Germany national team.'),
(15, 'Kevin De Bruyne', '1991-06-28', 'Belgian', 17, 'CAM', 'N', 'Manchester City', 'N', 'A Belgian professional footballer who plays as a midfielder for Premier League club Manchester City and the Belgian national team. Recognised for his passing, dribbling, tackling and shooting ability, lead him to one of the best in the world.'),
(16, 'Bernardo Silva', '1994-08-10', 'Portuguese', 20, 'RM', 'N', 'Manchester City', 'Y', 'Bernardo is a Portuguese professional footballer who plays as a midfielder for English Premier League club Manchester City and the Portugal national team.'),
(17, 'David Silva', '1986-01-08', 'Spanish', 21, 'CM', 'Y', 'Manchester City', 'N', 'A Spanish professional footballer who plays for and captains Premier League club Manchester City. Silva plays mainly as a central or an attacking midfielder but can also play as a winger or second striker. '),
(18, 'Fernandinho', '1985-05-04', 'Brazilian', 25, 'CDM', 'N', 'Manchester City', 'Y', 'A Brazilian professional footballer who plays as a midfielder and central defender for English Premier League club Manchester City and the Brazil national team. He has also captained both sides on many occasions.'),
(19, 'Phil Foden', '2000-05-28', 'English', 47, 'RM', 'N', 'Manchester City', 'Y', 'An English professional footballer who plays as a midfielder for Premier League club Manchester City and the England under-21 team.'),
(20, 'Rodrigo', '1996-06-22', 'Spanish', 16, 'CM', 'N', 'Manchester City', 'Y', 'A Spanish professional footballer who plays as a defensive midfielder for English Premier League club Manchester City and the Spain national team.'),
(21, 'Adrián Bernabé', '2001-05-26', 'Spanish', 66, 'CM', 'N', 'Manchester City', 'Y', 'A Spanish football midfielder who currently plays for Manchester City.'),
(22, 'Tommy Doyle', '2001-10-17', 'English', 69, 'CM', 'N', 'Manchester City', 'Y', 'An English professional footballer who plays as a midfielder for Manchester City.'),
(23, 'Riyad Mahrez ', '1991-02-21', 'Algerian', 26, 'RW', 'N', 'Manchester City', 'N', 'A professional footballer who plays as a winger for Premier League club Manchester City and captains the Algerian national team.'),
(24, 'Raheem Sterling', '1994-12-08', 'English', 7, 'LW', 'N', 'Manchester City', 'Y', 'A professional footballer who plays as a winger and attacking midfielder for Premier League club Manchester City and the England national team. He is often considered to be one of the best players in the world.'),
(25, 'Sergio Agüero', '1998-06-02', 'Argentine', 10, 'ST', 'N', 'Manchester City', 'Y', 'An Argentine professional footballer who plays as a striker for English Premier League club Manchester City and the Argentine national team. He is widely considered as one of the best players of his generation.'),
(26, 'Leroy Sané', '1996-01-11', 'German', 19, 'RW', 'N', 'Manchester City', 'Y', 'He made his professional debut for Schalke 04 in 2014 and transferred to Manchester City in 2016 for an initial £37 million fee. He was voted PFA Young Player of the Year in 2017–18 after helping City win the Premier League and EFL Cup.'),
(27, 'Gabriel Jesus', '1997-04-03', 'Brazilian', 9, 'LW', 'N', 'Manchester City', 'Y', 'He was voted the best newcomer of the 2015 Campeonato Brasileiro Série A, a year in which he also helped his team win the Copa do Brasil. The following year he was named the player of the season as Palmeiras won their '),
(28, 'Lionel Messi', '1987-06-24', 'Argentine', 99, 'RW', 'N', 'Manchester City', 'Y', 'One of the most famous athletes in the world,who plays as a forward and captains both Spanish club Barcelona and the Argentina national team.Messi has won a record six Ballon d\'Or awards and a record six European Golden Shoes.'),
(29, 'Paulo Dybala', '1993-11-15', 'Argentine', 98, 'CAM', 'N', 'Manchester City', 'Y', 'An Argentine professional footballer who plays as a forward for Serie A club Juventus and the Argentina national team. Considered Europe\'s top five leagues\' 23rd most valuable player from a transfer value perspective CIES.'),
(30, 'Cristiano Ronaldo', '1985-05-02', 'Portuguese', 97, 'LW', 'N', 'Manchester City', 'Y', 'A Portuguese professional footballer who plays as a forward for Serie A club Juventus Often considered the best player in the world and widely regarded as one of the greatest players of all time.'),
(31, 'Mohamed Salah', '1992-06-15', 'Egyptian', 18, 'RW', 'N', 'Manchester City', 'Y', 'An Egyptian professional footballer who plays as a forward for Premier League club Liverpool and the Egypt national team. Considered one of the best players in the world'),
(32, 'Trent Alexander-Arnold', '1998-10-07', 'English', 65, 'RB', 'N', 'Manchester City', 'Y', 'An English professional footballer who plays as a right-back for Premier League club Manchester City and the England national team'),
(33, 'Virgil Van Dijk', '1991-07-08', 'Dutch', 4, 'CB	', 'N', 'Manchester City', 'Y', 'A Dutch professional footballer who plays as a centre-back for English Premier League club Manchester City and captains the Netherlands national team. '),
(34, 'Sergio Romero', '1987-02-22', 'Argentine', 23, 'GK', 'N', 'Manchester City', 'Y', 'An Argentine professional footballer who plays as a goalkeeper for English Premier League club Manchester City and the Argentina national team'),
(35, 'Chris Smalling', '1989-09-22', 'English', 6, 'CB', 'N', 'Manchester City', 'Y', 'An English professional footballer who plays as a centre-back for the club , on loan from Manchester United of the Premier League, and the England national team.'),
(36, 'Daniel James', '1997-09-10', 'Welsh', 38, 'RW', 'N', 'Manchester City', 'Y', 'He made his professional debut for Swansea City in February 2018, and signed for Manchester United in June 2019. He made his senior Wales debut in November 2018, having previously represented the nation at various youth levels'),
(37, 'Harry Kane', '1993-07-28', 'English', 32, 'ST', 'N', 'Manchester City', 'Y', 'An English professional footballer who plays as a striker for Premier League club Tottenham Hotspur and captains the England national team. Born and raised in the London district of Walthamstow, Kane began his professional career at Tottenham Hotspur'),
(38, 'Heung-Min Son', '1992-07-08', 'South Korean', 3, 'LW', 'N', 'Manchester City', 'Y', 'A South Korean professional footballer who played as a winger for Premier League club Tottenham Hotspur and captains the South Korea national team. Considered one of the best wingers in the world, Son is often called an icon of South Korean culture'),
(39, 'Toby Alderweireld', '1989-03-02', 'Belgian', 12, 'CB', 'N', 'Manchester City', 'Y', 'A Belgian professional footballer who plays for Premier League club Tottenham Hotspur and the Belgium national team. Mainly a centre back, he can also play as a right back'),
(40, 'Serge Aurier', '1992-12-24', 'Ivorian', 24, 'RB', 'N', 'Manchester City', 'Y', 'An Ivorian professional footballer who played as a right back for Premier League club Tottenham Hotspur and captains the Ivory Coast national team'),
(41, 'Dele Alli', '1996-04-11', 'English', 13, 'CAM', 'N', 'Manchester City', 'Y', 'An English professional footballer who plays as a midfielder for Premier League club Manchester City and the England national team.'),
(42, 'Sebastien Haller', '1994-06-22', 'French', 15, 'ST', 'N', 'Manchester City', 'Y', 'Haller signed his first professional contract with Auxerre, agreeing to a three-year deal.Ahead of the 2012–13 season, he was promoted to the senior team by manager Jean-Guy Wallemme.'),
(43, 'Robert Snodgrass', '1987-09-07', 'Scottish', 28, 'RW', 'N', 'Manchester City', 'Y', 'A Scottish professional footballer who played as a Winger for Premier League club West Ham United.Snodgrass started his senior career with Livingston. He also had a loan spell at Stirling Albion before moving to England in 2008'),
(44, 'Declan Rice', '1999-01-14', 'English', 34, 'CB', 'N', 'Manchester City', 'Y', 'An English professional footballer who plays as a defensive midfielder or centre back for Premier League club Manchester City and the England national team'),
(45, 'Mark Noble', '1987-05-08', 'English', 37, 'CM', 'N', 'Manchester City', 'Y', 'An English footballer who played as a central midfielder and is captain of West Ham United. He has played almost all his youth and first team football for West Ham apart from two short loan spells'),
(46, 'Issa Diop', '1997-01-09', 'French', 35, 'CB', 'N', 'Manchester City', 'Y', 'Diop was born in Toulouse and played youth football for Balma SC before moving to Toulouse FC in 2006. He began training with the first team in September 2015, and signed a professional contract in November.'),
(47, 'Andriy Yarmolenko', '1989-10-23', 'Ukrainian', 41, 'ST', 'N', 'Manchester City', 'Y', 'A Ukrainian professional footballer who played as a winger or forward for English Premier League club West Ham United and the Ukraine national team.Yarmolenko has been a full international for Ukraine since 2009, scoring 37 goals in 83 matches '),
(48, 'Pablo Fornals', '1996-02-22', 'Spanish', 76, 'CF', 'N', 'Manchester City', 'Y', 'A Spanish professional footballer who played for English club West Ham United mainly as an attacking midfielder.He amassed La Liga totals of 129 matches and 12 goals during four seasons, with Malaga and Villarreal. In 2019, he signed with West Ham United.'),
(49, 'Felipe Anderson', '1993-04-15', 'Brazilian', 54, 'LW', 'N', 'Manchester City', 'Y', 'Known as Felipe Anderson, is a Brazilian professional footballer who played as an attacking midfielder for English Premier League club West Ham United and the Brazil national team'),
(50, 'Manuel Lanzini', '1993-02-15', 'Argentine', 68, 'CM', 'N', 'Manchester City', 'Y', 'An Argentine professional footballer who played as an attacking midfielder for English club West Ham United and the Argentina national team. He has previously played for River Plate and Fluminense'),
(51, 'Jamie Vardy', '1987-01-11', 'English', 92, 'ST', 'N', 'Manchester City', 'Y', 'An English professional footballer who plays as a striker for Premier League and the England national team.After being released by Sheffield Wednesday at the age of sixteen\''),
(52, 'James Maddison', '1996-11-23', 'English', 29, 'CM', 'N', 'Manchester City', 'Y', 'An English professional footballer who plays as an attacking midfielder for Premier League and the England national team.'),
(53, 'Harvey Barnes', '1997-12-09', 'English', 36, 'LM', 'N', 'Liverpool FC', 'Y', 'Barnes was born in Burnley, Lancashire, and brought up in Countesthorpe, Leicestershire.He is the son of former professional footballer Paul Barnes.'),
(54, 'Youri Tielemans', '1997-05-07', 'Belgian', 39, 'CM', 'N', 'Manchester City', 'Y', 'He began his career at Anderlecht, where he made 185 official appearances and scored 35 goals across four seasons. He won the league title twice and in 2017 was chosen as the Belgian Professional Footballer of the Year.'),
(55, 'Kelechi Iheanacho', '1996-10-03', 'Nigerian', 40, 'ST', 'N', 'Manchester City ', 'Y', 'Iheanacho was born in the state of Imo. As a youth, he represented Taye Academy in Owerri, the capital city of Imo. His performances for Nigeria in the 2013 FIFA U-17 World Cup led to interest from clubs in Europe; teams following his progress included Ar'),
(56, 'Kasper Schmeichel', '1986-11-05', 'Danish', 49, 'GK', 'N', 'Manchester City ', 'Y', 'He is the son of former Manchester United and Danish international goalkeeper Peter Schmeichel.'),
(57, 'Jonny Evans', '1988-01-03', 'Irish', 55, 'CB', 'N', 'Manchester City ', 'Y', 'Evans was born in Belfast and started his career at Greenisland FC, where he was spotted by Manchester United scouts.'),
(58, 'Ricardo Pereira', '1993-10-06', 'Portuguese', 43, 'RB', 'N', 'Manchester City ', 'Y', 'A Portuguese professional footballer who plays as a full-back for English and the Portugal national team.'),
(59, 'Caglar Soyuncu', '1996-05-23', 'Turkish', 77, 'CB', 'N', 'Manchester City ', 'Y', ' First senior professional team was the Turkish second division Altinordu.'),
(60, 'Eldin Jakupovic', '1984-10-02', 'Swiss', 41, 'GK', 'N', 'Manchester City ', 'Y', 'He started his professional career at Grasshopper Club Zurich in 2004, then moved to FC Thun a year later.'),
(61, 'Danny Ward', '1993-06-22', 'Welsh', 96, 'GK', 'N', 'Manchester City', 'Y', 'a Welsh professional footballer who plays as a goalkeeper for Premier League club Leicester City and the Wales national team.'),
(62, 'Christian Fuchs', '1986-04-07', 'English', 46, 'LB', 'N', 'Manchester City', 'Y', 'He began his senior career as a teenager at Wiener Neustadt before signing his first professional contract at 17 with SV Mattersburg.'),
(63, 'Ben Chilwell', '1966-12-21', 'English', 59, 'LB', 'N', 'Manchester City', 'Y', ' Professional footballer who plays as a left back for Premier League club Leicester City and the England national team.'),
(64, 'Wes Morgan', '1984-01-21', 'Nigerain', 67, 'CB', 'N', 'Manchester City', 'Y', 'Morgan spent the majority of his career with his boyhood club, Nottingham Forest, playing 402 matches and scoring 14 goals.'),
(65, 'Ryan Bennett', '1990-03-06', 'English', 79, 'CB', 'N', 'Manchester City', 'Y', 'He was a youth product of Ipswich Town but was not offered a professional contract and thus signed for Grimsby Town in 2006. '),
(66, 'James Justin', '1998-02-23', 'English', 89, 'RB', 'N', 'Manchester City', 'Y', 'an English professional footballer who plays as a defender for Premier League club Leicester City and the England national under-21 team.'),
(67, 'Daniel Amartey', '1994-12-21', ' A Ghanaian', 95, 'CAM', 'N', 'Manchester City', 'Y', 'A Ghanaian professional footballer who plays as a defender or midfielder for Leicester City and the Ghana national team.'),
(68, 'Nampalys Mendy', '1992-06-23', 'French', 42, 'CAM', 'N', 'Manchester City', 'Y', 'Due to his small stature, simple distribution, and reliable style of play, Mendy has been compared to former French international'),
(69, 'Wilfred Ndidi', '1996-12-16', 'Nigerian', 44, 'CAM', 'N', 'Manchester City', 'Y', 'Ndidi made his Belgian Pro League debut with Genk on 31 January 2015 against Charleroi in a 1–0 away defeat.'),
(70, 'Hamza Choudhury', '1997-10-01', 'English', 45, 'CAM', 'N', 'Manchester City', 'Y', 'Choudhury began his career at the Leicester City Academy, and at the age of 16 was reportedly monitored by a number of top European clubs.'),
(71, 'Matty James', '1991-07-22', 'English', 51, 'CM', 'N', 'Manchester City', 'Y', 'an English professional footballer who plays for Leicester City. His regular position is in midfield, but he can play in defence when required. '),
(72, 'Dennis Praet', '1994-05-14', 'Belgian', 60, 'CM', 'N', 'Manchester City', 'Y', 'Born in Leuven, Belgium, Praet joined the Genk youth academy in 2003 at the age of 8. He went on to spend most of his youth career at Gen'),
(73, 'Marc Albrighton', '1989-11-18', 'English', 70, 'RM', 'N', 'Manchester City', 'Y', 'an English professional footballer who plays as a winger for Premier League club Leicester City.He joined Aston Villa at the age of eight.'),
(74, 'Demarai Gray', '1996-06-08', 'English', 80, 'LW', 'N', 'Manchester City', 'Y', 'Gray came through the youth system of Birmingham City, for whom he made his Football League debut as a 17-year-old in October 2013.'),
(75, 'Erwin Mulder', '1989-03-03', 'English', 90, 'GK', 'N', 'Manchester City ', 'Y', 'a Dutch professional footballer who plays as a goalkeeper for Championship club Swansea City. He is a former Netherlands U20s international .'),
(76, 'Freddie Woodman', '1997-03-04', 'English', 58, 'GK', 'N', 'Manchester City ', 'Y', 'an English professional footballer who plays as a goalkeeper for Swansea City, on loan from Newcastle United.'),
(77, 'Ben Wilmot', '1999-11-04', 'English', 64, 'CB', 'N', 'Manchester City ', 'Y', 'Wilmot began his career at Stevenage in the clubs academy before breaking through into the first-team during the 2017–18 season'),
(78, 'Mike van der Hoorn', '1992-10-15', 'Belgian', 78, 'CB', 'N', 'Manchester City ', 'Y', 'A Dutch professional footballer who plays as a centre back for Championship club Swansea City. .'),
(79, 'Kyle Naughton', '1988-11-11', 'English', 87, 'RB', 'N', 'Manchester City ', 'Y', 'An English professional footballer who plays as a right back for Championship club Swansea City..'),
(80, 'Connor Roberts', '1995-09-23', 'Welsh', 94, 'RB', 'N', 'Manchester City ', 'Y', 'After progressing through Swansea Citys Youth Academy, Roberts won the 2014–15 Professional U21 Development League 2.'),
(81, 'Martin Dubravka', '1989-01-15', 'Slovak', 52, 'GK', 'N', 'Manchester City', 'Y', 'As a child, Dubravka enjoyed playing ice hockey as well as football, and could have moved into the former sport were it not for a leg injury he sustained when he was five years old.'),
(82, 'Karl Darlow', '1990-10-08', 'English', 53, 'GK', 'N', 'Manchester City', 'Y', ' An English professional footballer who plays as a goalkeeper for English club Newcastle United. He is the grandson of former Wales international forward Ken Leek who was part of the Welsh 1958 World Cup squad.'),
(83, 'Rob Elliot', '1986-01-30', 'Irish', 56, 'GK', 'N', 'Manchester City', 'Y', 'Elliot began his career with Erith Town, before joining Charlton Athletics academy side. Whilst at Charlton, he was sent out on loan to Bishops Stortford and Notts County, and also spent two loan spells at Accrington Stanley, where he was nicknamed \"The D'),
(84, 'Danny Rose', '1990-07-02', 'English', 57, 'LB', 'N', 'Manchester City', 'Y', 'Rose started his professional career at Leeds United in 2006, having progressed through the club youth ranks, but left for current club Tottenham Hotspur in July 2007, having never played for Leeds.'),
(85, 'Jetro Willems', '1994-03-30', 'Denish', 61, 'LB', 'N', 'Manchester City', 'Y', 'A Dutch professional footballer who plays as a left wing-back or left-back for Premier League club Newcastle United, on loan from Eintracht Frankfurt.'),
(86, 'Paul Dummett', '1991-09-26', 'Welsh', 62, 'LB', 'N', 'Manchester City', 'Y', 'Dummett began his career with his local side Newcastle United. After progressing through the youth ranks at the club, he had loan spells at Gateshead and Scottish side St Mirren.'),
(87, 'Florian Lejeune', '1991-05-20', 'French', 63, 'CB', 'N', 'Manchester City', 'Y', 'Lejeune was born in Paris and began his football career in July 1998 at the Centre de Formation de Paris, a youth sporting club designed to cater only to football players under the age of 19.'),
(88, 'Fabian Schar', '1991-12-20', 'Swiss', 71, 'CB', 'N', 'Manchester City', 'Y', ' a Swiss footballer who plays as a centre-back for Premier League club Newcastle United.Formed at Wil, he transferred to Basel in 2012, winning the Swiss Super League in all three of his seasons before his move to Hoffenheim'),
(89, 'Ciaran Clark', '1989-09-26', 'Irish', 73, 'CB', 'N', 'Manchester City', 'Y', 'Clark captained England at under-18, under-19 and under-20 level, but in October 2010 declared his ambition to play for the Republic of Ireland, the country of his parents birth.'),
(90, 'Jamaal Lascelles', '1993-11-11', 'English', 74, 'CB', 'Y', 'Manchester City ', 'Y', ' an English professional footballer who plays as a centre-back for Premier League club Newcastle United, where he is captain.'),
(91, 'Federico Fernandez', '1989-02-21', 'Argentine', 75, 'CB', 'N', 'Manchester City ', 'Y', 'He began his career at Estudiantes de La Plata, where he reached the final of the Copa Sudamericana and won the Copa Libertadores, before moving to Napoli in 2011 .'),
(92, 'DeAndre Yedlin', '1993-07-09', 'American', 81, 'RB', 'N', 'Manchester City', 'Y', ' an American professional soccer player who plays for Premier League club Newcastle United and the United States national team. Primarily a right-back, Yedlin has also featured as a wing-back and wide midfielder'),
(93, 'Emil Krafth', '1994-08-02', 'Swedish', 82, 'RB', 'N', 'Manchester City', 'Y', 'Born in Stockholm, Sweden, his footballing idol growing up was David Beckham and he supported Manchester United. Krafth began his career at lower-division side Lagans AIK. It was with AIK that he made his senior debut in 2010, aged just 16.'),
(94, 'Javier Manquillo', '1994-05-05', 'Spainisn', 83, 'RB', 'N', 'Manchester City', 'Y', 'Born in Madrid, Manquillo started playing football with hometowns Real Madrid alongside his twin brother Victor.'),
(95, 'Jack Colback', '1989-10-24', 'English', 86, 'CAM', 'N', 'Manchester City ', 'Y', 'Colback began his career at Sunderland in 2008, having graduated from their academy, and broke into the team following loans at Ipswich Town of the Championship. '),
(96, 'Matthew Longstaff', '2000-03-21', 'English', 84, 'CAM', 'N', 'Manchester City ', 'Y', 'Longstaff made his first-team debut for Newcastle United on 28 August 2019, starting against Leicester City in the EFL Cup.'),
(97, 'Isaac Hayden', '1995-03-22', 'English', 85, 'CAM', 'N', 'Manchester City ', 'Y', 'An English professional footballer who plays as a midfielder for Newcastle United. Hayden has also featured for clubs Arsenal and Hull City in his footballing career.'),
(98, 'Sean Longstaff', '1997-10-30', 'English', 93, 'CM', 'N', 'Manchester City ', 'Y', 'Longstaff began his career with the youth team of Newcastle United. He moved on loan to Scottish Premiership club Kilmarnock in January 2017, along with Callum Roberts and Freddie Woodman.He signed on loan for Blackpool in July 2017.'),
(99, 'Jonjo Shelvey', '1992-02-27', 'English', 91, 'CM', 'N', 'Manchester City ', 'Y', 'He began his career at Charlton Athletic, becoming their youngest-ever player at 16 years and 59 days old.In 2010, he moved to Liverpool for an initial ?1.7 million, spending a brief loan at Blackpool.'),
(100, 'Matt Ritchie', '1989-09-10', 'Scots', 11, 'RM', 'N', 'Manchester City', 'Y', 'A professional footballer who plays as a winger for Premier League club Newcastle United and the Scotland national team. He previously played for Portsmouth, Swindon Town and AFC Bournemouth. He joined Newcastle United in 2016.');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Player_id` int(8) NOT NULL,
  `rating` float DEFAULT NULL,
  `MOTM` int(5) DEFAULT NULL,
  `Goal` int(5) DEFAULT NULL,
  `assist` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Player_id`, `rating`, `MOTM`, `Goal`, `assist`) VALUES
(1, 6.39, 3, 0, 0),
(2, 5.5, 1, 0, 1),
(3, 6.3, 0, 0, 2),
(4, 6.8, 0, 1, 2),
(5, 6.68, 1, 0, 2),
(6, 7.03, 2, 2, 1),
(7, 6.82, 0, 0, 2),
(8, 6.77, 0, 2, 0),
(9, 6.77, 0, 1, 2),
(10, 7.06, 2, 0, 3),
(11, 6.46, 1, 2, 2),
(12, 4.4, 0, 0, 2),
(13, 5.2, 0, 0, 1),
(14, 6.63, 0, 2, 1),
(15, 7.92, 7, 8, 16),
(16, 7.05, 1, 5, 5),
(17, 7.15, 1, 3, 7),
(18, 7.03, 2, 1, 5),
(19, 6.46, 0, 0, 1),
(20, 7.12, 1, 3, 1),
(21, 5.6, 0, 1, 1),
(22, 6, 0, 0, 2),
(23, 7.59, 3, 7, 8),
(24, 7.19, 0, 11, 1),
(25, 7.2, 2, 16, 3),
(26, 6.34, 1, 5, 3),
(27, 7.19, 2, 10, 4),
(28, 9.1, 10, 22, 18),
(29, 7.03, 3, 8, 11),
(30, 8.4, 5, 16, 6),
(31, 7.45, 5, 16, 6),
(32, 7.3, 3, 2, 12),
(33, 7.4, 4, 4, 1),
(34, 6.4, 1, 0, 2),
(35, 6.96, 2, 1, 2),
(36, 6.73, 1, 3, 6),
(37, 7.3, 3, 11, 2),
(38, 7.28, 3, 9, 7),
(39, 6.79, 0, 1, 2),
(40, 7.18, 2, 1, 4),
(41, 6.96, 1, 8, 4),
(42, 7.21, 3, 7, 1),
(43, 6.79, 1, 5, 5),
(44, 6.95, 1, 1, 4),
(45, 6.63, 1, 4, 1),
(46, 6.7, 0, 3, 0),
(47, 6.54, 1, 3, 1),
(48, 6.5, 1, 2, 5),
(49, 7.07, 1, 1, 4),
(50, 6.65, 1, 0, 2),
(51, 7.62, 3, 12, 4),
(52, 7.7, 4, 6, 3),
(53, 6.88, 1, 6, 6),
(54, 6.87, 1, 3, 5),
(55, 6.24, 0, 3, 3),
(56, 6.81, 0, 0, 1),
(57, 6.95, 0, 1, 1),
(58, 7.9, 2, 3, 2),
(59, 7.09, 0, 1, 1),
(60, 6.21, 0, 0, 2),
(61, 6.52, 2, 0, 0),
(62, 6.25, 1, 1, 1),
(63, 7.17, 2, 5, 6),
(64, 6.34, 1, 2, 1),
(65, 7.44, 2, 2, 2),
(66, 6.73, 0, 2, 0),
(67, 6.93, 0, 0, 3),
(68, 6.5, 1, 0, 0),
(69, 6.24, 0, 0, 1),
(70, 6.35, 0, 0, 2),
(71, 6.21, 1, 1, 0),
(72, 6.5, 1, 0, 2),
(73, 6.77, 0, 0, 1),
(74, 6.75, 0, 1, 2),
(75, 7.4, 1, 0, 0),
(76, 6.52, 2, 2, 1),
(77, 5.95, 0, 0, 1),
(78, 6.52, 2, 1, 3),
(79, 6.89, 3, 2, 1),
(80, 6.86, 1, 0, 0),
(81, 6.84, 1, 0, 0),
(82, 5.92, 0, 0, 1),
(83, 6, 1, 0, 0),
(84, 6.29, 0, 0, 1),
(85, 6.84, 1, 2, 2),
(86, 6.64, 0, 0, 2),
(87, 6.51, 0, 2, 0),
(88, 6.84, 1, 2, 0),
(89, 6.89, 0, 2, 0),
(90, 6.72, 1, 1, 0),
(91, 6.84, 2, 2, 1),
(92, 6.41, 0, 1, 0),
(93, 6.22, 0, 0, 1),
(94, 6.62, 0, 0, 1),
(95, 6.51, 0, 1, 2),
(96, 6.63, 1, 2, 0),
(97, 6.84, 0, 1, 1),
(98, 6.34, 0, 0, 1),
(99, 7.08, 1, 5, 0),
(100, 6.72, 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `ID` int(8) NOT NULL,
  `Appointment` varchar(30) DEFAULT NULL,
  `BOD` date DEFAULT NULL,
  `Clubname` varchar(100) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Salary` bigint(20) DEFAULT NULL,
  `Trophy` int(5) DEFAULT NULL,
  `National` varchar(40) DEFAULT NULL,
  `Vita` varchar(255) DEFAULT NULL,
  `Matches` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`ID`, `Appointment`, `BOD`, `Clubname`, `Name`, `Salary`, `Trophy`, `National`, `Vita`, `Matches`) VALUES
(1, 'Manager', '1971-01-18', 'Manchester City', 'Pep Guardiola', 15300000, 30, 'Spainish', 'Josep \"Pep\" Guardiola Sala is a Spanish professional football manager and former player, who is the current manager of Premier League club Manchester City. He is considered to be one of the greatest managers of all time.', 500),
(2, 'Assistant Manager', '1949-05-29', 'Manchester City', 'Brian Kidd', 7500000, 18, 'English', 'Brian Kidd (born 29 May 1949) is an English football coach and former player, who is currently assistant coach of Manchester City, alongside manager Pep Guardiola.', 323),
(3, 'Assistant Manager', '1971-01-31', 'Manchester City', 'Rodolfo Borrell', 5000000, 17, 'Sish', 'Rodolfo was a youth coach at F.C. Barcelona, where he coached some of the world’s finest emerging talent at their world renowned \'La Masia\' Academy. Rodolfo still possesses one of the most successful records in history of Youth Football coaching at Barca', 201),
(4, 'Goalkeeping Coach', '1970-05-24', 'Manchester City', 'Xabier Mancisidor', 5000000, 22, 'Spanish', 'Xabier Mancisidor Macazaga (born 24 May 1970) is a Spanish retired footballer who played as a goalkeeper, and is the current goalkeeping coach of English club Manchester City.', 255),
(5, 'Fitness Coach', '1963-01-01', 'Manchester City', 'Lorenzo Buenaventura', 3200000, 13, 'Spainish', 'Fitness Coach Lorenzo Buenaventura joined Guardiola at Barcelona in 2008. After helping shape Barca and Bayern into two of Europe’s most intensive sides, he will work to build stamina and pace which is a trademark of every team Guardiola has managed', 179),
(6, 'Video Analyst', '1968-12-15', 'Manchester City', 'Carles Planchart', 3200000, 15, 'Spainish', 'Performance Analyst Carles Planchart has worked with Guardiola since 2007.', 400),
(7, 'Chief Scout', '1976-05-12', 'Manchester City', 'Carlo Cancellieri', 1950000, 42, 'Italian', 'From 98 to today his only two passions have always been football and finance. He studied every aspect of the financial world and its trends with attention and dedication, correlating it to what makes him feel alive.', 264),
(8, 'Scout', '1964-09-02', 'Manchester City', 'Stewart Thompson', 2000000, 22, 'English', 'He has been a practising conservation professional for over 25 years, the last seven of which at senior level.  Throughout his career he has initiated and delivered a variety of applied conservation management projects.', 179),
(9, 'Scout', '1963-07-06', 'Manchester City', 'Jan Ricka', 196500, 17, 'Czechs', 'Man City Scout England Premier League Appointed: Jul 1,2012. English Champion England 3 ,English FA Cup winner England 1.', 279),
(10, 'Scout', '1983-07-20', 'Manchester City', 'Sebastian Arnesen', 3200000, 22, 'Danish', 'Sebastian Arnesen is the son of Frank Arnesen (Technical Director Feyenoord Rotterdam).', 320),
(11, 'Scout', '1990-03-20', 'Manchester City', 'James Poole', 3500000, 19, 'English', 'James Alexander Poole (born 20 March 1990) is an English footballer. He is primarily a striker but can also play left-wing and as an attacking midfielder. Since 2015 he has worked for City Football Group as a scout.', 354),
(12, 'Scout', '1995-01-15', 'Manchester City', 'Sinan Bytyqi', 1400000, 19, 'Australian', 'Sinan Bytyqi is a retired Kosovo Albanian professional footballer who played as a midfielder.', 326),
(13, 'Youth Chief Scout', '1982-05-14', 'Manchester City', 'Joe Shields', 960000, 7, 'English', 'It certainly makes sense that the club are trying to bring in the head of academy recruitment from another top club as a result. Shields is credited with signing Jadon Sancho for City, and he’s ‘hugely admired’ at Arsenal according to the Daily Mail.', 476),
(14, 'Youth Scout', '1987-09-22', 'Manchester City', 'Andy Sasimowicz', 1850000, 15, 'English', 'He has worked exclusively with 6 players and parents over the past 12 years and today he is considered good technical and tactical staff. ', 256),
(15, 'Youth Scout', '1983-04-13', 'Manchester City', 'Glynn Kenny', 2950000, 15, 'American', 'KENNY - Glynn Scott, of Bethpage, LI, suddenly on January 13, 2012. Beloved and adoring father of Meghan and Ryan. Wonderful son of Roger and Carole. ', 222),
(16, 'Youth Scout', '1987-02-27', 'Manchester City', 'Kelvin de Lang', 1760000, 12, ' Dutch', 'Kelvin de Lang schopte het zelf als voetballer tot de amateurs van Argon. ', 179),
(17, 'Youth Scout', '1990-03-25', 'Manchester City', 'Hans Van Wassen', 1200000, 7, 'Swedish', 'He works in Vänersborg, Sweden', 241),
(18, 'Youth Co-ordinator', '1978-06-12', 'Manchester City', 'Jim Cassell', 3200000, 15, 'English', 'Jim Cassell is a former Youth Academy Director at Manchester City. He has been responsible for the development of players such as Shaun Wright-Phillips, Joey Barton, Stephen Ireland, Nedum Onuoha, Daniel Sturridge, and many others.', 324),
(19, 'Advisor', '1961-10-26', 'Manchester City', 'Manel Estiarte', 2400000, 19, 'Spanish', 'Manel Estiarte Duocastella is a Spanish former water polo player born in Manresa, a municipality in Barcelona, Spain. He is currently a member of Pep Guardiola’s technical staff at Manchester City FC.', 255),
(20, 'Academy Manager', '1971-07-15', 'Manchester City', 'Jason Wilcox', 3500000, 22, 'English', 'Jason Malcolm Wilcox is an English former professional footballer who played as a left winger from 1989 until 2006, notably in the Premier League for Blackburn Rovers, where he won the title in 1995.', 323),
(21, 'Head Coach', '1967-01-16', 'Manchester City', 'Jurgen Norbert Klopp', 7200000, 28, 'German', 'Jürgen Norbert Klopp is a German professional football manager and former player who is the manager of Premier League club Liverpool. Often credited with popularising the football philosophy known as Gegenpressing,.', 472),
(22, 'Assistant Manager', '1971-12-31', 'Manchester City', 'Peter Krawietz', 1530000, 14, 'German', 'Peter Krawietz followed Jürgen Klopp to Liverpool in October 2015 to take up a role as the club\'s new assistant manager.The pair first met at Mainz 05, where Krawietz served as chief scout, and they have worked closely together ever since.', 321),
(23, 'Assistant Manager', '1983-01-24', 'Manchester City', 'Pepijn Lijnders', 1965000, 15, 'Dutch', 'Pepijn \"Pep\" Lijnders is a Dutch football manager. He is an assistant manager of Premier League club Liverpool.', 274),
(24, 'Goalkeeping Coach', '1971-06-08', 'Manchester City', 'John Achterberg', 1665000, 17, 'Dutch', 'John Achterberg is a retired Dutch footballer, who played as a goalkeeper for NAC Breda, FC Eindhoven and Tranmere Rovers. He is the goalkeeping coach for Liverpool.', 221),
(25, 'Conditioning Coach', '1971-09-06', 'Manchester City', 'Mark Hulse', 2400000, 21, 'English', 'Mark Hulse, a native of Evanston, Illinois, enters his sixth season as the head men’s volleyball coach at Loyola University Chicago in 2021 after serving as an assistant coach for the previous four years. ', 378),
(26, 'Conditioning Coach', '1988-03-18', 'Manchester City', 'Vitor Matos', 2200000, 18, 'Portuguese', 'Vitor Matos joined the Liverpool FC staff as elite development coach in October 2019. He moved to the Reds from FC Porto, where he served as assistant coach of the Portuguese club\'s B Team, who play in the country\'s second tier, in 2018-19.', 246),
(27, 'Fitness Coach', '1974-09-21', 'Manchester City', 'Andreas Kornmayer', 3200000, 26, 'German', 'Andreas Kornmayer joined Liverpool in July 2016 as the club’s new head of fitness and conditioning after more than 15 years with Bayern Munich.', 421),
(28, 'Technical Coach', '1967-02-01', 'Manchester City', 'Angel Vales', 1530000, 32, 'Spainish', 'Technical Coach of: Rafael Benítez (350 Games), Jürgen Klopp (254 Games)', 604),
(29, 'Individual Coach', '1975-12-12', 'Manchester City', 'Thomas Grinnemark', 1200000, 11, 'Czechs', 'He is the leader of the Birmingham criminal gang, the Peaky Blinders and the patriarch of the Grinnemark Family. ', 236),
(30, 'Youth Coach', '1984-04-22', 'Manchester City', 'Alan Moogan', 1965000, 17, 'English', 'Alan Moogan and Luke Purcell they will be a strong unit to get the best out of the team and how they want to play.', 323),
(31, 'Sporting Director', '1955-01-01', 'Manchester City', 'Peter Moore', 3250000, 35, 'British-American', 'Peter Moore is a British-American business executive, best known for his former positions as Senior VP of Global Sports Marketing at Reebok, President of Sega of America, and Corporate Vice-President of Microsoft\'s Interactive.', 521),
(32, 'Board Member', '1951-05-04', 'Manchester City', 'Sir Kenny Dalglish', 4200000, 46, 'Scottish', 'Sir Kenneth Mathieson Dalglish MBE is a Scottish former football player and manager. He made 322 appearances for Celtic and 502 for Liverpool and earned over 100 full caps for the Scotland national team.', 676),
(33, 'Scout', '1968-11-18', 'Manchester City', 'Barry Hunter', 2100000, 23, 'Irish', 'Barry Hunter is a former Northern Ireland international footballer turned scout.', 359),
(34, 'Scout', '1955-01-01', 'Manchester City', 'Mike McGlynn', 1950000, 19, 'American', 'Michael Ryan McGlynn is an American football guard who is currently a free agent. He was drafted by the Philadelphia Eagles in the fourth round of the 2008 NFL Draft. He played college football at Pittsburgh.', 424),
(35, 'Scout', '1960-11-01', 'Manchester City', 'Alan Harper', 3500000, 29, 'American', 'Alan Jerome Harper, later Harper-Schmidt, DC, is a fictional character from the CBS situation comedy Two and a Half Men. Jon Cryer portrayed the character for the entire duration of the series, the only original main cast member to do so. ', 352),
(36, 'Scout', '1966-01-06', 'Manchester City', 'Andy Sayer', 1955000, 16, 'English', 'Andrew Clive Sayer is an English former professional footballer who played in the Football League as a forward.', 358),
(37, 'Scout', '1975-07-04', 'Manchester City', 'Kevin Hunt', 1460000, 15, 'English', 'Kevin Hunt was an English former professional footballer who played as a midfielder.', 258),
(38, 'Physiotherapist', '1969-08-22', 'Manchester City', 'Louise Fawcett', 1760000, 12, 'British', 'Head of Department, Professor of International Relations, Wilfrid Knapp Fellow and Tutor in Politics St Catherines College', 326),
(39, 'Physiotherapist', '1978-01-27', 'Manchester City', 'Christopher Rohrbeck', 2680000, 19, 'German', 'Christopher Rohrbeck joined Liverpool as first-team physiotherapist in 2017. Rohrbeck made the move to Merseyside after 14 years with German club FSV Mainz, where he had previously worked with Jürgen Klopp.', 469),
(40, 'Masseur', '1964-01-17', 'Manchester City', 'Paul Small', 3600000, 34, 'English', 'One of the longest serving members of Liverpool\'s backroom staff, Paul arrived from Widnes Rugby Union Club as a part-time masseur in 2001.', 642),
(41, 'Assistant Manager', '1981-07-28', 'Manchester City', 'Michael Carrick', 4500000, 42, 'English', 'Michael Carrick is an English football coach and former player. He is currently working as a first-team coach at Manchester United. ', 489),
(42, 'Assistant Manager', '1986-05-14', 'Manchester City', 'Kieran McKenna', 2300000, 21, 'Irish', 'Kieran McKenna  is a Northern Irish professional football coach and former youth player, who is the current assistant first team coach at Premier League club Manchester United.', 423),
(43, 'Assistant Manager', '1962-09-24', 'Manchester City', 'Mike Phelan', 2000000, 20, 'English', 'Michael Christopher Phelan is an English professional football coach and former player who is currently assistant manager of Manchester United.', 424),
(44, 'Assistant Manager', '1964-01-14', 'Manchester City', 'Mark Dempsey', 3200000, 16, 'English', 'Mark James Dempsey is an English football coach and former player who works as a coach at Manchester United.', 422),
(45, 'Assistant Manager', '1977-11-02', 'Manchester City', 'Martyn Pert', 2400000, 13, 'English', 'Manchester United assistant Martyn Pert went to remarkable lengths to pursue his dream of a career as a coach', 415),
(46, 'Goalkeeping Coach', '1961-10-19', 'Manchester City', 'Emilio Alvarez Blanco', 1680000, 13, 'Spainish', 'Emilio Álvarez Blanco is a retired Spanish footballer who played as a goalkeeper.He used to serve as a goalkeeping coach for English side Manchester United.', 258),
(47, 'Chief Analyst', '1963-06-05', 'Manchester City', 'Jim Lawlor', 3400000, 18, 'Irish', 'James Joseph Lawlor ,also known as Jimmy Lawlor or Jim Lawlor, was an Irish professional footballer who played in both Ireland and England as a centre half.', 456),
(48, 'Chief Analyst', '1972-04-24', 'Manchester City', 'Andrew Meredith', 2450000, 13, 'Australian', 'Andrew Meredith is the current Analysis Operations Manager at Premier League club Manchester United.', 322),
(49, 'Chairman', '1960-11-02', 'Manchester City', 'Avram Glazer', 5000000, 34, 'American', 'Avram A.\"Avie\" Glazer is an American businessman, a member of the Glazer family, hold a majority ownership stake in English football club Manchester United F.C. ', 353),
(50, 'Chairman', '1970-10-20', 'Manchester City', 'Joel Glazer', 336, 21, 'American', 'Joel Glazer is part of the Glazer family, who control First Allied Corporation and HRG Group, the Tampa Bay Buccaneers of the NFL, and England Manchester United Football Club. The family is based in Florida.', 324),
(51, 'Vice-Chairman', '1971-11-09', 'Manchester City', 'Ed Woodward', 2990000, 16, 'English', 'Edward Gareth Woodward is an English accountant and investment banker who is the executive vice-chairman of Manchester United F.C., and effectively the chief executive overseeing the club operations.', 444),
(52, 'Board Member', '1937-10-11', 'Manchester City', 'Sir Bobby Charlton', 3800000, 38, 'English', 'Sir Robert Charlton CBE is an English former footballer who played as a midfielder. He is regarded as one of the greatest players of all time, and was a member of the England team that won the 1966 FIFA World Cup,', 546),
(53, 'Board Member', '1941-12-31', 'Manchester City', 'Sir Alex Ferguson', 15000000, 48, 'Scottish', 'Sir Alexander Chapman Ferguson CBE is a Scottish former football manager and player who managed Manchester United from 1986 to 2013. He is considered one of the greatest managers of all time', 536),
(54, 'Chief Scout', '1962-11-18', 'Manchester City', 'Marcel Bout', 2000000, 18, 'Dutch', 'Marcel Bout is a Dutch football coach who works as the Head of Global Scouting at Manchester United.', 269),
(55, 'Scout', '1991-06-19', 'Manchester City', 'Andreas Herrmann', 2100000, 20, 'German', 'Andreas Herrmann studied chemistry at the University of Mainz in Germany. From 1997 to 2000 he pursued his graduate studies at the Max Planck Institute for Polymer Research', 322),
(56, 'Scout', '1961-08-05', 'Manchester City', 'Tommy Møller Nielsen', 2100000, 22, 'Danish', 'Tommy Møller Nielsen is a Danish football coach and former player. He is the son of former Danish national football team coach Richard Møller Nielsen.', 355),
(57, 'Scout', '1965-04-25', 'Manchester City', 'Thomas Bormann', 1600500, 18, 'German', 'Thomas Bormann.Place of birth: München. Citizenship: Germany. Appointed: Jul 1, 2016. ', 267),
(58, 'Scout', '1969-01-25', 'Manchester City', 'Armand Benneker', 2605000, 19, 'Dutch', 'Armand Benneker is a Dutch retired football defender. He is currently a first team scout for English club Manchester United. ', 345),
(59, 'Scout', '1968-01-15', 'Manchester City', 'Vasco Noronha', 1800000, 17, 'Portuguese', 'Full name: Vasco Gonzaga da Silva de Noronha. Citizenship: Portugal.', 231),
(60, 'Scout', '1985-08-05', 'Manchester City', 'Jojo Ferreira', 2640000, 18, 'Argentine', 'Jojo Ferreira is an actor, known for Yo, Potro (2018), Melocotones (2017) and Club de Cuervos (2015).', 266),
(61, 'Scout', '1968-01-12', 'Manchester City', 'Roy Beukenkamp', 1600000, 6, 'Dutch', 'Roy Beukenkamp (Amsterdam, 12 januari 1968) is een Nederlands scout, voormalig keeperstrainer en oud-voetballer. Hij werd in september 2016 aangesteld als scout bij Manchester United, dat hem overnam van PSV.', 225),
(62, 'Scout', '1968-07-22', 'Manchester City', 'Scott Donnelly', 980000, 12, 'English', 'Scott Paul Donnelly  is an English footballer who plays as a midfielder for Hayes & Yeading United', 273),
(63, 'Scout', '1974-07-04', 'Manchester City', 'Rene Moonen', 1000000, 10, 'Dutch', 'Dutch judoka Rene Moonen took a silver medal at the Dutch Cadet Championships Haarlem in 1983 in the category U49.', 222),
(64, 'Physiotherapist', '1975-04-21', 'Manchester City', 'Rod Thornley', 1455000, 15, 'English', '19 years as a therapist at Manchester Utd Fc and 14 years with the England national team.', 245),
(65, 'Physiotherapist', '1957-05-22', 'Manchester City', 'Jos van Dijk', 2450000, 13, 'Dutch', 'Date of birth/Age: Mar 22, 1957 (63). Place of birth: Netherlands Amsterdam. Citizenship: Netherlands. Appointed: Jul 16, 2014.', 421),
(66, 'Sports Scientist', '1971-01-27', 'Manchester City', 'Richard Hawkins', 2800000, 13, 'English', 'Admiral Sir Richard Hawkins (or Hawkyns) (c. 1562 – 17 April 1622) was a 17th-century English seaman, explorer, pirate an d privateer. He was the son of Admiral Sir John Hawkins.', 474),
(67, 'Academy Staff', '1957-11-27', 'Manchester City', 'Les Parry', 1230000, 10, 'English', 'Leslie Parry, Ph.D. is an English physiotherapist and former manager of Tranmere Rovers Football Club from 9 October 2009 until his dismissal on 4 March 2012', 245),
(68, 'Academy Manager', '1975-01-21', 'Manchester City', 'Nicky Butt', 1560000, 9, 'English', 'Nicholas Butt is an English football coach and former player who is the head of first-team development at Manchester United. He is also a co-owner of Salford City.', 258),
(69, 'Youth Scout', '1997-11-03', 'Manchester City', 'Anders Jensen', 1200000, 12, 'Danish', 'Anders Thomas Jensen is a Danish screenwriter and film director. His film Election Night won the 1998 Academy Award for Best Live Action Short Film.', 225),
(70, 'Club Doctor', '1953-08-10', 'Manchester City', 'Paco Biosca', 4210000, 30, 'Spainish', 'A Spaniard, he worked for 25 years as head of medical services in his homeland at Lleida, a Catalan club, and is a former president of the European Federation of Orthopedics.', 666),
(71, 'Manager', '1977-11-29', 'Manchester City', 'Eddie Howe', 99999, 8, 'English', 'Eddie Howe has been a prominent figure in AFC Bournemouth’s history, firstly for his time as a player here and more significantly for his time in charge as manager of the club.', 84),
(72, 'Technical Director', '1979-06-25', 'Manchester City', 'Richard Hughes', 99999, 9, 'Scottish', 'Richard Daniel Hughes is a Scottish former professional footballer, who played as a defensive midfielder.', 34),
(73, 'Assistant manager', '1977-11-15', 'Manchester City', 'Jason Tindall', 999199, 8, 'English', 'Jason Tindall has strong ties with AFC Bournemouth, having played for the club from 1998-2006, before returning as assistant manager in September 2008.', 57),
(74, 'First Team', '1980-01-26', 'Manchester City', 'Simon Weatherstone', 99999, 5, 'English', 'Simon Weatherstone was appointed as first team coach in January 2014, beginning his first affiliations with the club.', 37),
(75, 'First Team', '1975-05-10', 'Manchester City', 'Neil Moss', 99999, 7, 'English', 'Neil Moss has been voted as the supporters all time number one keeper and is regarded as a Cherries legend.', 51),
(76, 'First Team', '1980-01-14', 'Manchester City', 'Stephen Purches', 99999, 8, 'English', 'Stephen Purches first joined AFC Bournemouth as a player in 2000 and went on to make 310 appearances for the club during two spells.', 48),
(77, 'Medical', '1980-02-17', 'Manchester City', 'Dan Hodges', 99999, 6, 'English', 'Dan Hodges first joined the back room staff in June 2012. The clubs head of Sports Science, he gained his experience in the role at Manchester City and Rochdale.', 28),
(78, 'First Team', '1972-07-26', 'Manchester City', 'Steve Fletcher', 99999, 5, 'English', 'Steve Fletcher is another club legend who continues to work at the club, becoming assistant first team coach in 2014.', 53),
(79, 'Medical', '1980-06-23', 'Manchester City', 'Steve Hard', 99999, 7, 'English', 'Steve Hard has served the club as a physio since 2006. Prior to joining Bournemouth he spent six years working as a physio at Millwall.', 59),
(80, 'Medical', '1970-04-18', 'Manchester City', 'Craig Roberts', 99999, 8, 'English', 'Craig Roberts first joined AFC Bournemouth as Club Doctor in 2015. His qualifications are an MBChB (UCT) and MPhil (Sports & Exercise Medicine) (UCT).', 52),
(81, 'First Team', '1985-05-14', 'Manchester City', 'Anthony White', 99999, 6, 'English', 'Anthony White was appointed the clubs assistant goalkeeping coach in 2016.', 27),
(82, 'First Team', '1988-11-24', 'Manchester City', 'Jonny King', 99999, 5, 'English', 'Jonny works in the medical department with the club.', 31),
(83, 'First Team', '1986-01-12', 'Manchester City', 'Matt Best', 99999, 8, 'English', 'Matt is a member of the clubs medical department.', 31),
(84, 'First Team', '1988-03-17', 'Manchester City', 'Dave Gardner', 99999, 2, 'English', 'Daves role at the club is as a first team sports therapist.', 24),
(85, 'First Team', '1985-09-27', 'Manchester City', 'Nick Court', 99999, 12, 'English', 'Nick started ,\r\nwith AFC Bournemouth as a first team physiotherapist in September 2017.', 28),
(86, 'First Team', '1981-08-02', 'Manchester City', 'Hugo Faria', 99999, 3, 'English', 'Hugo Faria),\r\nwas appointed AFC Bournemouth first-team assistant coach in November 2018.', 30),
(87, 'Manager', '1978-10-22', 'Manchester City', 'Danny Cowley', 99999, 17, 'English', 'Danny Cowley was appointed Huddersfield Town Manager in September 2019.', 73),
(88, 'Assistant Manager', '1982-07-13', 'Manchester City', 'Nicky Cowley', 99999, 11, 'English', 'Nicky Cowley joined his brother, Danny, at Huddersfield Town and became the Clubs Assistant Manager.', 51),
(89, 'First Team Coach', '1982-03-30', 'Manchester City', 'Mark Hudson', 99999, 8, 'English', 'Former Town captain Hudson, 35, has worked with the Under-23s and Under-18s during the season before being a part of Jan Siewerts First Team coaching staff.', 42),
(90, 'Head of Goalkeeping', '1984-04-11', 'Manchester City', 'Paul Clements', 99999, 0, 'English', 'Paul Clements was named as Huddersfield Towns Head of Goalkeeping prior to the start of the 2017/18 Premier League campaign.', 34),
(91, 'Head of Performance Services', '1980-05-02', 'Manchester City', 'John Iga', 99999, 0, 'English', 'Huddersfield Town appointed Dr John Iga to the newly created role of Head of Performance Services in April 2016.', 35),
(92, 'Head of Medical', '1978-03-30', 'Manchester City', 'Ian Kirkpatrick', 99999, 0, 'English', 'Ian Kirkpatrick became the Clubs new Head of Medical on 29 June 2015 after stepping up from his role as Assistant First Team Physiotherapist.', 38),
(93, 'Under-17 Coach', '1983-04-16', 'Manchester City', 'Jon Worthington', 99999, 0, 'English', 'Huddersfield Town appointed former Club Captain Jon Worthington as its new Under-17 Coach ahead of the 2019/20 campaign.', 42),
(94, 'Manager', '1967-12-01', 'Manchester City', 'Phil Parkinson', 99999, 0, 'English', 'Philip John Parkinson is an English professional football manager and former player who played as a midfielder.', 84),
(95, 'Assistant Manager', '1965-11-07', 'Manchester City', 'Steve Parkin', 99999, 0, 'English', 'Stephen John Parkin is an English former professional footballer and manager, currently working as assistant manager at Sunderland.', 74),
(96, 'Head of Recruitment', '1961-05-19', 'Manchester City', 'Tony Coton', 99999, 0, 'English', 'Anthony Philip Coton is an English former footballer who played as a goalkeeper.', 54),
(97, 'Head Coach', '1963-04-02', 'Manchester City', 'Nigel Pearson', 99999, 0, 'English', 'Watford FC announced the appointment of Nigel Pearson as the clubs new Head Coach on December 6, 2019.', 94),
(98, 'Assistant Head Coach', '1963-10-26', 'Manchester City', 'Craig Shakespeare', 99999, 0, 'English', 'Craig Shakespeare joined Watford FC as Assistant Head Coach to Nigel Pearson in December 2019.', 74),
(99, 'Coaching Team', '1979-03-27', 'Manchester City', 'Hayden Mullins', 99999, 0, 'English', 'Having initially arrived at the club as Under-23 Assistant Coach, Mullins is now the Hornets Lead Under-23 Professional Development Coach.', 54),
(100, ' Coaching Team', '1981-09-26', 'Manchester City', 'Graham Stack', 99999, 0, 'English', 'Graham Stack joined the coaching staff at Watford FC in 2018.', 24);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `Name` varchar(50) NOT NULL,
  `capacity` int(7) DEFAULT NULL,
  `Tog` varchar(10) DEFAULT NULL,
  `Clubname` varchar(100) DEFAULT NULL,
  `history` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`Name`, `capacity`, `Tog`, `Clubname`, `history`) VALUES
('2ND TIER OUTDOOR', 5000, 'Real', 'Real Madrid CF', 'Second Tier Outdoor Seats are located in the centre of the 2nd tier, just above the half-pitch line. The area’s exclusive reduced number of seats, central heating, ceiling, perfect location and excellent view of the pitch turn watching a match from it into a truly exclusive experience.'),
('Abbey Stadium', 8127, 'Real', 'Cambridge United', 'Abbey Stadium is a football stadium in Cambridge, England. It has been the home ground of Cambridge United F.C. since 1932,'),
('Academy Stadium', 7000, 'Real', 'Manchester City', 'Academy Stadium is a football stadium in Manchester, England, forming part of the Etihad Campus. Announced on 19 September 2011 as part of an 80-acre training facility to cater for around 400 youth players at a time,[2] the campus was completed in late 2014 and unveiled on 8 December 2014.[3] The stadium, known simply as Academy Stadium, was inaugurated by students of Manchester Metropolitan University, who played the official first games on the pitch on 14 December 2014.[4]'),
('Adams Park', 10137, 'Real', 'Wycombe Wanderers', 'Adams Park is an association football stadium in High Wycombe, Buckinghamshire. Built in 1990, it is the home ground of Wycombe Wanderers FC and, since 2016, Reading FC Women.'),
('AESSEAL New York Stadium', 12021, 'Real', 'Rotherham United', 'Rotherham United F.C. Rotherham United F.C. The New York Stadium, known as the AESSEAL New York Stadium for sponsorship purposes, is a football stadium in Rotherham, South Yorkshire, England. Opened in July 2012, it is the home ground of Rotherham United.'),
('Anfield', 53394, 'Real', 'Liverpool FC', 'it the seventh largest football stadium in England. It has been the home of Liverpool F.C. since their formation in 1892. It was originally the home of Everton F.C. from 1884 to 1891, before they moved to Goodison Park after a dispute with the club president.'),
('Ashton Gate Stadium', 27000, 'Real', 'Bristol City', 'Ashton Gate Stadium Bristol provides the ultimate meeting and events experience. A premier conference and events venue, our stadium features a wide range of function rooms for both corporate and private hire.'),
('Ayresome Park', 26667, 'Real', 'Middlesbrough', 'Middlesbrough had previously played at Linthorpe Road West cricket ground, but election to the Football League meant that an improved stadium was required. Ayresome Park was built at Paradise Field, adjacent to the old Paradise Ground of Middlesbrough Ironopolis.'),
('Baseball Ground', 18300, 'Real', 'Derby County', 'As the name suggests, the stadium was originally used for baseball. It was originally called Leys Baseball Ground and was part of a complex of sports grounds (Leys Recreation Ground) built and owned by businessman Sir Francis Ley for workers at his foundry.'),
('Bescot Stadium', 11049, 'Real', 'Walsall', 'Bescot Stadium, also known as the Banks\'s Stadium for sponsorship purposes, is a football stadium in Walsall, England, and the current home ground of Walsall Football Club.'),
('Bet365 Stadium', 30089, 'Real', 'Stoke City', 'The all-seater stadium cost nearly ?15 million to build and brought the club up to standards with the Taylor Report of January 1990 to end 115 years at the Victoria Ground. Along with the possibility of converting the Victoria Ground into an all-seater stadium.'),
('Bloomfield Road', 16220, 'Real', 'Blackpool', 'Blackpool won the 1953 FA Cup Final, the so-called \"Matthews Final\", in which they beat Bolton Wanderers 4–3, overturning a 1–3 deficit in the closing stages of the game. That same year, four Blackpool players were in the England team which lost against Hungary at Wembley.'),
('Blundell Park', 31151, 'Real', 'Grimsby Town', 'Blundell Park is a football ground in Cleethorpes, North East Lincolnshire, England and home to Grimsby Town Football Club. The stadium was built in 1899, but only one of the original stands remains. The current capacity of the ground is 9,052, after being made all-seater in summer 1995, reducing the number from around 27,000'),
('Boundary Park', 13309, 'Real', 'Oldham Athletic', 'Boundary Park is a football stadium in Oldham, Greater Manchester, England. Its name originates from the fact that it lies at the northwestern extremity of Oldham, with Royton and Chadderton lying immediately north and west respectively.'),
('Bramall Lane', 32125, 'Real', 'Sheffield United', 'Bramall Lane opened as a cricket ground in 1855, having been leased by Michael Ellison from the Duke of Norfolk at an annual rent of ?70. The site was then away from the citys industrial area, and relatively free from smoke. .'),
('Bramalls Lane', 15728, 'Real', 'Sheffield United', 'Bramall Lane. Sheffield United F.C. Bramall Lane is a football stadium in Sheffield, South Yorkshire, England. It is the home of Premier League club Sheffield United.'),
('Brisbane Road', 9271, 'Real', 'Leyton Orient', 'Brisbane Road Stadium currently known as Matchroom Stadium for sponsorship reasons is the home ground of East London based football team, Leyton Orient F.C. First opened in 1937'),
('Broadhall Way', 3142, 'Real', 'Stevenage', 'Broadhall Way, known as the Lamex Stadium for sponsorship purposes, is an association football stadium in Stevenage, Hertfordshire. '),
('Brunton Park', 18202, 'Real', 'Carlisle United', 'Brunton Park is a football stadium and the home of Carlisle United. It is situated in the city of Carlisle, Cumbria and has a certified capacity of 18,202. '),
('Burnden Park', 22616, 'Real', 'Bolton Wanderers', 'Bolton Wanderers was formed in 1874 as Christ Church FC, with the vicar as club president. After disagreements about the use of church premises, the club broke away and became Bolton Wanderers in 1877 meeting at the Gladstone Hotel.'),
('Camp Nou', 99354, 'Real', 'FC Barcelona', 'Meaning new field, often referred to in English as the Nou Camp\r\n									 	has been the home stadium \r\n											of FC Barcelona since its completion in 1957, \r\n											and it is located in Carrer d\'Arístides Maillol.'),
('Cardiff City Stadium', 33280, 'Real', 'Cardiff City', 'ollowing expansion of the Ninian Stand in July 2014, the stadium officially holds 33,280 supporters. The stadium replaced Ninian Park as Cardiff Citys home ground in 2009'),
('Carrow Road', 27244, 'Real', 'Norwich City FC', 'Carrow Road is an association football stadium located in Norwich, Norfolk, England, and is the home of Norwich City Football Club.The stadium is located toward the east of the city, near Norwich railway station and the River Wensum.'),
('Checkatrade.com Stadium', 6134, 'Artifact', 'Crawley Town', 'The Broadfield Stadium is a multi-purpose stadium in Crawley, England. It is currently used mostly for football matches and is the home ground of Crawley Town F.C.'),
('City Ground', 30602, 'Real', 'Nottingham Forest', 'The new ground was called the City Ground. It was only a few hundred yards from the old Town Ground at the opposite end of Trent Bridge, which had been named after the Town Arms pub. Nottingham was granted its Charter as a City in 1897'),
('Craven Cottage', 25700, 'Real', 'Fulham', 'Craven Cottage is a football stadium located in Fulham, London. It has been the home ground of Fulham F.C. since 1896.The grounds capacity was 25,700,all-seated.'),
('Dean Court', 11364, 'Real', 'Bournemouth', 'In 1910, Boscombe F.C. was given a piece of land by the towns Cooper-Dean family, after whom the ground was named. The land was the site of an old gravel pit, and the ground was not built in time for the start of the 1910–11 season. As a result, the club played at the adjacent Kings Park until moving into Dean Court in December 1910.'),
('Deepdale Stadium', 23404, 'Real', 'Preston North End', 'Deepdale is a football stadium in the Deepdale area of Preston, England, the home of Preston North End F.C.'),
('DW Stadium', 25138, 'Real', 'Wigan Athletic', 'The first competitive football match there took place on 7 August 1999, with Wigan Athletic facing Scunthorpe United in a Second Division match. Simon Haworth scored twice, including the first competitive goal at the new stadium, as Athletic triumphed 3–0.'),
('Elland Road', 39460, 'Real', 'Leeds United', 'The site, at the foot of Beeston Hill beside the A643 road to Elland, was owned by Bentleys Brewery and was called the Old Peacock Ground, after the pub which faced the land, hence the nickname the Peacocks associated with both Leeds City and United.'),
('Emirates Stadium', 60704, 'Real', 'Arsenal', 'The Emirates Stadium (known as Ashburton Grove prior to sponsorship, and as Arsenal Stadium for UEFA competitions) is a football stadium in Holloway, London, England, and the home of Arsenal. With a capacity of 60,704 it is the fourth-largest football stadium in England after Wembley Stadium, Old Trafford and Tottenham Hotspur Stadium.'),
('Etihad Stadium', 47805, 'Real', 'Manchester City', 'The City of Manchester Stadium in Manchester, England, currently known as the Etihad Stadium for sponsorship reasons, is the home of Manchester City and, with a domestic football capacity of 55,097, the sixth-largest in the Premier League and tenth-largest in the United Kingdom.'),
('Ewood Park', 31367, 'Real', 'Blackburn Rovers', 'Football had been played on the site since at least 1881; Rovers played four matches there when it was known as Ewood Bridge and was most likely little more than a field. Their first match was against Sheffield Wednesday on 9 April 1881.'),
('Falmer Stadium', 30750, 'Real', 'Brighton & Hove Albion', 'The stadium officially opened on 30 July 2011, hosting a friendly match against then-Brighton manager Gus Poyets old club Tottenham Hotspur, the home-side narrowly losing 3–2.'),
('Fratton Park', 20978, 'Real', 'Portsmouth', 'ontrary to popular belief, Fratton Park is actually named after Fratton railway station and not the geographic area of Fratton of Portsmouth. Despite its Fratton Park name, Portsmouths football ground is not located in the Fratton area of Portsmouth, instead it was built in Milton in 1899.'),
('Glanford Park', 9088, 'Real', 'Scunthorpe United', 'Glanford Park, currently known as The Sands Venue Stadium for sponsorship reasons, is a football stadium in Scunthorpe, Lincolnshire, England, and is the current home of Scunthorpe United.'),
('Globe Arena', 6476, 'Artifact', 'Morecambe', 'The Globe Arena is a football stadium in Morecambe, Lancashire, England, which is used by Morecambe F.C.It is named after Globe Construction, the company that built the stadium.'),
('Goodison Park', 39572, 'Real', 'Everton', 'Goodison Park is a football stadium in Walton, Liverpool, England, and the home of Premier League club Everton since its completion in 1892.\r\nThe stadium is in a residential area two miles (3 km) from Liverpool city centre. '),
('Griffin Park', 12300, 'Hybrid', 'Brentford', 'Griffin Park is a football ground in Brentford, situated in the London Borough of Hounslow, Greater London. It has been the home ground of Championship club Brentford F.C. since it was built in 1904.'),
('Highfield Road', 23489, 'Real', 'Coventry City', 'It was built in 1899 in the Hillfields district, close to the city centre, and staged its final game on 30 April 2005 when Coventry City beat Derby County 6-2 in the Football League Championship with the last ever goal appropriately being scored by Andy Whing, a product of Coventry Citys youth academy .'),
('Hillsborough Stadium', 39732, 'Real', 'Sheffield Wednesday', 'Hillsborough Stadium, is a 39,732-capacity association football stadium located in Owlerton, a north-western suburb of Sheffield, Yorkshire, England. It has been the home of Sheffield Wednesday since its opening in 1899.'),
('Home Park', 43587, 'Real', 'Plymouth Argyle', 'Home Park is a football stadium in Plymouth, England. The ground, nicknamed the Theatre of Greens, has been the home of Football League Two club Plymouth Argyle since 1901.'),
('JobServe Community Stadium', 10105, 'Real', 'Colchester United', 'Colchester Community Stadium, known for sponsorship reasons as the JobServe Community Stadium, is a football stadium in Colchester, England.'),
('Juventus Stadium', 41507, 'Real', 'Juventus F.C.', 'Juventus Stadium, known for sponsorship reasons as the Allianz Stadium since July 2017, sometimes simply known in Italy as the Stadium (Italian: Lo Stadium), is an all-seater football stadium in the Vallette borough of Turin, Italy, and the home of Juventus F.C. '),
('Kassam Stadium', 12500, 'Real', 'Oxford United', 'assam Stadium or Grenoble Road is the home ground of Oxford United Football Club, who currently compete in League Two which is the 4th highest tier of English Football. '),
('KCOM Stadium', 25504, 'Real', 'Hull City', 'a multi-purpose facility in the city of Kingston upon Hull, England. The stadium was previously called the KC Stadium, but was renamed as part of a major rebrand by the stadiums sponsors, telecommunications provider KCOM, on 4 April 2016.'),
('Keepmoat Stadium', 15231, 'Real', 'Doncaster Rovers', 'Keepmoat Stadium is a multi-purpose sports venue located in the South Yorkshire town of Doncaster. Home to Doncaster Rovers Football Club who are currently in League One'),
('Kenilworth Road', 10356, 'Real', 'Luton Town', 'Kenilworth Road is a football stadium in Luton, Bedfordshire, England. It has been home to Luton Town Football Club since 1905 when they left Dunstable Road. The ground has also hosted women\'s and youth international matches.'),
('Kingfield Stadium', 6036, 'Real', 'Woking', 'Kingfield Stadium, also known as Laithwaite Community Stadium for sponsorship reasons, is the home of Woking F.C. in the Kingfield area of Woking, Surrey which has a capacity of 6,036 of which 2,500 are seated on grandstands.'),
('Kingsmeadow', 4850, 'Artifact', 'AFC Wimbledon', 'Kingsmeadow is an association football stadium in the area of Norbiton, Kingston upon Thames, London, which is used for the home matches of AFC Wimbledon and Chelsea Women.'),
('Kirklees Stadium', 24500, 'Real', 'Huddersfield Town', ' a multi-use stadium in Huddersfield in West Yorkshire, England. Since 1994, it has been the home ground of football club Huddersfield Town and rugby league side Huddersfield Giants, both of whom moved from Leeds Road.'),
('La Masia', 2500, 'Real', 'FC Barcelona', 'The Ciutat Esportiva Joan Gamper training complex has in the La Masia-Centre de Formació Oriol Tort a unique residence facility due to its many uses and its architectural individuality.'),
('Liberty Stadium', 21028, 'Real', 'Swansea City', 'With the Vetch Field, St Helens and The Gnoll no longer being up-to-date venues to play at, and both the Swans and the Ospreys not having the necessary capital to invest into a new stadium.'),
('LNER Stadium', 10120, 'Artifact', 'Lincoln City', 'Sincil Bank Stadium, known for sponsorship reasons as LNER Stadium, is a football stadium in Lincoln, England which has been the home of Lincoln City since 1895. Previously, Lincoln City had played at the nearby John O\'Gaunts ground since the club\'s 1884 inception.'),
('Loftus Road', 18439, 'Real', 'Queens Park Rangers', 'The ground was first used on 11 October 1904 by Shepherds Bush F.C., an amateur side that was disbanded during the First World War.QPR moved to Loftus Road in 1917, having had their ground at Park Royal commandeered by the army in 1915.'),
('London Stadium', 60000, 'Real', 'West Ham United', 'During Londons bid for the games, promotional materials featured a main stadium with a roof \"designed to wrap itself around the venue like muscles supporting the body'),
('Madejski Stadium', 24161, 'Real', 'Reading', 'In January 1990, the Taylor Report made all-seater stadiums compulsory in the top two divisions of English football for the 1994-95 season. Having played in the second tier of the English league several times before, Reading were champions of Division Two in 1994, and were promoted to Division One.'),
('Memorial Stadium', 12300, 'Real', 'Bristol Rovers', 'The Memorial Stadium, also commonly known by its previous name of the Memorial Ground, is a sports ground in Bristol, England, and is the home of Bristol Rovers F.C..'),
('Molineux Stadium', 32050, 'Real', 'Wolverhampton Wanderers', 'The stadium is a few hundred yards north of Wolverhampton city centre, at the far side of the citys ring road, and is a prominent building due to its size in an area with predominantly low-rise buildings.'),
('Montgomery Waters Meadow', 9875, 'Real', 'Shrewsbury Town', 'New Meadow, also known as Montgomery Waters Meadow for sponsorship purposes, is a stadium situated on the southern outskirts of Shrewsbury.'),
('Moor Lane', 5108, 'Real', 'Salford City', 'Moor Lane, currently known as the Peninsula Stadium for sponsorship purposes, is a football stadium in Kersal, Salford, Greater Manchester, England. '),
('Moss Rose', 6355, 'Real', 'Macclesfield Town', 'Moss Rose is a football stadium in Macclesfield, Cheshire, England, which is the home ground of Macclesfield Town. '),
('Oakwell', 23009, 'Real', 'Barnsley', 'The stand is made up of two tiers, with only the upper tier covered, but at the expense of several supporting columns for the roof structure. The seats are the originals from the early 1900s, and from here you get a decent view with moderate legroom. In spite of the restricted views and modest facilities, the West Stand remains a popular vantage point for many fans.'),
('Old Trafford', 74879, 'Real', 'Manchester United', 'It is the largest club football stadium (and second largest football stadium overall after Wembley Stadium) in the United Kingdom, and the eleventh-largest in Europe. 						It is about 0.5 miles (800 m) from Old Trafford Cricket Ground and the adjacent tram stop.'),
('Pirelli Stadium', 6912, 'Artifact', 'Burton Albion', 'Pirelli Stadium is an association football stadium on Princess Way in Burton upon Trent, Staffordshire, England. It was built in 2005 and is the current home of Burton Albion FC.'),
('Portman Road', 30311, 'Real', 'Ipswich Town F.C.', ' The ground was also used as a cricket pitch during the summer by the East Suffolk Cricket Club who had played there since 1855.The cricket club had erected a pavilion, the first fixed building at the ground.'),
('Prenton Park', 16587, 'Real', 'Tranmere Rovers', 'Prenton Park  is an association football stadium in Birkenhead, England. It is the home ground of Tranmere Rovers, as well as Liverpool\'s women and reserves teams.'),
('Priestfield Stadium', 11582, 'Real', 'Gillingham', 'Priestfield Stadium (popularly known simply as Priestfield and officially known from 2007 to 2010 as KRBS Priestfield Stadium and from 2011 as MEMS Priestfield Stadium for sponsorship purposes) is a football stadium in Gillingham, Kent. It has been the home of Gillingham Football Club since the club\'s formation in 1893'),
('Proact Stadium', 10504, 'Real', 'Chesterfield', 'The Proact Stadium (formerly known as the b2net Stadium) is an all-seater football stadium in Whittington Moor, Chesterfield, Derbyshire, on the site of the former Dema Glassworks.'),
('Rodney Parade', 8700, 'Real', 'Newport County', 'Rodney Parade is a stadium in the city of Newport, South Wales, owned and operated by the Welsh Rugby Union. It is located on the east bank of the River Usk in Newport city centre.'),
('Roots Hall', 12392, 'Real', 'Southend United', 'Roots Hall is a football stadium located in Southend-on-Sea, Essex, England. The stadium is the home ground of the League One football club Southend United. '),
('San Mam?s', 53289, 'Real', 'Athletic Bilbao', 'The event was attended by: the Lehendakari of the Basque Country, Patxi Lopez; the Deputy-General of Biscay, Josh Luis Bilbao; the Mayor of Bilbao, Isaki Azkuna; the Chairman of Bilbao Bizkaia Kutxa, Mario Fernandez.'),
('Santiago Bernabu', 81044, 'Real', 'Real Madrid CF', 'On 22 June 1944, the Banco Mercantil e Industrial bank granted credit to Santiago Bernab?u and Rafael Salgado for the purchase of the land adjacent to the old Ramin Amin.'),
('Selhurst Park', 26309, 'Real', 'Crystal palace', 'Selhurst Park is an association football stadium located in the London suburb of Selhurst in the Borough of Croydon. It is the home ground of Crystal Palace Football Club playing in the Premier League. '),
('Spotland Stadium', 10249, 'Artifact', 'Rochdale', 'Spotland Stadium, known as the Crown Oil Arena for sponsorship reasons, in the Spotland area of Rochdale, Greater Manchester, is home to Rochdale A.F.C. and Rochdale Hornets R.F.L.C. and has a capacity of 10,249.'),
('St Andrews', 30079, 'Real', 'Birmingham City', 'Small Heath Alliance – the original name of Birmingham City Football Club – played their first home games on waste ground off Arthur Street, in the Bordesley Green district of Birmingham, very near the site where St Andrews would be built.'),
('St James Park (Exeter)', 8696, 'Real', 'Exeter City', 'St James Park is a football stadium in Exeter and is the home of Exeter City FC The stadium is served by the St James Park railway station which is right next to the ground (the line runs behind the grandstand). It has been adopted by the club who contribute to its upkeep'),
('St James\' Park', 52354, 'Real', 'Newcastle United', 'St James\' Park is a football stadium in Newcastle upon Tyne, England. It is the home of Premier League club Newcastle United F.C. With a seating capacity of 52,388, it is the eighth largest football stadium in England.'),
('St. Marys Stadium', 32689, 'Real', 'Southampton FC', 'Since the 1980s, when Southampton regularly challenged the best sides in the English league (particularly in 1984 when they were league runners-up'),
('Stadium MK', 30500, 'Real', 'Milton Keynes Dons', 'Stadium MK is a football ground in the Denbigh district of Bletchley in Milton Keynes, Buckinghamshire, England. Designed by Populous,it is the home ground of EFL League One side Milton Keynes Dons and FA Women\'s National League South side Milton Keynes Dons Women.'),
('Stadium of light', 49000, 'Real', 'Sunderland', 'the Stadium of Light is the ninth largest stadium in England. The stadium primarily hosts Sunderland A.F.C. home matches.'),
('Stamford Bridge', 41631, 'Real', 'Chelsea', 'Stamford Bridge is a football stadium in Fulham, adjacent to the borough of Chelsea in South West London, commonly referred to as The Bridge. It is the home of Chelsea Football Club, which competes in the Premier League, the highest division of English football.'),
('The Alexandra Stadium', 10153, 'Real', 'Crewe Alexandra', 'Alexandra Stadium, more commonly known as Gresty Road is a football stadium in Crewe, Cheshire, England. The home ground of Crewe Alexandra, it has an all-seated capacity of 10,153.'),
('The County Ground', 15728, 'Real', 'Swindon Town', 'The County Ground (currently known as the Energy Check County Ground for sponsorship purposes) is a stadium located near the town centre of Swindon, Wiltshire, England, and has been home to Swindon Town Football Club since 1896. The current capacity of 15,728, all-seated, has been at that level since the mid-1990s.'),
('The Den', 20146, 'Real', 'Millwall', 'The Den (previously The New Den) is a football stadium in Bermondsey, south-east London, and the home of Millwall Football Club.'),
('The Hawthorns', 28003, 'Real', 'West Bromwich Albion ', 'The expiry of the lease on Stoney Lane, as well as the clubs desire for a more spacious location, saw them move once again in 1900, this time permanently. All of Albions previous grounds had been close to the centre of West Bromwich.'),
('The Jonny-Rocks Stadium', 7066, 'Real', 'Cheltenham Town', 'Whaddon Road, known as the Jonny-Rocks Stadium for sponsorship reasons, is a football stadium in Cheltenham, England. It is the home ground of Cheltenham Town F.C. '),
('The New Lawn', 2000, 'Real', 'Forest Green Rovers', ' The New Lawn is a football stadium in Nailsworth, Gloucestershire. It has been the home stadium of League Two club Forest Green Rovers since 2006.'),
('The Valley', 27111, 'Real', 'Charlton Athletic ', 'n Charltons early years, the club had a nomadic existence using several different grounds between its formation in 1905 and the beginning of World War I in 1914. The ground dates from 1919, at a time when Charlton were moderately successful and looking for a new home.'),
('Torquay United Football Club', 6500, 'Real', 'Torquay United', 'Plainmoor. Plainmoor is an association football stadium located in the Plainmoor suburb of Torquay, Devon, England. Since 1921, the stadium has been the home of Torquay United Football Club, who currently compete in the National League, the fifth tier of English football.'),
('Tottenham Hotspur Stadium', 62303, 'Real', 'Tottenham Hotspur FC', 'The Tottenham Hotspur Stadium is the home of Tottenham Hotspur in north London, replacing the club\'s previous stadium, White Hart Lane. It has a capacity of 62,303, making it one of the largest stadiums in the Premier League and the largest club stadium in London. It is designed to be a multi-purpose stadium and features the world\'s first dividing, retractable football pitch, which reveals a synthetic turf pitch underneath for NFL London Games, concerts and other events.'),
('Turf Moor', 21944, 'Real', 'BurnleyCardiff City', 'Sport was first played at the Turf Moor site in 1833, when Burnley Cricket Club was founded and made an area which encompasses the current football ground their home. Horse racing also took place at the site in 1840.'),
('Vale Park', 19052, 'Real', 'Port Vale', 'Vale Park is a football stadium in Stoke-on-Trent, England. It has been the home ground of Port Vale F.C. since 1950.'),
('Valley Parade', 25136, 'Real', 'Bradford City', 'When their ground was sold to facilitate the construction of Drummond School, the club required a new home. Consequently, they bought one-third of the Valley Parade site in Manningham'),
('Vicarage Road', 22200, 'Real', 'Watford', 'The ground was officially opened by Col. Charles Healey of Benskins Brewery for the visit of Millwall on 30 August 1922. In addition to being Watfords home since opening, the stadium was also home to Wealdstone F.C. between 1991 and 1993'),
('Villa Park', 42788, 'Real', 'Aston Villa', 'Villa Park is a football stadium in Aston, Birmingham, England, with a seating capacity of 42,785. It has been the home of Aston Villa Football Club since 1897. '),
('Vinovo', 400, 'Hybrid', 'Juventus F.C.', 'The Juventus Training Center (colloquially known as \"the Vinovo\") is a football training facility owned by Juventus, located in Vinovo a comune 14 kilometres southwest of the city of Turin. Designed by GAU and Shesa,the training ground features modern facilities and was opened in August 2006. The facility measures a total of 162,900 square meters and originally cost € 12.5 million.'),
('Weston Homes Stadium', 15314, 'Real', 'Peterborough United', 'London Road, currently known as the Weston Homes Stadium for sponsorship reasons, is a multi-purpose stadium in Peterborough, England. It is currently used mostly for football matches and is the home ground of Peterborough United. '),
('Wrexham Football Club', 10500, 'Real', 'Wrexham', 'Wrexham Football Club have played at the Racecourse Ground since being formed in the local Turf Hotel public house in October 1864.'),
('York Road', 4500, 'Artifact', 'Maidenhead United', 'York Road is a football stadium in Maidenhead, Berkshire, England. The home ground of Maidenhead United, it is acknowledged by The Football Association and FIFA to be the oldest continuously-used senior association football ground in the world by the same club');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `Player_id` int(8) NOT NULL,
  `Clubname` varchar(100) NOT NULL,
  `Value` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`Player_id`, `Clubname`, `Value`) VALUES
(1, 'Manchester City', 1800000),
(2, 'Manchester City', 30000000),
(3, 'Manchester City', 15000000),
(4, 'Manchester City', 1500000),
(5, 'Manchester City', 50000000),
(6, 'Manchester City', 40000000),
(7, 'Manchester City', 25000000),
(8, 'Manchester City', 20000000),
(9, 'Manchester City', 600000),
(10, 'Manchester City', 10000000),
(11, 'Manchester City', 15000000),
(12, 'Manchester City', 1500000),
(13, 'Manchester City', 190000),
(14, 'Manchester City', 25000000),
(15, 'Manchester City', 80000000),
(16, 'Manchester City', 45000000),
(17, 'Manchester City', 40000000),
(18, 'Manchester City', 10000000),
(19, 'Manchester City', 550000),
(20, 'Manchester City', 20000000),
(21, 'Manchester City', 200000),
(22, 'Manchester City', 600000),
(23, 'Manchester City', 60000000),
(24, 'Manchester City', 70000000),
(25, 'Manchester City', 60000000),
(26, 'Manchester City', 20000000),
(27, 'Manchester City', 12000000),
(28, 'FC Barcelona', 600000000),
(29, 'Juventus F.C.', 100000000),
(30, 'Juventus F.C.', 450000000),
(31, 'Manchester City', 145000000),
(32, 'Manchester City', 80000000),
(33, 'Manchester City', 145000000),
(34, 'Manchester City', 20000000),
(35, 'Manchester City', 26000000),
(36, 'Manchester City', 22000000),
(37, 'Manchester City', 90000000),
(38, 'Manchester City', 60000000),
(39, 'Manchester City', 42000000),
(40, 'Manchester City', 65000000),
(41, 'Manchester City', 50000000),
(42, 'Manchester City', 35000000),
(43, 'Manchester City', 25000000),
(44, 'Manchester City', 21000000),
(45, 'Manchester City', 40000000),
(46, 'Manchester City', 35000000),
(47, 'Manchester City', 35000000),
(48, 'Manchester City', 15000000),
(49, 'Manchester City', 9000000),
(50, 'Manchester City', 6000000),
(51, 'Manchester City', 600000000),
(52, 'Manchester City', 55000000),
(53, 'Manchester City', 40000000),
(54, 'Manchester City', 42000000),
(55, 'Manchester City', 32000000),
(56, 'Manchester City', 31000000),
(57, 'Manchester City', 41000000),
(58, 'Manchester City', 40000000),
(59, 'Manchester City', 12000000),
(60, 'Manchester City', 40000000),
(61, 'Manchester City', 25000000),
(62, 'Manchester City', 34000000),
(63, 'Manchester City', 18000000),
(64, 'Manchester City', 24000000),
(65, 'Manchester City', 16000000),
(66, 'Manchester City', 29000000),
(67, 'Manchester City', 20000000),
(68, 'Manchester City', 44000000),
(69, 'Manchester City', 22000000),
(70, 'Manchester City', 26000000),
(71, 'Manchester City', 37000000),
(72, 'Manchester City', 14000000),
(73, 'Manchester City', 18000000),
(74, 'Manchester City', 4000000),
(75, 'Manchester City', 1000000),
(76, 'Manchester City', 13000000),
(77, 'Manchester City', 10000000),
(78, 'Manchester City', 6000000),
(79, 'Manchester City', 1400000),
(80, 'Manchester City', 2200000),
(81, 'Manchester City', 5500000),
(82, 'Manchester City', 2400000),
(83, 'Manchester City', 600000),
(84, 'Manchester City', 15500000),
(85, 'Manchester City', 5500000),
(86, 'Manchester City', 4800000),
(87, 'Manchester City', 5500000),
(88, 'Manchester City', 13000000),
(89, 'Manchester City', 4800000),
(90, 'Manchester City', 14500000),
(91, 'Manchester City', 5500000),
(92, 'Manchester City', 6500000),
(93, 'Manchester City', 4000000),
(94, 'Manchester City', 4500000),
(95, 'Manchester City', 1600000),
(96, 'Manchester City', 3600000),
(97, 'Manchester City', 8000000),
(98, 'Manchester City', 17500000),
(99, 'Manchester City', 14500000),
(100, 'Manchester City', 5500000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Address`,`Clubname`),
  ADD KEY `Clubname` (`Clubname`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`Number`,`Player_id`,`Clubname`),
  ADD UNIQUE KEY `Number` (`Number`),
  ADD UNIQUE KEY `Player_id_2` (`Player_id`),
  ADD KEY `Player_id` (`Player_id`),
  ADD KEY `Clubname` (`Clubname`);

--
-- Indexes for table `eventdate`
--
ALTER TABLE `eventdate`
  ADD KEY `Clubname` (`Clubname`);

--
-- Indexes for table `formation`
--
ALTER TABLE `formation`
  ADD KEY `Clubname` (`Clubname`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Clubname` (`Clubname`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`Player_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Clubname` (`Clubname`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`Name`),
  ADD KEY `Clubname` (`Clubname`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`Player_id`,`Clubname`),
  ADD UNIQUE KEY `Player_id` (`Player_id`),
  ADD KEY `Clubname` (`Clubname`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`Clubname`) REFERENCES `club` (`Name`);

--
-- Constraints for table `contract`
--
ALTER TABLE `contract`
  ADD CONSTRAINT `contract_ibfk_2` FOREIGN KEY (`Clubname`) REFERENCES `club` (`Name`),
  ADD CONSTRAINT `contract_ibfk_3` FOREIGN KEY (`Player_id`) REFERENCES `player` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `eventdate`
--
ALTER TABLE `eventdate`
  ADD CONSTRAINT `eventdate_ibfk_1` FOREIGN KEY (`Clubname`) REFERENCES `club` (`Name`);

--
-- Constraints for table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `formation_ibfk_1` FOREIGN KEY (`Clubname`) REFERENCES `club` (`Name`);

--
-- Constraints for table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`Clubname`) REFERENCES `club` (`Name`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`Player_id`) REFERENCES `player` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`Clubname`) REFERENCES `club` (`Name`);

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`Clubname`) REFERENCES `club` (`Name`);

--
-- Constraints for table `transfer`
--
ALTER TABLE `transfer`
  ADD CONSTRAINT `transfer_ibfk_1` FOREIGN KEY (`Clubname`) REFERENCES `club` (`Name`),
  ADD CONSTRAINT `transfer_ibfk_2` FOREIGN KEY (`Player_id`) REFERENCES `player` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;