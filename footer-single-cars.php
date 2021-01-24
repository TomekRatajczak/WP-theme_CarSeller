        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3 mb-4 px-5">
                        <h3 class="header-footer">Adres</h3>
                        <div class="text-footer"><b>POLNAR Damian Narożny</b></div>
                        <div class="text-footer">ul. Starołęcka 18/210</div>
                        <div class="text-footer">61-361 Poznań</div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4 px-5">
                        <h3 class="header-footer">Kontakt</h3>
                        <div class="text-footer"><b>Skup aut</b></div>
                        <div class="text-footer"><img class="icon-footer"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/telephone.svg">884 800
                            278</div>
                        <div class="text-footer"><img class="icon-footer"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/email.svg">dreamAUTO@dreamAUTO.pl
                        </div>
                        <div class="text-footer"><b>Kredytowanie</b></div>
                        <div class="text-footer"><img class="icon-footer"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/telephone.svg">884 800
                            277</div>
                        <div class="text-footer"><img class="icon-footer"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/email.svg">kredyty@dreamAUTO.pl
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4 px-5">
                        <h3 class="header-footer">Mapa strony</h3>
                        <ul>
                            <li><a class="link-scroll" href="<?php echo home_url('/#onas',''); ?>">O nas</a></li>
                            <li><a class="link-scroll" href="<?php echo home_url('/#skup',''); ?>">Profesjonalny skup
                                    samochodów</a></li>
                            <li><a class="link-scroll" href="<?php echo home_url('/#formularz',''); ?>">Formularz
                                    kontaktowy</a></li>
                            <li><a class="link-scroll" href="<?php echo home_url('/#sprzedarz',''); ?>">Sprzedaż aut
                                    używanych</a></li>
                            <li><a class="link-scroll" href="<?php echo home_url('/cars',''); ?>">Archiwum
                                    samochodów</a>
                            </li>
                            <li><a class="link-scroll" href="<?php echo home_url('/#wspolpraca',''); ?>">Nasi
                                    partnerzy</a>
                            </li>
                            <li><a class="link-scroll" href="<?php echo home_url('/#kontakt',''); ?>">Kontakt z nami</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4 px-5">
                        <div><a class="" href="http://www.rzetelnafirma.pl/30VF6F0Z/1" target="_blank"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/baner_03.jpg"
                                    class="img-fluid" alt="..."></a></div>
                    </div>
                    <div class="col-12 border-top">
                        <div class="klauzula">Informacje zaprezentowane na naszych stronach nie stanowią oferty w
                            rozumieniu
                            przepisów
                            Kodeksu Cywilnego. Szczegółowe warunki sprzedaży, opis i wyposażenie prezentowanych
                            samochodów,
                            ceny oraz aktualność oferty finansowania zakupu prosimy potwierdzić kontaktując się z nami
                            bezpośrednio.
                            Oferta kończenia umów leasingowych i kredytowych (wykupu aut) jest ograniczona i podlega
                            weryfikacji ekonomicznej.</div>
                    </div>
                </div>
            </div>
            <div class="black_bar">POLNAR Damian Narożny. Wszelkie prawa zastrzerzone. Strona stworzona przez Tomasz
                Ratajczak 2020
            </div>
        </footer>

        <script src="<?php echo DREAMAUTO_THEME_URL ?>js/jquery-3.5.1.min.js"></script>
        <script src="<?php echo DREAMAUTO_THEME_URL ?>js/popper.min.js"></script>
        <script src="<?php echo DREAMAUTO_THEME_URL ?>js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollToPlugin.js"></script>
        <script src="<?php echo DREAMAUTO_THEME_URL ?>js/script.js"></script>


        <script>
$(window).scroll(function() {
    $('.navbar').toggleClass('navbar-scroll', $(this).scrollTop() > 300);
    $('.pink').toggleClass('pink-none', $(this).scrollTop() > 60);
});
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

window.onload = gallery;

function gallery() {
    const allimages = document.querySelectorAll(".image-script");
    for (let i = 0; i < allimages.length; i++) {
        if (allimages[i].id.indexOf("small") > -1) {
            allimages[i].onclick = imgChanger;
        }
    }
}

function imgChanger() {
    document.getElementById('big-image').src = this.src;
}

function toggleFullscreen(elem) {
    elem = elem || document.documentElement;

    if (!document.fullscreenElement && !document.mozFullScreenElement &&
        !document.webkitFullscreenElement && !document.msFullscreenElement) {
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.msRequestFullscreen) {
            elem.msRequestFullscreen();
        } else if (elem.mozRequestFullScreen) {
            elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) {
            elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
        }
    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        }
    }
}
let e = document.getElementById('big-image');
document.getElementById('img-main-text').addEventListener('click', function() {
    toggleFullscreen(e);
});
        </script>
        </body>

        </html>