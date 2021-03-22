<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        margin: 0;
        padding: 0;
        background-color: #000;
        width: 100vw;
        height: 100vh;
    }

    img {
        width: 100vw;
        height: 100vh;
        opacity: 0.8;
        z-index: 1;
        object-fit: cover;
    }

    .container {
        position: absolute;
        top: 20%;
        left: 10%;
        width: 60%;
        color: #fff;
        z-index: 2;
    }

    h1 {
        font-size: 3rem;
    }

    .frame {
        font-size: 1.4rem;
        text-shadow: 1px 1px #000;
        background-color: #474747;
        opacity: 0.9;
        color: #fff;
        padding: 5px 10px 15px;
    }

    .button {
        margin: 0 auto;
        width: 150px;
        height: 50px;
        background-color: #bb1220 !important;
        color: #F5F5F5 !important;
        border: 0 !important;
        border-radius: 5px;
        transition: all 0.2s ease-in-out;
    }

    button:hover {
        cursor: pointer;
        transform: scale(0.95);
    }

    @media screen and (max-width: 768px) {
        .container {
            top: 10%;
            left: 10%;
            width: 80%;
        }
    }
    </style>
</head>

<body>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/front-car-lights-night-road.jpg" class="hero-section-img" alt="...">
    <div class="container">

<?php
$response = $_POST["g-recaptcha-response"];

$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
	'secret' => '6LcQ1GEaAAAAAIFyExYIPwIIX6dlt3c2x8QZty-5',
	'response' => $_POST["g-recaptcha-response"]
);
$options = array(
	'http' => array (
		'method' => 'POST',
		'content' => http_build_query($data)
	)
);
$context  = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$captcha_success=json_decode($verify);

$div = '"frame"';
$p = '"paragraph"';
$button = '"button"';
$main = "../../../";

