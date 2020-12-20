<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Partis jurassien</title>
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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
<section style="padding: 2%">
        <h1 class="uk-heading-large">Partis politiques jurassiens 2021 - 2025</h1>
        <hr>
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
                        <p><b>Sièges au Gouvernement Jurassien : </b>1</p>
                        <p><b>Sièges au Parlement Jurassien : </b>15</p>
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
                                <img width="100" height="100" src="<?php echo $ps ?>" alt="Parti socialiste Jura">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">PSJ (Parti Socialiste Jurassien)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques : </b>Centre-gauche</p>
                        <p><b>Sièges au Gouvernement Jurassien : </b>2</p>
                        <p><b>Sièges au Parlement Jurassien : </b>13</p>
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
                                <img width="100" height="100" src="<?php echo $plr ?>" alt="PLR Jura">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">PLRJ (Parti Libéral-Radical Jurassien)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques : </b>Centre-droit</p>
                        <p><b>Sièges au Gouvernement Jurassien : </b>1</p>
                        <p><b>Sièges au Parlement Jurassien : </b>8</p>
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
                                <img width="100" height="100" src="<?php echo $udc ?>" alt="UDC Jura">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">UDC (Union démocratique du centre)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques : </b>Droite</p>
                        <p><b>Sièges au Gouvernement Jurassien : </b>0</p>
                        <p><b>Sièges au Parlement Jurassien : </b>7</p>
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
                                <img width="100" height="100" src="<?php echo $verts ?>" alt="Verts Jura">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">Verts (Les Verts Jurassiens)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques : </b>Gauche</p>
                        <p><b>Sièges au Gouvernement Jurassien : </b>0</p>
                        <p><b>Sièges au Parlement Jurassien : </b>7</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="<?php echo $siteVertsJ ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>
                    </div>
                </div>
            </div>

            <!--<div>
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
                        <p><b>Sièges au Gouvernement Jurassien : </b>0</p>
                        <p><b>Sièges au Parlement Jurassien : </b>3</p>
                    </div>
                    <div class="uk-card-footer">
                        
                    </div>
                </div>
            </div>-->

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
                        <p><b>Sièges au Gouvernement Jurassien : </b>1</p>
                        <p><b>Sièges au Parlement Jurassien : </b>6</p>
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
                                <img width="100" height="100" src="<?php echo $pst ?>" alt="CS-POP Jura">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">CS-POP (Combat socialiste - Parti Ouvrier Populaire)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques : </b>Extrême gauche</p>
                        <p><b>Sièges au Gouvernement Jurassien : </b>0</p>
                        <p><b>Sièges au Parlement Jurassien : </b>2</p>
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
                                <img width="100" height="100" src="<?php echo $pvl ?>" alt="Verts Libéraux Jura">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">Verts-Libéraux</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques : </b>Centre</p>
                        <p><b>Sièges au Gouvernement Jurassien : </b>0</p>
                        <p><b>Sièges au Parlement Jurassien : </b>2</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="<?php echo $sitePVL ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>
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