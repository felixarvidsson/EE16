/* Get the modal */
var modal = document.querySelector('#myModal');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
modal.style.display = "block";