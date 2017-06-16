function init() {
    for( var i = 0; i < 5; i++ ) {
        document.getElementById( (i + 1).toString() ).style.visibility = 'hidden';
    }
}

images = new Array();
images[0] = '<img src="../../img/dragon_v1_low.png" class="img-responsive" id="1">';
images[1] = '<img src="../../img/dragon_v1_med.png" class="img-responsive" id="2">';
images[2] = '<img src="../../img/dragon_v1_hig.png" class="img-responsive" id="3">';
images[3] = '<img src="../../img/dragon_v1_ult.png" class="img-responsive" id="4">';
images[4] = '<img src="../../img/dragon_v1_ext.png" class="img-responsive" id="5">';
images[5] = '';


function setAdditionalText( whatAbout ) {
    info = "";
    if( whatAbout == 1 ) {
        //low
        info = "<h3>Low</h3><ul><li>Hard shadows</li><li>No reflections</li><li>No bloom</li><li>No motion blur</li><li>~50 fps on a Nvidia GTX 660</li></ul>"
    } else if( whatAbout == 2 ) {
        //medium
        info = "<h3>Medium</h3><ul><li>Soft shadows</li><li>One reflection ray per pixel</li><li>Bloom</li><li>Motion blur</li><li>~35 fps on a Nvidia GTX 660</li></ul>";
     } else if( whatAbout == 3 ) {
         //high
         info = "<h3>High</h3><ul><li>Variable-softness shadows</li><li>Two reflection rays per pixel</li><li>More accurate reflections</li><li>Bloom</li><li>Motion blur</li><li>~30 fps on a Nvidia GTX 660</li></ul>";
     } else if( whatAbout == 4 ) {
         //ultra
         info = "<h3>Ultra</h3><ul><li>Variable-softness shadows</li><li>Four reflection rays per pixel</li><li>Even more accurate reflections</li><li>Bloom</li><Motion blur</li><li>~10 fps on a Nvidia GTX 660</li></ul>";
     } else if( whatAbout == 5 ) {
         //extreme
         info = "<h3>Extreme</h3><ul><li>Variable-softness shadows</li><li>Sixteen reflection rays per pixel</li><li>The most accurate reflections</li><li>Bloom</li><li>Motion blur</li><li>~1 fps on a Nvidia GTX 660</li></ul>";
     } else if( whatAbout == 6 ) {
         //texture pack
         info = "<h3>Companion Texture Pack</h3><p>Provides additional data for DRAGON's physically-based shading pipeline. Be sure this is at the top of your texture pack load order, and make sure you have only 16x16 texture packs selected.</p>";
     }
    document.getElementById( "info" ).innerHTML = info;
    document.getElementById( 'img' ).innerHTML = images[whatAbout - 1];
}
