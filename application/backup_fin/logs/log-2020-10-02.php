<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-02 00:34:49 --> Query error: Unknown column 'u.img user_img b.num' in 'field list' - Invalid query: SELECT `r`.*, `b`.*, `u`.`img user_img b`.`num` `reply_num`, ifnull(count(r.num), 0) reply_cnt, ifnull(sum(lb.good), 0) good
FROM `board` `b`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
WHERE `b`.`num` = '60'
GROUP BY `b`.`num`
ERROR - 2020-10-02 00:34:49 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 112
ERROR - 2020-10-02 00:34:49 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 157
ERROR - 2020-10-02 00:34:49 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 163
ERROR - 2020-10-02 00:34:49 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 163
ERROR - 2020-10-02 00:34:49 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 167
ERROR - 2020-10-02 00:34:49 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 168
ERROR - 2020-10-02 00:34:49 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 169
ERROR - 2020-10-02 00:34:49 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 173
ERROR - 2020-10-02 00:34:49 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 173
ERROR - 2020-10-02 00:34:49 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 177
ERROR - 2020-10-02 00:37:04 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 00:37:27 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 00:47:15 --> Severity: Notice --> Undefined variable: reply_cnt C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 183
ERROR - 2020-10-02 02:37:41 --> Severity: error --> Exception: syntax error, unexpected ']' C:\Apache24\htdocs\application\libraries\Result.php 86
ERROR - 2020-10-02 02:37:56 --> Severity: error --> Exception: syntax error, unexpected ''sort'' (T_CONSTANT_ENCAPSED_STRING), expecting ']' C:\Apache24\htdocs\application\models\Board_m.php 105
ERROR - 2020-10-02 02:38:22 --> Severity: Notice --> Undefined variable: sort C:\Apache24\htdocs\application\libraries\Result.php 101
ERROR - 2020-10-02 02:38:22 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\libraries\Result.php 101
ERROR - 2020-10-02 02:38:22 --> Severity: Notice --> Undefined variable: sort C:\Apache24\htdocs\application\libraries\Result.php 101
ERROR - 2020-10-02 02:38:22 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\libraries\Result.php 101
ERROR - 2020-10-02 02:38:22 --> Query error: Unknown column 'r' in 'order clause' - Invalid query: SELECT `r`.*, `u`.`img` `user_img`, ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
WHERE `r`.`board_num` = '60'
GROUP BY `r`.`num`
ORDER BY `r`, `a`
ERROR - 2020-10-02 02:38:22 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 119
ERROR - 2020-10-02 02:38:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 223
ERROR - 2020-10-02 02:40:27 --> Severity: Notice --> Undefined variable: sort C:\Apache24\htdocs\application\libraries\Result.php 102
ERROR - 2020-10-02 02:40:27 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\libraries\Result.php 102
ERROR - 2020-10-02 02:40:27 --> Severity: Notice --> Undefined variable: sort C:\Apache24\htdocs\application\libraries\Result.php 102
ERROR - 2020-10-02 02:40:27 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\libraries\Result.php 102
ERROR - 2020-10-02 02:40:27 --> Query error: Unknown column 'r' in 'order clause' - Invalid query: SELECT `r`.*, `u`.`img` `user_img`, ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
WHERE `r`.`board_num` = '60'
GROUP BY `r`.`num`
ORDER BY `r`, `a`
ERROR - 2020-10-02 02:40:27 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 119
ERROR - 2020-10-02 02:40:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 223
ERROR - 2020-10-02 02:42:40 --> Query error: Unknown column 'r.created' in 'order clause' - Invalid query: SELECT *
FROM `board` `b`
ORDER BY `r`.`created` DESC
 LIMIT 5
ERROR - 2020-10-02 02:42:40 --> Query error: Unknown column 'r' in 'order clause' - Invalid query: SELECT `r`.*, `u`.`img` `user_img`, ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
WHERE `r`.`board_num` = '60'
GROUP BY `r`.`num`
ORDER BY `r`, `a`
ERROR - 2020-10-02 02:42:40 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 117
ERROR - 2020-10-02 02:42:40 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 119
ERROR - 2020-10-02 02:42:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 223
ERROR - 2020-10-02 02:42:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 02:46:37 --> Query error: Unknown column 'r.created' in 'order clause' - Invalid query: SELECT *
FROM `board` `b`
ORDER BY `r`.`created` DESC
 LIMIT 5
