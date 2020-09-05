<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include './variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Accueil</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        
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
<!-- Barre de navigation -->
<header>
            <div class="navbar-normal">
                <?php include "./Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include "./Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Résultats de la votation communale du 19 mai 2019</h1>
        <hr>
        <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column uk-align-left" uk-grid>
                            <h2>Informations de la votation</h2>
                        </div>
                    </div>
                    <div class="uk-card-body uk-text-left">
                        <p><b>Objet : </b>Demande de crédit de CHF 8'942'000.-, sous déduction des subventions fédérales et cantonales,
                            pour le traitement des micropolluants à la STEP de Soyhières</p>
                        <p><b>Participation : </b>37.00 %</p>
                        <p><b>Résultat : </b>Accepté</p>
                        <p><b>Type de la votation : </b>Votation communale (Val-Terbi)</p>
                        <p><b>Mode de votation : </b>Scrutin populaire</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column uk-align-left" uk-grid>
                            <h2>Résultats communaux</h2>
                        </div>
                    </div>
                    <section style="padding: 2%;">                   
                                <div class="uk-card-body">
                                    <div id="chartdivSTEP" style="width: 100%; height: 250px;"></div>
                                    <script>
                                        // Create chart instance
                                        var resultatSTEP = am4core.create("chartdivSTEP", am4charts.PieChart);

                                        // Add data
                                        resultatSTEP.data = [{
                                            "votes": "OUI",
                                            "suffrages": 790
                                        }, {
                                            "votes": "NON",
                                            "suffrages": 114
                                        }];

                                        // Add and configure Series
                                        var dataSTEP = resultatSTEP.series.push(new am4charts.PieSeries());
                                        dataSTEP.dataFields.value = "suffrages";
                                        dataSTEP.dataFields.category = "votes";

                                        // Let's cut a hole in our Pie chart the size of 40% the radius
                                        resultatSTEP.innerRadius = am4core.percent(40);

                                        // Disable ticks and labels
                                        dataSTEP.labels.template.disabled = true;
                                        dataSTEP.ticks.template.disabled = true;

                                        // Disable tooltips
                                        dataSTEP.slices.template.tooltipText = "";

                                        // Add a legend
                                        resultatSTEP.legend = new am4charts.Legend();
                                        resultatSTEP.legend.position = "right";

                                        dataSTEP.colors.list = [
                                        am4core.color("#89ff6a"),
                                        am4core.color("#ff4242"),
                                        ]
                                    </script>
                                </div>
                    </section>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column uk-align-left" uk-grid>
                            <h2>Analyse du résultat</h2>
                        </div>
                    </div>
                    <div class="uk-card-body uk-text-left">
                        <div class="uk-alert-primary" uk-alert>
                            <a class="uk-alert-close" uk-close></a>
                            <h3>Forme de votation des communes</h3>
                            <p> Une certaine différence apparaît au niveau du vote des communes. Selon les règlements d'organisation
                                des communes, certaines ont dû passer par les urnes, et d'autres ont validé le projet en Assemblée communale.
                                Dans le tableau à gauche de cette page figurent uniquement les communes qui sont passées par les urnes.</p>
                        </div>
                        <p> De nouvelles dispositions de la Loi fédérale sur la protection des eaux (LEaux) sont entrées en vigueur
                            le 1er janvier 2016. Ces dispositions visent à optimiser le système d'assainissement actuel en équipant
                            la STEP d'une étape de traitement supplémentaire afin d'éliminer les micropolluants.</p>
                        <p> Le Syndicat pour l'Assainissement des eaux de Delémont et environs (SEDE) qui regroupe les communes de
                            Boécourt, Châtillon, Courchapoix, Courrendlin, Courroux, Courtételle, Delémont, Develier, Haute-Sorne,
                            Mervelier, Metttembert, Pleigne, Soyhières et Val Terbi, est soumis à cette modification de Loi et doit
                            donc mettre en place une étape de traitement supplémentaire à la STEP de Soyhières.</p>
                        <p>Toutes les communes ci-dessus ont donc accepté le crédit de 8'942'000.- destiné au financement de cette
                            étape de traitement supplémentaire. A noter que les subventions fédérales et cantonales couvriront 85 %
                            des coûts du projet.</p>    
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column uk-align-left" uk-grid>
                            <h2>Résultats détaillés</h2>
                        </div>
                    </div>
                    <div class="uk-overflow-auto">    
                        <table class="uk-table uk-table-divider uk-table-striped uk-table-hover">
                            <thead>
                                <tr>
                                    <th>Commune</th>
                                    <th>Participation</th>
                                    <th>Nombre de oui (en voix)</th>
                                    <th>Nombre de oui (en %)</th>
                                </tr>
                            </thead>
                            <tbody>                                
                                <tr>
                                    <td>Courrendlin</td>
                                    <td>---</td>
                                    <td>Informations non disponibles</td>
                                    <td>---</td>
                                </tr>
                                <tr>
                                    <td>Courtételle</td>
                                    <td>32.60 %</td>
                                    <td>572</td>
                                    <td>90.22 %</td>
                                </tr>  
                                <tr>
                                    <td>Delémont</td>
                                    <td>---</td>
                                    <td>Informations non disponibles</td>
                                    <td>---</td>
                                </tr>  
                                <tr>
                                    <td>Develier</td>
                                    <td>33.91 %</td>
                                    <td>301</td>
                                    <td>87.76 %</td>
                                </tr>
                                <tr>
                                    <td>Haute-Sorne</td>
                                    <td>32.90 %</td>
                                    <td>1366</td>
                                    <td>79.56 %</td>
                                </tr>                           
                                <tr>
                                    <td>Val-Terbi</td>
                                    <td>37.00 %</td>
                                    <td>790</td>
                                    <td>87.39 %</td>
                                </tr>                                
                                
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </section>
</main>
<footer>
        <div class="footer">
            <?php include "/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>