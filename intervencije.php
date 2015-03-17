<?php
include 'init.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Intervencije</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="description" content="Description of your site goes here">
        <meta name="keywords" content="Eurotrade, Servis, Eurotrade servis">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    </head>
    <body>

        <div class="main">
            <div class="page-out">
                <?php include 'dijeloviHTML/header.php'; ?>
                <div class="content">
                    <div style="width: 900px;">
                        <div>
                            <div>

                                <?php
                                echo '<h1 style="display:inline">Intervencije</h1>';
                                echo '<a href="nova_intervencija.php"><button style="display:inline; float:right;">Nova intervencija</button></a>';
                                echo '<a href="kupci.php"><button style="display:inline; float:right;">Kupci</button></a>';
                                $result = sve_intervencije();

                                echo "<table border='1' style='color:green; font-size:14px;'>
                                        <tr>
                                        <th>Detalji</th>
                                        <th>Zatvori rn</th>
                                        <th>ID</th>
                                        <th>Kupac</th>
                                        <th>Zatraženi servis:</th>
                                        <th>Intervencija od:</th>
                                        <th>Intervencija do</th>
                                        <th>Naplaćena šifra</th>
                                        <th>Serviser</th>
                                        </tr>";
                                
                                while ($row = mysql_fetch_array($result)) {
                                    echo "<tr>";
                                    echo "<td><a  href='intervencijaDet.php?id=" . $row['id'] . "'><B>"/* . $row["id"] */ . "Detalji</B></a></td>";
                                    echo "<td><a  href='zavrsi_interv.php?id=" . $row['id'] . "'><B>"/* . $row["id"] */ . "Izmijeni rn</B></a></td>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['ime'] . ' ' . $row['prezime'] . ', ' . $row['tvrtka'] . "</td>";
                                    echo "<td>" . $row['zatrazeno'] . "</td>";
                                    echo "<td>" . $row['intervencija_od'] . "</td>";
                                    echo "<td>" . $row['intervencija_do'] . "</td>";
                                    echo "<td>" . $row['sifra_naplate'] . "</td>";
                                    echo "<td>" . $row['serviser_ime'] . ' ' . $row['serviser_prezime'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                                ?>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>

                     <?php include 'dijeloviHTML/sections.php'; ?>
<?php include 'dijeloviHTML/footer.php'; ?>
                </div>


                </body>
                </html>



