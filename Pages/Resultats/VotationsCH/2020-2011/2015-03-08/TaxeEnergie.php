<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Accueil</title>
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
        <h1 class="uk-heading-large">Résultats de la votation fédérale du 08 mars 2015</h1>
        <hr>
        <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column" uk-grid>
                            <h2>Informations de la votation</h2>
                        </div>
                    </div>
                    <div class="uk-card-body uk-text-left">
                        <p><b>Objet : </b>Initiative populaire du 17.12.2012 «Remplacer la taxe sur la valeur ajoutée par une taxe sur l'énergie»</p>
                        <p><b>Participation : </b>42.06 %</p>
                        <p><b>Résultat : </b>Refusé</p>
                        <p><b>Type de la votation : </b>Votation fédérale</p>
                        <p><b>Mode de votation : </b>Initiative populaire</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column" uk-grid>
                            <h2>Résultats nationaux</h2>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <div id="chartTaxeEnergie" style="width: 100%; height: 250px;"></div>
                        <script>
                            // Create chart instance
                            var resultatTaxeEnergie = am4core.create("chartTaxeEnergie", am4charts.PieChart);

                            // Add data
                            resultatTaxeEnergie.data = [{
                                "votes": "OUI",
                                "suffrages": 175405
                            }, {
                                "votes": "NON",
                                "suffrages": 2010326
                            }];

                            // Add and configure Series
                            var dataTaxeEnergie = resultatTaxeEnergie.series.push(new am4charts.PieSeries());
                            dataTaxeEnergie.dataFields.value = "suffrages";
                            dataTaxeEnergie.dataFields.category = "votes";

                            // Let's cut a hole in our Pie chart the size of 40% the radius
                            resultatTaxeEnergie.innerRadius = am4core.percent(40);

                            // Disable ticks and labels
                            dataTaxeEnergie.labels.template.disabled = true;
                            dataTaxeEnergie.ticks.template.disabled = true;

                            // Disable tooltips
                            dataTaxeEnergie.slices.template.tooltipText = "";

                            // Add a legend
                            resultatTaxeEnergie.legend = new am4charts.Legend();
                            resultatTaxeEnergie.legend.position = "right";

                            dataTaxeEnergie.colors.list = [
                            am4core.color("#89ff6a"),
                            am4core.color("#ff4242"),
                            ]
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
                        <div class="uk-align-right" id="chartTaxeEnergieCH" style="width: 100%; height: 300px;"></div>
                        <script>
                            // Create map instance
                            var resultatsTaxeEnergieCH = am4core.create("chartTaxeEnergieCH", am4maps.MapChart);

                            // Set map definition
                            resultatsTaxeEnergieCH.geodata = am4geodata_switzerlandHigh;

                            // Set projection
                            resultatsTaxeEnergieCH.projection = new am4maps.projections.Miller();

                            // Create map polygon series
                            var polygonSeries = resultatsTaxeEnergieCH.series.push


                            // Make map load polygon (like country names) data from GeoJSON
                            polygonSeries.useGeodata = true;

                            //Create data series
                            var série0to10 = resultatsTaxeEnergieCH.series.push(new am4maps.MapPolygonSeries());
                            série0to10.name = "0 à 10 %";
                            série0to10.value = "0 à 10 %";
                            série0to10.title = "Oui en %";
                            série0to10.useGeodata = true;
                            série0to10.include = ["CH-BE", "CH-LU", "CH-UR", "CH-SZ", "CH-OW", "CH-NW",
                            "CH-GL", "CH-ZG", "CH-FR", "CH-SO", "CH-BL", "CH-AR", "CH-AI", "CH-SG", 
                            "CH-GR", "CH-AG", "CH-TG", "CH-TI", "CH-VD", "CH-VS", "CH-NE", "CH-GE", "CH-JU"];
                            série0to10.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série0to10.fill = am4core.color("#a00000")
                            série0to10.mapPolygons.template.fill = am4core.color("#a00000")

                            var série10to20 = resultatsTaxeEnergieCH.series.push(new am4maps.MapPolygonSeries());
                            série10to20.name = "10 à 20 %";
                            série10to20.value = "10 à 20 %";
                            série10to20.title = "Oui en %";
                            série10to20.useGeodata = true;
                            série10to20.include = ["CH-ZH", "CH-BS", "CH-SH"];
                            série10to20.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série10to20.fill = am4core.color("#db0000")
                            série10to20.mapPolygons.template.fill = am4core.color("#db0000")

                            resultatsTaxeEnergieCH.legend = new am4maps.Legend();
                            resultatsTaxeEnergieCH.legend.position = "left";
                        </script>
                    </div>
                </div>
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