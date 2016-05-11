-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2016 年 05 月 10 日 17:36
-- 伺服器版本: 5.5.44-0ubuntu0.14.10.1
-- PHP 版本： 5.6.7-1+deb.sury.org~utopic+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `ivan`
--

-- --------------------------------------------------------

--
-- 資料表結構 `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`id` int(11) NOT NULL,
  `commentFrom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `commentTo` int(11) NOT NULL,
  `commentText` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 資料表結構 `hot_singer_vote`
--

CREATE TABLE IF NOT EXISTS `hot_singer_vote` (
`id` int(11) NOT NULL,
  `voteFrom` varchar(30) NOT NULL,
  `voteTo` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- 資料表的匯出資料 `hot_singer_vote`
--

INSERT INTO `hot_singer_vote` (`id`, `voteFrom`, `voteTo`) VALUES
(1, '', 6),
(2, '', 5);

-- --------------------------------------------------------

--
-- 資料表結構 `nowSinger`
--

CREATE TABLE IF NOT EXISTS `nowSinger` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `nowSinger`
--

INSERT INTO `nowSinger` (`id`) VALUES
(5);

-- --------------------------------------------------------

--
-- 資料表結構 `singers`
--

CREATE TABLE IF NOT EXISTS `singers` (
`id` int(11) NOT NULL,
  `name` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `song` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- 資料表的匯出資料 `singers`
--

INSERT INTO `singers` (`id`, `name`, `department`, `song`) VALUES
(5, '林友翊', '資工105', '不為誰做的歌'),
(6, '廖紅竹', '123', '321');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `code` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `verify` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 資料表結構 `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
`id` int(11) NOT NULL,
  `fromWho` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `toWho` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- 資料表的匯出資料 `votes`
--

INSERT INTO `votes` (`id`, `fromWho`, `toWho`, `score`) VALUES
(1, '', 5, 5);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `hot_singer_vote`
--
ALTER TABLE `hot_singer_vote`
 ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `nowSinger`
--
ALTER TABLE `nowSinger`
 ADD UNIQUE KEY `id` (`id`);

--
-- 資料表索引 `singers`
--
ALTER TABLE `singers`
 ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `votes`
--
ALTER TABLE `votes`
 ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `comments`
--
ALTER TABLE `comments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `hot_singer_vote`
--
ALTER TABLE `hot_singer_vote`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- 使用資料表 AUTO_INCREMENT `singers`
--
ALTER TABLE `singers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- 使用資料表 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `votes`
--
ALTER TABLE `votes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
