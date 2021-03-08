<!DOCTYPE html>
<?php $page="dragon" ?>
<?php $drPage = "texture"?>

<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>Download DRAGON</title>
        <meta name="description" content="DRAGON official download page">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="David Dubois">
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../index.css" rel="stylesheet">
        <link href="../../JotunEngine.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <?php require_once "../../Header.php" ?>

            <?php require_once "dragon-base.php" ?>

            <h1>The Basics</h1>
            <p class="body-text">DRAGON implements physically based rendering (PBR). PBR can produce results that look nicer under varying lighting conditions and that look closer to the real world. This doesn't mean PBR produces photorealistic results, just that objects shaded with PBR look much more natural. This is because of a few things. First, the strength of specular highlights is inverely proportional to their size. This mimics the real world very nicely. Additionally, metals aren't lit by the same diffuse lighting everything else is. Rather, metals gain their lighting primarily from reflections. Finally, every surface becomes reflective at grazing angles. You can read <a href="http://filmicgames.com/archives/557">Everything has Fresnel</a> for an explaination of this (with pictures!).</p>
            <p class="body-text">So, how can you create a texture pack for DRAGON? It's rather straightforward, really. There are three textures you need for every block: albedo, normal, and specular.</p>
            <h2>Albedo</h2>
            <p class="body-text">The albedo texture tells DRAGON what percentage of incoming light gets returned. For non-metals, like dirt and wood, this is essentially the diffuse color. For metals, like gold, this is the specular color. However, albedo textures for DRAGON should be a bit brighter than albedo textures for non-PBS-based renderers. Additionally, the albedo texture shouldn't contain any lighting information.</p>
            <h2>Normal</h2>
            <p class="body-text">The normal texture is exactly what you'd expect.</p>
            <h2>Specular</h2>
            <p class="body-text">The specular texture contains the roughness, emission strength, and whether or not a surface is a metal. The roughness is just the object's specular power encoded with this formula: roughness = (square root( power ) + 1) / 10. Note that this allows for specular powers from 2 to 2048. This should be enough for every material in Minecraft. Roughness is the materials' specular power, but it is also used to determine the materials's specular strength and reflection strength. A roughness of less than 0.3 will cause reflections to not be calculated, saving valuable GPU time.</p>
            <p class="body-text">The emission strength is essentially a binary value. If the emission strength is less than 0.5, then the current pixel will have shadowing and reflections calculated for it, along with diffuse and specular lighting. If the emission strength is greater than 0.5, however, then the current pixel will have no diffuse or specular lighting, shadowing, or reflections calculated for it. Instead, the color stored in the albedo texture will be drawn to the screen with virtually no processing. Additionally, pixels with a higher emission strength will contribute more to bloom.</p>
            <p class="body-text">The third value, uneloquently called "metalness", determines how much a surface acts like a metal. Is the metalness value is 1, then the surface will have a specular color equal to its color in the albedo texture. Additionally, a metalness value of 1 means that the surface will receive no diffuse lighting, and will be lit only be specualr highlights and reflections. Conversely, a metalness value of 0 means that the surface will not act like a metal in any way, with a gray specular color and full diffuse lighting. A metalness value between 0 and 1 means that a surface is kind of a metal, but not completely. It should only be used for things like rust.</p>
            <p class="body-text">The three values of the specular texture are organized with the roughness in the red channel, the emission strength in the green channel, and the metalness in the blue channel. The alpha channel is unused.</p>
            <p class="body-text">For more information on these textures, you should read Sebastien Lagarde's blog posts on <a href="http://seblagarde.wordpress.com/2011/08/17/hello-world/">Physically Based Shading</a> and <a href="http://seblagarde.wordpress.com/2011/08/17/feeding-a-physical-based-lighting-mode/">Making textures for physically based shading</a>.
            <footer>
                <p>&copy; David Dubois 2012-<?php echo date("Y") ?></p>
            </footer>
        </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Some javascript to make thigs beautiful -->
    <script src="/js/dragon-download.js"></script>
  </body>
</html>
