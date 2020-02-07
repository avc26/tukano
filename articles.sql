-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2020 at 08:32 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `article`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `text` text NOT NULL,
  `alias` varchar(25) NOT NULL,
  `img` varchar(2500) NOT NULL,
  `meta_key` varchar(50) NOT NULL,
  `meta_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `text`, `alias`, `img`, `meta_key`, `meta_desc`) VALUES
(1, 'Fetita gasita abandonata in frig, cu un biberon plin cu votca si ceai langa ea', 'O fetita de un an si jumatate a fost salvata in ultimul moment dupa ce parintii ei, beti, au lasat-o in frig, desculta. Copila avea langa ea doar un biberon, in care era ceai amestecat cu votca.', 'Nu mai putin de cinci ore a stat micuta Nastya intr-un carucior murdar, in frig, pe o strada de la periferia orasului Lutsk, aflat in nord-vestul Ucrainei.\r\nPotrivit The Sun, parintii au uitat-o pur si simplu pe o carare, dupa o plimbare. Ore intregi, fata a supravietuit la o temperatura de doar 2 grade Celsius, desi nu avea nici macar incaltari.\r\n\"Avea picioarele albastre din cauza frigului\"\r\nInsa norocul a fost de partea ei. Un localnic, chiar vecin cu parintii copilei, a auzit-o plangand si a dus-o imediat la nasa ei. \"Am fost socata sa o vad pe Nastya doar intr-o camasa si pantaloni. Avea picioarele albastre din cauza frigului. Cand am deschis biberonul, am simtit un miros puternic de votca\", a declarat femeia, conform sursei citate.\r\nSe pare ca parintii fetitei obisnuiau sa ii puna alcool in ceai, pentru a adormi mai repede.', 'observator.tv ', 'https://assets.protv.md/articles/files/thumbs/900x/2020/02/07/img-1581027133ukrc2y2.jpeg', 'QWDFR2', 'QASVGR35'),
(2, 'O bomba a fost gasita fixata de un camion in Irlanda de Nord', 'Politia britanica a anuntat joi ca a gasit o bomba fixata de un camion in Irlanda de Nord, dupa ce a fost alertata de prezenta unui vehicul capcana pe un feribot in noaptea Brexitului, republicanii irlandezi fiind suspectati, relateaza AFP.', 'Politia din Irlanda de Nord a emis un comunicat in care mentioneaza ca a primit pe 31 ianuarie informatii conform carora un dispozitiv exploziv a fost plasat intr-un camion care urma sa se imbarce in acea seara pe un feribot in Irlanda de Nord cu destinatia Scotia.\r\nNimic nu s-a descoperit atunci in urma verificarilor, dar abia cateva zile mai tarziu, in urma primirii unor noi informatii, dispozitivul exploziv a fost gasit fixat de un camion intr-o zona industriala din Irlanda de Nord, la circa 40 de kilometri vest de Belfast.\r\n„Informatiile de care dispune politia arata clar ca republicanii disidenti au atasat in mod deliberat un dispozitiv exploziv la camionul de marfuri”, a declarat politia.', 'stirileprotv.ro ', 'https://assets.protv.md/articles/files/thumbs/900x/2020/02/07/62108323-1581026872hms4c82.jpeg', 'GRGH5', 'GNRTRH5'),
(3, 'Doi moldoveni se afla printre cei aproape patru mii de oameni blocati pe nava aflata in carantina di', 'Doi moldoveni se afla printre cei aproape patru mii de oameni blocati pe nava aflata in carantina din cauza coronavirusului in Japonia. Ministerul de Externe de la Chisinau afirma ca cei doi barbati sunt membri ai echipajului si ca nu prezinta simptome de boala. Cat despre moldovenii care nu au fost primiti la bordul unui avion spre Rusia, acestia au iesit din China pe alte cai, spune ministrul.', '3.700 de pasageri si echipajul navei de croaziera Diamond Princess, printre care cei doi moldoveni, nu pot parasi vasul ancorat in portul Yokohama, deja de trei zile.\r\nResponsabilii de la Ministerul de Externe de la noi sustin ca moldovenii nu prezinta simptome de boala, specifice coronavirusului, insa vor fi tinuti in carantina timp de doua saptamani, alaturi de ceilalti oameni de la bord.', 'international', 'https://assets.protv.md/articles/images/original/2020/02/06/Untitled-1581009390bd87pkl.jpeg', 'BHRG6', 'GBFVBE5'),
(4, 'Fenomen ingrijorator in Antarctica.', 'Efectele incalzirii globale se vad din nou in Antarctica.', 'O echipa de exploratori a surprins momentul dramatic cand o bucata uriasa s-a desprins dintr-un ghetar.\r\nPentru ca viata le era pusa in pericol, cercetatorii s-au retras imediat in larg.\r\nScenele au fost filmate de cercetatorii aflati pe nava James Clark Ross, aflata sub pavilion britanic. Fenomenul, care a durat cateva minute bune, a avut loc aproape de insula Anvers, cea mai mare din Arhipelagul Palmer din Antarctica. Bucatile de gheata au cazut ca intr-un efect de domino, luandu-i prin surprindere pe exploratorii britanici.', 'stirileprotv.ro ', 'https://assets.protv.md/articles/files/thumbs/900x/2020/02/07/62108415-15810571592fcg9f8.jpeg', ' FGNBFBH5', 'DFBFB965');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
