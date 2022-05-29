-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 07:22 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parasparivaarorg`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` varchar(20000) NOT NULL,
  `updatedate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `content`, `updatedate`) VALUES
(1, 'title', '<h1>Jai Mata Di</h1>\r\n\r\n<h1>PARAS PARIVAAR</h1>\r\n\r\n<h2>&ldquo;Har Sukh Sambhav Ho Jata. Jab Naam Pukaru Mata&rdquo;</h2>\r\n\r\n<h3>&ldquo;The Great Guru Shri Shri Paras Bhai Guru Ji&rdquo;</h3>\r\n\r\n<p>All of you are welcome in PARAS PARIVAAR (Paras Family) with the bottom of my heart. We wish that Maa Aadi Shakti (Goddess of Power) would fulfill the bags of your desires, stocks of grains and solve all your problems &amp; difficulties. PARAS PARIVAAR is a name, a thought who thinks about the well and prosperous future of worlds people and society. Its a place where there is no hunger, no any quarrel &amp; disputes on the name of religion, castes &amp; groups; where everyone lives together with love, harmony and humanity and turns others in its own colour. Its a name who has no any enemy as well as no any friend, because-</p>\r\n\r\n<h2>&ldquo;Paras khada bazar mei sabki maange khair&rdquo;</h2>\r\n\r\n<h2>Na kahoo se dosti aur na kahoo se bair</h2>\r\n\r\n<h2>By standing in the middle of market, Paras wishes good luck/protection for all No friendship with anyone as well as there has no enemy</h2>\r\n\r\n<p>So, come a step ahead and be the part of this Family. In this time (Kalyug), everyone wishes to have success, health, fortune and happy family life. &ldquo;Paras Parivaar&rdquo; was established (started) by Shri Paras Guruji who has no any need of reference to represent himself in this country and the entire world.</p>\r\n\r\n<p>Today, all of us want to live happily, to have name and fame in the society, that our family would not have to face any difficulties in future; and also everyone wants that he/she would always have auspiciousness in his/her life and would not have to face any sorrow. But, we all know that happiness and sorrow come after each other and an individual has to endure the results (happiness and sorrow) continuously due to his own deeds done by him in his previous and present birth (past and present life). People always like just to know their future, so that they would not do any such work which is harmful for them and the result of which would be very sorrowful. And from here, one is worried about his future and always goes on thinking that what would happen or not in his future. This is the thing for which he/she is vexed all the time.</p>\r\n\r\n<p>So, here is the answer of all your queries and problems raised in your heart and life and the answer is only one &ldquo;Paras Bhai Jee&rdquo; a precious word of whom would change the life of people and a dying one is again become alive by impact of it. Paras Bhai says that Life is precious. and there is no cost of life. You can make it very beautiful and successful to the top by doing fair &amp; beautiful deeds. Say thank you to the Power. who creates us; keeps us moving/living; which is present inside us. How would we thank that Power. When we got brother in the form of such Guru, one is become winner and win everything. Paras Bhai jee says &ndash; there is no any religion in this world; no one Hindu, no one Muslim, no one Sikhs and no one Christian. Everyone has a stomach, hunger and he wants only Do rotis (foods) to alive. Everyone wants a beautiful home, a happy family life. &ldquo;Paras Parivaar&rdquo; is like a family where all religions combine and people from all religions, castes and groups feel proud after joining this family. They say that this is the place or platform we were searching for a long time, because this platform directs you towards success and guides for better future. This is the platform where people from all religions, castes and groups appear in one colour. For just this thing, Paras Bhai Jee is the best, because he knows how to combine people. And, he always says that, I am for making but not for breaking. Everyone wants to get guru/brother like Paras Bhai who would take all his/her sorrows and throw. Today, Paras Bhai is popularly known as &ldquo;Astrology King&rdquo;. So, come on!! and be a part of this honoured family.</p>\r\n\r\n<p>à¤†à¤ª à¤¸à¤­à¥€ à¤•à¤¾ à¤ªà¤¾à¤°à¤¸ à¤ªà¤°à¤¿à¤µà¤¾à¤° à¤®à¥‡à¤‚ à¤¬à¥‡à¤¹à¤¦ à¤”à¤° à¤¬à¥‡à¤¹à¤¦ à¤¸à¥à¤µà¤¾à¤—à¤¤ à¤¹à¥ˆà¤‚à¥¤ à¤®à¤¾à¥…à¤‚ à¤†à¤¦à¤¿ à¤¶à¤•à¥à¤¤à¤¿ à¤†à¤ª à¤¸à¤­à¥€ à¤•à¥€ à¤à¥‹à¤²à¤¿à¤¯à¤¾à¤‚ à¤­à¤°à¥‡ à¤†à¤ª à¤¸à¤¬à¤•à¥‡ à¤­à¤£à¥à¤¡à¤¾à¤°à¥‡ à¤­à¤°à¥‡ à¤”à¤° à¤¸à¤¬à¤•à¥€ à¤®à¥à¤¶à¥à¤•à¤¿à¤² à¤¦à¥‚à¤° à¤•à¤°à¥‡à¤‚à¥¤ à¤ªà¤¾à¤°à¤¸ à¤ªà¤°à¤¿à¤µà¤¾à¤° à¤à¤• à¤¨à¤¾à¤® à¤¹à¥ˆ! à¤ªà¤¾à¤°à¤¸ à¤ªà¤°à¤¿à¤µà¤¾à¤° à¤à¤• à¤¸à¥‹à¤š à¤¹à¥ˆà¤‚ à¤œà¥‹ à¤¦à¥‡à¤¶, à¤¦à¥à¤¨à¤¿à¤¯à¤¾ à¤”à¤° à¤¸à¤®à¤¾à¤œ à¤•à¥‡ à¤¬à¥‡à¤¹à¤¤à¤° à¤•à¤² à¤•à¥‡ à¤²à¤¿à¤ à¤¸à¥‹à¤šà¤¤à¤¾ à¤¹à¥ˆ! à¤œà¤¹à¤¾à¥…à¤‚ à¤­à¥‚à¤– à¤¨ à¤¹à¥‹! à¤œà¤¹à¤¾à¥…à¤‚ à¤§à¤°à¥à¤®, à¤œà¤¾à¤¤ à¤”à¤° à¤ªà¤¾à¤¤ à¤•à¥‡ à¤¨à¤¾à¤® à¤ªà¤° à¤à¤—à¤¡à¥‡ à¤”à¤° à¤•à¥à¤²à¥‡à¤¶ à¤¨à¤¹à¥€ à¤¹à¥‹! à¤œà¤¹à¤¾à¥…à¤‚ à¤¹à¤° à¤•à¥‹à¤ˆ à¤ªà¥à¤¯à¤¾à¤°, à¤¸à¤¦à¤­à¤¾à¤µà¤¨à¤¾ à¤”à¤° à¤‡à¤¨à¥à¤¸à¤¾à¤¨à¤¿à¤¯à¤¤ à¤¸à¥‡ à¤•à¥‡à¤µà¤² à¤ªà¥à¤°à¥‡à¤® à¤•à¥€ à¤­à¤¾à¤¶à¤¾ à¤¬à¥‹à¤²à¥‡ à¤”à¤° à¤¸à¤¾à¤®à¤¨à¥‡ à¤µà¤¾à¤²à¥‡ à¤•à¥‹ à¤­à¥€ à¤…à¤ªà¤¨à¥‡ à¤¹à¥€ à¤°à¤‚à¤— à¤®à¥‡ à¤°à¤‚à¤— à¤¦à¥‡!! à¤œà¤¿à¤¸à¤•à¤¾ à¤•à¥‹à¤ˆ à¤¦à¥à¤¶à¥à¤®à¤¨ à¤¨à¤¹à¥€ à¤¹à¥‹! à¤”à¤° à¤œà¤¿à¤¸à¤•à¤¾ à¤¨ à¤•à¥‹à¤ˆ à¤¦à¥‹à¤¸à¥à¤¤!! à¤•à¥à¤¯à¥‹à¤•à¤¿</p>\r\n\r\n<h2>&quot;à¤ªà¤¾à¤°à¤¸ à¤–à¤¡à¤¾ à¤¬à¤¾à¤œà¤¾à¤° à¤®à¥‡ à¤¸à¤¬à¤•à¥€ à¤®à¤¾à¥…à¤‚à¤—à¥‡ à¤–à¥ˆà¤°&quot;</h2>\r\n\r\n<h2>à¤¨ à¤•à¤¾à¤¹à¥‚ à¤¸à¥‡ à¤¦à¥‹à¤¸à¥à¤¤à¥€ à¤”à¤° à¤¨ à¤•à¤¾à¤¹à¥‚ à¤¸à¥‡ à¤¬à¥ˆà¤°</h2>\r\n\r\n<p>à¤¤à¥‹ à¤†à¤ˆà¤ à¤†à¤ª à¤­à¥€ à¤à¤• à¤•à¤¦à¤® à¤†à¤—à¥‡ à¤¬à¤¢ à¤•à¤° à¤‡à¤¸ à¤ªà¤°à¤¿à¤µà¤¾à¤° à¤•à¤¾ à¤¹à¤¿à¤¸à¥à¤¸à¤¾ à¤¬à¤¨à¥‡!! à¤ªà¤¾à¤°à¤¸ à¤ªà¤°à¤¿à¤µà¤¾à¤° à¤•à¥à¤¯à¥‹à¤‚à¤•à¤¿ à¤†à¤œ à¤•à¥‡ à¤‡à¤¸ à¤•à¤²à¤¯à¥à¤— à¤®à¥‡à¤‚ à¤¹à¤° à¤µà¥à¤¯à¤•à¥à¤¤à¤¿ à¤œà¥€à¤µà¤¨ à¤®à¥‡à¤‚ à¤¤à¤°à¤•à¥à¤•à¥€, à¤¶à¥à¤­à¤¤à¤¾ à¤”à¤° à¤ªà¤¾à¤°à¤¿à¤µà¤¾à¤°à¤¿à¤• à¤¸à¤¾à¤®à¤œà¤¸à¥à¤¯à¤¤à¤¾ à¤šà¤¾à¤¹à¤¤à¤¾ à¤¹à¥ˆà¤‚à¥¤ à¤ªà¤¾à¤°à¤¸ à¤ªà¤°à¤¿à¤µà¤¾à¤° à¤•à¥€ à¤¶à¥à¤°à¥‚à¤†à¤¤ à¤ªà¤¾à¤°à¤¸ à¤—à¥à¤°à¥‚ à¤œà¥€ à¤•à¥‡ à¤¦à¥à¤µà¤¾à¤°à¤¾ à¤•à¥€ à¤—à¤ˆà¥¤ à¤ªà¤¾à¤°à¤¸ à¤—à¥à¤°à¥‚ à¤œà¥€ à¤œà¤¿à¤¨à¤•à¤¾ à¤¨à¤¾à¤® à¤¦à¥‡à¤¶ à¤¨à¤¹à¥€à¤‚, à¤¦à¥à¤¨à¤¿à¤¯à¤¾ à¤•à¥‡ à¤…à¤‚à¤¦à¤° à¤à¤• à¤ªà¤¹à¤šà¤¾à¤¨ à¤¹à¥ˆà¤‚à¥¤ à¤†à¤œ à¤•à¥‡ à¤‡à¤¸ à¤­à¥Œà¤¤à¤¿à¤• à¤¯à¥à¤— à¤®à¥‡à¤‚ à¤¹à¤° à¤µà¥à¤¯à¤•à¥à¤¤à¤¿ à¤¯à¤¹à¥€ à¤šà¤¾à¤¹à¤¤à¤¾ à¤¹à¥ˆà¤‚ à¤•à¤¿ à¤µà¤¹ à¤–à¥à¤¶ à¤°à¤¹à¥‡à¥¤ à¤¸à¤®à¤¾à¤œ à¤®à¥‡à¤‚ à¤‰à¤¸à¤•à¤¾ à¤¨à¤¾à¤® à¤¹à¥‹ à¤‰à¤¸à¤•à¥‡ à¤¬à¤¾à¤¦ à¤‰à¤¸à¤•à¥€ à¤”à¤²à¤¾à¤¦à¥‡à¤‚ à¤•à¤¿à¤¸à¥€ à¤­à¥€ à¤¦à¥à¤– à¤¨à¤¾ à¤­à¥‹à¤—à¥‡à¤‚à¥¤ à¤”à¤° à¤¹à¤° à¤µà¥à¤¯à¤•à¥à¤¤à¤¿ à¤¯à¤¹à¥€à¤‚ à¤šà¤¾à¤¹à¤¤à¤¾ à¤¹à¥ˆà¤‚ à¤•à¤¿ à¤œà¥€à¤µà¤¨ à¤®à¥‡à¤‚ à¤¶à¥à¤­à¤¤à¤¾ à¤¬à¤¨à¥€ à¤°à¤¹à¥€ à¤¦à¥à¤– à¤•à¥‹ à¤•à¤­à¥€ à¤‰à¤¸à¥‡ à¤¦à¥‡à¤–à¤¨à¤¾ à¤ªà¤¡à¤¼à¥‡à¥¤ à¤²à¥‡à¤•à¤¿à¤¨ à¤”à¤° à¤²à¥‡à¤•à¤¿à¤¨ à¤¸à¥à¤– à¤”à¤° à¤¦à¥à¤– à¤¹à¤®à¥‡à¤¶à¤¾ à¤¸à¤¾à¤¥-à¤¸à¤¾à¤¥ à¤šà¤²à¤¤à¥‡ à¤°à¤¹à¤¤à¥‡ à¤¹à¥ˆà¤‚à¥¤ à¤”à¤° à¤µà¥à¤¯à¤•à¥à¤¤à¤¿ à¤‡à¤¸ à¤œà¤¨à¥à¤® à¤•à¥‡ à¤…à¤ªà¤¨à¥‡-à¤…à¤ªà¤¨à¥‡ à¤•à¤¾à¤°à¥à¤¯à¥‹à¤‚ à¤•à¥‡ à¤”à¤° à¤…à¤ªà¤¨à¥‡ à¤ªà¤¿à¤›à¤²à¥‡ à¤œà¤¨à¥à¤® à¤•à¥‡ à¤•à¤°à¥à¤®à¥‹à¤‚ à¤•à¥‡ à¤¦à¥à¤µà¤¾à¤°à¤¾ à¤‡à¤¸ à¤œà¥€à¤µà¤¨ à¤®à¥‡à¤‚ à¤…à¤ªà¤¨à¥‡ à¤«à¤²à¥‹à¤‚ à¤•à¤¾ à¤­à¥‹à¤—à¤¤à¤¾ à¤°à¤¹à¤¤à¤¾ à¤¹à¥ˆà¤‚à¥¤ à¤†à¤¦à¤®à¥€ à¤¹à¤®à¥‡à¤¶à¤¾ à¤¯à¤¹à¥€à¤‚ à¤šà¤¾à¤¹à¤¤à¤¾ à¤¹à¥ˆà¥‡à¤‚ à¤•à¤¿ à¤•à¥‹à¤ˆ à¤à¤• à¤à¤¸à¥€ à¤œà¤—à¤¹ à¤¹à¥‹ à¤œà¤¹à¤¾à¥…à¤‚ à¤ªà¤° à¤‰à¤¸à¥‡ à¤à¤¸à¤¾ à¤ªà¤¤à¤¾ à¤²à¤— à¤œà¤¾à¤à¥¤ à¤•à¤¿ à¤­à¤µà¤¿à¤¶à¥à¤¯ à¤®à¥‡à¤‚ à¤‰à¤¸à¤•à¥‡ à¤¸à¤¾à¤¥ à¤•à¥à¤¯à¤¾ à¤¹à¥‹à¤¨à¥‡ à¤•à¥€ à¤¸à¤®à¥à¤­à¤¾à¤µà¤¨à¤¾à¤ à¤¹à¥ˆ! à¤•à¥à¤¯à¥‹à¤‚à¤•à¤¿ à¤‰à¤¸à¥‡ à¤­à¤µà¤¿à¤·à¥à¤¯ à¤•à¥‡ à¤¬à¤¾à¤°à¥‡ à¤®à¥‡à¤‚ à¤ªà¤¤à¤¾ à¤²à¤— à¤œà¤¾à¤ à¤¤à¥‹ à¤µà¥‹ à¤ªà¤¹à¤²à¥‡ à¤¹à¥€ à¤à¤¸à¥‡ à¤•à¤¾à¤°à¥à¤¯ à¤¨à¤¹à¥€ à¤•à¤°à¥‡à¤—à¤¾! à¤œà¤¿à¤¨à¤•à¥‡ à¤ªà¤°à¤¿à¤£à¤¾à¤® à¤¦à¥à¤–à¤¦ à¤¹à¥‹à¤—à¥‡! à¤¤à¥‹ à¤¹à¤° à¤†à¤¦à¤®à¥€ à¤­à¤µà¤¿à¤¶à¥à¤¯ à¤®à¥‡à¤‚ à¤­à¤µà¤¿à¤·à¥à¤¯ à¤•à¥€ à¤šà¤¿à¤‚à¤¤à¤¾ à¤¸à¥‡ à¤¹à¤®à¥‡à¤¶à¤¾ à¤¡à¤°à¤¾ à¤”à¤° à¤¸à¤¹à¤®à¤¾ à¤°à¤¹à¤¤à¤¾ à¤¹à¥ˆà¤‚à¥¤ à¤•à¤¿ à¤†à¤¨à¥‡ à¤µà¤¾à¤²à¥‡ à¤¸à¤®à¤¯ à¤®à¥‡à¤‚ à¤•à¥à¤¯à¤¾ à¤¹à¥‹à¤—à¤¾, à¤†à¤¨à¥‡ à¤µà¤¾à¤²à¤¾ à¤¸à¤®à¤¯ à¤•à¥ˆà¤¸à¤¾ à¤¹à¥‹à¤—à¤¾ à¤¹à¤° à¤†à¤¦à¤®à¥€ à¤•à¥‡ à¤¦à¤¿à¤² à¤®à¥‡à¤‚ à¤¯à¤¹à¥€à¤‚ à¤šà¤¿à¤‚à¤¤à¤¾ à¤°à¤¹à¤¤à¥€ à¤¹à¥ˆà¤‚à¥¤ à¤”à¤° à¤‰à¤¸à¥€ à¤šà¤¿à¤‚à¤¤à¤¾ à¤®à¥‡à¤‚ à¤µà¤¹ à¤¹à¤®à¥‡à¤¶à¤¾ à¤ªà¤°à¥‡à¤¶à¤¾à¤¨ à¤°à¤¹à¤¤à¤¾ à¤¹à¥ˆà¤‚! à¤¤à¥‹ à¤†à¤œ à¤•à¥‡à¤µà¤² à¤à¤• à¤¹à¥€ à¤œà¤µà¤¾à¤¬ à¤¹à¥ˆ! à¤†à¤ªà¤•à¥‡ à¤¦à¤¿à¤² à¤”à¤° à¤œà¥€à¤µà¤¨ à¤®à¥‡ à¤šà¤² à¤°à¤¹à¥‡ à¤¤à¥‚à¤«à¤¾à¤¨à¥€ à¤ªà¥à¤°à¤¶à¥à¤¨à¥‹ à¤”à¤° à¤®à¥à¤¶à¥à¤•à¤¿à¤²à¥‹ à¤•à¤¾!! à¤µà¤¹ à¤¹à¥ˆ à¤•à¥‡à¤µà¤² à¤”à¤° à¤•à¥‡à¤µà¤² à¤ªà¤¾à¤°à¤¸ à¤­à¤¾à¤ˆ à¤œà¥€!! à¤œà¤¿à¤¨à¤•à¥‡ à¤®à¥à¥…à¤‚à¤¹ à¤¸à¥‡ à¤¨à¤¿à¤•à¤²à¥€ à¤à¤• à¤…à¤®à¥ƒà¤¤ à¤”à¤° à¤¬à¤¹à¥‚à¤®à¥‚à¤²à¥à¤¯ à¤¬à¤¾à¤¤ à¤œà¥‹ à¤²à¥‹à¤—à¥‹ à¤•à¥‡ à¤œà¥€à¤µà¤¨ à¤•à¥‹ à¤¬à¤¦à¤² à¤¦à¥‡à¤¤à¥€ à¤¹à¥ˆ! à¤”à¤° à¤®à¤°à¤¤à¤¾ à¤¹à¥à¤† à¤†à¤¦à¤®à¥€ à¤­à¥€ à¤œà¥€à¤µà¤¿à¤¤ à¤¹à¥‹ à¤‰à¤ à¤¤à¤¾ à¤¹à¥ˆ! à¤•à¥à¤¯à¥‹à¤•à¤¿ à¤ªà¤¾à¤°à¤¸ à¤­à¤¾à¤ˆ à¤¯à¤¹à¤¾à¥…à¤‚ à¤¯à¤¹ à¤•à¤¹à¤¤à¥‡ à¤¹à¥ˆà¤‚ à¤•à¤¿ à¤œà¥€à¤µà¤¨ à¤à¤• à¤¬à¤¹à¥à¤®à¥‚à¤²à¥à¤¯ à¤¹à¥ˆà¤‚à¥¤ à¤œà¤¿à¤¸à¤•à¤¾ à¤•à¥‹à¤ˆ à¤®à¥‚à¤²à¥à¤¯ à¤¨à¤¹à¥€à¤‚ à¤¹à¥ˆà¤‚à¥¤à¤‡à¤¸ à¤œà¥€à¤µà¤¨ à¤•à¥‹ à¤†à¤ª à¤…à¤ªà¤¨à¥‡ à¤¸à¥à¤¦à¤‚à¤° à¤•à¤¾à¤°à¥à¤®à¥‹à¤‚ à¤•à¥‡ à¤¦à¥à¤µà¤¾à¤°à¤¾ à¤œà¤®à¥€à¤¨ à¤¸à¥‡ à¤†à¤¸à¤®à¤¾à¤¨ à¤¤à¤• à¤²à¥‡ à¤œà¤¾ à¤¸à¤•à¤¤à¥‡ à¤¹à¥ˆà¤‚à¥¤</p>\r\n\r\n<p>à¤•à¥‡à¤µà¤² à¤”à¤° à¤•à¥‡à¤µà¤² à¤µà¥‹ à¤¶à¤•à¥à¤¤à¤¿ à¤œà¤¿à¤¸à¤¨à¥‡ à¤¹à¤®à¥‡à¤‚ à¤ªà¥ˆà¤¦à¤¾ à¤•à¤¿à¤¯à¤¾ à¤¹à¥ˆà¤‚, à¤µà¥‹ à¤¶à¤•à¥à¤¤à¤¿ à¤œà¥‹ à¤¹à¤®à¥‡à¤‚ à¤¹à¤®à¥‡à¤¶à¤¾ à¤šà¤²à¤¾à¤¯à¥‡à¤®à¤¾à¤¨ à¤•à¤°à¤¤à¥€ à¤¹à¥ˆà¤‚, à¤µà¥‹ à¤¶à¤•à¥à¤¤à¤¿ à¤œà¥‹ à¤¹à¤®à¤¾à¤°à¥‡ à¤…à¤‚à¤¦à¤° à¤µà¤¿à¤¦à¥à¤¯à¤®à¤¾à¤¨ à¤¹à¥ˆà¤‚à¥¤ à¤‰à¤¸ à¤¶à¤•à¥à¤¤à¤¿ à¤¥à¥ˆà¤‚à¤•à¥à¤¯à¥‚ à¤•à¤°à¤¨à¤¾ à¤…à¤¤à¥à¤¯à¤‚à¤¤ à¤…à¤¨à¤¿à¤µà¤¾à¤°à¥à¤¯ à¤¹à¥ˆà¤‚à¥¤ à¤‰à¤¸ à¤¶à¤•à¥à¤¤à¤¿ à¤•à¥‹ à¤¥à¥ˆà¤‚à¤•à¥à¤¯à¥‚ à¤•à¥ˆà¥‡à¤¸à¥‡ à¤•à¤¿à¤¯à¤¾ à¤œà¤¾à¤, à¤‰à¤¸ à¤¶à¤•à¥à¤¤à¤¿ à¤•à¤¾ à¤¶à¥à¤•à¥à¤°à¤¿à¤¯à¤¾ à¤…à¤¦à¤¾ à¤•à¥ˆà¤¸à¥‡ à¤…à¤¦à¤¾ à¤•à¤¿à¤¯à¤¾ à¤œà¤¾à¤, à¤”à¤° à¤‰à¤¸ à¤¶à¤•à¥à¤¤à¤¿ à¤•à¥‹ à¤•à¤¿à¤¸ à¤¤à¤°à¤¹ à¤¸à¥‡ à¤œà¥€à¤µà¤¨ à¤®à¥‡à¤‚ à¤¥à¥ˆà¤‚à¤•à¥à¤¯à¥‚ à¤•à¤¹à¤¾ à¤œà¤¾à¤¯à¥‡à¥¤ à¤¤à¤¾à¤•à¤¿ à¤¦à¥à¤¨à¤¿à¤¯à¤¾ à¤•à¥‡ à¤¸à¤°à¥à¤µ à¤¸à¥à¤– à¤¹à¤®à¥‡à¤‚ à¤®à¤¿à¤² à¤œà¤¾à¤¯à¥‡à¤‚à¥¤ à¤•à¥‡à¤µà¤² à¤”à¤° à¤•à¥‡à¤µà¤² à¤¹à¤® à¤‡à¤¸à¥€ à¤µà¤œà¤¹ à¤¸à¥‡ à¤®à¤¾à¤° à¤–à¤¾ à¤œà¤¾à¤¤à¥‡ à¤¹à¥ˆ! à¤”à¤° à¤œà¤¿à¤¸ à¤¦à¤¿à¤¨ à¤¹à¤®à¥‡ à¤à¤¸à¤¾ à¤—à¥à¤°à¥‚ à¤­à¤¾à¤ˆ à¤•à¥‡ à¤°à¥‚à¤ª à¤®à¥‡ à¤®à¤¿à¤² à¤œà¤¾à¤¤à¤¾ à¤¹à¥ˆ! à¤¤à¥‹ à¤†à¤¦à¤®à¥€ à¤¹à¤¾à¤°à¥€ à¤¬à¤¾à¤œà¥€ à¤­à¥€ à¤œà¥€à¤¤ à¤œà¤¾à¤¤à¤¾ à¤¹à¥ˆ! à¤¯à¤¹à¤¾à¥…à¤‚ à¤ªà¤¾à¤°à¤¸ à¤­à¤¾à¤ˆ à¤œà¥€ à¤•à¤¹à¤¤à¥‡ à¤¹à¥ˆ! à¤•à¤¿ à¤‡à¤¸ à¤¦à¥à¤¨à¤¿à¤¯à¤¾ à¤®à¥‡à¤‚ à¤•à¥‹à¤ˆ à¤§à¤°à¥à¤® à¤¨à¤¹à¥€à¤‚ à¤¹à¥ˆà¤‚ à¤•à¥‹à¤ˆ à¤¹à¤¿à¤¨à¥à¤¦à¥‚, à¤•à¥‹à¤ˆ à¤¸à¤¿à¤–, à¤•à¥‹à¤ˆ à¤®à¥à¤¸à¥à¤²à¤®à¤¾à¤¨, à¤•à¥‹à¤ˆ à¤ˆà¤¸à¤¾à¤ˆ à¤¨à¤¹à¥€à¤‚ à¤¹à¥ˆà¤‚à¥¤ à¤¹à¤° à¤†à¤¦à¤®à¥€ à¤•à¤¾ à¤ªà¥‡à¤Ÿ à¤¹à¥ˆà¤‚, à¤¹à¤° à¤†à¤¦à¤®à¥€ à¤¦à¥‹ à¤°à¥‹à¤Ÿà¥€ à¤šà¤¾à¤¹à¤¤à¤¾ à¤¹à¥ˆà¤‚, à¤¹à¤° à¤†à¤¦à¤®à¥€ à¤–à¤¾à¤¨à¤¾ à¤šà¤¾à¤¹à¤¤à¤¾ à¤¹à¥ˆà¤‚, à¤¹à¤° à¤†à¤¦à¤®à¥€ à¤à¤• à¤®à¤•à¤¾à¤¨ à¤šà¤¾à¤¹à¤¤à¤¾ à¤¹à¥ˆà¤‚, à¤¹à¤° à¤†à¤¦à¤®à¥€ à¤à¤• à¤¸à¤‚à¥à¤¦à¤° à¤œà¥€à¤µà¤¨ à¤œà¥€à¤¨à¤¾ à¤šà¤¾à¤¹à¤¤à¤¾ à¤¹à¥ˆà¤‚à¥¤ à¤”à¤° à¤µà¤¹ à¤¸à¥à¤¦à¤° à¤œà¥€à¤µà¤¨ à¤…à¤—à¤° à¤‰à¤¸ à¤†à¤¦à¤®à¥€ à¤•à¥‹ à¤®à¤¿à¤² à¤œà¤¾à¤¤à¤¾ à¤¹à¥ˆà¤‚ à¤¤à¥‹ à¤µà¥‹ à¤•à¥‡à¤µà¤² à¤‰à¤¸ à¤¶à¤•à¥à¤¤à¤¿ à¤•à¤¾ à¤¥à¥ˆà¤‚à¤•à¥à¤¯à¥‚ à¤”à¤° à¤¥à¥ˆà¤‚à¤•à¥à¤¯à¥‚ à¤¹à¥€ à¤•à¤°à¤¤à¤¾ à¤°à¤¹à¤¤à¤¾ à¤¹à¥ˆà¤‚à¥¤ à¤¤à¥‹ à¤ªà¤¾à¤°à¤¸ à¤ªà¤°à¤¿à¤µà¤¾à¤° à¤à¤• à¤ªà¤°à¤¿à¤µà¤¾à¤° à¤¹à¥ˆà¤‚à¥¤ à¤œà¤¿à¤¸à¤®à¥‡à¤‚ à¤¸à¤­à¥€ à¤§à¤°à¥à¤®à¥‹à¤‚ à¤•à¤¾ à¤¸à¤‚à¤—à¤® à¤¹à¥‹à¤¤à¤¾ à¤¹à¥ˆà¤‚ à¤¹à¤° à¤§à¤°à¥à¤®, à¤¹à¤° à¤œà¤¾à¤¤, à¤¹à¤° à¤ªà¤¾à¤¤ à¤•à¤¾ à¤µà¥à¤¯à¤•à¥à¤¤à¤¿ à¤‡à¤¸ à¤ªà¤°à¤¿à¤µà¤¾à¤° à¤®à¥‡à¤‚ à¤†à¤•à¤° à¤…à¤ªà¤¨à¥‡ à¤†à¤ªà¤•à¥‹ à¤§à¤¨à¥à¤¯ à¤®à¤¹à¤¸à¥‚à¤¸ à¤•à¤°à¤¤à¤¾ à¤¹à¥ˆà¤‚à¥¤ à¤”à¤° à¤µà¤¹ à¤•à¤¹à¤¤à¤¾ à¤¹à¥ˆà¤‚ à¤•à¤¿ à¤¯à¤¹à¥€à¤‚ à¤à¤• à¤°à¤¾à¤ˆà¤Ÿ à¤œà¤—à¤¹ à¤¹à¥ˆà¤‚ à¤œà¤¿à¤¸ à¤œà¤—à¤¹ à¤•à¤¿ à¤‰à¤¸à¥‡ à¤¤à¤²à¤¾à¤¶ à¤¥à¥€à¥¤ à¤•à¥à¤¯à¥‹à¤•à¤¿ à¤¯à¤¹à¥€à¤‚ à¤µà¥‹ à¤®à¤‚à¤š à¤¹à¥ˆ à¤œà¤¿à¤¸à¤•à¥€ à¤‰à¤¸à¥‡ à¤¤à¤²à¤¾à¤¶ à¤¥à¥€! à¤•à¥à¤¯à¥‹à¤•à¤¿ à¤¯à¤¹ à¤®à¤‚à¤š à¤†à¤ªà¤•à¥‹ à¤•à¤¾à¤®à¤¯à¤¾à¤¬à¥€ à¤•à¥€ à¤¦à¤¿à¤¶à¤¾ à¤¦à¥‡à¤¤à¤¾ à¤¹à¥ˆà¤‚à¥¤ à¤¯à¤¹à¥€ à¤µà¥‹ à¤®à¤‚à¤š à¤¹à¥ˆà¤‚ à¤œà¥‹ à¤†à¤ªà¤•à¥‹ à¤¬à¥‡à¤¹à¤¤à¤° à¤•à¤² à¤”à¤° à¤¬à¥‡à¤¹à¤¤à¤° à¤­à¤µà¤¿à¤¶à¥à¤¯ à¤¦à¥‡à¤¤à¤¾ à¤¹à¥ˆà¤‚à¥¤ à¤”à¤° à¤¯à¤¹à¤¾à¤‚ à¤¸à¤¬à¤¸à¥‡ à¤…à¤¹à¤® à¤¬à¤¾à¤¤ à¤ªà¤¾à¤°à¤¸ à¤­à¤¾à¤ˆ à¤†à¤ªà¤•à¥‹ à¤¯à¤¹à¥€à¤‚ à¤¸à¤¿à¤–à¤¾à¤¤à¥‡ à¤¹à¥ˆà¤‚à¥¤ à¤•à¤¿ à¤‰à¤¸ à¤¶à¤•à¥à¤¤à¤¿ à¤•à¥‹ à¤œà¤¿à¤¸à¤¨à¥‡ à¤¹à¤®à¥‡à¤‚ à¤¯à¥‡ à¤œà¥€à¤µà¤¨ à¤¦à¤¿à¤¯à¤¾ à¤‰à¤¸ à¤¶à¤•à¥à¤¤à¤¿ à¤¸à¥‡ à¤¸à¤«à¤²à¤¤à¤¾ à¤•à¤¿à¤¸ à¤¤à¤°à¤¹ à¤¸à¥‡ à¤ªà¥à¤°à¤¾à¤ªà¥à¤¤ à¤•à¤¿ à¤œà¤¾à¤¯à¥‡ à¤¯à¤¹à¥€à¤‚ à¤ªà¤¾à¤°à¤¸ à¤­à¤¾à¤ˆ à¤œà¥€ à¤¹à¤®à¥‡à¤‚ à¤¸à¤¿à¤–à¤¾à¤¤à¥‡ à¤¹à¥ˆà¤‚à¥¤ à¤”à¤° à¤¯à¤¹à¥€à¤‚ à¤ªà¤¾à¤°à¤¸ à¤ªà¤°à¤¿à¤µà¤¾à¤° à¤•à¤¾ à¤‰à¤¦à¥à¤¦à¥‡à¤¶à¥à¤¯ à¤¹à¥ˆà¤‚ à¤¤à¥‹ à¤†à¤ª à¤¸à¤­à¥€ à¤•à¤¾ à¤¸à¥à¤µà¤¾à¤—à¤¤ à¤¹à¥ˆà¤‚ à¤‡à¤¸ à¤ªà¤°à¤¿à¤µà¤¾à¤° à¤®à¥‡à¤‚ à¤œà¥à¤¡à¤¼à¤¨à¥‡ à¤•à¥‡ à¤²à¤¿à¤ à¤œà¤¯ à¤®à¤¾à¤¤à¤¾ à¤¦à¥€à¥¤ à¤¯à¤¹à¥€à¤‚ à¤µà¥‹ à¤®à¤‚à¤š à¤¹à¥ˆà¤‚ à¤œà¤¿à¤¸ à¤®à¤‚à¤š à¤•à¥‡ à¤Šà¤ªà¤° &lsquo;&lsquo;à¤¹à¤¿à¤¨à¥à¤¦à¥‚, à¤®à¥à¤¸à¤²à¤¿à¤®, à¤¸à¤¿à¤–, à¤ˆà¤¸à¤¾à¤ˆ&rsquo;&rsquo; à¤¹à¤° à¤§à¤°à¥à¤®, à¤¹à¤° à¤œà¤¾à¤¤-à¤ªà¤¾à¤¤ à¤•à¤¾ à¤µà¥à¤¯à¤•à¥à¤¤à¤¿ à¤†à¤ªà¤•à¥‹ à¤à¤• à¤¹à¥€ à¤°à¤‚à¤— à¤•à¥‡ à¤…à¤‚à¤¦à¤° à¤¦à¤¿à¤–à¤¤à¤¾ à¤¹à¥ˆà¤‚à¥¤ à¤”à¤° à¤¯à¤¹à¥€à¤‚ à¤‡à¤¸à¥€ à¤¬à¤¾à¤¤ à¤•à¥‡ à¤²à¤¿à¤ à¤ªà¤¾à¤°à¤¸ à¤­à¤¾à¤ˆ à¤¸à¤¬à¤¸à¥‡ à¤¬à¥‡à¤¹à¤¤à¤° à¤”à¤° à¤¸à¤¬à¤¸à¥‡ à¤¬à¥‡à¤¹à¤¤à¤° à¤¹à¥ˆà¤‚ à¤•à¥à¤¯à¥‹à¤‚à¤•à¤¿ à¤‰à¤¨à¥à¤¹à¥‡à¤‚ à¤¸à¤¬à¤•à¥‹ à¤œà¥‹à¤¡à¤¼à¤¨à¤¾ à¤†à¤¤à¤¾ à¤¹à¥ˆà¤‚à¥¤ à¤”à¤° à¤ªà¤¾à¤°à¤¸ à¤­à¤¾à¤ˆ à¤–à¥à¤¦ à¤¯à¤¹ à¤¬à¥‹à¤²à¤¤à¥‡ à¤¹à¥ˆà¤‚ à¤•à¤¿ à¤®à¥ˆà¤‚ à¤œà¥‹à¤¡à¤¼à¤¨à¥‡ à¤•à¥‡ à¤²à¤¿à¤ à¤¹à¥‚à¥…à¤‚ à¤¤à¥‹à¤¡à¤¼à¤¨à¥‡ à¤•à¥‡ à¤²à¤¿à¤ à¤¨à¤¹à¥€à¤‚à¥¤ à¤”à¤° à¤¹à¤° à¤†à¤¦à¤®à¥€ à¤•à¤¾à¤®à¤¯à¤¾à¤¬à¥€ à¤•à¥‡ à¤²à¤¿à¤ à¤•à¥‡à¤µà¤² à¤”à¤° à¤•à¥‡à¤µà¤² à¤šà¤¾à¤¹à¤¤à¤¾ à¤¹à¥ˆà¤‚ à¤•à¤¿ à¤‰à¤¸à¥‡ à¤ªà¤¾à¤°à¤¸ à¤­à¤¾à¤ˆ à¤œà¥ˆà¤¸à¤¾ à¤—à¥à¤°à¥‚, à¤œà¥à¤žà¤¾à¤¨à¥€, à¤­à¤¾à¤ˆ à¤¸à¤¾à¤¥ à¤®à¥‡à¤‚ à¤®à¤¿à¤²à¥‡à¥¤ à¤à¤¸à¤¾ à¤®à¤¾à¤°à¥à¤— à¤¦à¤°à¥à¤¶à¤• à¤®à¤¿à¤²à¥‡ à¤œà¥‹ à¤‰à¤¸à¤•à¥‡ à¤¦à¥à¤–à¥‹à¤‚ à¤•à¥‹ à¤¨à¤¿à¤•à¤¾à¤² à¤•à¤° à¤«à¥‡à¤‚à¤• à¤¦à¥‡à¤‚à¥¤ à¤”à¤° à¤µà¥‹ à¤•à¥‡à¤µà¤² à¤”à¤° à¤•à¥‡à¤µà¤² à¤ªà¤¾à¤°à¤¸ à¤­à¤¾à¤ˆ à¤¹à¥ˆà¤‚à¥¤ à¤†à¤œ à¤•à¥‡ à¤‡à¤¸ à¤¯à¥à¤— à¤•à¥‡ à¤…à¤‚à¤¦à¤° à¤à¤¸à¥à¤Ÿà¥à¤°à¥‹à¤²à¤¾à¥…à¤œà¥€ à¤•à¤¿à¤‚à¤— à¤…à¤§à¥à¤¯à¤¾à¤¤à¥à¤®à¤¿à¤• à¤—à¥à¤°à¥‚ à¤•à¥‡à¤µà¤² à¤”à¤° à¤•à¥‡à¤µà¤² à¤ªà¤¾à¤°à¤¸ à¤­à¤¾à¤ˆ à¤¹à¥€ à¤¹à¥ˆà¤‚à¥¤ à¤¤à¥‹ à¤†à¤ª à¤­à¥€ à¤†à¤ˆà¤ à¤”à¤° à¤‡à¤¸ à¤—à¤°à¤¿à¤®à¤¾à¤®à¤ˆ à¤ªà¤°à¤¿à¤µà¤¾à¤° à¤•à¤¾ à¤¹à¤¿à¤¸à¥à¤¸à¤¾ à¤¬à¤¨à¥‡!!</p>\r\n', '2018-11-03 12:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `permission` int(11) NOT NULL DEFAULT '0',
  `uploadDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `username`, `password`, `email`, `permission`, `uploadDate`) VALUES
