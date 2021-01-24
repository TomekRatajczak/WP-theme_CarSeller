<?php get_header('single-cars'); ?>

<?php the_post(); ?>

<main>
    <section>
        <div class="section">
            <h1>Oferta samochodu</h1>
            <div class="container">
                <div class="row d-flex flex-wrap-reverse">
                    <div class="col-12 col-md-7">
                        <div class="row">
                            <div class="col-12 d-none d-md-block img-main">
                                <img src="<?php the_field('zdjecie_1'); ?>" id="big-image"
                                    class="image-style image-script" alt="...">
                                <div id="img-main-text" class=" d-flex align-items-center justify-content-center">Zobacz
                                    w pełnym
                                    ekranie</div>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col-md-2">
                                <img src="<?php the_field('zdjecie_1'); ?>" id="small-1" class="img-small image-script"
                                    alt="...">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php the_field('zdjecie_2'); ?>" id="small-2" class="img-small image-script"
                                    alt="...">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php the_field('zdjecie_3'); ?>" id="small-3" class="img-small image-script"
                                    alt="...">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php the_field('zdjecie_4'); ?>" id="small-4" class="img-small image-script"
                                    alt="...">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php the_field('zdjecie_5'); ?>" id="small-5" class="img-small image-script"
                                    alt="...">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php the_field('zdjecie_6'); ?>" id="small-6" class="img-small image-script"
                                    alt="...">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php the_field('zdjecie_7'); ?>" id="small-7" class="img-small image-script"
                                    alt="...">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php the_field('zdjecie_8'); ?>" id="small-8" class="img-small image-script"
                                    alt="...">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php the_field('zdjecie_9'); ?>" id="small-9" class="img-small image-script"
                                    alt="...">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php the_field('zdjecie_10'); ?>" id="small-10"
                                    class="img-small image-script" alt="...">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php the_field('zdjecie_11'); ?>" id="small-11"
                                    class="img-small image-script" alt="...">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php the_field('zdjecie_12'); ?>" id="small-11"
                                    class="img-small image-script" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 text-left">
                        <div class="article-text new-bg">
                            <h2 class="single-car-big"><?php the_title();?></h2>
                            <h3 class="single-car-mid"><?php the_field('cena_samochodu'); ?></h3>
                            <div class="d-block d-md-none">
                                <img src="<?php the_field('zdjecie_1'); ?>" id="small-1" class="img-small image-script"
                                    alt="...">
                            </div>
                            <div class="article-text-guaranty"></div>

                            <div class="single-car-small-bold">Rocznik:
                                <span class="single-car-small"><?php the_field('rok_produkcji'); ?></span>
                            </div>
                            <div class="single-car-small-bold">Kraj pochodzenia:
                                <span class="single-car-small"><?php the_field('kraj_pochodzenia'); ?></span>
                            </div>
                            <div class="single-car-small-bold">Przebieg:
                                <span class="single-car-small"><?php the_field('przebieg_samochodu'); ?></span>
                            </div>
                            <div class="article-text-guaranty"><?php the_field('gwarancja'); ?></div>

                            <!-- <div class="single-car-small-bold">Opis:</div> -->
                            </br>

                            <div class="single-car-small"><?php the_field('opis_samochodu'); ?></div>

                            <h3 class="single-car-mid">Silnik i napęd</h3>
                            <div class="single-car-small-bold">Rodzaj silnika:
                                <span class="single-car-small"><?php the_field('rodzaj_silnika'); ?></span>
                            </div>
                            <div class="single-car-small-bold">Moc:
                                <span class="single-car-small"><?php the_field('moc_silnika'); ?></span>
                            </div>
                            <div class="single-car-small-bold">Momęt obrotowy:
                                <span class="single-car-small"><?php the_field('momet_obrotowy'); ?></span>
                            </div>
                            <div class="single-car-small-bold">Skrzynia biegów:
                                <span class="single-car-small"><?php the_field('szkrzynia_biegow'); ?></span>
                            </div>
                            <div class="single-car-small-bold">V max:
                                <span class="single-car-small"><?php the_field('predkosc_maksymalna'); ?></span>
                            </div>
                            <div class="single-car-small-bold">0-100km/h:
                                <span class="single-car-small"><?php the_field('przyspieszenie'); ?></span>
                            </div>
                            <div class="single-car-small-bold">Zużycie paliwa(w cyklu mieszanym):
                                <span class="single-car-small"><?php the_field('zuzycie_paliwa'); ?></span>
                            </div>
                            <h3 class="single-car-mid d-block d-md-none">Galeria zdjęć</h3>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 col-md-7">
                        <h3 class="single-car-mid">Wyposażenie</h3>
                        <span class="single-car-item">
                            <?php printCarelementsCategories($post->ID); ?>
                        </span>
                        <?php the_content(); ?>
                    </div>
                    <div class="col-12 col-md-5 text-left">
                        <h3 class="single-car-mid">Wyposażenie dodatkowe</h3>
                        <div class="single-car-small-bold"><?php the_field('wyposazenie_dodatkowe'); ?>
                        </div>

                        <h3 class="single-car-mid"><?php the_field('dodatowe_informacje_box'); ?></h3>
                        <div class="single-car-small-bold"><?php the_field('dodatkowe-informacje'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="section single-pink-background">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-10">
                        <div class="single-car-small-light">Twoje auto:</div>
                        <h2 class="single-car-big-light"><?php the_title();?></h2>
                        <br />
                        <div class="single-car-small-light">Cena:</div>
                        <h3 class="single-car-mid-light"><?php the_field('cena_samochodu'); ?></h3>
                        <br />
                        <div class="single-car-small-light">Koszt miesięczny:</div>
                        <h3 class="single-car-mid-light">od <?php the_field('koszt_miesieczny'); ?><span
                                class="single-car-small-light"> Całkowity koszt leasingu: </span> 110%</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-4 mb-4 mb-md-0 d-flex justify-content-center">
                        <svg width="12em" height="12em" viewBox="0 0 16 16" class="bi bi-shield-check"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z" />
                            <path fill-rule="evenodd"
                                d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        </svg>
                    </div>
                    <div class="col-12 col-md-8 colblack">
                        <h2>Ubezpieczenia</h2>
                        <p>Nasze samochody ubezpiecza dla Państwa duża firma brokerska, która posiada w ofercie
                            ubezpieczenia wszystkich największych towarzystw na rynku. Ze względu na dużą liczbę
                            zawieranych umów ubezpieczeniowych możemy zaproponować Państwu najlepsze warunki.
                        </p>
                        <h2 class="text-right">Gwarancja</h2>
                        <p class="text-right">Na wybrane auta z naszej oferty proponujemy roczną gwarancję
                            techniczną (z możliwością wydłużenia do 3 lat).Ubezpieczenia łączone pakietowo
                            zapewniają najniższą możliwą cenę przy maksymalnej ochronie wszyssstkich
                            największych.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer('single-cars'); ?>