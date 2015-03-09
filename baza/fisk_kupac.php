<?php

function svi_kupci() {
    $query = mysql_query("SELECT * FROM fisk_kupac");
    if (!$query) {
        die('Invalid query: ' . mysql_error());
    }
    return $query;
}

function unos_kupca($ime, $prezime, $tvrtka, $adresa, $grad, $email, $kontakt_broj) {
    mysql_query("INSERT INTO fisk_kupac (ime, prezime, tvrtka, adresa, grad, email, kontakt_broj) VALUES ('$ime', '$prezime', '$tvrtka', '$adresa', '$grad', '$email', '$kontakt_broj')");
}

function kupacDet($id) {
    $query = mysql_query("SELECT * FROM fisk_kupac WHERE id = '$id';");
    if (!$query) {
        die('Invalid query: ' . mysql_error());
    }
    return $query;
}

function ListKupac() {
    $query = mysql_query("SELECT id, tvrtka, ime, prezime FROM fisk_kupac");
    if (!$query) {
        die('Invalid query: ' . mysql_error());
    }
    return $query;
}

function ispravka_kupca_det($kupac_id){
  $query = mysql_query("SELECT * FROM fisk_kupac WHERE id = '$kupac_id'");  
  if (!$query) {
        die('Invalid query: ' . mysql_error());
    }
    return $query;
}

function ispravka_kupca($id, $ime, $prezime, $tvrtka, $adresa,$grad, $email, $kontakt_broj) {
    $update = ("UPDATE fisk_kupac 
            SET ime = '$ime',
            prezime = '$prezime',
            tvrtka = '$tvrtka',
            adresa ='$adresa',
            grad='$grad',
            email = '$email',
            kontakt_broj ='$kontakt_broj' 
                WHERE id = '$id'");
    mysql_query($update);
}

?>
