<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Examen
    </title>
    <style type="text/css">
        body{
            width: 100%;
        }
        canvas{
            background-color: rgb(199, 181, 181);
            margin: auto; 
        } 
    </style>
</head>
<body>
    <canvas id="mycanvas" width="500" height="500">
        Tu navegador no soporta canvas
    </canvas>

    <script type="text/javascript">
        
        var cv = null;
        var ctx = null;
        var player1 = null;
        var player2 = null;
        var pared = null;

        var super_x = 25, super_y = 40;
        var hex = ["x","-","-","-","x","-","-","-","x"];
        var direction = 'right';
        var score = 0;
        var speed = 1;

        var bee = new Image();
        var flor = new Image();
        var wall = new Image();

        var sonido1 = new Audio()
        var coord=0;
        var pause = false;
        var image = [];
        function makeWall(type){
            if(type=="x"){
                var wallMoment = null;
                wallMoment = new Cuadrado(coord,80,30,30,'gray');
                image.push(wallMoment);
            }
            coord+=20;

        }
        function start(){
            cv = document.getElementById('mycanvas');
            ctx = cv.getContext('2d');
            hex.forEach(element => makeWall(element));
            player1 = new Cuadrado(super_x,super_y,40,40,'red');
            player2 = new Cuadrado(generateRandomInteger(500),generateRandomInteger(500),40,40,'yellow');

           // pared = new Cuadrado(40,80,30,300,'gray');

            bee.src = 'bee.png';
            flor.src = 'flor.png';
            wall.src = 'meth.png'

            sonido1.src = 'los-frijoles_1.mp3';

            paint();
        } 

        function paintWall(el){
            ctx.drawImage(wall,el.x,el.y,30,30);
        }

        function paint(){

            window.requestAnimationFrame(paint)

            ctx.fillStyle = "black";
            ctx.fillRect(0,0,500,500);

            ctx.fillStyle = "#99f3f2";
            ctx.fillText('SCORE:'+score+'  SPEED:'+speed,30,20);

            player1.c = "black";
            
            //player1.dibujar(ctx);
            ctx.drawImage(bee,player1.x,player1.y)

            //player2.dibujar(ctx);
            ctx.drawImage(flor,player2.x,player2.y)

            //pared.dibujar(ctx);

            //ctx.drawImage(wall,pared.x,pared.y,30,300)
            image.forEach(element => paintWall(element));

            if (pause) {
                
                ctx.fillStyle = "rgba(0,0,0,0.5)"
                ctx.fillRect(0,0,500,500)

                ctx.fillStyle = "white";
                ctx.fillText('P A U S E',230,230);

            }else{
                update();
            }

            
        }
        function touch(brick){
            if (player1.se_tocan(brick)) {
                if (direction == 'right') {
                    player1.x -= speed; 
                }
                if (direction == 'left') {
                    player1.x += speed; 
                }
                if (direction == 'down') {
                    player1.y -= speed; 
                }
                if (direction == 'up') {
                    player1.y += speed; 
                }
            }
        }
        function update(){            
            if (direction == 'right') {
                player1.x += speed;
                if (player1.x>500) {
                    player1.x = 0;
                }
            }

            if (direction == 'left') {
                player1.x -= speed;
                if (player1.x<0) {
                    player1.x = 500;
                }
            }
            
            if (direction == 'down') {
                player1.y += speed;
                if (player1.y>500) {
                    player1.y = 0;
                }
            }

            if (direction == 'up') {
                player1.y -= speed;
                if (player1.y<0) {
                    player1.y = 500;
                }
            }
            image.forEach(element => touch(element));
            if (player1.se_tocan(player2)) {

                player2.x = generateRandomInteger(500);
                player2.y = generateRandomInteger(500);

                score += 10;
                speed += 5;

                sonido1.play();
            }

            
        }
            

        document.addEventListener('keydown',function(e){

            //arriba
            if (e.which == 87 || e.which == 38) {
                direction = 'up';
            }

            //abajo
            if (e.which == 83 || e.which == 40) {
                direction = 'down';
            }

            //izquierda
            if (e.which == 65 || e.which == 37) {
                direction = 'left';
            }

            //derecha
            if (e.which == 68 || e.which == 39) {
                direction = 'right';
            }

            //pause
            if (e.which == 32  ) { 

                pause = (pause)?false:true;
            }

        })

        window.addEventListener('load',start)

        window.requestAnimationFrame = (function () {
            return window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                function (callback) {
                    window.setTimeout(callback, 17);
                };
        }());

        function Cuadrado(x,y,w,h,c)
        {
            this.x = x;
            this.y = y;
            this.w = w;
            this.h = h;
            this.c = c;

            this.se_tocan = function (target) { 

                if(this.x < target.x + target.w &&
                   this.x + this.w > target.x && 
                   this.y < target.y + target.h && 
                   this.y + this.h > target.y)
                {
                    return true;  
                }  
            };

            this.dibujar = function(ctx){

                ctx.fillStyle = this.c;
                ctx.fillRect(this.x,this.y,this.w,this.h);
                ctx.strokeRect(this.x,this.y,this.w,this.h);
            }
        }

        function random_rgba() {
            var o = Math.round, r = Math.random, s = 255;
            return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
        }

        function generateRandomInteger(max) {
            return Math.floor(Math.random() * max) + 1;
        }

    </script>
<link rel="stylesheet" type="text/css" href="/mazing.css">

<div id="maze_container"><!-- --></div>

<script src="/maze.js"></script>
<script>

  let Maze = new MazeBuilder(16, 12);
  Maze.placeKey();
  Maze.display("maze_container");

</script>
</body>
</html>












