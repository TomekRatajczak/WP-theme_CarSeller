<!DOCTYPE HTML>
<html>

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

    <?php the_post(); ?>

    <main>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <h1 class="mt-5"><?php the_title(); ?></h1>
                    <div>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer("single-cars"); ?>