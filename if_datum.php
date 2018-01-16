<?php
//$dan = $_POST['dan'];
//$mesec = $_POST['mesec'];
//$godina = $_POST['godina'];
//$korisnik = $_POST['korisnik'];
//$dan_mesec_godina = $dan."-".$mesec."-".$godina;
//echo ("$dan-");
//echo ("$mesec-");
//echo ("$godina ");
//echo ("$dan_mesec_godina   ");
//echo ("$korisnik");
$datum = "11-12-2012";
//echo date ("d-m-Y");
if (date ("d-m-Y") == $datum)
{
echo 'Duvaj ga sljamu';
}
//echo date();
?>
<br><br>Uspesno ste uneli podatke <a href="datum.php">povratak na pocetnu stranicu</a>.
