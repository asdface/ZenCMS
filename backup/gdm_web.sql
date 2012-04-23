-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 29 Dec 2009 om 13:24
-- Serverversie: 5.1.37
-- PHP-Versie: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gdm_web`
--
CREATE DATABASE `gdm_web` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gdm_web`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `acp_users`
--

CREATE TABLE IF NOT EXISTS `acp_users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userpassword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userpermissions` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Gegevens worden uitgevoerd voor tabel `acp_users`
--

INSERT INTO `acp_users` (`userid`, `username`, `userpassword`, `userpermissions`) VALUES
(1, 'Dombo', 'ea847988ba59727dbf4e34ee75726dc3', 'a'),
(2, 'Allstar', 'ea847988ba59727dbf4e34ee75726dc3', 'a'),
(3, 'admin', '098f6bcd4621d373cade4e832627b4f6', 'a');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `test` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`test`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden uitgevoerd voor tabel `login`
--


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `newsid` int(20) NOT NULL,
  `categoryname` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `content` text,
  `poster` varchar(50) DEFAULT NULL,
  `enabled` bit(1) DEFAULT NULL,
  PRIMARY KEY (`newsid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `news`
--

INSERT INTO `news` (`newsid`, `categoryname`, `title`, `date`, `content`, `poster`, `enabled`) VALUES
(1, NULL, 'VOTES', NULL, 'Your vote does count! Voting keeps our server high in the ranks and will make us grow for ever popular. You cain gain rewards such as special mounts and pets, each vote is worth 1 point which can be exchanged for these goods.', NULL, b'1'),
(2, 'Donations and votes', 'donations', NULL, 'With the ever groing costs in life the servers that provide us with the capabilities of being able to run this private server requires funds. Whether its $1 or $1000 please donate as much as possible to help us keep running and for ever growing! Remember 100% of the doantions goes towards the server!', NULL, b'1'),
(3, '', 'Phoenix TRAC PTR', '10/07/09', 'Midrate PTR realm thats running so we can test things before they go live on Titans of War realm! Also its here for the casual grinders/raiders of World of Warcraft.', 'Gastricpenguin', b'1'),
(4, 'Realm info', 'Titans of war', '10/07/09', 'Realm info coming soon', '2Dgreengiant', b'1'),
(6, NULL, 'And it begins!', '10/07/09', 'The start of the MMOwned private World of Warcraft server begins work! With myself, Kurios and Gastricpenguin working on it we will do our best to make it the best possible experience for you the player.', '2Dgreengiant', b'1'),
(7, NULL, 'Server nearly ready!', '25/07/09', 'With everything going great the server is nearing completion!, thanks to our beta testers we were able to erase alot of bugs that stood in our way at the start.', '2Dgreengiant', b'1'),
(8, 'News', 'Website up and running!', '25/07/09', 'The website is finally up and working, thanks to Dombo for all his hard work he put into it we can now keep you guys up-to-date with all current events and server updates. Don''t forget to register on the forum and post all bugs related to the website you may find.', '2Dgreengiant', b'1'),
(0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `news_comments`
--

CREATE TABLE IF NOT EXISTS `news_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newsid` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `clientip` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=65 ;

--
-- Gegevens worden uitgevoerd voor tabel `news_comments`
--

INSERT INTO `news_comments` (`id`, `newsid`, `text`, `poster`, `email`, `clientip`) VALUES
(19, 11, 'This is an client IP test!', 'iptester', 'iptest@hotmail.com', '84.195.154.60'),
(6, 4, 'Awesome work man!', 'Dombo', 'gilles.de.mey@hotmail.com', '::1'),
(7, 4, 'Awesome work man!', 'Dombo', 'gilles.de.mey@hotmail.com', '::1'),
(8, 4, 'Awesome work man!', 'Dombo', 'gilles.de.mey@hotmail.com', '::1'),
(12, 4, 'Yea! Our own armory!', 'Gilles', 'gilles.de.mey@hotmail.com', '::1'),
(13, 3, 'This is pretty interresting!', 'anonymous', '', '::1'),
(14, 11, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...', 'loadotext', 'loadotext@fags.net', '::1'),
(17, 11, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...', 'moartext', 'gilles_4life@hotmail.com', '::1'),
(18, 11, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...', 'anonymous', 'gilles.de.mey@hotmail.com', '::1'),
(20, 18, 'Let''s see if this really works ...', 'Dombo', 'gilles.de.mey@hotmail.com', '::1'),
(21, 18, 'OMFG it really works! What the ... that''s hot! I mean seriously. But let''s try and type a load of text now, I bet it''s gonna screw up! hehehehe. Only one way to find out!', 'Dombo', 'gilles.de.mey@hotmail.com', '::1'),
(22, 18, 'Client IPs are now recorded! So please try not to post dirty stuff ''n pr0n. This is recorded from now on!', 'Dombo', 'gilles.de.mey@hotmail.com', '::1'),
(23, 18, '(oYo) :o Pr0n\r\n\r\nNo really, nice work there Dombo\r\n\r\n \r\n', 'Bitbored', 'FSam@NSA.gov', '84.195.152.167'),
(24, 18, '( . ( . ) Mine are bigger xD', 'Dombo', 'gilles.de.mey@hotmail.com', '84.195.154.60'),
(25, 20, 'The comments also support special characters! \r\n ﺽﺱﯓ﷼', 'Dombo', 'gilles.de.mey@hotmail.com', '84.195.154.60'),
(26, 20, 'God dammit, I can''t get these emoticons to work!', 'Dombo', 'gilles.de.mey@hotmail.com', '::1'),
(27, 20, 'Yey, emoticons work nao!  :smile: writing PHP code now!', 'Dombo', 'gilles.de.mey@hotmail.com', '::1'),
(32, 20, 'Testing smilies engine! <img src=''images/smilies/icon_smile.png'' />', 'Dombo', 'gilles.de.mey@hotmail.com', '::1'),
(63, 20, '&lt;/div&gt; lol  <img src=''images/smilies/icon_smile.png'' />', 'Dombo', 'gilles.de.mey@hotmail.com', '::1'),
(64, 20, ' <img src=''images/smilies/icon_razz.png'' /> new smilie!', 'Dombo', 'gilles.de.mey@hotmail.com', '::1');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `news_featured`
--

CREATE TABLE IF NOT EXISTS `news_featured` (
  `panelnr` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `thumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tooltip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`panelnr`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=100 ;

--
-- Gegevens worden uitgevoerd voor tabel `news_featured`
--

INSERT INTO `news_featured` (`panelnr`, `image`, `title`, `description`, `thumb`, `tooltip`) VALUES
(6, 'images/moltencore_art.png', 'New Realm: Phoenix TRAC', '&quot;Phoenix TRAC&quot;, the official MMOwned Public Test Realm', 'images/tempphoto-1thumb.jpg', 'New realm online!'),
(5, 'images/armory_featured.png', 'MMOwned Armory', 'A new armory is on it''s way, coded by our own web developer', 'images/tempphoto-2thumb.jpg', 'New Armory'),
(4, 'images/patch32_featured.png', 'Patch 3.2', 'We are supporting patch 3.2, update now!', 'images/tempphoto-3thumb.jpg', 'Patch 3.2 support'),
(3, 'images/cataclysm_featured.png', 'Blizzard announces next expansion:', '<a href=''http://www.worldofwarcraft.com/cataclysm/''>Cataclysm</a>', 'images/tempphoto-4thumb.jpg', 'The Cataclysm'),
(2, 'images/tempphoto-5.jpg', 'New Video on CSS-Tricks', 'Using Wufoo for Web Forms', 'images/tempphoto-5thumb.jpg', 'Wufoo web forms'),
(1, 'images/mmowned_featured.png', 'MMOwned - Bots, Guides and exploits', '<a href=''www.mmowned.com''>Visit us!</a>', 'images/tempphoto-6thumb.jpg', 'MMOwned Forums');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `news_new`
--

CREATE TABLE IF NOT EXISTS `news_new` (
  `newsid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `poster` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` bit(1) NOT NULL,
  PRIMARY KEY (`newsid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Gegevens worden uitgevoerd voor tabel `news_new`
--

INSERT INTO `news_new` (`newsid`, `title`, `date`, `link`, `content`, `poster`, `enabled`) VALUES
(3, 'Eyecandy 2.0', 'Saturday, 25 July', NULL, 'The website is finally up and working, thanks to Dombo for all his hard work he put into it we can now keep you guys up-to-date with all current events and server updates. Don''t forget to register on the forum and post all bugs related to the website you may find.', '2dgreengiant', b'1'),
(2, 'New server update', 'Saturday, 25 July', NULL, 'With everything going great the server is nearing completion!, thanks to our beta testers we were able to erase alot of bugs that stood in our way at the start.', '2dgreengiant', b'1'),
(1, 'And it begins!', 'Friday, 10 July', NULL, 'The start of the MMOwned private World of Warcraft server begins work! With myself, Kurios and Gastricpenguin working on it we will do our best to make it the best possible experience for you the player.', '2dgreengiant', b'1'),
(4, 'Armory on it''s way!', 'Wednsday, 5 August', NULL, 'A new armory, made by noone else but myself, it will be lite-weight and fast extension for our new website!<br />We will try to get it a bit of a visual appealing style as fast as possible. In the mean time, have some fun on our dedicated servers!<br /><br />Cheers!', 'Dombo', b'1'),
(11, 'Admin Control Panel', 'Tuesday, 1 September', '', 'I have added an admin control panel to the website,\r\nthis should make is easier to edit/add news items and more.\r\n\r\nI hope you enjoy it!<span class=''doc''>If you want to know more about the control panel, check the <a href=''acp/manual.php''>admin manual</a></span>Furthermore, I''ve expanded the news ticker (featured news) and coupled it to a database that work similar to the regular news database.', 'Dombo', b'1'),
(18, 'Comment on this!', 'Saturday, 26 September', '', 'I have implamented a commenting system, click on &ldquo;comments&rdquo; to reply onto a news topic or see what other have to say about it! We hope this new feature will enable you to give your input to this site.', 'Dombo', b'1'),
(21, 'This is a test (UTF-8)', 'Monday, 28 December', '', 'Ñ‚ÑˆÓ”Ò¤Ó–Ñ¾Ó•á´¥', 'Dombo', b'1'),
(22, 'Test username', 'Monday, 28 December', NULL, 'blablablablabla', 'Dombo', b'1');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reporttype` varchar(255) NOT NULL,
  `spellname` varchar(255) NOT NULL,
  `spellrank` int(11) DEFAULT NULL,
  `charactername` varchar(255) NOT NULL,
  `charrace` varchar(255) NOT NULL,
  `charclass` varchar(255) NOT NULL,
  `thedate` varchar(255) NOT NULL,
  `other` text,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Gegevens worden uitgevoerd voor tabel `reports`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
