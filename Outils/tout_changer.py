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
for x in all_files("..\\Pages\\Resultats\\VotationsCH","php"):
    if x.startswith("..\\Includes") or x=="..\\variables.php":
        continue
    with open(x,"r")as f:
        ctn=f.read()     
    ##########################################
    #### modifications de chaque page ici ####
    ##########################################
    ctn=ctn.replace("<?php include '/","<?php include $_SERVER['DOCUMENT_ROOT'].'/")
    ctn=ctn.replace("""<script src="https://www.amcharts.com/lib/4/core.js"></script>
        <script src="https://www.amcharts.com/lib/4/charts.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/switzerlandHigh.js"></script>
        <script src="https://www.amcharts.com/lib/4/maps.js"></script>
        <script src="https://www.amcharts.com/lib/4/core.js"></script>
        <script src="https://www.amcharts.com/lib/4/charts.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/switzerlandHigh.js"></script>
        <script src="https://www.amcharts.com/lib/4/maps.js"></script>""","""<script src="https://www.amcharts.com/lib/4/core.js"></script>
        <script src="https://www.amcharts.com/lib/4/charts.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
        <script src="https://www.amcharts.com/lib/4/geodata/switzerlandHigh.js"></script>
        <script src="https://www.amcharts.com/lib/4/maps.js"></script>""")
    ctn=ctn.replace("""<link rel="stylesheet" href="<?php echo $cssresultats; ?>"/>
        <link rel="stylesheet" href="<?php echo $cssresultats; ?>"/>""","""<link rel="stylesheet" href="<?php echo $cssresultats; ?>"/>""")
    with open(x,"w")as f:
        f.write(ctn)
