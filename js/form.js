
function validerSaisies() {

    const form = document.getElementById('contact-form');

    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const messageInput = document.getElementById('message');
    
    const name = nameInput.value.trim();
    const email = emailInput.value.trim();
    const message = messageInput.value.trim();

    const nameRegex = /^[a-zA-Z\s]*$/;
    const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    // si la valeur du champ prenom est non vide
    if(!nameRegex.test(name)) {
      // alors on envoie le formulaire
      form.submit();
    }
    else {
      // sinon on affiche un message
      alert("Saisissez un prénom valide");
    }

    if(emailInput.value != "") {
        // alors on envoie le formulaire
        form.submit();
    }
    else {
        // sinon on affiche un message
        alert("Saisissez l'email");
    }

    if(messageInput.value != "") {
        // alors on envoie le formulaire
        form.submit();
    }
    else {
        // sinon on affiche un message
        alert("Saisissez le message");
    }
  }

/*

document.getElementById('contact-form').addEventListener('submit', function() {
    alert("form en cours de validation");
    
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const messageInput = document.getElementById('message');
    
    const name = nameInput.value.trim();
    const email = emailInput.value.trim();
    const message = messageInput.value.trim();
    
    const nameRegex = /^[a-zA-Z\s]*$/;
    const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    if (!nameRegex.test(name)) {
        alert("coucou");
      nameInput.classList.add('error');
      nameInput.nextElementSibling.textContent = 'Veuillez saisir un nom valide (lettres et espaces uniquement)';
    } else {
      nameInput.classList.remove('error');
      nameInput.nextElementSibling.textContent = '';
    }
    
    if (!emailRegex.test(email)) {
      emailInput.classList.add('error');
      emailInput.nextElementSibling.textContent = 'Veuillez saisir une adresse e-mail valide';
    } else {
      emailInput.classList.remove('error');
      emailInput.nextElementSibling.textContent = '';
    }
    
    if (message.length < 10) {
      messageInput.classList.add('error');
      messageInput.nextElementSibling.textContent = 'Veuillez saisir un message d\'au moins 10 caractères';
    } else {
      messageInput.classList.remove('error');
      messageInput.nextElementSibling.textContent = '';
    }
    
    if (!nameInput.classList.contains('error') && !emailInput.classList.contains('error') && !messageInput.classList.contains('error')) {
      form.submit();
      alert('form envoyé !');
    }
  });


  */