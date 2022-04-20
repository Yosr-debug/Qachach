const form = document.getElementById('form');
const nom = document.getElementById('nom');
const num = document.getElementById('num');
const prennom = document.getElementById('prenom');
const email = document.getElementById('email');
const password = document.getElementById('password');
const cin = document.getElementById('cin');
const password2 = document.getElementById('password2');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const x = element.parentElement;
    const errorDisplay = x.querySelector('.error');

    errorDisplay.innerText = message;
    x.classList.add('error');
    x.classList.remove('success')
}

const setSuccess = element => {
    const x = element.parentElement;
    const errorDisplay = x.querySelector('.error');

    errorDisplay.innerText = '';
    x.classList.add('success');
    x.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const nomValue = nom.value.trim();
    const prenomValue = prenom.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();
    const numValue = num.value.trim();
    const cinValue = cin.value.trim();

    var letters = /^[A-Za-z]+$/;
    if(nomValue === '') {
        setError(nom, 'nom obligatoire');
    } else if(!(nomValue.match(letters) && nomValue.charAt(0).match(/^[a-Z]+$/))) {
        setError(nom, 'veuillez saisir un nom valide ');
        
        
    }
    else
    {
        setSuccess(nom);
    }
   
     

    if(prenomValue === '') {
        setError(prenom, 'prenom obligatoire');
    } else if(!(prenomValue.match(letters) && prenomValue.charAt(0).match(/^[A-Z]+$/))) {
        setError(prenom, 'veuillez saisir un prenom nom valide ');
        
        
    }
    else
    {
        setSuccess(prenom);
    }




    if(emailValue === '') {
        setError(email, 'Email obligatoire');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'veuillez saisir une adresse email valide');
    } else {
        setSuccess(email);
    }

    if(passwordValue === '') {
        setError(password, 'mot de passe obligatoire');
    } else if (!(passwordValue.match(/[0-9]/g) &&
    passwordValue.match(/[A-Z]/g) &&
    passwordValue.match(/[a-z]/g) &&
    passwordValue.length >= 8)) {
    setError(password, 'Le mot de passe doit contenir au moins 8 caractères, dont au moins : Une lettre majuscule, Une lettre minuscule et un nombre');
}
     else {
        setSuccess(password);
    }

    if(password2Value === '') {
        setError(password2, 'confirmer votre mot de passe s"il vous plait');
    } else if (password2Value !== passwordValue) {
        setError(password2, "mote de passe different");
    } else {
        setSuccess(password2);
    }

    if(numValue === '') {
        setError(num, 'numero obligatoire');
    } else if (isNaN(numValue)) {
        setError(num, 'veuillez saisir un numero valid ');
   
    } else {
        setSuccess(num);
    }

    if(cinValue === '') {
        setError(cin, 'numero carte cin obligatoire');
    } else if (isNaN(cinValue) || (cinValue.length != 6)) {
        setError(cin, 'veuillez saisir un numero cin valide ');
   
    } else {
        setSuccess(cin);
    }




};
