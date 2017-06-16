<!DOCTYPE html>
<?php $page="dragon"?>
<?php $drPage = "download"?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Download DRAGON</title>
        <meta name="description" content="DRAGON official download page">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="David Dubois">
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body onload="init()">
        <div class="container">
            <?php require_once "../../Header.php" ?>

            <div class="warfare-content center">
            <?php require_once "dragon-base.php" ?>

                <p>DRAGON v1 can be downloaded with a number of pre-selected configurations:</p>
                <div class="container">
                    <div class="col-md-1">
                        <div class="row">
                            <a onmouseenter="setAdditionalText( 1 )" class="btn btn-default warfare-btn inactive" href="../../dl/DRAGON_v1.1_low.zip">Low</a>
                        </div>
                        <div class="row">
                            <a onmouseenter="setAdditionalText( 2 )" class="btn btn-default warfare-btn inactive" href="../../dl/DRAGON_v1.1_medium.zip">Medium</a>
                        </div>
                        <div class="row">
                            <a onmouseenter="setAdditionalText( 3 )" class="btn btn-default warfare-btn inactive" href="../../dl/DRAGON_v1.1_high.zip">High</a>
                        </div>
                        <div class="row">
                            <a onmouseenter="setAdditionalText( 4 )" class="btn btn-default warfare-btn inactive" href="../../dl/DRAGON_v1.1_ultra.zip">Ultra</a>
                        </div>
                        <div class="row">
                            <a onmouseenter="setAdditionalText( 5 )" class="btn btn-default warfare-btn inactive" href="../../dl/DRAGON_v1.1_extreme.zip">Extreme</a>
                        </div>
                        <div class="row">
                            <a onmouseover="setAdditionalText( 6 )"class="btn btn-default warfare-btn inactive" href="../../dl/DRAGON_Data.zip">Data</a>
                        </div>
                    </div>
                    <div class="col-md-3" id="info">Mouse over a button to the left!</div>
                    <div class="col-md-7" id="img">
                    </div>
                </div>

                <h1>Instructions</h1>
                <p class="body-text">DRAGON requries the <a href="http://www.minecraftforum.net/forums/mapping-and-modding/minecraft-mods/1286604-shaders-mod-updated-by-karyonix">Shaders Mod</a>. <a href="https://optifine.net/downloads">Optifine</a> is also recommended. Once the Shaders Mod is installed, you should see a folder called "shaderpacks" in your .minecraft directory. Simply move your chosen version of DRAGON into the shaderpacks folder. Start Minecraft and click on "Options", then "Shaders". Select the version of DRAGON you downloaded from the list that appears. Click "Done", then "Done" again to go back to Minecraft's main screen. You now have DRAGON installed!</p>
                <p class="body-text">If you play Minecraft now, you'll be less than wowed by what you see. You won't get all the wonderful features I've made a big deal about. This is because you haven't yet installed the companion texture pack. Download it by clicking on "Data" above, then place it in your texturepacks folder (.minecraft/texturepacks). Make sure that it's at the top of the "Selected Resource Packs" in the Options/Resource Packs menu in Minecraft. Also make sure that you have no texture packs selected that have a resolution other than 16x16. Now you're ready to play Minecraft!</p>
                <p class="body-text">You may be wondering about the companion texture pack. See, DRAGON implements physically-based shading. This is the same sort of shading used by the Unreal Engine 4 or Unity 5. Physically based shading looks a great deal better than classical shading, even with wildly varying lighting conditions. In order to achieve this high degree of graphical fidelity, physically based shading requires data not given to classical shading, such as information about how rough a surface is or whether or not a surface acts like a metal. The companion texture pack provides this additional data. If you want to learn more about physically based shading, I recommend <a href="http://seblagarde.wordpress.com/2011/08/17/hello-world/">Sebastien Lagarde's blog post</a> about physically based shading.</p>
            </div>

            <footer>
                <p>&copy; David Dubois 2012-<?php echo date("Y") ?></p>
            </footer>
        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- Some javascript to make thigs beautiful -->
    <script src="../../js/dragon-download.js"></script>
  </body>
</html>
