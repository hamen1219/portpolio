<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-24 16:42:07 --> Severity: error --> Exception: syntax error, unexpected '}' C:\Apache24\htdocs\application\libraries\Result.php 38
ERROR - 2020-09-24 16:42:12 --> Severity: error --> Exception: syntax error, unexpected '}' C:\Apache24\htdocs\application\libraries\Result.php 38
ERROR - 2020-09-24 16:42:13 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-09-24 16:43:12 --> Severity: Compile Error --> Cannot redeclare AjAX::test() C:\Apache24\htdocs\application\controllers\Ajax.php 69
ERROR - 2020-09-24 16:43:28 --> Severity: Compile Error --> Cannot redeclare AjAX::test() C:\Apache24\htdocs\application\controllers\Ajax.php 69
ERROR - 2020-09-24 16:45:45 --> Severity: Compile Error --> Cannot redeclare AjAX::test() C:\Apache24\htdocs\application\controllers\Ajax.php 69
ERROR - 2020-09-24 16:52:02 --> Severity: error --> Exception: syntax error, unexpected '}' C:\Apache24\htdocs\application\libraries\Result.php 38
ERROR - 2020-09-24 16:52:10 --> Severity: error --> Exception: syntax error, unexpected '}' C:\Apache24\htdocs\application\libraries\Result.php 38
ERROR - 2020-09-24 16:58:30 --> Severity: error --> Exception: syntax error, unexpected '}' C:\Apache24\htdocs\application\libraries\Result.php 38
ERROR - 2020-09-24 16:58:48 --> Severity: error --> Exception: syntax error, unexpected '}' C:\Apache24\htdocs\application\libraries\Result.php 38
ERROR - 2020-09-24 17:00:16 --> Severity: error --> Exception: syntax error, unexpected '}' C:\Apache24\htdocs\application\libraries\Result.php 38
ERROR - 2020-09-24 17:00:27 --> Severity: error --> Exception: syntax error, unexpected 'if' (T_IF) C:\Apache24\htdocs\application\libraries\Result.php 93
ERROR - 2020-09-24 17:06:01 --> Query error: Unknown column 'board' in 'field list' - Invalid query: SELECT `board`
ORDER BY `created` DESC
 LIMIT 10
