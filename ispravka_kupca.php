<?php
include './init.php';
include 'baza/check_login.php';
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
            <?php include 'dijeloviHTML/header.php'; ?>
            <div class="header-img"><img src="images/header.jpg"  style="margin-bottom: 15px;  " alt="" height="225" width="100%"></div>
            <div class="page-out">
                <div class="content">
                    <div  style="width: 900px;">
                        <div>
                            <div>
                                <h1 class="title">Izmjena podataka <span>kupca</span></h1>

                                <?php
                                $kupac_id = filter_input(INPUT_GET, 'fisk_kupac_id');
                                $kupac_id = (int)$kupac_id;
                                $result = ispravka_kupca_det($kupac_id);
                                while ($row = mysql_fetch_array($result)) {
                                    $id = $row['id'];
                                    $tvrtka = $row['tvrtka'];
                                    $ime = $row['ime'];
                                    $prezime = $row['prezime'];
                                    $adresa = $row['adresa'];
                                    $grad = $row['grad'];
                                    $kontakt_broj = $row['kontakt_broj'];
                                    $email = $row['email'];
                                }
                                ?>
                                <section id="container">
                                    <h2>Id kupca: <?= $kupac_id ?></h2>
                                    <form name="hongkiat" id="hongkiat-form" method="POST" action="">
                                        <div id="wrapping" class="clearfix">
                                            <section id="aligned2">
                                                <input type="hidden" name="k_id" value="<?= $id ?>">
                                                <h3>Ime: </h3>
                                                <input type="text" name="ime" ptabindex="4" class="txt" value="<?= $ime ?>">
                                                <h3>Tvrtka: </h3>
                                                <input type="text" name="tvrtka" ptabindex="4" class="txt" value="<?= $tvrtka ?>">
                                                
                                                <h3>Grad: </h3>
                                                <input type="text" name="grad" ptabindex="4" class="txt" value="<?= $grad ?>">
                                                
                                                <h3>E-mail: </h3>
                                                <input type="email" name="email" ptabindex="4" class="txt" value="<?= $email ?>">

                                                <section id="buttons">
                                                    <input type="submit" name="akcija" id="submitbtn" class="submitbtn" tabindex="7" value="Unesi">

                                                    <br style="clear:both;">
                                                </section>
                                            </section>
                                            <div id="aside2" class="clearfix">
                                                <h3>Prezime: </h3>
                                                <input type="text" name="prezime" ptabindex="4" class="txt" value="<?= $prezime ?>">
                                                <h3>Adresa: </h3>
                                                <input type="text" name="adresa" ptabindex="4" class="txt" value="<?= $adresa ?>">
                                                <h3>Kontakt broj: </h3>
                                                <input type="text" name="kontakt_broj" ptabindex="4" class="txt" value="<?= $kontakt_broj ?>">
                                            </div>
                                    </form>
                                </section>


                                <?php
                                if (isset($_POST['akcija'])) {
                                    $id = (int)$_POST['k_id'];
                                    $tvrtka = $_POST['tvrtka'];
                                    $ime = $_POST['ime'];
                                    $prezime = $_POST['prezime'];
                                    $adresa = $_POST['adresa'];
                                    $grad = $_POST['grad'];
                                    $kontakt_broj = $_POST['kontakt_broj'];
                                    $email = $_POST['email'];
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
                    
                  <?php include 'dijeloviHTML/sections.php'; ?>
                </div>

            </div>
        </div>
<?php include 'dijeloviHTML/footer.php' ?>

    </body>
</html>
