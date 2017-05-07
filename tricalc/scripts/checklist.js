let x = document.getElementById('checkList');


document.getElementById('btn').addEventListener('click',function(){
  var i = 0;

  let c = document.createElement("input");
  let d = document.createElement("input");
  let e = document.createElement("span");
  let t = document.createElement("span");
  c.setAttribute('type',"checkbox");
  c.setAttribute('id',i++);
  d.setAttribute('type',"text")
  d.setAttribute('id',i)
  document.getElementById("form").appendChild(e);
  document.getElementById("form").appendChild(c);
  document.getElementById("form").appendChild(t);
  document.getElementById("form").appendChild(d);
  e.innerHTML = "<br>"
  t.innerHTML = "-"
});
document.getElementById('print').addEventListener('click',function(){
  window.print();
})