ERROR - 2020-09-24 17:07:28 --> Severity: Notice --> Undefined variable: error C:\Apache24\htdocs\application\libraries\Result.php 138
ERROR - 2020-09-24 17:08:15 --> Severity: error --> Exception: syntax error, unexpected '{', expecting '(' C:\Apache24\htdocs\application\libraries\Result.php 139
ERROR - 2020-09-24 17:36:32 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::group() C:\Apache24\htdocs\application\libraries\Result.php 66
ERROR - 2020-09-24 17:36:57 --> Query error: Unknown table 'test.b' - Invalid query: SELECT `b`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `b`.`num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-24 17:38:30 --> Query error: Unknown table 'test.b' - Invalid query: SELECT `b`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-24 17:39:01 --> Query error: Column 'created' in order clause is ambiguous - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-24 17:40:22 --> Query error: Column 'created' in order clause is ambiguous - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-24 17:40:24 --> Query error: Column 'created' in order clause is ambiguous - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-24 17:46:14 --> Severity: Notice --> Undefined variable: data C:\Apache24\htdocs\application\libraries\Result.php 95
ERROR - 2020-09-24 17:46:14 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\libraries\Result.php 95
ERROR - 2020-09-24 17:48:07 --> Severity: Notice --> Undefined index: num C:\Apache24\htdocs\application\views\homepage\test.php 25
ERROR - 2020-09-24 17:48:07 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\views\homepage\test.php 26
ERROR - 2020-09-24 18:02:52 --> Severity: Notice --> Undefined index: num C:\Apache24\htdocs\application\views\homepage\test.php 25
ERROR - 2020-09-24 18:02:52 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\views\homepage\test.php 26
ERROR - 2020-09-24 18:03:49 --> Severity: Notice --> Undefined index: num C:\Apache24\htdocs\application\views\homepage\test.php 25
ERROR - 2020-09-24 18:42:43 --> Query error: Table 'test.like_dr' doesn't exist - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_dr` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 65
ORDER BY `r`.`created` DESC
ERROR - 2020-09-24 18:52:49 --> Severity: error --> Exception: syntax error, unexpected '{', expecting '(' C:\Apache24\htdocs\application\libraries\Result.php 121
ERROR - 2020-09-24 18:53:34 --> Query error: Table 'test.like_dr' doesn't exist - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_dr` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 65
ORDER BY `r`.`created` DESC
ERROR - 2020-09-24 18:57:17 --> Query error: Table 'test.like_dr' doesn't exist - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_dr` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 65
ORDER BY `r`.`created` DESC
ERROR - 2020-09-24 19:13:30 --> Query error: Table 'test.like_dr' doesn't exist - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_dr` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 65
ORDER BY `r`.`created` DESC
ERROR - 2020-09-24 19:13:31 --> Query error: Table 'test.like_dr' doesn't exist - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_dr` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 65
ORDER BY `r`.`created` DESC
ERROR - 2020-09-24 19:13:32 --> Query error: Table 'test.like_dr' doesn't exist - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_dr` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 65
ORDER BY `r`.`created` DESC
ERROR - 2020-09-24 19:13:32 --> Query error: Table 'test.like_dr' doesn't exist - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_dr` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 65
ORDER BY `r`.`created` DESC
ERROR - 2020-09-24 19:13:32 --> Query error: Table 'test.like_dr' doesn't exist - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_dr` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 65
ORDER BY `r`.`created` DESC
ERROR - 2020-09-24 19:56:02 --> Severity: error --> Exception: syntax error, unexpected ''db_debug'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' C:\Apache24\htdocs\application\config\database.php 97
ERROR - 2020-09-24 19:56:20 --> Query error: Table 'test.like_dr' doesn't exist - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_dr` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 65
ORDER BY `r`.`created` DESC
ERROR - 2020-09-24 20:09:06 --> Query error: Table 'test.like_dr' doesn't exist - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_dr` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 65
ORDER BY `r`.`created` DESC
ERROR - 2020-09-24 20:09:07 --> Query error: Table 'test.like_dr' doesn't exist - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_dr` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 65
ORDER BY `r`.`created` DESC
ERROR - 2020-09-24 20:09:07 --> Query error: Table 'test.like_dr' doesn't exist - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_dr` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 65
ORDER BY `r`.`created` DESC
ERROR - 2020-09-24 20:09:07 --> Query error: Table 'test.like_dr' doesn't exist - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_dr` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 65
ORDER BY `r`.`created` DESC
ERROR - 2020-09-24 20:09:07 --> Query error: Table 'test.like_dr' doesn't exist - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_dr` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 65
ORDER BY `r`.`created` DESC
ERROR - 2020-09-24 20:09:07 --> Query error: Table 'test.like_dr' doesn't exist - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_dr` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 65
ORDER BY `r`.`created` DESC
ERROR - 2020-09-24 20:09:26 --> Query error: Table 'test.like_dr' doesn't exist - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_dr` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 65
ORDER BY `r`.`created` DESC
ERROR - 2020-09-24 20:31:55 --> Query error: Table 'test.like_dr' doesn't exist - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_dr` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 60
ORDER BY `r`.`created` DESC
ERROR - 2020-09-24 20:31:56 --> Query error: Table 'test.like_dr' doesn't exist - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_dr` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 60
ORDER BY `r`.`created` DESC
ERROR - 2020-09-24 20:31:56 --> Query error: Table 'test.like_dr' doesn't exist - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_dr` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 60
ORDER BY `r`.`created` DESC
ERROR - 2020-09-24 20:31:56 --> Query error: Table 'test.like_dr' doesn't exist - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `user` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_dr` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 60
ORDER BY `r`.`created` DESC
ERROR - 2020-09-24 20:33:30 --> Query error: Table 'test.usedr' doesn't exist - Invalid query: SELECT `u`.*, `r`.*, ifnull(sum(lr.good), 0) good, ifnull(sum(lr.poor), 0) poor
FROM `reply` `r`
LEFT JOIN `usedr` `u` ON `r`.`user` = `u`.`id`
LEFT JOIN `like_r` `lr` ON `r`.`num` = `lr`.`reply_num`
GROUP BY `lr`.`reply_num`
HAVING `r`.`board_num` = 60
ORDER BY `r`.`created` DESC
