<?php
session_start();
include('../Database/conn.php');

$_SESSION['mail'] = $_POST['email']; 
$psw_hash = sha1($_POST['password']); 
#verifico se esiste l'utente con quelle credenziali
$query = "SELECT * FROM utente WHERE mail='" . $_POST['email'] . "' AND password ='" . $psw_hash . "'";

$risul = mysqli_query($cn, $query);
$c = mysqli_num_rows($risul);

if($c == 1) {
	$riga = mysqli_fetch_array($risul, MYSQLI_ASSOC);
	$_SESSION['id'] = $riga['id_registrazione'];
	$_SESSION['email'] = $riga['mail'];
	$_SESSION['nome'] = $riga['nome'];
	$_SESSION['cognome'] = $riga['cognome'];
	$_SESSION['nascita'] = $riga['data_di_nascita'];
	$_SESSION['biografia'] = $riga['biografia'];
	$_SESSION['nazione'] = $riga['nazione'];
	$_SESSION['sesso'] = $riga['sesso'];
	$_SESSION['ruolo'] = $riga['ruolo'];
	$_SESSION['loggato'] =true;
#effettuo il redirect in base al ruolo che si assume nel sistema
	if($riga['ruolo'] == 'cicerone') {
		
		header('location: ../Cicerone/Index/index.php');
		
	}
	else if($riga['ruolo'] == 'globetrotter'){
		header('location: ../Globetrotter/Index/index.php');
	}
	else if($riga['ruolo'] == 'amministratore'){
		header('location: ../Amministratore/Index/index.php');
	}
	
}
#se i dati di accesso non corrispondono a quelli sul db 
else {
	echo "E-mail o password errati, tornare al menù precedente";
	session_destroy();
}
?>