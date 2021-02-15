<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-16 12:59:42 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 12:59:49 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-12-16 13:00:08 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:01:35 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 13:02:15 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 13:02:25 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 13:02:25 --> 404 Page Not Found: Img/users
ERROR - 2020-12-16 13:02:44 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: INSERT INTO `intro_board` (`user`, `perm`, `contents`) VALUES ('hamen1219', '관리자', '반갑습니다. 설정된 대문글입니다.')
ERROR - 2020-12-16 13:02:57 --> Query error: Unknown column 'admin' in 'where clause' - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `admin` = '임원진'
GROUP BY `b`.`num`
ERROR - 2020-12-16 13:02:57 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:05:36 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 13:06:56 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 13:07:04 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:07:15 --> Query error: Unknown column 'admin' in 'where clause' - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `admin` = '구직'
GROUP BY `b`.`num`
ERROR - 2020-12-16 13:07:15 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:07:17 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:07:18 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:07:18 --> Query error: Unknown column 'admin' in 'where clause' - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `admin` = '구인'
GROUP BY `b`.`num`
ERROR - 2020-12-16 13:07:19 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:07:19 --> Query error: Unknown column 'admin' in 'where clause' - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `admin` = '구직'
GROUP BY `b`.`num`
ERROR - 2020-12-16 13:07:19 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:07:21 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:07:34 --> Query error: Unknown column 'admin' in 'where clause' - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `admin` = '구직'
GROUP BY `b`.`num`
ERROR - 2020-12-16 13:07:34 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:07:36 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:07:37 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:10:14 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 13:11:16 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:21:42 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:21:57 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:26:10 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:27:13 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 13:27:23 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:32:40 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:34:17 --> 404 Page Not Found: Css/board
ERROR - 2020-12-16 13:34:24 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:34:59 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:34:59 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:34:59 --> 404 Page Not Found: Img/boar.png
ERROR - 2020-12-16 13:35:00 --> 404 Page Not Found: Img/bo.png
ERROR - 2020-12-16 13:35:00 --> 404 Page Not Found: Img/b.png
ERROR - 2020-12-16 13:35:00 --> 404 Page Not Found: Img/.png
ERROR - 2020-12-16 13:35:05 --> 404 Page Not Found: Img/.png
ERROR - 2020-12-16 13:35:07 --> 404 Page Not Found: Img/.png
ERROR - 2020-12-16 13:35:07 --> 404 Page Not Found: Img/.png
ERROR - 2020-12-16 13:35:07 --> 404 Page Not Found: Img/4.png
ERROR - 2020-12-16 13:35:09 --> 404 Page Not Found: Img/.png
ERROR - 2020-12-16 13:35:09 --> 404 Page Not Found: Img/4.png
ERROR - 2020-12-16 13:35:09 --> 404 Page Not Found: Img/45.png
ERROR - 2020-12-16 13:35:09 --> 404 Page Not Found: Img/4.png
ERROR - 2020-12-16 13:35:09 --> 404 Page Not Found: Img/.png
ERROR - 2020-12-16 13:35:10 --> 404 Page Not Found: Img/5.png
ERROR - 2020-12-16 13:35:10 --> 404 Page Not Found: Img/.png
ERROR - 2020-12-16 13:35:13 --> 404 Page Not Found: Img/%E3%85%94.png
ERROR - 2020-12-16 13:35:13 --> 404 Page Not Found: Img/%E3%85%94%E3%85%9C.png
ERROR - 2020-12-16 13:35:13 --> 404 Page Not Found: Img/%E3%85%94%E3%85%9C%E3%85%8E.png
ERROR - 2020-12-16 13:35:13 --> 404 Page Not Found: Img/%E3%85%94%E3%85%9C.png
ERROR - 2020-12-16 13:35:13 --> 404 Page Not Found: Img/%E3%85%94.png
ERROR - 2020-12-16 13:35:14 --> 404 Page Not Found: Img/.png
ERROR - 2020-12-16 13:35:14 --> 404 Page Not Found: Img/p.png
ERROR - 2020-12-16 13:35:14 --> 404 Page Not Found: Img/pn.png
ERROR - 2020-12-16 13:35:14 --> 404 Page Not Found: Img/png.png
ERROR - 2020-12-16 13:35:15 --> 404 Page Not Found: Img/pn.png
ERROR - 2020-12-16 13:35:15 --> 404 Page Not Found: Img/p.png
ERROR - 2020-12-16 13:35:15 --> 404 Page Not Found: Img/.png
ERROR - 2020-12-16 13:35:16 --> 404 Page Not Found: Img/b.png
ERROR - 2020-12-16 13:35:16 --> 404 Page Not Found: Img/bo.png
ERROR - 2020-12-16 13:35:16 --> 404 Page Not Found: Img/boa.png
ERROR - 2020-12-16 13:35:16 --> 404 Page Not Found: Img/boar.png
ERROR - 2020-12-16 13:35:16 --> 404 Page Not Found: Img/board.png
ERROR - 2020-12-16 13:35:17 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:17 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:18 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:19 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:20 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:20 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:21 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:21 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:21 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:21 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:21 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:22 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:22 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:22 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:23 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:23 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:23 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:24 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:24 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:24 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:25 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:25 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:25 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:26 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:26 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:27 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:27 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:28 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:29 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:30 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:31 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:31 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:31 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:32 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:32 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:32 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:32 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:33 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:33 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:33 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:33 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:34 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:34 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:35:34 --> 404 Page Not Found: Img/board.png
ERROR - 2020-12-16 13:35:34 --> 404 Page Not Found: Img/boar.png
ERROR - 2020-12-16 13:35:34 --> 404 Page Not Found: Img/boa.png
ERROR - 2020-12-16 13:35:35 --> 404 Page Not Found: Img/bo.png
ERROR - 2020-12-16 13:35:35 --> 404 Page Not Found: Img/b.png
ERROR - 2020-12-16 13:35:35 --> 404 Page Not Found: Img/.png
ERROR - 2020-12-16 13:39:41 --> Query error: Unknown column 'admin' in 'where clause' - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `admin` = '구직'
GROUP BY `b`.`num`
ERROR - 2020-12-16 13:39:41 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:39:42 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 13:51:25 --> 404 Page Not Found: Img/17.png
ERROR - 2020-12-16 13:51:34 --> 404 Page Not Found: Img/17.png
ERROR - 2020-12-16 13:51:36 --> 404 Page Not Found: Img/17.png
ERROR - 2020-12-16 13:51:47 --> 404 Page Not Found: Img/17.png
ERROR - 2020-12-16 13:51:48 --> Query error: Unknown column 'admin' in 'where clause' - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `admin` = '구직'
GROUP BY `b`.`num`
ERROR - 2020-12-16 13:51:49 --> 404 Page Not Found: Css/board
ERROR - 2020-12-16 13:55:11 --> 404 Page Not Found: Img/17.png
ERROR - 2020-12-16 13:56:35 --> 404 Page Not Found: Img/17.png
ERROR - 2020-12-16 13:57:27 --> 404 Page Not Found: Img/17.png
ERROR - 2020-12-16 13:57:28 --> Query error: Unknown column 'admin' in 'where clause' - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `admin` = '구직'
GROUP BY `b`.`num`
ERROR - 2020-12-16 13:57:28 --> 404 Page Not Found: Css/board
ERROR - 2020-12-16 13:57:30 --> Query error: Unknown column 'admin' in 'where clause' - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `admin` = '구인'
GROUP BY `b`.`num`
ERROR - 2020-12-16 13:57:30 --> 404 Page Not Found: Css/board
ERROR - 2020-12-16 14:02:05 --> 404 Page Not Found: Img/17.png
ERROR - 2020-12-16 14:05:42 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 14:05:53 --> Query error: Unknown column 'admin' in 'where clause' - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `admin` = '구직'
GROUP BY `b`.`num`
ERROR - 2020-12-16 14:05:53 --> 404 Page Not Found: Css/board
ERROR - 2020-12-16 14:05:53 --> 404 Page Not Found: Img/board
ERROR - 2020-12-16 14:05:58 --> Query error: Unknown column 'admin' in 'where clause' - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `admin` = '구직'
GROUP BY `b`.`num`
ERROR - 2020-12-16 14:05:58 --> 404 Page Not Found: Css/board
ERROR - 2020-12-16 14:05:59 --> 404 Page Not Found: Css/board
ERROR - 2020-12-16 14:07:02 --> Query error: Unknown column 'admin' in 'where clause' - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `admin` = '구직'
GROUP BY `b`.`num`
ERROR - 2020-12-16 14:11:27 --> Query error: Unknown column 'admin' in 'where clause' - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `admin` = '구직'
GROUP BY `b`.`num`
ERROR - 2020-12-16 14:11:47 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 14:11:48 --> 404 Page Not Found: Img/1.png
ERROR - 2020-12-16 14:11:49 --> 404 Page Not Found: Img/1.png
ERROR - 2020-12-16 14:14:16 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 14:14:17 --> 404 Page Not Found: Img/1.png
ERROR - 2020-12-16 14:14:17 --> 404 Page Not Found: Img/1.png
ERROR - 2020-12-16 14:14:52 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 14:14:52 --> 404 Page Not Found: Img/1.png
ERROR - 2020-12-16 14:14:52 --> 404 Page Not Found: Img/1.png
ERROR - 2020-12-16 14:16:09 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 14:16:34 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 14:16:47 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 14:17:03 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 14:17:17 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-12-16 14:17:18 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 14:21:38 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 14:34:46 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 14:35:07 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 14:49:20 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 14:50:15 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 14:50:15 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 15:00:13 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 15:00:19 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-12-16 15:00:32 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 15:01:04 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 15:13:56 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 15:30:44 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 15:30:48 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-12-16 16:08:46 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 16:09:08 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 16:09:34 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 16:29:15 --> Query error: Unknown column 'admin' in 'where clause' - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `admin` = '구인'
GROUP BY `b`.`num`
ERROR - 2020-12-16 16:30:19 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 16:31:48 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 16:36:56 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 16:37:08 --> Query error: Table 'hung1219.intro_board' doesn't exist - Invalid query: SELECT *
FROM `intro_board`
ORDER BY `created` DESC
ERROR - 2020-12-16 16:37:08 --> 404 Page Not Found: Img/users
ERROR - 2020-12-16 16:37:15 --> 404 Page Not Found: Img/users
ERROR - 2020-12-16 16:37:49 --> 404 Page Not Found: Img/users
