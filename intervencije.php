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
        <link href="css/table.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    </head>
    <body>

        <div class="main">
            <?php include 'dijeloviHTML/header.php'; ?>
            <div class="header-img"><img src="images/header.jpg"  style="margin-bottom: 15px;  " alt="" height="225" width="100%"></div>
            <div class="page-out2">
                <div class="content2">

                                <?php
                                echo "<div style='width: 899px;margin-left:auto; margin-right:auto;'>";
                                echo '<h1 class="title" style="display:inline">Intervencije</h1>';
                                echo '<a href="nova_intervencija.php"><button style="display:inline; float:right;">Nova intervencija</button></a>';
                                echo '<a href="kupci.php"><button style="display:inline; float:right;">Kupci</button></a>';
                                echo "</div>";
                                $result = sve_intervencije();

                                echo "<table>
                                    <thead>
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
                                        </tr>
                                        </thead>";
                                
                                while ($row = mysql_fetch_array($result)) {
                                    echo "<tbody>";
                                    echo "<tr>";
                                    echo "<td><a  href='intervencijaDet.php?id=" . $row['id'] . "'><B>"/* . $row["id"] */ . "Detalji</B></a></td>";
                                    echo "<td><a  href='zavrsi_interv.php?id=" . $row['id'] . "'><B>"/* . $row["id"] */ . "Izmijeni rn</B></a></td>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['ime'] . ' ' . $row['prezime'] . ', ' . $row['tvrtka'] . "</td>";
                                    echo "<td>" . $row['zatrazeno'] . "</td>";
                                    echo "<td>" . date('d.m.Y', strtotime($row['intervencija_od']));  "</td>";
                                    echo "<td>" . date('d.m.Y',strtotime($row['intervencija_do'])) ; "</td>";
                                    echo "<td>" . $row['sifra_naplate'] . "</td>";
                                    echo "<td>" . $row['serviser_ime'] . ' ' . $row['serviser_prezime'] . "</td>";
                                    echo "</tr>";
                                    echo "</tbody>";
                                }
                                echo "</table>";
                                ?>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>

                     <?php include 'dijeloviHTML/sections2.php'; ?>
                </div>
 </div>
             </div>
<?php include 'dijeloviHTML/footer.php'; ?>

                </body>
                </html>



