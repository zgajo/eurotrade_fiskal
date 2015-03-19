<?php
include 'init.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kupci</title>
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
                    <div style="width: 900px;">
                        <div>
                            <div>
                                
                                <?php
                                echo '<h1 style="display:inline">Kupci</h1>';
                                echo '<button style="display:inline; float:right;">Novi kupac</button>';
                                echo "<table border='1' style='color:green; font-size:14px;'>
                                        <tr>
                                        <th>ID</th>
                                        <th>Zatraženo</th>
                                        <th>Obavljeno</th>
                                        <th>Zatražena</th>
                                        <th>Izvršena</th>
                                        <th>Naplaćena šifra</th>
                                        <th>Serviser</th>

                                        </tr>";
                                $kupac_id = $_GET['fisk_kupac_id'];
                                $result = intervencijaKupDet($kupac_id);
                                while ($row = mysql_fetch_array($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['zatrazeno'] . "</td>";
                                    echo "<td>" . $row['obavljeno'] . "</td>";
                                    echo "<td>" . $row['intervencija_od'] . "</td>";
                                    echo "<td>" . $row['intervencija_do'] . "</td>";
                                    echo "<td>" . $row['sifra_naplate'] . "</td>";
                                    echo "<td>". $row['serviser_ime']. ' ' . $row['serviser_prezime']."</td>";
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
                
            </div>
        </div>
</div>
<?php include 'dijeloviHTML/footer.php';?>
    </body>
</html>


