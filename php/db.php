<?php 
$dbhost = "localhost";
$dbname = "photo_cage";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

function getItemsFromDB($tableName, $amount = 'all', $offset = 0) {
	global $db;
	$amount == 'all' ? $limit = '' : $limit = "LIMIT $amount";
	$allItems = $db->query("SELECT * FROM `$tableName` WHERE `moderated` = 1 ORDER BY `id` DESC $limit OFFSET $offset");
	return $allItems;
}

	