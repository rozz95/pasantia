if(document.getElementById("proyecto_crear"))
{
    
    var button=document.getElementById("proyecto_crear");
    var buttonA=document.getElementsByClassName("cerrar")[0];
    var modal=document.getElementById("formulario_modal");
    button.onclick=function()
    {
        modal.style.display="flex";
       
    }
    buttonA.onclick=function()
    {
       modal.style.display="none";
    }
    
}