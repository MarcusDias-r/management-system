-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 02, 2020 at 09:35 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contaazul`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `address_number` varchar(50) DEFAULT NULL,
  `address_neighb` varchar(100) DEFAULT NULL,
  `address_city` varchar(50) DEFAULT NULL,
  `address_state` varchar(50) DEFAULT NULL,
  `address_country` varchar(50) DEFAULT NULL,
  `address_zipcode` varchar(50) DEFAULT NULL,
  `stars` int(11) NOT NULL DEFAULT 3,
  `internal_obs` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `id_company`, `name`, `email`, `phone`, `address`, `address2`, `address_number`, `address_neighb`, `address_city`, `address_state`, `address_country`, `address_zipcode`, `stars`, `internal_obs`) VALUES
(1, 1, 'Renata', 'cliente@hotmail.com', '123', 'Rua Padre Casimiro Quiroga', 'apt 123', '115', 'ImbuÃ­', 'Salvador', 'BA', 'Brasil', '41720400', 4, 'alguma observaÃ§Ã£o 2 '),
(2, 1, 'Marcus Antonio', 'md@hm.com', '31995847960', 'Rua SÃ£o SebastiÃ£o', '', '230', 'Centro', 'Piranga', 'MG', 'Brasil', '36480000', 3, 'ObservaÃ§Ã£o'),
(3, 1, 'Usuario', 'user@use.u', '', '', '', '', '', '', '', '', '', 3, ''),
(4, 1, 'Fulano', 'fulano@oi.com', '', '', '', '', '', '', '', '', '', 3, ''),
(5, 1, 'Cicrano', 'cicrano@oi.com', '', '', '', '', '', '', '', '', '', 3, ''),
(6, 1, 'Beltrano', 'beltrano@oi.com', '', '', '', '', '', '', '', '', '', 3, ''),
(7, 1, 'Arnaldo', 'arnaldo@oi.com', '', '', '', '', '', '', '', '', '', 3, ''),
(8, 1, 'JoÃ£o', 'joao@oi.com', '', '', '', '', '', '', '', '', '', 3, ''),
(9, 1, 'Maria', 'm@m.com', '', '', '', '', '', '', '', '', '', 3, ''),
(10, 1, 'Tereza', 't@t.com', '', '', '', '', '', '', '', '', '', 3, ''),
(11, 1, 'Juca', 'juca@uca.com', '', '', '', '', '', '', '', '', '', 3, ''),
(12, 1, 'juquinha', '', '', '', '', '', '', '', '', '', '', 3, ''),
(13, 1, 'Ronaldo', '', '', '', '', '', '', '', '', '', '', 3, ''),
(14, 1, 'JoÃ£o', '', '', '', '', '', '', '', '', '', '', 3, ''),
(15, 1, 'waguiner', '', '', '', '', '', '', '', '', '', '', 3, ''),
(16, 1, 'waguiner', '', '', '', '', '', '', '', '', '', '', 3, ''),
(17, 1, 'Cleiton', '', '', '', '', '', '', '', '', '', '', 3, ''),
(18, 1, 'Clebiiin', 'clebin@sopa.com', '40028922', 'Rua SebastiÃ£o Telles da Costa', '', '402', 'SÃ£o JoÃ£o', 'UbÃ¡', 'MG', 'Brasil', '36507122', 3, 'Trambiqueiro');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`) VALUES
(1, 'Empresa 123');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `quant` int(11) NOT NULL,
  `min_quant` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `name`, `price`, `quant`, `min_quant`, `id_company`) VALUES
