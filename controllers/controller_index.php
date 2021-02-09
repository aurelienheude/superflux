<?php

class rss
{
    function rss_tools()
    {

        $feedArray = [
            'https://www.01net.com/rss/pc-portables/' => "Flux PC Portable",
            'https://www.01net.com/rss/tests/les-derniers-tests/rss-derniers-tests/' => 'Flux Tests',
            'https://www.01net.com/rss/actualites/applis-logiciels/' => 'Flux Applis & Logiciels',
            'https://www.01net.com/rss/actualites/jeux/' => 'Flux Jeux',
            'https://www.01net.com/rss/actualites/securite/' => 'Flux Securité'
        ]; // Tableau avec les feeds pour le select, les $key seront les xml
?>

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
            </select>
            <input type="submit" id="submit" value="submit" name="submit">
        </form>


        <?php
        if (isset($_POST['submit'])) {
            
            if (isset($_POST['feed'])) {

                if (isset($_POST['number'])) {
                    $number = $_POST['number'];
                } else {
                    $number = 18;
                }

                $feed = $_POST['feed'];
                $xml = simplexml_load_file($feed); // On prend le bon feed.
                if ($number > 0) {

                    for ($i = 0; $i <= $number; $i++) { // On prend le nombre de post choisi faut encore voir pour l'option "tout".
        ?>
                        <div>
                            <button type="button fade" class="btn btnNews" data-bs-toggle="modal" data-bs-target="#<?= "modal-$i" ?>">
                            <span class="btnNewsSpan">
                                <span class="wtBtnImage"><img class="buttonImg" src="<?= $xml->channel->item[$i]->enclosure['url'] ?>" class="card-img-top" alt="..."></span>
                                <span class="wtBtnTitle"><?= $xml->channel->item[$i]->title ?></span>
                                <span class="wtBtnInfos">+ d'infos</span>
                                </span>
                            </button>
                        </div>

                        <div class="modal" id="<?= "modal-$i" ?>" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><?= $xml->channel->item[$i]->title ?></h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
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
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
        <?php
                    }
                }
            } else {
                echo "Choisissez au moins un flux";
            }
        }
        ?>
<?php
    }


}

?>