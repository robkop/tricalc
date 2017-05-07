var stp = document.getElementById('opt1');
var pts = document.getElementById('opt2');
var txc = document.getElementById('txc');
var txd = document.getElementById('txd');

window.onchange = function loadData(){
  if (stp.checked === true) {
    speedToPace();

  } else if (pts.checked === true) {
    paceToSpeed();

  }
};
function speedToPace() {
    txc.style.display = "block";
    txd.style.display = "none";
    document.getElementById('2next').addEventListener("click",function(){
    var speed = document.getElementById('speed').value;
    var pace = (60/(+speed)*60);
    var tp = sekundyToTime(pace);
    document.getElementById('speedToPace').style.display = 'block';
    document.getElementById('result2').innerHTML = speed + " km/h is " + tp + " min/km";

})};

function paceToSpeed() {
  txd.style.display = "block";
  txc.style.display = "none";
  document.getElementById('3next').addEventListener('click',function(){
    let x = document.getElementById('pace').value;
    if (x.slice(2,3) == ":" || x.slice(1,2) == ":"){ //check the pace format
    let c = x.split(":");
    let t = 3600/(((+c[0])*60) + (+c[1])); //this is result
    document.getElementById('paceToSpeed').style.display = 'block';
    document.getElementById('result').innerHTML = "Pace: " + x + " min/km is " + t + " km/h"
  } else {
    alert("Put pace in MM:SS format."); //if pace format is wrong
  };
  });
};


function sekundyToTime(n) {
  return (new Date(n * 1000)).toUTCString().match(/(\d\d:\d\d:\d\d)/)[0];
};
