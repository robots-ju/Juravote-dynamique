<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votation Develier 05.07.2020</title>
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
<section style="padding: 2%;">
    <h1 class="uk-heading-large">Develier : Votation du 05 juillet 2020</h1>
    <a href="javascript:history.go(-1)"><span uk-icon="icon: chevron-left; ratio: 1.5"></span>Retour</a>
    <hr>
        <h2 class="titre-section" style="padding-bottom: 2%;">Demande de crédit de CHF 5'700'000.- pour le projet PROVITA</h2>
        <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-bottom: 2%;">
            <h3>Histoire</h3>
            <p>
                Le village de Develier a subi d'importantes inondations ces dernières décennies. Ces événements ont incité
                les Autorités communales à étudier un projet de PROtection contres les crues et reVITAlisation des cours d'eau (PROVITA).
            </p>
            <p>
                Les Autorités communales se doivent également de répondre à la Loi fédérale sur l'aménagement des cours d'eau
                ainsi qu'à la loi cantonale sur la gestion des eaux. Cette dernière oblige les communes jurassiennes à élaborer
                un plan d'entretien des cours d'eau et à protéger la population contre les dangers naturels.
            </p>  
            <p>
                Ce  dernier  doit  permettre  une  protection  constante  et  durable  contre  les  crues ainsi
                qu’un entretien respectant les équilibres et la dynamique des écosystèmes aquatiques.
            </p>
            <h3>Le projet</h3> 
            <p>
                Les ruisseaux de la Fenatte, de la Betteratte et de la Golatte qui convergent vers celui de la Pran provoquent
                régulièrement des inondations dans le village de Develier.
            </p>
            <p>
                Les mesures prévues, qui sont techniquement sûres et efficaces contre les crues, tiennent compte des nouvelles
                exigences fédérales lors d'interventions dans les cours d'eau. Ces mesures permettent également d'accueillir
                une faune et une flore diversifiées promouvant la biodiversité.
            </p>
            <p>
                Des sentiers pédestres seront aménagés, dans la mesure du possible, le long des cours d'eau. Le projet répond ainsi
                à des dimensions économiques et écologiques, mais aussi sociales.
            </p>      
        </div>
        <div class="uk-column-1-2@m uk-column-1-1@s">
            <img src="DEVELIER_PROVITA1.PNG" alt="Carte Develier" class="uk-align-right uk-child-width-1-2@m">
            <h3>Les points forts</h3> 
            <div class="uk-overflow-auto">
                <table class="uk-table uk-table-hover uk-table-divider">
                    <thead>
                        <tr>
                            <th>La Fenatte</th>
                            <th>La Betteratte</th>
                            <th>La Pran</th>
                            <th>La Golatte</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mise à ciel ouvert du cours d'eau dans le secteur Ferme du Moulin</td>
                            <td>Mise à ciel ouvert du cours d’eau dans le secteur La Fin – Place du Soleil</td>
                            <td>Augmentation du gabarit et élargissement des berges</td>
                            <td>Création d’un piège à flottants sur le lit majeur de façon à être actif pendant les crues importante</td>
                        </tr>
                        <tr>
                            <td>Augmentation du gabarit hydraulique</td>
                            <td>Surlageur le long de la Route de Courfaivre et renouvellement du passage sous la route</td>
                            <td>Réalisation de digues dans le secteur Les Quatre-Faulx</td>
                            <td>Nouveau gabarit pour le passage sous la route cantonale et mise à ciel ouvert jusqu’à la confluence avec La Pran</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>                      
        <h3>Coûts et financement</h3>  
            <div class="uk-overflow-auto"> 
                <table class="uk-table uk-table-hover uk-table-small uk-table-divider">
                    <thead>
                        <tr>
                            <th>Cours d'eau</th>
                            <th>Mesures</th>
                            <th>Coûts TTC</th>
                            <th>Sous-totaux</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Fenatte</td>
                            <td>Protection contre les crues, y compris acquisition de terrains et revitalisation</td>
                            <td>1'365'500</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Betteratte</td>
                            <td>Protection contre les crues, y compris acquisition de terrains et revitalisation</td>
                            <td>760'000</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Golatte</td>
                            <td>Protection contre les crues, y compris acquisition de terrains et revitalisation</td>
                            <td>1'355'000</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Golat</td>
                            <td>Protection contre les crues</td>
                            <td>75'000</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Pran</td>
                            <td>Protection contre les crues, y compris acquisition de terrains et revitalisation</td>
                            <td>895'000</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Honoraires</td>
                            <td></td>
                            <td>750'000</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Divers et imprévus</td>
                            <td></td>
                            <td>450'000</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Crédit d'investissement</b></td>
                            <td></td>
                            <td></td>
                            <td><b>5'700'000</b></td>
                        </tr>
                        <tr>
                            <td>Subventions CH + JU</td>
                            <td>3'110'000</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Participation de tiers</td>
                            <td>500'000</td>
                            <td></td>
                            <td><b></b></td>
                        </tr>
                        <tr>
                            <td><b>Solde à charge de la commune</b></td>
                            <td></td>
                            <td></td>
                            <td><b>2'090'000</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <hr>
        <section>
            <h2 class="uk-text-center uk-text-left@m"><span class="pour">✔</span> Pour <span class="pour">✔</span></h2>
            <div class="uk-grid-medium uk-grid-match" uk-grid>
                <div class="uk-width-1-1 uk-width-3-4@l uk-margin-auto">
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-header">
                            <h3 class="uk-card-title">Argumentation</h3>
                        </div>
                        <div class="uk-card-body">
                            <ul class="uk-list uk-list-divider">
                                <li>Le projet répond aux dernières lois en vigueur.</li>
                                <li>Le projet  permet de protéger la population des crues et des dangers naturels.</li>
                                <li>Les mesures prévues sont sûres et efficaces.</li>
                                <li>La faune et la flore seront favorisées et la biodiversité sera ainsi promue.</li>
                                <li>Le projet comporte une dimension sociale.</li>
                                <li>Le projet répond au développement durable.</li>
                                <li>L'investissement n'aura pas d'impact sur les impôts et sera financé par une taxe.</li>
                                <li>Certains tronçons seront subventionnés à 80 %.</li>
                                <li>Il n'existe pas d'alternative à ce projet. En cas de refus, la Commune devra prendre à sa charge
                                    tous les frais en cas de dégâts ou d'inondations.
                                </li>
                                <li>3 objectifs pour 1 projet :</li>
                            </ul>
                            <ul>
                                <li>Les collectivités publiques doivent proposer des projets favorisant l'emploi aux entreprises privées
                                    pour éviter une trop forte augmentation du chômage lors de périodes de crise.
                                </li>
                                <li>La sécurité des citoyens est garantie ;</li>
                                <li>D'autres projets de ce type déjà réalisés, par exemple, Delémont, Vicques ou Courroux, s'intégrent très bien
                                    et sont très bien réalisés.
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1 uk-width-1-4@l uk-margin-auto">
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-header">
                            <h3 class="uk-card-title">Recommandent le OUI :</h3>
                        </div>
                        <div class="uk-card-body">
                            <ul class="uk-list uk-list-divider">
                                <li>Conseil communal</li>
                                <li>Commission communale d'urbanisme</li>
                                <li>Commission communale des Services industriels</li>
                                <li>Commission communale des travaux publics</li>
                                <li>Office fédéral de l'environenment</li>
                                <li>Service cantonal de l'économie rurale</li>
                                <li>Service cantonal des infrastructures</li>
                                <li>Office cantonal de l'environnement</li>
                                <li><span class="uk-badge badge-plr">Parti libéral-radical Develier</span></li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="uk-divider-icon">
            <section style="padding-bottom: 2%;">
                <h2 class="uk-text-center uk-text-left@m"><span>✖</span> Contre <span>✖</span></h2>
                <div class="uk-grid-medium uk-grid-match" uk-grid>
                    <div class="uk-width-1-1">
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-body">
                                    <p>Il n'y a aucune opposition à cette votation...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--
                    <div class="uk-width-3-4@l uk-margin-auto">
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header">
                                <h3 class="uk-card-title">Argumentation</h3>
                            </div>
                            <div class="uk-card-body">
                                <ul>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1 uk-width-1-4@l uk-margin-auto">
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header">
                                <h3 class="uk-card-title">Recommandent le NON :</h3>
                            </div>
                            <div class="uk-card-body">
                                <ul>                                    

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            -->
            </section>
    </section>
<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>