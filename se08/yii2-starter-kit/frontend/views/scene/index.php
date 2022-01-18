<?php

/**
 * @var yii\web\View $this
 */
$this->title = Yii::$app->name;

use frontend\assets\CustomAsset;

$customPath = CustomAsset::register($this);
?>

    <noscript>
        <div class="message error-message absolute-center">
            Explore this interactive 3D walkthrough on desktop and mobile
            devices or with a Virtual Reality headset. To start the virtual
            tour just click the play button. You don't need to install any
            application, but you need to enable JavaScript in your browser.
        </div>
    </noscript>

    <div id="cover-image">
    </div>

    <!-- tabindex allows to give the canvas keyboard focus with a
       focus() function -->
    <canvas id="walk-canvas" tabindex="-1" style="max-height: 1250px">
    </canvas>

    <div id="info-message" class="message info-message" style="display: none">
    </div>

    <div id="error-message" class="message error-message absolute-center" style="display: none">
    </div>

    <!-- Error messages in old IEs can not be shown from JS, because old
     IEs fail to parse new JS constructs -->
    <!--[if lte IE 9]>
<div class="message error-message absolute-center">
    Old versions of the Internet Explorer browser do not support
    <a href="https://khronos.org/webgl/wiki/Getting_a_WebGL_Implementation"
       target="_blank">
        WebGL</a>.
    <br/>
    <a href="https://get.webgl.org/" target="_blank">
        Find out how to get it.</a>
