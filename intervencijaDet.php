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
                <?php include 'dijeloviHTML/header.php'; ?>
                <div class="content">
                    <div style="width: 900px;">
                        <div>
                            <div>
                                <h1 class="title">Završavanje radnog<span> naloga</span></h1>
                                <button style="display:inline; float:right;">Novi kupac</button>
                                <?php
                                echo '<form class="unos" action="" method="GET">';
                                $id = $_GET['id'];
                                $result = intervencijaDet($id);
                                while ($row = mysql_fetch_array($result)) {
                                    echo "<label>Id intervencije:</label>";
                                    echo "<input name='id' value=" . $row['id'] . ">";
                                    echo "<label>Intervencija zatražena:</label>";
                                    echo "<input name='intervencija_od' value=" . $row['intervencija_od'] . ">";
                                    echo "<label>Intervencija završena:</label>";
                                    echo "<input name='intervencija_do' value=" . $row['intervencija_do'] . ">";
                                    echo "<label>Ime kupca:</label>";
                                    echo "<input name='kupac' value=" .$row['ime'].">";
                                    echo "<label>Naplaćena šifra:</label>";
                                    echo "<input name='sifra_naplate' value=" . $row['sifra_naplate'] . ">";
                                    echo "<label>Zatraženi servis:</label>";
                                    echo "<input name='zatrazeno' value=" . $row['zatrazeno'] . ">";
                                    echo "<label>Obavljeni servis:</label>";
                                    echo "<input name='obavljeno' value=" . $row['obavljeno'] . ">";
                                }
                                echo '</form>';
                                ?>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>

                     <?php include 'dijeloviHTML/sections.php'; ?>
<?php include 'dijeloviHTML/footer.php'; ?>
                </div>
            </div>


    </body>
</html>


