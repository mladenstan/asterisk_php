<?php

//Parametri za pristup bazi

$host = 'localhost';
$user = 'root';
$password = 'Stek83cc!+';    
$baza = 'vawireless';

// 1. Konekcija na server baze podataka, treba ($host,$user, $password)
$konekcija = mysql_connect ($host,$user, $password) or die ('Nema veze sa serverom baze podataka'.mysql_error());

//2. Izbor baze na serveru baze podataka
mysql_select_db($baza, $konekcija) or die('Veza sa bazom ne moze biti uspostavljena. Pokusajte kasnije.');

//3.upit

$rb=1;
echo '<table border="1">';
echo '<tr><th>BR</th>
		  <th>Ime</th>
		  <th>Prezime</th>
		  <th>Adresa</th>
		  <th>JMBG</th>
		  <th>Tel. stan</th>
		  <th>Mobilni</th>
		  <th>e-mail</th>
		  <th>Broj licne karte</th>
		  <th>IP adresa</th>
		  <th>Poziv na broj</th>';


$upit="SELECT*FROM korisnici";
$rezultat=mysql_query($upit,$konekcija) or die('Upit nije izvrsen!'.mysql_error());

	while($niz=mysql_fetch_array($rezultat))
		{
			echo
'<tr><td>'.$rb.'</td><td>'.$niz['ime'].'</td><td>'.$niz['prezime'].'</td><td>'.$niz['adresa'].'</td><td>'.$niz['jmbg'].'</td>
<td>'.$niz['telefon'].'</td><td>'.$niz['mobilni_telefon'].'</td><td>'.$niz['email'].'</td><td>'.$niz['licna_karta'].'</td><td>'.$niz['ip_adresa'].'</td><td>'.$niz['poziv_na_broj'].'</td></tr>';
			$rb++;
		}
		echo '</table>';



//4.Zatvaranje veze sa bazom

mysql_close($konekcija);

?>
