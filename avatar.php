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
        ctx.beginPath();
        //linea superior hat
        ctx.moveTo(150,50);
        ctx.lineTo(300,50);
        ctx.moveTo(150,50);
        ctx.lineTo(120,120);
        ctx.moveTo(300,50);
        ctx.lineTo(320,120);
        ctx.moveTo(120,120);
        ctx.lineTo(320,120);
        ctx.closePath();
        ctx.fillStyle = "#1565C0";
        ctx.fill();
        ctx.stroke();
       /* ctx.beginPath();
        ctx.scale(2,1);
        //           x, y, radiusX, radiusY, rotation, startAngle, endAngle
        ctx.ellipse(110, 120, 70, 15, Math.PI * 2, 0, 1* Math.PI);
        ctx.stroke();
        ctx.fill();
        ctx.closePath();*/
    </script>
    </body>
</html>