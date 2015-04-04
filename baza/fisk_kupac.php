<?php

function svi_kupci() {
    $query = mysql_query("SELECT * FROM fisk_kupac");
    if (!$query) {
        die('Invalid query: ' . mysql_error());
    }
    return $query;
}

function unos_kupca($ime, $prezime, $tvrtka, $adresa, $grad, $email, $kontakt_broj) {
    $ime = mysql_real_escape_string($ime);
    $prezime = mysql_real_escape_string($prezime);
    $tvrtka = mysql_real_escape_string($tvrtka);
    $adresa = mysql_real_escape_string($adresa);
    $grad = mysql_real_escape_string($grad);
    $email = mysql_real_escape_string($email);
    $kontakt_broj = mysql_real_escape_string($kontakt_broj);
    mysql_query("INSERT INTO fisk_kupac (ime, prezime, tvrtka, adresa, grad, email, kontakt_broj) VALUES ('$ime', '$prezime', '$tvrtka', '$adresa', '$grad', '$email', '$kontakt_broj')");
}

function kupacDet($id) {
    $id = (int)$id;
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
    $kupac_id = (int)$kupac_id;
  $query = mysql_query("SELECT * FROM fisk_kupac WHERE id = '$kupac_id'");  
  if (!$query) {
        die('Invalid query: ' . mysql_error());
    }
    return $query;
}

function ispravka_kupca($id, $ime, $prezime, $tvrtka, $adresa,$grad, $email, $kontakt_broj) {
    $id = (int)$id;
    $ime = mysql_real_escape_string($ime);
    $prezime = mysql_real_escape_string($prezime);
    $tvrtka = mysql_real_escape_string($tvrtka);
    $adresa = mysql_real_escape_string($adresa);
    $grad = mysql_real_escape_string($grad);
    $email = mysql_real_escape_string($email);
    $kontakt_broj = mysql_real_escape_string($kontakt_broj);
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
