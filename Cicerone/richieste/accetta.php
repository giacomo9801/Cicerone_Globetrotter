<?php
include('../../Database/conn.php');
$id = $_GET['id_richiesta'];
#aggiorno la tabella richiesta con la partecipazione nello stato di "accettata"
$qry = "UPDATE richiesta SET stato=2 where id_richiesta='$id'";
$r = mysqli_query($cn, $qry);

if ($r) {
    echo 'La richiesta è stata accettata, puoi tornare al menù precedente';
} else {
    echo 'Errore durante l accettazione, torna al menù precedente';
}
