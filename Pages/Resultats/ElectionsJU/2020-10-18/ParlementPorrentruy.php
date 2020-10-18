<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Elections au Parlement jurassien</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssresultats; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssbadges; ?>"/>
        
        <script src="<?php echo $jsUikit ?>"></script>
        <script src="<?php echo $jsUikitIcons ?>"></script>
        <script src="<?php echo $jsUikitMin ?>"></script>
        <script src="<?php echo $jsUikitIconsMin ?>"></script>
        <script src="https://www.amcharts.com/lib/4/core.js"></script>
        <script src="https://www.amcharts.com/lib/4/charts.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/switzerlandHigh.js"></script>
        <script src="https://www.amcharts.com/lib/4/maps.js"></script>
        <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-firestore.js"></script>
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
<header>
            <div class="navbar-normal">
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%;">
    <h1 class="uk-heading-large">Résultats des élections cantonales du 18 octobre 2020</h1>
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
                        <p><b>Objet : </b>Election au Parlement Jurassien</p>
                        <p><b>Participation : </b>52.14 %</p>
                        <p><b>Type de la votation : </b>Election cantonale jurassienne</p>
                        <p><b>Mode de votation : </b>Election à un tour</p>
                        <p><a href="<?php echo $PHPelectionsJUParlementA ?>">Lien vers les informations d'élection</a></p>
                        <p><b>Candidats-es élus-es : </b><span style="color: #2ecc71">Elu-e</span></p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column" uk-grid>
                            <h2>Résultats district de Porrentruy</h2>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        
                        <div id="chartdiv" style="width: 100%; height: 250px;"></div>
                    
                        <script>
                            // Create chart instance
                            var chart = am4core.create("chartdiv", am4charts.PieChart);

                            // Add data
                            chart.data = [{
                            "parti": "PLRJ",
                            "suffrages_liste": 4,
                            "color": am4core.color("#0066ff")
                            }, {
                            "parti": "PSJ",
                            "suffrages_liste": 3,
                            "color": am4core.color("#fc0401")
                            }, {
                            "parti": "PDC",
                            "suffrages_liste": 7,
                            "color": am4core.color("#ff9e00")
                            }, {                            
                            "parti": "UDC",
                            "suffrages_liste": 2,
                            "color": am4core.color("#85ff00")
                            },{
                            "parti": "VERTS",
                            "suffrages_liste": 2,
                            "color": am4core.color("#00fa01")
                            },{
                            "parti": "PCSI",
                            "suffrages_liste": 1,
                            "color": am4core.color("#14b0b8")
                            },{
                            "parti": "PVL",
                            "suffrages_liste": 1,
                            "color": am4core.color("#00bc00")                            
                            }];

                            // Add and configure Series
                            var pieSeries = chart.series.push(new am4charts.PieSeries());
                            pieSeries.dataFields.value = "suffrages_liste";
                            pieSeries.dataFields.category = "parti";
                            pieSeries.slices.template.propertyFields.fill = "color";

                            
                        </script>
                        
                    </div>
                </div>
            </div>
            </div>
        <div>
        
        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
            <button class="uk-button uk-button-default" type="button">PLRJ</button>
            <button class="uk-button uk-button-default" type="button">PSJ-JSJ</button>
            <button class="uk-button uk-button-default" type="button">PDC-JDC</button>
            <button class="uk-button uk-button-default" type="button">UDC</button>
            <button class="uk-button uk-button-default" type="button">Verts</button>
            <button class="uk-button uk-button-default" type="button">PCSI</button>
            <button class="uk-button uk-button-default" type="button">PVL</button>
        </div>  
        <ul class="uk-switcher uk-margin">
        <li>   
                <div class="uk-card-body">
                    <div class="uk-align-right" id="chartECGouvernement" style="width: 100%; height: 500px;"></div>
                    <script type="module">

                        import { db } from  '../../../../JS/db.js'



                        // PLRJ
                        let PLRJCandidats = [];

                        db.collection('elections').doc('ju-plt-20201018')
                            .collection('districts').doc("Porrentruy").collection('Partis')
                            .doc('liste1-PLRJ').collection('candidats').orderBy('voix', 'asc').get().then(querySnapshot => {
                            let candidats = querySnapshot.docs.map(doc => doc.data());
                            candidats.forEach(candidat => {
                                PLRJCandidats.push({
                                    "candidat": candidat.nomPrenom,
                                    "Suffrages": parseInt(candidat.voix),
                                    "color": candidat.elu ? "#2ecc71" : "#3498db"
                                });
                            })


                            let chartECGouvernement = am4core.create("chartECGouvernement", am4charts.XYChart);

                            // Create axes
                            let categoryAxis = chartECGouvernement.yAxes.push(new am4charts.CategoryAxis());
                            categoryAxis.dataFields.category = "candidat";
                            categoryAxis.renderer.minGridDistance = 4;



                            let valueAxis = chartECGouvernement.xAxes.push(new am4charts.ValueAxis());
                            valueAxis.min = 0;
                            valueAxis.title.text = "Suffrages";


                            // Create series
                            let series = chartECGouvernement.series.push(new am4charts.ColumnSeries());
                            series.dataFields.valueX = "Suffrages";
                            series.dataFields.categoryY = "candidat";
                            series.name = "Suffrages";
                            series.columns.template.propertyFields.fill = "color";

                            chartECGouvernement.data = PLRJCandidats;
                        }) ;

                    </script>
                </div>
            </li> 
            <li>   
                <div class="uk-card-body">
                    <div class="uk-align-right" id="chartECGouvernement2" style="width: 100%; height: 500px;"></div>
                    <script type="module">

                        import { db } from  '../../../../JS/db.js'

                        let PSJCandidats = [];

                        db.collection('elections').doc('ju-plt-20201018')
                            .collection('districts').doc("Porrentruy").collection('Partis')
                            .doc('liste2-PSJ').collection('candidats').orderBy('voix', 'asc').get().then(querySnapshot => {
                            let candidats = querySnapshot.docs.map(doc => doc.data());
                            candidats.forEach(candidat => {
                                PSJCandidats.push({
                                    "candidat": candidat.nomPrenom,
                                    "Suffrages": parseInt(candidat.voix),
                                    "color": candidat.elu ? "#2ecc71" : "#3498db"
                                });
                            });
                            let chartECGouvernement2 = am4core.create("chartECGouvernement2", am4charts.XYChart);

                            // Create axes
                            let categoryAxis = chartECGouvernement2.yAxes.push(new am4charts.CategoryAxis());
                            categoryAxis.dataFields.category = "candidat";
                            categoryAxis.renderer.minGridDistance = 4;


                            let valueAxis = chartECGouvernement2.xAxes.push(new am4charts.ValueAxis());
                            valueAxis.min = 0;
                            valueAxis.title.text = "Suffrages";


                            // Create series
                            let series = chartECGouvernement2.series.push(new am4charts.ColumnSeries());
                            series.dataFields.valueX = "Suffrages";
                            series.dataFields.categoryY = "candidat";
                            series.name = "Suffrages";
                            series.columns.template.propertyFields.fill = "color";

                            chartECGouvernement2.data = PSJCandidats;

                        });
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <div class="uk-align-right" id="chartECGouvernement3" style="width: 100%; height: 500px;"></div>
                    <script type="module">

                        import { db } from  '../../../../JS/db.js'

                        let PDCCandidats = [];

                        db.collection('elections').doc('ju-plt-20201018')
                            .collection('districts').doc("Porrentruy").collection('Partis')
                            .doc('liste3-PDC').collection('candidats').orderBy('voix', 'asc').get().then(querySnapshot => {
                            let candidats = querySnapshot.docs.map(doc => doc.data());
                            candidats.forEach(candidat => {
                                PDCCandidats.push({
                                    "candidat": candidat.nomPrenom,
                                    "Suffrages": parseInt(candidat.voix),
                                    "color": candidat.elu ? "#2ecc71" : "#3498db"
                                });
                            });
                            let chartECGouvernement3 = am4core.create("chartECGouvernement3", am4charts.XYChart);

                            // Create axes
                            let categoryAxis = chartECGouvernement3.yAxes.push(new am4charts.CategoryAxis());
                            categoryAxis.dataFields.category = "candidat";
                            categoryAxis.renderer.minGridDistance = 4;


                            let valueAxis = chartECGouvernement3.xAxes.push(new am4charts.ValueAxis());
                            valueAxis.min = 0;
                            valueAxis.title.text = "Suffrages";

                            // Create series
                            let series = chartECGouvernement3.series.push(new am4charts.ColumnSeries());
                            series.dataFields.valueX = "Suffrages";
                            series.dataFields.categoryY = "candidat";
                            series.name = "Suffrages";
                            series.columns.template.propertyFields.fill = "color";

                            chartECGouvernement3.data = PDCCandidats;
                        });

                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <div class="uk-align-right" id="chartECGouvernement4" style="width: 100%; height: 500px;"></div>
                    <script type="module">
                        import { db } from  '../../../../JS/db.js'

                        let UDCCandidats = [];

                        db.collection('elections').doc('ju-plt-20201018')
                            .collection('districts').doc("Porrentruy").collection('Partis')
                            .doc('liste4-UDC').collection('candidats').orderBy('voix', 'asc').get().then(querySnapshot => {
                            let candidats = querySnapshot.docs.map(doc => doc.data());
                            candidats.forEach(candidat => {
                                UDCCandidats.push({
                                    "candidat": candidat.nomPrenom,
                                    "Suffrages": parseInt(candidat.voix),
                                    "color": candidat.elu ? "#2ecc71" : "#3498db"
                                });
                            });
                            let chartECGouvernement4 = am4core.create("chartECGouvernement4", am4charts.XYChart);

                            // Create axes
                            let categoryAxis = chartECGouvernement4.yAxes.push(new am4charts.CategoryAxis());
                            categoryAxis.dataFields.category = "candidat";
                            categoryAxis.renderer.minGridDistance = 4;


                            let valueAxis = chartECGouvernement4.xAxes.push(new am4charts.ValueAxis());
                            valueAxis.min = 0;
                            valueAxis.title.text = "Suffrages";


                            // Create series
                            let series = chartECGouvernement4.series.push(new am4charts.ColumnSeries());
                            series.dataFields.valueX = "Suffrages";
                            series.dataFields.categoryY = "candidat";
                            series.name = "Suffrages";
                            series.columns.template.propertyFields.fill = "color";

                            chartECGouvernement4.data = UDCCandidats;
                        });
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <div class="uk-align-right" id="chartECGouvernement5" style="width: 100%; height: 500px;"></div>
                    <script type="module">
                        import { db } from  '../../../../JS/db.js'

                        let VertsCandidats = [];

                        db.collection('elections').doc('ju-plt-20201018')
                            .collection('districts').doc("Porrentruy").collection('Partis')
                            .doc('liste5-Verts').collection('candidats').orderBy('voix', 'asc').get().then(querySnapshot => {
                            let candidats = querySnapshot.docs.map(doc => doc.data());
                            candidats.forEach(candidat => {
                                VertsCandidats.push({
                                    "candidat": candidat.nomPrenom,
                                    "Suffrages": parseInt(candidat.voix),
                                    "color": candidat.elu ? "#2ecc71" : "#3498db"
                                });
                            });
                            let chartECGouvernement5 = am4core.create("chartECGouvernement5", am4charts.XYChart);

                            // Create axes
                            let categoryAxis = chartECGouvernement5.yAxes.push(new am4charts.CategoryAxis());
                            categoryAxis.dataFields.category = "candidat";
                            categoryAxis.renderer.minGridDistance = 4;


                            let valueAxis = chartECGouvernement5.xAxes.push(new am4charts.ValueAxis());
                            valueAxis.min = 0;
                            valueAxis.title.text = "Suffrages";


                            // Create series
                            let series = chartECGouvernement5.series.push(new am4charts.ColumnSeries());
                            series.dataFields.valueX = "Suffrages";
                            series.dataFields.categoryY = "candidat";
                            series.name = "Suffrages";
                            series.columns.template.propertyFields.fill = "color";

                            chartECGouvernement5.data = VertsCandidats;
                        });
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <div class="uk-align-right" id="chartECGouvernement6" style="width: 100%; height: 500px;"></div>
                    <script type="module">
                        import { db } from  '../../../../JS/db.js'

                        let PCSICandidats = [];

                        db.collection('elections').doc('ju-plt-20201018')
                            .collection('districts').doc("Porrentruy").collection('Partis')
                            .doc('liste6-PCSI').collection('candidats').orderBy('voix', 'asc').get().then(querySnapshot => {
                            let candidats = querySnapshot.docs.map(doc => doc.data());
                            candidats.forEach(candidat => {
                                PCSICandidats.push({
                                    "candidat": candidat.nomPrenom,
                                    "Suffrages": parseInt(candidat.voix),
                                    "color": candidat.elu ? "#2ecc71" : "#3498db"
                                });
                            });
                            let chartECGouvernement6 = am4core.create("chartECGouvernement6", am4charts.XYChart);

                            // Create axes
                            let categoryAxis = chartECGouvernement6.yAxes.push(new am4charts.CategoryAxis());
                            categoryAxis.dataFields.category = "candidat";
                            categoryAxis.renderer.minGridDistance = 4;


                            let valueAxis = chartECGouvernement6.xAxes.push(new am4charts.ValueAxis());
                            valueAxis.min = 0;
                            valueAxis.title.text = "Suffrages";


                            // Create series
                            let series = chartECGouvernement6.series.push(new am4charts.ColumnSeries());
                            series.dataFields.valueX = "Suffrages";
                            series.dataFields.categoryY = "candidat";
                            series.name = "Suffrages";
                            series.columns.template.propertyFields.fill = "color";

                            chartECGouvernement6.data = PCSICandidats;
                        });
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <div class="uk-align-right" id="chartECGouvernement7" style="width: 100%; height: 500px;"></div>
                    <script type="module">
                        import { db } from  '../../../../JS/db.js'

                        let PVLCandidats = [];

                        db.collection('elections').doc('ju-plt-20201018')
                            .collection('districts').doc("Porrentruy").collection('Partis')
                            .doc('liste7-PVL').collection('candidats').orderBy('voix', 'asc').get().then(querySnapshot => {
                            let candidats = querySnapshot.docs.map(doc => doc.data());
                            candidats.forEach(candidat => {
                                PVLCandidats.push({
                                    "candidat": candidat.nomPrenom,
                                    "Suffrages": parseInt(candidat.voix),
                                    "color": candidat.elu ? "#2ecc71" : "#3498db"
                                });
                            });
                            let chartECGouvernement7 = am4core.create("chartECGouvernement7", am4charts.XYChart);

                            // Create axes
                            let categoryAxis = chartECGouvernement7.yAxes.push(new am4charts.CategoryAxis());
                            categoryAxis.dataFields.category = "candidat";
                            categoryAxis.renderer.minGridDistance = 4;


                            let valueAxis = chartECGouvernement7.xAxes.push(new am4charts.ValueAxis());
                            valueAxis.min = 0;
                            valueAxis.title.text = "Suffrages";


                            // Create series
                            let series = chartECGouvernement7.series.push(new am4charts.ColumnSeries());
                            series.dataFields.valueX = "Suffrages";
                            series.dataFields.categoryY = "candidat";
                            series.name = "Suffrages";
                            series.columns.template.propertyFields.fill = "color";

                            chartECGouvernement7.data = PVLCandidats;
                        });
                    </script>
                </div>
            </li>
        </ul>
    </div>        
    </section>
</main>
</body>


<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>