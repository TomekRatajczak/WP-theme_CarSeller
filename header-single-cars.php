<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <?php if (is_search()) : ?>
    <meta name="robots" content="noindex, nofollw">
    <?php endif; ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <a class="nav-link link-scroll d-none d-md-block" href="<?php echo home_url('/#home', ''); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="logo" alt="...">
            </a>
            <a class="link-scroll nav-link d-block d-md-none" href="<?php echo home_url('/#home', ''); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="logo-sm" alt="...">
            </a>

            <button class="navbar-toggler ml-auto button-nav" type="button" data-toggle="collapse"
                data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false"
                aria-label="Przełącznik aplikacji">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ml-auto">
                        <a class="link-scroll nav-link header-link" href="<?php echo home_url('/#skup', ''); ?>">Skup
                            samochodów</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="link-scroll nav-link header-link"
                            href="<?php echo home_url('/#sprzedaz', ''); ?>">Oferta samochodów</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="link-scroll nav-link header-link"
                            href="<?php echo home_url('/#kontakt', ''); ?>">Kontakt</a>
                    </li>
                    <li class="nav-item ml-auto ml-lg-3 mt-2 mt-lg-0 header-link-alt">
                        <a class="link-scroll nav-link" href="<?php echo home_url('/#formularz', ''); ?>">Sprzedaj auto</a>
                    </li>
                </ul>
            </div>

        </nav>


        <div class="hero-section">
            <div class="carousel slide">
                <div class="carousel-inner">
                    <img src="<?php the_field('zdjecie_1'); ?>" class="alternative-hero-image" alt="...">
                    <div class="col-md-10 carousel-caption text-left single-hero-text">
                        <h2 class="d-none d-md-block single-hero-text-header"><?php the_title(); ?><span
                                class="r">&#8718;</span></h2>
                        <h2 class="d-block d-md-none single-hero-text-header-sm"><?php the_title(); ?><span
                                class="r">&#8718;</span></h2>
                        <h3 class="single-hero-text-hash"><span class="r">#</span><?php the_field('tag_1'); ?> <span
                                class="r">#</span><?php the_field('tag_2'); ?> <span
                                class="r">#</span><?php the_field('tag_3'); ?></h3>
                        <button class="btn-big d-none d-md-block">
                            <a class="link-scroll" href="#ofertacenowa">Sprawdź ofertę</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </header>