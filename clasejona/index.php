<?php
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>
           Canvas
        </title>
        <style type="text/css">
            canvas{
                margin: auto;
            }
        </style>        
    </head>
    <body >
        <canvas id="micanvas" width="600" height="600">
            Canvas no es soportado por su navegador
        </canvas>
        <script type="text/javascript">
       
        var cv = document.getElementById('micanvas');
        var ctx = cv.getContext('2d');
        var color = "red";
        var fig = "arc";
        // Actividad 1
        
      //  ctx.fillStyle="blue"
       // ctx.fillRect(30,30,50,50);
        /*ctx.fillStyle="red"
        ctx.fillRect(70,70,50,50);
        ctx.fillStyle="rgb(200,0,50,.5)"
        ctx.fillRect(110,110,50,50);
        */

        // Actividad 2
       /*
        ctx.moveTo(230,150);
        ctx.lineTo(250,250);
        ctx.stroke();
        ctx.fillStyle="pink";
        ctx.moveTo(200,250);
        ctx.lineTo(250,300);
        ctx.lineTo(220,200);
        ctx.lineTo(200,250);
        ctx.stroke();
        ctx.fill();
        */

        //Actividad 3
        /*
        ctx.fillStyle="blue"
        ctx.fillRect(30,30,50,50);
        ctx.fillStyle="red"
        ctx.fillRect(70,70,50,50);
        ctx.fillStyle="rgb(200,0,50,.5)"
        ctx.fillRect(110,110,50,50);
        ctx.fillStyle="red"
        ctx.beginPath();
        ctx.arc(250,100,50,0,2*Math.PI);
        ctx.stroke();
        ctx.beginPath();
        ctx.arc(360,100,50,0,2*Math.PI);
        ctx.stroke();
        ctx.fill();
        //linea izquierda
        ctx.moveTo(20,10);
        ctx.lineTo(20,250);
        ctx.stroke();
        //linea derecha
        ctx.moveTo(420,10);
        ctx.lineTo(420,250);
        ctx.stroke();
         //linea superior marco
        ctx.moveTo(20,10);
        ctx.lineTo(420,10);
        ctx.stroke();
        //linea superior 
        ctx.moveTo(0,5);
        ctx.lineTo(425,5);
        ctx.stroke();
        */

        //ctx.fill();

        //Actividad 4
        //linea izquierda
        /*
        ctx.moveTo(20,10);
        ctx.lineTo(20,250);
        ctx.stroke();
        //texto
        ctx.font = "30px Arial";
        ctx.fillText("hola mundo",50,30);
        ctx.strokeText("hola mundo",50,60);
        //linea derecha
        ctx.moveTo(420,10);
        ctx.lineTo(420,250);
        ctx.stroke();
        //figura
         ctx.moveTo(200,150);
        ctx.lineTo(250,200);
        ctx.lineTo(220,100);
        ctx.lineTo(200,150);
        ctx.stroke();
        //linea arriba triangulo
        ctx.moveTo(225,100);
        ctx.lineTo(280,200);
        ctx.stroke();*/
       // Actividad 7 y 8
       /*
        var grd = ctx.createLinearGradient(0,0,200,0);
        
        var grd = ctx.createLinearGradient(100,10,40,90,60);
        grd.addColorStop(0,"black");
        grd.addColorStop(0.5,"green");
        grd.addColorStop(1,"yellow");
        ctx.fillStyle = grd;
        ctx.fillRect(100, 100, 200, 80);
        */

        //Actividad 9
        /*
        var img = document.getElementById("imagen");
        ctx.drawImage(img, 10, 10);
        */

        //Actividad Click
        /*
        cv.addEventListener('click', function(e){
            ctx.beginPath();
            ctx.arc(e.offsetX-20,e.offsetY-20,50,0,2*Math.PI);
            ctx.fill();
            
            //ctx.fillRect(20, 20, 150, 100);
        });*/

        // actividad click con mouse over
        /*
          cv.addEventListener('click', function(e){
            ctx.fillStyle= color;
            ctx.beginPath();
            ctx.arc(e.offsetX-20,e.offsetY-20,50,0,2*Math.PI);
            ctx.fill();
            
            //ctx.fillRect(20, 20, 150, 100);
        });
        
        cv.addEventListener('mouseover', function(e){
            color = random_rgba();
        });
        //trabajo 8
        cv.addEventListener('mouseout', function(e){
            fig = (fig=='arc')?'rec':'arc';
        });
        function random_rgba() {
            var o = Math.round, r = Math.random, s = 255;
            return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
        }*/


        // actividad click con mouse over y out
        /*
        cv.addEventListener('click', function(e){
            ctx.fillStyle= color;
            if(fig=='rec'){
                ctx.fillRect(e.offsetX-20,e.offsetY-20,40,40);
                ctx.fillStyle="rgb(200,0,50,.5)";
            }
            else{
                ctx.beginPath();
                ctx.arc(e.offsetX-20,e.offsetY-20,50,0,2*Math.PI);
                ctx.fill();
            }
        });
        
        cv.addEventListener('mouseover', function(e){
            color = random_rgba();

        });
        //trabajo 8
        cv.addEventListener('mouseout', function(e){
            fig = (fig=='arc')?'rec':'arc';

        });
        function random_rgba() {
            var o = Math.round, r = Math.random, s = 255;
            return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
        }*/
        //actividad 10
        /*
        cv.addEventListener('mousemove', function(e){
            ctx.fillRect(e.offsetX-20,e.offsetY-20,50,50);
        });*/
        //actividad 16
        /*
        var pressed = false;
        cv.addEventListener('mousemove', function(e){
            if(pressed){
                ctx.fillRect(e.offsetX-20,e.offsetY-20,50,50);
            }
        });
        cv.addEventListener('mouseup', function(e){
            pressed =true;
        });
        cv.addEventListener('mousedown', function(e){
            pressed =false;
        });
        */
       //actividad 17
       /*
       var super_x=240, super_y=240;
       function paint(){
            ctx.fillRect(super_x,super_y,50,50);
       }
       document.addEventListener('keydown', function(e){                    
            if (e.keyCode == '38') {
                super_y-=10;
            }
            else if (e.keyCode == '40') {
                super_y+=10;
            }
            else if (e.keyCode == '37') {
                super_x-=10;
            }
            else if (e.keyCode == '39') {
                super_x+=10;
            }
            paint();
        });
        */


        /**********************************
         * *********************
         * 
         */
        function random_rgba() {
    		var o = Math.round, r = Math.random, s = 255;
    		return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
		}
		var cv = null;
		var ctx = null;
		var super_x = 240;
		var super_y = 240;
        var player1= null;
		function start(){
			cv = document.getElementById('micanvas');
			ctx = cv.getContext('2d');
            player1 = new Cuadrado(super_x,super_y,40,40,'red');
			paint();
		}

		function paint(){
			
			window.requestAnimationFrame(paint)

			ctx.fillStyle = "white";
			ctx.fillRect(super_x-15, super_y-15, 100, 100);
			ctx.fillRect(super_x+15, super_y+15, 100, 100);

			//ctx.fillStyle = "blue";
			ctx.fillStyle = random_rgba();
			ctx.fillRect(super_x, super_y, 60, 60);
			ctx.strokeRect(super_x, super_y, 60, 60);

			update();
		}

		function update(){
			super_x += 10;
            super_y+=10;
			if(super_x>500){
				super_x = 0;
			}
            if(super_y>500){
				super_y = 0;
			}
		}

		window.addEventListener('load',start)

		window.requestAnimationFrame = (function () {
    		return window.requestAnimationFrame ||
        		window.webkitRequestAnimationFrame ||
        		window.mozRequestAnimationFrame ||
	        	function (callback) {
	            	//window.setTimeout(callback, 5);
	        	};
		}());
		
        function Cuadrado(x,y,w,c,h){
            this.x=x;
            this.y=y;
            this.w=w;
            this.c=c;
            this.h=h;
                this.dibujar=function(ctx){
                    ctx.fillRect(this.x,this.y,this.w,this.h);
                    ctx.strokeRect(this.x,this.y,this.w,this.h);
                }
        }

    </script>
    </body>
</html>