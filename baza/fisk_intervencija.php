<?php

function sve_intervencije(){
        $query = mysql_query("SELECT i.*, u.ime as serviser_ime, u.prezime as serviser_prezime, k.ime, k. prezime, k.tvrtka FROM fisk_intervencija i, fisk_user u, fisk_kupac k WHERE i.fisk_user_id = u.id AND i.fisk_kupac_id = k.id");

    if (!$query) {
        die('Invalid query: ' . mysql_error());
    }
    return $query;
}
function intervencijaDet($id){
    $query = mysql_query("SELECT i.*, u.ime as serviser_ime, u.prezime as serviser_prezime, k.ime, k. prezime, k.tvrtka FROM fisk_intervencija i, fisk_user u, fisk_kupac k WHERE i.id = '$id' AND i.fisk_user_id = u.id AND i.fisk_kupac_id = k.id");

    if (!$query) {
        die('Invalid query: ' . mysql_error());
    }
    return $query;
}


?>