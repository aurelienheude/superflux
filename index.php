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
    <div class="main">
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
                <div class="row p-0 m-0">
                    <!---------------------------------------------------------------------------->
                    <div class="col-lg-4 col_child p-5 d-flex justify-content-center bg-primary">
                        <div class="inner">
                            <h2>Choisir un thème</h2>

                        </div>
                    </div>
                    <div class="col-lg-4 p-5 col_child d-flex justify-content-center bg-success">
                        <div class="inner inner_center">
                            <h2>Séléctionnez le flux</h2>

                        </div>
                    </div>
                    <div class="col-lg-4 col_child p-5 d-flex justify-content-center bg-primary">
                        <div class="inner">
                            <h2>Choisir le nombre de flux</h2>

                        </div>
                    </div>
                    <!---------------------------------------------------------------------------->
                    <div class="col-lg-4 col_child p-5 d-flex justify-content-center bg-primary">
                        <div class="inner">
                            <input id="darkmods_button" type="button" onclick="change()" value="dark mode">
                        </div>
                    </div>
                    <div class="col-lg-4 col_child p-5 d-flex justify-content-center bg-primary">
                        <div class="inner">
                            <h2>Choisir le nombre de flux</h2>
                            
                            <form action="index.php" method="post">
                                <p> Nombre de posts </p>
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

                                <p>Feed</p>
                                <?php
                                foreach ($feedArray as $key => $value) { ?>
                                    <div>
                                        <input type="radio" id="<?= $key ?>" name="feed" value="<?= $key ?>" <?= isset($_POST['feed']) && $_POST['feed'] == $key ? 'checked' : '' ?>>
                                        <label for="<?= $value ?>"><?= $value ?></label>
                                    </div>
                                <?php
                                }
                                ?>

                                <input type="submit" id="submit" value="submit" name="submit">
                            </form>

                        </div>
                    </div>
                    <div class="col-lg-4 col_child p-5 d-flex justify-content-center bg-primary">
                        <div class="inner">
                            <h2>Choisir le nombre de flux</h2>

                        </div>
                    </div>
                    <!---------------------------------------------------------------------------->
                </div>
            </div>
        </div>



        <div class="container">
            <?php
            $obj_rss = new rss;
            $obj_rss->rss_tools();
            ?>
        </div>

    </div>
    </div>
    <div>
        <?php
        include('footer.php');
        ?>
    </div>

    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <!----------------------------------------------------------------------------------------   FICHIER JS   ------------------------------------------------------------------------------->
    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>