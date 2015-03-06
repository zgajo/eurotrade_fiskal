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
                                if ($_POST['upload'] == "1"){
                                    $destination = "pdf/".$_FILES['file']['name'];
                                    move_uploaded_file($_FILES['file']['tmp_name'], $destination);
                                   echo "Ime uploadane datoteke: ".$_FILES['file']['name']; 
                                   echo "<br>";
                                   echo "Veličina uploadane datoteke: ".$_FILES['file']['size']." bytova";
                                   echo "<br>";
                                   echo "Vrsta uploadane datoteke: ".$_FILES['file']['type'];
                                }
                                ?>
                                <form method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="upload" value="1">
                                    <input type="file" name="file">
                                    <input type="submit" value="Upload">
                                </form>
                                <?php
if ($handle = opendir('pdf/')) {
    while (false !== ($file = readdir($handle)))
    {
        if (($file != ".") 
         && ($file != ".."))
        {
            $thelist .= '<LI><a href="pdf/'.$file.'">'.$file.'</a>';
        }
    }

    closedir($handle);
}
?>

<P>List of files:</p>
<UL>
<P><?=$thelist?></p>
</UL>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>

                    <div class="sections">
                        <div class="section1">
                            <h3>Kupci</h3>
                            <p>&nbsp;</p>
                            <p>Status ugovora/
                                kupci<br>
                                Novi kupac<br>
                                Izrada novog ugovora
                            </p>
                            <p>&nbsp;</p>
                            <p><a href="#" class="more">Više</a></p>
                        </div>
                        <div class="section2">
                            <h3>Intervencije</h3>
                            <p>&nbsp;</p>
                            <p>Sve intervencije i izrada novih<br>
                            </p>
                            <p>&nbsp;</p>
                            <p><a href="#" class="more">Više</a></p>
                        </div>
                        <div class="section3">
                            <h3>Postavljanje kase u rad</h3>
                            <p>&nbsp;</p>
                            <p>Instrukcije postavljanja kase u rad i najčešći problemi koji se javljaju na kasi<br>
                            </p>
                            <p>&nbsp;</p>
                            <p><a href="#" class="more">Više</a></p>
                        </div>
                        <div class="section4">
                            <h3>Uputstva za kupca</h3>
                            <p>&nbsp;</p>
                            <p>Kratke upute made by: Njićpra<br>
                                Upute od digitrona
                            </p>
                            <p>&nbsp;</p>
                            <p><a href="#" class="more">Više</a></p>
                        </div>
                    </div>
<?php include 'dijeloviHTML/footer.php'; ?>
                </div>


                </body>
                </html>



