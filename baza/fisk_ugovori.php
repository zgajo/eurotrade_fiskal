<?php

function svi_ugovori() {
    $query = mysql_query("SELECT u.*, k.ime, k.prezime, k.tvrtka FROM fisk_ugovor as u, fisk_kupac as k WHERE u.fisk_kupac_id = k.id");
    if (!$query) {
        die('Invalid query: ' . mysql_error());
    }
    return $query;
}

function ispravka_ugovora($ugovor_id){
  $query = mysql_query("SELECT * FROM fisk_ugovor WHERE id = '$ugovor_id'");  
  if (!$query) {
        die('Invalid query: ' . mysql_error());
    }
    return $query;
}