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
        ctx.strokeStyle = "#212121";
        // Color de relleno
        ctx.fillStyle = "BLACK";
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

    </script>
    </body>
</html>