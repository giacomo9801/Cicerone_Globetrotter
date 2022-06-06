<?php
#codice per eliminare la sessione 
session_start();
session_destroy();
header('Location: ../../Prelogin/index/index.php');
