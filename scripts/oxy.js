document.getElementById('showbtn').addEventListener("click",function(){
  var x = document.getElementById('cooperdist').value;
  var y = document.getElementById('finishrow');

  var c = ((+x) - 504.9) / 44.73;
  document.getElementById('result').innerHTML = c.toFixed(2) + " ml/kg/min";
  y.style.display = 'block';
})
