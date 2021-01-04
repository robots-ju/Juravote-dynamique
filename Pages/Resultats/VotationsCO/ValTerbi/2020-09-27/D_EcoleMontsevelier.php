<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votations Val-Terbi</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
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
    <section class="uk-text-justify" style="padding: 2%;">
        <h1 class="uk-heading-large">Votations Val-Terbi du 27 septembre 2020</h1>
        <hr>
        <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis de Val-Terbi</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li> 
                    <div class="uk-column-1-3@m uk-column-1-1@s">
                        <h3>Préambule</h3>
                        <p>La Commune est propriétaire de plusieurs immeubles qui se trouvent dans des états très variables. Alors que
                        certains sont neufs ou viennent d'être rénovés, d'autres sont vieux, ne sont plus aux normes et coûtent très cher
                        à la collectivité en termes d'énergie.
                        </p>

                        <p>Le Conseil communal a décidé de constituer au début 2018 une commission
                        communale "bâtiments et énergie" avec pour mandat d'étudier les mesures d'assainissement en matière énergétique
                        pour son parc immobilier.
                        </p>

                        <h3>Planification d'assainnissement</h3>
                        <p>Les résultats des CECB+ ont permis au Conseil communal de fixer des priorités pour l'assainissement énergétique
                        des différents bâtiments. Un des immeubles retenus pour un assainissement prioritaire est l'école primaire de
                        Montsevelier.
                        </p>

                        <p>Afin d'affiner le planning de réalisation, les autorités ont dû prendre en compte les possibilités de
                        subventionnement par le Canton. C'est ainsi que les travaux à l'école de Montsevelier ont été inscrits en
                        première ligne du calendrier.
                        </p>
                                        
                        <h3>Clause du besoin</h3>
                        <p>L'école primaire de Montsevelier est composée de trois corps de bâtiments. La partie ouest comprend la halle
                        qui a entièrement été refaite en 2017. La partie centrale a été construction en 1960.Le bâtiment Est a, quant à
                        lui, été construit en 1977.
                        </p>

                        <p>Le CECB+ a montré une efficacité de l'enveloppe du bâtiment insatisfaisante, les pertes calorifiques dépassant
                        de 4,4 fois les exigences actuelles pour les nouvelles constructions. L'efficacité énergétique globale est également
                        insatisfaisante, les besoins pondérés dépassant de 3,5 fois ceux des nouvelles constructions.
                        </p>
                    </div>

                    <div class="uk-column-1-3@m uk-column-1-1@s" style="padding-top: 2%;">
                        <h3>Descriptif du projet</h3>
                        <p>Le projet comporte deux volets bien distincts. L'un concerne l'assainissement énergétique du bâtiment
                        central et du bâtiment Est. L'autre traite du remplacement du chauffage à mazout de l'ensemble scolaire
                        par un chauffage par pompe à chaleur.
                        </p>
                        <p>Les façades des deux corps de bâtiment seront isolées par l'extérieur, avec une isolation périphérique crépie.
                        Les portes extérieures seront remplacées, tout comme les fenêtres en bois du bâtiment Est, par des fenêtres en
                        bois-métal à vitrage triple. Les fenêtres du bâtiment central ont été remplacées il y a quelques années et sont
                        encore en très bon état. De nouveaux stores à lamelle seront posés. Ils seront motorisés et couplés à une centrale
                        météo afin de limiter le réchauffement des classes en été.
                        </p>

                        <p>Le bâtiment central sera isolé sous la dalle des classes et au niveau du plancher des combles. Les tuiles du
                        bâtiment Est sont en mauvais état et seront remplacées. Une isolation en laine de bois sera préalablement posée
                        sur les chevrons existants. Trois lucarnes seront créées sur le pan Est permettant d'apporter de la lumière
                        naturelle dans les salles des combles utilisées pour la couture et la fanfare.
                        </p>

                        <img src="<?php echo $EcoleMontsevelierPlan ?>">
                    </div>                    

                    <p>En outre, tout le système de canalisation sera revu afin de séparer les eaux pluviales des eaux usées. Le terrain
                    ne se prêtant pas à l'infiltration, une conduite est prévue pour rejoindre un drainage existant allant à l'étang
                    situé bien plus à l'ouest. La butte de terre en façade nord du corps central sera supprimée. Les aménagements extérieurs
                    seront refaits aux abords immédiats des bâtiments assainis, tout comme l'accès piéton menant à l'école depuis le chemin
                    des Cerisiers.
                    </p>

                    <p>Le chauffage à mazout sera démonté et les deux citernes évacuées. Quelques travaux intérieurs sont prévus, tels que
                    la pose de portes afin de réaffecter en réduit les anciens locaux citernes. Deux pompes à chaleur air/eau prendront place
                    en façade Nord, devant le local chauffage actuel. La nouvelle installation chauffera l'ensemble du bâtiment, halle de
                    gymnastique comprise. Hormis les travaux décrits, il n'est pas prévu de transformations intérieures.
                    </p>

                    <div class="uk-column-1-2@m uk-column-1-1@s" style="padding-top: 2%;">
                        <table class="uk-table uk-table-striped">
                            <thead>
                                <tr>
                                    <th>Prestations</th>
                                    <th>Estimation des coûts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Travaux préparatoires</td>
                                    <td>11'000.-</td>
                                </tr>

                                <tr>
                                    <td>Bâtiment</td>
                                    <td>1'115'000.-</td>
                                </tr>

                                <tr>
                                    <td>Aménagements extérieures</td>
                                    <td>132'000.-</td>
                                </tr>

                                <tr>
                                    <td>Frais secondaires et réserve</td>
                                    <td>92'000.-</td>
                                </tr>

                                <tr>
                                    <td><b>Total</b></td>
                                    <td><b>1'350'000.-</b></td>
                                </tr>
                            </tbody>
                        </table>

                        <h3>Financement</h3>
                        <p>Le Service de l'Enseignement a reconnu la clause du besoin et entre en matière pour un subventionnement des
                        travaux. Le montant de la subvention est estimé à Fr. 202'000.-. Il s'agit là d'un montant indicatif minimal.
                        Une subvention de Fr. 11'800.- est escomptée pour le remplacement du chauffage. De plus, un montant de
                        Fr. 45'000.- est attendu pour l'assainissement de l'enveloppe thermique.
                        </p>                        
                    
                        <h3>La question qui vous est posée :</h3>
                        <b><p>Acceptez-vous, selon message du Conseil général, le crédit de Fr 1'350'000.- pour l'assainissement énergétique
                        de l'Ecole de Montsevelier ?</p></b>
                    </div>
                </li>
                <li>
                <h2>Partis de Val-Terbi</h2>
                    <table class="uk-table">
                        <thead>
                            <tr>
                                <th class="uk-text-center">PDC</th>
                                <th class="uk-text-center">Val-Terbi Ensemble</th>
                                <th class="uk-text-center">COVAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">LIBRE</span></td>
                                <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">LIBRE</span></td>
                                <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">LIBRE</span></td>
                            </tr>
                        </tbody>
                    </table>    
                    <h2>Autorités communales</h2>
                    <table class="uk-table">
                        <thead>
                            <tr>
                                <th class="uk-text-center">Conseil communal</th>
                                <th class="uk-text-center">Conseil général</th>
                                <th class="uk-text-center">Commission de l'énergie et des bâtiments</th>
                                <th class="uk-text-center">Commission de gestion, de vérification des comptes et des finances</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                                <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                                <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                                <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            </tr>
                        </tbody>
                    </table>                     
                </li>  
                <li>            
                <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Commissions communales</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Le projet a été préparé avec une vision long terme, qui tient compte aussi des finances communales (retour sur investissement).</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil communal</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Le projet prévoit une rénovation de l'enveloppe du bâtiment correspondant au standard Minergie.
                            Il offre par conséquent des perspectives intéressantes en matière d'économie d'énergie.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil communal</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Le projet présenté a été développé en concertation étroite avec les Commissions communales, appuyées par des
                            ingénieurs spécialisés et des architectes.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil communal</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>La réhabilitation énergétique est également l'occasion d'améliorer à long terme le confort et la valeur du bâtiment.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil communal</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Dans le contexte de la crise sanitaire liée au Covid-19, il appartient plus que jamais aux collectivités publiques de
                            contribuer à la relance économique en concrétisant la réalisation de leurs projets.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Conseil communal</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>La rénovation de l'Ecole de Montsevelier est également l'opportunité de faire un pas en direction de l'environnement.</p>
                        </div>
                    </div>
                </li>
                <li>
                <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
                <h4>Il n'y a pas d'oppositions à ce projet !</h4>
                    <!--<div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>-->
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