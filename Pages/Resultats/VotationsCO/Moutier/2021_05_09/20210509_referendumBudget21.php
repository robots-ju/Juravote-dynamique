<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votation Moutier</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssbadges; ?>"/>
        
        <script src="<?php echo $jsUikit ?>"></script>
        <script src="<?php echo $jsUikitIcons ?>"></script>
        <script src="<?php echo $jsUikitMin ?>"></script>
        <script src="<?php echo $jsUikitIconsMin ?>"></script>
        <script src="//cdn.amcharts.com/lib/4/core.js"></script>
        <script src="//cdn.amcharts.com/lib/4/charts.js"></script>
        <script src="//cdn.amcharts.com/lib/4/themes/animated.js"></script>

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
    <section class="uk-text-justify" style="padding: 2%;">
        <h1 class="uk-heading-large">Référendum contre le budget 2021 de la Commune de Moutier</h1>
        <hr>
        <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis et des autorités</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li>            
                    <div class="uk-column-1-2@m uk-column-1-1@s">
                        <h3>Historique</h3>
                        <hr>
                        <p class="uk-text-justify">En décembre dernier, le Conseil de ville a validé le budget 2021 de la Commune de Moutier,
                        sur proposition du Conseil communal. Par la suite, un comité référendaire composé de citoyens-nes
                        de la Commune a lancé le référendum. Ils ont réussi à récolter un nombre de suffisants de signatures
                        (en l'occurence 244) pour que la demande de référendum aboutisse. C'est la raison pour laquelle
                        le peuple est appelé à voter sur le budget 2021 de la Commune de Moutier le 9 mai prochain.
                        </p>    

                        <h3>La question qui vous est posée :</h3>
                        <hr>
                        <b><p style="padding-bottom: 10%;"  style="padding-bottom: 10%">Acceptez-vous le budget 2021 ?</p></b>           

                        <h3>Le budget en résumé</h3>    
                        <hr>
                        <p class="uk-text-justify"><b>Le budget détaillé est disponible ci-dessous !</b></p>
                        <ul>
                            <li>Quotité d'impôt de <b>1.94</b> (inchangée)</li>
                            <li>Taxe immobilière de <b>1,5 o/oo</b> (inchangée)</li>
                            <li>Taxe d’exemption pour le CRISM de :</li>
                                <ul>
                                    <li><b>2,65 %</b> (inchangée) de l’impôt d’Etat pour les contribuables concernés figurant 
                                    au registre ordinaire des impôts (minimum Fr. 20.— / maximum Fr. 400.—)</li>
                                    <li><b>1,0 %</b> (inchangée) du total des impôts encaissés pour les contribuables concernés 
                                    soumis à l’imposition à la source (minimum Fr. 20.— / maximum Fr. 400.—)</li>
                                </ul>
                            <li>Amortissement du patrimoine administratif enregistré au 1er janvier 2016 de manière 
                            linéaire, pendant les <b>16 prochaines années, à un taux de 6.25 % prévoyant un excédent de 
                            charges de Fr. 1'384’749.— du Compte global et prévoyant un excédent de charges de Fr. 
                            1'372’334.— du Compte général.</b></li>
                        </ul>   
                    </div>                                     
                </li>

                <li>         
                    <div class="uk-child-width-1-2@m" uk-grid>
                        <div>
                            <h2>Autorités</h2>             
                            <iframe title="Recommandations de vote des autorités_Moutier_20210509" aria-label="chart" id="datawrapper-chart-5P4sP" src="https://datawrapper.dwcdn.net/5P4sP/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                            </script>
                        </div>

                        <div>
                            <h2>Partis politiques de Moutier</h2>
                            <iframe title="Recommandations de vote des partis de Moutier_20210509" aria-label="chart" id="datawrapper-chart-nWKg9" src="https://datawrapper.dwcdn.net/nWKg9/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                            </script>
                        </div>   
                    </div>               
                </li>  

                <li>            
                <div class="uk-child-width-1-1@m uk-grid-small uk-grid-match" uk-grid>
                    <h4>Les arguments seront bientôt disponibles !</h4>
                    <!--<div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil de ville</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>#</p>
                        </div>
                    </div>-->
                </li>
                <li>
                <div class="uk-child-width-1-1@m uk-grid-small uk-grid-match" uk-grid>
                    <h4>Les arguments seront bientôt disponibles !</h4>
                    <!--<div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>-->
                </li>
            </ul>
    </section>
</main>
</body>


<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>