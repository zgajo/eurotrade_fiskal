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
        <link href="css/table.css" rel="stylesheet" type="text/css">
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
                                
                                <?php
                                $id = (int)$_GET['fisk_kupac_id'];
                                $rez = kupacDet($id);
                                 while ($row = mysql_fetch_array($rez)) {
                                    $ime = $row['ime'];
                                    $prezime = $row['prezime'];
                                }
                                echo '<h1 class="title" style="display:inline">Sve intervencije<span> za kupca'. " " . $ime . " " . $prezime .'</span></h1>';
                                echo "<table>
                                    <thead>
                                        <tr>
                                        <th>ID</th>
                                        <th>Zatraženo</th>
                                        <th>Obavljeno</th>
                                        <th>Zatražena</th>
                                        <th>Izvršena</th>
                                        <th>Naplaćena šifra</th>
                                        <th>Serviser</th>

                                        </tr>
                                        </thead>";
                                $kupac_id = (int)$id;
                                $result = intervencijaKupDet($kupac_id);
                                while ($row = mysql_fetch_array($result)) {
                                    echo "<tbody>";
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['zatrazeno'] . "</td>";
                                    echo "<td>" . $row['obavljeno'] . "</td>";
                                    echo "<td>" . date('d.m.Y', strtotime($row['intervencija_od']));  "</td>";
                                    if (!empty($row['intervencija_do'])){
                                        echo "<td>" . date('d.m.Y', strtotime($row['intervencija_do'])); "</td>";
                                    }
                                    else {
                                        echo "<td> </td>";;
                                    }
                                    
                                    echo "<td>" . $row['sifra_naplate'] . "</td>";
                                    echo "<td>". $row['serviser_ime']. ' ' . $row['serviser_prezime']."</td>";
                                    echo "</tr>";
                                    echo "</tbody>";
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


