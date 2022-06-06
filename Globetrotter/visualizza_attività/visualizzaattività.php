<?php session_start(); 
include('../../Database/conn.php');
require_once("../../VerificaIdentita/auth.php");?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>visualizza_attività_globetrotter (dal profilo)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="font-family: 'Roboto';">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="padding-bottom: 30px;">
        <div class="container"><a class="navbar-brand" href="../index/index.php"
                style="font-size: 35px;filter: blur(0px);font-style: italic;">Cicerone</a><button class="navbar-toggler"
                data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link text-center"
                            href="../index/index.php">Home<i class="fa fa-home"
                                style="font-size: 20px;padding-left: 5px;"></i></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-center"
                            href="../ricerca_attività/ricercaattività.php">Ricerca attività<i class="fa fa-search"
                                style="padding-left: 5px;"></i></a></li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle nav-link text-center" data-toggle="dropdown"
                            aria-expanded="false" href="#"><strong><?php echo $_SESSION['nome']; ?></strong></a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation"
                        href="../profilo/profilo.php?id_registrazione=' . $_SESSION['id'] .'">Profilo<i class="fa fa-user"
                                    style="padding-left: 5px;"></i></a><a class="dropdown-item" role="presentation"
                                href="../log_out/logout.php">Log Out<i class="fa fa-external-link"
                                    style="padding-left: 5px;"></i></a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="row">
        <div class="col">
            <?php
            $id = $_GET['id'];
            $query = "SELECT * from attivita where id_attivita=$_GET[id] AND stato=1";
            $r_query = mysqli_query($cn, $query);

            while ($row = mysqli_fetch_array($r_query)) {
                //Inizio codice da ciclare-->
                $_nome = $row['nome_attivita'];
                $_luogo = $row['luogo'];
                $_lingua = $row['lingua'];
                $_data = $row['data'];
                $_durata = $row['durata'];
                $_costo = $row['costo'];
                $_descrizione = $row['descrizione'];
            }
            ?>
            <h1 class="text-center" style="background-color: #5dd167;color: rgb(255,255,255);font-size: 30px;font-weight: bold;">Stai
                visualizzando l'attività : <?php echo $_nome ?></h1>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Luogo</th>
                <th scope="col">Lingua</th>
                <th scope="col">Data</th>
                <th scope="col">Durata</th>
                <th scope="col">Costo</th>
                <th scope="col">Descrizione</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $_luogo ?></td>
                <td><?php echo $_lingua ?></td>
                <td><?php echo $_data ?></td>
                <td><?php echo $_durata ?></td>
                <td><?php echo $_costo ?></td>
                <td><?php echo $_descrizione ?></td>
            </tr>
        </tbody>
    </table>

    <div class="footer-clean" style="background-color: rgba(146,144,144,0.37);margin-top: 10px;">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 text-center item">
                        <ul></ul><a href="../come_funziona/comefunziona.php"
                            style="color: rgb(255,255,255);font-size: 22px;font-weight: bold;">Come
                            funziona</a>
                    </div>
                    <div class="col-sm-4 col-md-3 text-center item">
                        <ul></ul><a href="../chi_siamo/chisiamo.php"
                            style="color: rgb(255,255,255);font-size: 22px;font-weight: bold;">Chi
                            siamo</a>
                    </div>
                    <div class="col-sm-4 col-md-3 text-center item">
                        <ul></ul><a href="../termini_policy/terminipolicy.php"
                            style="color: rgb(255,255,255);font-size: 22px;font-weight: bold;">Termini
                            e condizioni</a>
                    </div>
                    <div class="col-lg-3 item social">
                        <h3 class="text-center"
                            style="font-size: 22px;color: rgb(255,255,255);font-weight: bold;margin-top: 4px;">Lingua
                        </h3>
                        <div id="google_translate_element"></div>

                        <script type="text/javascript">
                            function googleTranslateElementInit() {
                                new google.translate.TranslateElement({
                                    pageLanguage: 'en'
                                }, 'google_translate_element');
                            }
                        </script>

                        <script type="text/javascript"
                            src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
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