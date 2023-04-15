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


function panierLoad() {
    
    const table = document.getElementById("panier-article-table")
    if (panier.length != 0) {
        panier.forEach(article => {
            const newRow = document.createElement("tr")
            const newPreview = document.createElement("th")
            const newType = document.createElement("th")
            const newReference = document.createElement("th")
            const newQuantity = document.createElement("th")
            const newPrice = document.createElement("th")

            const newPreviewImg = document.createElement("img")
            newPreviewImg.setAttribute("src", "../img/rickroll.jpg")
            newPreviewImg.setAttribute("width", "100")
            newPreviewImg.setAttribute("height", 100)
            newPreview.append(newPreviewImg)

            newType.textContent(panier.type)
            newReference.textContent(panier.reference)
            newQuantity.textContent(panier.quantity)
            newPrice.textContent(panier.price)

            newRow.append(newPreview, newType, newReference, newQuantity,newPrice)
            table.append(newRow)
            console.log("test");

        });
    }
}