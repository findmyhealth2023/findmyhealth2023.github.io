-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 08, 2023 la 08:34 PM
-- Versiune server: 10.4.21-MariaDB
-- Versiune PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `findmyhealth`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `cabinete`
--

CREATE TABLE `cabinete` (
  `nr` int(255) NOT NULL,
  `nume` text NOT NULL,
  `localitate` text NOT NULL,
  `adresa` text NOT NULL,
  `complete_address` text NOT NULL,
  `telefon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `cabinete`
--

INSERT INTO `cabinete` (`nr`, `nume`, `localitate`, `adresa`, `complete_address`, `telefon`) VALUES
(1, 'CMI DR. NEDELCU BOGDANA ', 'Aninoasa', 'str. Bujorului  bl. B  ap. 2', 'Aninoasa str. Bujorului  bl. B  ap. 2', '0729942346'),
(2, 'CMI DR. CIRCO GRATIAN PETRU', 'Baia de Cris', 'str. Muntele Gaina  nr. 2', 'Baia de Cris str. Muntele Gaina  nr. 2', '0723983730'),
(3, 'CMI DR. CSEP GABRIEL', 'Baru-Mare', 'str. Principala  nr. 222', 'Baru-Mare str. Principala  nr. 222', '0254778110'),
(4, 'CMI MEDICINA DE FAMILIE', 'Bosorod', 'str. Principala  nr. 152A', 'Bosorod str. Principala  nr. 152A', '0254733056  0730615190'),
(5, 'CMI AUGUSTA', 'Brad', 'str. Vasile Milea  bl. B4/15', 'Brad str. Vasile Milea  bl. B4/15', '0741030553'),
(6, 'CMI DR. AYMAN MILHEM', 'Brad', 'str. Cuza Voda  bl. 14  ap. 59', 'Brad str. Cuza Voda  bl. 14  ap. 59', '0745617440'),
(7, 'SC HELIOS MED SRL', 'Calan', 'str. Independentei  nr. 18/81', 'Calan str. Independentei  nr. 18/81', '0254731799  0723161596'),
(8, 'CMI DR. JURJ MIHAELA', 'Calan', 'str. Independentei  nr. 18/91', 'Calan str. Independentei  nr. 18/91', '0728958330'),
(9, 'CMI DR. TRIFU LAURA MARIA', 'Densus', 'str. Principala  nr. 43', 'Densus str. Principala  nr. 43', '0755568804'),
(10, 'CMI DR. BALU DANIELA', 'Deva', 'str. Zamfirescu  nr. 5', 'Deva str. Zamfirescu  nr. 5', '0722878486'),
(11, 'CMI DIANA MEDICA ', 'Deva', 'str. Mihai Eminescu  bl. 13A', 'Deva str. Mihai Eminescu  bl. 13A', '0744647723  0354412414'),
(12, 'CMI PROMEDICA', 'Deva', 'b-dul 22 Decembrie  bl. 11  parter', 'Deva b-dul 22 Decembrie  bl. 11  parter', '0254235777  0723504858'),
(13, 'CMI DR. MORAR', 'Deva', 'str. Mihai Eminescu  bl.13 A  P', 'Deva str. Mihai Eminescu  bl.13 A  P', '0254224437  0723504818'),
(14, 'CMI DR. PETROESCU LUCIA', 'Deva', 'str. Avram Iancu  bl. H3  P', 'Deva str. Avram Iancu  bl. H3  P', '0724209251'),
(15, 'SC DALVIASANA SRL', 'Deva', 'str. Mihai Eminescu  nr. 99', 'Deva str. Mihai Eminescu  nr. 99', '0254211066  0757165250'),
(16, 'CMI MAGNAMED', 'Deva', 'str. Ion Creanga  nr. 29', 'Deva str. Ion Creanga  nr. 29', '0254233262  0722411010'),
(17, 'SC MEDMAR SRL', 'Deva', 'str. Mihai Eminescu  nr. 99', 'Deva str. Mihai Eminescu  nr. 99', '0254212727  0723269440'),
(18, 'CMI DR. FLOREA ELENA LILI', 'Deva', 'str. Ion Creanga  bl. 29/P', 'Deva str. Ion Creanga  bl. 29/P', '0724278086'),
(19, 'CMI DR. BUSUIOC OANA', 'Deva', 'str. Duiliu Zamfirescu  nr. 5', 'Deva str. Duiliu Zamfirescu  nr. 5', '0752171799'),
(20, 'CENTRUL MEDICAL DOCTOR PETCA SRL', 'Deva', 'str. Liliacului  bl. 22  sc. D  ap. 32', 'Deva str. Liliacului  bl. 22  sc. D  ap. 32', '0254221012  0748102613'),
(21, 'SC CENTRUL MEDICAL DR. MUNTEAN SRL', 'Deva', 'B-dul  Nicolae Balcescu  bl. B  ap. 1', 'Deva B-dul  Nicolae Balcescu  bl. B  ap. 1', '0726701216  0722588745'),
(22, 'CMI DR. GRIGORESCU DELIA', 'Ghelari', 'str. Ghioceilor  nr. 4', 'Ghelari str. Ghioceilor  nr. 4', '0724508498'),
(23, 'CMI DR. CERBICEANU MIHAELA', 'Gurasada', 'str. Principala  nr. 5A', 'Gurasada str. Principala  nr. 5A', '0744570232'),
(24, 'SC SILOAM SRL', 'Hateg', 'str. T. Vladimirescu  nr. 7', 'Hateg str. T. Vladimirescu  nr. 7', '0726769788'),
(25, 'SC TERAMEDICA SRL', 'Hateg', 'str. T. Vladimirescu  nr. 7', 'Hateg str. T. Vladimirescu  nr. 7', '0722599482'),
(26, 'SC MARIMEDICA SRL', 'Hateg', 'str. T. Vladimirescu  nr. 7', 'Hateg str. T. Vladimirescu  nr. 7', '0723175015'),
(27, 'CMI DR. HARAU GHEORGHE', 'Hunedoara', 'B-dul Dacia  nr. 8', 'Hunedoara B-dul Dacia  nr. 8', '0743178147'),
(28, 'SC NORANA MED SRL', 'Hunedoara', 'b-dul Dacia  nr. 6  bl. E3  ap. 30', 'Hunedoara b-dul Dacia  nr. 6  bl. E3  ap. 30', '0744103488'),
(29, 'CMI DR. MARTIN', 'Hunedoara', 'str. Independentei  nr. 1', 'Hunedoara str. Independentei  nr. 1', '0254748029  0771193154'),
(30, 'CMI DR. ADRIANA MOACA', 'Hunedoara', 'str. Republicii  nr. 5', 'Hunedoara str. Republicii  nr. 5', '0254710545  0722262065'),
(31, 'CMI DR. TAT SILVIA', 'Hunedoara', 'str. Republicii  nr. 8  bl. 118  ap. 1', 'Hunedoara str. Republicii  nr. 8  bl. 118  ap. 1', '0749274796'),
(32, 'SC AS TERRA SAN SRL', 'Hunedoara', 'str. Mihai Viteazu  nr. 9  bl. X4  ap. 1', 'Hunedoara str. Mihai Viteazu  nr. 9  bl. X4  ap. 1', '0723534105'),
(33, 'CMI ARMEDICA', 'Hunedoara', 'B-dul Corvin  bl. 5 ap. 3', 'Hunedoara B-dul Corvin  bl. 5 ap. 3', '0722777370'),
(34, 'SC PRAXIMED HD SRL', 'Hunedoara', 'str. George Enescu  nr. 5  ap. 2', 'Hunedoara str. George Enescu  nr. 5  ap. 2', '0354418968  0733426923'),
(35, 'CMI MEDICAL DR. PUS FLORENTINA', 'Hunedoara', 'str. Eroilor  nr. 13  ap.16', 'Hunedoara str. Eroilor  nr. 13  ap.16', '0254744933  0726450740'),
(36, 'CMI DR. MURARI CRISTINA', 'Ilia', 'str. Libertatii  nr. 69', 'Ilia str. Libertatii  nr. 69', '0744215410  0748330076'),
(37, 'CMI DR. CRISAN GRIGORE', 'Lupeni', 'str. Tudor Vladimirescu  bl. 29  ap. 5', 'Lupeni str. Tudor Vladimirescu  bl. 29  ap. 5', '0254562737'),
(38, 'CMI DR. MARIN MIHAELA', 'Orastie', 'str. Nicolae Balcescu  nr. 18', 'Orastie str. Nicolae Balcescu  nr. 18', '0724377935  0721378060'),
(39, 'CMI DR. CAMPEANU EMIL', 'Petrosani', 'str. Aviatorilor  nr. 60A  ap. 1', 'Petrosani str. Aviatorilor  nr. 60A  ap. 1', '0723316825  0254540079'),
(40, 'CMI GHEORGHIU', 'Petrosani', 'str. Eroilor  nr. 1', 'Petrosani str. Eroilor  nr. 1', '0254540952  0729072218'),
(41, 'CMI DR. TOMA CLAUDIU-ADRIAN', 'Petrosani', 'str. Independentei  nr. 2', 'Petrosani str. Independentei  nr. 2', '0723572347'),
(42, 'SC CENTRUL MEDICAL UDREA IONASCU SRL', 'Petrosani', 'str. Aleea Poporului  nr. 3A/12', 'Petrosani str. Aleea Poporului  nr. 3A/12', '0254542600  0722659885'),
(43, 'CMI DR. BORNEMISA MIHAELA', 'Pui', 'str. Republicii  nr. 67', 'Pui str. Republicii  nr. 67', '0745658441'),
(44, 'CMI DR. STOICA GHEORGHITA', 'Pui', 'str. Republicii  nr. 53', 'Pui str. Republicii  nr. 53', '0786769909'),
(45, 'CMI DR. CRACIUN ALINA', 'Romos', 'str. Principala  nr. 113', 'Romos str. Principala  nr. 113', '0254245339'),
(46, 'CMI MARISAN', 'Sarmizegetusa', 'str. Principala  nr. 4', 'Sarmizegetusa str. Principala  nr. 4', '0746032113'),
(47, 'CMI ART-MEDICA', 'Simeria', 'str. Avram Iancu  nr. 24', 'Simeria str. Avram Iancu  nr. 24', '0722263058'),
(48, 'SC BIOMED DORIS SRL', 'Simeria', 'str. Avram Iancu  nr. 24', 'Simeria str. Avram Iancu  nr. 24', '0254262005  0722405001  0723574096'),
(49, 'CMI DR. BRANESC SMARANDITA', 'Teliucu Inferior', 'str.Trandafirilor  nr. 5', 'Teliucu Inferior str.Trandafirilor  nr. 5', '0740099418'),
(50, 'CMI DR. DOBRESCU COSTIN', 'Uricani', 'str. Al. Teilor  nr. 1', 'Uricani str. Al. Teilor  nr. 1', '0722368436'),
(51, 'CMI DR. NEDELCU CLAUDIU ', 'Uricani', 'str. Aleea Teilor  nr. 1', 'Uricani str. Aleea Teilor  nr. 1', '0765715883  0254510330');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `cabinete`
--
ALTER TABLE `cabinete`
  ADD PRIMARY KEY (`nr`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `cabinete`
--
ALTER TABLE `cabinete`
  MODIFY `nr` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
