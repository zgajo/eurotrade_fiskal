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
        <link href="css/table.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="main">
            <?php include 'dijeloviHTML/header.php'; ?>
            <div class="header-img"><img src="images/header.jpg"  style="margin-bottom: 15px;  " alt="" height="225" width="100%"></div>
            <div class="page-out2">
                <div class="content2">
                                
                                <?php
                                echo "<div style='width: 899px;margin-left:auto; margin-right:auto;'>";
                                echo "<h1 class='title'  style='display:inline'>Ugovori</h1>";
                                echo '<a href="novi_ugovor.php"  class="myButton" style="display:inline; float:right;">Novi ugovor</a>';
                                echo "</div>";
                                $result = svi_ugovori();
                                echo "<table>";
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th>ID</th>";
                                echo "<th>Trajanje</th>";
                                echo "<th>Datum od</th>";
                                echo "<th>Datum do</th>";
                                echo "<th>Cijena</th>";
                                echo "<th>Kupac</th>";
                                echo "<th>Izmjena</th>";
                                echo "</tr>";
                                echo "</thead>";

                                while ($row = mysql_fetch_array($result)) {
                                    $exp_date = $row['dat_do'];
                                    $todays_date = date("Y-m-d");

                                    $today = strtotime($todays_date);
                                    $expiration_date = strtotime($exp_date);

                                    if ($expiration_date > $today) {
                                        echo "<tr style='color:#19A347; background-color:';>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['trajanje'] . ' mj.' . "</td>";
                                    echo "<td>".  date('d.m.Y', strtotime($row['dat_od']));  "</td>";
                                    echo "<td>".  date('d.m.Y', strtotime($row['dat_do']));  "</td>";
                                    echo "<td>" . $row['cijena'] . ' kn' . "</td>";
                                    echo "<td><a href='ispravka_kupca.php?fisk_kupac_id=" . $row['fisk_kupac_id'] . "'><B>" . $row["ime"] . ' ' . $row['prezime'] . "</B></a></td>";
                                    echo "<td><a href='izmjena_ugovora.php?id=" . $row['id'] . "'><B>"/* . $row["id"] */ . "Izmjena ugovora</B></a></td>";
                                    echo "</tr>";
                                    } else {
                                        echo "<tr  style='color:#FF3333; background-color:'>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['trajanje'] . ' mj.' . "</td>";
                                    echo "<td>" .  date('d.m.Y', strtotime($row['dat_od']));  "</td>";
                                    echo "<td>" .  date('d.m.Y', strtotime($row['dat_do']));  "</td>";
                                    echo "<td>" . $row['cijena'] . ' kn' . "</td>";
                                    echo "<td><a href='ispravka_kupca.php?fisk_kupac_id=" . $row['id'] . "'><B>" . $row["ime"] . ' ' . $row['prezime'] . "</B></a></td>";
                                    echo "<td><a href='izmjena_ugovora.php?id=" . $row['id'] . "'><B>"/* . $row["id"] */ . "Izmjena ugovora</B></a></td>";
                                    echo "</tr>";
                                    }
                                    
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

