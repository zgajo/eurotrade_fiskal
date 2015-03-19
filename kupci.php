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
        <script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
    </head>
    <body>
        <div class="main">
            <?php include 'dijeloviHTML/header.php'; ?>
            <div class="header-img"><img src="images/header.jpg"  style="margin-bottom: 15px;  " alt="" height="225" width="100%"></div>
            <div class="page-out2">
                <div class="content2">
                                
                                <?php
                                echo "<div style='width: 899px;margin-left:auto; margin-right:auto;'>";
                                echo '<h1 class="title" style="display:inline">Kupci</h1>';
                                echo '<a href="novi_kupac.php"><button style="display:inline; float:right;">Novi kupac</button></a>';
                                echo "</div>";
                                $result = svi_kupci();
                                echo "<table>";
                                echo "<thead>";
                                        echo "<tr>";
                                        echo "<th>Intervencije</th>";
                                        echo "<th>Promjena podataka</th>";
                                        echo "<th>ID</th>";
                                        echo "<th>Ime</th>";
                                        echo "<th>Prezime</th>";
                                        echo "<th>Tvrtka</th>";
                                        echo "<th>Adresa</th>";
                                        echo "<th>Grad</th>";
                                        echo "<th>Kontakt broj</th>";
                                        echo "<th>E-mail</th>";
                                        echo "</tr>";
                                echo "</thead>";
                                
                                while ($row = mysql_fetch_array($result)) {
                                   
                                echo "<tbody>";
                                    echo "<tr>";
                                    echo "<td><a  href='intervencijaKupDet.php?fisk_kupac_id=" . $row['id'] . "'><B>"/* . $row["id"] */ . "Detalji</B></a></td>";
                                    echo "<td><a href='ispravka_kupca.php?fisk_kupac_id=" . $row['id'] . "'><B>"/* . $row["id"] */ . "Ispravka</B></a></td>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['ime'] . "</td>";
                                    echo "<td>" . $row['prezime'] . "</td>";
                                    echo "<td>" . $row['tvrtka'] . "</td>";
                                    echo "<td>" . $row['adresa'] . "</td>";
                                    echo "<td>" . $row['grad'] . "</td>";
                                    echo "<td>" . $row['kontakt_broj'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
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
        <?php include 'dijeloviHTML/footer.php';?>    
    </body>
</html>

