<?php
session_start();
include('../../Database/conn.php');
#prendo i dati dal form e li inserisco nella tabella attività

$nome = $_POST['nome'];
$luogo = $_POST['puntoincontro'];
$lingua = $_POST['lingua'];
$in_dataora = $_POST['dataora'];
$durata = $_POST['durata'];
$prezzo = $_POST['prezzo'];
$desc = $_POST['descrizione'];

$dataora = date("y-m-d H:i:00", strtotime($in_dataora));

$d_check = strtotime($in_dataora) - time();

$query = "INSERT INTO attivita(utente_id, nome_attivita, luogo, lingua, data, durata, costo, descrizione,stato) VALUES ("
	. "'" . $_SESSION['id'] . 	"',"
	. "'" . $nome 			. 	"',"
	. "'" . $luogo			.	"',"
	. "'" . $lingua			.	"',"
	. "'" . $dataora		.	"',"
	. "'" . $durata			.	"',"
	. "'" . $prezzo			.	"',"
	. "'" . $desc			.	"',1)";

if ($d_check <= 31536000) {
	if (!$cn->query($query)) {
		echo "Errore della query: " . $cn->error . ".";
	} else {
		echo "L'attività è stata inserita. Puoi tornare al menù precedente.";
	}
} else {
	echo "L'attività è programmata tra più di un anno, creazione non possibile.";
}
