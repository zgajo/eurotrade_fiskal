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
                <?php include 'dijeloviHTML/header.php'; ?>
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
                                    $exp_date = $row['dat_do'];
                                    $todays_date = date("Y-m-d");

                                    $today = strtotime($todays_date);
                                    $expiration_date = strtotime($exp_date);

                                    if ($expiration_date > $today) {
                                        echo "<tr style='color:; background-color:#99E699';>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['trajanje'] . ' mj.' . "</td>";
                                    echo "<td>".  date('d.m.Y', strtotime($row['dat_od']));  "</td>";
                                    echo "<td>".  date('d.m.Y', strtotime($row['dat_do']));  "</td>";
                                    echo "<td>" . $row['cijena'] . ' kn' . "</td>";
                                    echo "<td><a href='ispravka_kupca.php?fisk_kupac_id=" . $row['fisk_kupac_id'] . "'><B>" . $row["ime"] . ' ' . $row['prezime'] . "</B></a></td>";
                                    echo "<td><a href='izmjena_ugovora.php?id=" . $row['id'] . "'><B>"/* . $row["id"] */ . "Izmjena</B></a></td>";
                                    echo "</tr>";
                                    } else {
                                        echo "<tr  style='color:red; background-color:#FF9999'>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['trajanje'] . ' mj.' . "</td>";
                                    echo "<td>" .  date('d.m.Y', strtotime($row['dat_od']));  "</td>";
                                    echo "<td>" .  date('d.m.Y', strtotime($row['dat_do']));  "</td>";
                                    echo "<td>" . $row['cijena'] . ' kn' . "</td>";
                                    echo "<td><a href='ispravka_kupca.php?fisk_kupac_id=" . $row['id'] . "'><B>" . $row["ime"] . ' ' . $row['prezime'] . "</B></a></td>";
                                    echo "<td><a href='izmjena_ugovora.php?id=" . $row['id'] . "'><B>"/* . $row["id"] */ . "Izmjena</B></a></td>";
                                    echo "</tr>";
                                    }
                                    
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
                <?php include 'dijeloviHTML/footer.php'; ?>
            </div>
        </div>


    </body>
</html>

