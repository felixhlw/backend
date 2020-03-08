-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020 年 03 月 08 日 15:05
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
(1, '', '<div><strong>希望工作地點: </strong></div>\r\n<div>台北市、新北市</div>', 1),
(2, '', '<div><strong>希望待遇:</strong></div>', 0),
(3, '', '<div><strong>希望應徵職務:</strong></div>\r\n<div>前端工程師、後端工程師、美編人員、後製剪接人員、專案管理PM</div>', 1),
(4, '', '<div><strong>就業狀況(在職中或待業): </strong></div>\r\n<div>待業中</div>\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: -8px; top: 48px;\">&nbsp;</div>', 1),
(5, '', '<div><strong>可上班日: </strong></div>\r\n<div>立即</div>', 1),
(7, '', '<div><strong>具備之國家職業證照: </strong></div>\r\n<div>* 網頁設計乙級</div>\r\n<div>* 保母人員</div>', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `doc`
--

CREATE TABLE `doc` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `doc`
--

INSERT INTO `doc` (`id`, `file`, `text`, `sh`) VALUES
(5, '', '<div>我是王宏禮，在台北出生成長，專長是<strong>美術設計</strong>及<strong>影音製作</strong>，自幼便鍾情於美術繪畫，從國中開始便拜入名師門下習畫，後來就讀<strong>復興美工</strong> <img style=\"float: left; margin: 0 15px;\" src=\"img/logo/fhvsartlogo.png\" alt=\"\" width=\"209\" height=\"69\"> 並以平面設計組第一名成績畢業，畢業後選擇發揮所長進入社會就業，並有幸進入台灣第一家</div>\r\n<div><img style=\"float: right; margin: 0 15px;\" src=\"img/estern.png\" alt=\"\" width=\"71\" height=\"30\"> 成立的<strong>東方廣告股份有限公司</strong>。在職 2 年期間學習甚多，也充分體認到學識及眼界上的不足，於是便離職專心投身補習期許能考取大學，半年後順利考進<strong>輔大應用美術系</strong>，在學四年期間成績優異，並持續保持與廣告公司的關係，以接 case方式賺取生活開銷並累積相關的工作經驗。</div>\r\n<div>\r\n<p>&nbsp; <br>於大學求學期間專攻電腦動畫，當時市面高端主流電腦為 486/586，校內擁有當時最先進的 SGI 工作站<img style=\"float: left; margin: 5px 0 0 15px;\" src=\"img/logo/Fu_Jen_Catholic_University_Seal.svg.png\" alt=\"\" width=\"50\" height=\"55\"><img style=\"float: left; margin: 5px 15 0 0 px;\" src=\"img/logo/logo.png\" alt=\"\" width=\"218\" height=\"55\">及 wavefront 3D 軟體，然而當時的動畫軟體操作起來，並無現今普遍具備之 fancy 介面，許多功能都需要以指令及參數方式執行，也因此接觸並習得相關C語言及script 語法的使用。畢業製作以 3D 電腦動畫呈現，成果獲師長及業界好評，從此也順利踏入電腦影音相關工作，發揮所學與所長。</p>\r\n<p>隨著電腦技術進步，網路應用崛起，在多年職場歷程中，也往往出現除影音製作外的網站相關製作需求，多次參與並負責從前期企畫到完成上線的網站建置專案經歷，讓我體認到具備相關專業技術能力的重要性，期間除陸陸續續的自我學習之外，也進入職訓局開設的專班修習<img style=\"float: right; margin: 0 15px;\" src=\"img/logo/html5.png\" alt=\"\" width=\"162\" height=\"59\">更專業且全面的相關技術 包括<strong>HTML5、CSS3、PHP、Javascript、JQuery、Ajax、Mysql</strong>等前、後端程式能力，並以認真的學習態度得到第一名結訓的殊榮，並且取得了國家網頁設計乙級證照。</p>\r\n<p><strong>【我與家人】</strong> 父親為職業軍人退休，母親為家管，本人排行第二，有一位兄長與一位妹妹，兄長任職於中央圖書館，妹妹從事汽車零件貿易業，妻子為專業保母。育有一兒一女，目前皆就讀於公立高中。平時家人彼此間皆能互相扶持與體諒，相處融洽。&nbsp;</p>\r\n<p><strong>【性格特質】</strong> 本人個性溫和樂觀，同時由於喜愛小朋友，也考取了專業保母人員證照，做事細心負責，擅於溝通協調，從求學時開始到在職場上，無論對於學習之作業以至工作場上之各種任務及上級交辦事項等，總是抱以認真負責的態度，絕不馬虎敷衍，盡己所能全力完成。同時樂於學習新知，勇於接受挑戰，並能尋找方法竭力完成上級交付之任務 。</p>\r\n<p><strong>【我與工作】</strong> 早年經歷東方廣告、聯線廣告、靈獅廣告等公司之廣告美術設計及媒體操作工作經歷, 以至轉戰電腦動畫及影視後製特效等相關產業, 歷經於大眾電腦從事動畫軟體教學、系統整合安裝及銷售支援、在東森電視新聞部從事專業影片及頻道包裝製作, 再到進入宏廣卡通動畫公司負責製作技術統籌，及人員教育訓練及生產線規劃等工作。</p>\r\n<p>在宏廣工作期間曾負責台北、大陸、泰國三地之 技術相關業務及負責美國迪士尼、華納、環球、MGM 米高梅、nickelodeon、Stretch Film、丹麥 A-Film 等公司之往來技術研發及配合業務，以及國內的故宮 e-learning 學習網製 作案、教育部六大學習網之自然生態網規畫製作等大型專案。</p>\r\n<p>回首在20多年的職場生涯上，一路走來皆與同事相處融洽並多能得到長官及同事相助，得以累積豐富經驗及能力，也希望能在往後的職場生涯中繼續貢獻所長。</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `gallery`
--

CREATE TABLE `gallery` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `embed` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1,
  `layout` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `gallery`
--

INSERT INTO `gallery` (`id`, `file`, `title`, `text`, `embed`, `link`, `type`, `sh`, `layout`) VALUES
(10, 'picowork.jpg', 'Picowork 雲端作業系統形象影片', '全程參與整個專案從市場定位、系統功能發想到最後建置完成，共歷時3年。其中包括UX/UI、logo、icon、介面音效、intro影片及使用教學影片等皆包辦參與企劃及製作。', '<iframe width=700 height=393 src=https://www.youtube.com/embed/hw7ThQ3Tfew frameborder=0 allow=accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture allowfullscreen></iframe>', 'https://www.facebook.com/PicoworkCloud/', 'video', 1, 1),
(11, 'wifiboy.jpg', 'Wifiboy 學習板介紹影片', '國人自製，超越micro bit的開發學習板，參與了產品測試及Demo影片製作', '<iframe width=700 height=393 src=https://www.youtube.com/embed/Gs_0jFjpV80 frameborder=0 allow=accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture allowfullscreen></iframe>', 'https://wifiboy.org/', 'video', 1, 1),
(12, 'heroes1.jpg', '真正的英雄:動畫影片', '客戶: White Knight\r\n\r\n長度: 2D Feature Film – 20 min\r\n<br>\r\n得獎紀錄: 本片榮獲墨西哥2011年度最佳動畫影片大獎<br>(Best Animated Picture” award in Mexico)', '<iframe width=700 height=393 src=https://www.youtube.com/embed/9rtqTFkVlKk frameborder=0 allow=accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture allowfullscreen></iframe>', 'http://www.88studio.com.tw/?p=463', 'video', 1, 0),
(18, 'tarzav-h2.jpg', '動畫業界20多年經驗，參與製作多部知名系列:\r\nTarzan', 'Disney', '', '', 'cartoon', 1, 1),
(19, '61nSaZr8lyL._SY445_.jpg', 'Little Mermaid', 'Disney', '', '', 'cartoon', 1, 2),
(20, '2.jpg', 'Balto series', 'Universal', '', '', 'cartoon', 1, 2),
(21, '12.jpg', 'Tom Sawyer', 'MGM', '', '', 'cartoon', 1, 2),
(22, '4.jpg', 'Curious George', 'Universal', '', '', 'cartoon', 1, 2),
(23, '1.jpg', 'Princess series', 'Disney', '', '', 'cartoon', 1, 2),
(24, '8.jpg', 'Courage the Cowardly Dog', 'Stretch Film', '', '', 'cartoon', 1, 2),
(25, '9.jpg', 'Land Before Time series', 'Universal', '', '', 'cartoon', 1, 2),
(26, '10.jpg', 'Heroes Verdaderos', 'White Knight', '', '', 'cartoon', 1, 2),
(27, '7.jpg', 'The Powerpuff Girls', 'Cartoon Network', '', '', 'cartoon', 1, 2),
(28, '6.jpg', '大鬧天宮3D', 'Technicolor', '', '', 'cartoon', 1, 2),
(29, '5.jpg', '2011首屆動漫春晚', '北京中央電視台', '', '', 'cartoon', 1, 2),
(30, 'bululu2.jpg', 'Bululu:DEMO影片', '政府輔導專案企劃及製作', '<iframe width=700  height=393 src=https://www.youtube.com/embed/R6qGU3mnrvI frameborder=0 allow=accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture allowfullscreen></iframe>', 'http://www.88studio.com.tw/?p=518', 'video', 1, 0),
(31, '澳牛部位.jpg', '澳洲牛肉部位介紹影片', '企業教育訓練影片企劃及製作', '<iframe width=700 height=393 src=https://www.youtube.com/embed/e53ODjQavMA frameborder=0 allow=accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture allowfullscreen></iframe>', 'http://www.88studio.com.tw/?p=510', 'video', 1, 0),
(32, '澳牛等級.jpg', '澳洲牛肉等級教學影片', '企業教育訓練影片企劃及製作', '<iframe width=700 height=393 src=https://www.youtube.com/embed/dM_33YMbK_U frameborder=0 allow=accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture allowfullscreen></iframe>', 'http://www.88studio.com.tw/?p=512', 'video', 1, 0),
(33, '哪吒.jpg', '美術及平面設計\r\n', '早期曾為廣告公司繪製一系列插畫稿，並曾獲得時報廣告金像獎銅牌。\r\n此作為電影少年哪吒企劃案之部分造型繪畫稿。', '', '', 'art', 1, 0),
(34, 'page-0003-c2.jpg', '哪吒2D版造型', '', '', '', 'art', 1, 2),
(35, 'page-0003-2.jpg', '哪吒2D版造型線稿', '', '', '', 'art', 1, 2),
(36, 'page-0003-1.jpg', '哪吒2D版造型線稿', '', '', '', 'art', 1, 2),
(37, 'plantnvszombie.jpg', '網路小遊戲', '使用HTML5、Java script、CSS3 製作之\"植物打殭屍\"版的類似打地鼠小遊戲', '', 'https://felixhlw.github.io/zombie/', 'cording', 1, 0),
(38, '影台灣.jpg', '影台灣簡報影片', '數位內容專案企劃及影片製作', '<iframe src=https://www.youtube.com/embed/pVnMmWxZiwA?rel=0 width=700 height=393 frameborder=0 allowfullscreen=allowfullscreen></iframe>', '', 'video', 1, 0),
(40, '行動影音.jpg', '行動影音教學介紹影片', '行動影音剪輯教學宣傳影片企畫及製作', '<iframe width=700 height=393 src=https://www.youtube.com/embed/vRgNZLbbjTw frameborder=0 allow=accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture allowfullscreen></iframe>', 'http://class.88studio.tw/?p=51', 'video', 1, 0),
(41, '磺火漁祭.jpg', '金山磺火漁祭', '磺火漁祭紀錄影片剪輯、配樂及特效製作', '<iframe src=https://www.youtube.com/embed/5b34pKFwmUo?rel=0 width=700 height=393 frameborder=0 allowfullscreen=allowfullscreen></iframe>', 'http://class.88studio.tw/?p=182', 'video', 1, 0),
(42, '米米s.jpg', 'MiMi 繪本動畫系列', 'OEM繪本動畫專案企劃及製作', '<iframe src=https://www.youtube.com/embed/lJBL826kSyw?rel=0 width=700 height=393 frameborder=0 allowfullscreen=allowfullscreen></iframe>', '', 'video', 1, 0),
(49, '05王宏禮-府城美食之旅.jpg', '府城美介紹海報', '根據個人過往台南旅遊印象之最愛美食所製作的海報', '', '', 'art', 1, 2),
(50, '12-02-felix.jpg', '東方禪風展覽海報', '使用photoshop製作之海報習作', '', '', 'art', 1, 2),
(51, '11-01-felix.jpg', '數位經典展海報', '使用photoshop製作之海報習作', '', '', 'art', 1, 2),
(52, '鼠曆-05-王宏禮.jpg', '鼠年年曆', '使用photoshop製作之鼠年年曆', '', '', 'art', 1, 2),
(53, '未命名-1.jpg', '古都漫遊旅遊APP圖示', '使用photoshop製作之APP介面習作', '', '', 'art', 1, 2),
(54, '05-bottle.jpg', 'Felix whiskey海報', '使用photoshop製作之whiskey海報習作', '', '', 'art', 1, 0),
(55, '05-level_UP.jpg', '運動海報', '使用photoshop製作之海報面習作', '', '', 'art', 1, 0),
(56, '休閒中心.jpg', '名片製作', '使用photoshop製作之名片設計習作', '', '', 'art', 1, 0),
(58, 'clock1.jpg', '網路時鐘1', '使用HTML5、Java script、CSS3 製作之網頁時鐘', '', 'https://felixhlw.github.io/clock/clock.htm\r\n\r\n\r\n', 'cording', 1, 0),
(59, 'clock2.jpg', '網頁時鐘2', '使用HTML5、Java script、CSS3 製作之網頁時鐘', '', 'https://felixhlw.github.io/clock/clock2.htm', 'cording', 1, 0),
(60, 'taiwan.png', '政府開放資料連結-親子活動資訊網', '使用AJAX技術，建立一平台連接政府開放資料API，顯示全台灣之親子活動展演資訊', '', 'https://felixhlw.github.io/opendata/', 'cording', 1, 0),
(61, 'mid.jpg', '泰山職訓場介紹網', '使用bootstrape及CSS效果建立泰山職訓場之介紹網站', NULL, 'https://felixhlw.github.io/Mid-term-homework/', 'cording', 1, 0),
(62, 'card1.jpg', '卡牌消消樂', '使用jQuery製作之卡牌翻牌配對，考驗記憶力之小遊戲', NULL, 'https://felixhlw.github.io/cards/index.html', 'cording', 1, 0),
(63, 'coffee.jpg', '東山咖啡網站', '使用bootstrape及data-table建立之東山咖啡介紹網習作', NULL, 'http://220.128.133.15/s1080305/coffee/index.htm', 'cording', 1, 0),
(64, 'caculator.png', '網頁線上計算機', '使用javascript及CSS製作之網頁計算機', NULL, 'https://felixhlw.github.io/caculator/index.htm', 'cording', 1, 0),
(65, 'calendar.jpg', '網頁萬年曆', '使用PHP製作之網頁萬年曆', NULL, 'http://220.128.133.15/s1080305/perpetual-calendar/', 'cording', 1, 0),
(66, 'invoice.jpg', '統一發票兌獎系統', '使用PHP製作之統一發票兌獎機，可登錄每期獎號及發票，系統可自動兌獎並彙整顯示結果。', NULL, 'https://github.com/felixhlw/etax-invoice', 'cording', 1, 0),
(67, 'cover.jpg', '書籍封面印刷排版設計', '使用illustrator製作之封面排版設計習作', '', '', 'art', 1, 0),
(68, '30day.jpg', '30天動物logo挑戰', '使用illustrator製作之30天動物logo挑戰習作', '', '', 'art', 1, 0),
(69, 'label.jpg', '向量圖標', '使用illustrator繪製之繪製之橄欖油圖標習作', '', '', 'art', 1, 0),
(70, 'logo-1.jpg', 'logo設計', '使用illustrator設計製作之個人品牌logo', NULL, '', 'art', 1, 0),
(71, 'letter.jpg', 'logo之事務用品應用', 'logo實際應用在日常事務用品之情境示範', NULL, '', 'art', 1, 0),
(72, 'flag.jpg', '鯉魚旗', '使用illustrator製作之鯉魚旗圖案', NULL, '', 'art', 1, 0),
(73, 'ykk-2.jpg', 'YKK拉鍊圖案製作', '使用illustrator繪製之YKK拉鍊圖案', NULL, '', 'art', 1, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `history`
--

CREATE TABLE `history` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1,
  `rank` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `history`
--

INSERT INTO `history` (`id`, `file`, `text`, `sh`, `rank`) VALUES
(1, '', '<h5><strong>88studio／同鈊科技, Chief of Technical Officer</strong></h5>\r\n<div>Oct 2006 ~ Jan 2009</div>\r\n<div>工作說明: 美術設計及影片後製統籌製作、網站維護、電腦及設備器材採購及管理/維護、專案資源分配及進度管理、客戶服務</div>', 1, 2),
(2, '', '<h5><strong>Wang Film ／宏廣卡通, Technical Supervisor</strong></h5>\r\n<div>Jun 1999 ~ Oct 2006</div>\r\n<div>工作說明: 動畫系統軟硬體安裝維護、集團網路建構規劃、設備採購規格制訂、生產製程技術研發及管理協調、軟體操作教育訓練、海外生產線規劃及相關教育訓練、美術設計及影片後製統籌製 作、與國外片廠人員聯繫溝通</div>', 1, 3),
(3, '', '<h5><strong>Anitime tech／藝動網科技 , 技術部經理/IT Manager</strong></h5>\r\n<div>&nbsp;Jan 2001 ~ Dec 2005</div>\r\n<div>工作說明: 在宏廣集團同時兼任此職務，負責公司網路及系統設備維護管理、專案規畫及進度管理</div>\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 10px; top: -0.28125px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 1, 4),
(4, '', '<h5><strong>FIC Computer Inc／大眾電腦集團, Assistant Manager</strong></h5>\r\n<p>Dec 1993 ~ Apr 1995,&nbsp; Jan 1997 ~ Dec 1999<br>工作說明: 與國外原廠聯繫,取得最新資訊,軟硬體教學及展示,協助業務推廣工作,系統整合安 裝及客服處理</p>', 1, 5),
(5, '', '<h5><strong>ETTV／東森電視, 新聞部動畫組長</strong></h5>\r\n<div>&nbsp;Jun 1995 ~ Dec 1996</div>\r\n<div>工作說明: 新聞節目片頭、新聞圖標/圖卡及頻道節目宣傳影片製作及人員分工管理</div>\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: -4px; top: -0.28125px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 1, 6),
(6, '', '<h5><strong>東方廣告股份有限公司／ 資深設計</strong></h5>\r\n<p>Jun 1987 ~&nbsp; Dec 1989<br>工作說明: 廣告稿設計製作、插畫、Logo、CIS設計、CF腳本繪製</p>\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 4px; top: 50.7188px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 1, 7),
(13, '', '<h5><strong>中華民國勞動部動力發展署北基宜花金馬分署-泰山職訓場</strong></h5>\r\n<h5><strong>108年第二期PHP資料庫網頁設計班進修&nbsp;</strong></h5>\r\n<div>Sep 2019 ~ Mar 2020</div>\r\n<div>學習項目包括: 網頁排版編輯、資訊網路概論、數位媒體應用、視覺影像設計、資料庫程式設計、網頁動態技術、網頁設計實務等共計920小時之訓練課程，期間學習認真，表現優異，以第一名成績結訓，並於結訓前通過考試獲得了國家網頁設計乙級證照。</div>', 1, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `info`
--

CREATE TABLE `info` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `info`
--

INSERT INTO `info` (`id`, `file`, `name`, `birthday`, `tel`, `addr`, `email`, `intro`, `sh`) VALUES
(3, '02B03.jpg', '王宏禮 Felix Wang', '2019-12-20', '0932281027', '台北市 TW', 'felixhlw@gmail.com', '個性開朗及溫和有禮，認真負責及細心，自我要求高，熟悉團隊合作，樂於助人及擅於工作協調溝通，曾專職負責包括Disney、Warner Brother. Universal 等客戶之製作技術溝通與進度協調等工作項目。本身所學具備高度專業美術敏感度及執行力，在美術編輯、設計及電腦動畫產業超過25年工作經驗，工作項目包括美術設計、繪畫、插畫及動畫影片製作、後製特效製作及影片剪輯、電腦系統規劃、架設及管理、人員教育訓練、專案規劃及管理等。', 1),
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

--
-- 傾印資料表的資料 `menu`
--

INSERT INTO `menu` (`id`, `href`, `text`, `parent`, `sh`) VALUES
(1, 'index.php?do=info', '個人簡介 / About Me', 0, 1),
(2, 'index.php?do=cond', '求職條件 / Job & Position', 0, 1),
(3, 'index.php?do=skill', '技能 / My Sill', 0, 1),
(4, 'index.php?do=history', '經歷 / Experience', 0, 1),
(5, 'index.php?do=school', '學歷 / Education', 0, 1),
(6, 'index.php?do=project', '參與專案 / Project', 0, 1),
(7, 'index.php?do=gallery', '作品集 / Gallery', 0, 1),
(8, 'index.php?do=doc', '自傳 / Autobiography', 0, 1);

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
(6, '', 'WILD 7 七金剛動漫畫製作 壹動畫', 1),
(7, '', '澳洲牛肉協會宣導影片 澳洲牛肉協會', 1),
(8, '', '真正的英雄(墨西哥獨立英雄)動畫影片製作', 1),
(9, '', '米米(MiMi)繪本動畫影片製作', 1),
(10, '', 'BULULU資策會輔導金影片開發計畫', 1),
(11, '', '故宮博物院-陶瓷e-learning推展教材多媒體製作案', 1),
(12, '', '農委會 e-learning推展教材多媒體制作案', 1),
(13, '', '中國信託 e-learning教材製作案', 1),
(14, '', '教育部六大網之 自然生態學習網建置案', 1),
(15, '', '\r\n宏廣卡通公司-台北/泰國/蘇州廠電腦化作業建制規劃及人員訓練', 1),
(16, '', '加拿大ToonBoom 專業動畫製作系統亞洲區訓練計畫', 1),
(17, '', '台北環球電視台虛擬攝影棚建置架設', 1),
(18, '', '東森新聞開台動畫及頻道包裝製作', 1),
(19, '', '美國CHYRON Liberty影音剪輯系統建置及教學', 1),
(20, '', '膽小狗英雄動畫片製作Courage the Cowardly Dog -Stretchfilms', 1),
(21, '', '好奇猴喬治-電影版 環球影業 Curious George Feature Film -Universal', 1),
(22, '', '小美人魚2 Little Mermaid 2 -Walt Disney', 1),
(23, '', 'The Powerpuff Girls -Cartoon Network', 1),
(24, '', '湯姆歷險記 Tom Sawyer -MGM', 1),
(25, '', '歷險小恐龍系列 Land Before Time series -Universal', 1),
(26, '', '雪地靈犬系列 Balto series -Universal', 1),
(27, '', '泰山 Tarzan -Walt Disney', 1),
(28, '', '迪士尼公主系列 Princes Series -Disney', 1);

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
(1, '', '<h5><strong>輔仁大學應用美術學系</strong></h5>\r\n<h6>Fu Jen Catholic University, Applied Arts Computer Graphics, 1989 ~ 1993</h6>\r\n<p>電腦動畫組畢業，畢業3D動畫作品-庇里牛斯山的城堡，獲得師長及業界好評</p>\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 2px; top: 50.7188px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 1),
(2, '', '<h5><strong>復興商工美工科, 平面設計組, 1984 ~ 1987</strong></h5>\r\n<p>以第一名成績畢業，畢業作品獲校方收藏</p>\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 1px; top: 50.7188px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 1);

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
(1, '', '<p><span style=\"font-size: 14pt;\"><span style=\"font-size: 18.6667px;\"><strong><span style=\"color: #e03e2d;\"><i class=\"fas fa-palette\"></i> </span><span style=\"color: #11a958;\"><i class=\"fas fa-photo-video\"></i></span></strong></span><strong style=\"font-size: 14pt;\"> 美術設計/動畫/影音</strong></span></p>\r\n<div><span style=\"font-size: 14pt;\">- Adobe PhotoShop</span></div>\r\n<div><span style=\"font-size: 14pt;\">- Adobe Illustrator</span></div>\r\n<div><span style=\"font-size: 14pt;\">- Adobe XD</span></div>\r\n<div><span style=\"font-size: 14pt;\">- ToonBoom Harmony</span></div>\r\n<div><span style=\"font-size: 14pt;\">- Open Toonz&nbsp;</span></div>\r\n<div><span style=\"font-size: 14pt;\">- Adobe Premiere&nbsp;</span></div>\r\n<div><span style=\"font-size: 14pt;\">- Adobe AfterEffects&nbsp;&nbsp;</span></div>\r\n<div><span style=\"font-size: 14pt;\">- ZBrush 3D</span></div>', 1),
(2, '', '<div><span style=\"font-size: 14pt;\"><strong><span style=\"color: #3598db;\"> <i class=\"fab fa-php\"></i> </span><span style=\"color: #e67e23;\"><i class=\"fab fa-html5\"></i></span><span style=\"color: #23a16f;\"> <i class=\"fab fa-css3-alt\"></i></span> UI/UX &amp; 網頁工程</strong></span></div>\r\n<div>&nbsp;</div>\r\n<div><span style=\"font-size: 14pt;\">- HTML / CSS3</span></div>\r\n<div><span style=\"font-size: 14pt;\">- Javascript / jQuery </span></div>\r\n<div><span style=\"font-size: 14pt;\">- Bootstrape&nbsp;</span></div>\r\n<div><span style=\"font-size: 14pt;\">- PHP</span></div>\r\n<div><span style=\"font-size: 14pt;\"><span style=\"font-size: 14pt;\">- mysql</span></span></div>\r\n<div><span style=\"font-size: 14pt;\"><span style=\"font-size: 14pt;\">- Git</span></span></div>\r\n<div><span style=\"font-size: 14pt;\">- DreamWeaver</span></div>\r\n<div>&nbsp;</div>', 1),
(3, '', '<div><span style=\"font-size: 14pt;\"><strong><span style=\"color: #3598db;\"><i class=\"fab fa-windows\"></i> </span><span style=\"color: #e67e23;\"><i class=\"fab fa-ubuntu\"></i> </span>辦公軟體及系統整合</strong></span></div>\r\n<div>&nbsp;</div>\r\n<div><span style=\"font-size: 14pt;\">- 電腦組裝、維護</span></div>\r\n<div><span style=\"font-size: 14pt;\">- 區域有線/無線網路架設</span></div>\r\n<div><span style=\"font-size: 14pt;\">- Windows / Linux </span></div>\r\n<div><span style=\"font-size: 14pt;\">&nbsp; 系統、server安裝</span></div>\r\n<div><span style=\"font-size: 14pt;\">&nbsp; (包括email、ftp等server)</span></div>\r\n<div><span style=\"font-size: 14pt;\">- Office: Word、</span></div>\r\n<div><span style=\"font-size: 14pt;\">- PowerPoint</span><span style=\"font-size: 14pt;\">、</span></div>\r\n<div><span style=\"font-size: 14pt;\">- Excel</span></div>', 1);

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
(2, 'head.jpg', 'Felix Wang', '嗨! 我是菲力，專長: 美術設計、影音動畫編輯以及網頁、程式等製作。同時本身還是擁有合格證照的專業保母喔! 歡迎來到我的個人資訊網站!', 1),
(4, 'page-0003-1.jpg', '', '', 0);

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
(1, 262);

--
-- 已傾印資料表的索引
--

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
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `doc`
--
ALTER TABLE `doc`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `history`
--
ALTER TABLE `history`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `info`
--
ALTER TABLE `info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `project`
--
ALTER TABLE `project`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
