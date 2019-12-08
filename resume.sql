-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 12 月 08 日 11:20
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ad`
--

CREATE TABLE `ad` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(5) UNSIGNED NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`) VALUES
(1, 'felix', '1234'),
(2, 'admin', '1234');

-- --------------------------------------------------------

--
-- 資料表結構 `bottom`
--

CREATE TABLE `bottom` (
  `id` int(5) UNSIGNED NOT NULL,
  `bottom` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `bottom`
--

INSERT INTO `bottom` (`id`, `bottom`) VALUES
(1, 'Copyright © 設計及維護 by : Felix Wang 2019 Dec ');

-- --------------------------------------------------------

--
-- 資料表結構 `cond`
--

CREATE TABLE `cond` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `cond`
--

INSERT INTO `cond` (`id`, `file`, `text`, `sh`) VALUES
(1, '', '錢多事少離家近', 1),
(2, '', 'wewewerwer', 1),
(3, '', 'ghfghfghfghfgh', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `doc`
--

CREATE TABLE `doc` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `doc`
--

INSERT INTO `doc` (`id`, `file`, `text`, `sh`) VALUES
(5, '', '<p>我是王宏禮,在台北出生成長,專長是美術設計及影音製作,自幼便鍾情於美術繪畫,也從 國中開始拜入名師門下習畫,曾就讀復興美工並以平面設計組第一名成績畢業,畢業後迫不 及待想發揮所長,便直接進入社會就業,有幸進入台灣第一家成立的東方廣告股份有限公 司,在職 2 年期間學習甚多,也充分了解學識不足及其重要性,於是便離職專心補習報考大 學,半年後考進輔大應用美術系,在學期間成績優異並保持與廣告公司聯繫,以接 case 方式賺取生活開銷並累積相關的工作經驗。</p>\r\n<p>&nbsp;</p>\r\n<p>在大學求學期間專攻電腦動畫,在當時主流電腦仍為 486/586 的 90 年代,校內擁有當時最先進的 SGI 工作站及 wavefront 3D 軟體,然而當時的動畫軟體操作起來,並無現今普遍具備之 fancy 介面,許多功能都需要以指令及參數方式執行,也因此習得相關 script 語法的使用。畢業製作以 3D 電腦動畫呈現,也獲師長及業界好評,從此也踏入電腦影音相關工作,發揮所學與所長。</p>\r\n<p>&nbsp;</p>\r\n<p>隨著電腦技術進步，網路應用崛起，在多年職場歷程中，也往往出現除影音製作外的網站相關製作需求，多次參與並負責從前期企畫到完成上線的網站建置專案經歷，讓我體認到具備相關專業技術能力的重要性，期間除陸陸續續的自我學習之外，也進入職訓局開設的專班修習更專業且全面的相關技術，包括HTML5、CSS3、PHP、Javascript、JQuery、Ajax、Mysql等前、後端程式能力，同時也能結合本身所學，期許能提供更全面的服務。</p>\r\n<p>&nbsp;</p>\r\n<p>【我與家人】&nbsp;父親為職業軍人退休,母親為家管,我排行老二,有一位兄長與一位妹妹,兄長任職於中央 圖書館,妹妹從事汽車零件貿易業,妻子為專業保母,有一男一女 2 個念高中的小孩,平時 彼此間皆能互相扶持與體諒,家人相處融洽。&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>【我與工作】&nbsp;透過早年在東方廣告、聯線廣告的廣告美術設計及媒體操作工作經驗,從廣告中接觸到許多電腦動畫及特效,加上大學所學,便立志進入相關產業,歷經在大眾電腦從事動畫軟體教學、系統整合安裝及銷售支援經驗,隨後進入電視台從事專業影片製作,再到進入宏廣卡通動畫公司負責製作技術統籌及人員教育訓練及生產線規劃等,期間曾負責台北、大陸、泰國三地之 技術相關業務及負責美國迪士尼、華納、環球、MGM 米高梅、nickelodeon、Stretch Film、丹麥 A-Film 等公司之往來技術研發及配合業務以及國內的故宮 e-learning 學習網製 作案、教育部六大學習網之自然生態網規畫製作等大型專案,一路走來皆與同事相處融洽並 多得貴人相助,得以累積豐富經驗及能力,也希望能在往後的職場生涯中繼續為公司貢獻所長。</p>', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `gallery`
--

CREATE TABLE `gallery` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `gallery`
--

INSERT INTO `gallery` (`id`, `file`, `title`, `text`, `link`, `type`, `sh`) VALUES
(10, 'picowork.jpg', 'Picowork', 'hghjghjgh\r\n2136546', '12312312388', 'video', 1),
(11, 'wifiboy.jpg', 'wifiboy', '123\r\nvbmvnbmvnbmvnbmb', 'google.com', 'video', 1),
(12, 'heroes1.jpg', '真正的英雄:動畫影片', '製作項目: Rough Animation, Animation, Clean Up, IB, Scanning, Line-test\r\n\r\n客戶: White Knight\r\n\r\n長度: 2D Feature Film – 20 min\r\n\r\n得獎紀錄: 本片榮獲墨西哥2011年度最佳動畫影片大獎(Best Animated Picture” award in Mexico)', '', 'video', 1),
(18, '11.jpg', 'tarzan', '22233311', '', 'cartoon', 1),
(19, '61nSaZr8lyL._SY445_.jpg', 'little mermaid', '222111', '', 'cartoon', 1),
(20, '2.jpg', '', '333333', '', 'cartoon', 1),
(21, '12.jpg', '', '311222', '', 'cartoon', 1),
(22, '4.jpg', '', '444666', '', 'cartoon', 1),
(23, '1.jpg', '', '123123', '', 'cartoon', 1),
(24, '8.jpg', '', '', '', 'cartoon', 1),
(25, '9.jpg', '', '', '', 'cartoon', 1),
(26, '10.jpg', '', '123', '', 'cartoon', 1),
(27, '7.jpg', '', '123456', '', 'cartoon', 1),
(28, '6.jpg', '', '222', '', 'cartoon', 1),
(29, '5.jpg', '', '123', '', 'cartoon', 1),
(30, 'bululu2.jpg', 'bululu', '222333111fdgdfg', 'fffff', 'video', 1),
(31, '澳牛部位.jpg', '澳牛部位', '12323213', '', 'video', 1),
(32, '澳牛等級.jpg', '澳牛等級', '222333333', '', 'video', 1),
(33, '20170918項目簡報-2-1.jpg', 'hhh111', '', '', 'art', 1),
(34, 'page-0003-c2.jpg', '12322', '', '', 'art', 1),
(35, 'page-0003-2.jpg', '22233311133', '', '', 'art', 1),
(36, 'page-0003-1.jpg', 'hghjghj123', '', '', 'art', 1),
(37, 'e0790285-b3c5-4162-a0e7-77cfdcd4fb0f.png', '網路小遊戲', 'ghghgh1232122', '', 'cording', 1),
(38, '影台灣.jpg', '影台灣', '', '', 'video', 1),
(40, '行動影音.jpg', '行動影音', '', '', 'video', 1),
(41, '磺火漁祭.jpg', '磺火漁祭', '', '', 'video', 1),
(42, '米米s.jpg', 'mimi', '', '', 'video', 1),
(47, 'clock1.jpg', '123', '222', '', 'cording', 1),
(49, '05王宏禮-府城美食之旅.jpg', '12313', '', '', 'art', 1),
(50, '12-02-felix.jpg', '', '', '', 'art', 1),
(51, '11-01-felix.jpg', '', '', '', 'art', 1),
(52, '鼠曆-05-王宏禮.jpg', '', '', '', 'art', 1),
(53, '未命名-1.jpg', '', '', '', 'art', 1),
(54, '05-bottle.jpg', '', '', '', 'art', 1),
(55, '05-level_UP.jpg', '', '', '', 'art', 1),
(56, '休閒中心.jpg', '', '', '', 'art', 1),
(57, 'clock2.jpg', 'clock2', '', '', 'cording', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `history`
--

CREATE TABLE `history` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `history`
--

INSERT INTO `history` (`id`, `file`, `text`, `sh`) VALUES
(1, '', '<h3>88 studio／同鈊科技, Chief of Technical Officer</h3>\r\n<p>Oct 2006 ~ Jan 2019</p>\r\n<p>工作說明: 美術設計及影片後製統籌製作、網站維護、電腦設備器材採購及管理維護、專案資源分 配及進度管理、客服聯繫溝通</p>', 1),
(2, '', '<h3>Wang Film ／宏廣卡通, Technical Supervisor</h3>\r\n<p>Jun 1999 ~ Oct 2006</p>\r\n<p>工作說明: 動畫系統軟硬體安裝維護、集團網路建構規劃、設備採購規格制訂、生產製程技術研發 及管理協調、軟體操作教育訓練、海外生產線規劃及相關教育訓練、美術設計及影片後製統籌製 作、與國外片廠人員聯繫溝通</p>', 1),
(3, '', '<h3>Anitime tech／藝動網科技 , 技術部經理/IT Manager</h3>\r\n<p>&nbsp;Jan 2001 ~ Dec 2005</p>\r\n<p>工作說明: 在宏廣集團同時兼任此職務，負責公司網路及系統設備維護管理、專案規畫及進度管理</p>', 1),
(4, '', '<h3>FIC Computer Inc／大眾電腦集團, Assistant Manager, Jan 1997 ~ Dec 1999</h3>\r\n<p>Dec 1993 ~ Apr 1995,&nbsp; Jan 1997 ~ Dec 1999<br />工作說明: 與國外原廠聯繫,取得最新資訊,軟硬體教學及展示,協助業務推廣工作,系統整合安 裝及客服處理</p>', 1),
(5, '', '<h3>ETTV／東森電視, 新聞部動畫組長</h3>\r\n<p>&nbsp;Jun 1995 ~ Dec 1996</p>\r\n<p>工作說明: 新聞節目片頭、新聞圖標/圖卡及頻道節目宣傳影片製作及人員分工管理</p>', 1),
(6, '', '<h3>東方廣告股份有限公司／ 資深設計</h3>\r\n<p>Jun 1987 ~&nbsp; Dec 1989<br />工作說明: 廣告稿設計製作、插畫、Logo、CIS設計、CF腳本繪製</p>', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `image`
--

CREATE TABLE `image` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `image`
--

INSERT INTO `image` (`id`, `file`, `text`, `sh`) VALUES
(1, 'dribbble-devcard.png', '', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `info`
--

CREATE TABLE `info` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `info`
--

INSERT INTO `info` (`id`, `file`, `name`, `birthday`, `tel`, `addr`, `email`, `intro`, `sh`) VALUES
(3, '02B03.jpg', '王宏禮', '2019-12-20', '0932281027', '台北市', 'felixhlw@gmail.com', '本身所學具備高度專業美術敏感度及執行力，在美術編輯、設計及電腦動畫產業超過25年工作經驗，工作項目包括美術設計、繪畫、插畫及動畫影片製作、後製特效製作及影片剪輯、電腦系統規劃、架設及管理、人員教育訓練、專案規劃及管理等。', 1),
(6, '6204cc32-6a0f-4fb5-b0ba-7b5395ad570f.png', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `menu`
--

CREATE TABLE `menu` (
  `id` int(5) UNSIGNED NOT NULL,
  `href` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(5) NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `mvim`
--

CREATE TABLE `mvim` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `mvim`
--

INSERT INTO `mvim` (`id`, `file`, `text`, `sh`) VALUES
(1, 'clock1.jpg', '', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `pic`
--

CREATE TABLE `pic` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `see` tinyint(1) UNSIGNED NOT NULL,
  `path` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `note` varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `thmb` varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `pic`
--

INSERT INTO `pic` (`id`, `name`, `type`, `see`, `path`, `note`, `thmb`, `create_time`, `update_time`) VALUES
(2, 'clock1.jpg', 'image/jpeg', 0, './upload/clock1.jpg', 'clock', '', '2019-11-25 15:39:57', '2019-11-25 15:39:57');

-- --------------------------------------------------------

--
-- 資料表結構 `project`
--

CREATE TABLE `project` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `project`
--

INSERT INTO `project` (`id`, `file`, `text`, `sh`) VALUES
(1, '', 'Wifiboy 程式開發學習板產品及形象宣導影片製作', 1),
(2, '', 'in微創影像網站設計製作及維運管理', 1),
(3, '', 'inLife癮生活網站設計製作及維運管理', 1),
(4, '', '台電宣導動畫片製作', 1),
(5, '', '香港商U3D Picowork 雲端作業系統UI/UX開發及宣傳影片製作', 1),
(6, '', 'WILD 7 七金剛動漫畫製作 壹動畫', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `school`
--

CREATE TABLE `school` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `school`
--

INSERT INTO `school` (`id`, `file`, `text`, `sh`) VALUES
(1, '', '<h3>輔仁大學應用美術學系</h3>\r\n<h3>Fu Jen Catholic University, Applied Arts Computer Graphics, 1989 ~ 1993</h3>\r\n<p>電腦動畫組畢業，畢業3D動畫作品-庇里牛斯山的城堡，獲得師長及業界好評</p>', 1),
(2, '', '<h3>復興商工美工科, 平面設計組, 1984 ~ 1987</h3>\r\n<p>以第一名成績畢業，畢業作品獲校方收藏</p>', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `skill`
--

CREATE TABLE `skill` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `skill`
--

INSERT INTO `skill` (`id`, `file`, `text`, `sh`) VALUES
(1, '', '<p><strong>美術/設計/動畫/影音編輯</strong></p>\r\n<p>- Adobe PhotoShop</p>\r\n<p>- Adobe Illustrator</p>\r\n<p>- Adobe XD</p>\r\n<p>- ToonBoom Harmony</p>\r\n<p>- Open Toonz&nbsp;</p>\r\n<p>- Adobe Premiere&nbsp;</p>\r\n<p>- Adobe AfterEffects&nbsp;&nbsp;</p>', 1),
(2, '', '<p><strong>網頁工程</strong></p>\r\n<p>- HTML / CSS3</p>\r\n<p>- DreamWeaver</p>\r\n<p>- Javascript / jQuery&nbsp;</p>\r\n<p>- PHP</p>\r\n<p>- mysql</p>', 1),
(3, '', '<p><strong>辦公軟體及系統軟硬體整合</strong></p>\r\n<p>- 電腦組裝、維護</p>\r\n<p>- 區域有線/無線網路架設</p>\r\n<p>- Windows / Linux 系統、server安裝</p>\r\n<p>- Office: Word、PowerPoint、Excel</p>\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: -9px; top: -8px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `title`
--

CREATE TABLE `title` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `title`
--

INSERT INTO `title` (`id`, `file`, `title`, `text`, `sh`) VALUES
(2, 'head.jpg', '123123', '個性開朗，工作態度認真負責、細心，自我要求高，熟悉團隊合作，樂於助人及擅於工作協調溝通，曾專職負責包括Disney、Warner Brother. Universal 等外籍客戶之製作技術溝通與進度協調等工作項目。', 1),
(4, 'page-0003-1.jpg', 'ghfghfghf', 'gdfgdfgdfgdfghhhhh\r\n5556666333569', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `total`
--

CREATE TABLE `total` (
  `id` int(5) UNSIGNED NOT NULL,
  `total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `total`
--

INSERT INTO `total` (`id`, `total`) VALUES
(1, 258);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bottom`
--
ALTER TABLE `bottom`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `cond`
--
ALTER TABLE `cond`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `mvim`
--
ALTER TABLE `mvim`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `pic`
--
ALTER TABLE `pic`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bottom`
--
ALTER TABLE `bottom`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `cond`
--
ALTER TABLE `cond`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `doc`
--
ALTER TABLE `doc`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `history`
--
ALTER TABLE `history`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `image`
--
ALTER TABLE `image`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `info`
--
ALTER TABLE `info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `mvim`
--
ALTER TABLE `mvim`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pic`
--
ALTER TABLE `pic`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `project`
--
ALTER TABLE `project`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `school`
--
ALTER TABLE `school`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `title`
--
ALTER TABLE `title`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `total`
--
ALTER TABLE `total`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
