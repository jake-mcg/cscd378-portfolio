-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 02, 2022 at 10:31 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--
CREATE DATABASE IF NOT EXISTS `mydatabase` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `mydatabase`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `messageID` int NOT NULL,
  `email` varchar(256) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`messageID`, `email`, `fname`, `lname`, `company`, `message`) VALUES
(4, 'jedidad@tatooineHookups.com', 'Obi-Wan', 'Kenobi', 'Jedi temple', 'hello there');

-- --------------------------------------------------------

--
-- Table structure for table `phpauth_attempts`
--

CREATE TABLE `phpauth_attempts` (
  `id` int NOT NULL,
  `ip` char(39) NOT NULL,
  `expiredate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phpauth_attempts`
--

INSERT INTO `phpauth_attempts` (`id`, `ip`, `expiredate`) VALUES
(35, '127.0.0.1', '2022-12-02 22:03:12'),
(36, '127.0.0.1', '2022-12-02 22:03:17'),
(37, '127.0.0.1', '2022-12-02 22:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `phpauth_config`
--

CREATE TABLE `phpauth_config` (
  `setting` varchar(100) NOT NULL,
  `value` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phpauth_config`
--

INSERT INTO `phpauth_config` (`setting`, `value`) VALUES
('allow_concurrent_sessions', '0'),
('attack_mitigation_time', '+30 minutes'),
('attempts_before_ban', '30'),
('attempts_before_verify', '5'),
('bcrypt_cost', '10'),
('cookie_domain', NULL),
('cookie_forget', '+30 minutes'),
('cookie_http', '1'),
('cookie_name', 'phpauth_session_cookie'),
('cookie_path', '/'),
('cookie_remember', '+1 month'),
('cookie_renew', '+5 minutes'),
('cookie_samesite', 'Strict'),
('cookie_secure', '1'),
('custom_datetime_format', 'Y-m-d H:i'),
('emailmessage_suppress_activation', '0'),
('emailmessage_suppress_reset', '0'),
('mail_charset', 'UTF-8'),
('password_min_score', '3'),
('recaptcha_enabled', '0'),
('recaptcha_secret_key', ''),
('recaptcha_site_key', ''),
('request_key_expiration', '+10 minutes'),
('site_activation_page', 'activate'),
('site_activation_page_append_code', '0'),
('site_email', 'no-reply@phpauth.cuonic.com'),
('site_key', 'fghuior.)/!/jdUkd8s2!7HVHG7777ghg'),
('site_language', 'en_GB'),
('site_name', 'PHPAuth'),
('site_password_reset_page', 'reset'),
('site_password_reset_page_append_code', '0'),
('site_timezone', 'Europe/Paris'),
('site_url', 'https://github.com/PHPAuth/PHPAuth'),
('smtp', '0'),
('smtp_auth', '1'),
('smtp_debug', '0'),
('smtp_host', 'smtp.example.com'),
('smtp_password', 'password'),
('smtp_port', '25'),
('smtp_security', NULL),
('smtp_username', 'email@example.com'),
('table_attempts', 'phpauth_attempts'),
('table_emails_banned', 'phpauth_emails_banned'),
('table_requests', 'phpauth_requests'),
('table_sessions', 'phpauth_sessions'),
('table_translations', 'phpauth_translation_dictionary'),
('table_users', 'phpauth_users'),
('translation_source', 'php'),
('verify_email_max_length', '100'),
('verify_email_min_length', '5'),
('verify_email_use_banlist', '1'),
('verify_password_min_length', '3');

-- --------------------------------------------------------

--
-- Table structure for table `phpauth_emails_banned`
--

CREATE TABLE `phpauth_emails_banned` (
  `id` int NOT NULL,
  `domain` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `phpauth_requests`
--

CREATE TABLE `phpauth_requests` (
  `id` int NOT NULL,
  `uid` int NOT NULL,
  `token` char(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `expire` datetime NOT NULL,
  `type` enum('activation','reset') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phpauth_sessions`
--

CREATE TABLE `phpauth_sessions` (
  `id` int NOT NULL,
  `uid` int NOT NULL,
  `hash` char(40) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `expiredate` datetime NOT NULL,
  `ip` varchar(39) NOT NULL,
  `device_id` varchar(36) DEFAULT NULL,
  `agent` varchar(200) NOT NULL,
  `cookie_crc` char(40) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `phpauth_users`
--

CREATE TABLE `phpauth_users` (
  `id` int NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT '0',
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `phpauth_users`
--

INSERT INTO `phpauth_users` (`id`, `email`, `password`, `isactive`, `dt`) VALUES
(1, 'hello@goodbye.com', '$2y$10$5nsVDc/y/DrHIMvSxxGUAOYEgSHVNA26ZNfVIW9h1cpXVOSPUaUtG', 1, '2022-11-21 20:58:00'),
(2, 'hihi@place.com', '$2y$10$dTS0CrV7GbaAK7m5zcS8CehLhv.oQtYW0elJXgw8Bo5CU810WI8.C', 1, '2022-11-28 22:23:06'),
(3, 'allison@goodbye.com', '$2y$10$LajbZsd3ULeGz5XxVMXoxe/K87iU1XeYJTQfpkFY7HYu/oB4b3UVm', 1, '2022-12-02 22:28:49'),
(4, 'arthur@goodbye.com', '$2y$10$b71WLnRofGcd75yvyX.6cOV7cGBPtUDYXJyYFjdrqxoVqXSqkC5Pi', 1, '2022-12-02 22:28:49'),
(5, 'ana@goodbye.com', '$2y$10$y4GCNKluihs6W98MfmJdLOV.DkjbZVbTFnUVLI0i.LBpVwfUuDB.e', 1, '2022-12-02 22:28:49'),
(6, 'alex@goodbye.com', '$2y$10$CuPGx60udR57Gu4VwsF7aeAYvRjxIk1246vggkZZsU4OhCiyI4Cy2', 1, '2022-12-02 22:28:49'),
(7, 'arlene@goodbye.com', '$2y$10$T/UOhcYCK/RB9/nTRTkVgeWUM1Tt4hbEWnzRooeXuJzQV2iq9cNDS', 1, '2022-12-02 22:28:49'),
(8, 'alberto@goodbye.com', '$2y$10$dr.P3UX8Wq.SnwxinFpvxeqzpuOK/YjLJL12FDL7sFzxCM2207M6e', 1, '2022-12-02 22:28:49'),
(9, 'barry@goodbye.com', '$2y$10$GDeVcjZpPieJ63O3JIyH7OKIaaWBkVGHtEcUKzyfoNfRmwGBo/Bhq', 1, '2022-12-02 22:28:49'),
(10, 'bertha@goodbye.com', '$2y$10$HCLaqZhBS.sO/ID6nkTxmO1bQhLYRmXRXof5Dm64ago1AUduoJycm', 1, '2022-12-02 22:28:49'),
(11, 'bill@goodbye.com', '$2y$10$fgNgByeKIcQt/kPkH2DqUeIZSJXjokBBJtoEISE8rgRWj7DxetHWa', 1, '2022-12-02 22:28:49'),
(12, 'bonnie@goodbye.com', '$2y$10$JIhiWk7H9vpLdYxOcGHc5OSCarzkvIg/6QXeAkcNA4fTsGRaO8tLm', 1, '2022-12-02 22:28:49'),
(13, 'bret@goodbye.com', '$2y$10$6es/YT3Pk6ovB0twv/b6jujxmqQCmRf/SHXOEPrAs/9/MyQyamo1q', 1, '2022-12-02 22:28:49'),
(14, 'beryl@goodbye.com', '$2y$10$2IDshB8tT8ZzqVGChZqw/OwfL8Ho32w33Dn/Vikj.FuW86dmGNXO.', 1, '2022-12-02 22:28:49'),
(15, 'chantal@goodbye.com', '$2y$10$rKXOfkbCoGVZH0hqHdIOWOgWCVctD8W.55.lV1ZL8Ov36Bn1ss3P.', 1, '2022-12-02 22:28:49'),
(16, 'cristobal@goodbye.com', '$2y$10$jbM.yXScBAEWDmW0r0pIeuEYQgZCNx8fzE/mHfbry0zYfnWybRnWi', 1, '2022-12-02 22:28:49'),
(17, 'claudette@goodbye.com', '$2y$10$nRfOJaRBtDEhcPksXGjwzee4sFXByXrtGltPix.5OXJqonZh8VZGi', 1, '2022-12-02 22:28:49'),
(18, 'charley@goodbye.com', '$2y$10$Rolb1ZBTu4IV43/qlcwqlOZ0ilsNtbApzD8ymQzUyHfrO9TNmWW5O', 1, '2022-12-02 22:28:49'),
(19, 'cindy@goodbye.com', '$2y$10$oRIDWaP29IDqSCd73AJPt.pMrFts6VBYJS2U5JjCco3opcFCh9UgK', 1, '2022-12-02 22:28:49'),
(20, 'chris@goodbye.com', '$2y$10$cDrnRAOek/j0zD.3.Td3dOgikds5q1IurpKiHJgvYt25F72TY6CH.', 1, '2022-12-02 22:28:50'),
(21, 'dean@goodbye.com', '$2y$10$KttxWkUmHCnSirMD9qBrg.HZTBLu8h.8.RfFl8DbtBobFX74lhD2a', 1, '2022-12-02 22:28:50'),
(22, 'dolly@goodbye.com', '$2y$10$V7LPKKGSIZJQYbM0FEQnsOUhQhXbeEJopDsUGWtzAe4/AG81AP7Vm', 1, '2022-12-02 22:28:50'),
(23, 'danny@goodbye.com', '$2y$10$8o61qdHNrypU0irYdv0lS.rRbilww3lPMXWkIH0YAPpmR/ravTeLy', 1, '2022-12-02 22:28:50'),
(24, 'danielle@goodbye.com', '$2y$10$uAppjXXRoVhyOWCoVfNfiOzntfBSuQJZKFe6GeKX6hTwBRckVndP2', 1, '2022-12-02 22:28:50'),
(25, 'dennis@goodbye.com', '$2y$10$tbYRwwSkZ/gwY4pADqWEh.vkba6kDbDaF8tQp/mqk5kcIB8yQA7rW', 1, '2022-12-02 22:28:50'),
(26, 'debby@goodbye.com', '$2y$10$6guO9dZnSSm8gh8kRkVWWuqgUR963xSwbeR4oZeNQ5ebqQSedMGT2', 1, '2022-12-02 22:28:50'),
(27, 'erin@goodbye.com', '$2y$10$qa8.jJ8Wd.TF7SQWs67K4.LNWVsvsb/upjs19raigDbgSRQ4jwYo2', 1, '2022-12-02 22:28:50'),
(28, 'edouard@goodbye.com', '$2y$10$rE7S4uhu5CNyn4oNLT/JROQYLaaTXXAV4qirGqi1r3tdwXgCkUq2O', 1, '2022-12-02 22:28:50'),
(29, 'erika@goodbye.com', '$2y$10$odtMqi/Nn8FwUJj3giKcwOf8NxgKN9XwqyqfRFHTMIVH9jFioyIy2', 1, '2022-12-02 22:28:50'),
(30, 'earl@goodbye.com', '$2y$10$bxHRYnSwKZ713GDKOEIf6O9TRxo.Bv5t4rCRzY5yE3/mdgn5.exTC', 1, '2022-12-02 22:28:50'),
(31, 'emily@goodbye.com', '$2y$10$FOC.CyHg4ob9S3zs1BIw5.GZ2olrXSOVeOgDZI60wuJBNhkBS1yJe', 1, '2022-12-02 22:28:50'),
(32, 'ernesto@goodbye.com', '$2y$10$KZrhwCaPyZnNQQa.hRG74.ivQxWpCrH.QzXVe33rqePgPlCsjoSFq', 1, '2022-12-02 22:28:50'),
(33, 'felix@goodbye.com', '$2y$10$phrm8rK.fg8qqv6.DTefGON/tVRT73fqME34tH9m3LQxSqg1I.fxC', 1, '2022-12-02 22:28:50'),
(34, 'fay@goodbye.com', '$2y$10$gvEt4kUEj0Zzq4sqS7kXnOHhMTGtAx5qq8BRA0ce1S0Kshiq9Snaq', 1, '2022-12-02 22:28:50'),
(35, 'fabian@goodbye.com', '$2y$10$qgNGwA5JhFE7Oua9IwSW.uDL.FoxNOp4K4mVSYjqs2.DJ5U91B0wy', 1, '2022-12-02 22:28:50'),
(36, 'frances@goodbye.com', '$2y$10$MSGbDDdVREB05aKcnGthcuGaiMjL1.zcBlzH0Vi7VMM2wh6wsWSsm', 1, '2022-12-02 22:28:50'),
(37, 'franklin@goodbye.com', '$2y$10$PGpTJK4HloXuxnKl7Mdp9uubrysXd.UMu6OydCQ0k3JTRfRe6iXUm', 1, '2022-12-02 22:28:50'),
(38, 'florence@goodbye.com', '$2y$10$Yn8bzZcPhVkXZRHMOHbzDOPoSx9oh7ikqlxLjwmIY99alhlLlP1Ka', 1, '2022-12-02 22:28:51'),
(39, 'gabielle@goodbye.com', '$2y$10$lg0CA8a7Uqh8KSQZTtS5le.C5FrC4N2IJY/JesMcywRIAq7dr.rP6', 1, '2022-12-02 22:28:51'),
(40, 'gustav@goodbye.com', '$2y$10$tUm/k6rcyIVa5QDRX/d39O6oV.en8nqL61xCXa1dsY7d8vQ6BFYma', 1, '2022-12-02 22:28:51'),
(41, 'grace@goodbye.com', '$2y$10$v1WXgNR3w3q03kMfFJP4X.JBJ4P8yxQD6vNjBkG1g5Tfva7gydI5C', 1, '2022-12-02 22:28:51'),
(42, 'gaston@goodbye.com', '$2y$10$2xcboNjLOHPwTur7UCr5KeDZaaaGMaKpqHnJ1mfuXt/S2JCq1pt/e', 1, '2022-12-02 22:28:51'),
(43, 'gert@goodbye.com', '$2y$10$9R82yP782OAssH4OIUW4.eymU5gxg3wzECQvE4K4qTn3vlIaxLXVm', 1, '2022-12-02 22:28:51'),
(44, 'gordon@goodbye.com', '$2y$10$Dc0kfMAQq1ULG37sVFmK5e.5mng.My9W8KrkaeClUM89KaO/pYaTi', 1, '2022-12-02 22:28:51'),
(45, 'humberto@goodbye.com', '$2y$10$sqJSTBFc91cq3z80RbjmQOo9tdfLtk7CLtMXdTmhWeBrDjizW0Bfq', 1, '2022-12-02 22:28:51'),
(46, 'hanna@goodbye.com', '$2y$10$uJS/OwQDWm28GCFjU8P5tekuMA.0ZswC4ECJcjUulWkq8zzQM8xX.', 1, '2022-12-02 22:28:51'),
(47, 'henri@goodbye.com', '$2y$10$ixvDMWjbY5XK.mTlZcjxpObdFr4xxanng/wgt.5NVaXmmJYi2GVEi', 1, '2022-12-02 22:28:51'),
(48, 'hermine@goodbye.com', '$2y$10$Seh0wxLExiaplCAHVUIJ..rDHt2TwuK/DGlmavZ/IeRVKUSipH1WK', 1, '2022-12-02 22:28:51'),
(49, 'harvey@goodbye.com', '$2y$10$K8XQJWhlP89yTFz9MAx4EOY5NNbUYxNiNIMQZW1aOKPFAm7Q/eKxq', 1, '2022-12-02 22:28:51'),
(50, 'helene@goodbye.com', '$2y$10$f.8fUIqeNpE/ZLMv472xT.ai4S/3youhvCsa6owzt3QwgvfBtDnbe', 1, '2022-12-02 22:28:51'),
(51, 'iris@goodbye.com', '$2y$10$vZk2HA1R4iFgFBTpzJZn7.oLA97VULEoUB.5xZ53S4YfW/aN8Uile', 1, '2022-12-02 22:28:51'),
(52, 'isidore@goodbye.com', '$2y$10$9ayUewTCG3mNTZXzD1dlrOpUiOQLQ2KUAsHlaey5.Rbv7pbGTFRSe', 1, '2022-12-02 22:28:51'),
(53, 'isabel@goodbye.com', '$2y$10$r1XNwuAfHTiBenGkmtWUbOuqJTEaqMOp/WT16ua6cmNPQ5RDMJuFC', 1, '2022-12-02 22:28:51'),
(54, 'ivan@goodbye.com', '$2y$10$vCV74a578uVU3.rxoDP/G.0XKMdzud33czvR6NpqAElpH5DkCJPPG', 1, '2022-12-02 22:28:51'),
(55, 'irene@goodbye.com', '$2y$10$7LX5/UnvXhMy8rVxTrAO7.fPPbmwQymU0jhCyCtmiwHo9uMCpfZYS', 1, '2022-12-02 22:28:51'),
(56, 'isaac@goodbye.com', '$2y$10$P0oDq8o4gJADNwAp/N4J/OMcAP5B69Psb0c1PYE64ZrmuKVLPcOCK', 1, '2022-12-02 22:28:52'),
(57, 'jerry@goodbye.com', '$2y$10$8d8L94bBg9z1vI35kXySIOrygFGbEBpPXCPzdNvmN6UkeYOCwuDfK', 1, '2022-12-02 22:28:52'),
(58, 'josephine@goodbye.com', '$2y$10$r8GKWZoVVE/h6jpIa4AfzuJrOfVou4jqdrlLWUfAxf.qOIGrHdrvi', 1, '2022-12-02 22:28:52'),
(59, 'juan@goodbye.com', '$2y$10$ujDILsq5y7zKHu2Mnq0FXOWC0mmc0hnqrWZk5.r6mrtjd/V0jejny', 1, '2022-12-02 22:28:52'),
(60, 'jeanne@goodbye.com', '$2y$10$VxbbXxxBPuDXxRG0AIgaC.XRi3zmAUMf6VmZf9PZoVLCkYkxLkvb2', 1, '2022-12-02 22:28:52'),
(61, 'jose@goodbye.com', '$2y$10$F5JBiyMmhEtQCeo2anjvS.G4YctoQ.yVyu2PrHGRTVep5sDTRACX6', 1, '2022-12-02 22:28:52'),
(62, 'joyce@goodbye.com', '$2y$10$cM.8lPp0mXQP56K7MWE29uu3yOfQQu/x4XkPHUMommi.IBIZEEe9i', 1, '2022-12-02 22:28:52'),
(63, 'karen@goodbye.com', '$2y$10$klFy7i3FcV9olgPaM89WuuuQ57jtaz9.K9/42qfKJyy2l.RW5QM9W', 1, '2022-12-02 22:28:52'),
(64, 'kyle@goodbye.com', '$2y$10$maDsxbQiqTGl8RNsPj73QOgCYv2BFoHEm6MndNyxZE1Gjj7SlS69.', 1, '2022-12-02 22:28:52'),
(65, 'kate@goodbye.com', '$2y$10$2We0QdXoNHc/kiUXeAM5TuEtwdDP4XdNBhaUXBcO7xJZ0Wh1jyguK', 1, '2022-12-02 22:28:52'),
(66, 'karl@goodbye.com', '$2y$10$bT00Mrv.Kp9bvjs8GlFyW.u2lIKTSk25c0zW8P9B6vYtt9Wj69S32', 1, '2022-12-02 22:28:52'),
(67, 'katrina@goodbye.com', '$2y$10$eXGTY2RWQcdJyxynXdg/z.5F7j3vZOkvEWytqRHI1CiW0e4jpzId6', 1, '2022-12-02 22:28:52'),
(68, 'kirk@goodbye.com', '$2y$10$P/Gdi8S6lnFhuVNQlqGgdeywnBYk2SqpdCNvFEVaN..MMqM4EhByS', 1, '2022-12-02 22:28:52'),
(69, 'lorenzo@goodbye.com', '$2y$10$BfYzYJYNkO5aSUCCMvTc2uMrRuIDbdpjyZjoGPEI5F716mjA9Hme2', 1, '2022-12-02 22:28:52'),
(70, 'lili@goodbye.com', '$2y$10$NkM8SOTu30MH9aMCRWA7SuRnd57/wTNR8LjFex3R4AEy4JuDNdjgi', 1, '2022-12-02 22:28:52'),
(71, 'larry@goodbye.com', '$2y$10$/AI/bJCKBIcU.HXBnQ0GzOqKX0JRI4nfUSKmCiMBHLU3Mq2DPgqXq', 1, '2022-12-02 22:28:52'),
(72, 'lisa@goodbye.com', '$2y$10$VUnSCkrNi/UoYyNwpzqz4e8krZUoj/hcYKgS/ChHpmhuS4ONor5eO', 1, '2022-12-02 22:28:52'),
(73, 'lee@goodbye.com', '$2y$10$OpwbTME1jvq2s32n6xt1X.7etsKUShAW5OxVeIBlXjE.6jVcMSJly', 1, '2022-12-02 22:28:52'),
(74, 'leslie@goodbye.com', '$2y$10$8573QBB0V.kcvj5X0Gje.OKV4I6mMynv9v6EJpGt7WySHSycov9ue', 1, '2022-12-02 22:28:52'),
(75, 'michelle@goodbye.com', '$2y$10$xPeoZD94ithtizv4vEhAZ.3fGMUCxGWLNjDs0mM/ap/kApSAxnxN2', 1, '2022-12-02 22:28:53'),
(76, 'marco@goodbye.com', '$2y$10$L0UM6hvEm9bjsqGmNCwGbep/XDXDhIuOfNe3SI5IaAwZWyVa5hJ1e', 1, '2022-12-02 22:28:53'),
(77, 'mindy@goodbye.com', '$2y$10$Uiym5Ssh4x0waRqGV.hw7eveL7WvjSlDJNYqxrhjYJZjK7PpBMDHm', 1, '2022-12-02 22:28:53'),
(78, 'maria@goodbye.com', '$2y$10$37SjiJQ/2uukYh7RaMLqHOza0UpG9njyqcfE451FfC0SpSaIC0TOS', 1, '2022-12-02 22:28:53'),
(79, 'michael@goodbye.com', '$2y$10$N2dBnW4sUifDXc7K1JUpleHd7UhK.zUnEILnftepoBXW9MmxRoBc6', 1, '2022-12-02 22:28:53'),
(80, 'noel@goodbye.com', '$2y$10$eueqZgbuS8rmOHD3IrEpgusHvZBa7xokomDE122JXTJr.OeawagjO', 1, '2022-12-02 22:28:53'),
(81, 'nana@goodbye.com', '$2y$10$ouva.cG05mQuv1MRX2XeLulYiokFUrRciL4XrdBNDr71JCPeT.CP6', 1, '2022-12-02 22:28:53'),
(82, 'nicholas@goodbye.com', '$2y$10$jF3S8omjuViMVu/EQRxImODRPg/51fZjvqb4H/vvdQVkqdcNJQByy', 1, '2022-12-02 22:28:53'),
(83, 'nicole@goodbye.com', '$2y$10$rld2Ya/7vAQZTby8wUTObO6Gv9bZG5Mo4yt931S5hBIv/KgQdL0NC', 1, '2022-12-02 22:28:53'),
(84, 'nate@goodbye.com', '$2y$10$ZNtCbTMuxnlipXRaqJlue./rwFFZoH7c6bmIg.jK4TetbVPGs/jhq', 1, '2022-12-02 22:28:53'),
(85, 'nadine@goodbye.com', '$2y$10$P8JZ67tgx3WS1Fq7EdOuU.9fjUKt778nv8PlItpmdWldL8fwejBMW', 1, '2022-12-02 22:28:53'),
(86, 'olga@goodbye.com', '$2y$10$.tetuCtdbuGpARAr2V3roezT3WKSHurD6/USCpXzfTZaPF9Oj3n7.', 1, '2022-12-02 22:28:53'),
(87, 'omar@goodbye.com', '$2y$10$zmofNcgtnrYHzQhP6FB16.OaAeTzNXhn3R/BLgwX9diAJPsDsonNq', 1, '2022-12-02 22:28:53'),
(88, 'odette@goodbye.com', '$2y$10$IKQHSiZUNHzhYJEbDfmdmet4ODLo8jEGdb2avYVyWcxey9MZrN79O', 1, '2022-12-02 22:28:53'),
(89, 'otto@goodbye.com', '$2y$10$dVl7towcMVZMaVfpCZ4fUO2ECGRICVmeR6pmHxRndTVx3xc7YZOsS', 1, '2022-12-02 22:28:53'),
(90, 'ophelia@goodbye.com', '$2y$10$C1F/LAd77BVFyL55zBoRe.rHTHGfhM33TYr9HF1kpdcmDVQXhXwKO', 1, '2022-12-02 22:28:53'),
(91, 'oscar@goodbye.com', '$2y$10$lklIZeh2Ois4iSxCqHgf2evzLg3RX/gfyWfRR4eUDeFgRBxiZqrhm', 1, '2022-12-02 22:28:53'),
(92, 'pablo@goodbye.com', '$2y$10$ToivGu/DsJAsHY5a5jxFhuHaENpBDKpgZleyEf.VViCHCwc5.JKPK', 1, '2022-12-02 22:28:53'),
(93, 'paloma@goodbye.com', '$2y$10$GFja4Ul6bXH1UwxV8i8dyeoLRb/iQqd/qv36ZXPlp9Nz1Mi.x8r2u', 1, '2022-12-02 22:28:54'),
(94, 'peter@goodbye.com', '$2y$10$MedLGAhnGOVymO8d.Cf3Iuz8coCU8Pl5hKcyub6kfCExgUZJM9KGm', 1, '2022-12-02 22:28:54'),
(95, 'paula@goodbye.com', '$2y$10$JkyC273fVEGE4EpI/M86Iu1n.Y/mP9NpUdVKD0L.5lh9nHBEJFHSa', 1, '2022-12-02 22:28:54'),
(96, 'philippe@goodbye.com', '$2y$10$4q.bIO0EVbXzIOnz83qVXe1lE5WQMxuQa26cAxnlpZyqX1ioV1RZO', 1, '2022-12-02 22:28:54'),
(97, 'patty@goodbye.com', '$2y$10$hqk4agPn/aVXySPmCPjmWe4i9QrDflAYgLhwZefvFn5QB6Utnn0Ty', 1, '2022-12-02 22:28:54'),
(98, 'rebekah@goodbye.com', '$2y$10$aXEFzSnZlaL4v2ew6dk9su75pXp0FU.n7y8X70ZFsuk8KXL4425by', 1, '2022-12-02 22:28:54'),
(99, 'rene@goodbye.com', '$2y$10$0VJxHzV0XaO1h6/LbWVZe.vkNXC2r08weU8cKX6lG0Ah3LYaNngIa', 1, '2022-12-02 22:28:54'),
(100, 'rose@goodbye.com', '$2y$10$.UVY3GCLU9xLsIieg2vIY.R1.YvdL4HktNvQBalwgmpzoRvag9lWC', 1, '2022-12-02 22:28:54'),
(101, 'richard@goodbye.com', '$2y$10$z.fR9f8eQ52g/5widOdvMeTC9sHAK2XWsBFV74bbrRYKmgPGPgP7y', 1, '2022-12-02 22:28:54'),
(102, 'rita@goodbye.com', '$2y$10$IEngOuF3W6F6.MRAUVYDOeOVP4s7.HmL580aVM8NBFbAp7czMpsAa', 1, '2022-12-02 22:28:54'),
(103, 'rafael@goodbye.com', '$2y$10$O2/IBcnEkl9t7NV9zd.KsOt38hCybvIkyhUpNCzyYsZwv9jZT/53.', 1, '2022-12-02 22:28:54'),
(104, 'sebastien@goodbye.com', '$2y$10$4hv40DWTIVgDDMUwBpZckuqmCqLZ5QiTRgmV5b8GIAQx1adMw1SYq', 1, '2022-12-02 22:28:54'),
(105, 'sally@goodbye.com', '$2y$10$dLchAL0pzSksOqh1Cne8LOqo4Pz2KMi5mVJn9lO.Uyr6r0kA5QdFe', 1, '2022-12-02 22:28:54'),
(106, 'sam@goodbye.com', '$2y$10$QEMqGI5Hu9tRxBeVWVJEoOiT5KrlFt1BJUxCHgvX0vzcPJXcyyAK.', 1, '2022-12-02 22:28:54'),
(107, 'shary@goodbye.com', '$2y$10$/pkubzVOOMS1HhW7BVwzluw4hqRWLisef.vnMp3NDudLLRsdJtCfi', 1, '2022-12-02 22:28:54'),
(108, 'stan@goodbye.com', '$2y$10$vVZ30vj4ndYUSILurMVGi.kZAslKciDQXYV3YWkEzuwqdrC7Xlpva', 1, '2022-12-02 22:28:54'),
(109, 'sandy@goodbye.com', '$2y$10$6LFRBdsDX4Go2x9bqf5e3uKSKjbhpYXrdat6dyXboEhvIHzEttMeW', 1, '2022-12-02 22:28:54'),
(110, 'tanya@goodbye.com', '$2y$10$vbYoX8JuFNo5ezai1JO5cOwiUx/qIhsjnX8DlhAhAfzOIEwjFE2Am', 1, '2022-12-02 22:28:54'),
(111, 'teddy@goodbye.com', '$2y$10$A7IRkpIZxjaqsgg7WthsWObDK2I89hg/JZDwJeoY7bm3ElIMOtDL6', 1, '2022-12-02 22:28:55'),
(112, 'teresa@goodbye.com', '$2y$10$54nGZJXp4L5fbkNk8qb9uOj6OSAuRRvvIzju.LenRUORk2TAJ8NKS', 1, '2022-12-02 22:28:55'),
(113, 'tomas@goodbye.com', '$2y$10$ZQBsQuP2o/Ga.Ax3THqqBu5YUcQupukZ5KMPNHCNVd5JCbGYTzweG', 1, '2022-12-02 22:28:55'),
(114, 'tammy@goodbye.com', '$2y$10$ptq65G1Dbcv6eZw4y12T7Ov6IBe1Ja8GDScCURuze/cQ8oE1ZVdB6', 1, '2022-12-02 22:28:55'),
(115, 'tony@goodbye.com', '$2y$10$MCpWxGYEwE0D1p0Buho5/.gapgnGcp73WBGpDlJvex4QpfwbLGET.', 1, '2022-12-02 22:28:55'),
(116, 'van@goodbye.com', '$2y$10$ZtjmvuOgqz4VB3le3BB9hexlG5WlJ3ihH4BLxmwn3Vnw/aZ9a0DuK', 1, '2022-12-02 22:28:55'),
(117, 'vicky@goodbye.com', '$2y$10$FCoCQEHIXZYbpXZUIX4sourV/zY.JmEJAJV2mgdBKTgyhIj8AzL6C', 1, '2022-12-02 22:28:55'),
(118, 'victor@goodbye.com', '$2y$10$bHXub1SUvyKQdIs8SP7bF.HP5BkEnw5yhSR88eOLk6SgXMCDEHmPO', 1, '2022-12-02 22:28:55'),
(119, 'virginie@goodbye.com', '$2y$10$rKEDLxIro59ee4YoTaDD0uDGbxxFOE99qsP1/LsTC2zRpa2r0I72K', 1, '2022-12-02 22:28:55'),
(120, 'vince@goodbye.com', '$2y$10$IxwTKMZCOk9TqxQvRvaI1.uFV9G8ysnLnanssCb3LtzSqVt3KUQqu', 1, '2022-12-02 22:28:55'),
(121, 'valerie@goodbye.com', '$2y$10$gjZAN.YcAMJlkMweaBGSdOqyJ4UzL4xSIStEe9qGqLEfXpc1O9MlS', 1, '2022-12-02 22:28:55'),
(122, 'wendy@goodbye.com', '$2y$10$XBDc89VMjrBKznt.caaG/eB5eehbJOY/w2FS8Ew0anvNNHIBJEPSG', 1, '2022-12-02 22:28:55'),
(123, 'wilfred@goodbye.com', '$2y$10$WDlqVXD6tIIDfjb94YpO3O9GMw7l4XkEFbvrOZRSkEwjnYPZY5iXu', 1, '2022-12-02 22:28:55'),
(124, 'wanda@goodbye.com', '$2y$10$r4thYHmJSVcy5JobxnZSb.UWJMGhemB1uRAXu56u9UVnRVgEYHPX2', 1, '2022-12-02 22:28:55'),
(125, 'walter@goodbye.com', '$2y$10$WdSX8aFK4yfquAzuLaskJ.rHZKw/MjF2uwguUIK6RDc4qbIpundvy', 1, '2022-12-02 22:28:55'),
(126, 'wilma@goodbye.com', '$2y$10$hKNknwF9GfVrL835wAt05udaSgsW9STcZa8aqeQpkU37y1KDCw/3.', 1, '2022-12-02 22:28:55'),
(127, 'william@goodbye.com', '$2y$10$q46fMRAHaIWlmAFD8Ki0gufMV5Cx5wd.0zwMjk1UVvjNOltMfAiD6', 1, '2022-12-02 22:28:55'),
(128, 'kumiko@goodbye.com', '$2y$10$TuQHC59X.lbb8/ktmkRWGuHoAcLboSa5EENxpkSQGAUyYb/zTjX42', 1, '2022-12-02 22:28:55'),
(129, 'aki@goodbye.com', '$2y$10$cokuC8Y199O2y.nGBP6R3uet90aacUkuiv6cN5LIAodIEOfS9RfVG', 1, '2022-12-02 22:28:55'),
(130, 'miharu@goodbye.com', '$2y$10$qkgl2kr5.ymCOyuMuE1xaeZFSUGn3Y.pPxmUzz65p.9LjXoZw3Yce', 1, '2022-12-02 22:28:56'),
(131, 'chiaki@goodbye.com', '$2y$10$a/eo8GNED6miB/FFNBXXkOtRaf3TxEvDSFaxm9u6v4xYxPE6kwtvu', 1, '2022-12-02 22:28:56'),
(132, 'michiyo@goodbye.com', '$2y$10$mnxuXtPoD1CNq9k2lQutjezm7kyNvqcKOZcmw5COCulCvPP20wN/S', 1, '2022-12-02 22:28:56'),
(133, 'itoe@goodbye.com', '$2y$10$o.k53pe4E58MtrYThS518uuYTxpkAXVkQYHJk7M7OKaNT34bhK1le', 1, '2022-12-02 22:28:56'),
(134, 'nanaho@goodbye.com', '$2y$10$ahb9VfHruskcT2/YY5pOeefzXTWfrvAoQodJTfR2SJIr1GO2QOMqS', 1, '2022-12-02 22:28:56'),
(135, 'reina@goodbye.com', '$2y$10$rFZ6gdlma1yBBWFQTVWkm.VNKmdFm8xb2Xf5R12uMeYy93M36LWKi', 1, '2022-12-02 22:28:56'),
(136, 'emi@goodbye.com', '$2y$10$06sJkP0eW0Cpaa1veEIin.zDkymy1jqWG/z0eUG05fnt6fAVzqTjO', 1, '2022-12-02 22:28:56'),
(137, 'yumi@goodbye.com', '$2y$10$/KiWizzbwraiLteG9Y63e.K2yReHrtRm0EWZjNvBKBChHHtQnvxJa', 1, '2022-12-02 22:28:56'),
(138, 'ayumi@goodbye.com', '$2y$10$vH5Ral.IwXwllRfHvEUx1ugT1Ye.s7rs2MwuOYil6DLJgkYaDGECO', 1, '2022-12-02 22:28:56'),
(139, 'kaori@goodbye.com', '$2y$10$vpPetN8C94NuiN0xF2DBaO.Um9EMaVU1nZ7EHOYppG.Fcw9WMzZ6K', 1, '2022-12-02 22:28:56'),
(140, 'sayuri@goodbye.com', '$2y$10$dZDTjtJrIswQ4tHV039GVeNT18tGWjtfab87ZvxuT0A/jbk.89MXi', 1, '2022-12-02 22:28:56'),
(141, 'rie@goodbye.com', '$2y$10$X7FU/ZsBuS1FmJowN8jDSOg/eCbViQg5hMjbVFtEE8/v6OIs84Z2W', 1, '2022-12-02 22:28:56'),
(142, 'miyuki@goodbye.com', '$2y$10$QINMflKaXgdXBsw86NNZjueK3iChzqRxmkWcacjqvEzVfgFJ2IL.u', 1, '2022-12-02 22:28:56'),
(143, 'hitomi@goodbye.com', '$2y$10$1sniFkRQFGIc9SdctnRSZuxBaKYTn5zEV7pvDTYOKDpwpddCMdLdi', 1, '2022-12-02 22:28:56'),
(144, 'naoko@goodbye.com', '$2y$10$Gdn/iFMxhJFnymBoY4U5JeQq62KbazwoMpHRu0tZlrxEjdoACxiBu', 1, '2022-12-02 22:28:56'),
(145, 'miwa@goodbye.com', '$2y$10$VacJhOZbCW9tuMYLbn1TA.Co217/H1PAOykAMZqKhrrqSZQCB3dwm', 1, '2022-12-02 22:28:56'),
(146, 'etsuko@goodbye.com', '$2y$10$n7wQaG2LWhehCjYcvB/Xrun62Sx5ETVEMhjn3FLrW6J2BD8o9h9li', 1, '2022-12-02 22:28:56'),
(147, 'akane@goodbye.com', '$2y$10$yxwxO5XPZQ1KarkWycr0GOzuKX04ArGJzOZGQhhiLNnUE4s6etoz2', 1, '2022-12-02 22:28:56'),
(148, 'kazuko@goodbye.com', '$2y$10$xHLyxgPjIjuUXh4BqVe1Aek42InCI57RGW1/mb4.n0Bs.artQxREi', 1, '2022-12-02 22:28:57'),
(149, 'miyako@goodbye.com', '$2y$10$gjUHFg15pk3t0dHc6wR6POkggh2YI3wRuVP0/G/b5IG4g28FRV.u2', 1, '2022-12-02 22:28:57'),
(150, 'youko@goodbye.com', '$2y$10$Bg6FvsTRgIMYBPMLUgQefeXMqEx0N45vVW.445XPXLuKC4WY0Q2l6', 1, '2022-12-02 22:28:57'),
(151, 'sachiko@goodbye.com', '$2y$10$s73kSKm/9FMPNhQ87hLiUuXIxax22A03I.L2PBZfY3ArbJ.TUzIfK', 1, '2022-12-02 22:28:57'),
(152, 'mieko@goodbye.com', '$2y$10$HF1WUf7QcRz0j8sCgLTtAOhbQcl1KOc40d93mYS6iAPY.8E5q.r36', 1, '2022-12-02 22:28:57'),
(153, 'toshie@goodbye.com', '$2y$10$BJjo9BmBrbW0S9t5BB9JbObJeTPRQdXlEoijTBNYteER/BC4MdJ1W', 1, '2022-12-02 22:28:57'),
(154, 'junko@goodbye.com', '$2y$10$ieTLrhnFQSb5flgr/E3D3u1aT38p.UZ9bVptVSaIicT1ojiWn1RYu', 1, '2022-12-02 22:28:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `phpauth_attempts`
--
ALTER TABLE `phpauth_attempts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ip` (`ip`);

--
-- Indexes for table `phpauth_config`
--
ALTER TABLE `phpauth_config`
  ADD UNIQUE KEY `setting` (`setting`);

--
-- Indexes for table `phpauth_emails_banned`
--
ALTER TABLE `phpauth_emails_banned`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phpauth_requests`
--
ALTER TABLE `phpauth_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`),
  ADD KEY `token` (`token`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `phpauth_sessions`
--
ALTER TABLE `phpauth_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phpauth_users`
--
ALTER TABLE `phpauth_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `messageID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `phpauth_attempts`
--
ALTER TABLE `phpauth_attempts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `phpauth_emails_banned`
--
ALTER TABLE `phpauth_emails_banned`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phpauth_requests`
--
ALTER TABLE `phpauth_requests`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phpauth_sessions`
--
ALTER TABLE `phpauth_sessions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `phpauth_users`
--
ALTER TABLE `phpauth_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
