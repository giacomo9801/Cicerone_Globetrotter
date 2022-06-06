<?php
include('../../Database/conn.php');
#chiudo l'attività in base all'id
$id = $_GET['id'];
$query= "UPDATE attivita SET stato=0 where id_attivita='$id'";
$r_query= mysqli_query($cn,$query);

header('Location: profilo.php');

?>