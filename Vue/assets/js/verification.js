function verif(){



    var sujet=document.getElementById("sujet").value ;
    var mail=document.getElementById("email").value;
    var description=document.getElementById("description").valeu;



    var errorM=document.getElementById("errorMR");
    var errorS=document.getElementById("errorS");
    var errorD=document.getElementById("errorD");


if(!mail.match('@gmail.tn')&& !mail.match('@yahoo.tn')&& !mail.match('@hotmail.tn'))
{
    errorM.innerHTML=("Saisir un email valid");

}
else
errorM.innerHTML=("");
}