document.getElementById('a1').addEventListener("change",function(){
  var x = document.getElementById('a1');
  var y = document.getElementById('swimdistance');
  var c = document.getElementById('bikedistance');
  var v = document.getElementById('rundistance');
  if(x.checked = true){
     y.value = 475;
     c.value = 22,5;
     v.value = 5,2;
     swimdistance.disabled = true;
     bikedistance.disabled = true;
     rundistance.disabled = true;
  }
})
document.getElementById('a2').addEventListener("change",function(){
  var x = document.getElementById('a2');
  var y = document.getElementById('swimdistance');
  var c = document.getElementById('bikedistance');
  var v = document.getElementById('rundistance');;
  if(x.checked = true){
     y.value = 950;
     c.value = 45;
     v.value = 10,4;
     swimdistance.disabled = true;
     bikedistance.disabled = true;
     rundistance.disabled = true;
  }
})
document.getElementById('a3').addEventListener("change",function(){
  var x = document.getElementById('a3');
  var y = document.getElementById('swimdistance');
  var c = document.getElementById('bikedistance');
  var v = document.getElementById('rundistance');
  if(x.checked = true){
     y.value = 1500;
     c.value = 45;
     v.value = 10;
     swimdistance.disabled = true;
     bikedistance.disabled = true;
     rundistance.disabled = true;
  }
})
document.getElementById('a4').addEventListener("change",function(){
  var x = document.getElementById('a4');
  var y = document.getElementById('swimdistance');
  var c = document.getElementById('bikedistance');
  var v = document.getElementById('rundistance');
  if(x.checked = true){
     y.value = 1900;
     c.value = 90;
     v.value = 21,1;
     swimdistance.disabled = true;
     bikedistance.disabled = true;
     rundistance.disabled = true;
  }
})
document.getElementById('a5').addEventListener("change",function(){
  var x = document.getElementById('a5');
  var y = document.getElementById('swimdistance');
  var c = document.getElementById('bikedistance');
  var v = document.getElementById('rundistance');
  if(x.checked = true){
     y.value = 3800;
     c.value = 180;
     v.value = 42,2;
     swimdistance.disabled = true;
     bikedistance.disabled = true;
     rundistance.disabled = true;
  }
})
document.getElementById('a6').addEventListener("change",function(){
  var x = document.getElementById('a6');
  var y = document.getElementById('swimdistance');
  var c = document.getElementById('bikedistance');
  var v = document.getElementById('rundistance');
  if(x.checked = true){
     y.value = "";
     c.value = "";
     v.value = "";
     swimdistance.disabled = false;
     bikedistance.disabled = false;
     rundistance.disabled = false;
  }
})
document.getElementById('2next').addEventListener("click",function(){
  var x = document.getElementById('swimdistance').value;
  var h = document.getElementById('swimho').value;
  var m = document.getElementById('swimmin').value;
  var s = document.getElementById('swimsec').value;
  var display = document.getElementById('swimresult1');

  var timeInSec = ((+h)*60*60) + ((+m)*60) + (+s);
  localStorage.setItem('swim',timeInSec);
  var realTime = sekundyToTime(timeInSec);

  var pace = (100 * (+timeInSec)) / x;
  display.style.display = "block";
  document.getElementById('swimtimetot').innerHTML = realTime;
  document.getElementById('swimpace').innerHTML = sekundyToTime(pace) + " / 100 m";
})
document.getElementById('3next').addEventListener("click",function(){
  var x = document.getElementById('bikedistance').value;
  var h = document.getElementById('bikeho').value;
  var m = document.getElementById('bikemin').value;
  var s = document.getElementById('bikesec').value;
  var display = document.getElementById('bikeresult1');

  var timeInSec = ((+h)*60*60) + ((+m)*60) + (+s);
  localStorage.setItem('bike',timeInSec);
  var realTime = sekundyToTime(timeInSec);

  var pace = (+x) / ((+timeInSec)/60/60);
  display.style.display = "block";
  document.getElementById('biketimetot').innerHTML = realTime;
  document.getElementById('bikepace').innerHTML = pace + " km/h";
})
document.getElementById('4next').addEventListener("click",function(){
  var x = document.getElementById('rundistance').value;
  var h = document.getElementById('runho').value;
  var m = document.getElementById('runmin').value;
  var s = document.getElementById('runsec').value;
  var display = document.getElementById('runresult1');

  var timeInSec = ((+h)*60*60) + ((+m)*60) + (+s);
  localStorage.setItem('run',timeInSec);
  var realTime = sekundyToTime(timeInSec);

  var speed = (+x) / ((+timeInSec)/60)/60;
  var pace = 60 / speed;
  var pace = sekundyToTime(pace);
  display.style.display = "block";
  document.getElementById('runtimetot').innerHTML = realTime;
  document.getElementById('runpace').innerHTML = pace.slice(0,5) + " min/km <br> <h4>Your speed is:</h4><p>" + (speed * 60 * 60).toFixed(2) + " km/h</p>";
})

document.getElementById('showfinishtime').addEventListener("click",function(){
  var display = document.getElementById('finishrow');
  var xs = document.getElementById('stbmin').value * 60;
  var xm = document.getElementById('stbsec').value;
  var ys = document.getElementById('btrmin').value * 60;
  var ym = document.getElementById('btrsec').value;
  var transTime = (+xs) + (+xm) + (+ys) + (+ym);
  localStorage.setItem("trans",transTime);
  var swim = localStorage.getItem("swim");
  var bike = localStorage.getItem("bike");
  var run = localStorage.getItem("run");
  var finishTime = (+transTime) + (+run) + (+swim) + (+bike);
  display.style.display = "block";
  display.style.textAlign = "center";
  document.getElementById('finishtimetot').innerHTML = sekundyToTime(finishTime);

})






function sekundyToTime(n) {
  return (new Date(n * 1000)).toUTCString().match(/(\d\d:\d\d:\d\d)/)[0];
    }
