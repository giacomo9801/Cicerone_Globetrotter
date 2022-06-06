<?php
include('../../Database/conn.php');
$idrichiesta = $_GET['id_richiesta'];
#aggiorno la tabella richiesta con la partecipazione nello stato di "rifiutata"
$qry = "UPDATE richiesta SET stato=0 where id_richiesta='$idrichiesta'";
$mk = mysqli_query($cn, $qry);

if ($mk) {
    echo 'La richiesta è stata rifiutata, puoi tornare al menù precedente';
} else {
    echo 'errore durante il rifiuto della richiesta, torna al menù precedente';
}
