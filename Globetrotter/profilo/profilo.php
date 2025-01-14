<?php session_start();
include('../../Database/conn.php');
require_once("../../VerificaIdentita/auth.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>profilo_globetrotter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="font-family: 'Roboto';">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="padding-bottom: 30px;">
        <div class="container"><a class="navbar-brand" href="../index/index.php" style="font-size: 35px;filter: blur(0px);font-style: italic;">Cicerone</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link text-center" href="../index/index.php">Home<i class="fa fa-home" style="font-size: 20px;padding-left: 5px;"></i></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-center" href="../ricerca_attività/ricercaattività.php">Ricerca attività<i class="fa fa-search" style="padding-left: 5px;"></i></a></li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle nav-link text-center" data-toggle="dropdown" aria-expanded="false" href="#"><strong><?php echo $_SESSION['nome']; ?></strong></a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../profilo/profilo.php?id_registrazione=' . $_SESSION['id'] .'">Profilo<i class="fa fa-user" style="padding-left: 5px;"></i></a><a class="dropdown-item" role="presentation" href="../log_out/logout.php">Log Out<i class="fa fa-external-link" style="padding-left: 5px;"></i></a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col text-center" style="background-color: rgba(227,238,255,0.67);"><i class="fa fa-user-o" style="font-size: 100px;"></i></div>
    </div>
    <div class="row" style="padding-top: 30px;">
        <div class="col">
            <h1 class="text-center" style="background-color: #5dd167;padding-top: 10px;padding-bottom: 10px;color: rgb(255,255,255);font-size: 30px;font-weight: bold;">
                Riepilogo dati</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1 class="text-center" style="font-size: 25px;">Nome: <?php echo $_SESSION['nome']; ?></h1>
            <h1 class="text-center" style="font-size: 25px;">Cognome: <?php echo $_SESSION['cognome']; ?></h1>
            <h1 class="text-center" style="font-size: 25px;">Email: <?php echo $_SESSION['email']; ?></h1>
            <h1 class="text-center" style="font-size: 25px;">Data di nascita: <?php echo $_SESSION['nascita']; ?></h1>
            <h1 class="text-center" style="font-size: 25px;">Sesso: <?php echo $_SESSION['sesso']; ?></h1>
            <h1 class="text-center" style="font-size: 25px;">Ruolo: <?php echo $_SESSION['ruolo']; ?></h1>
            <h1 class="text-center" style="font-size: 25px;">Biografia: <?php echo $_SESSION['biografia']; ?></h1>
        </div>
    </div>
    <div class="row text-center">
        <div class="col"><a class="btn btn-info text-uppercase text-center" role="button" href="../modifica/modifica.php" style="margin-top: 12px;font-size: 30px;">Modifica dati<i class="fa fa-cog" style="padding-left: 10px;"></i></a></div>
    </div>
    <div class="row" style="padding-top: 14px;">
        <div class="col-xl-12">
            <h1 class="text-center" style="background-color: #5dd167;padding-top: 10px;padding-bottom: 10px;color: rgb(255,255,255);font-size: 30px;font-weight: bold;margin-top: 15px;">
                Attività a cui partecipo</h1>

            <?php

            $sql = "SELECT * from richiesta where id_richiedente= '$_SESSION[id]' and stato=2";
            $r_query = mysqli_query($cn, $sql);

            echo '<div class="table-responsive" style="padding-bottom: 0px;padding-top: 20px;">';

            echo '  <table class="table">
        <thead>
            <tr>
                <th class="table-active text-uppercase text-center">Attività n°</th>
                <th class="table-primary text-uppercase text-center">Nome attività</th>
                <th class="table-active text-uppercase text-center">Data</th>
                <th class="table-primary text-uppercase text-center">Operazione</th>
            </tr>
        </thead>
        <tbody>';
            while ($row = mysqli_fetch_array($r_query)) {
                $_idattivita = $row['attivita_id'];
                $sql2 = "SELECT * from attivita where id_attivita= '$_idattivita' and stato=1";
                $r_query2 = mysqli_query($cn, $sql2);
                while ($row2 = mysqli_fetch_array($r_query2)) {
                    $_nattivita = $row2['id_attivita'];
                    $_nomeattivita = $row2['nome_attivita'];
                    $_data = $row2['data'];

                    echo ' 
            <form method="POST">
            <tr>
                <td class="text-center">' . $_nattivita . '</td>
                <td class="text-center">' . $_nomeattivita . '</td>
                <td class="text-center">' . $_data . '</td> 
                <td class="text-center"> <a class="viewProfile" href="../visualizza_attività/visualizzaattività.php?id=' . $row2['id_attivita'] . '"><btn btn-primary>Visualizza info complete</btn btn-primary></td>                        
                </tr>
            </form>';
                }
            }
            echo '  </tbody>
            </table>';
            ?>



            <h1 class="text-center" style="background-color: #5dd167;padding-top: 10px;padding-bottom: 10px;color: rgb(255,255,255);font-size: 30px;font-weight: bold;margin-top: 15px;">
                Ciceroni associati</h1>


            <?php
            $qr = "SELECT * from richiesta where id_richiedente='$_SESSION[id]' and stato =2";
            $mk = mysqli_query($cn, $qr);



            echo '<div class="table-responsive" style="padding-bottom: 0px;padding-top: 20px;">';

            echo '  <table class="table">
            <thead>
            <tr>
            <th class="table-primary text-uppercase text-center">Nome Cicerone</th>
                <th class="table-active text-uppercase text-center">Nome attività</th>  
                <th class="table-primary text-uppercase text-center">Operazione</th>
            </tr>
            </thead>
            <tbody>';
            while ($rw = mysqli_fetch_array($mk)) {
                $idattivitacicerone = $rw['attivita_id'];

                $qr2 = "SELECT * from attivita where id_attivita='$idattivitacicerone' and stato=1";
                $mk2 = mysqli_query($cn, $qr2);
                while ($rw2 = mysqli_fetch_array($mk2)) {
                    $nameattivita = $rw2['nome_attivita'];
                    $idcicerone = $rw2['utente_id'];

                    $qr3 = "SELECT * from utente where id_registrazione='$idcicerone' ";
                    $mk3 = mysqli_query($cn, $qr3);
                    while ($rw3 = mysqli_fetch_array($mk3)) {
                        $_nome = $rw3['nome'];
                        echo ' 
                    <form method="POST">
                    <tr>
                        <td class="text-center">' . $_nome . '</td>
                        <td class="text-center">' .  $nameattivita . '</td>
                        <td class="text-center"> <a class="viewProfile" href="../visita_profilo/visitaprofilo.php?id=' . $rw2['utente_id'] . '"><btn btn-primary>Visualizza profilo</btn btn-primary></td>                        
                        </tr>
                    </form>';
                    }
                }
            }


            echo '  </tbody>
            </table>';

            ?>




            <div class="footer-clean" style="background-color: rgba(146,144,144,0.37);margin-top: 10px;">
                <footer>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-4 col-md-3 text-center item">
                                <ul></ul><a href="../come_funziona/comefunziona.php" style="color: rgb(255,255,255);font-size: 22px;font-weight: bold;">Come
                                    funziona</a>
                            </div>
                            <div class="col-sm-4 col-md-3 text-center item">
                                <ul></ul><a href="../chi_siamo/chisiamo.php" style="color: rgb(255,255,255);font-size: 22px;font-weight: bold;">Chi
                                    siamo</a>
                            </div>
                            <div class="col-sm-4 col-md-3 text-center item">
                                <ul></ul><a href="../termini_policy/terminipolicy.php" style="color: rgb(255,255,255);font-size: 22px;font-weight: bold;">Termini
                                    e condizioni</a>
                            </div>
                            <div class="col-lg-3 item social">
                                <h3 class="text-center" style="font-size: 22px;color: rgb(255,255,255);font-weight: bold;margin-top: 4px;">Lingua
                                </h3>
                                <div id="google_translate_element"></div>

                                <script type="text/javascript">
                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({
                                            pageLanguage: 'en'
                                        }, 'google_translate_element');
                                    }
                                </script>

                                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                                <p class="copyright">Cicerone © 2019</p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>







            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>