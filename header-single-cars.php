<!DOCTYPE HTML>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <?php if(is_search()) :?>
    <meta name="robots" content="noindex, nofollw">
    <?php endif;?>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>dreamAUTO.pl</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
            <div class="logo-alt d-block d-md-none">
                <a class="link-scroll nav-link" href="<?php echo home_url('/#home',''); ?>">
                    <div class="logo-alt-txt-big">POLNAR <span class="logo-alt-txt-small"> Damian Narożny</span></div>
                </a>
            </div>
            <button class="navbar-toggler ml-auto button-nav" type="button" data-toggle="collapse"
                data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false"
                aria-label="Przełącznik aplikacji">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="nav-link link-scroll d-none d-md-block" href="<?php echo home_url('/#home',''); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="logo" alt="...">
            </a>

            <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ml-auto">
                        <a class="link-scroll nav-link header-link" href="<?php echo home_url('/#skup',''); ?>">Skup
                            samochodów</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="link-scroll nav-link header-link"
                            href="<?php echo home_url('/#sprzedaz',''); ?>">Oferta samochodów</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="link-scroll nav-link header-link"
                            href="<?php echo home_url('/#wspolpraca',''); ?>">Nasi partnerzy</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="link-scroll nav-link header-link"
                            href="<?php echo home_url('/#kontakt',''); ?>">Kontakt</a>
                    </li>
                </ul>
            </div>

        </nav>
    <section>
        <div class="alternative-hero-box">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/auto-business-car-sale-consumerism-people-concept.jpg"
                class="alternative-hero-image" alt="...">
            <div class="col-10 col-md-6 carousel-caption text-left single-hero-text">
                <h2 class="hero-text-header">SPŁACIMY TWÓJ LEASING LUB KREDYT</h2>
                <div class="col-12 bg-dark single-hero-text-opacity">
                    <p class="hero-text">Odkupujemy samochody w trwającym leasingu lub kredycie! Załatwimy
                        zaCiebie formalności z bankiem lub firmą leasingową. Spłacimy Twoją umowę i
                        zapłacimy Ci za samochód.
                    </p>
                    <button class="btn">
                        <a class="link-scroll" href="#kontakt">Kontakt</a>
                    </button>
                </div>
            </div>
        </div>
        <div id="oferta"></div>
    </section>

    </header>