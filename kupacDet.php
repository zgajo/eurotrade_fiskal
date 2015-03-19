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
            <?php include 'dijeloviHTML/header.php'; ?>
            <div class="header-img"><img src="images/header.jpg"  style="margin-bottom: 15px;  " alt="" height="225" width="100%"></div>
            <div class="page-out">
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
                                        <th>Ime</th>
                                        <th>Prezime</th>
                                        <th>Tvrtka</th>
                                        <th>Adresa</th>
                                        <th>Kontakt broj</th>
                                        <th>E-mail</th>
                                        </tr>";
                                $id = $_GET['id'];
                                $result = kupacDet($id);
                                while ($row = mysql_fetch_array($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['ime'] . "</td>";
                                    echo "<td>" . $row['prezime'] . "</td>";
                                    echo "<td>" . $row['tvrtka'] . "</td>";
                                    echo "<td>" . $row['adresa'] . "</td>";
                                    echo "<td>" . $row['kontakt_broj'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
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