</div>
<![endif]-->

    <div id="info-bar" class="ui-top ui-left">
        <div id="info-bar-slide">
            <a id="author-logo" class="info-item ui-panel" style="display: none" target="_blank">
                <img>
            </a>
            <!-- NS = no spaces
   -->
            <div id="info-text" class="info-item ui-panel" style="display: none">
                <div>
                    <div id="info-title"></div>
                </div>
                <div>
                    <a id="info-author" target="_blank"></a>
                </div>
            </div>
        </div>
    </div>

    <div id="menu-bar" class="ui-bottom ui-right">
        <div id="menu-bar-slide">
            <div id="menu-bar-folder" class="menu-item ui-hoverable ui-panel" style="display: none">
                <img src="<?php echo $customPath->baseUrl; ?>/webwalk/img/fold-horizontal.svg">
            </div>
            <!-- NS
   -->
            <div id="menu-bar-content">
                <div id="menu-buttons" style="display: none">
                    <div id="help-button" class="menu-button menu-item ui-hoverable ui-panel">
                        ?
                    </div>
                    <!-- NS
       -->
                    <div id="tour-button" class="menu-button menu-item ui-hoverable ui-panel" style="display: none">
                        <img src="<?php echo $customPath->baseUrl; ?>/webwalk/img/tour.svg">
                    </div>
                    <!-- NS
       -->
                    <div id="vr-button" class="vr-specific menu-button menu-item ui-hoverable ui-panel" style="display: none">
                        VR
                    </div>
                    <!-- NS
       -->
                    <div id="fullscreen-button" class="fullscreen-specific menu-button menu-item ui-hoverable
                      ui-panel" style="display: none">
                        <img src="<?php echo $customPath->baseUrl; ?>/webwalk/img/fullscreen.svg">
                    </div>
                </div>
                <!-- NS
     --><a id="engine-logo" class="menu-item ui-panel" style="display: none" href="https://www.shapespark.com" target="_blank">
                    <div id="engine-logo-text" style="display: none"></div>
                    <!-- NS
       --><img src="<?php echo $customPath->baseUrl; ?>/webwalk/img/shapespark-logo.svg">
                </a>
            </div>
        </div>
    </div>

    <div id="view-list" class="ui-top ui-right" style="display: none">
        <div id="view-list-slide">
            <div id="view-list-items">
                <div class="view ui-hoverable ui-panel"></div>
            </div>
            <div id="view-list-folder" class="ui-hoverable ui-panel">
                <img src="<?php echo $customPath->baseUrl; ?>/webwalk/img/fold-vertical.svg">
            </div>
        </div>
    </div>

    <img id="play-button" class="absolute-center" src="<?php echo $customPath->baseUrl; ?>/webwalk/img/play.svg" style="display: none; position: fixed !important;">

    <!-- When the help is to be shown automatically during load (#help
     hash), it is displayed above the primary progress indicator.
     help-and-primary-progress is a wrapper for these two elements that
     helps to lay them out consistently. -->
    <div id="help-and-primary-progress" class="absolute-center" style="position: fixed !important;">

        <div id="desktop-help" class="help ui-panel" style="display: none">
            <img id="close-desktop-help-button" class="close-help-button ui-close-hoverable" src="<?php echo $customPath->baseUrl; ?>/webwalk/img/close.svg">
            <div id="desktop-help-switch">
                <div data-strings="help.basic" id="basic-desktop-help-option">
                </div>
                <!-- NS = no spaces
     -->
                <div data-strings="help.advanced" id="advanced-desktop-help-option">
                </div>
            </div>

            <div id="desktop-help-content">

                <div id="desktop-basic-help" class="help-columns" style="display: none">
                    <div class="help-column3">
                        <h1 data-strings="help.mouse"></h1>
                        <img src="<?php echo $customPath->baseUrl; ?>/webwalk/img/mouse-controls.svg">
                    </div>
                    <!-- NS
       -->
                    <div class="help-column3-sep"></div>
                    <!-- NS
       -->
                    <div class="help-column3">
                        <h1 data-strings="help.keyboard"></h1>
                        <img src="<?php echo $customPath->baseUrl; ?>/webwalk/img/keyboard-controls.svg">
                    </div>
                    <!-- NS
       -->
                    <div class="help-column3-sep"></div>
                    <!-- NS
       -->
                    <div class="help-column3">
                        <h1 data-strings="help.vrTeleport"></h1>
                        <img src="<?php echo $customPath->baseUrl; ?>/webwalk/img/vr-controls.svg">
                    </div>
                </div>

                <div id="advanced-desktop-help" style="display: none">
                    <h1 data-strings="help.mouse"></h1>
                    <div>
                        <div class="help-how">
                            <span data-strings="help.holdThe"></span>
                            <strong data-strings="help.leftButton"></strong>
                        </div>
                        <!-- NS
         -->
                        <div data-strings="help.lookAround" class="help-what"></div>
                    </div>
                    <div>
                        <div class="help-how">
                            <span data-strings="help.clickThe"></span>
                            <strong data-strings="help.leftButton"></strong>
                        </div>
                        <!-- NS
         -->
                        <div data-strings="help.walkToTheClickedPlace" class="viewer-specific help-what">
                        </div>
                        <!-- NS
         -->
                        <div data-strings="help.selectMaterialLightObject" class="editor-specific help-what" style="display: none">
                        </div>
                    </div>
                    <div>
                        <div class="help-how"><strong data-strings="help.scroll"></strong></div>
                        <!-- NS
         -->
                        <div data-strings="help.walkStraight" class="help-what"></div>
                    </div>
                    <h1 data-strings="help.keyboard"></h1>
                    <div>
                        <div class="help-how">
                            <div>
                                <div class="help-key-placeholder"></div>
                                <!-- NS
             -->
                                <div class="help-key">&#8593;</div>
                                <!-- NS
             -->
                                <div class="help-key-placeholder"></div>
                            </div>
                            <div>
                                <div class="help-key">&#8592;</div>
                                <!-- NS
             -->
                                <div class="help-key">&#8595;</div>
                                <!-- NS
             -->
                                <div class="help-key">&#8594;</div>
                            </div>
                        </div>
                        <!-- NS
         -->
                        <div data-strings="help.walkStraightAndLookAround" class="help-what">
                        </div>
                    </div>
                    <div>
                        <div class="help-how">
                            <div>
                                <div class="help-key-placeholder"></div>
                                <!-- NS
             -->
                                <div class="help-key">W</div>
                                <!-- NS
             -->
                                <div class="help-key-placeholder"></div>
                            </div>
                            <div>
                                <div class="help-key">A</div>
                                <!-- NS
             -->
                                <div class="help-key">S</div>
                                <!-- NS
             -->
                                <div class="help-key">D</div>
                            </div>
                        </div>
                        <!-- NS
         -->
                        <div data-strings="help.walkStraightAndSideways" class="help-what"></div>
                    </div>
                    <div>
                        <div class="help-how">
                            <div class="help-key">PgUp</div>
                            <div class="help-key">PgDn</div>
                            <!-- NS
           -->
                            <div class="help-key-sep"></div>
                            <!-- NS
           -->
                            <div class="help-key">E</div>
                            <div class="help-key">Q</div>
                        </div>
                        <!-- NS
         -->
                        <div data-strings="help.changeHeight" class="help-what"></div>
                    </div>
                    <div>
                        <div class="help-how">
                            <div class="help-key">1</div>
                            &#8211;
                            <div class="help-key">9</div>
                            <!-- NS
           -->
                            <div class="help-key-sep"></div>
                            <!-- NS
           -->
                            <div class="help-key">[</div>
                            <div class="help-key">]</div>
                        </div>
                        <!-- NS
       -->
                        <div data-strings="help.switchView" class="help-what"></div>
                    </div>
                    <div class="help-how">
                        <div class="help-key">P</div>
                    </div>
                    <!-- NS
       -->
                    <div data-strings="help.screenshot" class="help-what"></div>
                    <div class="help-how">
                        <div class="help-key">M</div>
                    </div>
                    <!-- NS
       -->
                    <div data-strings="help.hideShowMenu" class="help-what"></div>
                    <div class="help-how">
                        <div class="help-key">L</div>
                    </div>
                    <!-- NS
       -->
                    <div data-strings="help.hideShowMousePointer" class="help-what"></div>

                    <h1 data-strings="help.vrMode"></h1>
                    <div>
                        <div class="help-how">
                            <div>
                                <strong data-strings="help.gaze"></strong>
                                <span data-strings="help.atAFixedPlace"></span>
                            </div>
                            <div data-strings="help.or"></div>
                            <div>
                                <span data-strings="help.clickA"></span>
                                <strong data-strings="help.controllerButton"></strong>
                            </div>
                        </div>
                        <!-- NS
         -->
                        <div data-strings="help.teleport" class="help-what"></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="mobile-help" class="help ui-panel" style="display: none">
            <img id="close-mobile-help-button" class="close-help-button ui-close-hoverable" src="<?php echo $customPath->baseUrl; ?>/webwalk/img/close.svg">
            <div class="help-columns">
                <div class="help-column2">
                    <h1 data-strings="help.touch"></h1>
                    <img src="<?php echo $customPath->baseUrl; ?>/webwalk/img/touch-controls.svg">
                </div>
                <!-- NS
     -->
                <div class="help-column2-sep"></div>
                <!-- NS
     -->
                <div class="navigation-help-column2">
                    <h1 data-strings="help.vrTeleport"></h1>
                    <img src="<?php echo $customPath->baseUrl; ?>/webwalk/img/vr-controls.svg">
                </div>
            </div>
        </div>

        <svg id="primary-progress" viewBox="-58 -58 116 116" style="display: none">
            <circle cx="0" cy="0" r="50" stroke-width="14">
            </circle>
            <circle id="primary-progress-done" cx="0" cy="0" r="50" stroke-width="8" stroke-dasharray="315.159" stroke-dashoffset="314.159" transform="rotate(-90)">
            </circle>
        </svg>

    </div>

    <div id="secondary-progress" style="display: none">
        <div id="secondary-progress-done"></div>
    </div>

    <div id="ext-html-label" class="ext-popup ui-top ui-left ext-html-label-animated" style="display: none">
        <div id="ext-html-label-content" class="ext-popup-content"></div>
        <!-- NS
 -->
        <div class="ext-popup-close-button-panel ui-close-hoverable">
            <div id="ext-html-label-close" class="ext-popup-close-button"></div>
        </div>
    </div>

    <div id="ext-meeting-status" class="ext-popup ui-top ui-left" style="display: none">
        <div id="ext-meeting-status-content" class="ext-popup-content">
            <strong>Here:</strong>
            <ul id="ext-meeting-who-list" class="ext-meeting-status-list">
            </ul>
            <div>
                <button id="ext-meeting-mic-toggle" class="ext-meeting-button ext-meeting-button-highlight">
                    <span class="fa-microphone" style="display: none"></span>
                    <span class="fa-microphone-slash"></span>
                </button>
                <button id="ext-meeting-camera-toggle" class="ext-meeting-button ext-meeting-button-highlight">
                    <span class="fa-video" style="display: none"></span>
                    <span class="fa-video-slash"></span>
                </button>
                <button id="ext-meeting-pointer" class="ext-meeting-button">
                    <span class="fa-hand-pointer"></span>
                </button>
            </div>
            <div id="ext-meeting-notes-preview" style="display: none">
                <strong>Notes:</strong>
                <ul id="ext-meeting-note-list" class="ext-meeting-list">
                </ul>
                <button id="ext-meeting-add-note" class="ext-meeting-button">
                    Add note
                </button>
            </div>
            <div id="ext-meeting-status-footer">
                <button id="ext-meeting-leave" class="ext-meeting-button ext-meeting-button-highlight">
                    Leave meeting
                </button>
            </div>
        </div>
    </div>
    <div id="ext-meeting-camera-preview" style="display: none"></div>
    <script type="text/javascript">
        window.onload = function() {
            const config = new WALK.SceneLoadConfig();
            config.assetsUrl = '<?php echo $customPath->baseUrl; ?>/';
            WALK.init(config);
        }
    </script>
    <script src="<?php echo $customPath->baseUrl; ?>/webwalk/walk.min.js" type="text/javascript"></script>
    <style>
