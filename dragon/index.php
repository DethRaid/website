<!DOCTYPE html>
<?php $page = "dragon";?>

<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>DRAGON v2</title>
        <meta name="description" content="The first PBR Minecraft shaderpack">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="David Dubois">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <?php require_once "../Header.php" ?>

        <div class="container">
            <h1>DRAGON version 2</h1>
            <p><a href="../dl/DRAGON_v2_preview2.zip" class="btn btn-primary">Download the preview release of DRAGON v2!</a> <a href="v1/index-v1.php" class="btn btn-primary">Looking for Version 1?</a></p>

            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a href="../img/diff-mats_full.png">
                                <img class="img-responsive" src="../img/diff-mats_small.png" alt="A screenshot of modded Minecraft: Java Edition. Blocks of various materials - gold, obsidian, quartz, and stone - form a rectangular room with no ceiling. The back wall of the room is visibly reflected on the floor"/>
                            </a>
                        </div>
                        <div class="panel-footer">
                            Reflections on different materials
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="body-text">DethRaid's Awesome Graphics On Nitro (DRAGON) is a collection of shaders written in the OpenGL Shading Language (GLSL) that bring a physically-based rendering (PBR) pipeline to Minecraft. Because PBR uses different data than traditional shading pipelines DRAGON is accompanied by the Pulchra PBR resourcepack, created  by DeltaDotModded and Opptronica. All screenshots on this page use that resourcepack</p>
                    <p class="body-text">DRAGON was completely written by yours truly, David Dubois. I've been interested in graphics programming since I first learned how to code, and with DRAGON I have a way to show off what I know and create something beautiful for others to enjoy. Here's some of the new features in DRAGON version 2 (Click on the images for larger images):</p>
                </div>
                <div class="col-md-3"> </div>
            </div>

            <div class="row">
                <div class="col-md-3"> </div>
                <div class="col-md-6">
                    <h2>Improved PBR</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <p class="body-text">DRAGON version 1 was my first time working with PBR, so I got a few things wrong, such as using the wrong specular color for non-metals and incorrectly handling roughness. With DRAGON version 2, I've fixed these issues, creating a much more physically-accurate shader.</p>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a href="../img/PBR-improved-full.png">
                                <img class="img-responsive" src="../img/PBR-improved-small.png" alt="A screenshot of modded Minecraft: Java Edition. On the left is a wall of gold blocks, on the right a wall of quartz. Sunlight strems through to illuminate the dirt floor. The Fresnel lighting effect - an object reflects more light when that light hits it at a grazing angle - is illuminated on the quartz"/>
                            </a>
                        </div>
                        <div class="panel-footer">
                            Fresnel on quartz and gold
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3"> </div>
                <div class="col-md-6">
                    <h2>Improved Shadows</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a href="../img/shadows-improved-full.png">
                                <img class="img-responsive" src="../img/shadows-improved-small.png" alt="An arial view of a Minecraft world. An offscreen stone pillar casts a shadow onto the stone floor below. The shadow's penumbra is very small near the pillar, but widens as the shadow gets farther fromt he pillar"/>
                            </a>
                        </div>
                        <div class="panel-footer">
                            Contact-hardening shadows
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="body-text">In DRAGON version 1, I used a very large light size in an attempt to mimic the large sun in Minecraft. While technically accurate, this produced shadows that were very blurry and didn't look very good. For version 2, I've decreased the light size, producing much more pleasing shadows.</p>
                    <p>I've made a number of other improvements to the shadows as well. I've changed the shadow filtering algorithm to make the shadows appear less noisy. I've also optimized my shadow code, significantly increasing performance. Finally, I've made transparent blocks cast colored shadows, as seen in the image to the right.</p>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a href="../img/shadows-colored-full.png">
                                <img class="img-responsive" src="../img/shadows-colored-small.png" alt="A screenshot of modded Minecraft: Java Edition. Sunlight streams through offscreen colored glass to cast colored shadow on the floor. This is the same effect you get in the real world with colored glass"/>
                            </a>
                        </div>
                        <div class="panel-footer">
                            Colored shadows cast from colored glass
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3"> </div>
                <div class="col-md-6">
                    <h2>New Lighting Algorithms</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a href="../img/ibl-full.png">
                                <img class="img-responsive" src="../img/ibl-small.png" alt="Four images of Minecraft: Java Edition. The images show the same scene from the same viewpoint at different times of day. These images illustrate how the DRAGON shaderpack responds to changes in time of day. The differences in shadows and ambient lighting that you'd get in the real world are clearly visible on a large stone cube sitting on a gold floor"/>
                            </a>
                        </div>
                        <div class="panel-footer">
                            A quartz structure lit at different times of day
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="body-text">In DRAGON version 1, I used a simple Blinn-Phond shading model. For DRAGON version 2, I've transitioned to an image-based lighting model. I use the skybox to generate direct and ambient lighting values, which means that the ambient lighting is much more natural than if I simply used a constant color for ambient light. Additionally, getting direct light from the skybox means that the light color naturally becomes redder in the evenings and in the early morning without me having to evaluate complex formulas and blend between a set dawn and noon light color. Finally, image-based lighting means I can adhere to the software engineering principle of "Don't Repeat Yourself": I render the sky once, then use it in multiple stages of my shader. It's poetic, almost.</p>
                    <p class="body-text">Additionally, I've begun raytracing diffuse light from blocks. I send out multiple rays per fragment in random directions, and any that hit an emissive block like lava or glowstone increase the lighting on the fragment they came from. This allows the lighting from blocks to respond to normalmaps and allows for emissive blocks to cast shadows. The algorithm is still very much a work in progress, but you can see some preliminary results on the right.
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a href="../img/raytraced_light_full.png">
                                <img class="img-responsive" src="../img/raytraced_light_small.png" alt="An image of the game Minecraft: Java Edition. A stone block floats above an underground pool of lava. The light from the lava illuminates the walls and ceiling of the cave, except for the shadow cast by the floating block. This is not possible in vanilla Minecraft. It was accomplished with the DRAGON shaderpack's screen-space raytraced light"/>
                            </a>
                        </div>
                        <div class="panel-footer">
                            Raytraced diffuse light from a pool of lava
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3"> </div>
                <div class="col-md-6">
                    <h2>Realtime, Physically-Accurate Skybox</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <p class="body-text">DRAGON version 1 simply used Minecraft's sky. While that worked without any trouble, i knew I could do better. For DRAGON version 2, I render a realtime skybox by simulating rays of light travelling through the atmosphere. This means that the skybox produces deep blues during the day, vibrant reds and greens at sunset and sunrise, and dark blues at night. These three skyboxes are shown on the left.</p>
                    <p class="body-text">Rendering the sky onto a skybox, as opposed to simply rendering the sky directly onto the sky, lets me use the sky for direct lighting, ambient lighting, and reflections, as well as the sky. This saves rendering time when compared to other shaderpacks, which tend to render the sky once for the actual sky and once more for reflections.</p>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a href="../img/skybox-full.png">
                                <img class="img-responsive" src="../img/skybox-small.png" alt="Three images of just the sky, as rendered by the DRAGON shaderpack. The images illustrate the atmospheric scattering algorithms present in DRAGON. The sky is a nice bright blue at noon, darker with a slight amount of blue at sunset, and completely dark at night. In all three images the sky is brighter near the horizon and near the sun, just like in the real world"/>
                            </a>
                        </div>
                        <div class="panel-footer">
                            The skybox at different times of day
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
