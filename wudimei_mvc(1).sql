-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-12-31 08:06:41
-- 服务器版本： 10.0.16-MariaDB-log
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wudimei_mvc`
--

-- --------------------------------------------------------

--
-- 表的结构 `w_blog`
--

CREATE TABLE `w_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `w_blog`
--

INSERT INTO `w_blog` (`id`, `title`, `content`, `created_at`) VALUES
(1, 'ha ha 2', 'abc2', '2016-08-30 02:00:13'),
(2, 'test', 'test', '2016-04-22 13:27:00'),
(3, 'test2', 'test2', '2016-04-22 13:27:00'),
(4, 'test3', 'test3', '2016-04-22 13:27:00'),
(5, 'test4', 'test4', '2016-04-22 13:27:00'),
(6, 'test5', 'test5', '2016-04-22 13:27:00'),
(7, 'ha ha ', 'abc', '2016-04-30 16:02:02'),
(8, 'happy new year2', 'abc', '2016-04-30 16:02:04'),
(9, 'ha ha ', 'abc', '2016-04-30 16:02:14'),
(14, 'yang qing-rong', 'yang', '2016-05-09 03:06:22'),
(15, 'ha ha ', 'abc', '2016-05-14 13:44:43'),
(16, 'ha ha ', 'abc', '2016-05-24 17:11:18'),
(17, 'ha ha ', 'abc', '2016-08-06 08:39:18'),
(18, 'ha ha ', 'abc', '2016-08-06 09:54:47'),
(19, 'ha ha ', 'abc', '2016-08-08 03:25:35'),
(20, 'ha ha ', 'abc', '2016-08-08 03:31:24'),
(0, 'ha ha ', 'abc', '2016-08-12 06:16:15'),
(0, 'ha ha ', 'abc', '2016-08-30 01:59:49');

-- --------------------------------------------------------

--
-- 表的结构 `w_password_resets`
--

CREATE TABLE `w_password_resets` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(62) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `w_password_resets`
--

INSERT INTO `w_password_resets` (`id`, `user_id`, `token`, `created_at`) VALUES
(1, 5, '3b74ddd10a22807ae5c4d5b89e23c43f', '2016-10-06 07:05:52'),
(2, 5, '4971db83f65073a8f604780add73d34f', '2016-10-06 07:08:58'),
(3, 5, '45f0b7d67420a4756f14b81e19f7d327', '2016-10-06 07:09:34'),
(4, 5, '8b9acec08f5e930d9c61a2a2c9de9a84', '2016-10-06 07:09:48'),
(5, 5, 'c214500383110c9fed1e304242a72d32', '2016-10-06 07:10:06'),
(6, 5, '0d0e9ab2422addd94c28a04ce736cc43', '2016-10-06 07:12:11'),
(7, 5, 'd4f0d89c23d2aca5760b3abf8bac619b', '2016-10-06 07:14:42'),
(8, 5, '5b543c1685c861de6d5461a923e8ccfb', '2016-10-06 07:15:26'),
(9, 5, '87e51c7071d1e90a14a41996d539df19', '2016-10-06 07:15:39'),
(10, 5, '5ffe1b1dc47f3470447c28b2cf6e8eed', '2016-10-06 07:16:50'),
(11, 5, 'fcc3c448b732c6a62129786cad6954bc', '2016-10-06 07:17:41'),
(12, 5, 'c68fa23cfbed5a9874ef59c458890cb8', '2016-10-06 07:17:50'),
(13, 5, '6e169535e2f77551f24badf091b28d9d', '2016-10-06 07:18:14'),
(14, 5, 'b3af58140e9019b185ad22548b251cda', '2016-10-06 07:18:49'),
(15, 5, 'eeda6dfcc7eb78061cac8d05eb10d0ab', '2016-10-06 07:19:33'),
(16, 5, 'b6fc844cb41213fd9053a22594b2830f', '2016-10-06 07:20:14'),
(18, 5, '6860a5f5af15b0fd5a5d5738a594d385', '2016-10-06 07:24:17'),
(19, 5, '4e81e16d50efdab29a9d39968ea8e41e', '2016-10-06 07:24:59'),
(20, 5, '435739f2cc84127a7a457a5168af6f01', '2016-10-06 09:04:03'),
(21, 4, '6e52c29180512325d232514719ebb2b8', '2016-12-14 08:50:13');

