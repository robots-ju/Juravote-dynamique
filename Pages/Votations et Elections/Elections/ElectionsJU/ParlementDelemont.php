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
        <link rel="stylesheet" href="<?php echo $csselections; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssbadges; ?>"/>
        
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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        </header>
<main>
    <section style="padding: 2%;">
        <h1 class="uk-heading-large">Elections cantonales du 18 octobre 2020</h1>
        <hr>
        <div class="uk-alert-primary" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>Vous trouverez plus d'informations sur les candidates et candidats en cliquant sur leurs cartes respectives !
            (la mise en ligne se fait au fur et à mesure des retours des candidates et candidats)</p>
        </div>
        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
            <button class="uk-button uk-button-default" type="button">Les élections en bref</button>
            <button class="uk-button uk-button-default" type="button">Liste 1 (PLRJ)</button>
            <button class="uk-button uk-button-default" type="button">Liste 2 (PSJ-JSJ)</button>
            <button class="uk-button uk-button-default" type="button">Liste 3 (PDC-JDC)</button>
            <button class="uk-button uk-button-default" type="button">Liste 4 (CS-POP)</button>
            <button class="uk-button uk-button-default" type="button">Liste 5 (PEV-Jura)</button>
            <button class="uk-button uk-button-default" type="button">Liste 6 (UDC)</button>
            <button class="uk-button uk-button-default" type="button">Liste 7 (Verts)</button>
            <button class="uk-button uk-button-default" type="button">Liste 8 (PCSI)</button>
            <button class="uk-button uk-button-default" type="button">Liste 9 (PVL)</button>
            <button class="uk-button uk-button-default" type="button">Liste 10 (AB)</button>
        </div>  
        <ul class="uk-switcher uk-margin">
            <li>   
                <h1>Les élections cantonales en bref</h1>
                <p>252 candidats-es sont en lice pour l'Election au Parlement Jurassien (District de Delémont). Ces 252 personnalités proviennent de
                10 formations politiques pour décrocher les 30 sièges au sein du législatif.
                </p>
                <p>Les élus-es seront connus-es à la fin du scrutin, le 18 octobre prochain.
                </p>
            </li>  
            <li>
                <div class="uk-child-width-1-5@l uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <!--LIEN POUR MODAL<a class="uk-button uk-button-default" href="#modal-center" uk-toggle>-->
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $inconnu ?>"
                                                alt="Marcelle Luchinger Fleury">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Marcelle Luchinger Fleury</h3>
                                    <p class="uk-text-center text-fonction">1955 - Courroux - Consultante indépendante</p>
                                </div>
                            </div>
                        <!--LIEN FERMANT + CONTENU</a>
                        <div id="modal-center" class="uk-flex-top" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                                <button class="uk-modal-close-default" type="button" uk-close></button>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                            </div>
                        </div>-->
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Vivien Schmid">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Vivien Schmid</h3>
                                <p class="uk-text-center text-fonction">1998 - Delémont - Etudiant HEG</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Michelle Müller">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Michèle Müller</h3>
                                <p class="uk-text-center text-fonction">1951 - Courrendlin - Femme au foyer</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Loïc Schindeholz">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Loïc Schindelholz</h3>
                                <p class="uk-text-center text-fonction">1999 - Delémont - Employé de commerce</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Sonia Hänni-Béguelin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Sonia Hänni-Béguelin</h3>
                                <p class="uk-text-center text-fonction">1972 - Develier - Vendeuse</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Matthieu Saner">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Matthieu Saner</h3>
                                <p class="uk-text-center text-fonction">1980 - Delémont - Directeur informatique</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Christine Domont">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Christine Domont</h3>
                                <p class="uk-text-center text-fonction">1973 - Delémont - Infirmière</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Michel Friche">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Michel Friche</h3>
                                <p class="uk-text-center text-fonction">1950 - Delémont - Employé de commerce retraité</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Germaine Buchwalder">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Germaine Buchwalder</h3>
                                <p class="uk-text-center text-fonction">1949 - Delémont - Vendeuse</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Martin Braichet">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Martin Braichet</h3>
                                <p class="uk-text-center text-fonction">1988 - Montavon - Responsable ADECCO RH SA</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="André Henzelin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">André Henzelin</h3>
                                <p class="uk-text-center text-fonction">1949 - Delémont - Cadre bancaire retraité</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jean-Pierre Girard">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jean-Pierre Girard</h3>
                                <p class="uk-text-center text-fonction">1966 - Glovelier - Agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Yann Rufer">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Yann Rufer</h3>
                                <p class="uk-text-center text-fonction">1979 - Rossemaison - Cadre bancaire</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Alain Schweingruber">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Alain Schweingruber</h3>
                                <p class="uk-text-center text-fonction">1952 - Boécourt - Avocat</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Alain Graf">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Alain Graf</h3>
                                <p class="uk-text-center text-fonction">1970 - Courfaivre - Directeur RH</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Ulrich Rubli">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Ulrich Rubli</h3>
                                <p class="uk-text-center text-fonction">1960 - Delémont - Chef de service</p>
                            </div>
                        </div>
                    </div>  

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Alain Fleury">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Alain Fleury</h3>
                                <p class="uk-text-center text-fonction">1974 - Courroux - Inspecteur OSEE</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jean-Claude Finger">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jean-Claude Finger</h3>
                                <p class="uk-text-center text-fonction">1951 - Courtételle - Ingénieur électrique HES retraité</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Pascal Beuret">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Pascal Beuret</h3>
                                <p class="uk-text-center text-fonction">1970 - Courtételle - Entrepreneur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Alexis Schouller">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Alexis Schouller</h3>
                                <p class="uk-text-center text-fonction">1988 - Bassecourt - Employé de commerce</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Nicolas Kocher">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Nicolas Kocher</h3>
                                <p class="uk-text-center text-fonction">1990 - Delémont - Economiste HEG</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Pierre-Xavier Meury">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Pierre-Xavier Meury</h3>
                                <p class="uk-text-center text-fonction">1956 - Delémont - Géologue</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Patrick Parrat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Patrick Parrat</h3>
                                <p class="uk-text-center text-fonction">1987 - Courroux - Responsable marque SEAT</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Nicolas Eichenberger">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Nicolas Eichenberger</h3>
                                <p class="uk-text-center text-fonction">1973 - Boécourt - Chimiste</p>
                            </div>
                        </div>
                    </div>
    
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Pierre Chételat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Pierre Chételat</h3>
                                <p class="uk-text-center text-fonction">1962 - Delémont - Architecte</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Vincent Froté">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Vincent Froté</h3>
                                <p class="uk-text-center text-fonction">1958 - Delémont - Conseiller en prévoyance</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Florian Chételat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Florian Chételat</h3>
                                <p class="uk-text-center text-fonction">1986 - Pleigne - Informaticien</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Stéphane Brosy">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Stéphane Brosy</h3>
                                <p class="uk-text-center text-fonction">1964 - Pleigne - Entrepreneur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a class="uk-button uk-button-default" href="#modal-full-2" uk-toggle>
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $RenaudDaniel ?>"
                                                alt="Daniel Renaud">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Daniel Renaud</h3>
                                    <p class="uk-text-center text-fonction">2000 - Develier - Employé de commerce</p>
                                </div>
                            </div>
                        </a>
                        <div id="modal-full-2" class="uk-modal-full uk-text-justify" uk-modal>
                            <div class="uk-modal-dialog">
                                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                    <div class="uk-background-cover" style="background-image: url(<?php echo $RenaudDaniel ?>);" uk-height-viewport></div>
                                    <div class="uk-padding-large">
                                    <h2>Daniel Renaud, 2000, Develier, employé de commerce en formation HEG</h2>
                                    <p>Célibataire, pas d'enfants, maturité d'employé de commerce</p>
                                        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
                                            <button class="uk-button uk-button-default" type="button">Présentation</button>
                                            <button class="uk-button uk-button-default" type="button">Votations du 27 septembre</button> 
                                            <button class="uk-button uk-button-default" type="button">Votations du 29 novembre</button>
                                            <button class="uk-button uk-button-default" type="button">Social et santé</button>  
                                            <button class="uk-button uk-button-default" type="button">Société et éthique</button>          
                                            <button class="uk-button uk-button-default" type="button">Finances et impositions</button>     
                                            <button class="uk-button uk-button-default" type="button">Economie</button>     
                                            <button class="uk-button uk-button-default" type="button">Energies et environnement</button>     
                                            <button class="uk-button uk-button-default" type="button">Digitalisation</button>     
                                        </div>
                                        <ul class="uk-switcher uk-margin">
                                            <li>
                                                <h4>Motivations</h4>
                                                <p>L'envie de servir son Canton et les citoyens-nes,
                                                développer de nouvelles compétences et défendre les valeurs libérales</p>

                                                <h4>Priorités politiques</h4>
                                                <p>Poursuite de la digitalisation au sein de l'Etat jurassien / Développer
                                                les énergies renouvelables de manière raisonnable / Favoriser la reprise
                                                après la crise COVID / Améliorer la sécurité sur les routes</p>

                                                <h4>Vos loisirs</h4>
                                                <p>Cinéma / Informatique</p>

                                                <h4>Vos réseaux sociaux</h4>
                                                <ul>
                                                    <li class="icon_resaux"><a href="https://twitter.com/DanRenaud3" target="_blank" uk-icon="icon: twitter; ratio: 2"></a></li>
                                                    <li class="icon_resaux"><a href="https://www.instagram.com/danielrenaud2000/" target="_blank" uk-icon="icon: instagram; ratio: 2"></a></li>
                                                    <li class="icon_resaux"><a href="https://www.facebook.com/profile.php?id=100008360372402" target="_blank" uk-icon="icon: facebook; ratio: 2"></a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Congé paternité</th>
                                                            <th class="uk-text-center">Loi sur la chasse</th>
                                                            <th class="uk-text-center">Initiative de limitation</th>
                                                            <th class="uk-text-center">Loi sur l'impôt direct</th>
                                                            <th class="uk-text-center">Avions de combat</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>                                                    
                                                        </tr>
                                                    </tbody>
                                                </table>    
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Initiative "Entreprises responsables"</th>
                                                            <th class="uk-text-center">Initiative "Interdiction du financement des producteurs de matériel de guerre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: MediumAquaMarine;">Plutôt oui</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: MediumAquaMarine;">Plutôt oui</span></td>                                                    
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>

                                            <li>          
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Age de la retraite relevé et identique pour les femmes et les hommes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Injustifiée</span>                                            
                                                        <div class="uk-card uk-card-body">Hausse des coûts des primes d'assurance maladie dans le Jura ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">NON</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction d'une caisse-maladie unique dans le Jura ?</div>
                                                    </div>
                                                </div>                                             
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: MediumAquaMarine;">Plutôt oui</span>                                            
                                                        <div class="uk-card uk-card-body">Fusions et regroupements de communes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">NON</span>                                            
                                                        <div class="uk-card uk-card-body">Droit de vote à 16 ans ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Consommation légalisée de cannabis ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Mêmes droits pour les couples de même sexe que
                                                        les couples hétérosexuels ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: MediumAquaMarine;">Plutôt oui</span>                                            
                                                        <div class="uk-card uk-card-body">Euthanasie active par des médecins en Suisse ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Financement transparent des partis et
                                                        des campagnes pour les élections et votations ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Abolition du changement d'heure d'été / heure d'hiver ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Maintien</span>                                            
                                                        <div class="uk-card uk-card-body">Evolution des impôts dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Imposition individuelle ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Rentes AVS/AI exonérées d'impôt ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Libéralisation complète des heures d'ouverture des magasins ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Attribution du réseau de lignes de bus à CarPostal ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: MediumAquaMarine;">Plutôt oui</span>                                            
                                                        <div class="uk-card uk-card-body">Micro-impôt sur le trafic des paiements sans espèces ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: MediumAquaMarine;">Plutôt oui</span>                                            
                                                        <div class="uk-card uk-card-body">Géothermie profonde à Haute-Sorne ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Développement de l'éolien dans le Jura ?</div>
                                                    </div> 
                                                </div> 
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction de la 5G dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Vote électronique en Suisse ?</div>
                                                    </div> 
                                                </div> 
                                            </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Christophe Günter">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Christophe Günter</h3>
                                <p class="uk-text-center text-fonction">1971 - Delémont - Ingéneieur ETS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-5@l uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Eva Colomb">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Eva Colomb</h3>
                                <p class="uk-text-center text-fonction">1995 - Glovelier - Attachée de production RTS</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Gaëlle Frossard">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Gaëlle Frossard</h3>
                                <p class="uk-text-center text-fonction">1988 - Delémont - Educatrice sociale</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Leïla Hanini">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Leïla Hanini</h3>
                                <p class="uk-text-center text-fonction">1993 - Courroux - Juriste-économiste</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Valentine Steulet">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Valentine Steulet</h3>
                                <p class="uk-text-center text-fonction">1994 - Rossemaison - Enseignante spécialisée</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Maël Bourquard">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Maël Bourquard</h3>
                                <p class="uk-text-center text-fonction">1988 - Delémont - Ingénieur en environnement</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Kevin Challet">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Kevin Challet</h3>
                                <p class="uk-text-center text-fonction">1987 - Glovelier - Directeur maison de l'enfance</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Laurent Crevoisier">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Laurent Crevoisier</h3>
                                <p class="uk-text-center text-fonction">1994 - Delémont - Syndicaliste</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Loïc Dobler">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Loïc Dobler</h3>
                                <p class="uk-text-center text-fonction">1987 - Glovelier - Syndicaliste</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Eric Ioset">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Eric Ioset</h3>
                                <p class="uk-text-center text-fonction">1994 - Glovelier - Coordinateur projets touristiques</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Valère Lovis">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Valère Lovis</h3>
                                <p class="uk-text-center text-fonction">1997 - Vicques - Etudiant</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Valery Rion">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Valery Rion</h3>
                                <p class="uk-text-center text-fonction">1986 - Bassecourt - Enseignant</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Colin Vollmer">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Colin Vollmer</h3>
                                <p class="uk-text-center text-fonction">1997 - Delémont - Etudiant-collaborateur politique</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Valérie Bourquin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Valérie Bourquin</h3>
                                <p class="uk-text-center text-fonction">1969 - Delémont - Infirmière AJAM</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Pauline Christ Hostettler">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Pauline Christ Hostettler</h3>
                                <p class="uk-text-center text-fonction">1981 - Courchapoix - Secrétaire et chargée de communication</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Baïlo Dialo Rottet">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Baïlo Dialo Rottet</h3>
                                <p class="uk-text-center text-fonction">1978 - Delémont - Employée de commerce / Entrepeneure</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Stéphanie Froidevaux">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Stéphanie Froidevaux</h3>
                                <p class="uk-text-center text-fonction">1979 - Courfaivre - Employée de commerce</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jocelyne Mérat Diop">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jocelyne Mérat Diop</h3>
                                <p class="uk-text-center text-fonction">1963 - Courroux - Secrétaire-caissière ASLOCA</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Lucille Nussbaumer">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Lucille Nussbaumer</h3>
                                <p class="uk-text-center text-fonction">1980 - Pleigne - Enseignante secondaire</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Françoise Schaffter Houlmann">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Françoise Schaffter Houlmann</h3>
                                <p class="uk-text-center text-fonction">1972 - Courtételle - Collaboratrice communication</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Fanny Wisler">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Fanny Wisler</h3>
                                <p class="uk-text-center text-fonction">1976 - Delémont - Technico-commerciale</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Iskander Ali">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Iskander Ali</h3>
                                <p class="uk-text-center text-fonction">1973 - Delémont - Interprète Opérateur-programmeur CNC</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Joël Burkhalter">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Joël Burkhalter</h3>
                                <p class="uk-text-center text-fonction">1965 - Courrendlin - Chef projet domaine énergie</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Patrick Cerf">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Patrick Cerf</h3>
                                <p class="uk-text-center text-fonction">1975 - Corban - Secrétaire syndical</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Raphaël Ciocchi">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Raphaël Ciocchi</h3>
                                <p class="uk-text-center text-fonction">1984 - Courroux - Directeur adjoint DIVCOM</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Pierre-André Comte">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Pierre-André Comte</h3>
                                <p class="uk-text-center text-fonction">1955 - Vellerat - Secrétaire rédacteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Fabrice Macquat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Fabrice Macquat</h3>
                                <p class="uk-text-center text-fonction">1977 - Courroux - Responsable filière préapprentissage</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Yannick Sanglard">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Yannick Sanglard</h3>
                                <p class="uk-text-center text-fonction">1976 - Courtételle - Directeur associé Energy</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jude Schindelholz">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jude Schindelholz</h3>
                                <p class="uk-text-center text-fonction">1980 - Delémont - Géographe</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Claude Schlüchter">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Claude Schlüchter</h3>
                                <p class="uk-text-center text-fonction">1957 - Delémont - Dessinateur-architecte</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Mehmet Suvat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Mehmet Suvat</h3>
                                <p class="uk-text-center text-fonction">1961 - Delémont - Décolleteur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-5@l uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Patrice Baume">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Patrice Baume</h3>
                                <p class="uk-text-center text-fonction">1967 - Bassecourt - Ingénieur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Boris Beuret">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Boris Beuret</h3>
                                <p class="uk-text-center text-fonction">1977 - Corban - Agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Serge Beuret">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Serge Beuret</h3>
                                <p class="uk-text-center text-fonction">1962 - Delémont - Avocat notaire</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Anne-Lise Chapatte">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Anne-Lise Chapatte</h3>
                                <p class="uk-text-center text-fonction">1972 - Vicques - Employée de commerce</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Pascal Crétin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Pascal Crétin</h3>
                                <p class="uk-text-center text-fonction">1960 - Soulce - Indépendant</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Vincent Eschmann">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Vincent Eschmann</h3>
                                <p class="uk-text-center text-fonction">1962 - Vicques - Maître secondaire</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jennifer Fleury">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jennifer Fleury</h3>
                                <p class="uk-text-center text-fonction">2001 - Courfaivre - Collaboratrice administrative</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Nadine Flury">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Nadine Flury</h3>
                                <p class="uk-text-center text-fonction">1960 - Rossemaison - Employé de commerce</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Patrick Frein">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Patrick Frein</h3>
                                <p class="uk-text-center text-fonction">1968 - Delémont - Pharmacien</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Anne Froidevaux">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Anne Froidevaux</h3>
                                <p class="uk-text-center text-fonction">1985 - Courtételle - Secrétaire générale</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Olivier Goffinet">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Olivier Goffinet</h3>
                                <p class="uk-text-center text-fonction">1980 - Courrendlin - Enseignant secondaire</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Fanny Gogniat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Fanny Gogniat</h3>
                                <p class="uk-text-center text-fonction">1976 - Saulcy - Formatrice en intendance</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jean-Louis Guenat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jean-Louis Guenat</h3>
                                <p class="uk-text-center text-fonction">1963 - Pleigne - Agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Vanessa Hamzaj-Memetaj">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Vanessa Hamzaj-Memetaj</h3>
                                <p class="uk-text-center text-fonction">1992 - Delémont - Avocate</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Madeleine Juillard Schaller">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Madeleine Juillard Schaller</h3>
                                <p class="uk-text-center text-fonction">1965 - Delémont - Pharmacienne</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Khelaf Kerkour">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Khelaf Kerkour</h3>
                                <p class="uk-text-center text-fonction">1955 - Delémont - Physiothérapeute</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Sébastien Koller">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Sébastien Koller</h3>
                                <p class="uk-text-center text-fonction">1983 - Courtételle - Spécialiste en assurance</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Bernadette Kunz">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Bernadette Kunz</h3>
                                <p class="uk-text-center text-fonction">1967 - Movelier - Assistante d'exploitation</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Adeline Mahon">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Adeline Mahon</h3>
                                <p class="uk-text-center text-fonction">1999 - Glovelier - Employée de commerce</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Julien Meier">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Julien Meier</h3>
                                <p class="uk-text-center text-fonction">1983 - Undervelier - Cuisinier</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="François Monin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">François Monin</h3>
                                <p class="uk-text-center text-fonction">1992 - Delémont - Ingénieur Agronome EPFZ</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Aubin Montavon">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Aubin Montavon</h3>
                                <p class="uk-text-center text-fonction">1999 - Courtételle - Agro-commerçant</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jean-François Pape">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jean-François Pape</h3>
                                <p class="uk-text-center text-fonction">1969 - Pleigne - Maître agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Samuel Rohrbach">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Samuel Rohrbach</h3>
                                <p class="uk-text-center text-fonction">1972 - Vicques - Enseignant / Prés. SER</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Michel Saner">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Michel Saner</h3>
                                <p class="uk-text-center text-fonction">1952 - Courfaivre - Indépendant</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Noël Saucy">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Noël Saucy</h3>
                                <p class="uk-text-center text-fonction">1964 - Develier - Agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Dominique Schärer">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Dominique Schärer</h3>
                                <p class="uk-text-center text-fonction">1965 - Develier - Agent d'exploitation</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="David Schaller">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">David Schaller</h3>
                                <p class="uk-text-center text-fonction">1991 - Courroux - Projeteur comptable</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Laurent Steulet">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Laurent Steulet</h3>
                                <p class="uk-text-center text-fonction">1986 - Vicques - Employé de commerce</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jessica Wiser">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jessica Wiser</h3>
                                <p class="uk-text-center text-fonction">1996 - Boécourt - Etudiante en droit</p>
                            </div>
                        </div>
                    </div>                    
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-5@l uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Tania Schindelholz">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Tania Schindelholz</h3>
                                <p class="uk-text-center text-fonction">1985 - Delémont - Cheffe de projets en promotion de la santé</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="René Grossmann">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">René Grossmann</h3>
                                <p class="uk-text-center text-fonction">1966 - Courrendlin - Enseignant au CEJEF</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Maria Teresa Sepulveda Rebetez">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Maria Teresa Sepulveda Rebetez</h3>
                                <p class="uk-text-center text-fonction">1952 - Delémont - Infirmière et enseignante retraitée</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a class="uk-button uk-button-default" href="#modal-full-1" uk-toggle>
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $MeuryRemy ?>"
                                                alt="Rémy Meury">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Rémy Meury</h3>
                                    <p class="uk-text-center text-fonction">1959 - Delémont - Secrétaire syndical</p>
                                </div>
                            </div>
                        </a>
                        <div id="modal-full-1" class="uk-modal-full uk-text-justify" uk-modal>
                            <div class="uk-modal-dialog">
                                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                    <div class="uk-background-cover" style="background-image: url(<?php echo $MeuryRemyGrand ?>);" uk-height-viewport></div>
                                    <div class="uk-padding-large">
                                    <h2>Rémy Meury, 1959, Delémont, secrétaire syndical</h2>
                                    <p>Marié, 2 enfants, formation d'Enseignant primaire</p>
                                        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
                                            <button class="uk-button uk-button-default" type="button">Présentation</button>
                                            <button class="uk-button uk-button-default" type="button">Votations du 27 septembre</button> 
                                            <button class="uk-button uk-button-default" type="button">Votations du 29 novembre</button>
                                            <button class="uk-button uk-button-default" type="button">Social et santé</button>  
                                            <button class="uk-button uk-button-default" type="button">Société et éthique</button>          
                                            <button class="uk-button uk-button-default" type="button">Finances et impositions</button>     
                                            <button class="uk-button uk-button-default" type="button">Economie</button>     
                                            <button class="uk-button uk-button-default" type="button">Energies et environnement</button>     
                                            <button class="uk-button uk-button-default" type="button">Digitalisation</button>     
                                        </div>
                                        <ul class="uk-switcher uk-margin">
                                            <li>
                                                <h4>Motivations</h4>
                                                <p>Participer au débat démocratique dans le but de changer en profondeur la société
                                                pour qu'elle devienne plus juste et plus solidaire. Le fonctionnement même du système
                                                capitaliste doit être remis en cause.</p>
                                                <p>J'espère sincèrement que la société se modifiera profondément à la suite des
                                                élections et que la place de l'être humain revienne où elle n'aurait jamais dû
                                                cesser d'être : à la place centrale.</p>

                                                <h4>Priorités politiques</h4>
                                                <p>Il y a suffisamment de richesses pour que tout le monde vive décemment. La
                                                redistribution de celles-ci doivent être revu afin que la vie de chacun-e s'améliore
                                                et non que l'on continue de voir ce qui se produit inexorablement chaque année, une
                                                augmentation des richesses d'une infime minorité et une augmentation constante de la
                                                pauvreté, y compris dans nos contrées.</p>

                                                <h4>Vos loisirs</h4>
                                                <p>Essentiellement les visites culturelles et la lecture. </p>

                                                <h4>Vos réseaux sociaux</h4>
                                                <p>Je ne suis pas sur les réseaux sociaux que je préfère appeler la "fachosphère"
                                                tant la libération de la parole y permet aux médiocres d'y déverser leur haine.</p>
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Congé paternité</th>
                                                            <th class="uk-text-center">Loi sur la chasse</th>
                                                            <th class="uk-text-center">Initiative de limitation</th>
                                                            <th class="uk-text-center">Loi sur l'impôt direct</th>
                                                            <th class="uk-text-center">Avions de combat</th>
                                                            <th class="uk-text-center">Delémont : développement du secteur des Arquebusiers</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>  
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>                                                      
                                                        </tr>
                                                    </tbody>
                                                </table>    
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Initiative "Entreprises responsables"</th>
                                                            <th class="uk-text-center">Initiative "Interdiction du financement des producteurs de matériel de guerre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>                                                    
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>

                                            <li>          
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">NON</span>                                            
                                                        <div class="uk-card uk-card-body">Age de la retraite relevé et identique pour les femmes et les hommes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">Injustifiée</span>                                            
                                                        <div class="uk-card uk-card-body">Hausse des coûts des primes d'assurance maladie dans le Jura ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction d'une caisse-maladie unique dans le Jura ?</div>
                                                    </div>
                                                </div>                                             
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: MediumAquaMarine;">Plutôt oui</span>                                            
                                                        <div class="uk-card uk-card-body">Fusions et regroupements de communes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: MediumAquaMarine;">Plutôt oui</span>                                            
                                                        <div class="uk-card uk-card-body">Droit de vote à 16 ans ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: MediumAquaMarine;">Plutôt oui</span>                                            
                                                        <div class="uk-card uk-card-body">Consommation légalisée de cannabis ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Mêmes droits pour les couples de même sexe que
                                                        les couples hétérosexuels ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: MediumAquaMarine;">Plutôt oui</span>                                            
                                                        <div class="uk-card uk-card-body">Euthanasie active par des médecins en Suisse ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Financement transparent des partis et
                                                        des campagnes pour les élections et votations ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Abolition du changement d'heure d'été / heure d'hiver ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Maintien</span>                                            
                                                        <div class="uk-card uk-card-body">Evolution des impôts dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Imposition individuelle ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Rentes AVS/AI exonérées d'impôt ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">NON</span>                                            
                                                        <div class="uk-card uk-card-body">Libéralisation complète des heures d'ouverture des magasins ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: IndianRed;">Plutôt contre</span>                                            
                                                        <div class="uk-card uk-card-body">Attribution du réseau de lignes de bus à CarPostal ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Micro-impôt sur le trafic des paiements sans espèces ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Géothermie profonde à Haute-Sorne ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Développement de l'éolien dans le Jura ?</div>
                                                    </div> 
                                                </div> 
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">NON</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction de la 5G dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Vote électronique en Suisse ?</div>
                                                    </div> 
                                                </div> 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>                     
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Julie Soranzo">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Julie Soranzo</h3>
                                <p class="uk-text-center text-fonction">1998 - Delémont - Etudiante HEVS-TS</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Vincent Nicoulin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Vincent Nicoulin</h3>
                                <p class="uk-text-center text-fonction">1994 - Delémont - Etudiant en sciences sociales et politiques</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Guite Theurillat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Guite Theurillat</h3>
                                <p class="uk-text-center text-fonction">1947 - Delémont - Formatrice d'adultes</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="André Parrat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">André Parrat</h3>
                                <p class="uk-text-center text-fonction">1960 - Delémont - Travailleur social</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Marie Thiévent">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Marie Thiévent</h3>
                                <p class="uk-text-center text-fonction">1954 - Delémont - Enseignante retraitée</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jean Parrat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jean Parrat</h3>
                                <p class="uk-text-center text-fonction">1958 - Delémont - Hygiéniste du travail</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Auriane Venzin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Auriane Venzin</h3>
                                <p class="uk-text-center text-fonction">1994 - Vicques - Educatrice sociale</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Christophe Schaffter">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Christophe Schaffter</h3>
                                <p class="uk-text-center text-fonction">1966 - Delémont - Avocat</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Mérane Woudman">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Mérane Woudman</h3>
                                <p class="uk-text-center text-fonction">1990 - Delémont - Helpdesk Specialist</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Hervé Schaller">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Hervé Schaller</h3>
                                <p class="uk-text-center text-fonction">1979 - Delémont - Dessinateur en bâtiment</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Corinne Zahno">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Corinne Zahno</h3>
                                <p class="uk-text-center text-fonction">1980 - Delémont - Infirmière</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Florence Berdat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Florence Berdat</h3>
                                <p class="uk-text-center text-fonction">1965 - Delémont - Assistante socio-éducative</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Gabriel Villemin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Gabriel Villemin</h3>
                                <p class="uk-text-center text-fonction">1975 - Delémont - Horticulteur-paysagiste</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Liza Crétin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Liza Crétin</h3>
                                <p class="uk-text-center text-fonction">1975 - Courfaivre - Enseignante</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jean-Marc Voisard">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jean-Marc Voisard</h3>
                                <p class="uk-text-center text-fonction">1960 - Boécourt - Enseignant école professionnelle</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Esther Gelso">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Esther Gelso</h3>
                                <p class="uk-text-center text-fonction">1955 - Delémont - Secrétaire</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jordan Willemin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jordan Willemin</h3>
                                <p class="uk-text-center text-fonction">1994 - Bassecourt - Ingénieur électricien</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Estelle Kamber">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Estelle Kamber</h3>
                                <p class="uk-text-center text-fonction">1969 - Delémont - Psychologue et praticienne-form. en travail social</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Luc Bron">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Luc Bron</h3>
                                <p class="uk-text-center text-fonction">1973 - Mervelier - Architecte</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Sengül Köker">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Sengül Köker</h3>
                                <p class="uk-text-center text-fonction">1955 - Delémont - Interprète communautaire</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jérôme Corbat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jérôme Corbat</h3>
                                <p class="uk-text-center text-fonction">1962 - Delémont - Agent administratif</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Janka Mosimann">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Janka Mosimann</h3>
                                <p class="uk-text-center text-fonction">1992 - Delémont - Employée de commerce</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Thierry Cortat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Thierry Cortat</h3>
                                <p class="uk-text-center text-fonction">1958 - Delémont - Agent technico-commercial</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Chloé Parrat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Chloé Parrat</h3>
                                <p class="uk-text-center text-fonction">1988 - Delémont - Spécialiste en santé sexuelle</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Sacha Crétin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Sacha Crétin</h3>
                                <p class="uk-text-center text-fonction">2000 - Courfaivre - Etudiant</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Cécile Perrouelle">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Cécile Perrouelle</h3>
                                <p class="uk-text-center text-fonction">1984 - Delémont - Infirmière</p>
                            </div>
                        </div>
                    </div>                    
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-6@l uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV-Jura</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Silvio Mittempergher">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Silvio Mittempergher</h3>
                                <p class="uk-text-center text-fonction">1967 - Châtillon - Paysagiste</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a class="uk-button uk-button-default" href="#modal-full-3" uk-toggle>
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV-Jura</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $SirautPhilippe ?>"
                                                alt="Philippe Siraut">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Philippe Siraut</h3>
                                    <p class="uk-text-center text-fonction">1961 - Delémont - Ingénieur</p>
                                </div>
                            </div>
                        </a>
                        <div id="modal-full-3" class="uk-modal-full uk-text-justify" uk-modal>
                            <div class="uk-modal-dialog">
                                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                    <div class="uk-background-cover" style="background-image: url(<?php echo $SirautPhilippe ?>);" uk-height-viewport></div>
                                    <div class="uk-padding-large">
                                        <h2>Philippe Siraut, 1961, Delémont, ingénieur</h2>
                                        <p>Marié, 6 enfants, MSEE (ingénieur niveau EPFL)</p>
                                        <div class="switcher-buttons uk-text-left" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
                                            <button class="uk-button uk-button-default" type="button">Présentation</button>
                                            <button class="uk-button uk-button-default" type="button">Votations du 27 septembre</button> 
                                            <button class="uk-button uk-button-default" type="button">Votations du 29 novembre</button>
                                            <button class="uk-button uk-button-default" type="button">Social et santé</button>  
                                            <button class="uk-button uk-button-default" type="button">Société et éthique</button>          
                                            <button class="uk-button uk-button-default" type="button">Finances et impositions</button>     
                                            <button class="uk-button uk-button-default" type="button">Economie</button>     
                                            <button class="uk-button uk-button-default" type="button">Energies et environnement</button>     
                                            <button class="uk-button uk-button-default" type="button">Digitalisation</button>     
                                        </div>
                                        <ul class="uk-switcher uk-margin">
                                            <li>
                                                <h4>Motivations</h4>
                                                <p>Fonder la politique jurassienne sur une durabilité éthique, au bénéfice
                                                de l'être humain et de l'environnement</p>

                                                <h4>Priorités politiques</h4>
                                                <p>Accélérer la transition énergétique et remettre le respect de  l'être
                                                humain au centre du débat.</p>

                                                <h4>Vos loisirs</h4>
                                                <p>Trekking, plongée, chant choral.</p>

                                                <h4>Vos réseaux sociaux</h4>
                                                <ul>
                                                    <li class="icon_resaux"><a href="www.instagram.com/pev_ju" target="_blank" uk-icon="icon: instagram; ratio: 2"></a></li>
                                                    <li class="icon_resaux"><a href="www.facebook.com/pevjura" target="_blank" uk-icon="icon: facebook; ratio: 2"></a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Congé paternité</th>
                                                            <th class="uk-text-center">Loi sur la chasse</th>
                                                            <th class="uk-text-center">Initiative de limitation</th>
                                                            <th class="uk-text-center">Loi sur l'impôt direct</th>
                                                            <th class="uk-text-center">Avions de combat</th>
                                                            <th class="uk-text-center">Delémont : développement du secteur des Arquebusiers</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: IndianRed;">Plutôt non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: IndianRed;">Plutôt non</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>  
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>                                                      
                                                        </tr>
                                                    </tbody>
                                                </table>    
                                            </li>

                                            <li>
                                                <table class="uk-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="uk-text-center">Initiative "Entreprises responsables"</th>
                                                            <th class="uk-text-center">Initiative "Interdiction du financement des producteurs de matériel de guerre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>                                                    
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>

                                            <li>          
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: IndianRed;">Plutôt non</span>                                            
                                                        <div class="uk-card uk-card-body">Age de la retraite relevé et identique pour les femmes et les hommes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: IndianRed;">Plutôt injustifiée</span>                                            
                                                        <div class="uk-card uk-card-body">Hausse des coûts des primes d'assurance maladie dans le Jura ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction d'une caisse-maladie unique dans le Jura ?</div>
                                                    </div>
                                                </div>                                             
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: MediumAquaMarine;">Plutôt oui</span>                                            
                                                        <div class="uk-card uk-card-body">Fusions et regroupements de communes ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: IndianRed;">Plutôt non</span>                                            
                                                        <div class="uk-card uk-card-body">Droit de vote à 16 ans ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: IndianRed;">Plutôt non</span>                                                       
                                                        <div class="uk-card uk-card-body">Consommation légalisée de cannabis ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Mêmes droits pour les couples de même sexe que
                                                        les couples hétérosexuels ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">NON</span>                                            
                                                        <div class="uk-card uk-card-body">Euthanasie active par des médecins en Suisse ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Financement transparent des partis et
                                                        des campagnes pour les élections et votations ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Abolition du changement d'heure d'été / heure d'hiver ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Maintien</span>                                            
                                                        <div class="uk-card uk-card-body">Evolution des impôts dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Imposition individuelle ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Rentes AVS/AI exonérées d'impôt ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: red;">NON</span>                                            
                                                        <div class="uk-card uk-card-body">Libéralisation complète des heures d'ouverture des magasins ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: IndianRed;">Plutôt contre</span>                                            
                                                        <div class="uk-card uk-card-body">Attribution du réseau de lignes de bus à CarPostal ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: IndianRed;">Plutôt contre</span>                                            
                                                        <div class="uk-card uk-card-body">Micro-impôt sur le trafic des paiements sans espèces ?</div>
                                                    </div>
                                                </div>  
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: MediumAquaMarine;">Plutôt oui</span>                                            
                                                        <div class="uk-card uk-card-body">Géothermie profonde à Haute-Sorne ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Développement de l'éolien dans le Jura ?</div>
                                                    </div> 
                                                </div> 
                                            </li>

                                            <li>
                                                <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match" uk-grid>                                      
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: IndianRed;">Plutôt non</span>                                            
                                                        <div class="uk-card uk-card-body">Introduction de la 5G dans le Jura ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: MediumAquaMarine;">Plutôt oui</span>                                            
                                                        <div class="uk-card uk-card-body">Vote électronique en Suisse ?</div>
                                                    </div> 
                                                </div> 
                                            </li>
                                        </ul>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV-Jura</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Frédéric Nicolet">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Frédéric Nicolet</h3>
                                <p class="uk-text-center text-fonction">1975 - Rossemaison - Ingénieur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV-Jura</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Thomas Dennert">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Thomas Dennert</h3>
                                <p class="uk-text-center text-fonction">1959 - Vermes - Agriculteur-vigneron</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV-Jura</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Sébastien Wüthrich">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Sébastien Wüthrich</h3>
                                <p class="uk-text-center text-fonction">1983 - Courtételle - Physicien</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV-Jura</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Manon Otge">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Manon Otge</h3>
                                <p class="uk-text-center text-fonction">1993 - Châtillon - Horlogère</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-5@l uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
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
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Philippe Rottet">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Philippe Rottet</h3>
                                <p class="uk-text-center text-fonction">1946 - Delémont - Maître professionnel retraité</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Lionel Montavon">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Lionel Montavon</h3>
                                <p class="uk-text-center text-fonction">1975 - Courcelon - Gendarme</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Alain Koller">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Alain Koller</h3>
                                <p class="uk-text-center text-fonction">1977 - Bourrignon - Agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Walter Rufer">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Walter Rufer</h3>
                                <p class="uk-text-center text-fonction">1955 - Rossemaison - Agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Sandra Juillerat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Sandra Juillerat</h3>
                                <p class="uk-text-center text-fonction">1971 - Courfaivre - Mère au foyer</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Laurence Studer">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Laurence Studer</h3>
                                <p class="uk-text-center text-fonction">1960 - Delémont - Agricultrice</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Isabelle Cerf-Büschlen">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Isabelle Cerf-Büschlen</h3>
                                <p class="uk-text-center text-fonction">1981 - Courrendlin - Employée de commerce</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Sylvie Turinetti">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Sylvie Turinetti</h3>
                                <p class="uk-text-center text-fonction">1980 - Courfaivre - Employée de commerce</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Fatima Boucetta">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Fatima Boucetta</h3>
                                <p class="uk-text-center text-fonction">1960 - Courrendlin - Collaboratrice administrative</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Francine Stettler">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Francine Stettler</h3>
                                <p class="uk-text-center text-fonction">2001 - Courroux - Etudiante HEP</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Gaëlle Philipona-Guenat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Gaëlle Philipona-Guenat</h3>
                                <p class="uk-text-center text-fonction">1984 - Movelier - Mère au foyer</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Charlotte Fringeli">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Charlotte Fringeli</h3>
                                <p class="uk-text-center text-fonction">1996 - Courchapoix - Fromagère</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Joëlle Eicher-Joray">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Joëlle Eicher-Joray</h3>
                                <p class="uk-text-center text-fonction">1978 - Corban - Agricultrice</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Marie Biedermann">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Marie Biedermann</h3>
                                <p class="uk-text-center text-fonction">1963 - Delémont - Concierge et caissière</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jessica Chételat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jessica Chételat</h3>
                                <p class="uk-text-center text-fonction">1980 - Courfaivre - Mère au foyer</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Christiane Wiser">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Christiane Wiser</h3>
                                <p class="uk-text-center text-fonction">1964 - Develier - Sommelière</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Noël Willemin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Noël Willemin</h3>
                                <p class="uk-text-center text-fonction">1977 - Ederswiler - Agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Marcel Vogel">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Marcel Vogel</h3>
                                <p class="uk-text-center text-fonction">1965 - Mervelier - Formateur infra</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Pierre Mertenat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Pierre Mertenat</h3>
                                <p class="uk-text-center text-fonction">1969 - Courroux - Mécanicien sur machines</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Grégory Gunziger">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Grégory Gunzinger</h3>
                                <p class="uk-text-center text-fonction">1985 - Bassecourt - Décolleteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Yoann Schaffter">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Yoann Schaffter</h3>
                                <p class="uk-text-center text-fonction">1992 - Courfaivre - Agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Michel Lando">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Michel Lando</h3>
                                <p class="uk-text-center text-fonction">1964 - Bassecourt - Représentant</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Alain Buchwalder">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Alain Buchwalder</h3>
                                <p class="uk-text-center text-fonction">1960 - Delémont - Agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Laurent Haegeli">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Laurent Haegeli</h3>
                                <p class="uk-text-center text-fonction">1978 - Bassecourt - Chaufeur CarPostal</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Joseph Zmoos">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Joseph Zmoos</h3>
                                <p class="uk-text-center text-fonction">1973 - Montsevelier - Agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Bryan Juillerat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Bryan Juillerat</h3>
                                <p class="uk-text-center text-fonction">1999 - Rebeuvelier - Etudiant HEG</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Pirmin Bachmann">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Pirmin Bachmann</h3>
                                <p class="uk-text-center text-fonction">1994 - Movelier - Agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Manfred Scheurer">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Manfred Scheurer</h3>
                                <p class="uk-text-center text-fonction">1985 - Boécourt - Agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-udc uk-border-rounded">UDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Alexandre Montavon">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Alexandre Montavon</h3>
                                <p class="uk-text-center text-fonction">1991 - Boécourt - Agriculteur</p>
                            </div>
                        </div>
                    </div>                    
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-5@l uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Magali Rohner">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Magali Rohner</h3>
                                <p class="uk-text-center text-fonction">1977 - Delémont - Enseignante</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Anselme Voirol">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Anselme Voirol</h3>
                                <p class="uk-text-center text-fonction">1947 - Delémont - Ingénieur</p>
                            </div>
                        </div>
                    </div>

                    <div>
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
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Roberto Segalla">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Roberto Segalla</h3>
                                <p class="uk-text-center text-fonction">1967 - Courroux - Enseignant informaticien</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Audrey Voutat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Audrey Voutat</h3>
                                <p class="uk-text-center text-fonction">1989 - Rossemaison - Avocate</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Théo Burri">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Théo Burri</h3>
                                <p class="uk-text-center text-fonction">1990 - Delémont - Logisticien</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Nadège Voirol-Receveur">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Nadège Voirol-Receveur</h3>
                                <p class="uk-text-center text-fonction">1981 - Bassecourt - Enseignante</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Tristan Davila">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Tristan Davila</h3>
                                <p class="uk-text-center text-fonction">1997 - Courtételle - Apprenti maraîcher</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Sonia Burri-Schassmann">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Sonia Burri-Schassmann</h3>
                                <p class="uk-text-center text-fonction">1965 - Soyhières - Droguiste-apicultrice</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Frédéric Queloz">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Frédéric Queloz</h3>
                                <p class="uk-text-center text-fonction">1978 - Boécourt - Gérant PME</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Céline Blaser">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Céline Blaser</h3>
                                <p class="uk-text-center text-fonction">1978 - Delémont - Travailleuse sociale</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Colin Linder">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Colin Linder</h3>
                                <p class="uk-text-center text-fonction">2000 - Delémont - Etudiant</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Annelise Domont">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Annelise Domont</h3>
                                <p class="uk-text-center text-fonction">1978 - Delémont - Vendeuse</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Nelson Ferreira">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Nelson Ferreira</h3>
                                <p class="uk-text-center text-fonction">1978 - Delémont - Job coach</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Ruth Gerber-Obrecht">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Ruth Gerber-Obrecht</h3>
                                <p class="uk-text-center text-fonction">1954 - Undervelier - Infirmière cueilleuse</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Raphaël Breuleux">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Raphaël Breuleux</h3>
                                <p class="uk-text-center text-fonction">1976 - Boécourt - Formateur en horlogerie</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Françoise Schiltknecht">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Françoise Schiltknecht</h3>
                                <p class="uk-text-center text-fonction">1967 - Mettembert - Musicienne</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Michel Rion">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Michel Rion</h3>
                                <p class="uk-text-center text-fonction">1979 - Delémont - Avocat</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Délphine Schuewer">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Délphine Schuewer</h3>
                                <p class="uk-text-center text-fonction">1984 - Delémont - Artiste peintre</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Nicolas Zahno">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Nicolas Zahno</h3>
                                <p class="uk-text-center text-fonction">1988 - Rossemaison - Directeur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Mélodie Richard">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Mélodie Richard</h3>
                                <p class="uk-text-center text-fonction">1990 - Delémont - Tatoueuse</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Julie Milani">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Julie Milani</h3>
                                <p class="uk-text-center text-fonction">1999 - Delémont - Etudiante en musicologie et français / ASSC</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Cécile Nivarlet">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Cécile Nivarlet</h3>
                                <p class="uk-text-center text-fonction">1968 - Movelier - Coach sportive</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Frédéric Blaser">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Frédéric Blaser</h3>
                                <p class="uk-text-center text-fonction">1975 - Delémont - Responsable RH</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Julie Robert-Charrue">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Julie Robert-Charrue</h3>
                                <p class="uk-text-center text-fonction">1978 - Rossemaison - Correctrice</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Sylvain Vitali">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Sylvain Vitali</h3>
                                <p class="uk-text-center text-fonction">1993 - Corban - Ingénieur thermicien</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Paula Baboujian">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Paula Baboujian</h3>
                                <p class="uk-text-center text-fonction">1971 - Movelier - Spécialiste prestation</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Christophe Rais">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Christophe Rais</h3>
                                <p class="uk-text-center text-fonction">1981 - Develier - Vendeur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Virginie Siffert">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Virginie Siffert</h3>
                                <p class="uk-text-center text-fonction">1976 - Delémont - Coach parentale et de vie</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Vincent Crelier">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Vincent Crelier</h3>
                                <p class="uk-text-center text-fonction">1977 - Develier - Technicien SAV</p>
                            </div>
                        </div>
                    </div>                    
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-5@l uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Géraldine Beuchat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Géraldine Beuchat</h3>
                                <p class="uk-text-center text-fonction">1969 - Glovelier - Comptable</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Geoffrey Beuchat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Geoffrey Beuchat</h3>
                                <p class="uk-text-center text-fonction">1996 - Glovelier - Etudiant</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Laurent Beuchat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Laurent Beuchat</h3>
                                <p class="uk-text-center text-fonction">1974 - Glovelier - infirmier</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Christophe Camenzind">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Christophe Camenzind</h3>
                                <p class="uk-text-center text-fonction">1991 - Develier - Gérant de commerce</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Anna Carabotti">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Anna Carabotti</h3>
                                <p class="uk-text-center text-fonction">1959 - Courrendlin - Secrétaire de direction</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Quentin Chappuis">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Quentin Chappuis</h3>
                                <p class="uk-text-center text-fonction">1987 - Courtételle - Economiste d'entreprise HEG</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Patrick Chapuis">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Patrick Chapuis</h3>
                                <p class="uk-text-center text-fonction">1961 - Delémont - Employé de banque</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Olivier Chèvre">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Olivier Chèvre</h3>
                                <p class="uk-text-center text-fonction">1973 - Bassecourt - Ingénieur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Nicolas Chevrey">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Nicolas Chevrey</h3>
                                <p class="uk-text-center text-fonction">1979 - Delémont - Directeur opérationnel</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="David Comte">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">David Comte</h3>
                                <p class="uk-text-center text-fonction">1978 - Delémont - employé de commerce</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Martine Duplain">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Martine Duplain</h3>
                                <p class="uk-text-center text-fonction">1966 - Courroux - Responsable achats et logistique</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Vincent Eggenschwiler">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Vincent Eggenschwiler</h3>
                                <p class="uk-text-center text-fonction">1954 - Rebeuvelier - Retraité</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Dominique Erard">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Dominique Erard</h3>
                                <p class="uk-text-center text-fonction">1966 - Courcelon - Agriculteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Sandrine Fleury">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Sandrine Fleury</h3>
                                <p class="uk-text-center text-fonction">1972 - Courcelon - Secrétaire de direction</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Gabriel Friche">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Gabriel Friche</h3>
                                <p class="uk-text-center text-fonction">1961 - Vicques - Ingénieur ETS</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jean Froidevaux">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jean Froidevaux</h3>
                                <p class="uk-text-center text-fonction">1964 - Delémont - Chef de service financier de la Ville</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Fabrice Gelin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Fabrice Gelin</h3>
                                <p class="uk-text-center text-fonction">1967 - Bassecourt - Employé postal</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Yannick George">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Yannick George</h3>
                                <p class="uk-text-center text-fonction">1973 - Rebeuvelier - Acheteur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Francis Grillon">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Francis Grillon</h3>
                                <p class="uk-text-center text-fonction">1958 - Bourrignon - Menuisier-ébéniste</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Johan Gunziger">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Johan Gunzinger</h3>
                                <p class="uk-text-center text-fonction">1989 - Courfaivre - Conseiller de vente</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Alexandre Kaiser">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Alexandre Kaiser</h3>
                                <p class="uk-text-center text-fonction">1971 - Delémont - Informaticien</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jean-François Lovis">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jean-François Lovis</h3>
                                <p class="uk-text-center text-fonction">1967 - Delémont - Garde-forestier</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Suzanne Maitre">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Suzanne Maitre</h3>
                                <p class="uk-text-center text-fonction">1956 - Delémont - Secrétaire médicale</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jean-Paul Miserez">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jean-Paul Miserez</h3>
                                <p class="uk-text-center text-fonction">1947 - Delémont - Retraité</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Denis Morel">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Denis Morel</h3>
                                <p class="uk-text-center text-fonction">1964 - Bassecourt - Inspecteur des chantiers des routes cantonales</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Ludovic Morel">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Ludovic Morel</h3>
                                <p class="uk-text-center text-fonction">1996 - Bassecourt - Hôtelier / Restaurateur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Arnaud Paratte">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Arnaud Paratte</h3>
                                <p class="uk-text-center text-fonction">1990 - Courroux - Gestionnaire de commerce de détail</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Pauline Rais">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Pauline Rais</h3>
                                <p class="uk-text-center text-fonction">1991 - Delémont - Avocate</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Blaise Schüll">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Blaise Schüll</h3>
                                <p class="uk-text-center text-fonction">1951 - Bassecourt - Retraité</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Zoé Scrima">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Zoé Scrima</h3>
                                <p class="uk-text-center text-fonction">1992 - Delémont - Designer en communication visuelle</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-5@l uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
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
                                <p class="uk-text-center text-fonction">1978 - Delémont - Architecte EPFL</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Sébastien Lovis">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Sébastien Lovis</h3>
                                <p class="uk-text-center text-fonction">1974 - Saulcy - Conseiller de vente</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Saskia Borne">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Saskia Borne</h3>
                                <p class="uk-text-center text-fonction">1999 - Glovelier - Assistante socio-éducative</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Anne Ceppi">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Anne Ceppi</h3>
                                <p class="uk-text-center text-fonction">1956 - Bassecourt - Docteur-vétérinaire</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Morgan Beuret">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Morgan Beuret</h3>
                                <p class="uk-text-center text-fonction">1986 - Courtételle - Chef de projet en industriallisation</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Philippe Seuret">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Philippe Seuret</h3>
                                <p class="uk-text-center text-fonction">1955 - Châtillon - Mécanicien / Conseiller communal</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Sébastien Deloy">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Sébastien Deloy</h3>
                                <p class="uk-text-center text-fonction">1973 - Courroux - Photographe</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Marc-Aurèle Chételat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Marc-Aurèle Chételat</h3>
                                <p class="uk-text-center text-fonction">1970 - Boécourt - Gestionnaire en assurances</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Fabio Bianchini">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Fabio Bianchini</h3>
                                <p class="uk-text-center text-fonction">1977 - Delémont - Conseiller en assurances</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Sandra Leuenberger">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Sandra Leuenberger</h3>
                                <p class="uk-text-center text-fonction">1973 - Delémont - Masseuse</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Raoul Jaeggi">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Raoul Jaeggi</h3>
                                <p class="uk-text-center text-fonction">1969 - Bassecourt - Informaticien</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Christelle Gogni">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Christelle Gnoni</h3>
                                <p class="uk-text-center text-fonction">1975 - Develier - Vendeuse</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Taylan Sirimsi">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Taylan Sirimsi</h3>
                                <p class="uk-text-center text-fonction">1994 - Courroux - Termineur en horlogerie</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Célien Jeandupeux">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Célien Jeandupeux</h3>
                                <p class="uk-text-center text-fonction">1982 - Develier - Responsable des ventes</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Christian Wirz">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Christian Wirz</h3>
                                <p class="uk-text-center text-fonction">1955 - Delémont - Sommelier ASSP</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Virginie Gaschen Ostertag">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Virginie Gaschen Ostertag</h3>
                                <p class="uk-text-center text-fonction">1981 - Courtételle - Assistante RH</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Jérôme Abatte">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jérôme Abatte</h3>
                                <p class="uk-text-center text-fonction">1990 - Vicques - Horloger</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Blerin Rustemi">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Blerin Rustemi</h3>
                                <p class="uk-text-center text-fonction">1990 - Delémont - Platrier peintre</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Yvette Allimann">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Yvette Allimann</h3>
                                <p class="uk-text-center text-fonction">1959 - Glovelier - Communicatrice technique</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Armend Gaschi">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Armend Gaschi</h3>
                                <p class="uk-text-center text-fonction">1987 - Delémont - Chef d'entreprise</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Oezge Aydogan">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Oezge Aydogan</h3>
                                <p class="uk-text-center text-fonction">1997 - Courroux - Vendeuse</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Ermal Rudaj">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Ermal Rudaj</h3>
                                <p class="uk-text-center text-fonction">1991 - Delémont - Indépendant</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Océane Gnoni">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Océane Gnoni</h3>
                                <p class="uk-text-center text-fonction">2001 - Develier - Apprentie</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Gregory Chevalier">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Gregory Chevalier</h3>
                                <p class="uk-text-center text-fonction">1977 - Vicques - Maître nageur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Belinda Karakusch">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Belinda Karakusch</h3>
                                <p class="uk-text-center text-fonction">1999 - Courfaivre - Terminatrice en horlogerie</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Rémy Petitcuenot">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Rémy Petitcuenot</h3>
                                <p class="uk-text-center text-fonction">1989 - Bassecourt - Charpentier</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Stève Chételat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Stève Chételat</h3>
                                <p class="uk-text-center text-fonction">1977 - Courchapoix - Secrétaire indépendant</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Catherine Monnin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Catherine Monnin</h3>
                                <p class="uk-text-center text-fonction">1976 - Boécourt - Employée de commerce</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Axel Amsler">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Axel Amsler</h3>
                                <p class="uk-text-center text-fonction">1981 - Boécourt - Gérand adjoint de Caisse Pensions</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Sylvie Joliat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Sylvie Joliat</h3>
                                <p class="uk-text-center text-fonction">1965 - Delémont - Garde-bains</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-6@l uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Avenir de Bohneur</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Julien Gunziger">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Julien Gunzinger</h3>
                                <p class="uk-text-center text-fonction">1972 - Delémont - Indépendant</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Avenir de Bohneur</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Pascal Prince">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Pascal Prince</h3>
                                <p class="uk-text-center text-fonction">1969 - Courrendlin - Agent de train</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Avenir de Bohneur</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Isabelle Widmer">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Isabelle Widmer</h3>
                                <p class="uk-text-center text-fonction">1973 - Courrendlin - Pédicure</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Avenir de Bohneur</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Nils Karlsson">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Nils Karlsson</h3>
                                <p class="uk-text-center text-fonction">1982 - Bassecourt - Ingénieur EPF-étudiant médecine</p>
                            </div>
                        </div>
                    </div>  

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Avenir de Bohneur</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Nancy Chappuis">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Nancy Chappuis</h3>
                                <p class="uk-text-center text-fonction">1976 - Delémont - Horlogère</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Avenir de Bohneur</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="David Sciascia">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">David Sciascia</h3>
                                <p class="uk-text-center text-fonction">1990 - Delémont</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
            
    </section>
</main>
</body>


<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>