ERROR - 2020-10-02 02:46:37 --> Query error: Unknown column 'r' in 'order clause' - Invalid query: SELECT `r`.*, `u`.`img` `user_img`, ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
WHERE `r`.`board_num` = '60'
GROUP BY `r`.`num`
ORDER BY `r`, `a`
ERROR - 2020-10-02 02:46:37 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 118
ERROR - 2020-10-02 02:46:37 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 120
ERROR - 2020-10-02 02:46:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 223
ERROR - 2020-10-02 02:46:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 02:47:18 --> Query error: Unknown column 'r.created' in 'order clause' - Invalid query: SELECT *
FROM `board` `b`
ORDER BY `r`.`created` DESC
 LIMIT 5
ERROR - 2020-10-02 02:47:18 --> Query error: Unknown column 'r' in 'order clause' - Invalid query: SELECT `r`.*, `u`.`img` `user_img`, ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
WHERE `r`.`board_num` = '60'
GROUP BY `r`.`num`
ORDER BY `r`, `a`
ERROR - 2020-10-02 02:47:18 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 118
ERROR - 2020-10-02 02:47:18 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 120
ERROR - 2020-10-02 02:47:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 223
ERROR - 2020-10-02 02:47:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 02:49:17 --> Query error: Unknown column 'r.created' in 'order clause' - Invalid query: SELECT *
FROM `board` `b`
ORDER BY `r`.`created` DESC
 LIMIT 5
