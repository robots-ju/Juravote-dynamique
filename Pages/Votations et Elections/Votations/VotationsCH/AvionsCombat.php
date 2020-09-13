<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Référendum contre les avions de combat</title>
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
            <h1 class="uk-heading-large">Achat de nouveaux avions de combat</h1>
            <hr>
            <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *" style="padding-bottom: 2%;">
                <button class="uk-button uk-button-default" type="button">Résumé</button>
                <button class="uk-button uk-button-default" type="button">Positions des partis politiques</button>
                <button class="uk-button uk-button-default" type="button">Arguments pour</button>
                <button class="uk-button uk-button-default" type="button">Arguments contre</button>
            </div>  
            <ul class="uk-switcher uk-margin">
                <li> 
                    <h1>Description de la votation</h1>
                        <p>Le but du projet consiste à renouveler les avions actuels, qui arriveront en fin de vie dans les années 2030.
                        Le montant de 24 milliards servira à l'achat des avions (6 milliards) et à leur entretien durant toute leur
                        durée de vie.</p>
                        <p>Le référendum a été lancé par les Verts et le Parti socialiste. Le comité référendaire est convaincu que des économies
                        doivent être réalisées également dans l'armée suisse et que certaines montants doivent être utilisées ailleurs. De plus,
                        la Suisse n'a pas besoin d'appareils si coûteux.</p>
                        <p>A l'inverse, les partis du centre et la droite, ainsi que le Conseil fédéral et le Parlement, relèvent que le montant
                        est inscrit au budget habituel de l'armée, et que la Suisse doit être prête à se protéger contre des menaces extérieures.</p>
                
                    <h1>La question qui vous est posée :</h1>
                        <b><p>Acceptez-vous l’arrêté fédéral du 20 décembre 2019 relatif à l’acquisition de nouveaux avions de combat ?</p></b>
                </li>
                <li>
                    <h2>Partis fédéraux</h2>
                    <div>
                        <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: minus-circle; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">Verts</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: minus-circle; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">PS</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: plus-circle; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">PEV</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: plus-circle; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">PVL</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: plus-circle; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">PDC</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: plus-circle; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">PBD</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: plus-circle; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">PLR</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: plus-circle; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">UDC</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2>Partis jurassiens</h2>
                    <div>
                        <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: minus-circle; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">CS-POP Jura</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: minus-circle; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">Verts Jura</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: minus-circle; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">PEV Jura</p>
                                </div>
                            </div>
                            <div>
                            <div class="uk-card uk-card uk-card-body">
                                <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: minus-circle; ratio: 2.5"></span></h3>
                                <p class="uk-text-center">PS Jura</p>
                            </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">PVL Jura</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">PDC Jura</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: question; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">PCSI Jura</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: plus-circle; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">PLR Jura</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card uk-card-body">
                                    <h3 class="uk-card-title uk-text-center"><span uk-icon="icon: plus-circle; ratio: 2.5"></span></h3>
                                    <p class="uk-text-center">UDC Jura</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>  
                <li>            
                <div class="uk-child-width-1-6@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Les anciens avions doivent être remplacés.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Pour la sécurité de la population suisse.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L'espace aérien doit être protégé.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Maintenir la chaîne de sécurité</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Remplir notre mandat de défense</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Protection de la Suisse en tant que lieu d'implantation d'entreprises</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité d'initiative</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Un investissement sur le long terme</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>La Suisse a besoin d'une flotte aérienne moderne.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Un compromis réaliste en matière d’affaires compensatoires</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-plr uk-border-rounded">PLR</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>La Suisse a besoin d'avions de combat performants.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge-pbd uk-border-rounded">PBD</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>Les avions achetés en 1978 (F-5E Tiger) sont déjà obsolètes.</p>
                        </div>
                    </div>
                </li>
                <li>
                <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L’ARRÊTÉ DE PLANIFICATION EST UN CHÈQUE EN BLANC DE 24 MILLIARDS.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L’ACHAT INUTILE DE NOUVEAUX AVIONS DE COMBAT DE LUXE VA MENER À DE NOUVELLES COUPES BUDGÉTAIRE DANS L’ÉDUCATION ET LA SÉCURITÉ SOCIALE.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>SI LE PEUPLE N’A PAS LE DERNIER MOT QUANT À LA DÉCISION DU TYPE D’AVION DE COMBAT , UN DANGER SUBSISTE QUE LA DÉCISION DU DDPS MÈNE À UNE NOUVELLE ACQUISITION QUI TOURNERA AU DÉBÂCLE. </p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>LE SCÉNARIO D’UNE GUERRE AÉRIENNE EN EUROPE N’EST PAS RÉALISTE.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>LA POLICE DE L’AIR DOIT ÊTRE GARANTIE, MAIS IL N’Y A PAS BESOIN D’AVIONS DE COMBAT DE LUXE.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>LES AVIONS DE COMBAT LÉGERS SERAIENT UNE OPTION RAISONNABLE ET NETTEMENT MOINS COÛTEUSE QUI PERMETTRAIENT D’ASSURER LES TÂCHES DE LA POLICE DE L’AIR.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>UN AVION DE COMBAT CONSOMME 5000 LITRES DE KÉROSÈNE PAR HEURE. AVEC AUTANT DE CARBURANT, UNE VOITURE NORMALE POURRAIT FAIRE 2,5 FOIS LE TOUR DE LA TERRE.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>L’ARMÉE DE L’AIR SUISSE EST RESPONSABLE DE L’ÉMISSION DE 120‘000 TONNES DE CO2 PAR ANNÉE.</p>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-badge uk-label badge uk-border-rounded">Comité référendaire</div>
                            <h3 class="uk-card-title"></h3>                            
                            <p>LES MILLIARDS GASPILLÉS POUR L’ACHAT DES NOUVEAUX AVIONS DE COMBAT DEVRAIENT MIEUX ÊTRE INVESTI DANS LA LUTTE CONTRE LE RÉCHAUFFEMENT CLIMATIQUE</p>
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