(1, 'Produto de teste ', 4800.2, 7, 5, 1),
(6, 'FeijÃ£o', 10, 56, 50, 1),
(25, 'Cabelin', 40, 63, 60, 1),
(8, 'Suco', 20, 39, 30, 1),
(24, 'testando novamente', 12, 16, 12, 1),
(11, 'Sopa', 40, 44, 20, 1),
(12, 'ovo', 1, 100, 200, 1),
(13, 'lapis', 20, 50, 20, 1),
(14, 'mouse', 20, 50, 10, 1),
(15, 'garrafa', 10, 50, 100, 1),
(16, 'feijoada', 20, 46, 20, 1),
(17, 'sopa de macaco', 10, 20, 50, 1),
(18, 'queijo', 30, 20, 10, 1),
(19, 'caneca', 20, 20, 10, 1),
(20, 'ouro', 500, 20, 20, 1),
(21, 'produto bom', 20, 20, 20, 1),
(22, 'sukita', 20, 20, 20, 1),
(23, 'guitarra', 20, 21, 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_history`
--

DROP TABLE IF EXISTS `inventory_history`;
CREATE TABLE IF NOT EXISTS `inventory_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `action` varchar(3) NOT NULL,
  `date_action` datetime NOT NULL,
  `id_company` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory_history`
--

INSERT INTO `inventory_history` (`id`, `id_product`, `id_user`, `action`, `date_action`, `id_company`) VALUES
(1, 3, 1, 'add', '2020-06-02 16:38:38', 1),
(2, 4, 1, 'add', '2020-06-02 16:40:17', 1),
(3, 1, 1, 'edt', '2020-06-02 17:18:51', 1),
(4, 1, 1, 'edt', '2020-06-02 17:22:33', 1),
(5, 1, 1, 'edt', '2020-06-02 17:22:55', 1),
(6, 0, 1, 'add', '2020-06-02 17:26:42', 1),
(7, 0, 1, 'add', '2020-06-02 17:27:11', 1),
(8, 5, 1, 'add', '2020-06-02 17:28:32', 1),
(9, 2, 1, 'edt', '2020-06-02 17:40:16', 1),
(10, 2, 1, 'edt', '2020-06-02 17:40:23', 1),
(11, 5, 1, 'del', '2020-06-02 17:40:57', 1),
(12, 4, 1, 'del', '2020-06-02 17:41:01', 1),
(13, 3, 1, 'del', '2020-06-02 17:41:05', 1),
(14, 2, 1, 'del', '2020-06-02 17:41:06', 1),
(15, 6, 1, 'add', '2020-06-10 18:14:59', 1),
(16, 6, 1, 'dcs', '2020-06-16 16:49:00', 1),
(17, 1, 1, 'dcs', '2020-06-16 16:49:00', 1),
(18, 6, 1, 'dcs', '2020-06-16 16:50:03', 1),
(19, 1, 1, 'dcs', '2020-06-16 17:01:47', 1),
(20, 7, 1, 'add', '2020-06-18 18:05:41', 1),
(21, 8, 1, 'add', '2020-06-18 18:06:35', 1),
(22, 9, 1, 'add', '2020-06-18 18:06:38', 1),
(23, 10, 1, 'add', '2020-06-18 18:07:06', 1),
(24, 11, 1, 'add', '2020-06-18 18:09:23', 1),
(25, 12, 1, 'add', '2020-06-18 18:11:10', 1),
(26, 13, 1, 'add', '2020-06-18 18:11:36', 1),
(27, 14, 1, 'add', '2020-06-18 18:12:23', 1),
(28, 15, 1, 'add', '2020-06-18 18:12:56', 1),
(29, 6, 1, 'inc', '2020-06-18 19:29:07', 1),
(30, 7, 1, 'inc', '2020-06-18 19:32:20', 1),
(31, 1, 1, 'inc', '2020-06-18 19:34:20', 1),
(32, 16, 1, 'add', '2020-06-18 19:39:06', 1),
(33, 17, 1, 'add', '2020-06-18 19:40:33', 1),
(34, 6, 1, 'inc', '2020-06-18 19:41:28', 1),
(35, 18, 1, 'add', '2020-06-18 19:42:19', 1),
(36, 19, 1, 'add', '2020-06-18 19:43:52', 1),
(37, 20, 1, 'add', '2020-06-18 19:45:06', 1),
(38, 21, 1, 'add', '2020-06-18 19:45:46', 1),
(39, 22, 1, 'add', '2020-06-18 19:46:35', 1),
(40, 23, 1, 'add', '2020-06-18 19:48:24', 1),
(41, 23, 1, 'inc', '2020-06-18 19:48:29', 1),
(42, 7, 1, 'del', '2020-06-18 19:48:54', 1),
(43, 9, 1, 'del', '2020-06-18 19:48:56', 1),
(44, 10, 1, 'del', '2020-06-18 19:49:00', 1),
(45, 6, 1, 'inc', '2020-06-18 19:50:31', 1),
(46, 24, 1, 'add', '2020-06-18 19:50:58', 1),
(47, 24, 1, 'inc', '2020-06-18 19:51:04', 1),
(48, 6, 1, 'inc', '2020-06-18 20:03:24', 1),
(49, 16, 1, 'inc', '2020-06-19 17:57:29', 1),
(50, 11, 1, 'inc', '2020-06-19 17:57:29', 1),
(51, 8, 1, 'inc', '2020-06-19 17:57:29', 1),
(52, 16, 1, 'inc', '2020-06-19 17:58:17', 1),
(53, 11, 1, 'inc', '2020-06-19 17:58:17', 1),
(54, 8, 1, 'inc', '2020-06-19 17:58:17', 1),
(55, 6, 1, 'inc', '2020-06-19 17:58:25', 1),
(56, 8, 1, 'inc', '2020-06-19 17:59:08', 1),
(57, 6, 1, 'inc', '2020-06-19 17:59:55', 1),
(58, 6, 2, 'inc', '2020-06-25 22:24:51', 1),
(59, 8, 2, 'inc', '2020-06-25 22:24:51', 1),
(60, 25, 2, 'add', '2020-06-25 22:25:23', 1),
(61, 25, 2, 'inc', '2020-06-25 22:25:46', 1),
(62, 6, 1, 'dec', '2020-06-26 13:57:23', 1),
(63, 11, 1, 'dec', '2020-06-29 16:04:34', 1),
(64, 8, 1, 'dec', '2020-06-29 16:13:32', 1),
(65, 11, 1, 'dec', '2020-06-29 16:13:43', 1),
(66, 11, 1, 'dec', '2020-06-29 16:35:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permission_groups`
--

DROP TABLE IF EXISTS `permission_groups`;
CREATE TABLE IF NOT EXISTS `permission_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `params` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permission_groups`
--

INSERT INTO `permission_groups` (`id`, `id_company`, `name`, `params`) VALUES
(1, 1, 'Desenvolvedores', '1,2,9,8,10,11,12,13,14,15,16,17'),
(4, 1, 'Testador', '1');

-- --------------------------------------------------------

--
-- Table structure for table `permission_params`
--

DROP TABLE IF EXISTS `permission_params`;
CREATE TABLE IF NOT EXISTS `permission_params` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permission_params`
--

INSERT INTO `permission_params` (`id`, `id_company`, `name`) VALUES
(1, 1, 'logout'),
(2, 1, 'permissions_view'),
(9, 1, 'clients_view'),
(8, 1, 'users_view'),
(10, 1, 'clients_edit'),
(11, 1, 'inventory_view'),
(12, 1, 'inventory_add'),
(13, 1, 'inventory_edit'),
(14, 1, 'sales_view'),
(15, 1, 'sales_edit'),
(16, 1, 'purchases_view'),
(17, 1, 'report_view');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

DROP TABLE IF EXISTS `purchases`;
CREATE TABLE IF NOT EXISTS `purchases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `date_purchase` datetime NOT NULL,
  `total_price` float NOT NULL,
  `id_company` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `id_user`, `date_purchase`, `total_price`, `id_company`) VALUES
