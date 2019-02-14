window.onload = start;

function start() {
    const canvas = document.querySelector("#myCanvas");
    var ctx = canvas.getContext("2d");

    var keys = [];
    var raket = {
        x: 0,
        y: 0,
        v: 0,
        h: 0
    };
    var imgRaket = new Image();
    imgRaket.src = "./bilder/raket.png";

    function reset() {

        raket.x = 400;
        raket.y = 350;
    }
        function ritaRaket() {
            ctx.beginPath();
            ctx.drawImage(imgRaket, raket.x, raket.y, 40, 40);
            ctx.closePath();
        }

        function uppdateraRaket() {
            if (keys["ArrowLeft"]) {
                raket.x -= 5;
            }
            if (keys["ArrowRight"]) {
                raket.x += 5;
            }
            if (keys["ArrowUp"]) {
                raket.y -= 5;
            }
            if (keys["ArrowDown"]) {
                raket.y += 5;
            }
            if (raket.x > 800) {
                raket.x = 0;
            }
            if (raket.x < 0) {
                raket.x = 800;
            }

        }
        /* Lyssna på piltantagenterna */
        document.addEventListener("keydown", tryckPil);
        document.addEventListener("keyup", slappPil);

        function tryckPil(e) {
            keys[e.key] = true;
        }

        function slappPil(e) {
            keys[e.key] = false;
        }

        /* Innan spelet börjar */
        reset();

        function gameLoop() {
            /* Sudda bort allt */
            ctx.clearRect(0, 0, 800, 600);

            uppdateraRaket();
            ritaRaket();

            requestAnimationFrame(gameLoop);
    }
    gameLoop();
    
}