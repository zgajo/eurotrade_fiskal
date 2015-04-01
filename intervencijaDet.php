<?php
include 'init.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kupci</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="description" content="Description of your site goes here">
        <meta name="keywords" content="Eurotrade, Servis, Eurotrade servis">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/kontakt.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="main">
            <?php include 'dijeloviHTML/header.php'; ?>
            <div class="header-img"><img src="images/header.jpg"  style="margin-bottom: 15px;  " alt="" height="225" width="100%"></div>
            <div class="page-out">
                
                <div class="content">
                    <div style="width: 900px;">
                        <div>
                            <div>
                                <h1 class="title">Detalji<span> intervencije</span></h1>
                                <?php
                                $id = filter_input(INPUT_GET, 'id');
                                $id = (int)$id;
                                $result = intervencijaDet($id);
                                while ($row = mysql_fetch_array($result)) {
                                    $int_od = $row['intervencija_od'];
                                    $int_do = $row['intervencija_do'];
                                    $zatrazeno = $row['zatrazeno'];
                                    $obavljeno = $row['obavljeno'];
                                    $sifra_naplate = $row['sifra_naplate'];
                                    $ime = $row['ime'];
                                    $prezime = $row['prezime'];
                                    $tvrtka = $row['tvrtka'];
                                    $kontakt_broj = $row['kontakt_broj'];
                                    $grad = $row['grad'];
                                    $adresa = $row['adresa'];
                                    $email = $row['email'];
                                }
                                ?>
                                <section id="container">
                                    <h2>Radni nalog: <?=$id?></h2>
                                    <div name="hongkiat" id="hongkiat-form" action="">
                                        <div id="wrapping" class="clearfix">
                                            <section id="aligned">
                                                <h3>Intervenicija zatražena na datum: </h3>
                                                <input type="datetime" type="text" id="name" value="<?=  date('d.m.Y', strtotime($int_od));  ?>" autocomplete="off" tabindex="1" class="txtinput" readonly>
                                                <h3>Intervencija zatvorena na datum:</h3>
                                                <input type="datetime" type="text" id="name" value="<?=  date('d.m.Y', strtotime($int_do));  ?>" autocomplete="off" tabindex="1" class="txtinput" readonly>
                                                <h3>Zatražena intervencija: </h3>
                                                <input type="text" id="telephone" value="<?=  $zatrazeno?>" tabindex="4" class="txtinput" readonly="">
                                                <h3>Šifra naplate: </h3>
                                                <input type="text" name="sifra_naplate" id="telephone"  tabindex="4" class="txtinput" value="<?=  $sifra_naplate?>" readonly>
                                                <h3>Izvršeni servis:</h3>
                                                <textarea  name="obavljeno" id="message"  placeholder="<?=  $obavljeno?>" tabindex="5" class="txtblock" readonly></textarea>
                                               
                                            </section>

                                            <div id="aside" class="clearfix">
                                                <div id="recipientcase">
                                                    <h2>Tvrtka: <?= $tvrtka ?></h2>
                                                    <h3>Ime i prezime: <?= $ime . ' ' . $prezime ?></h3>
                                                    <h3>Grad: <?= $grad ?></h3>
                                                    <h3>Adresa: <?= $adresa ?></h3>
                                                    <h3>Tel: <?= $kontakt_broj ?></h3>
                                                    <h3>Email: <?= $email ?></h3>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </section>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>

                     <?php include 'dijeloviHTML/sections.php'; ?>
                </div>
            </div>
 </div>
<?php include 'dijeloviHTML/footer.php'; ?>

    </body>
</html>


