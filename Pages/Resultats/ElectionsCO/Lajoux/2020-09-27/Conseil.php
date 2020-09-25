<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Election Conseil Lajoux</title>
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
        <h1 class="uk-heading-large">Résultats des élections communales du 27 septembre
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
                        <p><b>Objet : </b>Élections au Conseil communale</p>
                        <p><b>Participation : </b>#%</p>
                        <p><b>Candidats élus : </b># et #</p>
                        <p><b>Type de l'élection : </b>Élection communale</p>
                        <p><b>Mode d'élection : </b>Élection complémentaire</p>
                        <p><a href="<?php echo $PHPdescriptionConseilLajoux2020 ?>">Lien vers les informations d'élection</a></p>
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
                        <li>
                            <div class="uk-card-body">
                                <div id="chartdivMairie" style="width: 100%; height: 250px;"></div>
                                    <script>
                                        // Create chart instance
                                        var resultatMairie = am4core.create("chartdivMairie", am4charts.XYChart);

                                        // Add data
                                        resultatMairie.data = [{
                                            "candidat": "François Brahier-Jeckelmann",
                                            "suffrages": 116
                                        }, {
                                            "candidat": "Luc Maillard",
                                            "suffrages": 40
                                        }, {
                                            "candidat": "Jean-Paul Farine",
                                            "suffrages": 8
                                        }];

                                        // Add and configure Series
                                        var dataMairie = resultatMairie.xAxes.push(new am4charts.CategoryAxis());
                                        dataMairie.dataFields.category = "candidat";
                                        var valueMairie = resultatMairie.yAxes.push(new am4charts.ValueAxis());
                                        valueMairie.title.text="Suffrages";
                                        valueMairie.min=0;
                                        var seriesMairie = resultatMairie.series.push(new am4charts.ColumnSeries());
                                        seriesMairie.name="Voies";
                                        seriesMairie.columns.template.tooltipText="Candidat: {categoryX}\nSuffrages: {valueY}";
                                        seriesMairie.columns.template.fill = am4core.color("#D20603");
                                        seriesMairie.dataFields.valueY="suffrages";
                                        seriesMairie.dataFields.categoryX="candidat";
                                        
                                    </script>
                                </div>
                            </li>
                            
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