-- --------------------------------------------------------

--
-- 表的结构 `w_permissions`
--

CREATE TABLE `w_permissions` (
  `id` int(11) NOT NULL,
  `code` varchar(30) NOT NULL DEFAULT ' ',
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `w_permissions`
--

INSERT INTO `w_permissions` (`id`, `code`, `name`, `description`) VALUES
(14, 'permission.read', '读取权限', 'permission.read'),
(15, 'permission.create', 'permission.create', 'permission.create'),
(16, 'permission.update', 'permission.update', 'permission.update'),
(17, 'permission.delete', 'permission.delete', 'permission.delete'),
(18, 'user.read', 'user.read', 'user.read'),
(19, 'user.create', 'user.create', 'user.create'),
(20, 'user.update', 'user.update', 'user.update'),
(21, 'user.delete', '删除用户', 'user.delete'),
(22, 'user_group.read', 'user_group.read', 'user_group.read'),
(23, 'user_group.create', '创建用户组', 'user_group.create'),
(24, 'user_group.update', 'user_group.update', 'user_group.update'),
(25, 'user_group.delete', 'user_group.delete', 'user_group.delete'),
(26, 'setting.read', 'setting.read', 'setting.read'),
(27, 'setting.create', 'setting.create', 'setting.create'),
(28, 'setting.update', 'setting.update', 'setting.update'),
(29, 'setting.delete', 'setting.delete', 'setting.delete'),
(30, 'user_group.read2', 'user_group.read2蛇精', ''),
(31, 'user_group.permission', 'user_group.permission', ''),
(32, 'user.modifyPassword', 'user.modifyPassword', '');

-- --------------------------------------------------------

--
-- 表的结构 `w_settings`
--

CREATE TABLE `w_settings` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT ' ',
  `value` text NOT NULL,
  `label` varchar(50) NOT NULL DEFAULT ' ',
  `tip` varchar(255) NOT NULL DEFAULT ' ',
  `type` varchar(50) NOT NULL DEFAULT 'text',
  `properties` text,
  `setting_group_id` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `w_settings`
--

INSERT INTO `w_settings` (`id`, `name`, `value`, `label`, `tip`, `type`, `properties`, `setting_group_id`) VALUES
(1, 'SITE.NAME', '深圳市无敌美电子商务商行2', 'setting.site_name', ' ', 'text', '{"default":"","size":50,"class":"form-control"}', 1),
(2, 'SITE.ADDRESS', '广东省深圳市', 'setting.address', ' ', 'textarea', '{"class":"form-control"}', 1),
(4, 'SITE.ZIPCODE', '518100', 'setting.zip_code', ' ', 'text', '{"default":"","class":"form-control"}', 1),
(5, 'SITE.CELLPHONE', '13714715608', 'setting.cellphone', ' ', 'text', '{"default":"","class":"form-control"}', 1),
(6, 'SITE.FAX', '075500000000', 'setting.fax', ' ', 'text', '{"default":"","class":"form-control"}', 1),
(7, 'SITE.CONTACTMAN', '杨庆荣', 'setting.contact_man', ' ', 'text', '{"default":"","class":"form-control"}', 1),
(8, 'SEO.KEYWORDS', '关键字1,关键字', 'setting.keywords', '用半角逗号隔开', 'textarea', '{"default":"","class":"form-control"}', 2),
(9, 'SEO.DESCRIPTION', '描述，220个字符以内。22', 'setting.description', ' ', 'textarea', '{"default":"","class":"form-control"}', 2),
(10, 'SITE.URL_PREFIX', 'http://wudimeishop.anli.wudimei.com', 'url_prefix', ' ', 'text', '{"default":"","class":"form-control"}', 1),
(12, 'SITE.QQ', '290359552,杨庆荣\r\n214341,张', 'qq_numbers', '格式：“QQ号,昵称”，一行一个。', 'textarea', '{"default":"","class":"form-control"}', 1);

-- --------------------------------------------------------

--
-- 表的结构 `w_setting_groups`
--

CREATE TABLE `w_setting_groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `w_setting_groups`
--

INSERT INTO `w_setting_groups` (`id`, `group_name`) VALUES
(1, 'setting.groupname_website'),
(2, 'setting.groupname_SEO');

-- --------------------------------------------------------

--
-- 表的结构 `w_users`
--

CREATE TABLE `w_users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT ' ',
  `email` varchar(50) DEFAULT ' ',
  `password` varchar(60) DEFAULT ' ',
  `created_at` datetime NOT NULL,
  `remember_token` varchar(62) NOT NULL DEFAULT ' ',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '0inactive1active2baned'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `w_users`
--

INSERT INTO `w_users` (`id`, `username`, `email`, `password`, `created_at`, `remember_token`, `status`) VALUES
(4, 'yqr2', 'yqr2223@wudimei.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', 'cf0675283426ad3f216dac6b4ebb95e3', 0);

-- --------------------------------------------------------

--
-- 表的结构 `w_users_groups`
--

CREATE TABLE `w_users_groups` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `w_users_groups`
--

INSERT INTO `w_users_groups` (`id`, `user_id`, `user_group_id`) VALUES
(6, 4, 2),
(7, 4, 1),
(8, 5, 3);

-- --------------------------------------------------------

--
-- 表的结构 `w_user_groups`
--

CREATE TABLE `w_user_groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `w_user_groups`
--

INSERT INTO `w_user_groups` (`id`, `group_name`) VALUES
(1, 'user'),
(2, 'admin'),
(3, 'test');

-- --------------------------------------------------------

--
-- 表的结构 `w_user_group_permissions`
--

CREATE TABLE `w_user_group_permissions` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `w_user_group_permissions`
--

INSERT INTO `w_user_group_permissions` (`id`, `group_id`, `permission_id`) VALUES
(78, 1, 14),
(79, 1, 16),
(80, 1, 17),
(81, 1, 18),
(82, 1, 20),
(83, 1, 21),
(84, 1, 26),
(85, 1, 27),
(86, 1, 28),
(74, 2, 21),
(75, 2, 22),
(76, 2, 24),
(77, 2, 28),
(59, 3, 14),
(60, 3, 15),
(61, 3, 16),
(62, 3, 20),
(63, 3, 23),
(64, 3, 26),
(65, 3, 27),
(66, 3, 28);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `w_password_resets`
--
ALTER TABLE `w_password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `w_permissions`
--
ALTER TABLE `w_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `w_settings`
--
ALTER TABLE `w_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `w_setting_groups`
--
ALTER TABLE `w_setting_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `w_users`
--
ALTER TABLE `w_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `w_users_groups`
--
ALTER TABLE `w_users_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `w_user_groups`
--
ALTER TABLE `w_user_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `w_user_group_permissions`
--
ALTER TABLE `w_user_group_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `group_id` (`group_id`,`permission_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `w_password_resets`
--
ALTER TABLE `w_password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- 使用表AUTO_INCREMENT `w_permissions`
--
ALTER TABLE `w_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- 使用表AUTO_INCREMENT `w_settings`
--
ALTER TABLE `w_settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- 使用表AUTO_INCREMENT `w_setting_groups`
--
ALTER TABLE `w_setting_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `w_users`
--
ALTER TABLE `w_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `w_users_groups`
--
ALTER TABLE `w_users_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `w_user_groups`
--
ALTER TABLE `w_user_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `w_user_group_permissions`
--
ALTER TABLE `w_user_group_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
