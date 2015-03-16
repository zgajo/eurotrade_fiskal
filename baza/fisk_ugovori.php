<?php

function svi_ugovori() {
    $query = mysql_query("SELECT u.*, k.ime, k.prezime, k.tvrtka FROM fisk_ugovor as u, fisk_kupac as k WHERE u.fisk_kupac_id = k.id ORDER BY dat_do DESC");
    if (!$query) {
        die('Invalid query: ' . mysql_error());
    }
    return $query;
}

function novi_ugovor($trajanje, $dat_od, $dat_do, $cijena, $fisk_kupac_id){
   mysql_query("INSERT INTO fisk_ugovor (trajanje, cijena, dat_od, dat_do, fisk_kupac_id) VALUES ('$trajanje','$cijena','$dat_od', '$dat_do','$fisk_kupac_id')");
}

function ispravka_ugovora($ugovor_id){
  $query = mysql_query("SELECT * FROM fisk_ugovor WHERE id = '$ugovor_id'");  
  if (!$query) {
        die('Invalid query: ' . mysql_error());
    }
    return $query;
}


function datum_do($trajanje, $dat_od){
    $query = mysql_query("date(strtotime('+$trajanje month', strtotime($dat_od)))");
    if (!$query) {
        die('Invalid query: ' . mysql_error());
    }
    return $query;
}