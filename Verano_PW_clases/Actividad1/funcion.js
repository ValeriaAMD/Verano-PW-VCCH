
var bt= document.getElementById('push');
var nam= document.getElementById('name');
console.log(nam);
bt.addEventListener('click', 
   function(){

    window.location.href= "resultado.html"+"?"+"name"+nam.value;
    
   }
);
//los & son para agregar mas datos por ejemplo "&"+"edad"+edad.value