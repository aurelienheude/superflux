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

<body id="body">
    <!------------------------------------------------------------------------------------------------------------------------->
    <!------------------------------------------------------------------------------------------------------------------------->
    <!------------------------------------------------------------------------------------------------------------------------->
        <nav class="navbar_style navbar" id="navbar" aria-label="First navbar example">
            <div class="container-fluid">
                <a id="branding" class="navbar_style_a navbar-brand" href="https://youtu.be/dQw4w9WgXcQ">SUPER FLUX</a>
                <button class="navbar_style_button hover-no-border" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="config_button fas fa-cog fa-2x"></i>
                </button>
            </div>
        </nav>

        <!------------------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------------->

        <div class="collapse" id="navbarToggleExternalContent">
            <form id="container_parent" class="form_style" action="index.php" method="post">

                <div id="container_parent" class="container_parent container-fluid">
                    <div class="row">
                        <!---------------------------------------------------------------------------->
                        <div class="col-xl-4 col_child p-5 d-flex justify-content-center">
                            <div class="inner text-center">
                                <h2>Choisir un thème</h2>
                                <div class="button_group">
                                    <input id="white_mods_button" type="button" class="btn btn_style" onclick="white_mods();" value="LIGHT">
                                    <input id="dark_mods_button" type="button" class="btn btn_style" onclick="dark_mods();" value="DARK">
                                    <input id="default_button" type="button" class="btn btn_style" onclick="default_mods();" value="NORMAL">
                                </div>

                            </div>
                        </div>
                        <!---------------------------------------------------------------------------->
                        <div class="col-xl-4 col_child p-5 d-flex justify-content-center">
                            <div class="inner text-center">
                                <h2>Choisir un Flux</h2>
                                <?php
                                foreach ($feedArray as $key => $value) { ?>
                                    <input type="radio" id="<?= $key ?>" name="feed" value="<?= $key ?>" <?= isset($_POST['feed']) && $_POST['feed'] == $key ? 'checked' : '' ?>>
                                    <label for="<?= $value ?>"><?= $value ?></label>
                                <?php } ?>

                            </div>
                        </div>
                        <!---------------------------------------------------------------------------->
                        <div class="col-xl-4 col_child p-5 d-flex justify-content-center">
                            <div class="inner text-center">
                                <h2>Nombre de flux</h2>
                                <div>
                                    <input type="radio" id="5" name="number" value="4" <?= isset($_POST['number']) && $_POST['number'] == '5' ? 'checked' : '' ?> ?>
                                    <label for="5">5</label>
                                </div>

                                <div>
                                    <input type="radio" id="10" name="number" value="9" <?= isset($_POST['number']) && $_POST['number'] == '10' ? 'checked' : '' ?> ?>
                                    <label for="10">10</label>
                                </div>

                                <div>
                                    <input type="radio" id="tout" name="number" value="18" <?= isset($_POST['number']) && $_POST['number'] == '18' ? 'checked' : '' ?> ?>
                                    <label for="tout">tout</label>
                                </div>
                                <input type="submit" class="btn btn_style" id="submit" value="SUBMIT" name="submit">
                            </div>
                        </div>
                        <!--------------------------------------------------------------------------->
                    </div>
                </div>
            </form>
        </div>

        <div id="fake_body" class="fake_body container">
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