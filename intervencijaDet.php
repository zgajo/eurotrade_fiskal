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
                                <h1 class="title">Završavanje radnog<span> naloga</span></h1>
                                <?php
                                $id = filter_input(INPUT_GET, 'id');
                                $result = intervencijaDet($id);
                                while ($row = mysql_fetch_array($result)) {
                                    $_GET['id'] = $row['id'];
                                    $_GET['intervencija_od'] = $row['intervencija_od'];
                                    $_GET['intervencija_do'] = $row['intervencija_do'];
                                    $_GET['zatrazeno'] = $row['zatrazeno'];
                                    $_GET['obavljeno'] = $row['obavljeno'];
                                    $_GET['sifra_naplate'] = $row['sifra_naplate'];
                                    $_GET['ime'] = $row['ime'];
                                    $_GET['prezime'] = $row['prezime'];
                                    $_GET['tvrtka'] = $row['tvrtka'];
                                    $_GET['kontakt_broj'] = $row['kontakt_broj'];
                                    $_GET['grad'] = $row['grad'];
                                    $_GET['adresa'] = $row['adresa'];
                                    $_GET['email'] = $row['email'];
                                }
                                ?>
                                <section id="container">
                                    <h2>Radni nalog: <?=$id?></h2>
                                    <form name="hongkiat" id="hongkiat-form" method="get" action="">
                                        <div id="wrapping" class="clearfix">
                                            <section id="aligned">
                                                <input type="hidden" name="i_id" value="<?=$_GET['id']?>">
                                                <h3>Intervenicija zatražena na datum: </h3>
                                                <input type="datetime" type="text" name="intervencija_od" id="name" value="<?=  date('d.m.Y', strtotime($_GET['intervencija_od']));  ?>" autocomplete="off" tabindex="1" class="txtinput" readonly>
                                                <h3>Intervencija zatvorena na datum:</h3>
                                                <input type="datetime" type="text" name="intervencija_do" id="name" value="<?=  date('d.m.Y', strtotime($_GET['intervencija_do']));  ?>" autocomplete="off" tabindex="1" class="txtinput" readonly>
                                                <h3>Zatražena intervencija: </h3>
                                                <input type="text" name="zatrazeno" id="telephone" value="<?=  $_GET['zatrazeno']?>" tabindex="4" class="txtinput" readonly="">
                                                <h3>Šifra naplate: </h3>
                                                <input type="text" name="sifra_naplate" id="telephone"  tabindex="4" class="txtinput" value="<?=  $_GET['sifra_naplate']?>" readonly>
                                                <h3>Izvršeni servis:</h3>
                                                <textarea  name="obavljeno" id="message"  placeholder="<?=  $_GET['obavljeno']?>" tabindex="5" class="txtblock" readonly></textarea>
                                                <section id="buttons">
                                                    <input type="submit" name="akcija" id="submitbtn" class="submitbtn" tabindex="7" value="Unesi">

                                                    <br style="clear:both;">
                                                </section>
                                            </section>

                                            <div id="aside" class="clearfix">
                                                <div id="recipientcase">
                                                    <h2>Tvrtka: <?= $_GET['tvrtka'] ?></h2>
                                                    <h3>Ime i prezime: <?= $_GET['ime'] . ' ' . $_GET['prezime'] ?></h3>
                                                    <h3>Grad: <?= $_GET['grad'] ?></h3>
                                                    <h3>Adresa: <?= $_GET['adresa'] ?></h3>
                                                    <h3>Tel: <?= $_GET['kontakt_broj'] ?></h3>
                                                    <h3>Email: <?= $_GET['email'] ?></h3>
                                                </div>
                                            </div>
                                        </div>



                                    </form>
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