ERROR - 2020-10-02 02:49:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` =' at line 1 - Invalid query: SELECT `r`.*, `u`.`img` `user_img`, r.created reply_created ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
WHERE `r`.`board_num` = '60'
GROUP BY `r`.`num`
ORDER BY `r`, `a`
ERROR - 2020-10-02 02:49:17 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 118
ERROR - 2020-10-02 02:49:17 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 120
ERROR - 2020-10-02 02:49:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 223
ERROR - 2020-10-02 02:49:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 02:49:50 --> Query error: Unknown column 'r.created' in 'order clause' - Invalid query: SELECT *
FROM `board` `b`
ORDER BY `r`.`created` DESC
 LIMIT 5
ERROR - 2020-10-02 02:49:50 --> Query error: Unknown column 'r' in 'order clause' - Invalid query: SELECT `r`.*, `u`.`img` `user_img`, `r`.`created` `reply_cereated`, ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
WHERE `r`.`board_num` = '60'
GROUP BY `r`.`num`
ORDER BY `r`, `a`
ERROR - 2020-10-02 02:49:50 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 118
ERROR - 2020-10-02 02:49:50 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 120
ERROR - 2020-10-02 02:49:50 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 223
ERROR - 2020-10-02 02:49:50 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 02:58:42 --> Query error: Unknown column 'r.created' in 'order clause' - Invalid query: SELECT *
FROM `board` `b`
ORDER BY `r`.`created` DESC
 LIMIT 5
ERROR - 2020-10-02 02:58:42 --> Query error: Unknown column 'r' in 'order clause' - Invalid query: SELECT `r`.*, `u`.`img` `user_img`, `r`.`created` `reply_cereated`, ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
WHERE `r`.`board_num` = '60'
GROUP BY `r`.`num`
ORDER BY `r`, `a`
ERROR - 2020-10-02 02:58:42 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 119
ERROR - 2020-10-02 02:58:42 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 121
ERROR - 2020-10-02 02:58:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 223
ERROR - 2020-10-02 02:58:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 04:41:28 --> Query error: Unknown column 'r.created' in 'order clause' - Invalid query: SELECT *
FROM `board` `b`
ORDER BY `r`.`created` DESC
 LIMIT 5
ERROR - 2020-10-02 04:41:28 --> Query error: Unknown column 'r' in 'order clause' - Invalid query: SELECT `r`.*, `u`.`img` `user_img`, `r`.`created` `reply_cereated`, ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
WHERE `r`.`board_num` = '60'
GROUP BY `r`.`num`
ORDER BY `r`, `a`
ERROR - 2020-10-02 04:41:28 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 119
ERROR - 2020-10-02 04:41:28 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 121
ERROR - 2020-10-02 04:41:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 223
ERROR - 2020-10-02 04:41:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 04:42:25 --> Query error: Unknown column 'r.created' in 'order clause' - Invalid query: SELECT *
FROM `board` `b`
ORDER BY `r`.`created` DESC
 LIMIT 5
ERROR - 2020-10-02 04:42:25 --> Query error: Unknown column 'r' in 'order clause' - Invalid query: SELECT `r`.*, `u`.`img` `user_img`, `r`.`created` `reply_cereated`, ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
WHERE `r`.`board_num` = '60'
GROUP BY `r`.`num`
ORDER BY `r`, `a`
ERROR - 2020-10-02 04:42:25 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 119
ERROR - 2020-10-02 04:42:25 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 121
ERROR - 2020-10-02 04:42:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 223
ERROR - 2020-10-02 04:42:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 04:45:17 --> Query error: Unknown column 'r.created' in 'order clause' - Invalid query: SELECT *
FROM `board` `b`
ORDER BY `r`.`created` DESC
 LIMIT 5
ERROR - 2020-10-02 04:45:17 --> Query error: Unknown column 'r' in 'order clause' - Invalid query: SELECT `r`.*, `u`.`img` `user_img`, `r`.`created` `reply_cereated`, ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
WHERE `r`.`board_num` = '60'
GROUP BY `r`.`num`
ORDER BY `r`, `a`
ERROR - 2020-10-02 04:45:17 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 119
ERROR - 2020-10-02 04:45:17 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 121
ERROR - 2020-10-02 04:45:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 223
ERROR - 2020-10-02 04:45:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 04:45:49 --> Query error: Unknown column 'r.created' in 'order clause' - Invalid query: SELECT *
FROM `board` `b`
ORDER BY `r`.`created` DESC
 LIMIT 5
ERROR - 2020-10-02 04:45:49 --> Query error: Unknown column 'r' in 'order clause' - Invalid query: SELECT `r`.*, `u`.`img` `user_img`, `r`.`created` `reply_cereated`, ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
WHERE `r`.`board_num` = '60'
GROUP BY `r`.`num`
ORDER BY `r`, `a`
ERROR - 2020-10-02 04:45:49 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 119
ERROR - 2020-10-02 04:45:49 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 121
ERROR - 2020-10-02 04:45:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 223
ERROR - 2020-10-02 04:45:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 04:45:58 --> Query error: Unknown column 'r.created' in 'order clause' - Invalid query: SELECT *
FROM `board` `b`
ORDER BY `r`.`created` DESC
 LIMIT 5
ERROR - 2020-10-02 04:45:58 --> Query error: Unknown column 'r' in 'order clause' - Invalid query: SELECT `r`.*, `u`.`img` `user_img`, `r`.`created` `reply_cereated`, ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
WHERE `r`.`board_num` = '60'
GROUP BY `r`.`num`
ORDER BY `r`, `a`
ERROR - 2020-10-02 04:45:58 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 119
ERROR - 2020-10-02 04:45:58 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 121
ERROR - 2020-10-02 04:45:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 223
ERROR - 2020-10-02 04:45:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 04:47:15 --> Query error: Unknown column 'r.created' in 'order clause' - Invalid query: SELECT *
FROM `board` `b`
ORDER BY `r`.`created` DESC
 LIMIT 5
ERROR - 2020-10-02 04:47:15 --> Severity: Notice --> Array to string conversion C:\Apache24\htdocs\application\libraries\Result.php 97
ERROR - 2020-10-02 04:47:15 --> Severity: Notice --> Array to string conversion C:\Apache24\htdocs\application\libraries\Result.php 97
ERROR - 2020-10-02 04:47:15 --> Query error: Unknown column 'r' in 'order clause' - Invalid query: SELECT `r`.*, `u`.`img` `user_img`, `r`.`created` `reply_cereated`, ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
WHERE `r`.`board_num` = '60'
GROUP BY `r`.`num`
ORDER BY `r`, `a`
ERROR - 2020-10-02 04:47:15 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 119
ERROR - 2020-10-02 04:47:15 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 121
ERROR - 2020-10-02 04:47:15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 223
ERROR - 2020-10-02 04:47:15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 04:49:33 --> Query error: Unknown column 'r.created' in 'order clause' - Invalid query: SELECT *
FROM `board` `b`
ORDER BY `r`.`created` DESC
 LIMIT 5
ERROR - 2020-10-02 04:49:33 --> Query error: Unknown column 'r' in 'order clause' - Invalid query: SELECT `r`.*, `u`.`img` `user_img`, `r`.`created` `reply_cereated`, ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
WHERE `r`.`board_num` = '60'
GROUP BY `r`.`num`
ORDER BY `r`, `a`
ERROR - 2020-10-02 04:49:33 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 119
ERROR - 2020-10-02 04:49:33 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 121
ERROR - 2020-10-02 04:49:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 223
ERROR - 2020-10-02 04:49:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 04:51:56 --> Query error: Unknown column 'r' in 'order clause' - Invalid query: SELECT `r`.*, `u`.`img` `user_img`, `r`.`created` `reply_cereated`, ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
WHERE `r`.`board_num` = '60'
GROUP BY `r`.`num`
ORDER BY `r`, `a`
ERROR - 2020-10-02 04:51:56 --> Severity: Notice --> Undefined variable: side C:\Apache24\htdocs\application\models\Board_m.php 117
ERROR - 2020-10-02 04:51:56 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\models\Board_m.php 117
ERROR - 2020-10-02 04:51:56 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 119
ERROR - 2020-10-02 04:51:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 223
ERROR - 2020-10-02 04:51:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 04:52:36 --> Severity: Notice --> Array to string conversion C:\Apache24\htdocs\application\libraries\Result.php 94
ERROR - 2020-10-02 04:52:36 --> Query error: Unknown column 'r' in 'order clause' - Invalid query: SELECT `r`.*, `u`.`img` `user_img`, `r`.`created` `reply_cereated`, ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
WHERE `r`.`board_num` = '60'
GROUP BY `r`.`num`
ORDER BY `r`, `a`
ERROR - 2020-10-02 04:52:36 --> Severity: Notice --> Undefined variable: side C:\Apache24\htdocs\application\models\Board_m.php 117
ERROR - 2020-10-02 04:52:36 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\models\Board_m.php 117
ERROR - 2020-10-02 04:52:36 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 119
ERROR - 2020-10-02 04:52:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 223
ERROR - 2020-10-02 04:52:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 04:53:31 --> Severity: Notice --> Array to string conversion C:\Apache24\htdocs\application\libraries\Result.php 94
ERROR - 2020-10-02 04:53:31 --> Query error: Unknown column 'r' in 'order clause' - Invalid query: SELECT `r`.*, `u`.`img` `user_img`, `r`.`created` `reply_cereated`, ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
WHERE `r`.`board_num` = '60'
GROUP BY `r`.`num`
ORDER BY `r`, `a`
ERROR - 2020-10-02 04:53:31 --> Severity: Notice --> Undefined variable: side C:\Apache24\htdocs\application\models\Board_m.php 117
ERROR - 2020-10-02 04:53:31 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\models\Board_m.php 117
ERROR - 2020-10-02 04:53:31 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 119
ERROR - 2020-10-02 04:53:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 223
ERROR - 2020-10-02 04:53:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 04:53:33 --> Severity: Notice --> Array to string conversion C:\Apache24\htdocs\application\libraries\Result.php 94
ERROR - 2020-10-02 04:53:33 --> Query error: Unknown column 'r' in 'order clause' - Invalid query: SELECT `r`.*, `u`.`img` `user_img`, `r`.`created` `reply_cereated`, ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
WHERE `r`.`board_num` = '60'
GROUP BY `r`.`num`
ORDER BY `r`, `a`
ERROR - 2020-10-02 04:53:33 --> Severity: Notice --> Undefined variable: side C:\Apache24\htdocs\application\models\Board_m.php 117
ERROR - 2020-10-02 04:53:33 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\models\Board_m.php 117
ERROR - 2020-10-02 04:53:33 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 119
ERROR - 2020-10-02 04:53:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 223
ERROR - 2020-10-02 04:53:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 04:54:02 --> Severity: Notice --> Array to string conversion C:\Apache24\htdocs\application\libraries\Result.php 94
ERROR - 2020-10-02 04:54:02 --> Query error: Unknown column 'r' in 'order clause' - Invalid query: SELECT `r`.*, `u`.`img` `user_img`, `r`.`created` `reply_cereated`, ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
WHERE `r`.`board_num` = '60'
GROUP BY `r`.`num`
ORDER BY `r`, `a`
ERROR - 2020-10-02 04:54:02 --> Severity: Notice --> Undefined variable: side C:\Apache24\htdocs\application\models\Board_m.php 117
ERROR - 2020-10-02 04:54:02 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\models\Board_m.php 117
ERROR - 2020-10-02 04:54:02 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 119
ERROR - 2020-10-02 04:54:02 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 223
ERROR - 2020-10-02 04:54:02 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 04:54:32 --> Query error: Unknown column 'r' in 'order clause' - Invalid query: SELECT `r`.*, `u`.`img` `user_img`, `r`.`created` `reply_cereated`, ifnull(sum(lr.good), 0) good
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
WHERE `r`.`board_num` = '60'
GROUP BY `r`.`num`
ORDER BY `r`, `a`
ERROR - 2020-10-02 04:54:32 --> Severity: Notice --> Undefined variable: side C:\Apache24\htdocs\application\models\Board_m.php 117
ERROR - 2020-10-02 04:54:32 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\models\Board_m.php 117
ERROR - 2020-10-02 04:54:32 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 119
ERROR - 2020-10-02 04:54:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 223
ERROR - 2020-10-02 04:54:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined variable: side C:\Apache24\htdocs\application\models\Board_m.php 117
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\models\Board_m.php 117
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:55:34 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:55:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined variable: side C:\Apache24\htdocs\application\models\Board_m.php 118
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\models\Board_m.php 118
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:01 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 04:58:26 --> Query error: Unknown column 'r.created' in 'order clause' - Invalid query: SELECT *
FROM `board` `b`
ORDER BY `r`.`created` DESC
 LIMIT 5
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 119
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:26 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 04:58:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 05:00:02 --> Query error: Unknown column 'r.created' in 'order clause' - Invalid query: SELECT *
FROM `board` `b`
ORDER BY `r`.`created` DESC
 LIMIT 5
ERROR - 2020-10-02 05:00:02 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 120
ERROR - 2020-10-02 05:00:02 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:02 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:02 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:02 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:02 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:02 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:02 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:02 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:02 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:02 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:02 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:02 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:02 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:02 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:02 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:02 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:02 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:02 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:03 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:03 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:03 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 05:00:17 --> Query error: Unknown column 'r.created' in 'order clause' - Invalid query: SELECT *
FROM `board` `b`
ORDER BY `r`.`created` DESC
 LIMIT 5
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 121
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:17 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 05:00:35 --> Query error: Unknown column 'r.created' in 'order clause' - Invalid query: SELECT *
FROM `board` `b`
ORDER BY `r`.`created` DESC
 LIMIT 5
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 121
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:35 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:00:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 253
ERROR - 2020-10-02 05:02:41 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:02:41 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:02:41 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:02:41 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:02:41 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:02:41 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:02:41 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:02:41 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:02:41 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:02:41 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:02:41 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:02:41 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:02:41 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:02:41 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:02:41 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:02:41 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:02:41 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:02:41 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:02:41 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:02:41 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:02:41 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:04:36 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:04:36 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:04:36 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:04:36 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:04:36 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:04:36 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:04:36 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:04:36 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:04:36 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:04:36 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:04:36 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:04:36 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:04:36 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:04:36 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:04:36 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:04:36 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:04:36 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:04:36 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:04:36 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:04:36 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 05:04:36 --> Severity: Notice --> Undefined index: parent_num C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 233
ERROR - 2020-10-02 06:21:05 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:21:21 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:21:29 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:21:37 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:21:43 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:21:53 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:22:48 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:23:00 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:23:48 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:23:56 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:24:03 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:24:09 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:24:25 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:24:42 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:24:49 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:24:57 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:25:44 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:25:55 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:27:13 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:27:44 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:28:07 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:28:12 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:30:06 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:31:55 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:32:01 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:38:41 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:43:27 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:43:43 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:45:19 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:46:00 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:47:05 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:47:31 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:47:47 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:48:24 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:49:00 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:49:22 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:49:41 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:49:52 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:50:09 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:50:53 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:51:08 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:53:09 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:53:16 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:56:07 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:56:16 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:56:38 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:56:55 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:57:08 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:57:12 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:57:22 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:58:17 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:58:33 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:59:23 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 06:59:38 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 07:02:21 --> 404 Page Not Found: Img/users
ERROR - 2020-10-02 07:11:48 --> Severity: Notice --> Undefined index: user_img C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 308
ERROR - 2020-10-02 07:11:48 --> Severity: Notice --> Undefined index: user_img C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 325
ERROR - 2020-10-02 07:11:48 --> Severity: Notice --> Undefined index: user_img C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 325
ERROR - 2020-10-02 07:11:48 --> Severity: Notice --> Undefined index: user_img C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 325
ERROR - 2020-10-02 07:11:48 --> Severity: Notice --> Undefined index: user_img C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 308
ERROR - 2020-10-02 07:11:48 --> Severity: Notice --> Undefined index: user_img C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 325
ERROR - 2020-10-02 07:11:48 --> Severity: Notice --> Undefined index: user_img C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 308
ERROR - 2020-10-02 07:11:55 --> Severity: Notice --> Undefined index: user_img C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 308
ERROR - 2020-10-02 07:11:55 --> Severity: Notice --> Undefined index: user_img C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 308
ERROR - 2020-10-02 07:11:55 --> Severity: Notice --> Undefined index: user_img C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 308
ERROR - 2020-10-02 07:11:56 --> Severity: Notice --> Undefined index: user_img C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 308
ERROR - 2020-10-02 07:11:56 --> Severity: Notice --> Undefined index: user_img C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 308
ERROR - 2020-10-02 07:11:56 --> Severity: Notice --> Undefined index: user_img C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 308
