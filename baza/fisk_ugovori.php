<?php

function svi_ugovori() {
    $query = mysql_query("SELECT u.*, k.ime, k.prezime, k.tvrtka FROM fisk_ugovor as u, fisk_kupac as k WHERE u.fisk_kupac_id = k.id ORDER BY dat_do DESC");
    if (!$query) {
        die('Invalid query: ' . mysql_error());
    }
    return $query;
}

function novi_ugovor($trajanje, $dat_od, $dat_do, $cijena, $fisk_kupac_id){
    $trajanje = (int)$trajanje;
    $dat_od = mysql_real_escape_string($dat_od);
   $dat_do = mysql_real_escape_string($dat_do);
   $cijena = (float)$cijena;
   $fisk_kupac_id = (int)$fisk_kupac_id;
   mysql_query("INSERT INTO fisk_ugovor (trajanje, cijena, dat_od, dat_do, fisk_kupac_id) VALUES ('$trajanje','$cijena','$dat_od', '$dat_do','$fisk_kupac_id')");
}

function ispravka_ugovora($ugovor_id){
    $ugovor_id = (int)$ugovor_id;
  $query = mysql_query("SELECT * FROM fisk_ugovor WHERE id = '$ugovor_id'");  
  if (!$query) {
        die('Invalid query: ' . mysql_error());
    }
    return $query;
}


function izmjena_ugovora($id, $dat_od, $trajanje, $cijena, $dat_do){
    $id = (int)$id;
    $dat_od = mysql_real_escape_string($dat_od);
    $dat_do = mysql_real_escape_string($dat_do);
    $trajanje = (int)$trajanje;
    $cijena = (float)$cijena;
    
    $query = mysql_query("UPDATE fisk_ugovor "
            . "SET dat_od = '$dat_od',"
            . "dat_do = '$dat_do',"
            . "trajanje = '$trajanje',"
            . "cijena = '$cijena'"
            . "WHERE id = '$id'");
    
    
}