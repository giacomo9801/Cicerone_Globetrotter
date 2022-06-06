<?php session_start();
include('../../Database/conn.php');
#prendo i valori inseriti nel form di modifica e vado ad aggiornare il db e i parametri di sessione
$nome=$_POST['nuovonome'];
$cognome=$_POST['nuovocognome'];
$data=$_POST['nuovadata'];
$biografia=$_POST['nuovabiografia'];
$sql = "UPDATE utente SET nome='$nome', cognome='$cognome', data_di_nascita='$data', biografia='$biografia' WHERE id_registrazione='$_SESSION[id]'";


if (mysqli_query($cn, $sql)) {
    echo "Profilo aggiornato correttamente";
    $_SESSION['nome'] = $nome;
	$_SESSION['cognome'] = $cognome;
	$_SESSION['nascita'] = $data;
	$_SESSION['biografia'] = $biografia;
    header('location: ../Profilo/profilo.php');
	}
 else {
    echo "Errore aggiornamento query: " . mysqli_error($cn);
}
 