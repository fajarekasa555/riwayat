var target = document.getElementById("target");
var container = document.getElementById("container");
var score = 0;

container.addEventListener("click", function() {
  score++;
  console.log("Score: " + score);
});

setInterval(moveTarget, 1000);

function moveTarget() {
  var maxHeight = container.offsetHeight - target.offsetHeight;
  var maxWidth = container.offsetWidth - target.offsetWidth;
  
  var randomTop = Math.floor(Math.random() * maxHeight);
  var randomLeft = Math.floor(Math.random() * maxWidth);
  
  target.style.top = randomTop + "px";
  target.style.left = randomLeft + "px";
}