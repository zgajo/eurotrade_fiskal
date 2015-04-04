<?php
include 'init.php';
ob_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nova intervencija</title>
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
                    <div class="left-out">
                        <div class="left-in">
                            <div class="left-panel">
                                <h1 class="title">Nova <span>intervencija</span></h1>
                                <section id="container">

                                    <form name="hongkiat" id="hongkiat-form" method="POST" action="">
                                        <div id="wrapping" class="clearfix">
                                            <section id="aligned">
                                                <h3>Kupac</h3>
                                                <select type="text" name="fisk_kupac_id" id="email" autocomplete="off" tabindex="2" class="txtinput" id="name" required="">
                                                    <?php
                                                    $result = ListKupac();
                                                    while ($row = mysql_fetch_array($result)) {
                                                        echo "<option value='" . $row["id"] . "'>" . $row["tvrtka"] . ", " . $row["ime"] . " " . $row["prezime"] . "</option>";
                                                    }
                                                    ?>
                                                </select>
                                                <h3>Intervenicija zatražena na datum: </h3>
                                                <input type="date" type="text" name="intervencija_od" id="name"  autocomplete="off" tabindex="1" class="txtinput" required="">
                                                
                                                <h3>Zatražena intervencija: </h3>
                                                <input type="text" accept-charset="UTF-8" name="zatrazeno" id="telephone" ptabindex="4" class="txtinput" required="">

                                                <section id="buttons">
                                                    <input type="submit" name="unesi" id="submitbtn" class="submitbtn" tabindex="7" value="Unesi">

                                                    <br style="clear:both;">
                                                </section>
                                            </section>
                                    </form>
                                </section>
                               

                                <?php
                                if (!empty($_POST)) {
                                    $int_od = $_POST['intervencija_od'];
                                    $fisk_kupac_id = $_POST['fisk_kupac_id'];
                                    $zatrazeno = $_POST['zatrazeno'];
                                    $user_id = 1;
                                    nova_intervencija($int_od, $fisk_kupac_id, $zatrazeno, $user_id);
                                    header("location:intervencije.php");
                                    exit();
                                }
                                ?>

                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div class="right-out">
                        <div class="right-in">
                            <div class="right-panel">
                                <div class="right-block">
                                    <h2 class="title">Kategorije</h2>
                                    <ul class="title">
                                        <li><a href="nova_intervencija.php">Nova intervencija</a></li>
                                        <li><a href="novi_kupac.php">Novi kupac</a></li>
                                        <li><a href="novi_ugovor.php">Novi ugovor</a></li>

                                    </ul>
                                </div>
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
