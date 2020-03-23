-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 23 mrt 2020 om 12:47
-- Serverversie: 10.1.30-MariaDB
-- PHP-versie: 7.0.27

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
-- Tabelstructuur voor tabel `openingstijden`
--

CREATE TABLE `openingstijden` (
  `openingstijden-id` int(11) NOT NULL,
  `dag` varchar(32) NOT NULL,
  `d` varchar(32) NOT NULL,
  `open` time NOT NULL,
  `dicht` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `openingstijden`
--

INSERT INTO `openingstijden` (`openingstijden-id`, `dag`, `d`, `open`, `dicht`) VALUES
(1, 'Maandag', 'ma', '07:00:00', '18:00:00'),
(2, 'Dinsdag', 'di', '07:00:00', '18:00:00'),
(3, 'Woensdag', 'wo', '07:00:00', '18:00:00'),
(4, 'Donderdag', 'do', '07:00:00', '18:00:00'),
(5, 'Vrijdag', 'vr', '07:00:00', '18:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `informatie`
--

CREATE TABLE `informatie` (
  `info-id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `text` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `informatie`
--

INSERT INTO `informatie` (`info-id`, `title`, `text`) VALUES
(1, '', 'Eventueel af wijkende tijden in overleg.\r\nDe kinderen verschillen van leeftijd.(van 0 t/m 12 jaar)\r\nWe mogen maar maximaal 6 kinderen tegelijk opvangen daarom is er altijd tijd voor u kind.\r\n\r\nVakantie\r\nDe opvang is gesloten op reguliere feestdagen en 3 weken aan een gesloten weken in de zomervakantie, regio Midden-Nederland. In het weekend is de opvang gesloten.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `staatvooritems`
--

CREATE TABLE `staatvooritems` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `text` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `staatvooritems`
--

INSERT INTO `staatvooritems` (`id`, `title`, `text`) VALUES
(1, 'Professioneel', 'Diploma helpende zorg en welzijn niveau 2.<br/>\r\nDiploma kinder EHBO.<br/>\r\nDiploma VVE kiki voor gastouders.<br/>\r\nDiploma pedagogisch medewerker niveau 3.(Recent)'),
(2, 'Kleinschalig', '<h3>Uitgangspunt:</h3>\r\n<p>Een voordeel van kleinschaligheid is een vaste persoon en flexibel met tijden/dagen.<br />\r\n	U bent van harte welkom voor een nadere kenismaking.<br />\r\n	En u kind(eren) zijn natuurlijk ook welkom.\r\n</p><br />\r\n<h3>Specifieke kwaliteitseisen Gastouderopvang:</h3>\r\n<ul>\r\n	<li>De opvang kan plaatsvinden op het adres van de gastouder of op dat van de ouders van de kinderen die u opvangt.</li>\r\n	<li>De opvang kan maar op 1 vaste locatie plaatsvinden.</li>\r\n	<li>De gastouder vangt maximaal zes kinderen tegelijk op, inclusief de eigen kinderen.</li>\r\n	<li>6 kinderen in de leeftijd van 0 tot 10 jaar.</li>\r\n	<li>niet meer dan 5 kinderen wanneer zij allen jonger zijn dan 4 jaar.</li>\r\n	<li>maximaal 4 kinderen van 0 en 1 jaar oud, waarvan maximaal 2 van 0 jaar.<br />\r\n	&nbsp;</li>\r\n	<li>Er is voldoende speelruimte binnen en buiten. De hoeveelheid ruimte hangt af van het aantal en de leeftijd van de kinderen die tegelijk opgevangen worden.</li>\r\n	<li>Er is een aparte slaapruimte voor kinderen jonger dan 1,5 jaar.</li>\r\n	<li>Bij opvang van 4 of meer kinderen is een achterwacht verplicht, De achterwacht moet in een noodsituatie binnen 15 minuten op het opvangadres aanwezig kunnen zijn.</li>\r\n</ul>'),
(3, 'Flexibel', '<p>Begin en eind tijden in overleg.<br />\r\n	Indien mogelijk kunnen er extra dagen aan gevraagt worden.<br />\r\n	<br />\r\n	Minimaal 2 weken van te voren vakantie en vrije dagen doorgeven,<br />\r\n	waardoor een ander de mogelijkheid heeft extra opvang aan te vragen.<br />\r\n	<b>Vakantie voor de gastouder is in januari bekend, voor het hele jaar</b></p>'),
(4, 'Persoonlijk', '<p>Door een vaste gastouder onstaat er een goed persoonlijk contact, en zijn de wensen van ieder kind bekend.</p>'),
(5, 'Huiselijk', '<p>De opvang vind plaats binnen ons gezin.<br />\r\n	We hebben 3 kinderen een dochter uit 1996 een dochter uit 1999<br />\r\n	en een zoon uit 2001.<br />\r\n	<br />\r\n	We wonen in een twee onder 1 kap woning<br />\r\n	met een ruime overzichtelijke tuin.<br />\r\n	<br />\r\n	Naast ons woont mijn moeder en is tevens<br />\r\n	onze achterwacht.\r\n	<p></p>\r\n	</p>'),
(6, 'Creatief', '<p>Creatief bezig zijn vind ik erg leuk,<br />\r\n	we maken daarom ook vaak een leuk knutseltje bij een nieuw seizoen.<br />\r\n	<br />\r\n	Maar ook creatief om gaan met gewone situaties,<br />\r\n	buiten picknikken ipv. gewoon aan tafel.\r\n	</p>');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `openingstijden`
--
ALTER TABLE `openingstijden`
  ADD PRIMARY KEY (`openingstijden-id`);

--
-- Indexen voor tabel `informatie`
--
ALTER TABLE `informatie`
  ADD PRIMARY KEY (`info-id`);

--
-- Indexen voor tabel `staatvooritems`
--
ALTER TABLE `staatvooritems`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `openingstijden`
--
ALTER TABLE `openingstijden`
  MODIFY `openingstijden-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `informatie`
--
ALTER TABLE `informatie`
  MODIFY `info-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `staatvooritems`
--
ALTER TABLE `staatvooritems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
