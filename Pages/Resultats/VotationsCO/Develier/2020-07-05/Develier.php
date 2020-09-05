<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include '/Juravote-dynamique/variables.php'; ?>

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
                <?php include "/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include "/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Résultats de la votation communale du 5 juillet
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
                        <p><b>Objet : </b>Demande de crédit de CHF 5'700'000.- pour le projet PROVITA</p>
                        <p><b>Participation : </b>41.34 %</p>
                        <p><b>Résultat : </b>Accepté</p>
                        <p><b>Type de la votation : </b>Votation communale (Develier)</p>
                        <p><b>Mode de votation : </b>Scrutin populaire</p>
                        <p><a href="Develier_description.html">Lien vers la description du projet</a></p>
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
                                    <div id="chartdivprovita" style="width: 100%; height: 250px;"></div>
                                    <script>
                                        // Create chart instance
                                        var resultatprovita = am4core.create("chartdivprovita", am4charts.PieChart);

                                        // Add data
                                        resultatprovita.data = [{
                                            "votes": "OUI",
                                            "suffrages": 308
                                        }, {
                                            "votes": "NON",
                                            "suffrages": 118
                                        }];

                                        // Add and configure Series
                                        var dataprovita = resultatprovita.series.push(new am4charts.PieSeries());
                                        dataprovita.dataFields.value = "suffrages";
                                        dataprovita.dataFields.category = "votes";

                                        // Let's cut a hole in our Pie chart the size of 40% the radius
                                        resultatprovita.innerRadius = am4core.percent(40);

                                        // Disable ticks and labels
                                        dataprovita.labels.template.disabled = true;
                                        dataprovita.ticks.template.disabled = true;

                                        // Disable tooltips
                                        dataprovita.slices.template.tooltipText = "";

                                        // Add a legend
                                        resultatprovita.legend = new am4charts.Legend();
                                        resultatprovita.legend.position = "right";

                                        dataprovita.colors.list = [
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
                        <p>Le projet PROVITA a été accepté ce dimanche 05 juillet 2020 par la population de Develier. Porté par les Autorités cantonales et communale, ainsi que le PLR de Develier,
                            ce projet pourra aller de l'avant dans les années à venir.
                        </p>
                        <p>
                            Ce projet permettra donc de protéger la population et la Commune de Develier contre les crues et les divers dégâts
                            liés aux ruisseaux et à l'eau. Le projet répondra aussi aux nouvelles lois en vigueur en Suisse concernant
                            l'aménagement des cours d'eau, et de, justement, la sécurité des habitants.
                        </p>
                        <p>
                            Les premières demandes de subventions et les premières étapes du projet pourront être réalisées pour démarrer
                            le projet ces prochaines années.
                        </p>
                        <p>
                            Pour conclure, ce projet a été accepté à plus de 72 % par le peuple et la participation s'est élevée à 41 %.
                        </p>
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
                                    <td><b>41.34 %</b></td>
                                    <td><b>308</b></td>
                                    <td><b>72.30 %</b></td>
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
            <?php include "/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>