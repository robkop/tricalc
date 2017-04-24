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
  var m = document.getElementById('swimmin').value;
  var s = document.getElementById('swimsec').value;
  var display = document.getElementById('swimresult1');

  var timeInSec = ((+m)*60) + (+s);
  var swimtimep = ((+x) / 100) * timeInSec;
  localStorage.setItem('swimp',swimtimep);
  var realTime = sekundyToTime(swimtimep);
  if (timeInSec <= 0){
    alert("Something went wrong!");
  } else {
    display.style.display = "block";
    document.getElementById('swimtimetot').innerHTML = realTime;
  }
})
document.getElementById('1next').addEventListener('click',function(){
  var inputs = document.getElementsByTagName('input');
  for(var i = 0; i < inputs.length; i++)
  {
        if(inputs[i].type == 'radio')
        {
          inputs[i].disabled = true;
        }
  }
})

document.getElementById('3next').addEventListener("click",function(){
  var x = document.getElementById('bikedistance').value;
  var avg = document.getElementById('bikeavg').value;
  var display = document.getElementById('bikeresult1');

  var bikepTime = ((+x)*3600)/(+avg);
  localStorage.setItem('bikep',bikepTime);
  var realTime = sekundyToTime(bikepTime);

  if (bikepTime <= 0){
    alert("Something went wrong!");
  } else {
  display.style.display = "block";
  document.getElementById('biketimetot').innerHTML = realTime;
  }
})
document.getElementById('4next').addEventListener("click",function(){
  var x = document.getElementById('rundistance').value;
  var m = document.getElementById('runmin').value;
  var s = document.getElementById('runsec').value;
  var display = document.getElementById('runresult1');

  var timeInSec = (((+m)*60) + (+s))*x;
  localStorage.setItem('runp',timeInSec);
  var realTime = sekundyToTime(timeInSec);
  if (timeInSec <= 0){
    alert("Something went wrong!");
  } else {
  display.style.display = "block";
  document.getElementById('runtimetot').innerHTML = realTime;
  }
})
document.getElementById('showfinishtime').addEventListener("click",function(){
  var display = document.getElementById('finishrow');
  var xs = document.getElementById('stbmin').value * 60;
  var xm = document.getElementById('stbsec').value;
  var ys = document.getElementById('btrmin').value * 60;
  var ym = document.getElementById('btrsec').value;
  var transTime = (+xs) + (+xm) + (+ys) + (+ym);
  localStorage.setItem("trans",transTime);
  var swim = localStorage.getItem("swimp");
  var bike = localStorage.getItem("bikep");
  var run = localStorage.getItem("runp");
  var finishTime = (+transTime) + (+run) + (+swim) + (+bike);
  display.style.display = "block";
  display.style.textAlign = "center";
  document.getElementById('finishtimetot').innerHTML = sekundyToTime(finishTime);

})

function sekundyToTime(n) {
  return (new Date(n * 1000)).toUTCString().match(/(\d\d:\d\d:\d\d)/)[0];
    }
