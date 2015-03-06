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
                               echo "<form  class='unos' action='' method='GET'>";
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
                                 echo "</form>";
                                ?>
                                <?php
                                if (isset($_GET[('akcija')])) {
                                    $id=$_GET["i_id"];
                                    $obavljeno = $_GET["obavljeno"];
                                    $i_do = $_GET["intervencija_do"];
                                    $sifra_naplate = $_GET["sifra_naplate"];
                                   inter_update($id, $obavljeno,  $i_do, $sifra_naplate);
                                   header("location: intervencije.php");
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
