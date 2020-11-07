<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votation cantonale du 20 octobre 2019</title>
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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%">
        <h1 class="uk-heading-large">Résultats de la votation cantonale du 20 octobre
            2019</h1>
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
                        <p><b>Objet : </b>Acceptez-vous la modification de la loi d'impôt (report de la baisse fiscale)
                            ?</p>
                        <p><b>Participation : </b>41.80 %</p>
                        <p><b>Résultat : </b>Refusé</p>
                        <p><b>Type de la votation : </b>Votation cantonale jurassienne</p>
                        <p><b>Mode de votation : </b>Référendum</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column uk-align-left" uk-grid>
                            <h2>Résultats cantonaux</h2>
                        </div>
                    </div>
                    <section style="padding: 2%;">
                        <div id="chartdivLoiImpot" style="width: 100%; height: 250px;"></div>
                        <script>
                            // Create chart instance
                            var resultatLoiImpot = am4core.create("chartdivLoiImpot", am4charts.PieChart);

                            // Add data
                            resultatLoiImpot.data = [{
                                "votes": "OUI",
                                "suffrages": 9630
                            }, {
                                "votes": "NON",
                                "suffrages": 12854
                            }];

                            // Add and configure Series
                            var dataLoiImpot = resultatLoiImpot.series.push(new am4charts.PieSeries());
                            dataLoiImpot.dataFields.value = "suffrages";
                            dataLoiImpot.dataFields.category = "votes";

                            // Let's cut a hole in our Pie chart the size of 40% the radius
                            resultatLoiImpot.innerRadius = am4core.percent(40);

                            // Disable ticks and labels
                            dataLoiImpot.labels.template.disabled = true;
                            dataLoiImpot.ticks.template.disabled = true;

                            // Disable tooltips
                            dataLoiImpot.slices.template.tooltipText = "";

                            // Add a legend
                            resultatLoiImpot.legend = new am4charts.Legend();
                            resultatLoiImpot.legend.position = "right";

                            dataLoiImpot.colors.list = [
                            am4core.color("#89ff6a"),
                            am4core.color("#ff4242"),
                            ]
                        </script>                                                     
                    </section>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column uk-align-left" uk-grid>
                            <h2>Résultats détaillés</h2>
                        </div>
                    </div>
                    <section style="padding: 2%;">
                        <div  uk-switcher="animation: uk-animation-fade; toggle: > *">
                            <button class="uk-button uk-button-default" type="button">Liste des résultats</button>
                            <button class="uk-button uk-button-default" type="button">Résultats Delémont</button>
                            <button class="uk-button uk-button-default" type="button">Résultats Ajoie</button>
                            <button class="uk-button uk-button-default" type="button">Résultats Franches-Montagnes</button>
                        </div> 
                        <ul class="uk-switcher uk-margin">
                            <li>
                                <div class="uk-overflow-auto">    
                                    <table class="uk-table uk-table-divider uk-table-striped uk-table-hover">
                                        <thead>
                                            <tr>
                                                <th>District</th>
                                                <th>Participation</th>
                                                <th>Nombre de oui (en voix)</th>
                                                <th>Nombre de oui (en %)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Delémont</td>
                                                <td>39.40 %</td>
                                                <td>4'506</td>
                                                <td>41.78 %</td>
                                            </tr>
                                            <tr>
                                                <td>Franches-Montagnes</td>
                                                <td>42.78 %</td>
                                                <td>1'708</td>
                                                <td>51.05 %</td>
                                            </tr>
                                            <tr>
                                                <td>Porrentruy</td>
                                                <td>44.89 %</td>
                                                <td>3'416</td>
                                                <td>40.90 %</td>
                                            </tr>
                                            <tr>
                                                <td><b>Totaux</b></td>
                                                <td><b>41.80 %</b></td>
                                                <td><b>9'630</b></td>
                                                <td><b>42.83 %</b></td>
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
            
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-column uk-align-left" uk-grid>
                            <h2>Résultats communaux</h2>
                        </div>
                    </div>
                    <section style="padding: 2%;">                         
                        <iframe title="Votation cantonale du 20 octobre 2019" aria-label="map" id="datawrapper-chart-basSp" src="https://datawrapper.dwcdn.net/basSp/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="500"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();
                        </script>
                        </ul>
                    </div>
                </section>
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