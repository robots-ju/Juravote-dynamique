<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
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
                        <p><b>Participation : </b>59.40 %</p>
                        <p><b>Résultat : </b>Accepté</p>
                        <p><b>Type de la votation : </b>Votation fédérale</p>
                        <p><b>Mode de votation : </b>Référendum</p>
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
                                "suffrages": 1605700
                            }, {
                                "votes": "NON",
                                "suffrages": 1597030
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
                            var série30to40 = resultatsDiscriminationCH.series.push(new am4maps.MapPolygonSeries());
                            série30to40.name = "30 à 40 %";
                            série30to40.value = "30 à 40 %";
                            série30to40.title = "Oui en %";
                            série30to40.useGeodata = true;
                            série30to40.include = ["CH-BL", "CH-NE", "CH-VD", "CH-JU", "CH-GE"];
                            série30to40.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série30to40.fill = am4core.color("#e74545")
                            série30to40.mapPolygons.template.fill = am4core.color("#e74545")

                            var série40to50 = resultatsDiscriminationCH.series.push(new am4maps.MapPolygonSeries());
                            série40to50.name = "40 à 50 %";
                            série40to50.value = "40 à 50 %";
                            série40to50.title = "Oui en %";
                            série40to50.useGeodata = true;
                            série40to50.include = ["CH-BS", "CH-TI", "CH-FR"];
                            série40to50.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série40to50.fill = am4core.color("#fd7272")
                            série40to50.mapPolygons.template.fill = am4core.color("#fd7272")

                            var série50to60 = resultatsDiscriminationCH.series.push(new am4maps.MapPolygonSeries());
                            série50to60.name = "50 à 60 %";
                            série50to60.value = "50 à 60 %";
                            série50to60.title = "Oui en %";
                            série50to60.useGeodata = true;
                            série50to60.include = ["CH-LU", "CH-ZG", "CH-SH", "CH-AR", "CH-AI", "CH-SG", "CH-GR", "CH-VS", "CH-SO",
                            "CH-BE", "CH-TG", "CH-AG", "CH-ZH"];
                            série50to60.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série50to60.fill = am4core.color("#88e56f")
                            série50to60.mapPolygons.template.fill = am4core.color("#88e56f")

                            var série60to70 = resultatsDiscriminationCH.series.push(new am4maps.MapPolygonSeries());
                            série60to70.name = "60 à 70 %";
                            série60to70.value = "60 à 70 %";
                            série60to70.title = "Oui en %";
                            série60to70.useGeodata = true;
                            série60to70.include = ["CH-UR", "CH-SZ", "CH-OW", "CH-NW", "CH-GL"];
                            série60to70.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série60to70.fill = am4core.color("#63cf46")
                            série60to70.mapPolygons.template.fill = am4core.color("#63cf46")

                            resultatsDiscriminationCH.legend = new am4maps.Legend();
                            resultatsDiscriminationCH.legend.position = "left";
                        </script>
                    </div>
                </div>
            </div>
            <!--<div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column" uk-grid>
                            <h2>Résultats Jura</h2>
                        </div>
                    </div>
                    <div style="padding-top: 0.5%" class="uk-card-body">
                        <div class="uk-grid-small"  uk-grid>
                            <div uk-switcher="animation: uk-animation-fade; toggle: > *">
                                <button class="uk-button uk-button-default" type="button">Jura</button>
                                <button class="uk-button uk-button-default" type="button">District Delémont</button>
                                <button class="uk-button uk-button-default" type="button">District Ajoie</button>
                                <button class="uk-button uk-button-default" type="button">District Franches-Montagnes</button>                                
                            </div>
                            <ul class="uk-switcher uk-margin">
                                <li>
                                <div id="chartdiv3" style="width: 100%; height: 300px; padding-top: 1%"></div>
                                <script>                                
                                    var cantonJU = am4core.create("chartdiv3", am4maps.MapChart);
                                    cantonJU.geodata = am4geodata_switzerlandHigh;
                                    cantonJU.projection = new am4maps.projections.Miller();
                                    var polygonSeries = cantonJU.series.push(new am4maps.MapPolygonSeries());
                                    polygonSeries.useGeodata = true;
                                    polygonSeries.mapPolygons.template.events.on("hit", function (ev) {
                                    cantonJU.zoomToMapObject(evtarget);
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
                                        "latitude": 47.28,
                                        "longitude": 7.14,
                                        "title": "Lajoux",
                                        "OUI": "18.78 %"
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
                                        "OUI": "29.69 %"
                                    },{   
                                        "latitude": 47.35,
                                        "longitude": 7.46,
                                        "title": "Courchapoix",
                                        "OUI": "24.27 %"
                                    },{
                                        "latitude": 47.34,
                                        "longitude": 7.32,
                                        "title": "Courtételle",
                                        "OUI": "29.07 %"
                                    },{
                                        "latitude": 47.37,
                                        "longitude": 7.35,
                                        "title": "Delémont",
                                        "OUI": "28.84 %"
                                    },{
                                        "latitude": 47.35,
                                        "longitude": 7.23,
                                        "title": "Haute-Sorne",
                                        "OUI": "27.72 %" 
                                    },{  
                                        "latitude": 47.18,
                                        "longitude": 6.91,
                                        "title": "Les Bois",
                                        "OUI": "28.50 %"
                                    },{
                                        "latitude": 47.21,
                                        "longitude": 7.00,
                                        "title": "Les Breuleux",
                                        "OUI": "28.51 %"
                                    },{
                                        "latitude": 47.27,
                                        "longitude": 7.05,
                                        "title": "Montfaucon",
                                        "OUI": "27.30 %"
                                    },{
                                        "latitude": 47.42,
                                        "longitude": 7.08,
                                        "title": "Porrentruy",
                                        "OUI": "25.74 %"
                                    },{ 
                                        "latitude": 47.26,
                                        "longitude": 7.00,
                                        "title": "Saignelégier",
                                        "OUI": "21.06 %"
                                    },{
                                        "latitude": 47.31,
                                        "longitude": 7.11,
                                        "title": "Saint-Brais",
                                        "OUI": "21.26 %"
                                    },{
                                        "latitude": 47.45,
                                        "longitude": 7.10,
                                        "title": "Coeuve",
                                        "OUI": "28.15 %"   
                                    },{
                                        "latitude": 47.40,
                                        "longitude": 7.08,
                                        "title": "Fontenais",
                                        "OUI": "24.12 %"
                                    },{                                        
                                        "latitude": 47.31,
                                        "longitude": 7.05,
                                        "title": "Soubey",
                                        "OUI": "28.95 %" 
                                    },{
                                        "latitude": 47.23,
                                        "longitude": 6.96,
                                        "title": "Le Noirmont",
                                        "OUI": "25.74 %"                 
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
                                        "latitude": 47.33,
                                        "longitude": 7.35,
                                        "title": "Châtillon",
                                        "OUI": "32.16 %"  
                                    },{
                                        "latitude": 47.34,
                                        "longitude": 7.37,
                                        "title": "Courrendlin",
                                        "OUI": "34.00 %"  
                                    },{
                                        "latitude": 47.36,
                                        "longitude": 7.37,
                                        "title": "Courroux",
                                        "OUI": "31.53 %"
                                    },{
                                        "latitude": 47.36,
                                        "longitude": 7.30,
                                        "title": "Develier",
                                        "OUI": "32.39 %"
                                    },{
                                        "latitude": 47.34,
                                        "longitude": 7.50,
                                        "title": "Mervelier",
                                        "OUI": "35.77 %"
                                    },{
                                        "latitude": 47.39,
                                        "longitude": 7.32,
                                        "title": "Mettembert",
                                        "OUI": "31.75 %"
                                    },{
                                        "latitude": 47.35,
                                        "longitude": 7.34,
                                        "title": "Rossemaison",
                                        "OUI": "33.72 %" 
                                    },{ 
                                        "latitude": 47.30,
                                        "longitude": 7.15,
                                        "title": "Saulcy",
                                        "OUI": "34.67 %" 
                                    },{ 
                                        "latitude": 47.35,
                                        "longitude": 7.41,
                                        "title": "Val-Terbi",
                                        "OUI": "32.05 %"
                                    },{
                                        "latitude": 47.26,
                                        "longitude": 7.02,
                                        "title": "Le Bémont",
                                        "OUI": "37.29 %"
                                    },{
                                        "latitude": 47.22,
                                        "longitude": 7.03,
                                        "title": "La Chaux-des-Breuleux",
                                        "OUI": "39.58 %"
                                    },{                                       
                                        "latitude": 47.29,
                                        "longitude": 7.05,
                                        "title": "Les Enfers",
                                        "OUI": "37.21 %"
                                    },{                                                                             
                                        "latitude": 47.26,
                                        "longitude": 7.13,
                                        "title": "Les Genevez",
                                        "OUI": "37.50 %"
                                    },{
                                        "latitude": 47.25,
                                        "longitude": 6.98,
                                        "title": "Muriaux",
                                        "OUI": "31.23 %"
                                    },{
                                        "latitude": 47.43,
                                        "longitude": 7.13,
                                        "title": "Alle",
                                        "OUI": "33.94 %"
                                    },{
                                        "latitude": 47.45,
                                        "longitude": 7.03,
                                        "title": "Basse-Allaine",
                                        "OUI": "36.38 %"
                                    },{ 
                                        "latitude": 47.49,
                                        "longitude": 7.14,
                                        "title": "Beurnevésin",
                                        "OUI": "38.60 %"
                                    },{
                                        "latitude": 47.50,
                                        "longitude": 7.02,
                                        "title": "Boncourt",
                                        "OUI": "36.49 %"
                                    },{
                                        "latitude": 47.47,
                                        "longitude": 7.15,
                                        "title": "Bonfol",
                                        "OUI": "35.59 %"
                                    },{
                                        "latitude": 47.35,
                                        "longitude": 7.15,
                                        "title": "Clos du Doubs",
                                        "OUI": "30.58 %"   
                                    },{
                                        "latitude": 47.41,
                                        "longitude": 7.16,
                                        "title": "Cornol",
                                        "OUI": "34.42 %"   
                                    },{
                                        "latitude": 47.40,
                                        "longitude": 7.13,
                                        "title": "Courgenay",
                                        "OUI": "31.58 %"
                                    },{
                                        "latitude": 47.41,
                                        "longitude": 7.04,
                                        "title": "Courtedoux",
                                        "OUI": "31.43 %"
                                    },{
                                        "latitude": 47.42,
                                        "longitude": 6.95,
                                        "title": "Fahy",
                                        "OUI": "31.89 %"
                                    },{
                                        "latitude": 47.39,
                                        "longitude": 6.94,
                                        "title": "Grandfontaine",
                                        "OUI": "38.12 %"
                                    },{ 
                                        "latitude": 47.38,
                                        "longitude": 7.00,
                                        "title": "Haute-Ajoie",
                                        "OUI": "37.88 %"
                                    },{
                                        "latitude": 47.49,
                                        "longitude": 7.10,
                                        "title": "Lugnez",
                                        "OUI": "33.00 %"
                                    },{   
                                        "latitude": 47.42,
                                        "longitude": 7.08,
                                        "title": "Porrentruy",
                                        "OUI": "33.97 %"
                                    },{                                                                   
                                        "latitude": 47.45,
                                        "longitude": 7.15,
                                        "title": "Vendlincourt",
                                        "OUI": "39.04 %"                                         
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
                                        "latitude": 47.40,
                                        "longitude": 7.24,
                                        "title": "Bourrignon",
                                        "OUI": "40.65 %"
                                    },{  
                                        "latitude": 47.41,
                                        "longitude": 7.32,
                                        "title": "Movelier",
                                        "OUI": "43.46 %"
                                    },{ 
                                        "latitude": 47.41,
                                        "longitude": 7.29,
                                        "title": "Pleigne",
                                        "OUI": "49.26 %"
                                    },{
                                        "latitude": 47.39,
                                        "longitude": 7.37,
                                        "title": "Soyhières",
                                        "OUI": "41.67 %" 
                                    },{  
                                        "latitude": 47.43,
                                        "longitude": 7.17,
                                        "title": "La Baroche",
                                        "OUI": "41.36 %"
                                    },{  
                                        "latitude": 47.44,
                                        "longitude": 7.06,
                                        "title": "Courchavon",
                                        "OUI": "40.38 %"
                                    },{  
                                        "latitude": 47.47,
                                        "longitude": 7.10,
                                        "title": "Damphreux",
                                        "OUI": "41.94 %"                                                                         
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
                                        "longitude": 7.01,
                                        "title": "Bure",
                                        "OUI": "50.99 %"                                   
                                    }];

                                    var imageSeries60to70 = cantonJU.series.push(new am4maps.MapImageSeries());
                                    var imageSeries60to70Template = imageSeries60to70.mapImages.template;
                                    var circle = imageSeries60to70Template.createChild(am4core.Circle);
                                    circle.radius = 8;                        
                                    circle.strokeWidth = 2;
                                    circle.nonScaling = true;
                                    circle.tooltipText = "{title} - {OUI}";
                                    circle.fill = am4core.color("#63cf46");
                                    
                                    imageSeries60to70.fill = am4core.color("#63cf46")
                                    imageSeries60to70.name = "60 à 70 %";
                                    imageSeries60to70.value = "60 à 70 %";
                                    imageSeries60to70.title = "Oui en %";

                                    imageSeries60to70Template.propertyFields.latitude = "latitude";
                                    imageSeries60to70Template.propertyFields.longitude = "longitude";                                    

                                    imageSeries60to70.data = [{
                                        "latitude": 47.43,
                                        "longitude": 7.34,
                                        "title": "Ederswiler",
                                        "OUI": "67.24 %"
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
                                                <td>60.85 %</td>
                                                <td>125</td>
                                                <td>29.69 %</td>
                                            </tr>
                                            <tr>
                                                <td>Bourrignon</td>
                                                <td>64.46 %</td>
                                                <td>63</td>
                                                <td>40.65 %</td>
                                            </tr>
                                            <tr>
                                                <td>Châtillon</td>
                                                <td>65.53 %</td>
                                                <td>73</td>
                                                <td>32.16 %</td>
                                            </tr>
                                            <tr>
                                                <td>Courchapoix</td>
                                                <td>60.53 %</td>
                                                <td>50</td>
                                                <td>24.27 %</td>
                                            </tr>
                                            <tr>
                                                <td>Courrendlin</td>
                                                <td>57.51 %</td>
                                                <td>425</td>
                                                <td>34.00 %</td>
                                            </tr>
                                            <tr>
                                                <td>Courroux</td>
                                                <td>60.88 %</td>
                                                <td>436</td>
                                                <td>31.53 %</td>
                                            </tr>
                                            <tr>
                                                <td>Courtételle</td>
                                                <td>60.75 %</td>
                                                <td>318</td>
                                                <td>29.07 %</td>
                                            </tr>
                                            <tr>
                                                <td>Delémont</td>
                                                <td>55.30 %</td>
                                                <td>1'181</td>
                                                <td>28.84 %</td>
                                            </tr>
                                            <tr>
                                                <td>Develier</td>
                                                <td>61.40 %</td>
                                                <td>194</td>
                                                <td>32.39 %</td>
                                            </tr>
                                            <tr>
                                                <td>Ederswiler</td>
                                                <td>61.07 %</td>
                                                <td>39</td>
                                                <td>67.24 %</td>
                                            </tr>
                                            <tr>
                                                <td>Haute-Sorne</td>
                                                <td>58.08 %</td>
                                                <td>789</td>
                                                <td>27.72 %</td>
                                            </tr>
                                            <tr>
                                                <td>Mervelier</td>
                                                <td>65.49 %</td>
                                                <td>98</td>
                                                <td>35.77 %</td>
                                            </tr>
                                            <tr>
                                                <td>Mettembert</td>
                                                <td>81.01 %</td>
                                                <td>20</td>
                                                <td>31.75 %</td>
                                            </tr>
                                            <tr>
                                                <td>Movelier</td>
                                                <td>57.69 %</td>
                                                <td>83</td>
                                                <td>43.46 %</td>
                                            </tr>
                                            <tr>
                                                <td>Pleigne</td>
                                                <td>65.31 %</td>
                                                <td>100</td>
                                                <td>49.26 %</td>
                                            </tr>
                                            <tr>
                                                <td>Rossemaison</td>
                                                <td>67.37 %</td>
                                                <td>117</td>
                                                <td>33.72 %</td>
                                            </tr>
                                            <tr>
                                                <td>Saulcy</td>
                                                <td>70.70 %</td>
                                                <td>52</td>
                                                <td>34.67 %</td>
                                            </tr>
                                            <tr>
                                                <td>Soyhières</td>
                                                <td>60.24 %</td>
                                                <td>80</td>
                                                <td>41.67 %</td>
                                            </tr>
                                            <tr>
                                                <td>Val-Terbi</td>
                                                <td>60.59 %</td>
                                                <td>466</td>
                                                <td>32.05 %</td>
                                            </tr>
                                            <tr>
                                                <td><b>Totaux</b></td>
                                                <td><b>58.87 %</b></td>
                                                <td><b>4'709</b></td>
                                                <td><b>30.96 %</b></td>
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
                                                <td>59.81 %</td>
                                                <td>279</td>
                                                <td>33.94 %</td>
                                            </tr>
                                            <tr>
                                                <td>La Baroche</td>
                                                <td>58.87 %</td>
                                                <td>225</td>
                                                <td>41.36 %</td>
                                            </tr>
                                            <tr>
                                                <td>Basse-Allaine</td>
                                                <td>56.45 %</td>
                                                <td>191</td>
                                                <td>36.38 %</td>
                                            </tr>
                                            <tr>
                                                <td>Beurnevésin</td>
                                                <td>52.25 %</td>
                                                <td>22</td>
                                                <td>38.60 %</td>
                                            </tr>
                                            <tr>
                                                <td>Boncourt</td>
                                                <td>57.46 %</td>
                                                <td>204</td>
                                                <td>36.49 %</td>
                                            </tr>
                                            <tr>
                                                <td>Bonfol</td>
                                                <td>49.83 %</td>
                                                <td>105</td>
                                                <td>35.59 %</td>
                                            </tr>
                                            <tr>
                                                <td>Bure</td>
                                                <td>62.94 %</td>
                                                <td>181</td>
                                                <td>50.99 %</td>
                                            </tr>
                                            <tr>
                                                <td>Clos du Doubs</td>
                                                <td>59.53 %</td>
                                                <td>196</td>
                                                <td>30.58 %</td>
                                            </tr>
                                            <tr>
                                                <td>Coeuve</td>
                                                <td>66.67 %</td>
                                                <td>105</td>
                                                <td>28.15 %</td>
                                            </tr>
                                            <tr>
                                                <td>Cornol</td>
                                                <td>55.86 %</td>
                                                <td>159</td>
                                                <td>34.42 %</td>
                                            </tr>
                                            <tr>
                                                <td>Courchavon</td>
                                                <td>66.53 %</td>
                                                <td>63</td>
                                                <td>40.38 %</td>
                                            </tr>
                                            <tr>
                                                <td>Courgenay</td>
                                                <td>60.22 %</td>
                                                <td>325</td>
                                                <td>31.58 %</td>
                                            </tr>
                                            <tr>
                                                <td>Courtedoux</td>
                                                <td>66.27 %</td>
                                                <td>121</td>
                                                <td>31.43 %</td>
                                            </tr>
                                            <tr>
                                                <td>Damphreux</td>
                                                <td>62.25 %</td>
                                                <td>39</td>
                                                <td>41.94 %</td>
                                            </tr>
                                            <tr>
                                                <td>Fahy</td>
                                                <td>62.50 %</td>
                                                <td>59</td>
                                                <td>31.89 %</td>
                                            </tr>
                                            <tr>
                                                <td>Fontenais</td>
                                                <td>62.25 %</td>
                                                <td>192</td>
                                                <td>24.12 %</td>
                                            </tr>
                                            <tr>
                                                <td>Grandfontaine</td>
                                                <td>61.49 %</td>
                                                <td>77</td>
                                                <td>38.12 %</td>
                                            </tr>
                                            <tr>
                                                <td>Haute-Ajoie</td>
                                                <td>59.76 %</td>
                                                <td>225</td>
                                                <td>37.88 %</td>
                                            </tr>
                                            <tr>
                                                <td>Lugnez</td>
                                                <td>66.67 %</td>
                                                <td>33</td>
                                                <td>33.00 %</td>
                                            </tr>
                                            <tr>
                                                <td>Porrentruy</td>
                                                <td>57.67 %</td>
                                                <td>894</td>
                                                <td>33.97 %</td>
                                            </tr>
                                            <tr>
                                                <td>Vendlincourt</td>
                                                <td>59.15 %</td>
                                                <td>114</td>
                                                <td>39.04 %</td>
                                            </tr>
                                            <tr>
                                                <td><b>Totaux</b></td>
                                                <td><b>59.32 %</b></td>
                                                <td><b>3'809</b></td>
                                                <td><b>34.32 %</b></td>
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
                                                <td>61.17 %</td>
                                                <td>66</td>
                                                <td>37.29 %</td>
                                            </tr>
                                            <tr>
                                                <td>Les Bois</td>
                                                <td>63.08 %</td>
                                                <td>171</td>
                                                <td>28.50 %</td>
                                            </tr>
                                            <tr>
                                                <td>Les Breuleux</td>
                                                <td>64.58 %</td>
                                                <td>201</td>
                                                <td>28.51 %</td>
                                            </tr>
                                            <tr>
                                                <td>La Chaux-des-Breuleux</td>
                                                <td>52.75 %</td>
                                                <td>19</td>
                                                <td>39.58 %</td>
                                            </tr>
                                            <tr>
                                                <td>Les Enfers</td>
                                                <td>73.55 %</td>
                                                <td>32</td>
                                                <td>37.21 %</td>
                                            </tr>
                                            <tr>
                                                <td>Les Genevez</td>
                                                <td>61.43 %</td>
                                                <td>99</td>
                                                <td>37.50 %</td>
                                            </tr>
                                            <tr>
                                                <td>Lajoux</td>
                                                <td>67.15 %</td>
                                                <td>68</td>
                                                <td>18.78 %</td>
                                            </tr>
                                            <tr>
                                                <td>Montfaucon</td>
                                                <td>65.23 %</td>
                                                <td>80</td>
                                                <td>27.30 %</td>
                                            </tr>
                                            <tr>
                                                <td>Muriaux</td>
                                                <td>65.60 %</td>
                                                <td>89</td>
                                                <td>31.23 %</td>
                                            </tr>
                                            <tr>
                                                <td>Le Noirmont</td>
                                                <td>61.92 %</td>
                                                <td>216</td>
                                                <td>25.74 %</td>
                                            </tr>
                                            <tr>
                                                <td>Saignelégier</td>
                                                <td>64.30 %</td>
                                                <td>270</td>
                                                <td>21.06 %</td>
                                            </tr>
                                            <tr>
                                                <td>St-Brais</td>
                                                <td>66.15 %</td>
                                                <td>27</td>
                                                <td>21.26 %</td>
                                            </tr>
                                            <tr>
                                                <td>Soubey</td>
                                                <td>53.06 %</td>
                                                <td>22</td>
                                                <td>28.95 %</td>
                                            </tr>
                                            <tr>
                                                <td><b>Totaux</b></td>
                                                <td><b>63.70 %</b></td>
                                                <td><b>1'360</b></td>
                                                <td><b>26.44 %</b></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>-->
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