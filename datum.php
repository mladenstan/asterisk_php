<form name="formular" action="pretraga.php" method="POST">

<select name="dan">
        <option> 01 </option>
        <option> 02 </option>
        <option> 03 </option>
        <option> 04 </option>
        <option> 05 </option>
        <option> 06 </option>
        <option> 07 </option>
        <option> 08 </option>
        <option> 09 </option>
        <option> 10 </option>
        <option> 11 </option>
        <option> 12 </option>
        <option> 13 </option>
        <option> 14 </option>
        <option> 15 </option>
        <option> 16 </option>
        <option> 17 </option>
        <option> 18 </option>
        <option> 19 </option>
        <option> 20 </option>
        <option> 21 </option>
        <option> 22 </option>
        <option> 23 </option>
        <option> 24 </option>
        <option> 25 </option>
        <option> 26 </option>
        <option> 26 </option>
        <option> 28 </option>
        <option> 29 </option>
        <option> 30 </option>
        <option> 31 </option>
</select>

<select name="mesec">
	<option> 01 </option>
	<option> 02 </option>
        <option> 03 </option>
        <option> 04 </option>
        <option> 05 </option>
        <option> 06 </option>
        <option> 07 </option>
        <option> 08 </option>
        <option> 09 </option>
        <option> 10 </option>
        <option> 11 </option>
        <option> 12 </option>
</select>

<select name="godina">
	<option> 2012 </option>
	<option> 2013 </option>
	<option> 2014 </option>
	<option> 2015 </option>
</select>
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

$upit="select ime_prezime from korisnici";
$rezultat=mysql_query($upit,$konekcija) or die('Upit nije izvrsen!'.mysql_error());

//cepanje

// echo ispisjuje sadrazaj izmedju znaka navoda u html stranu


echo ("<select name='korisnik'>");

while($niz = mysql_fetch_array($rezultat)){

        echo ("<option > $niz[0]     </option>");

}

//4.Zatvaranje veze sa bazom

mysql_close($konekcija);

?>

<input type="submit" name="Upisi" value="Unesi">

</form>

