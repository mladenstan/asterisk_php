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
$user = 'root';
$password = 'Stek83cc!+';
$baza = 'vawireless';

// 1. Konekcija na server baze podataka, treba ($host,$user, $password)
$konekcija = mysql_connect ($host,$user, $password) or die ('Nema veze sa serverom baze podataka'.mysql_error());

//2. Izbor baze na serveru baze podataka
mysql_select_db($baza, $konekcija) or die('Veza sa bazom ne moze biti uspostavljena. Pokusajte kasnije.');


//3.upiti

//I-upit
$upit = "select telefon from telefoni where datum = '$datum'";

$PROBA=mysql_query($upit) or die ('Greska sa upitom i upisom u bazu');



while($niz = mysql_fetch_array($PROBA))
{

	$telefonski_broj=$niz[0];
	$output = shell_exec("/usr/sbin/asterisk -rx 'dongle sms dongle0 $telefonski_broj Obavestavamo Vas da sutra gasimo interne'");
	echo "<pre>$output</pre>";
	sleep(5);
	ob_flush;
	flush();
//	echo $telefonski_broj;
//	echo "<br/>";

}

//4.Zatvaranje veze sa bazom

mysql_close($konekcija);

?>

<br><br>Uspesno ste uneli podatke <a href="datum.php">povratak na pocetnu stranicu</a>.
