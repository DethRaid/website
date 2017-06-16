<?php
$indexClass = "inactive";
$dragonClass = "inactive";
$engineClass = "inactive";
$warfareClass = "inactive";
$aboutClass = "inactive";

if( $page == "index" ) {
	$indexClass = "active";
} else if($page == "dragon") {
	$dragonClass = "active";
} else if( $page == "JotunEngineMain" ) {
	$engineClass = "active";
} else if( $page == "Warfare2525Main" ) {
	$warfareClass = "active";
} else if($page == "about") {
  $aboutClass = "active";
}
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand <?=$indexClass?>" href="/">Jotun Studios</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li><a href="https://github.com/NovaMods/nova-renderer">Nova Renderer</a></li>
        <li class="<?=$dragonClass?>"><a href="/dragon">DRAGON Shaders <span class="sr-only">(current)</span></a></li>
        <li class="<?=$engineClass?>"><a href="/JotunEngine.php">Jotun Engine</a></li>
        <li class="<?=$warfareClass?>"><a href="/warfare">Warfare 2525</a></li>
        <li class="<?=$aboutClass?>"><a href="/about.php">About</a></li>
      </ul>
    </div>
  </div>
</nav>
