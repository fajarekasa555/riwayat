let kontainer = document.querySelector(".kontainer");
let btn = document.getElementById("spin");
let tulisan = document.getElementById("tulisan");

btn.onclick = function(){
  var min = 0;
  var max = 6000;
  var deg = Math.floor(Math.random() * max);
  kontainer.style.transform = "rotate("+deg+"deg)";
  // if(deg > 2000 && deg <= 3000 ){
  //   tulisan.innerHTML = "gagah";
  // }
  // if(deg > 5000 && deg <= 6000 ){
  //   tulisan.innerHTML = "candra";
  // }
  // if(deg > 3000 && deg <= 4000 ){
  //   tulisan.innerHTML = "galih";
  // }
  // if(deg > 4000 && deg <= 5000 ){
  //   tulisan.innerHTML = "krido";
  // }
  // if(deg > 0 && deg <= 1000 ){
  //   tulisan.innerHTML = "Bayu";
  // }
  // if(deg > 1000 && deg <= 2000 ){
  //   tulisan.innerHTML = "valdi";
  // }


}