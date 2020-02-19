-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 04:54 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gastoude_websitev2`
--

-- --------------------------------------------------------

--
-- Table structure for table `staatvooritems`
--

CREATE TABLE `staatvooritems` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `text` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staatvooritems`
--

INSERT INTO `staatvooritems` (`id`, `title`, `text`) VALUES
(1, 'Professioneel', 'Diploma helpende zorg en welzijn niveau 2.<br/>\r\nDiploma kinder EHBO.<br/>\r\nDiploma VVE kiki voor gastouders.<br/>\r\nDiploma pedagogisch medewerker niveau 3.(Recent)'),
(2, 'Kleinschalig', '<h3>Uitgangspunt:</h3>\r\n\r\n<ul>\r\n	<li>Een voordeel van kleinschaligheid is een vaste persoon en flexibel met tijden/dagen.<br />\r\n	U bent van harte welkom voor een nadere kenismaking.<br />\r\n	En u kind(eren) zijn natuurlijk ook welkom.<br />\r\n	&nbsp;\r\n	</li>\r\n</ul>\r\n<h3>Specifieke kwaliteitseisen Gastouderopvang:</h3>\r\n<ul>\r\n	<li>De opvang kan plaatsvinden op het adres van de gastouder of op dat van de ouders van de kinderen die u opvangt.</li>\r\n	<li>De opvang kan maar op 1 vaste locatie plaatsvinden.</li>\r\n	<li>De gastouder vangt maximaal zes kinderen tegelijk op, inclusief de eigen kinderen.</li>\r\n	<li>6 kinderen in de leeftijd van 0 tot 10 jaar.</li>\r\n	<li>niet meer dan 5 kinderen wanneer zij allen jonger zijn dan 4 jaar.</li>\r\n	<li>maximaal 4 kinderen van 0 en 1 jaar oud, waarvan maximaal 2 van 0 jaar.<br />\r\n	&nbsp;</li>\r\n	<li>Er is voldoende speelruimte binnen en buiten. De hoeveelheid ruimte hangt af van het aantal en de leeftijd van de kinderen die tegelijk opgevangen worden.</li>\r\n	<li>Er is een aparte slaapruimte voor kinderen jonger dan 1,5 jaar.</li>\r\n	<li>Bij opvang van 4 of meer kinderen is een achterwacht verplicht, De achterwacht moet in een noodsituatie binnen 15 minuten op het opvangadres aanwezig kunnen zijn.</li>\r\n</ul>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staatvooritems`
--
ALTER TABLE `staatvooritems`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staatvooritems`
--
ALTER TABLE `staatvooritems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
