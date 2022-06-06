<?php
#codice per verificare se un utente è loggato, in caso negativo verrà mandato alla pagina di login
if(!isset($_SESSION["loggato"])) header("Location: ../../login/login.php");
?>