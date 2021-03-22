<?php get_header('archive-cars'); ?>

<?php the_post(); ?>
<main>
    <section>
        <div class="section">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
                    <?php 
                    if ( get_query_var('paged') ) {
                        $paged = get_query_var('paged');
                    } elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
                        $paged = get_query_var('page');
                    } else {
                        $paged = 1;
                    }
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $offer_archive = new WP_Query(array(
                        'post_type'=> 'cars',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'typ_oferty',
                                'field'    => 'slug',
                                'terms'    => 'oferta-archiwalna',
                            ),
                        ),
                        'posts_per_page' => get_option('posts_per_page'),     
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'orderby' => 'desc',
                        'orderby' => 'date'
                        
                        ));
                    ?>

                    <?php if($offer_archive -> have_posts()) :?>
                    <?php while ($offer_archive -> have_posts()) : $offer_archive -> the_post(); ?>

                    <article id="cars/<?php the_ID();?>">

                        <div class="col">
                            <div class="article">
                                <div class="car-bar">
                                    <div class="col-12">
                                        <div class="row justify-content-between">
                                        <a class="car-bar" href="<?php the_permalink(); ?>/#oferta"><h2 class="archive-car-name"><?php the_title();?></h2></a>
                                            
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php the_permalink(); ?>/#oferta"><img src="<?php the_field('zdjecie_1'); ?>" class="image-style" alt="..."></a>
                                
                            </div>
                        </div>
                    </article>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>


    <div class="paginaion d-flex justify-content-center">
        <?php if ($offer_archive->max_num_pages > 1) : // custom pagination  ?>
        <?php
                        $orig_query = $wp_query; // fix for pagination to work
                        $wp_query = $offer_archive;
                        $big = 999999999;
                        echo paginate_links(array(
                            'base' => str_replace($big, '%#%', get_pagenum_link($big)),
                            'format' => '?paged=%#%',
                            'current' => max(1, get_query_var('paged')),
                            'total' => $wp_query->max_num_pages,
                            'prev_text' => 'Poprzednia strona',
                            'next_text' => 'Następna strona',
                        ));                  
                        $wp_query = $orig_query; // fix for pagination to work
                        ?>
        <?php endif; ?>
    </div>
    <?php wp_reset_postdata(); else: echo '<p>'.__('Obecnie nie ma żadych sprzedaych samochdów.').'</p>'; endif; ?>

</main>

<?php get_footer('archive-cars'); ?>