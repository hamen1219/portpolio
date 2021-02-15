<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-18 06:36:10 --> Query error: Duplicate entry '12-hamen1219' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('hamen1219', '12', 1)
ERROR - 2020-12-18 06:37:18 --> Query error: Unknown column 'admin' in 'where clause' - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `admin` = '구인'
GROUP BY `b`.`num`
ERROR - 2020-12-18 06:39:35 --> Query error: Unknown column 'admin' in 'where clause' - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `admin` = '임원진'
GROUP BY `b`.`num`
ERROR - 2020-12-18 09:27:25 --> Severity: Notice --> Undefined variable: page /hung1219/www/application/libraries/Paging.php 102
ERROR - 2020-12-18 09:27:34 --> Severity: Notice --> Undefined variable: page /hung1219/www/application/libraries/Paging.php 102
ERROR - 2020-12-18 09:29:26 --> Query error: Unknown column 'admin' in 'where clause' - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `admin` = '구직'
GROUP BY `b`.`num`
ERROR - 2020-12-18 09:29:28 --> Query error: Unknown column 'admin' in 'where clause' - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `admin` = '구직'
GROUP BY `b`.`num`
ERROR - 2020-12-18 09:29:30 --> Query error: Unknown column 'admin' in 'where clause' - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `admin` = '구인'
GROUP BY `b`.`num`
ERROR - 2020-12-18 09:30:38 --> Query error: Duplicate entry '15-hamen1219' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('hamen1219', '15', 1)
ERROR - 2020-12-18 09:30:39 --> Query error: Duplicate entry '15-hamen1219' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('hamen1219', '15', 1)
ERROR - 2020-12-18 18:11:01 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-12-18 18:13:12 --> 404 Page Not Found: Img/gta
ERROR - 2020-12-18 18:13:12 --> 404 Page Not Found: Img/gta
ERROR - 2020-12-18 18:13:18 --> 404 Page Not Found: Img/gta
ERROR - 2020-12-18 18:13:21 --> 404 Page Not Found: Img/gta
ERROR - 2020-12-18 18:14:04 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-12-18 18:15:44 --> Query error: Duplicate entry '14-GTA554411' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('GTA554411', '14', 1)
ERROR - 2020-12-18 18:15:45 --> Query error: Duplicate entry '14-GTA554411' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('GTA554411', '14', 1)
ERROR - 2020-12-18 18:15:46 --> Query error: Duplicate entry '14-GTA554411' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('GTA554411', '14', 1)
ERROR - 2020-12-18 18:15:50 --> Query error: Duplicate entry '14-GTA554411' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('GTA554411', '14', 1)
ERROR - 2020-12-18 18:16:15 --> Query error: Duplicate entry '19-GTA554411' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('GTA554411', '19', 1)
ERROR - 2020-12-18 18:16:17 --> Query error: Duplicate entry '19-GTA554411' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('GTA554411', '19', 1)
ERROR - 2020-12-18 18:18:02 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-12-18 18:57:05 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-12-18 19:00:52 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-12-18 20:10:41 --> 404 Page Not Found: Img/gta
ERROR - 2020-12-18 20:10:41 --> 404 Page Not Found: Img/gta
