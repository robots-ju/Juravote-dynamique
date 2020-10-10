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
                        <p><b>Objet : </b>Modification de la loi fédérale sur l’impôt fédéral direct</p>
                        <p><b>Participation : </b>59.20 %</p>
                        <p><b>Résultat : </b>Refusé</p>
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
                                "suffrages": 1164329
                            }, {
                                "votes": "NON",
                                "suffrages": 2003012
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
                            var série20to30 = resultatsDiscriminationCH.series.push(new am4maps.MapPolygonSeries());
                            série20to30.name = "20 à 30 %";
                            série20to30.value = "20 à 30 %";
                            série20to30.title = "Oui en %";
                            série20to30.useGeodata = true;
                            série20to30.include = ["CH-AR", "CH-AI", "CH-BE"];
                            série20to30.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série20to30.fill = am4core.color("#ca2f2f")
                            série20to30.mapPolygons.template.fill = am4core.color("#ca2f2f")

                            var série30to40 = resultatsDiscriminationCH.series.push(new am4maps.MapPolygonSeries());
                            série30to40.name = "30 à 40 %";
                            série30to40.value = "30 à 40 %";
                            série30to40.title = "Oui en %";
                            série30to40.useGeodata = true;
                            série30to40.include = ["CH-LU", "CH-UR", "CH-NW", "CH-GL", "CH-ZG", "CH-OW", "CH-SO",
                            "CH-BS", "CH-BL", "CH-SH", "CH-SG", "CH-GR", "CH-TG", "CH-AG", "CH-ZH", "CH-SZ"];
                            série30to40.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série30to40.fill = am4core.color("#e74545")
                            série30to40.mapPolygons.template.fill = am4core.color("#e74545")

                            var série40to50 = resultatsDiscriminationCH.series.push(new am4maps.MapPolygonSeries());
                            série40to50.name = "40 à 50 %";
                            série40to50.value = "40 à 50 %";
                            série40to50.title = "Oui en %";
                            série40to50.useGeodata = true;
                            série40to50.include = ["CH-VD", "CH-VS", "CH-NE", "CH-JU", "CH-FR"];
                            série40to50.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série40to50.fill = am4core.color("#fd7272")
                            série40to50.mapPolygons.template.fill = am4core.color("#fd7272")

                            var série50to60 = resultatsDiscriminationCH.series.push(new am4maps.MapPolygonSeries());
                            série50to60.name = "50 à 60 %";
                            série50to60.value = "50 à 60 %";
                            série50to60.title = "Oui en %";
                            série50to60.useGeodata = true;
                            série50to60.include = ["CH-TI", "CH-GE",];
                            série50to60.mapPolygons.template.tooltipText = "{title} - {name} - {value}";
                            série50to60.fill = am4core.color("#88e56f")
                            série50to60.mapPolygons.template.fill = am4core.color("#88e56f")

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
                                    });
                                    var label = cantonJU.chartContainer.createChild(am4core.Label);
                                    polygonSeries.include = ["CH-JU"];
                                    polygonSeries.fill = am4core.color("#ffffff")
                                    
                                    cantonJU.legend = new am4maps.Legend();
                                    cantonJU.legend.position = "left";                                   

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
                                        "latitude": 47.49,
                                        "longitude": 7.14,
                                        "title": "Beurnevésin",
                                        "OUI": "23.64 %"
                                    }, {  
                                        "latitude": 47.29,
                                        "longitude": 7.05,
                                        "title": "Les Enfers",
                                        "OUI": "29.55 %"
                                    }, {                                     
                                        "latitude": 47.43,
                                        "longitude": 7.34,
                                        "title": "Ederswiler",
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
                                        "latitude": 47.36,
                                        "longitude": 7.21,
                                        "title": "Boécourt",
                                        "OUI": "38.82 %"
                                    }, {
                                        "latitude": 47.22,
                                        "longitude": 7.03,
                                        "title": "La Chaux-des-Breuleux",
                                        "OUI": "31.11 %"
                                    }, {
                                        "latitude": 47.35,
                                        "longitude": 7.46,
                                        "title": "Courchapoix",
                                        "OUI": "38.50 %"
                                    }, {
                                        "latitude": 47.36,
                                        "longitude": 7.37,
                                        "title": "Courroux",
                                        "OUI": "37.87 %"
                                    }, { 
                                        "latitude": 47.47,
                                        "longitude": 7.10,
                                        "title": "Damphreux",
                                        "OUI": "34.04 %"
                                    }, {
                                        "latitude": 47.42,
                                        "longitude": 6.95,
                                        "title": "Fahy",
                                        "OUI": "32.20 %"
                                    }, {       
                                        "latitude": 47.40,
                                        "longitude": 7.08,
                                        "title": "Fontenais",
                                        "OUI": "34.54 %"
                                    }, {                                                                  
                                        "latitude": 47.28,
                                        "longitude": 7.14,
                                        "title": "Lajoux",
                                        "OUI": "32.58 %"
                                    }, {    
                                        "latitude": 47.26,
                                        "longitude": 7.02,
                                        "title": "Le Bémont",
                                        "OUI": "38.73 %"
                                    }, {
                                        "latitude": 47.23,
                                        "longitude": 6.96,
                                        "title": "Le Noirmont",
                                        "OUI": "37.35 %"
                                    }, {  
                                        "latitude": 47.21,
                                        "longitude": 7.00,
                                        "title": "Les Breuleux",
                                        "OUI": "37.32 %"
                                    }, {
                                        "latitude": 47.39,
                                        "longitude": 7.32,
                                        "title": "Mettembert",
                                        "OUI": "31.03 %"
                                    }, {
                                        "latitude": 47.27,
                                        "longitude": 7.05,
                                        "title": "Montfaucon",
                                        "OUI": "39.45 %"
                                    }, {   
                                        "latitude": 47.41,
                                        "longitude": 7.32,
                                        "title": "Movelier",
                                        "OUI": "34.66 %"
                                    }, { 
                                        "latitude": 47.39,
                                        "longitude": 7.37,
                                        "title": "Soyhières",
                                        "OUI": "37.84 %"
                                    }, {
                                        "latitude": 47.45,
                                        "longitude": 7.15,
                                        "title": "Vendlincourt",
                                        "OUI": "38.18 %"
                                    }, {
                                        "latitude": 47.35,
                                        "longitude": 7.41,
                                        "title": "Val-Terbi",
                                        "OUI": "38.52 %" 
                                    }, {
                                          
                                                                                                                  
                                                                             
                                                                           
                                                                               
                                        "latitude": 47.30,
                                        "longitude": 7.15,
                                        "title": "Saulcy",
                                        "OUI": "39.01 %" 
                                                                     
                                                                            
                                                                                                
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
                                        "OUI": "48.10 %"
                                    }, {
                                        "latitude": 47.50,
                                        "longitude": 7.02,
                                        "title": "Boncourt",
                                        "OUI": "44.84 %"
                                    }, {
                                        "latitude": 47.47,
                                        "longitude": 7.15,
                                        "title": "Bonfol",
                                        "OUI": "43.66 %"
                                    }, {  
                                        "latitude": 47.40,
                                        "longitude": 7.24,
                                        "title": "Bourrignon",
                                        "OUI": "49.01 %"
                                    }, {                                        
                                        "latitude": 47.33,
                                        "longitude": 7.35,
                                        "title": "Châtillon",
                                        "OUI": "40.09 %"  
                                    }, {
                                        "latitude": 47.35,
                                        "longitude": 7.15,
                                        "title": "Clos du Doubs",
                                        "OUI": "43.51 %"   
                                    }, {
                                        "latitude": 47.41,
                                        "longitude": 7.16,
                                        "title": "Cornol",
                                        "OUI": "46.37 %"   
                                    }, {
                                        "latitude": 47.45,
                                        "longitude": 7.10,
                                        "title": "Coeuve",
                                        "OUI": "49.29%"   
                                    }, {    
                                        "latitude": 47.40,
                                        "longitude": 7.13,
                                        "title": "Courgenay",
                                        "OUI": "47.55 %"
                                    }, {
                                        "latitude": 47.41,
                                        "longitude": 7.04,
                                        "title": "Courtedoux",
                                        "OUI": "45.81 %"
                                    }, {
                                        "latitude": 47.34,
                                        "longitude": 7.32,
                                        "title": "Courtételle",
                                        "OUI": "40.71 %"
                                    }, {
                                        "latitude": 47.37,
                                        "longitude": 7.35,
                                        "title": "Delémont",
                                        "OUI": "40.33 %"
                                    }, { 
                                        "latitude": 47.36,
                                        "longitude": 7.30,
                                        "title": "Develier",
                                        "OUI": "45.90 %"
                                    }, {
                                        "latitude": 47.39,
                                        "longitude": 6.94,
                                        "title": "Grandfontaine",
                                        "OUI": "44.95 %"
                                    }, { 
                                        "latitude": 47.38,
                                        "longitude": 7.00,
                                        "title": "Haute-Ajoie",
                                        "OUI": "50.00 %"
                                    }, {      
                                        "latitude": 47.35,
                                        "longitude": 7.23,
                                        "title": "Haute-Sorne",
                                        "OUI": "41.03 %" 
                                    }, {      
                                        "latitude": 47.43,
                                        "longitude": 7.17,
                                        "title": "La Baroche",
                                        "OUI": "42.91 %"
                                    }, { 
                                        "latitude": 47.18,
                                        "longitude": 6.91,
                                        "title": "Les Bois",
                                        "OUI": "42.29 %"
                                    }, {
                                        "latitude": 47.26,
                                        "longitude": 7.13,
                                        "title": "Les Genevez",
                                        "OUI": "43.80 %"
                                    }, {    
                                        "latitude": 47.34,
                                        "longitude": 7.50,
                                        "title": "Mervelier",
                                        "OUI": "35.34 %" 
                                    }, {
                                        "latitude": 47.25,
                                        "longitude": 6.98,
                                        "title": "Muriaux",
                                        "OUI": "42.75 %"
                                    }, {
                                        "latitude": 47.41,
                                        "longitude": 7.29,
                                        "title": "Pleigne",
                                        "OUI": "37.00 %"  
                                    }, {
                                        "latitude": 47.42,
                                        "longitude": 7.08,
                                        "title": "Porrentruy",
                                        "OUI": "46.26 %"
                                    }, {
                                        "latitude": 47.35,
                                        "longitude": 7.34,
                                        "title": "Rossemaison",
                                        "OUI": "42.73 %"                                                               
                                    }, {                                        
                                        "latitude": 47.31,
                                        "longitude": 7.11,
                                        "title": "Saint-Brais",
                                        "OUI": "41.60 %" 
                                    }, {                                       
                                                                               
                                        "latitude": 47.26,
                                        "longitude": 7.00,
                                        "title": "Saignelégier",
                                        "OUI": "36.71 %"                                     
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
                                        "latitude": 47.43,
                                        "longitude": 7.13,
                                        "title": "Alle",
                                        "OUI": "52.46 %"
                                    }, {                                           
                                        "latitude": 47.44,
                                        "longitude": 7.01,
                                        "title": "Bure",
                                        "OUI": "52.60 %"
                                    }, {
                                        "latitude": 47.49,
                                        "longitude": 7.10,
                                        "title": "Lugnez",
                                        "OUI": "53.13 %"
                                    }, {
                                        "latitude": 47.44,
                                        "longitude": 7.06,
                                        "title": "Courchavon",
                                        "OUI": "51.33 %"                                    
                                    }, { 
                                        "latitude": 47.31,
                                        "longitude": 7.05,
                                        "title": "Soubey",
                                        "OUI": "56.16 %"      
                                    
                                    
                                    }];

                                    var imageSeries60to70 = cantonJU.series.push(new am4maps.MapImageSeries());
                                    var imageSeries60to70Template = imageSeries60to70.mapImages.template;
                                    var circle = imageSeries50to60Template.createChild(am4core.Circle);
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
                                        "latitude": 47.34,
                                        "longitude": 7.37,
                                        "title": "Courrendlin",
                                        "OUI": "60.59 %"
                                        
                                    }]
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
                                                <td>158</td>
                                                <td>38.82 %</td>
                                            </tr>
                                            <tr>
                                                <td>Bourrignon</td>
                                                <td>64.46 %</td>
                                                <td>74</td>
                                                <td>49.01 %</td>
                                            </tr>
                                            <tr>
                                                <td>Châtillon</td>
                                                <td>65.53 %</td>
                                                <td>89</td>
                                                <td>40.09 %</td>
                                            </tr>
                                            <tr>
                                                <td>Courchapoix</td>
                                                <td>60.53 %</td>
                                                <td>77</td>
                                                <td>38.50 %</td>
                                            </tr>
                                            <tr>
                                                <td>Courrendlin</td>
                                                <td>57.51 %</td>
                                                <td>738</td>
                                                <td>60.59 %</td>
                                            </tr>
                                            <tr>
                                                <td>Courroux</td>
                                                <td>60.88 %</td>
                                                <td>509</td>
                                                <td>37.87 %</td>
                                            </tr>
                                            <tr>
                                                <td>Courtételle</td>
                                                <td>60.75 %</td>
                                                <td>434</td>
                                                <td>40.71 %</td>
                                            </tr>
                                            <tr>
                                                <td>Delémont</td>
                                                <td>55.30 %</td>
                                                <td>1624</td>
                                                <td>40.33 %</td>
                                            </tr>
                                            <tr>
                                                <td>Develier</td>
                                                <td>61.40 %</td>
                                                <td>269</td>
                                                <td>45.90 %</td>
                                            </tr>
                                            <tr>
                                                <td>Ederswiler</td>
                                                <td>61.70 %</td>
                                                <td>14</td>
                                                <td>25.00 %</td>
                                            </tr>
                                            <tr>
                                                <td>Haute-Sorne</td>
                                                <td>58.08 %</td>
                                                <td>1'136</td>
                                                <td>41.03 %</td>
                                            </tr>
                                            <tr>
                                                <td>Mervelier</td>
                                                <td>65.49 %</td>
                                                <td>94</td>
                                                <td>35.34 %</td>
                                            </tr>
                                            <tr>
                                                <td>Mettembert</td>
                                                <td>81.01 %</td>
                                                <td>18</td>
                                                <td>31.03 %</td>
                                            </tr>
                                            <tr>
                                                <td>Movelier</td>
                                                <td>57.69 %</td>
                                                <td>61</td>
                                                <td>34.66 %</td>
                                            </tr>
                                            <tr>
                                                <td>Pleigne</td>
                                                <td>65.31 %</td>
                                                <td>74</td>
                                                <td>37.00 %</td>
                                            </tr>
                                            <tr>
                                                <td>Rossemaison</td>
                                                <td>67.37 %</td>
                                                <td>144</td>
                                                <td>42.73 %</td>
                                            </tr>
                                            <tr>
                                                <td>Saulcy</td>
                                                <td>70.70 %</td>
                                                <td>55</td>
                                                <td>39.01 %</td>
                                            </tr>
                                            <tr>
                                                <td>Soyhières</td>
                                                <td>60.24 %</td>
                                                <td>70</td>
                                                <td>37.84 %</td>
                                            </tr>
                                            <tr>
                                                <td>Val-Terbi</td>
                                                <td>60.59 %</td>
                                                <td>540</td>
                                                <td>38.52 %</td>
                                            </tr>
                                            <tr>
                                                <td><b>Totaux</b></td>
                                                <td><b>58.87 %</b></td>
                                                <td><b>6'178</b></td>
                                                <td><b>41.71 %</b></td>
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
                                                <td>427</td>
                                                <td>52.46 %</td>
                                            </tr>
                                            <tr>
                                                <td>La Baroche</td>
                                                <td>58.87 %</td>
                                                <td>233</td>
                                                <td>42.91 %</td>
                                            </tr>
                                            <tr>
                                                <td>Basse-Allaine</td>
                                                <td>56.45 %</td>
                                                <td>241</td>
                                                <td>48.10 %</td>
                                            </tr>
                                            <tr>
                                                <td>Beurnevésin</td>
                                                <td>52.25 %</td>
                                                <td>13</td>
                                                <td>23.64 %</td>
                                            </tr>
                                            <tr>
                                                <td>Boncourt</td>
                                                <td>57.46 %</td>
                                                <td>239</td>
                                                <td>44.84 %</td>
                                            </tr>
                                            <tr>
                                                <td>Bonfol</td>
                                                <td>49.83</td>
                                                <td>124</td>
                                                <td>43.66 %</td>
                                            </tr>
                                            <tr>
                                                <td>Bure</td>
                                                <td>62.94 %</td>
                                                <td>182</td>
                                                <td>52.60 %</td>
                                            </tr>
                                            <tr>
                                                <td>Clos du Doubs</td>
                                                <td>59.53 %</td>
                                                <td>275</td>
                                                <td>43.51 %</td>
                                            </tr>
                                            <tr>
                                                <td>Coeuve</td>
                                                <td>66.67 %</td>
                                                <td>173</td>
                                                <td>49.29 %</td>
                                            </tr>
                                            <tr>
                                                <td>Cornol</td>
                                                <td>55.86 %</td>
                                                <td>211</td>
                                                <td>46.37 %</td>
                                            </tr>
                                            <tr>
                                                <td>Courchavon</td>
                                                <td>66.53 %</td>
                                                <td>77</td>
                                                <td>51.73 %</td>
                                            </tr>
                                            <tr>
                                                <td>Courgenay</td>
                                                <td>60.22 %</td>
                                                <td>476</td>
                                                <td>47.55 %</td>
                                            </tr>
                                            <tr>
                                                <td>Courtedoux</td>
                                                <td>66.27 %</td>
                                                <td>175</td>
                                                <td>45.81
                                            <tr>
                                                <td>Damphreux</td>
                                                <td>62.25 %</td>
                                                <td>32</td>
                                                <td>34.04 %</td>
                                            </tr>
                                            <tr>
                                                <td>Fahy</td>
                                                <td>62.50 %</td>
                                                <td>57</td>
                                                <td>32.20 %</td>
                                            </tr>
                                            <tr>
                                                <td>Fontenais</td>
                                                <td>62.25 %</td>
                                                <td>268</td>
                                                <td>34.54 %</td>
                                            </tr>
                                            <tr>
                                                <td>Grandfontaine</td>
                                                <td>61.49 %</td>
                                                <td>89</td>
                                                <td>44.95 %</td>
                                            </tr>
                                            <tr>
                                                <td>Haute-Ajoie</td>
                                                <td>59.76 %</td>
                                                <td>287</td>
                                                <td>50.00 %</td>
                                            </tr>
                                            <tr>
                                                <td>Lugnez</td>
                                                <td>66.67 %</td>
                                                <td>51</td>
                                                <td>53.13 %</td>
                                            </tr>
                                            <tr>
                                                <td>Porrentruy</td>
                                                <td>57.67 %</td>
                                                <td>1'199</td>
                                                <td>46.26 %</td>
                                            </tr>
                                            <tr>
                                                <td>Vendlincourt</td>
                                                <td>59.15 %</td>
                                                <td>105</td>
                                                <td>38.18 %</td>
                                            </tr>
                                            <tr>
                                                <td><b>Totaux</b></td>
                                                <td><b>59.32 %</b></td>
                                                <td><b>4'934</b></td>
                                                <td><b>45.56 %</b></td>
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
                                                <td>67</td>
                                                <td>38.73 %</td>
                                            </tr>
                                            <tr>
                                                <td>Les Bois</td>
                                                <td>63.08 %</td>
                                                <td>244</td>
                                                <td>42.29 %</td>
                                            </tr>
                                            <tr>
                                                <td>Les Breuleux</td>
                                                <td>64.58 %</td>
                                                <td>259</td>
                                                <td>37.32 %</td>
                                            </tr>
                                            <tr>
                                                <td>La Chaux-des-Breuleux</td>
                                                <td>52.75 %</td>
                                                <td>14</td>
                                                <td>31.11 %</td>
                                            </tr>
                                            <tr>
                                                <td>Les Enfers</td>
                                                <td>73.55%</td>
                                                <td>26</td>
                                                <td>29.55 %</td>
                                            </tr>
                                            <tr>
                                                <td>Les Genevez</td>
                                                <td>61.43 %</td>
                                                <td>110</td>
                                                <td>43.82 %</td>
                                            </tr>
                                            <tr>
                                                <td>Lajoux</td>
                                                <td>67.15 %</td>
                                                <td>115</td>
                                                <td>32.58 %</td>
                                            </tr>
                                            <tr>
                                                <td>Montfaucon</td>
                                                <td>65.23 %</td>
                                                <td>114</td>
                                                <td>39.45 %</td>
                                            </tr>
                                            <tr>
                                                <td>Muriaux</td>
                                                <td>65.60 %</td>
                                                <td>118</td>
                                                <td>42.75 %</td>
                                            </tr>
                                            <tr>
                                                <td>Le Noirmont</td>
                                                <td>61.92 %</td>
                                                <td>304</td>
                                                <td>37.35 %</td>
                                            </tr>
                                            <tr>
                                                <td>Saignelégier</td>
                                                <td>64.30 %</td>
                                                <td>435</td>
                                                <td>36.71 %</td>
                                            </tr>
                                            <tr>
                                                <td>St-Brais</td>
                                                <td>66.15 %</td>
                                                <td>52</td>
                                                <td>41.60 %</td>
                                            </tr>
                                            <tr>
                                                <td>Soubey</td>
                                                <td>53.06 %</td>
                                                <td>41</td>
                                                <td>56.16 %</td>
                                            </tr>
                                            <tr>
                                                <td><b>Totaux</b></td>
                                                <td><b>63.70 %</b></td>
                                                <td><b>1'899</b></td>
                                                <td><b>38.42 %</b></td>
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
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>