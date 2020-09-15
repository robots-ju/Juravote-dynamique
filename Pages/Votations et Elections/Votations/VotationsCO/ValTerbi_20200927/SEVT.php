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
                    <div class="uk-column-1-2@m uk-column-1-1@s">
                        <h3>Préambule</h3>
                        <p>Le règlement d'organisation et d'administration des eaux du Val-Terbi (SEVT) fixe l'ensemble des règles
                        et des prescriptions assurant le bon fonctionnement du Service des eaux du Val-Terbi. A la suite de l'
                        intégration de Corban dans la Commune de Val-Terbi le 1er janvier 2018, une adaptation du règlement d'
                        organisation s'impose afin de tenir compte de la nouvele situation. Pour mémoire, les domaines d'activités
                        du SEVT sont :
                        </p>

                        <ol>
                            <li>L'élaboration des projets et la réalisation des installations d'approvisionnement, d'adduction,
                            d'interconnexion et de distribution des réseaux publics d'eau potable ;</li>
                            <li>L'entretien, le maintien et l'état, l'exploitation et l'extension des ouvrages, des installations,
                            des conduites et des équipements servant au captage, à l'approvisionnement, l'adduction, l'interconnexion,
                            la distribution de l'eau potable, pour les communes de Courchapoix, Mervelier et les localités de Corban,
                            Montsevelier et Vicques</li>
                        </ol>                        

                        <h3>Contenu</h3>
                        <p>Le Comité du SEVT a procédé à une révision du règlement actuellement en vigueur. Les principales
                        modifications sont les suivantes :
                        </p>

                        <ol>
                            <li>Le travail de révision a consisté avant tout en un toilettage à la suite de l'intégration de Corban
                            dans la Commune de Val-Terbi ;</li>
                            <li>La composition des différents organes a été revue ;</li>
                            <li>Dans la foulée, une augmentation des seuils de compétences financières a été prévue, afin d'offrir
                            une plus grande marge de manoeuvre au comité.</li>
                        </ol>
                    </div>

                    <table class="uk-table uk-table-hover uk-table-striped"  style="padding-top: 2%;">
                        <thead>
                            <tr>
                                <th class="uk-width-auto">Objet</th>
                                <th>Règlement actuel</th>
                                <th>Règlement futur</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>Comité</b></td>
                                <td>Le comité se compose de 5 membres, un pour chacune des communes de Corban, Mervelier et
                                Courchapoix, et 2 pour val-Terbi, ainsi que d'un suppléant par commune choisi parmi les membres
                                des conseils communaux ou généraux et désignés par les conseils communaux.</td>
                                <td>Le comité se compose de 7 membres, deux pour chacune des communes de Mervelier
                                Courchapoix, et 3 pour Val-Terbi, domiciliés dans la mesure du possible dans chacune des localités,
                                ainsi que d'un suppléant par commune. Ils sont choisis parmi les membres des conseils communaux ou
                                généraux et désignés par les communes.</td>
                            </tr>

                            <tr>
                                <td><b>Assemblée des Délégués</b></td>
                                <td>L'Assemblée des Délégués se compose des représentants des communes membres du SEVT, selon la
                                répartition suivante :
                                    <ul>
                                        <li>1 délégué et 1 suppléant faisant partie des conseils communaux et désignés par ces
                                        derniers, en incluant d'office ceux qui sont membres du comité du SEVT ;</li>
                                        <li>2 autres délégués et 1 suppléant par commune, nommés conformément à l'article 4,
                                        alinéa 1, lettre 3, jusqu'à 400 habitants ;</li>
                                        <li>1 délégué nommé conformément à l'article 4, alinéa 1, lettre e, par tranche
                                        supplémentaire de 400 habitants.</li>
                                    </ul>
                                </td>
                                <td>L'Assemblée des Délégués se compose de onze membres. Cinq délégués et un suppléant pour
                                la commune de Val Terbi, trois délégués et un suppléant pour la commune de Courchapoix et trois
                                délégués et un suppléant pour la commune de Mervelier.</td>
                            </tr>

                            <tr>
                                <td><b>Compétences financières (communes)</b></td>
                                <td>Dépenses nouvelles dépassant le 10 % du budget de fonctionnement.
                                </td>
                                <td><p>Dépenses nouvelles dépassant le 10 % du budget de fonctionnement</p>
                                    <p>Crédits supplémentaires dépassant 10 % du budget de fonctionnement.</p></td>
                            </tr>

                            <tr>
                                <td><b>Compétences financières (Assemblée des Délégués)</b></td>
                                <td><p>Dépenses nouvelles dépassant Fr. 25'000.- par objet.</p>
                                    <p>Crédits supplémentaires dépassant de plus de Fr 25'000.- les crédits autorisés.</p>
                                    <p>Acquisition ou vente de biens-fonds et constitution de droits réels sur les immeubles
                                    lorsque le prix dépasse Fr. 25'000.-.</p>
                                </td>
                                <td><p>Dépenses nouvelles dépassant Fr. 50'000.- par objet.</p>
                                    <p>Crédits supplémentaires dépassant de plus de Fr 50'000.- les crédits autorisés.</p>
                                    <p>Acquisition ou vente de biens-fonds et constitution de droits réels sur les immeubles
                                    lorsque le prix dépasse Fr. 50'000.-.</p>
                                </td>
                            </tr>

                            <tr>
                                <td><b>Compétences financières (Comité)</b></td>
                                <td><p>Dépenses nouvelles dépassant et crédits complémentaires inférieurs à
                                    Fr. 25'000.- par objet.</p>
                                    <p>Acquisition ou vente de biens-fonds et constitution de droits réels sur les immeubles
                                    lorsque le prix est inférieur Fr. 25'000.-.</p>
                                </td>
                                <td><p>Dépenses nouvelles dépassant et crédits complémentaires inférieurs à
                                    Fr. 50'000.- par objet.</p>
                                    <p>Acquisition ou vente de biens-fonds et constitution de droits réels sur les immeubles
                                    lorsque le prix est inférieur Fr. 50'000.-.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </li>  
                <li>            
                <h2>Partis de Val-Terbi</h2>
                    <div>
                        <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>                           
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">PDC</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">Val-Terbi Ensemble</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">COVAL</p>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </li>
                <li>
                <h4>Aucun argument n'a été formulé par les partisans du texte !</h4>
                
                <!--<div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
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
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>TEXTE</p>
                        </div>
                    </div>-->
                </li>
                <li>
                    <h4>Il n'y a pas d'oppositions à ce projet !</h4>
                    <!--<div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
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