<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.png">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom bootstrap styles -->
    <link href="css/overwrite.css" rel="stylesheet">

    <!-- Font -->
    <link href="fonts/open-sans/stylesheet.css" rel="stylesheet">

    <!-- Font icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="fonts/pe-icon-7-stroke/css/helper.css" rel="stylesheet">

    <!-- Animate css -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- prettyPhoto -->
    <link href="css/prettyPhoto.css" rel="stylesheet" />

    <!-- flexslider -->
    <link href="css/flexslider.css" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Theme skin -->
    <link href="skins/default.css" rel="stylesheet" />

</head>

<body>

<!-- Start header -->
<header>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="fa fa-tree"></i> {{ config('app.name', 'Laravel') }}
                </a>
                {{--<a class="navbar-brand" href="#"><img src="img/logo.png" alt="" /></a>--}}
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a id="GoToHome" href="#home" class="selected"><i class="fa fa-home fa-2x"></i></a></li>
                    <li><a id="GoToFeatures" href="#features">Tour</a></li>
                    <li><a id="GoToDesc" href="#description">Applications</a></li>
                    <li><a id="GoToGallery" href="#screenshot">Communauté</a></li>
                    <li><a id="GoToPricing" href="#pricing">Documentation</a></li>
                </ul>
                <div class="navbar-right">
                    <a href="{{ route('login') }}" class="btn btn-bordered" style="text-transform: none">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i> Se connecter
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-primary" style="text-transform: none">
                        <i class="fa fa-users" aria-hidden="true"></i> S'inscrire
                    </a>
                </div>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</header>
<!-- End header -->

<!-- End home -->
<section id="home" class="home-wrapper parallax image-bg">
    <div class="home-contain">
        <div class="container">
            <div class="row text-center wow fadeInUp" data-wow-delay="0.4s">
                <div class="col-md-10 col-md-offset-1">
                    <h3>Boostez votre entreprise.
                     <span style="font-size: 22px">
                            Ortrank est une suite complète de logiciels de gestion gratuit pour votre entreprise.
                     </span>
                    </h3>

                    <p class="btn-inline">
                        <a href="#" class="btn btn-primary btn-lg">DÉMARREZ - C'EST GRATUITe</a>
                    </p>
                    <div class="home-slider">
                        <div class="slider-wrapper">
                            <div class="imac-device">
                                <ul class="slides">
                                    <li>
                                        <div class="video-container">
                                            <div class="youTubeEmbed"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/slider/img4.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/slider/img4.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/slider/img4.png" alt="" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <img src="img/imac.png" class="img-responsive" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End home -->

<div class="clearfix"></div>

<!-- Start features -->
<section id="features" class="contain desc-wrapp gray-bg">
    <div class="container">
        <div class="row text-center wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="heading"><span>Fonctionnalités</span>Plus de 5 fonctionnalités inclusent</h3>
            </div>
        </div>
        <div class="row wow fadeInDown" data-wow-delay="0.4s">
            <div class="col-md-4 feature-box">
                <i class="pe-7s-phone pe-feature"></i>
                <h5>SMS Maketing</h5>
                <p>
                    Eu sit soluta antiopam, postea sanctus in an vis. Pro primis insolens recteque ne, nostrum molestie splendide sed et elitr.

                </p>
                <a href="#">Découvrir</a>
            </div>
            <div class="col-md-4 feature-box">
                <i class="pe-7s-edit pe-feature"></i>
                <h5>Calendrier</h5>
                <p>
                    Eu sit soluta antiopam, postea sanctus in an vis. Pro primis insolens recteque ne, nostrum molestie splendide sed et elitr.
                </p>
                <a href="#">Découvrir</a>
            </div>
            <div class="col-md-4 feature-box">
                <i class="pe-7s-graph1 pe-feature"></i>
                <h5>Immobilier</h5>
                <p>
                    Eu sit soluta antiopam, postea sanctus in an vis. Pro primis insolens recteque ne, nostrum molestie splendide sed et elitr.
                </p>
                <a href="#">Découvrir</a>
            </div>
            <div class="col-md-4 feature-box">
                <i class="pe-7s-paper-plane pe-feature"></i>
                <h5>Etablissement scolaire</h5>
                <p>
                    Eu sit soluta antiopam, postea sanctus in an vis. Pro primis insolens recteque ne, nostrum molestie splendide sed et elitr.
                </p>
                <a href="#">Découvrir</a>
            </div>
            <div class="col-md-4 feature-box">
                <i class="pe-7s-share pe-feature"></i>
                <h5>Commerce</h5>
                <p>
                    Eu sit soluta antiopam, postea sanctus in an vis. Pro primis insolens recteque ne, nostrum molestie splendide sed et elitr.
                </p>
                <a href="#">Découvrir</a>
            </div>
            <div class="col-md-4 feature-box">
                <i class="pe-7s-paperclip pe-feature"></i>
                <h5>Documents</h5>
                <p>
                    Eu sit soluta antiopam, postea sanctus in an vis. Pro primis insolens recteque ne, nostrum molestie splendide sed et elitr.
                </p>
                <a href="#">Découvrir</a>
            </div>
        </div>
    </div>
