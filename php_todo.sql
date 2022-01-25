SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `finish_date` datetime NOT NULL,
  `create_date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `todo` (`id`, `title`, `body`, `finish_date`, `create_date`, `status`) VALUES
(1, 'タイトル修正', 'DB設定完了', '2022-01-27 00:00:00', '2022-01-22 15:45:38', 2),
(2, '作成終了', 'ダミーテキストダミーテキスト', '2022-01-18 00:00:00', '2022-01-22 16:09:11', 0);

ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;