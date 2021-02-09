<?php include "controllers/controller_index.php"; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPER FLUX</title>

    <!-- PAGE CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar_style navbar" aria-label="First navbar example">
        <div class="container-fluid">
            <a class="navbar_style_a navbar-brand" href="#">SUPER FLUX</a>
            <button class="navbar_style_button hover-no-border" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="config_button fas fa-cog fa-2x"></i>
            </button>
        </div>
    </nav>

    <div class="collapse" id="navbarToggleExternalContent">
        <div class="container_parent container-fluid m-0 p-0 ">
            <div class="col_child p-4">
                <div class="inner">

                    <h2>Choisir un thème</h2>
                    <hr>
                </div>
            </div>
            <div class="col_child p-4">
                <div class="inner">

                    <h2>Séléctionnez le flux</h2>
                    <hr>
                </div>
            </div>
            <div class="col_child p-4">
                <div class="inner">

                    <h2>Choisir le nombre de flux</h2>
                    <hr>
                </div>
            </div>
        </div>

    </div>

    <div class="container">

        <?php
        $obj_rss = new rss;
        $obj_rss->rss_tools();
        ?>


    </div>
    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <!----------------------------------------------------------------------------------------   FICHIER JS   ------------------------------------------------------------------------------->
    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>