</section>
<!-- End features -->

<div class="clearfix"></div>

<!-- Start description -->
<section id="description" class="contain">
    <div class="container">
        <div class="row">
            <div class="col-md-7 wow fadeInLeft" data-wow-delay="0.4s">
                <img src="img/device.png" class="img-responsive" alt="" />
            </div>
            <div class="col-md-5 margintop40 wow fadeInRight" data-wow-delay="0.4s">
                <div class="accordion clearfix" id="accordion1">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                <i class="pe-7s-angle-down"></i> Product knowlage
                            </a>
                        </div>
                        <div id="collapse1" class="accordion-body collapse in">
                            <div class="accordion-inner">
                                <p>
                                    Sed modus munere menandri ad. Te ius vero qualisque concludaturque. Sed ne vide fastidii incorrupte, elitr soleat intellegebat eam at. Aperiri facilis in pro, vis idque harum ex, ex vocent utroque similique vix choro moderatius consequuntur sit te, has veri salutatus te. Labore graecis aliquando ad sed. Accusam constituto honestatis et eos.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                <i class="pe-7s-angle-down"></i> How to get it
                            </a>
                        </div>
                        <div id="collapse2" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>
                                    Ea qui facete corpora honestatis. Eu sit soluta antiopam, postea sanctus incorrupte an vis. Pro primis insolens recteque no. Pro ei nostrum molestie splendide. Sed et elitr zril, harum euismod nam ad, velit sadipscing quo ad. Duo facer solet deleniti an, nec quis oportere efficiendi an, et regione principes comprehensam qui.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                <i class="pe-7s-angle-down"></i> Product license
                            </a>
                        </div>
                        <div id="collapse3" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>
                                    Lorem ipsum dolor sit amet, eros accumsan intellegam cu eum, sed te docendi blandit. In primis lucilius mea, alii oratio numquam ei qui. Eam at quas mnesarchum. An adhuc consequat mel, usu in utroque dolorem. Nam diceret aliquam singulis no. Delenit temporibus scribentur eum eu. Labore graecis aliquando ad sed accusam constituto honestatis et eos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End description -->

<div class="clearfix"></div>

<!-- Start counter -->
<section id="counter-wrapper">
    <div class="counter-contain">
        <div class="container">
            <div class="row text-center appear stats wow fadeInUp" data-wow-delay="0.4s">
                <div class="col-md-12">
                    <h3 style="text-transform: none;">Plus de1000 entreprises utilisent Ortrank</h3>
                    <p>Tous vos besoins, avec une utilisation hyper simple</p>
                </div>
            </div>
            <div class="row text-center appear stats wow fadeInDown" data-wow-delay="0.4s">
                <div class="col-md-2 col-md-offset-2">
                    <span id="counter-download" class="counter-number">1200</span>
                    <span class="counter-text">Downloader</span>
                </div>
                <div class="col-md-2">
                    <span id="counter-view" class="counter-number">625</span>
                    <span class="counter-text">Windows user</span>
                </div>
                <div class="col-md-2">
                    <span id="counter-android" class="counter-number">348</span>
                    <span class="counter-text">Android user</span>
                </div>
                <div class="col-md-2">
                    <span id="counter-ios" class="counter-number">227</span>
                    <span class="counter-text">IOS user</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End counter -->

<div class="clearfix"></div>

<!-- Start screenshot -->
<section id="screenshot" class="contain">
    <div class="container">
        <div class="row text-center wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-md-10 col-md-offset-1 wow fadeInUp" data-wow-delay="0.4s">
                <h3 class="heading"><span>Secreenshot</span> Our product screenshot</h3>
            </div>
        </div>
    </div>
    <div id="screenshot-contain" class="wow fadeInDown" data-wow-delay="0.4s">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-10 col-md-offset-1">
                    <div class="screenshot-slider">
                        <div class="screenshot-wrapper">
                            <div class="flexslider text-center">
                                <ul class="slides">
                                    <li>
                                        <a href="#"><img src="img/screenshot/img1.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/screenshot/img2.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/screenshot/img3.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/screenshot/img4.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/screenshot/img5.png" alt="" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <img src="img/browser.png" class="img-responsive" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End screenshot -->

<div class="clearfix"></div>

<div class="clearfix"></div>

