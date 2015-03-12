<?php
include 'init.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ugovori</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="description" content="Description of your site goes here">
        <meta name="keywords" content="Eurotrade, Servis, Eurotrade servis">
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="main">
            <div class="page-out">
                <?php include 'dijeloviHTML/header.php';?>
                <div class="content">
                    <div div style="width: 900px;">
                        <div>
                            <div>
                                <h1 class="title">Ugovori</h1>
                                <?php
                                echo '<a href="novi_ugovor.php"><button style="display:inline; float:right;">Novi ugovor</button></a>';
                                $result = svi_ugovori();
                                echo "<table border='1' style='color:green; font-size:14px;'>";
                                        echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>Trajanje</th>";
                                        echo "<th>Datum od</th>";
                                        echo "<th>Datum do</th>";
                                        echo "<th>Cijena</th>";
                                        echo "<th>Kupac</th>";
                                        echo "</tr>";
                                
                                while ($row = mysql_fetch_array($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['trajanje'] . ' mj.'. "</td>";
                                    echo "<td>" . $row['dat_od'] . "</td>";
                                    echo "<td>" . $row['dat_od'] . "</td>";
                                    echo "<td>" . $row['cijena'] . ' kn'."</td>";
                                    echo "<td><a href='ispravka_kupca.php?fisk_kupac_id=" . $row['id'] . "'><B>" . $row["ime"] .' '.$row['prezime']. "</B></a></td>";
                                    echo "<td><a href='izmjena_ugovora.php?id=" . $row['id'] . "'><B>"/* . $row["id"] */ . "Izmjena</B></a></td>";
                                    echo "</tr>";
                                }
                                
                                echo "</table>";
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
                <?php include 'dijeloviHTML/footer.php';?>
            </div>
        </div>


    </body>
</html>



<?php
if (!empty($_GET)) {
    $tvrtka = $_GET['tvrtka'];
    $ime = $_GET['ime'];
    $prezime = $_GET['prezime'];
    $adresa = $_GET['adresa'];
    $grad = $_GET['grad'];
    $kontakt_broj = $_GET['kontakt_broj'];
    $email = $_GET['email'];
    
    unos_kupca( $ime, $prezime,$tvrtka, $adresa, $grad, $kontakt_broj, $email);
    header("location:index.php");
    
    
}
?>