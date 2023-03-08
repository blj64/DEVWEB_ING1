const elt = document.getElementsByClassName("quantity-more");

for (let i = 0; i < elt.length; i++) {
    elt[i].addEventListener("click", myFunction);
    
}

function myFunction(){
    alert(this.id);
}