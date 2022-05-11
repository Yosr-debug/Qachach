var login = document.forms["login"]["NOM"].value;
var NOM = document.forms["login"]["NOM"].value;
var PRENNOM = document.forms["login"]["PRENOM"].value;
var EMAIL = document.forms["login"]["EMAIL"].value;
var PASSWORD = document.forms["login"]["PASSWORD"].value;
var PASSWORDC = document.forms["login"]["PASSWORDC"].value;
var CIN = document.forms["login"]["CIN"].value;
var TELEPHONE = document.forms["login"]["TELEPHONE"].value;
var ADRESSE = document.forms["login"]["ADRESSE"].value;
var GENDER = document.forms["login"]["GENDER"].value;




var errorN = document.getElementById('errorN');
var errorP = document.getElementById('errorP');
var errorE = document.getElementById('errorE');
var errorMP = document.getElementById('errorMP');
var errorCMP = document.getElementById('errorCMP');
var errorCIN = document.getElementById('errorCIN');
var errorT = document.getElementById('errorT');
var errorA = document.getElementById('errorA');
var errorG = document.getElementById('errorG');


var letters = /^[A-Za-z]+$/;
form.addEventListener('submit', e => {
    e.preventDefault();

    verif();
});

function verif() 
{


if (NOM === "") {
    
    errorN.innerHTML = "Veuillez entrer un nom valid!";

}
else if (!(NOM.match(letters) && NOM.charAt(0).match(/^[A-Z]+$/))) {
    errorN.innerHTML = "Veuillez entrer un nom valid!";
} else {
    setSuccessFor(NOM);

}






}






