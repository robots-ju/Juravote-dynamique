<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Partis communaux (Jura)</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssinstances; ?>"/>
        
        <script src="<?php echo $jsUikit ?>"></script>
        <script src="<?php echo $jsUikitIcons ?>"></script>
        <script src="<?php echo $jsUikitMin ?>"></script>
        <script src="<?php echo $jsUikitIconsMin ?>"></script>


        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166072477-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'UA-166072477-1');
        </script>
    </head>
<body>
<header>
            <div class="navbar-normal">
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
<section style="padding: 2%">
        <h1 class="uk-heading-large">Présentation des partis communaux (Jura)</h1>
        <hr>
        <h3 class="uk-text-center" style="padding-bottom: 2%">Cette liste a été établie selon les informations à notre disposition. En effet, les données ne sont pas disponibles
        pour toutes les communes !</h3>
        <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $pdc ?>" alt="PDC Jura">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">PDC (Parti Démocrate-Chrétien)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques : </b>Centre-droit</p>
                        <p><b>Sièges dans des Exécutifs : </b>23</p>
                        <p><b>Sièges dans des Législatifs : </b>44</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="<?php echo $sitePDCJ ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $plr ?>" alt="PLR Jura">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">PLRJ (Parti Libéral-Radical Jurassien)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques : </b>Centre-droit</p>
                        <p><b>Sièges dans des Exécutifs : </b>13</p>
                        <p><b>Sièges dans des Législatifs : </b>14</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="<?php echo $sitePLRJ ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $pcsi ?>" alt="PCSI Jura">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">PCSI (Parti chrétien-social indépendant)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques : </b>Centre-droit</p>
                        <p><b>Sièges dans des Exécutifs : </b>10</p>
                        <p><b>Sièges dans des Législatifs : </b>21</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="<?php echo $sitePCSIJ ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $ps ?>" alt="Parti socialiste Jura">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">PSJ (Parti Socialiste Jurassien)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques : </b>Centre-gauche</p>
                        <p><b>Sièges dans des Exécutifs : </b>9</p>
                        <p><b>Sièges dans des Législatifs : </b>35</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="<?php echo $sitePSJ ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>
                    </div>
                </div>
            </div>          
            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $udc ?>" alt="UDC Jura">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">UDC (Union démocratique du centre)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques : </b>Droite</p>
                        <p><b>Sièges dans des Exécutifs : </b>6</p>
                        <p><b>Sièges dans des Législatifs : </b>7</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="<?php echo $siteUDCJ ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto image-parti">
                                <img width="100" height="100" alt="">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">Sans partis - indépendants</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques : </b>---</p>
                        <p><b>Sièges dans des Exécutifs : </b>5</p>
                        <p><b>Sièges dans des Législatifs : </b>4</p>
                    </div>
                    <div class="uk-card-footer">
                        
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $pst ?>" alt="CS-POP Jura">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">CS-POP (Combat socialiste - Parti Ouvrier Populaire)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques : </b>Extrême gauche</p>
                        <p><b>Sièges dans des Exécutifs : </b>1</p>
                        <p><b>Sièges dans des Législatifs : </b>0</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="<?php echo $siteCSPOPJ ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $verts ?>" alt="Verts Jura">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">Verts (Les Verts Jurassiens)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques : </b>Gauche</p>
                        <p><b>Sièges dans des Exécutifs : </b>1</p>
                        <p><b>Sièges dans des Législatifs : </b>0</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="<?php echo $siteVertsJ ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <!--<div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $verts ?>" alt="Verts Jura">
                            </div>-->
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">Haute-Sorne Avenir</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques : </b>---</p>
                        <p><b>Sièges dans des Exécutifs : </b>2</p>
                        <p><b>Sièges dans des Législatifs : </b>7</p>
                    </div>
                    <div class="uk-card-footer">
                        <!--<a href="<?php echo $siteVertsJ ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>-->
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <!--<div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $verts ?>" alt="Verts Jura">
                            </div>-->
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">Val-Terbi Ensemble</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques : </b>---</p>
                        <p><b>Sièges dans des Exécutifs : </b>0</p>
                        <p><b>Sièges dans des Législatifs : </b>9</p>
                    </div>
                    <div class="uk-card-footer">
                        <!--<a href="<?php echo $siteVertsJ ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>-->
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <!--<div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $verts ?>" alt="Verts Jura">
                            </div>-->
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">Alternative de Gauche (Delémont)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques : </b>Gauche</p>
                        <p><b>Sièges dans des Exécutifs : </b>0</p>
                        <p><b>Sièges dans des Législatifs : </b>7</p>
                    </div>
                    <div class="uk-card-footer">
                        <!--<a href="<?php echo $siteVertsJ ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>-->
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <!--<div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $verts ?>" alt="Verts Jura">
                            </div>-->
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">COVAL (Val-Terbi)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques : </b>---</p>
                        <p><b>Sièges dans des Exécutifs : </b>0</p>
                        <p><b>Sièges dans des Législatifs : </b>4</p>
                    </div>
                    <div class="uk-card-footer">
                        <!--<a href="<?php echo $siteVertsJ ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>-->
                    </div>
                </div>
            </div>          
        </div>
    </section>
</main>
</body>


<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>