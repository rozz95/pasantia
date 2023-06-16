if(document.getElementById("ButtonModal"))
{
    
    var button=document.getElementById("ButtonModal");
    var buttonA=document.getElementsByClassName("close")[0];
    var modal=document.getElementById("mymodal");
    button.onclick=function()
    {
        modal.style.display="flex";
       
    }
    buttonA.onclick=function()
    {
       modal.style.display="none";
    }
    
}
function mostrardatos(element) {
    var buttonA = document.getElementsByClassName("cerrado")[0];
    var modal = document.getElementById("modal");
    var divOrigen = element.querySelector(".nombret");
    var divDestino = document.getElementById("nombre_reescrito");
    var desOrigen = element.querySelector(".descrip");
    var desDestino = document.getElementById("descript");
    var contenido = divOrigen.innerHTML;
    divDestino.innerHTML = contenido;
    var contenido2 = desOrigen.innerHTML;
    desDestino.innerHTML = contenido2;
  
    modal.style.display = "flex";
  
    buttonA.onclick = function() {
      modal.style.display = "none";
    };
  }
  
  




