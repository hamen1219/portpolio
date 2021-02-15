<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-22 05:52:52 --> Severity: Compile Warning --> Unterminated comment starting line 161 C:\Apache24\htdocs\application\libraries\Result.php 161
ERROR - 2020-09-22 05:54:22 --> Severity: Compile Warning --> Unterminated comment starting line 161 C:\Apache24\htdocs\application\libraries\Result.php 161
ERROR - 2020-09-22 05:54:23 --> Severity: Compile Warning --> Unterminated comment starting line 161 C:\Apache24\htdocs\application\libraries\Result.php 161
ERROR - 2020-09-22 05:54:59 --> Severity: Compile Warning --> Unterminated comment starting line 161 C:\Apache24\htdocs\application\libraries\Result.php 161
ERROR - 2020-09-22 05:55:00 --> Severity: Compile Warning --> Unterminated comment starting line 161 C:\Apache24\htdocs\application\libraries\Result.php 161
ERROR - 2020-09-22 05:58:44 --> Severity: Compile Warning --> Unterminated comment starting line 161 C:\Apache24\htdocs\application\libraries\Result.php 161
ERROR - 2020-09-22 11:31:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\libraries\Result.php 83
ERROR - 2020-09-22 11:31:30 --> Severity: Notice --> Array to string conversion C:\Apache24\htdocs\system\database\DB_query_builder.php 980
ERROR - 2020-09-22 11:31:30 --> Severity: Notice --> Array to string conversion C:\Apache24\htdocs\system\database\DB_query_builder.php 980
ERROR - 2020-09-22 11:31:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\libraries\Result.php 83
ERROR - 2020-09-22 11:31:30 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\views\homepage\board\admin\read.php 232
ERROR - 2020-09-22 11:32:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\libraries\Result.php 83
ERROR - 2020-09-22 11:32:19 --> Severity: Notice --> Array to string conversion C:\Apache24\htdocs\system\database\DB_query_builder.php 980
ERROR - 2020-09-22 11:32:19 --> Severity: Notice --> Array to string conversion C:\Apache24\htdocs\system\database\DB_query_builder.php 980
ERROR - 2020-09-22 11:32:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\libraries\Result.php 83
ERROR - 2020-09-22 11:32:19 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\views\homepage\board\admin\read.php 233
ERROR - 2020-09-22 11:38:21 --> Severity: error --> Exception: syntax error, unexpected ',' C:\Apache24\htdocs\application\views\homepage\board\admin\read.php 226
ERROR - 2020-09-22 12:29:17 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ')' C:\Apache24\htdocs\application\libraries\Result.php 62
ERROR - 2020-09-22 12:42:00 --> Query error: FUNCTION test.to_number does not exist - Invalid query: SELECT `u`.*, `r`.*, to_number(sum(lr.good)) good, to_number(sum(lr.poor)) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
ERROR - 2020-09-22 12:43:00 --> Query error: FUNCTION test.to_number does not exist - Invalid query: SELECT `u`.*, `r`.*, to_number(sum(lr.good), 9) good, to_number(sum(lr.poor), 9) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `u`.`id` = `r`.`user`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
ERROR - 2020-09-22 13:10:12 --> Severity: Notice --> Undefined variable: page C:\Apache24\htdocs\application\controllers\Board.php 147
ERROR - 2020-09-22 16:08:52 --> Severity: Notice --> Undefined variable: methods C:\Apache24\htdocs\application\controllers\Board.php 17
ERROR - 2020-09-22 16:09:01 --> Severity: Notice --> Undefined variable: methods C:\Apache24\htdocs\application\controllers\Board.php 17
ERROR - 2020-09-22 16:10:28 --> Severity: Notice --> Undefined variable: cnt C:\Apache24\htdocs\application\controllers\Board.php 22
ERROR - 2020-09-22 16:10:28 --> Severity: error --> Exception: syntax error, unexpected ',' C:\Apache24\htdocs\application\libraries\Paging.php 30
ERROR - 2020-09-22 16:14:36 --> Severity: error --> Exception: syntax error, unexpected ',' C:\Apache24\htdocs\application\libraries\Paging.php 30
ERROR - 2020-09-22 16:14:58 --> Severity: error --> Exception: syntax error, unexpected ',' C:\Apache24\htdocs\application\libraries\Paging.php 30
ERROR - 2020-09-22 16:14:59 --> Severity: error --> Exception: syntax error, unexpected ',' C:\Apache24\htdocs\application\libraries\Paging.php 30
ERROR - 2020-09-22 16:15:01 --> Severity: error --> Exception: syntax error, unexpected ',' C:\Apache24\htdocs\application\libraries\Paging.php 30
ERROR - 2020-09-22 16:15:02 --> Severity: error --> Exception: syntax error, unexpected ',' C:\Apache24\htdocs\application\libraries\Paging.php 30
ERROR - 2020-09-22 16:15:02 --> Severity: error --> Exception: syntax error, unexpected ',' C:\Apache24\htdocs\application\libraries\Paging.php 30
ERROR - 2020-09-22 16:15:03 --> Severity: error --> Exception: syntax error, unexpected ',' C:\Apache24\htdocs\application\libraries\Paging.php 30
ERROR - 2020-09-22 16:15:03 --> Severity: error --> Exception: syntax error, unexpected ',' C:\Apache24\htdocs\application\libraries\Paging.php 30
ERROR - 2020-09-22 16:15:03 --> Severity: error --> Exception: syntax error, unexpected ',' C:\Apache24\htdocs\application\libraries\Paging.php 30
ERROR - 2020-09-22 16:15:04 --> Severity: error --> Exception: syntax error, unexpected ',' C:\Apache24\htdocs\application\libraries\Paging.php 30
ERROR - 2020-09-22 16:15:12 --> Severity: Notice --> Undefined variable: join C:\Apache24\htdocs\application\controllers\Board.php 126
ERROR - 2020-09-22 16:15:12 --> Severity: Notice --> Undefined variable: select C:\Apache24\htdocs\application\controllers\Board.php 126
ERROR - 2020-09-22 16:15:12 --> Severity: Notice --> Undefined variable: from C:\Apache24\htdocs\application\controllers\Board.php 126
ERROR - 2020-09-22 16:15:12 --> Severity: Notice --> Undefined variable: where C:\Apache24\htdocs\application\controllers\Board.php 126
ERROR - 2020-09-22 16:15:12 --> Severity: Notice --> Undefined variable: group C:\Apache24\htdocs\application\controllers\Board.php 126
ERROR - 2020-09-22 16:15:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 294
ERROR - 2020-09-22 16:15:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 16:15:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\libraries\Result.php 100
ERROR - 2020-09-22 16:15:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 294
ERROR - 2020-09-22 16:15:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 16:15:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\libraries\Result.php 100
ERROR - 2020-09-22 16:15:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 294
ERROR - 2020-09-22 16:15:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 16:15:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\libraries\Result.php 100
ERROR - 2020-09-22 16:15:12 --> Severity: error --> Exception: syntax error, unexpected 'endforeach' (T_ENDFOREACH) C:\Apache24\htdocs\application\views\homepage\board\list.php 33
ERROR - 2020-09-22 16:15:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\Apache24\htdocs\system\core\Exceptions.php:271) C:\Apache24\htdocs\system\core\Common.php 570
ERROR - 2020-09-22 16:31:03 --> Severity: error --> Exception: syntax error, unexpected '$join' (T_VARIABLE) C:\Apache24\htdocs\application\controllers\Board.php 127
ERROR - 2020-09-22 16:31:49 --> Query error: Unknown table 'test.b' - Invalid query: SELECT `b`.*, ifnull(sum(lb.board_num), 0) good
FROM `board`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
WHERE `board`.`cat` = '자유게시판'
ERROR - 2020-09-22 16:50:22 --> Severity: Notice --> Undefined variable: where C:\Apache24\htdocs\application\libraries\Paging.php 128
ERROR - 2020-09-22 16:50:22 --> Severity: Notice --> Undefined variable: like C:\Apache24\htdocs\application\libraries\Paging.php 128
ERROR - 2020-09-22 16:50:22 --> Severity: Notice --> Undefined variable: join C:\Apache24\htdocs\application\libraries\Result.php 98
ERROR - 2020-09-22 16:50:22 --> Severity: Notice --> Undefined variable: join C:\Apache24\htdocs\application\libraries\Result.php 101
ERROR - 2020-09-22 16:50:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\libraries\Result.php 101
ERROR - 2020-09-22 16:50:22 --> Query error: Unknown column 'lb.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
GROUP BY `lb`.`board_num`
HAVING `board`.`cat` = '자유게시판'
ERROR - 2020-09-22 16:50:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\Apache24\htdocs\system\core\Exceptions.php:271) C:\Apache24\htdocs\system\core\Common.php 570
ERROR - 2020-09-22 16:51:51 --> Severity: Notice --> Undefined variable: like C:\Apache24\htdocs\application\libraries\Paging.php 128
ERROR - 2020-09-22 16:51:51 --> Severity: Notice --> Undefined variable: join C:\Apache24\htdocs\application\libraries\Result.php 98
ERROR - 2020-09-22 16:51:51 --> Severity: Notice --> Undefined variable: join C:\Apache24\htdocs\application\libraries\Result.php 101
ERROR - 2020-09-22 16:51:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\libraries\Result.php 101
ERROR - 2020-09-22 16:51:51 --> Query error: Unknown column 'lb.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
WHERE `board`.`cat` = '자유게시판'
ERROR - 2020-09-22 16:53:22 --> Severity: Notice --> Undefined variable: join C:\Apache24\htdocs\application\libraries\Result.php 98
ERROR - 2020-09-22 16:53:22 --> Severity: Notice --> Undefined variable: join C:\Apache24\htdocs\application\libraries\Result.php 101
ERROR - 2020-09-22 16:53:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\libraries\Result.php 101
ERROR - 2020-09-22 16:53:22 --> Query error: Unknown column 'lb.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
WHERE `board`.`cat` = '자유게시판'
ERROR - 2020-09-22 16:54:32 --> Severity: Notice --> Undefined variable: join C:\Apache24\htdocs\application\libraries\Result.php 98
ERROR - 2020-09-22 16:54:32 --> Severity: Notice --> Undefined variable: join C:\Apache24\htdocs\application\libraries\Result.php 101
ERROR - 2020-09-22 16:54:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\libraries\Result.php 101
ERROR - 2020-09-22 16:54:32 --> Query error: Unknown column 'lb.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
GROUP BY `lb`.`board_num`
HAVING `board`.`cat` = '자유게시판'
ERROR - 2020-09-22 16:57:22 --> Severity: Compile Error --> Redefinition of parameter $join C:\Apache24\htdocs\application\libraries\Paging.php 27
ERROR - 2020-09-22 16:58:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 16:58:23 --> Query error: Unknown column 'lb.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
HAVING `board`.`cat` = '자유게시판'
ERROR - 2020-09-22 17:03:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 17:03:49 --> Query error: Unknown column 'r.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
HAVING `board`.`cat` = '자유게시판'
ERROR - 2020-09-22 17:03:50 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 17:03:50 --> Query error: Unknown column 'r.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
HAVING `board`.`cat` = '자유게시판'
ERROR - 2020-09-22 17:03:50 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 17:03:50 --> Query error: Unknown column 'r.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
HAVING `board`.`cat` = '자유게시판'
ERROR - 2020-09-22 17:05:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 17:05:52 --> Query error: Unknown column 'r.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
ERROR - 2020-09-22 17:05:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 17:05:53 --> Query error: Unknown column 'r.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
ERROR - 2020-09-22 17:05:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 17:05:53 --> Query error: Unknown column 'r.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
ERROR - 2020-09-22 17:05:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 17:05:54 --> Query error: Unknown column 'r.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
ERROR - 2020-09-22 17:05:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 17:05:54 --> Query error: Unknown column 'r.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
ERROR - 2020-09-22 17:08:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 17:08:11 --> Query error: Unknown column 'r.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
ERROR - 2020-09-22 17:08:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 17:08:12 --> Query error: Unknown column 'r.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
ERROR - 2020-09-22 17:08:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 17:08:21 --> Query error: Unknown column 'r.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
ERROR - 2020-09-22 17:08:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 17:08:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\libraries\Result.php 101
ERROR - 2020-09-22 17:08:57 --> Query error: Unknown column 'r.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
ERROR - 2020-09-22 17:09:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 17:09:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\libraries\Result.php 101
ERROR - 2020-09-22 17:09:49 --> Query error: Unknown column 'r.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
ERROR - 2020-09-22 17:09:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 17:09:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\libraries\Result.php 101
ERROR - 2020-09-22 17:09:49 --> Query error: Unknown column 'r.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
ERROR - 2020-09-22 17:09:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 17:09:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\libraries\Result.php 101
ERROR - 2020-09-22 17:09:53 --> Query error: Unknown column 'r.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
ERROR - 2020-09-22 17:09:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 17:09:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\libraries\Result.php 101
ERROR - 2020-09-22 17:09:54 --> Query error: Unknown column 'r.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
ERROR - 2020-09-22 17:09:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 17:09:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\libraries\Result.php 101
ERROR - 2020-09-22 17:09:56 --> Query error: Unknown column 'r.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
ERROR - 2020-09-22 17:10:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 17:10:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\libraries\Result.php 101
ERROR - 2020-09-22 17:10:05 --> Query error: Unknown column 'r.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
ERROR - 2020-09-22 17:10:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 17:10:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\libraries\Result.php 101
ERROR - 2020-09-22 17:10:11 --> Query error: Unknown column 'r.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
ERROR - 2020-09-22 17:10:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1137
ERROR - 2020-09-22 17:10:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\libraries\Result.php 101
ERROR - 2020-09-22 17:10:36 --> Query error: Unknown column 'r.board_num' in 'field list' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
ERROR - 2020-09-22 17:13:21 --> Query error: Unknown column 'lr.board_num' in 'on clause' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lr`.`board_num`
GROUP BY `lb`.`board_num`
ERROR - 2020-09-22 17:14:02 --> Severity: error --> Exception: syntax error, unexpected 'endforeach' (T_ENDFOREACH) C:\Apache24\htdocs\application\views\homepage\board\list.php 33
ERROR - 2020-09-22 17:16:16 --> Severity: Notice --> Undefined variable: rs C:\Apache24\htdocs\application\views\homepage\board\list.php 26
ERROR - 2020-09-22 17:16:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\list.php 26
ERROR - 2020-09-22 17:16:31 --> Severity: Notice --> Undefined variable: rs C:\Apache24\htdocs\application\views\homepage\board\list.php 26
ERROR - 2020-09-22 17:16:31 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\list.php 26
ERROR - 2020-09-22 17:16:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\application\views\homepage\board\list.php 26
ERROR - 2020-09-22 17:17:43 --> Query error: Unknown column '/search/x' in 'where clause' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `/search/x` LIKE '%%' ESCAPE '!'
GROUP BY `lb`.`board_num`
ERROR - 2020-09-22 17:24:54 --> Query error: Unknown column 'x' in 'where clause' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `x` LIKE '%%' ESCAPE '!'
GROUP BY `lb`.`board_num`
ERROR - 2020-09-22 17:26:55 --> Query error: Unknown column 'x' in 'where clause' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `x` LIKE '%%' ESCAPE '!'
GROUP BY `lb`.`board_num`
ERROR - 2020-09-22 17:27:12 --> Query error: Unknown column 'x' in 'where clause' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `x` LIKE '%%' ESCAPE '!'
GROUP BY `lb`.`board_num`
ERROR - 2020-09-22 17:27:44 --> Query error: Unknown column 'x' in 'where clause' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `x` LIKE '%%' ESCAPE '!'
GROUP BY `lb`.`board_num`
ERROR - 2020-09-22 17:28:04 --> Query error: Unknown column 'x' in 'where clause' - Invalid query: SELECT `b`.*, ifnull(sum(r.board_num), 0) total_reply, ifnull(sum(lb.board_num), 0) good
FROM `board` `b`
LEFT JOIN `reply` `r` ON `b`.`num` = `r`.`board_num`
LEFT JOIN `like_b` `lb` ON `b`.`num` = `lb`.`board_num`
WHERE `x` LIKE '%%' ESCAPE '!'
GROUP BY `lb`.`board_num`
