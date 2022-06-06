<?php
ob_start();
include('../../Database/conn.php');
include('elencoattività.php');

#query per eliminare il feedback desiderato
$id=$_GET['id'];
$query="DELETE FROM feedback where id_feedback='$id'";
$pq=mysqli_query($cn,$query);

if($pq){
    header('location: elencofeedback.php');
    ob_flush();
}
else{
    echo ' Errore nella cancellazione del feedback, tornare al menù precedente';
}

?>