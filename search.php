<?php

include 'baza/konekcija.php';
if (isset($_POST['value'])){  #isset miče sve warninge, prvo provjerava dali je postavljena vrijednost pa ide dalje sa kodom
$value = $_POST['value'];
echo '<ul>';
$query = mysql_query("SELECT id, ime, prezime, tvrtka FROM fisk_kupac WHERE ime LIKE '$value%' OR prezime LIKE '$value%'");
$result = $query or die(mysql_error()); 
while ($run = mysql_fetch_array($result)){
    $id = $run['id'];
    $ime = $run['ime'];
    $prezime = $run['prezime'];
    $tvrtka = $run['tvrtka'];
    echo '<li><a class="a" href="kupacDet.php?id=' .$id. '">'.$ime.' '.$prezime.', '.$tvrtka.'</a></li>';
}
echo '</ul>';
}
?>