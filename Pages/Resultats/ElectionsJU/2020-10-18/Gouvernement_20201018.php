<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Election au Gouvernement jurassien</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssresultats; ?>"/>
        
        <script src="<?php echo $jsUikit ?>"></script>
        <script src="<?php echo $jsUikitIcons ?>"></script>
        <script src="<?php echo $jsUikitMin ?>"></script>
        <script src="<?php echo $jsUikitIconsMin ?>"></script>
        <script src="https://www.amcharts.com/lib/4/core.js"></script>
        <script src="https://www.amcharts.com/lib/4/charts.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/switzerlandHigh.js"></script>
        <script src="https://www.amcharts.com/lib/4/maps.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-app.js%22%3E"></script>
        <script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-firestore.js%22%3E"></script>
        <script src="../../../../JS/db.js" type="module"></script>

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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Résultats des élections cantonales du 18 octobre 2020</h1>
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
                        <p><b>Objet : </b>Election au Gouvernement Jurassien (1er tour)</p>
                        <p><b>Participation : </b>47.49 %</p>
                        <p><b>Type de la votation : </b>Election cantonale jurassienne</p>
                        <p><b>Mode de votation : </b>Election à deux tours (Pour être élu-e au premier tour, il faut obtenir 50 % des voix + 1)</p>
                        <p><a href="<?php echo $PHPelectionsJUGouvernement1 ?>">Lien vers les informations d'élection</a></p>
                        <p><b>Les candidats-es élus-es sont indiqués-es de la couleur suivante : </b><span style="color: #2ecc71">Elu-e</span></p>
                        <!--<p><b>Communes qui ont livré les résultats : </b></p>
                        <p>Boécourt, Bourrignon, Châtillon, Courchapoix, Courrendlin,
                        Courroux, Courtételle, Delémont, Develier, Ederswiler, Haute-Sorne, Mervelier, Mettembert, Movelier, Pleigne,
                        Rossemaison, Saulcy, Soyhières, Val-Terbi</span></p>

                        <p>Alle, La Baroche, Basse-Allaine, Beurnevésin,
                        Boncourt, Bonfol, Bure, Clos-du-Doubs, Coeuve, Cornol, Courchavon, Courgenay, Courtedoux, Damphreux, Fahy,
                        Fontenais, Grandfontaine, Haute-Ajoie, Lugnez, Porrentruy, Vendlincourt</p>

                        <p>Le Bémont, Les Bois, Les Breuleux, Les Enfers,
                        Les Genevez, Lajoux, Montfaucon, Muriaux, Le Noirmont, Saignelégier, St-Brais, Soubey</p>-->
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
                        <div class="uk-align-right" id="chartECGouvernement" style="width: 100%; height: 500px;"></div>
                        <script>
                            var chartECGouvernement = am4core.create("chartECGouvernement", am4charts.XYChart);

                            chartECGouvernement.data = [{
                                "candidat": "Alain Beuret",
                                "Suffrages": 1977,
                            }, {
                                "candidat": "Francisco Pires",
                                "Suffrages": 2232,
                            }, {
                                "candidat": "Emilie Moreau",
                                "Suffrages": 2705,
                            }, { 
                                "candidat": "Brigitte Favre",
                                "Suffrages": 2711,
                            }, {
                                "candidat": "Didier Spies",
                                "Suffrages": 2898,
                            }, {
                                "candidat": "Vincent Schmitt",
                                "Suffrages": 3152,
                            }, {
                                "candidat": "Céline R.-C. Linder",
                                "Suffrages": 3662,
                            }, {
                                "candidat": "David Eray",
                                "Suffrages": 6987,
                            }, { 
                                "candidat": "Stéphane Babey",
                                "Suffrages": 7721,
                            }, { 
                                "candidat": "Jacques Gerber",
                                "Suffrages": 11008,
                            }, {
                                "candidat": "Rosalie Beuret Siess",
                                "Suffrages": 11135,
                            }, {
                                "candidat": "Nathalie Barthoulot",
                                "Suffrages": 11401,
                            }, {
                            "candidat": "Martial Courtet",
                            "Suffrages": 11516,
                            }];

                            // Create axes
                            var categoryAxis = chartECGouvernement.yAxes.push(new am4charts.CategoryAxis());
                            categoryAxis.dataFields.category = "candidat";
                            categoryAxis.renderer.minGridDistance = 4;
                            

                            var valueAxis = chartECGouvernement.xAxes.push(new am4charts.ValueAxis());
                            valueAxis.title.text = "Suffrages";
                            

                            // Create series
                            var series = chartECGouvernement.series.push(new am4charts.ColumnSeries());
                            series.dataFields.valueX = "Suffrages";
                            series.dataFields.categoryY = "candidat";
                            series.name = "Suffrages";
                        </script>
                    </div>
                </div>
            </div>            
        </div>
    </section>
</main>
<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>