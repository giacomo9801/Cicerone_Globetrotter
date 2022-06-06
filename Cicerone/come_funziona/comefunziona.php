<?php session_start(); 
require_once("../../VerificaIdentita/auth.php");?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>come_funziona_cicerone</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body class="text-center" style="margin-top: 0px;margin-bottom: -28px;font-family: 'Roboto' !important;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="padding-bottom: 30px;">
        <div class="container"><a class="navbar-brand" href="../index/index.php"
                style="font-size: 35px;filter: blur(0px);font-style: italic;">Cicerone</a><button class="navbar-toggler"
                data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../index/index.php"
                            style="font-family: Roboto, sans-serif;">Home<i class="fa fa-home"
                                style="font-size: 20px;padding-left: 5px;"></i></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link"
                            href="../crea_attività/creaattività.php" style="font-family: Roboto, sans-serif;">Crea
                            attività<i class="fa fa-plus" style="padding-left: 5px;"></i></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link"
                            href="../ricerca_attività/ricercaattività.php"
                            style="font-family: Roboto, sans-serif;">Ricerca attività<i class="fa fa-search"
                                style="padding-left: 5px;"></i></a></li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown"
                            aria-expanded="false" href="#" style="font-family: Roboto, sans-serif;"><strong><?php echo $_SESSION['nome']; ?></strong></a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation"
                        href="../profilo/profilo.php?id_registrazione=' . $_SESSION['id'] .'" style="font-family: Roboto, sans-serif;">Profilo<i
                                    class="fa fa-user" style="padding-left: 5px;"></i></a><a class="dropdown-item"
                                role="presentation" href="../richieste/richieste.php"
                                style="font-family: Roboto, sans-serif;">Partecipazioni<i class="fa fa-street-view"
                                    style="padding-left: 5px;"></i></a>
                            <a class="dropdown-item" role="presentation" href="../elenco_feedback/elencofeedback.php"
                                style="font-family: Roboto, sans-serif;">Feedback<i class="fa fa-feed"
                                    style="padding-left: 5px;"></i></a><a class="dropdown-item" role="presentation"
                                href="../log_out/logout.php" style="font-family: Roboto, sans-serif;">Log Out<i
                                    class="fa fa-external-link" style="padding-left: 5px;"></i></a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col">
            <h1 class="text-center"
                style="background-color: #5dd167;color: rgb(255,255,255);font-size: 30px;font-weight: bold;">Cicerone:
                come funziona</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1 style="margin-right: -8px;font-size: 36px;margin-left: 10px;"><i class="fa fa-circle-thin"
                    style="font-size: 40px;margin-right: 0px;padding-right: 0px;"></i>&nbsp;Crea un'attività</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1 style="font-size: 26px;font-weight: normal;margin-left: 10px;">Dicci da dove parti,quando e a che
                prezzo. Usa il nome del tuo bar preferito, o il tuo indirizzo!.<br><br></h1>
        </div>
    </div>
    <h1 style="margin-right: -8px;font-size: 36px;margin-left: 10px;"><i class="fa fa-circle-thin"
            style="font-size: 40px;margin-right: 0px;padding-right: 0px;"></i>&nbsp;Scegli con chi andare alla scoperta
    </h1>
    <h1 style="font-size: 26px;font-weight: normal;margin-left: 10px;">Sarai tu a decidere i partecipanti alla tua
        attività, puoi accettarli o rifiutarli dall'apposita sezione "partecipazioni".<br><br></h1>
    <h1 style="margin-right: -8px;font-size: 36px;margin-left: 10px;"><i class="fa fa-circle-thin"
            style="font-size: 40px;margin-right: 0px;padding-right: 0px;"></i>&nbsp;Pagamento per le attività</h1>
    <h1 style="font-size: 26px;font-weight: normal;margin-left: 10px;">Le attività avranno un prezzo specifico scelto da
        te e il pagamento avverrà esclusivamente in contanti.<br><br></h1>
    <h1 style="margin-right: -8px;font-size: 36px;margin-left: 10px;"><i class="fa fa-circle-thin"
            style="font-size: 40px;margin-right: 0px;padding-right: 0px;"></i>&nbsp;Chiusura attività</h1>
    <h1 style="font-size: 26px;font-weight: normal;margin-left: 10px;">Quando avrai finito un attività o non potrai più
        portarla a termine, ricordati di chiuderla nella sezione del tuo profilo.<br><br></h1>
    <h1 class="text-center"
        style="background-color: #5dd167;color: rgb(255,255,255);font-size: 30px;font-weight: bold;line-height: 24px;">
        <br><strong>Ti piace parlare ma anche viaggiare?</strong><br><br></h1>
    <h1 style="margin-right: -8px;font-size: 36px;margin-left: 10px;"><i class="fa fa-circle-thin"
            style="font-size: 40px;margin-right: 0px;padding-right: 0px;"></i>&nbsp;Ricerca un'attività</h1>
    <h1 style="font-size: 26px;font-weight: normal;margin-left: 10px;">Ti basterà ricercare un attività in base al luogo
        e potrai prenderne parte ( previa accettazione ).</h1>
    <div class="footer-clean" style="background-color: rgba(146,144,144,0.37);">
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