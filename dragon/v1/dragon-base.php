<?php
$indexClass = "inactive";
$overviewClass = "inactive";
$downloadClass = "inactive";
$textureClass = "inactive";

if( $drPage == "index" ) {
    $indexClass = "active";
} else if($drPage = "overview") {
    $overviewClass = "active";
} else if( $drPage == "download" ) {
    $downloadClass = "active";
} else if( $drPage == "texture" ) {
    $textureClass = "active";
}
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand <?=$indexClass?>" href="/dragon">DRAGON</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="<?=$overviewClass?>"><a href="/dragon/v1/index-v1.php">Version 1</a></li>
        <li class="<?=$downloadClass?>"><a href="/dragon/v1/downloads.php">V1 Downloads</a></li>
        <li class="<?=$textureClass?>"><a href="/dragon/v1/texpacks.php">V1 Texturepack Information</a></li>
      </ul>
    </div>
  </div>
</nav>