(4, 'admin', 'admin', 'developer.test.link@gmail.com', 1, '2018-09-04 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `caption` varchar(500) NOT NULL,
  `banner` varchar(500) NOT NULL,
  `uploaddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactdetails`
--

CREATE TABLE `contactdetails` (
  `id` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `emails` varchar(500) NOT NULL,
  `phonenumber` varchar(500) NOT NULL,
  `updatedate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactdetails`
--

INSERT INTO `contactdetails` (`id`, `address`, `emails`, `phonenumber`, `updatedate`) VALUES
(1, '306, 3 rd Floor, Aggrwal Cyber Plaza-1, Netaji Subhash Place, Pritam Pura, Netaji Subash Place, Wazirpur, New Delhi, Delhi 110034', 'parasparivaar@gmail.com', '011-42688888', '2018-11-05 13:30:56');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `main_menu` varchar(250) NOT NULL,
  `submenu` varchar(250) NOT NULL,
  `heading` varchar(250) NOT NULL,
  `img` varchar(500) DEFAULT NULL,
  `content` varchar(50000) NOT NULL,
  `savedate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `main_menu`, `submenu`, `heading`, `img`, `content`, `savedate`) VALUES
(1, '2', '', 'dzczxcz', '8e9ecfbfdce898e699b6813b2aa8d9ce_banner.jpg', '<p>dzxczxczxc</p>\r\n', '2018-11-05 17:18:58'),
(2, '2', '3', 'new heading', '654ee4c8bcee31efda47721f02c01f67_IMG-20181101-WA0052.jpg', '<p>a</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2018-11-05 17:32:24'),
(3, '2', '4', '', '', '', '2018-11-05 17:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `main_menu` varchar(250) NOT NULL,
  `uploaddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `main_menu`, `uploaddate`) VALUES
(2, 'ddd', '2018-11-05 15:22:48');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `review` varchar(500) NOT NULL,
  `location` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `uploaddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `review`, `location`, `name`, `uploaddate`) VALUES
(4, 'sss', '', 'sssssssss', '2018-11-06 12:43:56'),
(5, 'sss', 'delhi', 'Tiger Power', '2018-11-12 10:29:58');

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id` int(11) NOT NULL,
  `main_menu` varchar(250) NOT NULL,
  `submenu` varchar(250) NOT NULL,
  `uploaddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id`, `main_menu`, `submenu`, `uploaddate`) VALUES
(3, '2', 'ddddddddddddd', '2018-11-05 15:44:01'),
(4, '2', 'dddddd', '2018-11-05 15:44:06');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `category` varchar(250) NOT NULL,
  `link` varchar(500) NOT NULL,
  `upload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video_category`
--

CREATE TABLE `video_category` (
  `id` int(11) NOT NULL,
  `category` varchar(250) NOT NULL,
  `uploaddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_category`
--

INSERT INTO `video_category` (`id`, `category`, `uploaddate`) VALUES
(5, 'Motivational Stories', '0000-00-00 00:00:00'),
(6, 'Bhajan Gallery', '0000-00-00 00:00:00'),
(7, 'Motivational Stories', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactdetails`
--
ALTER TABLE `contactdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_category`
--
ALTER TABLE `video_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactdetails`
--
ALTER TABLE `contactdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video_category`
--
ALTER TABLE `video_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
