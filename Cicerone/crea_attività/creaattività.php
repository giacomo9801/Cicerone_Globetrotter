<?php session_start(); 
require_once("../../VerificaIdentita/auth.php");?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>crea_attività_cicerone</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="font-family: 'Roboto';">
    <div class="row">
        <div class="col offset-xl-0">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="padding-bottom: 30px;">
                <div class="container"><a class="navbar-brand" href="../index/index.php"
                        style="font-size: 35px;filter: blur(0px);font-style: italic;">Cicerone</a><button
                        class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span
                            class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link text-center"
                                    href="../index/index.php" style="font-family: Roboto, sans-serif;">Home<i
                                        class="fa fa-home" style="font-size: 20px;padding-left: 5px;"></i></a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link text-center"
                                    href="../crea_attività/creaattività.php"
                                    style="font-family: Roboto, sans-serif;">Crea attività<i class="fa fa-plus"
                                        style="padding-left: 5px;"></i></a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link text-center"
                                    href="../ricerca_attività/ricercaattività.php"
                                    style="font-family: Roboto, sans-serif;">Ricerca attività<i class="fa fa-search"
                                        style="padding-left: 5px;"></i></a></li>
                            <li class="dropdown nav-item"><a class="dropdown-toggle nav-link text-center"
                                    data-toggle="dropdown" aria-expanded="false" href="#"
                                    style="font-family: Roboto, sans-serif;"><strong><?php echo $_SESSION['nome']; ?></strong></a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation"
                                href="../profilo/profilo.php?id_registrazione=' . $_SESSION['id'] .'"
                                        style="font-family: Roboto, sans-serif;">Profilo<i class="fa fa-user"
                                            style="padding-left: 5px;"></i></a><a class="dropdown-item"
                                        role="presentation" href="../richieste/richieste.php"
                                        style="font-family: Roboto, sans-serif;">Partecipazioni<i
                                            class="fa fa-street-view" style="padding-left: 5px;"></i></a>
                                    <a class="dropdown-item" role="presentation"
                                        href="../elenco_feedback/elencofeedback.php"
                                        style="font-family: Roboto, sans-serif;">Feedback<i class="fa fa-feed"
                                            style="padding-left: 5px;"></i></a><a class="dropdown-item"
                                        role="presentation" href="../log_out/logout.php"
                                        style="font-family: Roboto, sans-serif;">Log Out<i class="fa fa-external-link"
                                            style="padding-left: 5px;"></i></a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h1 class="text-center"
                style="background-color: #5dd167;color: rgba(255,255,255,0.92);line-height: 48px;letter-spacing: 0px;font-weight: bold;font-size: 30px;">
                Creazione attività</h1>
            <form method="post" action="mkact.php"
                style="width: 1211;background-repeat: no-repeat;background-size: cover;filter: blur(0px);">
                <div class="form-row d-xl-flex justify-content-center align-items-center align-content-center">
                    <div class="col offset-xl-2"><input class="border-success shadow form-control d-xl-flex" type="text"
                            name="nome" required="" placeholder="Inserisci un nome all'attività" autocomplete="off"
                            style="margin-left: 10px;width: 400px;margin-top: 10px;letter-spacing: 1px;/*border-radius: 20px;*/height: 60px;font-weight: bold;font-size: 13px;">
                    </div>
                    <div class="col-xl-5"><input class="border-success shadow form-control" type="text"
                            name="puntoincontro" required=""
                            placeholder="Inserisci il luogo dove incontrerai gli altri utenti"  autocomplete="off"
                            style="margin-left: 10px;width: 400px;margin-top: 10px;letter-spacing: 1px;/*border-radius: 20px;*/font-size: 13px;height: 60px;font-weight: bold;">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-xl-5 offset-xl-2"><input class="border-success shadow form-control" type="text"
                            name="lingua" required="" placeholder="Inserisci le lingue parlate" autocomplete="off"
                            style="margin-left: 10px;width: 400px;margin-top: 10px;letter-spacing: 1px;/*border-radius: 20px;*/font-size: 13px;height: 60px;font-weight: bold;">
                    </div>
                    <div class="col-xl-3 offset-xl-0"><input class="border-success shadow form-control"
                            type="datetime-local" name="dataora" required="" max="59"
                            style="margin-left: 10px;width: 400px;margin-top: 10px;letter-spacing: 1px;/*border-radius: 20px;*/font-size: 13px;height: 60px;font-weight: bold;">
                    </div>
                    <div class="col-xl-5 offset-xl-2"><input class="border-success shadow form-control" type="number"
                            name="durata" required="" placeholder="Inserisci quanti minuti durerà l'attività" min="1" max="600"
                            step="1"
                            style="margin-left: 10px;width: 400px;margin-top: 10px;letter-spacing: 1px;/*border-radius: 20px;*/font-size: 13px;height: 60px;font-weight: bold;">
                    </div>
                    <div class="col-xl-3 offset-xl-0"><input class="border-success shadow form-control" type="number"
                            name="prezzo" required="" placeholder="Inserisci il costo per persona" min="0" max="100"
                            step="1"
                            style="margin-left: 10px;width: 400px;margin-top: 10px;letter-spacing: 1px;/*border-radius: 20px;*/font-size: 13px;height: 60px;font-weight: bold;">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-xl-5 offset-xl-2"><textarea
                            class="border rounded-0 border-success shadow form-control d-xl-flex mb-auto" rows="4"
                            cols="20" name="descrizione" placeholder="Inserisci una descrizione dell'attività"
                          autocomplete="off"
                            style="margin-left: 10px;width: 400px;margin-top: 10px;letter-spacing: 1px;font-size: 13px;height: 100px;font-weight: bold;"></textarea>
                    </div>
                    <div class="col-xl-5 offset-xl-0 text-center" style="margin-right: -43px;"><button
                            class="btn btn-danger text-uppercase" type="submit"
                            style="background-color: #ff0000;font-size: 20px;margin-top: 30px;margin-left: 10px;letter-spacing: 0px;font-weight: bold;border-radius: 27px;">Crea
                            attività</button></div>
                </div>
            </form>
        </div>
    </div>
    <div class="footer-clean" style="background-color: rgba(146,144,144,0.37);padding-bottom: 58px;margin-top: 50px;">
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