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
        <canvas id="micanvas" width="500" height="500">
            Canvas no es soportado por su navegador
        </canvas>
        <script type="text/javascript">
        var cv = document.getElementById('micanvas');
        var ctx = cv.getContext('2d');

        
        // Actividad 1
        /*
        ctx.fillStyle="blue"
        ctx.fillRect(30,30,50,50);

        ctx.fillStyle="red"
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
        ctx.stroke();
    </script>
    </body>
</html>