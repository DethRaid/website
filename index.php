
<!DOCTYPE html>
<?php $page = "index";?>

<html>
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
            <div class="jumbotron">
                <p>Hello, and welcome to the homepage of David Dubois!</p>
                <p>Projects include the following:</p>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="content">
                        <h2>Nova Renderer</h2>
                        <p>The Nova Renderer is a complete replacement for Minecraft's builtin renderer. It's written in C++ and OpenGL 4.5 for increased speed and performance, using the latest and greatest in Approaching Zero Driver Overhead techniques. Nova will provide a platform for people to write custom shaderpacks, customizing the look of Minecraft.</p>
                    </div>
                    <p><a class="btn btn-default" href="https://github.com/NovaMods/nova-renderer" role="button">Github Page &raquo;</a></p>
                </div>

                <div class="col-md-4">
                    <div class="content">
                        <h2>Voynich Manuscript</h2>
                        <p>In 1912, a Polish book dealer named Wilfred Voynich purchased a mysterious book, which has since been dubbed the "Voynich Manuscript". It was written in an unknown script, with colorful pictures of plants and animals decorating its pages. For over a hundred years no one has been able to decipher this strange text, although many have tried. Now, with the help of deep learning algorithms, I'm making a feeble attempt to gleam some meaning from the manuscript's alien writing.</p>
                    </div>
                    <p><a class="btn btn-default" href="voynich/index.php" role="button">Learn Mode &raquo;</a></p>
                </div>

                <div class="col-md-4">
                    <div class="content">
                        <h2>DRAGON</h2>
                        <p>DRAGON is a collection of GLSL shaders aimed at the Minecraft GLSL Shaders Mode. The goal of DRAGON is to provide a physically-based lighting model for Minecraft, mostly because I enjoy exploring different lighting models. DRAGON currently features accurate reflections on all materials, varying-softness shadows, and filmic post-processing, and normalmapping.</p>
                    </div>
                    <p><a class="btn btn-default" href="dragon/index.php" role="button">Learn More &raquo;</a></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="content">
                        <h2>Jotun Engine</h2>
                        <p>The Jotun Engine is an OpenGL-based game engine written in C++. It began as an experiment in graphics programming and has grown to be so much more. Incorporating the Open Asset Import Library, GLSL version 130, and a dedication to quality, the Jotun Engine is far more powerful than I could possibly imagine.</p>
                        </div>
                    <p><a class="btn btn-default" href="JotunEngine.php" role="button">Learn More &raquo;</a></p>
                </div>

                <div class="col-md-4">
                    <div class="content">
                        <h2>Warfare 2525</h2>
                        <p>Warfare 2525 is a real-time strategy game dedicated to bringing the player's emotions into the gameplay. It began as a simple RTS but quickly grew into an experiment in storytelling. Although still in early development, Warfare 2525 demonstrates many of its core functinalities. Active development is currently on hold due to college. </p>
                    </div>
                    <p><a class="btn btn-default" href="warfare/index.php" role="button">Learn More &raquo;</a></p>
                </div>

                <div class="col-md-4">
                    <div class="content">
                        <h2>BIONICLE: Universe</h2>
                        <p>BIONICLE: Universe is a BIONICLE-themed Role Playing Game. Currently under development in Unity3D, BIONICLE: Universe will introduce a new generation of fans to the BIONICLE lore. The development team, a band of volunteer teenagers, is of questionable dedication, although a decent amount of progress has beem made on the game.</p>
                    </div>
                    <p><a class="btn btn-default" href="http://biouniverse.weebly.com/" role="button">Official Website &raquo;</a></p>
                </div>
            </div>

            <footer>
                <p>&copy; David Dubois 2012-<?php echo date("Y") ?></p>
            </footer>
        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
