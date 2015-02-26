<?php
include 'init.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Zatvaranje radnog naloga</title>
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
                                <h1 class="title">Završavanje radnog<span> naloga</span></h1>
                               
                                
                                <?php
                                $id = $_GET['id'];
                                $result = sve_intervencije($id);
                                 while ($row = mysql_fetch_array($result)){
                                     $_GET['id'] = $row['id'];
                                    $_GET['opis'] = $row['opis'];
                                    $_GET['obavljeno'] = $row['obavljeno'];
                                    $_GET['intervencija_od'] = $row['intervencija_od'];
                                    $_GET['intervencija_do'] = $row['intervencija_do'];
                                    $_GET['sifra_naplate'] = $row['sifra_naplate'];
                                    $_GET['fisk_user_id'] = $row['fisk_user_id'];
                                    $_GET['fisk_kupac_id'] = $row['fisk_kupac_id'];
                                     
                                 }
                                ?>
                                
                                
                                <form class="unos" action="nova_intervencija.php" method="GET">

                                    <label>Intervencija zatražena: </label>
                                    <input name="intervencija_od" value="<?=$_GET['intervencija_od'] ?>">
                                    <br>
                                    <label>Intervencija završena: </label>
                                    <input name="intervencija_do" value="<?=$_GET['intervencija_do'] ?>">
                                    <br>
                                    <label>Zatražena intervencija: </label>
                                    <input type="text" name="opis" maxlength="30" value="<?=$_GET['opis'] ?>">
                                    <br>
                                    <label>Opis izvršenog servisa: </label>
                                    <input name="obavljeno" value="<?=$_GET['obavljeno'] ?>">
                                    
                                    <br><input name="unesi" type="submit" value="Unesi">

                                </form>

                                

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
                    <div class="">
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
