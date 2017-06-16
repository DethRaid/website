// **********   TERRAIN   ********** //
function Terrain() {
    this.vbo = this.initVBO();
    this.heightMap = this.genHeightmap();
    this.normalMap = this.genNormalmap();
}

Terrain.prototype.initVBO = function() {
    var worldUnitsPerTile = 1.0;
    var vertsPerTileSide = 2;
    var sideLength = 100;

    var terrainBuffer = gl.createBuffer();
    gl.bindBuffer( gl.ARRAY_BUFFER, terrainBuffer );
    var data = [];
    for( var i = 0; i < sideLength * vertsPerTileSide; i++ ) {
        for( var j = 0; j < sideLength * vertsPerTileSide; j++ ) {
            data.push( j * worldUnitsPerTile );
            data.push( 0 );
            data.push( i * worldUnitsPerTile );
            data.push( j % 2 );
            data.push( i % 2 );
        }
    }

    gl.bufferData( gl.ARRAY_BUFFER, new Float32Array( data ), gl.STATIC_DRAW );

    terrainBuffer.indices = gl.createBuffer();
    gl.bindBuffer( gl.ELEMENT_ARRAY_BUFFER, terrainBuffer.indices );
    var terrainIndices = [];
    for( var i = 0; i < sideLength * vertsPerTileSide - 1; i++ ) {
        for( var j = 0; j < sideLength * vertsPerTileSide; j++ ) {
            terrainIndices.push( j + i * sideLength * vertsPerSide );
            terrainIndices.push( j + (i + 1) * sideLength * vertsPerSide );
        }
    }
}

// **********   APPLICATION   ********** //
function handleKeys() {
    if( pressedKeys[87] ) { //w
        playerX += moveSpeed * Math.sin( yRot );
        playerY += moveSpeed * Math.cos( yRot );
    } else if( pressedKeys[83] ) {  //S
        playerX -= moveSpeed * Math.sin( yRot );
        playerY -= moveSpeed * Math.cos( yRot );
    }

    if( pressedKeys[68] ) { //d
        playerX += moveSpeed * Math.cos( yRot );
        playerZ += moveSpeed * Math.sin( yRot );
    } else if( pressedKeys[65] ) {  //a
        playerX -= moveSpeed * Math.cos( yRot );
        playerZ -= moveSpeed * Math.sin( yRot );
    }
}

function drawScene() {
    gl.clear( gl.COLOR_BUFFER_BIT, gl.DEPTH_BUFFER_BIT );

    mat4.perspective( projection, 60, gl.viewportWidth / gl.viewportHeight, 0.1, 100.0 );

    mat4.identity( modelview );
    var height = getTerrainHeight( playerX, playerZ );
    mat4.translate( modelview, modelview, [playerX, height, playerZ] );
    mat4.rotateY( modelview, modelview, yRot );

    terrain.render( modelview, projection );
}

function tick() {
    requestAnimFrame( tick );
    handleKeys();
    drawScene();
}

function webGLStart() {
    var canvas = document.getElementbyID( "screen" );
    initGL( canvas );
    terrain = new Terrain();

    gl.clearColor( 0.529, 0.808, 0.980, 1.0 );

    document.onkeydown = handleKeyDown;
    document.onkeyup = handleKeyUp;
    document.onmousemove = handlemouseMove;

    tick();
}

