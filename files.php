<?php
include 'init.php';
include 'baza/check_login.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Upute</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="description" content="Description of your site goes here">
        <meta name="keywords" content="Eurotrade, Servis, Eurotrade servis">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/table.css" rel="stylesheet" type="text/css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
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
                                if ($_POST['upload'] == "1") {
                                    $destination = "pdf/" . $_FILES['file']['name'];
                                    move_uploaded_file($_FILES['file']['tmp_name'], $destination);
                                    echo "Ime uploadane datoteke: " . $_FILES['file']['name'];
                                    echo "<br>";
                                    echo "Veličina uploadane datoteke: " . $_FILES['file']['size'] . " bytova";
                                    echo "<br>";
                                    echo "Vrsta uploadane datoteke: " . $_FILES['file']['type'];
                                    header('refresh:3;location:files.php');
                                }
                                ?>
                                <form style="margin-bottom: 15px; margin-top: 15px;width: 442px; margin-right:auto; margin-left:auto;" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="upload" value="1">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-primary btn-file">
                                                <p style="margin-top: 4px;"  class="btn btn-primary btn-file" >Browse&hellip;</p> <input type="file" name="file" multiple>
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" readonly>
                                    </div>
                                    <input class="upload" type="submit" value="Upload">
                                </form>

                                <h1 class="title" style="margin-left: 166px;">Upute za postavljenje<span> kase u rad:</span></h1>

                                <?php
                               
                                if ($handle = opendir('pdf/')) {
                                    
                                    while (false !== ($file = readdir($handle))) {
                                        if (($file != ".") && ($file != "..")) {
                                           $files[]=$file;
                                        }
                                    }
                                    
                                    
                                    sort($files);
                                    foreach($files as $file){
                                      $mod = @filemtime("pdf/$file");
                                           
                                            $thelist .= '<tr>'
                                                    . '<td>'
                                                    . '<a href="pdf/' . $file . '"  target="_blank">' . $file . '</a>'
                                                    . '</td>'
                                                    . '<td>' . pathinfo("pdf/$file ", PATHINFO_EXTENSION) . '</td>'
                                                    . '<td>' . filesize_formatted($file) . '</td>'
                                                    . '<td>' . date("d. m. Y H:i:s.", $mod) . '</td>'
                                                    . '</tr>';
                                    }
                                    
                                    closedir($handle);
                                }
                                ?>
                                <table class="files">
                                    <thead>
                                    <th>Datoteka</th>
                                    <th>Tip</th>
                                    <th>Veličina</th>
                                    <th>Izmijenjeno</th>
                                    </thead>
                                    
                                    
                                    <?= $thelist ?>
                                    
                                </table>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>

                    <?php include 'dijeloviHTML/sections.php'; ?>
                </div>
            </div>
        </div>
        <?php include 'dijeloviHTML/footer.php'; ?>
        <script>
            $(document).on('change', '.btn-file :file', function () {
                var input = $(this),
                        numFiles = input.get(0).files ? input.get(0).files.length : 1,
                        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [numFiles, label]);
            });

            $(document).ready(function () {
                $('.btn-file :file').on('fileselect', function (event, numFiles, label) {

                    var input = $(this).parents('.input-group').find(':text'),
                            log = numFiles > 1 ? numFiles + ' files selected' : label;

                    if (input.length) {
                        input.val(log);
                    } else {
                        if (log)
                            alert(log);
                    }

                });
            });
        </script>

    </body>
</html>



