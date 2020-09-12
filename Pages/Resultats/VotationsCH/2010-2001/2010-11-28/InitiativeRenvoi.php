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
        <h1 class="uk-heading-large">Résultats de la votation fédérale du 28 novembre 2010</h1>
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
                        <p><b>Objet : </b>Initiative populaire du 15.02.2008 'Pour le renvoi des étrangers criminels (Initiative sur le renvoi)'</p>
                        <p><b>Participation : </b>52.93 %</p>
                        <p><b>Résultat : </b>Accepté</p>
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
                        <div class="uk-alert-primary" uk-alert>                            
                            <p>La somme des "OUI" et des "NON" n'égale pas 100 % concernant l'initiative et le contre-projet direct.
                                Lorsqu'un contre-projet direct est soumis en votation simultanément à l'initiative populaire liée,
                                le bulletin de vote comporte 3 questions :
                                <ul>
                                    <li>Acceptez-vous l'initiative ?</li>
                                    <li>Acceptez-vous le contre-projet direct ?</li>
                                    <li>Question subsidiaire</li>
                                </ul>
                                Si un bulletin est entièrement vide ou nul, il est comptabilisé en tant que vote invalide.
                            </p>
                        </div>
                        <div id="chartRenvoi" style="width: 100%; height: 250px;"></div>
                        <script>
                            // Create chart instance
                            var resultatRenvoi = am4core.create("chartRenvoi", am4charts.PieChart);

                            // Add data
                            resultatRenvoi.data = [{
                                "votes": "OUI",
                                "suffrages": 1397923
                            }, {
                                "votes": "NON",
                                "suffrages": 1243942
                            },{
                                "votes": "INVALIDES",
                                "suffrages": 32102
                            }];

                            // Add and configure Series
                            var dataRenvoi = resultatRenvoi.series.push(new am4charts.PieSeries());
                            dataRenvoi.dataFields.value = "suffrages";
                            dataRenvoi.dataFields.category = "votes";

                            // Let's cut a hole in our Pie chart the size of 40% the radius
                            resultatRenvoi.innerRadius = am4core.percent(40);

                            // Disable ticks and labels
                            dataRenvoi.labels.template.disabled = true;
                            dataRenvoi.ticks.template.disabled = true;

                            // Disable tooltips
                            dataRenvoi.slices.template.tooltipText = "";

                            // Add a legend
                            resultatRenvoi.legend = new am4charts.Legend();
                            resultatRenvoi.legend.position = "right";

                            dataRenvoi.colors.list = [
                            am4core.color("#89ff6a"),
                            am4core.color("#ff4242"),
                            am4core.color("#87CEEB"),
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
                        <p>L'UDC décide de lancer l'initiative populaire "Pour le renvoi des criminels étrangers" pour forcer l'imposition
                            rigoureuse des lois existantes sur le sujet. 100'000 signatures sont donc récoltées et l'initiative est déposée
                            le 15 février 2008 auprès de la Chancellerie fédérale, qui la valide le 07 mars de la même année.
                        </p>
                        <p>
                            Les Autorités fédérales recommandent le rejet de l'initiative et présentent un contre-projet indirect qui sera
                            voté le même jour. Soutenues par le PBD, le PCS, le PDC, le PS, les Verts, le PLR et les Verts-Libéraux, le
                            Conseil fédéral estime que l'initiative est contraire aux règles du droit international.
                        </p>
                        <p>
                            A l'inverse, l'UDC est soutenue par la LEGA et l'Union démocratique fédérale. Le jour de la votation, cette dernière
                            est acceptée par 17.5 cantons et par 52.30 % des votants. Or, en novembre 2014, la commission du Conseil des Etats
                            revient sur le compromis trouvé par le Conseil national. La disposition trouvée avait été explicitement rejetée par
                            le peuple lors du vote. L'UDC a réagi en parlant "de volonté du peuple foulée aux pieds."
                        </p>
                        <p>
                            L'histoire ne s'arrête pas là. En 2016, une initiative qui réclame "le renvoi effectif des étrangers criminels"
                            est déposée et à nouveau soumise à votations. <a href="">Plus d'infos</a>
                        </p>
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
                        <div class="uk-align-right" id="chartRenvoiCH" style="width: 100%; height: 300px;"></div>
                        <script>
                            // Create map instance
                            var resultatsRenvoiCH = am4core.create("chartRenvoiCH", am4maps.MapChart);

                            // Set map definition
                            resultatsRenvoiCH.geodata = am4geodata_switzerlandHigh;

                            // Set projection
                            resultatsRenvoiCH.projection = new am4maps.projections.Miller();

                            // Create map polygon series
                            var polygonSeries = resultatsRenvoiCH.series.push


                            // Make map load polygon (like country names) data from GeoJSON
                            polygonSeries.useGeodata = true;

                            //Create data series
                            var série40to50 = resultatsRenvoiCH.series.push(new am4maps.MapPolygonSeries());
                            série40to50.name = "40 à 50 %";
                            série40to50.value = "40 à 50 %";
                            série40to50.title = "Oui en %";
                            série40to50.useGeodata = true;
                            série40to50.include = ["CH-FR", "CH-BS", "CH-VD", "CH-NE", "CH-GE", "CH-JU"];
                            série40to50.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série40to50.fill = am4core.color("#fd7272")
                            série40to50.mapPolygons.template.fill = am4core.color("#fd7272")

                            var série50to60 = resultatsRenvoiCH.series.push(new am4maps.MapPolygonSeries());
                            série50to60.name = "50 à 60 %";
                            série50to60.value = "50 à 60 %";
                            série50to60.title = "Oui en %";
                            série50to60.useGeodata = true;
                            série50to60.include = ["CH-ZH", "CH-BE", "CH-LU", "CH-ZG", "CH-SO", "CH-BL", "CH-SH",
                            "CH-AR", "CH-SG", "CH-GR", "CH-AG", "CH-VS"];
                            série50to60.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série50to60.fill = am4core.color("#88e56f")
                            série50to60.mapPolygons.template.fill = am4core.color("#88e56f")

                            var série60to70 = resultatsRenvoiCH.series.push(new am4maps.MapPolygonSeries());
                            série60to70.name = "60 à 70 %";
                            série60to70.value = "60 à 70 %";
                            série60to70.title = "Oui en %";
                            série60to70.useGeodata = true;
                            série60to70.include = ["CH-UR", "CH-SZ", "CH-OW", "CH-NW", "CH-GL", "CH-AI", "CH-TG", "CH-TI"];
                            série60to70.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série60to70.fill = am4core.color("#63cf46")
                            série60to70.mapPolygons.template.fill = am4core.color("#63cf46")

                            resultatsRenvoiCH.legend = new am4maps.Legend();
                            resultatsRenvoiCH.legend.position = "left";            
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