<?php
include 'init.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Intervencije</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="description" content="Description of your site goes here">
        <meta name="keywords" content="Eurotrade, Servis, Eurotrade servis">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/kontakt.css" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    </head>
    <body>

        <div class="main">
            <div class="page-out">
                <?php include 'dijeloviHTML/header.php'; ?>
                <div class="content">
                    <div style="width: 900px;">
                        <div>
                            <div>

                                <h1 class="title">Završavanje radnog<span> naloga</span></h1>


                          <?php
                               /* echo "<form  class='unos' action='' method='GET'>";
                                $id = $_GET['id'];
                                $result = intervencijaDet($id);
                                while ($row = mysql_fetch_array($result)) {

                                    echo "<label>ID</label>";
                                    echo "<input name='i_id' value='" . $row['id'] . "'></input>";
                                    echo "<label>Intervencija od: </label>";
                                    echo "<input name='intervencija_od' value='" . $row['intervencija_od'] . "'></Input>";
                                    echo "<label>Intervencija do: </label>";
                                    echo "<input name='intervencija_do' value='" . $row['intervencija_do'] . "'></Input>";
                                    echo "<label>Zatraženo: </label>";
                                    echo "<input name='opis' value='" . $row['opis'] . "'></Input>";
                                    echo "<label>Izvršeni servis: </label>";
                                    echo "<input name='obavljeno' value='" . $row['obavljeno'] . "'></Input>";
                                    echo "<label>Naplaćena šifra: </label>";
                                    echo "<input name='sifra_naplate' value='" . $row['sifra_naplate'] . "'></Input>";
                                    echo "<label>Kupac: </label>";
                                    echo "<input value='" . $row['ime'] . ' ' . $row['prezime'] . ', ' . $row['tvrtka'] . "'></Input>";
                                    echo "<input type='submit' name='akcija' value='Unesi'></input>";
                                }
                                echo "</form>";*/
                                ?>

                                <?php
                                $id = $_GET['id'];
                                $result = intervencijaDet($id);
                                while ($row = mysql_fetch_array($result)) {
                                    $_GET['id'] = $row['id'];
                                    $_GET['intervencija_od'] = $row['intervencija_od'];
                                    $_GET['intervencija_do'] = $row['intervencija_do'];
                                    $_GET['opis'] = $row['opis'];
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
                                    <h2>Radni nalog: <?=$_GET['id']?></h2>
                                    <form name="hongkiat" id="hongkiat-form" method="get" action="">
                                        <div id="wrapping" class="clearfix">
                                            <section id="aligned">
                                                <h3>Intervenicija zatražena na datum: </h3>
                                                <input type="text" name="name" id="name" placeholder="<?=  $_GET['intervencija_od']?>" autocomplete="off" tabindex="1" class="txtinput" required="">
                                                <h3>Intervencija zatvorena na datum:</h3>
                                                <input type="email" name="email" id="email" autocomplete="off" tabindex="2" placeholder="<?=  $_GET['intervencija_od']?>" class="txtinput" required="" value="<?=  $_GET['intervencija_od']?>">
                                                <h3>Zatražena intervencija: </h3>
                                                <input type="tel" name="telephone" id="telephone" placeholder="<?=  $_GET['opis']?>" tabindex="4" class="txtinput">
                                                <h3>Izvršeni servis:</h3>
                                                <textarea name="obavljeno" id="message" placeholder="<?=  $_GET['obavljeno']?>" tabindex="5" class="txtblock"></textarea>
                                                <section id="buttons">
                                                    <input type="submit" name="akcija" id="submitbtn" class="submitbtn" tabindex="7" value="Unesi">

                                                    <br style="clear:both;">
                                                </section>
                                            </section>

                                            <div id="aside" class="clearfix">
                                                <div id="recipientcase">
                                                    <h2><?= $_GET['tvrtka'] ?></h2>
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

                    <div class="sections">
                        <div class="section1">
                            <h3>Kupci</h3>
                            <p>&nbsp;</p>
                            <p>Status ugovora/
                                kupci<br>
                                Novi kupac<br>
                                Izrada novog ugovora
                            </p>
                            <p>&nbsp;</p>
                            <p><a href="#" class="more">Više</a></p>
                        </div>
                        <div class="section2">
                            <h3>Intervencije</h3>
                            <p>&nbsp;</p>
                            <p>Sve intervencije i izrada novih<br>
                            </p>
                            <p>&nbsp;</p>
                            <p><a href="#" class="more">Više</a></p>
                        </div>
                        <div class="section3">
                            <h3>Postavljanje kase u rad</h3>
                            <p>&nbsp;</p>
                            <p>Instrukcije postavljanja kase u rad i najčešći problemi koji se javljaju na kasi<br>
                            </p>
                            <p>&nbsp;</p>
                            <p><a href="#" class="more">Više</a></p>
                        </div>
                        <div class="section4">
                            <h3>Uputstva za kupca</h3>
                            <p>&nbsp;</p>
                            <p>Kratke upute made by: Njićpra<br>
                                Upute od digitrona
                            </p>
                            <p>&nbsp;</p>
                            <p><a href="#" class="more">Više</a></p>
                        </div>
                    </div>
                    <?php include 'dijeloviHTML/footer.php'; ?>
                </div>


                </body>
                </html>



