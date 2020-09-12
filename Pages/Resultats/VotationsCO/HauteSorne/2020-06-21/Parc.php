<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votation Haute-Sorne 21.06.2020</title>
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
        <script src="https://www.amcharts.com/lib/4/core.js"></script>
        <script src="https://www.amcharts.com/lib/4/charts.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/switzerlandHigh.js"></script>
        <script src="https://www.amcharts.com/lib/4/maps.js"></script>

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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Résultats de la votation communale du 21 juin
            2020</h1>
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
                        <p><b>Objet : </b>Modifications des règlements communaux sur les constructions et l'introduction d'une taxe pour les places de parc manquantes des 5 villages constituant la Commune de Haute-Sorne</p>
                        <p><b>Participation : </b>37.40 %</p>
                        <p><b>Résultat : </b>Accepté</p>
                        <p><b>Type de la votation : </b>Votation communale (Haute-Sorne)</p>
                        <p><b>Mode de votation : </b>Scrutin populaire</p>
                        <p><a href="Parc_description.php">Lien vers la description du projet</a></p>
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
                                    <div id="chartdivFCB" style="width: 100%; height: 250px;"></div>
                                    <script>
                                        // Create chart instance
                                        var resultatFCB = am4core.create("chartdivFCB", am4charts.PieChart);

                                        // Add data
                                        resultatFCB.data = [{
                                            "votes": "OUI",
                                            "suffrages": 1022
                                        }, {
                                            "votes": "NON",
                                            "suffrages": 869
                                        }];

                                        // Add and configure Series
                                        var dataFCB = resultatFCB.series.push(new am4charts.PieSeries());
                                        dataFCB.dataFields.value = "suffrages";
                                        dataFCB.dataFields.category = "votes";

                                        // Let's cut a hole in our Pie chart the size of 40% the radius
                                        resultatFCB.innerRadius = am4core.percent(40);

                                        // Disable ticks and labels
                                        dataFCB.labels.template.disabled = true;
                                        dataFCB.ticks.template.disabled = true;

                                        // Disable tooltips
                                        dataFCB.slices.template.tooltipText = "";

                                        // Add a legend
                                        resultatFCB.legend = new am4charts.Legend();
                                        resultatFCB.legend.position = "right";

                                        dataFCB.colors.list = [
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
                        <p>La modification du règlement a donc été acceptée ce dimanche 21 juin 2020. Les propriétaires et/ou de projets qui ne parviendront
                            pas à remplir les obligations légales cantonales quant au nombre de places de stationnement devront ainsi s'acquitter d'une taxe,
                            qui permettra de financer des mesures pour réduires les nuisances sonores et augmenter la sécurité des villages.
                        </p>
                        <p>Par ce projet, la Commune de Haute-Sorne répondra désormais pleinement à la Loi fédérale sur l'aménagement du territoire (LAT),
                            ainsi qu'à son ordonnance d'application (OAT). La législation cantonale jurassienne sera, elle aussi, respectée. Les besoins en
                            stationnement seront ainsi toujours garantis et l'intégration de nouveaux logements.
                        </p>
                        <p>Pour conclure, ce projet a été accepté à 54.00 % par le peuple ce dimanche, et la participation s'est élevée à 37.40 %</p>
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
                    <section style="padding: 2%;">
                        
                        <table class="uk-table uk-table-divider uk-table-striped uk-table-hover">
                            <thead>
                                <tr>
                                    
                                    <th>Participation</th>
                                    <th>Nombre de oui (en voix)</th>
                                    <th>Nombre de oui (en %)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>37.40 %</b></td>
                                    <td><b>1022</b></td>
                                    <td><b>54.00 %</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        </section>
</main>
<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>