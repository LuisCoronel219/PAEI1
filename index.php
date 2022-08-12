<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       canvas{
        backgrund-color:green;
       }
    </style>
</head>
<body>
    <canvas id="mycanvas" width="1000" height="1000">
        tu naegador no soporta canvas
        </canvas>
    <script text="text/javascript">
       var cv = document.getElementById("mycanvas");
        var ctx= cv.getContext('2d');
        ctx.strokeStyle="Red";
       /* ctx.strokeRect(10,10,50,50);

        ctx.fillStyle="rgb(100,0,19)";
        ctx.fillRect(10,10,50,55);
        ctx.fillStyle="rgb(150,5,40)";
        ctx.fillRect(50,50,50,55);
        ctx.fillStyle="Red";
        ctx.fillRect(100,100,50,55);*/

        //lineas
        //empieza
       /* ctx.moveTo(0,0);
        //termina
        ctx.lineTo(70,70);
        ctx.stroke();
        //trasar lineas
        //ctx.stroke();
       ctx.strokeStyle="Black";
        ctx.moveTo(100,100)
        ctx.lineTo(150,150);
       ctx.lineTo(150,100);
        ctx.lineTo(100,100);
        ctx.fill();*/

        //arc
        
      /* ctx.beginPath();
        ctx.arc(200,200,50,0,2*Math.PI);
       ctx.stroke();
       ctx.beginPath();
        ctx.arc(350,200,50,0,2*Math.PI);
       ctx.fill();
       */

       //text

       ctx.font="30px Arial";
       ctx.fillText("Luis Coronel",150,30);

       ctx.strokeText("Otro Gato",150,80);

       

    </script>    
    
</body>
</html>