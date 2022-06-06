<?php session_start(); 
require_once("../../VerificaIdentita/auth.php");
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>index_cicerone</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="font-family: 'Roboto' !important;">
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="padding-bottom: 30px;">
            <div class="container"><a class="navbar-brand" href="../index/index.php" style="font-size: 35px;filter: blur(0px);font-style: italic;">Cicerone</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle
                        navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link text-center" href="../index/index.php" style="font-family: Roboto, sans-serif;">Home<i class="fa fa-home" style="font-size: 20px;padding-left: 5px;"></i></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-center" href="../crea_attività/creaattività.php" style="font-family: Roboto, sans-serif;">Crea
                                attività<i class="fa fa-plus" style="padding-left: 5px;"></i></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-center" href="../ricerca_attività/ricercaattività.php" style="font-family: Roboto, sans-serif;">Ricerca attività<i class="fa fa-search" style="padding-left: 5px;"></i></a></li>
                        <li class="dropdown nav-item"><a class="dropdown-toggle nav-link text-center" data-toggle="dropdown" aria-expanded="false" href="#" style="font-family: Roboto, sans-serif;"><strong><?php echo $_SESSION['nome']; ?></strong></a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../profilo/profilo.php?id_registrazione=' . $_SESSION['id'] .'" style="font-family: Roboto, sans-serif;">Profilo<i class="fa fa-user" style="padding-left: 5px;"></i></a><a class="dropdown-item" role="presentation" href="../richieste/richieste.php" style="font-family: Roboto, sans-serif;">Partecipazioni<i class="fa fa-street-view" style="padding-left: 5px;"></i></a>
                                <a class="dropdown-item" role="presentation" href="../elenco_feedback/elencofeedback.php" style="font-family: Roboto, sans-serif;">Feedback<i class="fa fa-feed" style="padding-left: 5px;"></i></a><a class="dropdown-item" role="presentation" href="../log_out/logout.php" style="font-family: Roboto, sans-serif;">Log Out<i class="fa fa-external-link" style="padding-left: 5px;"></i></a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="highlight-blue" style="background-color: rgba(255,255,255,0);background-image: url(&quot;assets/img/sfondo_high.jpeg&quot;);background-repeat: no-repeat;background-size: cover;background-position: bottom;padding-top: 80px;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="font-size: 40px;letter-spacing: 3px;line-height: 66px;font-weight: bold;font-family: Roboto, sans-serif;">
                    Cerca-Partecipa-Scopri</h2>
                <p class="text-center" style="font-size: 22px;color: rgb(223,228,235);font-family: Roboto, sans-serif;">
                    Vai alla scoperta grazie all'aiuto dei nostri CICERONI</p>
            </div>
            <div class="buttons"><a class="btn btn-primary" role="button" href="../ricerca_attività/ricercaattività.php">Ricerca attività</a></div>
        </div>
    </div>
    <div class="highlight-phone">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="intro">
                        <h2>Dove sei diretto?</h2>
                        <p>Crea una nuova attività, fai conoscere chi sei e quali posti conosci!</p><a class="btn btn-primary" role="button" href="../crea_attività/creaattività.php">Crea
                            attività</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="d-none d-md-block iphone-mockup"><img src="assets/img/iphone.svg" class="device">
                        <div class="screen" style="background-image: url(&quot;assets/img/sfondo_iphone.jpg&quot;);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="article-list">
        <div class="container" style="padding-top: 20px;">
            <div class="intro">
                <h2 class="text-center" style="background-color: #5dd167;color: rgb(255,255,255);padding-bottom: 10px;padding-top: 10px;font-size: 30px;font-weight: bold;font-family: Roboto, sans-serif;">
                    3 cose su Cicerone che ti conquisteranno</h2>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item" data-bs-hover-animate="pulse"><a href="#"></a><i class="fa fa-users" style="font-size: 55px;"></i>
                    <h3 class="name" style="font-size: 22px;">Community</h3>
                    <p class="description" style="font-size: 20px;">Controlliamo tutti gli utenti registrati. Ogni
                        feedback e attività vengono monitorati in maniera costante, quindi sai con chi vai alla
                        scoperta.</p>
                </div>
                <div class="col-sm-6 col-md-4 item" data-bs-hover-animate="pulse"><a href="#"></a><i class="fa fa-calendar-check-o" style="font-size: 55px;"></i>
                    <h3 class="name" style="font-size: 22px;">Scelta</h3>
                    <p class="description" style="font-size: 20px;">Grazie ai tantissimi Ciceroni presenti sulla
                        piattaforma, migliaia di luoghi possono essere scoperti e tante attività possono essere svolte.
                    </p>
                </div>
                <div class="col-sm-6 col-md-4 item" data-bs-hover-animate="pulse"><a href="#"></a><i class="fa fa-euro" style="font-size: 55px;"></i>
                    <h3 class="name" style="font-size: 22px;">Prezzo</h3>
                    <p class="description" style="font-size: 20px;">Il fattore economico è molto importante. Il prezzo
                        basso è una delle nostre garanzie. Tutte le attività vengono svolte a prezzi concorrenziali.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="team-grid">
        <div class="container" style="margin-top: -70px;">
            <div class="intro">
                <h2 class="text-center" style="background-color: #e3cece;padding-bottom: 40px;color: rgb(255,255,255);font-family: Roboto, sans-serif;font-weight: bold;">
                    Team </h2>
            </div>
            <div class="row people">
                <div class="col-md-4 col-lg-3 item" data-aos="fade-right" data-aos-duration="850">
                    <div class="box" style="background-image: url(&quot;assets/img/foto_giacomo.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Giacomo Corcella</h3>
                            <p class="title">Developer</p>
                            <div class="social"><a href="https://www.facebook.com/giacomocorcella981"><i class="fa fa-facebook-official"></i></a><a href="https://www.instagram.com/giacomo_c98/"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item" data-aos="fade-down" data-aos-duration="850">
                    <div class="box" style="background-image: url(&quot;assets/img/foto_manu.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Emanuele Colonna</h3>
                            <p class="title">Developer</p>
                            <div class="social"><a href="https://www.facebook.com/emanuele.colonna.79"><i class="fa fa-facebook-official"></i></a><a href="https://www.instagram.com/emanuele_colonna/"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item" data-aos="fade-up" data-aos-duration="850">
                    <div class="box" style="background-image: url(&quot;assets/img/foto_fuccilli.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Fuccilli Francesco</h3>
                            <p class="title">Developer</p>
                            <div class="social"><a href="https://www.facebook.com/francesco.fuccilli"><i class="fa fa-facebook-official"></i></a><a href="https://www.instagram.com/francesco_fuccilli/"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item" data-aos="fade-left" data-aos-duration="850">
                    <div class="box" style="background-image: url(&quot;assets/img/foto_claudio.jpg&quot;);">
                        <div class="cover">
                            <h3 class="name">Claudio Lamusta</h3>
                            <p class="title">Developer</p>
                            <div class="social"><a href="https://www.facebook.com/claudio.lamusta"><i class="fa fa-facebook-official"></i></a><a href="https://www.instagram.com/claudiolamusta/"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1 class="text-center" style="background-color: rgba(86,84,204,0.17);color: rgb(255,255,255);font-weight: bold;">
                        Domande Frequenti</h1>
                </div>
            </div>
            <div class="row">
                <div class="col" style="padding-bottom: 70px;">
                    <div role="tablist" id="accordion-1">
                        <div class="card">
                            <div class="card-header text-center" role="tab">
                                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-1" href="div#accordion-1 .item-1" style="color: rgb(0,0,0);">Cosa vuol dire essere un Cicerone?</a></h5>
                            </div>
                            <div class="collapse item-1" role="tabpanel" data-parent="#accordion-1">
                                <div class="card-body">
                                    <p class="card-text text-center">Cicerone vuol dire essere una persona con spiccate capacità
                                        oratorie e con grande voglia di interagire con luoghi e persone.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center" role="tab">
                                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-2" href="div#accordion-1 .item-2" style="color: rgb(0,0,0);">Cosa vuol dire essere un Globetrotter?</a></h5>
                            </div>
                            <div class="collapse item-2" role="tabpanel" data-parent="#accordion-1">
                                <div class="card-body">
                                    <p class="card-text text-center">Essere un Globetrotter vuol dire essere una persona che viaggia
                                        continuamente per il mondo a scopo turistico, per lo più utilizzando mezzi di
                                        fortuna.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center" role="tab">
                                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-3" href="div#accordion-1 .item-3" style="color: rgb(0,0,0);">Cosa si intende per attività?</a></h5>
                            </div>
                            <div class="collapse item-3" role="tabpanel" data-parent="#accordion-1">
                                <div class="card-body">
                                    <p class="card-text text-center">Per attività si intende un particolare giro turistico o un
                                        attività come un persorco enogastronico o un escursione.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center" role="tab">
                                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-4" href="div#accordion-1 .item-4" style="color: rgb(0,0,0);">Come nasce il portale Cicerone?</a></h5>
                            </div>
                            <div class="collapse item-4" role="tabpanel" data-parent="#accordion-1">
                                <div class="card-body">
                                    <p class="card-text text-center">Il portale "Cicerone" nasce dalla reale esigenza di voler
                                        viaggiare, conoscere e vivere con lo zaino in spalla. Bisogna essere sempre
                                        pronti a stringere nuove amicizie e a creare legami indipendeti dal
                                        background&nbsp;culturale/sociale.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/script.min.js"></script>
   
</body>

</html>