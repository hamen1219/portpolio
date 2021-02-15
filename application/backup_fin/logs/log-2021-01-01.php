<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-01 05:23:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE `cat` = '자유게시판'' at line 2 - Invalid query: SELECT *
WHERE `cat` = '자유게시판'
ERROR - 2021-01-01 16:39:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 8 - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `b`.`cat` = '자유게시판'
GROUP BY `b`.`num`
 LIMIT -10, 10
ERROR - 2021-01-01 16:57:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 8 - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `b`.`cat` = '자유게시판'
GROUP BY `b`.`num`
 LIMIT -10, 10
ERROR - 2021-01-01 17:27:48 --> Query error: Unknown column 'd' in 'order clause' - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `b`.`cat` = '자유게시판'
GROUP BY `b`.`num`
ORDER BY `d`
 LIMIT 10
ERROR - 2021-01-01 17:27:52 --> Query error: Unknown column 'd' in 'order clause' - Invalid query: SELECT `b`.*, `u`.`dept` `dept`, count(r.num) reply_cnt, ifnull(sum(lb.good), 0) good, substr(b.contents, instr(b.contents, 'img alt=')+16, instr(substr(b.contents, instr(b.contents, 'img alt=')+16), '"')-1) board_img
FROM `board` `b`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `b`.`cat` = '자유게시판'
GROUP BY `b`.`num`
ORDER BY `d`
 LIMIT 20, 10
