<?php

function svi_ugovori() {
    $query = mysql_query("SELECT * FROM fisk_ugovor");
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