var url = window.location.href;
var urlobj = new URL(url);
var paras = urlobj.searchParams;
var nombre = paras.get("name");
var label = document.getElementById("lb1");
label.innerHTML=nombre;