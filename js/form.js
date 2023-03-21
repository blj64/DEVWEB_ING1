const form = document.getElementById('contact-form');



form.addEventListener('submit', function(event) {
    event.preventDefault();
    
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const messageInput = document.getElementById('message');
    
    const name = nameInput.value.trim();
    const email = emailInput.value.trim();
    const message = messageInput.value.trim();
    
    const nameRegex = /^[a-zA-Z\s]*$/;
    const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    if (!nameRegex.test(name)) {
        console.log("coucou") 
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
    }
  });