#picker {
   position: absolute;
   top: 0px;
   width: 256px;
   z-index: 10;
}

#picker > img, #picker > video {
  width: 64px;
  height: 64px;
  margin: 8px;
}

</style>
<div id="picker">
<!-- DOOR -->
<img src="<?php echo $customPath->baseUrl; ?>/custom/Door/1.jpg"
    id="door1" crossorigin="anonymous">
<img src="<?php echo $customPath->baseUrl; ?>/custom/Door/2.jpg"
    id="door2" crossorigin="anonymous">
<img src="<?php echo $customPath->baseUrl; ?>/custom/Door/3.jpg"
    id="door3" crossorigin="anonymous">

<!-- FLOOR -->
<img src="<?php echo $customPath->baseUrl; ?>/custom/Floor/1.jpg"
    id="floor1" crossorigin="anonymous">
<img src="<?php echo $customPath->baseUrl; ?>/custom/Floor/2.jpg"
    id="floor2" crossorigin="anonymous">
<img src="<?php echo $customPath->baseUrl; ?>/custom/Floor/3.jpg"
    id="floor3" crossorigin="anonymous">

<!-- REM -->
<img src="<?php echo $customPath->baseUrl; ?>/custom/Rem/1.jpg"
    id="rem1" crossorigin="anonymous">
