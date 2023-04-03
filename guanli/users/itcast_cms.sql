-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2022-11-11 11:16:22
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `itcast_cms`
--

-- --------------------------------------------------------

--
-- 表的结构 `resources_text`
--

CREATE TABLE `resources_text` (
  `id` int(12) NOT NULL,
  `name1` varchar(255) DEFAULT NULL,
  `me` varchar(255) DEFAULT NULL,
  `number` float(24,1) DEFAULT NULL,
  `times` date DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `film_time` varchar(50) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `name2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `resources_text`
--

INSERT INTO `resources_text` (`id`, `name1`, `me`, `number`, `times`, `text`, `film_time`, `photo`, `name2`) VALUES
(1, '带你学', 'C语言', 310.1, '2020-07-15', 'C语言编程学习', '118:56:37', 'image/resources_img1.webp', '带你飞带你拿下'),
(2, '程序设计知识点精讲（全集）', 'C语言', 27.4, '2021-01-27', '菜鸡佳作', '21:17:55', 'image/resources_img2.webp', NULL),
(3, '小甲鱼', 'C语言', 112.3, '2020-02-26', 'study', '25:55:05', 'image/resources_img3.webp', '教程（新版全集）'),
(4, '期末速成期末复习 ', 'C', 1.0, '2021-12-07', '斩赤红者', '02:24:40', 'image/resources_img4.webp', NULL),
(5, '编程', 'C语言', 310.5, '2020-07-15', 'C语言编程学习', '118:56:37', 'image/resources_img5.webp', '程序设计教程'),
(6, '两分钟拉开差距！当你经常使用', 'C语言', 2.9, '2021-11-27', '爱敲代码的小妹妹', '02:34', 'image/resources_img6.webp', '中这种最经典10'),
(7, '2021.21大学', 'C语言', 13.4, '2021-06-17', '陪看书的小白', '15:31:04', 'image/resources_img7.webp', '程序设计（谭浩强第五版）'),
(8, '一周搞定--', 'C', 32.8, '2017-08-20', '一只弱狗', '10:40:10', 'image/resources_img8.webp', '带你冲刺'),
(9, '中“最难啃的\'三大硬骨头”，你啃得动哪一块？？', 'C语言', 1.1, '2021-11-26', '小熊努力再努力', '03:30:12', 'image/resources_img9.webp', NULL),
(10, '编程2021', 'C语言', 68.4, '2021-08-25', '大学计算机学院', '142:52:38', 'image/resources_img10.webp', '零基础视频教程入门初学'),
(11, '黑马程序员基础教程源码，笔记，软件，案例', 'C语言', 64.0, '2018-07-10', '黑马程序员', '30:36:37', 'image/resources_img11.webp', NULL),
(12, '为什么我感觉学了', 'C语言', 2.8, '2021-11-18', '一个扎心的小指针', '02:39', 'image/resources_img12.webp', '只能写出黑框框程序和数学题'),
(13, '四个小时讲完、不挂科', 'C语言', 78.0, '2021-12-09', '爱讲爱说', '4:16:14', 'image/resources_img13.webp', NULL),
(14, '程序设计 知识点精讲（全集） 从零开始手把手教你编程', 'C语言', 27.5, '2021-01-27', 'csl_04', '21:17:55', 'image/resources_img14.webp', NULL),
(15, '计算机专业必看，让你期末轻松通过考试', 'C语言', 1.7, '2021-12-09', '爱编程的小姐姐', '03:39:54', 'image/resources_img15.webp', NULL),
(16, '一天掌握C++', 'C++', 34.5, '2020-12-24', 'alll_yes', '22:24:34', 'image/resources_img_C++1.webp', NULL),
(17, '程序设计期末3小时速成课，不挂科！！', 'C语言', 7.3, '2021-02-26', '高数帮', '03:10:40', 'image/resources_img16.webp', NULL),
(18, '程序设计大全，秒拿下', 'C语言', 40.4, '2021-05-29', '大学考试加油站', '03:10:44', 'image/resources_img17.webp', NULL),
(19, '经典100题（源代码可下载）', 'C语言', 8.5, '2020-09-08', 'C语言技术网', '01:31:48', 'image/resources_img18.webp', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `topic`
--

CREATE TABLE `topic` (
  `id` int(12) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `difficulty` varchar(255) DEFAULT NULL,
  `percent` float(50,1) DEFAULT '0.0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `topic`
--

INSERT INTO `topic` (`id`, `category`, `title`, `difficulty`, `percent`) VALUES
(10001, 'C', 'C语言程序设计基础', '入门', 99.0),
(10002, 'C', 'C语言函数', '暂无评定', 85.5),
(10003, 'C++', 'C++基础知识', '入门', 75.8),
(10004, 'C/C++', 'C++与C', '暂无评定', 78.0),
(10005, 'C', 'C语言程序设计基础', '普及', 80.3),
(10006, 'C++', 'C++面向对象', '掌握-', 75.9),
(10007, 'C', '请编写一个 C 函数，该函数给出一个字节中被置 1 的位的个数。', '熟练+', 65.4),
(10008, 'C', '2020年蓝桥杯比赛题', '暂无评定', 40.2),
(10009, 'C++', '2020年传智比赛题', '暂无评定', 40.0),
(10010, 'C++', '2021年蓝桥杯比赛题', '暂无评定', 39.6),
(10011, 'C', '2021年传智比赛题', '暂无评定', 39.8),
(10012, 'C', '结构和共同体的知识考查', '普及', 77.9),
(10013, 'C++', '类、对象、引用的知识点汇总考查', '掌握', 82.4),
(10014, 'C++', '文件操作知识汇总测试', '掌握+', 0.0),
(10027, 'C', '2020年C语言试题', '熟练+', 0.0),
(10028, 'C++', 'C++知识整合考查', '暂无评定', 0.0),
(10029, 'C/C++', 'C/C++ 2021年试题汇总', '熟练+', 0.0),
(10030, 'C++', 'C++面向对象知识考查', '入门', 0.0),
(10032, 'C/C++', '2019年C/C++蓝桥杯比赛真题', '暂无评定', 0.0);

-- --------------------------------------------------------

--
-- 表的结构 `t_cj`
--

CREATE TABLE `t_cj` (
  `id` int(12) NOT NULL,
  `name` varchar(8) CHARACTER SET latin1 DEFAULT NULL,
  `cj` varchar(8) CHARACTER SET latin1 DEFAULT NULL,
  `topic_id` varchar(8) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `t_cj`
--

INSERT INTO `t_cj` (`id`, `name`, `cj`, `topic_id`) VALUES
(5, 'xxx', '20', NULL),
(4, 'xxx', '20', NULL),
(6, 'xxx', '20', NULL),
(7, 'xxx', '20', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `t_code`
--

CREATE TABLE `t_code` (
  `id` int(12) NOT NULL,
  `text_topic` text,
  `text_result` text,
  `topic_id` int(12) DEFAULT NULL COMMENT '试题编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `t_dan`
--

CREATE TABLE `t_dan` (
  `id` tinyint(4) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer_a` varchar(255) DEFAULT NULL,
  `answer_b` varchar(255) DEFAULT NULL,
  `answer_c` varchar(255) DEFAULT NULL,
  `answer_d` varchar(255) DEFAULT NULL,
  `answer` varchar(8) DEFAULT NULL,
  `topic_id` int(12) DEFAULT NULL COMMENT '套题编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_dan`
--

INSERT INTO `t_dan` (`id`, `question`, `answer_a`, `answer_b`, `answer_c`, `answer_d`, `answer`, `topic_id`) VALUES
(1, '下列选项中，不是URL地址中所包含的信息是（ ）。', '主机名', '端口号', '网络协议', '软件版本', 'D', 10001),
(8, 'C语言是什么语言？', '高级语言', '编程语言', '低级语言', '最不好的语言', 'A', 10001),
(9, '在C程序中，main函数的位置？', '必须在最开始', '必须在系统调用的库函数的后面', '可以任意位置', '必须在最后', 'C', 10001),
(14, '在C++中用（）能够实现将参数值带回。', '数组', '指针', '引用', '上述ABC都可以', 'D', 10003);

-- --------------------------------------------------------

--
-- 表的结构 `t_duo`
--

CREATE TABLE `t_duo` (
  `id` tinyint(4) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer_a` varchar(100) DEFAULT NULL,
  `answer_b` varchar(100) DEFAULT NULL,
  `answer_c` varchar(100) DEFAULT NULL,
  `answer_d` varchar(100) DEFAULT NULL,
  `answer` varchar(20) DEFAULT NULL,
  `topic_id` int(12) DEFAULT NULL COMMENT '套题编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_duo`
--

INSERT INTO `t_duo` (`id`, `question`, `answer_a`, `answer_b`, `answer_c`, `answer_d`, `answer`, `topic_id`) VALUES
(1, '下列选项中，可以用来操作数组的运算符是（ ）。', '联合 +', '自增 ++', '相等 ==', '全等 ===', 'ACD', 10001),
(2, '下列选项中，可以作为PHP的输出语句的是（ ）。', 'echo', 'var_dump', 'print_r', '以上答案都不正确', 'ABC', 10002),
(6, '以下叙述正确的是（）。', 'C语言严格区别大小写英文字母', 'C语言用\";\"作为语句分隔符', 'C程序书写格式自由，一行内可以写几个语句，一个语句也可以写在几行上', '可以使用/*...*/对C程序中的任何部分作注释', 'ABCD', 10001),
(10, '下列描述正确的是：', '在创建对象前，静态成员不存在', '动态成员是类的成员', '静态成员不能是虚函数', '静态成员函数不能直接访问非静态成员', 'BCD', 10003);

-- --------------------------------------------------------

--
-- 表的结构 `t_panduan`
--

CREATE TABLE `t_panduan` (
  `id` tinyint(4) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(8) DEFAULT NULL,
  `topic_id` int(12) DEFAULT NULL COMMENT '试题编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_panduan`
--

INSERT INTO `t_panduan` (`id`, `question`, `answer`, `topic_id`) VALUES
(1, '使用PHP写好的程序，在Linux和Windows平台上都可以运行。', 'yes', 10001),
(2, 'PHP可以支持MySQL数据库，但不支持其它的数据库。', 'no', 10002),
(3, 'C语言是高级语言。', 'yes', 10003),
(4, '在C语言中变量不定义可以直接使用。', 'no', 10001),
(5, 'C语言具有简洁明了的特点。', 'yes', 10001);

-- --------------------------------------------------------

--
-- 表的结构 `t_tiankong`
--

CREATE TABLE `t_tiankong` (
  `id` int(12) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `topic_id` int(12) DEFAULT NULL COMMENT '试题编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_tiankong`
--

INSERT INTO `t_tiankong` (`id`, `question`, `answer`, `topic_id`) VALUES
(1, 'C语言是', '高级语言', 10001),
(3, 'C语言中非空的基本数据类型包括', '整型,实型,字符类型,', 10001),
(4, 'C语言中非空的基本数据类型包括', 'aa', 10001),
(5, 'C语言中非空的基本数据类型包括', 'bb', 10001),
(6, 'C语言中非空的基本数据类型包括', 'dd', 10001);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `name` varchar(12) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(8) CHARACTER SET latin1 DEFAULT NULL,
  `limits` varchar(4) CHARACTER SET latin1 DEFAULT NULL,
  `personcode` varchar(18) CHARACTER SET latin1 DEFAULT NULL,
  `passno` varchar(12) CHARACTER SET utf8 DEFAULT NULL,
  `photo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `limits`, `personcode`, `passno`, `photo`) VALUES
(2, 'jj', '1234', '2', '440886723511557656', '123674486343', NULL),
(3, 'xx', '12345', '3', '440886723511557658', '123678686343', NULL),
(5, 'xxx', '131313', '1', '347345782742752311', '22585688246', 'student/微信图片_20211113141051.jpg'),
(6, 'ccc', '44444', '1', '347345782742754144', '225856882468', 'student/微信图片_20211113141125.jpg'),
(22, 'xiaofu', '1224', '3', '347345782742662415', '22585688223', 'teacher/微信图片_20211013202302.jpg'),
(24, 'dff', '335', '3', '456723547315252514', '22585688256', 'teacher/8626377902_1424725251.jpg'),
(25, 'xiaoxia', '1224', '2', '347345782743386978', '2258568888', 'administrators/微信图片_20211013202849.jpg'),
(26, 'nini', '212121', '1', '347345782743469607', '22585688233', '');

--
-- 转储表的索引
--

--
-- 表的索引 `resources_text`
--
ALTER TABLE `resources_text`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `t_cj`
--
ALTER TABLE `t_cj`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `t_code`
--
ALTER TABLE `t_code`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `t_dan`
--
ALTER TABLE `t_dan`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `t_duo`
--
ALTER TABLE `t_duo`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `t_panduan`
--
ALTER TABLE `t_panduan`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `t_tiankong`
--
ALTER TABLE `t_tiankong`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personcode` (`personcode`) USING BTREE;

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `resources_text`
--
ALTER TABLE `resources_text`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用表AUTO_INCREMENT `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10033;

--
-- 使用表AUTO_INCREMENT `t_cj`
--
ALTER TABLE `t_cj`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `t_code`
--
ALTER TABLE `t_code`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `t_dan`
--
ALTER TABLE `t_dan`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用表AUTO_INCREMENT `t_duo`
--
ALTER TABLE `t_duo`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用表AUTO_INCREMENT `t_panduan`
--
ALTER TABLE `t_panduan`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `t_tiankong`
--
ALTER TABLE `t_tiankong`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
