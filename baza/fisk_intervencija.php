<?php

function sve_intervencije(){
        $query = mysql_query("SELECT i.*, u.ime as serviser_ime, u.prezime as serviser_prezime, k.ime, k. prezime, k.tvrtka FROM fisk_intervencija i, fisk_user u, fisk_kupac k WHERE i.fisk_user_id = u.id AND i.fisk_kupac_id = k.id ORDER BY id ASC");

    if (!$query) {
        die('Invalid query: ' . mysql_error());
    }
    return $query;
}
function intervencijaDet($id){
    $query = mysql_query("SELECT i.*, u.ime as serviser_ime, u.prezime as serviser_prezime, k.ime, k. prezime, k.tvrtka, k.kontakt_broj, k.adresa, k.grad, k.email FROM fisk_intervencija i, fisk_user u, fisk_kupac k WHERE i.id = '$id' AND i.fisk_user_id = u.id AND i.fisk_kupac_id = k.id");

    if (!$query) {
        die('Invalid query: ' . mysql_error());
    }
    return $query;
}

function intervencijaKupDet($kupac_id){
    $query = mysql_query("SELECT i.*, k.ime, k. prezime, k.tvrtka,u.ime as serviser_ime, u.prezime as serviser_prezime FROM fisk_intervencija i, fisk_kupac k, fisk_user u WHERE i.fisk_kupac_id = '$kupac_id' AND i.fisk_kupac_id = k.id AND i.fisk_user_id = u.id ORDER BY i.id");
    
    if (!$query) {
        die('Invalid query: ' . mysql_error());
    }
    return $query;
}
function nova_intervencija($int_od, $fisk_kupac_id, $zatrazeno, $user_id){
    mysql_query("INSERT INTO fisk_intervencija (zatrazeno, intervencija_od, fisk_kupac_id, fisk_user_id) VALUES ('$zatrazeno', '$int_od', '$fisk_kupac_id', '$user_id')");
    
}


function inter_update($i_id, $obavljeno,  $i_do, $sifra_naplate){
    $update = ("UPDATE fisk_intervencija 
             SET obavljeno = '$obavljeno',
            intervencija_do = '$i_do',
             sifra_naplate = '$sifra_naplate'
                 
                 WHERE id = '$i_id'");
    mysql_query($update);
    
}


?>