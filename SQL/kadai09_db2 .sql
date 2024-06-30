-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-06-30 14:21:48
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `kadai09_db2`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kadai09_db2_table`
--

CREATE TABLE `kadai09_db2_table` (
  `id` int(12) NOT NULL,
  `title` varchar(20) NOT NULL,
  `naiyou` varchar(500) NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `kadai09_db2_table`
--

INSERT INTO `kadai09_db2_table` (`id`, `title`, `naiyou`, `indate`) VALUES
(5, 'eg3rｇｈｇｈ', 'heｈ３ｑんｈｑｔｑ４んｊｑ４ｊ４ｑ', '2024-06-29 23:29:21'),
(6, 'あああああああああああああああああああ', 'fqeg1qgi1o1f@1jf@^1ｋ＾ｆ１ｊｇ－２ｇ－９ｈ', '2024-06-29 23:29:35'),
(7, '１', 'くぇ１ｒ１', '2024-06-29 23:29:38'),
(8, '', '', '2024-06-29 23:31:31');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `kadai09_db2_table`
--
ALTER TABLE `kadai09_db2_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `kadai09_db2_table`
--
ALTER TABLE `kadai09_db2_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
