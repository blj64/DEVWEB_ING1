
function validerSaisies() {

  var validation_name = true;
  var validation_email = true;
  var validation_message = true;


  const form = document.getElementById('contact-form');

  const nameInput = document.getElementById('name');
  const emailInput = document.getElementById('email');
  const messageInput = document.getElementById('message');

  const nameError = document.getElementById('error-name');
  const emailError = document.getElementById('error-email');
  const messageError = document.getElementById('error-message');

  const name = nameInput.value.trim();
  const email = emailInput.value.trim();
  const message = messageInput.value.trim();

  const nameRegex = /^[a-zA-Z\s]*$/;
  const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  /*
  if(name != "") //si la saisie est non vide
  {
    // si il n'y a pas de caracteres interdits et que la saisie est non vide
    if(name.match(nameRegex) != null) {
      // alors on envoie le formulaire
      nameError.innerHTML = "";
    }
    else 
    {
        nameError.innerHTML = "Veuillez saisir un nom valide (lettres et espaces uniquement)";
        validation_name = false;
    }
  }
  else
  {
      nameError.innerHTML = "Champ obligatoire";
      validation_name = false;
  }

  if(email != "") //si la saisie mail est non vide
  {
    // si il n'y a pas de caracteres interdits et que la saisie est non vide
    if(email.match(emailRegex) != null) {
      // alors on envoie le formulaire
      emailError.innerHTML = "";
    }
    else 
    {
      emailError.innerHTML = "Veuillez saisir un email valide";
        validation_email = false;
    }
  }
  else
  {
    emailError.innerHTML = "Champ obligatoire";
      validation_email = false;
  }
  
  if(message != "") //si la saisie mail est non vide
  {
    messageError.innerHTML = "";
  }
  else
  {
    messageError.innerHTML = "Champ obligatoire";
    validation_message = false;
  }
  */





  if (validation_name == true && validation_email == true && validation_message == true) {
    form.submit();
  }
  else {
    return false;
  }
}
