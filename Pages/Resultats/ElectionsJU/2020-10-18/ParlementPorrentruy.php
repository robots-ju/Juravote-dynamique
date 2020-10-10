<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%;">
    <h1 class="uk-heading-large">Résultats des élections cantonales du 10 octobre 2020</h1>
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
                        <p><b>Participation : </b>38.94 %</p>
                        <p><b>Type de la votation : </b>Election cantonale jurassienne</p>
                        <p><b>Mode de votation : </b>Election à un tour</p>
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
            </div>
        <div>
        
        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
            <button class="uk-button uk-button-default" type="button">PLRJ</button>
            <button class="uk-button uk-button-default" type="button">PSJ-JSJ</button>
            <button class="uk-button uk-button-default" type="button">PDC-JDC</button>
            <button class="uk-button uk-button-default" type="button">CS-POP</button>
            <button class="uk-button uk-button-default" type="button">PEV-Jura</button>
            <button class="uk-button uk-button-default" type="button">UDC</button>
            <button class="uk-button uk-button-default" type="button">Verts</button>
            <button class="uk-button uk-button-default" type="button">PCSI</button>
            <button class="uk-button uk-button-default" type="button">PVL</button>
            <button class="uk-button uk-button-default" type="button">AB</button>
        </div>  
        <ul class="uk-switcher uk-margin">
            <li>   
                <div class="uk-card-body">
                    <div class="uk-align-right" id="chartECGouvernement" style="width: 100%; height: 500px;"></div>
                    <script>
                        var chartECGouvernement = am4core.create("chartECGouvernement", am4charts.XYChart);

                        chartECGouvernement.data = [{
                        "candidat": "David Eray",
                        "Suffrages": 10486,
                        }, {
                        "candidat": "Jacques Gerber",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Martial Courtet",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Stéphane Babey",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Nathalie Barthoulot",
                        "Suffrages": 5491,
                        }, {
                        "candidat": "Rosalie Beuret Siess",
                        "Suffrages": 6491,
                        }, {
                        "candidat": "Francisco Pires",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Brigitte Favre",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Didier Spies",
                        "Suffrages": 9491,
                        }, {
                        "candidat": "Céline R.-C. Linder",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Vincent Schmitt",
                        "Suffrages": 4391,
                        }, {
                        "candidat": "Emilie Moreau",
                        "Suffrages": 7491,
                        }, {
                        "candidat": "Alain Beuret",
                        "Suffrages": 3379,
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
            </li> 
            <li>   
                <div class="uk-card-body">
                    <div class="uk-align-right" id="chartECGouvernement2" style="width: 100%; height: 500px;"></div>
                    <script>
                        var chartECGouvernement2 = am4core.create("chartECGouvernement2", am4charts.XYChart);

                        chartECGouvernement2.data = [{
                        "candidat": "David Eray",
                        "Suffrages": 10486,
                        }, {
                        "candidat": "Jacques Gerber",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Martial Courtet",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Stéphane Babey",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Nathalie Barthoulot",
                        "Suffrages": 5491,
                        }, {
                        "candidat": "Rosalie Beuret Siess",
                        "Suffrages": 6491,
                        }, {
                        "candidat": "Francisco Pires",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Brigitte Favre",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Didier Spies",
                        "Suffrages": 9491,
                        }, {
                        "candidat": "Céline R.-C. Linder",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Vincent Schmitt",
                        "Suffrages": 4391,
                        }, {
                        "candidat": "Emilie Moreau",
                        "Suffrages": 7491,
                        }, {
                        "candidat": "Alain Beuret",
                        "Suffrages": 3379,
                        }];

                        // Create axes
                        var categoryAxis = chartECGouvernement2.yAxes.push(new am4charts.CategoryAxis());
                        categoryAxis.dataFields.category = "candidat";
                        categoryAxis.renderer.minGridDistance = 4;
                        

                        var valueAxis = chartECGouvernement2.xAxes.push(new am4charts.ValueAxis());
                        valueAxis.title.text = "Suffrages";
                        

                        // Create series
                        var series = chartECGouvernement2.series.push(new am4charts.ColumnSeries());
                        series.dataFields.valueX = "Suffrages";
                        series.dataFields.categoryY = "candidat";
                        series.name = "Suffrages";
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <div class="uk-align-right" id="chartECGouvernement3" style="width: 100%; height: 500px;"></div>
                    <script>
                        var chartECGouvernement3 = am4core.create("chartECGouvernement3", am4charts.XYChart);

                        chartECGouvernement3.data = [{
                        "candidat": "David Eray",
                        "Suffrages": 10486,
                        }, {
                        "candidat": "Jacques Gerber",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Martial Courtet",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Stéphane Babey",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Nathalie Barthoulot",
                        "Suffrages": 5491,
                        }, {
                        "candidat": "Rosalie Beuret Siess",
                        "Suffrages": 6491,
                        }, {
                        "candidat": "Francisco Pires",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Brigitte Favre",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Didier Spies",
                        "Suffrages": 9491,
                        }, {
                        "candidat": "Céline R.-C. Linder",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Vincent Schmitt",
                        "Suffrages": 4391,
                        }, {
                        "candidat": "Emilie Moreau",
                        "Suffrages": 7491,
                        }, {
                        "candidat": "Alain Beuret",
                        "Suffrages": 3379,
                        }];

                        // Create axes
                        var categoryAxis = chartECGouvernement3.yAxes.push(new am4charts.CategoryAxis());
                        categoryAxis.dataFields.category = "candidat";
                        categoryAxis.renderer.minGridDistance = 4;
                        

                        var valueAxis = chartECGouvernement3.xAxes.push(new am4charts.ValueAxis());
                        valueAxis.title.text = "Suffrages";
                        

                        // Create series
                        var series = chartECGouvernement3.series.push(new am4charts.ColumnSeries());
                        series.dataFields.valueX = "Suffrages";
                        series.dataFields.categoryY = "candidat";
                        series.name = "Suffrages";
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <div class="uk-align-right" id="chartECGouvernement4" style="width: 100%; height: 500px;"></div>
                    <script>
                        var chartECGouvernement4 = am4core.create("chartECGouvernement4", am4charts.XYChart);

                        chartECGouvernement4.data = [{
                        "candidat": "David Eray",
                        "Suffrages": 10486,
                        }, {
                        "candidat": "Jacques Gerber",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Martial Courtet",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Stéphane Babey",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Nathalie Barthoulot",
                        "Suffrages": 5491,
                        }, {
                        "candidat": "Rosalie Beuret Siess",
                        "Suffrages": 6491,
                        }, {
                        "candidat": "Francisco Pires",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Brigitte Favre",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Didier Spies",
                        "Suffrages": 9491,
                        }, {
                        "candidat": "Céline R.-C. Linder",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Vincent Schmitt",
                        "Suffrages": 4391,
                        }, {
                        "candidat": "Emilie Moreau",
                        "Suffrages": 7491,
                        }, {
                        "candidat": "Alain Beuret",
                        "Suffrages": 3379,
                        }];

                        // Create axes
                        var categoryAxis = chartECGouvernement4.yAxes.push(new am4charts.CategoryAxis());
                        categoryAxis.dataFields.category = "candidat";
                        categoryAxis.renderer.minGridDistance = 4;
                        

                        var valueAxis = chartECGouvernement4.xAxes.push(new am4charts.ValueAxis());
                        valueAxis.title.text = "Suffrages";
                        

                        // Create series
                        var series = chartECGouvernement4.series.push(new am4charts.ColumnSeries());
                        series.dataFields.valueX = "Suffrages";
                        series.dataFields.categoryY = "candidat";
                        series.name = "Suffrages";
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <div class="uk-align-right" id="chartECGouvernement5" style="width: 100%; height: 500px;"></div>
                    <script>
                        var chartECGouvernement5 = am4core.create("chartECGouvernement5", am4charts.XYChart);

                        chartECGouvernement5.data = [{
                        "candidat": "David Eray",
                        "Suffrages": 10486,
                        }, {
                        "candidat": "Jacques Gerber",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Martial Courtet",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Stéphane Babey",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Nathalie Barthoulot",
                        "Suffrages": 5491,
                        }, {
                        "candidat": "Rosalie Beuret Siess",
                        "Suffrages": 6491,
                        }, {
                        "candidat": "Francisco Pires",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Brigitte Favre",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Didier Spies",
                        "Suffrages": 9491,
                        }, {
                        "candidat": "Céline R.-C. Linder",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Vincent Schmitt",
                        "Suffrages": 4391,
                        }, {
                        "candidat": "Emilie Moreau",
                        "Suffrages": 7491,
                        }, {
                        "candidat": "Alain Beuret",
                        "Suffrages": 3379,
                        }];

                        // Create axes
                        var categoryAxis = chartECGouvernement5.yAxes.push(new am4charts.CategoryAxis());
                        categoryAxis.dataFields.category = "candidat";
                        categoryAxis.renderer.minGridDistance = 4;
                        

                        var valueAxis = chartECGouvernement5.xAxes.push(new am4charts.ValueAxis());
                        valueAxis.title.text = "Suffrages";
                        

                        // Create series
                        var series = chartECGouvernement5.series.push(new am4charts.ColumnSeries());
                        series.dataFields.valueX = "Suffrages";
                        series.dataFields.categoryY = "candidat";
                        series.name = "Suffrages";
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <div class="uk-align-right" id="chartECGouvernement6" style="width: 100%; height: 500px;"></div>
                    <script>
                        var chartECGouvernement6 = am4core.create("chartECGouvernement6", am4charts.XYChart);

                        chartECGouvernement6.data = [{
                        "candidat": "David Eray",
                        "Suffrages": 10486,
                        }, {
                        "candidat": "Jacques Gerber",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Martial Courtet",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Stéphane Babey",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Nathalie Barthoulot",
                        "Suffrages": 5491,
                        }, {
                        "candidat": "Rosalie Beuret Siess",
                        "Suffrages": 6491,
                        }, {
                        "candidat": "Francisco Pires",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Brigitte Favre",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Didier Spies",
                        "Suffrages": 9491,
                        }, {
                        "candidat": "Céline R.-C. Linder",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Vincent Schmitt",
                        "Suffrages": 4391,
                        }, {
                        "candidat": "Emilie Moreau",
                        "Suffrages": 7491,
                        }, {
                        "candidat": "Alain Beuret",
                        "Suffrages": 3379,
                        }];

                        // Create axes
                        var categoryAxis = chartECGouvernement6.yAxes.push(new am4charts.CategoryAxis());
                        categoryAxis.dataFields.category = "candidat";
                        categoryAxis.renderer.minGridDistance = 4;
                        

                        var valueAxis = chartECGouvernement6.xAxes.push(new am4charts.ValueAxis());
                        valueAxis.title.text = "Suffrages";
                        

                        // Create series
                        var series = chartECGouvernement6.series.push(new am4charts.ColumnSeries());
                        series.dataFields.valueX = "Suffrages";
                        series.dataFields.categoryY = "candidat";
                        series.name = "Suffrages";
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <div class="uk-align-right" id="chartECGouvernement7" style="width: 100%; height: 500px;"></div>
                    <script>
                        var chartECGouvernement7 = am4core.create("chartECGouvernement7", am4charts.XYChart);

                        chartECGouvernement7.data = [{
                        "candidat": "David Eray",
                        "Suffrages": 10486,
                        }, {
                        "candidat": "Jacques Gerber",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Martial Courtet",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Stéphane Babey",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Nathalie Barthoulot",
                        "Suffrages": 5491,
                        }, {
                        "candidat": "Rosalie Beuret Siess",
                        "Suffrages": 6491,
                        }, {
                        "candidat": "Francisco Pires",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Brigitte Favre",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Didier Spies",
                        "Suffrages": 9491,
                        }, {
                        "candidat": "Céline R.-C. Linder",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Vincent Schmitt",
                        "Suffrages": 4391,
                        }, {
                        "candidat": "Emilie Moreau",
                        "Suffrages": 7491,
                        }, {
                        "candidat": "Alain Beuret",
                        "Suffrages": 3379,
                        }];

                        // Create axes
                        var categoryAxis = chartECGouvernement7.yAxes.push(new am4charts.CategoryAxis());
                        categoryAxis.dataFields.category = "candidat";
                        categoryAxis.renderer.minGridDistance = 4;
                        

                        var valueAxis = chartECGouvernement7.xAxes.push(new am4charts.ValueAxis());
                        valueAxis.title.text = "Suffrages";
                        

                        // Create series
                        var series = chartECGouvernement7.series.push(new am4charts.ColumnSeries());
                        series.dataFields.valueX = "Suffrages";
                        series.dataFields.categoryY = "candidat";
                        series.name = "Suffrages";
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <div class="uk-align-right" id="chartECGouvernement8" style="width: 100%; height: 500px;"></div>
                    <script>
                        var chartECGouvernement8 = am4core.create("chartECGouvernement8", am4charts.XYChart);

                        chartECGouvernement8.data = [{
                        "candidat": "David Eray",
                        "Suffrages": 10486,
                        }, {
                        "candidat": "Jacques Gerber",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Martial Courtet",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Stéphane Babey",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Nathalie Barthoulot",
                        "Suffrages": 5491,
                        }, {
                        "candidat": "Rosalie Beuret Siess",
                        "Suffrages": 6491,
                        }, {
                        "candidat": "Francisco Pires",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Brigitte Favre",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Didier Spies",
                        "Suffrages": 9491,
                        }, {
                        "candidat": "Céline R.-C. Linder",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Vincent Schmitt",
                        "Suffrages": 4391,
                        }, {
                        "candidat": "Emilie Moreau",
                        "Suffrages": 7491,
                        }, {
                        "candidat": "Alain Beuret",
                        "Suffrages": 3379,
                        }];

                        // Create axes
                        var categoryAxis = chartECGouvernement8.yAxes.push(new am4charts.CategoryAxis());
                        categoryAxis.dataFields.category = "candidat";
                        categoryAxis.renderer.minGridDistance = 4;
                        

                        var valueAxis = chartECGouvernement8.xAxes.push(new am4charts.ValueAxis());
                        valueAxis.title.text = "Suffrages";
                        

                        // Create series
                        var series = chartECGouvernement8.series.push(new am4charts.ColumnSeries());
                        series.dataFields.valueX = "Suffrages";
                        series.dataFields.categoryY = "candidat";
                        series.name = "Suffrages";
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <div class="uk-align-right" id="chartECGouvernement9" style="width: 100%; height: 500px;"></div>
                    <script>
                        var chartECGouvernement9 = am4core.create("chartECGouvernement9", am4charts.XYChart);

                        chartECGouvernement9.data = [{
                        "candidat": "David Eray",
                        "Suffrages": 10486,
                        }, {
                        "candidat": "Jacques Gerber",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Martial Courtet",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Stéphane Babey",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Nathalie Barthoulot",
                        "Suffrages": 5491,
                        }, {
                        "candidat": "Rosalie Beuret Siess",
                        "Suffrages": 6491,
                        }, {
                        "candidat": "Francisco Pires",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Brigitte Favre",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Didier Spies",
                        "Suffrages": 9491,
                        }, {
                        "candidat": "Céline R.-C. Linder",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Vincent Schmitt",
                        "Suffrages": 4391,
                        }, {
                        "candidat": "Emilie Moreau",
                        "Suffrages": 7491,
                        }, {
                        "candidat": "Alain Beuret",
                        "Suffrages": 3379,
                        }];

                        // Create axes
                        var categoryAxis = chartECGouvernement9.yAxes.push(new am4charts.CategoryAxis());
                        categoryAxis.dataFields.category = "candidat";
                        categoryAxis.renderer.minGridDistance = 4;
                        

                        var valueAxis = chartECGouvernement9.xAxes.push(new am4charts.ValueAxis());
                        valueAxis.title.text = "Suffrages";
                        

                        // Create series
                        var series = chartECGouvernement9.series.push(new am4charts.ColumnSeries());
                        series.dataFields.valueX = "Suffrages";
                        series.dataFields.categoryY = "candidat";
                        series.name = "Suffrages";
                    </script>
                </div>
            </li>
            <li>   
                <div class="uk-card-body">
                    <div class="uk-align-right" id="chartECGouvernement10" style="width: 100%; height: 500px;"></div>
                    <script>
                        var chartECGouvernement10 = am4core.create("chartECGouvernement10", am4charts.XYChart);

                        chartECGouvernement10.data = [{
                        "candidat": "David Eray",
                        "Suffrages": 10486,
                        }, {
                        "candidat": "Jacques Gerber",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Martial Courtet",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Stéphane Babey",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Nathalie Barthoulot",
                        "Suffrages": 5491,
                        }, {
                        "candidat": "Rosalie Beuret Siess",
                        "Suffrages": 6491,
                        }, {
                        "candidat": "Francisco Pires",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Brigitte Favre",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Didier Spies",
                        "Suffrages": 9491,
                        }, {
                        "candidat": "Céline R.-C. Linder",
                        "Suffrages": 8491,
                        }, {
                        "candidat": "Vincent Schmitt",
                        "Suffrages": 4391,
                        }, {
                        "candidat": "Emilie Moreau",
                        "Suffrages": 7491,
                        }, {
                        "candidat": "Alain Beuret",
                        "Suffrages": 3379,
                        }];

                        // Create axes
                        var categoryAxis = chartECGouvernement10.yAxes.push(new am4charts.CategoryAxis());
                        categoryAxis.dataFields.category = "candidat";
                        categoryAxis.renderer.minGridDistance = 4;
                        

                        var valueAxis = chartECGouvernement10.xAxes.push(new am4charts.ValueAxis());
                        valueAxis.title.text = "Suffrages";
                        

                        // Create series
                        var series = chartECGouvernement10.series.push(new am4charts.ColumnSeries());
                        series.dataFields.valueX = "Suffrages";
                        series.dataFields.categoryY = "candidat";
                        series.name = "Suffrages";
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
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>