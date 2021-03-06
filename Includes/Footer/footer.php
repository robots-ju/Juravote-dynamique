<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include '/Juravote-Dynamique/variables.php'; ?>
        <link rel="stylesheet" href="/Juravote-Dynamique/Includes/Footer/footer.css">
        <base target="_parent">
    </head>
    <body>  
        <footer class="footer" style="padding-top: 5%;"> 
            <div class="uk-grid-collapse uk-child-width-1-2@m uk-text-left uk-flex uk-grid-match" uk-grid>
                <div class="nav-rapide" style="padding: 2%;">
                    <div>
                        <h3>Navigation rapide</h3>
                        <hr>
                    </div>
                    <div class="uk-grid-collapse uk-child-width-expand@l uk-light" uk-grid style="padding: 2%;">
                        <div>
                            <p>Autorités politiques (Canton du Jura)</p>
                            <ul class="uk-nav uk-nav-default grid-nav">
                                <li><a class="uk-button uk-button-text" href="<?php echo $PHPGouvernementJU20212025 ?>">Gouvernement jurassien</a></li>
                                <li><a class="uk-button uk-button-text" href="<?php echo $PHPParlementJU20212025 ?>">Parlement jurassien</a></li>
                                <li><a class="uk-button uk-button-text" href="<?php echo $PHPparlementCH ?>">Représentants-es aux Chambres fédérales</a></li>  
                            </ul>
                        </div>
                        <div>
                            <p>Autres pages</p>
                            <ul class="uk-nav uk-nav-default grid-nav">
                                <li><a class="uk-button uk-button-text" href="<?php echo $PHPpartisCH ?>">Partis politiques suisses</a></li>
                                <li><a class="uk-button uk-button-text" href="<?php echo $PHPpartisJU20212025 ?>">Partis politiques jurassiens</a></li>
                                <li><a class="uk-button uk-button-text" href="<?php echo $PHPpartisCO ?>">Partis politiques communaux</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="contact" style="padding: 2%;">
                    <div>
                        <h3>Contact @JuraVote</h3>
                        <hr>
                    </div>
                    <div class="uk-light uk-child-width-1-4 grid-nav" style="padding-bottom: 2%" uk-grid> 
                        <li class="icon_resaux"><a href="https://twitter.com/JuraVote/" target="_blank" uk-icon="icon: twitter; ratio: 2"></a></li>
                        <li class="icon_resaux"><a href="https://www.instagram.com/juravote/?hl=fr" target="_blank" uk-icon="icon: instagram; ratio: 2"></a></li>
                        <li class="icon_resaux"><a href="https://www.facebook.com/JuraVote2020/" target="_blank" uk-icon="icon: facebook; ratio: 2"></a></li>
                        <!--<li><a href="https://discord.gg/feYcNDY" target="_blank" ><img src="<?php echo $iconDiscord ?>" id="Discord" alt="Logo Discord Juravote" height= "50px" width= "50px"></a></li>-->
                        <li><a href="<?php echo $PHPequipe ?>" uk-icon="icon: file-edit; ratio: 2"></a></li>
                    </div>
                    <ul class="uk-nav uk-nav-default grid-nav">
                        <hr>
                        <li><p>Juravote est hébergé exclusivement en Suisse, de manière totalement sécurisée pour l'utilisateur et
                        les données sont protégées par le droit suisse.
                        <li><p>© Juravote 2020</p></li>
                    </ul>
                </div>
            </div>   
        </footer>
    </body>
</html>