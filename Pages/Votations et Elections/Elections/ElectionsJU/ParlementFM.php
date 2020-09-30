<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Election au Parlement jurassien</title>
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
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
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
            <button class="uk-button uk-button-default" type="button">Liste 5 (UDC)</button>
            <button class="uk-button uk-button-default" type="button">Liste 6 (Verts)</button>
            <button class="uk-button uk-button-default" type="button">Liste 7 (PCSI)</button>
            <button class="uk-button uk-button-default" type="button">Liste 8 (PVL)</button>
        </div>  
        <ul class="uk-switcher uk-margin">
            <li>   
                <h1>Les élections cantonales en bref</h1>
                <p>67 candidats-es sont en lice pour l'Election au Parlement Jurassien (District des Franches-Montagnes). Ces 67 personnalités proviennent de
                8 formations politiques pour décrocher les 10 sièges au sein du législatif.
                </p>
                <p>Les élus-es seront connus-es à la fin du scrutin, le 18 octobre prochain.
                </p>
            </li>  

            <li>
                <div class="uk-child-width-1-5@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Muriel Maillard">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Muriel Maillard</h3>
                                <p class="uk-text-center text-fonction">1982 - Montfaucon - Accueillante en milieu familial</p>
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
                                            alt="Anael Lovis">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Anael Lovis</h3>
                                <p class="uk-text-center text-fonction">2001 - Les Genevez - Etudiant en droit</p>
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
                                            alt="Dominique Boillat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Dominique Boillat</h3>
                                <p class="uk-text-center text-fonction">1952 - Les Bois - Retraitée</p>
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
                                            alt="Michaël Barraud">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Michaël Barraud</h3>
                                <p class="uk-text-center text-fonction">1978 - Les Genevez - Technicien en mécanique</p>
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
                                            alt="Irène Donzé">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Irène Donzé</h3>
                                <p class="uk-text-center text-fonction">1975 - Les Breuleux - Economiste / Indépendante</p>
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
                                            alt="Edgar Sauser">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Edgar Sauser</h3>
                                <p class="uk-text-center text-fonction">1958 - Les Breuleux - Agriculteur</p>
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
                                            alt="Florence Erard">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Florence Erard</h3>
                                <p class="uk-text-center text-fonction">1966 - Le Noirmont - Employée de commerce</p>
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
                                            alt="Christophe Noirjean">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Christophe Noirjean</h3>
                                <p class="uk-text-center text-fonction">1994 - Soubey - Chef de projet en télécommunication</p>
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
                                            alt="Damien Paratte">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Damien Paratte</h3>
                                <p class="uk-text-center text-fonction">1968 - Le Noirmont - Responsable production</p>
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
                                            alt="Cyril Cattin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Cyril Cattin</h3>
                                <p class="uk-text-center text-fonction">1994 - Saignelégier - Etudiant en droit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-5@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PSJ-JSJ</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Florence Chaignat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Florence Chaignat</h3>
                                <p class="uk-text-center text-fonction">1973 - Saignelégier - Secrétaire-comptable</p>
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
                                            alt="Jean-Daniel Ecoeur">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jean-Daniel Ecoeur</h3>
                                <p class="uk-text-center text-fonction">1955 - Les Genevez - Retraité</p>
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
                                            alt="Martial Farine">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Martial Farine</h3>
                                <p class="uk-text-center text-fonction">1966 - Les Bois - Laborantin en biologie</p>
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
                                            alt="Dominique Froidevaux">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Dominique Froidevaux</h3>
                                <p class="uk-text-center text-fonction">1958 - Saignelégier - Enseignante</p>
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
                                            alt="Gerster Sarah">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Gerster Sarah</h3>
                                <p class="uk-text-center text-fonction">1982 - Les Enfers - Statisticienne</p>
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
                                            alt="Nicolas Girard">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Nicolas Girard</h3>
                                <p class="uk-text-center text-fonction">1967 - Le Noirmont - Employé CJ</p>
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
                                            alt="Thomas Lachat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Thomas Lachat</h3>
                                <p class="uk-text-center text-fonction">1956 - Les Breuleux - Directeur d'école retraité</p>
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
                                            alt="Diego Moni Bidin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Diego Moni Bidin</h3>
                                <p class="uk-text-center text-fonction">1967 - Saignelégier - Ingénieur</p>
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
                                            alt="brigitte Müller">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Brigitte Müller</h3>
                                <p class="uk-text-center text-fonction">1952 - Saignelégier - Secrétaire</p>
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
                                            alt="Evelyne Prêtre">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Evelyne Prêtre</h3>
                                <p class="uk-text-center text-fonction">1967 - Les Breuleux - Employée de commerce</p>
                            </div>
                        </div>
                    </div>    
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-5@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pdc uk-border-rounded">PDC-JDC</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Andrea Babey">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Andrea Babey</h3>
                                <p class="uk-text-center text-fonction">1974 - Saignelégier - Graphiste indépendante</p>
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
                                            alt="Amélie Brahier">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Amélie Brahier</h3>
                                <p class="uk-text-center text-fonction">1987 - Les Enfers - Notaire</p>
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
                                            alt="Sophie Lüthi-Aubry">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Sophie Lüthi-Aubry</h3>
                                <p class="uk-text-center text-fonction">1975, Saignelégier; Employée de commerce</p>
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
                                            alt="Léonie pelletier Esposito">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Léonie Pelletier Esposito</h3>
                                <p class="uk-text-center text-fonction">1974 - Les Breuleux - Employée de commerce</p>
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
                                            alt="Jacques-André Aubry">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Jacques-André Aubry</h3>
                                <p class="uk-text-center text-fonction">1974 - Les Breuleux - Directeur horlogerie</p>
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
                                            alt="Moïse Berberat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Moïse Berberat</h3>
                                <p class="uk-text-center text-fonction">1976 - Saignelégier - Conseiller en vente</p>
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
                                            alt="Pascal Braîchet">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Pascal Braîchet</h3>
                                <p class="uk-text-center text-fonction">1981 - Les Pommerats - Economiste</p>
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
                                            alt="Gabriel Martinoli">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Gabriel Martinoli</h3>
                                <p class="uk-text-center text-fonction">1951 - Le Noirmont - Retraité</p>
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
                                            alt="Laurent Muller">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Laurent Muller</h3>
                                <p class="uk-text-center text-fonction">1969 - Les Breuleux - Employé CJ</p>
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
                                            alt="Bernard Varin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Bernard Varin</h3>
                                <p class="uk-text-center text-fonction">1952 - Saignelégier - Inséminateur retraité</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-5@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
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
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-cspop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Monique Walker">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Monique Walker</h3>
                                <p class="uk-text-center text-fonction">1956 - Saignelégier - Retraitée</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-cspop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Aurélien Mouche">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Aurélien Mouche</h3>
                                <p class="uk-text-center text-fonction">1988 - Les Genevez - Conducteur de train aux CJ
                                </p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-cspop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Julien Negri">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Julien Negri</h3>
                                <p class="uk-text-center text-fonction">1985 - Les Breuleux - Formateur</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-cspop uk-border-rounded">CS-POP</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Iria Boillat-Pires">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Iria Boillat-Pires</h3>
                                <p class="uk-text-center text-fonction">1965 - Les Breuleux - Aide-Soignante</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-5@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
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
                                <p class="uk-text-center text-fonction">1984 - Saignelégier - Ingénieure agronome</p>
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
                                            alt="Irmin Rais">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Irmin Rais</h3>
                                <p class="uk-text-center text-fonction">1979 - Les Enfers - Agriculteur</p>
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
                                            alt="Cattin Gaëtan">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Cattin Gaëtan</h3>
                                <p class="uk-text-center text-fonction">1988 - Les Bois - Mécanicien machine agricole</p>
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
                                            alt="Loïc Guerne">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Loïc Guerne</h3>
                                <p class="uk-text-center text-fonction">1996 - Les Pommerats - Quincallier</p>
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
                                            alt="Raphaël Schärz">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Raphaël Schärz</h3>
                                <p class="uk-text-center text-fonction">1990 - Les Bois - Agriculteur</p>
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
                                            alt="Emilie Messerli">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Emilie Messerli</h3>
                                <p class="uk-text-center text-fonction">1994, Le Noirmont; Ouvrière agricole</p>
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
                                            alt="Damien Zehnder">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Damien Zehnder</h3>
                                <p class="uk-text-center text-fonction">1991 - Goumois - Agriculteur</p>
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
                                            alt="Christian Tanner">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Christian Tanner</h3>
                                <p class="uk-text-center text-fonction">1947 - Montfaucon - Mécanicien retraité</p>
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
                                            alt="Tiffany Brossard">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Tiffany Brossard</h3>
                                <p class="uk-text-center text-fonction">1990 - Muriaux - Ouvrière horlogère</p>
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
                                            alt="Elodie Jobin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Elodie Jobin</h3>
                                <p class="uk-text-center text-fonction">2000 - Les Bois - Agricultrice</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-5@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Yvan Godat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Yvan Godat</h3>
                                <p class="uk-text-center text-fonction">1986 - Le Bémont - Maraîcher et enseignant</p>
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
                                            alt="Pauline Godat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Pauline Godat</h3>
                                <p class="uk-text-center text-fonction">1989 - Le Bémont - Psychologue, maraîchère</p>
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
                                            alt="Vincent Archibald Schmitt">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Vincent Archibald Schmitt</h3>
                                <p class="uk-text-center text-fonction">1983 - Les Enfers - Agronome</p>
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
                                            alt="Délia Scheidegger">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Délia Scheidegger</h3>
                                <p class="uk-text-center text-fonction">1997 - Saignelégier - Sage-femme</p>
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
                                            alt="Hanno Schmid">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Hanno Schmid</h3>
                                <p class="uk-text-center text-fonction">1972 - Les Enfers - Agriculteur</p>
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
                                            alt="Marion Brahier Näder">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Marion Brahier Näder</h3>
                                <p class="uk-text-center text-fonction">1965 - Les Enfers - Agricultrice</p>
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
                                            alt="Gaëtan Marchand">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Gaëtan Marchand</h3>
                                <p class="uk-text-center text-fonction">2000 - Montfaucon - Etudiant</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <!--<a class="uk-button uk-button-default" href="#modal-full" uk-toggle>-->
                            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                        <div class="uk-width-auto uk-first-column">
                                            <img class="uk-border-circle photo-personne"
                                                src="<?php echo $DonzeColin ?>"
                                                alt="Colin Donzé">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title-center text-rouge-fonce">Colin Donzé</h3>
                                    <p class="uk-text-center text-fonction">1986 - Les Bois - Arboriculteur forestier</p>
                                </div>
                            </div>
                        <!--</a>
                        <div id="modal-full" class="uk-modal-full uk-text-justify" uk-modal>
                            <div class="uk-modal-dialog">
                                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                    <div class="uk-background-cover" style="background-image: url(<?php echo $DonzeColinGrand ?>);" uk-height-viewport></div>
                                    <div class="uk-padding-large">
                                    <h2>Colin Donzé, 1986, Les Bois, Ingénieur forestier indépendant et arboriculteur</h2>
                                    <p>Sans indication, 1 enfant, Haute-Ecole spécialisée en économie forestière en passant par l'apprentissage de forestier-bûcheron</p>
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
                                                <p>A mettre en avant les idées du partis qu'est l'urgence climatique qui
                                                regroupe l'économie, le social et la nature. </p>

                                                <h4>Priorités politiques</h4>
                                                <p>Trouver des alternatives énergétiques, développer plus le bois énergie, protection
                                                de la nature, l'égalité sociale, économie local à circuit court</p>

                                                <h4>Vos loisirs</h4>
                                                <p>Randonnée, jardin, film , musique</p>

                                                <h4>Vos réseaux sociaux</h4>
                                                <p>Je ne suis enregistré sur aucun réseau.</p>
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
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">Neutre</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                                                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>                                                  
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
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Consommation légalisée de cannabis ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
                                                        <div class="uk-card uk-card-body">Mêmes droits pour les couples de même sexe que
                                                        les couples hétérosexuels ?</div>
                                                    </div>
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: green;">OUI</span>                                            
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
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
                                                        <div class="uk-card uk-card-body">Imposition individuelle ?</div>
                                                    </div>  
                                                    <div class="uk-card uk-card-body">       
                                                        <span class="uk-badge" style="background-color: MediumAquaMarine;">Plutôt oui</span>                                            
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
                                                        <span class="uk-badge" style="background-color: grey;">Neutre</span>                                            
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
                                                        <span class="uk-badge" style="background-color: MediumAquaMarine;">Plutôt oui</span>                                            
                                                        <div class="uk-card uk-card-body">Développement de l'éolien dans le Jura ?</div>
                                                    </div> 
                                                </div> 
                                                <p>Il y aussi d'autres énergies à développer comme par exemple le bois énergie.</p>
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
                        </div>-->
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Mathieu Chevalley">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Mathieu Chevalley</h3>
                                <p class="uk-text-center text-fonction">1986 - Les Pommerats - Boulanger</p>
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
                                            alt="Lucien Ourny">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Lucien Ourny</h3>
                                <p class="uk-text-center text-fonction">1995 - Saignelégier - Etudiant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-5@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pcsi uk-border-rounded">PCSI</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Aurore Boillat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Aurore Boillat</h3>
                                <p class="uk-text-center text-fonction">1989 - Saignelégier - Etudiante en théologie</p>
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
                                            alt="Pierre-Yves Boillat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Pierre-Yves Boillat</h3>
                                <p class="uk-text-center text-fonction">1973 - Les Breuleux - Ingénieur ETS</p>
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
                                            alt="Eloïse Gay">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Eloïse Gay</h3>
                                <p class="uk-text-center text-fonction">1998 - Le Noirmont - Assistante socio-éducative</p>
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
                                            alt="Sophie Guenot">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Sophie Guenot</h3>
                                <p class="uk-text-center text-fonction">1970 - Les Emibois - Agricultrice</p>
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
                                            alt="Vincent Hennin">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Vincent Hennin</h3>
                                <p class="uk-text-center text-fonction">1964 - Montfaucon - Employé CJ</p>
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
                                            alt="Monika Kornmayer">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Monika Kornmayer</h3>
                                <p class="uk-text-center text-fonction">1960 - Saignelégier - Employée Jura Tourisme</p>
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
                                            alt="José Oppliger">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">José Oppliger</h3>
                                <p class="uk-text-center text-fonction">1977 - Le Noirmont - Maître menuisier</p>
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
                                            alt="Carole Pelletier">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Carole Pelletier</h3>
                                <p class="uk-text-center text-fonction">1971 - Les Genevez - Infirmière</p>
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
                                            alt="Antoine Thiébaud">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Antoine Thiébaud</h3>
                                <p class="uk-text-center text-fonction">1998 - Les Genevez - Aspirant mécanicien de locomotives</p>
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
                                            alt="Vincent Wermeille">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Vincent Wermeille</h3>
                                <p class="uk-text-center text-fonction">1959 - Saignelégier - Agriculteur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-2@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                            <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                            <div class="uk-card-header">
                                <div class="uk-grid-small uk-flex-column uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-auto uk-first-column">
                                        <img class="uk-border-circle photo-personne"
                                            src="<?php echo $inconnu ?>"
                                            alt="Sylvain Dubail">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Sylvain Dubail</h3>
                                <p class="uk-text-center text-fonction">1979 - Saignelégier - Architecte</p>
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
                                            alt="Laurent Gogniat">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title-center text-rouge-fonce">Laurent Gogniat</h3>
                                <p class="uk-text-center text-fonction">1989 - Les Breuleux - Ingénieur HES</p>
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
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>