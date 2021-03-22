<!DOCTYPE HTML>
<html>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <?php if (is_search()) : ?>
    <meta name="robots" content="noindex, nofollw">
    <?php endif; ?>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>dreamAUTO.pl</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>
    <header id="home">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
            <a class="link-scroll nav-link d-none d-md-block" href="#home">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="logo" alt="...">
            </a>
            <a class="link-scroll nav-link d-block d-md-none" href="#home">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="logo-sm" alt="...">
            </a>

            <button class="navbar-toggler ml-auto button-nav text-white" type="button" data-toggle="collapse"
                data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false"
                aria-label="Przełącznik aplikacji">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="link-scroll nav-link d-none d-md-block" href="#home">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="logo" alt="...">
            </a>

            <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ml-auto">
                        <a class="link-scroll nav-link header-link" href="#skup">Skup samochodów</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="link-scroll nav-link header-link" href="#sprzedaz">Oferta samochodów</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="link-scroll nav-link header-link" href="#kontakt">Kontakt</a>
                    </li>
                    <li class="nav-item ml-auto ml-lg-3 mt-2 mt-lg-0 header-link-alt">
                        <a class="link-scroll nav-link" href="#formularz">Sprzedaj auto</a>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="hero-section">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-pause="false">
                <ol class="carousel-indicators dolne">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="6000">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/auto-steering-wheel-light-switch-control-paddle.jpg"
                            class="hero-section-img" alt="...">
                        <div class="col-11 col-md-8 col-lg-6 carousel-caption text-left">
                            <h2 class="hero-text-header">PROFESJONANY SKUP SAMOCHODÓW<span class="r"> &#8718;</span>
                            </h2>
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
                    <div class="carousel-item" data-interval="6000">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/front-car-lights-night-road.jpg"
                            class="hero-section-img" alt="...">
                        <div class="col-11 col-md-8 col-lg-6 carousel-caption text-left">
                            <h2 class="hero-text-header">POZBADZ SIE ODPOWIEDZIALNOŚCI<span class="r"> &#8718;</span>
                            </h2>
                            <div class="col-12 bg-dark single-hero-text-opacity">
                                <p class="hero-text"> Odkupujemy samochody w trwającym leasingu lub kredycie! Załatwimy
                                    zaCiebie formalności z bankiem lub firmą leasingową. Spłacimy Twoją umowę i
                                    zapłacimy Ci za samochód.
                                </p>
                                <button class="btn">
                                    <a class="link-scroll" href="#kontakt">Kontakt</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-interval="6000">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/smooth-material-close-up-view-of-interior-of-brand-new-modern-luxury-automobile.jpg"
                            class="hero-section-img" alt="...">
                        <div class="col-11 col-md-8 col-lg-6 carousel-caption text-left">
                            <h2 class="hero-text-header">SPŁACIMY TWÓJ LEASING LUB KREDYT<span class="r"> &#8718;</span>
                            </h2>
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
                </div>
            </div>

        </div>

        <div id="pink-button" class=" nav fixed-bottom justify-content-center">
            <li class="nav-item">
                <a class="pink nav-link link-scroll" href="#formularz">
                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-envelope-open" fill=" #edf2f4"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.818l5.724 3.465L8 8.917l1.276.766L15 6.218V5.4a1 1 0 0 0-.53-.882l-6-3.2zM15 7.388l-4.754 2.877L15 13.117v-5.73zm-.035 6.874L8 10.083l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738zM1 13.117l4.754-2.852L1 7.387v5.73zM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2z" />
                    </svg>
                    <span class="align-middle">Wypełnij formularz, aby sprzedać auto</span>
                </a>
            </li>
        </div>
        <div id="onas"></div>
    </header>