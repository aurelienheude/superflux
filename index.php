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
    <nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SUPER FLUX</a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>
<<<<<<< HEAD
    
    <div class="configuration_style navbar-collapse collapse" id="navbarsExample01">
                navbar-collapse
            </div>
    <section class="container">
        <article class="row">
        </article>
    </section>
=======

    <div class="container">

        <section class="">

        </section>

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
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $xml->channel->item[$i]->enclosure['url'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $xml->channel->item[$i]->title ?></h5>
                            <?php
                            $toExplode = $xml->channel->item[$i]->description;
                            $pieces = explode("<br/><br/>", $toExplode);
                            ?>
                            <p class="card-text"><?= $pieces[0] ?> <br>
                                <?= $xml->channel->item[$i]->link->pubDate ?> </p>
                            <a href="<?= $xml->channel->item[$i]->link ?>" target="_blank" class="btn btn-primary">Article</a>
                        </div>
                    </div>
        <?php
                }
            }
        }
        ?>













    </div>
>>>>>>> 95210ff16b8c9d59e0552990261edb6392edaa75
    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <!----------------------------------------------------------------------------------------   FICHIER JS   ------------------------------------------------------------------------------->
    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>