(25, 2, '2020-06-25 22:25:46', 520, 1),
(24, 2, '2020-06-25 22:25:23', 0, 1),
(22, 1, '2020-06-19 17:59:55', 140, 1),
(21, 1, '2020-06-19 17:59:08', 120, 1),
(20, 1, '2020-06-19 17:58:25', 40, 1),
(19, 1, '2020-06-19 17:58:17', 260, 1),
(23, 2, '2020-06-25 22:24:51', 450, 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchases_products`
--

DROP TABLE IF EXISTS `purchases_products`;
CREATE TABLE IF NOT EXISTS `purchases_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_purchase` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quant` int(11) NOT NULL,
  `purchase_price` float NOT NULL,
  `id_company` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchases_products`
--

INSERT INTO `purchases_products` (`id`, `id_purchase`, `id_product`, `quant`, `purchase_price`, `id_company`) VALUES
(7, 19, 16, 3, 20, 1),
(8, 19, 11, 4, 40, 1),
(9, 19, 8, 2, 20, 1),
(10, 20, 6, 4, 10, 1),
(11, 21, 8, 6, 20, 1),
(12, 22, 6, 14, 10, 1),
(13, 23, 6, 15, 10, 1),
(14, 23, 8, 15, 20, 1),
(15, 25, 25, 13, 40, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_sale` datetime NOT NULL,
  `total_price` float NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `id_company`, `id_client`, `id_user`, `date_sale`, `total_price`, `status`) VALUES
(1, 1, 9, 1, '2020-06-12 19:52:26', 12.22, 1),
(2, 1, 1, 1, '2020-06-12 20:01:40', 20, 1),
(3, 1, 10, 1, '2020-06-16 16:01:45', 19270.8, 0),
(4, 1, 2, 1, '2020-06-16 16:49:00', 48042, 1),
(5, 1, 2, 1, '2020-06-16 16:50:03', 60, 1),
(6, 1, 9, 1, '2020-06-16 16:53:57', 0, 0),
(7, 1, 5, 1, '2020-06-16 17:01:47', 28801.2, 0),
(8, 1, 1, 1, '2020-06-26 13:57:23', 250, 1),
(9, 1, 1, 1, '2020-06-29 16:04:34', 40, 0),
(10, 1, 2, 1, '2020-06-29 16:13:32', 120, 0),
(11, 1, 2, 1, '2020-06-29 16:13:43', 80, 1),
(12, 1, 5, 1, '2020-06-29 16:35:58', 40, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sales_products`
--

DROP TABLE IF EXISTS `sales_products`;
CREATE TABLE IF NOT EXISTS `sales_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sale` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quant` int(11) NOT NULL,
  `sale_price` float NOT NULL,
  `id_company` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales_products`
--

INSERT INTO `sales_products` (`id`, `id_sale`, `id_product`, `quant`, `sale_price`, `id_company`) VALUES
(1, 3, 6, 7, 10, 1),
(2, 3, 1, 4, 4800.2, 1),
(3, 4, 6, 4, 10, 1),
(4, 4, 1, 10, 4800.2, 1),
(5, 5, 6, 6, 10, 1),
(6, 6, 6, 1, 10, 1),
(7, 7, 1, 6, 4800.2, 1),
(8, 8, 6, 25, 10, 1),
(9, 9, 11, 1, 40, 1),
(10, 10, 8, 6, 20, 1),
(11, 11, 11, 2, 40, 1),
(12, 12, 11, 1, 40, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `id_group` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_company`, `email`, `password`, `id_group`) VALUES
(1, 1, 'admin@empresa123.com.br', '202cb962ac59075b964b07152d234b70', 1),
(2, 1, 'jao@teste.com', '202cb962ac59075b964b07152d234b70', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
