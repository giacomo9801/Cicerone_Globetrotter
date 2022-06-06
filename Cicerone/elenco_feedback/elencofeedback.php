<?php session_start();
include('../../Database/conn.php');
require_once("../../VerificaIdentita/auth.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>elenco_feedback_cicerone</title>
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
                    <li class="nav-item" role="presentation"><a class="nav-link text-center" href="../crea_attività/creaattività.php">Crea attività<i class="fa fa-plus" style="padding-left: 5px;"></i></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-center" href="../ricerca_attività/ricercaattività.php">Ricerca attività<i class="fa fa-search" style="padding-left: 5px;"></i></a></li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle nav-link text-center" data-toggle="dropdown" aria-expanded="false" href="#"><strong><?php echo $_SESSION['nome']; ?></strong></a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../profilo/profilo.php?id_registrazione=' . $_SESSION['id'] .'">Profilo<i class="fa fa-user" style="padding-left: 5px;"></i></a><a class="dropdown-item" role="presentation" href="../richieste/richieste.php">Partecipazioni<i class="fa fa-street-view" style="padding-left: 5px;"></i></a>
                            <a class="dropdown-item" role="presentation" href="../elenco_feedback/elencofeedback.php">Feedback<i class="fa fa-feed" style="padding-left: 5px;"></i></a><a class="dropdown-item" role="presentation" href="../log_out/logout.php">Log Out<i class="fa fa-external-link" style="padding-left: 5px;"></i></a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="text-center" style="background-color: #5dd167;color: rgb(249,249,249);font-size: 30px;font-weight: bold;">Elenco completo
        feedback</h1>


    <?php
    #visualizza i feedback ricevuti 
    $query = "SELECT * from feedback where utente_id='$_SESSION[id]'";
    $r_query = mysqli_query($cn, $query);

    echo '  
        <table class="table">
        <thead>
            <tr>
                 <th class="table-primary text-uppercase text-center">Nome</th>  
                 <th class="table-active text-uppercase text-center">Cognome</th> 
                <th class="table-primary text-uppercase text-center">Feedback</th>
            </tr>
        </thead>
        <tbody>';
    while ($row = mysqli_fetch_array($r_query)) {
        $idscrittore = $row['id_scrittore'];
        $feedback = $row['commento'];

        $query2 = "SELECT * from utente where id_registrazione='$idscrittore'";
        $r_query2 = mysqli_query($cn, $query2);
        while ($row = mysqli_fetch_array($r_query2)) {
            $nome = $row['nome'];
            $cognome = $row['cognome'];

            echo ' 
                <form>
                <tr>
                    <td class="text-center">' . $nome . '</td>
                    <td class="text-center">' . $cognome . '</td>
                    <td class="text-center">' . $feedback . '</td>
                    </tr>
    </form>';
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