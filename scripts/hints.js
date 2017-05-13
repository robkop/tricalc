window.onload = function loadData() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    workWithData(this);
    }
  };
  xhttp.open("GET", "data/hints.xml", true);
  xhttp.send();
}

function workWithData(xml){
  var xmlDoc = xml.responseXML;
  var x = xmlDoc.getElementsByTagName('hint');
  var d = x.length;
  var randomNumber = Math.floor(Math.random() * (d - 0)) + 0;

  var title = document.getElementById('title');
  var txt = document.getElementById('txt');
  title.innerHTML = x[randomNumber].getElementsByTagName('title')[0].childNodes[0].nodeValue
  txt.innerHTML = x[randomNumber].getElementsByTagName('text')[0].childNodes[0].nodeValue
}

document.getElementById('btn').addEventListener('click',function(){
  window.location = 'hints.php';
});
