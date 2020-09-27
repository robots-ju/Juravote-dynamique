<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Modification de la Loi sur l'Impôt direct</title>
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
        <script src="//cdn.amcharts.com/lib/4/core.js"></script>
        <script src="//cdn.amcharts.com/lib/4/charts.js"></script>
        <script src="//cdn.amcharts.com/lib/4/themes/animated.js"></script>


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
        <h1 class="uk-heading-large">Modification de la loi sur l'impôt direct</h1>
        <hr>
        <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%">
            <button class="uk-button uk-button-default" type="button">Résumé</button>
            <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
            <button class="uk-button uk-button-default" type="button">Arguments pour</button>
            <button class="uk-button uk-button-default" type="button">Arguments contre</button>
        </div>  
        <ul class="uk-switcher uk-margin">
            <li> 
                <h1>Description de la votation</h1>
                    <p>Le Conseil fédéral et le Parlement veulent faire passer de 10 100 à 25 000 francs
                    la déduction maximale possible pour les frais de garde par des tiers. Cette mesure
                    permettra de mieux concilier famille et travail, d’adapter la déduction fiscale aux
                    dépenses réelles engendrées par la garde des enfants par des tiers et d’assurer,
                    dans l’intérêt de l’économie nationale, la présence sur le marché de forces de travail
                    qualifiées (souvent obligées de réduire leur taux d’occupation ou d’arrêter de travailler
                    pour des raisons fiscales).</p>
                    <p>Le Parlement a décidé par ailleurs d’augmenter de 6500 à 10 000 francs la déduction
                    générale pour enfant, indépendamment des modalités de prise en charge, en tenant
                    compte des dépenses auxquelles les familles doivent faire face pour leurs enfants
                    (nourriture, logement, vêtements, etc.).</p>
                    <p>Un référendum a été lancé contre cette modification de la loi. Les auteurs du référendum
                    critiquent le projet qui, à leur avis, entraînera une diminution des recettes fiscales,
                    qui manqueront dans d’autres secteurs ou pour des prestations dont la classe moyenne pourrait
                    elle aussi bénéficier. Ils soulignent en outre que ces déductions fiscales bénéficieront
                    uniquement aux familles dont le revenu est élevé, y compris celles qui n’ont pas de coûts
                    externes pour la garde de leurs enfants, et pas aux familles de la classe moyenne.</p>

                <h1>La question qui vous est posée :</h1>
                    <b><p>Acceptez-vous la modification du 27 septembre 2019 de la loi fédérale sur
                    l’impôt fédéral direct (LIFD) (déduction fiscale des frais de garde des enfants par des tiers) ?</p></b>
            </li>
            <li>
            <h2>Partis fédéraux</h2>
                <table class="uk-table">
                    <thead>
                        <tr>
                            <th class="uk-text-center">Verts</th>
                            <th class="uk-text-center">PS</th>
                            <th class="uk-text-center">PEV</th>
                            <th class="uk-text-center">PVL</th>
                            <th class="uk-text-center">PDC</th>
                            <th class="uk-text-center">PBD</th>
                            <th class="uk-text-center">PLR</th>
                            <th class="uk-text-center">UDC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                        </tr>
                    </tbody>
                </table>    

                <h2>Partis jurassiens</h2>
                <table class="uk-table">
                    <thead>
                        <tr>
                            <th class="uk-text-center">CS-POP</th>
                            <th class="uk-text-center">Verts</th>
                            <th class="uk-text-center">PS</th>
                            <th class="uk-text-center">PEV</th>
                            <th class="uk-text-center">PVL</th>
                            <th class="uk-text-center">PDC</th>
                            <th class="uk-text-center">PCSI</th>
                            <th class="uk-text-center">PLR</th>
                            <th class="uk-text-center">UDC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: red;">NON</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: grey;">LIBRE</span></td>
                        </tr>
                    </tbody>
                </table>    

                <h2>Autorités</h2>
                <table class="uk-table">
                    <thead>
                        <tr>
                            <th class="uk-text-center">Conseil fédéral</th>
                            <th class="uk-text-center">Conseil des Etats</th>
                            <th class="uk-text-center">Conseil national</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                            <td class="uk-text-center"><span class="uk-badge" style="background-color: green;">OUI</span></td>
                        </tr>
                    </tbody>
                </table> 
            </li>  
            <li>            
            <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>L’augmentation des frais de garde par des tiers est essentielle, car les frais de crèches, etc.,
                        dépassent nettement les possibilités de déduction et ne représentent aucune incitation financière au retour au travail.</p>
                    </div>
                </div>

                <div>
                <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV</div>
                        <h3 class="uk-card-title"></h3>                           
                        <p>La charge financière pesant sur les familles augmente.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Les familles ayant un revenu mensuel brut à partir d’env. 7'500 francs bénéficient
                        de l’augmentation de la déduction pour enfants. Ce sont ces mêmes familles qui
                        supportent de lourdes charges et qui ne bénéficient généralement pas de tarifs
                        favorables ou de réductions de primes. </p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                    <div class="uk-card-badge uk-label badge-pev uk-border-rounded">PEV</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Les allègements fiscaux conduisent toujours à des pertes fiscales,
                        c’est pourquoi les bonnes personnes doivent être concernées par ces
                        allègements – les familles. Les pertes sont, au vu des excédents annuels
                        élevés, supportables pour la Confédération.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité du "OUI"</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Les coûts sont supportables.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité du "OUI"</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>La classe moyenne en profite.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité du "OUI"</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Lutte contre la pénurie de personnel qualifié</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Le seuil de progression sera relevé et cela incitera les femmes à reprendre
                        une activité professionnelle après leur grossesse.</p>
                    </div>
                </div>
            </li>
            <li>
            <div class="uk-child-width-1-6@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Un cadeau aux familles les plus riches.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Les 370 millions doivent être investis pour une véritable politique familiale progressiste.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge-verts uk-border-rounded">Verts</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Pertes pour les cantons, déjà mis sous pression par RFFA.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>On ne prête qu'aux plus riches.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge-ps uk-border-rounded">PS</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Le projet est conçu pour briser la progression de l'impôt et empêcher ainsi l'imposition équitable des
                        revenus les plus élevés.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge-pvl uk-border-rounded">PVL</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Ce projet n'améliore pas la comptabilité entre vie de famille et vie professionnelle, mais réduit la charge
                        fiscale pour les parents ayant des revenus élevés.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité du "NON"</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Ce projet est une arnaque. 370 millions de francs seraient gaspillés chaque année, sans aucun
                        des effets désirés.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité "NON"</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Ce projet ne fait rien pour l'économie ou le marché du travail.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité "NON"</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Ne promeut ni la conciliation famille/travail, ni l'égalité.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité "NON"</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Politique clientéliste au nom des familles et des professionnels.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité "NON"</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Pas adapté à la classe moyenne.</p>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-card-badge uk-label badge uk-border-rounded">Comité "NON"</div>
                        <h3 class="uk-card-title"></h3>                            
                        <p>Ce projet est coûteux et inutile.</p>
                    </div>
                </div>
            </li>
        </ul>
</main>
</body>

<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</html>