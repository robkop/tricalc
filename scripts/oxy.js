var r = document.getElementById('showbtn');
var y = document.getElementById('finishrow');
var x = document.getElementById('cooperdist').value;
document.getElementById('showbtn').addEventListener("click",function(){
  if (y.style.display == 'block') {
  } else{
    var x = document.getElementById('cooperdist').value;
    if (x <=0) {
      alert("Please, put your CT result.")
    } else {
      var c = ((+x) - 504.9) / 44.73;
      if (c <=0) {
        alert("Owww... I can't calculate it.");
      } else {
        document.getElementById('result').innerHTML = c.toFixed(2) + " ml/kg/min";
        localStorage.setItem("vo2max",c.toFixed(2));
        y.style.display = 'block';
        r.className += " disabled";
        r.removeAttribute("data-toggle");
        r.removeAttribute("data-target");
      }
    }
  }
});
