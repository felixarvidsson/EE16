window.onload = start;

function start() {
    const canvas = document.querySelector("#myCanvas");
    var ctx = canvas.getContext("2d");

    /* Rita en flagga */
    /* Bakgrunden */
    /*     ctx.beginPath();
        ctx.rect(100, 100, 300, 200);
        ctx.fillStyle = "#FF0000";
        ctx.fill();
        ctx.closePath(); */
    /* Korset */
    /*     ctx.beginPath();
        ctx.rect(180, 100, 50, 200);
        ctx.fillStyle = "#FFF";
        ctx.fill();
        ctx.rect(100, 170, 300, 50);
        ctx.fillStyle = "#FFF";
        ctx.fill();
        ctx.closePath();
     */
    /* Ansikte */
    /*     ctx.beginPath();
        ctx.arc(600, 200, 50, 0, Math.PI * 2, false);
        ctx.fillStyle = "yellow";
        ctx.fill();
        ctx.rect(100, 170, 300, 50);
        ctx.closePath(); */


    function boll(x, y) {

        /* Boll */
        ctx.beginPath();
        ctx.arc(x, y, 15, 0, Math.PI * 2, false);
        ctx.fillStyle = "yellow";
        ctx.fill();
        ctx.rect(100, 170, 300, 50);
        ctx.closePath();

    }
    /* Racket */
    function racket(x, y) {
        ctx.beginPath();
        ctx.rect(x, y, 10, 80);
        ctx.fillStyle = "#FF0000";
        ctx.fill();
        ctx.closePath();
    }

    /* Utskrift */
    function highScore(points, lives) {
        ctx.font = "40px Comic Sans";
        ctx.fillStyle = "#FFF";
        ctx.fillText("Points: " + points, 350, 50);
        ctx.fillText("Lives: " + lives, 100, 50);
    }

    /* Lyssna på piltangenterna */
    document.addEventListener("keydown", flyttaRacket);

    function flyttaRacket(e) {
        console.log("flyttaRacket");
        if (e.key == "ArrowUp") {
            if (racketY > 10) {
                racketY -= 25;
            }
        }
        if (e.key == "ArrowDown") {
            if (racketY < 510) {
                racketY += 25;
            }
        }
        console.log("racketY = " + racketY);


    }

    /* Animationsloopen */
    var bollX, bollY, dx, dy, racketX, racketY, points, lives;
    racketX = 10;
    racketY = 100;
    points = 0;
    lives = 3;

    function reset() {
        bollX = 50;
        bollY = Math.ceil(Math.random() * 100);
        dx = 6;
        dy = 6;
    }

    reset();

    function loop() {
        /* Sudda ut allt */
        ctx.clearRect(0, 0, 800, 600);

        /* Boll */
        boll(bollX, bollY);
        bollX += dx;
        bollY -= dy;


        /* Bollen skall studsa */
        if (bollY <= 0) {
            dy = -dy;
        }
        if (bollX >= 800) {
            dx = -dx;
        }
        if (bollY >= 600) {
            dy = -dy;
        }

        /* Rita ut racket */
        racket(racketX, racketY);


        /* Bollen ska studsa */
        if (bollX <= 40) {
            if ((bollY >= (racketY - 20)) && (bollY <= (racketY + 100))) {
                dx = -dx;
                points += 1;
            } else {
                if (lives == 0) {
                    alert("Game over!");
                } else {
                    
                    lives--;
                    reset();
                }
            }
        }
        highScore(points, lives);
        requestAnimationFrame(loop);
    }
    /* Körs en gång i sekunden */
    /* var timer = setInterval(loop, 30); */
    loop();
}