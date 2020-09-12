<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include '/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Partis suisses</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssinstances; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssbadges; ?>"/>
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
        <h1 class="uk-heading-large">Présentation des partis fédéraux </h1>
        <hr>
        <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $udc ?>" alt="Union démocratique du Centre">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">UDC (Union Démocratique du Centre)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques :</b> Droite</p>
                        <p><b>Sièges au Conseil National : </b>53</p>
                        <p><b>Sièges au Conseil des Etats : </b>6</p>
                        <p><b>Sièges au Conseil fédéral : </b>2</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="<?php echo $siteUDC ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $ps ?>" alt="Parti Socialiste">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">PS (Parti Socialiste)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques :</b> Centre-gauche</p>
                        <p><b>Sièges au Conseil National : </b>39</p>
                        <p><b>Sièges au Conseil des Etats : </b>9</p>
                        <p><b>Sièges au Conseil fédéral : </b>2</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="<?php echo $sitePS ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $plr ?>" alt="Parti Libéral Radical">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">PLR (Parti Libéral Radical)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques :</b> Centre-droit</p>
                        <p><b>Sièges au Conseil National : </b>29</p>
                        <p><b>Sièges au Conseil des Etats : </b>12</p>
                        <p><b>Sièges au Conseil fédéral : </b>2</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="<?php echo $sitePLR ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $verts ?>" alt="Parti Ecologiste Suisse">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">PES (Parti Ecologiste)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques :</b> Gauche (écologiste)</p>
                        <p><b>Sièges au Conseil National : </b>28</p>
                        <p><b>Sièges au Conseil des Etats : </b>5</p>
                        <p><b>Sièges au Conseil fédéral : </b>0</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="<?php echo $sitePES ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $pdc ?>" alt="Parti Démocrate Chrétien">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">PDC (Parti Démocrate Chrétien)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques :</b> Centre-droit</p>
                        <p><b>Sièges au Conseil National : </b>25</p>
                        <p><b>Sièges au Conseil des Etats : </b>13</p>
                        <p><b>Sièges au Conseil fédéral : </b>1</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="<?php echo $sitePDC ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>
                    </div>
                </div>
            </div>
            
            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $pvl ?>" alt="Verts Libéraux">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">PVL (Les Verts Libéraux)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques :</b> Centre</p>
                        <p><b>Sièges au Conseil National : </b>16</p>
                        <p><b>Sièges au Conseil des Etats : </b>0</p>
                        <p><b>Sièges au Conseil fédéral : </b>0</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="<?php echo $sitePVL ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $pbd ?>" alt="Parti Bourgeois Démocratique">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">PBD (Parti Bourgeois Démocratique)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques :</b> Centre-droit</p>
                        <p><b>Sièges au Conseil National : </b>3</p>
                        <p><b>Sièges au Conseil des Etats : </b>0</p>
                        <p><b>Sièges au Conseil fédéral : </b>0</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="<?php echo $sitePBD ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $pev ?>" alt="Parti Evangélique">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">PEV (Parti Evangélique)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques :</b> Centre-gauche</p>
                        <p><b>Sièges au Conseil National : </b>3</p>
                        <p><b>Sièges au Conseil des Etats : </b>0</p>
                        <p><b>Sièges au Conseil fédéral : </b>0</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="<?php echo $sitePEV ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $lega ?>" alt="LEGA">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">LEGA (Ligue des Tessinois)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques :</b> Droite</p>
                        <p><b>Sièges au Conseil National : </b>1</p>
                        <p><b>Sièges au Conseil des Etats : </b>0</p>
                        <p><b>Sièges au Conseil fédéral : </b>0</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="<?php echo $siteLEGA ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $pst ?>" alt="CS-POP">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">POP-PST (Parti du Travail)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques :</b> Extrême gauche</p>
                        <p><b>Sièges au Conseil National : </b>1</p>
                        <p><b>Sièges au Conseil des Etats : </b>0</p>
                        <p><b>Sièges au Conseil fédéral : </b>0</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="<?php echo $sitePOPPST ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto image-parti">
                                <img width="100" height="100" src="<?php echo $sol ?>" alt="solidaritéS">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">SOL. (solidaritéS)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques :</b> Extrême gauche</p>
                        <p><b>Sièges au Conseil National : </b>1</p>
                        <p><b>Sièges au Conseil des Etats : </b>0</p>
                        <p><b>Sièges au Conseil fédéral : </b>0</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="<?php echo $siteSOL ?>" target="_blank" class="uk-button uk-button-text">Site internet du parti</a>
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default card">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto image-parti">
                                <img width="100" height="100" alt="Sans partis">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">Sans partis</h3>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><b>Tendances politiques :</b> -</p>
                        <p><b>Sièges au Conseil National : </b>0</p>
                        <p><b>Sièges au Conseil des Etats : </b>1</p>
                        <p><b>Sièges au Conseil fédéral : </b>0</p>
                    </div>
                    <div class="uk-card-footer">
                        
                    </div>
                </div>
            </div>       
        </div>
    </section>
</main>
</body>


<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>