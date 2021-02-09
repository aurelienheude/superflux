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
</head>

<body>

    <nav>
        <div>
            <h1>SUPER FLUX</h1>
        </div>
        <div id="theme_name" class="theme_name">
            <?php echo "thème dark"; ?>
        </div>
        <div class="configuration_menu">
            <a href="#"><i class="fas fa-cog fa-3x"></i></a>
        </div>

    </nav>

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
    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <!----------------------------------------------------------------------------------------   FICHIER JS   ------------------------------------------------------------------------------->
    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>