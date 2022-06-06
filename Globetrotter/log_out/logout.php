<?php
session_start();
session_destroy();
header('Location: ../../Prelogin/index/index.php');
?>