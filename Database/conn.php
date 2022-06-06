<?php
$db_name = 'cicerone_db';
$db_host = 'localhost';
$db_psw = 'xxxxxxxxx';
$db_user = 'xxxxxxx';
$cn = new mysqli($db_host, $db_user, $db_psw, $db_name);

if($cn->connect_errno) {
	echo "Connessione fallita: " . $cn->connection_error;
	exit();
}
?>