-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-10-06 09:11:30
-- 服务器版本： 10.0.16-MariaDB-log
-- PHP Version: 7.0.0

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
(20, 5, '435739f2cc84127a7a457a5168af6f01', '2016-10-06 09:04:03');

-- --------------------------------------------------------

--
-- 表的结构 `w_permissions`
--

CREATE TABLE `w_permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `w_settings`
--

INSERT INTO `w_settings` (`id`, `name`, `value`, `label`, `tip`, `type`, `properties`, `setting_group_id`) VALUES
(1, 'SITE.NAME', '深圳市无敌美电子商务商行3d', '公司名称', ' ', 'text', '{"default":"","size":50,"class":"form-control"}', 1),
(2, 'SITE.ADDRESS', '广东省深圳市d', '地址', ' ', 'textarea', '{"class":"form-control"}', 1),
(4, 'SITE.ZIPCODE', '518100', '邮政编码', ' ', 'text', '{"default":"","class":"form-control"}', 1),
(8, 'SEO.KEYWORDS', '关键字1,关键字', '关键字:', '用半角逗号隔开', 'textarea', '{"default":"","class":"form-control"}', 2),
(5, 'SITE.CELLPHONE', '13714715608', '手机', ' ', 'text', '{"default":"","class":"form-control"}', 1),
(6, 'SITE.FAX', '075500000000', '传真', ' ', 'text', '{"default":"","class":"form-control"}', 1),
(7, 'SITE.CONTACTMAN', '杨庆荣', '联系人', ' ', 'text', '{"default":"","class":"form-control"}', 1),
(9, 'SEO.DESCRIPTION', '描述，220个字符以内。22', '描述:', ' ', 'textarea', '{"default":"","class":"form-control"}', 2),
(10, 'SITE.URL_PREFIX', 'http://wudimeishop.anli.wudimei.com', '网址前缀', ' ', 'text', '{"default":"","class":"form-control"}', 1),
(11, 'LINKS.IMAGE_SIZE', '80,404', '首页友情链接图片的尺寸', '格式“宽,高”', 'text', '{"default":"","class":"form-control"}', 3),
(12, 'SITE.QQ', '290359552,杨庆荣\r\n214341,张', '网站首页QQ面板', '格式：“QQ号,昵称”，一行一个。', 'textarea', '{"default":"","class":"form-control"}', 1),
(13, 'MAIL.TYPE', 'mail', '邮件发送方式', ' ', 'radios', '{"default":"","class":"form-control"}', 4),
(14, 'MAIL.SMTP_SSL', 'yes', '是否使用ssl', ' ', 'radios', '{\r\n  "default":"no", \r\n  "options": \r\n   [ \r\n     {"value": "yes" ,"text":"setting.Yes"},\r\n     {"value": "no" ,"text":"setting.No"} \r\n   ] ,\r\n   "class":"radios"\r\n}', 4),
(15, 'MAIL.SMTP_HOST', 'smtp.gmail.com', 'SMTP主机名或IP', ' ', 'text', '{"default":"","class":"form-control"}', 4),
(16, 'MAIL.SMTP_PORT', '465', 'SMTP主机端口', '一般是25,ssl的是465...', 'text', '{"default":"","class":"form-control"}', 4),
(17, 'MAIL.SMTP_USERNAME', 'fsdaf', 'SMTP用户名', '有的要求要加上@***.com的后缀', 'text', '{"default":"","class":"form-control"}', 4),
(18, 'MAIL.SMTP_PASSWORD', 'f', 'SMTP密码', ' ', 'password', '{"default":"","class":"form-control"}', 4),
(19, 'MAIL.SMTP_FROM', '', 'SMTP发件人邮箱', '一般要和用户名相同', 'text', '{"default":"","class":"form-control"}', 4),
(20, 'MAIL.SMTP_DEBUG', 'no', 'SMTP调试', '开发环境时可开启，部署后建议关闭', 'radios', '{"default":"","class":"form-control"}', 4),
(23, 'GUESTBOOK.REJECT_BAD_WORDS', 'yes', '拒绝接受包含敏感词的留言', '关闭则什么都可以提交', 'radios', '{"default":"","class":"form-control"}', 5),
(21, 'GUESTBOOK.ENABLE_EMAIL_NOTIFICATION', 'yes', '收到留言自动邮件通知', ' ', 'radios', '{"default":"","class":"form-control"}', 5),
(22, 'FILTER.BAD_WORDS', '法轮功,法轮大法,色情,赌博,六合彩', '敏感词关键字', '用半角逗号“,”隔开', 'textarea', '{"default":"","class":"form-control"}', 6),
(24, 'GUESTBOOK.RECEIVER_EMAIL', 'yaqy@qq.com', '留言提醒的接收邮箱', ' ', 'text', '{"default":"","class":"form-control"}', 5),
(25, 'ORDER.ENABLE_NOTIFYING_ADMIN', 'no', '有订单通知员工', ' ', 'radios', '{"default":"" }', 7),
(26, 'ORDER.EMAILS_FOR_NOTIFICATION', 'yaqy@qq.com,290359552@qq.com', '管理员的电子邮件', '多个请用半角逗号“,”隔开', 'textarea', '{"default":"","class":"form-control"}', 7),
(30, 'admin.email', '****@wudimei.com', 'Administrator\'s email', 'please enter an email address', 'text', '{"default":"","size":50,"class":"form-control"}', 3),
(27, 'hobbies3', 'drink', '爱好', '爱好', 'select', '{\r\n  "default": ["eat","drink"],\r\n  "options" :[\r\n   {"value" : "eat", "text":"eat Food"},\r\n   {"value": "drink", "text": "drunk"},\r\n   {"value": "ridding", "text": "setting.ridding"} \r\n  ],\r\n  "class":"form-control"\r\n}', 0),
(28, 'hobbies', 'eat,drink,ridding', '爱好', '爱好', 'checkboxes', '{\r\n  "default": ["eat","drink"],\r\n  "options" :[\r\n   {"value" : "eat", "text":"eat Food"},\r\n   {"value": "drink", "text": "drunk"},\r\n   {"value": "ridding", "text": "setting.ridding"} \r\n  ]\r\n}', 0),
(29, 'hobbies4', 'eat,drink', '爱好', '爱好', 'select', '{\r\n  "default": ["eat","drink"],\r\n  "multiple":"multiple",\r\n  "options" :[\r\n   {"value" : "eat", "text":"eat Food"},\r\n   {"value": "drink", "text": "drunk"},\r\n   {"value": "ridding", "text": "setting.ridding"} \r\n  ],\r\n  "class":"form-control"\r\n}', 0),
(31, 'admin.email', '****@wudimei.com3', 'Administrator\'s email', 'please enter an email address', 'text', '{"default":"","size":50,"class":"form-control"}', 3),
(32, 'admin.email', '****@wudimei.com', 'Administrator\'s email', 'please enter an email address', 'text', '{"default":"","size":50,"class":"form-control"}', 3);

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
(1, 'user'),
(2, 'user'),
(3, 'user'),
(4, 'user'),
(5, 'user'),
(6, 'user'),
(7, 'user'),
(8, 'user'),
(9, 'user'),
(10, 'user'),
(11, 'user');

-- --------------------------------------------------------

--
-- 表的结构 `w_users`
--

CREATE TABLE `w_users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT ' ',
  `email` varchar(50) DEFAULT ' ',
  `password` varchar(60) DEFAULT ' ',
  `user_group_id` int(4) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `remember_token` varchar(62) NOT NULL DEFAULT ' ',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '0inactive1active2band'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `w_users`
--

INSERT INTO `w_users` (`id`, `username`, `email`, `password`, `user_group_id`, `created_at`, `remember_token`, `status`) VALUES
(4, 'yqr2', 'yqr2@wudimei.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '0000-00-00 00:00:00', 'd3545fb4ee1850deeff82d53ddc21961', 0),
(5, 'yqr3', 'yaqy@qq.com', 'e99a18c428cb38d5f260853678922e03', 1, '0000-00-00 00:00:00', 'a34cfcd2bc3051cd6138cd2c4c3e8758', 0);

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
(2, 'admin');

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
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `w_user_groups`
--
ALTER TABLE `w_user_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `w_user_group_permissions`
--
ALTER TABLE `w_user_group_permissions`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `w_settings`
--
ALTER TABLE `w_settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- 使用表AUTO_INCREMENT `w_setting_groups`
--
ALTER TABLE `w_setting_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- 使用表AUTO_INCREMENT `w_users`
--
ALTER TABLE `w_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `w_user_groups`
--
ALTER TABLE `w_user_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `w_user_group_permissions`
--
ALTER TABLE `w_user_group_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
