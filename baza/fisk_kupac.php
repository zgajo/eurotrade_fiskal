<?php
function svi_kupci(){
$query = mysql_query("SELECT * FROM fisk_kupac");
if (!$query) {
	        die('Invalid query: ' . mysql_error());
	    }
	    return $query;
}

function unos_kupca ($ime, $prezime, $tvrtka, $adresa, $email, $kontakt_broj){
    mysql_query("INSERT INTO fisk_kupac (ime, prezime, tvrtka, adresa, email, kontakt_broj) VALUES ('$ime', '$prezime', '$tvrtka', '$adresa', '$email', '$kontakt_broj')");
}

function kupacDet($id){
    $query = mysql_query("SELECT * FROM fisk_kupac WHERE id = '$id';");
            if (!$query) {
	        die('Invalid query: ' . mysql_error());
	    }
	    return $query;
}

function ispravka_kupca(){
    
}




?>
