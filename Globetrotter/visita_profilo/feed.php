<?php
session_start();
include('../../Database/conn.php');
#prendo il commento scritto nella text area e lo mando direttamente nella tabella feedback collegata al ricevente
$commento=$_POST['feedback'];
$queryfeed="INSERT INTO feedback (id_scrittore,utente_id,commento) VALUES ('$_SESSION[id]','$_SESSION[feed]','$commento')";
$mkquery=mysqli_query($cn,$queryfeed);

if($mkquery){
    echo 'Feedback inviato correttamente, puoi tornare al menù precedente';
}
else{
    echo' Errore nella query, hai gia mandato un feedback a questo utente';
}













?>