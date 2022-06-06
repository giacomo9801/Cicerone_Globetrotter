<?php
ob_start();
include('../../Database/conn.php');
include('elencoattività.php');

#query per chiudure l'attività scelta
$id=$_GET['id'];
$query="UPDATE attivita SET stato=0 where id_attivita='$id'";
$pq=mysqli_query($cn,$query);

if($pq){
    header('location: elencoattività.php');
    ob_flush();
}
else{
    echo ' Errore nella chiusura, tornare al menù precendete';
}

?>