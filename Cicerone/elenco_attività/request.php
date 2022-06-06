<?php session_start();
include('../../Database/conn.php');
$sql = "SELECT * FROM attivita WHERE stato=1";
$r_query = mysqli_query($cn, $sql);
#inserimento richiesta in base all'attività scelta
while ($row = mysqli_fetch_array($r_query)) {
    $id = $row['id_attivita'];
}

$sql2 = "INSERT INTO richiesta(attivita_id,id_richiedente,stato) VALUES ('$_GET[id]','$_SESSION[id]',1) ";
$go = mysqli_query($cn, $sql2);
if ($go) {
    header('Location: ../index/index.php');
} else {
    echo 'Errore nella query,attendi che venga accettata o rifiutata prima di partecipare nuovamente. Torna al menù precedente';
}