<!-- Start download -->
<section id="download">
    <div class="download-wrapper">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="0.4s">
                <div class="col-md-8 col-md-offset-2">
                    <h4 style="text-transform: none; color: #fff;">Libérez votre potentiel de croissance</h4>
                    <p>Pas de carte de crédit nécessaire - Accès direct.</p>
                    <a href="#" class="btn btn-primary btn-lg">DÉMARREZ - C'EST GRATUITe</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End download -->

<div class="clearfix"></div>

<!-- Start testimoni -->
<section id="testimoni" class="contain">
    <div class="container">
        <div class="row text-center wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-md-12">
                <h3 class="heading"><span>Testimonials</span>People said about meminz</h3>
            </div>
        </div>
    </div>
    <div id="owl-testimoni" class="owl-carousel wow fadeInDown" data-wow-delay="0.4s">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial">
                        <blockquote>
                            Sed modus munere menandri ius vero qualisque concludaturque ne vide fastidii incorrupte.
                        </blockquote>
                        <span class="testimoni-sparator"></span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="testimoni-author">
                        <div class="author-info">
                            <h5>Alfatih</h5>
                            <p><a href="#">99webpage owner</a></p>
                        </div>
                        <img src="img/testimoni/avatar1.png" alt="" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial">
                        <blockquote>
                            Duo facer solet deleniti an, nec quis oportere efficiendi an regione principes.
                        </blockquote>
                        <span class="testimoni-sparator"></span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="testimoni-author">
                        <div class="author-info">
                            <h5>Ence iif</h5>
                            <p><a href="#">99webpage founder</a></p>
                        </div>
                        <img src="img/testimoni/avatar2.png" alt="" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial">
                        <blockquote>
                            Choro moderatius consequuntur sit te, has veri salutatus te abore graecis aliquando.
                        </blockquote>
                        <span class="testimoni-sparator"></span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="testimoni-author">
                        <div class="author-info">
                            <h5>Rinna N</h5>
                            <p><a href="#">99webpage manager</a></p>
                        </div>
                        <img src="img/testimoni/avatar3.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial">
                        <blockquote>
                            An adhuc consequat mel, usu in utroque dolorem. Nam diceret aliquam singulis no veri.
                        </blockquote>
                        <span class="testimoni-sparator"></span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="testimoni-author">
                        <div class="author-info">
                            <h5>Kang abin</h5>
                            <p><a href="#">99webpage designer</a></p>
                        </div>
                        <img src="img/testimoni/avatar4.png" alt="" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial">
                        <blockquote>
                            Minimum albucius detraxit qui eu, veniam equidem eum in, constituam referrentur ius et.
                        </blockquote>
                        <span class="testimoni-sparator"></span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="testimoni-author">
                        <div class="author-info">
                            <h5>Mang idi</h5>
                            <p><a href="#">99webpage marketing</a></p>
                        </div>
                        <img src="img/testimoni/avatar5.png" alt="" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial">
                        <blockquote>
                            Aperiri facilis in pro, vis idque harum ex, ex vocent utroque similique vi intellegebat eam.
                        </blockquote>
                        <span class="testimoni-sparator"></span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="testimoni-author">
                        <div class="author-info">
                            <h5>Ceu onah</h5>
                            <p><a href="#">99webpage co-marketing</a></p>
                        </div>
                        <img src="img/testimoni/avatar6.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End testimoni -->

<div class="clearfix"></div>

<!-- Start client -->
<section id="client" class="contain gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeInUp" data-wow-delay="0.4s">
                <ul class="client-list">
                    <li>
                        <ul>
                            <li>
                                <a href="#" class="client-link">
                                    <span class="logo-hover"><img src="img/client/logo1-hover.png" alt="" /></span>
                                    <img src="img/client/logo1.png" class="client-logo" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="client-link">
                                    <span class="logo-hover"><img src="img/client/logo2-hover.png" alt="" /></span>
                                    <img src="img/client/logo2.png" class="client-logo" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="client-link">
                                    <span class="logo-hover"><img src="img/client/logo3-hover.png" alt="" /></span>
                                    <img src="img/client/logo3.png" class="client-logo" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="client-link">
                                    <span class="logo-hover"><img src="img/client/logo4-hover.png" alt="" /></span>
                                    <img src="img/client/logo4.png" class="client-logo" alt="" />
                                </a>
                            </li>
                            <li class="last">
                                <a href="#" class="client-link">
                                    <span class="logo-hover"><img src="img/client/logo5-hover.png" alt="" /></span>
                                    <img src="img/client/logo5.png" class="client-logo" alt="" />
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="bottom-list">
                        <ul>
                            <li>
                                <a href="#" class="client-link">
                                    <span class="logo-hover"><img src="img/client/logo6-hover.png" alt="" /></span>
                                    <img src="img/client/logo6.png" class="client-logo" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="client-link">
                                    <span class="logo-hover"><img src="img/client/logo7-hover.png" alt="" /></span>
                                    <img src="img/client/logo7.png" class="client-logo" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="client-link">
                                    <span class="logo-hover"><img src="img/client/logo8-hover.png" alt="" /></span>
                                    <img src="img/client/logo8.png" class="client-logo" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="client-link">
                                    <span class="logo-hover"><img src="img/client/logo9-hover.png" alt="" /></span>
                                    <img src="img/client/logo9.png" class="client-logo" alt="" />
                                </a>
                            </li>
                            <li class="last">
                                <a href="#" class="client-link">
                                    <span class="logo-hover"><img src="img/client/logo10-hover.png" alt="" /></span>
                                    <img src="img/client/logo10.png" class="client-logo" alt="" />
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End client -->

