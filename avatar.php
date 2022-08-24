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
        ctx.lineWidth = 2;
        // Color de línea
        ctx.fillStyle = "#f58f27";
        ctx.beginPath();
        ctx.arc(200,150,150,0,2*Math.PI);
        ctx.fill();
        ctx.closePath();
        //gorro fin
        //cara inicio
        ctx.fillStyle = "#cd622b";
        ctx.beginPath();
        ctx.arc(200,140,100,0,2*Math.PI);
        ctx.fill();
        ctx.closePath();
        ctx.scale(0.76, 0.85);
        ctx.beginPath();
        ctx.fillStyle = "#fbd9b1";
        ctx.arc(265, 165, 100, 0, Math.PI*2, false);
        ctx.fill();
        ctx.closePath();
        //inicio ojos
         ctx.beginPath();
        //ctx.ellipse(210, 150, 40, 65, Math.PI / 4, 0, 2 * Math.PI);
        ctx.ellipse(218, 155, 35, 60, Math.PI * .30, 2.25, Math.PI * 2.50);
        ctx.lineWidth = 4;
        ctx.strokeStyle = "#ead8c0";
        ctx.fillStyle = "white";
        ctx.stroke();
        ctx.fill();
        ctx.closePath();
        //ojo derecho
        ctx.beginPath();

        ctx.ellipse(325, 155, 35, 60, Math.PI * 1.70, 2.03, Math.PI * 2.10);
        ctx.lineWidth = 4;
        ctx.strokeStyle = "#ead8c0";
        ctx.fillStyle = "white";
        ctx.stroke();
        ctx.fill();
        ctx.closePath();
        //INICIO PUPILAS
        ctx.beginPath();
        ctx.fillStyle = "black";
        ctx.arc(230,155,10,0,2*Math.PI);
        ctx.fill();
        ctx.closePath();
        ctx.beginPath();
        ctx.fillStyle = "black";
        ctx.arc(310,155,10,0,2*Math.PI);
        ctx.fill();
        ctx.closePath();
        //FINAL PUPILAS
        //final ojos
        //cara final
        //cuerpo inicio
         ctx.beginPath();
        ctx.moveTo(123, 300);
        ctx.bezierCurveTo(60,440, 80,440, 80,440);
        ctx.lineTo(140,440);
        ctx.lineTo(140,480);
        ctx.lineTo(440,480);
        ctx.lineTo(440,440);
        ctx.lineTo(480,440);
        ctx.bezierCurveTo(500,440, 510,400, 410,300);
        ctx.fillStyle = "#f58f27";
        ctx.strokeStyle = "#f58f27";
        ctx.fill();
        //ctx.fillStyle = "#e0b390";
        //ctx.fill();
        ctx.closePath();    
        ctx.stroke();
        ctx.beginPath();
        ctx.moveTo(170, 483);
        ctx.lineTo(170,550);
        ctx.lineTo(410,550);
        ctx.lineTo(410,483);
        ctx.fillStyle = "#cd622b";
        ctx.strokeStyle = "#cd622b";
        ctx.closePath();  
        ctx.fill();
        ctx.stroke();
        ctx.beginPath();
        ctx.moveTo(140, 550);
        ctx.lineTo(450,550);
        ctx.closePath();
        ctx.lineWidth = 10;
        ctx.strokeStyle = "black";
        ctx.stroke();
        //cuerpo final
        //manos k no tengo tiempo
        ctx.fillStyle = "#56815c";
        ctx.lineWidth = 2;
        ctx.beginPath();
        ctx.arc(100,455,40,0,2*Math.PI);
        ctx.fill();
        ctx.closePath();
        ctx.beginPath();
        ctx.arc(118,445,20,0,2*Math.PI);
        ctx.fill();
        ctx.strokeStyle = "black";
        ctx.stroke();
        ctx.closePath();
//      mano derecha
        ctx.beginPath();
        ctx.arc(480,455,40,0,2*Math.PI);
        ctx.fill();
        ctx.closePath();
        ctx.beginPath();
        ctx.arc(463,445,20,0,2*Math.PI);
        ctx.fill();
        ctx.strokeStyle = "black";
        ctx.stroke();
        ctx.closePath();
        //anos
        //lineas chamarra
        ctx.beginPath();
        ctx.moveTo(280,310)
        ctx.lineTo(280,480)
        ctx.strokeStyle = "black";
        ctx.stroke();
        ctx.closePath();
        ctx.beginPath();
        ctx.moveTo(160,340)
        ctx.lineTo(135,430)
        ctx.strokeStyle = "black";
        ctx.stroke();
        ctx.closePath();
        ctx.beginPath();
        ctx.moveTo(390,340)
        ctx.lineTo(440,430)
        ctx.strokeStyle = "black";
        ctx.stroke();
        ctx.closePath();
        //lineas chamarra fin
/***************
*************
***********/

        // Color de relleno
       /* ctx.fillStyle = "BLACK";
        ctx.beginPath();
        //linea superior hat
        ctx.moveTo(150,50);
        ctx.lineTo(300,50);
        ctx.lineTo(320,120);
        ctx.lineTo(120,120);
        ctx.closePath();
        ctx.stroke();
        // Lo rellenamos
        ctx.fill();
        ctx.beginPath();
        ctx.scale(2,1);
        //           x, y, radiusX, radiusY, rotation, startAngle, endAngle
        ctx.ellipse(110, 120, 70, 15, Math.PI * 2, 0, 1* Math.PI);
        ctx.stroke();
        ctx.fill();
        ctx.closePath();
        //fin sombrero
        //inicio cara
        ctx.beginPath();
        ctx.moveTo(60, 130);
        ctx.bezierCurveTo(100,520, 160,200, 160,130);
        ctx.stroke();
        //ctx.fillStyle = "#e0b390";
        //ctx.fill();
        ctx.closePath();
        //fin cara
        //inicio arrugas
        ctx.beginPath()
       // ctx.strokeStyle = "#e7aa7a";
        ctx.moveTo(90,140);
        ctx.lineTo(130,140);
        ctx.moveTo(80,150);
        ctx.lineTo(140,150);
        ctx.moveTo(90,160);
        ctx.lineTo(130,160);
        ctx.stroke();
        ctx.closePath();
        //fin arrugas
        //inicio lentes
        ctx.beginPath();
        ctx.moveTo(65,170);
        ctx.lineTo(157,170);
        ctx.lineTo(155, 195);
        //ctx.bezierCurveTo(70,180, 160,200, 157,170);
        ctx.stroke();
        //ctx.fillStyle = "#e0b390";
        //ctx.fill();
        ctx.closePath();
        //fin lentes
*/
    </script>
    </body>
</html>