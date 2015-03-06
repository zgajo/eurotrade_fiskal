<?php
include 'init.php';
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
    </head>
    <body>
        <div class="main">
            <div class="page-out">
                <?php include 'dijeloviHTML/header.php'; ?>
                <div class="content">
                    <div class="left-out">
                        <div class="left-in">
                            <div class="left-panel">
                                <h1 class="title">Nova <span>intervencija</span></h1>
                                <form class="unos" action="" method="GET">

                                    <label>Intervencija zatražena: </label>
                                    <input name="intervencija_od" value="<?php echo date("d.m.Y"); ?>">
                                    <br>
                                    <label>Kupac</label>
                                    <select name="fisk_kupac_id"> 
                                        <?php  
                                        $result = ListKupac();
                                        while ($row = mysql_fetch_array($result)){                                        
                                         echo "<option value='" . $row["id"] . "'>" . $row["tvrtka"] . ", ".$row["ime"]." ".$row["prezime"]."</option>";
                                        
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label>Zatražena intervencija: </label>
                                    <input type="text" name="opis" maxlength="100">
                                    <br>
                                    <br><input name="unesi" type="submit" value="Unesi">

                                </form>

                                <?php
                                if (!empty($_GET)) {
                                $int_od = $_GET['intervencija_od'];
                                $fisk_kupac_id = $_GET['fisk_kupac_id'];
                                $opis = $_GET['opis'];
                                $user_id = 1;
                                nova_intervencija($int_od, $fisk_kupac_id, $opis, $user_id);
                                header("location:intervencije.php");
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
<?php include 'dijeloviHTML/footer.php'; ?>
            </div>
        </div>


    </body>
</html>
