const more = document.getElementsByClassName("quantity-more");
const less = document.getElementsByClassName("quantity-less");
const stockBtn = document.getElementsByClassName("show-stock")

for (let i = 0; i < more.length; i++) {
    more[i].addEventListener("click", () => {
        document.getElementById("quantity-number-"+more[i].dataset.song).value++

    });
    less[i].addEventListener("click", () => {
        const value = document.getElementById("quantity-number-"+less[i].dataset.song)
        if (value.value > 0) {
            value.value--
        }

    });

    stockBtn[i].addEventListener("click", () => {
        const stockValue = document.getElementById("stock-number-"+ stockBtn[i].dataset.song)
        stockValue.style.display =  stockValue.style.display == 'block' ? 'none' : 'block' 
    })

   
    
}

