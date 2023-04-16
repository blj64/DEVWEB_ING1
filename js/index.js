/* ---------POUR-GERER-LES-STOCKS------
const more = document.getElementsByClassName("quantity-more");
const less = document.getElementsByClassName("quantity-less");
const stockBtn = document.getElementsByClassName("show-stock");
const addBtn = document.getElementsByClassName("buy")
let article = class {
    constructor(type, reference, quantity, price) {
        this.type = type
        this.reference = reference
        this.quantity = quantity = 0
        this.price = price
    }
}

let panier = []


for (let i = 0; i < more.length; i++) {
    
    more[i].addEventListener("click", () => {
        stockValue = document.getElementById("stock-number-"+more[i].dataset.reference).innerHTML
        if (stockValue > 0) {
            document.getElementById("quantity-number-"+more[i].dataset.reference).value++
            stockValue--
            document.getElementById("stock-number-"+more[i].dataset.reference).innerHTML = stockValue

        }

    });
    less[i].addEventListener("click", () => {
        const value = document.getElementById("quantity-number-"+less[i].dataset.reference)
        if (value.value > 0) {
            value.value--
            stockValue = document.getElementById("stock-number-"+more[i].dataset.reference).innerHTML
            stockValue++
            document.getElementById("stock-number-"+more[i].dataset.reference).innerHTML = stockValue
    
        }

    });

    stockBtn[i].addEventListener("click", () => {
        const stockValue = document.getElementById("stock-number-"+ stockBtn[i].dataset.reference)
        stockValue.style.display =  stockValue.style.display == 'block' ? 'none' : 'block' 
    })

    addBtn[i].addEventListener("click", () => {
        let tets = panier.push(new article(addBtn[i].parentNode.className, addBtn[i].dataset.reference, document.getElementById("quantity-number-"+addBtn[i].dataset.reference).value, 5))
        document.cookie = "panier=" + encodeURIComponent(tets) + "; path=/";

    })
    
    
}
*/
function incrementer(id,stock) {
    var valeurElement = document.getElementById("quantity-number-"+id);
    var valeur = parseInt(valeurElement.innerHTML);
    if (valeur < stock)
    {
        valeur++;
    }
    valeurElement.innerHTML = valeur;
}

function decrementer(id) {
    var valeurElement = document.getElementById("quantity-number-"+id);
    var valeur = parseInt(valeurElement.innerHTML);
    if (valeur > 0)
    {
        valeur--;
    }
    valeurElement.innerHTML = valeur;
}

function ajouterQuantitePanier(id) {
    var quantiteElement = document.getElementById("quantity-number-"+id);
    var quantite = parseInt(quantiteElement.innerHTML);
    if (quantite == 0)
    {
        return;
    }
    

    // Création d'un formulaire
    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "updatePanier.php");

    // Création d'un champ caché contenant la valeur de tableau à mettre à jour
    var champTableauId = document.createElement("input");
    champTableauId.setAttribute("type", "hidden");
    champTableauId.setAttribute("name", "id");
    champTableauId.setAttribute("value", id);
    form.appendChild(champTableauId);
    // Création d'un champ caché contenant la valeur de tableau à mettre à jour
    var champTableauQuantite = document.createElement("input");
    champTableauQuantite.setAttribute("type", "hidden");
    champTableauQuantite.setAttribute("name", "quantite");
    champTableauQuantite.setAttribute("value", quantite);
    

    form.appendChild(champTableauQuantite);

    // Ajout du formulaire à la page et soumission du formulaire
    document.body.appendChild(form);
    form.submit();

    // Suppression du formulaire de la page
    document.body.removeChild(form);
}