<img src="<?php echo $customPath->baseUrl; ?>/custom/Rem/2.jpg"
    id="rem2" crossorigin="anonymous">
<img src="<?php echo $customPath->baseUrl; ?>/custom/Rem/3.jpg"
    id="rem3" crossorigin="anonymous">

<!-- Wall -->
<img src="<?php echo $customPath->baseUrl; ?>/custom/Wall/1.jpg"
    id="wall1" crossorigin="anonymous">
<img src="<?php echo $customPath->baseUrl; ?>/custom/Wall/2.jpg"
    id="wall2" crossorigin="anonymous">
<img src="<?php echo $customPath->baseUrl; ?>/custom/Wall/3.jpg"
    id="wall3" crossorigin="anonymous">

</div>
<script>
  var viewer = WALK.getViewer();
  viewer.setMaterialEditable('[0052_FloralWhite]');
  // Alternatively: viewer.setAllMaterialsEditable();
  var textureElementIds = ['door1', 'door2', 'door3'];
  textureElementIds.forEach(function(textureElementId) {
    var textureElement = document.getElementById(textureElementId);
    var texture = null;
    textureElement.addEventListener('click', function() {
      // Create the texture only the first time the texture element is clicked
      // and reuse it for subsequent clicks.
      if (texture === null) {
        if (textureElement instanceof HTMLVideoElement) {
          // textureElement is <video>
          texture = viewer.createTextureFromHtmlVideo(textureElement);
        } else {
          // textureElement is <img>
          texture = viewer.createTextureFromHtmlImage(textureElement);
        }
      }
      var material = viewer.findMaterial('[0052_FloralWhite]');
      material.baseColorTexture = texture;
      // Force the frame to be renderer, otherwise the changed texture
      // will be visible only after the camera is moved.
      viewer.requestFrame();
    });
  });
