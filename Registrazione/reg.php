<?php
include('../Database/conn.php');
#inizializzo le variabili con i campi nel modulo di registrazione
$nome = $_POST['name'];
$cognome = $_POST['surname'];
$mail = $_POST['email'];
$in_data = $_POST['date'];
$psw = $_POST['password'];
$psw2 = $_POST['password-repeat'];
$ruolo = $_POST['role'];
$bio = $_POST['biografia'];
$nation = $_POST['nation'];
$gender = $_POST['gender'];

$data = date("y-m-d", strtotime($in_data));

if($psw != $psw2) 
	echo "Le password inserite non combaciano, tornare al menù precedente";
else {
	$psw_hash = sha1($psw);
	#query per inserire i valori dei campi nella tabella del db
	$sql = "INSERT INTO utente(nome,cognome,mail,data_di_nascita,password,ruolo,biografia,nazione,sesso) VALUES ("
		. "'" . $nome . "',"
		. "'" . $cognome . "',"
		. "'" . $mail . "',"
		. "'" . $data . "',"
		. "'" . $psw_hash . "',"
		. "'" . $ruolo . "',"
		. "'" . $bio . "',"
		. "'" . $nation . "',"
		. "'" . $gender . "')";
		
	if (!$cn->query($sql)) {
		echo "Errore della query: " . $cn -> error . ".";
	}
	else {
		header('location: ../Login/login.php');
	}
}
?>