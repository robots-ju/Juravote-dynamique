<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votations du 27 septembre 2020</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Résultats de la votation fédérale du 27 septembre 2020</h1>
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
                        <p><b>Objet : </b>Arrêté fédéral relatif  à l’acquisition de nouveaux  avions de combat</p>
                        <p><b>Participation : </b>XX.XX %</p>
                        <p><b>Résultat : </b>Accepté</p>
                        <p><b>Type de la votation : </b>Votation fédérale</p>
                        <p><b>Mode de votation : </b>Référendum</p>
                        <?php echo $PHPvotationsCHAvions ?>
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
                        <div id="chartDiscrimination" style="width: 100%; height: 250px;"></div>
                        <script>
                            // Create chart instance
                            var resultatDiscrimination = am4core.create("chartDiscrimination", am4charts.PieChart);

                            // Add data
                            resultatDiscrimination.data = [{
                                "votes": "OUI",
                                "suffrages": 1413609
                            }, {
                                "votes": "NON",
                                "suffrages": 827361
                            }];

                            // Add and configure Series
                            var dataDiscrimination = resultatDiscrimination.series.push(new am4charts.PieSeries());
                            dataDiscrimination.dataFields.value = "suffrages";
                            dataDiscrimination.dataFields.category = "votes";

                            // Let's cut a hole in our Pie chart the size of 40% the radius
                            resultatDiscrimination.innerRadius = am4core.percent(40);

                            // Disable ticks and labels
                            dataDiscrimination.labels.template.disabled = true;
                            dataDiscrimination.ticks.template.disabled = true;

                            // Disable tooltips
                            dataDiscrimination.slices.template.tooltipText = "";

                            // Add a legend
                            resultatDiscrimination.legend = new am4charts.Legend();
                            resultatDiscrimination.legend.position = "right";

                            dataDiscrimination.colors.list = [
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
                            <h2>Résultats détaillés</h2>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <div class="uk-align-right" id="chartDiscriminationCH" style="width: 100%; height: 300px;"></div>
                        <script>
                            // Create map instance
                            var resultatsDiscriminationCH = am4core.create("chartDiscriminationCH", am4maps.MapChart);

                            // Set map definition
                            resultatsDiscriminationCH.geodata = am4geodata_switzerlandHigh;

                            // Set projection
                            resultatsDiscriminationCH.projection = new am4maps.projections.Miller();

                            // Create map polygon series
                            var polygonSeries = resultatsDiscriminationCH.series.push


                            // Make map load polygon (like country names) data from GeoJSON
                            polygonSeries.useGeodata = true;

                            //Create data series
                            var série40to50 = resultatsDiscriminationCH.series.push(new am4maps.MapPolygonSeries());
                            série40to50.name = "40 à 50 %";
                            série40to50.value = "40 à 50 %";
                            série40to50.title = "Oui en %";
                            série40to50.useGeodata = true;
                            série40to50.include = ["CH-AI", "CH-SZ", "CH-UR"];
                            série40to50.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série40to50.fill = am4core.color("#fd7272")
                            série40to50.mapPolygons.template.fill = am4core.color("#fd7272")

                            var série50to60 = resultatsDiscriminationCH.series.push(new am4maps.MapPolygonSeries());
                            série50to60.name = "50 à 60 %";
                            série50to60.value = "50 à 60 %";
                            série50to60.title = "Oui en %";
                            série50to60.useGeodata = true;
                            série50to60.include = ["CH-BE", "CH-LU","CH-OW", "CH-NW", "CH-GL", "CH-ZG", "CH-SO", "CH-SH", "CH-AR", "CH-SG", "CH-GR", "CH-AG", "CH-TG"];
                            série50to60.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série50to60.fill = am4core.color("#88e56f")
                            série50to60.mapPolygons.template.fill = am4core.color("#88e56f")

                            var série60to70 = resultatsDiscriminationCH.series.push(new am4maps.MapPolygonSeries());
                            série60to70.name = "60 à 70 %";
                            série60to70.value = "60 à 70 %";
                            série60to70.title = "Oui en %";
                            série60to70.useGeodata = true;
                            série60to70.include = ["CH-ZH", "CH-FR", "CH-BL", "CH-TI", "CH-VS"];
                            série60to70.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série60to70.fill = am4core.color("#63cf46")
                            série60to70.mapPolygons.template.fill = am4core.color("#63cf46")

                            var série70to80 = resultatsDiscriminationCH.series.push(new am4maps.MapPolygonSeries());
                            série70to80.name = "70 à 80 %";
                            série70to80.value = "70 à 80 %";
                            série70to80.title = "Oui en %";
                            série70to80.useGeodata = true;
                            série70to80.include = ["CH-BS", "CH-NE", "CH-GE", "CH-JU"];
                            série70to80.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série70to80.fill = am4core.color("#42c121")
                            série70to80.mapPolygons.template.fill = am4core.color("#42c121")

                            var série80to90 = resultatsDiscriminationCH.series.push(new am4maps.MapPolygonSeries());
                            série80to90.name = "80 à 90 %";
                            série80to90.value = "80 à 90 %";
                            série80to90.title = "Oui en %";
                            série80to90.useGeodata = true;
                            série80to90.include = ["CH-VD"];
                            série80to90.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série80to90.fill = am4core.color("#33d708")
                            série80to90.mapPolygons.template.fill = am4core.color("#33d708")

                            resultatsDiscriminationCH.legend = new am4maps.Legend();
                            resultatsDiscriminationCH.legend.position = "left";
                        </script>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column" uk-grid>
                            <h2>Résultats Jura</h2>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <div class="uk-grid-small"  uk-grid>
                            <div uk-switcher="animation: uk-animation-fade; toggle: > *">
                                <button class="uk-button uk-button-default" type="button">Jura</button>
                                <button class="uk-button uk-button-default" type="button">District Delémont</button>
                                <button class="uk-button uk-button-default" type="button">District Ajoie</button>
                                <button class="uk-button uk-button-default" type="button">District Franches-Montagnes</button>                                
                            </div>
                            <ul class="uk-switcher uk-margin">
                                <li>
                                <div id="chartdiv3" style="width: 100%; height: 350px; padding-top: 5%"></div>
                                <script>
                                    var cantonJU = am4core.create("chartdiv3", am4maps.MapChart);
                                    cantonJU.geodata = am4geodata_switzerlandHigh;
                                    cantonJU.projection = new am4maps.projections.Miller();
                                    var polygonSeries = cantonJU.series.push(new am4maps.MapPolygonSeries());
                                    polygonSeries.useGeodata = true;
                                    polygonSeries.mapPolygons.template.events.on("hit", function (ev) {
                                    cantonJU.zoomToMapObject(evtarget);
                                    });
                                    var label = cantonJU.chartContainer.createChild(am4core.Label);
                                    polygonSeries.include = ["CH-JU"];
                                    polygonSeries.fill = am4core.color("#ffffff")
                                    
                                    cantonJU.legend = new am4maps.Legend();
                                    cantonJU.legend.position = "left";

                                    var imageSeries10to20 = cantonJU.series.push(new am4maps.MapImageSeries());
                                    var imageSeries10to20Template = imageSeries10to20.mapImages.template;
                                    var circle = imageSeries10to20Template.createChild(am4core.Circle);
                                    circle.radius = 8;                        
                                    circle.strokeWidth = 2;
                                    circle.nonScaling = true;
                                    circle.tooltipText = "{title} - {OUI}";
                                    circle.fill = am4core.color("#db0000");  

                                    imageSeries10to20.fill = am4core.color("#db0000")
                                    imageSeries10to20.name = "10 à 20 %";
                                    imageSeries10to20.value = "10 à 20 %";
                                    imageSeries10to20.title = "Oui en %";                                  

                                    imageSeries10to20Template.propertyFields.latitude = "latitude";
                                    imageSeries10to20Template.propertyFields.longitude = "longitude";                                    

                                    imageSeries10to20.data = [{
                                        "latitude": 47.49,
                                        "longitude": 7.14,
                                        "title": "Beurnevésin",
                                        "OUI": "17.07 %"
                                    }];

                                    var imageSeries20to30 = cantonJU.series.push(new am4maps.MapImageSeries());
                                    var imageSeries20to30Template = imageSeries20to30.mapImages.template;
                                    var circle = imageSeries20to30Template.createChild(am4core.Circle);
                                    circle.radius = 8;                        
                                    circle.strokeWidth = 2;
                                    circle.nonScaling = true;
                                    circle.tooltipText = "{title} - {OUI}";
                                    circle.fill = am4core.color("#ca2f2f");

                                    imageSeries20to30.fill = am4core.color("#e74545")
                                    imageSeries20to30.name = "20 à 30 %";
                                    imageSeries20to30.value = "20 à 30 %";
                                    imageSeries20to30.title = "Oui en %";

                                    imageSeries20to30Template.propertyFields.latitude = "latitude";
                                    imageSeries20to30Template.propertyFields.longitude = "longitude";                                    

                                    imageSeries20to30.data = [{
                                        "latitude": 47.36,
                                        "longitude": 7.21,
                                        "title": "Boécourt",
                                        "OUI": "28.17 % %"
                                    }, {
                                        "latitude": 47.43,
                                        "longitude": 7.34,
                                        "title": "Ederswiler",
                                        "OUI": "29.41 %"
                                    },{
                                        "latitude": 47.42,
                                        "longitude": 6.95,
                                        "title": "Fahy",
                                        "OUI": "25.00 %"
                                    }];  

                                    var imageSeries30to40 = cantonJU.series.push(new am4maps.MapImageSeries());
                                    var imageSeries30to40Template = imageSeries30to40.mapImages.template;
                                    var circle = imageSeries30to40Template.createChild(am4core.Circle);
                                    circle.radius = 8;                        
                                    circle.strokeWidth = 2;
                                    circle.nonScaling = true;
                                    circle.tooltipText = "{title} - {OUI}";
                                    circle.fill = am4core.color("#e74545");

                                    imageSeries30to40.fill = am4core.color("#e74545")
                                    imageSeries30to40.name = "30 à 40 %";
                                    imageSeries30to40.value = "30 à 40 %";
                                    imageSeries30to40.title = "Oui en %";

                                    imageSeries30to40Template.propertyFields.latitude = "latitude";
                                    imageSeries30to40Template.propertyFields.longitude = "longitude";                                    

                                    imageSeries30to40.data = [{
                                        "latitude": 47.43,
                                        "longitude": 7.13,
                                        "title": "Alle",
                                        "OUI": "37.84 %"
                                    }, {     
                                        "latitude": 47.43,
                                        "longitude": 7.17,
                                        "title": "La Baroche",
                                        "OUI": "36.34 %"
                                    },{
                                        "latitude": 47.47,
                                        "longitude": 7.15,
                                        "title": "Bonfol",
                                        "OUI": "31.84 %"
                                    }, {
                                        "latitude": 47.40,
                                        "longitude": 7.24,
                                        "title": "Bourrignon",
                                        "OUI": "30.83 %"
                                    },{
                                        "latitude": 47.33,
                                        "longitude": 7.35,
                                        "title": "Châtillon",
                                        "OUI": "37.36 %"  
                                    },{
                                        "latitude": 47.45,
                                        "longitude": 7.10,
                                        "title": "Coeuve",
                                        "OUI": "37.25 %"   
                                    },{
                                        "latitude": 47.35,
                                        "longitude": 7.46,
                                        "title": "Courchapoix",
                                        "OUI": "35.61 %"
                                    },{
                                        "latitude": 47.40,
                                        "longitude": 7.13,
                                        "title": "Courgenay",
                                        "OUI": "32.78 %"
                                    },{
                                        "latitude": 47.36,
                                        "longitude": 7.37,
                                        "title": "Courroux",
                                        "OUI": "39.23 %"
                                    },{
                                        "latitude": 47.41,
                                        "longitude": 7.04,
                                        "title": "Courtedoux",
                                        "OUI": "39.24 %"
                                    },{
                                        "latitude": 47.47,
                                        "longitude": 7.10,
                                        "title": "Damphreux",
                                        "OUI": "32.50 %"
                                    },{
                                        "latitude": 47.35,
                                        "longitude": 7.23,
                                        "title": "Haute-Sorne",
                                        "OUI": "37.74 %" 
                                    },{
                                        "latitude": 47.41,
                                        "longitude": 7.32,
                                        "title": "Movelier",
                                        "OUI": "33.57 %"
                                    },{
                                        "latitude": 47.35,
                                        "longitude": 7.34,
                                        "title": "Rossemaison",
                                        "OUI": "38.96 %" 
                                    },{
                                        "latitude": 47.39,
                                        "longitude": 7.37,
                                        "title": "Soyhières",
                                        "OUI": "30.46 %" 
                                    },{                                                
                                        "latitude": 47.35,
                                        "longitude": 7.41,
                                        "title": "Val-Terbi",
                                        "OUI": "38.01 %" 
                                    },{                                       
                                        "latitude": 47.45,
                                        "longitude": 7.15,
                                        "title": "Vendlincourt",
                                        "OUI": "33.64 %"                                                         
                                    }];

                                    var imageSeries40to50 = cantonJU.series.push(new am4maps.MapImageSeries());
                                    var imageSeries40to50Template = imageSeries40to50.mapImages.template;
                                    var circle = imageSeries40to50Template.createChild(am4core.Circle);
                                    circle.radius = 8;                        
                                    circle.strokeWidth = 2;
                                    circle.nonScaling = true;
                                    circle.tooltipText = "{title} - {OUI}";
                                    circle.fill = am4core.color("#fd7272");

                                    imageSeries40to50.fill = am4core.color("#fd7272")
                                    imageSeries40to50.name = "40 à 50 %";
                                    imageSeries40to50.value = "40 à 50 %";
                                    imageSeries40to50.title = "Oui en %";

                                    imageSeries40to50Template.propertyFields.latitude = "latitude";
                                    imageSeries40to50Template.propertyFields.longitude = "longitude";                                    

                                    imageSeries40to50.data = [{
                                        "latitude": 47.45,
                                        "longitude": 7.03,
                                        "title": "Basse-Allaine",
                                        "OUI": "46.60 %"
                                    }, {
                                        "latitude": 47.26,
                                        "longitude": 7.02,
                                        "title": "Le Bémont",
                                        "OUI": "42.11 %"
                                    },{
                                        "latitude": 47.44,
                                        "longitude": 7.01,
                                        "title": "Bure",
                                        "OUI": "41.67 %"
                                    },{
                                        "latitude": 47.35,
                                        "longitude": 7.15,
                                        "title": "Clos du Doubs",
                                        "OUI": "49.52 %"   
                                    },{
                                        "latitude": 47.41,
                                        "longitude": 7.16,
                                        "title": "Cornol",
                                        "OUI": "46.06 %"   
                                    },{
                                        "latitude": 47.34,
                                        "longitude": 7.37,
                                        "title": "Courrendlin",
                                        "OUI": "40.98 %"  
                                    },{
                                        "latitude": 47.34,
                                        "longitude": 7.32,
                                        "title": "Courtételle",
                                        "OUI": "45.49 %"
                                    },{
                                        "latitude": 47.37,
                                        "longitude": 7.35,
                                        "title": "Delémont",
                                        "OUI": "47.81 %"
                                    }, {
                                        "latitude": 47.36,
                                        "longitude": 7.30,
                                        "title": "Develier",
                                        "OUI": "42.62 %"
                                    },{
                                        "latitude": 47.29,
                                        "longitude": 7.05,
                                        "title": "Les Enfers",
                                        "OUI": "44.44 %"
                                    },{
                                        "latitude": 47.40,
                                        "longitude": 7.08,
                                        "title": "Fontenais",
                                        "OUI": "42.16 %"
                                    },{
                                        "latitude": 47.26,
                                        "longitude": 7.13,
                                        "title": "Les Genevez",
                                        "OUI": "41.25 %"
                                    },{
                                        "latitude": 47.39,
                                        "longitude": 6.94,
                                        "title": "Grandfontaine",
                                        "OUI": "47.26 %"
                                    },{ 
                                        "latitude": 47.38,
                                        "longitude": 7.00,
                                        "title": "Haute-Ajoie",
                                        "OUI": "42.57 %"
                                    },{                                       
                                        "latitude": 47.22,
                                        "longitude": 7.03,
                                        "title": "La Chaux-des-Breuleux",
                                        "OUI": "47.22 %"
                                    },{
                                        "latitude": 47.23,
                                        "longitude": 6.96,
                                        "title": "Le Noirmont",
                                        "OUI": "48.16 %"
                                    },{
                                        "latitude": 47.49,
                                        "longitude": 7.10,
                                        "title": "Lugnez",
                                        "OUI": "45.16 %"
                                    },{
                                        "latitude": 47.34,
                                        "longitude": 7.50,
                                        "title": "Mervelier",
                                        "OUI": "42.60 %"
                                    },{
                                        "latitude": 47.25,
                                        "longitude": 6.98,
                                        "title": "Muriaux",
                                        "OUI": "44.39 %"
                                    },{
                                        "latitude": 47.41,
                                        "longitude": 7.29,
                                        "title": "Pleigne",
                                        "OUI": "45.26 %"
                                    },{
                                        "latitude": 47.42,
                                        "longitude": 7.08,
                                        "title": "Porrentruy",
                                        "OUI": "43.63 %"
                                    },{
                                        "latitude": 47.30,
                                        "longitude": 7.15,
                                        "title": "Saulcy",
                                        "OUI": "42.86 %" 
                                    },{ 
                                        "latitude": 47.31,
                                        "longitude": 7.11,
                                        "title": "Saint-Brais",
                                        "OUI": "48.45 %"
                                    }];   
                                           
                                    var imageSeries50to60 = cantonJU.series.push(new am4maps.MapImageSeries());
                                    var imageSeries50to60Template = imageSeries50to60.mapImages.template;
                                    var circle = imageSeries50to60Template.createChild(am4core.Circle);
                                    circle.radius = 8;                        
                                    circle.strokeWidth = 2;
                                    circle.nonScaling = true;
                                    circle.tooltipText = "{title} - {OUI}";
                                    circle.fill = am4core.color("#88e56f");
                                    
                                    imageSeries50to60.fill = am4core.color("#88e56f")
                                    imageSeries50to60.name = "50 à 60 %";
                                    imageSeries50to60.value = "50 à 60 %";
                                    imageSeries50to60.title = "Oui en %";

                                    imageSeries50to60Template.propertyFields.latitude = "latitude";
                                    imageSeries50to60Template.propertyFields.longitude = "longitude";                                    

                                    imageSeries50to60.data = [{                                                                                                                         
                                        "latitude": 47.44,
                                        "longitude": 7.06,
                                        "title": "Courchavon",
                                        "OUI": "50.76 %"
                                    },{                                     
                                        "latitude": 47.28,
                                        "longitude": 7.14,
                                        "title": "Lajoux",
                                        "OUI": "56.74 %"
                                    },{       
                                        "latitude": 47.18,
                                        "longitude": 6.91,
                                        "title": "Les Bois",
                                        "OUI": "55.74 %"
                                    },{
                                        "latitude": 47.21,
                                        "longitude": 7.00,
                                        "title": "Les Breuleux",
                                        "OUI": "56.51 %"
                                    },{  
                                        "latitude": 47.39,
                                        "longitude": 7.32,
                                        "title": "Mettembert",
                                        "OUI": "57.69 %"
                                    },{
                                        "latitude": 47.27,
                                        "longitude": 7.05,
                                        "title": "Montfaucon",
                                        "OUI": "52.02 %"
                                    },{
                                        "latitude": 47.26,
                                        "longitude": 7.00,
                                        "title": "Saignelégier",
                                        "OUI": "52.05 %" 
                                    },{ 
                                        "latitude": 47.31,
                                        "longitude": 7.05,
                                        "title": "Soubey",
                                        "OUI": "51.92 %"
                                    }];
                                </script>
                                </li>
                                <li>
                                <div class="uk-overflow-auto">    
                                    <table class="uk-table uk-table-small uk-table-divider uk-table-striped uk-table-hover">
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
                                                <td>Boécourt</td>
                                                <td>41.13 %</td>
                                                <td>80</td>
                                                <td>28.17 %</td>
                                            </tr>
                                            <tr>
                                                <td>Bourrignon</td>
                                                <td>54.96 %</td>
                                                <td>37</td>
                                                <td>30.83 %</td>
                                            </tr>
                                            <tr>
                                                <td>Châtillon</td>
                                                <td>47.12 %</td>
                                                <td>65</td>
                                                <td>37.36 %</td>
                                            </tr>
                                            <tr>
                                                <td>Courchapoix</td>
                                                <td>39.88 %</td>
                                                <td>47</td>
                                                <td>35.61 %</td>
                                            </tr>
                                            <tr>
                                                <td>Courrendlin</td>
                                                <td>35.95 %</td>
                                                <td>352</td>
                                                <td>40.98 %</td>
                                            </tr>
                                            <tr>
                                                <td>Courroux</td>
                                                <td>38.73 %</td>
                                                <td>317</td>
                                                <td>39.23 %</td>
                                            </tr>
                                            <tr>
                                                <td>Courtételle</td>
                                                <td>38.74 %</td>
                                                <td>338</td>
                                                <td>45.49 %</td>
                                            </tr>
                                            <tr>
                                                <td>Delémont</td>
                                                <td>38.55 %</td>
                                                <td>1'596</td>
                                                <td>47.81 %</td>
                                            </tr>
                                            <tr>
                                                <td>Develier</td>
                                                <td>43.06 %</td>
                                                <td>179</td>
                                                <td>42.62 %</td>
                                            </tr>
                                            <tr>
                                                <td>Ederswiler</td>
                                                <td>35.29 %</td>
                                                <td>10</td>
                                                <td>29.41 %</td>
                                            </tr>
                                            <tr>
                                                <td>Haute-Sorne</td>
                                                <td>38.77 %</td>
                                                <td>742</td>
                                                <td>37.74 %</td>
                                            </tr>
                                            <tr>
                                                <td>Mervelier</td>
                                                <td>42.24 %</td>
                                                <td>72</td>
                                                <td>42.60 %</td>
                                            </tr>
                                            <tr>
                                                <td>Mettembert</td>
                                                <td>62.50 %</td>
                                                <td>30</td>
                                                <td>57.69 %</td>
                                            </tr>
                                            <tr>
                                                <td>Movelier</td>
                                                <td>41.90 %</td>
                                                <td>847</td>
                                                <td>33.57 %</td>
                                            </tr>
                                            <tr>
                                                <td>Pleigne</td>
                                                <td>46.25 %</td>
                                                <td>62</td>
                                                <td>45.26 %</td>
                                            </tr>
                                            <tr>
                                                <td>Rossemaison</td>
                                                <td>49.25 %</td>
                                                <td>97</td>
                                                <td>38.96 %</td>
                                            </tr>
                                            <tr>
                                                <td>Saulcy</td>
                                                <td>50.45 %</td>
                                                <td>45</td>
                                                <td>42.86 %</td>
                                            </tr>
                                            <tr>
                                                <td>Soyhières</td>
                                                <td>45.21 %</td>
                                                <td>46</td>
                                                <td>30.46 %</td>
                                            </tr>
                                            <tr>
                                                <td>Val-Terbi</td>
                                                <td>37.60 %</td>
                                                <td>344</td>
                                                <td>38.01 %</td>
                                            </tr>
                                            <tr>
                                                <td><b>Totaux</b></td>
                                                <td><b>39.40 %</b></td>
                                                <td><b>4'506</b></td>
                                                <td><b>41.78 %</b></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
                                <div class="uk-overflow-auto">    
                                    <table class="uk-table uk-table-small uk-table-divider uk-table-striped uk-table-hover">
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
                                                <td>Alle</td>
                                                <td>47.57 %</td>
                                                <td>252</td>
                                                <td>37.84 %</td>
                                            </tr>
                                            <tr>
                                                <td>La Baroche</td>
                                                <td>47.78 %</td>
                                                <td>161</td>
                                                <td>36.34 %</td>
                                            </tr>
                                            <tr>
                                                <td>Basse-Allaine</td>
                                                <td>42.01 %</td>
                                                <td>185</td>
                                                <td>46.60 %</td>
                                            </tr>
                                            <tr>
                                                <td>Beurnevésin</td>
                                                <td>37.50 %</td>
                                                <td>7</td>
                                                <td>17.07 %</td>
                                            </tr>
                                            <tr>
                                                <td>Boncourt</td>
                                                <td>40.09 %</td>
                                                <td>181</td>
                                                <td>44.58 %</td>
                                            </tr>
                                            <tr>
                                                <td>Bonfol</td>
                                                <td>37.98 %</td>
                                                <td>71</td>
                                                <td>31.84 %</td>
                                            </tr>
                                            <tr>
                                                <td>Bure</td>
                                                <td>45.82 %</td>
                                                <td>100</td>
                                                <td>41.67 %</td>
                                            </tr>
                                            <tr>
                                                <td>Clos du Doubs</td>
                                                <td>43.53 %</td>
                                                <td>208</td>
                                                <td>49.52 %</td>
                                            </tr>
                                            <tr>
                                                <td>Coeuve</td>
                                                <td>46.42 %</td>
                                                <td>92</td>
                                                <td>37.25 %</td>
                                            </tr>
                                            <tr>
                                                <td>Cornol</td>
                                                <td>41.06 %</td>
                                                <td>152</td>
                                                <td>46.06 %</td>
                                            </tr>
                                            <tr>
                                                <td>Courchavon</td>
                                                <td>57.98 %</td>
                                                <td>67</td>
                                                <td>50.76 %</td>
                                            </tr>
                                            <tr>
                                                <td>Courgenay</td>
                                                <td>44.66 %</td>
                                                <td>259</td>
                                                <td>32.78 %</td>
                                            </tr>
                                            <tr>
                                                <td>Courtedoux</td>
                                                <td>48.35 %</td>
                                                <td>113</td>
                                                <td>39.24 %</td>
                                            </tr>
                                            <tr>
                                                <td>Damphreux</td>
                                                <td>52.20 %</td>
                                                <td>26</td>
                                                <td>32.50 %</td>
                                            </tr>
                                            <tr>
                                                <td>Fahy</td>
                                                <td>42.22 %</td>
                                                <td>29</td>
                                                <td>25.00 %</td>
                                            </tr>
                                            <tr>
                                                <td>Fontenais</td>
                                                <td>51.07 %</td>
                                                <td>261</td>
                                                <td>42.16 %</td>
                                            </tr>
                                            <tr>
                                                <td>Grandfontaine</td>
                                                <td>47.18 %</td>
                                                <td>69</td>
                                                <td>47.26 %</td>
                                            </tr>
                                            <tr>
                                                <td>Haute-Ajoie</td>
                                                <td>45.90 %</td>
                                                <td>169</td>
                                                <td>42.57 %</td>
                                            </tr>
                                            <tr>
                                                <td>Lugnez</td>
                                                <td>42.31 %</td>
                                                <td>28</td>
                                                <td>45.16 %</td>
                                            </tr>
                                            <tr>
                                                <td>Porrentruy</td>
                                                <td>43.94 %</td>
                                                <td>914</td>
                                                <td>43.63 %</td>
                                            </tr>
                                            <tr>
                                                <td>Vendlincourt</td>
                                                <td>44.55 %</td>
                                                <td>72</td>
                                                <td>33.64 %</td>
                                            </tr>
                                            <tr>
                                                <td><b>Totaux</b></td>
                                                <td><b>44.89 %</b></td>
                                                <td><b>3'416</b></td>
                                                <td><b>40.90 %</b></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
                                <div class="uk-overflow-auto">    
                                    <table class="uk-table uk-table-small uk-table-divider uk-table-striped uk-table-hover">
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
                                                <td>Le Bémont</td>
                                                <td>48.59 %</td>
                                                <td>56</td>
                                                <td>42.11 %</td>
                                            </tr>
                                            <tr>
                                                <td>Les Bois</td>
                                                <td>34.07 %</td>
                                                <td>170</td>
                                                <td>55.74 %</td>
                                            </tr>
                                            <tr>
                                                <td>Les Breuleux</td>
                                                <td>46.27 %</td>
                                                <td>269</td>
                                                <td>56.51 %</td>
                                            </tr>
                                            <tr>
                                                <td>La Chaux-des-Breuleux</td>
                                                <td>39.56 %</td>
                                                <td>17</td>
                                                <td>47.22 %</td>
                                            </tr>
                                            <tr>
                                                <td>Les Enfers</td>
                                                <td>53.66 %</td>
                                                <td>28</td>
                                                <td>44.44 %</td>
                                            </tr>
                                            <tr>
                                                <td>Les Genevez</td>
                                                <td>38.78 %</td>
                                                <td>66</td>
                                                <td>41.25 %</td>
                                            </tr>
                                            <tr>
                                                <td>Lajoux</td>
                                                <td>41.43 %</td>
                                                <td>122</td>
                                                <td>56.74 %</td>
                                            </tr>
                                            <tr>
                                                <td>Montfaucon</td>
                                                <td>45.95 %</td>
                                                <td>103</td>
                                                <td>52.02 %</td>
                                            </tr>
                                            <tr>
                                                <td>Muriaux</td>
                                                <td>46.05 %</td>
                                                <td>83</td>
                                                <td>44.39 %</td>
                                            </tr>
                                            <tr>
                                                <td>Le Noirmont</td>
                                                <td>39.92 %</td>
                                                <td>262</td>
                                                <td>48.16 %</td>
                                            </tr>
                                            <tr>
                                                <td>Saignelégier</td>
                                                <td>44.82 %</td>
                                                <td>458</td>
                                                <td>52.05 %</td>
                                            </tr>
                                            <tr>
                                                <td>St-Brais</td>
                                                <td>53.50 %</td>
                                                <td>47</td>
                                                <td>48.45 %</td>
                                            </tr>
                                            <tr>
                                                <td>Soubey</td>
                                                <td>35.86 %</td>
                                                <td>27</td>
                                                <td>51.92 %</td>
                                            </tr>
                                            <tr>
                                                <td><b>Totaux</b></td>
                                                <td><b>42.78 %</b></td>
                                                <td><b>1'708</b></td>
                                                <td><b>51.05 %</b></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            </ul>

                        </div>
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