<?php session_start(); 
require_once("../../VerificaIdentita/auth.php");?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>chi_siamo_amministratore</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="font-family: 'Roboto' !important;">
    <div class="row text-center">
        <div class="col">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="padding-bottom: 30px;font-size: 20px;">
                <div class="container">
                    <a class="navbar-brand" href="../index/index.php" style="font-size: 35px;filter: blur(0px);font-style: italic;">Cicerone</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                        <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse border-secondary d-xl-flex" id="navcol-1">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item text-left" role="presentation">
                                <a class="nav-link text-center" href="../index/index.php" style="margin-right: 11px;">Home<i class="fa fa-home" style="padding-left: 10px;"></i></a>
                            </li>
                            <li class="nav-item text-left" role="presentation">
                                <a class="nav-link text-center" href="http://localhost/phpmyadmin/" style="margin-right: 11px;">Vai al
                                    database<i class="fa fa-database" style="padding-left: 10px;"></i></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-center" href="../log_out/logout.php" style="margin-right: 11px;">Log Out<i class="fa fa-window-close-o" style="padding-left: 10px;"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h1 style="margin-top: 0px;margin-bottom: 10px;background-color: #5dd167;color: rgb(255,255,255);font-weight: bold;font-size: 30px;">
                Chi siamo e come tutto è nato</h1>
            <div class="row">
                <div class="col">
                    <h1 class="text-center" style="font-size: 20px;">Siamo un gruppo di giovani studenti che hanno
                        voluto mettersi alla prova creando una piattaforma che permettesse un'interazione diversa dal
                        solito. Il tutto è nato nel 2019. Il nostro obiettivo è quella di unire le persone creando
                        amicizie
                        e legami indipendentemente dal background sociale e dalla distanza. Cerchiamo di metterci in
                        competizione con tutte quelle piattaforme che offrono sharing di risorse personali. Crediamo che
                        le nuove tecnologie debbano aiutare nell'interazione
                        tra persone e non devono mai distogliere quest'ultime dalla realtà, ecco perchè le attività dei
                        nostri Ciceroni puntano sulla socializzazione tra i partecipanti.&nbsp;<br><br><br></h1>
                </div>
            </div>
        </div>
    </div>
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