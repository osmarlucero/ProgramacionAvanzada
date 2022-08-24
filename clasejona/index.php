<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        canvas
    </title>
    <style type="text/css">
        canvas{
            /*background-color: red;*/
            margin: auto;
        }
    </style>

</head>
<body>
    <canvas id="micanvas" width="500" height="500">
        Tu navegador no soporta canvas
    </canvas>

    <script type="text/javascript">
        function random_rgba() {
            var o = Math.round, r = Math.random, s = 255;
            return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
        }
        var cv = null;
        var ctx = null;
        var player = null;
        var player2 = null; 
        var Sx = 240;
        var Sy = 240;

        var direction = 'left';
        var speed=10;
        var score=0;
        function start(){
            cv = document.getElementById('micanvas');
            ctx = cv.getContext('2d');

            player = new cuadrado(Sx, Sy, 40, 40, "blue");

            player2 = new cuadrado(generateRandomInteger(500), generateRandomInteger(500), 40, 40, "red");

            paint();
        }

        function paint(){
            
            window.requestAnimationFrame(paint)
            ctx.fillText("SCORE "+score,30,20);
            ctx.fillStyle = "white";
            /*
            ctx.fillRect(Sx-15, Sy-15, 100, 100);
            ctx.fillRect(Sx+15, Sy+15, 100, 100);
            */
            ctx.fillRect(player.x-15, player.y-15, 100, 100);
            ctx.fillRect(player.x+15, player.y+15, 100, 100);
            player.dibujar(ctx);
            player2.dibujar(ctx);
            /*
            //ctx.fillStyle = "blue";
            ctx.fillStyle = random_rgba();
            ctx.fillRect(Sx, Sy, 60, 60);
            ctx.strokeRect(Sx, Sy, 60, 60);
            */
            update();
        }

        function update(){
            if(direction == 'left'){
                player.x -= 5;
                if(player.x< -40){
                    player.x = 500;
                }
            }

            if(direction == 'right'){
                player.x += 5;
                if(player.x>500){
                    player.x = 0;
                }
            }

            if(direction == 'up'){
                player.y -= 5;
                if(player.y< -40){
                    player.y = 500;
                }
            }
            
            if(direction == 'down'){
                player.y += 5;
                if(player.y>500){
                    player.y = 0;
                }
            }
            if(player.se_tocan(player2)){
                player2.x=generateRandomInteger(500);
                player2.y=generateRandomInteger(500);

                score+=10;
                speed+=10;
            }
            
        }

        window.addEventListener('load',start)

        window.requestAnimationFrame = (function () {
            return window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                function (callback) {
                    window.setTimeout(callback, 17);
                };
        }());
        
        function cuadrado(x,y,w,h,c){
            this.x = x;
            this.y = y;
            this.w = w;
            this.h = h;
            this.c = c;

            this.dibujar = function(ctx){
                ctx.fillStyle = this.c;
                ctx.fillRect(this.x, this.y, this.w, this.h);
                ctx.strokeRect(this.x, this.y, this.w, this.h);
            }
              this.se_tocan = function (target) { 
            if(this.x < target.x + target.w &&
                this.x + this.w > target.x && 
                this.y < target.y + target.h && 
                this.y + this.h > target.y)
        {
        return true;  
        }  

        };
        }

        
        document.addEventListener('keydown', function(e){
            console.log(e)
            //arriba
            if(e.which == 87 || e.which == 38){
                direction = 'up';
                //Sy -= 5;

            }
            //abajo
            if(e.which == 83 || e.which == 40){
                direction = 'down';
                //Sy += 5;
            }
            //izquierda
            if(e.which == 65 || e.which == 37){
                direction = 'left';
                //Sx -= 5;
            }
            //derecha
            if(e.which == 68 || e.which == 39){
                direction = 'right';
                //Sx += 5;
            }
            //paint();
        })

        function generateRandomInteger(max) {
            return Math.floor(Math.random() * max) + 1;
        }
        
      
    </script>

</body>

</html>