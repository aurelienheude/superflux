<?php

$feedArray = [
    'https://www.01net.com/rss/pc-portables/' => "Flux PC Portable",
    'https://www.01net.com/rss/tests/les-derniers-tests/rss-derniers-tests/' => 'Flux Tests',
    'https://www.01net.com/rss/actualites/applis-logiciels/' => 'Flux Applis & Logiciels',
    'https://www.01net.com/rss/actualites/jeux/' => 'Flux Jeux',
    'https://www.01net.com/rss/actualites/securite/' => 'Flux Securité'
]; // Tableau avec les feeds pour le select, les $key seront les xml

class rss
{
    function rss_tools()
    {
?>

        <?php
        if (isset($_POST['submit'])) {

            if (isset($_POST['feed'])) {

                if (isset($_POST['number'])) {
                    $number = $_POST['number'];
                } else {
                    $number = 18; // Si on choisi un feed et aucun nombre, nombre par défaut
                }

                $feed = $_POST['feed'];
                $xml = simplexml_load_file($feed); // On prend le bon feed.

                setlocale(LC_TIME, "fra.UTF8");

                if ($number > 0) {

                    for ($i = 0; $i <= $number; $i++) { // On prend le nombre de post choisi faut encore voir pour l'option "tout".
        ?>
                        <div>
                            <button type="button fade" id="text" class="btn btnNews" data-bs-toggle="modal" data-bs-target="#<?= "modal-$i" ?>">
                                <span class="btnNewsSpan">
                                    <span class="wtBtnImage"><img class="buttonImg" src="<?= $xml->channel->item[$i]->enclosure['url'] ?>" class="card-img-top" alt="..."></span>
                                    <span id="text" class="wtBtnTitle"><?= $xml->channel->item[$i]->title ?></span>
                                    <span class="wtBtnInfos">+ d'infos</span>
                                </span>
                            </button>
                        </div>

                        <div class="modal" id="<?= "modal-$i" ?>" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal_header modal-content">
                                    <div class="modal-header">
                                        <h5 class="text-light modal-title"><?= $xml->channel->item[$i]->title ?></h5>
                                        <button type="button" class="btn_style close"  data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal_body modal-body">
                                        <img src="<?= $xml->channel->item[$i]->enclosure['url'] ?>" class="card-img-top" alt="...">
                                        <br /><br />
                                        
                                        <?php
                                        $toExplode = $xml->channel->item[$i]->description;
                                        $pieces = explode("<br/><br/>", $toExplode);
                                        $date = strtotime($xml->channel->item[$i]->pubDate);
                                        $date2 = strftime("%A %d %B", $date);
                                        ?>
                                        <b><p class="text-center"><?= $date2  ?></p></b><br />

                                        <b><p class="card-text"> <?= $pieces[0] ?> </p></b><br />
                                        

                                    </div>
                                    <div class="modal_footer modal-footer">
                                        <a href="<?= $xml->channel->item[$i]->link ?>" target="_blank" class="btn btn_style">Article</a>
                                        <button type="button" class="btn btn_style" data-bs-dismiss="modal">Close</button>
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