<?php session_start(); 
require_once("../../VerificaIdentita/auth.php");?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>modifica_globetrotter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="font-family: 'Roboto';">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="padding-bottom: 30px;">
        <div class="container"><a class="navbar-brand" href="../index/index.php" style="font-size: 35px;filter: blur(0px);font-style: italic;">Cicerone</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link text-center" href="../index/index.php"><strong><?php echo $_SESSION['nome']; ?></strong><i class="fa fa-home" style="font-size: 20px;padding-left: 5px;"></i></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-center" href="../ricerca_attività/ricercaattività.php">Ricerca attività<i class="fa fa-search" style="padding-left: 5px;"></i></a></li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle nav-link text-center" data-toggle="dropdown" aria-expanded="false" href="#">Nome</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../profilo/profilo.php?id_registrazione=' . $_SESSION['id'] .'">Profilo<i class="fa fa-user" style="padding-left: 5px;"></i></a><a class="dropdown-item" role="presentation" href="../log_out/logout.php">Log Out<i class="fa fa-external-link" style="padding-left: 5px;"></i></a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col text-center" style="background-color: rgba(245,245,245,0);"><i class="fa fa-user-o" style="font-size: 100px;"></i>
            <div class="row" style="padding-top: 30px;">
                <div class="col">
                    <h1 class="text-center" style="background-color: #5dd167;padding-top: 10px;padding-bottom: 10px;color: rgb(255,255,255);font-size: 40px;font-weight: bold;">
                        Vecchi dati</h1>
                    <div class="row">
                        <div class="col">
                            <h1 class="text-center" style="font-size: 25px;">Nome:&nbsp;</h1><input class="form-control-plaintext shadow-sm d-xl-flex text-center" type="text" value="<?php echo $_SESSION['nome']; ?>" readonly="" style="padding-left: 10px;">
                            <h1 class="text-center" style="font-size: 25px;">Cognome:&nbsp;</h1><input class="form-control-plaintext shadow-sm text-center" type="text" value="<?php echo $_SESSION['cognome']; ?>" readonly="" style="padding-left: 10px;">
                            <h1 class="text-center" style="font-size: 25px;">Data di nascita:&nbsp;</h1><input class="form-control-plaintext shadow-sm text-center" type="text" value="<?php echo $_SESSION['nascita']; ?>" readonly="" style="padding-left: 10px;">
                            <h1 class="text-center" style="font-size: 25px;">Biografia:&nbsp;</h1><input class="form-control-plaintext shadow-sm text-center" type="text" value="<?php echo $_SESSION['biografia']; ?>" readonly="" style="padding-left: 10px;">
                        </div>
                    </div>
                </div>
                <div class="col" style="margin-bottom: 10px;">
                    <h1 class="text-center" style="background-color: #baf596;padding-top: 10px;padding-bottom: 10px;color: rgb(255,255,255);font-size: 40px;font-weight: bold;">
                        Nuovi dati</h1>
                    <div class="row">
                        <div class="col">
                        <form method="post" action="mod.php" id="formaggiornamento">
                                <h1 class="text-center" style="font-size: 25px;">Nome:&nbsp;</h1><input class="form-control" type="text" name="nuovonome" required="" placeholder="Inserisci il nuovo nome" maxlength="30" minlength="5">
                                <h1 class="text-center" style="font-size: 25px;">Cognome:&nbsp;</h1><input class="form-control" type="text" name="nuovocognome" required="" placeholder="Inserisci il nuovo cognome" maxlength="30" minlength="5">
                                <h1 class="text-center" style="font-size: 25px;">Data di nascita:&nbsp;</h1><input class="form-control" type="date" name="nuovadata" required="">
                                <h1 class="text-center" style="font-size: 25px;">Biografia:&nbsp;</h1>
                                <textarea rows="6" cols="40" name="nuovabiografia" required="" placeholder="Inserisci una nuova biografia" minlength="10"></textarea>
                            </form>
                        </div>
                    </div><button class="btn btn-secondary btn-lg" type="submit" form="formaggiornamento" style="margin-top: 10px;padding-left: 20px;padding-right: 25px;">Aggiorna i dati<i class="fa fa-refresh" style="padding-left: 5px;"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-clean" style="background-color: rgba(146,144,144,0.37);">
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