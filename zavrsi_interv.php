<?php
include 'init.php';
ob_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Završi nalog</title>
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
                                $id = (int) $id;
                                $result = intervencijaDet($id);
                                while ($row = mysql_fetch_array($result)) {
                                    $i_id = $row['id'];
                                    $i_od = $row['intervencija_od'];
                                    $i_do = $row['intervencija_do'];
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
                                    <h2>Radni nalog: <?= $id ?></h2>
                                    <form name="hongkiat" id="hongkiat-form" method="POST" action="">
                                        <div id="wrapping" class="clearfix">
                                            <section id="aligned">
                                                <input type="hidden" name="i_id" value="<?= $i_id ?>">
                                                <h3>Intervenicija zatražena na datum: </h3>
                                                <input type="datetime" type="text" name="intervencija_od" id="name" value="<?= date('d.m.Y', strtotime($i_od)); ?>" autocomplete="off" tabindex="1" class="txtinput" readonly>
                                                <h3>Intervencija zatvorena na datum:</h3>
                                                <?php
                                                if (!empty($i_do)) {
                                                    echo '<input type="date" name="intervencija_do" id="email" autocomplete="off" tabindex="2" class="txtinput"  value="' . date("d.m.Y", strtotime($i_do)) . '">';
                                                } else {
                                                    echo '<input type="date" name="intervencija_do" id="email" autocomplete="off" tabindex="2" class="txtinput"  value="' . date("d.m.Y", strtotime($i_do)) . '">';
                                                }
                                                ?>
                                                <h3>Zatražena intervencija: </h3>
                                                <input type="text" name="zatrazeno" id="telephone" placeholder="<?= $zatrazeno ?>" tabindex="4" class="txtinput" readonly="">
                                                <h3>Šifra naplate: </h3>
                                                <input type="text" name="sifra_naplate" id="telephone"  tabindex="4" class="txtinput" value="<?= $sifra_naplate ?>">
                                                <h3>Izvršeni servis:</h3>
                                                <textarea  name="obavljeno" id="message"  placeholder="<?= $obavljeno ?>" tabindex="5" class="txtblock"></textarea>
                                                <section id="buttons">
                                                    <input type="submit" name="akcija" id="submitbtn" class="submitbtn" tabindex="7" value="Unesi">

                                                    <br style="clear:both;">
                                                </section>
                                            </section>

                                            <div id="aside" class="clearfix">
                                                <div id="recipientcase">
                                                    <h2><?= $tvrtka ?></h2>
                                                    <h3>Ime i prezime: <?= $ime . ' ' . $prezime ?></h3>
                                                    <h3>Grad: <?= $grad ?></h3>
                                                    <h3>Adresa: <?= $adresa ?></h3>
                                                    <h3>Tel: <?= $kontakt_broj ?></h3>
                                                    <h3>Email: <?= $email ?></h3>
                                                </div>
                                            </div>
                                        </div>



                                    </form>
                                </section>
                                <?php
                                if (isset($_POST[('akcija')])) {
                                    $i_id = (int) $_POST['i_id']; //i_id nesmije biti samo id jer se kolje sa id koji smo dobili iz prethodne stranice
                                    $obavljeno = $_POST['obavljeno'];
                                    $i_do = $_POST['intervencija_do'];
                                    $sifra_naplate = $_POST['sifra_naplate'];


                                    inter_update($i_id, $obavljeno, $i_do, $sifra_naplate);
                                    header("location: intervencije.php");
                                    die(mysql_error());
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
<?php include 'dijeloviHTML/footer.php'; ?>

    </body>
</html>



