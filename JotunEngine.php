<!DOCTYPE html>
<?php $page = "JotunEngineMain"?>

<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>Jotun Studios Main Site</title>
        <meta name="description" content="The person webpage of David Dubois">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="David Dubois">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <?php require_once "Header.php" ?>

        <div class="container">
            <h1>Development History</h1>
            <p class="body-text">The Jotun Engine was begun in spring 2013 as an end-of-year project for my AP Computer Science class. Although I had messed around with OpenGL before, this was the first time I tried to make an actual engine out of it. The engine was developed concurrently with a game entitled <a href="https://github.com/DethRaid/AGameWithGod">"A Game With God"</a>. After the game's completion, the Jotun Engine allowed one to render meshes using GLSL shaders. However, lighting was not yet implemented, nor was any sort of shadowing algorithm. At this point, the engine can be said to be in version 0.1.</p>
            <div class="panel panel-default pull-right">
                <div class="panel-body">
                    <img src="img/AGameWithGod.png" class="img-responsive" alt="A golden temple stands alone in a barren land. The ground is a mix of sand and grass, artificially blended together. The sky is pure black">
                </div>
            </div>
            <p>This game, and the engine built for it, allow the player to move about in a two-dimensional world, as collision with the terrain was not a feature of the game. When the game begins, the player is in a barren desert with only a temple in the center. As the player approaches the temple, a grass texture fades in and mountains rise up on either side of the player. This was meant to symbolize how a person is rather barren without a heavenly influence. The desert represented the player's soul while the temple represented the player's chosen deity. As the player approached their deity, their soul went from a batten wasteland to a lush mountain scape. Although the storytelling was hampered by a lack of time and technical knowledge, the game still serves to demonstrate a use a shaders and dynamic mesh deformation.</p>
            <p>During the summer of 2013, the Jotun Engine was upgraded to version 0.15. The version number change represents a re-organization of internal data into a much more coherent format. The engine created a list of loaded assets, then referenced those assets at runtime, sometimes referencing a single asset many times. This was done to save memory.</p>
             <div class="panel panel-default pull-left">
                <div class="panel-body">
                    <img src="img/GameJam2013.png" class="img-responsive" alt="A grassy terrain stretches out in the distance. A few distant characters are walking at a medium range. On the bottom are a series of buttons depicting different missiles the player can send out">
                </div>
            </div>
            <p>The Jotun Engine 0.15 reached its pinnacle during a game jam hosted by the Rochester Institute of Technology's Computer Science House in the fall of 2013. During that game jam, I developed a game where one sent missiles from the sky into an ever-growing swarm of suited enemies. This game can be found <a href="https://github.com/DethRaid/GameJam2013">here</a>. The engine included uses the asset lists mentioned above, in addition to better scene management, sound playback through a single audio channel (hacked in last-minute), and basic cutscene functionality. However, realtime lighting was still absent, and the Jotun Engine still relied on the OpenGL 1.1 API.</p>
             <div class="panel panel-default pull-right">
                <div class="panel-body">
                    <img src="img/PCSSEx.png" class="img-responsive" alt="A screenshot of a test scene featuring a cylinder, a sphere, a back wall, and a floor. Shadows cast onto the floor, with a variable-sized penumbras">
                </div>
            </div>
            <p>Enter the Jotun Engine 0.2. This version of the engine, completely re-written, included a number of features its predecessors could never hope to have. It used the OpenGL 2.1 API, with fun features such as Vertex Buffer Objects for improved performance. It supported real-time lighting from a single colored directional light, normal mapping, shadow mapping with either a point filter, a percentage-closer filter, or a <a href="http://developer.download.nvidia.com/shaderlibrary/docs/shadow_PCSS.pdf">varying-width percentage closer filter</a>. It also had a rudamentary snow system, inspired by The Elder Scrolls V: Skyrim.</p>
            <p>The Jotun Engine also supported of materials. A material was defined as a shader and the state of the shader's variables. A material provides a simple way for an artist to manage the look of an object.</p>
            <h2>Current Status</h2>
            <p>During the conversion from a single global scene to individual scenes, I realized that a lot of redesign work was needed to accommidate separate scenes. Additionally, I ditched my inheritance-based architecture in favor of an <a href=http://t-machine.org/index.php/2007/11/11/entity-systems-are-the-future-of-mmog-development-part-2/>Entity-Component-System</a> architecture. This decision was made because ECS allows the Jotun Engine to be highly extensible and maintainable, as well as allowing for a great deal of flexibility when creating games. The Jotun Engine will feature an optimized OpenGL 4.5 renderer, a scene editor, a shader build system, a fully-featured physics system, a basic AI framework, Lua scripting, and many things more. I am currently working on the entity manager, with the renderer to soon follow.</p>

            <footer class="warfare-content">
                <p>&copy; David Dubois 2012-<?php echo date("Y") ?></p>
            </footer>
        </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
