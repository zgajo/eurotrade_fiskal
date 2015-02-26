<?php
include './init.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Novi kupac</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="description" content="Description of your site goes here">
        <meta name="keywords" content="Eurotrade, Servis, Eurotrade servis">
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="main">
            <div class="page-out">
                <?php include 'dijeloviHTML/header.php'; ?>
                <div class="content">
                    <div class="left-out">
                        <div class="left-in">
                            <div class="left-panel">
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
                                <form class="unos" action="ispravka_kupca.php" method="GET">

                                    <label>Id: </label>
                                    <input type="text" name="id" maxlength="30" value="<?= $_GET['id'] ?>">
                                    <label>Tvrtka: </label>
                                    <input type="text" name="tvrtka" maxlength="30" value="<?= $_GET['tvrtka'] ?>">
                                    <br>
                                    <label>Ime: </label>
                                    <input type="text" name="ime" maxlength="30" value="<?= $_GET['ime'] ?>">
                                    <br>
                                    <label>Prezime: </label>
                                    <input type="text" name="prezime" maxlength="30" value="<?= $_GET['prezime'] ?>">
                                    <br>
                                    <label>Adresa: </label>
                                    <input type="text" name="adresa" maxlength="30" value="<?= $_GET['adresa'] ?>">
                                    <br>
                                    <label>Grad: </label>
                                    <input type="text" name="grad" maxlength="30" value="<?= $_GET['grad'] ?>">
                                    <br>
                                    <label>Kontakt broj: </label>
                                    <input type="text" name="kontakt_broj" maxlength="30" value="<?= $_GET['kontakt_broj'] ?>">
                                    <br>
                                    <label>E-mail: </label>
                                    <input type="email" name="email" maxlength="30" value="<?= $_GET['email'] ?>">
                                    <br>
                                    <br><input type="submit" name="akcija" value="Izmijeni">


                                </form>

<?php


if(isset($_GET['akcija'])){
    $id = $_GET['id'];
    $tvrtka = $_GET['tvrtka'];
    $ime = $_GET['ime'];
    $prezime = $_GET['prezime'];
    $adresa = $_GET['adresa'];
    $grad = $_GET['grad'];
    $kontakt_broj = $_GET['kontakt_broj'];
    $email = $_GET['email'];
    ispravka_kupca($id, $ime, $prezime, $tvrtka, $adresa, $grad, $email, $kontakt_broj);
    header("location:kupci.php");
    die("a ma");
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
                                    <h2>Kategorije</h2>
                                    <ul>
                                        <li><a href="nova_intervencija.php">Nova intervencija</a></li>
                                        <li><a href="novi_kupac.php">Novi kupac</a></li>
                                        <li><a href="#">Novi ugovor</a></li>

                                    </ul>
                                </div>
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
