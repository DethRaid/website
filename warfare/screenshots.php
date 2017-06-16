<!DOCTYPE html>

<?php $page="Warfare2525Main";?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Jotun Studios Main Site</title>
    <meta name="description" content="The person webpage of David Dubois">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="David Dubois">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../index.css" rel="stylesheet">
    <link href="../JotunEngine.css" rel="stylesheet">
  </head>
    
  <body>
    <? require_once "../Header.php" ?>
     
      
    <div class="padding warfare-content center">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="../img/Skimmer.png">
            <p>
              The skimmer is a small, fast unit designed for easily moving to and from a target location.
            </p>
          </div>

          <div class="col-md-4">
            <img src="../img/GaussCannon.png">
            <p>
              The Gauss Cannon is a piece of mobile artillery, sacrificing firepower for movement speed.
            </p>
          </div>

          <div class="col-md-4">
            <img src="../img/RustReaper.png">
            <p>
              The Rust Reaper is a utility vehicle capable of extracting valuable minerals from the Martian
              surfare.
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <img src="../img/MainBase.png">
            <p>
              The Main Base serves as both headquarters of the war effort and a refinery for the materials
              extracted by Rust Reapers.
            </p>
          </div>
        
          <div class="col-md-4">
            <img src="../img/HydroFarm.png">
            <p>
              The Hydroponic Farm provides food for the inhabitants of Mars.
            </p>
          </div>

          <div class="col-md-4">
            <img src="../img/Hangar.png">
            <p>
              The Hangar is where the machines of war are assembled.
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>

          <div class="col-md-4">
            <img src="../img/In-Game.png">
            <p>
              This in-game screenshot shows off the GUI of a selected unit. You can see the white ring around the
              unit, as well as the unit's name, speed, damage, and whether or not the unit moves on the ground or
              in the air.
            </p>
          </div>
        </div>
      </div>
    </div>
        
    <footer class="warfare-content">
        <p>&copy; David Dubois 2012-<?php echo date("Y") ?></p>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
