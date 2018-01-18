<?php

//$ime = $_POST['ime'];
//$ime_prezime = $ime."".$poziv_na_broj;
$dan = $_POST['dan'];
$mesec = $_POST['mesec'];
$godina = $_POST['godina'];
$dan_mesec_godina = $dan."-".$mesec."-".$godina;
$ime_prezime = $_POST['korisnik'];
$datum = date ("d-m-Y");

//Parametri za pristup bazi

$host = 'localhost';
$user = 'asterisk';
$password = 'asterisk';
$baza = 'asterisk';

// 1. Konekcija na server baze podataka, treba ($host,$user, $password)
$konekcija = mysql_connect ($host,$user, $password) or die ('Nema veze sa serverom baze podataka'.mysql_error());

//2. Izbor baze na serveru baze podataka
mysql_select_db($baza, $konekcija) or die('Veza sa bazom ne moze biti uspostavljena. Pokusajte kasnije.');


//3.upiti

//I-upit
$upit = "select mobilni_telefon from korisnici where ime_prezime='$ime_prezime'";

$PROBA=mysql_query($upit) or die ('Greska sa upitom i upisom u bazu');

while($niz = mysql_fetch_array($PROBA))
{

        $telefon=$niz[0];
        //echo ("$telefon");

}

//II-upit

$upit2 = "INSERT INTO telefoni (telefon, korisnik, datum) VALUES ('$telefon', '$ime_prezime', '$dan_mesec_godina')";

mysql_query($upit2) or die ('Greska sa upitom i upisom osnovnih podataka u bazu' . mysql_error());


//4.Zatvaranje veze sa bazom

mysql_close($konekcija);

?>

<br><br>Uspesno ste uneli podatke <a href="datum.php">povratak na pocetnu stranicu</a>.
