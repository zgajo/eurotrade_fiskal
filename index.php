<?php
include 'init.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eurotrade Fiskal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="description" content="Description of your site goes here">
        <meta name="keywords" content="Eurotrade, Servis, Eurotrade servis">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/search.js"></script>
    </head>
    <body>
        <div class="main">
            <?php include 'dijeloviHTML/header.php'; ?>
            <div class="header-img"><img src="images/header.jpg"  style="margin-bottom: 15px;  " alt="" height="225" width="100%"></div>

            <div class="page-out">

                <div class="content">

                    <div class="left-out">
                        <div class="left-in">
                            <div class="left-panel">
                                <h1 class="title">Dobrodošli <span>na našu stranicu</span></h1>
                                <p>Za sva pitanja i probleme kontaktirati Darka Pranjića ili Mladena Vitulića. Oni su najbolji! <br>
                                    Trenutno je u izradi stranica za ubacivanje novih kupaca
                                </p>
                                <p>&nbsp;</p>
                                <span id="box">
                                    <input type="text" id="search_box"><button id="search_button">Pretraži</button>
                                </span>
                                <div id="search_result">

                                </div>
                                
                                <p>&nbsp;</p>
                                <iframe  width="420" height="315" src="https://www.youtube.com/embed/055hupVq4G8?autoplay=1"  frameborder="0" allowfullscreen></iframe>
                                <p>&nbsp;</p>

                            </div>
                        </div>
                    </div>
                    <div class="right-out">
                        <div class="right-in">
                            <div class="right-panel">
                                <div class="right-block">
                                    <h2 class="title">Kategorije</h2>
                                    <ul class="title">
                                        <li><a href="nova_intervencija.php">Nova intervencija</a></li>
                                        <li><a href="novi_kupac.php">Novi kupac</a></form></li>
                                        <li><a href="novi_ugovor.php">Novi ugovor</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include 'dijeloviHTML/sections.php'; ?>


                </div>

            </div>

        </div>
        <?php include 'dijeloviHTML/footer.php'; ?>
    </body>
</html>