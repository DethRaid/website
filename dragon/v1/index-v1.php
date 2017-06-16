<!DOCTYPE html>
<?php $page = "dragon"?>
<?php $drPage = "index"?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Jotun Studios Main Site</title>
        <meta name="description" content="The person webpage of David Dubois">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="David Dubois">
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../index.css" rel="stylesheet">
        <link href="../../JotunEngine.css" rel="stylesheet">
    </head>

    <body>
        <?php require_once "../../Header.php" ?>
        <?php require_once "dragon-base.php" ?>

        <div class="container">
            <h1>DethRaid's Awesome Graphics On Nitro</h1>

            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <h2>Overview</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <p class="body-text">DethRaid's Awesome Graphics On Nitro (DRAGON) is a collection of shaders written in the OpenGL Shading Language that attempt to bring a physically-based shading model to Minecraft. Due to the differences between traditional shading and physically-based shading, DRAGON is accompanied by a custom set of textures to provide the additional information needed. DRAGON focuses on a number of areas to provide physically-based shading.</p>
                    <p>DRAGON has been completely written by yours truly, David Dubois. I've been interested in graphics programming since I began programming, and with DRAGON I've finally found an achievable way to show off all I know, and to create something beautiful for others to enjoy.</p>
                    <p>Note: Click on the images for larger versions</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <h2>Variable-Softness Shadows</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a href="../../img/PCSS-DRAGON.png">
                                <img src="../../img/PCSS-DRAGON.png" class="img-responsive">
                            </a>
                        </div>
                        <div class="panel-footer">
                            Variable-softness shadows
                        </div>
                    </div>
                </div>
                <div class="col-md-6"
                    <p class="body-text">In 2007, nVidia developed the Percentage-Closer Soft Shadows (PCSS) algorithm. This algorithm uses a conventional shadow map to provide more realistic shadows than those seen in modern video games. With conventional shadow mapping, a shadow is given a constant-size blur. This is wrong. Shadows should be nice and hard near the shadow caster, and get softer and softer as one moves away from the shadow caster. PCSS solves this problem. Unfortunately, this algorithm hasn't seen widespread industry adoption. Whether professionals are unfamiliar with the algorithm or simply pass it by in favor of yet more lens flares, I cannot say. However, DRAGON uses this algorithm to great effect, as seen in the image on right.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <h2>Shiny Metals</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <p class="body-text">In the real world, metals are lit solely by reflections, since light isn't scattered by a metal surface. DRAGON simulates this. The current version of DRAGON features perfectly shiny metals lit by specular highlights, a wonderful approximation for the reflection of a light. DRAGON also uses an optimized screen-space reflection algorithm to simulate the first bounce of a light ray, which is a rather good approximation of reflections from non-emissive objects. Additionally, real-world metals reflect different wavelengths of light at different amplitudes, whereas non-metals reflect different wavelengths of light at similar amplitudes, leading to whiter reflections. This can be seen in the image to the left, showing gold and lapiz lazuli with vastly different specular highlights.</p>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a href="../../img/ShinyMetal.png">
                                <img src="../../img/ShinyMetal.png" class="img-responsive">
                            </a>
                        </div>
                        <div class="panel-footer">
                            Specular color of gold vs <span title="best gem">lapis lazuli</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <h2>Rough Surfaces</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a href="../../img/diff-mats.png">
                                <img src="../../img/diff-mats.png" class="img-responsive">
                            </a>
                        </div>
                        <div class="panel-footer">
                            Comparison of reflections on quartz, obsidian, and gold
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="body-text">Metals are not the only reflective surfaces in the world. Many other objects produce reflections, and many of them produce rough reflections. This, too, is calculated by DRAGON. Each different material has a smoothnes value associated with it which represents how many sub-pixel microfacets of a surface are oriented in the direction of the surface's normal. If this number is less than one, DRAGON adds a random offset to a surface's normal before calculating the reflection. This produces reflections of varying sharpness, as shown in the image to the right. Additionally, DRAGON's reflection algorithm runs so quickly that multiple reflection rays can be calculated per pixel. On a nVidia GeForce GTX 660, four reflection rays can be simulated while maintaining a framerate of 20 fps. This produces much smoother reflections, as one would expect to find in real life.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <h2>Fresnel</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <p class="body-text">Fresnel is the term used to refer to the phonomenon where a material appears less reflective when viewed at a direct angle, but appears more reflective when viewed at a grazing angle. This is a phonomenon all materials exhibit, although the angle where reflections become noticable is incredibly small for some surfaces. DRAGON is well aware of fresnel and is able to effectively simulate the effect. The image to the top left shows a number of surfaces when viewed from above, and the bottom left image shows those same surfaces when viewed from a grazing angle. You can clearly see that both the black obsidian and the less reflective gray stone both exhibit much stronger reflections when viewed at a grazing angle.
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a href="../../img/fresnel0.png">
                                <img src="../../img/fresnel0.png" class="img-responsive">
                            </a>
                            <a href="../../img/fresnel1.png">
                                <img src="../../img/fresnel1.png" class="img-responsive">
                            </a>
                        </div>
                        <div class="panel-footer">
                            Fresnel on smooth stone
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <h2>Water</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a href="../../img/water.png">
                                <img src="../../img/water.png" class="img-responsive">
                            </a>
                        </div>
                        <div class="panel-footer">
                            Reflections on water
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="body-text">DRAGON incorporates the water displacement algorithm from <a href=http://www.minecraftforum.net/forums/mapping-and-modding/minecraft-mods/1293898-chocapic13s-shaders>chocapic13's shaderpack</a>. I don't have a lot to say about it, other than that I expect to be fiddling with it a great deal for Version 2 (Note: Version 2 now uses a Gerstner wave simulation).
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <h2>Additional Images</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="../../img/ores.png" class="img-responsive">
                        </div>
                        <div class="panel-footer">
                            This image shows many of the various ores found in Minecraft. One can see how the metallic gold and iron both show a specular color that is the color of the material itself, while the non-metallic diamond at the bottom shows a pure white specular color.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="../../img/trees.png" class="img-responsive">
                        </div>
                        <div class="panel-footer">
                            This image shows a forest in Minecraft, rendered with DRAGON. There are no terribly interesting physical phonomena in this image, I just think it looks nice.
                        </div>
                    </div>
                </div>
            </div>

            <footer class="warfare-content">
                <p>&copy; David Dubois 2012-<?php echo date("Y") ?></p>
            </footer>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
