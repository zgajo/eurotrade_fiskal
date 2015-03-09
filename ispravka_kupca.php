<?php
include './init.php';
ob_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Izmjena podataka kupca</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="description" content="Description of your site goes here">
        <meta name="keywords" content="Eurotrade, Servis, Eurotrade servis">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/kontakt.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="main">
            <div class="page-out">
                <?php include 'dijeloviHTML/header.php'; ?>
                <div class="content">
                    <div  style="width: 900px;">
                        <div>
                            <div>
                                <h1 class="title">Izmjena podataka <span>kupca</span></h1>

                                <?php
                                $kupac_id = filter_input(INPUT_GET, 'fisk_kupac_id');
                                $result = ispravka_kupca_det($kupac_id);
                                while ($row = mysql_fetch_array($result)) {
                                    $_GET['id'] = $row['id'];
                                    $_GET['tvrtka'] = $row['tvrtka'];
                                    $_GET['ime'] = $row['ime'];
                                    $_GET['prezime'] = $row['prezime'];
                                    $_GET['adresa'] = $row['adresa'];
                                    $_GET['grad'] = $row['grad'];
                                    $_GET['kontakt_broj'] = $row['kontakt_broj'];
                                    $_GET['email'] = $row['email'];
                                }
                                ?>
                                <section id="container">
                                    <h2>Id kupca: <?= $kupac_id ?></h2>
                                    <form name="hongkiat" id="hongkiat-form" method="get" action="">
                                        <div id="wrapping" class="clearfix">
                                            <section id="aligned">
                                                <input type="hidden" name="k_id" value="<?= $_GET['id'] ?>">
                                                <h3>Ime: </h3>
                                                <input type="text" name="ime" ptabindex="4" class="txtinput" value="<?= $_GET['ime'] ?>">
                                                <h3>Prezime: </h3>
                                                <input type="text" name="prezime" ptabindex="4" class="txtinput" value="<?= $_GET['prezime'] ?>">
                                                <h3>Tvrtka: </h3>
                                                <input type="text" name="tvrtka" ptabindex="4" class="txtinput" value="<?= $_GET['tvrtka'] ?>">
                                                <h3>Adresa: </h3>
                                                <input type="text" name="adresa" ptabindex="4" class="txtinput" value="<?= $_GET['adresa'] ?>">
                                                <h3>Grad: </h3>
                                                <input type="text" name="grad" ptabindex="4" class="txtinput" value="<?= $_GET['grad'] ?>">
                                                <h3>Kontakt broj: </h3>
                                                <input type="text" name="kontakt_broj" ptabindex="4" class="txtinput" value="<?= $_GET['kontakt_broj'] ?>">
                                                <h3>E-mail: </h3>
                                                <input type="email" name="email" ptabindex="4" class="txtinput" value="<?= $_GET['email'] ?>">

                                                <section id="buttons">
                                                    <input type="submit" name="akcija" id="submitbtn" class="submitbtn" tabindex="7" value="Unesi">

                                                    <br style="clear:both;">
                                                </section>
                                            </section>
                                    </form>
                                </section>


                                <?php
                                if (isset($_GET['akcija'])) {
                                    $id = $_GET['k_id'];
                                    $tvrtka = $_GET['tvrtka'];
                                    $ime = $_GET['ime'];
                                    $prezime = $_GET['prezime'];
                                    $adresa = $_GET['adresa'];
                                    $grad = $_GET['grad'];
                                    $kontakt_broj = $_GET['kontakt_broj'];
                                    $email = $_GET['email'];
                                    ispravka_kupca($id, $ime, $prezime, $tvrtka, $adresa, $grad, $email, $kontakt_broj);
                                    header("location:kupci.php");
                                    exit();
                                }
                                ?>
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
                </div>
<?php include 'dijeloviHTML/footer.php' ?>
            </div>
        </div>


    </body>
</html>
