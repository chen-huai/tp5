-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018-08-19 15:25:53
-- 服务器版本： 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `think`
--

-- --------------------------------------------------------

--
-- 表的结构 `think_person`
--

DROP TABLE IF EXISTS `think_person`;
CREATE TABLE IF NOT EXISTS `think_person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` char(32) NOT NULL,
  `repassword` char(32) NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `think_person`
--

INSERT INTO `think_person` (`id`, `name`, `password`, `repassword`, `create_time`, `update_time`) VALUES
(1, '哈哈哈', '123456', '123456', '2018-08-19 17:47:06', '2018-08-19 17:47:06');

-- --------------------------------------------------------

--
-- 表的结构 `think_user`
--

DROP TABLE IF EXISTS `think_user`;
CREATE TABLE IF NOT EXISTS `think_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` char(32) NOT NULL,
  `repassword` char(32) NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `delete_time` datetime DEFAULT NULL,
  `ip` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `think_user`
--

INSERT INTO `think_user` (`id`, `name`, `password`, `repassword`, `create_time`, `update_time`, `delete_time`, `ip`, `email`) VALUES
(1, '你好吗', 'c9130efba1317c16406d67270f657af3', 'c9130efba1317c16406d67270f657af3', '2018-08-17 16:50:22', '2018-08-18 11:01:06', '2018-08-18 11:01:06', '127.0.0.1', 'haha@qq.com'),
(2, '看innhhh', '14e1b600b1fd579f47433b88e8d85291', '14e1b600b1fd579f47433b88e8d85291', '2018-08-17 16:52:57', '2018-08-18 11:02:37', '2018-08-18 11:02:37', '127.0.0.1', 'kan@qq.com'),
(3, 'admin', '14e1b600b1fd579f47433b88e8d85291', '14e1b600b1fd579f47433b88e8d85291', '2018-08-17 17:10:38', '2018-08-18 11:03:01', '2018-08-18 11:03:01', '127.0.0.1', 'admin@qq.com'),
(4, '你好呀', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', '2018-08-17 17:16:08', '2018-08-17 17:16:08', NULL, '127.0.0.1', 'nihao@qq.com'),
(5, 'lalala', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', '2018-08-17 17:16:31', '2018-08-17 17:16:31', NULL, '127.0.0.1', 'lalala@qq.com'),
(6, 'test', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', '2018-08-17 17:17:04', '2018-08-17 17:17:04', NULL, '127.0.0.1', 'test@qq.com'),
(7, 'yyyy', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', '2018-08-17 17:17:31', '2018-08-17 17:17:31', NULL, '127.0.0.1', 'yyy@qq.com'),
(8, '赵永琳', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', '2018-08-17 17:26:07', '2018-08-17 17:26:07', NULL, '127.0.0.1', 'yonglin@qq.com'),
(9, '我爱你', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', '2018-08-18 10:52:04', '2018-08-18 10:52:04', NULL, '127.0.0.1', 'woaini@qq.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
