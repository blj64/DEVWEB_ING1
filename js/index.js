const elt = document.getElementById("song-1");
elt.addEventListener("click", myFunction);

function myFunction(){
    alert(this.className);
}