if ($captcha_success->success==false) {
	echo "<h1>Coś poszło nie tak...</h1>
	<div class=$div>
		<p class=$p>Z jakiegoś podwodu mail do nas nie dotarł, prosimy powrócić na strone główną i przesłać formularz ponownie. Pamiętaj aby wypełnić wszystkie wymage pola i zatwierdzić pole - Czy jesteś robotem.</p>
		<a href=$main>
			<button class=$button>Powrót</button>
		</a>
	</div>";
} else if ($captcha_success->success==true) {

if(isset($_FILES) && (bool) $_FILES) {
	$allowedExtensions = array("jpeg","jpg","png", null);
	
	$files = array();
	foreach($_FILES as $name=>$file) {
		$file_name = $file['name']; 
		$temp_name = $file['tmp_name'];
		$file_type = $file['type'];
		$path_parts = pathinfo($file_name);
		$ext = $path_parts['extension'];
		
		if(!in_array($ext,$allowedExtensions)) {
			die("<h1>Coś poszło nie tak...</h1>
			<div class=$div>
				<p class=$p>Pliki które zostały załączone do tego formularza nie odpowiadają właściwym formatą dla zdjęś. Wymagane przez nas rozszerzenia plików to jpeg, jpg i png. Prosimy cofnąć się do strony formularza przyciskiem poniżej, lub skontaktować sie z nami telefonicznie</p>
				<a href=$main>
					<button class=$button>Powrót</button>
				</a>
			</div>");
		}
		array_push($files,$file);
		
	}
	
	// email fields: to, from, subject, and so on
	// dane pobierane z formularza //

//Dane kontaktowe
$nazwa = $_POST['nazwa'];
$miasto = $_POST['miasto'];
$telefon = $_POST['telefon'];
$mail = $_POST['mail'];
//Dane samochodu
$producent = $_POST['producent'];
$model = $_POST['model'];
$wersja = $_POST['wersja'];
$typ_nadwozia = $_POST['typ_nadwozia'];
$liczba_drzwi = $_POST['liczba_drzwi'];
$rok_produkcji = $_POST['rok_produkcji'];
$przebieg = $_POST['przebieg'];
$silnik = $_POST['silnik'];
$pojemnosc_silnika = $_POST['pojemnosc_silnika'];
$moc_silnika = $_POST['moc_silnika'];
$skrzynia_biegow = $_POST['skrzynia_biegow'];
$naped = $_POST['naped'];
$kolor = $_POST['kolor'];

//Wyposażenie
$abs = $_POST['abs'];
$cd = $_POST['cd'];
$centralny_zamek = $_POST['centralny_zamek'];
$elektryczne_szyby_przednie = $_POST['elektryczne_szyby_przednie'];
$elektrycznie_ustawianie_lusterka = $_POST['elektrycznie_ustawianie_lusterka'];
$immobilizer = $_POST['immobilizer'];
$radio_fabryczne = $_POST['radio_fabryczne'];
$wspomaganie_kierownicy = $_POST['wspomaganie_kierownicy'];
$alarm = $_POST['alarm'];
$alufelgi = $_POST['alufelgi'];
$asr = $_POST['asr'];
$asystent_parkowania = $_POST['asystent_parkowania'];
$asystent_pasa_ruchu = $_POST['asystent_pasa_ruchu'];
$bluetooth = $_POST['bluetooth'];
$czujnik_deszczu = $_POST['czujnik_deszczu'];
$czujnik_martwego_pola = $_POST['czujnik_martwego_pola'];
$czujnik_zmierzchu = $_POST['czujnik_zmierzchu'];
$czujniki_parkowania_przednie = $_POST['czujniki_parkowania_przednie'];
$czujniki_parkowania_tylne = $_POST['czujniki_parkowania_tylne'];
$dach_panoramiczny = $_POST['dach_panoramiczny'];
$elektrochromatyczne_lusterka_boczne = $_POST['elektrochromatyczne_lusterka_boczne'];
$elektrochromatyczne_lusterk0_wsteczne = $_POST['elektrochromatyczne_lusterk0_wsteczne'];
$elektryczne_szyby_tylne = $_POST['elektryczne_szyby_tylne'];
$elektryczne_ustawiane_fotele = $_POST['elektryczne_ustawiane_fotele'];
$esp = $_POST['esp'];
$giniazdo_aux = $_POST['giniazdo_aux'];
$giniazdo_sd = $_POST['giniazdo_sd'];
$giniazdo_usb = $_POST['giniazdo_usb'];
$hak = $_POST['hak'];
$hud = $_POST['hud'];
$isofix = $_POST['isofix'];
$kamera_cofania = $_POST['kamera_cofania'];
$klimatyzacja_automatyczna = $_POST['klimatyzacja_automatyczna'];
$klimatyzacja_czterostrefowa = $_POST['klimatyzacja_czterostrefowa'];
$klimatyzacja_dwustrefowa = $_POST['klimatyzacja_dwustrefowa'];
$klimatyzacja_manualna = $_POST['klimatyzacja_manualna'];
$komputer_pokładowy = $_POST['komputer_pokładowy'];
$lopatki_zmiany_biegow = $_POST['lopatki_zmiany_biegow'];
$mp3 = $_POST['mp3'];
$nawigacja_gps = $_POST['nawigacja_gps'];
$odtwarzacz_dvd = $_POST['odtwarzacz_dvd'];
$ogranicznik_prędkości = $_POST['ogranicznik_prędkości'];
$ogrzewanie_postojowe = $_POST['ogrzewanie_postojowe'];
$podgrzewana_przednia_szyba = $_POST['podgrzewana_przednia_szyba'];
$podgrzewane_lusterka_boczne = $_POST['podgrzewane_lusterka_boczne'];
$podgrzewane_przednie_siedzenia = $_POST['podgrzewane_przednie_siedzenia'];
$podgrzewane_tylne_siedzenia = $_POST['podgrzewane_tylne_siedzenia'];
$przednie_poduszki_powietrzne = $_POST['przednie_poduszki_powietrzne'];
$boczne_poduszki_powietrzne = $_POST['boczne_poduszki_powietrzne'];
$pozostałe_poduszki_powietrzne = $_POST['pozostałe_poduszki_powietrzne'];
$przyciemniane_szyby = $_POST['przyciemniane_szyby'];
$radio_niefabryczne = $_POST['radio_niefabryczne'];
$regulowane_zawieszenie = $_POST['regulowane_zawieszenie'];
$relingi_dachowe = $_POST['relingi_dachowe'];
$system_start_stop = $_POST['system_start_stop'];
$szyberdach = $_POST['szyberdach'];
$swiatla_do_jazdy_dziennej = $_POST['swiatla_do_jazdy_dziennej'];
$swiatla_led = $_POST['swiatla_led'];
$swiatla_przeciwmgielne = $_POST['swiatla_przeciwmgielne'];
$swiatla_xenonowe = $_POST['swiatla_xenonowe'];
$tapicerka_skorzana = $_POST['tapicerka_skorzana'];
$tapicerka_welurowa = $_POST['tapicerka_welurowa'];
$tempomat = $_POST['tempomat'];
$tempomat_aktywny = $_POST['tempomat_aktywny'];
$tuner_tv = $_POST['tuner_tv'];
$tuning = $_POST['tuning'];
$wielofunkcyjna_kierownica = $_POST['wielofunkcyjna_kierownica'];
$zmieniarka_cd = $_POST['zmieniarka_cd'];

//Historia auta
$kraj_pochodzenia = $_POST['kraj_pochodzenia'];
$zarejestrowany_w_polsce = $_POST['zarejestrowany_w_polsce'];
$pierwszy_wlasciciel = $_POST['pierwszy_wlasciciel'];
$serwisowany_w_aso = $_POST['serwisowany_w_aso'];
$historia_serwisowa = $_POST['historia_serwisowa'];
$gwarancja_producenta = $_POST['gwarancja_producenta'];
$bezwypadkowy = $_POST['bezwypadkowy'];
$mial_naprawy_tech = $_POST['mial_naprawy_tech'];
$mial_naprawy_lak = $_POST['mial_naprawy_lak'];
$jakie_mial_naprawy = $_POST['jakie_mial_naprawy'];
$uszkodzony = $_POST['uszkodzony'];
$wymaga_naprawy_tech = $_POST['wymaga_naprawy_tech'];
$wymaga_naprawy_lak = $_POST['wymaga_naprawy_lak'];
$jakich_wymaga_napraw = $_POST['jakich_wymaga_napraw'];
$dodatkowe_informacje = $_POST['dodatkowe_informacje'];

//Szczegóły transakcji
$forma_sprzedazy = $_POST['forma_sprzedazy'];
$kwota_w_pln = $_POST['kwota_w_pln'];
$kwota = $_POST['kwota'];
$finansowanie = $_POST['finansowanie'];
$nazwa_baku = $_POST['nazwa_baku'];
$pozostala_kwota = $_POST['pozostala_kwota'];

    $form_content='
    <!DOCTYPE html>
	<html lang="pl">

	<head>
		<meta charset="UTF-8">
		<title>Formularz ofertowy</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			body {
				background-color: #efefef;
				color: #14213D;
				margin: 0;
				padding: 0;
			}

			ul {
				margin: 0;
				padding: 0;
			}

			h1 {
				font-size: 2rem;
				margin: 0;
			}

			p {
				padding: 0;
				margin: 0;
			}

			li {
				display: inline-block;
				list-style-type: none;
				margin-right: 20px;
			}

			.container {
				width: 708px;
				margin: 0 auto;
				color: #14213D;
				background-color: #fff;
				font-size: 1rem;
				position: relative;
			}

			.header {
				padding: 10px 20px;
				background-color: #14213D;
				color: #fff;
				text-align: center;
			}

			.hero-image {
				width: 100%;
				height: 250px;
				object-fit: cover;
			}

			.hero-header {
				font-size: 2rem;
			}

			.content {
				margin: 15px 15px 0;
			}

			.content-header {
				text-align: center;
				padding: 10px 0;
			}

			.footer-gray {
				padding: 20px 0 20px;
				background-color: #474747;
				color: #efefef;
				text-align: center;
			}

			.contact {
				margin-top: 30px;
			}

			.contact-box {
				font-size: 1.2rem;
				display: inline-block;

			}

			.right {
				margin-right: 20px;
			}

			.contact-icon {
				color: #bb1220;
				font-size: 1.2rem;
			}

			.modify {
				font-weight: 900;
			}

			.images {
				margin: 30px 0;
			}

			.image {
				height: 100px;
				width: auto;
			}

			.footer-black {
				padding: 10px 20px;
				background-color: #000;
				font-size: 0.8rem;
				color: #efefef;
				text-align: center;
			}
		</style>
	</head>

	<body>
		<div class="container">
			<div class="header">
				<h1>'.$producent.' '.$model.'</h1>
			</div>

			<img class="hero-image"
				src="http://www.designbytr.pl/wp-content/themes/dreamauto/img/smooth-material-close-up-view-of-interior-of-brand-new-modern-luxury-automobile.jpg">

			<div class="content">
				<div class="content-header">
					<h1>Państwa zgłoszenie:</h1>
				</div>
				<h2>Dane kontaktowe</h2>
				<div><b>Imię i Nazwisko(firma): </b>'.$nazwa.'</div>
				<div><b>Miasto: </b>'.$miasto.'</div>
				<div><b>Telefon: </b>'.$telefon.'</div>
				<div><b>Mail: </b>'.$mail.'</div>
				<h2>Dane samochodu</h2>
				<div><b>Marka: </b>'.$producent.'</div>
				<div><b>Model: </b>'.$model.'</div>
				<div><b>Wersja: </b>'.$wersja.'</div>
				<div><b>Rok produkcji: </b>'.$rok_produkcji.'</div>
				<div><b>Przebieg auta: </b>'.$przebieg.'</div>
				<div><b>Rodzaj nadwozia: </b>'.$typ_nadwozia.'</div>
				<div><b>Liczba drzwi: </b>'.$liczba_drzwi.'</div>
				<div><b>Kolor: </b>'.$kolor.'</div>
				<div><b>Silnik: </b>'.$silnik.'</div>
				<div><b>Pojemność silnika: </b>'.$pojemnosc_silnika.'</div>
				<div><b>Moc silnika: </b>'.$moc_silnika.'</div>
				<div><b>Skrzynia Biegów: </b>'.$skrzynia_biegow.'</div>
				<div><b>Napęd: </b>'.$naped.'</div>
				<h2>Wyposażenie</h2>
				<ul>
					<li>ABS '.$abs.'</li>
					<li>CD '.$cd.'</li>
					<li>Centralny zamek '.$centralny_zamek.'</li>
					<li>Elektryczne szyby przednie '.$elektryczne_szyby_przednie.'</li>
					<li>Elektrycznie ustawianelusterka '.$elektrycznie_ustawianie_lusterka.'</li>
					<li>Immobilizer '.$immobilizer.'</li>
					<li>Radio fabryczne '.$radio_fabryczne.'</li>
					<li>Wspomaganie kierownicy '.$wspomaganie_kierownicy.'</li>
					<li>Alarm '.$alarm.'</li>
					<li>Alufelgi '.$alufelgi.'</li>
					<li>ASR '.$asr.'</li>
					<li>Asystent parkowania '.$asystent_parkowania.'</li>
					<li>Asystent pasa ruchu '.$asystent_pasa_ruchu.'</li>
					<li>Bluetooth '.$bluetooth.'</li>
					<li>Czujnik deszczu '.$czujnik_deszczu.'</li>
					<li>Czujnik martwego pola '.$czujnik_martwego_pola.'</li>
					<li>Czujnik zmierzchu '.$czujnik_zmierzchu.'</li>
					<li>Czujniki parkowania przednie '.$czujniki_parkowania_przednie.'</li>
					<li>Czujniki parkowania tylne '.$czujniki_parkowania_tylne.'</li>
					<li>Dach panoramiczny '.$dach_panoramiczny.'</li>
					<li>Elektrochromatyczne lusterka boczne '.$elektrochromatyczne_lusterka_boczne.'</li>
					<li>Elektrochromatyczne lusterko wsteczne '.$elektrochromatyczne_lusterk0_wsteczne.'</li>
					<li>Elektryczne szyby tylne '.$elektryczne_szyby_tylne.'</li>
					<li>Elektrycznie ustawiane fotele '.$elektryczne_ustawiane_fotele.'</li>
					<li>ESP '.$esp.'</li>
					<li>Gniazdo AUX '.$giniazdo_aux.'</li>
					<li>Gniazdo SD '.$giniazdo_sd.'</li>
					<li>Gniazdo USB '.$giniazdo_usb.'</li>
					<li>Hak '.$hak.'</li>
					<li>HUD '.$hud.'</li>
					<li>Isofix '.$isofix.'</li>
					<li>Kamera cofania '.$kamera_cofania.'</li>
					<li>Klimatyzacja automatyczna '.$klimatyzacja_automatyczna.'</li>
					<li>Klimatyzacja czterostrefowa '.$klimatyzacja_czterostrefowa.'</li>
					<li>Klimatyzacja dwustrefowa '.$klimatyzacja_dwustrefowa.'</li>
					<li>Klimatyzacja manualna '.$klimatyzacja_manualna.'</li>
					<li>Komputer pokładowy '.$komputer_pokładowy.'</li>
					<li>Łopatki zmiany biegów '.$lopatki_zmiany_biegow.'</li>
					<li>MP3 '.$mp3.'</li>
					<li>Nawigacja GPS '.$nawigacja_gps.'</li>
					<li>Odtwarzacz DVD '.$odtwarzacz_dvd.'</li>
					<li>Ogranicznik prędkości '.$ogranicznik_prędkości.'</li>
					<li>Ogrzewanie postojowe '.$ogrzewanie_postojowe.'</li>
					<li>Podgrzewana przednia szyba '.$podgrzewana_przednia_szyba.'</li>
					<li>Podgrzewane lusterka boczne '.$podgrzewane_lusterka_boczne.'</li>
					<li>Podgrzewane przednie siedzenia '.$podgrzewane_przednie_siedzenia.'</li>
					<li>Podgrzewane tylne siedzenia '.$podgrzewane_tylne_siedzenia.'</li>
					<li>Przednie poduszki powietrzne '.$przednie_poduszki_powietrzne.'</li>
					<li>Boczne poduszki powietrzne '.$boczne_poduszki_powietrzne.'</li>
					<li>Pozostałe poduszki powietrzne '.$pozostałe_poduszki_powietrzne.'</li>
					<li>Przyciemniane szyby '.$przyciemniane_szyby.'</li>
					<li>Radio niefabryczne '.$radio_niefabryczne.'</li>
					<li>Regulowane zawieszenie '.$regulowane_zawieszenie.'</li>
					<li>Relingi dachowe '.$relingi_dachowe.'</li>
					<li>System Start-Stop '.$system_start_stop.'</li>
					<li>Szyberdach '.$szyberdach.'</li>
					<li>Światła do jazdy dziennej '.$swiatla_do_jazdy_dziennej.'</li>
					<li>Światła LED '.$swiatla_led.'</li>
					<li>Światła przeciwmgielne '.$swiatla_przeciwmgielne.'</li>
					<li>Światła Xenonowe '.$swiatla_xenonowe.'</li>
					<li>Tapicerka skórzana '.$tapicerka_skorzana.'</li>
					<li>Tapicerka welurowa '.$tapicerka_welurowa.'</li>
					<li>Tempomat '.$tempomat.'</li>
					<li>Tempomat aktywny '.$tempomat_aktywny.'</li>
					<li>Tuner TV '.$tuner_tv.'</li>
					<li>Tuning '.$tuning.'</li>
					<li>Wielofunkcyjna kierownica '.$wielofunkcyjna_kierownica.'</li>
					<li>Zmieniarka CD '.$zmieniarka_cd.'</li>
				</ul>
				<h2>Historia auta</h2>
				<div><b>Kraj pochodzenia: </b>'.$kraj_pochodzenia.'</div>
				<div><b>Zarejestrowany w Polsce: </b>'.$zarejestrowany_w_polsce.'</div>
				<div><b>Pierwszy właściciel: </b>'.$pierwszy_wlasciciel.'</div>
				<div><b>Serwisowany w ASO: </b>'.$serwisowany_w_aso.'</div>
				<div><b>Historia serwisowa: </b>'.$historia_serwisowa.'</div>
				<div><b>Gwarancja producenta do: </b>'.$gwarancja_producenta.'</div>
				<div><b>Bezwypadkowy: </b>'.$bezwypadkowy.'</div>
				<div><b>Czy miał naprawy techniczne?: </b>'.$mial_naprawy_tech.'</div>
				<div><b>Czy miał naprawy lakiernicze?: </b>'.$mial_naprawy_lak.'</div>
				<div><b>Jeśli tak to jakie?: </b></div>
				<div>'.$jakie_mial_naprawy.'</div>
				<div><b>Uszkodzony: </b>'.$uszkodzony.'</div>
				<div><b>Wymaga napraw technicznych?: </b>'.$wymaga_naprawy_tech.'</div>
				<div><b>Wymaga napraw lakierniczych?: </b>'.$wymaga_naprawy_lak.'</div>
				<div><b>Jeśli tak to jakich?: </b></div>
				<div>'.$jakich_wymaga_napraw.'</div>
				<h2>Szczegóły transakcji</h2>
				<div><b>Froma sprzedaży: </b>'.$forma_sprzedazy.'</div>
				<div><b>Oczekiwana kwota w PLN: </b>'.$kwota_w_pln.' '.$kwota.'</div>
				<div><b>Czy auto jest finansowane?: </b>'.$finansowanie.'</div>
				<div><b>Nazwa firmy lizingowej/banku: </b>'.$nazwa_baku.'</div>
				<div><b>Pozostała kwota zobowiązań w PLN: </b>'.$pozostala_kwota.'</div>
				<h2>Dodatkowe informacje, ważne dla wyceny auta</h2>
				<div>'.$dodatkowe_informacje.'</div>
				<h2>Zdjęcia samochodu w załącznikach dotego maila</h2>
			</div>
			<div class="footer-gray">
				<h2>POLNAR Damian Narożny</h2>
				<div>ul. Starołęcka 18/210</div>
				<div>61-361 Poznań</div>
				<div class="contact">
					<div class="contact-box right">
						<span class="contact-icon modify">&#9990;</span>
						<span class="contact-txt">884 800 278</span>
					</div>
					<div class="contact-box">
						<span class="contact-icon">&#9993;</span>
						<span class="contact-txt">dreamAUTO@dreamAUTO.pl</span>
					</div>
				</div>
				<div class="images">
					<a href="http://www.designbytr.pl/" target="_blank" style="margin-right: 20px;"><img
							src="http://www.designbytr.pl/wp-content/themes/dreamauto/img/logo.png" class="image"></a>
					<a href="https://wizytowka.rzetelnafirma.pl/30VF6F0Z/1" target="_blank"><img
							src="http://www.designbytr.pl/wp-content/themes/dreamauto/img/baner_03.jpg" class="image"></a>
				</div>
				<p>Wiadomość wygenerowana automatyznie z serwisu polnar.pl - Prosimy
					na nią nie odpowiadać</p>
			</div>
			<div class="footer-black">
				<p>POLNAR Damian Narożny 2020 &copy; Wszelkie prawa zastrzerzone</p>
			</div>
		</div>
	</body>

	</html>';
	$to = "kontakt@tomekratajczak.pl, $mail";
	$from = "POLNAR"; 
	$subject = "Oferta samochodu: $producent $model"; 
	$message = $form_content;
	$headers = "From: $from";
	

	// boundary 
	$semi_rand = md5(time()); 
	$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
	 
	// headers for attachment 
	$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
	 
	// multipart boundary 
	$message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 
	$message .= "--{$mime_boundary}\n";
	 
	// preparing attachments
	for($x=0;$x<count($files);$x++){
		if(filesize($files[$x]['tmp_name']) > 4){
			$file = fopen($files[$x]['tmp_name'],"rb");
			$data = fread($file,filesize($files[$x]['tmp_name']));
			fclose($file);
			$data = chunk_split(base64_encode($data));
			$name = $files[$x]['name'];
			$message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" . 
			"Content-Disposition: attachment;\n" . " filename=\"$name\"\n" . 
			"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
			$message .= "--{$mime_boundary}\n";
		}
	}

	// send
	 
	$ok = mail($to, $subject, $message, $headers);

	if ($ok) { 
		echo "<h1>Dziękujemy za przesłanie formularza</h1>
		<div class=$div>
			<p class=$p>Dokładnie przeanalizujemy Twoją oferte i wkrótce na nią odpowiemy. W tym mąmęcie wysłaliśmy kopie tego maila na adres ... Prosimy na nią nie odpowiadać. Aby powrócić do strony głównej należy wcisnąć przycisk poniżej.</p>
			<a href=$main>
				<button class=$button>Powrót</button>
			</a>
		</div>";
	} else { 
		echo "<h1>Coś poszło nie tak...</h1>
		<div class=$div>
			<p class=$p>Z jakiegoś podwodu mail do nas nie dotarł, prosimy powrócić na strone główną i przesłać formularz ponownie. Pamiętaj aby wypełnić wszystkie wymage pola i zatwierdzić pole - Czy jesteś robotem.</p>
			<a href=$main>
				<button class=$button>Powrót</button>
			</a>
		</div>";
	} 
}
} 

?>
    </div>
</body>

</html>