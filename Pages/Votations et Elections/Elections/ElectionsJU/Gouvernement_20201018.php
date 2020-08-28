<!DOCTYPE html>
<html lang="fr">
<head>

    <?php include '../../../../variables.php'; ?>

    <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
    <title>JuraVote | Elections cantonales du 18 octobre 2020</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
    <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
    <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
    <link rel="stylesheet" href="../../../../index.css"/>
    <link rel="stylesheet" href="../../../../badges.css"/>
    <link rel="stylesheet" href="../elections.css"/>
    
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
        <?php include "../../../../Includes/Navbar/navbar.php"; ?>
    </div>

    <div>
    <?php include "../../../../Includes/Navbar/navbar-mobile.php"; ?>
    </div>
</header>
<main>
    <section style="padding: 2%;">
        <h1 class="uk-heading-large">Election du Gouvernement jurassien (1er tour) - 18 octobre 2020</h1>
        <hr>

        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
            <button class="uk-button uk-button-default" type="button">En bref</button>
            <button class="uk-button uk-button-default" type="button">Liste des candidats-es</button>
            <button class="uk-button uk-button-default" type="button">Présentation des candidats-es</button>
        </div>  
        <ul class="uk-switcher uk-margin">
            <li>   
                <h1>Les élections cantonales en bref</h1>
                <p>13 candidats-es sont en lice pour l'Election au Gouvernement jurassien. Ces 13 personnalités proviennent de
                8 formations politiques pour décrocher les 5 sièges au sein de l'Exécutif.
                </p>
                <p>Les 5 Ministres sortants-es sont candidats-es à leur réélection. L'Election se déroule en deux tours : le 18 octobre
                et le 08 novembre. Les élus-es seront connus-es lors du deuxième tour, le 08 novembre prochain.
                </p>
            </li>  
            <li>
                <div uk-filter="target: .js-filter">
                    <ul class="uk-subnav uk-subnav-pill">
                        <li class="uk-active" uk-filter-control><a href="#">Tous</a></li>
                        <li uk-filter-control="[parti='PCSI']"><a href="#">PCSI</a></li>
                        <li uk-filter-control="[parti='PLRJ']"><a href="#">PLRJ</a></li>
                        <li uk-filter-control="[parti='PDC']"><a href="#">PDC</a></li>
                        <li uk-filter-control="[parti='PSJ']"><a href="#">PSJ</a></li>
                        <li uk-filter-control="[parti='CSPOP']"><a href="#">CSPOP</a></li>
                        <li uk-filter-control="[parti='UDC']"><a href="#">UDC</a></li>
                        <li uk-filter-control="[parti='Verts']"><a href="#">Verts</a></li>
                        <li uk-filter-control="[parti='PVL']"><a href="#">PVL</a></li>
                    </ul>

                    <ul class="js-filter uk-child-width-1-5@l uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>
                        <li parti="PCSI">
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $DavidEray ?>"
                                                alt="David Eray">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">David Eray</h3>
                                    <p class="uk-text-center text-fonction">1973 - Le Noirmont - Ministre</p>
                                </div>
                            </div>
                        </li>

                        <li parti="PLRJ">
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $JacquesGerber ?>"
                                                alt="Jacques Gerber">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Jacques Gerber</h3>
                                    <p class="uk-text-center text-fonction">1973 - Porrentruy - Ministre</p>
                                </div>
                            </div>
                        </li>

                        <li parti="PDC">
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                            <div class="uk-width-auto uk-first-column">
                                                <img class="uk-border-circle photo-personne"
                                                    src="<?php echo $MartialCourtet ?>"
                                                    alt="Martial Courtet">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title-center text-rouge-fonce">Martial Courtet</h3>
                                        <p class="uk-text-center text-fonction">1976 - Delémont - Ministre</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li parti="PDC">
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $inconnu ?>"
                                                alt="Stephane Babey">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Stéphane Babey</h3>
                                    <p class="uk-text-center text-fonction">1971 - Alle - Ingénieur agronome</p>
                                </div>
                            </div>
                        </li>

                        <li parti="PSJ">
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $NathalieBarthoulot ?>"
                                                alt="Nathalie Barthoulot">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Nathalie Barthoulot</h3>
                                    <p class="uk-text-center text-fonction">1968 - Courtételle - Ministre</p>
                                </div>
                            </div>
                        </li>

                        <li parti="PSJ">
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $RosalieBeuret ?>"
                                                alt="Rosalie Beuret Siess">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Rosalie Beuret Siess</h3>
                                    <p class="uk-text-center text-fonction">1978 - Porrentruy - Ministre</p>
                                </div>
                            </div>
                        </li>

                        <li parti="CSPOP">
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-cspop uk-border-rounded">CS-POP</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $inconnu ?>"
                                                alt="Francisco Pires">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Francisco Pires</h3>
                                    <p class="uk-text-center text-fonction">1964 - Les Pommerats - Secrétaire syndical</p>
                                </div>
                            </div>
                        </li>

                        <li parti="UDC">
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $inconnu ?>"
                                                alt="Brigitte Favre">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Brigitte Favre</h3>
                                    <p class="uk-text-center text-fonction">1984 - Saignelégier - Ingénieur HES en Agronomie</p>
                                </div>
                            </div>
                        </li>

                        <li parti="UDC">
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $inconnu ?>"
                                                alt="Didier Spies">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Didier Spies</h3>
                                    <p class="uk-text-center text-fonction">1971 - Courroux - Chargé de sécurité</p>
                                </div>
                            </div>
                        </li>

                        <li parti="Verts">
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $inconnu ?>"
                                                alt="Céline Robert-Charrue Linder">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Céline Robert-Charrue Linder</h3>
                                    <p class="uk-text-center text-fonction">1969 - Delémont - Archéologue</p>
                                </div>
                            </div>
                        </li>

                        <li parti="Verts">
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $inconnu ?>"
                                                alt="Vincent Schmitt">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Vincent Schmitt</h3>
                                    <p class="uk-text-center text-fonction">1983 - Les Enfers - Agronome</p>
                                </div>
                            </div>
                        </li>

                        <li parti="PVL">
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $inconnu ?>"
                                                alt="Emilie Moreau">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Emilie Moreau</h3>
                                    <p class="uk-text-center text-fonction">1979 - Porrentruy - Cheffe de service chez Jura Tourisme</p>
                                </div>
                            </div>
                        </li>

                        <li parti="PVL">
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $inconnu ?>"
                                                alt="Alain Beuret">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Alain Beuret</h3>
                                    <p class="uk-text-center text-fonction">1978 - Delémont - Architecte EPFL / Urbaniste FSU</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    </div>
                </div>
            </li>

            <li>

            </li>

        </ul>
            
    </section>
</main>
</body>
<footer>
    <div class="footer">
    <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
    </div>
</footer>
</html>