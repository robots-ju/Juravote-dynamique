<!DOCTYPE html>
<html lang="fr">
<head>

    <?php include '../../variables.php'; ?>

    <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
    <title>JuraVote | Actualités</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
    <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
    <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
    <link rel="stylesheet" href="./index.css"/>
    
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
    <section style="padding-left: 10%; padding-right: 10%; padding-top: 2%;">
        <div class="uk-grid" uk-grid>
            <section class="page  uk-width-expand@m uk-width-auto@s" style="padding-left: 2%; padding-bottom: 2%;">
                <h1 class="uk-heading-large">Actualités politiques</h1>
                <hr>
                <div class="switcher-buttons uk-text-center" uk-switcher="animation: uk-animation-fade; toggle: > *">
                    <button class="uk-button uk-button-default" type="button">Page 1</button>
                    <button class="uk-button uk-button-default" type="button">Page 2</button>
                    <button class="uk-button uk-button-default" type="button">Page 3</button>
                    <button class="uk-button uk-button-default" type="button">Page 4</button>
                    <button class="uk-button uk-button-default" type="button">Page 5</button>
                    <button class="uk-button uk-button-default" type="button">Page 6</button>
                    <!--<button class="uk-button uk-button-default" type="button">Page 7</button>
                    <button class="uk-button uk-button-default" type="button">Page 8</button>
                    <button class="uk-button uk-button-default" type="button">Page 9</button>
                    <button class="uk-button uk-button-default" type="button">Page 10</button>
                    <button class="uk-button uk-button-default" type="button">Page 11</button>
                    <button class="uk-button uk-button-default" type="button">Page 12</button>-->
                </div>  
                <ul class="uk-switcher uk-margin">
                    <li>
                        <div class="uk-grid-small uk-grid-match uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Michel Maitre complète le Conseil communal de Boncourt</h3>
                                               <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>A la suite de la démission de Thierry Bregnard, Michel Maitre a accepté de rejoindre l'exécutif communal.
                                        </p>
                                        <p>Le coordonnier de 58 ans et membres du PDC rejoindra le Conseil le 02 septembre prochain.
                                        </p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Les Verts feront liste à part pour les élections cantonales</h3>
                                               <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>Il n'y aura pas de liste commune entre les Verts et le CS-POP pour les élections cantonales de cet automne.
                                        </p>
                                        <p>Les écologistes ont toutefois exprimé leur volonté de travailler avec le CS-POP sur les thématiques qui leur sont communes.
                                        </p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Les Verts Libéraux présentent 2 candidats au Gouvernement</h3>
                                               <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>Les Verts Libéraux Jura, nouveau parti politique dans le Canton, présente 2 candidats pour l'Election au
                                            Gouvernement jurassien. Emilie Moreau et Alain Beuret se lancent dans la course.
                                        </p>
                                        <p>Emilie Moreau, 40 ans, de Porrenruy, juriste, se reconnait dans les valeurs pronées par le PVL. Elle précise que s'engager en politique, "c'est faire don de soi."
                                        </p>
                                        <p>Alain Beuret, 41 ans, de Delémont, urbaniste, "souhaite offrir au Canton l'occasion de redevenir un pionnier." Selon lui, la crise du Covid-19
                                            est une chance pur davantage miser sur le télétravail qui est un atout pour le Jura et permet de concilier vie familiale et vie professionnelle.
                                        </p>
                                        <p>A noter que le PVL partira à la rencontre des électrices et électeurs du 08 au 16 août en effectuant le tour du Jura à vélo.</p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Assemblée communale Montfaucon</h3>
                                               <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>Une assemblée communale est convoquée le lundi 15 juin 2020 à 20 h 00 au complexe scolaire.
                                            Les ayants-droits se prononceront notamment  sur :
                                            <ul>
                                                <li>les comptes 2019 ;</li>
                                                <li>l'autorisation au comité du syndicat des communes des Franches-Montagnes pour acquérir un immeuble au Noirmont ;</li>
                                                <li>la votation d'un crédit pour la revitalistion de l'allée d'arbres de la route du Prépetitjean ;</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-grid-small uk-grid-match uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">L'UDC Jura se lance dans la course au Gouvernement</h3>
                                               <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>L'actuel député UDC au Parlement jurassien, Didier Spies, a annoncé sa candidature pour le Gouvernement
                                            jurassien en vue des élections cantonales d'octobre.
                                        </p>
                                        <p>L'UDC Jura prendra sa décision finale lors de l'assemblée générale du parti qui a lieu le 26 juin prochain.
                                            Le parti pourrait faire une liste à trois candidats pour le Gouvernement, avec Romain Schaer pour représenter
                                            l'Ajoie et Brigitte Favre en qualité de représentante des Franches-Montagnes, et Didier Spies pour le district de Delémont.
                                        </p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Vote de Moutier - nouvelle date ?</h3>
                                               <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>Le Conseil exécutif bernois souhaite que le vote ait lieu en février 2021, ce qui est jugé nécessaire et réaliste,
                                            même selon les circonstances actuelles.
                                        </p>
                                        <p>A l'inverse, les Autorités de Moutier ont évoqué la date de mai 2021 en raison du Covid-19, qui pourrait rendre la campagne
                                            interrompue ou stoppée. La décision finale sera prise par la Tripartite qui devra trouver la meilleure solution.
                                        </p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Motion de Claude Hêche acceptée par le Conseil national</h3>
                                               <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>L'ancien conseiller aux Etats socialiste avait déposée une motion, qui a été acceptée dernièrement,
                                            qui vise à définir des instruments et des moyens financiers pour s'investir contre les effets du
                                            changement climatique dans les Cantons, par exemple, le Jura et Neuchâtel.
                                        </p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Adaptation de la loi jurassienne sur les jeux d'argents</h3>
                                               <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>Le Gouvernement jurassien a transmis un projet de loi au Parlement qui interdit aux sociétés à but lucratif
                                            d'organiser des lotos pour les associations et sociétés qui poursuivent des buts d'utilité publique. Par contre,
                                            aucun changement n'est prévu au niveau des casinos.
                                        </p>
                                        <p>Egalement, le texte de loi prévoit d'instaurer une surveillance sur les tombolas dont la somme des mises est
                                            supérieure à 10'000 francs. Si le Parlement accepte ce texte, l'entrée en vigueur est fixée au 1er janvier 2021.
                                        </p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="uk-grid-small uk-grid-match uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Asemblée communale Develier</h3>
                                               <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>Une Assemblée communale est convoquée à Develier le lundi
                                            15 juin 2020 à 19 h 30. Elle aura lieu à la halle de
                                            gymnastique de l'Ecole pour respecter les mesures sanitaires.
                                            Les ayants-droits se prononceront notamment sur les comptes et sur le projet
                                            PRO-VITA soumis à <a href="../03Votations/communales/Develier.html">votation le 05 juillet 2020.</a></p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Démission au Parlement Jurassien</h3>
                                                <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>Le député Frédéric Lovis (PCSI) a annoncé sa démission
                                            du Parlement jurassien au 30 juin 2020 après 13 années passées
                                            au sein de l'institution et avoir été président du Parlement en 2017.</p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Révision de la loi sur les parcs éoliens</h3>
                                                <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>Le Gouvernement jurassien a adressé un message au Parlement concernant la modification de
                                            la loi sur les constructions et l'aménagement du territoire pour la planification des
                                            parcs éoliens dans le Jura.
                                        </p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Loi sur l'exécution des peines et mesures</h3>
                                                <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>La modification de la loi est soumise au référendum facultatif, qui peut être requis
                                            par 2'000 citoyens ou 5 communes dans les 60 jours qui suivent la décision, soit
                                            jusqu'au 03 août 2020.
                                        </p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </li>   

                    <li>
                        <div class="uk-grid-small uk-grid-match uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>  
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Initiative de l'Etat "Pour des réserves équitables et adéquates"</h3>
                                                <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>Le Parlement jurassien a déposé l'initiative de l'Etat soumise au référendum facultatif,
                                            qui peut être requis par 2'000 citoyens ou 5 communes dans les 60 jours qui suivent la
                                            décision, soit jusqu'au 03 août 2020.
                                        </p>
                                        <p>Le Parlement jurassien invite l'Assemblée fédérale à compléter l'article 14 LSAMAl par l'ajout
                                            d'un alinéa 3 prévoyant le remboursement des réserves excessives de l'assurance-maladie.
                                        </p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Initiative de l'Etat "Pour des primes correspondant aux coûts"</h3>
                                               <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>Le Parlement jurassien a déposé l'initiative de l'Etat soumise au référendum facultatif,
                                            qui peut être requis par 2'000 citoyens ou 5 communes dans les 60 jours qui suivent la
                                            décision, soit jusqu'au 03 août 2020.
                                        </p>
                                        <p>Le Parlement jurassien invite l'Assemblée fédérale à modifier l'article 17, alinéa 1 LSAMal afin de rendre la correction
                                            a posteriori des primes encaissées en trop systématique.
                                        </p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div> 
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">"Pour que les bénéfices des investissements directs de
                                                    la BNS retournent à la population suisse"</h3>
                                               <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>Le Parlement jurassien a déposé l'initiative de l'Etat soumise au référendum facultatif,
                                            qui peut être requis par 2'000 citoyens ou 5 communes dans les 60 jours qui suivent la
                                            décision, soit jusqu'au 03 août 2020.
                                        </p>
                                        <p>Le Parlement jurassien fait usage du droit d'initiative du Canton en matière fédérale et soumet aux
                                            Chambres fédérales l'initiative cantonale suivante :
                                        </p>
                                        <p>Le Parlement fédéral créé une base légale afin de rendre possible la création d'un fonds mettant en oeuvre
                                            la politique énergétique 2050 par le peuple suisse. Ce fonds est indépendant du versement actuel de la BNS
                                            dévolu à la Confédération et aux Cantons.
                                        </p>
                                        <p>Il est financé par tout ou partie du rendement des dividendes des obligations et autres produits
                                            d'intérêts de même que tout ou partie de l'éventuel produit des taux d'intérêts négatifs de la BNS.
                                        </p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div> 
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">"Création d'un fonds fédéral d'aide lié au Covid-19"</h3>
                                               <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>Le Parlement jurassien a déposé l'initiative de l'Etat soumise au référendum facultatif,
                                            qui peut être requis par 2'000 citoyens ou 5 communes dans les 60 jours qui suivent la
                                            décision, soit jusqu'au 03 août 2020.
                                        </p>
                                        <p>Le Parlement jurassien est invité à faire usage du droit d'initiative du Canton en matière fédérale et demande aux
                                            Chambres fédérales :
                                        </p>
                                        <ul>
                                            <li>de créer un fonds d'aide financière destiné aux société sportives, culturelles et de loisirs
                                            particulièrement impactées par les mesures sanitaires prises pour lutter contre la propagation du coronavirus ;
                                            </li>
                                            <li>de charger le Conseil fédéral d'établir des règles et des critères objectifs d'octroi d'une aide financière
                                                au moyen de ce fonds, en concertation avec les fédérations et sociétés sportives, culturelles et de loisirs.
                                            </li>
                                        </ul>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>  
                        </div>
                    </li>

                    <li>
                        <div class="uk-grid-small uk-grid-match uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Assemblée communale Clos-du-Doubs</h3>
                                               <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>Une assemblée communale est convoquée le jeudi 25 juin 2020 à 20 h 00 à la halle de sports de St-Ursanne.
                                            Les ayants-droits se prononceront notamment  sur :
                                            <ul>
                                                <li>les comptes 2019 ;</li>
                                                <li>le développement de la crèche communale "Les Doudoubs" ;</li>
                                                <li>la réfection des infrastructures communales à Ocourt ;</li>
                                                <li>la réalisation d'un plan de gestion des eaux de surface ;</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Assemblée communale Cornol</h3>
                                               <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>Une assemblée communale est convoquée le jeudi 25 juin 2020 à 20 h 15 à la halle de gymnastique.
                                            Les ayants-droits se prononceront notamment  sur :
                                            <ul>
                                                <li>l'assainissement et le réaménagement du secteur "Saint-Gilles" et "Véyé Môtie" ;</li>
                                                <li>la prise de connaissance du dossier "Plan de culture forestière" du secteur du "parcours Vita" ;</li>
                                                <li>l'information sur les travaux de commission spéciale pour la révision du plan d'aménagement ;</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Assemblée communale Courchapoix</h3>
                                               <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>Une assemblée communale est convoquée le lundi 29 juin 2020 à 20 h 00 dans la salle communale.
                                            Les ayants-droits se prononceront notamment  sur :
                                            <ul>
                                                <li>les comptes 2019 ;</li>
                                                <li>les modifications des statuts du Cercle scolaire du Haut Val Terbi ;</li>
                                                <li>les modifications du règlement d'organisation du SEVT ;</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Arrêté du Conseil de ville de Delémont</h3>
                                               <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>Dans le cadre du crédit pour le renouvellement des systèmes d'exploitation, la sécurisation des données
                                            et l'adaptation des infrastructures réseau, la dépense de 100'00.- pour le point 2.3 "Infrastructures
                                            réseau et points d'accès Wifi" est acceptée.
                                        </p>
                                        <p>
                                            Cette décision est soumise au référendum facultatif, qui est valide si un vingtième des électeurs
                                            de la Commune municipale le demande. La demande doit être remise au Conseil communal dans les 30
                                            jours qui suivent la publication dans le Journal officiel du Jura.
                                        </p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-grid-small uk-grid-match uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Convocation du Corps électoral Develier</h3>
                                               <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>Les ayants-droits de vote en matière communale sont convoqués aux urnes le dimanche 05
                                            juillet 2020 pour se prononcer sur la question suivante :
                                            <ul>
                                                <li>Acceptez-vous l’ouverture d’un crédit de Fr. 5 700 000.00,
                                                    à couvrir par voie d’emprunt, pour la réalisation du
                                                    projet de protection contre les crues et la revitalisation
                                                    des cours d’eau, sous réserve des subventions
                                                    fédérales et cantonales et donner la compétence au
                                                    Conseil communal de contracter l’emprunt et de le
                                                    consolider ?
                                                </li>
                                            </ul>
                                            Les opérations de vote auront lieu au bureau de vote,
                                            bâtiment administratif, Rue de l’Eglise 8, aux heures suivantes
                                            : dimanche 05 juillet 2020, de 10 h 00 à 12 h 00.
                                        </p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Gemeindeversammlung
                                                    der gemischten Gemeinde Ederswiler</h3>
                                               <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>Am Montag, dem 29. Juni 2020, wird um 20.00 Uhr im Gemeindesaal eine Gemeindeversammlung einberufen.
                                            Die Begünstigten entscheiden insbesondere über :
                                            <ul>
                                                <li>Beratung und Beschlussfassung der Rechnung 2019 ;</li>
                                                <li>Beratung und Beschlussfassung des Reglements über
                                                    die Verpachtung von Gemeindeflächen ;
                                                </li>
                                            </ul>
                                        </p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Séance du Conseil général de Haute-Sorne</h3>
                                               <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>La prochaine séance du Conseil général de Haute-Sorne a lieu
                                            le lundi 15 juin 2020 à 18 h 30, à la halle polyvalente de Glovelier.
                                            Les Conseillers généraux se prononceront notamment  sur :
                                            <ul>
                                                <li>les comptes 2019 ;</li>
                                                <li>l'acceptation d'un crédit pour les mesures urgentes d'assainissement de l'ancienne décharge de Rosireux à Bassecourt ;</li>
                                                <li>le traitement de la motion du groupe UDC "Adjudication des coupes de bois" ;</li>
                                                <li>le traitement de la motion du groupre PS-Verts "Vers une réduction des places de stationnement publiques.</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <!--<img class="uk-border-circle" width="40" height="40" src="#">-->
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Assemblée communale Mervelier</h3>
                                               <!--<p class="uk-text-meta uk-margin-remove-top"><time datetime="2020-06-05T16:00">05 juin 2020</time></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-text-justify">
                                        <p>Une assemblée communale est convoquée le lundi 29 juin 2020 à 20 h 00 à la salle communale de Mervelier.
                                            Les ayants-droits se prononceront notamment  sur :
                                            <ul>
                                                <li>les comptes 2019 ;</li>
                                                <li>les modifications des statuts du Cercle scolaire du Haut Val Terbi ;</li>
                                                <li>les modifications du règlement d'organisation du SEVT ;</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <!--<div class="uk-card-footer">
                                        <a href="#" class="uk-button uk-button-text">Read more</a>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>         
            </section>   
    </section>
</main>
</body>


<footer>
    <div class="footer">
    <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
    </div>
</footer>
</html>