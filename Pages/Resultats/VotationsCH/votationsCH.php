<!DOCTYPE html>
<html lang="fr">
<head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Votations fédérales</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $cssNormalize; ?>">
        <link rel="stylesheet" href="<?php echo $cssUikitMin; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssMain; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssIndex; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssresultats; ?>"/>
        
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
    <section style="padding-top: 2%; padding-left: 2%; padding-right: 2%;">
        <h1 class="uk-heading-large">Résultats des votations fédérales</h1>
    </section>
    <hr>
    <h3 class="uk-text-center">Les résultats des votations fédérales seront disponibles prochainement !</h3>
    <section style="padding-left: 5%; padding-right: 5%">
        <div class="switcher-buttons" uk-switcher="animation: uk-animation-fade; toggle: > *">
            <button class="uk-button uk-button-default" type="button">2020-2011</button>
            <!--<button class="uk-button uk-button-default" type="button">2010-2001</button>
            <button class="uk-button uk-button-default" type="button">2000-1991</button>
            <button class="uk-button uk-button-default" type="button">1990-1981</button>
            <button class="uk-button uk-button-default" type="button">1980-1971</button>
            <button class="uk-button uk-button-default" type="button">1970-1961</button>
            <button class="uk-button uk-button-default" type="button">1960-1951</button>
            <button class="uk-button uk-button-default" type="button">1950-1941</button>
            <button class="uk-button uk-button-default" type="button">1940-1931</button>
            <button class="uk-button uk-button-default" type="button">1930-1921</button>
            <button class="uk-button uk-button-default" type="button">1920-1911</button>
            <button class="uk-button uk-button-default" type="button">1910-1901</button>
            <button class="uk-button uk-button-default" type="button">1900-1891</button>
            <button class="uk-button uk-button-default" type="button">1890-1881</button>
            <button class="uk-button uk-button-default" type="button">1880-1848</button>-->
        </div>
        <ul class="uk-switcher uk-margin">
            <li>
                <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <ul uk-accordion="multiple: false">
                            <li>
                                <a class="uk-accordion-title">2020</a>
                                <div class="uk-accordion-content">
                                    <a href="<?php echo $PHPresultats20200209Accueil; ?>"><p>Votations fédérales du 09.02.2020</p></a>
                                </div>        
                            </li>
                            <li>
                                <a class="uk-accordion-title">2019</a>
                                <div class="uk-accordion-content">
                                    <a href="./2020-2011/2019-02-10/vfédérales.html"><p>Votations fédérales du 10.02.2019</p></a>
                                    <a href="./2020-2011/2019-05-19/vfédérales.html"><p>Votations fédérales du 19.05.2019</p></a>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title">2018</a>
                                <div class="uk-accordion-content">
                                    <a href="./2020-2011/2018-11-25/vfédérales.html"><p>Votations fédérales du 25.11.2018</p></a>
                                    <a href="./2020-2011/2018-09-23/vfédérales.html"><p>Votations fédérales du 23.09.2018</p></a>
                                    <a href="./2020-2011/2018-06-10/vfédérales.html"><p>Votations fédérales du 10.06.2018</p></a>
                                    <a href="./2020-2011/2018-03-04/vfédérales.html"><p>Votations fédérales du 03.04.2018</p></a>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title">2017</a>
                                <div class="uk-accordion-content">
                                    <a href="./2020-2011/2017-09-24/vfédérales.html"><p>Votations fédérales du 24.09.2017</p></a>
                                    <a href="./2020-2011/2017-05-21/vfédérales.html"><p>Votations fédérales du 21.05.2017</p></a>
                                    <a href="./2020-2011/2017-02-12/vfédérales.html"><p>Votations fédérales du 12.02.2017</p></a>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title">2016</a>
                                <div class="uk-accordion-content">
                                    <a href="./2020-2011/2016-11-27/vfédérales.html"><p>Votations fédérales du 27.11.2016</p></a>
                                    <a href="./2020-2011/2016-09-25/vfédérales.html"><p>Votations fédérales du 25.09.2016</p></a>
                                    <a href="./2020-2011/2016-06-05/vfédérales.html"><p>Votations fédérales du 05.06.2016</p></a>
                                    <a href="./2020-2011/2016-02-28/vfédérales.html"><p>Votations fédérales du 28.02.2016</p></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul uk-accordion="multiple: false">
                            <li>
                                <a class="uk-accordion-title">2015</a>
                                <div class="uk-accordion-content">
                                    <a href="./2020-2011/2015-06-14/vfédérales.html"><p>Votations fédérales du 14.06.2015</p></a>
                                    <a href="./2020-2011/2015-03-08/vfédérales.html"><p>Votations fédérales du 08.03.2015</p></a>
                                </div>        
                            </li>
                            <li>
                                <a class="uk-accordion-title">2014</a>
                                <div class="uk-accordion-content">
                                    <a href="./2020-2011/2014-11-30/vfédérales.html"><p>Votations fédérales du 30.11.2014</p></a>
                                    <a href="./2020-2011/2014-09-28/vfédérales.html"><p>Votations fédérales du 28.09.2014</p></a>
                                    <a href="./2020-2011/2014-05-18/vfédérales.html"><p>Votations fédérales du 18.05.2014</p></a>
                                    <a href="./2020-2011/2014-02-09/vfédérales.html"><p>Votations fédérales du 09.02.2014</p></a>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title">2013</a>
                                <div class="uk-accordion-content">
                                    <a href="./2020-2011/2013-11-24/vfédérales.html"><p>Votations fédérales du 24.11.2013</p></a>
                                    <a href="./2020-2011/2013-09-22/vfédérales.html"><p>Votations fédérales du 22.09.2013</p></a>
                                    <a href="./2020-2011/2013-06-09/vfédérales.html"><p>Votations fédérales du 09.06.2013</p></a>
                                    <a href="./2020-2011/2013-03-03/vfédérales.html"><p>Votations fédérales du 03.03.2013</p></a>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title">2012</a>
                                <div class="uk-accordion-content">
                                    <a href="./2020-2011/2012-11-25/vfédérales.html"><p>Votations fédérales du 25.11.2012</p></a>
                                    <a href="./2020-2011/2012-09-23/vfédérales.html"><p>Votations fédérales du 23.09.2012</p></a>
                                    <a href="./2020-2011/2012-06-17/vfédérales.html"><p>Votations fédérales du 17.06.2012</p></a>
                                    <a href="./2020-2011/2012-03-11/vfédérales.html"><p>Votations fédérales du 11.03.2012</p></a>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title">2011</a>
                                <div class="uk-accordion-content">
                                    <a href="./2020-2011/2011-02-13/vfédérales.html"><p>Votations fédérales du 13.02.2011</p></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </li><li>
                <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <ul uk-accordion="multiple: false">
                            <li>
                                <a class="uk-accordion-title">2010</a>
                                <div class="uk-accordion-content">
                                    <a href="./2010-2001/2010-11-28/vfédérales.html"><p>Votations fédérales du 28.11.2010</p></a>
                                    <a href="./2010-2001/2010-09-26/vfédérales.html"><p>Votations fédérales du 26.09.2010</p></a>
                                    <a href="./2010-2001/2010-03-07/vfédérales.html"><p>Votations fédérales du 07.03.2010</p></a>
                                </div>        
                            </li>
                            <li>
                                <a class="uk-accordion-title">2009</a>
                                <div class="uk-accordion-content">
                                    <a href="./2010-2001/2009-11-29/vfédérales.html"><p>Votations fédérales du 29.11.2009</p></a>
                                    <a href="./2010-2001/2009-09-27/vfédérales.html"><p>Votations fédérales du 27.09.2009</p></a>
                                    <a href="./2010-2001/2009-05-17/vfédérales.html"><p>Votations fédérales du 17.05.2009</p></a>
                                    <a href="./2010-2001/2009-02-08/vfédérales.html"><p>Votations fédérales du 08.02.2009</p></a>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title">2008</a>
                                <div class="uk-accordion-content">
                                    <a href="./2010-2001/2008-11-31/vfédérales.html"><p>Votations fédérales du 31.11.2008</p></a>
                                    <a href="./2010-2001/2008-06-01/vfédérales.html"><p>Votations fédérales du 01.06.2008</p></a>
                                    <a href="./2010-2001/2008-02-24/vfédérales.html"><p>Votations fédérales du 24.02.2008</p></a>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title">2007</a>
                                <div class="uk-accordion-content">
                                    <a href="./2010-2001/2007-06-17/vfédérales.html"><p>Votations fédérales du 17.06.2007</p></a>
                                    <a href="./2010-2001/2007-03-11/vfédérales.html"><p>Votations fédérales du 11.03.2007</p></a>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title">2006</a>
                                <div class="uk-accordion-content">
                                    <a href="./2010-2001/2006-11-26/vfédérales.html"><p>Votations fédérales du 26.11.2006</p></a>
                                    <a href="./2010-2001/2006-09-24/vfédérales.html"><p>Votations fédérales du 24.09.2006</p></a>
                                    <a href="./2010-2001/2006-05-21/vfédérales.html"><p>Votations fédérales du 21.05.2006</p></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul uk-accordion="multiple: false">
                            <li>
                                <a class="uk-accordion-title">2005</a>
                                <div class="uk-accordion-content">
                                    <a href="./2010-2001/2005-11-27/vfédérales.html"><p>Votations fédérales du 27.11.2005</p></a>
                                    <a href="./2010-2001/2005-09-25/vfédérales.html"><p>Votations fédérales du 25.09.2005</p></a>
                                    <a href="./2010-2001/2005-06-05/vfédérales.html"><p>Votations fédérales du 05.06.2005</p></a>
                                </div>        
                            </li>
                            <li>
                                <a class="uk-accordion-title">2004</a>
                                <div class="uk-accordion-content">
                                    <a href="./2010-2001/2004-11-28/vfédérales.html"><p>Votations fédérales du 28.11.2004</p></a>
                                    <a href="./2010-2001/2004-09-26/vfédérales.html"><p>Votations fédérales du 26.09.2004</p></a>
                                    <a href="./2010-2001/2004-05-16/vfédérales.html"><p>Votations fédérales du 16.05.2004</p></a>
                                    <a href="./2010-2001/2004-02-08/vfédérales.html"><p>Votations fédérales du 08.02.2004</p></a>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title">2003</a>
                                <div class="uk-accordion-content">
                                    <a href="./2010-2001/2003-05-18/vfédérales.html"><p>Votations fédérales du 18.05.2003</p></a>
                                    <a href="./2010-2001/2003-02-09/vfédérales.html"><p>Votations fédérales du 09.02.2003</p></a>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title">2002</a>
                                <div class="uk-accordion-content">
                                    <a href="./2010-2001/2002-11-24/vfédérales.html"><p>Votations fédérales du 24.11.2002</p></a>
                                    <a href="./2010-2001/2002-09-22/vfédérales.html"><p>Votations fédérales du 22.09.2002</p></a>
                                    <a href="./2010-2001/2002-06-02/vfédérales.html"><p>Votations fédérales du 02.06.2002</p></a>
                                    <a href="./2010-2001/2002-03-03/vfédérales.html"><p>Votations fédérales du 03.03.2002</p></a>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title">2001</a>
                            <div class="uk-accordion-content">
                                    <a href="./2010-2001/2001-12-02/vfédérales.html"><p>Votations fédérales du 02.12.2001</p></a>
                                    <a href="./2010-2001/2001-06-10/vfédérales.html"><p>Votations fédérales du 10.06.2001</p></a>
                                    <a href="./2010-2001/2001-03-04/vfédérales.html"><p>Votations fédérales du 04.03.2001</p></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
        <h3 class="uk-text-center">Les autres résultats de votations fédérales (avant 2011) seront disponibles prochainement.</h3>
    </section>
</main>
<footer>
        <div class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT']."/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    </footer>
</body>
</html>