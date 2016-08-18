<?php
$cn = mysql_connect('localhost','devesh3395','404e=9QR7p1+') or
	die('Connection unsuccessful');

mysql_select_db('Subscribe', $cn) or
	die(mysql_error($cn));

?>