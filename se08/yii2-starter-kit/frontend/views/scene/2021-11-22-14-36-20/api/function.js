var viewer = WALK.getViewer();
viewer.setMaterialEditable("tuong");
// Alternatively: viewer.setAllMaterialsEditable();
var textureElementIds = [
  "brick",
  "brick2",
  "metal",
  "stone",
  "tiles",
  "yellow",
  "dots-video",
  "lines-video",
  "squares-video",
];
textureElementIds.forEach(function (textureElementId) {
  var textureElement = document.getElementById(textureElementId);
  var texture = null;
  textureElement.addEventListener("click", function () {
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
    var material = viewer.findMaterial("tuong");
    material.baseColorTexture = texture;
    // Force the frame to be renderer, otherwise the changed texture
    // will be visible only after the camera is moved.
    viewer.requestFrame();
  });
});

viewer.onNodeTypeClicked(function (node, position, distance) {
  var nodeTypePath = [];
  while (node) {
    nodeTypePath.push(node.type);
    node = node.parent;
  }
  document.getElementById("nodes").innerHTML = nodeTypePath.join(" > ");
  document.getElementById("distance").innerHTML = distance.toFixed(2);
  return true;
});