<div class="clearfix"></div>

<!-- Start contact -->
<section id="contact">
    <div class="contact-contain">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.4s">
                    <h3 class="heading"><span>Contact</span>Get in touch with us</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 wow fadeInDown" data-wow-delay="0.4s">
                    <form id="contactform" action="contact/contact.php" method="post" class="validateform" name="leaveContact">
                        <div class="clearfix"></div>
                        <div id="sendmessage">
                            <div class="alert alert-info marginbot35">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                Your message has been sent. Thank you!
                            </div>
                        </div>
                        <ul class="listForm">
                            <li>
                                <i class="pe-7s-users"></i>
                                <input class="form-control input-name" type="text" name="name" data-rule="required" data-msg="Required field" placeholder="Enter your full name" />
                                <div class="validation"></div>
                            </li>
                            <li>
                                <i class="pe-7s-mail"></i>
                                <input class="form-control input-email" type="text" name="email" data-rule="email" data-msg="Please enter a valid email" placeholder="Enter your email address" />
                                <div class="validation"></div>
                            </li>
                            <li class="push">
                                <i class="pe-7s-paper-plane"></i>
                                <textarea class="form-control input-message" rows="6" name="message" data-rule="required" data-msg="Please write something for us" placeholder="Write something for us"></textarea>
                                <div class="validation"></div>
                            </li>
                            <li class="push text-center">
                                <input type="submit" value="Send message" class="btn btn-primary btn-lg" name="Submit" />
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact -->

<div class="clearfix"></div>

<!-- Start footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="social-network">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-skype"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
                <p>2017 &copy; Copyright <a href="http://99webpage.com/">Afric Software Solution.</a> All rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!-- End footer -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-easing-1.3.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

<script type="text/javascript">
    document.getElementById("loading").className = "loading-visible";
    var hideDiv = function(){document.getElementById("loading").className = "loading-invisible";};
    var oldLoad = window.onload;
    var newLoad = oldLoad ? function(){hideDiv.call(this);oldLoad.call(this);} : hideDiv;
    window.onload = newLoad;
</script>

<!-- Fixed navigation -->
<script src="js/navigation/waypoints.min.js"></script>
<script src="js/navigation/jquery.smooth-scroll.js"></script>
<script src="js/navigation/navbar.js"></script>

<!-- Wow -->
<script src="js/wow/wow.min.js"></script>
<script src="js/wow/setting.js"></script>

<!-- Parallax -->
<script src="js/parallax/jquery.parallax-1.1.3.js"></script>
<script src="js/parallax/setting.js"></script>

<!-- flexslider -->
<script src="js/flexslider/jquery.flexslider.js"></script>
<script src="js/flexslider/setting.js"></script>

<!-- prettyPhoto -->
<script src="js/prettyPhoto/jquery.prettyPhoto.js"></script>
<script src="js/prettyPhoto/setting.js"></script>

<!-- counters -->
<script src="js/counters/jquery.appear.js"></script>
<script src="js/counters/stellar.js"></script>
<script src="js/counters/setting.js"></script>

<!-- Owl carousel -->
<script src="js/owlcarousel/owl.carousel.js"></script>
<script src="js/owlcarousel/setting.js"></script>

<!-- Totop -->
<script src="js/totop/jquery.ui.totop.js"></script>
<script src="js/totop/setting.js"></script>

<!-- youtube player -->
<script src="js/youtube-player/jquery.swfobject.1-1-1.min.js"></script>
<script src="js/youtube-player/youTubeEmbed-jquery.js"></script>
<script src="js/youtube-player/setting.js"></script>

<!-- Contact validation -->
<script src="js/validation.js"></script>

<!-- Customn javascript -->
<script src="js/custom.js"></script>

</body>
</html>
