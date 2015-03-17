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
        <script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
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
                                echo '<a href="novi_kupac.php"><button style="display:inline; float:right;">Novi kupac</button></a>';
                                $result = svi_kupci();
                                echo "<table border='1' style='color:green; font-size:14px;'>";
                                        echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>Ime</th>";
                                        echo "<th>Prezime</th>";
                                        echo "<th>Tvrtka</th>";
                                        echo "<th>Adresa</th>";
                                        echo "<th>Grad</th>";
                                        echo "<th>Kontakt broj</th>";
                                        echo "<th>E-mail</th>";
                                        echo "<th>Intervencije</th>";
                                        echo "<th>Promjena podataka</th>";
                                        echo "</tr>";
                                
                                while ($row = mysql_fetch_array($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['ime'] . "</td>";
                                    echo "<td>" . $row['prezime'] . "</td>";
                                    echo "<td>" . $row['tvrtka'] . "</td>";
                                    echo "<td>" . $row['adresa'] . "</td>";
                                    echo "<td>" . $row['grad'] . "</td>";
                                    echo "<td>" . $row['kontakt_broj'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
                                    echo "<td><a  href='intervencijaKupDet.php?fisk_kupac_id=" . $row['id'] . "'><B>"/* . $row["id"] */ . "Detalji</B></a></td>";
                                    echo "<td><a href='ispravka_kupca.php?fisk_kupac_id=" . $row['id'] . "'><B>"/* . $row["id"] */ . "Ispravka</B></a></td>";
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
                <?php include 'dijeloviHTML/footer.php';?>
            </div>
        </div>

           <script>
            $(document).ready(function(){
               $('tr').click(function(){
                  window.location.href='intervencijaDet.php?id=""';                                    
               }) ;
                
            });
            </script>   
    </body>
</html>

