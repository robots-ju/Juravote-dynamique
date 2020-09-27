<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Initiative "de limitation"</title>
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
    <section style="padding: 2%;">
        <h1 class="uk-heading-large">Initiative populaire "de limitation"</h1>
        <hr>
        <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
            <button class="uk-button uk-button-default" type="button">Résumé</button>
            <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
            <button class="uk-button uk-button-default" type="button">Arguments pour</button>
            <button class="uk-button uk-button-default" type="button">Arguments contre</button>
        </div>  
        <ul class="uk-switcher uk-margin">
            <li> 
                <h1>Description de la votation</h1>
                <p>L'initiative veut mettre un termee à la libre circulation des personnes avec l'UE. Si elle est acceptée, le Conseil fédéral
                devra mettre fin à l'ALCP dans les douze mois en menant des négociations avec l'UE.
                </p>
                <p>S'il n'y parvient pas, il devra dénoncer unilatéralement l'ALCP dans un délai supplémentaire de 30 jours.
                </p>
                <p>Dans ce cas, la clause guillotine s'appliquera et les six autres accords des Bilatérales I s'éteindront automatiquement.
                    L'initiative interdit par ailleurs à la Suisse de contracter de nouvelles obligations de droit international qui
                    accorderaient un régime de libre circulation des personnes à des ressortissants étrangers.
                </p>
            
                <h1>La question qui vous est posée :</h1>
                    <b><p>Acceptez-vous l’initiative populaire « Pour une immigration modérée (initiative de limitation) » ?</p></b>
            </li>
            <li>
            <h2>Partis fédéraux</h2>
                <table class="uk-table">
                    <thead>
                        <tr>
                            <th class="uk-text-center">Verts</th>
                            <th class="uk-text-center">PS</th>
                            <th class="uk-text-center">PEV</th>
                            <th class="uk-text-center">PVL</th>
                            <th class="uk-text-center">PDC</th>
                            <th class="uk-text-center">PBD</th>
                            <th class="uk-text-center">PLR</th>
                            <th class="uk-text-center">UDC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                        </tr>
                    </tbody>
                </table>    

                <h2>Partis jurassiens</h2>
                <table class="uk-table">
                    <thead>
                        <tr>
                            <th class="uk-text-center">CS-POP</th>
                            <th class="uk-text-center">Verts</th>
                            <th class="uk-text-center">PS</th>
                            <th class="uk-text-center">PEV</th>
                            <th class="uk-text-center">PVL</th>
                            <th class="uk-text-center">PDC</th>
                            <th class="uk-text-center">PCSI</th>
                            <th class="uk-text-center">PLR</th>
                            <th class="uk-text-center">UDC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                        </tr>
                    </tbody>
                </table>    

                <h2>Autorités</h2>
                <table class="uk-table">
                    <thead>
                        <tr>
                            <th class="uk-text-center">Conseil fédéral</th>
                            <th class="uk-text-center">Conseil des Etats</th>
                            <th class="uk-text-center">Conseil national</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                        </tr>
                    </tbody>
                </table> 
            </li>            
                <div class="uk-child-width-1-6@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Les Suisses décideront enfin eux-mêmes qui ils veulent admettre dans leur pays.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>Le Conseil fédéral devra enfin respecter la volonté du peuple.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>L'afflux d'immigrants mal formé diminuera.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>Les entreprises suisses pourront recruter du personnel hautement qualifié.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>La main d'oeuvre bon marché de l'UE n'évincera plus les travailleurs suisses.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>Nous protégeons les institutions sociales contre le pillage par les étrangers.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>Nous pourrons de nouveau aller de l'avant en Suisse.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>L'école pourra à nouveau former sérieusement les enfants.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>La Suisse sera plus sûre, notamment pour les femmes.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>Le prix du logement baissera.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>Nous autres Suisses, nous ne serons plus étrangers dans notre propre pays.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <h3 class="uk-card-title"></h3> 
                                <p>Les Suisses pourront à nouveau profiter de la prospérité, fruit de leur travail.</p>
                        </div>
                    </div>
                </div>
            <li>
            <div class="uk-child-width-1-6@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Non à une attaque frontale contre les accords bilatéraux</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3> 
                            <p>Non à une résiliation sans alternatives crédibles</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3> 
                            <p>Non à une résiliation qui nous plonger dans l'incertitude</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3> 
                            <p>Non à une politique européenne isolationniste</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3> 
                            <p>Non à un cavalier seul hostile à la formation et à la recherche</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3> 
                            <p>Non au dumping salarial</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3> 
                            <p>Non à une détérioration massive de nos relations avec l'Europe</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3> 
                            <p>Non à la limitation de notre liberté</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3> 
                            <p>Contre la pénurie de main-d'oeuvre</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3> 
                            <p>Les Suisses bénéficient eux-aussi de la libre-circulation des personnes</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3> 
                            <p>Déstabilisation en cas de période difficile</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
</main>
</body>


<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>