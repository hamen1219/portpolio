<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-18 07:44:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 07:44:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 07:44:25 --> 404 Page Not Found: User/myroom
ERROR - 2020-11-18 07:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 07:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 07:44:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 07:44:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 07:49:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 07:49:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 07:55:54 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '145', 'good')
ERROR - 2020-11-18 08:12:36 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '142', 'good')
ERROR - 2020-11-18 08:14:53 --> Query error: FUNCTION u.name does not exist. Check the 'Function Name Parsing and Resolution' section in the Reference Manual - Invalid query: SELECT `b`.*, (u.img) user_img, (u.created) user_created, u.name(ifnull(sum(lb.good), 0)) good, (ifnull(sum(lb.poor), 0)) poor, (ifnull(sum(sb.save), 0)) save, (select ifnull(good, 0) from like_b where board_num = b.num and user = u.id) mygood, (select ifnull(poor, 0) from like_b where board_num = b.num and user = u.id) mypoor, (select ifnull(save, 0) from save_b where board_num = b.num and user = u.id) mysave
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
LEFT JOIN `save_b` `sb` ON `b`.`num` = `sb`.`board_num`
WHERE `b`.`num` = '142'
GROUP BY `b`.`num`
ERROR - 2020-11-18 08:55:44 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '187', '105', 'good')
ERROR - 2020-11-18 09:30:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 09:30:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 09:37:51 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', '186', '105')
ERROR - 2020-11-18 09:37:51 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', '186', '105')
ERROR - 2020-11-18 09:38:17 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', '186', '105')
ERROR - 2020-11-18 09:38:17 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', '186', '105')
ERROR - 2020-11-18 09:38:26 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', '186', '105')
ERROR - 2020-11-18 09:38:26 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', '186', '105')
ERROR - 2020-11-18 09:39:05 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', NULL, NULL)
ERROR - 2020-11-18 09:39:05 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', NULL, NULL)
ERROR - 2020-11-18 09:44:05 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', '186', '105')
ERROR - 2020-11-18 09:44:05 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', '186', '105')
ERROR - 2020-11-18 09:44:09 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', NULL, NULL)
ERROR - 2020-11-18 09:44:09 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', NULL, NULL)
ERROR - 2020-11-18 09:45:00 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', NULL, NULL)
ERROR - 2020-11-18 09:45:00 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', NULL, NULL)
ERROR - 2020-11-18 09:45:06 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', NULL, NULL)
ERROR - 2020-11-18 09:45:06 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', NULL, NULL)
ERROR - 2020-11-18 09:45:14 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', '186', '105')
ERROR - 2020-11-18 09:45:14 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', '186', '105')
ERROR - 2020-11-18 09:46:51 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', '186', '105')
ERROR - 2020-11-18 09:46:51 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', '186', '105')
ERROR - 2020-11-18 09:48:15 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', '187', '105')
ERROR - 2020-11-18 09:48:15 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', '187', '105')
ERROR - 2020-11-18 09:48:41 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', '187', '105')
ERROR - 2020-11-18 09:48:41 --> Query error: Unknown column 'board_num' in 'field list' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `board_num`) VALUES ('aaaaeeeeeagad', '187', '105')
ERROR - 2020-11-18 11:01:31 --> Query error: Column 'reply_num' cannot be null - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`) VALUES ('aaaaeeeeeagad', NULL)
ERROR - 2020-11-18 11:01:31 --> Query error: Unknown column 'reply_num' in 'where clause' - Invalid query: DELETE FROM `save_b`
WHERE `user` = 'aaaaeeeeeagad'
AND `reply_num` IS NULL
ERROR - 2020-11-18 11:01:37 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 11:01:37 --> Query error: Unknown column 'reply_num' in 'where clause' - Invalid query: DELETE FROM `save_b`
WHERE `user` = 'aaaaeeeeeagad'
AND `reply_num` = '186'
AND `good` = 1
ERROR - 2020-11-18 11:01:51 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 11:01:51 --> Query error: Unknown column 'reply_num' in 'where clause' - Invalid query: DELETE FROM `save_b`
WHERE `user` = 'aaaaeeeeeagad'
AND `reply_num` = '186'
AND `good` = 1
ERROR - 2020-11-18 11:02:01 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 11:02:01 --> Query error: Unknown column 'reply_num' in 'where clause' - Invalid query: DELETE FROM `save_b`
WHERE `user` = 'aaaaeeeeeagad'
AND `reply_num` = '186'
AND `poor` = 1
ERROR - 2020-11-18 11:03:53 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 11:03:53 --> Query error: Unknown column 'reply_num' in 'where clause' - Invalid query: DELETE FROM `save_b`
WHERE `user` = 'aaaaeeeeeagad'
AND `reply_num` = '186'
AND `poor` = 1
ERROR - 2020-11-18 11:04:04 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 11:04:04 --> Query error: Unknown column 'reply_num' in 'where clause' - Invalid query: DELETE FROM `save_b`
WHERE `user` = 'aaaaeeeeeagad'
AND `reply_num` = '186'
AND `poor` = 1
ERROR - 2020-11-18 11:04:52 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 11:04:52 --> Query error: Unknown column 'reply_num' in 'where clause' - Invalid query: DELETE FROM `save_b`
WHERE `user` = 'aaaaeeeeeagad'
AND `reply_num` = '186'
AND `poor` = 1
ERROR - 2020-11-18 11:06:13 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 11:06:49 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 11:07:40 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 11:14:53 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 11:14:55 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 11:15:02 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 11:15:35 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 11:15:59 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 11:24:43 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 11:30:45 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 11:35:22 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 11:35:50 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 11:35:54 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 11:36:02 --> Query error: Duplicate entry 'aaaaeeeeeagad-187' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '187', 1)
ERROR - 2020-11-18 11:36:28 --> Query error: Duplicate entry 'aaaaeeeeeagad-187' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '187', 1)
ERROR - 2020-11-18 11:36:36 --> Query error: Duplicate entry 'aaaaeeeeeagad-187' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '187', 1)
ERROR - 2020-11-18 11:36:37 --> Query error: Duplicate entry 'aaaaeeeeeagad-187' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '187', 1)
ERROR - 2020-11-18 11:36:44 --> Query error: Duplicate entry 'aaaaeeeeeagad-187' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '187', 1)
ERROR - 2020-11-18 11:36:50 --> Query error: Duplicate entry 'aaaaeeeeeagad-187' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '187', 1)
ERROR - 2020-11-18 11:36:52 --> Query error: Duplicate entry 'aaaaeeeeeagad-188' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '188', 1)
ERROR - 2020-11-18 11:36:53 --> Query error: Duplicate entry 'aaaaeeeeeagad-188' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '188', 1)
ERROR - 2020-11-18 11:36:55 --> Query error: Duplicate entry 'aaaaeeeeeagad-188' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '188', 1)
ERROR - 2020-11-18 11:39:13 --> Query error: Column 'reply_group' cannot be null - Invalid query: INSERT INTO `reply` (`user`, `contents`, `board_num`, `reply_group`) VALUES ('aaaaeeeeeagad', 'dddd', '105', NULL)
ERROR - 2020-11-18 11:44:00 --> Query error: Column 'reply_group' cannot be null - Invalid query: INSERT INTO `reply` (`user`, `contents`, `board_num`, `reply_group`) VALUES ('aaaaeeeeeagad', 'dd', '105', NULL)
ERROR - 2020-11-18 11:45:37 --> Query error: Column 'reply_group' cannot be null - Invalid query: INSERT INTO `reply` (`user`, `contents`, `board_num`, `reply_group`) VALUES ('aaaaeeeeeagad', 'egee', '105', NULL)
ERROR - 2020-11-18 11:47:54 --> Query error: Column 'reply_group' cannot be null - Invalid query: INSERT INTO `reply` (`user`, `contents`, `board_num`, `reply_group`) VALUES ('aaaaeeeeeagad', 'rrr', '105', NULL)
ERROR - 2020-11-18 11:48:21 --> Query error: Column 'reply_group' cannot be null - Invalid query: INSERT INTO `reply` (`user`, `contents`, `board_num`, `reply_group`) VALUES ('aaaaeeeeeagad', 'eg', '105', NULL)
ERROR - 2020-11-18 11:51:26 --> Query error: Duplicate entry 'aaaaeeeeeagad-200' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '200', 1)
ERROR - 2020-11-18 11:52:26 --> Query error: Duplicate entry 'aaaaeeeeeagad-203' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '203', 1)
ERROR - 2020-11-18 11:52:27 --> Query error: Duplicate entry 'aaaaeeeeeagad-197' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '197', 1)
ERROR - 2020-11-18 11:53:19 --> Query error: Duplicate entry 'aaaaeeeeeagad-187' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '187', 1)
ERROR - 2020-11-18 11:53:23 --> Query error: Duplicate entry 'aaaaeeeeeagad-187' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '187', 1)
ERROR - 2020-11-18 11:53:25 --> Query error: Duplicate entry 'aaaaeeeeeagad-187' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '187', 1)
ERROR - 2020-11-18 11:53:27 --> Query error: Duplicate entry 'aaaaeeeeeagad-187' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '187', 1)
ERROR - 2020-11-18 11:56:24 --> Query error: Duplicate entry 'aaaaeeeeeagad-187' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '187', 1)
ERROR - 2020-11-18 11:57:56 --> Query error: Duplicate entry 'aaaaeeeeeagad-188' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '188', 1)
ERROR - 2020-11-18 11:57:58 --> Query error: Duplicate entry 'aaaaeeeeeagad-188' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '188', 1)
ERROR - 2020-11-18 11:57:59 --> Query error: Duplicate entry 'aaaaeeeeeagad-188' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '188', 1)
ERROR - 2020-11-18 11:58:19 --> Query error: Duplicate entry 'aaaaeeeeeagad-188' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '188', 1)
ERROR - 2020-11-18 12:01:57 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 12:02:00 --> Query error: Duplicate entry 'aaaaeeeeeagad-187' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '187', 1)
ERROR - 2020-11-18 12:02:37 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 12:02:48 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 12:02:52 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 12:02:53 --> Query error: Duplicate entry 'aaaaeeeeeagad-186' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '186', 1)
ERROR - 2020-11-18 12:03:09 --> Query error: Duplicate entry 'aaaaeeeeeagad-199' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '199', 1)
ERROR - 2020-11-18 12:03:15 --> Query error: Duplicate entry 'aaaaeeeeeagad-203' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '203', 1)
ERROR - 2020-11-18 12:03:17 --> Query error: Duplicate entry 'aaaaeeeeeagad-197' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '197', 1)
ERROR - 2020-11-18 12:03:20 --> Query error: Duplicate entry 'aaaaeeeeeagad-189' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '189', 1)
ERROR - 2020-11-18 12:03:22 --> Query error: Duplicate entry 'aaaaeeeeeagad-189' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '189', 1)
ERROR - 2020-11-18 12:03:40 --> Query error: Duplicate entry 'aaaaeeeeeagad-189' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '189', 1)
ERROR - 2020-11-18 12:03:54 --> Query error: Duplicate entry 'aaaaeeeeeagad-188' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '188', 1)
ERROR - 2020-11-18 12:03:56 --> Query error: Duplicate entry 'aaaaeeeeeagad-188' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '188', 1)
ERROR - 2020-11-18 12:04:23 --> Query error: Duplicate entry 'aaaaeeeeeagad-204' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '204', 1)
ERROR - 2020-11-18 12:04:25 --> Query error: Duplicate entry 'aaaaeeeeeagad-204' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '204', 1)
ERROR - 2020-11-18 12:04:32 --> Query error: Duplicate entry 'aaaaeeeeeagad-206' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '206', 1)
ERROR - 2020-11-18 12:04:35 --> Query error: Duplicate entry 'aaaaeeeeeagad-206' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '206', 1)
ERROR - 2020-11-18 12:04:50 --> Query error: Duplicate entry 'aaaaeeeeeagad-205' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '205', 1)
ERROR - 2020-11-18 12:05:44 --> 404 Page Not Found: User/logout
ERROR - 2020-11-18 12:05:51 --> 404 Page Not Found: User/logout
ERROR - 2020-11-18 12:08:02 --> Query error: Duplicate entry 'aaaaeeeeeagad-204' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '204', 1)
ERROR - 2020-11-18 12:08:03 --> Query error: Duplicate entry 'aaaaeeeeeagad-205' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '205', 1)
ERROR - 2020-11-18 12:08:08 --> Query error: Duplicate entry 'aaaaeeeeeagad-208' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '208', 1)
ERROR - 2020-11-18 18:08:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 18:08:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 18:27:25 --> Query error: Duplicate entry 'aaaaeeeeeagad-204' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '204', 1)
ERROR - 2020-11-18 18:28:13 --> Query error: Duplicate entry 'aaaaeeeeeagad-204' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '204', 1)
ERROR - 2020-11-18 18:28:14 --> Query error: Duplicate entry 'aaaaeeeeeagad-204' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `poor`) VALUES ('aaaaeeeeeagad', '204', 1)
ERROR - 2020-11-18 18:28:25 --> Query error: Duplicate entry 'aaaaeeeeeagad-207' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`user`, `reply_num`, `good`) VALUES ('aaaaeeeeeagad', '207', 1)
ERROR - 2020-11-18 18:29:09 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 18:30:34 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:31:09 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:32:48 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:32:51 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 18:42:32 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:42:33 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:42:34 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:42:34 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:42:34 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:42:34 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 18:42:35 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 18:42:35 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 18:42:38 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 18:44:05 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 18:44:12 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 18:45:33 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:46:02 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:46:03 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 18:46:04 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 18:46:07 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:46:07 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 18:46:07 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 18:46:08 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 18:46:08 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 18:46:08 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 18:47:03 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 18:47:03 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 18:47:04 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 18:47:04 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:47:05 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:47:05 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 18:47:05 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 18:47:06 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 18:47:10 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 18:47:11 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:47:11 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:47:12 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:47:30 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 18:48:05 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:48:06 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 18:48:06 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 18:48:07 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 18:48:07 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 18:48:07 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 18:48:07 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 18:48:08 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:48:09 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:48:23 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 18:51:32 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 18:54:35 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:55:58 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:56:33 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:56:41 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:56:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '(`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', NULL, NULL)' at line 1 - Invalid query: INSERT INTO  (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', NULL, NULL)
ERROR - 2020-11-18 18:57:07 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:57:37 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 18:58:20 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 19:00:08 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 19:01:48 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 19:01:49 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 19:01:50 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 19:01:50 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 19:02:21 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 19:02:21 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 19:02:31 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 19:02:32 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 19:02:32 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 19:03:01 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 19:03:03 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 19:03:05 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 19:03:24 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 19:03:40 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 19:03:43 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 19:04:01 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 19:04:04 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 19:09:36 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 19:09:38 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 19:14:56 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'good')
ERROR - 2020-11-18 19:14:57 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'poor')
ERROR - 2020-11-18 19:14:57 --> Query error: Unknown column 'mode' in 'field list' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `mode`) VALUES ('aaaaeeeeeagad', '105', 'save')
ERROR - 2020-11-18 19:35:12 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:35:58 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:36:06 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:36:09 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:36:10 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:36:10 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:36:10 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:36:10 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:36:10 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:36:10 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:36:11 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:36:11 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:36:11 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:36:11 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:36:11 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:36:14 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `save`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:36:18 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `save`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:39:24 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `save`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:39:38 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `save`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:40:02 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:40:03 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:40:03 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:40:04 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:40:35 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:40:42 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:40:49 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:40:57 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `save`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:40:58 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `save`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:40:58 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `save`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:40:58 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `save`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:41:51 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:43:27 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:43:28 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:43:29 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:43:29 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `save`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:43:29 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `save`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:43:30 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `save`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:43:30 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `save`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:43:31 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:44:07 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:44:07 --> Query error: Unknown column 'reply_num' in 'where clause' - Invalid query: DELETE FROM `like_b`
WHERE `user` = 'aaaaeeeeeagad'
AND `reply_num` IS NULL
ERROR - 2020-11-18 19:44:38 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:44:40 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `save`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:45:38 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:45:39 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:45:46 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:45:48 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:45:49 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:45:56 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:45:57 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:46:13 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:46:14 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:46:18 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:46:40 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:51:43 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:54:00 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:57:01 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:57:09 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 19:59:42 --> Query error: Duplicate entry 'aaaaeeeeeagad-105' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 20:06:52 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_b`, CONSTRAINT `like_b_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('aaaaeeeeeagad', '105', 1)
ERROR - 2020-11-18 20:06:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 20:06:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 20:07:24 --> 404 Page Not Found: User/logout
ERROR - 2020-11-18 20:07:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 20:07:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 20:09:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 20:09:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 20:10:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 20:10:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 20:10:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 20:10:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 20:15:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 20:15:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 20:17:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 20:17:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 20:18:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 20:18:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 20:26:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 20:26:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, inst' at line 1 - Invalid query: SELECT `select` `bb`.`num`, `bb`.`img`
FROM `board` `b`
LEFT JOIN (select num, substr(contents, instr(contents, 'img alt=')+17, instr(substr(contents, instr(contents, 'img alt')+17), '"')-1) img from board) bb ON `b`.`num` = `bb`.`num`
WHERE `b`.`cat` = '자기소개'
AND `bb`.`img` != ''
 LIMIT 8
ERROR - 2020-11-18 20:28:17 --> Query error: Duplicate entry 'hamen1219-140' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('hamen1219', '140', 1)
ERROR - 2020-11-18 20:28:18 --> Query error: Duplicate entry 'hamen1219-140' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `poor`) VALUES ('hamen1219', '140', 1)
ERROR - 2020-11-18 20:28:19 --> Query error: Duplicate entry 'hamen1219-140' for key 'PRIMARY' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `save`) VALUES ('hamen1219', '140', 1)
ERROR - 2020-11-18 20:29:42 --> Query error: Duplicate entry 'hamen1219-140' for key 'PRIMARY' - Invalid query: INSERT INTO `save_b` (`user`, `board_num`, `save`) VALUES ('hamen1219', '140', 1)
ERROR - 2020-11-18 20:29:43 --> Query error: Duplicate entry 'hamen1219-140' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('hamen1219', '140', 1)
ERROR - 2020-11-18 20:30:49 --> 404 Page Not Found: User/myroom
ERROR - 2020-11-18 20:54:54 --> Query error: Duplicate entry 'hamen1219-140' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`user`, `board_num`, `good`) VALUES ('hamen1219', '140', 1)
