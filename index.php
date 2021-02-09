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
    <nav class="navbar_style navbar navbar-dark bg-dark px-2">
        <div class="container-fluid">
            <h1 class="nav-brand h1 text-light">SUPER FLUX</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h5 class="text-white h4">Collapsed content</h5>
            <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
    </div>



    <section class="cards">
        <header></header>
    </section>


    <!-- J'ai mit un form pour tester mais je pense pas qu'on aura la meme chose -->
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

        <p>Feed</p>
        <?php
        foreach ($feedArray as $key => $value) { ?>
            <div>
                <input type="radio" id="<?= $key ?>" name="feed" value="<?= $key ?>" <?= isset($_POST['feed']) && $_POST['feed'] == $key ? 'selected' : '' ?>>
                <label for="<?= $value ?>"><?= $value ?></label>
            </div>

            <div>
                <input type="radio" id="tout" name="number" value="20" <?= isset($_POST['number']) && $_POST['number'] == '20' ? 'checked' : '' ?> ?>
                <label for="tout">tout</label>
            </div>

            <p>Feed</p>
            <?php
            foreach ($feedArray as $key => $value) { ?>
                <div>
                    <input type="radio" id="<?= $key ?>" name="feed" value="<?= $key ?>" <?= isset($_POST['feed']) && $_POST['feed'] == $key ? 'selected' : '' ?>>
                    <label for="<?= $value ?>"><?= $value ?></label>
                </div>
            <?php
            }
            ?>
            </select>
            <input type="submit" id="submit" value="submit" name="submit">
        </form>


        <?php
        if (isset($_POST['submit'])) {

            $number = $_POST['number'];
            $feed = $_POST['feed'];
            $xml = simplexml_load_file($feed); // On prend le bon feed.


            if ($number > 0) {

                for ($i = 0; $i <= $number; $i++) { // On prend le nombre de post choisi faut encore voir pour l'option "tout".
        ?>
                    <div>
                        <button type="button fade" class="btn btn-primary" data-toggle="modal" data-target="xxxx">
                            <?= $xml->channel->item[$i]->title ?>
                        </button>
                    </div>
                    <div class="modal" id="xxxx" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><?= $xml->channel->item[$i]->title ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="<?= $xml->channel->item[$i]->enclosure['url'] ?>" class="card-img-top" alt="...">

                                    <?php
                                    $toExplode = $xml->channel->item[$i]->description;
                                    $pieces = explode("<br/><br/>", $toExplode);
                                    ?>
                                    <p class="card-text"><?= $pieces[0] ?> <br>
                                        <?= $xml->channel->item[$i]->link->pubDate ?> </p>
                                </div>
                                <div class="modal-footer">
                                    <a href="<?= $xml->channel->item[$i]->link ?>" target="_blank" class="btn btn-primary">Article</a>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <?php
            }
        }
    }
    ?>

    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <!----------------------------------------------------------------------------------------   FICHIER JS   ------------------------------------------------------------------------------->
    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>