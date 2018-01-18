<?php

$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$adresa = $_POST['adresa'];
$jmbg = $_POST['jmbg'];
$telefon = $_POST['telefon'];
$mobilni_telefon = $_POST['mobilni_telefon'];
$email = $_POST['email'];
$licna_karta = $_POST['licna_karta'];
$ip_adresa = $_POST['ip_adresa'];
$poziv_na_broj = $_POST['poziv_na_broj'];
$ime_prezime = $ime." ".$prezime;
$ime_prezime_broj = $ime." ".$prezime." ".$poziv_na_broj;


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
$upit1 = "INSERT INTO korisnici(ime, prezime, adresa, jmbg, telefon, mobilni_telefon, email, licna_karta, ip_adresa, poziv_na_broj, ime_prezime, ime_prezime_broj) VALUES ('$ime', '$prezime', '$adresa', '$jmbg', '$telefon', '$mobilni_telefon', '$email', '$licna_karta','$ip_adresa','$poziv_na_broj', '$ime_prezime', '$ime_prezime_broj')";

mysql_query($upit1) or die ('Greska sa upitom i upisom osnovnih podataka u bazu' . mysql_error());

//4.Zatvaranje veze sa bazom

mysql_close($konekcija);

?>

Uspesno ste uneli podatke <a href="prijava_korisnika.php">povratak na pocetnu stranicu</a>.
