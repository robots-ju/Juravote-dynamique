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
        <h1 class="uk-heading-large">Résultats des élections cantonales du 1er mars 2020</h1>
        <hr>
        <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column" uk-grid>
                            <h2>Informations sur l'élection</h2>
                        </div>
                    </div>
                    <div class="uk-card-body uk-text-left">
                        <p><b>Objet : </b>Election complémentaire au Gouvernement Jurassien</p>
                        <p><b>Participation : </b>38.94 %</p>
                        <p><b>Candidat-e élu-e : </b>Rosalie Beuret Siess</p>
                        <p><b>Type de la votation : </b>Election cantonale jurassienne</p>
                        <p><b>Mode de votation : </b>Election à deux tours</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column" uk-grid>
                            <h2>Résultats cantonaux</h2>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <div class="uk-align-right" id="chartECGouvernement" style="width: 100%; height: 300px;"></div>
                        <script>
                            var chartECGouvernement = am4core.create("chartECGouvernement", am4charts.XYChart);

                            chartECGouvernement.data = [{
                            "candidat": "Rosalie Beuret Siess",
                            "Suffrages": 10486,
                            }, {
                            "candidat": "Anne Seydoux-Christe",
                            "Suffrages": 8491,
                            }, {
                            "candidat": "Romain Schaer",
                            "Suffrages": 3379,
                            }];

                            // Create axes
                            var categoryAxis = chartECGouvernement.xAxes.push(new am4charts.CategoryAxis());
                            categoryAxis.dataFields.category = "candidat";
                            categoryAxis.renderer.minGridDistance = 40;

                            var valueAxis = chartECGouvernement.yAxes.push(new am4charts.ValueAxis());
                            valueAxis.title.text = "Suffrages";

                            // Create series
                            var series = chartECGouvernement.series.push(new am4charts.ColumnSeries());
                            series.dataFields.valueY = "Suffrages";
                            series.dataFields.categoryX = "candidat";
                            series.name = "Suffrages";
                        </script>
                    </div>
                    </div>
                </div>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column" uk-grid>
                            <h2>Analyse du résultat</h2>
                        </div>
                    </div>
                    <div class="uk-card-body uk-text-left">
                        
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column" uk-grid>
                            <h2>Résultats détaillés</h2>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <div class="uk-align-right" id="chartDiscriminationCH" style="width: 100%; height: 300px;"></div>
                        <script>
                            
                        </script>
                    </div>
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