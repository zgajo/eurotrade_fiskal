<?php
include './init.php';
ob_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ugovor</title>
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
                    <div  style="width: 900px;">
                        <div>
                            <div>
                                <h1 class="title">Izmjena <span>ugovora</span></h1>

                                <?php
                                $ugovor_id = (int) filter_input(INPUT_GET, 'id');
                                $result = ispravka_ugovora($ugovor_id);
                                while ($row = mysql_fetch_array($result)) {
                                    $id = $row['id'];
                                    $cijena = $row['cijena'];
                                    $dat_od = $row['dat_od'];
                                    $trajanje = $row['trajanje'];
                                    $dat_do = $row['dat_do'];
                                    $fisk_kupac_id = $row['fisk_kupac_id'];
                                }
                                ?>
                                <section id="container">
                                    <h2>Id ugovora: <?= $ugovor_id ?></h2>
                                    <form name="hongkiat" id="hongkiat-form" method="POST" action="">
                                        <div id="wrapping" class="clearfix">
                                            <section id="aligned">
                                                <input type="hidden" name="u_id" value="<?= $id ?>">
                                                <h3>Datum od: </h3>
                                                <?php
                                                if (!empty($dat_od)) {
                                                    echo '<input type="datetime" name="intervencija_od" id="email" autocomplete="off" tabindex="2" class="txtinput"  value="' . date("d.m.Y", strtotime($dat_od)) . '" >';
                                                } else {
                                                    echo '<input type="date" name="intervencija_od" id="email" autocomplete="off" tabindex="2" class="txtinput"  value="' . date("d.m.Y", strtotime($dat_od)) . '" >';
                                                }
                                                ?>
                                                <h3>Datum do: </h3>
                                                <?php
                                                if (!empty($dat_do)) {
                                                    echo '<input type="datetime" name="intervencija_do" id="email" autocomplete="off" tabindex="2" class="txtinput"  value="' . date("d.m.Y", strtotime($dat_do)) . '" readonly>';
                                                } else {
                                                    echo '<input type="date" name="intervencija_do" id="email" autocomplete="off" tabindex="2" class="txtinput"  value="' . date("d.m.Y", strtotime($dat_do)) . '" readonly>';
                                                }
                                                ?>
                                                <h3>Trajanje ugovora: </h3>
                                                <input type="text" name="trajanje" ptabindex="4" class="txtinput" value="<?= $trajanje ?>">
                                                <h3>Cijena (KN): </h3>
                                                <input type="text" name="cijena" ptabindex="4" class="txtinput" value="<?= $cijena ?>">
                                                <h3>Kupac: </h3>
                                                <?php
                                                $rez = kupacDet($fisk_kupac_id);
                                                while ($row = mysql_fetch_array($rez)) {
                                                    $ime = $row['ime'];
                                                    $prezime = $row['prezime'];
                                                    $tvrtka = $row['tvrtka'];
                                                }
                                                ?>
                                                <input type="text" name="fisk_kupac_id" ptabindex="4" class="txtinput" value="<?= $ime . ' ' . $prezime ?>" readonly>
                                                <section id="buttons">
                                                    <input type="submit" name="akcija" id="submitbtn" class="submitbtn" tabindex="7" value="Unesi">

                                                    <br style="clear:both;">
                                                </section>
                                            </section>
                                    </form>
                                </section>


                                <?php
                                if (isset($_POST['akcija'])) {
                                    $id = $_POST['u_id'];
                                    $dat_od = $_POST['intervencija_od'];
                                    $trajanje = $_POST['trajanje'];
                                    $cijena = $_POST['cijena'];
                                    $date = $dat_od;
                                    
                                    $dat_do = strtotime(("+$trajanje months"), strtotime($date));
                                    $dat_do = date('Y-m-j', $dat_do);
                                    
                                    $dat_od = strtotime(("+0 months"), strtotime($date));
                                    $dat_od = date('Y-m-j', $dat_od);
                                    
                                    izmjena_ugovora($id, $dat_od, $trajanje, $cijena, $dat_do);
                                    header("location:ugovori.php");
                                    exit();
                                }
                                ?>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>

                    <?php include 'dijeloviHTML/sections.php'; ?>
                </div>

            </div>
        </div>
        <?php include 'dijeloviHTML/footer.php' ?>

    </body>
</html>
