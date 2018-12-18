window.onload = start;

function start() {
    const eInput = document.querySelector("name");
    const eText = document.querySelector("textarea");
    const eButton = document.querySelector("button");
    let url = "http://10.151.171.209/ajax/server.php";
}

    eButton.addEventListener("click", skicka)
    function skicka() {
        let ajax = new XMLHttpRequest();
        ajax.addEventListener("loadend", sparaChatt);
        function sparaChatt {
            console.log(this.responseText);
        }
        ajax.open("POST", url, true);

        let formData = new FormData();
        formData.append("namn", eInput.value);
        formData.append("meddelande", eText.value);

        ajax.send(formData)
}