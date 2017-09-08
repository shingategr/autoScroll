<?php
/*
* Start:: Database connection::-
*/

$db_username = 'u760720811_free';
$db_password = 'disuzajen';
$db_name = 'u760720811_free';
$db_host = 'mysql.hostinger.in';
$item_per_page = 5;

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);
//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

/*

	$hostname="mysql.hostinger.in";
	$username="u760720811_free";
	$password="disuzajen";
	$dbname="u760720811_free";

*/
/*
* End:: Database connection::-
*/
?>