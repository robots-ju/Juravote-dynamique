from glob import glob
from os.path import isdir,isfile
import base64
import webbrowser
def all_files(path,ext):
    r=[]
    for x in glob(path+"/*"):
        if x.endswith("."+ext) and isfile(x):
            r.append(x)
        elif isdir(x):
            r+=all_files(x,ext)
    return r
for x in all_files("..","php"):
    if x.startswith("..\\Includes") or x=="..\\variables.php":
        continue
    with open(x,"r")as f:
        ctn=f.read()     
    ##########################################
    #### modifications de chaque page ici ####
    ##########################################
    try:
        assert ctn.count("<header>")==1
        assert ctn.count("</header>")==1
        assert ctn.count("<head>")==1
        assert ctn.count("</head>")==1
        assert ctn.count("<footer>")==1
        assert ctn.count("</footer>")==1
    except AssertionError as e:
        continue
    #head
    start=ctn.find("<head>")
    end=ctn.find("</head>")
    ctn=ctn[:start]+"""<head>
        <?php include '/Juravote-dynamique/variables.php'; ?>

        <link rel="shortcut icon" href="<?php echo $juravoteIcon; ?>"/>
        <title>JuraVote | Accueil</title>
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
    """+ctn[end:]
    start=ctn.find("<header>")
    end=ctn.find("</header>")
    ctn=ctn[:start]+"""<header>
            <div class="navbar-normal">
                <?php include "/Juravote-dynamique/Includes/Navbar/navbar.php"; ?>
            </div>

            <div>
                <?php include "/Juravote-dynamique/Includes/Navbar/navbar-mobile.php"; ?>
            </div>
        """+ctn[end:]
    start=ctn.find("<footer>")
    end=ctn.find("</footer>")
    ctn=ctn[:start]+"""<footer>
        <div class="footer">
            <?php include "/Juravote-dynamique/Includes/Footer/footer.php"; ?>
        </div>
    """+ctn[end:]
    with open(x,"w")as f:
        f.write(ctn)
