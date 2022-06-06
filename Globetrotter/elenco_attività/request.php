<?php session_start();
include('../../Database/conn.php');
$s = "SELECT * FROM attivita WHERE stato=1";
$r_quer = mysqli_query($cn, $s);

while ($row = mysqli_fetch_array($r_quer)) {
    $id = $row['id_attivita'];
}
#in base all'attività per cui ci si vuole iscrivere , inserisco il record nella tabella richiesta

$sq2 = "INSERT INTO richiesta(attivita_id,id_richiedente,stato) VALUES ('$_GET[id]','$_SESSION[id]',1) ";
$go = mysqli_query($cn, $sq2);
if ($go) {
    header('Location: ../index/index.php');
} else {
    echo 'Errore nella query, attendi che venga accettata o rifiutata prima di partecipare nuovamente';
}