</script>

<script>
  var viewer = WALK.getViewer();
  viewer.setMaterialEditable('tuong');
  // Alternatively: viewer.setAllMaterialsEditable();
  var textureElementIds = ['wall1', 'wall2', 'wall3'];
  textureElementIds.forEach(function(textureElementId) {
    var textureElement = document.getElementById(textureElementId);
    var texture = null;
    textureElement.addEventListener('click', function() {
      // Create the texture only the first time the texture element is clicked
      // and reuse it for subsequent clicks.
      if (texture === null) {
        if (textureElement instanceof HTMLVideoElement) {
          // textureElement is <video>
          texture = viewer.createTextureFromHtmlVideo(textureElement);
        } else {
          // textureElement is <img>
          texture = viewer.createTextureFromHtmlImage(textureElement);
        }
      }
      var material = viewer.findMaterial('tuong');
      material.baseColorTexture = texture;
      // Force the frame to be renderer, otherwise the changed texture
      // will be visible only after the camera is moved.
      viewer.requestFrame();
    });
  });
</script>

<script>
  var viewer = WALK.getViewer();
  viewer.setMaterialEditable('[0017_IndianRed]');
  // Alternatively: viewer.setAllMaterialsEditable();
  var textureElementIds = ['floor1', 'floor2', 'floor3'];
  textureElementIds.forEach(function(textureElementId) {
    var textureElement = document.getElementById(textureElementId);
    var texture = null;
    textureElement.addEventListener('click', function() {
      // Create the texture only the first time the texture element is clicked
      // and reuse it for subsequent clicks.
      if (texture === null) {
        if (textureElement instanceof HTMLVideoElement) {
          // textureElement is <video>
          texture = viewer.createTextureFromHtmlVideo(textureElement);
        } else {
          // textureElement is <img>
          texture = viewer.createTextureFromHtmlImage(textureElement);
        }
      }
      var material = viewer.findMaterial('[0017_IndianRed]');
      material.baseColorTexture = texture;
      // Force the frame to be renderer, otherwise the changed texture
      // will be visible only after the camera is moved.
      viewer.requestFrame();
    });
  });
</script>

<script>
  var viewer = WALK.getViewer();
  viewer.setMaterialEditable('curtain');
  // Alternatively: viewer.setAllMaterialsEditable();
  var textureElementIds = ['rem1', 'rem2', 'rem3'];
  textureElementIds.forEach(function(textureElementId) {
    var textureElement = document.getElementById(textureElementId);
    var texture = null;
    textureElement.addEventListener('click', function() {
      // Create the texture only the first time the texture element is clicked
      // and reuse it for subsequent clicks.
      if (texture === null) {
        if (textureElement instanceof HTMLVideoElement) {
          // textureElement is <video>
          texture = viewer.createTextureFromHtmlVideo(textureElement);
        } else {
          // textureElement is <img>
          texture = viewer.createTextureFromHtmlImage(textureElement);
        }
      }
      var material = viewer.findMaterial('curtain');
      material.baseColorTexture = texture;
      // Force the frame to be renderer, otherwise the changed texture
      // will be visible only after the camera is moved.
      viewer.requestFrame();
    });
  });
</script>

<style>
#click-info {
  position: absolute;
  top: 350px;
  padding: 10px;
  background-color: rgba(0, 0, 0, 0.3);
  font-size: 1.5em;
  z-index: 10;
}
#nodes, #distance {
  font-weight: bold;
}
</style>
<div id="click-info">
  Clicked nodes: <span id="nodes">-</span><br/>
  Click distance: <span id="distance">-</span> m
</div>
<script>
  var viewer = WALK.getViewer();
  viewer.onNodeTypeClicked(function(node, position, distance) {
    var nodeTypePath = [];
    while (node) {
      nodeTypePath.push(node.type);
      node = node.parent;
    }
    document.getElementById('nodes').innerHTML = nodeTypePath.join(' > ');
    document.getElementById('distance').innerHTML = distance.toFixed(2);
    return true;
  });
</script>

