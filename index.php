<?php get_header(); ?>

<main>
    <section>
        <div class="section">
            <div class="container">
                <div class="row">
                    <h1>O Nas</h1>
                    <div class="col-12">
                        <p class="about-txt">Firma POLNAR Damian Narożny istnieje i działa w branży
                            motoryzacyjnej od 1998 roku.Kupujemy i sprzedajemy samochody, ale również potrafimy
                            rozwiązywać potrzeby naszych Klientów. Oferujemy Państwu finansowe wspacie i obsługę
                            formalną wcześniejszej spłaty umówleasingowych lub kredytowych i odkupienie auta. Angażując
                            własne środki i czas mamy ambicję aby jak najlepiej spełnić Państwa oczekiwania. Nasze
                            podnad 20 letnie doświadczenie pomaga nam skutecznie negocjować rozwiązanie umów nawet tych
                            zagrożonych lub przekazanych do windykacji. Kupujemy przede wszystkim auta z polskiej
                            dystrybucji, bezwypadkowe z udekumentowaną historią. Takie samochody kupujemy z najlepszą
                            cenę.
                        </p>
                    </div>
                </div>
            </div>
            <div id="formularz"></div>
        </div>
    </section>

    <section>
        <div class="section">
            <h1>Formularz kontaktowy</h1>
            <form action="<?php echo get_template_directory_uri(); ?>/form.php" enctype="multipart/form-data"
                method="POST">
                <div class="container">
                    <fieldset class="form-first">
                        <div class="row col-lg-10 mx-auto">
                            <legend>Dane samochodu</legend>
                            <div class="form-group col-md-6">
                                <label for="producent" class="col-form-label">Marka</label>
                                <select class="custom-select" id="producent" name="producent" required>
                                    <option value="">Wybierz</option>
                                    <option value="Acura">Acura</option>
                                    <option value="Alfa Romeo">Alfa Romeo</option>
                                    <option value="Aro">Aro</option>
                                    <option value="Aston Martin">Aston Martin</option>
                                    <option value="Audi">Audi</option>
                                    <option value="Bentley">Bentley</option>
                                    <option value="BMW">BMW</option>
                                    <option value="Bugatti">Bugatti</option>
                                    <option value="Buick">Buick</option>
                                    <option value="Cadillac">Cadillac</option>
                                    <option value="Chevrolet">Chevrolet</option>
                                    <option value="Chrysler">Chrysler</option>
                                    <option value="Citroen">Citroen</option>
                                    <option value="Dacia">Dacia</option>
                                    <option value="Daewoo">Daewoo</option>
                                    <option value="Daihatsu">Daihatsu</option>
                                    <option value="Dodge">Dodge</option>
                                    <option value="Ferrari">Ferrari</option>
                                    <option value="Fiat">Fiat</option>
                                    <option value="Ford">Ford</option>
                                    <option value="GMC">GMC</option>
                                    <option value="Honda">Honda</option>
                                    <option value="Hummer">Hummer</option>
                                    <option value="Hyundai">Hyundai</option>
                                    <option value="Infiniti">Infiniti</option>
                                    <option value="Isuzu">Isuzu</option>
                                    <option value="Jaguar">Jaguar</option>
                                    <option value="Jeep">Jeep</option>
                                    <option value="Kia">Kia</option>
                                    <option value="Lada">Lada</option>
                                    <option value="Lamborghini">Lamborghini</option>
                                    <option value="Lancia">Lancia</option>
                                    <option value="Land Rover">Land Rover</option>
                                    <option value="Lexus">Lexus</option>
                                    <option value="Lincoln">Lincoln</option>
                                    <option value="Lotus">Lotus</option>
                                    <option value="Łada">Łada</option>
                                    <option value="Maserati">Maserati</option>
                                    <option value="Maybach">Maybach</option>
                                    <option value="Mazda">Mazda</option>
                                    <option value="Mercedes">Mercedes</option>
                                    <option value="Mercury">Mercury</option>
                                    <option value="MG">MG</option>
                                    <option value="Mini">Mini</option>
                                    <option value="Mitsubishi">Mitsubishi</option>
                                    <option value="Nissan">Nissan</option>
                                    <option value="Oldsmobile">Oldsmobile</option>
                                    <option value="Opel">Opel</option>
                                    <option value="Peugeot">Peugeot</option>
                                    <option value="Plymouth">Plymouth</option>
                                    <option value="Polonez">Polonez</option>
                                    <option value="Pontiac">Pontiac</option>
                                    <option value="Porsche">Porsche</option>
                                    <option value="Proton">Proton</option>
                                    <option value="Renault">Renault</option>
                                    <option value="Rolls-Royce">Rolls-Royce</option>
                                    <option value="Rover">Rover</option>
                                    <option value="Saab">Saab</option>
                                    <option value="Saturn">Saturn</option>
                                    <option value="Scion">Scion</option>
                                    <option value="Seat">Seat</option>
                                    <option value="Skoda">Skoda</option>
                                    <option value="Smart">Smart</option>
                                    <option value="SsangYong">SsangYong</option>
                                    <option value="Subaru">Subaru</option>
                                    <option value="Suzuki">Suzuki</option>
                                    <option value="Tata">Tata</option>
                                    <option value="Tesla">Tesla</option>
                                    <option value="Tavria">Tavria</option>
                                    <option value="Toyota">Toyota</option>
                                    <option value="Trabant">Trabant</option>
                                    <option value="Uaz">Uaz</option>
                                    <option value="Volkswagen">Volkswagen</option>
                                    <option value="Volvo">Volvo</option>
                                    <option value="Wartburg">Wartburg</option>
                                    <option value="Inny">Inny</option>
                                </select>
                                <div class="invalid-feedback">Wybierz jedną z opcji</div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="model" class="col-form-label">Model</label>
                                <input type="text" class="form-control" id="model" name="model" placeholder="Model"
                                    required>
                                <div class="invalid-feedback">Pole wymagane</div>
                            </div>

                            <div class="form-group col-md-5 col-lg-6">
                                <label for="wersja" class="col-form-label">Wersja wyposażenia</label>
                                <input type="text" class="form-control" id="wersja" name="wersja"
                                    placeholder="Wersja wyposażenia" required>
                                <div class="invalid-feedback">Pole wymagane</div>
                            </div>

                            <div class="form-group col-6 col-md-4">
                                <label for="typ_nadwozia" class="col-form-label">Rodzaj nadwozia</label>
                                <select class="custom-select" id="typ_nadwozia" name="typ_nadwozia" required>
                                    <option value="">Wybierz</option>
                                    <option value="sedan-limuzyna">sedan/limuzyna</option>
                                    <option value="hatchback">hatchback</option>
                                    <option value="kombi">kombi</option>
                                    <option value="cabrio-coupe">cabrio/coupe</option>
                                    <option value="sport-coupe">sport/coupe</option>
                                    <option value="SUV">SUV</option>
                                    <option value="terenowy">terenowy</option>
                                    <option value="van">van</option>
                                    <option value="pick-up">pick-up</option>
                                </select>
                                <div class="invalid-feedback">Wybierz jedną z opcji</div>
                            </div>

                            <div class="form-group col-6 col-md-3 col-lg-2">
                                <label for="liczba_drzwi" class="col-form-label">Ilość drzwi</label>
                                <input type="text" class="form-control" id="liczba_drzwi" name="liczba_drzwi"
                                    placeholder="Ilość drzwi" required>
                                <div class="invalid-feedback">Pole wymagane</div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="rok_produkcji" class="col-form-label">Rok produkcji</label>
                                <input type="text" class="form-control" id="rok_produkcji" name="rok_produkcji"
                                    placeholder="Rok produkcji" required>
                                <div class="invalid-feedback">Pole wymagane</div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="przebieg" class="col-form-label">Przebieg auta (w tys. km)</label>
                                <input type="text" class="form-control" id="przebieg" name="przebieg"
                                    placeholder="Przebieg auta (w tys. km)" required>
                                <div class="invalid-feedback">Pole wymagane</div>
                            </div>

                            <div class="form-group col-6 col-lg-4">
                                <label for="silnik" class="col-form-label">Silnik</label>
                                <select class="custom-select" id="silnik" name="silnik" required>
                                    <option value="">Wybierz</option>
                                    <option value="benzyna">benzyna</option>
                                    <option value="diesel">diesel</option>
                                    <option value="diesel">benzyna/LPG</option>
                                    <option value="benzyna-LPG">benzyna/CNG</option>
                                    <option value="elektryczny">elektryczny</option>
                                    <option value="etanol">etanol</option>
                                    <option value="hybrydowy">hybrydowy</option>
                                    <option value="wodór">wodór</option>
                                </select>
                                <div class="invalid-feedback">Wybierz jedną z opcji</div>
                            </div>

                            <div class="form-group col-6 col-lg-4">
                                <label for="moc_silnika" class="col-form-label">Moc silnika</label>
                                <input type="text" class="form-control" id="moc_silnika" name="moc_silnika"
                                    placeholder="Moc silnika (w kM)" required>
                                <div class="invalid-feedback">Pole wymagane</div>
                            </div>

                            <div class="form-group col-md-6 col-lg-4">
                                <label for="pojemnosc_silnika" class="col-form-label">Pojemność silnika (w cm3)</label>
                                <input type="text" class="form-control" id="pojemnosc_silnika" name="pojemnosc_silnika"
                                    placeholder="Pojemność silnika (w cm3)" required>
                                <div class="invalid-feedback">Pole wymagane</div>
                            </div>

                            <div class="form-group col-md-6 col-lg-3">
                                <label for="skrzynia_biegow" class="col-form-label">Skrzynia Biegów</label>
                                <select class="custom-select" id="skrzynia_biegow" name="skrzynia_biegow" required>
                                    <option value="">Wybierz</option>
                                    <option value="manualna">manualna</option>
                                    <option value="automatyczna klasyczna">automatyczna klasyczna</option>
                                    <option value="automatyczna dwusprzęgłowa (DSG)">automatyczna dwusprzęgłowa
                                        (DSG)
                                    </option>
                                </select>
                                <div class="invalid-feedback">Wybierz jedną z opcji</div>
                            </div>

                            <div class="form-group col-5 col-md-3 col-lg-3">
                                <label for="naped" class="col-form-label">Napęd</label>
                                <select class="custom-select" id="naped" name="naped" required>
                                    <option value="">Wybierz</option>
                                    <option value="na 2 koła">na 2 koła</option>
                                    <option value="na 4 koła">na 4 koła</option>
                                </select>
                                <div class="invalid-feedback">Wybierz jedną z opcji</div>
                            </div>

                            <div class="form-group col-7 col-md-9 col-lg-6">
                                <label for="kolor" class="col-form-label">Kolor nadwozia</label>
                                <input type="text" class="form-control" id="kolor" name="kolor"
                                    placeholder="Kolor nadwozia" required>
                                <div class="invalid-feedback">Pole wymagane</div>
                            </div>
                        </div>
                    </fieldset>

                    <div class="container text-center">
                        <button>
                            <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                                aria-controls="collapseExample">
                                Kontynuuj
                            </a>
                        </button>
                    </div>
                    <div class="collapse" id="collapseExample">

                        <fieldset>
                            <div class="row col-lg-10 mx-auto">
                                <legend>Wyposażenie</legend>

                                <div class="row col-xl-10 mx-auto">
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="abs" name="abs"
                                            value="&#10004;">
                                        <label class="custom-control-label" for="abs">ABS</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="cd" name="cd"
                                            value="&#10004;">
                                        <label class="custom-control-label" for="cd">CD</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="centralny_zamek"
                                            name="centralny_zamek" value="&#10004;">
                                        <label class="custom-control-label" for="centralny_zamek">Centralny
                                            zamek</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input"
                                            id="elektryczne_szyby_przednie" name="elektryczne_szyby_przednie"
                                            value="&#10004;">
                                        <label class="custom-control-label" for="elektryczne_szyby_przednie">Elektryczne
                                            szyby przednie</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input"
                                            id="elektrycznie_ustawianie_lusterka"
                                            name="elektrycznie_ustawianie_lusterka" value="&#10004;">
                                        <label class="custom-control-label"
                                            for="elektrycznie_ustawianie_lusterka">Elektrycznie
                                            ustawiane
                                            lusterka</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="immobilizer"
                                            name="immobilizer" value="&#10004;">
                                        <label class="custom-control-label" for="immobilizer">Immobilizer</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="radio_fabryczne"
                                            name="radio_fabryczne" value="&#10004;">
                                        <label class="custom-control-label" for="radio_fabryczne">Radio
                                            fabryczne</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="wspomaganie_kierownicy"
                                            name="wspomaganie_kierownicy" value="&#10004;">
                                        <label class="custom-control-label" for="wspomaganie_kierownicy">Wspomaganie
                                            kierownicy</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="alarm" name="alarm"
                                            value="&#10004;">
                                        <label class="custom-control-label" for="alarm">Alarm</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="alufelgi"
                                            name="alufelgi" value="&#10004;">
                                        <label class="custom-control-label" for="alufelgi">Alufelgi</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="asr" name="asr"
                                            value="&#10004;">
                                        <label class="custom-control-label" for="asr">ASR (kontrola trakcji)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="asystent_parkowania"
                                            name="asystent_parkowania" value="&#10004;">
                                        <label class="custom-control-label" for="asystent_parkowania">Asystent
                                            parkowania</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="asystent_pasa_ruchu"
                                            name="asystent_pasa_ruchu" value="&#10004;">
                                        <label class="custom-control-label" for="asystent_pasa_ruchu">Asystent pasa
                                            ruchu</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="bluetooth"
                                            name="bluetooth" value="&#10004;">
                                        <label class="custom-control-label" for="bluetooth">Bluetooth</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="czujnik_deszczu"
                                            name="czujnik_deszczu" value="&#10004;">
                                        <label class="custom-control-label" for="czujnik_deszczu">Czujnik
                                            deszczu</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="czujnik_martwego_pola"
                                            name="czujnik_martwego_pola" value="&#10004;">
                                        <label class="custom-control-label" for="czujnik_martwego_pola">Czujnik martwego
                                            pola</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="czujnik_zmierzchu"
                                            name="czujnik_zmierzchu" value="&#10004;">
                                        <label class="custom-control-label" for="czujnik_zmierzchu">Czujnik
                                            zmierzchu</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input"
                                            id="czujniki_parkowania_przednie" name="czujniki_parkowania_przednie"
                                            value="&#10004;">
                                        <label class="custom-control-label" for="czujniki_parkowania_przednie">Czujniki
                                            parkowania przednie</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input"
                                            id="czujniki_parkowania_tylne" name="czujniki_parkowania_tylne"
                                            value="&#10004;">
                                        <label class="custom-control-label" for="czujniki_parkowania_tylne">Czujniki
                                            parkowania tylne</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="dach_panoramiczny"
                                            name="dach_panoramiczny" value="&#10004;">
                                        <label class="custom-control-label" for="dach_panoramiczny">Dach
                                            panoramiczny</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input"
                                            id="elektrochromatyczne_lusterka_boczne"
                                            name="elektrochromatyczne_lusterka_boczne" value="&#10004;">
                                        <label class="custom-control-label"
                                            for="elektrochromatyczne_lusterka_boczne">Elektrochromatyczne lusterka
                                            boczne</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input"
                                            id="elektrochromatyczne_lusterk0_wsteczne"
                                            name="elektrochromatyczne_lusterk0_wsteczne" value="&#10004;">
                                        <label class="custom-control-label"
                                            for="elektrochromatyczne_lusterk0_wsteczne">Elektrochromatyczne lusterko
                                            wsteczne</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="elektryczne_szyby_tylne"
                                            name="elektryczne_szyby_tylne" value="&#10004;">
                                        <label class="custom-control-label" for="elektryczne_szyby_tylne">Elektryczne
                                            szyby tylne</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input"
                                            id="elektryczne_ustawiane_fotele" name="elektryczne_ustawiane_fotele"
                                            value="&#10004;">
                                        <label class="custom-control-label"
                                            for="elektryczne_ustawiane_fotele">Elektrycznie
                                            ustawiane fotele</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="esp" name="esp"
                                            value="&#10004;">
                                        <label class="custom-control-label" for="esp">ESP (stabilizacja toru
                                            jazdy)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="giniazdo_aux"
                                            name="giniazdo_aux" value="&#10004;">
                                        <label class="custom-control-label" for="giniazdo_aux">Gniazdo AUX</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="giniazdo_sd"
                                            name="giniazdo_sd" value="&#10004;">
                                        <label class="custom-control-label" for="giniazdo_sd">Gniazdo SD</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="giniazdo_usb"
                                            name="giniazdo_usb" value="&#10004;">
                                        <label class="custom-control-label" for="giniazdo_usb">Gniazdo USB</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="hak" name="hak"
                                            value="&#10004;">
                                        <label class="custom-control-label" for="hak">Hak</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="hud" name="hud"
                                            value="&#10004;">
                                        <label class="custom-control-label" for="hud">HUD (wyświetlacz
                                            przezierny)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="isofix" name="isofix"
                                            value="&#10004;">
                                        <label class="custom-control-label" for="isofix">Isofix</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="kamera_cofania"
                                            name="kamera_cofania" value="&#10004;">
                                        <label class="custom-control-label" for="kamera_cofania">Kamera cofania</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input"
                                            id="klimatyzacja_automatyczna" name="klimatyzacja_automatyczna"
                                            value="&#10004;">
                                        <label class="custom-control-label" for="klimatyzacja_automatyczna">Klimatyzacja
                                            automatyczna</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input"
                                            id="klimatyzacja_czterostrefowa" name="klimatyzacja_czterostrefowa"
                                            value="&#10004;">
                                        <label class="custom-control-label"
                                            for="klimatyzacja_czterostrefowa">Klimatyzacja
                                            czterostrefowa</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input"
                                            id="klimatyzacja_dwustrefowa" name="klimatyzacja_dwustrefowa"
                                            value="&#10004;">
                                        <label class="custom-control-label" for="klimatyzacja_dwustrefowa">Klimatyzacja
                                            dwustrefowa</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="klimatyzacja_manualna"
                                            name="klimatyzacja_manualna" value="&#10004;">
                                        <label class="custom-control-label" for="klimatyzacja_manualna">Klimatyzacja
                                            manualna</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="komputer_pokładowy"
                                            name="komputer_pokładowy" value="&#10004;">
                                        <label class="custom-control-label" for="komputer_pokładowy">Komputer
                                            pokładowy</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="lopatki_zmiany_biegow"
                                            name="lopatki_zmiany_biegow" value="&#10004;">
                                        <label class="custom-control-label" for="lopatki_zmiany_biegow">Łopatki zmiany
                                            biegów</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="mp3" name="mp3"
                                            value="&#10004;">
                                        <label class="custom-control-label" for="mp3">MP3</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="nawigacja_gps"
                                            name="nawigacja_gps" value="&#10004;">
                                        <label class="custom-control-label" for="nawigacja_gps">Nawigacja GPS</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="odtwarzacz_dvd"
                                            name="odtwarzacz_dvd" value="&#10004;">
                                        <label class="custom-control-label" for="odtwarzacz_dvd">Odtwarzacz DVD</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="ogranicznik_prędkości"
                                            name="ogranicznik_prędkości" value="&#10004;">
                                        <label class="custom-control-label" for="ogranicznik_prędkości">Ogranicznik
                                            prędkości</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="ogrzewanie_postojowe"
                                            name="ogrzewanie_postojowe" value="&#10004;">
                                        <label class="custom-control-label" for="ogrzewanie_postojowe">Ogrzewanie
                                            postojowe</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input"
                                            id="podgrzewana_przednia_szyba" name="podgrzewana_przednia_szyba"
                                            value="&#10004;">
                                        <label class="custom-control-label" for="podgrzewana_przednia_szyba">Podgrzewana
                                            przednia szyba</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input"
                                            id="podgrzewane_lusterka_boczne" name="podgrzewane_lusterka_boczne"
                                            value="&#10004;">
                                        <label class="custom-control-label"
                                            for="podgrzewane_lusterka_boczne">Podgrzewane
                                            lusterka boczne</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input"
                                            id="podgrzewane_przednie_siedzenia" name="podgrzewane_przednie_siedzenia"
                                            value="&#10004;">
                                        <label class="custom-control-label"
                                            for="podgrzewane_przednie_siedzenia">Podgrzewane
                                            przednie siedzenia</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input"
                                            id="podgrzewane_tylne_siedzenia" name="podgrzewane_tylne_siedzenia"
                                            value="&#10004;">
                                        <label class="custom-control-label"
                                            for="podgrzewane_tylne_siedzenia">Podgrzewane
                                            tylne siedzenia</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input"
                                            id="przednie_poduszki_powietrzne" name="przednie_poduszki_powietrzne"
                                            value="&#10004;">
                                        <label class="custom-control-label" for="przednie_poduszki_powietrzne">Przednie
                                            poduszki powietrzne </label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input"
                                            id="boczne_poduszki_powietrzne" name="boczne_poduszki_powietrzne"
                                            value="&#10004;">
                                        <label class="custom-control-label" for="boczne_poduszki_powietrzne">Boczne
                                            poduszki
                                            powietrzne</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input"
                                            id="pozostałe_poduszki_powietrzne" name="pozostałe_poduszki_powietrzne"
                                            value="&#10004;">
                                        <label class="custom-control-label"
                                            for="pozostałe_poduszki_powietrzne">Pozostałe
                                            poduszki powietrzne</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="przyciemniane_szyby"
                                            name="przyciemniane_szyby" value="&#10004;">
                                        <label class="custom-control-label" for="przyciemniane_szyby">Przyciemniane
                                            szyby</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="radio_niefabryczne"
                                            name="radio_niefabryczne" value="&#10004;">
                                        <label class="custom-control-label" for="radio_niefabryczne">Radio
                                            niefabryczne</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="regulowane_zawieszenie"
                                            name="regulowane_zawieszenie" value="&#10004;">
                                        <label class="custom-control-label" for="regulowane_zawieszenie">Regulowane
                                            zawieszenie</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="relingi_dachowe"
                                            name="relingi_dachowe" value="&#10004;">
                                        <label class="custom-control-label" for="relingi_dachowe">Relingi
                                            dachowe</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="system_start_stop"
                                            name="system_start_stop" value="&#10004;">
                                        <label class="custom-control-label" for="system_start_stop">System
                                            Start-Stop</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="szyberdach"
                                            name="szyberdach" value="&#10004;">
                                        <label class="custom-control-label" for="szyberdach">Szyberdach</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input"
                                            id="swiatla_do_jazdy_dziennej" name="swiatla_do_jazdy_dziennej"
                                            value="&#10004;">
                                        <label class="custom-control-label" for="swiatla_do_jazdy_dziennej">Światła do
                                            jazdy
                                            dziennej</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="swiatla_led"
                                            name="swiatla_led" value="&#10004;">
                                        <label class="custom-control-label" for="swiatla_led">Światła LED</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="swiatla_przeciwmgielne"
                                            name="swiatla_przeciwmgielne" value="&#10004;">
                                        <label class="custom-control-label" for="swiatla_przeciwmgielne">Światła
                                            przeciwmgielne</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="swiatla_xenonowe"
                                            name="swiatla_xenonowe" value="&#10004;">
                                        <label class="custom-control-label" for="swiatla_xenonowe">Światła
                                            Xenonowe</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="tapicerka_skorzana"
                                            name="tapicerka_skorzana" value="&#10004;">
                                        <label class="custom-control-label" for="tapicerka_skorzana">Tapicerka
                                            skórzana</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="tapicerka_welurowa"
                                            name="tapicerka_welurowa" value="&#10004;">
                                        <label class="custom-control-label" for="tapicerka_welurowa">Tapicerka
                                            welurowa</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="tempomat"
                                            name="tempomat" value="&#10004;">
                                        <label class="custom-control-label" for="tempomat">Tempomat</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="tempomat_aktywny"
                                            name="tempomat_aktywny" value="&#10004;">
                                        <label class="custom-control-label" for="tempomat_aktywny">Tempomat
                                            aktywny</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="tuner_tv"
                                            name="tuner_tv" value="&#10004;">
                                        <label class="custom-control-label" for="tuner_tv">Tuner TV</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="tuning" name="tuning"
                                            value="&#10004;">
                                        <label class="custom-control-label" for="tuning">Tuning</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input"
                                            id="wielofunkcyjna_kierownica" name="wielofunkcyjna_kierownica"
                                            value="&#10004;">
                                        <label class="custom-control-label"
                                            for="wielofunkcyjna_kierownica">Wielofunkcyjna
                                            kierownica</label>
                                    </div>
                                    <div class="custom-control custom-checkbox col-12 col-md-4 text-left">
                                        <input type="checkbox" class="custom-control-input" id="zmieniarka_cd"
                                            name="zmieniarka_cd" value="&#10004;">
                                        <label class="custom-control-label" for="zmieniarka_cd">Zmieniarka CD</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row col-lg-10 mx-auto">
                                <legend>Historia auta</legend>
                                <div class="form-group col-md-4">
                                    <label for="kraj_pochodzenia" class="col-form-label">Kraj pochodzenia</label>
                                    <input type="text" class="form-control" id="kraj_pochodzenia"
                                        name="kraj_pochodzenia" placeholder="Kraj pochodzenia" required>
                                    <div class="invalid-feedback">Pole wymagane</div>
                                </div>

                                <div class="form-group col-6 col-md-4">
                                    <label for="zarejestrowany_w_polsce" class="col-form-label">Zarejestrowany w
                                        Polsce</label>
                                    <select class="custom-select" id="zarejestrowany_w_polsce"
                                        name="zarejestrowany_w_polsce" required>
                                        <option value="">Wybierz</option>
                                        <option value="tak">tak</option>
                                        <option value="nie">nie</option>
                                    </select>
                                    <div class="invalid-feedback">Wybierz jedną z opcji</div>
                                </div>

                                <div class="form-group col-6 col-md-4">
                                    <label for="pierwszy_wlasciciel" class="col-form-label">Pierwszy właściciel</label>
                                    <select class="custom-select" id="pierwszy_wlasciciel" name="pierwszy_wlasciciel"
                                        required>
                                        <option value="">Wybierz</option>
                                        <option value="tak">tak</option>
                                        <option value="nie, drugi">nie, drugi</option>
                                        <option value="nie, trzeci">nie, trzeci</option>
                                        <option value="nie, czwarty">nie, czwarty</option>
                                        <option value="nie, kolejny">nie, kolejny</option>
                                    </select>
                                    <div class="invalid-feedback">Wybierz jedną z opcji</div>
                                </div>

                                <div class="form-group col-12 col-md-4">
                                    <label for="serwisowany_w_aso" class="col-form-label">Serwisowany w ASO</label>
                                    <select class="custom-select" id="serwisowany_w_aso" name="serwisowany_w_aso"
                                        required>
                                        <option value="">Wybierz</option>
                                        <option value="tak, w Aso marki">tak, w Aso marki</option>
                                        <option value="nie, w serwisie niezależnym">nie, w serwisie niezależnym</option>
                                    </select>
                                    <div class="invalid-feedback">Wybierz jedną z opcji</div>
                                </div>

                                <div class="form-group col-12 col-md-4">
                                    <label for="historia_serwisowa" class="col-form-label">Historia serwisowa</label>
                                    <select class="custom-select" id="historia_serwisowa" name="historia_serwisowa"
                                        required>
                                        <option value="">Wybierz</option>
                                        <option value="w pełni udokumentowana">w pełni udokumentowana</option>
                                        <option value="barak dukumentacji">barak dukumentacji</option>
                                    </select>
                                    <div class="invalid-feedback">Wybierz jedną z opcji</div>
                                </div>

                                <div class="form-group col-12 col-md-4">
                                    <label for="gwarancja_producenta" class="col-form-label">Gwarancja producenta
                                        do</label>
                                    <input type="date" class="form-control" id="gwarancja_producenta"
                                        name="gwarancja_producenta" placeholder="Gwarancja producenta do">
                                    <div class="invalid-feedback">Pole wymagane</div>
                                </div>

                                <div class="form-group col-lg-4">
                                    <label for="bezwypadkowy" class="col-form-label">Bezwypadkowy</label>
                                    <select class="custom-select" id="bezwypadkowy" name="bezwypadkowy" required>
                                        <option value="">Wybierz</option>
                                        <option value="tak">tak</option>
                                        <option value="nie">nie</option>
                                    </select>
                                    <div class="invalid-feedback">Wybierz jedną z opcji</div>
                                </div>

                                <div class="form-group col-6 col-lg-4">
                                    <label for="mial_naprawy_tech" class="col-form-label">Czy miał naprawy
                                        techniczne?</label>
                                    <select class="custom-select" id="mial_naprawy_tech" name="mial_naprawy_tech"
                                        required>
                                        <option value="">Wybierz</option>
                                        <option value="tak">tak</option>
                                        <option value="nie">nie</option>
                                    </select>
                                    <div class="invalid-feedback">Wybierz jedną z opcji</div>
                                </div>

                                <div class="form-group col-6 col-lg-4">
                                    <label for="mial_naprawy_lak" class="col-form-label">Czy miał naprawy
                                        lakiernicze?</label>
                                    <select class="custom-select" id="mial_naprawy_lak" name="mial_naprawy_lak"
                                        required>
                                        <option value="">Wybierz</option>
                                        <option value="tak">tak</option>
                                        <option value="nie">nie</option>
                                    </select>
                                    <div class="invalid-feedback">Wybierz jedną z opcji</div>
                                </div>

                                <div class="form-group col-12">
                                    <label for="jakie_mial_naprawy" class="col-form-label">Jeśli tak to jakie?</label>
                                    <textarea class="form-control" id="jakie_mial_naprawy" name="jakie_mial_naprawy"
                                        placeholder="Jakie naprawy przeszedł samochód"></textarea>
                                </div>

                                <div class="form-group col-xl-4">
                                    <label for="uszkodzony" class="col-form-label">Uszkodzony</label>
                                    <select class="custom-select" id="uszkodzony" name="uszkodzony" required>
                                        <option value="">Wybierz</option>
                                        <option value="tak">tak</option>
                                        <option value="nie">nie</option>
                                    </select>
                                    <div class="invalid-feedback">Wybierz jedną z opcji</div>
                                </div>

                                <div class="form-group col-6 col-xl-4">
                                    <label for="wymaga_naprawy_tech" class="col-form-label">Wymaga napraw
                                        technicznych?</label>
                                    <select class="custom-select" id="wymaga_naprawy_tech" name="wymaga_naprawy_tech"
                                        required>
                                        <option value="">Wybierz</option>
                                        <option value="tak">tak</option>
                                        <option value="nie">nie</option>
                                    </select>
                                    <div class="invalid-feedback">Wybierz jedną z opcji</div>
                                </div>

                                <div class="form-group col-6 col-xl-4">
                                    <label for="wymaga_naprawy_lak" class="col-form-label">Wymaga napraw
                                        lakierniczych?</label>
                                    <select class="custom-select" id="wymaga_naprawy_lak" name="wymaga_naprawy_lak"
                                        required>
                                        <option value="">Wybierz</option>
                                        <option value="tak">tak</option>
                                        <option value="nie">nie</option>
                                    </select>
                                    <div class="invalid-feedback">Wybierz jedną z opcji</div>
                                </div>

                                <div class="form-group col-12">
                                    <label for="jakich_wymaga_napraw" class="col-form-label">Jeśli tak to
                                        jakich?</label>
                                    <textarea class="form-control" id="jakich_wymaga_napraw" name="jakich_wymaga_napraw"
                                        placeholder="Jakich dokładnie napraw wymaga samochód"></textarea>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="row col-lg-10 mx-auto">
                                <legend>Szczegóły transakcji</legend>
                                <div class="form-group col-12 col-md-7">
                                    <label for="forma_sprzedazy" class="col-form-label">Froma sprzedaży</label>
                                    <select class="custom-select" id="forma_sprzedazy" name="forma_sprzedazy" required>
                                        <option value="">Wybierz</option>
                                        <option value="prywatna (umową kupna-sprzedaży)">prywatna (umową
                                            kupna-sprzedaży)
                                        </option>
                                        <option value="firma z fakturą (firma jest płatnikiem Vat 23%)">firma z fakturą
                                            (firma jest płatnikiem Vat 23%)
                                        </option>
                                        <option value="company_notax">firma z fakturą (Vat ZW - firma nie jest
                                            płatnikiem
                                            Vat 23%)</option>
                                    </select>
                                    <div class="invalid-feedback">Wybierz jedną z opcji</div>
                                </div>

                                <div class="form-group col-md-5">
                                    <label for="kwota_w_pln" class="col-form-label">Oczekiwana kwota w PLN</label>
                                    <input type="text" class="form-control" id="kwota_w_pln" name="kwota_w_pln"
                                        placeholder="Oczekiwana kwota brutto w PLN)" required>
                                    <div class="invalid-feedback">Pole wymagane</div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="finansowanie" class="col-form-label">Czy auto jest finansowane?</label>
                                    <select class="custom-select" id="finansowanie" name="finansowanie" required>
                                        <option value="">Wybierz</option>
                                        <option value="nie">nie</option>
                                        <option value="w leasingu">w leasingu</option>
                                        <option value="w kredycie">w kredycie</option>
                                    </select>
                                    <div class="invalid-feedback">Wybierz jedną z opcji</div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="nazwa_baku" class="col-form-label">Nazwa firmy lizingowej/banku</label>
                                    <input type="text" class="form-control" id="nazwa_baku" name="nazwa_baku"
                                        placeholder="Nazwa firmy lizingowej/banku">
                                    <div class="invalid-feedback">Pole wymagane</div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="pozostala_kwota" class="col-form-label">Pozostała kwota zobowiązań w
                                        PLN</label>
                                    <input type="text" class="form-control" id="pozostala_kwota" name="pozostala_kwota"
                                        placeholder="Pozostała kwota zobowiązań w PLN">
                                    <div class="invalid-feedback">Pole wymagane</div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="row col-lg-10 mx-auto">
                                <legend>Dane Kontaktowe</legend>

                                <div class="form-group col-md-6">
                                    <label for="nazwa" class="col-form-label">Imię i Nazwisko(firma)</label>
                                    <input type="text" class="form-control " id="nazwa" name="nazwa"
                                        placeholder="Imię i Nazwisko(firma)" required>
                                    <div class="invalid-feedback">Pole wymagane</div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="miasto" class="col-form-label">Miejscowość i Województwo</label>
                                    <input type="text" class="form-control " id="miasto" name="miasto"
                                        placeholder="Miejscowość i Województwo" required>
                                    <div class="invalid-feedback">Pole wymagane</div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="telefon" class="col-form-label">Telefon</label>
                                    <input type="text" class="form-control " id="telefon" name="telefon"
                                        placeholder="Telefon" required>
                                    <div class="invalid-feedback">Pole wymagane</div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="mail" class="col-form-label">Email</label>
                                    <input type="text" class="form-control " id="mail" name="mail" placeholder="Email"
                                        required>
                                    <div class="invalid-feedback">Pole wymagane</div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="row col-lg-10 mx-auto">
                                <legend>Zdjęcia samochodu</legend>
                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="zewnetrzne_1">Zewnętrzne 1</label>
                                    <input type="file" class="form-control form-fieldset-choose-file" id="zewnetrzne_1"
                                        name="attach1">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="zewnetrzne_2">Zewnętrzne 2</label>
                                    <input type="file" class="form-control form-fieldset-choose-file" id="zewnetrzne_2"
                                        name="attach2">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="zewnetrzne_3">Zewnętrzne 3</label>
                                    <input type="file" class="form-control form-fieldset-choose-file" id="zewnetrzne_3"
                                        name="attach3">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="zewnetrzne_4">Zewnętrzne 4</label>
                                    <input type="file" class="form-control form-fieldset-choose-file" id="zewnetrzne_4"
                                        name="attach4">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="wnetrze_1">Wnętrze samochodu 1</label>
                                    <input type="file" class="form-control form-fieldset-choose-file" id="wnetrze_1"
                                        name="attach5">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="wnetrze_2">Wnętrze samochodu 2</label>
                                    <input type="file" class="form-control form-fieldset-choose-file" id="wnetrze_2"
                                        name="attach6">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="licznik">Licznik</label>
                                    <input type="file" class="form-control form-fieldset-choose-file" id="licznik"
                                        name="attach7">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="dowod_rejestracyjny">Dowód rejestracyjny - strona
                                        pierwsza</label>
                                    <input type="file" class="form-control form-fieldset-choose-file"
                                        id="dowod_rejestracyjny" name="attach8">
                                </div>


                            </div>

                        </fieldset>
                        <fieldset>
                            <div class="row col-lg-10 mx-auto">
                                <div class="form-group col-12">
                                    <label for="dodatkowe_informacje" class="col-form-label">Dodatkowe informacje, które
                                        uznasz za ważne dla wyceny auta</label>
                                    <textarea class="form-control" id="dodatkowe_informacje" name="dodatkowe_informacje"
                                        placeholder="Dodatkowe informacje, które uznasz za ważne dla wyceny auta"></textarea>
                                </div>
                            </div>
                            <div class="row col-lg-10 mx-auto">
                                <div class="captcha_wrapper">
                                    <div class="g-recaptcha" data-sitekey="6LfNWusZAAAAAF0BIOIaI8Luzecn9LREuGEGA-f9">
                                    </div>
                                </div>
                            </div>
                            <div class="row col-lg-10 mx-auto">
                                <div class="form-group col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="invalidCheck" required>
                                        <label class="form-check-label" for="invalidCheck">
                                            Wyrażam zgode na przetwarzanie moich danych osobowych zgodnie z
                                            <a data-toggle="collapse" href="#multiCollapseExample1" role="button"
                                                aria-expanded="false" aria-controls="multiCollapseExample1">
                                                <span class="klauzula-pink">Informacją o polityce prywatności</span>
                                            </a>
                                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                                <div class="rodo">
                                                    <p>INFORMACJA O POLITYCE PRYWATNOŚCI</p>
                                                    <p>CEL I SPOSÓB PRZETWARZANIA DANYCH OSOBOWYCH</p>
                                                    <p>Przekazane przez Państwa dane osobowe („Dane”) będą przetwarzane
                                                        w następujących celach:
                                                        a) świadczenie usługi („Usługa”) wskazanej w umowie, którą
                                                        zawarli Państwo ze spółką FCA Italy S.p.A. („Spółka”);
                                                        b) umożliwienie Spółce przeprowadzania badań poziomu zadowolenia
                                                        klientów („Badania Satysfakcji Klienta”) dotyczących jakości
                                                        towarów i usług oferowanych przez Spółkę i umożliwiających
                                                        realizację uzasadnionych interesów Spółki;
                                                        c) po uzyskaniu wyraźnej zgody klienta - przesyłanie informacji
                                                        handlowych oraz reklam produktów i usług oferowanych przez
                                                        Spółkę bądź prowadzenie badań rynku („Działania Marketingowe”);
                                                        d) po uzyskaniu wyraźnej zgody klienta - analiza zachowań i
                                                        nawyków klienta oraz skłonności do zakupu na potrzeby
                                                        doskonalenia produktów i usług oferowanych przez Spółkę, a także
                                                        z myślą o spełnieniu oczekiwań klienta („Profilowanie”);
                                                        e) po uzyskaniu wyraźnej zgody klienta - przekazywanie Danych
                                                        spółkom zależnym Spółki i podmiotom z nią powiązanym (a także
                                                        ich partnerom w sektorze motoryzacyjnym, finansowym,
                                                        ubezpieczeniowym i telekomunikacyjnym), które będą przetwarzać
                                                        Dane w celach przesyłania informacji handlowych oraz reklam
                                                        swoich produktów lub usług bądź prowadzenia badań rynku
                                                        („Działania Marketingowe prowadzone przez stronę trzecią”).
                                                        Dane mogą być przetwarzane w formie papierowej, elektronicznej
                                                        lub w sposób zautomatyzowany, między innymi za pośrednictwem
                                                        tradycyjnej poczty, poczty elektronicznej bądź telefonicznie
                                                        (np. poprzez automatyczne połączenia telefoniczne, wiadomości
                                                        SMS, MMS), faksem bądź w inny sposób (np. strony internetowe,
                                                        aplikacje mobilne).</p>
                                                    <p>KONSEKWENCJE NIEPRZEKAZANIA DANYCH</p>
                                                    <p>Przekazanie Danych nigdy nie jest obowiązkowe. Jednakże
                                                        nieudostępnienie Danych oznaczonych jako wymagane uniemożliwi
                                                        Spółce świadczenie Usługi. Z kolei nieprzekazanie Danych
                                                        opcjonalnych nie będzie miało wpływu na możliwość korzystania z
                                                        Usługi.</p>
                                                    <p>ODBIORCY DANYCH</p>
                                                    <p>Dane mogą być przetwarzane przez osoby fizyczne i/lub prawne
                                                        działające w imieniu Spółki (zgodnie ze szczególnymi
                                                        zobowiązaniami umownymi) i mające siedzibę w państwach
                                                        członkowskich UE bądź w krajach spoza UE.
                                                        Dane mogą być udostępniane stronom trzecim w celu wypełnienia
                                                        obowiązków wynikających z prawa, wykonania nakazu władz
                                                        publicznych lub skorzystania z przysługujących Spółce praw przed
                                                        organem sądowym.</p>
                                                    <p>PRZEKAZYWANIE DANYCH POZA EOG</p>
                                                    <p>W ramach stosunków umownych Spółka może przesyłać Dane do krajów
                                                        poza Europejskim Obszarem Gospodarczym (EOG), a także
                                                        przechowywać je w bazach danych zarządzanych przez podmioty
                                                        działające w imieniu Spółki. Zarządzanie bazami danych oraz
                                                        przetwarzanie Danych może służyć wyłącznie wskazanym powyżej
                                                        celom przetwarzania i musi odbywać się zgodnie z obowiązującym
                                                        prawem o ochronie danych.
                                                        W przypadku przesyłania Danych poza EOG Spółka zastosuje
                                                        wszelkie odpowiednie środki umowne w celu zagwarantowania
                                                        właściwej ochrony Danych. Jednym z tego rodzaju środków jest
                                                        zawieranie umów zawierających standardowe klauzule umowne
                                                        przyjęte przez Komisję Europejską na potrzeby przekazywania
                                                        danych osobowych poza EOG.</p>
                                                    <p> ADMINISTRATOR DANYCH I ZESPÓŁ INSPEKTORA OCHRONY DANYCH</p>
                                                    <p>Administratorem danych jest FCA Italy S.p.A. z siedzibą w Corso
                                                        Giovanni Agnelli 200 – 10135 Turyn, Włochy.
                                                        Z zespołem inspektora ochrony danych można skontaktować się,
                                                        pisząc na adres dpo@fcagroup.com.</p>
                                                    <p>PRZECHOWYWANIE DANYCH</p>
                                                    <p> Dane przetwarzane na potrzeby świadczenia Usługi oraz
                                                        przeprowadzania Badań Satysfakcji Klienta będą przechowywane
                                                        przez Spółkę przez okres uznany za ściśle niezbędny do
                                                        realizacji takich celów. W przypadku Danych przetwarzanych na
                                                        potrzeby realizacji Usługi Spółka może przechowywać Dane przez
                                                        dłuższy okres, który zostanie uznany za konieczny dla ochrony
                                                        interesów Spółki w związku z ewentualną odpowiedzialnością
                                                        związaną ze świadczeniem Usługi.</p>
                                                    <p>Dane przetwarzane w celu prowadzenia Działań Marketingowych oraz
                                                        Profilowania będą przechowywane przez Spółkę od chwili wyrażenia
                                                        zgody przez klienta do momentu wycofania zgody. Po wycofaniu
                                                        zgody Dane nie będą już wykorzystywane do tych celów, choć mogą
                                                        być wciąż przechowywane przez Spółkę, w szczególności na
                                                        potrzeby ochrony interesów Spółki w związku z ewentualną
                                                        odpowiedzialnością za przetwarzanie, chyba że właściwy organ
                                                        nadzoru udzieli dodatkowych wyjaśnień dotyczących tej kwestii.
                                                    </p>
                                                    <p>PRAWA KLIENTA</p>
                                                    <p>Klientowi przysługują następujące prawa:
                                                        1. prawo dostępu oznacza przysługujące klientowi prawo do
                                                        uzyskania od Spółki informacji, czy jego Dane są przetwarzane, a
                                                        także - w odpowiednich przypadkach - prawo uzyskania dostępu do
                                                        tych Danych;
                                                        2. prawo do sprostowania i prawo do usunięcia danych oznacza
                                                        prawo do poprawienia nieprawidłowych i/lub niekompletnych
                                                        Danych, a także usunięcia Danych, gdy takie żądanie jest
                                                        uzasadnione;
                                                        3. prawo do ograniczenia przetwarzania oznacza prawo do złożenia
                                                        wniosku o wstrzymanie przetwarzania (w uzasadnionych
                                                        przypadkach);
                                                        4. prawo do przenoszenia danych oznacza prawo do uzyskania
                                                        Danych w zorganizowanym, powszechnie stosowanym formacie
                                                        umożliwiającym odczyt, a także prawo do przenoszenia Danych do
                                                        innych administratorów;
                                                        5. prawo do sprzeciwu oznacza prawo do sprzeciwienia się
                                                        przetwarzaniu Danych z uzasadnionych powodów; dotyczy to również
                                                        przetwarzania Danych w celu prowadzenia Działań Marketingowych
                                                        lub Profilowania (w odpowiednich przypadkach);
                                                        6. prawo do złożenia skargi organowi nadzorczemu w przypadku
                                                        przetwarzania Danych w sposób niezgodny z prawem.
                                                        Klienci mogą skorzystać z powyższych praw, pisząc na adres FCA
                                                        Italy S.p.A., Corso Giovanni Agnelli 200 – 10135 Turyn, Włochy
                                                        lub na adres e-mail privacy@fcagroup.com.</p>
                                                </div>
                                            </div>
                                        </label>
                                        <div class="invalid-feedback">
                                            Musisz wyrazić zgodę przed zatwierdzeniem
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="container text-center">
                            <button type="submit" name="submit_form">Wyślij</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div id="skup"></div>
    </section>

    <section>
        <div class="section">
            <div class="container-fluid">
                <h1>Skup samochodów</h1>
                <div class="row col-sm-10 mx-auto">
                    <div class="col-12 col-lg-4">
                        <div class="col-sm-10 col-md-8 col-lg-12 mx-auto sell-image">
                            <img class="sell-image-style"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/handsome-elegant-man-car-salon_1157-21186.jpg"
                                alt="...">
                        </div>
                        <h2 class="header-purchase">Odkupujemy samochody w trwającym leasingu lub kredycie!
                        </h2>
                        <p class="text-purchase">Jak sprzedać auto w leasingu lub z kredytem?
                            To nie problem. Wyślij zgłoszenie lub zadzwoń do nas i umów spotkanie.
                            Załatwimy za Ciebie formalności z bankiem lub firmą leasingową. Spłacimy Twoją
                            umowę i
                            zapłacimy Ci
                            za samochód.
                            Jeśli masz zaległości w spłacie rat - nie zwlekaj !
                            Nie dopuść do windykacji !
                            (uwaga: spłacamy umowy leasingowe po 24 miesiącu ich trwania)</p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="col-sm-10 col-md-8 col-lg-12 mx-auto no-gutters sell-image">
                            <img class="sell-image-style"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/close-up-sales-manager-black-suit-selling-car-customer.jpg"
                                alt="...">
                        </div>
                        <h2 class="header-purchase">Odkupujemy samochody w trwającym leasingu lub kredycie!
                        </h2>
                        <p class="text-purchase">Jak sprzedać auto w leasingu lub z kredytem?
                            To nie problem. Wyślij zgłoszenie lub zadzwoń do nas i umów spotkanie.
                            Załatwimy za Ciebie formalności z bankiem lub firmą leasingową. Spłacimy Twoją
                            umowę i
                            zapłacimy Ci
                            za samochód.
                            Jeśli masz zaległości w spłacie rat - nie zwlekaj !
                            Nie dopuść do windykacji !
                            (uwaga: spłacamy umowy leasingowe po 24 miesiącu ich trwania)</p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="col-sm-10 col-md-8 col-lg-12 mx-auto sell-image">
                            <img class="sell-image-style"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/business-men-sitting-lawyers-s-desk-people-signing-important-documents_1157-40456.jpg"
                                alt="...">
                        </div>
                        <h2 class="header-purchase">Odkupujemy samochody w trwającym leasingu lub kredycie!
                        </h2>
                        <p class="text-purchase">Jak sprzedać auto w leasingu lub z kredytem?
                            To nie problem. Wyślij zgłoszenie lub zadzwoń do nas i umów spotkanie.
                            Załatwimy za Ciebie formalności z bankiem lub firmą leasingową. Spłacimy Twoją
                            umowę i
                            zapłacimy Ci
                            za samochód.
                            Jeśli masz zaległości w spłacie rat - nie zwlekaj !
                            Nie dopuść do windykacji !
                            (uwaga: spłacamy umowy leasingowe po 24 miesiącu ich trwania)</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="sprzedaz"></div>
    </section>

    <section>
        <div class="section">
            <h1>Sprzedaż samochodów</h1>
            <?php 
                    $offer_post = new WP_Query(array(
                        'post_type'=> 'cars',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'typ_oferty',
                                'field'    => 'slug',
                                'terms'    => 'oferta-aktualna',
                            ),
                        ),
                        
                        ));
                ?>
            <?php if($offer_post -> have_posts()) :?>
            <?php while ($offer_post -> have_posts()) : $offer_post -> the_post(); ?>
            <article id="cars/<?php the_ID();?>">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 mx-auto">
                            <div class="article">
                                <div class="car-bar">
                                    <div class="col-12">
                                        <div class="row justify-content-between">
                                            <h2 class="car-name"><?php the_title();?></h2>
                                            <div class="car-price"><?php the_field('cena_samochodu'); ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-12 col-lg-6 mb-2">
                                        <div id="carouselExampleCaptions<?php the_ID();?>" class="carousel slide"
                                            data-interval="0" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleCaptions<?php the_ID();?>"
                                                    data-slide-to="0" class="active">
                                                </li>
                                                <li data-target="#carouselExampleCaptions<?php the_ID();?>"
                                                    data-slide-to="1"></li>
                                                <li data-target="#carouselExampleCaptions<?php the_ID();?>"
                                                    data-slide-to="2"></li>
                                                <li data-target="#carouselExampleCaptions<?php the_ID();?>"
                                                    data-slide-to="3"></li>
                                                <li data-target="#carouselExampleCaptions<?php the_ID();?>"
                                                    data-slide-to="4"></li>
                                                <li data-target="#carouselExampleCaptions<?php the_ID();?>"
                                                    data-slide-to="5"></li>
                                                <li data-target="#carouselExampleCaptions<?php the_ID();?>"
                                                    data-slide-to="6"></li>
                                                <li data-target="#carouselExampleCaptions<?php the_ID();?>"
                                                    data-slide-to="7"></li>
                                                <li data-target="#carouselExampleCaptions<?php the_ID();?>"
                                                    data-slide-to="8"></li>
                                                <li data-target="#carouselExampleCaptions<?php the_ID();?>"
                                                    data-slide-to="9"></li>
                                                <li data-target="#carouselExampleCaptions<?php the_ID();?>"
                                                    data-slide-to="10"></li>
                                                <li data-target="#carouselExampleCaptions<?php the_ID();?>"
                                                    data-slide-to="11"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="<?php the_field('zdjecie_1'); ?>" class="image-style"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php the_field('zdjecie_2'); ?>" class="image-style"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php the_field('zdjecie_3'); ?>" class="image-style"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php the_field('zdjecie_4'); ?>" class="image-style"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php the_field('zdjecie_5'); ?>" class="image-style"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php the_field('zdjecie_6'); ?>" class="image-style"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php the_field('zdjecie_7'); ?>" class="image-style"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php the_field('zdjecie_8'); ?>" class="image-style"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php the_field('zdjecie_9'); ?>" class="image-style"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php the_field('zdjecie_10'); ?>" class="image-style"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php the_field('zdjecie_11'); ?>" class="image-style"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php the_field('zdjecie_12'); ?>" class="image-style"
                                                        alt="...">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev"
                                                href="#carouselExampleCaptions<?php the_ID();?>" role="button"
                                                data-slide="prev">
                                                <svg width="3em" height="3em" viewBox="0 0 16 16"
                                                    class="bi bi-chevron-left carousel-control-left-icon"
                                                    aria-hidden="true" fill="#edf2f4"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                                </svg>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next"
                                                href="#carouselExampleCaptions<?php the_ID();?>" role="button"
                                                data-slide="next">
                                                <svg width="3em" height="3em" viewBox="0 0 16 16"
                                                    class="bi bi-chevron-right carousel-control-right-icon"
                                                    aria-hidden="true" fill="#edf2f4"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                </svg>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="ml-0 ml-lg-3 mr-lg-3">
                                            <div class="article-text-top">
                                                <div class="single-car-small-bold">Sinik:
                                                    <span
                                                        class="single-car-small"><?php the_field('rodzaj_silnika'); ?></span>
                                                </div>
                                                <div class="single-car-small-bold">Rocznik:
                                                    <span
                                                        class="single-car-small"><?php the_field('rok_produkcji'); ?></span>
                                                </div>
                                                <div class="single-car-small-bold">Kraj pochodzenia:
                                                    <span
                                                        class="single-car-small"><?php the_field('kraj_pochodzenia'); ?></span>
                                                </div>
                                                <div class="single-car-small-bold">Przebieg:
                                                    <span
                                                        class="single-car-small"><?php the_field('przebieg_samochodu'); ?></span>
                                                </div>
                                                <div class="article-text-guaranty"><?php the_field('gwarancja'); ?>
                                                </div>
                                            </div>
                                            <div class="single-car-small-bold">Opis:</div>
                                            <div class="article-text"><?php the_excerpt_max_charlength(200); ?></div>
                                        </div>
                                        <div class="text-center">
                                            <button class="inside"><a
                                                    href="<?php the_permalink(); ?>">Szczegóły</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <?php endwhile; ?>
            <?php else: ?>
            <h4>Nie ma żadnych postów</h4>
            <?php endif; ?>
            <div class="container text-center">
                <button>
                    <a class="link-scroll" href="<?php echo home_url('/cars',''); ?>">Oferty archiwalne</a>
                </button>
                <div id="wspolpraca"></div>
            </div>
        </div>
    </section>

    <section>
        <div class="cooperation-background">
            <div class="section cooperation-image">
                <div class="container-fluid">

                    <h1 class="cooperation-header">Współpracujemy z</h1>
                    <div id="carouselExampleCaptions2" class="carousel slide" data-ride="carousel" data-pause="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="2000">
                                <div class="cooperation-text">SANTANDER BANK</div>
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <div class="cooperation-text">EFL</div>
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <div class="cooperation-text">MTU</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="kontakt"></div>
    </section>

    <section>
        <div class="section">
            <h1>Kontakt</h1>
            <div class="container">
                <div class="row col-12 col-lg-10 mx-auto">
                    <div class="col-12 col-md-6 mb-5 mb-md-0">
                        <div class="contact-company-name">POLNAR Damian Narożny</div>
                        <div>ul. Starołęcka 18/210</div>
                        <div>61-361 Poznań</div>
                    </div>
                    <div class="col-12 col-md-6 text-right">
                        <div>Skup aut</div>
                        <div>
                            <img class="contact-icon"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/telephone.svg"> <span
                                class="contact-big">884 800
                                278</span>
                        </div>
                        <div>
                            <img class="contact-icon"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/email.svg">
                            <span class="contact-big">dreamAUTO@dreamAUTO.pl</span>
                        </div>
                        <div>Kredytowanie</div>
                        <div>
                            <img class="contact-icon"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/telephone.svg"> <span
                                class="contact-big">884 800
                                277</span>
                        </div>
                        <div>
                            <img class="contact-icon"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/email.svg"> <span
                                class="contact-big">kredyty@dreamAUTO.pl</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="consent-popup" class="hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="content-popup col-12 col-md-6 col-lg-4 text-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="content-popup-logo"
                        alt="...">
                    <p>Ta strona używa plików cookie w celu usprawnienia i ułatwienia dostępu do serwisu oraz
                        prowadzenia
                        danych statystycznych. Dalsze korzystanie z tej witryny oznacza akceptację tego stanu rzeczy. <a
                            href="<?php echo home_url('/polityka-cookies',''); ?>" target="_blank">polityka cookies</a>
                    </p>
                    <button id="accept" class="inside">Rozumiem</button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>